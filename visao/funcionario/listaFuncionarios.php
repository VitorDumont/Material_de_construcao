<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Funcionários</title>
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

    <h1>Listagem de Funcionários</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>ENDEREÇO</th>
            <th>CONTATO</th>
            <th>CPF</th>
            <th>SALÁRIO</th>
            <th>CARGO</th>
            <th class="acao-th" colspan="2">AÇÕES</th>
        </tr>
        <?php
        
        require_once '../../modelo/Funcionario.php';
        require_once '../../database/Conexao.php';
        require_once '../../database/DaoFuncionario.php';

        $DaoFuncionario = new DaoFuncionario();
        $lista = $DaoFuncionario->listaTodos();

        foreach ($lista as $registro) {
            echo '<tr>';
            echo '<td>' . $registro['idfuncionario'] . '</td>';
            echo '<td>' . $registro['nome'] . '</td>';
            echo '<td>'. $registro['email'] . '</td>';
            echo '<td>' . $registro['endereço'] . '</td>';
            echo '<td>' . $registro['contato'] . '</td>';
            echo '<td>' . $registro['cpf'] . '</td>';
            echo '<td>' . $registro['salario'] . '</td>';
            echo '<td>' . $registro['cargo_descricao'] . '</td>';
            ?>
            <td>
                <form action="delete.php" method="post">
                    <input type="hidden" name="idfuncionario" id="idfuncionario" value="<?= $registro['idfuncionario'] ?>">
                    <button>Excluir</button>
                </form>
            </td>
            <td>
                <form action="formAlteraFuncionario.php" method="post">
                    <input type="hidden" name="idfuncionario" id="idfuncionario" value="<?= $registro['idfuncionario'] ?>">
                    <input type="hidden" name="nome" id="nome" value="<?= $registro['nome'] ?>">
                    <input type="hidden" name="email" id="email" value="<?= $registro['email'] ?>">
                    <input type="hidden" name="senha" id="senha" value="<?= $registro['senha'] ?>">
                    <input type="hidden" name="endereço" id="endereço" value="<?= $registro['endereço'] ?>">
                    <input type="hidden" name="contato" id="contato" value="<?= $registro['contato'] ?>">
                    <input type="hidden" name="cpf" id="cpf" value="<?= $registro['cpf'] ?>">
                    <input type="hidden" name="salario" id="salario" value="<?= $registro['salario'] ?>">
                    <input type="hidden" name="cargo" id="cargo" value="<?= $registro['cargo_descricao'] ?>">
                    <button>Editar</button>
                </form>
            </td>
            <?php
            echo '</tr>';
        }
        ?>
    </table>

    </section>

<script src="../sidebar/script.js"></script>
</body>

</html>
