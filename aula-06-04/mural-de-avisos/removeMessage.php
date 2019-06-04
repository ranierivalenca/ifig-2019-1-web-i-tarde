<?php

include 'conf/init.php';

$id = $_GET['id'] ?? false;
if ($id === false) {
    redirect('index.php');
}

$message = message_info($id);
if ($message['user']['id'] != currentUserId()) {
    redirect('index.php');
}

del_message($id);
redirect('index.php');

?>