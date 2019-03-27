<?php

    function post($idx) {
        return $_POST[$idx];
    }

    function juntar($arr) {
        $s = '';
        foreach($arr as $i => $el) {
            if ($i == sizeof($arr) - 1) {
                $s = $s . $el;
            } else {
                $s = $s . $el . ',';
            }
        }
        return $s;
    }


    $nome = post('nome');
    $autor = post('autor');
    $usuario = post('usuario');

    $data = juntar([$usuario, $nome, $autor]) . "\n";

    $handle = fopen('livros.csv', 'a');
    fwrite($handle, $data);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="message">
        <h1>Livro cadastrado</h1>
        <a href="livros.php?usuario=<?= $usuario ?>">Voltar</a>
    </div>
</body>
</html>

