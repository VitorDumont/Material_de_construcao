<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altera Fornecedor</title>
</head>
<?php
    $idfornecedor = $_POST['idfornecedor'];
    $nome = $_POST['nome'];
    $endereco = $_POST['endereço'];
    $contato = $_POST['contato'];
    $cnpj = $_POST['cnpj'];
?>
<body>
<?php 
        require_once '../sidebar/index.php';
    ?>



<section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
    </div>
    <br>
   

    <h1>Edição do Fornecedor</h1>
    <form action="update.php" method="post">

        <input type="hidden" id="idfornecedor" name="idfornecedor" value="<?= $idfornecedor ?>"><br>
        
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" value="<?= $nome ?>"><br>

        <label for="endereço">Endereço</label>
        <input type="text" id="endereço" name="endereço" value="<?= $endereco ?>"><br>

        <label for="contato">Contato</label>
        <input type="text" id="contato" name="contato" value="<?= $contato ?>"><br>

        <label for="cnpj">CNPJ</label>
        <input type="text" id="cnpj" name="cnpj" value="<?= $cnpj ?>"><br>

        <button>Salvar</button>

    </form>

    </section>

<script src="../sidebar/script.js"></script>
</body>

</html>
