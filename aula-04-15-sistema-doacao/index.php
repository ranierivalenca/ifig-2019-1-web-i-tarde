<?php

include 'init.php';

$items = file(ITEMS_FILE);
$users = file(USERS_FILE);
// echo "<pre>";
// print_r($items);
// echo "</pre>";
$usersEmails = [];
foreach($users as $userRow) {
    list($email, , $nome, $fone) = explode(SEPARATOR, $userRow);
    $usersEmails[$email] = [$nome, $fone];
}
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
                    <?php
                        $user = $usersEmails[$item['email']];
                    ?>
                    <td><?= $user[0] ?> (<?= $user[1] ?>)</td>
                    <td>
                        <?php if ($item['email'] == userEmail()): ?>
                            <a href="deleteItem.php?id=<?= $id ?>">Remover</a>
                        <?php endif ?>
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