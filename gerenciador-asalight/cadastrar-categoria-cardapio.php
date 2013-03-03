<?php require 'verifica_logado.php'; ?>
<?php include("conn/configuracao.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Gerenciador AsaLight - Cadastrar Categoria Card&aacute;pio</title>
        <link rel="stylesheet" href="css/header_style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/corpo_style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/corpo_cadastrar_categoria_cardapio_style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/footer_style.css" type="text/css" media="all" />
        <script type="text/javascript">
            function imgLoading(){
		document.getElementById('img_loading').style.display = "run-in";
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
                    <strong>Nova Categoria Card&aacute;pio</strong>
                </div>
                <div id="msg">
                    Preencha os campos abaixo para cadastrar uma nova categoria no card&aacute;pio do site.<br/>
                    O &uacute;nico campo &eacute; de preenchimento obrigat&oacute;rio.
                </div>
                <div id="form_">
                    <form action="gerenciador.asalight.controller/ControleCardapioCategoria.php" method="post" onsubmit="imgLoading()">
                    <table>
                        <tr>
                            <td><strong>Nova Categoria Card&aacute;pio</strong></td>
                            <td><input type="text" name="nome_cardapio_categoria" class="caixa" /></td>
                        </tr>
                        <tr>
                            <td><strong>Descri&ccedil;&atilde;o Categoria</strong></td>
                            <td><textarea name="descricao_cardapio_categoria" class="caixa_area"></textarea></td>
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
