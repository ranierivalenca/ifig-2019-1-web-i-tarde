<?php

include 'conf/init.php';

if (!is_logged()) {
    redirect('index.php');
}

foreach($_POST as $idx => $val) {
    $$idx = $val;
}

$message = nl2br($message);
$message = str_replace("\r", '', $message);
$message = str_replace("\n", '', $message);

add_message(currentUserId(), $category, $message);

// http_response_code(201);
?>
        <div class="message from-user">
            <div class="category category-<?= $category ?>">
                <?= 'nome da categoria (TODO)' ?>
                <?php if ($fromUser): ?>
                     <a href="removeMessage.php?id=<?= 'id da mensagem (TODO)' ?>" class="del" title="Remover mensagem">&times;</a>
                <?php endif ?>
            </div>
            <div class="message-text"><?= $message ?></div>
            <div class="author_date">
                <div class="author">
                    <?= currentUser()['name'] ?>
                    <span>
                        (<?= currentUser()['name']['username'] ?>)
                    </span>
                </div>
                <div class="date">
                    <?= 'data (TODO)' ?>
                </div>
            </div>
        </div>