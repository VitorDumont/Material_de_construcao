<?php


require_once BASE . '/Modelo/Cliente.php';
require_once BASE . '/Database/DAOCliente.php';
require_once BASE . '/Database/Conexao.php';

$idcliente = $_POST['id'];
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$contato = $_POST['contato'];
$cpf = $_POST['cpf'];

$cliente = new Cliente($nome, $endereco, $contato, $cpf, $idcliente);


        require_once '../sidebar/index.php';
    ?>

<section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
    </div>
    <br>
    <?php


$dao = new DAOCliente();
if ($dao->altera($cliente)) {
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
