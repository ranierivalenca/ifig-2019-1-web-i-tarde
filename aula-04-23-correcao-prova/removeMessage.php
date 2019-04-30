<?php

include 'conf/init.php';

if (!is_logged()) {
    redirect('index.php');
}
$id = $_GET['id'];
del_message($id);
redirect('index.php');

?>