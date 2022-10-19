<?php

require_once 'Conta.php';

$primeiraConta = new Conta('123.456.789-10', 'Jhon Doe');
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);
// $primeiraConta->defineCpfTitular('123.456.789-10');
// $primeiraConta->defineNomeTitular('Jhon Doe');

echo $primeiraConta->recuperarNome() . PHP_EOL;
echo $primeiraConta->recuperarCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;

echo "\n";
$segundaConta = new Conta('987.654.321-10', 'Spider Man');
echo $segundaConta->recuperarNome() . PHP_EOL;
echo $segundaConta->recuperarCpfTitular() . PHP_EOL;
echo $segundaConta->recuperarSaldo() . PHP_EOL;

$outra = new Conta('123', 'AbcDefrg');
echo "\n";
echo Conta::recuperaNumeroDeContas();
