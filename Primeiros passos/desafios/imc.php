<?php

$peso = 60;
$altura = 1.74;

$imc = $peso / $altura ** 2;

echo "Seu IMC é de $imc.\nVocê está ";

if ($imc < 18.5) {
    echo "abaixo do peso!";
} else if ($imc < 25) {
    echo "com peso normal.";
} else {
    echo "acima do peso!";
}

echo PHP_EOL;