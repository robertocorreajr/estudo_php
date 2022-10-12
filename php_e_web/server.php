<?php

print_r($_SERVER);
echo "<br>\n";
echo $_SERVER['SCRIPT_NAME'];

// Por estar utilizando uma estrutura dockerizada essa informação não vai constar no servidor.
// if($_SERVER['SERVER_NAME'] == 'localhost') {
//     echo "Está acessando o localhost <br>\n";
// }