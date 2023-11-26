<?php
session_start();
if (isset($_SESSION['fornecedor'])) {
    $fornecedor = $_SESSION['fornecedor'];
} else {
    // Lidar com a situação em que a variável de sessão não está definida
    // Pode ser útil definir um valor padrão ou redirecionar de volta à página anterior
    // caso a variável não esteja definida.
    $fornecedor = "Valor_Padrao"; // Defina um valor padrão ou ajuste conforme necessário.
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="../cssVendaCompra/estilo.css">

    <title>Cadastro de Item de Compra</title>
   
</head>

<body>
    <div class="container">

        <h1>Itens da Compra</h1>

        <form action="cadastraItemCompra.php" method="post">

        <label for="idproduto">Produto</label><br>
            <select name="idproduto" id="idproduto">
                <?php
                require_once '../../database/Conexao.php';
                require_once '../../database/DaoProduto.php';
                
                $daoProduto = new DaoProduto();

                if ($daoProduto->listaQuase($fornecedor)) {
                    echo "é isso";
                   
                   } else {
                       echo 'Algum erro.';
                    
                       echo "<br>";
                   }

                $lista = $daoProduto->listaQuase($fornecedor);
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
            require_once '../../database/DaoItemCompra.php';

            $daoItemCompra = new DaoItemCompra();
            
            $lista = $daoItemCompra->listaPorCompra($_SESSION['compraaberta']);
            $total = 0;
            foreach ($lista as $registro) {
                echo '<tr>';
                echo '<td>' . $registro['iditemcompra'] . '</td>';
                echo '<td>' . $registro['Produto'] . '</td>';
                echo '<td>' . $registro['quantidade'] . '</td>';
                echo '<td>' . $registro['preco'] . '</td>';
                echo '<td>' . ($registro['quantidade'] * $registro['preco']) . '</td>';
                echo '</tr>';
                $total += $registro['quantidade'] * $registro['preco'];
            }
            ?>
        </table>
        <br><br>
        
        <label>Total =
            <?= 'R$' . sprintf("%.2f", $total) ?>
        </label><br>

        <form action="fecharCompra.php" method="post">

            <button>Fechar a compra</button>
        </form>
    </div>

</body>

</html>
