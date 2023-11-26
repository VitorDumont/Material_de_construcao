<?php
include('./database/Conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo '<script>alert("Preencha seu email")</script>';
    } else if(strlen($_POST['senha']) == 0) {
        echo '<script>alert("Preencha sua senha")</script>';
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM funcionario WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL");

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $funcionario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['idfuncionario'] = $funcionario['idfuncionario'];
            $_SESSION['nome'] = $funcionario['nome'];
            $_SESSION['email'] = $funcionario['email'];
          
            header("Location: dashboard.php");

        } else {
            echo '<script>alert("Falha ao logar! E-mail ou senha incorretos")</script>';
        }

    }

}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="mainlogin"> 
        <div class="leftlogin">
            <h1>Faça Login<br> entre para o nosso time</h1>
            <img src="./image/cabana.svg" class="imagem" alt="imagem">
        </div>
        <div class="rightlogin">

        <form action="" method="POST">
            <div class="cardlogin">
                <h1>LOGIN</h1>
                
                <div class="TextField">
                    <label for="usuario">Usuário</label>
                      <input type="text" id="email" name="email" placeholder="Usuário">
                </div>
                <div class="TextField">
                    <label for="Senha">Senha</label>
                     <input type="password" id="senha" name="senha" placeholder="Senha">
                </div>
                <button type="submit" class="btn-login">Login</button>
        </div>
    </div>
</form>
    </div>

<script type="text/javascript" src="script.js"></script>

</body>
</html>