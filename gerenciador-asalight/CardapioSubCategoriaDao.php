<?php
include_once '../conn/configuracao.php';
include_once '../gerenciador.asalight.bean/CardapioSubCategoriaBean.php';


class CardapioSubCategoriaDao {
    
    public function __construct() {
    }
    
    
    public function gravarSubCategoria(CardapioSubCategoriaBean $subcategoria){
        
        $inserirCategoria = mysql_query("INSERT INTO cardapio_subcategoria (nome_subcategoria,id_categoria,exibir) VALUES ('".$subcategoria->getNome_Subcategoria()."','".$subcategoria->getId_Categoria()."','sim')");    

        header("Location:http://".$_SERVER['SERVER_NAME']."/testes/asalight/gerenciador-asalight/cadastrar-subcategoria.php");
    
        
    }
    
    
    public function atualizarSubCategoria(CardapioSubCategoriaBean $subcategoria, $id){
        
        $atualizarCategoria = mysql_query("UPDATE cardapio_subcategoria SET nome_subcategoria ='".$subcategoria->getNome_Subcategoria()."', id_categoria='".$subcategoria->getId_Categoria()."' WHERE id='".$id."' ");
        
        header("Location:http://".$_SERVER['SERVER_NAME']."/testes/asalight/gerenciador-asalight/home.php");
        
    }
    
}

?>
