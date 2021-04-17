<?php

namespace Modelo\Conta;

class Conta 
{
    private Titular $titular;
    private float $saldo = 0;
    private static int $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar(float $valor): void
    {
        if ($valor > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }
        $this->saldo -= $valor;
    }

    public function depositar(float $valor): void
    {
        if ($valor < 0)  {
            echo "Deposite um valor válido";
            return;
        }

        $this->saldo += $valor;
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

    // Métodos getters e setters

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public static function getNumeroDeContas(): int 
    {
        return Conta::$numeroDeContas;
    }
}