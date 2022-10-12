<?php

$alunos = [
    'Vinicius',
    'João',
    'Ana',
    'Roberto',
    'Maria',
];

$novosAlunos = [
    'Patricia',
    'Vitor',
    'Camila',
    'Daiana',
];

$alunos2022 = array_merge($alunos, $novosAlunos);
echo "Alunos 2022 <br>";
var_dump($alunos2022);

echo "Só o array <br>";
echo $alunos2022;

echo "var_dump de alunos <br>";
var_dump($alunos);

$alunos1 = [
    1 => 'Aluno 1',
    2 => 'Aluno 2',
    3 => 'Aluno 3',
];

$alunos2 = [
    4 => 'Aluno 4',
    5 => 'Aluno 5',
    6 => 'Aluno 6',
    7 => 'Aluno 7'
];

$novosAlunos = $alunos1 + $alunos2;
echo "Array com sinal de + <br>";
var_dump($novosAlunos);

$novosAlunos = array_merge($alunos1, $alunos2);
echo "Array utilizando array_merge <br>";
var_dump($novosAlunos);

$novosAlunos = [...$alunos1, 'Roberto', ...$alunos2];
echo "Array utilizando 3 dots ... <br>";
var_dump($novosAlunos);

echo "Array utilizando o array_push <br>";
array_push($alunos2022, 'Alice', 'Bob', 'Charlie');
var_dump($alunos2022);

echo "Acrescentando um item ao final do Array <br>";
$alunos2022[] = 'Luiz';
var_dump($alunos2022);

echo "Acrescentando um item no Inicio do Array <br>";
array_unshift($alunos2022, 'Stephanie');
var_dump($alunos2022);