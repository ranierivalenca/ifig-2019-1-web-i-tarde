<?php

include 'conf/init.php';

// foreach($_POST as $index => $data) {
//     $$index = $data;
// }
$username = $_POST['username'] ?? false;
$email = $_POST['email'] ?? false;
$name = $_POST['name'] ?? false;
$pw = $_POST['pw'] ?? false;
$pw2 = $_POST['pw2'] ?? false;

$vars = '';
foreach(['username', 'email', 'name'] as $var) {
    $vars .= "&{$var}={$$var}";
}

if ($pw != $pw2) {
    redirect('reg_login.php?mr=Senhas não conferem' . $vars);
}
if ($pw == '') {
    redirect('reg_login.php?mr=Senha não pode estar em branco' . $vars);
}
if (email_exists($email)) {
    redirect('reg_login.php?mr=E-mail já registrado' . $vars);
}
if (username_exists($email)) {
    redirect('reg_login.php?mr=Nome de usuário já cadastrado' . $vars);
}

add_user($username, $email, $pw, $name);


redirect('reg_login.php?mr=Usuário registrado');

?>