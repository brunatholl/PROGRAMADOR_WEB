<?php
/*
$html .= '03 - Crie uma função que retorne um objeto do tipo "stdClass()".<br>';
$html .= 'O objeto deverá ser um objeto de nome "$oPessoa" e deverá conter os seguintes atributos:<br>';

$html .= '<ul>';
$html .= '  <li>codigo</li>';
$html .= '  <li>nome</li>';
$html .= '  <li>idade</li>';
$html .= '  <li>estado</li>';
$html .= '  <li>cidade</li>';
$html .= '  <li>endereco</li>';
$html .= '  <li>numero</li>';
$html .= '  <li>telefone</li>';
$html .= '</ul>';

$html .= 'Após isso, mostre na tela os dados do objeto, descrevendo cada um deles.<br>';
$html .= '</li>';
 */
 
function getPessoaObjeto(){
    $aListaPessoasFn = array();
    
    $oPessoa = new  stdClass();
    $oPessoa->codigo = 1;
    $oPessoa->nome = 'Bruna';
    $oPessoa->idade = 30;
    $oPessoa->estado = 'SC';
    $oPessoa->cidade = 'Rio do Sul';
    $oPessoa->endereco = 'Sumaré';
    $oPessoa->numero = 167;
    $oPessoa->telefone = 91140950;
    
    // Adicionando o objeto atual no array de dados
    $aListaPessoasFn[] = $oPessoa;

    return $aListaPessoasFn;
}

$aListaPessoas = getPessoaObjeto();

echo 'Dados da pessoa:<br>';
foreach($aListaPessoas as $oPessoa){  
    echo '<br>Código: ' . $oPessoa->codigo;
    echo '<br>Nome: ' . $oPessoa->nome;
    echo '<br>Idade: ' . $oPessoa->idade;
    echo '<br>Estado: ' . $oPessoa->estado;
    echo '<br>Cidade: ' . $oPessoa->cidade;
    echo '<br>Endereço: ' . $oPessoa->endereco;
    echo '<br>Numero: ' . $oPessoa->numero;
    echo '<br>Telefone: ' . $oPessoa->telefone;
}