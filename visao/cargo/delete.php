<?php
require_once '../sidebar/index.php';

require_once BASE . '/Modelo/Cargo.php';
require_once BASE . '/Database/DAOCargo.php';
require_once BASE . '/Database/Conexao.php';

$id = $_POST['idcargo'];
$daoCargo = new DAOCargo();

?>

<section class="home-section">
    <div class="home-content">
        <i class='bx bx-menu'></i>
    </div>
    <br>
    <?php

    if ($daoCargo->exclui($id)) {
        echo 'Excluiu.';
        echo "<br>";
    } else {
        echo 'Algum erro.';
        echo "<br>";
    }
    ?>
    <h1>Lista de Cargos</h1>
    <button><a href="listaCargos.php" style="text-decoration:none">Listar Cargos</a></button>
</section>

<script src="../sidebar/script.js"></script>
