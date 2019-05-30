<?php

include_once 'users_functions.php';

function add_category($category) {
    add_register([$category], CATEGORIES_FILE);
}

function category_info($id, $register = false) {
    if ($register === false) {
        $register = file(CATEGORIES_FILE)[$id] ?? false;
    }
    if ($register === false) {
        return false;
    }
    $category = trim($register);
    return [
        'id' => $id,
        'category' => $category
    ];
}

function get_categories() {
    if (!is_file(CATEGORIES_FILE)) {
        return [];
    }
    $data = file(CATEGORIES_FILE);

    return array_map(
        'category_info',
        array_keys($data),
        $data
    );
}

?>