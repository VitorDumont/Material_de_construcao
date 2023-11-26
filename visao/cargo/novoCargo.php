<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Cargo</title>
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

    <?php
 
    require_once BASE . '/Modelo/Cargo.php'; // Certifique-se de ter a classe Cargo corretamente definida
    require_once BASE . '/Database/DAOCargo.php'; // Certifique-se de ter o DAO correspondente
    require_once BASE . '/Database/Conexao.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $descricao = $_POST['descricao'];

        $cargo = new Cargo($descricao);
        $daoCargo = new DAOCargo(); // Certifique-se de ter o DAO correspondente

        if ($daoCargo->inclui($cargo)) {
            echo 'O cargo foi salvo.';
        } else {
            echo 'Não foi possível salvar o cargo.';
        }
    } else {
        echo 'Sai daqui, otário.';
    }

    ?>
   <br><br>
    <button class="butao"><a href="formNovoCargo.php" style="text-decoration:none">Adicionar mais um Cargo</a></button>


</section>

<script src="../sidebar/script.js"></script>

</body>

</html>
