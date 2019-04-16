<?php

include 'init.php';

if (!is_logged()) {
    redirect();
}

$id = $_GET['id'] ?? false;
if ($id === false) {
    redirect();
}

$items = file(ITEMS_FILE);
$item = explode(SEPARATOR, $items[$id]);
$users = file(USERS_FILE);
$users = array_filter($users, function($el) {
    global $item;
    // var_dump($item, $el);
    list($email) = explode(SEPARATOR, $el);
    return $email == $item[0];
});
$user = array_pop($users);
$user = explode(SEPARATOR, $user);

$infos = [
    'Item' => $item[1],
    'Descrição' => $item[2],
    'Nome' => $user[2],
    'Email' => $user[0],
    'Telefone' => $user[3],
    'Cidade' => $user[4],
    'Bairro' => $user[5]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= TITLE ?> - Informações</title>
</head>
<body>
    <table>
        <?php foreach ($infos as $info => $value): ?>
            <tr>
                <th><?= $info ?></th>
                <td><?= $value ?></td>
            </tr>
        <?php endforeach ?>
    </table>
    <a href="index.php">Voltar</a>
</body>
</html>