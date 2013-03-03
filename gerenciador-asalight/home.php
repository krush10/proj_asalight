<?php require 'verifica_logado.php'; ?>
<?php include("conn/configuracao.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Gerenciador AsaLight - Home</title>
        <link rel="stylesheet" href="css/header_style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/corpo_style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/corpo_home_style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/footer_style.css" type="text/css" media="all" />
        <!--script src="RGraph/libraries/RGraph.common.core.js" ></script>
        <script src="RGraph/libraries/RGraph.common.annotate.js" ></script>
        <script src="RGraph/libraries/RGraph.common.context.js" ></script>
        <script src="RGraph/libraries/RGraph.common.tooltips.js" ></script>
        <script src="RGraph/libraries/RGraph.common.resizing.js" ></script>
        <script src="RGraph/libraries/RGraph.common.dynamic.js" ></script>
        <script src="RGraph/libraries/RGraph.bar.js" ></script-->
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
                    <img src="imagens/faixa_home.png" />
                </div>
                <div id="grafico_vendas">  
                </div>
                <div id="arrecadacao_mes">
                    <?php 
                        
                        $mes_atual = date ("m");
                        $mes_texto;
                        
                        if($mes_atual == '01'){
                           $mes_texto = "Janeiro"; 
                        }else if($mes_atual == '02'){
                           $mes_texto = "Fevereiro"; 
                        }else if($mes_atual == '03'){
                           $mes_texto = "Março"; 
                        }else if($mes_atual == '04'){
                           $mes_texto = "Abril"; 
                        }else if($mes_atual == '05'){
                           $mes_texto = "Maio"; 
                        }else if($mes_atual == '06'){
                           $mes_texto = "Junho"; 
                        }else if($mes_atual == '07'){
                           $mes_texto = "Julho"; 
                        }else if($mes_atual == '08'){
                           $mes_texto = "Agosto"; 
                        }else if($mes_atual == '09'){
                           $mes_texto = "Setembro"; 
                        }else if($mes_atual == '10'){
                           $mes_texto = "Outubro"; 
                        }else if($mes_atual == '11'){
                           $mes_texto = "Novembro"; 
                        }else if($mes_atual == '12'){
                           $mes_texto = "Dezembro"; 
                        }
                    
                        $vendas = mysql_query("SELECT COUNT(id) as numero_vendas FROM PagSeguroTransacoes WHERE MONTH(data) = '$mes_atual' AND StatusTransacao = 'Completo'");
                        $array = @mysql_fetch_array($vendas);
                        $vendas_concluidas = $array['numero_vendas'];
                        
                        $total = mysql_query("SELECT SUM(ProdValor) as total_arrecadado FROM PagSeguroProdutos psp LEFT JOIN PagSeguroTransacoes pst ON psp.TransacaoID = pst.TransacaoID WHERE MONTH(data) = '$mes_atual' AND StatusTransacao = 'Completo'");
                        $array = @mysql_fetch_array($total);
                        $total_arrecadado = $array['total_arrecadado'];
                        
                        echo "<table>";
                            echo "<tr>";
                                echo "<td width='200' style='background-color: #FFF; padding:4px;'>Site:</td>";
                                echo "<td width='530' style='background-color: #CCC; padding:4px;'> AsaLight</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td width='200' style='background-color: #FFF; padding:4px;'>Mês Atual:</td>";
                                echo "<td width='530' style='background-color: #CCC; padding:4px;'> $mes_texto</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td width='200' style='background-color: #FFF; padding:4px;'>Vendas do Mês:</td>";
                                echo "<td width='530' style='background-color: #CCC; padding:4px;'> $vendas_concluidas</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td width='200' style='background-color: #FFF; padding:4px;'>Total Arrecadado Mês:</td>";
                                echo "<td width='530' style='background-color: #CCC; padding:4px;'>". number_format($total_arrecadado, 2, ',', '.') ."</td>";
                            echo "</tr>";
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
