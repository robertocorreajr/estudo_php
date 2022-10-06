<?php

// Resgatar elementos de um array
// Remover elementos

$arr = [1, 2, 3, 4, 5, 6];

$removidos = array_splice($arr, 1, 2);

echo "arr ";
print_r($arr);
echo "\n";

echo "removidos ";
print_r($removidos);
echo "\n";

$arr2 = [1, 2, 3, 4, 5, 6];

$removidos2 = array_splice($arr2, 3);

echo "arr2 ";
print_r($arr2);
echo "\n";

echo "removidos2 ";
print_r($removidos2);
echo "\n";

?>