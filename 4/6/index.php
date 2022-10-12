<?php

class Carro {

     function buzinar() {
        echo "Bi Bi";
     }
}

$carro = new Carro();

$carro->nome = "Civic";

echo $carro->nome;
echo "<br>";
echo $carro->buzinar();

?>