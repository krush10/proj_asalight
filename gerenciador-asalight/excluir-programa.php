<?php

    include("conn/configuracao.php");
    
    if(isset($_GET['i'])){$id = $_GET['i'];}
    
    $deletarPrograma = mysql_query("UPDATE programa_alimentar SET exibir = 'nao' WHERE id = $id");
    
    header("Location:http://".$_SERVER['SERVER_NAME']."/testes/asalight/gerenciador-asalight/controlar-programa-alimentar.php");

?>
