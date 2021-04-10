<?php

$conta1 = [
    'titular' => 'Ronald',
    'saldo' => 1000
];

$conta2 = [
    'titular' => 'Maria',
    'saldo' => 10200
];

$conta3 = [
    'titular' => 'José',
    'saldo' => 1350
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}