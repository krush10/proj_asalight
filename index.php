<?php session_start(); ?>
<?php include("conn/configuracao.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">  
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AsaLight - Alimentos Congelados, Saúde, Bem-Estar</title>
<link rel="SHORTCUT ICON" href="img/icon.ico" />
<link rel="stylesheet" href="css/header_style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/menu_style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/corpo_home_style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/footer_style.css" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/cycle.js"></script>
<script type="text/javascript">  
	function limpar(campo){  
		if (campo.value == campo.defaultValue){  
			campo.value = "";
			campo.style.color = "#000000";  
		} 
	}  
	  
	function escrever(campo){  
		if (campo.value == ""){  
			campo.value = " Seu e-mail";
			campo.style.color = "#000000";  
		}  
	}
</script>	
<script type="text/javascript">
	$(document).ready(function() {
		$('#slideshow').cycle({
			fx: 'fade',
			prev: '#prev',
			next: '#next',
			cleartype:false,
			timeout: 5000
		});
	});
</script>
</head>
<body>
	<div class="header">
    	<div id="logo">
        	<a href="index.php"><img src="img/logo.png" border="0" alt="logo" /></a>
        </div>
        <div id="saiba_como">
        	<table>
            <tr>
            	<td><img src="img/icon_telefone.png" alt="icone_telefone" style="margin-top:-20px; *margin-top:-5px;" /></td>
            	<td><font style="font-size:12px; color:#707070;">Tel: <strong>21 9451 4421</strong>  |  <a href="mailto:contato@asalight.com.br" style="color:#707070;">contato@asalight.com.br</a></font>
                	<p style="margin-top:4px;"><a href="como-funciona-servico-asalight.php">Saiba como funciona o <strong>Serviços de Entregas da ASA Light</strong></a></p>
                </td>
        	</tr>
            </table>
        </div>
        <div id="social">
        	<table>
        	<tr>
            	<td><iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.asalight.com.br&amp;send=false&amp;layout=button_count&amp;width=120&amp;show_faces=true&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:80px; height:21px;" allowTransparency="true"></iframe></td>
                <td><iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.asalight.com.br&amp;send=false&amp;layout=button_count&amp;width=200&amp;show_faces=true&amp;font&amp;colorscheme=light&amp;action=recommend&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:120px; height:21px; margin-left:3px; *margin-left:0px; " allowTransparency="true"></iframe></td>
                <td><a href="#" title="Facebook" style="margin-left:0px; *margin-left:0px;"><img src="img/icon_face.jpg" border="0" alt="facebook" /></a></td>
        	</tr>
            </table>
        </div>
        <div id="linha_header_um">
        	<img src="img/linha_header.png" />
        </div>
        <div id="area_cadastre">
        	<table>
            	<tr>
                	<td><img src="img/txt_newsletter.png" alt="txt_cadastre" /></td>
                </tr>
                <tr><td></td></tr>
                <tr>
                	<td><input type="text" name="email" value=" Seu e-mail" onfocus="limpar(this);" onblur="escrever(this);" class="caixa_header" /></td>
                    <td><input type="image" src="img/btn_ok.png" width="26" height="26" /></td>
                </tr>
                <tr>
                	<td width="100" style="*width:150px;">Receba por e-mail as novidades 
e promoções da ASA Light.</td>
                </tr>
            </table>
        </div>
        <div id="linha_header_dois">
        	<img src="img/linha_header.png" />
        </div>
        <div id="area_admin">
        	<table>
            	<tr>
            		<td><strong><a href='meu-pedido.php' style='font-size:14px; text-decoration:none;'>Meus Pedidos</a></strong> | <strong><a href='cadastro.php' style='font-size:14px; text-decoration:none;'>Cadastro</a></strong></td>
            	</tr>
                <?php
				if(isset($_SESSION['id_usuario'])){
					if(!(empty($_SESSION['id_usuario']))){ 
					$id_usuario = $_SESSION['id_usuario'];
					$buscarUsuario = mysql_query("SELECT nome_usuario FROM usuario WHERE id = $id_usuario");
					$array = @mysql_fetch_array($buscarUsuario);
					$nome_usuario = $array['nome_usuario'];
					echo "<font style='margin-left:3px;'>Ol&aacute;,"." ".$nome_usuario." "."<a href='logout.php'>(sair)</a></font>";
						
				}
				}else{
                echo "<tr>";
                	echo "<td>Fa&ccedil;a <a href='login.php' style='font-size:11px;'>login</a> ou <a href='cadastro.php' style='font-size:11px;'>cadastre-se</a></td></td>";
        		echo "</tr>";
				}
				?>
                <tr>
                	<td>&nbsp;</td>
                </tr>
                <tr>
                	<td><a href='carrinho.php'><img src="img/btn_meucarrinho.png" alt="botao_carrinho" style='margin-left:-2px;' border="0" /></a></td>
                </tr>
            </table>
        </div>
	</div>
    <div class="menu">
    	<div class="menu_margin">
        	<table cellpadding="5">
            	<tr>
                	<td><a href="index.php"><img src="img/btn_home.png" border="0" /></a></td>
                    <td><a href="empresa.php"><img src="img/btn_empresa.png" border="0" /></a></td>
                    <td><a href="cardapio.php"><img src="img/btn_cardapio.png" border="0" /></a></td>
                    <td><a href="preparo-dos-alimentos.php"><img src="img/btn_preparo.png" border="0" /></a></td>
                    <td><a href="dicas-saudaveis.php"><img src="img/btn_dicas.png" border="0" /></a></td>
                    <td><a href="programas-alimentares.php"><img src="img/btn_programas.png" border="0" /></a></td>
                    <td><a href="meu-pedido.php"><img src="img/btn_meupedido.png" border="0" /></a></td>
                    <td><a href="contato.php"><img src="img/btn_contato.png" border="0" /></a></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="corpo_um">
    	<div class="corpo_um_margin">
    		<div id="slideshow">
        		<img src="img/slide1.png" alt="slide1" border="0" />
                <img src="img/slide2.png" alt="slide2" border="0" style="display:none;" />
                <img src="img/slide3.png" alt="slide3" border="0" style="display:none;" />
                <img src="img/slide4.png" alt="slide4" border="0" style="display:none;" />
                <img src="img/slide5.png" alt="slide5" border="0" style="display:none;" />
        	</div>
            <div id="prev" style="position:absolute; top:310px; margin-left:10px;  *margin-left:315px;"><a href="#"><img src="img/seta_esquerda.png" border="0" alt="btn" /></a></div>
            <div id="next" style="position:absolute; top:300px; margin-left:915px; *margin-left:1255px;"><a href="#"><img src="img/seta_direita.png" border="0" alt="btn" /></a></div>
            <div id="txt_destaque">
            	<img src="img/txt_destaque.png" alt="destaque"/>
            </div>
            <div id="carnes">
            	<!--p><strong><font style="color:#89ff07">CARNES</font></strong></p-->
                <?php 
					
					$campos_query = mysql_query("SELECT p.id as id, p.preco as preco, p.nome_cardapio_produto as nome_cardapio_produto, p.descricao as descricao, p.quant_caloria as quant_caloria, pi.img_cardapio_produto as img_cardapio_produto, cp.nome_cardapio_categoria as nome_categoria FROM cardapio_produto p LEFT JOIN img_cardapio_produto pi ON p.id = pi.id_cardapio_produto LEFT JOIN cardapio_categoria cp ON p.id_cardapio_categoria = cp.id WHERE exibir = 'sim' and p.destaque = 'sim' GROUP BY Rand() DESC LIMIT 4");
					//SELECT p.id as id, p.nome_cardapio_produto as nome_cardapio_produto, p.descricao as descricao, p.quant_caloria as quant_caloria, pi.img_cardapio_produto as img_cardapio_produto, cp.nome_cardapio_categoria as nome_categoria FROM cardapio_produto p LEFT JOIN img_cardapio_produto pi ON p.id = pi.id_cardapio_produto LEFT JOIN cardapio_categoria cp ON p.id_cardapio_categoria = cp.id WHERE exibir = 'sim' and p.destaque = 'sim' GROUP BY Rand() DESC LIMIT 4
					echo "<table id='produto_carne' style='width:186px; margin-left:-2px;'>";
					echo "<tr>";
					while($array = mysql_fetch_array($campos_query)){
						$id = $array['id'];
						$preco = $array['preco'];
						$preco_format = number_format($preco,2,",",".");
						$nome_cardapio_produto = $array['nome_cardapio_produto'];
						$nome_cardapio_produto_format = preg_replace("[^a-zA-Z0-9_]", "", strtr($nome_cardapio_produto, "áàãâéêíóôõúüçÁÀÃÂÉÊÍÓÔÕÚÜÇ ", "aaaaeeiooouucAAAAEEIOOOUUC_"));
						$nome_cardapio_produto_format = strtolower($nome_cardapio_produto_format);
						
						$descricao = $array['descricao'];
						$quant_caloria = $array['quant_caloria'];
						$nome_categoria = strtoupper($array['nome_categoria']);
						
						$img_cardapio_produto = $array['img_cardapio_produto'];
						$img_cardapio_produto_format = substr($img_cardapio_produto,2);
						$img_cardapio_produto_format = "http://".$_SERVER['SERVER_NAME']."/testes/asalight/gerenciador-asalight".$img_cardapio_produto_format;	
						
						echo "<td><p id='titulo'><font style='color:#89ff07;'><strong>$nome_categoria</strong></font></p>";
						echo "<img src='$img_cardapio_produto_format' style='width:186px; height:114px;' border='0' />";	
						echo "<p style='height:53px;' ><font style='font-family:Source Sans Pro; font-size:20px; color:#FFFFFF;'>$nome_cardapio_produto</font></p>";		
						echo "<p style='margin-top:-19px;height:45px;'><font style='font-size:13px;'>$descricao</font></p>";	
						echo "<p style='margin-top:-21px; margin-bottom:35px;'><font style='font-size:13px;'><strong>Calorias:</strong> $quant_caloria KCal</font></p>";
						echo "<p style='margin-top:-20px;height:27px;'><font style='font-size:16px; color:#FFF;'>Por R$ $preco_format</font></p>";
						$cod = $id;
						include("function_btn_pagamento.php");
						echo "</td>";
						echo "<td>&nbsp;</td><td>&nbsp;</td>";	
						echo "<td>&nbsp;</td><td>&nbsp;</td>";
						echo "<td>&nbsp;</td><td>&nbsp;</td>";
						echo "<td>&nbsp;</td><td>&nbsp;</td>";
					}
					echo "</tr>";
					echo "</table>";
					
				?>
            </div>
            <!--div id="aves">
            	<p><strong><font style="color:#89ff07">AVES</font></strong></p>
                <php 
					
					$campos_query = mysql_query("SELECT p.id as id, p.nome_cardapio_produto as nome_cardapio_produto, p.descricao as descricao, p.quant_caloria as quant_caloria, pi.img_cardapio_produto as img_cardapio_produto FROM cardapio_produto p LEFT JOIN img_cardapio_produto pi ON p.id = pi.id_cardapio_produto WHERE p.id_cardapio_categoria = '2' and exibir = 'sim' and p.destaque = 'sim' GROUP BY Rand() DESC LIMIT 1");
					
					echo "<table id='produto_carne' style='width:186px; margin-left:-2px;'>";
					echo "<tr>";
					while($array = mysql_fetch_array($campos_query)){
						$id = $array['id'];
						$nome_cardapio_produto = $array['nome_cardapio_produto'];
						$nome_cardapio_produto_format = preg_replace("[^a-zA-Z0-9_]", "", strtr($nome_cardapio_produto, "áàãâéêíóôõúüçÁÀÃÂÉÊÍÓÔÕÚÜÇ ", "aaaaeeiooouucAAAAEEIOOOUUC_"));
						$nome_cardapio_produto_format = strtolower($nome_cardapio_produto_format);
						
						$descricao = $array['descricao'];
						$quant_caloria = $array['quant_caloria'];
						
						$img_cardapio_produto = $array['img_cardapio_produto'];
						$img_cardapio_produto_format = substr($img_cardapio_produto,2);
						$img_cardapio_produto_format = "http://".$_SERVER['SERVER_NAME']."/testes/asalight/gerenciador-asalight".$img_cardapio_produto_format;	
						
						
						echo "<td><img src='$img_cardapio_produto_format' style='width:186px; height:114px;' border='0' />";	
						echo "<p style='height:53px;' ><font style='font-family:Source Sans Pro; font-size:20px; color:#FFFFFF;'>$nome_cardapio_produto</font></p>";		
						echo "<p style='margin-top:-15px;height:55px;'><font style='font-size:13px;'>$descricao</font></p>";	
						echo "<p style='margin-top:-15px;'><font style='font-size:13px;'><strong>Calorias:</strong> $quant_caloria KCal</font></p>";
						$cod = $id;
						include("function_btn_pagamento.php");
						echo "</td>";
							
					}
					echo "</tr>";
					echo "</table>";
					
				?>
            </div>
            <div id="sobremesas">
            	<p><strong><font style="color:#89ff07">SOBREMESAS</font></strong></p>
                <php 
					
					$campos_query = mysql_query("SELECT p.id as id, p.nome_cardapio_produto as nome_cardapio_produto, p.descricao as descricao, p.quant_caloria as quant_caloria, pi.img_cardapio_produto as img_cardapio_produto FROM cardapio_produto p LEFT JOIN img_cardapio_produto pi ON p.id = pi.id_cardapio_produto WHERE p.id_cardapio_categoria = '7' and exibir = 'sim' and p.destaque = 'sim' GROUP BY Rand() DESC LIMIT 1");
					
					echo "<table id='produto_carne' style='width:186px; margin-left:-2px;'>";
					echo "<tr>";
					while($array = mysql_fetch_array($campos_query)){
						$id = $array['id'];
						$nome_cardapio_produto = $array['nome_cardapio_produto'];
						$nome_cardapio_produto_format = preg_replace("[^a-zA-Z0-9_]", "", strtr($nome_cardapio_produto, "áàãâéêíóôõúüçÁÀÃÂÉÊÍÓÔÕÚÜÇ ", "aaaaeeiooouucAAAAEEIOOOUUC_"));
						$nome_cardapio_produto_format = strtolower($nome_cardapio_produto_format);
						
						$descricao = $array['descricao'];
						$quant_caloria = $array['quant_caloria'];
						
						$img_cardapio_produto = $array['img_cardapio_produto'];
						$img_cardapio_produto_format = substr($img_cardapio_produto,2);
						$img_cardapio_produto_format = "http://".$_SERVER['SERVER_NAME']."/testes/asalight/gerenciador-asalight".$img_cardapio_produto_format;	
						
						
						echo "<td><img src='$img_cardapio_produto_format' style='width:186px; height:114px;' border='0' />";	
						echo "<p style='height:53px;' ><font style='font-family:Source Sans Pro; font-size:20px; color:#FFFFFF;'>$nome_cardapio_produto</font></p>";		
						echo "<p style='margin-top:-15px;height:55px;'><font style='font-size:13px;'>$descricao</font></p>";	
						echo "<p style='margin-top:-15px;'><font style='font-size:13px;'><strong>Calorias:</strong> $quant_caloria KCal</font></p>";
						$cod = $id;
						include("function_btn_pagamento.php");
						echo "</td>";
							
					}
					echo "</tr>";
					echo "</table>";
					
				?>
            </div>
            <div id="peixe">
            	<p><strong><font style="color:#89ff07">PEIXE</font></strong></p>
                <php 
					
					$campos_query = mysql_query("SELECT p.id as id, p.nome_cardapio_produto as nome_cardapio_produto, p.descricao as descricao, p.quant_caloria as quant_caloria, pi.img_cardapio_produto as img_cardapio_produto FROM cardapio_produto p LEFT JOIN img_cardapio_produto pi ON p.id = pi.id_cardapio_produto WHERE p.id_cardapio_categoria = '1' and exibir = 'sim' and p.destaque = 'sim' GROUP BY Rand() DESC LIMIT 1");
					
					echo "<table id='produto_carne' style='width:186px; margin-left:-2px;'>";
					echo "<tr>";
					while($array = mysql_fetch_array($campos_query)){
						$id = $array['id'];
						$nome_cardapio_produto = $array['nome_cardapio_produto'];
						$nome_cardapio_produto_format = preg_replace("[^a-zA-Z0-9_]", "", strtr($nome_cardapio_produto, "áàãâéêíóôõúüçÁÀÃÂÉÊÍÓÔÕÚÜÇ ", "aaaaeeiooouucAAAAEEIOOOUUC_"));
						$nome_cardapio_produto_format = strtolower($nome_cardapio_produto_format);
						
						$descricao = $array['descricao'];
						$quant_caloria = $array['quant_caloria'];
						
						$img_cardapio_produto = $array['img_cardapio_produto'];
						$img_cardapio_produto_format = substr($img_cardapio_produto,2);
						$img_cardapio_produto_format = "http://".$_SERVER['SERVER_NAME']."/testes/asalight/gerenciador-asalight".$img_cardapio_produto_format;	
						
						
						echo "<td><img src='$img_cardapio_produto_format' style='width:186px; height:114px;' border='0' />";	
						echo "<p style='height:53px;' ><font style='font-family:Source Sans Pro; font-size:20px; color:#FFFFFF;'>$nome_cardapio_produto</font></p>";		
						echo "<p style='margin-top:-15px;height:55px;'><font style='font-size:13px;'>$descricao</font></p>";	
						echo "<p style='margin-top:-15px;'><font style='font-size:13px;'><strong>Calorias:</strong> $quant_caloria KCal</font></p>";
						$cod = $id;
						include("function_btn_pagamento.php");
						echo "</td>";
							
					}
					echo "</tr>";
					echo "</table>";
					
				?>
            </div-->
        </div>
    </div>
    <div class="corpo_dois">
    	<div class="corpo_dois_margin">
    		<div id="area_dicassaudaveis">
        		<img src="img/txt_dicassaudaveis.png" alt="dicas" />
                <p>A ASA Light oferece dicas que vão contribuir com sua saúde e bem estar.</p>
				<p><strong><font style="font-size:11px; color:#89ff07;"><a href="dicas-saudaveis.php">Saiba +</a></font></strong></p>
                <img src="img/img_dicassaudaveis.png" id="img_dicas" alt="dicas" />
        	</div>
            <div id="area_programa">
        		<img src="img/txt_programasalimentares.png" alt="programa" />
                <p>Conheça nossos programas alimentares
e escolha o mais adequado
a você.</p>
				<p><strong><font style="font-size:11px; color:#89ff07;"><a href="programas-alimentares.php">Saiba +</a></font></strong></p>
                <img src="img/img_programa.png" id="img_programa" alt="programa" />
        	</div>
            <div id="area_consulta">
        		<img src="img/txt_agendeconsulta.png" alt="agende" />
                <p>Desenvolvimento de dietas personalizadas e avaliação física.</p>
				<p><strong><font style="font-size:11px; color:#89ff07;"><a href="contato.php">Saiba +</a></font></strong></p>
                <img src="img/img_consulta.png" id="img_consulta" alt="agende" />
        	</div>
        </div>
    </div>
    <div class="footer">
    	<div class="footer_margin">
            <div id="contato">
                <table>
                    <tr>
                        <td>Tel: (21) 9451 4421 | <a href="mailto:contato@asalight.com.br">contato@asalight.com.br</a></td>
                    </tr>
                    <tr><td></td></tr>
                    <tr>
                        <td><img src="img/txt_copy.png" alt="copyright" /></td>
                    </tr>
                </table>
            </div>
            <div id="logo_krush">
            	<table cellpadding="2">
                	<tr>
                    	<td><img src="img/txt_criar.png" alt="criar site" /></td>
                    	<td><a href="http://www.krush.com.br/" target="_blank"><img src="img/logo_krush.png" border="0" alt="krush" /></a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>