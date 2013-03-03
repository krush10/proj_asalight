<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<?php
/*

 Retorno PagSeguro 2.0 - PHP e MySQL
 por Diogo Dourado - www.dourado.net
 Última Atualização: 09/06/2011
 
 Se você ainda não é cadastrado no PagSeguro, utilize o link abaixo para se cadastrar:
 https://pagseguro.uol.com.br/?ind=528005

*/

$retorno_site = 'CompraConcluida.html';  // Site para onde o usuário vai ser redirecionado ao termino do pagamento
$retorno_token = 'C3F652F5FCF041F8BC16F18BA8F639C3'; // Token gerado pelo PagSeguro

//$retorno_host = 'localhost'; // Local da base de dados MySql
//$retorno_database = 'PREENCHA'; // Nome da base de dados MySql
//$retorno_usuario = 'PREENCHA'; // Usuario com acesso a base de dados MySql
//$retorno_senha = 'PREENCHA';  // Senha de acesso a base de dados MySql

$retorno_host = "186.202.152.34";
$retorno_database = "comunicacaomac11";
$retorno_senha = "Krus2350";
$retorno_usuario = "comunicacaomac11";


?>