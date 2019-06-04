<?php

include 'conf/init.php';

if (!is_logged()) {
    redirect('index.php');
}

$category = $_POST['category'];
add_category($category);
redirect('index.php');

?>