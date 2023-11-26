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
        require_once '../../modelo/Venda.php';
        require_once '../../database/Conexao.php';
        require_once '../../database/DaoVenda.php';

        $cliente = $_POST['SelectCliente'];

        $venda = new Venda(null, $cliente, null,null, 0, null);

        $daoVenda = new DaoVenda();

        if($idDaVenda = $daoVenda->abrirVenda($venda)) {
            //echo 'Venda cadastrada com sucesso. Código: ';
            session_start();
            $_SESSION['vendaaberta'] = $idDaVenda;
            header("location: formCadastroItemVenda.php");
        } else {
            echo 'Deu ruim.';
        }

        ?>
    </body>
</html>

