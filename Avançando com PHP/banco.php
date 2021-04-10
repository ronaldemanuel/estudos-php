<?php

require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Ronald',
        'saldo' => 1000
    ], 
    '321.987.123-45' => [
        'titular' => 'Maria',
        'saldo' => 10200 
    ], 
    '456.987.654-90' => [
        'titular' => 'José',
        'saldo' => 300
    ]
];

$contasCorrentes['321.987.123-45'] = sacar(
    $contasCorrentes['321.987.123-45'], 
    500
);

$contasCorrentes['456.987.654-90'] = sacar(
    $contasCorrentes['456.987.654-90'], 
    200
);

$contasCorrentes['123.456.789-10'] = depositar(
    $contasCorrentes['123.456.789-10'],
    2000
);

unset($contasCorrentes['456.987.654-90']); // Remove a conta do José

titularComLetrasMaiusculas($contasCorrentes['123.456.789-10']);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
</head>
<body>
    <h1>Contas correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
            <dt>
                <h2><?= $conta['titular'];?> - <?= $cpf; ?></h2>
            </dt>
            <dd>
                Saldo: <?php echo $conta['saldo']; ?>
            </dd>
        <?php } ?>
    </dl>
</body>
</html>