<?php

// O strpos retorna a posição da primeiras sequencias de strings que ele encontrar igual
$str = "Estamos testando o método strpos, com o strpos podemos encontrar strings";

$testeEncontrar = strpos($str, "strpos");
echo "$testeEncontrar\n";

$testeEncontrar2 = strpos($str, "Java");
echo "$testeEncontrar2\n";

if($testeEncontrar2 === false) {
    echo "Palavra não encontrada\n";
}

$palavra = "com";
$testeEncontrar3 = strpos($str, $palavra);
echo "$testeEncontrar3\n";

$palavra2 = "to";
$testeEncontrar3 = strpos($str, $palavra2);
echo "$testeEncontrar3\n";

// Já o strrpos retorna a ultima posição da sequencia de strings que ele encontrar igual.
$palavra3 = "a";
$testeEncontrar4 = strrpos($str, $palavra3);
echo "$testeEncontrar4\n";
echo strpos($str, $palavra3);
echo "\n";

// Podemos alterar com o substr ( substring ).
$p = substr($str, strpos($str, "podemos"), 7);
echo "$p\n"


?>