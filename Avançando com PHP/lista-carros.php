<?php

$carros = [
    'LMS-2312' => [
        'marca' => 'FIAT',
        'modelo' => 'Palio'
    ],
    'VMG-4787' => [
        'marca' => 'HYUNDAI',
        'modelo' => 'HB20'
    ],
    'BMG-1049' => [
        'marca' => 'VW',
        'modelo' => 'Golf'
    ]
];

foreach ($carros as $placa => $carro) {
    echo $placa . ' => ' . $carro['modelo'] . ' ' . $carro['marca'] . PHP_EOL;
}