<?php

$id = $_GET["id"];
$categoria = $_GET["categoria"];

echo "Produto " . $id . " da categoria " . $categoria;

// $_GET é uma superglobal que armazena os dados recebidos pela URL
// em uma estrutura de array, usando os nomes dos parâmetros como chaves.