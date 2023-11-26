<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exclusão do Funcionário</title>
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
        <h1>Exclusão do Funcionário</h1>
        <?php
        require_once '../../database/Conexao.php';
        require_once '../../database/DaoFuncionario.php';
        
        $id = $_POST['idfuncionario'];
        
        $daoFuncionario = new DaoFuncionario();
        
        if($daoFuncionario->exclui($id)){
            echo 'Funcionário excluído com sucesso.';
        } else {
            echo 'Ocorreu um erro ao excluir o funcionário.';
        }
        ?>

</section>

<script src="../sidebar/script.js"></script>
    </body>
</html>
