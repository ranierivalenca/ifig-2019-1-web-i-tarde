<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Str to Morgana - Pérola</title>
    <style type="text/css">
        *{
            text-align: center;
            font-size: 50px;
            color: #960496;
            margin: 0px auto;
        }
    </style>
</head>
<body>

<?php
//strtolower — Converte uma string para minúsculas

$str = "Essa STRING SeRa CONVERtida eM LeTrAs MINUSCULAS";
$str = strtolower($str);
print $str;

// $var = "STR";
// $var_min = strtolower($var);
// echo $$var_min;

 ?>
<hr/>


<?php
//strtoupper — Converte uma string para maiúsculas

$str = "essa string vai estar gritando com voce sem voce ter feito nada";
$str = strtoupper($str);
print $str;
 ?>

</body>
</html>