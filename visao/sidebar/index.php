<?php
define('BASE', $_SERVER['DOCUMENT_ROOT'] . '\material_de_construcao');

include BASE . '/protect.php';

?>
<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Dashboard</title>
    <link rel="stylesheet" href="./visao/sidebar/style.css">
    
    <link rel="stylesheet" href="../sidebar/style.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   
<body>
  
  <div class="sidebar close">
    <div class="logo-details">
    <i class='bx bxs-store-alt' ></i>
      <span class="logo_name">VEGD - LTDA</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="http://localhost/Material_de_construcao/dashboard.php">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="http://localhost/Material_de_construcao/dashboard.php">Dashboard</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-plus-circle' ></i>
            <span class="link_name">Cadastrar</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Cadastrar</a></li>
          <li><a href="http://localhost/Material_de_construcao/visao/produto/formnovoProduto.php">Produto</a></li>
          <li><a href="http://localhost/Material_de_construcao/visao/cliente/formnovoCliente.php">Cliente</a></li>
          <li><a href="http://localhost/Material_de_construcao/visao/funcionario/formNovoFuncionario.php">Funcionário</a></li>
          <li><a href="http://localhost/Material_de_construcao/visao/fornecedor/formNovoFornecedor.php">Fornecedor</a></li>
          <li><a href="http://localhost/Material_de_construcao/visao/cargo/formNovocargo.php">Cargo</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Consultar</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Consultar</a></li>
          <li><a href="http://localhost/Material_de_construcao/visao/cliente/listaClientes.php">Cliente</a></li>
          <li><a href="http://localhost/Material_de_construcao/visao/produto/listaprodutos.php">Produto</a></li>
          <li><a href="http://localhost/Material_de_construcao/visao/funcionario/listafuncionarios.php">Funcionário</a></li>
          <li><a href="http://localhost/Material_de_construcao/visao/fornecedor/listaFornecedores.php">Fornecedor</a></li>
          <li><a href="http://localhost/Material_de_construcao/visao/cargo/listaCargos.php">Cargo</a></li>

        </ul>
      </li>
      <li>
        <a href="http://localhost/Material_de_construcao/visao/venda/formNovaVenda.php">
          <i class='bx bx-cart'></i>
          <span class="link_name">Vender</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="http://localhost/Material_de_construcao/visao/venda/formNovaVenda.php">Vender</a></li>
        </ul>
      </li>
      <li>
        <a href="http://localhost/Material_de_construcao/visao/compra/formNovaCompra.php">
          <i class='bx bx-package'></i>
          <span class="link_name">Comprar</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="http://localhost/Material_de_construcao/visao/compra/formNovaCompra.php">Comprar</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-wallet' ></i>
            <span class="link_name">Extrato</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Extrato</a></li>
          <li><a href="http://localhost/Material_de_construcao/visao/compra/listaCompras.php">Compras</a></li>
          <li><a href="http://localhost/Material_de_construcao/visao/venda/listaVendas.php">Vendas</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bxs-file'></i>
          <span class="link_name">Nota Fiscal</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Nota Fiscal</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Configurações</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Configurações</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-compass' ></i>
          <span class="link_name">Contato</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Contato</a></li>
        </ul>
      </li>
      <li>
    <div class="profile-details">
      <div class="profile-content">
        <img src="/Material_de_construcao/visao/sidebar/image/logo.png " alt="profileImg">
      </div>
      <div class="name-job">
        <div class="profile_name">ERP</div>
        <div class="job">M. Construção</div>
      </div>
      <a href="/material_de_construcao/logout.php"><i class='bx bx-log-out' ></i></a>
      
      
    </div>
  </li>
</ul>
  </div>
  

  

</body>
</html>
