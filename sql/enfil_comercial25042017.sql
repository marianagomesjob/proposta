-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25-Abr-2017 às 22:47
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
(7, 0, 0, 'Ligar', 'Mariana 9', '2017-01-12', '2 horas ', 'Michele Obama', '', ' LigaÃ§Ã£o para teste'),
(9, 0, 0, 'ReuniÃ£o', 'Mariana 11', '2017-02-17', '30 dias  ', 'Mariana Gomes', '', 'rerere');

-- --------------------------------------------------------

--
-- Estrutura da tabela `enfil_budget`
--

CREATE TABLE `enfil_budget` (
  `id_budget` int(4) NOT NULL,
  `budget_empresa` varchar(255) NOT NULL,
  `budget_num_processo` varchar(225) NOT NULL,
  `budget_cliente` varchar(255) NOT NULL,
  `budget_segmento` varchar(255) NOT NULL,
  `budget_assunto` varchar(255) NOT NULL,
  `budget_respt` varchar(255) NOT NULL,
  `budget_respc` varchar(255) NOT NULL,
  `budget_respcoord` varchar(255) NOT NULL,
  `budget_prop_tec` varchar(255) NOT NULL,
  `budget_prop_com` varchar(255) NOT NULL,
  `budget_estima_valor` int(20) NOT NULL,
  `budget_valor` int(20) NOT NULL,
  `budget_chance` varchar(255) NOT NULL,
  `budget_prioridade` varchar(255) NOT NULL,
  `budget_datacompa` varchar(255) NOT NULL,
  `budget_datacompb` varchar(255) NOT NULL,
  `budget_interacao` varchar(255) NOT NULL,
  `budget_status` varchar(255) NOT NULL,
  `budget_observacao` varchar(255) NOT NULL,
  `budget_vira_prop` varchar(255) NOT NULL,
  `budget_existe_pro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `enfil_budget`
--

INSERT INTO `enfil_budget` (`id_budget`, `budget_empresa`, `budget_num_processo`, `budget_cliente`, `budget_segmento`, `budget_assunto`, `budget_respt`, `budget_respc`, `budget_respcoord`, `budget_prop_tec`, `budget_prop_com`, `budget_estima_valor`, `budget_valor`, `budget_chance`, `budget_prioridade`, `budget_datacompa`, `budget_datacompb`, `budget_interacao`, `budget_status`, `budget_observacao`, `budget_vira_prop`, `budget_existe_pro`) VALUES
(1, '1', 'CS-16070-04-L', 'CS-16070-04-L', '', 'CS-16070-04-L', '3', '2', '2', '', '2017-02-02', 2017, 500000, '1', '2', '', '', '', 'Em elaboracao', 'CS-16070-04-L', 'sim', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `enfil_cliente`
--

CREATE TABLE `enfil_cliente` (
  `id_cliente` int(4) NOT NULL,
  `cliente_empresa` varchar(255) NOT NULL,
  `cliente_telefone` varchar(255) NOT NULL,
  `cliente_email` varchar(255) NOT NULL,
  `cliente_responsa` varchar(255) NOT NULL,
  `cliente_endereco` varchar(255) NOT NULL,
  `cliente_atribuido` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `enfil_cliente`
--

INSERT INTO `enfil_cliente` (`id_cliente`, `cliente_empresa`, `cliente_telefone`, `cliente_email`, `cliente_responsa`, `cliente_endereco`, `cliente_atribuido`) VALUES
(1, 'Enfilcxvxcvxvghjghjg', '4444-4444', 'Enfil@Enfil.com.br', 'genovevana ', 'Av cardoso de melo', ''),
(2, 'Andrea', '5555-5555', 'Enfil@Enfil.com.br', 'andrea', 'Av cardoso de melo', 'Mariana Gomes'),
(3, 'Teste Enfil', '114782-8888', 'Teste@TESTE.COM', 'Ana Paula', 'Rua Canada', 'Mariana Gomes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `enfil_fornecedor`
--

CREATE TABLE `enfil_fornecedor` (
  `id_fornecedor` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `enfil_orcamento`
--

CREATE TABLE `enfil_orcamento` (
  `id_orcamento` int(11) NOT NULL,
  `orcamento_empresa` varchar(225) NOT NULL,
  `orcamento_segmento` varchar(225) NOT NULL,
  `orcamento_num` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `enfil_orcamento`
--

INSERT INTO `enfil_orcamento` (`id_orcamento`, `orcamento_empresa`, `orcamento_segmento`, `orcamento_num`) VALUES
(1, 'ECA', '', ''),
(2, 'ARG', '', ''),
(3, 'ECA', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `enfil_pessoa`
--

CREATE TABLE `enfil_pessoa` (
  `id_pessoa` int(6) NOT NULL,
  `pessoa_nome` varchar(255) NOT NULL,
  `pessoa_tipo_contato` varchar(255) NOT NULL,
  `pessoa_email` varchar(255) NOT NULL,
  `pessoa_cliente` varchar(255) NOT NULL,
  `pessoa_telefone` varchar(255) NOT NULL,
  `pessoa_atribuido` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `enfil_pessoa`
--

INSERT INTO `enfil_pessoa` (`id_pessoa`, `pessoa_nome`, `pessoa_tipo_contato`, `pessoa_email`, `pessoa_cliente`, `pessoa_telefone`, `pessoa_atribuido`) VALUES
(3, 'testee', 'Selecione', 't@teste.com.br', 'enfil', '4782-8888', 'Mariana Gomes'),
(6, 'teste', 'Trabalho', 'teste@teste', 'teste', '114778222', 'Mariana Gomes');

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
  `respf` varchar(255) NOT NULL,
  `pro_data_criacao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `enfil_proposta`
--

INSERT INTO `enfil_proposta` (`id_proposta`, `id_usuario`, `num_processo`, `cliente`, `fornecedor`, `observacao`, `resp_tec`, `resp_com`, `status`, `respa`, `respb`, `respc`, `respd`, `respe`, `respf`, `pro_data_criacao`) VALUES
(1, 0, 'PR-16070-04-L', 'enfil', 'PR-16070-04-L', 'PR-16070-04-L', 'Mariana Gomes', 'Mariana Gomes', 'em elaboraÃ§Ã£o', 'sim', 'sim', 'nao', 'nao', 'sim', 'sim', '2017-07-12'),
(4, 0, 'PR-16070-04-L', 'enfil22', 'M899988-L', 'PR-16070-04-L', '', '', 'Em ElaboraÃ§Ã£o', '', '', '', '', '', '', '2017-07-12'),
(5, 0, 'PR-16070-04-L', 'enfil', 'MR-16070-04-L', 'PR-16070-04-L', 'Mariana Gomes', '', 'Perdido', '', '', '', '', '', '', '2017-07-12'),
(6, 0, 'PR-16070-04-L', 'enfil', 'MR-16070-04-L', 'PR-16070-04-L', '', '', 'Perdido', 'on', '', '', '', '', '', '2017-07-12'),
(7, 0, 'mariana', 'teste', 'tste', 'teste', 'Mariana Gomes', 'Mariana Gomes', 'em elaboraÃ§Ã£o', 'sim', 'nao', 'nao', 'sim', 'sim', 'sim', '2016-12-20'),
(9, 0, 'mariana', 'Teste Nova uniÃ£o', 'tste', 'teste', 'Mariana Gomes', '', 'Em ElaboraÃ§Ã£o', '', '', '', '', '', '', '2016-12-20'),
(10, 0, 'PR-16070-04-L', 'Enfil', 'MR-16070-04-L', 'PR-16070-04-L ', '', '', 'Perdido', 'sim', 'nao', 'sim', 'sim', 'nao', 'sim', '2017-07-12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `enfil_teste`
--

CREATE TABLE `enfil_teste` (
  `id_enfil` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `enfil_projeto` varchar(255) NOT NULL,
  `enfil_orcamento` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `enfil_teste`
--

INSERT INTO `enfil_teste` (`id_enfil`, `nome`, `enfil_projeto`, `enfil_orcamento`) VALUES
(1, 'Mariana ', 'Sim', 'Analista');

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
  `datanasc` varchar(255) NOT NULL,
  `ramal` varchar(255) NOT NULL,
  `tel_com` varchar(255) NOT NULL,
  `tel_cel` varchar(255) NOT NULL,
  `cargo` varchar(255) NOT NULL,
  `perfil` varchar(255) NOT NULL,
  `setor` varchar(255) NOT NULL,
  `departamento` varchar(255) NOT NULL,
  `observacao` varchar(255) NOT NULL,
  `ativo` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `enfil_usuario`
--

INSERT INTO `enfil_usuario` (`id_usuario`, `id_setdep`, `nome`, `usuario`, `senha`, `email`, `datanasc`, `ramal`, `tel_com`, `tel_cel`, `cargo`, `perfil`, `setor`, `departamento`, `observacao`, `ativo`, `status`) VALUES
(1, 0, 'Mariana Gomes', 'mariana.silva', '12345', 'mariana.silva@teste.com', '1989-08-03', '2906', '118000-8000', '1198000-8000', 'Diretoria', 'Array', '', 'Comercial', '', '', ''),
(2, 0, 'Carlos Espinola', 'carlos.espinola ', '12345', 'carlos@teste.com', '1989-01-01', '2222', '114444-4444', '117777-8888', 'Diretoria', 'Array', '', 'Comercial', '', '', 'Ativo'),
(3, 0, 'Michele Obama', 'michele.obama', '', 'micheleobama@casabranca.com', '1989-12-21', '22', '118999-8888', '1196306-9251', 'Diretoria', 'Array', '', 'Comercial', '', '', 'Ativo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enfil_agenda`
--
ALTER TABLE `enfil_agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `enfil_budget`
--
ALTER TABLE `enfil_budget`
  ADD PRIMARY KEY (`id_budget`);

--
-- Indexes for table `enfil_cliente`
--
ALTER TABLE `enfil_cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `enfil_fornecedor`
--
ALTER TABLE `enfil_fornecedor`
  ADD PRIMARY KEY (`id_fornecedor`);

--
-- Indexes for table `enfil_orcamento`
--
ALTER TABLE `enfil_orcamento`
  ADD PRIMARY KEY (`id_orcamento`);

--
-- Indexes for table `enfil_pessoa`
--
ALTER TABLE `enfil_pessoa`
  ADD PRIMARY KEY (`id_pessoa`);

--
-- Indexes for table `enfil_proposta`
--
ALTER TABLE `enfil_proposta`
  ADD PRIMARY KEY (`id_proposta`);

--
-- Indexes for table `enfil_teste`
--
ALTER TABLE `enfil_teste`
  ADD PRIMARY KEY (`id_enfil`);

--
-- Indexes for table `enfil_usuario`
--
ALTER TABLE `enfil_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enfil_agenda`
--
ALTER TABLE `enfil_agenda`
  MODIFY `id_agenda` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `enfil_budget`
--
ALTER TABLE `enfil_budget`
  MODIFY `id_budget` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `enfil_cliente`
--
ALTER TABLE `enfil_cliente`
  MODIFY `id_cliente` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `enfil_fornecedor`
--
ALTER TABLE `enfil_fornecedor`
  MODIFY `id_fornecedor` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `enfil_orcamento`
--
ALTER TABLE `enfil_orcamento`
  MODIFY `id_orcamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `enfil_pessoa`
--
ALTER TABLE `enfil_pessoa`
  MODIFY `id_pessoa` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `enfil_proposta`
--
ALTER TABLE `enfil_proposta`
  MODIFY `id_proposta` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `enfil_teste`
--
ALTER TABLE `enfil_teste`
  MODIFY `id_enfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `enfil_usuario`
--
ALTER TABLE `enfil_usuario`
  MODIFY `id_usuario` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
