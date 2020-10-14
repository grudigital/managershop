-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Out-2020 às 21:48
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.7

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
  `parcelas` int(5) DEFAULT NULL,
  `despesadescricao` varchar(120) DEFAULT NULL,
  `status` int(5) DEFAULT NULL COMMENT '1.ativo / 2.cancelado / 3.andamento / 4. concluido',
  `datatransacao` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `caixa`
--

INSERT INTO `caixa` (`id`, `movimento`, `operacao`, `valor`, `cliente`, `vendedor`, `fornecedor`, `formapagamento`, `parcelas`, `despesadescricao`, `status`, `datatransacao`) VALUES
(44, 1, 1, '325', 9, 1, 0, '0', 1, '', 4, '2020-08-12 23:01:51'),
(45, 1, 1, NULL, 1, NULL, NULL, NULL, NULL, NULL, 3, '2020-08-12 23:09:14'),
(46, 1, 1, '140', 1, 1, 0, '0', 9, '', 4, '2020-08-12 23:23:37'),
(47, 2, 2, '400', NULL, NULL, NULL, NULL, NULL, 'eu retirei o valor porque eu quis', 4, '2020-08-13 00:24:16'),
(48, 2, 3, '500', NULL, 1, NULL, NULL, NULL, 'retirada-dinheiro', 4, '2020-08-13 00:39:37'),
(49, 2, 3, '50', NULL, 1, NULL, '1', 0, 'conta-consumo', 4, '2020-08-13 16:19:23'),
(50, 2, 3, '4', NULL, 1, NULL, '2', 0, 'conta-consumo', 4, '2020-08-13 16:20:56'),
(51, 2, 3, '664', NULL, 1, NULL, '0', 1, 'conta-consumo', 4, '2020-08-13 16:21:28'),
(52, 2, 3, '555', NULL, 1, NULL, '0', 2, 'salario', 4, '2020-08-13 16:24:18'),
(53, 2, 2, '555', NULL, 1, NULL, '0', 2, 'conta-consumo', 4, '2020-08-13 16:25:36'),
(54, 1, 1, '286', 1, 1, 0, '0', 1, '', 4, '2020-08-14 12:24:54'),
(55, 2, 3, '200', NULL, 1, NULL, NULL, NULL, 'retirada-dinheiro', 4, '2020-08-14 12:26:00'),
(56, 1, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, 3, '2020-08-18 18:26:40'),
(57, 1, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, 3, '2020-08-21 15:10:38'),
(58, 2, 3, '730.00', NULL, 9, NULL, NULL, NULL, 'transferencia-bancaria', 4, '2020-08-21 15:12:46'),
(59, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 4, '2020-09-01 13:11:21'),
(60, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 4, '2020-09-01 13:11:28'),
(61, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, 4, '2020-09-01 13:11:32'),
(62, 1, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, 3, '2020-09-01 15:07:23'),
(63, 1, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, 3, '2020-09-01 15:07:35'),
(64, 1, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, 3, '2020-09-01 18:31:29'),
(65, 1, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, 3, '2020-09-11 19:06:08'),
(66, 2, 3, '4444', NULL, 1, NULL, NULL, NULL, 'dsfgsdfgdsfg', 4, '2020-09-14 10:51:03'),
(67, 2, 2, '333', NULL, 1, NULL, NULL, NULL, 'pagamento-salario', 4, '2020-09-14 11:02:12'),
(68, 2, 2, '333', NULL, 1, NULL, NULL, NULL, 'Despesa 1', 4, '2020-09-14 11:57:56'),
(69, 1, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, 3, '2020-10-08 11:25:26'),
(70, 1, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, 3, '2020-10-08 12:51:26'),
(71, 2, 2, '55', NULL, 1, NULL, NULL, NULL, 'Despesa 1', 4, '2020-10-08 13:08:42'),
(72, 2, 2, '', NULL, 1, NULL, NULL, NULL, '', 4, '2020-10-08 13:13:05'),
(73, 2, 2, '333', NULL, 1, NULL, NULL, NULL, 'Despesa 2', 4, '2020-10-22 00:00:00'),
(74, 2, 2, '444', NULL, 1, NULL, NULL, NULL, 'Despesa 1', 4, '2020-10-19 00:00:00'),
(75, 2, 2, '3333', NULL, 1, NULL, NULL, NULL, 'Despesa 2', 4, '2020-11-26 00:00:00'),
(76, 1, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, 3, '2020-10-13 11:35:28'),
(77, 1, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, 3, '2020-10-13 11:41:53'),
(78, 1, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, 3, '2020-10-13 12:03:42'),
(79, 1, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, 3, '2020-10-13 12:09:44'),
(80, 1, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, 3, '2020-10-13 12:18:20'),
(81, 1, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, 3, '2020-10-13 14:47:22'),
(82, 1, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, 3, '2020-10-13 16:34:07');

