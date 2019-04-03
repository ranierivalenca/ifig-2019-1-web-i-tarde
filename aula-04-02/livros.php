<?php

    include 'init.php';

    $usuario = currentUser();
    $usuarioEmail = currentUserEmail();
    if (!is_logged()) {
        include 'forbidden.html';
        exit();
    }

    $livrosFile = [];
    if (file_exists('livros.csv')) {
        $livrosFile = file('livros.csv');
    }

    function explodir($el) {
        $livroData = explode(',', $el);
        return [
            'usuarioEmail' => $livroData[0],
            'nome' => $livroData[1],
            'autor' => $livroData[2]
        ];
    }
    $livros = array_map('explodir', $livrosFile);

    function filtrar($el) {
        return $el['usuarioEmail'] == currentUser();
    }
    $livros = array_filter($livros, 'filtrar');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= TITLE ?> - Livros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="title">Livros de <?= $usuario ?> <span><a href="logout.php">Sair</a></span></h1>
    <table>
        <tr>
            <th>Livro</th>
            <th>Autor</th>
            <th>ações</th>
        </tr>
        <?php foreach ($livros as $id => $livro): ?>
                <tr>
                    <td><?= $livro['nome'] ?></td>
                    <td><?= $livro['autor'] ?></td>
                    <td>
                        <a href="delLivro.php?id=<?= $id ?>">Remover</a>
                    </td>
                </tr>
        <?php endforeach ?>
    </table>
    <form action="addLivro.php" method="POST">
        <input type="text" name="nome" placeholder="nome">
        <input type="text" name="autor" placeholder="autor">
        <input type="submit" value="Adicionar">
    </form>
    <div class="back">
        <a href="index.php">Voltar</a>
    </div>
</body>
</html>