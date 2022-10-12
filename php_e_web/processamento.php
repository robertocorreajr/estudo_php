<?php

if($_GET['nome']) {
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];
} else {
    $nome = "Padrão";
    $idade = 0;
}


?>

<h3>O seu nome é: <?= $nome ?></h3>
<h3>Você tem: <?= $idade ?> anos de idade.</h3>