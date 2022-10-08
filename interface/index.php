<?php

/*
Basicamente é um modelo de implementação de uma classe.
Observe que a herança extende e a interface implementa.
A implementação faz com que seja seguido o padrão da interface.
Tudo que estiver na interface tem que constar na classe que estiver implementando.
*/

interface Caracteristicas {

    const nome = "Roberto";
    public function falar();

}

class Humano implements Caracteristicas {

    public $idade = 42;

    public function falar() {
        echo "Olá mundo! <br>";
    }

    public function dizerNome()
    {
        echo "Meu nome é " . self::nome . "<br>";
    }
}

$roberto = new Humano;
$roberto->falar();
$roberto->dizerNome();

?>