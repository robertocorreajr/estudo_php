<?php

$vel = 63;
$velMax = 100;

if ($vel > $velMax) {
    echo 'Você foi multado por ultrapassar o limite de velocidade de ' . $velMax . 'km/h' . '  <br>';
} else {
    echo 'Parabéns, você é um eximio condutor! <br>';
}

$x = 4;

switch ($x) {

    case 0:
        echo 'X é igual à 0 <br>';
        break;
    case 1:
        echo 'X é igual à 1 <br>';
        break;
    case 2:
        echo 'X é igual à 2 <br>';
        break;
    default:
        echo 'X não é igual a nenhum <br>';
}

?>