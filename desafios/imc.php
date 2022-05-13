<?php

$peso = 84.1;
$alutura = 1.71;
$imc = 18.499;

//echo  "Seu IMC é de : " . $imc = ($peso / $alutura ** 2) . PHP_EOL;

if($imc < 16){
    echo "Você está com Baixo Peso Grau 3";
}else if ($imc >= 16 && $imc < 17){
    echo "Você está com Baixo Peso Grau 2";
}else if ($imc >= 17 && $imc <= 18.49){
    echo "Você está com Baixo Peso Grau 1";
}else if ($imc >= 18.50 && $imc < 25){
    echo "Você está Peso Ideal!";
}else if ($imc >= 25 && $imc <30){
    echo "Você está com Sobrepeso";
}else if ($imc >= 30 && $imc <35){
    echo "Você está com Obesidade Grau 1";
}else if ($imc >= 35 && $imc <=40){
    echo "Você está com Obesidade Grau 2";
}else {
    echo "Você está com Obesidade Grau 3";
}