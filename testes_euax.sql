-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20/10/2020 às 18:20
-- Versão do servidor: 10.4.14-MariaDB
-- Versão do PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `testes_euax`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `atividades`
--

CREATE TABLE `atividades` (
  `IDAtividade` int(11) NOT NULL,
  `IDProjeto` int(11) NOT NULL,
  `nomeAtividade` varchar(150) NOT NULL,
  `dataInicioAti` date NOT NULL,
  `dataFimAti` date NOT NULL,
  `infoFinalizada` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `atividades`
--

INSERT INTO `atividades` (`IDAtividade`, `IDProjeto`, `nomeAtividade`, `dataInicioAti`, `dataFimAti`, `infoFinalizada`) VALUES
(1, 1, 'Atividade do Projeto Teste', '2020-10-20', '2020-10-22', 1),
(2, 1, 'Atividade do Projeto Teste 2', '2020-10-20', '2020-10-28', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `projetos`
--

CREATE TABLE `projetos` (
  `IDProjeto` int(11) NOT NULL,
  `nomeProjeto` varchar(150) NOT NULL,
  `dataInicioPro` date NOT NULL,
  `dataFimPro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `projetos`
--

INSERT INTO `projetos` (`IDProjeto`, `nomeProjeto`, `dataInicioPro`, `dataFimPro`) VALUES
(1, 'Projeto Teste', '2002-06-22', '2020-10-25');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `atividades`
--
ALTER TABLE `atividades`
  ADD PRIMARY KEY (`IDAtividade`);

--
-- Índices de tabela `projetos`
--
ALTER TABLE `projetos`
  ADD PRIMARY KEY (`IDProjeto`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `atividades`
--
ALTER TABLE `atividades`
  MODIFY `IDAtividade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `projetos`
--
ALTER TABLE `projetos`
  MODIFY `IDProjeto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
