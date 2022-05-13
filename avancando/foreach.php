<?php
/*Array associativo != de array numérico poi o numerico usa indices de 0...
ja no associativo pode ser um numero nome etc..*/
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

$contasCorrentes['063.495.246-75']  = [
    'titular' => 'Claudia',
    'saldo' => 300   
];
foreach ($contasCorrentes as $cpf => $conta){
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}