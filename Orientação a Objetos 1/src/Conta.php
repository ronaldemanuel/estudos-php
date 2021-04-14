<?php

class Conta 
{
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 0;
    private static int $numeroDeContas = 0;

    public function __construct(string $cpfTitular, string $nomeTitular)
    {
        $this->cpfTitular = $cpfTitular;
        $this->validarNomeTitular($nomeTitular);
        $this->nomeTitular = $nomeTitular;
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
    public function getCpfTitular(): string 
    {
        return $this->cpfTitular;
    }

    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    private function validarNomeTitular($nomeTitular): void
    {
        if (strlen($nomeTitular) < 5) {
            echo "O nome de titular precisa de pelo menos 5 caracteres";
            exit();
        }
    }

    public static function getNumeroDeContas(): int 
    {
        return Conta::$numeroDeContas;
    }
}