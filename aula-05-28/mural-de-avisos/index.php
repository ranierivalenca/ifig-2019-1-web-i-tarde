<?php include 'conf/init.php'; ?>

<?php $messages = array_reverse(get_messages()); ?>
<?php if (is_logged()): ?>
    <?php $categories = get_categories(); ?>
<?php endif ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mural</title>
    <link rel="stylesheet" href="../assets/styles.css">
    <script src="jquery-3.4.1.min.js"></script>
</head>
<body>
    <nav>
        <ul>
            <?php if (!is_logged()): ?>
                <li><a href="reg_login.php">Registro / Login</a></li>
            <?php else: ?>
                <li><?= currentUser()['name'] ?> <span>(<?= currentUser()['username'] ?>)</span></li>
                <li><a href="logout.php">Sair</a></li>
            <?php endif ?>
        </ul>
    </nav>

    <h1>Mural</h1>
    <h3>Mensagens</h3>

    <?php if (is_logged()): ?>
        <form action="addMessage.php" class="new-message" method="POST">
            <fieldset>
                <legend>Nova mensagem</legend>
                <textarea name="message" cols="30" rows="10" placeholder="Mensagem"></textarea>
                <select name="category" required="">
                    <option value="" readonly>Escolha a categoria</option>
                    <option value="" disabled>--</option>
                    <?php foreach ($categories as $cat): ?>
                        <option value="<?= $cat['id'] ?>"><?= $cat['category'] ?></option>
                    <?php endforeach ?>
                </select>
                <a href="newCategory.php">Nova categoria</a>
                <input type="submit" value="enviar">
            </fieldset>
        </form>

    <?php endif ?>

    <?php foreach ($messages as $message): ?>
        <?php $fromUser = is_logged() && $message['user']['id'] == currentUserId(); ?>
        <div class="message <?= $fromUser ? 'from-user' : '' ?>">
            <div class="category category-<?= $message['category']['id'] ?>">
                <?= $message['category']['category'] ?>
                <?php if ($fromUser): ?>
                     <a href="removeMessage.php?id=<?= $message['id']; ?>" class="del" title="Remover mensagem">&times;</a>
                <?php endif ?>
            </div>
            <div class="message-text"><?= $message['message'] ?></div>
            <div class="author_date">
                <div class="author">
                    <?= $message['user']['name'] ?>
                    <?php if (is_logged()): ?>
                        <span>
                            (<?= $message['user']['username'] ?>)
                        </span>
                    <?php endif ?>
                </div>
                <div class="date">
                    <?= $message['date'] ?>
                </div>
            </div>
        </div>
    <?php endforeach ?>
    <script>
        $('.del').on('click', (evt) => {
            evt.preventDefault();
            let uerreele = $(evt.target).attr('href');

            $.ajax({
                url: uerreele,
                success: (data) => {
                    $(evt.target).parent().parent().remove();
                },
                error: (data) => {
                    alert("Algo de errado não está certo");
                }
            });
        });
    </script>
</body>
</html>