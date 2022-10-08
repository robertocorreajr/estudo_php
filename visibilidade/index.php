<?php

class Car {

    public $rodas = 4;
    private $vidro = "sem pelicula";
    protected $portas = 4;

    public function getVidro()
    {
        return $this->vidro;
    }

}

class Mecanico {

    public function alterarRodas($obj)
    {
        $obj->rodas = 10;
    }

    public function colocarPelicula($carro, $pelicula) {
        $carro->vidro = $pelicula;
    }
}

$carro = new Car;

echo $carro->rodas . "<br>";

$roberto = new Mecanico;
$roberto->alterarRodas($carro);
echo $carro->rodas . "<br>";

// Não pode alterar pq é privado
// $roberto->colocarPelicula($carro, "G20");

// $carro->peliculaDeFabrica("G10");

echo $carro->getVidro() . "<br>";

$carro->vidro = "teste"

echo $carro->vidro . "<br>";
echo $carro->getPortas()

?>
