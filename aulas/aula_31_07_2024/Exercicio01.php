<!-- $html .= '<li>';
$html .= '01 - Crie um array em PHP com uma lista de 5 frutas(String)';
$html .= 'Utilizando o comando "FOREACH" em PHP, percorra o array e imprima os dados na tela.';
$html .= '</li>'; -->


<?php 

function getFrutas(){
   return array('Maça', 'Manga', 'Melão', 'Morango','Uva' );
}

echo 'Percorrendo array de Frutas:';
echo '<hr>';
$aFrutas = getFrutas();
foreach($aFrutas as $value){
    echo '<br>Valor: ' . $value;
}

echo '<hr>';
echo 'Outra forma para percorrer e trazer o valor key:';
foreach($aFrutas as $key => $value){
    echo '<br>Chave:' . $key;
    echo '<br>Valor:' . $value;
}
