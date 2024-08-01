<?php
/* 05 - Crie uma função que retorne um array com uma lista de 5 funcionarios, 
usando objeto do tipo "stdClass()".<br>';
$html .= 'O objeto deverá ser um objeto de nome "$oSalario" 
e deverá conter os seguintes atributos:<br>';

$html .= '  <li>funcionario - Deve ter o nome do funcionario</li>';
$html .= '  <li>funcao - Programador, Advogado, Engenheiro, etc</li>';
$html .= '  <li>salarioBruto</li>';
$html .= '  <li>imposto</li>';
$html .= '  <li>salarioLiquido</li>';

$html .= 'Após isso, utilizando o comando "FOREACH" em PHP, 
percorra os dados e mostre na tela as informações de cada funcionario.<br>';
*/

function getFuncionarioObjeto(){
    $aListaFuncionarioFn = array();
    
    $oSalario = new  stdClass();
    $oSalario->codigo = 1;
    $oSalario->nome = 'Adriano';
    $oSalario->funcao = 'Advogado';
    $oSalario->salarioBruto = '3000.00';
    $oSalario->imposto = '200.00';
    $oSalario->salarioLiquido = '2800.00';
    
    // Adicionando o objeto atual no array de dados
    $aListaFuncionarioFn[] = $oPessoa;

    $oPessoa = new  stdClass();
    $oPessoa->codigo = 2;
    $oPessoa->nome = 'Cauê';

    // Adicionando o objeto atual no array de dados
    $aListaFuncionarioFn[] = $oPessoa;

    $oPessoa = new  stdClass();
    $oPessoa->codigo = 3;
    $oPessoa->nome = 'Bruna';

    // Adicionando o objeto atual no array de dados
    $aListaFuncionarioFn[] = $oPessoa;

    $oPessoa = new  stdClass();
    $oPessoa->codigo = 4;
    $oPessoa->nome = 'Romulo';

    // Adicionando o objeto atual no array de dados
    $aListaFuncionarioFn[] = $oPessoa;

    $oPessoa = new  stdClass();
    $oPessoa->codigo = 5;
    $oPessoa->nome = 'Gelvazio';

    // Adicionando o objeto atual no array de dados
    $aListaFuncionarioFn[] = $oPessoa;
    return $aListaFuncionarioFn;
}


function getDadosApi(){
    $salario = 1500;
    $nome = 'Romulo';
    $recebeuSalario = false;

    $salarioFuncionario = new stdClass();
    $salarioFuncionario->salarioBruto = 2500;
    $salarioFuncionario->inss = 200;
    $salarioFuncionario->salarioLiquido = 2300;

    return array($salario, $nome, $recebeuSalario, $salarioFuncionario);
    // list     ($salario, $nome, $recebeuSalario, $salarioFuncionario) = getDadosApi();
}
