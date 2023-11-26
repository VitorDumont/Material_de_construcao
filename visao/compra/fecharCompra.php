<?php

include('../../protect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fechar Compra</title>
</head>
<body>
    <h1>Fechar Compra</h1>
    <?php
    require_once '../../database/Conexao.php';
    require_once '../../database/DaoCompra.php';

    session_start();
    $idCompra = $_SESSION['compraaberta'];

    $daoCompra = new DaoCompra();

    if ($daoCompra->fecharCompra($idCompra)) {
        unset($_SESSION['compraaberta']);
        header("location: listaCompras.php");
    } else {
        echo 'Deu ruim.';
    }

    ?>
</body>
</html>
