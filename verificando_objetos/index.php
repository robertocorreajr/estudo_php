<?php

class Humano {

    public function falar()
    {
        echo "Olá";
    }
}

$isabella = new Humano;

$teste = 10;

if(is_object($isabella)) {
    echo "É um objeto <br>";
} else {
    echo "Não é um objeto <br>";
}

if(is_object($teste)) {
    echo "É um objeto <br>";
} else {
    echo "Não é um objeto <br>";
}

echo get_class($isabella) . "<br>";

if(method_exists($isabella, "falar")) {
    echo "Método existe <br>";
} else {
    echo "Método não existe <br>";
}

if(method_exists($isabella, "asd")) {
    echo "Método existe <br>";
} else {
    echo "Método não existe <br>";
}

?>