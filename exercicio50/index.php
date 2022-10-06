<?php

$pessoas = [
    'Roberto' => 42,
    'Camila' => 37,
    'Isabella' => 3,
    'Zélia' => 70
];

?>

<table>
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php foreach($pessoas as $nome => $idade); ?>
        <tr>
            <td><?= $nome; ?></td>
            <td><?= $idade; ?></td>
        </tr>
    <?php endforeach; ?>
</table>