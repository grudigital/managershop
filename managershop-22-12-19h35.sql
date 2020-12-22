-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Dez-2020 às 23:34
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
  `datatransacao` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `caixa`
--

INSERT INTO `caixa` (`id`, `movimento`, `operacao`, `valor`, `cliente`, `vendedor`, `fornecedor`, `formapagamento`, `parcelas`, `despesadescricao`, `status`, `datatransacao`) VALUES
(174, 1, 1, NULL, 15, NULL, NULL, NULL, 1, NULL, 3, '2020-12-21 14:48:36'),
(175, 1, 1, NULL, 15, NULL, NULL, NULL, 1, NULL, 3, '2020-12-21 14:56:10'),
(176, 1, 1, NULL, 15, NULL, NULL, NULL, 1, NULL, 3, '2020-12-21 15:11:42'),
(177, 1, 1, '213.21', 15, 1, 0, '1', 0, '', 4, '2020-12-21 15:12:16'),
(178, 1, 1, NULL, 15, NULL, NULL, NULL, 1, NULL, 3, '2020-12-21 15:50:45'),
(179, 1, 1, '213.21', 15, 1, 0, '1', 0, '', 4, '2020-12-21 15:55:35'),
(180, 1, 1, '213.21', 15, 1, 0, '2', 0, '', 4, '2020-12-21 16:28:13'),
(181, 1, 1, '213.21', 15, 1, 0, '1', 0, '', 4, '2020-12-21 16:48:21'),
(182, 1, 1, '213.21', 15, 1, 0, '2', 0, '', 4, '2020-12-21 16:51:29'),
(183, 1, 1, '213.21', 15, 1, 0, '1', 0, '', 4, '2020-12-21 17:00:49'),
(184, 1, 1, '447.44', 15, 1, 0, '1', 0, '', 4, '2020-12-21 17:01:33'),
(185, 1, 1, '447.44', 15, 1, 0, '1', 0, '', 4, '2020-12-21 17:06:22'),
(186, 1, 1, '447.44', 15, 1, 0, '1', 0, '', 4, '2020-12-21 17:16:47'),
(187, 1, 1, '447.44', 15, 1, 0, '1', 0, '', 4, '2020-12-21 17:21:15'),
(188, 1, 1, '447.44', 15, 1, 0, '1', 0, '', 4, '2020-12-21 17:26:37'),
(189, 1, 1, NULL, 15, NULL, NULL, NULL, 1, NULL, 3, '2020-12-22 11:46:05'),
(190, 1, 1, NULL, 15, NULL, NULL, NULL, 1, NULL, 3, '2020-12-22 12:12:32'),
(191, 1, 1, NULL, 15, NULL, NULL, NULL, 1, NULL, 3, '2020-12-22 12:14:44'),
(192, 1, 1, NULL, 15, NULL, NULL, NULL, 1, NULL, 3, '2020-12-22 12:16:17'),
(193, 1, 1, NULL, 15, NULL, NULL, NULL, 1, NULL, 3, '2020-12-22 17:00:03'),
(194, 1, 1, '123', 15, 1, 0, '2', 0, '', 4, '2020-12-22 17:04:50'),
(195, 1, 1, '2', 15, 1, 0, '1', 0, '', 4, '2020-12-22 17:37:34'),
(196, 1, 1, '129', 15, 1, 0, '1', 0, '', 4, '2020-12-22 17:39:05'),
(197, 1, 1, '4', 15, 1, 0, '1', 0, '', 4, '2020-12-22 17:44:38'),
(198, 1, 1, '4', 15, 1, 0, '2', 0, '', 4, '2020-12-22 17:49:07'),
(199, 1, 1, '131', 15, 1, 0, '1', 0, '', 4, '2020-12-22 17:50:10'),
(200, 1, 1, '4', 15, 1, 0, '1', 0, '', 4, '2020-12-22 17:52:47'),
(201, 1, 1, '133', 15, 1, 0, '1', 0, '', 4, '2020-12-22 17:54:31'),
(202, 1, 1, '133', 15, 1, 0, '1', 0, '', 4, '2020-12-22 17:56:28'),
(203, 1, 1, '129', 15, 1, 0, '1', 0, '', 4, '2020-12-22 17:59:14'),
(204, 1, 1, '4', 15, 1, 0, '3', 2, '', 4, '2020-12-22 18:05:15'),
(205, 1, 1, '4', 15, 1, 0, '3', 5, '', 4, '2020-12-22 18:23:20'),
(206, 1, 1, '1', 15, 1, 0, '3', 2, '', 4, '2020-12-22 18:33:37'),
(207, 1, 1, '64.5', 15, 1, 0, '3', 2, '', 4, '2020-12-22 18:48:22'),
(208, 1, 1, '64.5', 15, 1, 0, '3', 2, '', 4, '2021-01-21 00:00:00'),
(209, 1, 1, '12.9', 15, 1, 0, '3', 10, '', 4, '2020-12-22 19:07:00'),
(210, 1, 1, '12.9', 15, 1, 0, '3', 10, '', 4, '2021-01-21 00:00:00'),
(211, 1, 1, '12.9', 15, 1, 0, '3', 10, '', 4, '2021-02-20 00:00:00'),
(212, 1, 1, '12.9', 15, 1, 0, '3', 10, '', 4, '2021-03-22 00:00:00'),
(213, 1, 1, '12.9', 15, 1, 0, '3', 10, '', 4, '2021-04-21 00:00:00'),
(214, 1, 1, '12.9', 15, 1, 0, '3', 10, '', 4, '2021-05-21 00:00:00'),
(215, 1, 1, '12.9', 15, 1, 0, '3', 10, '', 4, '2021-06-20 00:00:00'),
(216, 1, 1, '12.9', 15, 1, 0, '3', 10, '', 4, '2021-07-20 00:00:00'),
(217, 1, 1, '12.9', 15, 1, 0, '3', 10, '', 4, '2021-08-19 00:00:00'),
(218, 1, 1, '12.9', 15, 1, 0, '3', 10, '', 4, '2021-09-18 00:00:00');

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
  `datatransacao` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `caixa_venda_item`
