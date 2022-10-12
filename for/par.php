<?php

$b = 0;
$arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

echo "Iniciando o primeiro loop! <br>";
for ($i = 1 ; $i <= 20; $i++){

    // $b = $i % 2;
    if ($i % 2 == 0) {
    // if ($b == 0) {
        echo "O número $i é par! <br>";
    }
}

echo "<br>";

echo "Iniciando o segundo loop! <br>";
for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] % 2 == 0) {
        echo "Numero $arr[$i] é par. <br>";
    }
}