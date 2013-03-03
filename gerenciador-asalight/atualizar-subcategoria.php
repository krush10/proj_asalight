<?php require 'verifica_logado.php'; ?>
<?php include("conn/configuracao.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Gerenciador AsaLight - Atualizar SubCategoria</title>
        <link rel="stylesheet" href="css/header_style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/corpo_style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/corpo_cadastrar_subcategoria_style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/footer_style.css" type="text/css" media="all" />
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.limit-1.2.source.js"></script>
        <script type="text/javascript">
            function imgLoading(){
		document.getElementById('img_loading').style.display = "run-in";
            }
        </script>
        <script type="text/javascript">
            $(document).ready(function(){
		$('textarea').limit('496','#left');
            });
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
                    <img src="imagens/faixa_controle_preparo_alimentos.png" />
                </div>
                <div id="nome_categoria">
                    <strong>Atualizar Subcategoria</strong>
                </div>
                <div id="msg">
                    Preencha o campo abaixo para atualizar esta subcategoria no site.<br/>
                    Preencha os campo abaixo caso deseje efetuar a altera&ccedil;&atilde;o.
                </div>
                <div id="form_">
                    <?php
                    
                    if(isset($_GET['c'])){$id = $_GET['c'];}
                    
                    $query = mysql_query("SELECT * FROM cardapio_subcategoria WHERE id = $id");
                    
                    while($array = mysql_fetch_array($query)){
                        $nome_subcategoria = $array['nome_subcategoria'];
                        $id_categoria = $array['id_categoria'];
                    }
                    
                    echo "<form action='gerenciador.asalight.controller/AtualizarSubCategoria.php' method='post' onsubmit='imgLoading()'>";
                    echo "<table>";
                            echo "<input type='hidden' name='id_subcategoria' value='$id'/>";
                        echo "<tr>";
                            echo "<td><strong>Nome SubCategoria</strong></td>";
                            echo "<td><input type='text' name='nome_subcategoria' value='$nome_subcategoria' class='caixa'/></td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td><strong>Categoria</strong></td>";
                            echo "<td>";
                                
                                $query = mysql_query("SELECT * FROM cardapio_categoria");
                                
                                echo "<select name='id_categoria' class='selecione'>";
                                while($array = mysql_fetch_array($query)){
                                    $id = $array['id'];
                                    $nome_cardapio_categoria = $array['nome_cardapio_categoria'];
                                    
                                    if($id == $id_categoria){
                                        echo "<option value='$id' selected>$nome_cardapio_categoria</option>";
                                    }else{
                                        echo "<option value='$id'>$nome_cardapio_categoria</option>";    
                                    }
                                }
                                echo "</select>";
                                
                            echo "</td>";
                        echo "</tr>";
                    echo "</table>";
                        echo "<input type='submit' value='Atualizar' class='btn_cadastro' />";
                    echo "</form>";
                    ?>
                </div>
                <div id="img_loading">
                    <img src="imagens/loading.gif" border="0" />
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

