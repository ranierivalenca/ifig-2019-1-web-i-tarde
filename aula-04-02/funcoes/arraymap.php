<?php

 function nice($b){

    return( $b * $b * $b);
 }

 $array  = array(1,2,3,4,5);


 $a = array_map("nice", $array);

//print_r($a);


 ?>




 <?php


function junta($r, $t){
    if( $r == "renisson"){
        return "Gilberto " . $t;
    }
    return ($r . $t);
}


$nome = array("matheus", "renisson", "guilherme","johnatan");
$sobrenome = array(" gonçalves" , " matador de tartaruga", " suiça", " carneiro");

$a = array(1, 2, 3, 4, 5);
$b = array("uno", "dos", "tres", "cuatro", "cinco");

var_dump(array_map(null, $a, $b));
//print_r($c);

echo "<br>";

$d = array_map("junta", $nome , $sobrenome);
print_r($d);
?>