<?php

require_once('Utils.php');

function getSoma($numero1, $numero2){
 return $numero1 + $numero2;
}

function getSubtrair($numero1, $numero2){
 return $numero1 - $numero2;
}

function getMultiplicar($numero1, $numero2){
    return $numero1 * $numero2;
}

function getDividir($numero1, $numero2){
    return $numero1 / $numero2;
}

function Calcular ($numero1, $numero2, $operacao){    
    $resultado = 'Inválido';
    $numero1 = formataNumFloat($numero1);
    $numero2 = formataNumFloat($numero2);

    if($operacao == 'SOMAR' || $operacao == '+'){
        return getSoma($numero1, $numero2);
    } 
    
    if($operacao == 'SUBTRACAO' || $operacao == '-'){
        return getSubtrair($numero1, $numero2);
    } 

    if($operacao == 'DIVIDIR' || $operacao == '/'){
        return getDividir($numero1, $numero2);
    }
    
    if($operacao == 'MULTIPLICAR' || $operacao == '*'){
        return getMultiplicar($numero1, $numero2);
    }
    return $resultado = 'Operação inválida';
}



echo 'Calculos: Somar, Dividir, Subtrair, Multiplicar:';
echo '<br>';
echo 'Somar: ' . Calcular('25,69', '33,33', 'SOMAR');
echo '<br>';
echo 'Divisão: ' . Calcular('25,69', '33,33', 'DIVIDIR');
echo '<br>';
echo 'Subtração: ' . Calcular('25,69', '33,33', 'SUBTRACAO');
echo '<br>';
echo 'Multiplicação: ' . Calcular('25,69', '33,33', 'MULTIPLICAR');
