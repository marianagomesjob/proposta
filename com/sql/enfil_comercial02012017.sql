-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02-Jan-2017 às 09:49
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enfil_comercial`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `enfil_prosposta`
--

CREATE TABLE `enfil_prosposta` (
  `id_prosposta` int(6) NOT NULL,
  `num_processo` varchar(255) NOT NULL,
  `cliente` varchar(255) NOT NULL,
  `fornecedor` varchar(255) NOT NULL,
  `observacao` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `respa` varchar(255) NOT NULL,
  `respb` varchar(255) NOT NULL,
  `respc` varchar(255) NOT NULL,
  `respd` varchar(255) NOT NULL,
  `respe` varchar(255) NOT NULL,
  `respf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `enfil_usuario`
--

CREATE TABLE `enfil_usuario` (
  `id_usuario` int(4) NOT NULL,
  `id_setdep` int(4) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ramal` varchar(255) NOT NULL,
  `tel_com` varchar(255) NOT NULL,
  `tel_cel` varchar(255) NOT NULL,
  `cargo` varchar(255) NOT NULL,
  `perfil` varchar(255) NOT NULL,
  `setor` enum('set1','set2','set3') NOT NULL,
  `departamento` enum('dept1','dept2','dept3','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `enfil_usuario`
--

INSERT INTO `enfil_usuario` (`id_usuario`, `id_setdep`, `nome`, `login`, `email`, `ramal`, `tel_com`, `tel_cel`, `cargo`, `perfil`, `setor`, `departamento`) VALUES
(1, 0, 'USER1', 'USER1', 'USER1@USER1', '2222', '2222-2222', '9222-2222', 'USER1', '', 'set1', 'dept1'),
(2, 1, 'USER1', 'USER1', 'USER1@USER1', '2222', '2222-2222', '9222-2222', 'USER1', '', 'set1', 'dept1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enfil_prosposta`
--
ALTER TABLE `enfil_prosposta`
  ADD PRIMARY KEY (`id_prosposta`);

--
-- Indexes for table `enfil_usuario`
--
ALTER TABLE `enfil_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enfil_prosposta`
--
ALTER TABLE `enfil_prosposta`
  MODIFY `id_prosposta` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `enfil_usuario`
--
ALTER TABLE `enfil_usuario`
  MODIFY `id_usuario` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
