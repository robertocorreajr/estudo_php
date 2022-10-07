<?php

class Pessoa {

    function falar() {
        echo "Olá, eu sou um objeto!<br>";
    }

    function somar($x, $y) {
        echo $x + $y . "<br>";
    }
}

$isabella = new Pessoa;

$isabella->falar();
$isabella->falar();

$joao = new Pessoa;

$joao->falar();

$isabella->somar(2, 2);

$joao->somar(10, 12);

?>