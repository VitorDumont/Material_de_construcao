<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de fornecedor</title>
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

    <h1>Novo Fornecedor</h1>
    <form action="novoFornecedor.php" method="post">
        
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <br>

        <label for="endereco">Endereço:</label>
        <input type="text" name="endereco" id="endereco">
        <br>

        <label for="contato">Contato:</label>
        <input type="text" name="contato" id="contato">
        <br>

        <label for="cnpj">CNPJ:</label>
        <input type="text" name="cnpj" id="cnpj">
        <br>

        <button type="submit">Salvar</button>
        <button type="reset">Limpar</button>
    

    </form>
    </section>

<script src="../sidebar/script.js"></script>
</body>
</html>
