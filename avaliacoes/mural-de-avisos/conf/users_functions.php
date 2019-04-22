<?php

function add_user($username, $email, $password, $name) {
    add_register([$username, $email, md5($password), $name], USERS_FILE);
}

function user_info($id) {
    $file = file(USERS_FILE);
    $userData = explode_by_separator($file[$id]);
    list($username, $email, $password, $name) = $userData;
    return array_merge([
        'id' => $id,
        'username' => $username,
        'email' => $email,
        'name' => $name
    ], $userData);
}

function email_exists($_email) {
    $file = array_map('explode_by_separator', file(USERS_FILE));
    foreach($file as $userData) {
        list(, $email) = $userData;
        if ($_email == $email) {
            return true;
        }
    }
    return false;
}

function username_exists($_username) {
    $file = array_map('explode_by_separator', file(USERS_FILE));
    foreach($file as $userData) {
        list($username) = $userData;
        if ($_username == $username) {
            return true;
        }
    }
    return false;
}

?>