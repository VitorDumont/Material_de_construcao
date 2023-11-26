<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['idfuncionario'])) {
    die("<h1>Você não pode acessar esta página porque não está logado.</h1><p><a href=\"/material_de_construcao/index.php\">Entrar</a></p>");
}


?>