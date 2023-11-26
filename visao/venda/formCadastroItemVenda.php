<?php

include('../../protect.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cssVendaCompra/estilo.css">
    <title>Cadastro de Venda</title>
   
</head>

<body>
    <div class="container">

        <h1>Itens da Venda</h1>

        <form action="cadastraItemVenda.php" method="post">

            <label for="idproduto">Produto</label><br>
            <select name="idproduto" id="idproduto">
                <?php
                require_once '../../database/Conexao.php';
                require_once '../../database/DaoProduto.php';
                $daoProduto = new DaoProduto();
                $lista = $daoProduto->listaTodos();
                foreach ($lista as $produto) {
                    echo '<option value="' . $produto['idproduto'] . '">' . $produto['nome'] . ' - ' . $produto['fornecedor_nome'] . '</option>';
                }
                ?>
            </select>
            <br>
            <label for="quantidade">Quantidade</label><br>
            <input type="number" name="quantidade" id="quantidade"><br>
            <button>Adicionar</button>
        </form>
        <br><br>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>PRODUTO</th>
                <th>QUANTIDADE</th>
                <th>PRECO</th>
                <th>SUBTOTAL</th>
            </tr>
            <?php
            require_once '../../database/Conexao.php';
            require_once '../../database/DaoItemVenda.php';

            $daoItemVenda = new DaoItemVenda();
            
            $lista = $daoItemVenda->listaPorVenda($_SESSION['vendaaberta']);
            $total = 0;
            foreach ($lista as $registro) {
                echo '<tr>';
                echo '<td>' . $registro['iditemvenda'] . '</td>';
                echo '<td>' . $registro['Produto'] . '</td>';
                echo '<td>' . $registro['quantidade'] . '</td>';
                echo '<td>' . $registro['preco'] . '</td>';
                echo '<td>' . $registro['subtotal'] . '</td>';
                echo '</tr>';
                $total += $registro['subtotal'];
            }
            ?>
        </table>
        <br><br>
        
        <label>Total =
            <?= 'R$' . sprintf("%.2f", $total) ?>
        </label><br>

        <form action="fecharVenda.php" method="post">

            <button>Fechar a venda</button>
        </form>
    </div>

</body>

</html>