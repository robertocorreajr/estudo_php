<?php

$telefones = ['(21) 99999 - 9999', '(22) 99999 - 9999', '(23) 99999 - 9999'];

echo implode(PHP_EOL, $telefones) . PHP_EOL;
echo "\n";

// Podemos inverter a ordem das coisas, desde que nomeemos elas na hora de preencher.
echo implode(array: $telefones, separator: ', ') . PHP_EOL;
echo implode(array: $telefones, separator: PHP_EOL) . PHP_EOL;