<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração do Produto</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
<?php 
        require_once '../sidebar/index.php';
    ?>


<section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
    </div>
    <br>
    <h1>Alteração do Produto</h1>
    <?php
        require_once '../../modelo/Produto.php';
        require_once '../../database/Conexao.php';
        require_once '../../database/DaoProduto.php';

        $id = $_POST['idproduto'];
        $fornecedor = $_POST['fornecedor'];
        $nome = $_POST['nome'];
        $estoque = $_POST['estoque'];
        $preco = $_POST['preco'];

        $produto = new Produto(
            $id,
            $fornecedor,
            $nome,
            $estoque,
            $preco
        );

        $dao = new DaoProduto();
        if ($dao->altera($produto)) {
            echo 'Produto editado com sucesso.';
        } else {
            echo 'Ocorreu um erro ao editar o produto.';
        }
    ?>
    </section>

<script src="../sidebar/script.js"></script>
</body>
</html>
