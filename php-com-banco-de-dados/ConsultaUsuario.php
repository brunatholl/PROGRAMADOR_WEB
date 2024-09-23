<?php
$consulta = '<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Usuario</title>
</head>
<style>
    body {
        display:flex;
        width:100vw;
        justify-content:center;
        align-itens:center;
        margin-top:40px;
    }
</style>
<body>
    <table border="1">
        <thead>
            <th>Código</th>
            <th>Login</th>
            <th>Nome</th>
            <th>Senha</th>
        </thead>
        <tbody>';

// Pegar os dados do banco de dados 
require_once("conexao/Utils.php");

$sql = " select * from usuario order by usucodigo";
$aLista = getQuery()->selectAll($sql);

// echo "<pre>" . print_r($aLista, true) ."</pre>"; return true;

foreach($aLista as $aDados){
    // INICIA A LINHA
    $consulta .= '<tr>';

    // COLUNAS
    $consulta .= '   <td>' . $aDados["usucodigo"] . '</td>';
    $consulta .= '   <td>' . $aDados["usulogin"] . '</td>';
    $consulta .= '   <td>' . $aDados["usunome"] . '</td>';
    $consulta .= '   <td>' . $aDados["ususenha"] . '</td>';

    // FECHA A LINHA
    $consulta .= '</tr>';
}

$consulta .= '            
        </tbody>
    </table>
</body>
</html>';

echo $consulta;
