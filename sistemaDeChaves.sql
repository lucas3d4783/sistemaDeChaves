-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 05, 2020 at 06:54 AM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemaDeChaves`
--

-- --------------------------------------------------------

--
-- Table structure for table `aluno`
--

CREATE TABLE `aluno` (
  `id` int(11) NOT NULL,
  `idProfessor` int(11) NOT NULL,
  `ativo` tinyint(1) DEFAULT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `sobrenome` varchar(75) DEFAULT NULL,
  `dataNascimento` varchar(10) DEFAULT NULL,
  `email` varchar(75) DEFAULT NULL,
  `fone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aluno`
--

INSERT INTO `aluno` (`id`, `idProfessor`, `ativo`, `nome`, `sobrenome`, `dataNascimento`, `email`, `fone`) VALUES
(3, 1, 0, 'lucas', 'coelho reichert', '11/11/1111', 'lucas.reichert@redes.ufsm.br', '55991852004'),
(5, 1, 1, 'lucas', 'coelho reichert', '13/10/1999', 'lucas.reichert@redes.ufsm.br', '55991852004'),
(6, 1, 1, 'lucas', 'coelho reichert', '13/10/1999', 'lucas.reichert@redes.ufsm.br', '55991852004'),
(7, 4, 1, 'dfasdfa', 'adfdfas', '10/10/2000', 'lucas@gmail.com', '555413218616'),
(8, 4, 1, 'dfasdfa', 'adfdfas', '10/10/2000', 'lucas@gmail.com', '555413218616'),
(9, 1, 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `aula`
--

CREATE TABLE `aula` (
  `id` int(11) NOT NULL,
  `descricao` varchar(75) NOT NULL,
  `idAluno` int(11) DEFAULT NULL,
  `idProfessor` int(11) DEFAULT NULL,
  `idChave` int(11) NOT NULL,
  `idPorteiro` int(11) NOT NULL,
  `data` varchar(10) NOT NULL,
  `hora` varchar(5) NOT NULL,
  `dataE` varchar(10) DEFAULT NULL,
  `horaE` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aula`
--

INSERT INTO `aula` (`id`, `descricao`, `idAluno`, `idProfessor`, `idChave`, `idPorteiro`, `data`, `hora`, `dataE`, `horaE`) VALUES
(2, 'asfdfsdaadfs', NULL, 1, 2, 2, '16/11/2019', '01:11', '16/11/2019', '01:24'),
(3, 'fdsafsdfd', 3, NULL, 2, 2, '16/11/2019', '01:33', '16/11/2019', '03:41'),
(4, 'sdsdfdfsa', NULL, 1, 2, 2, '16/11/2019', '02:31', '16/11/2019', '03:42'),
(5, 'dfgbgdfssdfg', NULL, 1, 4, 2, '16/11/2019', '03:26', '16/11/2019', '03:43'),
(6, 'sdafasddf', NULL, 1, 4, 2, '16/11/2019', '03:27', '16/11/2019', '03:43'),
(7, 'sddfas', NULL, 1, 4, 2, '16/11/2019', '03:28', '16/11/2019', '03:43'),
(8, 'fsdsdfdf', NULL, 1, 4, 2, '16/11/2019', '03:29', '16/11/2019', '03:42'),
(9, 'sdfasdfdfas', NULL, 1, 3, 2, '16/11/2019', '03:33', '16/11/2019', '03:42'),
(10, '7sdfa', NULL, 1, 2, 2, '16/11/2019', '03:43', '16/11/2019', '03:45'),
(11, 'dffdasdfsdfa', NULL, 1, 3, 2, '16/11/2019', '03:46', '16/11/2019', '03:46'),
(12, 'dsfdssdfafd', NULL, 1, 2, 2, '16/11/2019', '03:46', '18/11/2019', '19:35'),
(13, '', NULL, 1, 3, 2, '18/11/2019', '19:29', '18/11/2019', '19:35'),
(14, 'alocacaoPraAluno', 9, NULL, 2, 2, '18/11/2019', '19:36', '18/11/2019', '19:44');

-- --------------------------------------------------------

--
-- Table structure for table `chave`
--

CREATE TABLE `chave` (
  `id` int(11) NOT NULL,
  `descricao` varchar(75) NOT NULL,
  `alocada` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chave`
--

INSERT INTO `chave` (`id`, `descricao`, `alocada`) VALUES
(2, 'sala 109f', NULL),
(3, 'lucas teste', NULL),
(4, 'sala 118f', NULL),
(5, 'dfadffddas', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `porteiro`
--

CREATE TABLE `porteiro` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `sobrenome` varchar(75) DEFAULT NULL,
  `dataNascimento` varchar(10) DEFAULT NULL,
  `email` varchar(75) DEFAULT NULL,
  `fone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `porteiro`
--

INSERT INTO `porteiro` (`id`, `nome`, `sobrenome`, `dataNascimento`, `email`, `fone`) VALUES
(2, 'lucas', 'coelho reichert', '13/10/1999', 'lucas.reichert@redes.ufsm.br', '55991852004'),
(3, 'lucas', 'coelho reichert', '13/10/1999', 'lucas@redes.ufsm.br', '(55)991852004'),
(4, 'teste', 'coelho reichert', '13/10/1999', 'klfdjalfd@kfljasdfk.com', '(55)991852004');

-- --------------------------------------------------------

--
-- Table structure for table `professor`
--

CREATE TABLE `professor` (
  `id` int(11) NOT NULL,
  `sala` varchar(10) DEFAULT NULL,
  `ativo` tinyint(1) DEFAULT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `sobrenome` varchar(75) DEFAULT NULL,
  `dataNascimento` varchar(10) DEFAULT NULL,
  `email` varchar(75) DEFAULT NULL,
  `fone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professor`
--

INSERT INTO `professor` (`id`, `sala`, `ativo`, `nome`, `sobrenome`, `dataNascimento`, `email`, `fone`) VALUES
(1, '108F', 1, 'joão', 'silva', '20/10/1882', 'joao@gmail.com', '55991851218'),
(4, '111', 0, 'joão', 'raimes', '10/10/2000', 'lucas3d4783@gmail.com', '555413218616'),
(5, '111', 1, 'giani', 'puntel', '13/10/1999', 'joao@gmail.com', '55991852004');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idProfessor` (`idProfessor`);

--
-- Indexes for table `aula`
--
ALTER TABLE `aula`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idAluno` (`idAluno`),
  ADD KEY `idProfessor` (`idProfessor`),
  ADD KEY `idPorteiro` (`idPorteiro`),
  ADD KEY `idChave` (`idChave`);

--
-- Indexes for table `chave`
--
ALTER TABLE `chave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `porteiro`
--
ALTER TABLE `porteiro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `aula`
--
ALTER TABLE `aula`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `chave`
--
ALTER TABLE `chave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `porteiro`
--
ALTER TABLE `porteiro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `aluno_ibfk_1` FOREIGN KEY (`idProfessor`) REFERENCES `professor` (`id`);

--
-- Constraints for table `aula`
--
ALTER TABLE `aula`
  ADD CONSTRAINT `aula_ibfk_1` FOREIGN KEY (`idAluno`) REFERENCES `aluno` (`id`),
  ADD CONSTRAINT `aula_ibfk_2` FOREIGN KEY (`idProfessor`) REFERENCES `professor` (`id`),
  ADD CONSTRAINT `aula_ibfk_3` FOREIGN KEY (`idPorteiro`) REFERENCES `porteiro` (`id`),
  ADD CONSTRAINT `aula_ibfk_4` FOREIGN KEY (`idChave`) REFERENCES `chave` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
