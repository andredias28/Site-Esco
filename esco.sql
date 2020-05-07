-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Maio-2020 às 18:48
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `esco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacao`
--

CREATE TABLE `avaliacao` (
  `id_avaliacao` int(11) NOT NULL,
  `data` date NOT NULL,
  `satisfacao` varchar(50) DEFAULT NULL,
  `cumprimento` varchar(50) DEFAULT NULL,
  `naoConformidades` varchar(50) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  `classificacao` int(11) DEFAULT NULL,
  `satisfacaoAv` varchar(50) DEFAULT NULL,
  `cumprimentoAv` int(11) DEFAULT NULL,
  `naoConformidadesAv` int(11) DEFAULT NULL,
  `avaliacaoFeita` int(11) NOT NULL,
  `Numero` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `id_servico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `avaliacao`
--

INSERT INTO `avaliacao` (`id_avaliacao`, `data`, `satisfacao`, `cumprimento`, `naoConformidades`, `categoria`, `classificacao`, `satisfacaoAv`, `cumprimentoAv`, `naoConformidadesAv`, `avaliacaoFeita`, `Numero`, `id_empresa`, `id_servico`) VALUES
(1, '2020-04-29', '80-99%', 'Sempre', 'ocorreram mas sem impacto', 'A', 3, '3', 4, 3, 1, 2, 1, 1),
(2, '2020-03-12', '80-99%', 'Frequentemente', 'não ocorreram', 'A', 3, '3', 3, 4, 1, 2, 2, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `descricao_Cate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `descricao_Cate`) VALUES
(1, 'Comunicações'),
(2, 'Segurança');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` int(11) NOT NULL,
  `nome_empresa` varchar(50) NOT NULL,
  `morada` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `codigoPostal` varchar(50) NOT NULL,
  `numeroTelemovel` varchar(50) NOT NULL,
  `id_servico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `nome_empresa`, `morada`, `email`, `codigoPostal`, `numeroTelemovel`, `id_servico`) VALUES
(1, 'Vodafone', 'Rua António Alves Ferreira', 'vodafone@gmail.com', '2560-256', '808 918 191', 1),
(2, 'Kfogo', 'R. Dr. Afonso Oliveira Guimarães', 'geral@kfogo.pt', '2530-104', '925 678 717', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresaservico`
--

CREATE TABLE `empresaservico` (
  `id_servico` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professoresadministracao`
--

CREATE TABLE `professoresadministracao` (
  `Numero_P` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telemovel` varchar(11) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `primeiro` varchar(50) NOT NULL,
  `Perfil` int(11) NOT NULL,
  `Ativo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `professoresadministracao`
--

INSERT INTO `professoresadministracao` (`Numero_P`, `nome`, `email`, `telemovel`, `senha`, `primeiro`, `Perfil`, `Ativo`) VALUES
(0, 'teste', 'test@gmai.com', '12341924', 'esco', '1', 1, 1),
(2, 'Admin', 'qualidade@sefo.pt', '999 999 999', 'admin123', '0', 1, 1),
(91, 'Álvaro Miguel Ribeiro de Brito', 'alvarobrito@sefo.pt', '999', 'alvaro', '0', 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `id_servico` int(11) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`id_servico`, `descricao`, `id_categoria`) VALUES
(1, 'Internet', 1),
(2, 'Sinalização', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD PRIMARY KEY (`id_avaliacao`),
  ADD KEY `Numero_P` (`Numero`),
  ADD KEY `id_empresaAv` (`id_empresa`),
  ADD KEY `id_ServicoAv` (`id_servico`);

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices para tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`),
  ADD KEY `id_servicoEmp` (`id_servico`) USING BTREE;

--
-- Índices para tabela `empresaservico`
--
ALTER TABLE `empresaservico`
  ADD PRIMARY KEY (`id_servico`,`id_empresa`),
  ADD KEY `id_empresaAux` (`id_empresa`) USING BTREE,
  ADD KEY `id_servico` (`id_servico`);

--
-- Índices para tabela `professoresadministracao`
--
ALTER TABLE `professoresadministracao`
  ADD PRIMARY KEY (`Numero_P`);

--
-- Índices para tabela `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`id_servico`),
  ADD KEY `id_categoriaServico` (`id_categoria`) USING BTREE;

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  MODIFY `id_avaliacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `servico`
--
ALTER TABLE `servico`
  MODIFY `id_servico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD CONSTRAINT `Numero_P` FOREIGN KEY (`Numero`) REFERENCES `professoresadministracao` (`Numero_P`),
  ADD CONSTRAINT `id_ServicoAv` FOREIGN KEY (`id_servico`) REFERENCES `servico` (`id_servico`),
  ADD CONSTRAINT `id_empresaAv` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `id_servicoEmp` FOREIGN KEY (`id_servico`) REFERENCES `servico` (`id_servico`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `empresaservico`
--
ALTER TABLE `empresaservico`
  ADD CONSTRAINT `id_empresaAux` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `id_servico` FOREIGN KEY (`id_servico`) REFERENCES `servico` (`id_servico`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `servico`
--
ALTER TABLE `servico`
  ADD CONSTRAINT `id_categoriaServico` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
