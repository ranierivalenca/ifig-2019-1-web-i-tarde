<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CR*D</title>
</head>
<body>
    <?php
        $dados = file('dados.csv');
        for ($i = 0; $i < sizeof($dados); $i++) {
            $dados[$i] = explode(';', $dados[$i]);
        }
    ?>
    <table>
        <tr>
            <th>Nome</th>
            <th>Função</th>
            <th>Salário</th>
            <th>Remover</th>
        </tr>
        <?php foreach ($dados as $i => $dados_estudante): ?>
            <tr>
                <?php foreach ($dados_estudante as $dado): ?>
                    <td><?= $dado ?></td>
                <?php endforeach ?>
                <td>
                    <a href="delete.php?id=<?= $i ?>">deletar linha <?= $i ?></a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>

    <form action="create.php">
        Nome: <input type="text" name="nome">
        <br>
        Função: <input type="text" name="funcao">
        <br>
        Salário: <input type="text" name="salario">
        <br>
        <input type="submit">
    </form>
</body>
</html>