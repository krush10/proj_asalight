<?php

include_once '../conn/configuracao.php';
include_once '../gerenciador.asalight.bean/ProgramaAlimentarBean.php';

class ProgramaAlimentarDao {
    
    public function __construct() {
    }
    
    public function cadastrarPrograma(ProgramaAlimentarBean $programa){
     
    $inserirProgramaAlimentar = mysql_query("INSERT INTO programa_alimentar (nome_programa_alimentar, descricao, caloria, img_programa_alimentar,exibir) VALUES ('".$programa->getNome_Programa_Alimentar()."','".$programa->getDescricao()."','".$programa->getCaloria()."','','sim')");    
    
    $recuperarIdPrograma = mysql_query('SELECT id FROM programa_alimentar ORDER BY id DESC LIMIT 1');
    $dados = @mysql_fetch_array($recuperarIdPrograma);
    $id_programa = $dados['id'];
    
    foreach ($programa->getImg_Produto() as $produto_img){  
        $inserirProgramaAlimentar = mysql_query('UPDATE programa_alimentar SET img_programa_alimentar="'.$produto_img.'" WHERE id="'.$id_programa.'" ');
    } 
    
    header("Location:http://".$_SERVER['SERVER_NAME']."/testes/asalight/gerenciador-asalight/cadastrar-programa-alimentar-periodo.php?prog=$id_programa");
    
    }
    
    
    public function atualizarPrograma(ProgramaAlimentarBean $programa, $id){
      
    if($programa->getImg_Produto() != ""){    
        $atualizarProgramaAlimentar = mysql_query("UPDATE programa_alimentar SET nome_programa_alimentar = '".$programa->getNome_Programa_Alimentar()."', descricao = '".$programa->getDescricao()."', caloria = '".$programa->getCaloria()."' WHERE id = $id ");   
        foreach ($programa->getImg_Produto() as $produto_img){  
            $inserirImagem = mysql_query('UPDATE programa_alimentar SET img_programa_alimentar="'.$produto_img.'" WHERE id="'.$id.'" '); 
        } 
    }else{
        $atualizarProgramaAlimentar = mysql_query("UPDATE programa_alimentar SET nome_programa_alimentar = '".$programa->getNome_Programa_Alimentar()."', descricao = '".$programa->getDescricao()."', caloria = '".$programa->getCaloria()."' WHERE id = $id ");   
    }
    
    header("Location:http://".$_SERVER['SERVER_NAME']."/testes/asalight/gerenciador-asalight/atualizar-programa-alimentar-periodo.php?prog=$id");
        
    }
    
    
}

?>
