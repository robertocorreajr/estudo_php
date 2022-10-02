<?php

// Substituições de valores na impressão.
$nome = "Roberto";

// Podemos utilizar %s para strings e %d para inteiros além do %f para float
printf("O nome é %s\n", $nome);

$n = 10;
printf("O número é %d e o outro é %d\n", $n, 150);

// %f -> float
printf("A temperatura atual é %.1f\n", 12.58);

?>