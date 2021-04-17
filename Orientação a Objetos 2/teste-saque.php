<?php

require_once 'autoloader.php';

use Alura\Banco\Model\Account\{ContaCorrente, ContaPoupanca, Titular};
use Alura\Banco\Model\{Cpf, Endereco};

$conta = new ContaPoupanca(
    new Titular(
        new Cpf('123.456.789-10'),
        'Ronald Emanuel',
        new Endereco('Junqueiro', 'Bem ali', 'Rua da Marmota', '123')
    )
);

$conta->depositar(500);
$conta->sacar(100);
echo $conta->getSaldo();
