<?php require 'verifica_logado.php'; ?>
<?php include("conn/configuracao.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Gerenciador AsaLight - Atualizar Card&aacute;pio</title>
        <link rel="stylesheet" href="css/header_style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/corpo_style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/corpo_cadastrar_cardapio_style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/footer_style.css" type="text/css" media="all" />
        <script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.MultiFile.js"></script>
        <script type="text/javascript" src="js/jquery.maskMoney.js"></script>
        <script type="text/javascript" src="js/jquery.limit-1.2.source.js"></script>
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
                    <strong>Atualizar Card&aacute;pio</strong>
                </div>
                <div id="msg">
                    Preencha os campos abaixo para atualizar este card&aacute;pio no site.<br/>
                    Mantenha o preenchimento caso não deseje alterar.
                </div>
                <div id="form_">
                    <?php
                    
                    if(isset($_GET['c'])){$id = $_GET['c'];}
                    
                    $query = mysql_query("SELECT * FROM cardapio_produto WHERE id = $id");
                    
                    while($array = mysql_fetch_array($query)){
                        $nome_cardapio_produto = $array['nome_cardapio_produto'];
                        $descricao = $array['descricao'];
                        $preco = $array['preco'];
                        $quant_caloria = $array['quant_caloria'];
                        $destaque = $array['destaque'];
                        $id_cardapio_categoria = $array['id_cardapio_categoria'];
                    }
                    
                    echo "<form action='gerenciador.asalight.controller/AtualizarCardapioProduto.php' method='post' onsubmit='imgLoading()' enctype='multipart/form-data'>";
                        echo "<input type='hidden' name='upload' value='ok'/>";
                        echo "<input type='hidden' name='id_produto' value='$id'/>";
                    echo "<table>";
                        echo "<tr>";
                           echo "<td><strong>Card&aacute;pio</strong></td>";
                           echo "<td><input type='text' name='nome_cardapio_produto' value='$nome_cardapio_produto' class='caixa' /></td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td><strong>Categoria</strong></td>";
                            echo "<td>";
                                
                                $buscar_categoria = mysql_query("SELECT * FROM cardapio_categoria ORDER BY nome_cardapio_categoria ASC");
                                
                                echo "<select name='id_cardapio_categoria' class='selecione'>";
                                while($array = mysql_fetch_array($buscar_categoria)){
                                    $id = $array['id'];
                                    $nome_cardapio_categoria = $array['nome_cardapio_categoria'];
                                    if($id == $id_cardapio_categoria){
                                        echo "<option value='$id' selected>$nome_cardapio_categoria</option>";
                                    }else{
                                        echo "<option value='$id'>$nome_cardapio_categoria</option>";    
                                    }
                                    
                                }
                                echo "</select>";
                                
                            echo "</td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td><strong>Pre&ccedil;o:</strong></td>";
                            echo "<td><input type='text' name='preco' class='caixa' id='real' value='$preco' style='width:100px;' /></td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td><strong>Quantidade Cal&oacute;rica</strong></td>";
                            echo "<td><input type='text' name='quant_caloria' class='caixa' value='$quant_caloria' style='width:100px;' /></td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td><strong>Destaque:</strong></td>";
                            echo "<td><input type='radio' name='destaque' value='sim' title='Em exibição na página inicial' />Sim <input type='radio' name='destaque' value='nao' title='Não exibido na página inicial' />N&atilde;o</td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td><strong>Imagens:</strong></td>";
                            echo "<td><input type='file' name='img[]' id='file' class='multi' maxlength='4' accept='jpeg|jpg|png|gif|bmp' /></td>";
                        echo "<tr>";
                            echo "<td><strong>Descri&ccedil;&atilde;o:</strong></td>";
                            echo "<td><textarea name='descricao' class='caixa_area'>$descricao</textarea></td>";
                            echo "<td><span id='left'></span> caracteres</td>";
                        echo "</tr>";
                    echo "</table>";
                        echo "<input type='submit' value='Atualizar' class='btn_cadastro' style='margin-left: 562px;' />";
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

