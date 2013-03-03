<?php

include_once '../conn/configuracao.php';
include_once '../gerenciador.asalight.bean/PreparoAlimentoBean.php';

class PreparoAlimentoDao {
   
    public function __construct() {
    }
    
    public function cadastrarPreparo(PreparoAlimentoBean $preparo){
     
    $inserirPreparoAlimento = mysql_query("INSERT INTO preparo_alimentos (descricao) VALUES ('".$preparo->getDescricao()."')");    
     
    header("Location:http://".$_SERVER['SERVER_NAME']."/testes/asalight/gerenciador-asalight/home.php");
    
    }
    
    
    public function atualizarPreparo(PreparoAlimentoBean $preparo, $id){
        
        $atualizarPreparoAlimento = mysql_query("UPDATE preparo_alimentos SET descricao = '".$preparo->getDescricao()."' WHERE id = $id ");
        
        header("Location:http://".$_SERVER['SERVER_NAME']."/testes/asalight/gerenciador-asalight/home.php");
        
    }
    
}

?>
