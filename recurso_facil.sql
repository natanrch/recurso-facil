-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 30, 2018 at 11:33 AM
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

--
-- Dumping data for table `julgamentos`
--

INSERT INTO `julgamentos` (`id`, `resposta`, `recurso_id`) VALUES
(1, 'Indefiro seu recurso. Pague a multa.', 1),
(2, 'Indefiro seu recurso. Pague a multa.', 1);

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
(1, '798789', 4, '454', 'movieposter.jpg', 'maurilio-cinema.jpg', '20170908_095719-iloveimg-cropped.jpg', 'cadastro-editado.jpg', 'Natanrch.jpg', 'movieposter.jpg', 'obama.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(2, '798416565', 4, '4487845', 'movieposter.jpg', 'maurilio-cinema.jpg', '20170908_095719-iloveimg-cropped.jpg', 'cadastro-editado.jpg', 'Natanrch.jpg', 'movieposter.jpg', 'obama.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(3, '12345566', 4, '252252', 'site-casa-do-criador-3.jpg', 'Captura de tela de 2018-03-26 14-49-34.png', 'site-casa-do-criador1.jpg', 'starman.jpg', 'NÃºmero da sorte.png', '20170908_095719-iloveimg-cropped-iloveimg-resized.jpg', 'Captura de tela de 2017-12-01 11-32-20.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(4, 'fafa', 4, 'fsdfs', 'site-casa-do-criador-3.jpg', 'Captura de tela de 2018-05-11 18-39-06.png', 'site-casa-do-criador1.jpg', 'Natanrch.jpg', 'squirtle-skol.jpeg', '20170908_095719-iloveimg-cropped.jpg', 'Captura de tela de 2018-03-26 14-49-34.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.');

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
  `identidade_arquivo` varchar(100) NOT NULL,
  `endereco_arquivo` varchar(100) NOT NULL,
  `selfie_arquivo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `rg`, `cpf`, `endereco`, `senha`, `email`, `identidade_arquivo`, `endereco_arquivo`, `selfie_arquivo`) VALUES
(1, 'Natan', '388092', '91586160206', 'avenida vinte e seis de julho 123', 'meupau', 'meu pau', '20170906_154057.jpg', '20170906_154057(2).jpg', '20170906_154057(1).jpg'),
(2, 'Natan', '388092', '91586160206', 'avenida vinte e seis de julho 123', '02062006', 'meu pau', '20170906_154057.jpg', '', ''),
(4, 'Andre Luis', '798784', '4545', 'meu endereco', 'eduardo', 'div@email.com', 'maurilio-cinema.jpg', 'cinepolis.png', '30727399_1632502256830661_3592180113728339968_n.jpg'),
(5, 'Eduardo', '7878', '456488748', 'santan', 'meupau', 'dudud@gmail.com', 'Captura de tela de 2018-04-18 15-49-02.png', 'Captura de tela de 2017-12-01 11-32-20.png', 'moodle 28.02.png'),
(6, 'Adrielly', '798416', '46516498', 'universidade', '1234', 'adriely@email.com', 'Captura de tela de 2018-05-11 18-39-06.png', 'Captura de tela de 2018-03-30 14-55-53.png', 'Captura de tela de 2018-03-30 14-55-53.png'),
(7, 'Eduardo henrique', '5743856378', '79845649', 'santana sÃ³ buraco', '1234', 'blabla@dudu.com', '22851781_1469637459752850_3873515159869502971_n.jpg', 'moodle 28.02.png', '20170908_095719-iloveimg-cropped-iloveimg-resized.jpg'),
(8, 'Natan', '111', '22233344455', 'qualquer um', 'meupauteama', 'natan.rocha.batista@gmail.com', '30727399_1632502256830661_3592180113728339968_n.jpg', 'Captura de tela de 2018-03-27 14-41-46.png', 'Captura de tela de 2018-03-26 14-49-34.png');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
