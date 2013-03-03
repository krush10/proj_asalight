<?php

    include_once '../gerenciador.asalight.bean/ProgramaAlimentarPeriodoBean.php';
    include_once '../gerenciador.asalight.dao/ProgramaAlimentarPeriodoDao.php';
    
    $listaProgramaAlimentar = new ProgramaAlimentarPeriodoBean();
    $programaDao = new ProgramaAlimentarPeriodoDao();
    
    
    if(isset($_POST['id_programa'])){$id = $_POST['id_programa'];}
    if(isset($_POST['periodo'])){$periodo = $_POST['periodo'];}
    
    $listaProgramaAlimentar->setSegunda($_POST['segunda']);
    $listaProgramaAlimentar->setTerca($_POST['terca']);
    $listaProgramaAlimentar->setQuarta($_POST['quarta']);
    $listaProgramaAlimentar->setQuinta($_POST['quinta']);
    $listaProgramaAlimentar->setSexta($_POST['sexta']);
    $listaProgramaAlimentar->setSabado($_POST['sabado']);
    $listaProgramaAlimentar->setDomingo($_POST['domingo']);
    
            
    $programaDao->atualizarPrograma($listaProgramaAlimentar, $id, $periodo); 
    
?>
