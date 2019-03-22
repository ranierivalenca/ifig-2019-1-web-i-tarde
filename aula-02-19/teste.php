<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Meu primeiro PHP</title>
</head>
<body>
    <table>
        <?php
            for ($i = 0; $i < 5; $i++) { // linhas
                echo "<tr>";
                for ($j = 0; $j < 10; $j++) { // colunas
                    echo "<td>$i-$j</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>

    <ul>
        <?php for($i = 0; $i < 10; $i++): ?>
            <li><?php echo $i; ?></li>
        <?php endfor; ?>
    </ul>

    <table>
        <?php for ($i = 0; $i < 10; $i++): ?>
            <tr>
                <?php for ($j = 0; $j < 4; $j++): ?>
                    <td><?= "$i-$j"; ?></td>
                    <!-- <?php echo "$i-$j"; ?> -->
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>