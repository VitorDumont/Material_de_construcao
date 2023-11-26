<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição do Produto</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<?php
    $id = $_POST['idproduto'];
    $fornecedor = $_POST['fornecedor'];
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $estoque = $_POST['estoque'];
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
    
    <h1>Edição do Produto</h1>
    <form action="update.php" method="post">

        <input type="hidden" id="idproduto" name="idproduto" value="<?= $id ?>"><br>
        
        <label for="fornecedor">Fornecedor</label><br>
        <select name="fornecedor" id="fornecedor">
            <?php
            require_once '../../database/Conexao.php';
            require_once '../../database/DaoFornecedor.php';
            $DaoFornecedor = new DaoFornecedor();
            $fornecedores = $DaoFornecedor->listaTodos();

           foreach ($fornecedores as $fornecedorItem) {
    $selected = ($fornecedorItem['idfornecedor'] == $fornecedor) ? "selected" : "";
    echo '<option value="' . $fornecedorItem['idfornecedor'] . '" ' . $selected . '>' .$fornecedorItem['nome'] . '</option>';
}

            ?>
        </select><br>
        
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" value="<?= $nome ?>"><br>

        <label for="preco">Preço</label>
        <input type="text" id="preco" name="preco" value="<?= $preco ?>"><br>

        <label for="preco">Estoque</label>
        <input type="text" id="estoque" name="estoque" value="<?= $estoque ?>"><br>

        <button>Salvar</button>
    </form>

    </section>

<script src="../sidebar/script.js"></script>
</body>

</html>
