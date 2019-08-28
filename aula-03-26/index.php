<?php

    include 'init.php';

    // setcookie('data', '2019-03-26');

    //o Inputs vai armazenar as variaveis no formato array associativo.

    $inputs = [
        'nome' => 'text',
        'sobrenome' => 'text',
        'email' => 'text',
        'senha' => 'password',
        'senha2' => 'password'
    ];

    $usuariosFile = file('users.csv'); //aqui ele vai ler o arquivo csv.
    $usuarios = [];
    foreach ($usuariosFile as $usuario) {
        $usuarioData = explode(',', $usuario); // vai separar o array inputs em partes.
        $nome = $usuarioData[0];
        $usuarios[] = $nome; // adiciona o elemento $nome ao final do array $usuarios
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= TITLE ?> -  Registro de Usuário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="register.php" method="POST">
        <?php foreach ($inputs as $name => $type): ?>
            <input type="<?= $type ?>" name="<?= $name ?>" placeholder="<?= $name ?>">
        <?php endforeach ?>
        <input type="submit" value="Enviar">
    </form>
    <div class="users">
        <a href="login.php"><h1>Livros dos usuários</h1></a>
    </div>
</body>
</html>