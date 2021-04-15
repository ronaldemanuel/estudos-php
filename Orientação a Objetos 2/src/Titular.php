<?php

class Titular
{
    private Cpf $cpf;
    private string $nome;
    private Endereco $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        $this->cpf = $cpf;
        $this->validarNomeTitular($nome);
        $this->nome = $nome;
        $this->endereco = $endereco;
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
        echo $this->cpf->getCpf() . PHP_EOL;
        echo "Titular: " . $this->nome . PHP_EOL;
        $this->endereco->exibir();
    }

    public function getCpf(): Cpf
    {
        return $this->cpf;
    }

    public function getEndereco(): Endereco 
    {
        return $this->endereco;
    }
}