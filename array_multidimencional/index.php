<?php

$arr = [
    [1,2,3],
    [4,5,6],
    [7,8,9],
    [10,11,12],
    [1,2,3,4,5,6,7,8,9,10]
];

print_r($arr);
echo "\n";

echo "Acessando o primeiro array e o segundo elemento. " . $arr[0][1] . "\n"; // Acessando o primeiro array e o segundo elemento.
echo "Acessando o segundo array e o último elemento.   " . $arr[1][2] . "\n"; // Acessando o primeiro array e o segundo elemento.

echo "Contando o primeiro array. " . count($arr) . "\n";
echo "Contando os elementos do primeiro array. " . count($arr[0]) . "\n";
echo "Contando os elementos do último array. " . count($arr[count($arr) -1]) . "\n";

?>