<?php
/*$html .= '<li>';
$html .= '04 - Crie um arquivo PHP de nome "calculadora.php", 
            utilize o metodo auxiliar "formataNumFloat()", 
            fazendo "require_once()" do arquivo Utils.php.<br>';
$html .= 'Neste arquivo crie 4 funcoes que recebam como parametro 3 valores:';
$html .= '<ul>';
$html .= '</ul>';
$html .= '  <li>$numero1</li>';
$html .= '  <li>$numero2</li>';
$html .= '  <li>$operacao</li>';
$html .= '</li>';
$html .= 'Deve ter uma função de nome "calcular()" para somar,dividir,subtrair,multiplicar.';
$html .= 'Ao final, deve chamar esta função, passando 2 numeros e a operação, e deve mostrar o resultado.';
$html .= 'Pode passar os valores fixos, mas deve mostrar o resultado correto.';
$html .= 'Deve fazer todas as operações, somar, dividir, subtrair,multiplicar.';
 */

require_once('Utils.php');

function Calcular($numero1, $numero2, $operacao){
    $resultado = 'Inválido';
    $numero1 = formataNumFloat($numero1);
    $numero2 = formataNumFloat($numero2);

    if($operacao == 'SOMAR'){
        $resultado =  $numero1 + $numero2;
    } else if($operacao == 'SUBTRACAO'){
        $resultado =  $numero1 - $numero2;
    }else if($operacao == 'DIVISAO'){
        $resultado =  $numero1 / $numero2;
    }else if($operacao == 'MULTIPLICACAO'){
        $resultado =  $numero1 * $numero2;
    } else {
        $resultado = 'Operação inválida';
    }

    return $resultado;
}

// somar,dividir,subtrair,multiplicar
echo '<br>';
echo 'Somar: ' . Calcular('25,69', '33,33', 'SOMAR');
echo '<br>';
echo 'Divisão: ' . Calcular('25,69', '33,33', 'DIVISAO');
echo '<br>';
echo 'Subtração: ' . Calcular('25,69', '33,33', 'SUBTRACAO');
echo '<br>';
echo 'Multiplicação: ' . Calcular('25,69', '33,33', 'MULTIPLICACAO');

