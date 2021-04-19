<?php

use Alura\Banco\Model\Endereco;

require_once 'autoloader.php';

$endereco1 = new Endereco('Junqueiro', 'Algum Aí', 'Rua do Sol', '457');
$endereco2 = new Endereco('Rio de Janeiro', 'Centro', 'Rua José de Maria', '65B');

echo $endereco2;