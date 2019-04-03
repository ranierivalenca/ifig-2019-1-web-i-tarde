<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shuffle</title>
</head>
<body>
    <h1>Shuffle</h1>
</body>
</html>

<?php
$numbers = range(1,20); //Irá embaralhar em ordem aleatoria os n° de 1 a 20
shuffle($numbers); //Cria um array contendo uma faixa de elementos
foreach ($numbers as $number) { // irá percorrer o array
    echo "$number ";
}
echo "<br>";
sort($numbers); //Cria um array contendo uma faixa de elementos
foreach ($numbers as $number) { // irá percorrer o array
    echo "$number ";
}
?>