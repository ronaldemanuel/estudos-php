<?php

namespace Alura\Banco\Model;

abstract class Pessoa 
{
    use AcessoPropriedades;

    protected string $nome;
    private Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->validarNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCpf(): Cpf
    {
        return $this->cpf;
    }

    final protected function validarNome($nome): void
    {
        if (strlen($nome) < 5) {
            echo "O nome de titular precisa de pelo menos 5 caracteres";
            exit();
        }
    }
}