<?php session_start(); ?>
<?php include("conn/configuracao.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AsaLight - Programas Alimentares</title>
<link rel="SHORTCUT ICON" href="img/icon.ico" />
<link rel="stylesheet" href="css/header_style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/menu_style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/corpo_programa_alimentar_style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/footer_style.css" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
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
            	<td><font style="font-size:12px; color:#707070;">Tel: <strong>21 9541 4421</strong>  |  <a href="mailto:contato@asalight.com.br" style="color:#707070;">contato@asalight.com.br</a></font>
                	<p style="margin-top:4px;"><a href="#">Saiba como funciona o <strong>Serviços de Entregas da ASA Light</strong></a></p>
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
        <!--div id="login_cadastro">
        	<php
				if(isset($_SESSION['id_usuario'])){
					if(!(empty($_SESSION['id_usuario']))){
					
					$id_usuario = $_SESSION['id_usuario'];
					$buscarUsuario = mysql_query("SELECT nome FROM usuario WHERE id = $id_usuario");
					$array = @mysql_fetch_array($buscarUsuario);
					$nome_usuario = $array['nome'];
					echo "Ol&aacute;,"." ".$nome_usuario." "."<a href='logout.php'>(sair)</a>";
						
				}
				}else{
					echo "Fa&ccedil;a seu <a href='login.php'>Login</a> ou <a href='cadastro.php'>Cadastro</a>"; 
				}
			?>
		</div-->
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
    		<div id="img_corpo_um">
            	<img src="img/img_programas_alimentar.png" alt="programas" />
            </div>
            <div id="txt_corpo_um">
            	<img src="img/txt_programas.png" alt="txt programas" />
            </div>
            <div id="conteudo">
            	<table>
                	<tr>
                    	<td><font style="font-size:23px; color:#963e52;">Programas Alimentares ></font></td>
                    </tr>
                </table>
                <?php 
				
					if(isset($_GET['c'])){$id = $_GET['c'];}
				
					echo "<table id='programas' cellpadding='4' style='margin-left:-1px;'>";
						echo "<tr id='topo' style='border:1px solid #CCC;'>";
							echo "<td width='103'><font style='color:#ac4f64;'>REF/DIA</font></td>";
							echo "<td width='103'><strong><font style='font-size:12px;'>SEGUNDA</font></strong></td>";
							echo "<td width='103'><strong><font style='font-size:12px;'>TER&Ccedil;A</font></strong></td>";
							echo "<td width='103'><strong><font style='font-size:12px;'>QUARTA</font></strong></td>";
							echo "<td width='103'><strong><font style='font-size:12px;'>QUINTA</font></strong></td>";
							echo "<td width='103'><strong><font style='font-size:12px;'>SEXTA</font></strong></td>";
							echo "<td width='103'><strong><font style='font-size:12px;'>SABADO</font></strong></td>";
							echo "<td width='103'><strong><font style='font-size:12px;'>DOMINGO</font></strong></td>";
						echo "</tr>";
						
						$query = mysql_query("SELECT * FROM programa_alimentar_periodo WHERE id_programa_alimentar = $id");
						
						while($array = mysql_fetch_array($query)){
							$periodo_dia = $array['periodo_dia'];
							$segunda = $array['segunda'];
							$segunda = substr($segunda,0,58);
							$terca = $array['terca'];	
							$terca = substr($terca,0,58);
							$quarta = $array['quarta'];
							$quarta = substr($quarta,0,58);
							$quinta = $array['quinta'];
							$quinta = substr($quinta,0,58);
							$sexta = $array['sexta'];
							$sexta = substr($sexta,0,58);
							$sabado = $array['sabado'];
							$sabado = substr($sabado,0,58);
							$domingo = $array['domingo'];
							$domingo = substr($domingo,0,58);
							
							
							echo "<tr>";
								echo "<td width='103'><font style='color:#ac4f64;'>". nl2br($periodo_dia) ."</font></td>";
								echo "<td width='103'><font style='font-size:11px;'>". nl2br($segunda) ."</font></td>";
								echo "<td width='103'><font style='font-size:11px;'>". nl2br($terca) ."</font></td>";
								echo "<td width='103'><font style='font-size:11px;'>". nl2br($quarta) ."</font></td>";
								echo "<td width='103'><font style='font-size:11px;'>". nl2br($quinta) ."</font></td>";
								echo "<td width='103'><font style='font-size:11px;'>". nl2br($sexta) ."</font></td>";
								echo "<td width='103'><font style='font-size:11px;'>". nl2br($sabado) ."</font></td>";
								echo "<td width='103'><font style='font-size:11px;'>". nl2br($domingo) ."</font></td>";
							echo "</tr>";
						}
					echo "</table>";		
					echo "<table id='voltar'>";
						echo "<tr>";
							echo "<td><a href='javascript:history.go(-1)'><font style='color:#9e0b0f;'><<</font> Voltar para Programas Alimentares</a></td>";
						echo "</tr>";
					echo "</table>";	
				?>
            </div>
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
                        <td>Tel: (21) 9451 4421 | <a href="#">contato@asalight.com.br</a></td>
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