<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$ronald = new Titular(new Cpf('123.456.789-10'), 'Ronald Emanuel');
$primeiraConta = new Conta($ronald);

$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

$primeiraConta->exibir();

$cpfMaria = new Cpf('987.654.321-10');
$maria = new Titular($cpfMaria, 'Maria Cecília');
$segundaConta = new Conta($maria);

$primeiraConta->transferir(50, $segundaConta);

$segundaConta->exibir();

$cpfJose = new Cpf('634.928.736-91');
$jose = new Titular($cpfJose, 'Jose da Silva');
$conta3 = new Conta($jose);
$conta3->exibir();

echo PHP_EOL . "Número de contas: " . Conta::getNumeroDeContas() . PHP_EOL;