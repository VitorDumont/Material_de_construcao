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
    <form action="novoProduto.php" method="post">

        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome"><br>

        <label for="estoque">Estoque</label>
        <input type="text" id="estoque" name="estoque"><br>

        <label for="preco">Preço</label>
        <input type="text" id="preco" name="preco"><br>

        <label for="fornecedor">Fornecedor</label>
        <select name="SelectFornecedor" id="SelectFornecedor">
                <?php
                require_once '../../database/Conexao.php';
                require_once '../../database/DaoFornecedor.php';
                $DaoFornecedor = new DaoFornecedor();
                $lista = $DaoFornecedor->listaTodos();
                foreach ($lista as $fornecedor) {
                    echo '<option value="' . $fornecedor['idfornecedor'] . '">' .$fornecedor['nome'] . '</option>';
                }
                ?>
    </select><br><br>

        <button>Salvar</button>
        <button type="reset">Limpar</button>
    </form>

    </section>

<script src="../sidebar/script.js"></script>
</body>

</html>
