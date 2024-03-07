-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Mar-2024 às 16:40
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `empresa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `cod_cliente` int(11) NOT NULL,
  `nome` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cnpj_cpf` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `data_cnpj_nasc` date NOT NULL,
  `representante` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`cod_cliente`, `nome`, `telefone`, `email`, `cnpj_cpf`, `data_cnpj_nasc`, `representante`) VALUES
(1, 'Robson Antunes', '1319328446', 'robson.antunes@teste.com', '01243557699', '2001-07-03', 'Maria Clara'),
(2, 'Silvana', '243485835', 'teste.silvana@edu.br', '25367487543', '1986-04-12', 'Francisca');

-- --------------------------------------------------------

--
-- Estrutura da tabela `representantes`
--

CREATE TABLE `representantes` (
  `id_representante` int(11) NOT NULL,
  `nome` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cep` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `lagradouro` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `numero` int(10) NOT NULL,
  `bairro` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `uf` varchar(6) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `representantes`
--

INSERT INTO `representantes` (`id_representante`, `nome`, `email`, `cep`, `lagradouro`, `numero`, `bairro`, `cidade`, `uf`) VALUES
(2, 'Monica Pereira', 'monica.pereira@teste.com', '18324156', 'Rua Gregory', 32, 'Centro', 'Sorocaba', 'SP'),
(6, 'Luis Cleiton', 'luis.cleiton@edu.br', '18134240', 'Av Anhanguera', 369, 'Jd Bandeirantes', 'Sao Roque', 'SP');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `login`, `senha`) VALUES
(1, 'Luis Cleiton', 'luis', '502ff82f7f1f8218dd41201fe4353687'),
(2, 'Teste', 'teste', '698dc19d489c4e4db73e28a713eab07b'),
(3, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cod_cliente`);

--
-- Indexes for table `representantes`
--
ALTER TABLE `representantes`
  ADD PRIMARY KEY (`id_representante`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `cod_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `representantes`
--
ALTER TABLE `representantes`
  MODIFY `id_representante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
