<?php

function SeculoAno($ano)
{
    //Verifica se o ano é valido antes de executar o cálculo
    if(checkdate(1, 1, $ano)){
        $seculo = floor(($ano - 1)/100) + 1;
        return $seculo;
    }else{
        return "inválido";
    }
}

// Exemplos

// 1905
$ano_1905 = 1905;
$seculo_1905 = SeculoAno($ano_1905);
echo "Ano " . $ano_1905 . " = Século " . $seculo_1905 . "<br>";
// 1700
$ano_1700 = 1700;
$seculo_1700 = SeculoAno($ano_1700);
echo "Ano " . $ano_1700 . " = Século " . $seculo_1700 . "<br>";
// inválido
$ano_telefone = "telefone";
$seculo_telefone = SeculoAno($ano_telefone);
echo "Ano " . $ano_telefone . " = Século " . $seculo_telefone . "<br>";
