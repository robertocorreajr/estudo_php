<?php

$velocidade = 100;
$marca = 'Ferrari';
$itens = ['Teto Solar', 'Auto Pilot', 'Aro 23'];

echo $velocidade;
echo '<br>';
echo $marca;
echo '<br>';
print_r($itens);
echo "<br>";

$x = 0;
echo "$x - 0<br>";

function var1() {
    $x = 1;
    echo "$x - 1<br>";
}

function var2(){
    $x = 2;
    echo "$x - 2<br>";
}

function var3(){
    global $x;
    echo "$x - 3<br>";
    $x = 4;
    echo "$x - 3<br>";

}

// echo $x;
var1();
var2();
echo "$x - ?<br>";
var3();
echo "$x - ?<br>";

// para acessar variáveis globais eu tenho que especificar utilizando a função global.
?>
