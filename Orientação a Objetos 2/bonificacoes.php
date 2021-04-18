<?php

require_once 'autoloader.php';

use Alura\Banco\Model\Funcionario\{Desenvolvedor, Diretor, Gerente};
use Alura\Banco\Model\Cpf;
use Alura\Banco\Service\ControladorDeBonificacoes;

$funcionario1 = new Desenvolvedor(
    'Ronald Emanuel', 
    new Cpf('123.456.789-10'),
    'Desenvolvedor',
    1000
);

$funcionario1->sobeDeNivel();

$funcionario2 = new Gerente(
    'Maria Cecília', 
    new Cpf('098.765.432-01'),
    'Gerente',
    3000
);

$diretor = new Diretor(
    'José Soares',
    new Cpf('625.857.356.92'),
    'Diretor',
    5000
);

$controlador = new ControladorDeBonificacoes();

$controlador->adicionarBonificacao($funcionario1);
$controlador->adicionarBonificacao($funcionario2);
$controlador->adicionarBonificacao($diretor);

echo $controlador->getTotalBonificacoes();
