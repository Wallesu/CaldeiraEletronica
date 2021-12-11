-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Dez-2021 às 01:21
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_eletronicacaldeira`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'Id da empresa',
  `cnpj` varchar(14) NOT NULL COMMENT 'Cnpj da empresa',
  `razao_social` text NOT NULL COMMENT 'descrição das atividades da empresa',
  `inscricao_estadual` int(10) UNSIGNED NOT NULL COMMENT 'Inscrição estadual da empresa',
  `ddd` smallint(5) UNSIGNED NOT NULL COMMENT 'DDD do telefone da empresa',
  `telefone` int(10) UNSIGNED NOT NULL COMMENT 'Número de telefone da empresa',
  `cidade` varchar(32) NOT NULL COMMENT 'cidade da empresa ',
  `rua` varchar(50) NOT NULL COMMENT 'rua da empresa',
  `bairro` varchar(50) NOT NULL COMMENT 'bairro em que a empresa se localiza',
  `numero` int(10) UNSIGNED NOT NULL COMMENT 'numero da empresa',
  `complemento` text NOT NULL COMMENT 'dados adicionais da localização da empresa',
  `cep` varchar(10) NOT NULL COMMENT 'cep da empresa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabela com dados da empresa';

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id`, `cnpj`, `razao_social`, `inscricao_estadual`, `ddd`, `telefone`, `cidade`, `rua`, `bairro`, `numero`, `complemento`, `cep`) VALUES
(1, '23565333000198', 'Eletrônica Caldeira', 479001129, 47, 34346557, 'Joinville', 'Blumenau', 'Santo Antônio', 234, '', '89734122');

-- --------------------------------------------------------

--
-- Estrutura da tabela `faq`
--

CREATE TABLE `faq` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'id do faq, gerado automaticamente',
  `perguntas_Frequentes` text NOT NULL COMMENT 'Perguntas selecionadas',
  `respostas` text NOT NULL COMMENT 'Respostas das perguntas selecionadas'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nota_fiscal`
--

CREATE TABLE `nota_fiscal` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'Id gerado automaticamente',
  `empresa_id` int(10) UNSIGNED NOT NULL COMMENT 'Chave estrangeira da tabela empresa',
  `data` date NOT NULL COMMENT 'Data em que foi emitida a nota fiscal'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `nota_fiscal`
--

INSERT INTO `nota_fiscal` (`id`, `empresa_id`, `data`) VALUES
(1, 1, '0000-00-00'),
(2, 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `id` int(5) UNSIGNED NOT NULL COMMENT 'ID do serviço, gerado automaticamente',
  `solicitacao_id` int(11) UNSIGNED NOT NULL COMMENT 'Chave estrangeira da tabela solicitação',
  `usuario_id` int(10) UNSIGNED NOT NULL COMMENT 'Chave estrangeira da tabela usuários',
  `orcamento` decimal(7,2) NOT NULL COMMENT 'valor decimal que registra o valor do orçamento.',
  `relatorio_tecnico` text NOT NULL COMMENT 'Detalhes do relatório do serviço',
  `duracao` varchar(35) NOT NULL COMMENT 'Duração total do serviço',
  `nota_fiscal_id` int(10) UNSIGNED NOT NULL COMMENT 'Chave estrangeira da nota fiscal',
  `liberacao_cliente` varchar(30) NOT NULL COMMENT 'Data em que produto foi liberado ao cliente',
  `data_real` date NOT NULL COMMENT 'Data em que foi realizado o serviço',
  `tecnico_id` int(10) UNSIGNED NOT NULL COMMENT 'id de cada usuário inserido manualmente, ou inserido pelo sistema quando um funcionário aceita um serviço'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `solicitacao_id`, `usuario_id`, `orcamento`, `relatorio_tecnico`, `duracao`, `nota_fiscal_id`, `liberacao_cliente`, `data_real`, `tecnico_id`) VALUES
(1, 1, 3, '1300.00', 'O produto apresentou uma tela completamente quebrada, o que gerou a necessidade da troca do cristal, além de ter danificado o display.', '20', 1, '', '0000-00-00', 2),
(2, 2, 4, '750.00', 'O produto apresentou uma tela completamente quebrada, o que gerou a necessidade da troca do cristal.', '15', 2, '', '0000-00-00', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacoes`
--

CREATE TABLE `solicitacoes` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'id da solicitação do cliente',
  `usuario_id` int(10) UNSIGNED NOT NULL COMMENT 'Chave estrangeira da tabela usuários',
  `descricao_cliente` text NOT NULL COMMENT 'descrição do produto',
  `foto_produto` mediumblob NOT NULL COMMENT 'imagem do produto para verificação dos funcionários',
  `status` varchar(10) NOT NULL COMMENT 'status do pedido "APROVADO", "REPROVADO".',
  `nome_produto` varchar(32) NOT NULL COMMENT 'nome do produto',
  `marca_produto` varchar(32) NOT NULL COMMENT 'marca do produto',
  `data` datetime NOT NULL COMMENT 'data e hora em que a requisição foi criada'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabela de solicitações de pedidos atrelada a tabela serviço';

--
-- Extraindo dados da tabela `solicitacoes`
--

