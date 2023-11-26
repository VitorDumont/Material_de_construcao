<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração do Funcionário</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
 
   
    <?php
        require_once '../../modelo/Funcionario.php';
        require_once '../../database/Conexao.php';
        require_once '../../database/DaoFuncionario.php';

        $id = $_POST['idfuncionario'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $endereco = $_POST['endereço'];
        $contato = $_POST['contato'];
        $cpf = $_POST['cpf'];
        $salario = $_POST['salario'];
        $cargo = $_POST['cargo'];

        $funcionario = new Funcionario(
            $id,
            $nome,
            $email,
            $senha,
            $endereco,
            $contato,
            $cpf,
            $salario,
            $cargo
        );

        
        require_once '../sidebar/index.php';
    ?>


<section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
    </div>
    <br>
    <h1>Alteração do Funcionário</h1>
    <?php 
        $dao = new DaoFuncionario();
        if ($dao->altera($funcionario)) {
            echo 'Funcionário editado com sucesso.';
        } else {
            echo 'Ocorreu um erro ao editar o funcionário.';
        }
    ?>

</section>

<script src="../sidebar/script.js"></script>
</body>
</html>
