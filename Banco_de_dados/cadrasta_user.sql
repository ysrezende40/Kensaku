-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Abr-2023 às 01:22
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cadrasta_user`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_users`
--

CREATE TABLE `tab_users` (
  `codigoUser` int(11) NOT NULL,
  `nick_usario` varchar(300) NOT NULL,
  `senha_usuario` varchar(300) NOT NULL,
  `nome_usuario` varchar(300) NOT NULL,
  `email_usuario` varchar(300) NOT NULL,
  `data_de_nascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tab_users`
--

INSERT INTO `tab_users` (`codigoUser`, `nick_usario`, `senha_usuario`, `nome_usuario`, `email_usuario`, `data_de_nascimento`) VALUES
(1, 'ys', 'ysaac', 'ysaac rezende', 'ysaacqueiroz@gmail.com', '2023-04-25'),
(2, 'lucca', '1234', 'lucas', 'lucas@gmail.com', '2023-04-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tab_users`
--
ALTER TABLE `tab_users`
  ADD PRIMARY KEY (`codigoUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tab_users`
--
ALTER TABLE `tab_users`
  MODIFY `codigoUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
