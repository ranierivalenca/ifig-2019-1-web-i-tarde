<?php

session_start();

define('USERS_FILE', 'users.csv');
define('SEPARATOR', '///');
define('TITLE', 'Sistema de Doação');

function login($userEmail, $pw) {
    $data = file(USERS_FILE);
    $user_pw = array_map(function($el) {
        $exploded = explode(SEPARATOR, $el);
        list($email, $pw) = $exploded;
        return implode(SEPARATOR, [$email, $pw]);
    }, $data);
    if (in_array(join(SEPARATOR, [$userEmail, $pw]), $user_pw)) {
        $_SESSION['email'] = $userEmail;
        return true;
    }
    return false;
}

function logout() {
    session_destroy();
}

function is_logged() {
    return isset($_SESSION['email']);
}

function redirect($url) {
    header("location: $url");
    exit();
}

?>