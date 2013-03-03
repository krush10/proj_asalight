<?php

    include_once '../gerenciador.asalight.bean/PreparoAlimentoBean.php';
    include_once '../gerenciador.asalight.dao/PreparoAlimentoDao.php';
    
    $listaPreparoAlimento = new PreparoAlimentoBean();
    $preparoDao = new PreparoAlimentoDao();
    
    
    if(isset($_POST['id_preparo'])){$id = $_POST['id_preparo'];}
    
    
    $listaPreparoAlimento->setDescricao($_POST['descricao']);
    
    
    $preparoDao->atualizarPreparo($listaPreparoAlimento, $id);
    

?>
