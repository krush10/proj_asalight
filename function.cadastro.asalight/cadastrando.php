<?php 

	include("../conn/configuracao.php");
	
	if(isset($_POST['email'])){$email = $_POST['email'];}
	
	$query = mysql_query("SELECT email FROM usuario WHERE email = '$email' LIMIT 1");
	$dados = @mysql_fetch_array($query);
	$email_usuario = $dados['email'];
	
	if($email_usuario == ""){
	
	if(isset($_POST['nome_usuario'])){$nome_usuario = $_POST['nome_usuario'];}
	if(isset($_POST['nome_completo'])){$nome_completo = $_POST['nome_completo'];}
	if(isset($_POST['cpf'])){$cpf = $_POST['cpf'];}
	if(isset($_POST['data_nascimento'])){$data_nascimento = $_POST['data_nascimento'];}
	if(isset($_POST['sexo'])){$sexo = $_POST['sexo'];}
	if(isset($_POST['telefone_residencial'])){$telefone_residencial = $_POST['telefone_residencial'];}
	if(isset($_POST['telefone_celular'])){$telefone_celular = $_POST['telefone_celular'];}
	if(isset($_POST['telefone_comercial'])){$telefone_comercial = $_POST['telefone_comercial'];}
	if(isset($_POST['email'])){$email = $_POST['email'];}
	if(isset($_POST['senha'])){$senha = $_POST['senha'];}
	if(isset($_POST['cep'])){$cep = $_POST['cep'];}
	if(isset($_POST['identifica_endereco'])){$identifica_endereco = $_POST['identifica_endereco'];}
	if(isset($_POST['endereco'])){$endereco = $_POST['endereco'];}
	if(isset($_POST['numero'])){$numero = $_POST['numero'];}
	if(isset($_POST['complemento'])){$complemento = $_POST['complemento'];}
	if(isset($_POST['bairro'])){$bairro = $_POST['bairro'];}
	if(isset($_POST['cidade'])){$cidade = $_POST['cidade'];}
	if(isset($_POST['estado'])){$estado = $_POST['estado'];}
	if(isset($_POST['pais'])){$pais = $_POST['pais'];}
	if(isset($_POST['info_referencia'])){$info_referencia = $_POST['info_referencia'];}
	
	
	$inserirUsuario = mysql_query("INSERT INTO usuario (nome_usuario, nome_completo, cpf, data_nascimento, sexo, telefone_residencial, telefone_celular, telefone_comercial, email, senha, cep, identifica_endereco, endereco, numero, complemento, bairro, cidade, estado, pais, info_referencia) VALUES ('$nome_usuario','$nome_completo','$cpf','$data_nascimento','$sexo','$telefone_residencial','$telefone_celular','$telefone_comercial','$email','$senha','$cep','$identifica_endereco','$endereco','$numero','$complemento','$bairro','$cidade','$estado','$pais','$info_referencia')");


			$titulo = "Bem-Vindo ao AsaLight";
			$mensagem = nl2br("<img src='http://www.krush.com.br/testes/asalight/img/header_mail.png' border='0'/>
			
							   <font style='font-size:12px;'>Caro(a) usu&aacute;rio(a),
			
							   Seu cadastro foi efetuado com sucesso !
								
							   <strong>Email de Acesso</strong> ="." ".$email." "."| <strong>senha</strong> ="." ".$senha."
							   
							   
							   
							   D&uacute;vida ou Sugest&atilde;o envie para
							   <a href='mailto:contato@asalight.com.br'>contato@asalight.com.br</a></font>
							   
							   <img src='http://www.krush.com.br/testes/asalight/img/footer_mail.png' border='0'/>
							   
							   ");
										
						 	// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
							require("../phpmailer/class.phpmailer.php");
							 
							// Inicia a classe PHPMailer
							$mail = new PHPMailer();
							
							// Define os dados do servidor e tipo de conexão
							

							$mail->IsSMTP(); // Define que a mensagem será SMTP
							$mail->Host = "mail.anuncieservicos.com.br"; // Endereço do servidor SMTP
							$mail->SMTPAuth = true; // Autenticação
							$mail->Username = 'info@anuncieservicos.com.br'; // Usuário do servidor SMTP
							$mail->Password = 'silva123'; // Senha da caixa postal utilizada
							$mail->smtp_port = '25';
							 
							 // Define o remetente
							
							$mail->From = "contato@asalight.com.br"; 
							$mail->FromName = "AsaLight";  
							 
							 // Define os destinatário(s) 
							
							$mail->AddAddress($email, $email);
							//$mail->AddAddress('e-mail@destino2.com.br');
							//$mail->AddCC('copia@dominio.com.br', 'Copia'); 
							//$mail->AddBCC($cc, $cc); 
							 
							 // Define os dados técnicos da Mensagem
							
							$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
							//$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)
							 
							 // Texto e Assunto
							
							$mail->Subject  = $titulo; // Assunto da mensagem
							$mail->Body = $mensagem;
							 
							 // Anexos (opcional)
							
							//$mail->AddAttachment("e:\home\login\web\documento.pdf", "novo_nome.pdf");  
							
							 // Envio da Mensagem
							$enviado = $mail->Send();
							 
							 // Limpa os destinatários e os anexos
							$mail->ClearAllRecipients();
							$mail->ClearAttachments();
							 
							 // Exibe uma mensagem de resultado
							if ($enviado) {
								echo "<script>location.href='http://krush.com.br/testes/asalight/confirma-cadastro.php'</script>";
								//header("Location:efetuar_login_.php?email=$email&senha=$senha");
							} else {
								header("Location:error.php");
							}
		
	}else{
		
		header("Location:http://krush.com.br/testes/asalight/cadastro.php");
		
	}
?>