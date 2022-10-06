<?php

$arr = [
    'cor' => 'vermelho',
    'forma' => 'retangular',
    'material' => 'aço'
];

extract($arr);

echo "$cor \n";
echo "$forma \n";
echo "$material \n";

?>