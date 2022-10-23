<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\{CPF, Funcionario};
use Alura\Banco\Modelo\Service\ControladorDeBonificacoes;

$umFuncionario = new Funcionario(
    'Jhon Doe',
    new CPF('123.456.789-10'),
    'Desenvolvedor',
    1000
);

$umaFuncionaria = new Funcionario(
    'Bat Girl',
    new CPF('987.654.321-10'),
    'Customer Experiam',
    3000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);

echo $controlador->recuperaTotal();

?>