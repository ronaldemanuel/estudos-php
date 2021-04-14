<?php

require_once 'src/Conta.php';

$primeiraConta = new Conta('123.456.789-10', 'Ronald Emanuel');
var_dump($primeiraConta);

$primeiraConta->depositar(500);
$primeiraConta->sacar(300);

echo $primeiraConta->getNomeTitular() . PHP_EOL;
echo $primeiraConta->getCpfTitular() . PHP_EOL;
echo $primeiraConta->getSaldo() . PHP_EOL;

$segundaConta = new Conta('987.654.321-10', 'Maria Cecília');

$primeiraConta->transferir(50, $segundaConta);

echo $segundaConta->getNomeTitular() . PHP_EOL;
echo $segundaConta->getCpfTitular() . PHP_EOL;
echo $segundaConta->getSaldo() . PHP_EOL;

$conta3 = new Conta('634.928.736-91', 'Jose da Silva');

echo Conta::getNumeroDeContas() . PHP_EOL;