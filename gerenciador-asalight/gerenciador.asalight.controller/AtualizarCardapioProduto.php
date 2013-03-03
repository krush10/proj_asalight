<?php

    include_once '../gerenciador.asalight.bean/CardapioProdutoBean.php';
    include_once '../gerenciador.asalight.dao/CardapioProdutoDao.php';
    
    $listaCardapioProduto = new CardapioProdutoBean();
    $cardapioProdutoDao = new CardapioProdutoDao();
    
    
    if(isset($_POST['id_produto'])){$id = $_POST['id_produto'];}
    
    
    $listaCardapioProduto->setDescricao($_POST['descricao']);
    $listaCardapioProduto->setDestaque($_POST['destaque']);
    $listaCardapioProduto->setId_Cardapio_Categoria($_POST['id_cardapio_categoria']);
    $listaCardapioProduto->setNome_Cardapio_Produto($_POST['nome_cardapio_produto']);
    $listaCardapioProduto->setPreco($_POST['preco']);
    $listaCardapioProduto->setQuant_Caloria($_POST['quant_caloria']);
    
    
    if(isset($_POST['upload'])){
            $pasta = '../img_produto/';
            foreach($_FILES["img"]["error"] as $key => $error){
            if($error == UPLOAD_ERR_OK){
            $tmp_name = $_FILES["img"]["tmp_name"][$key];
            $cod = date('dmy') . '-' . $_FILES["img"]["name"][$key];
            $nome = $_FILES["img"]["name"][$key];
            $uploadfile = $pasta . basename($cod);
            
                if(move_uploaded_file($tmp_name, $uploadfile)){
                    $listaCardapioProduto->setImg_Produto($uploadfile);
                }
                }    
            }
            }
            
    
            
            $cardapioProdutoDao->atualizarCardapioProduto($listaCardapioProduto, $id);
    
    
    
    
?>
