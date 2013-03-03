<?php

include("conn/configuracao.php");
//pegar ano


$vendaJaneiro = mysql_query("SELECT COUNT(id) as numero_vendas_j FROM PagSeguroTransacoes WHERE MONTH(data) = '01' AND StatusTransacao = 'Cancelado'");
$array_j = @mysql_fetch_array($vendaJaneiro);
$vendasdeJaneiro = $array_j['numero_vendas_j'];

$vendaFevereiro = mysql_query("SELECT COUNT(id) as numero_vendas_f FROM PagSeguroTransacoes WHERE MONTH(data) = '02' AND StatusTransacao = 'Cancelado'");
$array_f = @mysql_fetch_array($vendaFevereiro);
$vendasdeFevereiro = $array_f['numero_vendas_f'];

$vendaMarco = mysql_query("SELECT COUNT(id) as numero_vendas_m FROM PagSeguroTransacoes WHERE MONTH(data) = '03' AND StatusTransacao = 'Cancelado'");
$array_m = @mysql_fetch_array($vendaMarco);
$vendasdeMarco = $array_m['numero_vendas_m'];

$vendaAbril = mysql_query("SELECT COUNT(id) as numero_vendas_a FROM PagSeguroTransacoes WHERE MONTH(data) = '04' AND StatusTransacao = 'Cancelado'");
$array_a = @mysql_fetch_array($vendaAbril);
$vendasdeAbril = $array_a['numero_vendas_a'];

$vendaMaio = mysql_query("SELECT COUNT(id) as numero_vendas_mai FROM PagSeguroTransacoes WHERE MONTH(data) = '05' AND StatusTransacao = 'Cancelado'");
$array_mai = @mysql_fetch_array($vendaMaio);
$vendasdeMaio = $array_mai['numero_vendas_mai'];

$vendaJunho = mysql_query("SELECT COUNT(id) as numero_vendas_jn FROM PagSeguroTransacoes WHERE MONTH(data) = '06' AND StatusTransacao = 'Cancelado'");
$array_ju = @mysql_fetch_array($vendaJunho);
$vendasdeJunho = $array_ju['numero_vendas_jn'];

$vendaJulho = mysql_query("SELECT COUNT(id) as numero_vendas_jl FROM PagSeguroTransacoes WHERE MONTH(data) = '07' AND StatusTransacao = 'Cancelado'");
$array_jl = @mysql_fetch_array($vendaJulho);
$vendasdeJulho = $array_jl['numero_vendas_jl'];

$vendaAgosto = mysql_query("SELECT COUNT(id) as numero_vendas_ag FROM PagSeguroTransacoes WHERE MONTH(data) = '08' AND StatusTransacao = 'Cancelado'");
$array_ag = @mysql_fetch_array($vendaAgosto);
$vendasdeAgosto = $array_ag['numero_vendas_ag'];

$vendaSetembro = mysql_query("SELECT COUNT(id) as numero_vendas_st FROM PagSeguroTransacoes WHERE MONTH(data) = '09' AND StatusTransacao = 'Cancelado'");
$array_set = @mysql_fetch_array($vendaSetembro);
$vendasdeSetembro = $array_set['numero_vendas_st'];

$vendaOutubro = mysql_query("SELECT COUNT(id) as numero_vendas_ot FROM PagSeguroTransacoes WHERE MONTH(data) = '10' AND StatusTransacao = 'Cancelado'");
$array_out = @mysql_fetch_array($vendaOutubro);
$vendasdeOutubro = $array_out['numero_vendas_ot'];

$vendaNovembro = mysql_query("SELECT COUNT(id) as numero_vendas_nv FROM PagSeguroTransacoes WHERE MONTH(data) = '11' AND StatusTransacao = 'Cancelado'");
$array_nov = @mysql_fetch_array($vendaNovembro);
$vendasdeNovembro = $array_nov['numero_vendas_nv'];


$vendaDezembro = mysql_query("SELECT COUNT(id) as numero_vendas_dz FROM PagSeguroTransacoes WHERE MONTH(data) = '12' AND StatusTransacao = 'Cancelado'");
$array_dez = @mysql_fetch_array($vendaDezembro);
$vendasdeDezembro = $array_dez['numero_vendas_dz'];



$vendas_ano = array($vendasdeJaneiro,$vendasdeFevereiro,$vendasdeMarco,$vendasdeAbril,$vendasdeMaio,$vendasdeJunho,$vendasdeJulho,$vendasdeAgosto,$vendasdeSetembro,$vendasdeOutubro,$vendasdeNovembro,$vendasdeDezembro);

$janeiro = $vendasdeJaneiro; 
$fevereiro = $vendasdeFevereiro; 
$marco = $vendasdeMarco; 
$abril = $vendasdeAbril;
$maio = $vendasdeMaio; 
$junho = $vendasdeJunho; 
$julho = $vendasdeJulho; 
$agosto = $vendasdeAgosto; 
$setembro = $vendasdeSetembro;
$outubro = $vendasdeOutubro; 
$novembro = $vendasdeNovembro; 
$dezembro = $vendasdeDezembro;


print ('<script>');
print ('window.onload = function (){');
    print ('var meuGraficoIdades = new RGraph.Bar("meuCanvasGraficoVendas", ' . $vendas_ano . ');');
    print ('meuGraficoIdades.Set("chart.background.barcolor1", "white");');
    print ('meuGraficoIdades.Set("chart.background.barcolor2", "white");');
    //meuGraficoIdades.Set('chart.title', 'Exemplo Idades com gráficos em HTML5 - www.vilourenco.com.br');
    print ('meuGraficoIdades.Set("chart.title.vpos", 0.6);');
    print ('meuGraficoIdades.Set("chart.labels", ["Janeiro", "Fever.", "Marco", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setemb.", "Outubro", "Novemb.", "Dezemb."]);');
    print ('meuGraficoIdades.Set("chart.tooltips", ["Janeiro" + ' . $janeiro . ', "Fevereiro " + ' . $fevereiro . ', "Marco" + ' . $marco . ', "Abril " + ' . $abril . ', "Maio " + ' . $maio . ', "Junho " + ' . $junho . ', "Julho " + ' . $julho . ', "Agosto " + ' . $agosto . ', "Setembro " + ' . $setembro . ', "Outubro " + ' . $outubro . ', "Novembro " + ' . $novembro . ', "Dezembro " + ' . $dezembro . ']);');
    print ('meuGraficoIdades.Set("chart.text.angle", 45);');
    print ('meuGraficoIdades.Set("chart.gutter", 35);');
    print ('meuGraficoIdades.Set("chart.shadow", true);');
    print ('meuGraficoIdades.Set("chart.shadow.blur", 5);');
    print ('meuGraficoIdades.Set("chart.shadow.color", "#aaa");');
    print ('meuGraficoIdades.Set("chart.shadow.offsety", -3);');
    print ('meuGraficoIdades.Set("chart.colors", ["#00CED1"]);');
    print ('meuGraficoIdades.Set("chart.key.position", "gutter");');
    print ('meuGraficoIdades.Set("chart.text.size", 10);');
    print ('meuGraficoIdades.Set("chart.text.font", "Georgia");');
    print ('meuGraficoIdades.Set("chart.text.angle", 0);');
    print ('meuGraficoIdades.Set("chart.grouping", "stacked");');
    print ('meuGraficoIdades.Set("chart.strokecolor", "rgba(0,0,0,0)");');
    print ('meuGraficoIdades.Draw();');         
print ('}');
print ('</script>');

?>