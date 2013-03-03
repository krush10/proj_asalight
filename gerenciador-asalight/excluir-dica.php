<?php

    include("conn/configuracao.php");
    
    if(isset($_GET['i'])){$id = $_GET['i'];}
    
    $deletarDica = mysql_query("DELETE FROM dicas WHERE id = $id");
    
    header("Location:http://".$_SERVER['SERVER_NAME']."/testes/asalight/gerenciador-asalight/controlar-dica.php");

?>
