<?php

	include ('pgs_checkout.php');
	
	include ('conn/configuracao.php');
	
	if(isset($_SESSION['id_usuario'])){
		$id_comprador = $_SESSION['id_usuario'];
	}
	
	$Referencia = $id_comprador;
	
	
	$pgs_checkout = new pgs_checkout(array(
	  'email_cobranca' => 'cela_froes@hotmail.com',
	  'ref_transacao'=>$Referencia
	));
	
	
	$data = date("Y-m-d"); 
	
    
	$i = 0;
    $total = 0;
	$valor_frete =  number_format($_SESSION['valor_frete'], 2, '.', '.');
	foreach($_SESSION['lista_produtos'] as $id){
				
			$query = mysql_query("SELECT id, nome_cardapio_produto, preco FROM cardapio_produto WHERE id =" . $id . " ");
			
			if($query)	
			while($array = mysql_fetch_array($query)){
				$id = $array['id'];
				$nome_cardapio_produto = $array['nome_cardapio_produto'];
				$preco = $array['preco'];
				
				$_SESSION['qtd'.$i];
	           
		$pgs_checkout->adicionar(array(
		  array(
			"descricao"=>$nome_cardapio_produto,
			"valor"=>$preco,
			"quantidade"=>$_SESSION['qtd'.$i],
			"id"=>$id,
			"id_comprador"=>$id_comprador,
			"frete"=>$valor_frete
		  ),
		));
		$i = $i + 1; 
		}
	}
		
		
	$pgs_checkout->mostra();
	
?>