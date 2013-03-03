<?php ob_start(); 
	header("Content-Type: text/html; charset=iso-8859-1",true);
	
	require "conn/configuracao.php";
	require "verifica_logado.php";
	
	session_destroy();
	echo "<script>location.href='index.php'</script>";

?>