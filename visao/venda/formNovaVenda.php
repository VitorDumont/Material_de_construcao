
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Venda</title>
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


        <h1>Cadastro de Venda</h1>
        <form action="abrirVenda.php" method="post">

        <label for="cliente">Nome do Cliente</label><br>
            <select name="SelectCliente" id="SelectCliente">
                <?php
                require_once '../../database/Conexao.php';
                require_once '../../database/DaoCliente.php';
                $DaoCliente = new DaoCliente();
                $lista = $DaoCliente->listaTodos();
                foreach ($lista as $cliente) {
                    echo '<option value="' . $cliente['idcliente'] . '">' .$cliente['nome'] . '</option>';
                }
                ?>
            </select><br><br>
            

            <button>Abrir venda</button>
        </form>



        </section>

<script src="../sidebar/script.js"></script>
    </body>
</html>