-- --------------------------------------------------------

--
-- Estrutura da tabela `caixa_venda_item`
--

CREATE TABLE `caixa_venda_item` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` int(10) DEFAULT NULL COMMENT 'codigo do caixa',
  `produto` int(10) DEFAULT NULL,
  `desconto` varchar(50) DEFAULT NULL,
  `valorvenda` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `caixa_venda_item`
--

INSERT INTO `caixa_venda_item` (`id`, `codigo`, `produto`, `desconto`, `valorvenda`) VALUES
(94, 44, 1, '5', '150'),
(95, 44, 2, NULL, '180'),
(96, 45, 1, '50', '150'),
(97, 46, 1, '10', '150'),
(98, 54, 1, '20', '150'),
(99, 54, 2, '24', '180'),
(100, 0, 0, NULL, ''),
(101, 0, 6, NULL, '80'),
(102, 0, 15, NULL, '359'),
(103, 0, 17, NULL, '799'),
(104, 0, 0, NULL, ''),
(105, 0, 0, NULL, ''),
(106, 0, 0, NULL, ''),
(107, 0, 0, NULL, ''),
(108, 0, 0, NULL, ''),
(109, 0, 0, NULL, '');

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
(1, 'Felipe Sergio', '35251690860', '56125565', '930937007', 'felipesergio@outlook.com', '04459320', 'Rua Santa Ursula', '104', 'Casa', 'Jd. Pedreira', 'São Paulo', 'SP', '2020-08-26 13:25:44'),
(2, 'Lourival da Silva Netto', '35251690860', '56117494', '980246313', 'netto@grudigital.com.br', '04468080', 'Rua Pontes de Morais', '97', 'Casa 2', 'Jd. São Jorge', 'São Paulo', 'SP', '2020-08-28 13:26:45'),
(9, 'Felipe Souza', 'sdfgfdgfsd', 'gfsdg', 'sfdgfsdg', 'fdsgsdf', 'gfsdgdsf', 'gfdsg', 'dfsgfdg', 'dsfgdfg', 'dsfg', 'gdsfg', 'dfsgfd', '2020-08-01 15:40:30'),
(10, 'Felipe S. L. De Souza', 'gdsfg', 'fdsgfds', 'gfdsg', 'fdsgds', 'gdsfgsfd', 'gfdsgfdsg', 'dfsgfsdg', 'fdsgfds', 'gfdsgf', 'dsgfdsgdfsg', 'fdsgfd', '2020-08-01 15:40:54');

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
(2, 'Despesa 1'),
(3, 'Despesa 2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedores`
--

