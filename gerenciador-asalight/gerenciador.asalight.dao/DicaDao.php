<?php

include_once '../conn/configuracao.php';
include_once '../gerenciador.asalight.bean/DicaBean.php';

class DicaDao {
   
    public function __construct() {
    }
    
    public function cadastrarDica(DicaBean $dica){ 
    
    foreach ($dica->getDescricao() as $img){  
    $inserirDica = mysql_query("INSERT INTO dicas (descricao) VALUES ('".$img."')");  
    } 
    header("Location:http://".$_SERVER['SERVER_NAME']."/testes/asalight/gerenciador-asalight/home.php");
    
    }
    
    
    //public function atualizarDica(DicaBean $dica, $id){
        
        //$atualizarDica = mysql_query("UPDATE dicas SET descricao = '".$dica->getDescricao()."' WHERE id = $id ");
        
        //header("Location:http://".$_SERVER['SERVER_NAME']."/testes/asalight/gerenciador-asalight/home.php");
        
    //}
    
    
    
}

?>
