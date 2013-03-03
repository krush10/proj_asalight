<?php 

	include("conn/configuracao.php");
	
	if(isset($_GET['id_util'])){
		$email = $_GET['id_util'];
	}
	
	$query = mysql_query("SELECT email FROM usuario WHERE email = '$email' LIMIT 1");
	$dados = @mysql_fetch_array($query);
	$email_usuario = $dados['email'];
	
	//$query = mysql_query("SELECT exibir FROM medico WHERE email = '$email' LIMIT 1");
	//$dados = @mysql_fetch_array($query);
	//$exibir = $dados['exibir'];
		
		if(!(empty($email_usuario))){
			echo "<font>email j&aacute; est&aacute; cadastrado.</font>";
		}
	

	
?>