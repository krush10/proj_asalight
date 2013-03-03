<?php

    include_once '../gerenciador.asalight.bean/PreparoAlimentoBean.php';
    include_once '../gerenciador.asalight.dao/PreparoAlimentoDao.php';
    
    $listaPreparoAlimento = new PreparoAlimentoBean();
    $preparoDao = new PreparoAlimentoDao();
    
    
    
    $listaPreparoAlimento->setDescricao($_POST['descricao']);
    
    
    $preparoDao->cadastrarPreparo($listaPreparoAlimento);
    

?>
