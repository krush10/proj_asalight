<?php

    include_once '../gerenciador.asalight.bean/CardapioSubCategoriaBean.php';
    include_once '../gerenciador.asalight.dao/CardapioSubCategoriaDao.php';
    
    $listaSubCategoria = new CardapioSubCategoriaBean();
    $subcategoriaDao = new CardapioSubCategoriaDao();
    
    
    if(isset($_POST['id_subcategoria'])){$id = $_POST['id_subcategoria'];}
    
    
    $listaSubCategoria->setNome_Subcategoria($_POST['nome_subcategoria']);
    $listaSubCategoria->setId_Categoria($_POST['id_categoria']);
    
    
    $subcategoriaDao->atualizarSubCategoria($listaSubCategoria, $id);
    

?>
