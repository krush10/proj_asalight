<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CardapioSubCategoriaBean
 *
 * @author win
 */
class CardapioSubCategoriaBean {
    
    private $nome_subcategoria;
    private $id_categoria;
    private $exibir;
    
    
    public function __construct() {
    }
    
    
    public function getNome_Subcategoria(){
        return $this->nome_subcategoria;
    } 

    public function setNome_Subcategoria($nome_subcategoria){
        $this->nome_subcategoria = $nome_subcategoria;
    }
    
    public function getId_Categoria(){
        return $this->id_categoria;
    } 

    public function setId_Categoria($id_categoria){
        $this->id_categoria = $id_categoria;
    }
    
    public function getExibir(){
        return $this->exibir;
    } 

    public function setExibir($exibir){
        $this->exibir = $exibir;
    }
    
    
}

?>
