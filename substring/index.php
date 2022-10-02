<?php

$str = "Esta é a minha string";
$minha = substr($str, 10,6);

echo $str;
echo "\n";
echo $minha;
echo "\n";
$str2 = "Testando esta string abc";

$novaString = substr($str2, 9, -3);
echo $novaString;

?>