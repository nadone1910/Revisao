<?php

$participantes = [
    ["nome" => "Nadone", "pontos" => 850],
    ["nome" => "Davi", "pontos" => 1],
    ["nome" => "Messi", "pontos" => 780]
];

usort($participantes, function ($a, $b) {
    return $b["pontos"] <=> $a["pontos"];


});

$posicao = 1;

foreach ($participantes as $participante) {
    echo $posicao ;
    echo "-";
    echo $participante["nome"];
    echo "-";
    echo $participante["pontos"];
    echo "\n";
    $posicao++;
}