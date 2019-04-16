<?php

include 'init.php';

// if (!is_logged()) {
//     redirect('index.php');
// }


// $id = $_GET['id'] ?? false;
// if ($id === false) {
//     redirect('index.php');
// }


// $items = file(ITEMS_FILE);
// $items = array_map(function($el) {
//     list($email) = explode(SEPARATOR, $el);
//     return $email;
// }, $items);

// if ($items[$id] != userEmail()) {
//     redirect('index.php');
// }

// $items = file(ITEMS_FILE);
// unset($items[$id]);
// file_put_contents(
//     ITEMS_FILE,
//     join("", $items)
// );

if(is_logged()) {
    $id = $_GET['id'] ?? false;
    if ($id !== false) {
        $items = file(ITEMS_FILE);
        $items = array_map(function($el) {
            list($email) = explode(SEPARATOR, $el);
            return $email;
        }, $items);

        if ($items[$id] == userEmail()) {
            $items = file(ITEMS_FILE);
            unset($items[$id]);
            file_put_contents(
                ITEMS_FILE,
                join("", $items)
            );
        }

    }
}



redirect('index.php');

?>