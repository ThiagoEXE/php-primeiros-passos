<?php

<<<<<<< HEAD
$idade = 17;
$numeroDePessoas = 1;
=======
$idade = 18;
$numeroDePessoas = 2;
>>>>>>> 06656914e6085345a8d5403b66b6135705011067

echo "Você só pode entrar se tiver a partir de 18 anos ou";
echo " a partir de 16 anos acompanhado".PHP_EOL;

if ($idade >= 18){
<<<<<<< HEAD

    echo "Você tem $idade anos. Pode entar sozinho";

} else if($idade >= 16 && $numeroDePessoas > 1){

        echo "Você tem $idade anos, está acompanhado(a), então pode entrar";

    }else{

        echo "Você só tem $idade anos e não está acompanhado(a). \nVocê não pode entrar";

    }
=======
    echo "Você tem $idade anos. Pode entar";
} else if($idade >= 16 && $numeroDePessoas > 1){
    echo "Você só tem $idade anos, e está acompanhado(a), então pode entrar.";
}else
    echo "Você só tem $idade, anos. Você não pode entrar."; 
>>>>>>> 06656914e6085345a8d5403b66b6135705011067


echo PHP_EOL;
echo "Adeus!";
