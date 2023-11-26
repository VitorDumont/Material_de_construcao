<?php

require_once '../sidebar/index.php';

require_once BASE . '/Modelo/fornecedor.php';
require_once BASE . '/Database/DAOfornecedor.php';
require_once BASE . '/Database/Conexao.php';

$id = $_POST['idfornecedor'];
$daofornecedor = new DAOFornecedor();
?>



<section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
    </div>
    <br>
    <?php
if($daofornecedor->exclui($id)){
    echo 'Excluiu.';
    echo "<br>";
} else {
    echo 'Zebrou.';
    echo "<br>";
}
?>


</section>

<script src="../sidebar/script.js"></script>