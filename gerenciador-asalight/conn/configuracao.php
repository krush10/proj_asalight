<?php 
//$host = "localhost";
//$usuario = "root";
//$senha = "";
//$banco = "asalight_db";

/* Área de Testes */

$host = "186.202.152.34";
$usuario = "comunicacaomac11";
$senha = "Krus2350";
$banco = "comunicacaomac11";

$conn = mysql_connect($host,$usuario,$senha);

$db = mysql_select_db($banco,$conn);

	if(!($conn)){
		header("Location:error.php");
	}
?>
