<?php session_start(); ?>
<?php include("conn/configuracao.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AsaLight - Login</title>
<link rel="SHORTCUT ICON" href="img/icon.ico" />
<link rel="stylesheet" href="css/header_style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/menu_style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/corpo_checkout_style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/footer_style.css" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.maskedinput-1.2.2.js"></script>

<script type="text/javascript">  
	 jQuery(function($){  
		 $("#telefone").mask("99 9999-9999");  
	 }); 
</script>
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
            	<img src="img/img_login.png" alt="login" />
            </div>
            <div id="txt_corpo_um">
            	<img src="img/txt_meucarrinho.png" alt="txt login" />
            </div>
            <div id="conteudo">
            	<table>
                	<tr>
                    	<td><font style="font-size:23px; color:#963e52;">Conclus&atilde;o do Pedido</font></td>
                    </tr>
                </table>
                <table>
                    <tr><td>&nbsp;</td></tr>
                    <tr>
                    	<td width="300"><font style="font-size:18px; color:#464646;">Seu Pedido</font></td>
                        <td><font style="font-size:18px; color:#464646;">Valor</font></td>
                    </tr>
                    <tr>
                    	<td width="300"><font style="font-size:14px; color:#464646;">Total em Produtos:</font></td>
                        <?php 
						$i = 0;
						$valor_total = 0;
						$valor_frete = $_SESSION['valor_frete'];
						foreach($_SESSION['lista_produtos'] as $id){
				
						$query = mysql_query("SELECT id, nome_cardapio_produto, preco FROM cardapio_produto WHERE id =" . $id . " ");
						
						if($query)	
						while($array = mysql_fetch_array($query)){
							$id = $array['id'];
                            $nome_cardapio_produto = $array['nome_cardapio_produto'];
                            $preco = $array['preco'];
                            
						    $_SESSION['qtd'.$i];
							
							$_SESSION['num_produtos'] = $_SESSION['qtd'.$i];
							
							$_SESSION['array_produtos'][$i] = array(
							//$array_produtos = array(
                                "id"=>$i,
                                "id_produto"=>$id,
                                "nome_produto"=>$nome_cardapio_produto,
                                "preco"=>$preco,
								"quantidade"=> $_SESSION['qtd'.$i]
                            );
							
							$valor_total = $valor_total + ($_SESSION['array_produtos'][$i]["preco"] * $_SESSION['array_produtos'][$i]["quantidade"]) + ($valor_frete * $_SESSION['array_produtos'][$i]["quantidade"]);
							$i = $i + 1; 
							} 
						}
						
						echo "<td><font style='font-size:14px; color:#464646;'>R$". number_format($valor_total,2,",",".") ."</font></td>"; 
						?>
                    </tr>
                    <tr>
                    	<td width="300"><font style="font-size:14px; color:#464646;">Frete:</font></td>
						<?php 
						echo "<td><font style='font-size:14px; color:#464646;'>R$". $valor_frete ."(cada)</font></td>"; 
						?>
                    </tr>
                    <tr><td>&nbsp;</td></tr>
                    <tr>
                    	<td width="300"><strong><font style="font-size:14px; color:#464646;">Subtotal:</font></strong></td>
                        <?php 
						echo "<td><font style='font-size:14px; color:#464646;'>R$". number_format($valor_total,2,",",".") ."</font></td>"; 
						?>
                    </tr>
                    <tr>
                    	<td width="300"><strong><font style="font-size:18px; color:#963e52;">Total:</font></strong></td>
                        <?php 
						echo "<td><font style='font-size:14px; color:#464646;'>R$". number_format($valor_total,2,",",".") ."</font></td>"; 
						?>
                    </tr>
                    <tr><td>&nbsp;</td></tr>
                    <tr><td>&nbsp;</td></tr>
                    </table>
                    <table>
					<?php
                    echo "<tr>";
                    	echo "<td width='600'><font style='font-size:18px; color:#464646;'>Dados de Entrega</font></td>";
                        echo "<td></td>";
                    echo "</tr>";
					
					if(isset($_SESSION['id_usuario'])){
						$id_usuario = $_SESSION['id_usuario'];	
					}
					
					$recuperar_usuario = mysql_query("SELECT nome_completo, endereco, bairro, cidade, estado, cep, telefone_residencial FROM usuario WHERE id = $id_usuario");
					
					while($array = mysql_fetch_array($recuperar_usuario)){
						$nome_completo = $array['nome_completo'];
						$endereco = $array['endereco'];
						$bairro = $array['bairro'];
						$cidade = $array['cidade'];
						$estado = $array['estado'];
						$cep = $array['cep'];
						$telefone = $array['telefone_residencial'];
						
						echo "<tr>
						      	 <td><font style='font-size:12px; color:#363636;'>".$nome_completo."
								 <p style='margin-top:0px;'>".$endereco.", ".$bairro." - ".$cidade." - ".$estado." - ".$cep."</p>
								 <p style='margin-top:-12px;'>".$telefone."</p>
								 </font></td>
							  </tr>";
						
					}
					
					?>
                    </table>
                    <table>
                        <tr><td>&nbsp;</td></tr>
                        <tr>
                        <td width="180"><a href="atualiza.php"><img src="img/btn_alterar.png" border="0" /></a></td>
                        <td><?php include("function_btn_pagamento_checkout.php"); ?></td>
                        </tr>
                </table>
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