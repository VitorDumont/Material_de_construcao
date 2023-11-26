<?php

include('../../protect.php');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Venda</title>
    </head>
    <body>
        <h1>Cadastro de Venda</h1>
        <?php
        require_once '../../modelo/ItemVenda.php';
        require_once '../../database/Conexao.php';
        require_once '../../database/DaoItemVenda.php';

        

        $idVenda = $_SESSION['vendaaberta'];
        $idProduto = $_POST['idproduto'];
        $quantidade = $_POST['quantidade'];

        $itemVenda = new ItemVenda(null, $idVenda, $idProduto, $quantidade, 0);

        $daoItemVenda = new DaoItemVenda();

        if($daoItemVenda->inclui($itemVenda)) {
            header("location: formCadastroItemVenda.php");
        } else {
            echo 'Deu ruim.';
        }

        ?>
    </body>
</html>

