<?php

use Alura\Banco\Model\Conta\Titular;
use Alura\Banco\Model\{Cpf, Endereco};
use Alura\Banco\Model\Funcionario\{Diretor, Gerente};
use Alura\Banco\Service\Autenticador;

require_once 'autoloader.php';

$autenticador = new Autenticador();

$diretor = new Diretor(
    'João da Silva',
    new Cpf('123.456.789-10'),
    10000
);

$gerente = new Gerente(
    'José Roberto',
    new Cpf('258.654.739-98'),
    2500
);

$titular = new Titular(
    new Cpf('739.654.823-74'),
    'Ronald Emanuel',
    new Endereco('São Paulo', 'Um Bairro aí', 'Rua', '178')
);

$autenticador->tentaLogin($titular, 'abcd');