<?php

include_once '../conn/configuracao.php';
include_once '../gerenciador.asalight.bean/CardapioProdutoBean.php';

class CardapioProdutoDao {
   
    public function __construct() {
  
    }
    
    public function cadastrarCardapioProduto(CardapioProdutoBean $cardapio){
     
        $inserirProduto = mysql_query("INSERT INTO cardapio_produto (nome_cardapio_produto,descricao,preco,quant_caloria,destaque,img_produto,id_cardapio_categoria,id_cardapio_subcategoria,exibir) VALUES ('".$cardapio->getNome_Cardapio_Produto()."','".$cardapio->getDescricao()."','".$cardapio->getPreco()."','".$cardapio->getQuant_Caloria()."','".$cardapio->getDestaque()."','','".$cardapio->getId_Cardapio_Categoria()."','".$cardapio->getId_Cardapio_Subcategoria()."','sim')");    
        
        $recuperarIdProduto = mysql_query('SELECT id FROM cardapio_produto ORDER BY id DESC LIMIT 1');
        $dados = @mysql_fetch_array($recuperarIdProduto);
        $id_produto = $dados['id'];
        
        foreach ($cardapio->getImg_Produto() as $produto_img){  
            $inserirImagens = mysql_query("INSERT INTO img_cardapio_produto (img_cardapio_produto,id_cardapio_produto) VALUES ('".$produto_img."',$id_produto)");  
        } 
        
        header("Location:http://".$_SERVER['SERVER_NAME']."/testes/asalight/gerenciador-asalight/home.php");
    
    }
    
    public function atualizarCardapioProduto(CardapioProdutoBean $cardapio, $id){
     
        $atualizar = mysql_query("UPDATE cardapio_produto SET nome_cardapio_produto ='".$cardapio->getNome_Cardapio_Produto()."', descricao='".$cardapio->getDescricao()."', preco='".$cardapio->getPreco()."', quant_caloria='".$cardapio->getQuant_Caloria()."', destaque='".$cardapio->getDestaque()."', id_cardapio_categoria='".$cardapio->getId_Cardapio_Categoria()."' WHERE id = $id");
        
        
        if($cardapio->getImg_Produto() != ""){
        foreach ($cardapio->getImg_Produto() as $produto_img){  
            $inserirImagens = mysql_query('UPDATE img_cardapio_produto SET img_cardapio_produto="'.$produto_img.'" WHERE id_cardapio_produto="'.$id.'" ');
            //$inserirImagens = mysql_query("INSERT INTO img_cardapio_produto (img_cardapio_produto,id_cardapio_produto) VALUES ('".$produto_img."','".$id_produto."')"); 
            
        } 
        }
        
        header("Location:http://".$_SERVER['SERVER_NAME']."/testes/asalight/gerenciador-asalight/home.php");
    
    }
    
    
}

?>
