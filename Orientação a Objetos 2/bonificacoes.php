<?php

require_once 'autoloader.php';

use Alura\Banco\Model\Funcionario;
use Alura\Banco\Model\Cpf;
use Alura\Banco\Service\ControladorDeBonificacoes;

$funcionario1 = new Funcionario(
    'Ronald Emanuel', 
    new Cpf('123.456.789-10'),
    'Desenvolvedor',
    1000
);

$funcionario2 = new Funcionario(
    'Maria Cecília', 
    new Cpf('098.765.432-01'),
    'Gerente',
    3000
);

$controlador = new ControladorDeBonificacoes();

$controlador->adicionarBonificacao($funcionario1);
$controlador->adicionarBonificacao($funcionario2);

echo $controlador->getTotalBonificacoes();
