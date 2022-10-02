<?php

$arr = ["Maçã", "Pera", "Mamão", "Batata"];
$str = implode(", ", $arr);

echo "$str\n";

$arr2 = ["Avião", "Tanque", "Jipe", "Metralhadora"];

$str2 = implode(" <-> ", $arr2);

echo "$str2\n";

?>