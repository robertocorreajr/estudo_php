<?php

for ($i = 0; $i < 10; $i++){
    echo "Infinit loop! <br>";
}

$arr = [];
for ($i = 10; $i <= 20; $i++) {

    array_push($arr, $i);

}

foreach ($arr as $arri) {
    echo "Estou no array número: $arri <br>";
    $arri++;
    echo "alterei o número do cara e vou gravar no mesmo. <br>";
    $arr[$arri] = $arri;
    echo "Número novo $arri <br>"; 
}

$nomes = ["Roberto", "Camila", "Isabella", "Zelia", "Gabriela"];

foreach ($nomes as $nome) {
    echo "O nome do indice atual é $nome <br>";
    if ($nome == "Isabella") {
        echo "Olá $nome, você é muito linda! =) <br>";
    }
}