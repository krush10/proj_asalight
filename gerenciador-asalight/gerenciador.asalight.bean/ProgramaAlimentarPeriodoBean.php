<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProgramaAlimentarPeriodoBean
 *
 * @author win
 */
class ProgramaAlimentarPeriodoBean {
    
    private $periodo_dia;
    private $segunda;
    private $terca;
    private $quarta;
    private $quinta;
    private $sexta;
    private $sabado;
    private $domingo;
    
    private $id_programa_alimentar;
    
    public function __construct() {
    }
    
    public function getPeriodo_Dia(){
        return $this->periodo_dia;
    } 

    public function setPeriodo_Dia($periodo_dia){
        $this->periodo_dia = $periodo_dia;
    }
    
    public function getSegunda(){
        return $this->segunda;
    } 

    public function setSegunda($segunda){
        $this->segunda = $segunda;
    }
    
    public function getTerca(){
        return $this->terca;
    } 

    public function setTerca($terca){
        $this->terca = $terca;
    }
    
    public function getQuarta(){
        return $this->quarta;
    } 

    public function setQuarta($quarta){
        $this->quarta = $quarta;
    }
    
    public function getQuinta(){
        return $this->quinta;
    } 

    public function setQuinta($quinta){
        $this->quinta = $quinta;
    }
    
    public function getSexta(){
        return $this->sexta;
    } 

    public function setSexta($sexta){
        $this->sexta = $sexta;
    }
    
    
    public function getSabado(){
        return $this->sabado;
    } 

    public function setSabado($sabado){
        $this->sabado = $sabado;
    }
    
    public function getDomingo(){
        return $this->domingo;
    } 

    public function setDomingo($domingo){
        $this->domingo = $domingo;
    }
    
    public function getIdProgramaAlimentar(){
        return $this->id_programa_alimentar;
    } 

    public function setIdProgramaAlimentar($id_programa_alimentar){
        $this->id_programa_alimentar = $id_programa_alimentar;
    }
    
    
}

?>
