<?php

require_once 'autoloader.php';

use Alura\Banco\Model\Conta\{Conta, Titular};
use Alura\Banco\Model\{Cpf, Endereco};

$ronald = new Titular(new Cpf('123.456.789-10'), 'Ronald Emanuel', new Endereco('Junqueiro', 'João José Pereira', 'Maria José de Almeida', 196));
$primeiraConta = new Conta($ronald);

$primeiraConta->depositar(500);
$primeiraConta->sacar(300);
// $primeiraConta->exibir();
var_dump($primeiraConta);

$enderecoMJ = new Endereco('Nazaré', 'Vila Nossa Senhor das Graças', 'Rua da paz', 777);
$maria = new Titular(new Cpf('987.654.321-10'), 'Maria Cecília', $enderecoMJ);
$segundaConta = new Conta($maria);

//$primeiraConta->transferir(50, $segundaConta);

// $segundaConta->exibir();
var_dump($segundaConta);

$jose = new Titular(new Cpf('634.928.736-91'), 'Jose da Silva', $enderecoMJ);
$conta3 = new Conta($jose);
// $conta3->exibir();
var_dump($conta3);

echo PHP_EOL . "Número de contas: " . Conta::getNumeroDeContas() . PHP_EOL;