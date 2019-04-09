<?php

include 'init.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= TITLE ?></title>
</head>
<body>
    <h1>Sistema de doação</h1>
    <table>
        <tr>
            <th>Item</th>
            <th>Descrição</th>
            <?php if (is_logged()): ?>
                <th>Doador</th>
                <th>Ações</th>
            <?php endif ?>
        </tr>
    </table>
    <?php if (!is_logged()): ?>
        <a href="reg_login.php">Login / Registro</a>
    <?php else: ?>
        <a href="logout.php">Sair</a>
    <?php endif ?>
</body>
</html>