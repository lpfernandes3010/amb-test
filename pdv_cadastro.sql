-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09-Jul-2019 às 00:26
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ambev`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pdv_cadastro`
--

CREATE TABLE `pdv_cadastro` (
  `id` int(11) NOT NULL,
  `tradingName` varchar(100) NOT NULL,
  `ownerName` varchar(100) NOT NULL,
  `document` varchar(14) DEFAULT NULL,
  `coverageArea` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pdv_cadastro`
--

INSERT INTO `pdv_cadastro` (`id`, `tradingName`, `ownerName`, `document`, `coverageArea`, `address`) VALUES
(1, 'testetrading', 'lucas', '00987098000412', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pdv_cadastro`
--
ALTER TABLE `pdv_cadastro`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `document_2` (`document`),
  ADD KEY `document` (`document`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pdv_cadastro`
--
ALTER TABLE `pdv_cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
