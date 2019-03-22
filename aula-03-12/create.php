<?php



    $dado = $_GET['nome'] . ';' . $_GET['funcao'] . ';' . $_GET['salario'] . "\n";

    $handle = fopen('dados.csv', 'a');
    fwrite($handle, $dado);

?>
<pre>
olá
    mundo
        cruel
</pre>
<h1>tá escrito</h1>
<a href="tabela.php">Voltar</a>