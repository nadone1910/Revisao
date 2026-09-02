<?php

/*
require_once é mais adequado pq o arquivo usuario.php
eh necessário para o sistema funcionar. Se o arquivo não existir ou tiver
algum erro grave, o require_once interrompe a execução.
*/

require_once __DIR__ . "/exer10-usuario.php";
session_start();

$usuario = new Usuario("Nadone");
$usuario->autenticar();

$_SESSION["nomeUsuario"] = $usuario->nomeUsuario;

setcookie("ultimoAcesso", date("Y-m-d H:i:s"), time() + 86400);

echo "Usuário autenticado: " . $_SESSION["nomeUsuario"];
echo "\n";
echo "Último acesso registrado.";

/*
a sessão fica armazenada no servidor e eh usada para manter os dados
do usuário durante sua navegação

O cookie fica guardado no navegador do usuário e pode guardar
informações que serão enviadas de novo ao servidor em futuras
requisições
*/