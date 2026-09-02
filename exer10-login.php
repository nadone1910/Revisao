<?php

/*
require_once é mais adequado neste contexto porque o arquivo Usuario.php
é necessário para o sistema funcionar. Se o arquivo não existir ou tiver
algum erro grave, o require_once interrompe a execução. Além disso,
require_once evita que a mesma classe seja carregada mais de uma vez.
Em um contexto de autenticação, é mais seguro garantir que a classe
necessária esteja realmente disponível.
*/

require_once "Usuario.php";

session_start();

$usuario = new Usuario("Joao");

$usuario->autenticar();

$_SESSION["nomeUsuario"] = $usuario->nomeUsuario;

setcookie("ultimoAcesso", date("Y-m-d H:i:s"), time() + 86400);

/*
A sessão fica armazenada no servidor e é usada para manter os dados
do usuário durante sua navegação.

O cookie fica armazenado no navegador do usuário e pode guardar
informações que serão enviadas novamente ao servidor em futuras
requisições.
*/

echo "Usuário autenticado: " . $_SESSION["nomeUsuario"];
echo "\n";
echo "Último acesso registrado.";
