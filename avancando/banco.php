<?php

function exibeMensagem($mensagem){
    echo $mensagem . PHP_EOL;
}

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
//$contasCorrentes ['123.756.789-11'] ['saldo'] -= 500;

if(500 > $contasCorrentes ['123.456.789=10'] ['saldo']){
    exibeMensagem("Você não pode sacar este valor");
}else{
    $contasCorrentes ['123.456.789=10'] ['saldo']-= 500;
}

if(500 > $contasCorrentes['123.459.789-18']['saldo']){
    exibeMensagem("Você não pode sacar este valor");
}else{
    $contasCorrentes['123.756.789-11']['saldo'] -= 500;
}

foreach ($contasCorrentes as $cpf => $conta){
    exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}