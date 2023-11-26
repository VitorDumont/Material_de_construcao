<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Produtos</title>
    <link rel="stylesheet" href="../../style.css">
</head>

<body>
<?php 
        require_once '../sidebar/index.php';
    ?>


<section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
    </div>
    <br>

    <h1>Listagem de Produtos</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>PREÇO</th>
            <th>ESTOQUE</th>
            <th>FORNECEDOR</th>
            <th class="acao-th" colspan="2">AÇÕES</th>
        </tr>
        <?php
        
        require_once '../../modelo/Produto.php';
        require_once '../../database/Conexao.php';
        require_once '../../database/DaoProduto.php';

        $DaoProduto = new DaoProduto();
        $lista = $DaoProduto->listaTodos();

        foreach ($lista as $registro) {
            echo '<tr>';
            echo '<td>' . $registro['idproduto'] . '</td>';
            echo '<td>' . $registro['nome'] . '</td>';
            echo '<td>' . $registro['preco'] . '</td>';
            echo '<td>' . $registro['estoque'] . '</td>';
            echo '<td>' . $registro['fornecedor_nome'] . '</td>';
            ?>
            <td>
                <form action="delete.php" method="post">
                    <input type="hidden" name="idproduto" id="idproduto" value="<?= $registro['idproduto'] ?>">
                    <button >Excluir</button>
                </form>
            </td>
            <td>
                <form action="formAlteraProduto.php" method="post">
                    <input type="hidden" name="idproduto" id="idproduto" value="<?= $registro['idproduto'] ?>">
                    <input type="hidden" name="fornecedor" id="fornecedor" value="<?= $registro['fornecedor_nome'] ?>">
                    <input type="hidden" name="nome" id="nome" value="<?= $registro['nome'] ?>">
                    <input type="hidden" name="preco" id="preco" value="<?= $registro['preco'] ?>">
                    <input type="hidden" name="estoque" id="estoque" value="<?= $registro['estoque'] ?>">
                    <button >Editar</button>
                </form>
            </td>
            <?php
            echo '</tr>';
        }
        ?>
    </table>

    </section>

<script src="../sidebar/script.js"></script>
</body>

</html>