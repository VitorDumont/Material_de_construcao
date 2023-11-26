-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 21, 2023 at 08:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

create database materiais_construcao;
use materiais_construcao;
--
-- Database: `material_construcao`
--

-- --------------------------------------------------------


create table usuario (
idusuario int(4) NOT NULL AUTO_INCREMENT,
usuario varchar (100) NOT NULL,
senha varchar(100) NOT NULL,
PRIMARY KEY (idusuario)
);

INSERT INTO usuario (usuario, senha)
VALUES
  ("admin", "12345");


CREATE TABLE `itemvenda` (
  `iditemvenda` int(4) NOT NULL  AUTO_INCREMENT,
  `Venda` int(11) NOT NULL,
  `Produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `preco` decimal(10,2) NOT NULL DEFAULT 0.00,
  PRIMARY KEY (iditemvenda),
  FOREIGN KEY (produto) REFERENCES produto(idproduto),
  FOREIGN KEY (venda) REFERENCES venda(idvenda)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `itemcompra` (
  `iditemcompra` int(4) NOT NULL  AUTO_INCREMENT,
  `Compra` int(11) NOT NULL,
  `Produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `preco` decimal(10,2) NOT NULL DEFAULT 0.00,
  PRIMARY KEY (iditemcompra),
  FOREIGN KEY (produto) REFERENCES produto(idproduto),
  FOREIGN KEY (compra) REFERENCES compra(idcompra)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
--
-- Dumping data for table `itemvenda`
--

INSERT INTO `itemvenda` (`iditemvenda`, `Venda`, `Produto`, `quantidade`, `preco`) VALUES
(32, 8, 1, 1, '0.80'),
(33, 8, 2, 2, '150.00'),
(34, 8, 3, 4, '0.70'),
(35, 8, 5, 8, '220.00'),
(36, 9, 4, 2, '100.50'),
(37, 9, 2, 2, '150.00'),
(38, 9, 5, 6, '220.00'),
(39, 9, 5, 6, '220.00'),
(40, 10, 2, 1, '150.00'),
(41, 10, 2, 2, '150.00'),
(42, 10, 3, 3, '0.70'),
(43, 10, 5, 4, '220.00'),
(44, 11, 1, 1, '0.80'),
(45, 11, 2, 2, '150.00'),
(46, 11, 3, 3, '0.70'),
(47, 11, 6, 7, '387.00'),
(48, 12, 2, 3, '150.00'),
(49, 12, 4, 1, '100.50'),
(50, 12, 3, 5, '0.70'),
(51, 12, 3, 8, '0.70');

--
-- Triggers `itemvenda`
--
DELIMITER $$
CREATE TRIGGER `itemvendaafterinsert` BEFORE INSERT ON `itemvenda` FOR EACH ROW BEGIN
    
    set new.preco = 
        (select preco from produto where idproduto = new.Produto);

    update venda set valor = (valor + new.quantidade * new.preco) 
        where idvenda = new.Venda;
        
END
$$
DELIMITER ;

DELIMITER $$
CREATE TRIGGER `itemcompraafterinsert` BEFORE INSERT ON `itemcompra` FOR EACH ROW BEGIN
    
    set new.preco = 
        (select preco from produto where idproduto = new.Produto);

    update compra set valor = (valor + new.quantidade * new.preco) 
        where idcompra = new.Compra;
        
END
$$
DELIMITER ;

-- --------------------------------------------------------


create table produto (
idproduto int(4) NOT NULL AUTO_INCREMENT,
fornecedor int(11) NOT NULL,
nome varchar (100) NOT NULL,
estoque int(4) NOT NULL,
preco double (8, 2) not null,
PRIMARY KEY (idproduto),
FOREIGN KEY (fornecedor) REFERENCES fornecedor(idfornecedor)
);



INSERT INTO `produto` (`idproduto`, `fornecedor`, `nome`, `estoque`, `preco`) VALUES
(1, 1, 'Arruela Inox 3mm',10, 0.80),
(2, 1, 'Kit Tapete Golf 2010 Preto', 10,150.00),
(3, 1, 'Arruela Inox 3mm',10, 0.70),
(4, 1, 'Kit Tapete Golf 2010 Preto',10, 100.50),
(5, 1, 'Pneu 165/85 Sempre Leve',10, 220.00),
(6, 1, 'Pneu 185/75 Barro Molhado',10, 387.00);

-- --------------------------------------------------------

--------------------------------------------

--
-- Table structure for table `venda`
--

CREATE TABLE `venda` (
  `idvenda` int(11) NOT NULL AUTO_INCREMENT,
  cliente int(11) NOT NULL,
  `funcionario` varchar(256),
  `data` timestamp NOT NULL DEFAULT current_timestamp(),
  `valor` decimal(10,2) NOT NULL DEFAULT 0.00,
  `aberta` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (idvenda),
  FOREIGN KEY (cliente) REFERENCES cliente(idcliente)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `compra` (
  `idcompra` int(11) NOT NULL AUTO_INCREMENT,
  fornecedor int(11) NOT NULL,
  `funcionario` varchar(256),
  `data` timestamp NOT NULL DEFAULT current_timestamp(),
  `valor` decimal(10,2) NOT NULL DEFAULT 0.00,
  `aberta` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (idcompra),
  FOREIGN KEY (fornecedor ) REFERENCES fornecedor (idfornecedor )
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Dumping data for table `venda`
--

INSERT INTO `venda` (`idvenda`, `cliente`, funcionario, `data`, `valor`, `aberta`) VALUES
(8, 1,'Alice Melias Brás', '2023-06-21 18:32:12', '371.50', 0),
(9, 1, 'Alice Melias Brás','2023-06-21 18:35:55', '690.50', 0),
(10, 1,'Alice Melias Brás', '2023-06-21 18:37:40', '520.70', 0),
(11, 1,'Alice Melias Brás', '2023-06-21 18:40:10', '3011.90', 0),
(12, 1, 'Alice Melias Brás','2023-06-21 18:41:11', '559.60', 0);

--

create table cliente (
idcliente int(4) NOT NULL AUTO_INCREMENT,
nome varchar (100) NOT NULL,
endereço varchar(100) NOT NULL,
contato varchar(20) NOT NULL,
cpf varchar(20) NOT NULL,
PRIMARY KEY (idcliente)
);

INSERT INTO cliente (idcliente,nome,endereço,contato,cpf)
VALUES
  (1,"Aline Little","Guápiles","1-922-347","40193113-9"),
  (2,"Vaughan Ochoa","Omsk","(844) 39","35254482-5"),
  (3,"Abraham Douglas","Gansu","(340) 167","24996612-6");
  
  select * from cliente;
  
create table fornecedor (
idfornecedor int(4) NOT NULL AUTO_INCREMENT,
nome varchar (100) NOT NULL,
endereço varchar(100) NOT NULL,
contato varchar(20) NOT NULL,
cnpj varchar (25) not null,
PRIMARY KEY (idfornecedor)
);

INSERT INTO fornecedor (idfornecedor,nome,endereço,contato,cnpj)
VALUES
  (1,"Aline Little","Guápiles","1-922-347","40193113-9"),
  (2,"Vaughan Ochoa","Omsk","(844) 39","35254482-5"),
  (3,"Abraham Douglas","Gansu","(340) 167","24996612-6");
  
  
  
create table cargo (
idcargo int(4) NOT NULL AUTO_INCREMENT,
descricao varchar (100) NOT NULL,
PRIMARY KEY (idcargo)
);


create table funcionario(
idfuncionario int(4) NOT NULL AUTO_INCREMENT,
nome varchar (100) NOT NULL,
endereço varchar(100) NOT NULL,
contato varchar(20) NOT NULL,
cpf varchar(20) NOT NULL,
salario float (8, 2)NOT NULL,
cargo int(11) NOT NULL,
PRIMARY KEY (idfuncionario),
FOREIGN KEY (cargo) REFERENCES cargo(idcargo)
);

