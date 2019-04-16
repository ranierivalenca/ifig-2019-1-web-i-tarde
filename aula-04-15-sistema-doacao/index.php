<?php

include 'init.php';

$items = file(ITEMS_FILE);
$items = array_map(function($el) {
    list($email, $name, $desc) = explode(SEPARATOR, $el);
    return [
        'email' => $email,
        'item' => $name,
        'desc' => $desc
    ];
}, $items);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= TITLE ?></title>
</head>
<body>
    <h1>Sistema de doação</h1>
    <table border="1">
        <tr>
            <th>Item</th>
            <th>Descrição</th>
            <?php if (is_logged()): ?>
                <th>Doador</th>
                <th>Ações</th>
            <?php endif ?>
        </tr>
        <?php foreach ($items as $id => $item): ?>
            <tr>
                <td><?= $item['item'] ?></td>
                <td><?= $item['desc'] ?></td>
                <?php if (is_logged()): ?>
                    <td><?= $item['email'] ?></td>
                    <td>

                    </td>
                <?php endif ?>
            </tr>
        <?php endforeach ?>
    </table>
    <?php if (!is_logged()): ?>
        <a href="reg_login.php">Login / Registro</a>
    <?php else: ?>
        <form action="addItem.php" method="POST">
            <input type="text" name="item" placeholder="Nome do item">
            <textarea name="descricao" id="" cols="30" rows="10"></textarea>
            <input type="submit">
        </form>
        <a href="logout.php">Sair</a>
    <?php endif ?>
</body>
</html>