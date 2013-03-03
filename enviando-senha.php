<?php 

	include("conn/configuracao.php");
	
	if(isset($_POST['email'])){ $email = $_POST['email']; }
	
	$recuperarSenha = mysql_query("SELECT senha FROM usuario WHERE email = '$email' ");
	$array = @mysql_fetch_array($recuperarSenha);
	$senha = $array['senha'];
	

	$titulo = "Senha recuperada AsaLight";
		   $mensagem = nl2br("<img src='http://www.krush.com.br/testes/asalight/img/header_mail.png' border='0'/>
			
		   <font style='font-size:12px;'>Caro(a) usu&aacute;rio(a),

		   Seus dados de acesso foram recuperados com sucesso.
			
		   <strong>Email de Acesso</strong> ="." ".$email." "."| <strong>senha</strong> ="." ".$senha."
		   
		   
		   
		   D&uacute;vida ou Sugest&atilde;o envie para
		   <a href='mailto:contato@asalight.com.br'>contato@asalight.com.br</a></font>
		   
		   <img src='http://www.krush.com.br/testes/asalight/img/footer_mail.png' border='0'/>
		   
		   ");
					
		// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
		require("phpmailer/class.phpmailer.php");
		 
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
			echo "<script>location.href='http://krush.com.br/testes/asalight/'</script>";
			//header("Location:efetuar_login_.php?email=$email&senha=$senha");
		} else {
			header("Location:error.php");
		}


?>