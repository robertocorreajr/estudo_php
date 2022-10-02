<?php

$nome = "Roberto";
$idade = 42;
$profissao = "Programador";

// Na interpolação, as duas formas abaixo vão funcionar. Mas o ideal é que se siga apenas uma delas para se manter um padrão.
echo "Eu sou o $nome e tenho $idade anos, e atuo como $profissao <br>" . PHP_EOL;
// ou
echo "Eu sou o {$nome} e tenho {$idade} anos, e atuo como {$profissao} <br>";