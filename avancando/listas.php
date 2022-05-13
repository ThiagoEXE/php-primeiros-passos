<?php

$idadeList = [21, 23, 19, 25, 30, 41, 18];
//$umaIdade = $idadeList[5];

for($i = 0; $i < 7; $i++){
    echo $idadeList[$i] . PHP_EOL; 
    // Para iterar um array é preciso criar um for e usar o contador para acessar os indíces"
    
    echo count($idadeList);
    //Função que conta quantos indíces tem no array
}