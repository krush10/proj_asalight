<?php require 'verifica_logado.php'; ?>
<?php include("conn/configuracao.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Gerenciador AsaLight - Cadastrar Novo Card&aacute;pio</title>
        <link rel="stylesheet" href="css/header_style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/corpo_style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/corpo_cadastrar_cardapio_style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/footer_style.css" type="text/css" media="all" />
        <script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.MultiFile.js"></script>
        <script type="text/javascript" src="js/jquery.maskMoney.js"></script>
        <script type="text/javascript" src="js/jquery.limit-1.2.source.js"></script>
        <script type="text/javascript" src="js/buscar_sub_categoria.js"></script>
        <script type="text/javascript">
            function imgLoading(){
		document.getElementById('img_loading').style.display = "run-in";
            }
        </script>
        <script type="text/javascript">  
	 
	 $(document).ready(function() {   	 
		$("#real").maskMoney({showSymbol:true,symbol:"R$", decimal:",", thousands:".", allowZero:true});
	 });
		
        </script>
        <script type="text/javascript">
            $(document).ready(function(){
		$('textarea').limit('59','#left');
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
                    <img src="imagens/faixa_controle_cardapio.png" />
                </div>
                <div id="nome_categoria">
                    <strong>Novo Card&aacute;pio</strong>
                </div>
                <div id="msg">
                    Preencha os campos abaixo para cadastrar um novo card&aacute;pio no site.<br/>
                    Todos os campos neste formul&aacute;rio s&atilde;o de preenchimento obrigat&oacute;rio.
                </div>
                <div id="form_">
                    <form action="gerenciador.asalight.controller/ControleCardapioProduto.php" method="post" onsubmit="imgLoading()" enctype="multipart/form-data">
                        <input type="hidden" name="upload" value="ok"/>
                    <table>
                        <tr>
                            <td><strong>Card&aacute;pio</strong></td>
                            <td><input type="text" name="nome_cardapio_produto" class="caixa" /></td>
                        </tr>
                        <tr>
                            <td><strong>Categoria</strong></td>
                            <td>
                                <?php
                                
                                $buscar_categoria = mysql_query("SELECT * FROM cardapio_categoria ORDER BY nome_cardapio_categoria ASC");
                                
                                echo "<select name='id_cardapio_categoria' id='id_cardapio_categoria' class='selecione' onchange='carregaSubCategoria(this.value)'>";
                                while($array = mysql_fetch_array($buscar_categoria)){
                                    $id = $array['id'];
                                    $nome_cardapio_categoria = $array['nome_cardapio_categoria'];
                                    
                                    echo "<option value='$id'>$nome_cardapio_categoria</option>";
                                }
                                echo "</select>";
                                ?>
                            </td>
                        </tr>
                        <tr> 
                            <?php
                                echo "<div id='lista_sub_categoria' style='position:absolute; top:308px; margin-left:330px;'></div>";
                            ?>
                        </tr>
                        <tr>
                            <td><strong>Pre&ccedil;o:</strong></td>
                            <td><input type="text" name="preco" class="caixa" id="real" style="width:100px;" /></td>
                        </tr>
                        <tr>
                            <td><strong>Quantidade Cal&oacute;rica</strong></td>
                            <td><input type="text" name="quant_caloria" class="caixa" style="width:100px;" /></td>
                        </tr>
                        <tr>
                            <td><strong>Destaque:</strong></td>
                            <td><input type="radio" name="destaque" value="sim" title="Em exibição na página inicial" />Sim <input type="radio" name="destaque" value="nao" title="Não exibido na página inicial" />N&atilde;o</td>
                        </tr>
                        <tr>
                            <td><strong>Imagens:</strong></td>
                            <td><input type="file" name="img[]" id="file" class="multi" maxlength="4" accept="jpeg|jpg|png|gif|bmp" /></td>
                        </tr>
                        <tr>
                            <td><strong>Descri&ccedil;&atilde;o:</strong></td>
                            <td><textarea name="descricao" class="caixa_area"></textarea> </td>
                            <td><span id="left"></span> caracteres</td>
                        </tr>
                    </table>
                        <input type="submit" value="Cadastrar" class="btn_cadastro" />
                    </form>    
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

