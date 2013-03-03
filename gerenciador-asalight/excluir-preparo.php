<?php

    include("conn/configuracao.php");
    
    if(isset($_GET['i'])){$id = $_GET['i'];}
    
    $deletarPreparo = mysql_query("DELETE FROM preparo_alimentos WHERE id = $id");
    
    header("Location:http://".$_SERVER['SERVER_NAME']."/testes/asalight/gerenciador-asalight/controlar-preparo-alimento.php");

?>
