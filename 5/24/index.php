<?php

echo 'Alô você! <br>';

if (!(50 > 20)) {
    echo 'eita porra <br>';
}

if (1){
    echo 'true <br>';
}

if (0) {
    echo 'zero é oque? <br>';
}

$a = (int) '12';
// $a = 12; 
echo $a . '<br>';

$b = (int) 'testando';
echo $b . '<br>';

$c = (int) 12.9;
echo $c . '<br>';

$d = (int) 5;
echo $d . '<br>';

$e = (int) true;
echo $e . '<br>';

$f = (int) [1,2,3,4,5];
echo $f . '<br>';

$g = 5;
$h = 5;
$i = 5;
$j = 5;

$g += 5;
echo $g . ' mais <br>';

$h -= 5;
echo $h . ' menos <br>';

$i /= 5;
echo $i . ' dividir <br>';

$j *= 5;
echo $j . ' multiplicar <br>';

$k %= 2;
echo $k . ' resto <br>';

echo 20 > 10 ? 'verdade <br>' : 'falso <br>';
echo 10 > 10 ? 'verdade <br>' : 'falso <br>';

?>