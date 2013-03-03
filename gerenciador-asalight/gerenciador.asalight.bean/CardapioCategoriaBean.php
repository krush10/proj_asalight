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
class CardapioCategoriaBean {
 
    private $nome_cardapio_categoria;
    private $descricao_cardapio_categoria;
    
    public function __construct() {
    }
    
    
    public function getNome_Cardapio_Categoria(){
        return $this->nome_cardapio_categoria;
    } 

    public function setNome_Cardapio_Categoria($nome_cardapio_categoria){
        $this->nome_cardapio_categoria = $nome_cardapio_categoria;
    }
    
    public function getDescricao_Cardapio_Categoria(){
        return $this->descricao_cardapio_categoria;
    } 

    public function setDescricao_Cardapio_Categoria($descricao_cardapio_categoria){
        $this->descricao_cardapio_categoria = $descricao_cardapio_categoria;
    }
    
}

?>
