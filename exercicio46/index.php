<?php

$arr = [
    [1,2,3,4],
    [2,3,4,5],
    [6,7,8,9]
];

// Loop no arry externo.
for ($i = 0; $i < count($arr); $i++) {

    // Imprimindo array
    echo "Imprimindo array externo: " . ($i + 1) . "\n";

    // Imprimindo array interno
    for ($j = 0; $j < count($arr[$i]); $j++) {
        echo $arr[$i][$j] . "\n";
    }
}

?>