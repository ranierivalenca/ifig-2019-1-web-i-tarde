<?php

    // $a = [10, 23, 89];
    // $soma = 0;
    // for($i = 0; $i < sizeof($a); $i++) {
    //     $soma = $soma + $a[$i];
    // }

    // //     0      1      2      3      4      5
    // $a = ["a\n", "b\n", "c\n", "d\n", "e\n", "f\n"];
    // unset($a[3]);
    // unset($a[5]);

    $a = file('arquivo.csv');
    unset($a[3]);

    $s = "";
    foreach($a as $el) {
        $s = $s . $el;
    }

    $handle = fopen("arquivo.csv", "w"); //abre para escrita e apaga o conteúdo
    fwrite($handle, $s);


?>