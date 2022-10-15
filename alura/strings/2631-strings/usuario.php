<?php

$email = 'joaozinho@teste.com.br';
$arroba = strpos($email, '@') + 1;
$senha = 'ã';

$nome = substr($email, 0, $arroba -1);
$dominio = substr($email, $arroba);

echo strlen($email) . PHP_EOL;
echo strlen($senha) . PHP_EOL;
/*
A função strlen armazena o tamanho em bites então se for utilizar e tiver letras que ocupam mais de um bite a função vai retornar
a posição errada.
*/

echo substr($email, 0, 7) . PHP_EOL;
echo substr($email, 8) . PHP_EOL;
echo strtoupper($nome) . PHP_EOL;

$novoNome = 'João';

echo strtoupper($novoNome) . PHP_EOL;

echo "\n";
echo "Abaixo a melhor forma de se fazer esse exercício: " . PHP_EOL;

echo substr($email, 0, $arroba -1) . PHP_EOL;
echo substr($email, $arroba) . PHP_EOL;

echo "Nome: $nome" . PHP_EOL;
echo "Dominio: $dominio" . PHP_EOL;

$nomeCompleto = 'Jhon Doe';

echo "\n";
list($nome, $sobrenome) = explode(' ', $nomeCompleto);
echo "Nome: $nome \nSobrenome: $sobrenome";

echo "\n";
$csv = 'Jhon,Doe,42,jhondoe@teste.com.br';
var_dump(explode(',', $csv));