<?php

    include("conn/configuracao.php");
    
    if(isset($_GET['i'])){$id = $_GET['i'];}
    
    $deletarProdutoIMG = mysql_query("DELETE FROM img_cardapio_produto WHERE id_cardapio_produto = $id");
    $deletarProduto = mysql_query("DELETE FROM cardapio_produto WHERE id = $id");
    
    header("Location:http://".$_SERVER['SERVER_NAME']."/testes/asalight/gerenciador-asalight/controlar-produto-cardapio.php");

?>
