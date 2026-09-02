<?php

session_start();

echo "Dados da sessão atual:\n";

if (isset($_SESSION["nomeUsuario"])) {
    echo "Usuário: " . $_SESSION["nomeUsuario"] . "\n";
} else {
    echo "Nenhum usuário está logado.\n";
}

/*
session_unset() remove os dados armazenados na sessão atual.
session_destroy() encerra a sessão completamente.
*/

session_unset();
session_destroy();

echo "Sessão encerrada com sucesso.";
