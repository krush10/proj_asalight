<meta http-equiv="refresh" content="4;URL=http://krush.com.br/testes/asalight/">
<!--?php header('Content-Type: text/html; charset=ISO-8859-1');

define('TOKEN','39D0EA6038B8441BBE8F6462BA974B8C');

include ('conn/configuracao.php');

class PagSeguroNpi {
	
	private $timeout = 20; // Timeout em segundos
	
	public function notificationPost() {
		$postdata = 'Comando=validar&Token='.TOKEN;
		foreach ($_POST as $key => $value) {
			$valued    = $this->clearStr($value);
			$postdata .= "&$key=$valued";
		}
		return $this->verify($postdata);
	}
	
	private function clearStr($str) {
		if (!get_magic_quotes_gpc()) {
			$str = addslashes($str);
		}
		return $str;
	}
	
	private function verify($data) {
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, "https://pagseguro.uol.com.br/pagseguro-ws/checkout/NPI.jhtml"); // Padrão https://pagseguro.uol.com.br/pagseguro-ws/checkout/NPI.jhtml
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HEADER, false);
		curl_setopt($curl, CURLOPT_TIMEOUT, $this->timeout);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		$result = trim(curl_exec($curl));
		curl_close($curl);
		return $result;
	}

}

if (count($_POST) > 0) {
	
	// POST recebido, indica que é a requisição do NPI.
	$npi = new PagSeguroNpi();
	$result = $npi->notificationPost();
	
	$transacaoID = isset($_POST['TransacaoID']) ? $_POST['TransacaoID'] : '';
	
	if ($result == "VERIFICADO") {
		
		$StatusTransacao = $_POST['StatusTransacao'];
		
		$ProdID = $_POST['ProdID_1'];
		
		$ref_transacao = $_POST['Referencia'];
		
		$retorna_produto = mysql_query("SELECT * FROM cardapio_produto WHERE id = $ProdID");
	
		while($array = mysql_fetch_array($retorna_produto)){
			$nome_produto_cardapio = $array['nome_produto_cardapio'];
			$preco = $array['preco'];
		}
		
		$data = date("Y-m-d"); 
	
		$quantidade = 1;
	
		$inserir_inicio_compra = mysql_query("INSERT INTO vendas(status_venda,data_venda,nome_produto,preco,id_comprador,id_produto) VALUES ('$StatusTransacao','$data','$nome_produto_cardapio',$preco,,$ProdID)");
		
	} else if ($result == "FALSO") {
	
		$StatusTransacao = $_POST['StatusTransacao'];
		
		$ProdID = $_POST['ProdID_1'];
		
		$ref_transacao = $_POST['Referencia'];
		
		$retorna_produto = mysql_query("SELECT * FROM cardapio_produto WHERE id = $ProdID");
	
		while($array = mysql_fetch_array($retorna_produto)){
			$nome_produto_cardapio = $array['nome_produto_cardapio'];
			$preco = $array['preco'];
		}
		
		$data = date("Y-m-d"); 
	
		$quantidade = 1;
	
		$inserir_inicio_compra = mysql_query("INSERT INTO vendas(status_venda,data_venda,nome_produto,preco,id_comprador,id_produto) VALUES ('$StatusTransacao','$data','$nome_produto_cardapio',$preco,,$ProdID)");
		
	} else {
		//Erro na integração com o PagSeguro.
	}
	
} else {
	// POST não recebido, indica que a requisição é o retorno do Checkout PagSeguro.
	// No término do checkout o usuário é redirecionado para este bloco.
	echo "<div class='corpo'>";
    	echo "<div id='logo'>";
        	echo "<img src='img/logo.png' />";
        echo "</div>";
		echo"<div id='redirecionar'>";
        	echo"<table cellspacing='5'>";
            	echo"<tr>";
                	echo"<td><strong><font style='font-family:Arial, Helvetica, sans-serif; font-size:15px; color:#666666;'>Redirecionando</font></strong></td>";
                    echo"<td><img src='img/ajax-loader-um.gif' style='margin-top:5px;' /></td>";
                echo"</tr>";
            echo"</table>";
        echo"</div>";
    echo '</div>';
	
	?>
    <style type="text/css">
    	 body{
		 	margin-top:0px;
		 }
		 
		.corpo{
			width:995px;
			height:290px;
			background:#E5E5E5;
			margin:0 auto;
			margin-top:90px;
		}
		
		.corpo #logo{
			margin-left:353px;
			padding:20px;
		}
		
		.corpo #redirecionar{
			background:#FFFFFF;
			margin-top:30px;
		}
		
		.corpo #redirecionar table{
			margin-left:410px;
		}
    </style>
    <php
}