CREATE TABLE `fornecedores` (
  `id` int(10) UNSIGNED NOT NULL,
  `cnpjcpf` varchar(20) DEFAULT NULL,
  `razaosocial` varchar(50) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
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

INSERT INTO `fornecedores` (`id`, `cnpjcpf`, `razaosocial`, `email`, `telefone`, `whatsapp`, `cep`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `observacoes`, `imagem`, `status`, `datacriacao`) VALUES
(9, 'dfsgdfs', 'Fornecedor 1', 'fsdgfsd', 'dsgdfs', 'gdfgfdgd', 'fsgdsf', 'gfsdg', 'gdsfgsfd', 'gfsd', 'dsfgsfd', 'gdfsg', 'dsfgdsf', 'gfsdgfg', '1596309487.jpg', 1, '2020-08-01 16:06:47'),
(10, '', 'Fornecedor 2', '', '', '', '', '', '', '', 'dfgdfs', '', '', '', '', 1, '2020-08-03 12:49:21'),
(11, '', 'Fornecedor 3', '', '', '', '', '', '', '', 'fdg', '', '', '', '', 1, '2020-08-03 12:49:46');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `categoria` varchar(40) DEFAULT NULL,
  `codigo` varchar(70) DEFAULT NULL,
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

INSERT INTO `produtos` (`id`, `titulo`, `categoria`, `codigo`, `genero`, `peso`, `largura`, `altura`, `comprimento`, `localarmazenado`, `valorcompra`, `valorvenda`, `fornecedor`, `status`, `imagem`, `roupa_categoria`, `roupa_cor`, `roupa_tamanho`, `roupa_marca`, `roupa_condicao`, `roupa_higienizacao`, `calcado_numero`, `calcado_cor`, `calcado_marca`, `calcado_categoria`, `calcado_condicao`, `calcado_higienizacao`, `outros_categoria`, `outros_condicao`, `outros_higienizacao`, `datacadastro`) VALUES
(6, 'Blusa Jeans Azul2', '1', '457901', '2', NULL, NULL, NULL, NULL, '2', '80', '80', 9, 1, '1597861047.jpg', 79, 0, 0, 0, 0, 47, 51, 57, 61, 66, 77, 68, 0, 0, 0, '2020-08-18 09:20:25'),
(7, 'blusa de frio', '1', '54870', '2', NULL, NULL, NULL, NULL, '2', '40', '48', 9, 4, '1598026452.jpg', 30, 28, 34, 40, 45, 48, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-08-18 11:28:11'),
(8, 'Blusa Rosa', '1', '777888889999877776666', '1', NULL, NULL, NULL, NULL, '2', '59', '128', 11, 4, '1598026498.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-18 18:23:59'),
(9, 'Tenis top', '2', '', '', NULL, NULL, NULL, NULL, '', '', '', 10, 0, '1598026558.jpg', 0, 0, 0, 0, 0, 0, 50, 58, 62, 67, 77, 68, 0, 0, 0, '2020-08-19 12:19:20'),
(10, 'Guarda chuva top', '3', '547', '2', NULL, NULL, NULL, NULL, '1', '50', '52', 9, 1, '1598026593.jpg', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 75, '2020-08-19 12:51:38'),
(11, 'Bolsa de notebook ', '3', '5454465', '1', NULL, NULL, NULL, NULL, '2', '500', '600', 9, 4, '1598026626.jpg', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 70, 72, 74, '2020-08-19 15:06:08'),
(12, 'Bolsa executiva', '3', '5555', '1', NULL, NULL, NULL, NULL, '2', '60', '90', 10, 4, '1598026690.jpg', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 70, 72, 74, '2020-08-19 15:32:00'),
(13, 'Coturno do exercito', '2', '453535', '2', NULL, NULL, NULL, NULL, '2', '100', '300', 9, 1, '1598026774.jpg', 0, 0, 0, 0, 0, 0, 50, 58, 62, 67, 77, 69, 0, 0, 0, '2020-08-19 15:33:32'),
(14, 'Camisa Barcelona', '1', 'lgftyfudrtd56r76tyiunkj', '2', NULL, NULL, NULL, NULL, '1', '567890', '567890', 9, 1, '1598026850.jpg', 79, 28, 35, 41, 46, 47, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-08-20 11:23:42'),
(15, 'Camisa psg', '1', '98765434556', '2', NULL, NULL, NULL, NULL, '1', '179', '359', 11, 1, '1598031371.jpg', 79, 80, 36, 81, 45, 47, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-08-21 14:35:56'),
(16, 'Tenis nike', '2', '45678987654', '1', NULL, NULL, NULL, NULL, '1', '259', '599', 9, 1, '1598031662.jpg', 0, 0, 0, 0, 0, 0, 49, 0, 0, 67, 78, 69, 0, 0, 0, '2020-08-21 14:37:13'),
(17, 'Camisa Social', '1', '2344567873', '1', NULL, NULL, NULL, NULL, '1', '244', '799', 10, 1, '1598032737.jpg', 82, 29, 34, 83, 45, 47, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-08-21 14:58:06'),
(18, 'Camisa Social Masculina', '1', '5433223345567', '2', NULL, NULL, NULL, NULL, '1', '599', '599', 9, 1, '1598032973.jpg', 82, 31, 37, 83, 46, 48, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-08-21 15:02:15'),
(19, 'Sapatenis', '2', '9876544566778775', '2', NULL, NULL, NULL, NULL, '2', '100', '259', 10, 1, '1598033183.jpg', 0, 0, 0, 0, 0, 0, 53, 57, 85, 84, 78, 68, 0, 0, 0, '2020-08-21 15:06:11');

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
(2, 'Sala 9b'),
(4, 'sala 3');

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
  `perfil` varchar(20) NOT NULL,
  `datacadastro` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `perfil`, `datacadastro`) VALUES
(1, 'felipe23', 'felipe@grudigital.com.br', '21232f297a57a5a743894a0e4a801fc3', 'administrador', '2020-08-01 17:03:15'),
(9, 'Administrador', 'contato@grudigital.com.br', '21232f297a57a5a743894a0e4a801fc3', 'administrador', '2020-08-18 18:05:02'),
(10, 'mauricio', 'mauricio@managershop.com.br', 'e10adc3949ba59abbe56e057f20f883e', 'administrador', '2020-08-18 18:18:52'),
(11, 'Felipe Sergio 2', 'felipe2@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'administrador', '2020-09-22 18:21:09'),
(12, 'safsad', 'fasdf', '27fe076f3f9ad7a444e7c27580d112b7', 'vendedor', '2020-09-22 18:22:27');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT de tabela `caixa_venda_item`
--
ALTER TABLE `caixa_venda_item`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `despesa`
--
ALTER TABLE `despesa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `produtos_armazenamento`
--
ALTER TABLE `produtos_armazenamento`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
