<?php

class Titular
{
    private string $cpf;
    private string $nome;

    public function __construct(string $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validarNomeTitular($nome);
        $this->nome = $nome;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    private function validarNomeTitular($nomeTitular): void
    {
        if (strlen($nomeTitular) < 5) {
            echo "O nome de titular precisa de pelo menos 5 caracteres";
            exit();
        }
    }

    public function exibir(): void
    {
        echo $this->cpf . PHP_EOL;
        echo "Titular: " . $this->nome . PHP_EOL;
    }
}