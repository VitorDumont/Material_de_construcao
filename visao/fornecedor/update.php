<?php
 require_once '../sidebar/index.php';

require_once BASE . '/Modelo/Fornecedor.php';
require_once BASE . '/Database/DAOFornecedor.php';
require_once BASE . '/Database/Conexao.php';

$idfornecedor = $_POST['idfornecedor'];
$nome = $_POST['nome'];
$endereco = $_POST['endereço'];
$contato = $_POST['contato'];
$cnpj = $_POST['cnpj'];

$fornecedor = new Fornecedor($nome, $endereco, $contato, $cnpj, $idfornecedor);

       
    ?>



<section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
    </div>
    <br>

    <?php 
$dao = new DAOFornecedor();
if ($dao->altera($fornecedor)) {
    echo 'Editou.';
    echo "<br>";
} else {
    echo 'Algum erro.';
    echo "<br>";
}
?>

</section>

<script src="../sidebar/script.js"></script>
