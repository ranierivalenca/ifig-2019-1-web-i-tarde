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

redirect('index.php');

?>;