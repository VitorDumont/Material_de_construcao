<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Produto</title>
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

    <h1>Novo Produto</h1>
    <?php



    require_once '../../modelo/Produto.php';
    require_once '../../database/Conexao.php';
    require_once '../../database/DaoProduto.php';

    $fornecedor = $_POST['SelectFornecedor'];
    $nome = $_POST['nome'];
    $estoque = $_POST['estoque'];
    $preco = $_POST['preco'];
 

    $produto = new Produto(null,$fornecedor, $nome, $estoque, $preco);
    $daoProduto = new DaoProduto();

    if ($daoProduto->inclui($produto)) {
        echo 'Produto cadastrado com sucesso.';
    } else {
        echo 'Ocorreu um erro ao cadastrar o produto.';
    }
    ?>
     <br><br>
  
  <button class="butao"><a href="formNovoProduto.php" style="text-decoration:none">Adicionar mais um Produto</a></button>
    </section>

<script src="../sidebar/script.js"></script>
</body>

</html>
