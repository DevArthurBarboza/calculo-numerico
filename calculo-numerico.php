<?php 

bcscale(2); // configura como padrão a escala de 2 algarismos após a vírgula para cálculo de números decimais 

function primeiro_exercicio()
{
    // Definindo as variáveis 

    $bigNumber = 10000;
    $k = 1;
    $n = 100000;
    $x = 0.1;

    /**
     * a função "bcadd" abaixo realiza a soma do primeiro parâmetro 
     * com o segundo levando em consideração o padrão de escala configurado anteriormente 
     * e retornando o valor para $k que é o índice
     */

    for($k; $k <= $n;$k = bcadd($k,$x)) 
    {
        $bigNumber -= $k;
    }

    return $bigNumber;
}

function segundo_exercicio()
{
    // Definindo as variáveis 
    $bigNumber = 10000;
    $k = 1;
    $n = 80000;
    $x = 0.125;

    for($k; $k <= $n;$k = bcadd($k,$x))
    {
        $bigNumber -= $k;
    }

    return $bigNumber;
}

echo "PRIMEIRO EXERCÍCIO : \n" ; 
echo primeiro_exercicio(). "\n";

echo "\n";
echo "\n";

echo "SEGUNDO EXERCÍCIO : \n" ; 
echo segundo_exercicio() . "\n";


