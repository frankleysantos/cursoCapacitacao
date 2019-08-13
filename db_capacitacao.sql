-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 13-Ago-2019 às 08:54
-- Versão do servidor: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_capacitacao`
--
CREATE DATABASE IF NOT EXISTS `db_capacitacao` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `db_capacitacao`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_oficinas`
--

DROP TABLE IF EXISTS `tb_oficinas`;
CREATE TABLE `tb_oficinas` (
  `id` int(10) NOT NULL,
  `qnt_vagas` int(2) NOT NULL,
  `vagas_preenchidas` int(2) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `expositor` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_oficinas`
--

INSERT INTO `tb_oficinas` (`id`, `qnt_vagas`, `vagas_preenchidas`, `nome`, `expositor`) VALUES
(1, 40, 3, 'Gestão de Finanças Pessoais', 'teste'),
(2, 40, 0, 'Redação Oficial na Adm. Pública', NULL),
(3, 40, 3, 'Dimensões de Orçamento Público Municipal', NULL),
(4, 9, 1, 'Humanização no Atendimento à Saúde', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_participante`
--

DROP TABLE IF EXISTS `tb_participante`;
CREATE TABLE `tb_participante` (
  `id` int(10) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cpf` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `endereco` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bairro` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `celular` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cargo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `setor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_oficina` int(10) DEFAULT NULL,
  `transporte` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_participante`
--

INSERT INTO `tb_participante` (`id`, `nome`, `cpf`, `endereco`, `bairro`, `celular`, `cargo`, `setor`, `id_oficina`, `transporte`) VALUES
(1, 'Vagner Pereira Vieira', '294.316.110-15', 'RUA MARCOS ANANIAS SOARES 56', 'JARDIM IRACEMA ', '33988590229', 'ASSESSOR DE INFORMATICA II', 'PLANEJAMENTO', 1, NULL),
(2, 'Thaylon Paulino Ferreira', '823.915.410-74', 'Alameda dos Anjos', 'JARDIM IRACEMA ', '33988590229', 'ASSESSOR DE INFORMATICA II', 'PLANEJAMENTO', 1, NULL),
(3, 'Thaylon Paulino Ferreira', '823.915.410-74', 'Alameda dos Anjos', 'JARDIM IRACEMA ', '33988590229', 'ASSESSOR DE INFORMATICA II', 'PLANEJAMENTO', 1, NULL),
(5, 'joao', '861.509.770-48', 'RUA MARCOS ANANIAS SOARES 56', 'teste', '33988590229', 'ASSESSOR DE INFORMATICA II', 'PLANEJAMENTO', 3, NULL),
(6, 'Getulio Pereira Dos Santos Junior', '225.751.280-48', 'RUA MARCOS ANANIAS SOARES 56', 'JARDIM IRACEMA ', '33988590229', 'ASSESSOR DE INFORMATICA II', 'PLANEJAMENTO', 1, NULL),
(7, 'Vagner Pereira Vieira', '086.997.940-02', 'RUA MARCOS ANANIAS SOARES 56', 'JARDIM IRACEMA ', '33988590229', 'ASSESSOR DE INFORMATICA II', 'PLANEJAMENTO', 3, 'Sim'),
(8, 'FRANKLEY DA SILVA SANTOS', '090.198.726-30', 'RUA MARCOS ANANIAS SOARES 56', 'JARDIM IRACEMA ', '33988590229', 'ASSESSOR DE INFORMATICA II', 'PLANEJAMENTO', 4, 'Não');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_oficinas`
--
ALTER TABLE `tb_oficinas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_participante`
--
ALTER TABLE `tb_participante`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_oficina` (`id_oficina`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_oficinas`
--
ALTER TABLE `tb_oficinas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_participante`
--
ALTER TABLE `tb_participante`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
