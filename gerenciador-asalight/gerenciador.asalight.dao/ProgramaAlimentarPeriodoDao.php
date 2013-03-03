<?php

include_once '../conn/configuracao.php';
include_once '../gerenciador.asalight.bean/ProgramaAlimentarPeriodoBean.php';

class ProgramaAlimentarPeriodoDao {
    
    public function __construct() {
    }
    
    public function cadastrarPrograma(ProgramaAlimentarPeriodoBean $programa){
     
    $inserirProgramaAlimentar = mysql_query("INSERT INTO programa_alimentar_periodo (periodo_dia,segunda,terca,quarta,quinta,sexta,sabado,domingo,id_programa_alimentar) VALUES ('".$programa->getPeriodo_Dia()."','".$programa->getSegunda()."','".$programa->getTerca()."','".$programa->getQuarta()."','".$programa->getQuinta()."','".$programa->getSexta()."','".$programa->getSabado()."','".$programa->getDomingo()."','".$programa->getIdProgramaAlimentar()."')");    
    
    header("Location:http://".$_SERVER['SERVER_NAME']."/testes/asalight/gerenciador-asalight/cadastrar-programa-alimentar-periodo.php?prog=".$programa->getIdProgramaAlimentar()." ");
    
    }
    
    public function cadastrarProgramaP(ProgramaAlimentarPeriodoBean $programa, $id){
     
    $inserirProgramaAlimentar = mysql_query("INSERT INTO programa_alimentar_periodo (periodo_dia,segunda,terca,quarta,quinta,sexta,sabado,domingo,id_programa_alimentar) VALUES ('".$programa->getPeriodo_Dia()."','".$programa->getSegunda()."','".$programa->getTerca()."','".$programa->getQuarta()."','".$programa->getQuinta()."','".$programa->getSexta()."','".$programa->getSabado()."','".$programa->getDomingo()."','".$programa->getIdProgramaAlimentar()."')");    
    
    header("Location:http://".$_SERVER['SERVER_NAME']."/testes/asalight/gerenciador-asalight/atualizar-programa-alimentar-periodo.php?prog=$id ");
    
    }
    
    public function atualizarPrograma(ProgramaAlimentarPeriodoBean $programa, $id, $periodo){
      
    $atualizarPrograma = mysql_query("UPDATE programa_alimentar_periodo SET segunda = '".$programa->getSegunda()."', terca = '".$programa->getTerca()."', quarta = '".$programa->getQuarta()."', quinta = '".$programa->getQuinta()."', sexta = '".$programa->getSexta()."', sabado = '".$programa->getSabado()."', domingo = '".$programa->getDomingo()."' WHERE periodo_dia = '".$periodo."' AND id_programa_alimentar = $id");
    
    header("Location:http://".$_SERVER['SERVER_NAME']."/testes/asalight/gerenciador-asalight/atualizar-programa-alimentar-periodo.php?prog=$id ");
    
    }
    
}

?>
