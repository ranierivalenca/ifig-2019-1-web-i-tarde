<?php

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

define('TITLE', 'Sistema de controle de livros v2.0');

?>