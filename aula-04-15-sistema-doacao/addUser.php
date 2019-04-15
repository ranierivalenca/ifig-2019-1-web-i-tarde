<?php

include 'init.php';

// foreach($_POST as $idx => $val) {
//     $$idx = $val;
// }
$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';
$senha2 = $_POST['senha2'] ?? '';
$nome = $_POST['nome'] ?? '';
$telefone = $_POST['telefone'] ?? '';
$cidade = $_POST['cidade'] ?? '';
$bairro = $_POST['bairro'] ?? '';
?>

<?php if ($senha != $senha2): ?>
    <h1>Senhas não podem ser diferentes</h1>
    <a href="#" onclick="history.go(-1)">Voltar</a>
    <?php exit() ?>
<?php endif ?>
<?php if ($senha == ''): ?>
    <h1>Senha não pode ser vazia</h1>
    <a href="#" onclick="history.go(-1)">Voltar</a>
    <?php exit() ?>
<?php endif ?>

<?php
$data = join(SEPARATOR, [$email, $senha, $nome, $telefone, $cidade, $bairro]) . "\n";
$handle = fopen(USERS_FILE, 'a');
fwrite($handle, $data);
redirect('reg_login.php?mes_reg=Usuário registrado');

?>