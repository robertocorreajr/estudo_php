<?php

$x = 1;

while ($x <= 10) {

    echo "Externo $x <br>";

    $y = 1;

    while ($y <= 5) {

        echo "Interno $y <br>";
        $y++;

    }

    $x++;

}