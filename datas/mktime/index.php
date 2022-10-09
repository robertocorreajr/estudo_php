<?php

$dataNascimento = mktime(02, 12, 33, 02, 05, 1991);
echo $dataNascimento . "<br>\n";

$dataNascimentoFormatada = date('d/m/y', $dataNascimento);
echo $dataNascimentoFormatada . "<br>\n";

$dataEspecifica = mktime(10, 20, 11, 04, 28, 2041);
$dataFuturaFormatada = date('D, d \d\e M. Y', $dataEspecifica);
echo $dataFuturaFormatada . "<br>\n";

?>