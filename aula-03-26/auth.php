<?php

include 'init.php';

$email = post('email'); //o email vai ser enviando com método post.
$senha = post('senha');

$users = file('users.csv');  //Vai ler o arquivo csv
foreach($users as $user) {    // vai anda pelo o array com a função forech.
    $userData = explode(',', $user);
    if (trim($userData[2]) == $email && trim($userData[3]) == md5($senha)) {  // verificar se a parte $user é igual $email e se é igual a $senha, pois isso verifica se o usuario está logado e sai do operação.
        login($userData[0], $userData[2]);
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