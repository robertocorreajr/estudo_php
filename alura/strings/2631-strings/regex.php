<?php

$telefones = ['(24) 99999 - 9999', '(23) 99999-9999', '(22) 99999 - 9999', '(21) 99999 - 9999'];
$match = '/^\([0-9]{2}\)9?[0-9]{4}-[0-9]{4}$/';
$regex = '/^\(([0-9]{2})\)(9?[0-9]{4}-[0-9]{4})$/';

foreach ($telefones as $telefone) {
    
    // Aqui estou retirando os espaços da string para que fique formatada num melhor padrão.
    $telefone = str_replace(' ', '', $telefone);
    echo $telefone . PHP_EOL;

    $telefoneValido = preg_match(
        $match,
        $telefone,
        $verificacoes
    );

    var_dump($verificacoes);

    if ($telefoneValido) {
        echo 'Telefone válido'. PHP_EOL;
    } else {
        echo 'Telefone inválido'. PHP_EOL;
    }

    echo preg_replace(
        $regex,
        '(XX)\2',
        $telefone
    );
}