<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DicaBean
 *
 * @author win
 */
class PreparoAlimentoBean {
   
    private $descricao;
    
    
    public function __construct() {
    }
    
    
    public function getDescricao(){
        return $this->descricao;
    } 

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
    
}

?>
