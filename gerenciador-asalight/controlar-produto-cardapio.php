<?php require 'verifica_logado.php'; ?>
<?php include("conn/configuracao.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Gerenciador AsaLight - Controlar Produto Card&aacute;pio</title>
        <link rel="stylesheet" href="css/header_style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/corpo_style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/corpo_controlar_produto_cardapio_style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/footer_style.css" type="text/css" media="all" />
        <script type="text/javascript">
            function imgLoading(){
		document.getElementById('img_loading').style.display = "run-in";
            }
            
            function excluirProduto(c){
		if (confirm("Tem certeza que deseja excluir este produto ?")){    
		  location.href="excluir-produto.php?i="+c;   
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
                    <img src="imagens/faixa_controle_cardapio.png" />
                </div>
                <div id="nome_categoria">
                    <strong>Alterar/Excluir Card&aacute;pio</strong>
                </div>
                <div id="msg">
                    Visualize abaixo os produtos (card&aacute;pio) j&aacute; cadastrados no site.<br/>
                    Clicando no bot&atilde;o voc&ecirc; poder&aacute; editar/excluir um card&aacute;pio.
                </div>
                <div id="form_">
                    <table>
                        <tr>
                            <td><strong>Card&aacute;pio</strong> <font style="font-size: 11px;">(produtos)</font></td>
                        </tr>
                    </table>
                </div>
                <div id="escolha_categoria">
                    <?php
                        echo "<form action='controlar-produto-cardapio.php' method='post'>";
                            $buscarCategorias = mysql_query("SELECT id, nome_cardapio_categoria FROM cardapio_categoria");
                            echo "<select name='cat' onchange='this.form.submit();'>";
                            echo "<option value=''></option>";
                        while($array = mysql_fetch_array($buscarCategorias)){
                            $id = $array['id'];
                            $nome_cardapio_categoria = $array['nome_cardapio_categoria'];
                            echo "<option value='$id'>$nome_cardapio_categoria</option>";
                        }
                        echo "</select>";
                        echo "</form>";
                    ?>
                </div>
                <div id="conteudo">
                    <?php 
                        
                        if(isset($_POST['cat'])){
                            $id_cardapio_cat = $_POST['cat'];
                            $campos_query = "id, nome_cardapio_produto, preco, quant_caloria, destaque";
                            $final_query  = "FROM cardapio_produto WHERE id_cardapio_categoria = $id_cardapio_cat AND exibir = 'sim' ORDER BY id DESC";
                        }else if(isset($_GET['cat'])){
                            $id_cardapio_cat = $_GET['cat'];
                            $campos_query = "id, nome_cardapio_produto, preco, quant_caloria, destaque";
                            $final_query  = "FROM cardapio_produto WHERE id_cardapio_categoria = $id_cardapio_cat AND exibir = 'sim' ORDER BY id DESC";
                        }else{   
                            $campos_query = "id, nome_cardapio_produto, preco, quant_caloria, destaque";
                            $final_query  = "FROM cardapio_produto WHERE exibir = 'sim' ORDER BY id DESC";
                        }
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
                            $nome_cardapio_produto = $array['nome_cardapio_produto'];
                            $nome_cardapio_produto_format = substr($nome_cardapio_produto, 0, 26);
                            $preco = $array['preco'];
                            $quant_caloria = $array['quant_caloria'];
                            $destaque = $array['destaque'];
                            
                            echo "<tr>";
                            echo "<td width='180'>$nome_cardapio_produto_format"."[...]"."</td>";
                            echo "<td width='80'><strong>R$</strong> $preco</td>";
                            echo "<td width='110'>$quant_caloria <strong>Caloria(s)</strong></td>";
                            echo "<td width='110'>destaque? <strong>$destaque</strong></td>";
                            echo "<td><a href='atualizar-cardapio.php?c=$id'><img src='imagens/editar.png' border='0' title='Editar produto' /></a></td>";
                            echo "<td><a href='javascript:void(0)' onclick='excluirProduto($id)'><img src='imagens/delete.png' border='0' title='Excluir produto' /></a></td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        
                        echo "<div id='paginador'>";
			
                        if(isset($_POST['cat'])){
                            $cat = $_POST['cat']; 
                        }else if(isset($_GET['cat'])){
                            $cat = $_GET['cat']; 
                        }
                        
                        $menos = $pagina - 1;
                        $mais = $pagina + 1;

                        $pgs = ceil($total / $maximo);

                        if($pgs > 1 ) {
                            echo "<br />";

                            if($menos >= 0) {

                                    $i = $_GET['p'] - 1;
                                    if($cat != ""){
                                        echo "<a title='In&iacute;cio' style='text-decoration:none;' href=http://".$_SERVER['SERVER_NAME']."/testes/asalight/gerenciador-asalight/controlar-produto-cardapio.php?p=&cat=$cat>in&iacute;cio </a>";
                                    }else{
                                        echo "<a title='In&iacute;cio' style='text-decoration:none;' href=http://".$_SERVER['SERVER_NAME']."/testes/asalight/gerenciador-asalight/controlar-produto-cardapio.php?p=>in&iacute;cio </a>"; 
                                    }
                                    
                            }
                            if($menos >= 1) {

                                    $i = $_GET['p'] - 1;
                                    if($cat != ""){    
                                        echo "<a title='Anterior' style='text-decoration:none;' href=http://".$_SERVER['SERVER_NAME']."/testes/asalight/gerenciador-asalight/controlar-produto-cardapio.php?p=".($i)."&cat=$cat>anterior </a>";
                                    }else{
                                        echo "<a title='Anterior' style='text-decoration:none;' href=http://".$_SERVER['SERVER_NAME']."/testes/asalight/gerenciador-asalight/controlar-produto-cardapio.php?p=".($i).">anterior </a>";
                                    }
                                    
                            }
                        for($i=$pagina; $i<$pagina+3; $i++) {
                                if($i != $pagina) {
                                        if($cat != ""){ 
                                            echo " <a href="."http://".$_SERVER['SERVER_NAME']."/testes/asalight/gerenciador-asalight/controlar-produto-cardapio.php?p=".($i)."&cat=$cat>$i</a> <font color='#333'>|</font>";
                                        }else{
                                            echo " <a href="."http://".$_SERVER['SERVER_NAME']."/testes/asalight/gerenciador-asalight/controlar-produto-cardapio.php?p=".($i).">$i</a> <font color='#333'>|</font>";
                                        }
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
                                
                                if($cat != ""){ 
                                    echo " <a title='Pr&oacute;xima' style='text-decoration:none;' href="."http://".$_SERVER['SERVER_NAME']."/testes/asalight/gerenciador-asalight/controlar-produto-cardapio.php"."?p=".($i)."&cat=$cat> pr&oacute;xima</a>";
                                }else{
                                    echo " <a title='Pr&oacute;xima' style='text-decoration:none;' href="."http://".$_SERVER['SERVER_NAME']."/testes/asalight/gerenciador-asalight/controlar-produto-cardapio.php"."?p=".($i)."> pr&oacute;xima</a>"; 
                                }
                                
                        }
                        if(($mais >= $pgs) || ($mais <= $pgs)) {
                                if($cat != ""){ 
                                    echo " <a title='Ultimo' style='text-decoration:none;' href="."http://".$_SERVER['SERVER_NAME']."/testes/asalight/gerenciador-asalight/controlar-produto-cardapio.php"."?p=".($pgs)."&cat=$cat> &uacute;ltimo</a>";
                                }else{
                                    echo " <a title='Ultimo' style='text-decoration:none;' href="."http://".$_SERVER['SERVER_NAME']."/testes/asalight/gerenciador-asalight/controlar-produto-cardapio.php"."?p=".($pgs)."> &uacute;ltimo</a>";
                                }
                                
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
