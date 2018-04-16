-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09-Mar-2016 às 22:11
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agendatelefonica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(50),
  `telefone` varchar(10) NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `agenda`
--

INSERT INTO `agenda` (`id`, `nome`, `email`, `telefone`, `ativo`) VALUES
(1, 'Leon Kennedy', 'leon@raccoonpd.com', '0123456789', 1),
(2, 'Edward Elric', 'fullmetal@alchemist.am', '9876543210', 1),
(5, 'Phoenix Wright', 'aceattorney@wrightagency.com', '2546978610', 1),
(6, 'Commander Shepard', 'cshepard@n7.space', '2594678643', 1),
(7, 'GlaDOS', 'glados@aperture.science', '6548496516', 1),
(8, 'Tassadar', 'entaroadun@templar.aiur', '1566845565', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
