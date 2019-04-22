<?php

include_once 'users_functions.php';
include_once 'categories_functions.php';

function add_message($userId, $categoryId, $message) {
    add_register([$userId, $categoryId, $message], MESSAGES_FILE);
}

function del_message($id) {
    remove_register(MESSAGES_FILE, $id);
}

function message_info($id, $register = false) {
    if ($register === false) {
        $register = file(MESSAGES_FILE)[$id] ?? false;
    }
    if ($register === false) {
        return false;
    }
    list($userId, $categoryId, $message) = explode_by_separator($register);
    return [
        'id' => $id,
        'user' => user_info($userId),
        'category' => category_info($categoryId),
        'message' => $message
    ];
}

function get_messages() {
    if (!is_file(MESSAGES_FILE)) {
        return [];
    }
    $data = file(MESSAGES_FILE);
    $data = array_filter(
        array_map('trim', $data)
    );
    return array_map(
        'message_info',
        array_keys($data),
        $data
    );
}

?>