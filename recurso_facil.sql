-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 30, 2018 at 09:04 AM
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
-- Table structure for table `julgamentos`
--

CREATE TABLE `julgamentos` (
  `id` int(11) NOT NULL,
  `resposta` varchar(2000) DEFAULT NULL,
  `recurso_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recursos`
--

CREATE TABLE `recursos` (
  `id` int(11) NOT NULL,
  `auto_de_infracao` varchar(20) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `cnh` varchar(20) NOT NULL,
  `cnh_arquivo` varchar(100) NOT NULL,
  `veiculo_arquivo` varchar(100) NOT NULL,
  `endereco_arquivo` varchar(100) NOT NULL,
  `multa_arquivo` varchar(100) NOT NULL,
  `comprovante_taxa_arquivo` varchar(100) NOT NULL,
  `procuracao_arquivo` varchar(100) DEFAULT NULL,
  `outros_documentos` varchar(100) DEFAULT NULL,
  `razoes` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recursos`
--

INSERT INTO `recursos` (`id`, `auto_de_infracao`, `usuario_id`, `cnh`, `cnh_arquivo`, `veiculo_arquivo`, `endereco_arquivo`, `multa_arquivo`, `comprovante_taxa_arquivo`, `procuracao_arquivo`, `outros_documentos`, `razoes`) VALUES
(1, '798789', 4, '454', 'movieposter.jpg', 'maurilio-cinema.jpg', '20170908_095719-iloveimg-cropped.jpg', 'cadastro-editado.jpg', 'Natanrch.jpg', 'movieposter.jpg', 'obama.jpg', 'fgsgjhauigha\r\n'),
(2, '798416565', 4, '4487845', 'movieposter.jpg', 'maurilio-cinema.jpg', '20170908_095719-iloveimg-cropped.jpg', 'cadastro-editado.jpg', 'Natanrch.jpg', 'movieposter.jpg', 'obama.jpg', 'fhsfhjijnaga'),
(3, '12345566', 4, '252252', 'site-casa-do-criador-3.jpg', 'Captura de tela de 2018-03-26 14-49-34.png', 'site-casa-do-criador1.jpg', 'starman.jpg', 'NÃºmero da sorte.png', '20170908_095719-iloveimg-cropped-iloveimg-resized.jpg', 'Captura de tela de 2017-12-01 11-32-20.png', 'DFJHASFJKSHFKJAH'),
(4, 'fafa', 4, 'fsdfs', 'site-casa-do-criador-3.jpg', 'Captura de tela de 2018-05-11 18-39-06.png', 'site-casa-do-criador1.jpg', 'Natanrch.jpg', 'squirtle-skol.jpeg', '20170908_095719-iloveimg-cropped.jpg', 'Captura de tela de 2018-03-26 14-49-34.png', 'dfasfafa');

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
(4, 'Brenno', '798784', '4545', 'meu endereco', 'eduardo', 'div@email.com', 0x6d617572696c696f2d63696e656d612e6a7067, 0x63696e65706f6c69732e706e67, 0x33303732373339395f313633323530323235363833303636315f333539323138303131333732383333393936385f6e2e6a7067),
(5, 'Eduardo', '7878', '456488748', 'santan', 'meupau', 'dudud@gmail.com', 0x436170747572612064652074656c6120646520323031382d30342d31382031352d34392d30322e706e67, 0x436170747572612064652074656c6120646520323031372d31322d30312031312d33322d32302e706e67, 0x6d6f6f646c652032382e30322e706e67),
(6, 'Adrielly', '798416', '46516498', 'universidade', '1234', 'adriely@email.com', 0x436170747572612064652074656c6120646520323031382d30352d31312031382d33392d30362e706e67, 0x436170747572612064652074656c6120646520323031382d30332d33302031342d35352d35332e706e67, 0x436170747572612064652074656c6120646520323031382d30332d33302031342d35352d35332e706e67),
(7, 'Eduardo henrique', '5743856378', '79845649', 'santana sÃ³ buraco', '1234', 'blabla@dudu.com', 0x32323835313738315f313436393633373435393735323835305f333837333531353135393836393530323937315f6e2e6a7067, 0x6d6f6f646c652032382e30322e706e67, 0x32303137303930385f3039353731392d696c6f7665696d672d63726f707065642d696c6f7665696d672d726573697a65642e6a7067),
(8, 'Natan', '111', '22233344455', 'qualquer um', 'meupauteama', 'natan.rocha.batista@gmail.com', 0x33303732373339395f313633323530323235363833303636315f333539323138303131333732383333393936385f6e2e6a7067, 0x436170747572612064652074656c6120646520323031382d30332d32372031342d34312d34362e706e67, 0x436170747572612064652074656c6120646520323031382d30332d32362031342d34392d33342e706e67);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `julgamentos`
--
ALTER TABLE `julgamentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recurso_id` (`recurso_id`);

--
-- Indexes for table `recursos`
--
ALTER TABLE `recursos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario` (`usuario_id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `julgamentos`
--
ALTER TABLE `julgamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `recursos`
--
ALTER TABLE `recursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `julgamentos`
--
ALTER TABLE `julgamentos`
  ADD CONSTRAINT `julgamentos_ibfk_1` FOREIGN KEY (`recurso_id`) REFERENCES `recursos` (`id`);

--
-- Constraints for table `recursos`
--
ALTER TABLE `recursos`
  ADD CONSTRAINT `recursos_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
