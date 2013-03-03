<?php

    include("conn/configuracao.php");
    
    if(isset($_GET['i'])){$id = $_GET['i'];}
    
    $deletarSubCategoria = mysql_query("UPDATE cardapio_subcategoria SET exibir = 'nao' WHERE id = $id");
    
    header("Location:http://".$_SERVER['SERVER_NAME']."/testes/asalight/gerenciador-asalight/controlar-subcategoria.php");

?>