?-->

 <?php

$retorno_token = '39D0EA6038B8441BBE8F6462BA974B8C';

define(TOKEN, $retorno_token);

class createLog{
private $name = 'ps.txt';
private $type = 'ab';
public $log;
 
function setType($type = '') {
$this -> type = $type;
}
function setFileName($name = ''){
$this -> name = $name;
}
public function setLog($log){

// Array Contendo os Caracteres que serão Substituidos ou Removidos.
$Array_Subst = array(">" => "", ")" => "", "array (" => "", "array ( " => "", "  " => "", "\n" => "");

// Substituimos e/ou Removemos os Caracteres.
$Substitui = strtr($log, $Array_Subst);

// Substituimos ',' por ' = '
$Formatacao_Log  = preg_replace("/','/","' = '",$Substitui);

// Substituimos ', por '
$Formatacao_Log2 = preg_replace("/',/","'",$Formatacao_Log);

// Substituimos ' = ' por '='
$Formatacao_Log3 = preg_replace("/' = '/","'='",$Formatacao_Log2);

// Guardamos essas Informações
$this -> log = $Formatacao_Log3;

if($log != ""){

return TRUE;

}else{

return FALSE;

}

}

public function createlog(){
$f = fopen ($this -> name, $this -> type);
fwrite($f, $this -> log);
fclose($f); 
}
}

// Chamamos a Função que Guarda os Arquivos no Log
$log = new createLog();
$log -> setLog(var_export($_POST, true));
$log -> createlog();


// Abrimos o Arquivo.
$arquivo = fopen ("ps.txt", "r+"); 

// Pegamos os Dados do Log e armazenamos em uma Variavel
if ($Linha = fgets($arquivo, 102400)){ 

// Criamos um Array com os Dados do Log
$Cria_Array = explode("=", $Linha);

// Contamos quantos Valores o Array tem.
$Contador = count($Cria_Array);

// Definimos uma Variavel que Recebera todas as Informações.
$Dados_Url;

// Fazemos um Loop de acordo com a Quantidade de Valores do Array.
for($i=0; $i<$Contador; $i++){

// Verificamos se $i é Par ou Impar 
$Par = ($i % 2);

// Se $i for Par entra nessa Condição.
if($Par == 0){

// Retiramos os Espaços e as Aspas Simples da String.
$Info_PagSeguro = str_replace(" ", "", str_replace("'", "", $Cria_Array[$i]));

// Guardamos os Dados em uma Variavel.
$Dados_Url .= $Info_PagSeguro."=";

// Se $i for Impar entra nessa Condição.
}else{

// Retiramos as Aspas Simples da String.
$Retira_Aspas = str_replace("'", "", $Cria_Array[$i]);

// Substituimos os Espaços por +
$Info_Cliente = str_replace(' ', '+', $Retira_Aspas);

// Guardamos os Dados em uma Variavel.
$Dados_Url .= $Info_Cliente."&";

}

}

}

// Definimos o Tempo de Envio das Informações ao PagSeguro.
$Tempo = 20;

// Juntamos TODOS os Dados que serão Enviados ao PagSeguro.
$Dados_Url_Completo ='Comando=validar&Token='.TOKEN.'&'.$Dados_Url;

function Envia_Url($Data, $Tmp){

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://pagseguro.uol.com.br/pagseguro-ws/checkout/NPI.jhtml");
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $Data);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_TIMEOUT, $Tmp);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$result = trim(curl_exec($curl));
curl_close($curl);

// Retornamos a Resposta do PagSeguro.
return $result;

}

// Fechamos o Arquivo.
fclose ($arquivo);

// Guardamos a Resposta do PagSeguro em uma Variavel.
$Verificacao = Envia_Url($Dados_Url_Completo, $Tempo);


if($Verificacao == "VERIFICADO"){

echo"Seu Pedido foi Concretizado!";

}else{

echo"Seu Pedido não foi Concretizado!";

}

// Limpamos o Log.
$arquivo2 = fopen("ps.txt", "w");

fclose($arquivo2);

?>