INSERT INTO `solicitacoes` (`id`, `usuario_id`, `descricao_cliente`, `foto_produto`, `status`, `nome_produto`, `marca_produto`) VALUES
(1, 3, 'O produto caiu e trincou a tela, além disso não está ligando mais.', 0x6434316438636439386630306232303465393830303939386563663834323765, 'solicitado', 'Iphone 5s', 'Apple'),
(2, 4, 'Quebrei a tela do celular, poderia me ajudar com um orçamento para uma nova tela?', 0x6434316438636439386630306232303465393830303939386563663834323765, 'Solicitado', 'Samsung J9', 'Samsung');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_usuarios`
--

CREATE TABLE `tipo_usuarios` (
  `id` int(11) UNSIGNED NOT NULL COMMENT 'id do tipo de usuário',
  `descricao` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabela para cadastrar o tipo de usuário atrelada ao cliente.';

--
-- Extraindo dados da tabela `tipo_usuarios`
--

INSERT INTO `tipo_usuarios` (`id`, `descricao`) VALUES
(1, 'Administrativo'),
(2, 'Funcionario'),
(3, 'Cliente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'id de cada usuário inserido automaticamente ',
  `tipo_usuario_id` int(10) UNSIGNED NOT NULL COMMENT 'Chave estrangeira da tabela tipo usuário',
  `nome` varchar(50) NOT NULL COMMENT 'nome e sobrenome de cada usuário',
  `email` varchar(77) NOT NULL COMMENT 'e-mail de cada usuário',
  `senha` varchar(32) NOT NULL COMMENT 'senha de cada usuário',
  `cpf` varchar(11) NOT NULL COMMENT 'cpf de cada usuário',
  `telefone` varchar(11) NOT NULL COMMENT 'telefone de cada usuário',
  `cidade` varchar(32) NOT NULL COMMENT 'nome da cidade do usuário',
  `rua` varchar(50) NOT NULL COMMENT 'nome da rua de cada usuário',
  `bairro` varchar(50) NOT NULL COMMENT 'nome do bairro do usuário',
  `numero` int(10) UNSIGNED NOT NULL COMMENT 'número da residência do usuário',
  `complemento` text NOT NULL COMMENT 'detalhes adicionas sobre a localização da residência do usuário',
  `cep` varchar(10) NOT NULL COMMENT 'cep de cada usuário'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabela para cadastro dos cliente atrelada ao tipo de usuário';

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `tipo_usuario_id`, `nome`, `email`, `senha`, `cpf`, `telefone`, `cidade`, `rua`, `bairro`, `numero`, `complemento`, `cep`) VALUES
(1, 1, 'Ângela Caldeira', 'ang.Caldeira@gmail.com', '123abc', '00100200345', '47993245323', 'Joinville', 'Rodrigo primeiro', 'São pedro', 12, '', '98734213'),
(2, 2, 'Juliano Franco', 'juliano23@gmail.com', '123abc', '00200300456', '46977434254', 'Joinville', 'Julio crivo', 'América', 47, '', '54647891'),
(3, 3, 'Rose Carvalho', 'rose.c@gmail.com', '123abc', '12345678900', '43989876544', 'Curitiba', 'Joana de Barros', 'Boqueirão', 32, '', '32421235'),
(4, 3, 'José Vinicius', 'jose_vini@gmail.com', '123456', '12332145677', '47898964539', 'Joinville', 'Av. dos pilares', 'Iririú', 1232, '', '98769912'),
(5, 2, 'Carla Rodrigues', 'carla.r12@gmail.com', '654321', '11125377864', '49988121669', 'Balneário Piçarras', 'Janaina moreira', 'União', 243, '', '32499908');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `nota_fiscal`
--
ALTER TABLE `nota_fiscal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empresa_id` (`empresa_id`);

--
-- Índices para tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `solicitacao_id` (`solicitacao_id`),
  ADD UNIQUE KEY `nota_fiscal_os` (`nota_fiscal_id`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `fk_tecnico_id` (`tecnico_id`);

--
-- Índices para tabela `solicitacoes`
--
ALTER TABLE `solicitacoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Índices para tabela `tipo_usuarios`
--
ALTER TABLE `tipo_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipo_usuario_id` (`tipo_usuario_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Id da empresa', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id do faq, gerado automaticamente';

--
-- AUTO_INCREMENT de tabela `nota_fiscal`
--
ALTER TABLE `nota_fiscal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Id gerado automaticamente', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID do serviço, gerado automaticamente', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `solicitacoes`
--
ALTER TABLE `solicitacoes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id da solicitação do cliente', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tipo_usuarios`
--
ALTER TABLE `tipo_usuarios`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id do tipo de usuário', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id de cada usuário inserido automaticamente ', AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `nota_fiscal`
--
ALTER TABLE `nota_fiscal`
  ADD CONSTRAINT `nota_fiscal_ibfk_1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`);

--
-- Limitadores para a tabela `servicos`
--
ALTER TABLE `servicos`
  ADD CONSTRAINT `fk_tecnico_id` FOREIGN KEY (`tecnico_id`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `servicos_ibfk_1` FOREIGN KEY (`nota_fiscal_id`) REFERENCES `nota_fiscal` (`id`),
  ADD CONSTRAINT `servicos_ibfk_2` FOREIGN KEY (`solicitacao_id`) REFERENCES `solicitacoes` (`id`),
  ADD CONSTRAINT `servicos_ibfk_3` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Limitadores para a tabela `solicitacoes`
--
ALTER TABLE `solicitacoes`
  ADD CONSTRAINT `solicitacoes_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`tipo_usuario_id`) REFERENCES `tipo_usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
