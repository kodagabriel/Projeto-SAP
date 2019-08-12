-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 19-Abr-2018 às 21:20
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baudeashanti`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `isOpen` tinyint(1) NOT NULL DEFAULT '0',
  `nivel1` tinyint(1) NOT NULL DEFAULT '0',
  `nivel2` tinyint(1) NOT NULL DEFAULT '0',
  `nivel3` tinyint(1) NOT NULL DEFAULT '0',
  `tempo1` varchar(20) DEFAULT '00h:00m:00s',
  `tempo2` varchar(20) DEFAULT '00h:00m:00s',
  `tempo3` varchar(20) DEFAULT '00h:00m:00s',
  `moedas` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`codigo`, `login`, `senha`, `isOpen`, `nivel1`, `nivel2`, `nivel3`, `tempo1`, `tempo2`, `tempo3`, `moedas`) VALUES
(32, 'lkjlk', 'f7f968d6245a9d4e6d8f4212cdbf158b', 0, 1, 0, 0, '00h:00m:00s', '00h:00m:00s', '00h:00m:00s', 0),
(33, 'fddfh', '9dfede205caf4b9d5a3cf550b0a39e9d', 0, 0, 0, 1, '00h:00m:00s', '00h:00m:00s', '00h:00m:00s', 0),
(34, 'sgasdg', '067729f157dd1a05b4efa8aa4a8ec7fa', 0, 0, 0, 1, '00h:00m:00s', '00h:00m:00s', '00h:01m:11s', 0),
(35, 'sdag', 'acfd45763e1a92d874cf511d7100c438', 0, 0, 0, 1, '00h:00m:00s', '00h:00m:00s', '00h:00m:00s', 0),
(36, 'asdg', '98dd0448054d7142fe6511defb1d5a6a', 0, 0, 0, 1, '00h:00m:00s', '00h:00m:00s', '00h:01m:09s', 0),
(37, 'jhgjhg', 'fa46ec0b4924e8c2194a53ef61b94039', 0, 0, 0, 1, '00h:00m:00s', '00h:00m:00s', '00h:01m:01s', 0),
(38, 'dfgadg', 'f97650a2cf291a2e6987eaed54292784', 0, 0, 0, 0, '00h:00m:00s', '00h:00m:00s', '00h:00m:00s', 0),
(39, 'sdagasdg', 'c787ef1210bd3c7da7d817923817d7d3', 0, 0, 0, 0, '00h:00m:00s', '00h:00m:00s', '00h:00m:00s', 0),
(40, 'lkjlklk', '834eaf68857476235ee53b92262039a4', 0, 0, 0, 0, '00h:00m:00s', '00h:00m:00s', '00h:00m:00s', 0),
(41, 'koda', 'd91b9af4ee85c16ae1d50bee73bd27aa', 0, 0, 0, 0, '00h:00m:00s', '00h:00m:00s', '00h:00m:00s', 0),
(42, 'ggg', 'ba248c985ace94863880921d8900c53f', 0, 1, 1, 0, '00h:00m:43s', '00h:01m:02s', '00h:00m:00s', 180),
(43, 'fff', '343d9040a671c45832ee5381860e2996', 0, 0, 1, 0, '00h:00m:00s', '00h:00m:55s', '00h:00m:00s', 89);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
