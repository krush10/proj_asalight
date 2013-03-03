<?php require 'verifica_logado.php'; ?>
<?php include("conn/configuracao.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Gerenciador AsaLight - Controlar Programa Alimentar</title>
        <link rel="stylesheet" href="css/header_style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/corpo_style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/corpo_controlar_produto_cardapio_style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/footer_style.css" type="text/css" media="all" />
        <script type="text/javascript">
            function imgLoading(){
		document.getElementById('img_loading').style.display = "run-in";
            }
            
            function excluirPrograma(c){
		if (confirm("Tem certeza que deseja excluir este programa ?")){    
		  location.href="excluir-programa.php?i="+c;   
		} 
            }
            
        </script>
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
                    <img src="imagens/faixa_controle_programa_alimentar.png" />
                </div>
                <div id="nome_categoria">
                    <strong>Alterar/Excluir Programa</strong>
                </div>
                <div id="msg">
                    Visualize abaixo os programas alimentares j&aacute; cadastrados no site.<br/>
                    Clicando no bot&atilde;o voc&ecirc; poder&aacute; editar/excluir um programa.
                </div>
                <div id="form_">
                    <table>
                        <tr>
                            <td><strong>Programa Alimentar</strong></td>
                        </tr>
                    </table>
                </div>
                <div id="conteudo">
                    <?php 
                    
                        //$recuperarProduto = mysql_query("SELECT id, nome_programa_alimentar, descricao FROM programa_alimentar WHERE exibir='sim' ORDER BY id DESC");
                        
                        $campos_query = "id, nome_programa_alimentar, descricao";
                        $final_query  = "FROM programa_alimentar WHERE exibir='sim' ORDER BY id DESC";

                        // Maximo de registros por pagina
                        $maximo = 12;

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
                            $nome_programa_alimentar = $array['nome_programa_alimentar'];
                            $nome_programa_alimentar_format = substr($nome_programa_alimentar, 0, 11);
                            $descricao = $array['descricao'];
                            $descricao_format = substr($descricao, 0, 50);
                            
                            echo "<tr>";
                            echo "<td width='154'><font title='$nome_programa_alimentar'>$nome_programa_alimentar_format"."[...]</font>"."</td>";
                            echo "<td width='338'>$descricao_format"."[...]"."</td>";
                            echo "<td><a href='atualizar-programa-alimentar.php?c=$id'><img src='imagens/editar.png' border='0' title='Editar programa' /></a></td>";
                            echo "<td><a href='javascript:void(0)' onclick='excluirPrograma($id)'><img src='imagens/delete.png' border='0' title='Excluir programa' /></a></td>";
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

                                    echo "<a title='In&iacute;cio' style='text-decoration:none;' href=http://".$_SERVER['SERVER_NAME']."/gerenciador-asalight/controlar-programa-alimentar.php?p=>in&iacute;cio </a>";
                            }
                            if($menos >= 1) {

                                    $i = $_GET['p'] - 1;

                                    echo "<a title='Anterior' style='text-decoration:none;' href=http://".$_SERVER['SERVER_NAME']."/gerenciador-asalight/controlar-programa-alimentar.php?p=".($i).">anterior </a>";
                            }
                        for($i=$pagina; $i<$pagina+3; $i++) {
                                if($i != $pagina) {
                                        echo " <a href="."http://".$_SERVER['SERVER_NAME']."/gerenciador-asalight/controlar-programa-alimentar.php?p=".($i).">$i</a> <font color='#333'>|</font>";
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

                                echo " <a title='Pr&oacute;xima' style='text-decoration:none;' href="."http://".$_SERVER['SERVER_NAME']."/gerenciador-asalight/controlar-programa-alimentar.php"."?p=".($i)."> pr&oacute;xima</a>";
                        }
                        if(($mais >= $pgs) || ($mais <= $pgs)) {

                                echo " <a title='Ultimo' style='text-decoration:none;' href="."http://".$_SERVER['SERVER_NAME']."/gerenciador-asalight/controlar-programa-alimentar.php"."?p=".($pgs)."> &uacute;ltimo</a>";
                        }
                    }
				
                    echo "</div>";
                        
                    ?>
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
