-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Jun-2020 às 16:03
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `origo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `telefone` varchar(500) NOT NULL,
  `estado` varchar(500) NOT NULL,
  `cidade` varchar(500) NOT NULL,
  `nascimento` date NOT NULL,
  `registro` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `email`, `telefone`, `estado`, `cidade`, `nascimento`, `registro`) VALUES
(2, 'Loni Jennions', 'ljennions1@va.gov', '(19) 905613161', 'São Paulo', 'Limeira', '1985-05-09', '2020-06-09 13:59:20'),
(5, 'Kendrick Sooper', 'ksooper1@slate.com', '(31) 94432-4086', 'Minas Gerais', 'Belo Horizonte', '1981-06-02', '2020-06-09 22:17:04'),
(6, 'Claudianus Boast', 'cboast0@fastcompany.com', '(19) 95764-5371', 'São Paulo', 'Araraquara', '1993-06-07', '2020-06-10 10:10:26'),
(7, 'Lorenzo Fisk', 'lfisk6@businessweek.com', '(31) 91269-5467', 'Minas Gerais', 'Belo Horizonte', '1985-12-22', '2020-06-10 10:11:37'),
(8, 'Kimbra Rase', 'krase5@topsy.com', '(35) 99942-8030', 'Minas Gerais', 'Areado', '1999-05-05', '2020-06-10 10:12:56'),
(9, 'Bourke Flavelle', 'bflavelle7@fc2.com', '(35) 95938-6145', 'Minas Gerais', 'Itapeva', '1984-04-10', '2020-06-10 10:15:56'),
(10, 'Curran McSharry', 'cmcsharry8@webeden.co.uk', '(35) 90291-6131', 'Minas Gerais', 'Itapeva', '1983-01-15', '2020-06-10 10:16:48'),
(11, 'Marie Shatliff', 'mshatliff4@cbslocal.com', '(19) 99137-6354', 'São Paulo', 'Rio Claro', '1990-07-20', '2020-06-10 10:26:53'),
(12, 'Lexy Sprulls', 'lsprulls3@moonfruit.com', '(19) 97612-1601', 'São Paulo', 'Rio Claro', '1999-10-19', '2020-06-10 10:28:27'),
(13, 'Gordon Levington', 'glevington2@hpost.com', '(31) 92240-5868', 'Minas Gerais', 'Belo Horizonte', '1993-11-25', '2020-06-10 10:30:52'),
(14, 'Noam Scolland ', 'nscolland3@mozilla.org', '(35) 99681-7669', 'Minas Gerais', 'Areado', '1999-12-31', '2020-06-10 10:32:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `planos`
--

CREATE TABLE `planos` (
  `id` int(11) NOT NULL,
  `plano` varchar(500) NOT NULL,
  `mensalidade` float(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `planos`
--

INSERT INTO `planos` (`id`, `plano`, `mensalidade`) VALUES
(1, 'Free', 0.00),
(2, 'Basic', 100.00),
(3, 'Plus', 187.00);

-- --------------------------------------------------------

--
-- Estrutura da tabela `planos_clientes`
--

CREATE TABLE `planos_clientes` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_plano` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `planos_clientes`
--

INSERT INTO `planos_clientes` (`id`, `id_cliente`, `id_plano`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 4, 1),
(4, 4, 3),
(5, 2, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `planos`
--
ALTER TABLE `planos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `planos_clientes`
--
ALTER TABLE `planos_clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `planos`
--
ALTER TABLE `planos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `planos_clientes`
--
ALTER TABLE `planos_clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
