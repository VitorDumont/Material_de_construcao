<?php


require_once '../sidebar/index.php';

require_once BASE . '/Modelo/Cargo.php'; 
require_once BASE . '/Database/DAOCargo.php';
require_once BASE . '/Database/Conexao.php';

$idcargo = $_POST['idcargo'];
$descricao = $_POST['descricao'];

$cargo = new Cargo($descricao, $idcargo);

?>

<section class="home-section">
    <div class="home-content">
        <i class='bx bx-menu' ></i>
    </div>
    <br>

    <?php
    $dao = new DAOCargo(); 

    if ($dao->altera($cargo)) {
        echo 'Editou.';
        echo "<br>";
    } else {
        echo 'Algum erro.';
        echo "<br>";
    }
    ?>

</section>

<script src="../sidebar/script.js"></script>

</body>
</html>
