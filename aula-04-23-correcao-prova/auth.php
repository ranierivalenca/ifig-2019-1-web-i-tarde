<?php

include 'conf/init.php';

$username = $_POST['username'];
$pw = $_POST['pw'];

if (login($username, $pw)) {
    redirect('index.php');
}
redirect('reg_login.php?ml=Usuario ou senha incorreto');

?>