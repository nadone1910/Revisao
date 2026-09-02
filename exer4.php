<?php

$numero = readline("Digite um número de 1 a 7: ");

switch ($numero) {
    case 1:
        echo "Frango grelhado";
        break;
    case 2:
        echo "Fricasse";
        break;
    case 3:
        echo "Feijoada";
        break;
    case 4:
        echo "Carne de panela";
        break;
    case 5:
        echo "Strogonoff";
        break;
    case 6:
        echo "Restaurante fechado";
        break;
    case 7:
        echo "Restaurante fechado";
        break;
}

// Sem o break, continua executando o próximo case,
// msm depois de encontrar o case correspondente.