<?php
// Caminho do arquivo JSON
$arquivo_json = 'usuarios.json';

// Verifica se o formulário foi enviado
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    //Recebe os dados do formulário
    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //Cria um array associativo com os dados do usuário
    $usuario = [
        'codigo' => $codigo,
        'nome' => $nome,
        'email' => $email,
        'senha' => $senha
    ];

    //Verifica se o arquivo JSON já existe
    if(file_exists($arquivo_json)){
        //Lê o conteúdo do arquivo
        $usuarios = json_decode(file_get_contents($arquivo_json), true);
    } else {
        //Cria um array vazio se o arquivo não existir
        $usuarios = [];
    }

    //Adiciona o novo usuário ao array
    $usuarios[] = $usuario;

    //Converte o array para JSON e salva no arquivo
    file_put_contents($arquivo_json, json_encode($usuarios, JSOM_PRETTY_PRINT));

    echo "Usuário adicionado com sucesso!";
}  

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Usuários Registrados</title>
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }
            /* 
            table =table
            <thead> =cabeçalho
                th= titulo <\thead>
            td= coluna
                tr = linha
             */
            table, th, td {
                border: 1px solid #ccc;
            }
            th, td {
                padding: 10px;
                text-align: left;
            }
            th{
                background-color: #f2f2f2;
            }
        </style>
    </head>
    <body>
        
    <h2>Usuários Registrados</h2>
    </body>
</html>

<?php
//Verifica se o arquivo JSON existe e não está vazio
if(file_exists($arquivo_json) && filesize($arquivo_json) > 0){
    //Lê o conteúdo do arquivo JSON
    $usuarios = json_decode(file_get_contents($arquivo_json), true);

    //Exibe os usuários em uma tabela
    echo '<table>';
    echo '<tr><th>Código</th><th>Nome</th><th>Email</th><th>Senha</th>';

    $sHTML = "<table>";
    foreach ($usuarios as $usuario) {
        $sHTML .= '<tr>';
        $sHTML .= '<td>' . htmlspecialchars($usuario['codigo']) . '</td>';
        $sHTML .= '<td>' . htmlspecialchars($usuario['nome']) . '</td>';
        $sHTML .= '<td>' . htmlspecialchars($usuario['email']) . '</td>';
        $sHTML .= '<td>' . htmlspecialchars($usuario['senha']) . '</td>';
        $sHTML .= '</tr>';
    }
    echo $sHTML;

    echo'</table>';

} else {
    echo '<p> Nenhum usuário registrado ainda.</p>';
}

?>