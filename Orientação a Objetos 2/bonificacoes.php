<?php

require_once 'autoloader.php';

use Alura\Banco\Model\Funcionario\{Desenvolvedor, Diretor, EditorVideo, Gerente};
use Alura\Banco\Model\Cpf;
use Alura\Banco\Service\ControladorDeBonificacoes;

$funcionario1 = new Desenvolvedor(
    'Ronald Emanuel', 
    new Cpf('123.456.789-10'),
    1000
);

$funcionario1->sobeDeNivel();

$funcionario2 = new Gerente(
    'Maria Cecília', 
    new Cpf('098.765.432-01'),
    3000
);

$diretor = new Diretor(
    'José Soares',
    new Cpf('625.857.356.92'),
    5000
);

$editor = new EditorVideo(
    'Andreia Soares',
    new Cpf('456.987.258-82'),
    1500
);

$controlador = new ControladorDeBonificacoes();

$controlador->adicionarBonificacao($funcionario1);
$controlador->adicionarBonificacao($funcionario2);
$controlador->adicionarBonificacao($diretor);
$controlador->adicionarBonificacao($editor);

echo $controlador->getTotalBonificacoes();
