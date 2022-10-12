<?php

$carro = [
    'marca' => 'honda',
    'modelo' => 'civic', 
    'portas' => 4
];

print_r($carro);
echo "<br>";

$marca = $carro['marca'];
$modelo = $carro['modelo'];
$portas = $carro['portas'];

echo "O $modelo é um carro da fabricante $marca e tem $portas portas!<br>";
echo $carro['modelo'];
echo "<br>";

if ($portas > 2) {
    echo "O carro $modelo é um carro Sedan.";
}

?>