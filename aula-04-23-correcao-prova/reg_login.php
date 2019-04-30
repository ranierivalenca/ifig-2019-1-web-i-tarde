<?php

include 'conf/init.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mural</title>
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Voltar</a></li>
        </ul>
    </nav>
    <h1>Mural</h1>
    <form action="auth.php" method="POST">
        <fieldset>
            <?php if ($_GET['ml'] ?? false !== false): ?>
                <span class="msg"><?= $_GET['ml'] ?></span>
            <?php endif ?>
            <legend>Login</legend>
            <input type="text" name="username" placeholder="Nome de usuário" value="">
            <input type="password" name="pw" placeholder="Senha">
            <input type="submit" value="ok">
        </fieldset>
    </form>
    <hr>
    <form action="register.php" method="POST">
        <fieldset>
            <?php if ($_GET['mr'] ?? false !== false): ?>
                <span class="msg"><?= $_GET['mr'] ?></span>
            <?php endif ?>
            <legend>Registro</legend>
            <input type="text" placeholder="Nome de usuário" name="username" value="">
            <input type="email" placeholder="E-mail" name="email" value="">
            <input type="text" placeholder="Nome" name="name" value="">
            <input type="password" placeholder="Senha" name="pw">
            <input type="password" placeholder="Confirme a senha" name="pw2">
            <input type="submit" name="submit" value="ok">
        </fieldset>
    </form>
</body>
</html>