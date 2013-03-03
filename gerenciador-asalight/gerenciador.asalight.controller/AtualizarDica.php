<?php

    include_once '../gerenciador.asalight.bean/DicaBean.php';
    include_once '../gerenciador.asalight.dao/DicaDao.php';
    
    $listaDica = new DicaBean();
    $dicaDao = new DicaDao();
    
    if(isset($_POST['id_dica'])){$id = $_POST['id_dica'];}
    
    $listaDica->setDescricao($_POST['descricao']);
    
    
    $dicaDao->atualizarDica($listaDica, $id);
    

?>
