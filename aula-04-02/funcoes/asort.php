<?php

$frutas = array("d" => "limao", "a" => "laranja", "b" => "banana", "c" => "melancia",);

asort($frutas);

foreach( $frutas as $chave => $valor ){
echo "[$chave] = $valor";
echo "\n";

}
?>