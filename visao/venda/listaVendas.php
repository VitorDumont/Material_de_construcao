<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Listagem de Vendas</title>
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

        <h1>Listagem de Vendas</h1>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>CLIENTE</th>
                <th>DATA</th>
                <th>TOTAL</th>
            </tr>
            <?php
            require_once '../../database/Conexao.php';
            require_once '../../database/DaoVenda.php';

            $daoVenda = new DaoVenda();
            $lista = $daoVenda->listaTodos();

            foreach ($lista as $registro) {
                echo '<tr>';
                echo '<td>' . $registro['idvenda'] . '</td>';
                echo '<td>' . $registro['cliente_nome'] . '</td>';
                echo '<td>' . $registro['data'] . '</td>';
                echo '<td>' . $registro['valor'] . '</td>';                
                echo '</tr>';
            }
            ?>
        </table>


        </section>

<script src="../sidebar/script.js"></script>
    </body>

</html>
