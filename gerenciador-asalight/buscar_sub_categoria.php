<?php 

	include("conn/configuracao.php");
	
	if(isset($_GET['id_util'])){
		$id_c = $_GET['id_util'];
	}
        
	header("Content-Type: text/html; charset=iso-8859-1",true);
	
	$query = mysql_query("SELECT * FROM cardapio_subcategoria WHERE id_categoria = $id_c");
        echo "<table>";
            echo "<tr>";                 
            echo "<td><strong>Sub-Categoria</strong></td>";
            echo "<td>
                <select class='selecione' name='id_subcategoria'>";
                while($array = mysql_fetch_array($query)){
                    $id = $array['id'];
                    $nome_subcategoria = $array['nome_subcategoria'];

                    echo "<option value='$id'>$nome_subcategoria</option>";
                }

            echo "</td>";
            echo "</tr>"; 
        echo "</table>";
?>
