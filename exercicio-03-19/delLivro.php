<?php

function get($idx) { //cria função chamada get que será utilizada para pegar as informações de usuário e id, como visto nas linhas 7 e 8
    return $_GET[$idx]; //retorna um get com o valor de uma variável
}

$usuario = get('usuario'); //realiza o get para pegar o valor de usuario e colocar dentro da variavel
$id = get('id'); //realiza o get para pegar o valor de id e colocar dentro da variavel

$livros = file('livros.csv'); //"file" faz a leitura do arquivo 'livros.csv' para dentro do array $livros
unset($livros[$id]);//retira o livro de acordo com seu $id

$data = '';	//cria variável vazia para guardar a concatenação que irá ocorrer no foreach
foreach($livros as $livro) { //Laço para percorrer todos os elementos($livro) do array ($livros)
    $data = $data . $livro; //concatena(através do ".") o que tiver dentro da variável data (na primeira vez que executar não vai ter nada dentro) com o elemento do array.
}
$handle = fopen('livros.csv', 'w'); //abre o arquivo livros.csv no modo "w", ou seja, ele abre o arquivo, deleta tudo que tem dentro e escreve em seguida com o comando fwrite
fwrite($handle, $data); //Faz a escrita no arquivo livros.csv com as informações da variável $data

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="message">
        <h1>Livro removido</h1>
        <a href="livros.php?usuario=<?= $usuario ?>">Voltar</a> <!-- Cria um link(comando a)escrito "Voltar", que ao ser clicado redireciona para a página do usuário -->
    </div>
</body>
</html>