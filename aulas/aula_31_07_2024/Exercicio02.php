<!-- $html .= '<li>';
$html .= '02 - Crie uma função que retorna um array em PHP com uma lista de 5 nomes(String)<br>';
$html .= 'Após isso, utilizando o comando "FOREACH" em PHP mostre os dados retornados na tela.';
$html .= '</li>'; -->

<?php

function getNomes(){
    return array('nome1', 'nome2', 'nome3', 'nome4', 'nome5');  
 }
 
// percorrendo list
echo '<hr>';
echo 'Percorrendo um list de nomes: ';
$aListaNomes = getNomes();
foreach($aListaNomes as $value){
    echo '<br>Nome:' . $value;
}

