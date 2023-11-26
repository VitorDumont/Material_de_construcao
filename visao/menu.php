<?php
$URL_BASE = 'http://' . $_SERVER['HTTP_HOST'] . '/material_de_construcao';
define('FOLDER', 'macaco');

echo "<a href='$URL_BASE/index.php'>Início</a><br>";
echo "<a href='$URL_BASE/visao/venda/formNovaVenda.php'>Cadastrar venda</a><br>";
echo "<a href='$URL_BASE/visao/venda/listaVendas.php'>Listar vendas</a><br>";
echo "<a href='$URL_BASE/visao/cliente/formNovoCliente.php'>Cadastrar Cliente</a><br>";
echo "<a href='$URL_BASE/visao/cliente/listaClientes.php'>Listar Clientes</a><br>";
echo "<a href='$URL_BASE/visao/Fornecedor/formNovoFornecedor.php'>Cadastrar Fornecedor</a><br>";
echo "<a href='$URL_BASE/visao/Fornecedor/listaFornecedores.php'>Listar Fornecedores</a><br>";