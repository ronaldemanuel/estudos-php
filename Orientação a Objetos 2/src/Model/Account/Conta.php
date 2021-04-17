<?php

namespace Alura\Banco\Model\Account;

abstract class Conta 
{
    private Titular $titular;
    protected float $saldo = 0;
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
        $tarifaSaque = $valor * $this->percentualTarifa();
        $valorSaque = $valor + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
    }

    public function depositar(float $valor): void
    {
        if ($valor < 0)  {
            echo "Deposite um valor válido";
            return;
        }

        $this->saldo += $valor;
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

    // Métodos abstratos
    abstract protected function percentualTarifa(): float;
}