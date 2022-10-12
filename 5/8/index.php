<?php

$a = 14;
$b = 2;
$c = 3;

echo $a % $b  . '<br>';
echo $a % $c . '<br>';

// $a = 5;
// $b = 2; 
echo $a ** $b . '<br>';

$t = 'testando';
$cc = 'concatenação';
echo $t . ' ' . $cc . '<br>';

if ($a == $b) {
    echo 'A é Igual á B <br>';
} else {
    $a = $b;
}

if ($a === $b) {
    echo 'A é igual a B na segunda vez. <br>';
}

if ($a != $c) {
    echo 'A é diferente de C <br>';
} else {
    echo 'entrei no else <br>';
}

echo $a . ' e ' . $c . '<br>';

// console.log('teste');

if (( 21 > 50 && 'Roberto' === 'Roberto') || (5 < 10)) {
    echo 'Verdade! <br>';
    if (21 > 50) {
        echo 'Não vai executar <br>';
    } else {
        echo 'Executando 21 > 50 <br>';
    }
}

echo 'olá <br>';