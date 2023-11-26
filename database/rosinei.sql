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

--
-- Database: `projetoaulai3b2023`
--

-- --------------------------------------------------------

--
-- Table structure for table `itemvenda`
--

CREATE TABLE `itemvenda` (
  `id` int(11) NOT NULL,
  `idVenda` int(11) NOT NULL,
  `idProduto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `precoVenda` decimal(10,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itemvenda`
--

INSERT INTO `itemvenda` (`id`, `idVenda`, `idProduto`, `quantidade`, `precoVenda`) VALUES
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
    
    set new.precoVenda = 
        (select preco from peca where id = new.idProduto);

    update venda set valor = (valor + new.quantidade * new.precoVenda) 
        where id = new.idVenda;
        
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `peca`
--

CREATE TABLE `peca` (
  `id` int(11) NOT NULL,
  `fabricante` varchar(256) NOT NULL,
  `nome` varchar(256) NOT NULL,
  `preco` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peca`
--

INSERT INTO `peca` (`id`, `fabricante`, `nome`, `preco`) VALUES
(1, 'Silva Prado', 'Arruela Inox 3mm', 0.80),
(2, 'Plasticidando', 'Kit Tapete Golf 2010 Preto', 150.00),
(3, 'Brisa Inox', 'Arruela Inox 3mm', 0.70),
(4, 'Silas Plásticos', 'Kit Tapete Golf 2010 Preto', 100.50),
(5, 'Capivaril', 'Pneu 165/85 Sempre Leve', 220.00),
(6, 'Continental', 'Pneu 185/75 Barro Molhado', 387.00);

-- --------------------------------------------------------

--
-- Table structure for table `reservadelocacao`
--

CREATE TABLE `reservadelocacao` (
  `id` int(11) NOT NULL,
  `id_veiculo` int(11) NOT NULL,
  `nome_cliente` varchar(256) NOT NULL,
  `data_retirada` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `veiculo`
--

CREATE TABLE `veiculo` (
  `id` int(11) NOT NULL,
  `fabricante` varchar(128) NOT NULL,
  `modelo` varchar(128) NOT NULL,
  `ano` int(11) NOT NULL,
  `placa` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `veiculo`
--

INSERT INTO `veiculo` (`id`, `fabricante`, `modelo`, `ano`, `placa`) VALUES
(1, 'VW', 'Fusca', 2050, 'FSP-1245'),
(2, 'Ford', 'Maverick', 2023, 'LLP-jahsd'),
(3, 'Chevrolet', 'Cobalt', 2018, '0'),
(4, 'Chevrolet', 'Celta', 2018, '0'),
(5, 'Chevrolet', 'Celta', 2018, 'HUL-1214'),
(6, 'Blitz', 'Xarui', 2023, 'BTX-2565'),
(7, 'Blitz', 'Xarui', 2023, 'BTX-2565'),
(8, 'Blitz', 'Xarui', 2023, 'BTX-2565'),
(9, 'Blitz', 'Xarui', 2023, 'BTX-2565');

-- --------------------------------------------------------

--
-- Table structure for table `venda`
--

CREATE TABLE `venda` (
  `id` int(11) NOT NULL,
  `cliente` varchar(256) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp(),
  `valor` decimal(10,2) NOT NULL DEFAULT 0.00,
  `aberta` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `venda`
--

INSERT INTO `venda` (`id`, `cliente`, `data`, `valor`, `aberta`) VALUES
(8, 'Alice Melias Brás', '2023-06-21 18:32:12', '371.50', 0),
(9, 'Homero Dante', '2023-06-21 18:35:55', '690.50', 0),
(10, 'Homero Dantes', '2023-06-21 18:37:40', '520.70', 0),
(11, 'Denis Ritchie', '2023-06-21 18:40:10', '3011.90', 0),
(12, 'Tanos Filmes', '2023-06-21 18:41:11', '559.60', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `itemvenda`
--
ALTER TABLE `itemvenda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idVenda` (`idVenda`),
  ADD KEY `idProduto` (`idProduto`);

--
-- Indexes for table `peca`
--
ALTER TABLE `peca`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservadelocacao`
--
ALTER TABLE `reservadelocacao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_veiculo` (`id_veiculo`);

--
-- Indexes for table `veiculo`
--
ALTER TABLE `veiculo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `itemvenda`
--
ALTER TABLE `itemvenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `peca`
--
ALTER TABLE `peca`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reservadelocacao`
--
ALTER TABLE `reservadelocacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `veiculo`
--
ALTER TABLE `veiculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `venda`
--
ALTER TABLE `venda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `itemvenda`
--
ALTER TABLE `itemvenda`
  ADD CONSTRAINT `itemvenda_ibfk_1` FOREIGN KEY (`idVenda`) REFERENCES `venda` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `itemvenda_ibfk_2` FOREIGN KEY (`idProduto`) REFERENCES `peca` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `reservadelocacao`
--
ALTER TABLE `reservadelocacao`
  ADD CONSTRAINT `reservadelocacao_ibfk_1` FOREIGN KEY (`id_veiculo`) REFERENCES `veiculo` (`id`) ON UPDATE CASCADE;
COMMIT;
