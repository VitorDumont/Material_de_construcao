<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altera Cliente</title>
</head>
<?php
    $id = $_POST['id_cliente'];
    $nome = $_POST['nome'];
    $endereco = $_POST['endereço'];
    $contato = $_POST['contato'];
    $cpf = $_POST['cpf'];
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
    
   
    <h1>Edição do Cliente</h1>
    <form action="update.php" method="post">

        <input type="hidden" id="id" name="id" value="<?= $id ?>"><br>
        
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" value="<?= $nome ?>"><br>

        <label for="endereco">Endereço</label>
        <input type="text" id="endereco" name="endereco" value="<?= $endereco ?>"><br>

        <label for="contato">Contato</label>
        <input type="text" id="contato" name="contato" value="<?= $contato ?>"><br>

        <label for="cpf">CPF</label>
        <input type="text" id="cpf" name="cpf" value="<?= $cpf ?>"><br>

        <button>Salvar</button>

    </form>

    </section>

<script src="../sidebar/script.js"></script>
</body>

</html>
