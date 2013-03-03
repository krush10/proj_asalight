<?php
/*
DESENVOLVIDO POR EDGAR SERRA
http://www.edgarserra.com
*/
function calcula_frete($servico='40010',$cep_origem='97032120',$cep_destino='71939360',$peso='2',$mao_propria='n',$valor_declarado='700',$aviso_recebimento='s'){

$mao_propria = (strtolower($mao_propria) == 's')?'s':'n';
$aviso_recebimento = (strtolower($aviso_recebimento) == 's')?'s':'n';

$frete_calcula = simplexml_load_string(file_get_contents('http://shopping.correios.com.br/wbm/shopping/script/calcprecoprazo.aspx?ncdempresa=&sdssenha=&sceporigem='. $cep_origem .'&scepdestino='. $cep_destino .'&nvlpeso='. $peso .'&ncdformato=1&nvlcomprimento=16&nvlaltura=2&nvllargura=11&scdmaopropria='. $mao_propria .'&nvlvalordeclarado='. $valor_declarado .'&scdavisorecebimento='. $aviso_recebimento .'&ncdservico='. $servico .'&nvldiametro=0&strretorno=xml'));
/*
CASO QUEIRA VER TUDO QUE VEM DO SITE DOS CORREIOS, DESCOMENTE A LINHA ABAIXO.
echo print_r($frete_calcula);
*/
$frete = $frete_calcula->cServico;

if($frete->Erro == '0'){

    switch($frete->Codigo){
        case 41106: $servico = 'PAC'; break;
        case 40045: $servico = 'SEDEX a Cobrar'; break;
        case 40215: $servico = 'SEDEX 10'; break;
        case 40290: $servico = 'SEDEX Hoje'; break;
        default: $servico = 'SEDEX'; 
    }

     $retorno = 'Serviço: '.$servico.'<br>';
     $retorno .= 'Valor: '.$frete->Valor.'<br>';
     $retorno .= 'Prazo de entrega: '.$frete->PrazoEntrega.' dia(s)';

}elseif($frete->Erro == '7'){
    
    $retorno = 'Serviço temporariamente indisponível, tente novamente mais tarde.';
    
}else{
    
    $retorno = 'Erro no cálculo do frete, código de erro: '.$frete->Erro;
    
}

 return $retorno;
 echo $retorno;

}
/*
A função é composta dos seguintes itens:

$servico: Modalidade de frete, modalidadas válidas:
41106 - PAC
40010 - SEDEX
40045 - SEDEX a Cobrar
40215 - SEDEX 10
40290 - SEDEX Hoje

$cep_origem: CEP de origem, utilize apenas números!
$cep_destino: CEP de destino, utilize apenas números!
$peso: Peso da encomenda, qualquer valor entre 0.3 e 30 kg.
$mao_propria: Entrega na sua casa, só são aceitos dois valores 's' e 'n', se for passado outro valor a função entenderá como 'n'
$valor_declarado: Valor declarado da encomenda, se desejar declarar, por exemplo, R$1,00, use 100.
$aviso_recebimento: Aviso de recebimento, só são aceitos dois valores 's' e 'n', se for passado outro valor a função entenderá como 'n'

Abaixo o exemplo de uso:
40010 - Sedex
97032120 - CEP de origem
71939360 - CEP de destino
2 - Peso (2 kilos)
n - Mão própria
700 - Valor declarado (R$7,00)
s - Aviso de recebimento
*/
//echo calcula_frete('40010','97032120','71939360','2','n','700','s');

?>