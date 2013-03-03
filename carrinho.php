<?php session_start(); ?>
<?php include("conn/configuracao.php"); ?>
<?php include("frete.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AsaLight - Carrinho</title>
<link rel="SHORTCUT ICON" href="img/icon.ico" />
<link type="text/css" href="style/jquery.jscrollpane.css" rel="stylesheet" media="all" />
<link rel="stylesheet" href="css/header_style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/menu_style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/corpo_carrinho_style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/footer_style.css" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.maskedinput-1.2.2.js"></script>
<script type="text/javascript" src="js/formata.js"></script>
<script type="text/javascript" src="js/jScrollPane.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>

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
	
	function alterarQuant(produto){
		var nomeID = "caixa_qant_"+produto;
		var quant = document.getElementById(nomeID).value;	
		var prod = produto;
		location.href="altera-qtd.php?i="+quant+"&p="+prod;
	}
	
	function alertaFrete(){
		alert("Consulte o frete");	
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
    	<div id="img_corpo_um">
        	<div id="img_corpo_um_margin">
        	<table>
            <tr>
            	<td><img src="img/img_carrinho.png" alt="login" /></td>
            	<td><img src="img/txt_meucarrinho.png" alt="txt login" /></td>
        	</tr>
            </table>
            </div>
        </div>
    	<div class="corpo_um_margin">
            <div id="conteudo">
            	<table>
                	<tr>
                    	<td><font style="font-size:23px; color:#963e52;">Meu Carrinho</font></td>
                    </tr>
                </table>
                <form action="carrinho.php" method="post">
                <table>
                	<tr><td>&nbsp;</td></tr>
                    <tr>
                    	<td>Consulte consulte o prazo de entrega e o frete para seu CEP: <input type="text" name="sCepDestino" id="sCepDestino" onkeypress="return txtBoxFormat(this, '99999999', event);" style="background:#e2e2e2; border:#e2e2e2; height:22px; width:120px;" /></td>
                        <td><input type="image" src="img/btn_ok.png" width="26" height="26" /></td>
                        <td><a href="http://www.buscacep.correios.com.br/" target="_blank" style="font-size:11px; color:#555; margin-left:10px;">Procurar CEP</a></td>
                    </tr>
                </table>
                	<?php  echo "<font style='position:absolute; top:566px; *top:525px; margin-left:375px; font-size:11px;'>$resultadoFrete</font>"; ?>
                </form>
                <img src="img/barra_carrinho.png" style="margin-top:40px; margin-left:2px;" />
                <?php		 
                     if(isset($_POST['codigo'])){
                        $codigo = $_POST['codigo'];	 
					 }
					 if(sizeof($_SESSION["lista_produtos"])	== 0){
						 $_SESSION["lista_produtos"][] = array();
					 }
					 
					 if (in_array($codigo, $_SESSION["lista_produtos"])) { 
						
					 }else{
						$_SESSION["lista_produtos"][] = $codigo; 
					 }
					 echo "<div id='carrinho' style='min-height:170px; width:791px;'>";
                     echo "<table style='background-color:#e2e2e2; width:771px; margin-left:2px; font-size:12px;'>";
                     $i = 0;
                     $total = 0;
					 foreach($_SESSION['lista_produtos'] as $id){
                        
						echo "<input type='hidden' value='$i' id='contador' />";
						
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
							
							if($_SESSION['array_produtos'][$i]['quantidade'] == 0){
								$_SESSION['array_produtos'][$i]['quantidade'] = 1;	
								$_SESSION['qtd'.$i] = 1;
							}
							
							$total_geral = $total_geral + ($_SESSION['array_produtos'][$i]["preco"] * $_SESSION['array_produtos'][$i]["quantidade"]) + ($valor_frete * $_SESSION['array_produtos'][$i]["quantidade"]);
							
                            echo "<tr>";
                                echo "<td width='411' style='border-right:1px solid #FFF;'>". $_SESSION['array_produtos'][$i]["nome_produto"] . "</td>";
								echo "<td width='80' align='center' style='border-right:1px solid #FFF;'>";
								echo "<input type='text' name='quantidade' id='caixa_qant_".$i."' value='". $_SESSION['array_produtos'][$i]['quantidade'] ."' style='width:20px; background-color:#e2e2e2; border:1px solid #e2e2e2;' />";
								echo "<p style='margin-top:0px; margin-left:-23px;'><a style='font-size:10px; color:#222;' href='excluindo-produto.php?i=". $_SESSION['array_produtos'][$i]["id_produto"] ."'>Retirar</a></p>";
								echo "<p style='margin-top:-6px; margin-left:0px;'><a style='font-size:10px; color:#222;' href='#' onclick='alterarQuant(". $_SESSION['array_produtos'][$i]["id"] .")'>Alterar Qtde</a></p>";
								echo "</td>";
                                echo "<td width='124' align='center' style='border-right:1px solid #FFF;'> R$ ". number_format($_SESSION['array_produtos'][$i]["preco"], 2, ',', '.') . "</td>";
								echo "<td></td>";	
                            echo "</tr>";
                            
                            $i = $i + 1; 
                        }
                     }	
					 
                     echo "</table>";
					 echo "</div>";
					 
					 $_SESSION['valor_frete'] = $valor_frete;      
					 
                     //echo "<font style='margin-left:681px; font-size:12px;'>R$ ". number_format($total_geral,2,",",".") ."</font>";
                     echo "<p><font style='margin-left:583px; font-size:12px;'><strong>SUBTOTAL: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  R$". number_format($total_geral,2,",",".") ."</strong></font></p>";
					 echo "<p><font style='margin-left:607px; font-size:16px; color:#363636;'><strong>TOTAL: R$". number_format($total_geral,2,",",".") ."</strong></font></p>";
					 echo "<p><font style='margin-left:381px; font-size:11px;'><strong>ATENÇÃO:</strong> O prazo começa a contar a partir da aprovação do pedido.</font></p>";
					 echo "<p style='margin-top:-10px;'><font style='margin-left:315px; font-size:11px;'>Pedidos pagos por boleto bancário tem 3 dias úteis acrescidos ao prazo de entrega.</font></p>";
					 echo "<a style='font-size:11px; color:#333; margin-left:2px;' href='limpar-carrinho.php'>Esvaziar carrinho de compras</a>";
                     echo "<p><a href='cardapio.php' style='margin-left:523px;'><img src='img/btn_continuar_comprando.png' border='0' /></a></p>";
					 
					 if((sizeof($_SESSION['array_produtos']) != 0) && (isset($_SESSION['id_usuario'])) && (!(isset($valor_frete)))){
						echo "<a href='javascript:void(0);' onclick='alertaFrete();' style='margin-left:571px;'><img src='img/btn_finalizar_compra.png' border='0' /></a>"; 
					 }else if((sizeof($_SESSION['array_produtos']) != 0) && (isset($_SESSION['id_usuario'])) && (isset($valor_frete))){
                        echo "<a href='checkout.php' style='margin-left:571px;'><img src='img/btn_finalizar_compra.png' border='0' /></a>";
                     }else if((sizeof($_SESSION['array_produtos']) != 0) && (!(isset($_SESSION['id_usuario'])))){
                        echo "<a href='login.php' style='margin-left:571px;'><img src='img/btn_finalizar_compra.png' border='0' /></a>";
                     }
                
                ?> 
        	</div>
    </div>
    <div class="corpo_dois">
    	<div class="corpo_dois_margin">
        	<div id="area_dpc">
            </div>
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