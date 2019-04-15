<?php include 'init.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= TITLE ?> - Login / Registro</title>
</head>
<body>
    <form action="addUser.php" method="POST" >
        <fieldset>
            <legend>Registro</legend>
            <?php if ($_GET['mes_reg'] ?? false): ?>
                <span class="message"><?= $_GET['mes_reg'] ?></span>
            <?php endif ?>
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="senha" placeholder="Senha">
            <input type="password" name="senha2" placeholder="Confirme a senha">
            <input type="text" name="nome" placeholder="Nome">
            <input type="phone" name="telefone" placeholder="Telefone">
            <input type="text" name="cidade" placeholder="Cidade">
            <input type="text" name="bairro" placeholder="Bairro">
            <input type="submit">
        </fieldset>
    </form>
    <hr>
    <form action="login.php" method="POST">
        <fieldset>
            <legend>Login</legend>
            <?php if ($_GET['mes_log'] ?? false): ?>
                <span class="message"><?= $_GET['mes_log'] ?></span>
            <?php endif ?>
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="senha" placeholder="Senha">
            <input type="submit">
        </fieldset>
    </form>
</body>
</html>