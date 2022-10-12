<?php

$url = 'http://alura.com.br';

if (str_starts_with($url, 'https')) {
    echo 'É uma URL segura <br>\n';
} else {
    echo 'Não é uma URL segura <br>\n';
}

echo PHP_EOL;

if (str_ends_with($url, '.br')) {
    echo 'É uma domínio do Brasil <br>\n';
} else {
    echo 'Não é uma domínio do Brasil <br>\n';
}

echo PHP_EOL;