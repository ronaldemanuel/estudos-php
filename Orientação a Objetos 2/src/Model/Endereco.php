<?php

namespace Alura\Banco\Model;

/**
 * Class Endereco
 * @package Alura\Banco\Model
 * @property-read string $rua
 * @property-read string $bairro
 * @property-read string $cidade
 * @property-read string $numero
 */

class Endereco
{
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function getCidade(): string
    {
        return $this->cidade;
    }

    public function getBairro(): string
    {
        return $this->bairro;
    }

    public function getRua(): string
    {
        return $this->rua;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }

    public function __toString(): string // usado quando chamamos a referência do objeto diretamente $referencia;
    {
        return "{$this->rua} - {$this->numero}, {$this->bairro}, {$this->cidade}" . PHP_EOL;
    }

    public function __get(string $nomeAtributo) // Usado sempre que um atributo é acessado sem permissão
    {
        $metodo = 'get' . ucfirst($nomeAtributo);
        return $this->$metodo() . PHP_EOL;
    }

    public function __set(string $nomeAtributo, $valor)
    {
        $this->$nomeAtributo = $valor;
    }
}