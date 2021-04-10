<?php

function aumentarPreco(array $carro, float $incremento) : array 
{
    if ($incremento < 0) {
        echo "Valor inválido";
    } else {
        $carro['preco'] += $incremento;
    }

    return $carro;
}

function diminuirPreco(array $carro, float $decremento) : array
{
    if ($decremento < 0) {
        echo "Valor inválido";
    } else {
        $carro['preco'] -= $decremento;
    }

    return $carro;
}

function marcaComLetrasMaiusculas(array &$conta) 
{
    $conta['marca'] = strtoupper($conta['marca']);
}
