<?php

include('../../protect.php');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Compra</title>
    </head>
    <body>
        <h1>Cadastro de Compra</h1>
        <?php
        require_once '../../modelo/Compra.php';
        require_once '../../database/Conexao.php';
        require_once '../../database/DaoCompra.php';
        require_once '../../database/DaoFornecedor.php';
        require_once '../../database/DaoProduto.php';

        $fornecedor = $_POST['SelectFornecedor'];
        



if (isset($_POST['SelectFornecedor'])) {
    $fornecedor = $_POST['SelectFornecedor'];
    $_SESSION['fornecedor'] = $fornecedor;
    header("location: formCadastroItemCompra.php");
} else {
    // Lida com o caso em que 'SelectFornecedor' não foi enviado.
    echo 'Fornecedor não especificado.';
}


        $compra = new Compra(null, $fornecedor, null, null, 0, null);


        $daoCompra = new DaoCompra();

        $daoProduto = new DaoProduto();

   
        if($idDaCompra = $daoCompra->abrirCompra($compra)) {
            //echo 'Compra cadastrada com sucesso. Código: ';
            session_start();
            $_SESSION['compraaberta'] = $idDaCompra;
            header("location: formCadastroItemCompra.php");
        } else {
            echo 'Deu ruim.';
        }

        ?>
     
<?php

if (isset($_SESSION['fornecedor'])) {
    $fornecedor = $_SESSION['fornecedor'];
} else {
    // Lidar com a situação em que a variável de sessão não está definida
    // Pode ser útil definir um valor padrão ou redirecionar de volta à página anterior
    // caso a variável não esteja definida.
    $fornecedor = "Valor_Padrao"; // Defina um valor padrão ou ajuste conforme necessário.
}?>

        
    </body>
</html>
