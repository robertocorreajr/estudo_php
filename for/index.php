<?php

// Contador; Condição; Incremento/Decremento;

// $i = 0;
$nome = "Roberto";
for ($i = 0; $i < 10; $i++) {

    echo "Testando o for n. $i <br>";

    if ($i == 4) {
        echo "Estou no IF executando na condição $i == 4 e meu nome é $nome <br>";
    }

    if ($i == 8){
        break;
    }

    echo "Testando $i no final do arquivo <br>";
}
