<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';

$ronald = new Titular('123.456.789-10', 'Ronald Emanuel');
$primeiraConta = new Conta($ronald);

$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

$primeiraConta->exibir();

$maria = new Titular('987.654.321-10', 'Maria Cecília');
$segundaConta = new Conta($maria);

$primeiraConta->transferir(50, $segundaConta);

$segundaConta->exibir();

$jose = new Titular('634.928.736-91', 'Jose da Silva');
$conta3 = new Conta($jose);
$conta3->exibir();

echo PHP_EOL . "Número de contas: " . Conta::getNumeroDeContas() . PHP_EOL;