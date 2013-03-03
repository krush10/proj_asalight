<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CardapioCategoriaBean
 *
 * @author win
 */
class CardapioProdutoBean {
 
    private $nome_cardapio_produto;
    private $descricao;
    private $preco;
    private $quant_caloria;
    private $destaque;
    private $img_produto;
    private $id_cardapio_categoria;
    private $id_cardapio_subcategoria;
    
    
    
    public function __construct() {
    }
    
    
    public function getNome_Cardapio_Produto(){
        return $this->nome_cardapio_produto;
    } 

    public function setNome_Cardapio_Produto($nome_cardapio_produto){
        $this->nome_cardapio_produto = $nome_cardapio_produto;
    }
    
    /**/
    
    public function getDescricao(){
        return $this->descricao;
    } 

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
    
    /**/
    
    public function getPreco(){
        return $this->preco;
    } 

    public function setPreco($preco){
        $this->preco = $preco;
    }
    
    /**/
    
    public function getQuant_Caloria(){
        return $this->quant_caloria;
    } 

    public function setQuant_Caloria($quant_caloria){
        $this->quant_caloria = $quant_caloria;
    }
    
    /**/
    
    public function getDestaque(){
        return $this->destaque;
    } 

    public function setDestaque($destaque){
        $this->destaque = $destaque;
    }
    
    /**/
    
    public function getImg_Produto(){
       return $this->img_produto;
    } 
    
    public function setImg_Produto($img_produto){
        $this->img_produto[] = $img_produto;
    }
    
    /**/
    
    public function getId_Cardapio_Categoria(){
       return $this->id_cardapio_categoria;
    } 
    
    public function setId_Cardapio_Categoria($id_cardapio_categoria){
        $this->id_cardapio_categoria = $id_cardapio_categoria;
    }
    
    
    /**/
    
    public function getId_Cardapio_Subcategoria(){
       return $this->id_cardapio_subcategoria;
    } 
    
    public function setId_Cardapio_Subcategoria($id_cardapio_subcategoria){
        $this->id_cardapio_subcategoria = $id_cardapio_subcategoria;
    }
    
    
}

?>
