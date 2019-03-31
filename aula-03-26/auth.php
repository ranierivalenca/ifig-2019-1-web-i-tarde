<?php

include 'init.php';

$email = post('email');
$senha = post('senha');

$users = file('users.csv');
foreach($users as $user) {
    $userData = explode(',', $user);
    if (trim($userData[2]) == $email && trim($userData[3]) == $senha) {
        login($userData[0]);
        break;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php if (is_logged()): ?>
        Você está logado! <a href="livros.php">Clique aqui para acessar</a>
    <?php else: ?>
        Login ou senha incorreto. <a href="login.php">Clique para voltar</a>
    <?php endif ?>
</body>
</html>