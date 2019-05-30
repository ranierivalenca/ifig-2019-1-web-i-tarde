<?php

session_start();

/* Constantes */
define('TITLE', 'Mural');
define('SEPARATOR', '*|*|*');
define('MESSAGES_FILE', 'data/messages.csv');
define('USERS_FILE', 'data/users.csv');
define('CATEGORIES_FILE', 'data/categories.csv');

/* Funções */

function explode_by_separator($str) {
    return array_map('trim', explode(SEPARATOR, $str));
}

function add_register($dataArr, $file) {
    $handle = fopen($file, 'a');
    $data = implode(SEPARATOR, $dataArr) . "\n";
    fwrite($handle, $data);
}
function remove_register($file, $id) {
    $data = file($file);
    $data[$id] = "\n";
    file_put_contents($file, implode('', $data));
}

function redirect($url) {
    header('location: ' . $url);
    exit();
}

include_once 'users_functions.php';
include_once 'login_functions.php';
include_once 'messages_functions.php';
include_once 'categories_functions.php';

?>