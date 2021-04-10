<?php

require_once 'ex-funcoes.php';

$carros = [
    'MVG-4787' => [
        'modelo' => 'Gol',
        'marca' => 'vw',
        'preco' => 40000
    ],

    'AWV-2394' => [
        'modelo' => 'Palio',
        'marca' => 'FIAT',
        'preco' => 60000
    ],

    'BHD-6092' => [
        'modelo' => 'HB20',
        'marca' => 'HYUNDAI',
        'preco' => 85000
    ]
];

// Incremento no Gol
$carros['MVG-4787'] = aumentarPreco($carros['MVG-4787'], 1500);

// Decremento no HB20
$carros['BHD-6092'] = diminuirPreco($carros['BHD-6092'], 3400);

// Marca do Gol com letras maiúsculas
marcaComLetrasMaiusculas($carros['MVG-4787']);

// Removendo o Palio
unset($carros['AWV-2394']);

//exibir todos os carros
echo "CARROS DISPONÍVEIS" . PHP_EOL . PHP_EOL;

foreach($carros as $carro) {
    ['modelo' => $modelo, 'marca' => $marca, 'preco' => $preco] = $carro;
    echo "R\$ $preco : $modelo $marca" . PHP_EOL;
}


