<?php

$idade = 26;
//$nome = 'Thiago';

echo "Você só pode entrar se tiver a partir de 18 anos ou";
echo "a partir de 16 anos acompanhado".PHP_EOL;

if ($idade >= 18){
    echo "Você tem $idade anos." . PHP_EOL;
    echo 'Pode entar';
} else {
    echo "Você só tem $idade anos. \nVocê não pode entrar";
}

echo PHP_EOL;
echo "Adeus!";
