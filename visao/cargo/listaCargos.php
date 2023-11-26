<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Cargos</title>
</head>

<body>

<?php 
    require_once '../sidebar/index.php';
?>

<section class="home-section">
    <div class="home-content">
        <i class='bx bx-menu'></i>
    </div>
    <br>

    <h1>Listagem De Cargos</h1>
    <table border="1">
        <tr>
            <th>idcargo</th>
            <th>descricao</th>
            <th colspan="2">ações</th>
        </tr>

        <?php

      

        require_once BASE . '/Modelo/Cargo.php'; // Certifique-se de ter a classe Cargo corretamente definida
        require_once BASE . '/Database/DAOCargo.php'; // Certifique-se de ter o DAO correspondente
        require_once BASE . '/Database/Conexao.php';

        $daoConexao = new DAOCargo();
        $lista = $daoConexao->listaTodos();

        foreach ($lista as $registro) {
            echo '<tr>';
            echo '<td>' . $registro['idcargo'] . '</td>';
            echo '<td>' . $registro['descricao'] . '</td>';
            
            ?>
            <td>
                <form action="delete.php" method="post">
                    <input type="hidden" name="idcargo" id="idcargo" value="<?= $registro['idcargo'] ?>">
                    <button>Excluir</button>
                </form>
            </td>
            <td>
                <form action="formAlteraCargo.php" method="post">
                    <input type="hidden" name="idcargo" id="idcargo" value="<?= $registro['idcargo'] ?>">
                    <input type="hidden" name="descricao" id="descricao" value="<?= $registro['descricao'] ?>">
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
