<?php

include_once 'users_functions.php';

function login($username, $pw) {
    $file = file(USERS_FILE);
    $users_pw = array_map(function($el) {
        $parts = explode_by_separator($el);
        return implode(SEPARATOR, [$parts[0], $parts[2]]);
    }, $file);

    if(($id = array_search(implode(SEPARATOR, [$username, md5($pw)]), $users_pw)) === false) {
        return false;
    }

    $_SESSION['logged'] = true;
    $_SESSION['userId'] = $id;
    $_SESSION['user'] = user_info($id);
    return true;
}

function is_logged() {
    return $_SESSION['logged'] ?? false;
}

function currentUser() {
    return $_SESSION['user'] ?? false;
}

function currentUserId() {
    return $_SESSION['userId'] ?? false;
}

function logout() {
    session_destroy();
}

?>