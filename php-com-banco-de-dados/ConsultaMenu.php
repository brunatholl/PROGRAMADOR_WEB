<?php
$consulta = '<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Menu</title>
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
            <th>Sistema</th>
            <th>Nome</th>
            <th>Tabela</th>
        </thead>
        <tbody>';

// Pegar os dados do banco de dados 
require_once("conexao/Utils.php");

// join para buscar o sistema
$sql = "  select menu.mencodigo,
                 sistema.siscodigo ||' - ' || sistema.sisnome as sisnome,
                 menu.mennome,
                 menu.mentabela
            from menu 
            join sistema on (sistema.siscodigo = menu.siscodigo)
        order by mencodigo";
        
$aLista = getQuery()->selectAll($sql);

// echo "<pre>" . print_r($aLista, true) ."</pre>"; return true;

foreach($aLista as $aDados){
    // INICIA A LINHA
    $consulta .= '<tr>';

    // COLUNAS
    $consulta .= '   <td>' . $aDados["mencodigo"] . '</td>';
    $consulta .= '   <td>' . $aDados["sisnome"] . '</td>';
    $consulta .= '   <td>' . $aDados["mennome"] . '</td>';
    $consulta .= '   <td>' . $aDados["mentabela"] . '</td>';

    // FECHA A LINHA
    $consulta .= '</tr>';
}

$consulta .= '            
        </tbody>
    </table>
</body>
</html>';

echo $consulta;
