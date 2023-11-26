<?php

require_once '../sidebar/index.php';

require_once BASE . '/Modelo/cliente.php';
require_once BASE . '/Database/DAOcliente.php';
require_once BASE . '/Database/Conexao.php';

$id = $_POST['idcliente'];
$daocliente = new DAOCliente();
    ?>

<section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
    </div>
    <br>
    <?php
    
if($daocliente->exclui($id)){
    echo 'Excluiu.';
    echo "<br>";
} else {
    echo 'Zebrou.';
    echo "<br>";
}
?>
 <h1>Lista Cliente</h1>
    <button><a href="listaClientes.php" style="text-decoration:none"> Listar Clientes</a></button>

    </section>

<script src="../sidebar/script.js"></script>