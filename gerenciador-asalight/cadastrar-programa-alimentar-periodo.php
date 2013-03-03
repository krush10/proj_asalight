<?php require 'verifica_logado.php'; ?>
<?php include("conn/configuracao.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Gerenciador AsaLight - Cadastrar Programa Alimentar</title>
        <link rel="stylesheet" href="css/header_style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/corpo_style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/corpo_cadastrar_programa_alimentar_periodo_style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/footer_style.css" type="text/css" media="all" />
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
                    Preencha o campo abaixo para continuar a cadastrar um novo programa alimentar no site.<br/>
                    N&atilde;o h&aacute; campos obrigat&oacute;rios.
                </div>
                <div id="form_">
                    <?php
                    if(isset($_GET['prog'])){$id_programa = $_GET['prog'];}
                    echo "<form action='gerenciador.asalight.controller/ControleProgramaAlimentarPeriodo.php' method='post'>";
                    echo "<input type='hidden' name='id_programa_alimentar' value='$id_programa' />";
                    ?>
                    <table>
                        <tr>
                            <td><strong>Per&iacute;odo/Dia</strong></td>
                            <td>
                                <select name='periodo_dia' class="selecione">
                                    <option value='CAF&Eacute; DA MANH&Atilde;'>Caf&eacute; da Manh&atilde;</option>
                                    <option value='REFRESH'>Refresh</option>
                                    <option value='SALADA'>Salada</option>
                                    <option value='GAMELA'>Gamela</option>
                                    <option value='PQ'>Pq</option>
                                    <option value='SOB'>Sob</option>
                                    <option value='LANCHE'>Lanche</option>
                                    <option value='DRINK'>Drink</option>
                                    <option value='SALADA'>Salada</option>
                                    <option value='SOPA'>Sopa</option>
                                    <option value='PQ'>Pq</option>
                                    <option value='CEIA'>Ceia</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Segunda</strong></td>
                            <td><textarea name="segunda" class="caixa_area"></textarea></td>
                        </tr>
                        <tr>
                            <td><strong>Ter&ccedil;a</strong></td>
                            <td><textarea name="terca" class="caixa_area"></textarea></td>
                        </tr>
                        <tr>
                            <td><strong>Quarta</strong></td>
                            <td><textarea name="quarta" class="caixa_area"></textarea></td>
                        </tr>
                        <tr>
                            <td><strong>Quinta</strong></td>
                            <td><textarea name="quinta" class="caixa_area"></textarea></td>
                        </tr>
                        <tr>
                            <td><strong>Sexta</strong></td>
                            <td><textarea name="sexta" class="caixa_area"></textarea></td>
                        </tr>
                        <tr>
                            <td><strong>Sabado</strong></td>
                            <td><textarea name="sabado" class="caixa_area"></textarea></td>
                        </tr>
                        <tr>
                            <td><strong>Domingo</strong></td>
                            <td><textarea name="domingo" class="caixa_area"></textarea></td>
                        </tr>
                    </table>
                        <input type="submit" value="+ 1" />
                        <input type="button" value="Finalizar" class="btn_cadastro" onclick="location.href='home.php'" />
                    </form>    
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
                            echo "<td><font style='font-size:10px; color:#000;'>$periodo_dia</font></td>";
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

