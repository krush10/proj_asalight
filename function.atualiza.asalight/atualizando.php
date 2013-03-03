<?php session_start();

	include("../conn/configuracao.php");
	
	if(isset($_SESSION['id_usuario'])){
		$id_user = $_SESSION['id_usuario'];
	}
	
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
	
	$query = mysql_query("UPDATE usuario SET nome_usuario = '". $nome_usuario ."', nome_completo = '". $nome_completo ."', cpf = '". $cpf ."', data_nascimento = '". $data_nascimento ."', 
	sexo = '". $sexo ."', telefone_residencial = '". $telefone_residencial ."', telefone_celular = '". $telefone_celular ."', telefone_comercial = '". $telefone_comercial ."', 
	email = '". $email ."', senha = '". $senha ."', cep = '". $cep ."', identifica_endereco = '". $identifica_endereco ."', endereco = '". $endereco ."', numero = '". $numero ."', 
	complemento = '". $complemento ."', bairro = '". $bairro ."', cidade = '". $cidade ."', estado = '". $estado ."', pais = '". $pais ."', info_referencia = '". $info_referencia ."' 
	WHERE id = ". $id_user ." ");
	
	header("Location: http://krush.com.br/testes/asalight/checkout.php");
	

?>