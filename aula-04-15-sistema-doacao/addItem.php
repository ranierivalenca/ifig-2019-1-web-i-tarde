<?php

include 'init.php';

if (!is_logged()) {
    redirect('index.php');
}

$item = $_POST['item'];
$desc = $_POST['descricao'];

$desc = str_replace("\n", "<br>", $desc);
$desc = str_replace("\r", "", $desc);

$handle = fopen(ITEMS_FILE, 'a');
fwrite(
    $handle,
    join(SEPARATOR, [userEmail(), $item, $desc, "\n"])
);
fclose($handle);

redirect('index.php');

?>