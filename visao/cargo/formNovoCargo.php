<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de cargo</title>
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

    <h1>Novo Cargo</h1>
    <form action="novoCargo.php" method="post">

        <label for="descricao">Nome do Cargo:</label>
        <br>
        <input type="text" name="descricao" id="descricao">
        <br>

        <button type="submit">Salvar</button>
        <button type="reset">Limpar</button>

    </form>
</section>

<script src="../sidebar/script.js"></script>
</body>

</html>
