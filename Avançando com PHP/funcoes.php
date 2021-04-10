<?php

function exibeMensagem(string $mensagem)
{
    echo $mensagem . '<br>'; 
}

function sacar(array $conta, float $valor) : array 
{
    if ($valor > $conta['saldo']) {
        exibeMensagem("Você não pode sacar esse valor");
    } else {
        $conta['saldo'] -= $valor;
    }

    return $conta;
}

function depositar(array $conta, float $valor) : array
{
    if ($valor < 0) {
        exibeMensagem("Depósitos precisam ser positivos");
    } else {
        $conta['saldo'] += $valor;
    }
    return $conta;
}

function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
}

function exibeConta(array $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
}