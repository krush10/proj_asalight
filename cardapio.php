<?php session_start(); ?>
<?php include("conn/configuracao.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>AsaLight - Card&aacute;pio</title>
<link rel="SHORTCUT ICON" href="img/icon.ico" />
<link rel="stylesheet" href="css/header_style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/menu_style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/corpo_cardapio_style.css" type="text/css" media="all" />
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
            	<td><font style="font-size:12px; color:#707070;">Tel: <strong>21 9451 4421</strong>  |  <a href="mailto:contato@asalight.com.br" style="color:#707070;">contato@asalight.com.br</a></font>
                	<p style="margin-top:4px;"><a href="como-funciona-servico-asalight.php">Saiba como funciona o <strong>Servi&ccedil;os de Entregas da ASA Light</strong></a></p>
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
e promo&ccedil;&otilde;es da ASA Light.</td>
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
            	<img src="img/img_cardapio.png" alt="programas" />
            </div>
            <div id="txt_corpo_um">
            	<img src="img/txt_cardapio.png" alt="txt cardapio" />
            </div>
            <div id="categoria">
            	<?php 
					
					echo "<table>";
						echo "<tr>";
							echo "<td><font style='color:#ac4f64;'>Escolha:</font></td>";
						echo "</tr>";
						echo "<tr>";
							echo "<td>&nbsp;</td>";
						echo "</tr>";
					$buscarCardapio = mysql_query("SELECT * FROM cardapio_categoria ORDER BY nome_cardapio_categoria ASC");
					
					while($array = mysql_fetch_array($buscarCardapio)){
						$id = $array['id'];
						$nome_cardapio_categoria = $array['nome_cardapio_categoria'];	
						
						$nome_cardapio_categoria_ = strtolower($nome_cardapio_categoria);
						
						echo "<tr>";
							echo "<td><a href='cardapio.php?cat=$nome_cardapio_categoria_&i=$id'><font style='color:#ac4f64;'>></font> $nome_cardapio_categoria</a>";
							
								$buscarSubCardapio = mysql_query("SELECT * FROM cardapio_subcategoria WHERE id_categoria = ".$id." ORDER BY nome_subcategoria ASC");
								
								$count = 0;
								while($array_sub = mysql_fetch_array($buscarSubCardapio)){
								$id_sub = $array_sub['id'];
								$nome_subcategoria = $array_sub['nome_subcategoria'];	
								
								if($count > 0){	
									echo "<p style='margin-left:8px; margin-top:-10px;'><a href='cardapio.php?cat=$nome_cardapio_categoria_&i=$id&sc=$id_sub'><font style='color:#ac4f64; font-size:11px;'>+ $nome_subcategoria</font></a></p>";
								}else{
									echo "<p style='margin-left:8px; margin-top:5px;'><a href='cardapio.php?cat=$nome_cardapio_categoria_&i=$id&sc=$id_sub'><font style='color:#ac4f64; font-size:11px;'>+ $nome_subcategoria</font></a></p>";
								}
								$count = $count + 1;	
								}
							echo "</td>";
						echo "</tr>";
						
					}
					echo "</table>";
				?>
            </div>
            <div id="conteudo">
            	<?php 
				
				if(isset($_GET['i'])){
					$id_cardapio_categoria = $_GET['i'];
				
				$buscar_nome_categoria = mysql_query("SELECT nome_cardapio_categoria,descricao_cardapio_categoria FROM cardapio_categoria WHERE id = $id_cardapio_categoria");
				$array = @mysql_fetch_array($buscar_nome_categoria);
				$nome_categoria = $array['nome_cardapio_categoria'];
				$descricao_categoria = $array['descricao_cardapio_categoria'];
				
				echo "<table>";
					echo "<tr>";
						echo "<td><font style='font-size:23px; color:#963e52;'>Card&aacute;pio > $nome_categoria</font></td>";
					echo "</tr>";
				echo "</table>";
				echo "<table>";
					echo "<tr>";
						echo "<td><font style='font-size:13px; color:#333; margin-left:1px;'>$descricao_categoria</font></td>";
					echo "</tr>";
				echo "</table>";
				
				}else if( (isset($_GET['i'])) && (isset($_GET['sc'])) ){
					
					
					
				}else{
				
				$buscarCardapioCategoria = mysql_query("SELECT nome_cardapio_categoria,descricao_cardapio_categoria FROM cardapio_categoria ORDER BY nome_cardapio_categoria ASC LIMIT 1");
				$array = @mysql_fetch_array($buscarCardapioCategoria);
				$n_cardapio_categoria = $array['nome_cardapio_categoria'];
				$descricao_categoria = $array['descricao_cardapio_categoria'];
				
				echo "<table>";
					echo "<tr>";
						echo "<td><font style='font-size:23px; color:#963e52;'>Card&aacute;pio > $n_cardapio_categoria</font></td>";
					echo "</tr>";
				echo "</table>";
				echo "<table>";
					echo "<tr>";
						echo "<td><font style='font-size:13px; color:#333; margin-left:1px;'>$descricao_categoria</font></td>";
					echo "</tr>";
				echo "</table>";
				
				}
				?>
                <?php
				
				/*
				*	Krush Web
				*	25/10/2012
				*	Recupera todos os programas cadastrados no sistema
				*/
				
				if((isset($_GET['i'])) && (!(isset($_GET['sc'])))){
					$id_cardapio_categoria = $_GET['i'];	
					
					$campos_query = "cp.id as id, cp.preco as preco, cp.nome_cardapio_produto as nome_cardapio_produto, cp.descricao as descricao, cp.quant_caloria as quant_caloria, icp.img_cardapio_produto as img_cardapio_produto";
					$final_query  = "FROM cardapio_produto cp LEFT JOIN img_cardapio_produto icp ON icp.id_cardapio_produto = cp.id WHERE cp.exibir = 'sim' AND cp.id_cardapio_categoria = '$id_cardapio_categoria' ORDER BY cp.id DESC";
					
				}else if((isset($_GET['i'])) && (isset($_GET['sc']))){
					
					$id_cardapio_categoria = $_GET['i'];
					$id_cardapio_subcategoria = $_GET['sc'];
					
					$campos_query = "cp.id as id, cp.preco as preco, cp.nome_cardapio_produto as nome_cardapio_produto, cp.descricao as descricao, cp.quant_caloria as quant_caloria, icp.img_cardapio_produto as img_cardapio_produto";
					$final_query  = "FROM cardapio_produto cp LEFT JOIN img_cardapio_produto icp ON icp.id_cardapio_produto = cp.id WHERE cp.exibir = 'sim' AND cp.id_cardapio_categoria = '$id_cardapio_categoria' AND cp.id_cardapio_subcategoria = '$id_cardapio_subcategoria' ORDER BY cp.id DESC";
					
				}else if((!(isset($_GET['i']))) && (!(isset($_GET['sc'])))){
				
					$buscarCardapioCategoria = mysql_query("SELECT id FROM cardapio_categoria ORDER BY nome_cardapio_categoria ASC LIMIT 1");
					$array = @mysql_fetch_array($buscarCardapioCategoria);
					$id_cardapio_categoria = $array['id'];
					
					$campos_query = "cp.id as id, cp.preco as preco, cp.nome_cardapio_produto as nome_cardapio_produto, cp.descricao as descricao, cp.quant_caloria as quant_caloria, icp.img_cardapio_produto as img_cardapio_produto";
					$final_query  = "FROM cardapio_produto cp LEFT JOIN img_cardapio_produto icp ON icp.id_cardapio_produto = cp.id WHERE cp.exibir = 'sim' AND cp.id_cardapio_categoria = '$id_cardapio_categoria' ORDER BY cp.id DESC";
					
				}
				
				
				 
				// Maximo de registros por pagina
				$maximo = 6;
				 
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
				
				$buscarCardapio = mysql_query("SELECT $campos_query $final_query LIMIT $inicio,$maximo");
				
				echo "<table id='programas' cellspacing='10' style='width:186px;'>";
				echo "<tr>";
				$contador = 0;

				while($array = mysql_fetch_array($buscarCardapio)){
					$id = $array['id'];
					$preco = $array['preco'];
					$preco_format = number_format($preco,2,",",".");
					
					$nome_cardapio_produto = $array['nome_cardapio_produto'];
					$nome_cardapio_produto_format = preg_replace("[^a-zA-Z0-9_]", "", strtr($nome_cardapio_produto, "áàãâéêíóôõúüçÁÀÃÂÉÊÍÓÔÕÚÜÇ ", "aaaaeeiooouucAAAAEEIOOOUUC_"));
					$nome_cardapio_produto_format = strtolower($nome_cardapio_produto_format);
					
					$descricao = $array['descricao'];
					$descricao_format = substr($descricao,0,59);
					
					$caloria = $array['quant_caloria'];
					
					$img_cardapio_produto = $array['img_cardapio_produto'];
					$img_cardapio_produto_format = substr($img_cardapio_produto,2);
					$img_cardapio_produto_format = "http://".$_SERVER['SERVER_NAME']."/testes/asalight/gerenciador-asalight".$img_cardapio_produto_format;	
					
							echo "<td><img src='$img_cardapio_produto_format' style='width:186px; height:114px;' border='0' />";	
							echo "<p style='height:53px;' ><font style='font-family:Source Sans Pro; font-size:18px; color:#ac4f64;'>$nome_cardapio_produto</font></p>";		
							echo "<p style='margin-top:-19px;height:45px;'><font style='font-size:13px;'>$descricao_format</font></p>";	
							echo "<p style='margin-top:-19px; margin-bottom:35px;'><font style='font-size:13px;'><strong>Calorias:</strong> $caloria KCal</font></p>";
						echo "<p style='margin-top:-20px;height:27px;'><font style='font-size:16px; color:#ac4f64;'>Por R$ $preco_format</font></p>";
							$cod = $id;
							include("function_btn_pagamento_interno.php");
							echo "</td>";
							echo "<td>&nbsp;</td>"; echo "<td>&nbsp;</td>";
							echo "<td>&nbsp;</td>";
							echo "<td>&nbsp;</td>";
							if($contador == 2){
								echo "<tr></tr>";
								echo "<tr></tr>";
								echo "<tr></tr>";
								echo "<tr></tr>";
							}
					$contador = $contador + 1;
				}
				echo "</tr>";
				echo "</table>";
				echo "<div id='paginador'>";
					
					$menos = $pagina - 1;
					$mais = $pagina + 1;
					 
					$pgs = ceil($total / $maximo);
					 
					if($pgs > 1 ) {
					 
						echo "<br />";
						
						if($menos >= 0) {
							
							$i = $_GET['p'] - 1;
							
							echo "<a title='in&iacute;cio' style='text-decoration:none;' href=http://".$_SERVER['SERVER_NAME']."/site-asalight/cardapio.php?p=><strong>in&iacute;cio</strong> </a>";
						}
						
						if($menos >= 1) {
							
							$i = $_GET['p'] - 1;
							
							echo "<a title='Anterior' style='text-decoration:none;' href=http://".$_SERVER['SERVER_NAME']."/site-asalight/cardapio.php?p=".($i)."><strong>anterior</strong> </a>";
						}
					 
						// Listando as paginas
						for($i=$pagina; $i<$pagina+3; $i++) {
							if($i != $pagina) {
								echo " <a href="."http://".$_SERVER['SERVER_NAME']."/site-asalight/cardapio.php"."?p=".($i).">$i</a> <font color='#CCCCCC'>|</font>";
								//echo " <a href="."http://".$_SERVER['SERVER_NAME']."/produto.php"."?n=".$nome_categoria."&p=".($i).">$i</a> |";
							} else {
								echo " <strong>".$i."</strong> <font color='#CCCCCC'>|</font> ";
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
							
							echo " <a title='Pr&oacute;xima' style='text-decoration:none;' href="."http://".$_SERVER['SERVER_NAME']."/site-asalight/cardapio.php"."?p=".($i)."> <strong>pr&oacute;xima</strong></a>";
						}
						if(($mais >= $pgs) || ($mais <= $pgs)) {
							
							echo " <a title='ultima p&aacute;gina' style='text-decoration:none;' href="."http://".$_SERVER['SERVER_NAME']."/site-asalight/cardapio.php"."?p=".($pgs)."> ultima p&aacute;gina</a>";
						}
						
					}
				
				echo "</div>";
				echo "<div id='texto_obs'>*Todas as Linhas s&atilde;o elaboradas por nutricionistas, as refei&ccedil;&otilde;es s&atilde;o calculadas com valores nutricionais balanceados</div>";
			?>
            </div>
        </div>
    </div>
    <div class="corpo_dois">
    	<div class="corpo_dois_margin">
    		<div id="area_dicassaudaveis">
        		<img src="img/txt_dicassaudaveis.png" alt="dicas" />
                <p>A ASA Light oferece dicas que v&atilde;o contribuir com sua sa&uacute;de e bem estar.</p>
				<p><strong><font style="font-size:11px; color:#89ff07;"><a href="dicas-saudaveis.php">Saiba +</a></font></strong></p>
                <img src="img/img_dicassaudaveis.png" id="img_dicas" alt="dicas" />
        	</div>
            <div id="area_programa">
        		<img src="img/txt_programasalimentares.png" alt="programa" />
                <p>Conhe&ccedil;a nossos programas alimentares
e escolha o mais adequado
a voc&ecirc;.</p>
				<p><strong><font style="font-size:11px; color:#89ff07;"><a href="programas-alimentares.php">Saiba +</a></font></strong></p>
                <img src="img/img_programa.png" id="img_programa" alt="programa" />
        	</div>
            <div id="area_consulta">
        		<img src="img/txt_agendeconsulta.png" alt="agende" />
                <p>Desenvolvimento de dietas personalizadas e avalia&ccedil;&atilde;o f&iacute;sica.</p>
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