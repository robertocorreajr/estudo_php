<?php

$carro = [
    'marca' => 'BMW',
    'motor' => '2.4',
    'teto_solar' => true,
    'cambio' => 'manual',
    'portas' => 4
];

$chaves = array_keys($carro);
$valor = array_values($carro);

print_r($chaves);
echo "\n";
print_r($valor);
echo "\n";

?>