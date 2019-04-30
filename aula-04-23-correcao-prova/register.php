<?php

include 'conf/init.php';

$username = $_POST['username'];
$email = $_POST['email'];
$name = $_POST['name'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];

if ($pw != $pw2) {
    redirect('reg_login.php?mr=Senhas não podem ser difeferentes');
}
if (email_exists($email)) {
    redirect('reg_login.php?mr=E-mail já cadastrado');
}
if (username_exists('username')) {
    redirect('reg_login.php?mr=Usuário já cadastrado');
}
add_user($username, $email, $pw, $name);
redirect('reg_login.php?mr=Usuário cadastrado com sucesso');

?>