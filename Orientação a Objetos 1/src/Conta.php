<?php

class Conta 
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 0;

    public function sacar(float $valor) : void
    {
        if ($valor > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        $this->saldo -= $valor;
    }

    public function depositar(float $valor) : void
    {
        if ($valor < 0)  {
            echo "Deposite um valor válido";
            return;
        }

        $this->saldo += $valor;
    }

    public function transferir(float $valor, Conta $contaDestino) : void
    {
        if ($valor > $this->saldo) {
            echo "Saldo indisponível!";
            return;
        } 

        $this->sacar($valor);
        $contaDestino->depositar($valor);   
    }
}