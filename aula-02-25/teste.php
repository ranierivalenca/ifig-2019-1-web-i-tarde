<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

        $numeros = [0, 2, 4, 6, 8, 10];
        $nomes = ["pedro", "fi de jhon", "thais", "uma linha"];
        $cidades = array("igarassu", "abreu", "paulista", "olinda", "recife", "jaboatao", "tao tao distante");
    ?>
    <ul>
        <?php for($i = 0; $i < sizeof($nomes); $i++): ?>
            <?php if ($i % 2 != 0): ?>
                <li><?= $nomes[$i]; ?></li>
            <?php endif; ?>
        <?php endfor; ?>
    </ul>
    <ul>
        <?php for ($i = 0; $i < sizeof($numeros); $i++): ?>
            <?php $numero = $numeros[$i]; ?>
            <li><?= $numero; ?></li>
        <?php endfor; ?>
    </ul>
    <ul>
        <?php foreach ($cidades as $cidade): ?>
            <li><?= $cidade; ?></li>
        <?php endforeach ?>
    </ul>
    <hr>
    <?php
        $frutas = [
            "uma linha" => "maçã",
            "jaspion" => "manga",
            "ranieri" => "kiwi",
            "silvio" => "caju",
            "aline" => "melancia"
        ];

    ?>
    <ul>
        <?php foreach ($frutas as $dono => $fruta): ?>
            <li><?= $fruta; ?> (<strong><?= $dono; ?></strong>)</li>
        <?php endforeach ?>
    </ul>



</body>
</html>