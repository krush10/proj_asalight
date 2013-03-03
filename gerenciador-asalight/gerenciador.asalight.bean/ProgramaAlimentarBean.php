<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProgramaAlimentarBean
 *
 * @author win
 */
class ProgramaAlimentarBean {
    
   private $nome_programa_alimentar;
   private $descricao;
   private $caloria;
   private $img_produto;
   
    public function __construct() {
    }
    
    
    public function getNome_Programa_Alimentar(){
        return $this->nome_programa_alimentar;
    } 

    public function setNome_Programa_Alimentar($nome_programa_alimentar){
        $this->nome_programa_alimentar = $nome_programa_alimentar;
    }
    
    public function getDescricao(){
        return $this->descricao;
    }
    
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
     
    public function getCaloria(){
        return $this->caloria;
    }
    
    public function setCaloria($caloria){
        $this->caloria = $caloria;
    }
    
    public function getImg_Produto(){
        return $this->img_produto;
    }
    
    public function setImg_Produto($img_produto){
        $this->img_produto[] = $img_produto;
    }
    
    
}

?>
