<?php

namespace Alura\Banco\Model\Account;

class ContaCorrente extends Conta
{
    protected function percentualTarifa(): float
    {
        return 0.05;
    }

    public function transferir(float $valor, Conta $contaDestino): void
    {
        if ($valor > $this->saldo) {
            echo "Saldo indisponível!";
            return;
        } 

        $this->sacar($valor);
        $contaDestino->depositar($valor);   
    }

}