<?php

require_once 'src/Carro.php';

$carro1 = new Carro('AHD-9730', 'Gol', 'VW', 1400);
$carro1->exibir();

echo PHP_EOL;

$carro2 = new Carro('BMR-9022', 'Palio', 'FIAT', 900);
$carro2->exibir();

echo PHP_EOL;

$carro3 = new Carro('HGJ-1517', 'HB20', 'HYUNDAI', 2000);
$carro3->exibir();

echo PHP_EOL . "Quantidade total de carros: " . Carro::getQuantidade() . PHP_EOL;