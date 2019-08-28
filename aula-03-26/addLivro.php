<?php


    include 'init.php'; //inserir o arquivo init.php em outros arquivos, facilitando a alteração no código.

    if (!is_logged()) {           //O if verifica se a função logged está recebendo os parametros, caso não ela executar o exit saindo e não conexando  ao arquivo forbidden.html 
        include 'forbidden.html';
        exit();
    }

    $nome = post('nome'); // acessa a variavel pelo o método post
    $autor = post('autor');
    $usuarioEmail = currentUserEmail(); //Receber os valores da varaiavel current

    $data = juntar([$usuarioEmail, $nome, $autor]) . "\n"; //Juntar os paramentro que passa pelo método post, na variavel $data.

    $handle = fopen('livros.csv', 'a'); //A variavel $handle vai receber a função fopen, onde vai verificar os valores no arquivo csv
    fwrite($handle, $data);  //aqui vai apagar os valores nestas variaveis.
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="message">
        <h1>Livro cadastrado</h1>
        <a href="livros.php">Voltar</a>
    </div>
</body>
</html>

