<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Funcionário</title>
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
    

    <h1>Novo Funcionário</h1>
    <?php
    require_once '../../modelo/Funcionario.php';
    require_once '../../database/Conexao.php';
    require_once '../../database/DaoFuncionario.php';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $endereco = $_POST['endereco'];
    $contato = $_POST['contato'];
    $cpf = $_POST['cpf'];
    $salario = $_POST['salario'];
    $cargo = $_POST['SelectCargo'];

    
    $funcionario = new Funcionario(null, $nome, $email, $senha, $endereco, $contato, $cpf, $salario, $cargo);
    $daoFuncionario = new DaoFuncionario();

    if ($daoFuncionario->inclui($funcionario)) {
        echo 'Funcionário cadastrado com sucesso.';
    } else {
        echo 'Ocorreu um erro ao cadastrar o funcionário.';
    }
    ?>
     <br><br>
  
  <button class="butao"><a href="formNovoFuncionario.php" style="text-decoration:none">Adicionar mais um Funcionario</a></button>

</section>

<script src="../sidebar/script.js"></script>
</body>

</html>
