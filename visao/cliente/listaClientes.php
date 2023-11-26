<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Clientes</title>
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

    
    <h1>Listagem De Clientes</h1>
    <table border="1">
        <tr>
            <th>idcliente</th>
            <th>nome</th>
            <th>endereço</th>
            <th>contato</th>
            <th>cpf</th>
            <th colspan="2">ações</th>
        </tr>

        <?php

       

        require_once BASE . '/Modelo/Cliente.php';
        require_once BASE . '/Database/DAOCliente.php';
        require_once BASE . '/Database/Conexao.php';


        $daoConexao = new DAOCliente();
        $lista = $daoConexao->listaTodos();

        foreach ($lista as $registro) {
            echo '<tr>';
            echo '<td>' . $registro['idcliente'] . '</td>';
            echo '<td>' . $registro['nome'] . '</td>';
            echo '<td>' . $registro['endereço'] . '</td>';
            echo '<td>' . $registro['contato'] . '</td>';
            echo '<td>' . $registro['cpf'] . '</td>';
            
            ?>
            <td>
                <form action="delete.php" method="post">
                    <input type="hidden" name="idcliente" id="idcliente" value="<?= $registro['idcliente'] ?>">
                    <button>Excluir</button>
                </form>
            </td>
            <td>
                <form action="formAlteraCliente.php" method="post">
                    <input type="hidden" name="id_cliente" id="id_cliente" value="<?= $registro['idcliente'] ?>">
                    <input type="hidden" name="nome" id="nome" value="<?= $registro['nome'] ?>">
                    <input type="hidden" name="endereço" id="endereço" value="<?= $registro['endereço'] ?>">
                    <input type="hidden" name="contato" id="contato" value="<?= $registro['contato'] ?>">
                    <input type="hidden" name="cpf" id="cpf" value="<?= $registro['cpf'] ?>">
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
