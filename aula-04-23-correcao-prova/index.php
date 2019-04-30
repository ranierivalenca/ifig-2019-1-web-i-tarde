<?php

include 'conf/init.php';

$messages = get_messages();
$messages = array_reverse($messages);
// echo '<pre>';
// print_r($messages);
// echo '</pre>';
// exit();

$user = currentUser();
$categories = get_categories();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= TITLE ?></title>
    <link rel="stylesheet" href="../assets/styles.css">
</head>
<body>
    <nav>
        <ul>
            <?php if (!is_logged()): ?>
                <li><a href="reg_login.php">Registro / Login</a></li>
            <?php else: ?>
                <li><?= $user['name'] ?> <span>(<?= $user['username'] ?>)</span></li>
                <li><a href="logout.php">Sair</a></li>
            <?php endif ?>
        </ul>
    </nav>

    <h1><?= TITLE ?></h1>
    <h3>Mensagens</h3>
    <form action="addMessage.php" class="new-message" method="POST">
        <fieldset>
            <legend>Nova mensagem</legend>
            <textarea name="message" cols="30" rows="10" placeholder="Mensagem"></textarea>
            <select name="category" required="">
                <option value="" readonly>Escolha a categoria</option>
                <option value="" disabled>--</option>
                <?php foreach (get_categories() as $category): ?>
                    <option value="<?= $category['id'] ?>"><?= $category['category'] ?></option>
                <?php endforeach ?>
            </select>
            <a href="newCategory.php">Nova categoria</a>
            <input type="submit" value="enviar">
        </fieldset>
    </form>
    <?php foreach ($messages as $message): ?>
        <div class="message <?php if ($message['user']['id'] == currentUserId()) { echo 'from-user'; } ?>">
            <div class="category category-<?= $message['category']['id'] ?>">
                <?= $message['category']['category'] ?>
                <?php if ($message['user']['id'] == currentUserId()): ?>
                    <a href="removeMessage.php?id=<?= $message['id'] ?>" class="del" title="Remover mensagem">&times;</a>
                <?php endif ?>
            </div>
            <div class="message-text">
                <?= $message['message'] ?>
            </div>
            <div class="author_date">
                <div class="author"><?= $message['user']['name'] ?></div>
                <div class="date"><?= $message['date'] ?></div>
            </div>
        </div>
    <?php endforeach ?>


    <!-- <div class="message">
        <div class="category category-1">Pergunta</div>
        <div class="message-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa praesentium, rerum fugiat magnam ratione doloremque enim numquam aspernatur exercitationem ut dolore earum dolorem, id voluptas et eveniet ea, accusantium repudiandae?
        </div>
        <div class="author_date">
            <div class="author">Peter Quill</div>
            <div class="date">17/04/2019</div>
        </div>
    </div>

    <div class="message">
        <div class="category category-2">Procurando</div>
        <div class="message-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas itaque perspiciatis neque ut commodi omnis mollitia quod iure ipsa enim quae incidunt, porro quas consequuntur natus repudiandae voluptatem illo ab.
        </div>
        <div class="author_date">
            <div class="author">Tony Stark</div>
            <div class="date">16/04/2019</div>
        </div>
    </div> -->
</body>
</html>