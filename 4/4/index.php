<?php

if(is_int(5)) {
    echo "é um inteiro <br>";
}

if(is_int("5")) {
    echo "não é um inteiro <br>";
} 

$a = 10;
if (is_int($a)) {
    echo "$a é um inteiro! <br>";
}

$b = [1,2,3,4,5];
print_r($b);

$c = ['nome' => 'Roberto', 'idade' => 42];
echo "<br>";
echo $c['nome'];
echo "<br>";
echo $c['idade'];
echo "<br>";
print_r($c);

?>