<?php

namespace Alura\Banco\Model;

trait AcessoPropriedades
{
    public function __get(string $nomeAtributo) // Usado sempre que um atributo é acessado sem permissão
    {
        $metodo = 'get' . ucfirst($nomeAtributo);
        return $this->$metodo() . PHP_EOL;
    }
}