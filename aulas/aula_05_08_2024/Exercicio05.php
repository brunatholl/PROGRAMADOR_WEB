<?php

// Regra para numero ser par:
// Resto da divisão por 2 deve ser zero

function isImpar($numero){
    return $numero % 2 != 0;
}

$numero = 9;
if(isImpar($numero)){
    echo " O número " . $numero ." é impar!";
} else {
    echo " O número " . $numero ." é par!";
}

echo '<hr>';
$numero = 4;
if(isImpar($numero)){
    echo " O número " . $numero ." é impar!";
} else {
    echo " O número " . $numero ." par!";
}