<?php

$str = "Testando o resto da string, para ver se dá certo";

$resto = strstr($str, "resto");
echo "$resto\n";

$s = "string";

$resto2 = strstr($str, $s);
echo "$resto2\n";

if(strstr($str,".NET") === false) {
    echo "Não encontramos a string!\n";
}

?>