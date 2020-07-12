-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 10, 2020 at 01:45 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `origo`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `telefone` varchar(500) NOT NULL,
  `estado` varchar(500) NOT NULL,
  `cidade` varchar(500) NOT NULL,
  `nascimento` date NOT NULL,
  `registro` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `email`, `telefone`, `estado`, `cidade`, `nascimento`, `registro`) VALUES
(2, 'Loni Jennions', 'ljennions1@va.gov', '(19) 905613161', 'São Paulo', 'Limeira', '1985-05-09', '2020-06-09 13:59:20'),
(5, 'Kendrick Sooper', 'ksooper1@slate.com', '(31) 94432-4086', 'Minas Gerais', 'Belo Horizonte', '0000-00-00', '2020-06-09 22:17:04');

-- --------------------------------------------------------

--
-- Table structure for table `planos`
--

DROP TABLE IF EXISTS `planos`;
CREATE TABLE IF NOT EXISTS `planos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plano` varchar(500) NOT NULL,
  `mensalidade` float(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `planos`
--

INSERT INTO `planos` (`id`, `plano`, `mensalidade`) VALUES
(1, 'Free', 0.00),
(2, 'Basic', 100.00),
(3, 'Plus', 187.00);

-- --------------------------------------------------------

--
-- Table structure for table `planos_clientes`
--

DROP TABLE IF EXISTS `planos_clientes`;
CREATE TABLE IF NOT EXISTS `planos_clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `id_plano` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `planos_clientes`
--

INSERT INTO `planos_clientes` (`id`, `id_cliente`, `id_plano`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 4, 1),
(4, 4, 3),
(5, 2, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
