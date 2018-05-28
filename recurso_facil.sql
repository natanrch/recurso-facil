-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 28, 2018 at 04:28 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.1.17-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recurso_facil`
--

-- --------------------------------------------------------

--
-- Table structure for table `recursos`
--

CREATE TABLE `recursos` (
  `id` int(11) NOT NULL,
  `auto_de_infracao` varchar(20) NOT NULL,
  `usuario` int(11) NOT NULL,
  `cnh` varchar(20) NOT NULL,
  `cnh_arquivo` varchar(60) NOT NULL,
  `endereco_arquivo` varchar(60) NOT NULL,
  `multa_arquivo` varchar(60) NOT NULL,
  `comprovante_taxa_arquivo` varchar(60) NOT NULL,
  `procuracao_arquivo` varchar(60) DEFAULT NULL,
  `outros_documentos` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `endereco` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `identidade_arquivo` mediumblob NOT NULL,
  `endereco_arquivo` mediumblob NOT NULL,
  `selfie_arquivo` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `rg`, `cpf`, `endereco`, `senha`, `email`, `identidade_arquivo`, `endereco_arquivo`, `selfie_arquivo`) VALUES
(1, 'Natan', '388092', '91586160206', 'avenida vinte e seis de julho 123', 'meupau', 'meu pau', 0x32303137303930365f3135343035372e6a7067, 0x32303137303930365f3135343035372832292e6a7067, 0x32303137303930365f3135343035372831292e6a7067),
(2, 'Natan', '388092', '91586160206', 'avenida vinte e seis de julho 123', '02062006', 'meu pau', 0x32303137303930365f3135343035372e6a7067, '', ''),
(3, 'Div', '388092', '4545', 'meu endereco', 'div', 'div@email.com', 0x6d617572696c696f2d63696e656d612e6a7067, 0x63696e65706f6c69732e706e67, 0x436170747572612064652074656c6120646520323031382d30352d31342031312d31352d35322e706e67),
(4, 'Brenno', '798784', '4545', 'meu endereco', 'eduardo', 'div@email.com', 0x6d617572696c696f2d63696e656d612e6a7067, 0x63696e65706f6c69732e706e67, 0x33303732373339395f313633323530323235363833303636315f333539323138303131333732383333393936385f6e2e6a7067),
(5, 'Eduardo', '7878', '456488748', 'santan', 'meupau', 'dudud@gmail.com', 0x436170747572612064652074656c6120646520323031382d30342d31382031352d34392d30322e706e67, 0x436170747572612064652074656c6120646520323031372d31322d30312031312d33322d32302e706e67, 0x6d6f6f646c652032382e30322e706e67);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recursos`
--
ALTER TABLE `recursos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario` (`usuario`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recursos`
--
ALTER TABLE `recursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `recursos`
--
ALTER TABLE `recursos`
  ADD CONSTRAINT `recursos_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
