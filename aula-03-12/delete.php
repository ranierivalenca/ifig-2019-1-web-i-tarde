<?php

    $linha = $_GET['id'];

    $a = file('dados.csv');

    unset($a[$linha]);

    $s = "";
    foreach($a as $el) {
        $s = $s . $el;
    }

    $handle = fopen("dados.csv", "w"); //abre para escrita e apaga o conteúdo
    fwrite($handle, $s);
?>
<h1>Removido</h1>
<a href="tabela.php">Voltar</a>