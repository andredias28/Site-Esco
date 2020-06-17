-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Jun-2020 às 21:37
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esco`
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
(1, '2020-06-08', '100%', 'Sempre', 'ocorreram mas sem impacto', 'A', 3, '4', 4, 3, 0, 100, 1, 1),
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
(2, 'Segurança'),
(3, 'Tansportes'),
(4, 'Higiene');

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
(2, 'Kfogo', 'R. Dr. Afonso Oliveira Guimarães', 'geral@kfogo.pt', '2600-043', '925 678 717', 2),
(3, 'DBG', 'Rua de S. Bento, N 24, Malpica do Tejo', 'administracao@dbg.pt', '6000-560', '263 696 969', 3),
(4, 'Barraqueiro Transportes', 'Estrada Nacional nº8, Km 52 2565-641 Ramalhal, TVD', 'barraqueiro.oeste@rodest.pt', '2565-641', '261 334 150', 4),
(5, 'Turispraia', 'R. Prof. Guilherme de Assunção 28, 2640-488 Mafra', 'turispraia@sapo.pt', '2640-488', '261 812 209', 4);

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
(0, 'teste', 'andre3785@gmail.com', '12341924', '123', '1', 1, 1),
(1, 'Júlia Maria Fernandes Alfaiate', 'juliaalfaiate@sefo.pt', '', 'esco', '1', 1, 1),
(2, 'Admin', 'qualidade@sefo.pt', '999 999 999', 'admin123', '0', 1, 1),
(9, 'Maria de Jesus Duarte Faustino', 'mariafaustino@sefo.pt', '', 'esci', '1', 1, 1),
(28, 'Ana Teresa Pedreira da Silva M. Baptista', 'anabaptista@sefo.pt', '', 'esco', '1', 1, 1),
(51, 'Ana Maria Marcelino da Cunha', 'anacunha@sefo.pt', '', 'esci', '1', 1, 1),
(56, 'Ana Cristina Silva Martins', 'anamartins@sefo.pt', '', 'esco', '1', 1, 1),
(91, 'Álvaro Miguel Ribeiro de Brito', 'alvarobrito@sefo.pt', '999', 'alvaro', '0', 2, 1),
(100, 'Andre', 'andre3785@gmail.com', '', '123', '0', 1, 1),
(102, 'Paulo Sérgio Reis Moreira', 'psrmoreira@sefo.pt', '', 'esco', '1', 2, 1),
(109, 'Ana Isabel Alves Barata Feio', 'anabaratafeio@sefo.pt', '', 'esco', '1', 2, 1),
(110, 'Sandra Margarida da Silva Morais Franco', 'sandrafranco@sefo.pt', '', 'esco', '1', 1, 1),
(113, 'Isabel Maria Marcelino da Cunha Garcia', 'isabelgarcia@sefo.pt', '', 'esco', '1', 2, 1),
(115, 'Helena Margarida da Silva Reis Neto', 'helenareis@sefo.pt', '', 'esco', '1', 2, 1),
(120, 'Sandra da Luz Sales', 'sandrasales@sefo.pt', '', 'esci', '1', 2, 1),
(122, 'Ana Luísa da Costa Serra Oliveira', 'anaoliveira@sefo.pt', '', 'esco', '1', 1, 1),
(125, 'Margarida Sofia D. da Silva Q. Caldeira', 'margaridacaldeira@sefo.pt', '', 'esco', '1', 1, 1),
(128, 'Sandra Isabel Alfaiate', 'sandraalfaiate@sefo.pt', '', 'esco', '1', 1, 1),
(134, 'Marta Filipa Pereira Lopes Silva', 'martasilva@sefo.pt', '', 'esco', '1', 1, 1),
(177, 'Patrícia Alexandra dosSantos Camilo Dias', 'patriciadias@sefo.pt', '', 'esco', '1', 2, 1),
(195, 'Luísa Maria Vieira de Sousa Mira', 'luisamira@sefo.pt', '', 'esco', '1', 2, 1),
(197, 'Maria Vânia Lucas Pinheiro', 'vaniapinheiro@sefo.pt', '', 'esco', '1', 2, 1),
(208, 'Célia Maria dos Santos Estêvão', 'celiaestevao@sefo.pt', '', 'esco', '1', 2, 1),
(209, 'Ana Patricia Silva Costa S. Figueira', 'anafigueira@sefo.pt', '', 'esco', '1', 2, 1),
(210, 'Ana Marta Antunes Pedro', 'anapedro@sefo.pt', '', 'esco', '1', 2, 1),
(245, 'Mafalda Maria Alfredo dos Santos', 'mafaldasantos@sefo.pt', '', 'esco', '1', 2, 1),
(278, 'Filipa Alexandra Faria B.Correia Lopes', 'filipacorreira@sefo.pt', '', 'esco', '1', 2, 1),
(279, 'Raquel Teresa Gouveia Fonseca', 'raquelfonseca@sefo.pt', '', 'esco', '1', 2, 1),
(290, 'Maria João Mendes Pereira de Oliveira', 'mariaoliveira@sefo.pt', '', 'esco', '1', 2, 1),
(295, 'Ana Marta Ribeiro de Sousa Malhado', 'martamalhado@sefo.pt', '', 'esco', '1', 2, 1),
(297, 'Sérgio Rafael Carvalho Rodrigues', 'sergiorodrigues@sefo.pt', '', 'esco', '1', 1, 1),
(308, 'David Brandão S. Nogueira Ferrão', 'davidferrao@sefo.pt', '', 'esco', '1', 2, 1),
(310, 'Luís Filipe Fortes da Cruz Couto', 'luiscouto@sefo.pt', '', 'esco', '1', 1, 1),
(311, 'Marta Penão Reis Silva Garcia de Matos', 'martamatos@sefo.pt', '', 'esco', '1', 2, 1),
(325, 'Rui Manuel Amorim Inácio', 'ruiinacio@sefo.pt', '', 'esco', '1', 1, 1),
(327, 'Ana Cristina da Cruz Cândido', 'anacandido@sefo.pt', '', 'esco', '1', 2, 1),
(329, 'Carla Sofia Pereira Tourita', 'carlatourita@sefo.pt', '', 'esco', '1', 2, 1),
(342, 'Susana Filipa Rodrigues da Cunha', 'susanacunha@sefo.pt', '', 'esco', '1', 2, 1),
(448, 'Cristiana da Silva', 'cristianasilva@sefo.pt', '', 'esco', '1', 2, 1),
(459, 'Diana Filipa Reis Perluxo', 'dianaperluxo@sefo.pt', '', 'esco', '1', 2, 1),
(461, 'Patrícia Galante Montoia', 'patriciamontoia@sefo.pt', '', 'esco', '1', 2, 1),
(465, 'Maria João Duarte Silva', 'mariasilva@sefo.pt', '', 'esco', '1', 2, 1);

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
(2, 'Sinalização', 2),
(3, 'Telecomunicação SMS', 1),
(4, 'Visitas de Estudo', 3),
(5, 'Publicidade', 1),
(6, 'Telecomunicações', 1),
(7, 'Carrinha', 3),
(8, 'Limpeza', 4),
(9, 'Luz', 2),
(10, 'Jardinagem', 4),
(11, 'Desinfestação', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD PRIMARY KEY (`id_avaliacao`),
  ADD KEY `Numero_P` (`Numero`),
  ADD KEY `id_empresaAv` (`id_empresa`),
  ADD KEY `id_ServicoAv` (`id_servico`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`),
  ADD KEY `id_servicoEmp` (`id_servico`) USING BTREE;

--
-- Indexes for table `empresaservico`
--
ALTER TABLE `empresaservico`
  ADD PRIMARY KEY (`id_servico`,`id_empresa`),
  ADD KEY `id_empresaAux` (`id_empresa`) USING BTREE,
  ADD KEY `id_servico` (`id_servico`);

--
-- Indexes for table `professoresadministracao`
--
ALTER TABLE `professoresadministracao`
  ADD PRIMARY KEY (`Numero_P`);

--
-- Indexes for table `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`id_servico`),
  ADD KEY `id_categoriaServico` (`id_categoria`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avaliacao`
--
ALTER TABLE `avaliacao`
  MODIFY `id_avaliacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `servico`
--
ALTER TABLE `servico`
  MODIFY `id_servico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
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
