<?php

    function get($idx) {
        return $_GET[$idx];
    }

    function post($idx) {
        return $_POST[$idx];
    }

    function juntar($arr) {
        $s = '';
        foreach($arr as $i => $el) {
            if ($i == sizeof($arr) - 1) {
                $s = $s . $el;
            } else {
                $s = $s . $el . ',';
            }
        }
        return $s;
    }

    $nome = post('nome');
    $sobrenome = post('sobrenome');
    $email = post('email');
    $senha = post('senha');
    $senha2 = post('senha2');

?>

<?php if ($senha != $senha2): ?>
    <h1>Senhas não conferem; tente novamente</h1>
    <a href="index.php">Voltar</a>
    <?php exit(); ?>
<?php endif ?>

<?php
    $data = juntar([$nome, $sobrenome, $email, $senha]) . "\n";

    // salva o dado no arquivo csv
    $handle = fopen('users.csv', 'a');
    fwrite($handle, $data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="message">
        <h1>Usuário cadastrado</h1>
        <a href="index.php">Voltar</a>
    </div>
</body>
</html>
