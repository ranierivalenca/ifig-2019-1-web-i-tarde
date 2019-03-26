<?php

    $inputs = [ //Criação do array "inputs", que vai guardar o nome do input e o tipo no seu índice
        'nome' => 'text', //Ex: o primeiro input a ser criado terá o nome "nome" e seu tipo será "text"
        'sobrenome' => 'text',
        'email' => 'text',
        'senha' => 'password',
        'senha2' => 'password'
    ];

    $usuariosFile = file('users.csv'); //"file" faz a leitura do arquivo 'users.csv' para dentro do array $usuariosFile
    $usuarios = []; //Cria um array vazio que irá guardar apenas o nome dos usuários
    foreach ($usuariosFile as $usuario) { //Laço criado para percorrer todos os elementos($usuario) do array($usuariosFile)
        $usuarioData = explode(',', $usuario); // Realiza a separação da string com o explode, onde a separação é feita através de ','
        $nome = $usuarioData[0]; //Define a var $nome como sendo o elemento do índice 0 no array $usuariosData
        $usuarios[] = $nome; // adiciona o elemento $nome ao final do array $usuarios
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuário</title><!-- Título da página -->
    <link rel="stylesheet" href="style.css"><!-- Mostra onde está o arquivo com o css dessa página -->
</head>
<body>
    <form action="register.php" method="POST"> <!-- Define que as informações deste formulário serão enviadas para register.php através do método post -->
        <?php foreach ($inputs as $name => $type): ?> <!-- Percorre o array $inputs passando pelo elemento $name e tipo $type -->
            <input type="<?= $type ?>" name="<?= $name ?>" placeholder="<?= $name ?>"><!-- Define que o valor de $type depende do índice do array inputs, name e placeholder dependem do nome do mesmo array -->
        <?php endforeach ?>
        <input type="submit" value="Enviar"><!-- Cria botão de submit para enviar o formulário -->
    </form>
    <div class="users">
        <h1>Livros dos usuários</h1>
        <ul><!-- Cria uma lista desordenada -->
            <?php foreach ($usuarios as $nome): ?><!-- Laço que percorre os elementos($nome) do array($usuarios) -->
                <li><a href="livros.php?usuario=<?= $nome ?>"><?= $nome ?></a></li><!-- Cria um item da lista(comando li) com o valor que está na variável $nome e cria um link(comando a) que redireciona para página daquele usuário -->
            <?php endforeach ?>
        </ul>
    </div>
</body>
</html>