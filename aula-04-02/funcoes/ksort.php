<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <?php

$fruta = array("2"=>"limão", "1"=>"laranja", "4"=>"banana", "3"=>"maçã");// ordena os elementos de uma array
ksort($fruta);
foreach ($fruta as $key => $val) {
    echo "$key = $val\n";
}
?>
</body>
</html>