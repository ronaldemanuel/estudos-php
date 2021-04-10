<?php

// $idadeList = array(21, 23, 19, 25, 30, 41, 18);
$idadeList  = [
    'idade1' => 21, 
    'idade2' => 23, 
    'idade3' => 19, 
    25, 30, 41, 18
];

list('idade1' => $idadeRonald, 'idade2' => $idadeMaria, 'idade3' => $idadeJoao) = $idadeList;

$idades = [$idadeRonald, $idadeMaria, $idadeJoao];

foreach($idades as $idade) {
    echo $idade . PHP_EOL;
}

exit();

$idadeList[] = 20;

foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}