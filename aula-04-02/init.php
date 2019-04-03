<?php

session_start();

function get($idx) {
    return $_GET[$idx] ?? false;
}

function post($idx) {
    return $_POST[$idx];
}

function juntar($arr) {
    return join(',', $arr);
}

function login($name, $email) {
    $_SESSION['logado'] = true;
    $_SESSION['usuario'] = $name;
    $_SESSION['email'] = $email;
}

function logout() {
    $_SESSION['logado'] = false;
    unset($_SESSION['usuario']);
    unset($_SESSION['email']);
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

function currentUserEmail() {
    if (!is_logged()) {
        return false;
    }
    return $_SESSION['email'] ?? false;
}

function redirect($caminho) {
    header('location: ' . $caminho);
    exit();
}

define('TITLE', 'Sistema de controle de livros v2.0');

?>