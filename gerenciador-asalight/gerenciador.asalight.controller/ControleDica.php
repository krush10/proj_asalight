<?php

    include_once '../gerenciador.asalight.bean/DicaBean.php';
    include_once '../gerenciador.asalight.dao/DicaDao.php';
    
    $listaDica = new DicaBean();
    $dicaDao = new DicaDao();
    
    
    
    if(isset($_POST['upload'])){
            $pasta = '../img_produto/';
            foreach($_FILES["img"]["error"] as $key => $error){
            if($error == UPLOAD_ERR_OK){
            $tmp_name = $_FILES["img"]["tmp_name"][$key];
            $cod = date('dmy') . '-' . $_FILES["img"]["name"][$key];
            $nome = $_FILES["img"]["name"][$key];
            $uploadfile = $pasta . basename($cod);
            
                if(move_uploaded_file($tmp_name, $uploadfile)){
                    $listaDica->setDescricao($uploadfile);
                }
                }    
            }
            }
    
    
    $dicaDao->cadastrarDica($listaDica);
    

?>
