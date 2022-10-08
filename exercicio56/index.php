<?php

class Humano {

    public $maos = 2;
    public $pernas = 2;

    public function falar()
    {
        echo "Olá, eu consigo falar! <br>";
    }

}

class Professor extends Humano {

    public $disciplina = "Matemática";

    public function estaLecionando()
    {
        echo "O professor está dando aula de $this->disciplina <br>";
    }
}

$isabella = new Humano;

echo "$isabella->maos <br>";
$isabella->falar();

$joao = new Professor;
echo "$joao->pernas <br>";
echo "$joao->disciplina <br>";

$joao->falar();
$joao->estaLecionando();

?>