<?php
    
    include_once '../gerenciador.asalight.bean/CardapioCategoriaBean.php';
    include_once '../gerenciador.asalight.dao/CardapioCategoriaDao.php';
    
    
    $listaCardapioCategoria = new CardapioCategoriaBean();
    $cadarpioCategoriaDao = new CardapioCategoriaDao();
    
    $listaCardapioCategoria->setNome_Cardapio_Categoria($_POST['nome_cardapio_categoria']);
    $listaCardapioCategoria->setDescricao_Cardapio_Categoria($_POST['descricao_cardapio_categoria']);
    

    $cadarpioCategoriaDao->cadastrarCardapioCategoria($listaCardapioCategoria);
    
    
    
    

?>
