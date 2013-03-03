<script>
	function click(){
		//if(!(event.button==2)){
			var autorizacao = "sim";
			verificaAutorizacao(autorizacao);
		//}
	}
</script>
<?php
	
	include("conn/configuracao.php");
	
	
		if(isset($_GET['cod'])){
			$cod = $_GET['cod'];
		}
	
		if(isset($_SESSION['id_usuario'])){
		   //include('envio_carrinho.php');
		   echo "<form action='carrinho.php' method='post'>";
		   		echo "<input type='hidden' value='$cod' name='codigo' />";
		   		echo "<input type='image' src='img/btn_comprar.png' width='127' height='67' border='0' style='margin-top:-20px;' />";
		   echo "</form>";
		}else{
		   echo "<form action='carrinho.php' method='post'>";
		   		echo "<input type='hidden' value='$cod' name='codigo' />";
		   		echo "<input type='image' src='img/btn_comprar.png' width='127' height='67' border='0' style='margin-top:0px; margin-left:-3px;' />";
		   echo "</form>";
		}
?>