<?php require 'verifica_logado.php'; ?>
<?php include("conn/configuracao.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <title>Gerenciador AsaLight - Controle de Vendas</title>
        <link rel="stylesheet" href="css/header_style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/corpo_style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/corpo_controle_vendas_style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/footer_style.css" type="text/css" media="all" />
    </head>
    <body>
        <div class="header">
            <div id="logo">
                <img src="imagens/logo.png" />
            </div>
            <div id="btn_home">
                <a href="home.php" title="Home"><img src="imagens/btn_home.png" border="0" /></a>
            </div>
            <div id="btn_logoff">
                <a href="fechar-sessao.php" title="Sair do Sistema"><img src="imagens/btn_logoff.png" border="0" /></a>
            </div>
        </div>
        <div class="linha_header"></div>
        <div class="corpo">
            <?php include("menu_lateral.php") ?>
            <div id="conteudo_centro">
                <div id="faixa_corpo">
                    <img src="imagens/faixa_controle_vendas.png" />
                </div>
                <div id="msg">
                    Visualize abaixo todos os movimentos de compra j&aacute; efetuados no site.<br/>
                    Caso o status esteje como conclu&iacute;do a compra foi finalizada com sucesso.   
                </div>
                <div id="form_">
                    <table>
                        <tr>
                            <td><strong>Movimentos</strong> <font style="font-size: 11px;">(vendas)</font></td>
                        </tr>
                    </table>
                </div>
                <div id="conteudo">
                    <?php 
                        
                        //SELECT pst.id as id, pst.CliNome as cliente_nome, pst.DataTransacao as data_transacao, pst.TipoPagamento as tipo_pagamento, pst.StatusTransacao as status_transacao, psp.ProdDescricao as produto FROM PagSeguroTransacoes pst 
                        //LEFT JOIN PagSeguroProdutos psp ON pst.TransacaoID = psp.TransacaoID ORDER BY pst.id DESC
                    
                        $campos_query = "pst.id as id, pst.CliNome as cliente_nome, pst.DataTransacao as data_transacao, pst.TipoPagamento as tipo_pagamento, pst.StatusTransacao as status_transacao, psp.ProdDescricao as produto";
                        $final_query  = "FROM PagSeguroTransacoes pst LEFT JOIN PagSeguroProdutos psp ON pst.TransacaoID = psp.TransacaoID ORDER BY pst.id DESC";

                        // Maximo de registros por pagina
                        $maximo = 8;

                        // Declaração da pagina inicial
                        $pagina = $_GET["p"];
                        if($pagina == "") {
                        $pagina = "1";
                        }

                        // Calculando o registro inicial
                        $inicio = $pagina - 1;
                        $inicio = $maximo * $inicio;

                        // Conta os resultados no total da query
                        $strCount = "SELECT COUNT(*) AS 'num_registros' $final_query";
                        $query = mysql_query($strCount);
                        $row = mysql_fetch_array($query);
                        $total = $row["num_registros"];

                        $recuperarProduto = mysql_query("SELECT $campos_query $final_query LIMIT $inicio,$maximo");
                        
                        echo "<table>";
                        while($array = mysql_fetch_array($recuperarProduto)){
                            $id = $array['id'];
                            $cliente_nome = $array['cliente_nome'];
                            $data_transacao = $array['data_transacao'];
                            $tipo_pagamento = $array['tipo_pagamento'];
                            $status_transacao = $array['status_transacao'];
                            $produto = $array['produto'];
                            
                            $data_transacao_format = strftime("%d/%m/%Y %H:%M:%S", strtotime($data_transacao));
                            
                            echo "<tr>";
                            echo "<td width='60'>$id"."</td>";
                            echo "<td width='120'>$cliente_nome"."</td>";
                            echo "<td width='130'>$data_transacao_format</td>";
                            echo "<td width='120'>$tipo_pagamento</td>";
                            echo "<td width='90'><strong>$status_transacao</strong></td>";
                            echo "<td width='110'>$produto</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        
                        echo "<div id='paginador'>";
					
                        $menos = $pagina - 1;
                        $mais = $pagina + 1;

                        $pgs = ceil($total / $maximo);

                        if($pgs > 1 ) {
                            echo "<br />";

                            if($menos >= 0) {

                                    $i = $_GET['p'] - 1;

                                    echo "<a title='In&iacute;cio' style='text-decoration:none;' href=http://".$_SERVER['SERVER_NAME']."/gerenciador-asalight/controle-vendas.php?p=>in&iacute;cio </a>";
                            }
                            if($menos >= 1) {

                                    $i = $_GET['p'] - 1;

                                    echo "<a title='Anterior' style='text-decoration:none;' href=http://".$_SERVER['SERVER_NAME']."/gerenciador-asalight/controle-vendas.php?p=".($i).">anterior </a>";
                            }
                        for($i=$pagina; $i<$pagina+3; $i++) {
                                if($i != $pagina) {
                                        echo " <a href="."http://".$_SERVER['SERVER_NAME']."/gerenciador-asalight/controle-vendas.php?p=".($i).">$i</a> <font color='#333'>|</font>";
                                        //echo " <a href="."http://".$_SERVER['SERVER_NAME']."/produto.php"."?n=".$nome_categoria."&p=".($i).">$i</a> |";
                                } else {
                                        echo " <strong>".$i."</strong> <font color='#333'>|</font> ";
                                }
                                if($i == $pgs){
                                        break;
                                }
                        }
                        if($mais <= $pgs) {

                                if($_GET['p'] == 0){
                                        $_GET['p'] = 1;	
                                }

                                $i = $_GET['p'] + 1;

                                echo " <a title='Pr&oacute;xima' style='text-decoration:none;' href="."http://".$_SERVER['SERVER_NAME']."/gerenciador-asalight/controle-vendas.php"."?p=".($i)."> pr&oacute;xima</a>";
                        }
                        if(($mais >= $pgs) || ($mais <= $pgs)) {

                                echo " <a title='Ultimo' style='text-decoration:none;' href="."http://".$_SERVER['SERVER_NAME']."/gerenciador-asalight/controle-vendas.php"."?p=".($pgs)."> &uacute;ltimo</a>";
                        }
                    }
				
                    echo "</div>";
                        
                    ?>
                </div>
                <div id="link_pagseguro">
                    <a href="https://pagseguro.uol.com.br/" target="_blank">Acesse aqui seu PagSeguro</a>
                </div>
            </div>
        </div>
        <div class="max-footer">
            <div class="footer">
                <div id="txt_gerenciador">
                    Sistema de Gerenciamento AsaLight
                </div>
            </div>
        </div>
    </body>
</html>
