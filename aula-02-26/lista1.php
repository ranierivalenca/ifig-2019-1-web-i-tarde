<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $nomes = file('nomes.csv');
        for ($i = 0; $i < sizeof($nomes); $i++) {
            $nomes[$i] = explode(",", $nomes[$i]);
        }
        // var_dump($nomes);
    ?>
    <h1>Nomes</h1>
    <ul>
        <?php foreach ($nomes as $nome_nota): ?>
            <li><?= $nome_nota[0] ?> (<?= $nome_nota[1] ?>)</li>
        <?php endforeach ?>
    </ul>
</body>
</html>