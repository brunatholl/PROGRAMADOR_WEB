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



/* EM CONSTRUÇÃO */

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
    $aListaFuncionarioFn[] = $oSalario;

    $oSalario = new  stdClass();
    $oSalario->codigo = 2;
    $oSalario->nome = 'Cauê';
    $oSalario->funcao = 'Estagiario';
    $oSalario->salarioBruto = '3000.00';
    $oSalario->imposto = '200.00';
    $oSalario->salarioLiquido = '2800.00';
    

    // Adicionando o objeto atual no array de dados
    $aListaFuncionarioFn[] = $oSalario;

    $oSalario = new  stdClass();
    $oSalario->codigo = 3;
    $oSalario->nome = 'Bruna';
    $oSalario->funcao = 'Desenvolvedor';
    $oSalario->salarioBruto = '3000.00';
    $oSalario->imposto = '200.00';
    $oSalario->salarioLiquido = '2800.00';

    // Adicionando o objeto atual no array de dados
    $aListaFuncionarioFn[] = $oSalario;

    $oSalario = new  stdClass();
    $oSalario->codigo = 4;
    $oSalario->nome = 'Romulo';
    $oSalario->funcao = 'Engenheiro';
    $oSalario->salarioBruto = '3000.00';
    $oSalario->imposto = '200.00';
    $oSalario->salarioLiquido = '2800.00';

    // Adicionando o objeto atual no array de dados
    $aListaFuncionarioFn[] = $oSalario;

    $oSalario = new  stdClass();
    $oSalario->codigo = 5;
    $oSalario->nome = 'Gelvazio';
    $oSalario->funcao = 'Gerente';
    $oSalario->salarioBruto = '3000.00';
    $oSalario->imposto = '200.00';
    $oSalario->salarioLiquido = '2800.00';

    // Adicionando o objeto atual no array de dados
    $aListaFuncionarioFn[] = $oSalario;
    return $aListaFuncionarioFn;
}

$aDadosFuncionario = getFuncionarioObjeto();
foreach($aDadosFuncionario as $oSalario){  
    echo '<br>Código: ' . $oSalario->codigo;
    echo '<br>Nome: ' . $oSalario->nome;
    echo '<br>Função: ' . $oSalario->funcao;
    echo '<br>Salario Bruto: ' . $oSalario->salarioBruto;
    echo '<br>Imposto: ' . $oSalario->imposto;
    echo '<br>Salario Líquido: ' . $oSalario->salarioLiquido;
}