--

INSERT INTO `caixa_venda_item` (`id`, `codigo`, `produto`, `quantidade`, `desconto`, `valorvenda`, `datatransacao`) VALUES
(231, 174, 47, NULL, NULL, '234.23', '2020-12-21 14:48:46'),
(232, 175, 48, NULL, NULL, '213.21', '2020-12-21 14:56:24'),
(233, 175, 47, NULL, NULL, '234.23', '2020-12-21 14:56:28'),
(234, 177, 49, NULL, NULL, '213.21', '2020-12-21 15:12:40'),
(235, 179, 48, NULL, NULL, '213.21', '2020-12-21 16:17:16'),
(236, 180, 48, NULL, NULL, '213.21', '2020-12-21 16:28:19'),
(237, 181, 48, NULL, NULL, '213.21', '2020-12-21 16:48:27'),
(238, 182, 48, NULL, NULL, '213.21', '2020-12-21 16:51:34'),
(239, 183, 48, NULL, NULL, '213.21', '2020-12-21 17:00:56'),
(240, 184, 47, NULL, NULL, '234.23', '2020-12-21 17:02:06'),
(241, 184, 48, NULL, NULL, '213.21', '2020-12-21 17:02:45'),
(242, 185, 48, NULL, NULL, '213.21', '2020-12-21 17:06:27'),
(243, 185, 47, NULL, NULL, '234.23', '2020-12-21 17:06:39'),
(246, 186, 48, NULL, NULL, '213.21', '2020-12-21 17:17:29'),
(247, 186, 47, NULL, NULL, '234.23', '2020-12-21 17:17:48'),
(248, 187, 48, NULL, NULL, '213.21', '2020-12-21 17:21:23'),
(249, 187, 47, NULL, NULL, '234.23', '2020-12-21 17:21:37'),
(250, 188, 48, NULL, NULL, '213.21', '2020-12-21 17:26:48'),
(251, 188, 47, NULL, NULL, '234.23', '2020-12-21 17:26:52'),
(252, 189, 0, NULL, NULL, '', '2020-12-22 12:03:38'),
(254, 191, 53, NULL, '1', '2.00', '2020-12-22 12:23:18'),
(255, 193, 53, NULL, NULL, '2.00', '2020-12-22 17:00:24'),
(256, 193, 0, 0, NULL, '', '2020-12-22 17:02:26'),
(257, 194, 53, 2, NULL, '2.00', '2020-12-22 17:04:59'),
(258, 194, 50, 1, '10', '129.00', '2020-12-22 17:24:59'),
(259, 195, 53, 1, NULL, '2.00', '2020-12-22 17:37:42'),
(260, 196, 51, 1, NULL, '129.00', '2020-12-22 17:39:12'),
(261, 197, 53, 2, NULL, '2.00', '2020-12-22 17:45:49'),
(262, 198, 53, 2, NULL, '2.00', '2020-12-22 17:49:17'),
(263, 199, 53, 1, NULL, '2.00', '2020-12-22 17:50:23'),
(264, 199, 50, 1, NULL, '129.00', '2020-12-22 17:50:34'),
(265, 200, 53, 2, NULL, '2.00', '2020-12-22 17:53:19'),
(266, 201, 53, 2, NULL, '2.00', '2020-12-22 17:54:37'),
(267, 201, 51, 1, NULL, '129.00', '2020-12-22 17:54:47'),
(269, 202, 50, 1, NULL, '129.00', '2020-12-22 17:57:37'),
(270, 202, 53, 2, NULL, '2.00', '2020-12-22 17:57:44'),
(271, 203, 50, 1, NULL, '129.00', '2020-12-22 17:59:20'),
(272, 204, 53, 2, NULL, '2.00', '2020-12-22 18:05:24'),
(274, 205, 53, 2, NULL, '2.00', '2020-12-22 18:23:27'),
(275, 206, 53, 1, NULL, '2.00', '2020-12-22 18:33:44'),
(276, 207, 51, 1, NULL, '129.00', '2020-12-22 18:48:31'),
(277, 209, 51, 1, NULL, '129.00', '2020-12-22 19:07:07');

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
(15, 'Felipe Cliente', '35251690860', '1156125565', '11930937007', 'felipe@grudigital.com.br', '04459320', 'Rua Santa Ursula', '104', '2º Andar', 'Jd. Pedreira', 'São Paulo', 'SP', '2020-12-18 11:29:32');

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
(16, '3298327487324632', 'Agencia teste', 'contato@grudigital.com.br', '21232f297a57a5a743894a0e4a801fc3', '2435435234', '23324324', '044680008', 'fsdfsdfsdfdsaf safsd fsdf', '42332', 'safdsaf', 'sdfa sdf asdf', 'dsafasd fdsa', 'dsafsa fsdafsdaf', 'dsaf ', '', 1, '2020-12-18 11:30:48'),
(17, '3876126532176', 'Brecho do neto', 'netto@grudigital.com.br', '21232f297a57a5a743894a0e4a801fc3', '32432431312', '8967786567', '04468080', 'rua fdshuihaduashiu', '2243', 'dsgsfd', 'fdgfsd', 'fdsg', 'dfsgsdfg', 'fdgdsf', '', 1, '2020-12-21 15:02:29'),
(18, '1872617532174', 'Lourival Neto', 'netto@grudigital.com.br', '21232f297a57a5a743894a0e4a801fc3', '32432431312', '432432432432', '04468080', 'rua fdshuihaduashiu', '345', '342543', '53454235', 'fdsg', 'dfsgsdfg', '4353425', '', 1, '2020-12-22 12:34:19');

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
(50, 'Camiseta', 5, '1', '8745718962482', '1', NULL, NULL, NULL, NULL, '7', '99.00', '129.00', 16, 1, '1608648231.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-22 11:42:49'),
(51, 'Tenis', 0, '2', '2807780802795', '2', NULL, NULL, NULL, NULL, '7', '29.90', '129.00', 16, 3, '1608648239.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-22 11:43:08'),
(53, 'Pares de meia', 0, '1', '10214123377361', '2', NULL, NULL, NULL, NULL, '7', '1.29', '2.00', 16, 3, '1608649916.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-12-22 12:11:44');

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
(20, 'Lourival Neto', 'netto@grudigital.com.br', '21232f297a57a5a743894a0e4a801fc3', 3, 18, '2020-12-22 12:34:19');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;

--
-- AUTO_INCREMENT de tabela `caixa_venda_item`
--
ALTER TABLE `caixa_venda_item`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=278;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `despesa`
--
ALTER TABLE `despesa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
