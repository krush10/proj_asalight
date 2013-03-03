<?php

    include_once '../gerenciador.asalight.bean/ProgramaAlimentarPeriodoBean.php';
    include_once '../gerenciador.asalight.dao/ProgramaAlimentarPeriodoDao.php';
    
    $listaProgramaAlimentarPeriodo = new ProgramaAlimentarPeriodoBean();
    $programaPeriodoDao = new ProgramaAlimentarPeriodoDao();
    
    
    
    $listaProgramaAlimentarPeriodo->setPeriodo_Dia($_POST['periodo_dia']);
    $listaProgramaAlimentarPeriodo->setSegunda($_POST['segunda']);
    $listaProgramaAlimentarPeriodo->setTerca($_POST['terca']);
    $listaProgramaAlimentarPeriodo->setQuarta($_POST['quarta']);
    $listaProgramaAlimentarPeriodo->setQuinta($_POST['quinta']);
    $listaProgramaAlimentarPeriodo->setSexta($_POST['sexta']);
    $listaProgramaAlimentarPeriodo->setSabado($_POST['sabado']);
    $listaProgramaAlimentarPeriodo->setDomingo($_POST['domingo']);
    
    $listaProgramaAlimentarPeriodo->setIdProgramaAlimentar($_POST['id_programa_alimentar']);
    
    
    $programaPeriodoDao->cadastrarPrograma($listaProgramaAlimentarPeriodo);

?>
