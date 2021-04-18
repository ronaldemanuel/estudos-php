<?php

namespace Alura\Banco\Model\Conta;

use Alura\Banco\Model\{Autenticavel, Pessoa, Cpf};
use Alura\Banco\Model\Endereco;

class Titular extends Pessoa implements Autenticavel
{
    private Endereco $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function getEndereco(): Endereco 
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'abcd';
    }
}