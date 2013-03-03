<?php

    include_once '../gerenciador.asalight.bean/ProgramaAlimentarBean.php';
    include_once '../gerenciador.asalight.dao/ProgramaAlimentarDao.php';
    
    $listaProgramaAlimentar = new ProgramaAlimentarBean();
    $programaDao = new ProgramaAlimentarDao();
    
    
    
    $listaProgramaAlimentar->setNome_Programa_Alimentar($_POST['nome_programa_alimentar']);
    $listaProgramaAlimentar->setDescricao($_POST['descricao']);
    $listaProgramaAlimentar->setCaloria($_POST['caloria']);
    
    if(isset($_POST['upload'])){
            $pasta = '../img_produto/';
            foreach($_FILES["img"]["error"] as $key => $error){
            if($error == UPLOAD_ERR_OK){
            $tmp_name = $_FILES["img"]["tmp_name"][$key];
            $cod = date('dmy') . '-' . $_FILES["img"]["name"][$key];
            $nome = $_FILES["img"]["name"][$key];
            $uploadfile = $pasta . basename($cod);
            
                if(move_uploaded_file($tmp_name, $uploadfile)){
                    $listaProgramaAlimentar->setImg_Produto($uploadfile);
                }
                }    
            }
            }
    
    
     $programaDao->cadastrarPrograma($listaProgramaAlimentar);

?>
