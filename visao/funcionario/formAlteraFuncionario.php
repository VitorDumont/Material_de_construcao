<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição do Funcionário</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<?php
    $id = $_POST['idfuncionario'];
    $nome = $_POST['nome'];
    $email= $_POST['email'];
    $senha = $_POST['senha'];
    $endereco = $_POST['endereço'];
    $contato = $_POST['contato'];
    $cpf = $_POST['cpf'];
    $salario = $_POST['salario'];
    $cargo = $_POST['cargo'];
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
    
    <h1>Edição do Funcionário</h1>
    <form action="update.php" method="post">

        <input type="hidden" id="idfuncionario" name="idfuncionario" value="<?= $id ?>"><br>
        
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" value="<?= $nome ?>"><br>

        <label for="email">Email</label>
        <input type="text" id="email" name="email" value="<?= $email ?>"><br>

        <label for="senha">Senha</label>
        <input type="text" id="senha" name="senha" value="<?= $senha ?>"><br>

        <label for="endereço">Endereço</label>
        <input type="text" id="endereço" name="endereço" value="<?= $endereco ?>"><br>

        <label for="contato">Contato</label>
        <input type="text" id="contato" name="contato" value="<?= $contato ?>"><br>

        <label for="cpf">CPF</label>
        <input type="text" id="cpf" name="cpf" value="<?= $cpf ?>"><br>

        <label for="salario">Salário</label>
        <input type="text" id="salario" name="salario" value="<?= $salario ?>"><br>

        <label for="cargo">Cargo</label><br>
        <select name="cargo" id="cargo">
            <?php
            require_once '../../database/Conexao.php';
            require_once '../../database/DaoCargo.php';
            $DaoCargo = new DaoCargo();
            $cargo = $DaoCargo->listaTodos();

            foreach ($cargo as $cargo) {
                $selected = ($cargo['idcargo'] == $cargo) ? "selected" : "";
                echo '<option value="' . $cargo['idcargo'] . '">' .$cargo['descricao'] . '</option>';
            }
            ?>
        </select><br>

        <button>Salvar</button>
    </form>

    </section>

<script src="../sidebar/script.js"></script>
</body>

</html>
