<?php

function soma($n1, $n2) {
return $n1 + $n2;
}

echo soma(5,4) . "<br>";

function defineCorCarro($cor = "Vermelho"){
    return "A Cor do carro é: $cor";
}

$carroVermelho = defineCorCarro();
echo $carroVermelho . "<br>";

$carroAzul = defineCorCarro("Azul");
echo $carroAzul . "<br>";

?>