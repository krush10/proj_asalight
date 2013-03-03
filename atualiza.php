<?php session_start(); ?>
<?php include("conn/configuracao.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AsaLight - Cadastro</title>
<link rel="SHORTCUT ICON" href="img/icon.ico" />
<link rel="stylesheet" href="css/header_style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/menu_style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/corpo_cadastro_style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/footer_style.css" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js " type="text/javascript"></script>
<script src="http://ajax.microsoft.com/ajax/jquery.validate/1.6/jquery.validate.js " type="text/javascript"></script>
<script src="js/jquery.maskedinput-1.2.2.js" type="text/javascript"></script>
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
<script>
	 $(function($){  
		 $("#cpf").mask("999.999.999-99");  
		 $("#telefone_residencial").mask("(99) 9999-9999");  
		 $("#telefone_celular").mask("(99) 9999-9999");   
		 $("#telefone_comercial").mask("(99) 9999-9999"); 
		 $("#data_nascimento").mask("99/99/9999"); 
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
            	<img src="img/img_login.png" alt="programas" />
            </div>
            <div id="txt_corpo_um">
            	<img src="img/txt_identificacao.png" alt="txt cardapio" />
            </div>
            <div id="conteudo">
            	<table>
                	<tr>
                    	<td><font style="font-size:23px; color:#963e52;">Atualiza</font></td>
                    </tr>
                </table>
                <form id="cad_" action="function.atualiza.asalight/atualizando.php" method="post">
                
                <?php
				
				if(isset($_SESSION['id_usuario'])){
					$id_user = $_SESSION['id_usuario'];
				}
				
				$buscar_user = mysql_query("SELECT * FROM usuario WHERE id = $id_user");
				
				while($array_user = mysql_fetch_array($buscar_user)){
					$nome_usuario = $array_user['nome_usuario'];
					$nome_completo = $array_user['nome_completo'];
					$cpf = $array_user['cpf'];
					$data_nascimento = $array_user['data_nascimento'];
					$sexo = $array_user['sexo'];
					$telefone_residencial = $array_user['telefone_residencial'];
					$telefone_celular = $array_user['telefone_celular'];
					$telefone_comercial = $array_user['telefone_comercial'];
					$email = $array_user['email'];
					$senha = $array_user['senha'];
					$cep = $array_user['cep'];
					$identifica_endereco = $array_user['identifica_endereco'];
					$endereco = $array_user['endereco'];
					$numero = $array_user['numero'];
					$complemento = $array_user['complemento'];
					$bairro = $array_user['bairro'];
					$cidade = $array_user['cidade'];
					$estado = $array_user['estado'];
					$pais = $array_user['pais'];
					$info_referencia = $array_user['info_referencia'];
				}
				
                echo "<table style='margin-left:-70px;'>";
                	echo "<tr>";
                    	echo "<td>&nbsp;</td>";
                    echo "</tr>";
                	echo "<tr>";
                    	echo "<td align='right'>*Como gostaria de ser chamado?</td>";
                        echo "<td><input type='text' name='nome_usuario' value='". $nome_usuario ."' id='nome_usuario' class='caixa_cadastro' /></td>";
                    echo "</tr>";
                    echo "<tr>";
                    	echo "<td align='right'>*Nome Completo</td>";
                        echo "<td><input type='text' name='nome_completo' value='". $nome_completo ."' id='nome_completo' class='caixa_cadastro' /></td>";
                    echo "</tr>";
                    echo "<tr>";
                    	echo "<td align='right'>*CPF</td>";
                        echo "<td><input type='text' name='cpf' id='cpf' value='". $cpf ."' class='caixa_cadastro' /></td>";
                    echo "</tr>";
                    echo "<tr>";
                    	echo "<td align='right'>*Data de Nascimento</td>";
                        echo "<td><input type='text' name='data_nascimento' value='". $data_nascimento ."' id='data_nascimento' class='caixa_cadastro' /></td>";
                    echo "</tr>
                    <tr>
                    	<td align='right'>*Sexo</td>
                        <td><input type='text' name='sexo' id='sexo' value='". $sexo ."' class='caixa_cadastro' /></td>
                    </tr>
                    <tr>
                    	<td align='right'>*Telefone Principal  -  (DDD - TELEFONE)</td>
                        <td><input type='text' name='telefone_residencial' id='telefone_residencial' value='". $telefone_residencial ."' class='caixa_cadastro' /></td>
                    </tr>
                    <tr>
                    	<td align='right'>Telefone Celular  -  (DDD - TELEFONE)</td>
                        <td><input type='text' name='telefone_celular' id='telefone_celular' value='". $telefone_celular ."' class='caixa_cadastro' /></td>
                    </tr>
                    <tr>
                    	<td align='right'>Telefone Comercial  -  (DDD - TELEFONE - RAMAL)</td>
                        <td><input type='text' name='telefone_comercial' id='telefone_comercial' value='". $telefone_comercial ."' class='caixa_cadastro' /></td>
                    </tr>
                    <tr>
                    	<td align='right'>*Email</td>
                        <td><input type='text' name='email' id='email' class='caixa_cadastro' value='". $email ."' /></td>
                    </tr>
                    <tr>
                    	<td align='right'>*Senha</td>
                        <td><input type='password' name='senha' id='senha' class='caixa_cadastro' value='". $senha ."' /></td>
                    </tr>
                    <tr>
                    	<td>&nbsp;</td>
                    </tr>";
                    echo "<tr>
                    	<td align='right'><strong><font style='font-size:18px; color:#555555;'>Endere&ccedil;o</font></strong></td>
                    </tr>
                	<tr>
                    	<td align='right'>Primeiro digite o CEP</td>
                        <td><input type='text' name='cep' id='cep' class='inputs' value='". $cep ."' style='width:300px;height:22px;background:#FFFFFF;border:1px solid #FFF;font-family:'Trebuchet MS', Arial, Helvetica, sans-serif;font-size:12px;' /></td>
                    </tr>
                    <tr>
                    	<td align='right'><a href='#'>Alterar CEP</a> | N&atilde;o sabe o CEP <a href='http://www.buscacep.correios.com.br/' target='_blank'>Consulte aqui</a></td>
                    </tr>
                    <tr>
                    	<td align='right'>Identifica&ccedil;&atilde;o do Endere&ccedil;o</td>
                        <td><input type='text' name='identifica_endereco' class='caixa_cadastro' value='". $identifica_endereco ."' /></td>
                    </tr>
                    <tr>
                    	<td align='right'>Endere&ccedil;o</td>
                        <td><input type='text' name='endereco' id='rua' class='caixa_cadastro' value='". $endereco ."' /></td>
                    </tr>
                    <tr>
                    	<td align='right'>N&uacute;mero</td>
                        <td><input type='text' name='numero' class='caixa_cadastro' value='". $numero ."' /></td>
                    </tr>
                    <tr>
                    	<td align='right'>Complemento</td>
                        <td><input type='text' name='complemento' id='complemento' class='caixa_cadastro' value='". $complemento ."' /></td>
                    </tr>
                    <tr>
                    	<td align='right'>*Bairro</td>
                        <td><input type='text' name='bairro' id='bairro' class='caixa_cadastro' value='". $bairro ."' /></td>
                    </tr>
                    <tr>
                    	<td align='right'>*Cidade</td>
                        <td><input type='text' name='cidade' id='cidade' class='caixa_cadastro' value='". $cidade ."' /></td>
                    </tr>
                    <tr>
                    	<td align='right'>*Estado</td>
                        <td><input type='text' name='estado' id='uf' class='caixa_cadastro' value='". $estado ."' /></td>
                    </tr>
                    <tr>
                    	<td align='right'>*Pa&iacute;s</td>
                        <td><input type='text' name='pais' id='pais' class='caixa_cadastro' value='". $pais ."' /></td>
                    </tr>
                    <tr>
                    	<td align='right'>Informa&ccedil;&otilde;es de Refer&ecirc;ncia</td>
                        <td><textarea name='info_referencia' class='area_cadastro' value='". $info_referencia ."' ></textarea></td>
                    </tr>
                </table>";
				?>
                	<input type='image' src='img/btn_continuar.png' width='168' height='41' class='btn_continuar' />
                 </form>   
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