-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Dez-2020 às 01:29
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `managershop`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `caixa`
--

CREATE TABLE `caixa` (
  `id` int(10) UNSIGNED NOT NULL,
  `movimento` int(10) DEFAULT NULL COMMENT '1.entrada / 2. saida',
  `operacao` int(10) DEFAULT NULL COMMENT '1.venda / 2.despesa / 3.sangria',
  `valor` varchar(20) DEFAULT NULL,
  `cliente` int(11) DEFAULT NULL,
  `vendedor` int(11) DEFAULT NULL,
  `fornecedor` int(11) DEFAULT NULL,
  `formapagamento` varchar(11) DEFAULT NULL COMMENT '1. dinheiro / 2.debito / 3.credito / 4. cheque',
  `parcelas` int(5) DEFAULT 1,
  `despesadescricao` varchar(120) DEFAULT NULL,
  `status` int(5) DEFAULT NULL COMMENT '1.ativo / 2.cancelado / 3.andamento / 4. concluido',
  `datatransacao` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `caixa`
--

INSERT INTO `caixa` (`id`, `movimento`, `operacao`, `valor`, `cliente`, `vendedor`, `fornecedor`, `formapagamento`, `parcelas`, `despesadescricao`, `status`, `datatransacao`) VALUES
(219, 1, 1, '56', 16, 1, 0, '1', 0, '', 4, '2020-12-23'),
(220, 2, 2, '59.90', NULL, 1, NULL, NULL, 1, 'Aluguel', 4, '2020-12-23'),
(222, 2, 2, '120.00', NULL, 1, NULL, NULL, 1, 'Internet', 4, '2020-12-23'),
(223, 2, 3, '500.00', NULL, 1, NULL, NULL, 1, 'Retirei para pagamento', 4, '2020-12-23'),
(224, 1, 1, '3', 16, 1, 0, '3', 2, '', 4, '2020-12-24'),
(225, 1, 1, '3', 16, 1, 0, '3', 2, '', 4, '2021-01-22'),
(226, 1, 1, '2500', 16, 1, 0, '1', 0, '', 4, '2020-12-23');

-- --------------------------------------------------------

--
-- Estrutura da tabela `caixa_venda_item`
--

CREATE TABLE `caixa_venda_item` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` int(10) DEFAULT NULL COMMENT 'codigo do caixa',
  `produto` int(10) DEFAULT NULL,
  `quantidade` int(5) DEFAULT NULL,
  `desconto` varchar(50) DEFAULT NULL,
  `valorvenda` varchar(50) DEFAULT NULL,
  `datatransacao` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `caixa_venda_item`
--

INSERT INTO `caixa_venda_item` (`id`, `codigo`, `produto`, `quantidade`, `desconto`, `valorvenda`, `datatransacao`) VALUES
(231, 174, 47, NULL, NULL, '234.23', '2020-12-21'),
(232, 175, 48, NULL, NULL, '213.21', '2020-12-21'),
(233, 175, 47, NULL, NULL, '234.23', '2020-12-21'),
(234, 177, 49, NULL, NULL, '213.21', '2020-12-21'),
(235, 179, 48, NULL, NULL, '213.21', '2020-12-21'),
(236, 180, 48, NULL, NULL, '213.21', '2020-12-21'),
(237, 181, 48, NULL, NULL, '213.21', '2020-12-21'),
(238, 182, 48, NULL, NULL, '213.21', '2020-12-21'),
(239, 183, 48, NULL, NULL, '213.21', '2020-12-21'),
(240, 184, 47, NULL, NULL, '234.23', '2020-12-21'),
(241, 184, 48, NULL, NULL, '213.21', '2020-12-21'),
(242, 185, 48, NULL, NULL, '213.21', '2020-12-21'),
(243, 185, 47, NULL, NULL, '234.23', '2020-12-21'),
(246, 186, 48, NULL, NULL, '213.21', '2020-12-21'),
(247, 186, 47, NULL, NULL, '234.23', '2020-12-21'),
(248, 187, 48, NULL, NULL, '213.21', '2020-12-21'),
(249, 187, 47, NULL, NULL, '234.23', '2020-12-21'),
(278, 219, 54, 1, NULL, '6.00', '2020-12-23'),
(279, 219, 55, 1, NULL, '50.00', '2020-12-23'),
(280, 224, 54, 1, NULL, '6.00', '2020-12-23'),
(281, 226, 57, 1, NULL, '2500.00', '2020-12-23');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `cpf` varchar(40) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `whatsapp` varchar(30) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `cep` varchar(50) DEFAULT NULL,
  `logradouro` varchar(60) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `complemento` varchar(150) NOT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `datacadastro` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `cpf`, `telefone`, `whatsapp`, `email`, `cep`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `datacadastro`) VALUES
(16, 'Felipe cliente', '35251690860', '11930937007', '11930937007', 'felipe@grudigital.com.br', '04468080', 'rua pontes de morais', '97', 'casa', 'jd.pedreira', 'São Paulo', 'SP', '2020-12-23 13:18:18');

-- --------------------------------------------------------

--
-- Estrutura da tabela `despesa`
--

CREATE TABLE `despesa` (
  `id` int(10) UNSIGNED NOT NULL,
  `despesa` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `despesa`
--

INSERT INTO `despesa` (`id`, `despesa`) VALUES
(4, 'Aluguel'),
(5, 'Internet'),
(6, 'Comissão de Fornecedor'),
(7, 'Comissão de Vendedor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedores`
--

CREATE TABLE `fornecedores` (
  `id` int(10) UNSIGNED NOT NULL,
  `cnpjcpf` varchar(20) DEFAULT NULL,
  `razaosocial` varchar(50) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `telefone` varchar(40) DEFAULT NULL,
  `whatsapp` varchar(40) DEFAULT NULL,
  `cep` varchar(15) DEFAULT NULL,
  `logradouro` varchar(100) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `complemento` varchar(120) DEFAULT NULL,
  `bairro` varchar(80) DEFAULT NULL,
  `cidade` varchar(40) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL,
  `observacoes` text DEFAULT NULL,
  `imagem` varchar(60) DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  `datacriacao` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `fornecedores`
--

INSERT INTO `fornecedores` (`id`, `cnpjcpf`, `razaosocial`, `email`, `senha`, `telefone`, `whatsapp`, `cep`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `observacoes`, `imagem`, `status`, `datacriacao`) VALUES
(19, '2615137800180', 'Felipe Fornecedor', 'felipe@grudigital.com.br', '21232f297a57a5a743894a0e4a801fc3', '11930937007', '11930937007', '04459320', 'Rua Santa Ursula', '97', 'Casa', 'Jd. Pedreira', 'São Paulo', 'SP', 'Não há', '', 1, '2020-12-23 13:18:53');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `quantidade` int(5) DEFAULT NULL,
  `categoria` varchar(40) DEFAULT NULL,
  `codigo` varchar(120) DEFAULT NULL,
  `genero` varchar(40) DEFAULT NULL,
  `peso` varchar(40) DEFAULT NULL,
  `largura` varchar(40) DEFAULT NULL,
  `altura` varchar(40) DEFAULT NULL,
  `comprimento` varchar(40) DEFAULT NULL,
  `localarmazenado` varchar(50) DEFAULT NULL,
  `valorcompra` varchar(15) DEFAULT NULL,
  `valorvenda` varchar(15) DEFAULT NULL,
  `fornecedor` int(20) DEFAULT NULL,
  `status` int(10) DEFAULT NULL COMMENT '1. ativo - 2. compra em andamento - 3.vendido  4. devolvido',
  `imagem` varchar(40) DEFAULT NULL,
  `roupa_categoria` int(10) DEFAULT NULL,
  `roupa_cor` int(10) DEFAULT NULL,
  `roupa_tamanho` int(10) DEFAULT NULL,
  `roupa_marca` int(10) DEFAULT NULL,
  `roupa_condicao` int(10) DEFAULT NULL,
  `roupa_higienizacao` int(10) DEFAULT NULL,
  `calcado_numero` int(10) DEFAULT NULL,
  `calcado_cor` int(10) DEFAULT NULL,
  `calcado_marca` int(10) DEFAULT NULL,
  `calcado_categoria` int(10) DEFAULT NULL,
  `calcado_condicao` int(10) DEFAULT NULL,
  `calcado_higienizacao` int(10) DEFAULT NULL,
  `outros_categoria` int(10) DEFAULT NULL,
  `outros_condicao` int(10) DEFAULT NULL,
  `outros_higienizacao` int(10) DEFAULT NULL,
  `datacadastro` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `titulo`, `quantidade`, `categoria`, `codigo`, `genero`, `peso`, `largura`, `altura`, `comprimento`, `localarmazenado`, `valorcompra`, `valorvenda`, `fornecedor`, `status`, `imagem`, `roupa_categoria`, `roupa_cor`, `roupa_tamanho`, `roupa_marca`, `roupa_condicao`, `roupa_higienizacao`, `calcado_numero`, `calcado_cor`, `calcado_marca`, `calcado_categoria`, `calcado_condicao`, `calcado_higienizacao`, `outros_categoria`, `outros_condicao`, `outros_higienizacao`, `datacadastro`) VALUES
(54, 'Meias', 3, '1', '6600123805242', '2', NULL, NULL, NULL, NULL, '7', '3.50', '6.00', 19, 1, '1608740372.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-23 13:19:24'),
(55, 'Camiseta', 1, '1', '3458411974121', '2', NULL, NULL, NULL, NULL, '7', '30.00', '50.00', 19, 1, '1608740405.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-23 13:19:50'),
(56, 'Tenis', 1, '2', '6124037209806', '2', NULL, NULL, NULL, NULL, '7', '60.00', '80.00', 19, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-23 13:20:23'),
(57, 'Camisa do fortaleza', 1, '1', '7621890706796', '2', NULL, NULL, NULL, NULL, '7', '1500.00', '2500.00', 19, 1, '1608764177.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-23 19:56:09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_armazenamento`
--

CREATE TABLE `produtos_armazenamento` (
  `id` int(10) UNSIGNED NOT NULL,
  `local` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos_armazenamento`
--

INSERT INTO `produtos_armazenamento` (`id`, `local`) VALUES
(7, 'Sala principal');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_categorias`
--

CREATE TABLE `produtos_categorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `categoria` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos_categorias`
--

INSERT INTO `produtos_categorias` (`id`, `categoria`) VALUES
(1, 'roupa'),
(2, 'calcado'),
(3, 'outros');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_genero`
--

CREATE TABLE `produtos_genero` (
  `id` int(10) UNSIGNED NOT NULL,
  `genero` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos_genero`
--

INSERT INTO `produtos_genero` (`id`, `genero`) VALUES
(1, 'feminino'),
(2, 'masculino'),
(3, 'outro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_parametros`
--

CREATE TABLE `produtos_parametros` (
  `id` int(10) UNSIGNED NOT NULL,
  `categoria` int(10) NOT NULL,
  `parametro` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos_parametros`
--

INSERT INTO `produtos_parametros` (`id`, `categoria`, `parametro`) VALUES
(14, 1, 'roupa_categoria'),
(15, 1, 'roupa_cor'),
(16, 1, 'roupa_tamanho'),
(17, 1, 'roupa_marca'),
(18, 1, 'roupa_condicao'),
(19, 1, 'roupa_higienizacao'),
(20, 2, 'calcado_numero'),
(21, 2, 'calcado_cor'),
(22, 2, 'calcado_marca'),
(23, 2, 'calcado_categoria'),
(24, 2, 'calcado_condicao'),
(25, 2, 'calcado_higienizacao'),
(26, 3, 'outros_categoria'),
(27, 3, 'outros_condicao'),
(28, 3, 'outros_higienizacao');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_parametros_opcoes`
--

CREATE TABLE `produtos_parametros_opcoes` (
  `id` int(10) UNSIGNED NOT NULL,
  `parametro` int(10) NOT NULL,
  `opcao` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos_parametros_opcoes`
--

INSERT INTO `produtos_parametros_opcoes` (`id`, `parametro`, `opcao`) VALUES
(28, 15, 'Azul'),
(29, 15, 'Verde'),
(30, 14, 'Blusa de frio'),
(31, 15, 'Vermelho'),
(32, 15, 'Amarelo'),
(33, 15, 'Branco'),
(34, 16, 'P'),
(35, 16, 'M'),
(36, 16, 'G'),
(37, 16, 'GG'),
(38, 16, 'XG'),
(39, 16, 'PP'),
(40, 17, 'Adidas'),
(41, 17, 'Nike'),
(42, 17, 'Puma'),
(43, 17, 'Asics'),
(44, 17, 'Topper'),
(45, 18, 'Novo'),
(46, 18, 'Seminovo'),
(47, 19, 'Sim'),
(48, 19, 'Não'),
(49, 20, '34'),
(50, 20, '35'),
(51, 20, '36'),
(52, 20, '37'),
(53, 20, '38'),
(54, 20, '39'),
(55, 20, '40'),
(56, 20, '41'),
(57, 21, 'Preto'),
(58, 21, 'Branco'),
(59, 21, 'Marrom'),
(60, 21, 'Vermelho'),
(61, 22, 'Nike'),
(62, 22, 'Adidas'),
(63, 22, 'Puma'),
(64, 22, 'Asics'),
(65, 22, 'Topper'),
(66, 23, 'Tênis Esportivo'),
(67, 23, 'Tênis passeio'),
(68, 25, 'Sim'),
(69, 25, 'Não'),
(70, 26, 'Bolsas'),
(71, 26, 'Acessórios'),
(72, 27, 'Novo'),
(73, 27, 'Seminovo'),
(74, 28, 'Sim'),
(75, 28, 'Não'),
(76, 14, 'Calça Jeans'),
(77, 24, 'Novo'),
(78, 24, 'Usado'),
(79, 14, 'Camisa de clubes'),
(80, 15, 'Preta'),
(81, 17, 'Michael Jordan'),
(82, 14, 'Camisa Social'),
(83, 17, 'Dudalina'),
(84, 23, 'Sapatenis'),
(85, 22, 'Polo'),
(86, 14, 'Nenhuma das opções'),
(87, 15, 'Nenhuma das opções'),
(88, 16, 'Nenhuma das opções'),
(89, 17, 'Nenhuma das opções'),
(90, 18, 'Nenhuma das opções'),
(91, 25, 'Nenhuma das opções'),
(92, 19, 'Nenhuma das opções'),
(93, 20, 'Nenhuma das opções'),
(94, 21, 'Nenhuma das opções'),
(95, 22, 'Nenhuma das opções'),
(96, 23, 'Nenhuma das opções'),
(97, 24, 'Nenhuma das opções'),
(98, 26, 'Nenhuma das opções'),
(99, 27, 'Nenhuma das opções'),
(100, 28, 'Nenhuma das opções');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_status`
--

CREATE TABLE `produtos_status` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos_status`
--

INSERT INTO `produtos_status` (`id`, `status`) VALUES
(1, 'ativo'),
(2, 'compra-em-andamento'),
(3, 'vendido'),
(4, 'devolvido');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `perfil` int(5) NOT NULL COMMENT '1.administrador / \r\n2.vendedor / 3.fornecedor',
  `fornecedor` int(11) DEFAULT NULL,
  `datacadastro` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `perfil`, `fornecedor`, `datacadastro`) VALUES
(1, 'Felipe Admin', 'felipe@grudigital.com.br', '21232f297a57a5a743894a0e4a801fc3', 1, NULL, '2020-08-01 17:03:15'),
(10, 'Maurício', 'mauricio@managershop.com.br', 'e10adc3949ba59abbe56e057f20f883e', 1, NULL, '2020-08-18 18:18:52'),
(12, 'Felipe Vend', 'vendedor@grudigital.com.br', '21232f297a57a5a743894a0e4a801fc3', 2, NULL, '2020-09-22 18:22:27'),
(13, 'Felipe Forn', 'fornecedor@grudigital.com.br', '21232f297a57a5a743894a0e4a801fc3', 3, NULL, '2020-11-16 17:08:31'),
(18, 'Agencia teste', 'contato@grudigital.com.br', '21232f297a57a5a743894a0e4a801fc3', 3, 0, '2020-12-18 11:30:48'),
(19, 'Brecho do neto', 'netto@grudigital.com.br', '21232f297a57a5a743894a0e4a801fc3', 3, 17, '2020-12-21 15:02:29'),
(20, 'Lourival Neto', 'netto@grudigital.com.br', '21232f297a57a5a743894a0e4a801fc3', 3, 18, '2020-12-22 12:34:19'),
(21, 'Felipe Fornecedor', 'felipe@grudigital.com.br', '21232f297a57a5a743894a0e4a801fc3', 3, 0, '2020-12-23 13:18:53');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `caixa`
--
ALTER TABLE `caixa`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `caixa_venda_item`
--
ALTER TABLE `caixa_venda_item`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `despesa`
--
ALTER TABLE `despesa`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos_armazenamento`
--
ALTER TABLE `produtos_armazenamento`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos_categorias`
--
ALTER TABLE `produtos_categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos_genero`
--
ALTER TABLE `produtos_genero`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos_parametros`
--
ALTER TABLE `produtos_parametros`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos_parametros_opcoes`
--
ALTER TABLE `produtos_parametros_opcoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos_status`
--
ALTER TABLE `produtos_status`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `caixa`
--
ALTER TABLE `caixa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=227;

--
-- AUTO_INCREMENT de tabela `caixa_venda_item`
--
ALTER TABLE `caixa_venda_item`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=282;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `despesa`
--
ALTER TABLE `despesa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de tabela `produtos_armazenamento`
--
ALTER TABLE `produtos_armazenamento`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `produtos_categorias`
--
ALTER TABLE `produtos_categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `produtos_genero`
--
ALTER TABLE `produtos_genero`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `produtos_parametros`
--
ALTER TABLE `produtos_parametros`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `produtos_parametros_opcoes`
--
ALTER TABLE `produtos_parametros_opcoes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de tabela `produtos_status`
--
ALTER TABLE `produtos_status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
