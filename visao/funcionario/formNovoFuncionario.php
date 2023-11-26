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
    <form action="novoFuncionario.php" method="post">

        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome"><br>

        <label for="email">Email</label>
        <input type="text" id="email" name="email"><br>

        <label for="senha">Senha</label>
        <input type="text" id="senha" name="senha"><br>

        <label for="endereço">Endereço</label>
        <input type="text" id="endereco" name="endereco"><br>

        <label for="contato">Contato</label>
        <input type="text" id="contato" name="contato"><br>

        <label for="cpf">CPF</label>
        <input type="text" id="cpf" name="cpf"><br>

        <label for="salario">Salário</label>
        <input type="text" id="salario" name="salario"><br>

        <label for="cargo">Cargo</label>
        <select name="SelectCargo" id="SelectCargo">
                <?php
                require_once '../../database/Conexao.php';
                require_once '../../database/DaoCargo.php';
                $DaoCargo = new DaoCargo();
                $lista = $DaoCargo->listaTodos();
                foreach ($lista as $cargo) {
                    echo '<option value="' . $cargo['idcargo'] . '">' .$cargo['descricao'] . '</option>';
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
