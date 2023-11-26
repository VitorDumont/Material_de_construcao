<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Compra</title>
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

    <h1>Cadastro de Compra</h1>
    
    <form action="abrirCompra.php" method="post">

        <label for="fornecedor">Fornecedor</label><br>
        <select name="SelectFornecedor" id="SelectFornecedor" >
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


       
        <button>Abrir compra</button>
    </form>


    
    
</section>

<script src="../sidebar/script.js"></script>
</body>
</html>
