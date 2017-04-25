-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13-Jan-2017 às 21:03
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 5.5.38

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
-- Estrutura da tabela `com_user`
--

CREATE TABLE `com_user` (
  `id_user` int(4) NOT NULL,
  `senha` varchar(225) NOT NULL,
  `usuario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `com_user`
--

INSERT INTO `com_user` (`id_user`, `senha`, `usuario`) VALUES
(1, '12345', 'mariana.silva');

-- --------------------------------------------------------

--
-- Estrutura da tabela `enfil_agenda`
--

CREATE TABLE `enfil_agenda` (
  `id_agenda` int(4) NOT NULL,
  `id_proposta` int(4) NOT NULL,
  `id_budget` int(4) NOT NULL,
  `agenda_atividade` varchar(255) NOT NULL,
  `agenda_titulo` varchar(255) NOT NULL,
  `agenda_data` varchar(255) NOT NULL,
  `agenda_duracao` varchar(255) NOT NULL,
  `agenda_atribuido` varchar(255) NOT NULL,
  `agenda_vinculo_prop` varchar(255) NOT NULL,
  `agenda_nota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `enfil_agenda`
--

INSERT INTO `enfil_agenda` (`id_agenda`, `id_proposta`, `id_budget`, `agenda_atividade`, `agenda_titulo`, `agenda_data`, `agenda_duracao`, `agenda_atribuido`, `agenda_vinculo_prop`, `agenda_nota`) VALUES
(1, 0, 0, '06', 'teste', '21-02-2017', '5', '1', '', 'serserereswr');

-- --------------------------------------------------------

--
-- Estrutura da tabela `enfil_fornecedor`
--

CREATE TABLE `enfil_fornecedor` (
  `id_fornecedor` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `enfil_proposta`
--

CREATE TABLE `enfil_proposta` (
  `id_proposta` int(6) NOT NULL,
  `id_usuario` int(4) NOT NULL,
  `num_processo` varchar(255) NOT NULL,
  `cliente` varchar(255) NOT NULL,
  `fornecedor` varchar(255) NOT NULL,
  `observacao` varchar(255) NOT NULL,
  `resp_tec` varchar(255) NOT NULL,
  `resp_com` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `respa` varchar(255) NOT NULL,
  `respb` varchar(255) NOT NULL,
  `respc` varchar(255) NOT NULL,
  `respd` varchar(255) NOT NULL,
  `respe` varchar(255) NOT NULL,
  `respf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `enfil_proposta`
--

INSERT INTO `enfil_proposta` (`id_proposta`, `id_usuario`, `num_processo`, `cliente`, `fornecedor`, `observacao`, `resp_tec`, `resp_com`, `status`, `respa`, `respb`, `respc`, `respd`, `respe`, `respf`) VALUES
(1, 0, 'CS-16070-04-P', 'PetrobrÃ¡s', 'PETROBRAS QUIMICA', 'PETROBRAS QUIMICA', '3', '2', 'perdido', 'sim', 'sim', 'nao', 'sim', 'sim', 'nao'),
(2, 0, 'CS-16070-04-A', 'INTO', 'INTO', 'INTO', '3', '1', 'em_elaboracao', 'nao', 'sim', 'sim', 'sim', 'nao', 'nao'),
(3, 0, 'CS-16070-04-A', 'INTO', 'INTO', 'INTO', '3', '1', 'em_elaboracao', 'nao', 'sim', 'sim', 'sim', 'nao', 'nao'),
(4, 0, 'CS-16070-04-A', 'INTO', 'INTO', 'INTO', '3', '1', 'em_elaboracao', 'nao', 'sim', 'sim', 'sim', 'nao', 'nao'),
(5, 0, 'CS-16070-04-k', 'CS-16070-04-k', 'CS-16070-04-k', 'CS-16070-04-k', '1', '2', 'em_elaboracao', 'sim', 'sim', 'nao', 'sim', 'nao', 'sim'),
(6, 0, 'xdfxdf', 'dfsdf', 'sdfs', 'sdfs', '1', '1', 'em_elaboracao', 'nao', 'nao', 'sim', 'nao', 'nao', 'sim'),
(7, 0, 'xdfxdf', 'dfsdf', 'sdfs', 'sdfs', '1', '1', 'em_elaboracao', 'nao', 'nao', 'sim', 'nao', 'nao', 'sim'),
(8, 0, 'CS-16070-04-C', 'CS-16070-04-C', 'CS-16070-04-C', 'CS-16070-04-C', '2', '1', 'em_elaboracao', 'sim', 'nao', 'sim', 'sim', 'nao', 'sim'),
(9, 0, 'CS-16070-04-C', 'CS-16070-04-C', 'CS-16070-04-C', 'CS-16070-04-C', '2', '1', 'em_elaboracao', 'sim', 'nao', 'sim', 'sim', 'nao', 'sim'),
(10, 0, 'PR-17010-06-R', 'PR-17010-06-R', 'PR-17010-06-R', 'PR-17010-06-R', '2', '3', 'suspenso', 'sim', 'sim', 'nao', 'sim', 'sim', 'nao'),
(11, 0, 'PR-17012-05-Q', 'PR-17012-05-Q', 'PR-17012-05-Q', 'PR-17012-05-Q', '1', '3', 'em_elaboracao', 'sim', 'sim', 'sim', 'sim', 'sim', 'sim'),
(12, 0, 'PR-17012-05-Q', 'PR-17012-05-Q', 'PR-17012-05-Q', 'PR-17012-05-Q', '1', '3', 'em_elaboracao', 'sim', 'sim', 'sim', 'sim', 'sim', 'sim'),
(13, 0, 'PR-17012-05-Q', 'PR-17012-05-Q', 'PR-17012-05-Q', 'PR-17012-05-Q', '1', '3', 'em_elaboracao', 'sim', 'sim', 'sim', 'sim', 'sim', 'sim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `enfil_usuario`
--

CREATE TABLE `enfil_usuario` (
  `id_usuario` int(4) NOT NULL,
  `id_setdep` int(4) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
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

INSERT INTO `enfil_usuario` (`id_usuario`, `id_setdep`, `nome`, `usuario`, `senha`, `email`, `ramal`, `tel_com`, `tel_cel`, `cargo`, `perfil`, `setor`, `departamento`) VALUES
(1, 0, 'Mariana Gomes', 'mariana.silva', '12345', 'USER1@USER1', '2222', '2222-2222', '9222-2222', 'USER1', '', 'set1', 'dept1'),
(2, 1, 'Ana Vieira', 'ana.vieira', '654321', 'USER1@USER1', '2222', '2222-2222', '9222-2222', 'USER1', '', 'set1', 'dept1'),
(3, 2, 'Michele Obama', 'michele.obama', '12345', 'michele.obama@michele.obama', '', '', '', '', '', '', ''),
(4, 3, 'Dilma Obama ', 'dilma.obama', 'teste', 'teste@teste.com.br', '', '', '', '', '', '', ''),
(5, 5, ' Joana Silva', 'joana.silva', '12345', 'joana.silva@gmail.com', '', '', '', '', '', 'set1', 'dept1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `com_user`
--
ALTER TABLE `com_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `enfil_agenda`
--
ALTER TABLE `enfil_agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `enfil_fornecedor`
--
ALTER TABLE `enfil_fornecedor`
  ADD PRIMARY KEY (`id_fornecedor`);

--
-- Indexes for table `enfil_proposta`
--
ALTER TABLE `enfil_proposta`
  ADD PRIMARY KEY (`id_proposta`);

--
-- Indexes for table `enfil_usuario`
--
ALTER TABLE `enfil_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `com_user`
--
ALTER TABLE `com_user`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `enfil_agenda`
--
ALTER TABLE `enfil_agenda`
  MODIFY `id_agenda` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `enfil_fornecedor`
--
ALTER TABLE `enfil_fornecedor`
  MODIFY `id_fornecedor` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `enfil_proposta`
--
ALTER TABLE `enfil_proposta`
  MODIFY `id_proposta` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `enfil_usuario`
--
ALTER TABLE `enfil_usuario`
  MODIFY `id_usuario` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
