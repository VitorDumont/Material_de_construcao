<?php

include('../../protect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Compra</title>
</head>
<body>
    <h1>Cadastro de Compra</h1>
    <?php
    require_once '../../modelo/ItemCompra.php';
    require_once '../../database/Conexao.php';
    require_once '../../database/DaoItemCompra.php';

    session_start();

    $idCompra = $_SESSION['compraaberta'];
    $idProduto = $_POST['idproduto'];
    $quantidade = $_POST['quantidade'];

    $itemCompra = new ItemCompra(null, $idCompra, $idProduto, $quantidade, 0);

    $daoItemCompra = new DaoItemCompra();

    if ($daoItemCompra->inclui($itemCompra)) {
        header("location: formCadastroItemCompra.php");
    } else {
        echo 'Deu ruim.';
    }

    ?>
</body>
</html>
