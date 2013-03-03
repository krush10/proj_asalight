<?php require 'verifica_logado.php'; ?>
<?php include("conn/configuracao.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Gerenciador AsaLight - Atualizar Programa Alimentar</title>
        <link rel="stylesheet" href="css/header_style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/corpo_style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/corpo_cadastrar_programa_alimentar_periodo_style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/footer_style.css" type="text/css" media="all" />
        <script type="text/javascript">
        
            function retornaHome(){
                location.href='home.php';
            }
        
        </script>
    </head>
    <body>
        <div class="header">
            <div id="logo">
                <img src="imagens/logo.png" />
            </div>
            <div id="btn_home">
                <a href="home.php" title="Home"><img src="imagens/btn_home.png" border="0" /></a>
            </div>
            <div id="btn_logoff">
                <a href="fechar-sessao.php" title="Sair do Sistema"><img src="imagens/btn_logoff.png" border="0" /></a>
            </div>
        </div>
        <div class="linha_header"></div>
        <div class="corpo">
            <?php include("menu_lateral.php") ?>
            <div id="conteudo_centro">
                <div id="faixa_corpo">
                    <img src="imagens/faixa_controle_programa_alimentar.png" />
                </div>
                <div id="nome_categoria">
                    <strong>Novo Programa Alimentar</strong>
                </div>
                <div id="msg">
                    Atualize os campos abaixo para modificar este programa alimentar no site.<br/>
                    N&atilde;o existem campos de preenchimento obrigat&oacute;rio.
                </div>
                <div id="form_">
                    <?php
                    if(isset($_GET['prog'])){$id_programa = $_GET['prog'];}
                    if(isset($_GET['per'])){
                        
                        $periodo = $_GET['per'];
                        
                        $buscar_periodo = mysql_query("SELECT * FROM programa_alimentar_periodo WHERE periodo_dia = '".$periodo."' AND id_programa_alimentar = $id_programa ");
                        while($array = mysql_fetch_array($buscar_periodo)){
                            $segunda = $array['segunda'];
                            $terca = $array['terca'];
                            $quarta = $array['quarta'];
                            $quinta = $array['quinta'];
                            $sexta = $array['sexta'];
                            $sabado = $array['sabado'];
                            $domingo = $array['domingo'];
                        }
                    
                    echo "<form action='gerenciador.asalight.controller/AtualizarProgramaAlimentarPeriodo.php' method='post'>";
                    echo "<input type='hidden' name='id_programa' value='$id_programa' />";
                    echo "<input type='hidden' name='periodo' value='$periodo' />";
                    
                    echo "<table>";
                        echo "<tr>";
                            echo "<td><strong>Segunda</strong></td>";
                            echo "<td><textarea name='segunda' class='caixa_area'>$segunda</textarea></td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td><strong>Ter&ccedil;a</strong></td>";
                            echo "<td><textarea name='terca' class='caixa_area'>$terca</textarea></td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td><strong>Quarta</strong></td>";
                            echo "<td><textarea name='quarta' class='caixa_area'>$quarta</textarea></td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td><strong>Quinta</strong></td>";
                            echo "<td><textarea name='quinta' class='caixa_area'>$quinta</textarea></td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td><strong>Sexta</strong></td>";
                            echo "<td><textarea name='sexta' class='caixa_area'>$sexta</textarea></td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td><strong>Sabado</strong></td>";
                            echo "<td><textarea name='sabado' class='caixa_area'>$sabado</textarea></td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td><strong>Domingo</strong></td>";
                            echo "<td><textarea name='domingo' class='caixa_area'>$domingo</textarea></td>";
                        echo "</tr>";
                    echo "</table>";
                        echo "<input type='submit' value='Atualizar' />";
                        echo "<input type='button' value='Finalizar' class='btn_cadastro'  onclick='retornaHome();' />";
                    echo "</form>";
                    
                    }else{
                        
                    echo "<form action='gerenciador.asalight.controller/ControleProgramaAlimentarPeriodoP.php' method='post'>";
                    echo "<input type='hidden' name='id_programa' value='$id_programa' />";
                    
                    echo "<table>";
                        echo "<tr>";
                            echo "<td><strong>Per&iacute;odo/Dia</strong></td>";
                            echo "<td>";
                                echo "<select name='periodo_dia' class='selecione'>";
                                    echo "<option value='CAF&Eacute; DA MANH&Atilde;'>Caf&eacute; da Manh&atilde;</option>";
                                    echo "<option value='REFRESH'>Refresh</option>";
                                    echo "<option value='SALADA'>Salada</option>";
                                    echo "<option value='GAMELA'>Gamela</option>";
                                    echo "<option value='PQ'>Pq</option>";
                                    echo "<option value='SOB'>Sob</option>";
                                    echo "<option value='LANCHE'>Lanche</option>";
                                    echo "<option value='DRINK'>Drink</option>";
                                    echo "<option value='SALADA'>Salada</option>";
                                    echo "<option value='SOPA'>Sopa</option>";
                                    echo "<option value='PQ'>Pq</option>";
                                    echo "<option value='CEIA'>Ceia</option>";
                                echo "</select>";
                            echo "</td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td><strong>Segunda</strong></td>";
                            echo "<td><textarea name='segunda' class='caixa_area'></textarea></td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td><strong>Ter&ccedil;a</strong></td>";
                            echo "<td><textarea name='terca' class='caixa_area'></textarea></td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td><strong>Quarta</strong></td>";
                            echo "<td><textarea name='quarta' class='caixa_area'></textarea></td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td><strong>Quinta</strong></td>";
                            echo "<td><textarea name='quinta' class='caixa_area'></textarea></td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td><strong>Sexta</strong></td>";
                            echo "<td><textarea name='sexta' class='caixa_area'></textarea></td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td><strong>Sabado</strong></td>";
                            echo "<td><textarea name='sabado' class='caixa_area'></textarea></td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td><strong>Domingo</strong></td>";
                            echo "<td><textarea name='domingo' class='caixa_area'></textarea></td>";
                        echo "</tr>";
                    echo "</table>";
                        echo "<input type='submit' value='+1' />";
                        echo "<input type='button' value='Finalizar' class='btn_cadastro' onclick='retornaHome();' />";
                    echo "</form>";
                        
                    }
                    ?>                
                </div>
                <div id="img_etapa">
                    <img src="imagens/etapa_.png" border="0" />
                </div>
                <div id="periodos_cadastrados" style="margin-top:37px;">
                    <p><strong>Per&iacute;odos Cadastrados</strong></p>
                    <?php 
                        if(isset($_GET['prog'])){$id_programa = $_GET['prog'];}
                        
                        $buscar_periodo = mysql_query("SELECT id,periodo_dia FROM programa_alimentar_periodo WHERE id_programa_alimentar = $id_programa");
                        
                        echo "<table>";
                        while($array = mysql_fetch_array($buscar_periodo)){
                            $id = $array['id'];
                            $periodo_dia = $array['periodo_dia'];
                            
                            echo "<tr>";
                                echo "<td><a href='atualizar-programa-alimentar-periodo.php?prog=$id_programa&per=$periodo_dia' title='Alterar' style='font-size:10px; text-decoration:none; color:#000;'>$periodo_dia</a></td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        
                    ?>
                </div>
            </div>
        </div>
        <div class="max-footer">
            <div class="footer">
                <div id="txt_gerenciador">
                    Sistema de Gerenciamento AsaLight
                </div>
            </div>
        </div>
    </body>
</html>

