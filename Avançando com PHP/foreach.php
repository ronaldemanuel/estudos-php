<?php

$contasCorrentes = [
    123 => [
        'titular' => 'Ronald',
        'saldo' => 1000
    ], 
    321 => [
        'titular' => 'Maria',
        'saldo' => 10200 
    ], 
    456 => [
        'titular' => 'José',
        'saldo' => 1350
    ]
];

$contasCorrentes[] = [
    'titular' => 'Cláudia',
    'saldo' => 400
];

foreach ($contasCorrentes as $id => $conta) {
    echo $id . ' => ' . $conta['titular'] . PHP_EOL;
}