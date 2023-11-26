<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Fornecedores</title>
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

    <h1>Listagem De Fornecedores</h1>
    <table border="1">
        <tr>
            <th>idfornecedor</th>
            <th>nome</th>
            <th>endereço</th>
            <th>contato</th>
            <th>cnpj</th>
            <th colspan="2">AÇÕES</th>
        </tr>

        <?php

       

        require_once BASE . '/Modelo/Fornecedor.php';
        require_once BASE . '/Database/DAOFornecedor.php';
        require_once BASE . '/Database/Conexao.php';


        $daoConexao = new DAOFornecedor();
        $lista = $daoConexao->listaTodos();

        foreach ($lista as $registro) {
            echo '<tr>';
            echo '<td>' . $registro['idfornecedor'] . '</td>';
            echo '<td>' . $registro['nome'] . '</td>';
            echo '<td>' . $registro['endereço'] . '</td>';
            echo '<td>' . $registro['contato'] . '</td>';
            echo '<td>' . $registro['cnpj'] . '</td>';
            
            ?>
            <td>
                <form action="delete.php" method="post">
                    <input type="hidden" name="idfornecedor" id="idfornecedor" value="<?= $registro['idfornecedor'] ?>">
                    <button>Excluir</button>
                </form>
            </td>
            <td>
                <form action="formAlteraFornecedor.php" method="post">
                    <input type="hidden" name="idfornecedor" id="idfornecedor" value="<?= $registro['idfornecedor'] ?>">
                    <input type="hidden" name="nome" id="nome" value="<?= $registro['nome'] ?>">
                    <input type="hidden" name="endereço" id="endereço" value="<?= $registro['endereço'] ?>">
                    <input type="hidden" name="contato" id="contato" value="<?= $registro['contato'] ?>">
                    <input type="hidden" name="cnpj" id="cnpj" value="<?= $registro['cnpj'] ?>">
                    <button>Editar</button>
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
