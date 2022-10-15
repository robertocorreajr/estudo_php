<?php

$texto = 'Texto com qualquer coisa poxa e caramba';
$palavroes =[
    'poxa',
    'caramba'
];

// resolvi de duas formas, uma criando um array e outra substituindo diretamente na expressão.
echo str_replace($palavroes, '***', $texto) . PHP_EOL;
echo str_replace(['poxa','caramba'], '***', $texto) . PHP_EOL;

// podemos fazer também uma forma que substitua uma coisa por outras especificas.
echo str_replace(['poxa','caramba'],['***', 'xiii'],$texto) . PHP_EOL;