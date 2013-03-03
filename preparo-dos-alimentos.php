<?php session_start(); ?>
<?php include("conn/configuracao.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AsaLight - Preparo dos Alimentos</title>
<link rel="SHORTCUT ICON" href="img/icon.ico" />
<link rel="stylesheet" href="css/header_style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/menu_style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/corpo_preparo_alimentos_style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/footer_style.css" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<script type="text/javascript">  
	function limpar(campo){  
		if (campo.value == campo.defaultValue){  
			campo.value = "";
			campo.style.color = "#000000";  
		} 
	}  
	  
	function escrever(campo){  
		if (campo.value == ""){  
			campo.value = " Seu e-mail";
			campo.style.color = "#000000";  
		}  
	}
</script>	
</head>
<body>
	<div class="header">
    	<div id="logo">
        	<a href="index.php"><img src="img/logo.png" border="0" alt="logo" /></a>
        </div>
        <div id="saiba_como">
        	<table>
            <tr>
            	<td><img src="img/icon_telefone.png" alt="icone_telefone" style="margin-top:-20px; *margin-top:-5px;" /></td>
            	<td><font style="font-size:12px; color:#707070;">Tel: <strong>21 9451 4421</strong>  |  <a href="mailto:contato@asalight.com.br" style="color:#707070;">contato@asalight.com.br</a></font>
                	<p style="margin-top:4px;"><a href="como-funciona-servico-asalight.php">Saiba como funciona o <strong>Serviços de Entregas da ASA Light</strong></a></p>
                </td>
        	</tr>
            </table>
        </div>
        <div id="social">
        	<table>
        	<tr>
            	<td><iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.asalight.com.br&amp;send=false&amp;layout=button_count&amp;width=120&amp;show_faces=true&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:80px; height:21px;" allowTransparency="true"></iframe></td>
                <td><iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.asalight.com.br&amp;send=false&amp;layout=button_count&amp;width=200&amp;show_faces=true&amp;font&amp;colorscheme=light&amp;action=recommend&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:120px; height:21px; margin-left:3px; *margin-left:0px; " allowTransparency="true"></iframe></td>
                <td><a href="#" title="Facebook" style="margin-left:0px; *margin-left:0px;"><img src="img/icon_face.jpg" border="0" alt="facebook" /></a></td>
        	</tr>
            </table>
        </div>
        <div id="linha_header_um">
        	<img src="img/linha_header.png" />
        </div>
        <!--div id="login_cadastro">
        	<php
				if(isset($_SESSION['id_usuario'])){
					if(!(empty($_SESSION['id_usuario']))){
					
					$id_usuario = $_SESSION['id_usuario'];
					$buscarUsuario = mysql_query("SELECT nome FROM usuario WHERE id = $id_usuario");
					$array = @mysql_fetch_array($buscarUsuario);
					$nome_usuario = $array['nome'];
					echo "Ol&aacute;,"." ".$nome_usuario." "."<a href='logout.php'>(sair)</a>";
						
				}
				}else{
					echo "Fa&ccedil;a seu <a href='login.php'>Login</a> ou <a href='cadastro.php'>Cadastro</a>"; 
				}
			?>
		</div-->
        <div id="area_cadastre">
        	<table>
            	<tr>
                	<td><img src="img/txt_newsletter.png" alt="txt_cadastre" /></td>
                </tr>
                <tr><td></td></tr>
                <tr>
                	<td><input type="text" name="email" value=" Seu e-mail" onfocus="limpar(this);" onblur="escrever(this);" class="caixa_header" /></td>
                    <td><input type="image" src="img/btn_ok.png" width="26" height="26" /></td>
                </tr>
                <tr>
                	<td width="100" style="*width:150px;">Receba por e-mail as novidades 
e promoções da ASA Light.</td>
                </tr>
            </table>
        </div>
        <div id="linha_header_dois">
        	<img src="img/linha_header.png" />
        </div>
        <div id="area_admin">
        	<table>
            	<tr>
            		<td><strong><a href='meu-pedido.php' style='font-size:14px; text-decoration:none;'>Meus Pedidos</a></strong> | <strong><a href='cadastro.php' style='font-size:14px; text-decoration:none;'>Cadastro</a></strong></td>
            	</tr>
                <?php
				if(isset($_SESSION['id_usuario'])){
					if(!(empty($_SESSION['id_usuario']))){ 
					$id_usuario = $_SESSION['id_usuario'];
					$buscarUsuario = mysql_query("SELECT nome_usuario FROM usuario WHERE id = $id_usuario");
					$array = @mysql_fetch_array($buscarUsuario);
					$nome_usuario = $array['nome_usuario'];
					echo "<font style='margin-left:3px;'>Ol&aacute;,"." ".$nome_usuario." "."<a href='logout.php'>(sair)</a></font>";
						
				}
				}else{
                echo "<tr>";
                	echo "<td>Fa&ccedil;a <a href='login.php' style='font-size:11px;'>login</a> ou <a href='cadastro.php' style='font-size:11px;'>cadastre-se</a></td></td>";
        		echo "</tr>";
				}
				?>
                <tr>
                	<td>&nbsp;</td>
                </tr>
                <tr>
                	<td><a href='carrinho.php'><img src="img/btn_meucarrinho.png" alt="botao_carrinho" style='margin-left:-2px;' border="0" /></a></td>
                </tr>
            </table>
        </div>
	</div>
    <div class="menu">
    	<div class="menu_margin">
        	<table cellpadding="5">
            	<tr>
                	<td><a href="index.php"><img src="img/btn_home.png" border="0" /></a></td>
                    <td><a href="empresa.php"><img src="img/btn_empresa.png" border="0" /></a></td>
                    <td><a href="cardapio.php"><img src="img/btn_cardapio.png" border="0" /></a></td>
                    <td><a href="preparo-dos-alimentos.php"><img src="img/btn_preparo.png" border="0" /></a></td>
                    <td><a href="dicas-saudaveis.php"><img src="img/btn_dicas.png" border="0" /></a></td>
                    <td><a href="programas-alimentares.php"><img src="img/btn_programas.png" border="0" /></a></td>
                    <td><a href="meu-pedido.php"><img src="img/btn_meupedido.png" border="0" /></a></td>
                    <td><a href="contato.php"><img src="img/btn_contato.png" border="0" /></a></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="corpo_um">
    	<div class="corpo_um_margin">
    		<div id="img_corpo_um">
            	<img src="img/img_preparo.png" alt="empresa" />
            </div>
            <div id="txt_corpo_um">
            	<img src="img/txt_preparo.png" alt="txt empresa" />
            </div>
            <div id="conteudo">
            	<table>
                	<tr>
                    	<td><font style="font-size:23px; color:#963e52;">Preparo dos Alimentos</font><p>
                        <br />
                        <b><font size="4">Em Nossa Empresa</font></b><p>


<b>Seleção e Compra</b><br>
Aquisição de produtos de alta qualidade. <p>

<b>Pré Preparo e lavagem</b><br />
Todas as verduras, frutas e legumes são devidamente higienizados com solução específica e controlados rigorosamente e fitas dosadoras pelas nossas Nutricionistas.<p>


<b>Preparo</b><br />
Forno combinado: A alta tecnologia do forno permite as seguintes caracteristicas ao alimento.<p>

1. Preservação dos Nutrientes:  Não permite a perda dos principais nutrientes dos alimentos <br />
2. Menor teor de Gordura: Cozinha os alimentos com muito menos óleo, <br />
3. Carnes mais suculentas: Combinação do calor úmido com calor seco, neste processo as carnes mantem suas características, mantendo-as suculentas por dentro e douradas por fora, pois a  todo momento, a câmera de cocção recebe umidade e, assim, as carnes não se ressecam como nos processos tradicionais<br /><br />

<b>Porcionamento</b><br />
Os alimentos são porcionados com o acompanhamento da nutricionista, pois contém valores nutricionais pré- definidos.<br /><br />

<b>Ultra Congelamento</b><br />

A conservação de produtos por um período médio-longo é possível somente através do congelamento rápido até -18 °C no Interior dos alimentos.<br />
O processo de congelamento dos equipamentos normais transforma o líquido presente nos alimentos em cristais (Macrocristais) que danificam a sua estrutura alterando seu sabor, ao demorar neste processo os microorganismos causadores de doenças transmitidas por alimentos, encontram condições favoraveis, ou seja, calor, para seu desenvolvimento.<br />
Com o ultra congelamento ocorre uma rápida penetração do frio no interior do alimento, garantindo a formação de pequenos cristais (Microcristais) que não danificam a estutura e não alteram o sabor e garantem a qualidade sanitária do seu alimento!<br /><br />

<b>Tampar e Selar</b><br />
Quando o alimento sai do Ultra congelador, vai para máquina de selagem, evitando o seu contato com o ambiente externo.<br /><br />

<b>Etiquetas / Lote / Análise laboratorial</b><br />
Os alimentos são devidamente etiquetados e separados por lotes. Cada lote é enviado ao laboratório para controle rigoroso de análise microbiológica.
<br /><br />
<b>Armazenamento</b><br />
Os alimentos são armazenados em câmara fria, proporcionando temperatura ideal para preservação do sabor, características e controle de qualidade do alimento.
<br /><br />
<b>Distribuição</b><br />
A distribuição é realizada de Carro e/ou moto, vistoriadas pelas nutricionistas. Os alimentos são trasportados  em recipientes térmicos mantendo a temperatura ideal do alimento.
<br /><br />

<b><font size="4">Em sua Casa</font></b><br />
Nossos produtos são feitos de embalagens seguras e práticas, podendo ir diretamente do freezer ao forno microondas ou convencional.<br /><br />

<b>Armazenamento</b><br />
Saladas e Sobremesas: Geladeira<br />
Refeições e Sopas: Freezer. Após descongelados não devem ser utilizados. Não recongelar.<br /><br />

<b>Hora de saborear:</b>

Para cada refeição siga as instruções vide embalagem e fique atento as <b>Sugestões do Chefe</b>! 
Pois algumas refeições serão indicadas uma finalização para o prato dando um toque especial de Sabor & Saúde.
<p>
<img src="img/chef.jpg" style="margin-left:700px;" />

</td>
                    </tr>
                </table>
                <?php
				
				//Função: Recuperar todos os textos de preparo de alimento no Banco de Dados
				
				//$buscarPreparo = mysql_query("SELECT id, descricao FROM preparo_alimentos ORDER BY id DESC");
				
					$campos_query = "id, descricao";
                    $final_query  = "FROM preparo_alimentos ORDER BY id DESC";

                    // Maximo de registros por pagina
                    $maximo = 3;

                    // Declaração da pagina inicial
                    $pagina = $_GET["p"];
                    if($pagina == "") {
                       $pagina = "1";
                    }

                    // Calculando o registro inicial
                    $inicio = $pagina - 1;
                    $inicio = $maximo * $inicio;

                    // Conta os resultados no total da query
                    $strCount = "SELECT COUNT(*) AS 'num_registros' $final_query";
                    $query = mysql_query($strCount);
                    $row = mysql_fetch_array($query);
                    $total = $row["num_registros"];

                    $buscarPreparo = mysql_query("SELECT $campos_query $final_query LIMIT $inicio,$maximo");
				
				echo "<table>";
				while($array = mysql_fetch_array($buscarPreparo)){
					$id = $array['id'];
					$descricao = $array['descricao'];	
					
					echo "<tr><td>&nbsp;</td></tr>";
					echo "<tr>";
						echo "<td>$descricao</td>";
					echo "</tr>";
					
				}
                echo "</table>";
				echo "<div id='paginador'>";
					
					$menos = $pagina - 1;
					$mais = $pagina + 1;
					 
					$pgs = ceil($total / $maximo);
					 
					if($pgs > 1 ) {
					 
						echo "<br />";
						
						if($menos >= 0) {
							
							$i = $_GET['p'] - 1;
							
							echo "<a title='in&iacute;cio' style='text-decoration:none;' href=http://".$_SERVER['SERVER_NAME']."/site-asalight/preparo-dos-alimentos.php?p=><strong>in&iacute;cio</strong> </a>";
						}
						
						if($menos >= 1) {
							
							$i = $_GET['p'] - 1;
							
							echo "<a title='Anterior' style='text-decoration:none;' href=http://".$_SERVER['SERVER_NAME']."/site-asalight/preparo-dos-alimentos.php?p=".($i)."><strong>anterior</strong> </a>";
						}
					 
						// Listando as paginas
						for($i=$pagina; $i<$pagina+3; $i++) {
							if($i != $pagina) {
								echo " <a href="."http://".$_SERVER['SERVER_NAME']."/site-asalight/preparo-dos-alimentos.php"."?p=".($i).">$i</a> <font color='#CCCCCC'>|</font>";
								//echo " <a href="."http://".$_SERVER['SERVER_NAME']."/produto.php"."?n=".$nome_categoria."&p=".($i).">$i</a> |";
							} else {
								echo " <strong>".$i."</strong> <font color='#CCCCCC'>|</font> ";
							}
							if($i == $pgs){
								break;
							}
						}
						
						if($mais <= $pgs) {
							
							if($_GET['p'] == 0){
								$_GET['p'] = 1;	
							}
							
							$i = $_GET['p'] + 1;
							
							echo " <a title='Pr&oacute;xima' style='text-decoration:none;' href="."http://".$_SERVER['SERVER_NAME']."/site-asalight/preparo-dos-alimentos.php"."?p=".($i)."> <strong>pr&oacute;xima</strong></a>";
						}
						if(($mais >= $pgs) || ($mais <= $pgs)) {
							
							echo " <a title='ultima p&aacute;gina' style='text-decoration:none;' href="."http://".$_SERVER['SERVER_NAME']."/site-asalight/preparo-dos-alimentos.php"."?p=".($pgs)."> ultima p&aacute;gina</a>";
						}
						
					}
				
				echo "</div>";
				
				?>
            </div>
        </div>
    </div>
    <div class="corpo_dois">
    	<div class="corpo_dois_margin">
    		<div id="area_dicassaudaveis">
        		<img src="img/txt_dicassaudaveis.png" alt="dicas" />
                <p>A ASA Light oferece dicas que vão contribuir com sua saúde e bem estar.</p>
				<p><strong><font style="font-size:11px; color:#89ff07;"><a href="dicas-saudaveis.php">Saiba +</a></font></strong></p>
                <img src="img/img_dicassaudaveis.png" id="img_dicas" alt="dicas" />
        	</div>
            <div id="area_programa">
        		<img src="img/txt_programasalimentares.png" alt="programa" />
                <p>Conheça nossos programas alimentares
e escolha o mais adequado
a você.</p>
				<p><strong><font style="font-size:11px; color:#89ff07;"><a href="programas-alimentares.php">Saiba +</a></font></strong></p>
                <img src="img/img_programa.png" id="img_programa" alt="programa" />
        	</div>
            <div id="area_consulta">
        		<img src="img/txt_agendeconsulta.png" alt="agende" />
                <p>Desenvolvimento de dietas personalizadas e avaliação física.</p>
				<p><strong><font style="font-size:11px; color:#89ff07;"><a href="contato.php">Saiba +</a></font></strong></p>
                <img src="img/img_consulta.png" id="img_consulta" alt="agende" />
        	</div>
        </div>
    </div>
    <div class="footer">
    	<div class="footer_margin">
            <div id="contato">
                <table>
                    <tr>
                        <td>Tel: (21) 9451 4421 | <a href="#">contato@asalight.com.br</a></td>
                    </tr>
                    <tr><td></td></tr>
                    <tr>
                        <td><img src="img/txt_copy.png" alt="copyright" /></td>
                    </tr>
                </table>
            </div>
            <div id="logo_krush">
            	<table cellpadding="2">
                	<tr>
                    	<td><img src="img/txt_criar.png" alt="criar site" /></td>
                    	<td><a href="http://www.krush.com.br/" target="_blank"><img src="img/logo_krush.png" border="0" alt="krush" /></a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>