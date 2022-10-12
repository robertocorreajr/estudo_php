<?php

$notas = [10, 8, 9, 7];

$notasOrdenadas = $notas;
sort($notasOrdenadas);

echo "Desordenadas:";
var_dump($notas);

echo "Ordenadas:";
var_dump($notasOrdenadas);

$classe = [
    [
        'Aluno' => 'Roberto',
        'nota' => 10,
    ],
    [
        'Aluno' => 'Mauricio',
        'nota' => 4,
    ],
    [
        'Aluno' => 'Camila',
        'nota' => 6,
    ],
    [
        'Aluno' => 'Isabella',
        'nota' => 3,
    ],
];

sort ($classe);
echo "Classe Ordenada";
var_dump($classe);

function ordenaClasse(array $classe1, array $classe2): int
{
    if ($classe1['nota'] > $classe2['nota']) {
        return -1;
    }

    if ($classe2['nota'] > $classe1['nota']) {
        return 1;
    }
        return 0;
}

echo "Classe Ordenada com Função.";
usort($classe, 'ordenaClasse');
var_dump($classe);

// Nova função de ordenação utilizando menas linhas e com o operador <=>
function ordenaClasse2(array $classe1, array $classe2): int
{

}

echo "Verificando com GetType! <br>";

if (gettype($notas) === 'array') {
    echo "\$notas é um  array <br>";
}

if (is_array($notas)) {
    echo "Essa porra é uma array, já falei! <br>";
}

$p = 0;
if (is_array($p)) {
    echo "Essa porra é uma array, já falei! <br>";
} else {
    echo "Essa porra de \$p não é um array!"  . "<br>" . PHP_EOL;
}

echo var_dump(isset($classe['Roberto']));
echo isset($p) . "<br>";

if (isset($p)) {
    echo "deu ok o if <br>";
}

echo "Testando o var_dump <br>";
var_dump(in_array(10,$classe));

echo "acho que é o fim" . PHP_EOL;