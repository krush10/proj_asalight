<?php
include_once '../conn/configuracao.php';
include_once '../gerenciador.asalight.bean/CardapioCategoriaBean.php';

class CardapioCategoriaDao {

    public function __construct() {
    
        
        
    }
    
    public function cadastrarCardapioCategoria(CardapioCategoriaBean $cardapio){
     
    $inserirCategoria = mysql_query("INSERT INTO cardapio_categoria (nome_cardapio_categoria,descricao_cardapio_categoria) VALUES ('".$cardapio->getNome_Cardapio_Categoria()."','".$cardapio->getDescricao_Cardapio_Categoria()."')");    
     
    header("Location:http://".$_SERVER['SERVER_NAME']."/testes/asalight/gerenciador-asalight/home.php");
    
    }
    
}

?>
