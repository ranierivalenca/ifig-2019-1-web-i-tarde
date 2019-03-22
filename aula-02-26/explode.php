<?php

    $s = "string a,string b,string c,teste"; // cria uma string com valores separados por vírgula
    var_dump($s);
    $a = explode(",", $s); // "explodindo" a string $s utilizando como separador o caractere vírgula (",")
    var_dump($a);


?>