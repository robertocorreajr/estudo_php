<?php

class Pessoa {

    public $nome;
    public $idade;

    function andar($m) {

        echo "A pessoa andou $m metros <br>";

    }
}

$isabella = new Pessoa;

$isabella->nome = "Isabella";
$isabella->idade = 3;

echo "O nome dela é $isabella->nome e tem $isabella->idade anos <br>";

$isabella->andar(29);

$camila = new Pessoa;

$camila->nome = "Camila";
$camila->idade = 32;

echo "O nome dela é $camila->nome e tem $camila->idade anos <br>";
$camila->andar(59);

?>