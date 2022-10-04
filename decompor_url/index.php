<?php

$url = "https://www.google.com";

$arrayUrl = parse_url($url);
print_r($arrayUrl);
echo "\n";

echo $arrayUrl["host"];
echo "\n";

$url2 = "http://www.horadecodar.com.br/artigos/?busca=php";
$arrayUrl2 = parse_url($url2);
print_r($arrayUrl2);
echo "\n";

$url3 = "http://www.horadecodar.com.br/usuarios/roberto?id=12&nome=Roberto";
$arrayUrl3 = parse_url($url3);
print_r($arrayUrl3);
echo "\n"

?>