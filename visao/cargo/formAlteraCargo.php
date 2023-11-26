<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altera Cargo</title>
</head>
<?php
$idcargo = $_POST['idcargo'];
$descricao = $_POST['descricao'];
?>
<body>

<?php 
require_once '../sidebar/index.php';
?>

<section class="home-section">
    <div class="home-content">
        <i class='bx bx-menu'></i>
    </div>
    <br>

    <h1>Edição do Cargo</h1>
    <form action="update.php" method="post">

        <input type="hidden" id="idcargo" name="idcargo" value="<?= $idcargo ?>"><br>

        <label for="descricao">Nome do Cargo:</label>
        <input type="text" id="descricao" name="descricao" value="<?= $descricao ?>"><br>

        <button>Salvar</button>

    </form>

</section>

<script src="../sidebar/script.js"></script>
</body>

</html>
