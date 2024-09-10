<?php

function Verifica($numero1, $numero2){

    if($numero1 == $numero2){
        return $resultado = 'O primeiro valor (' . $numero1 . 
                                                    ') é igual ao segundo valor (' . $numero2 . ');';
    }
    if($numero1 > $numero2){
        return $resultado = 'O primeiro valor (' . $numero1 . 
                                                    ') é maior que o segundo valor (' . $numero2 . ');';
    }
    if($numero1 < $numero2){
        return $resultado = 'O primeiro valor (' . $numero1 . 
                                                    ') é menor que o segundo valor (' . $numero2 . ');';
    }
    return $resultado = 'Operação inválida!';
};

echo 'Verificar se o primeiro número é maior, menor ou igual ao segundo: ';
echo '<br>';
echo Verifica('33', '33');