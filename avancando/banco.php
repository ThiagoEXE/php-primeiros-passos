<?php

$contasCorrentes = [
    '123.456.789=10' => [
        'titular' => 'Alaberto',
        'saldo' => 300
    ], 
    '123.459.789-18' => [
        'titular' => 'Vania',
        'saldo' => 1000
    ],
    '123.756.789-11' => [
        'titular' => 'Thiago',
        'saldo' => 1000
    ]
];
//Realizando saque de 500$ na conta de Thiago
$contasCorrentes ['123.756.789-11'] ['saldo'] -= 500;

foreach ($contasCorrentes as $cpf => $conta){
    echo $cpf . " " . $conta['titular'] . ' ' . $conta['saldo'] . PHP_EOL;
}