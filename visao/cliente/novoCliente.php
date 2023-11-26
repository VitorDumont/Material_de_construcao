<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo cliente</title>
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

    <h1>Novo cliente</h1>

    <?php
   

    require_once BASE . '/Modelo/Cliente.php';
    require_once BASE . '/Database/DAOCliente.php';
    require_once BASE . '/Database/Conexao.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $contato = $_POST['contato'];
        $cpf = $_POST['cpf'];

        $cliente = new Cliente($nome, $endereco, $contato, $cpf);
        $daoCliente = new DAOCliente();

        if ($daoCliente->inclui($cliente)) {
            echo 'O cliente foi salvo.';
        } else {
            echo 'Não foi possível salvar o cliente.';
        }
    } else {
        echo 'Sai daqui, otário.';
    }

    ?>
  <br><br>
    <button class="butao"><a href="formNovoCliente.php" style="text-decoration:none">Adicionar mais um Cliente</a></button>


    </section>

<script src="../sidebar/script.js"></script>

</body>

</html>
