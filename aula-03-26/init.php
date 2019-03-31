<?php

session_start();

function get($idx) {
    return $_GET[$idx] ?? false;
}

function post($idx) {
    return $_POST[$idx];
}

function juntar($arr) {
    $s = '';
    foreach($arr as $i => $el) {
        if ($i == sizeof($arr) - 1) {
            $s = $s . $el;
        } else {
            $s = $s . $el . ',';
        }
    }
    return $s;
}

function login($name) {
    $_SESSION['logado'] = true;
    $_SESSION['usuario'] = $name;
}

function is_logged() {
    return $_SESSION['logado'] ?? false;
}

function currentUser() {
    if (!is_logged()) {
        return false;
    }
    return $_SESSION['usuario'] ?? false;
}

define('TITLE', 'Sistema de controle de livros v2.0');

?>