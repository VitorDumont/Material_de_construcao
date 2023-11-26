<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo fornecedor</title>
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


    <h1>Novo fornecedor</h1>

    <?php
    

    require_once BASE . '/Modelo/Fornecedor.php';
    require_once BASE . '/Database/DAOFornecedor.php';
    require_once BASE . '/Database/Conexao.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $contato = $_POST['contato'];
        $cnpj = $_POST['cnpj'];

        $fornecedor = new Fornecedor($nome, $endereco, $contato, $cnpj);
        $daoFornecedor = new DAOFornecedor();

        if ($daoFornecedor->inclui($fornecedor)) {
            echo 'O fornecedor foi salvo.';
        } else {
            echo 'Não foi possível salvar o fornecedor.';
        }
    } else {
        echo 'Sai daqui, otário.';
    }

    ?>
  <br><br>
  
    <button class="butao"><a href="formNovoFornecedor.php" style="text-decoration:none">Adicionar mais um Fornecedor</a></button>
    </section>

<script src="../sidebar/script.js"></script>
</body>

</html>
