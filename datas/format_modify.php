<?php

$data = new DateTime();
echo $data->format('d/m/y') . "<br>\n";
echo $data->format('D - M - Y') . "<br>\n";

echo $data->format('l . F . Y') . "<br>\n";


$data->modify('+5 days');
echo $data->format('d/m/y') . "<br>\n";

$data->modify('+2 months');

print_r($data);

?>