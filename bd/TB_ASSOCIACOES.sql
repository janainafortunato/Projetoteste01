-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 17-Maio-2018 às 19:30
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id5794465_camila`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `TB_ASSOCIACOES`
--

CREATE TABLE `TB_ASSOCIACOES` (
  `NOME_FANTASIA` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CNPJ` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TELEFONE` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CELULAR` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `FACEBOOK` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `RUA` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `BAIRRO` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CIDADE` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `NOME_RESPONSAVEL` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `EMAIL` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `SENHA` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `TB_ASSOCIACOES`
--
ALTER TABLE `TB_ASSOCIACOES`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `TB_ASSOCIACOES`
--
ALTER TABLE `TB_ASSOCIACOES`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
