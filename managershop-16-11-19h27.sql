-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Nov-2020 às 23:27
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
  `parcelas` int(5) DEFAULT 1,
  `despesadescricao` varchar(120) DEFAULT NULL,
  `status` int(5) DEFAULT NULL COMMENT '1.ativo / 2.cancelado / 3.andamento / 4. concluido',
  `datatransacao` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `caixa_venda_item`
--

CREATE TABLE `caixa_venda_item` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` int(10) DEFAULT NULL COMMENT 'codigo do caixa',
  `produto` int(10) DEFAULT NULL,
  `desconto` varchar(50) DEFAULT NULL,
  `valorvenda` varchar(50) DEFAULT NULL,
  `datatransacao` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(14, '26151378000180', 'Felipe Sergio', 'fornecedor@grudigital.com.br', '21232f297a57a5a743894a0e4a801fc3', '11 56125565', '11 930937007', '04468080', 'logradouro', '123', 'complemento', 'bairro', 'cidade', 'estado', 'observações do cliente', '', 1, '2020-11-16 17:08:31');

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_armazenamento`
--

CREATE TABLE `produtos_armazenamento` (
  `id` int(10) UNSIGNED NOT NULL,
  `local` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `datacadastro` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `perfil`, `datacadastro`) VALUES
(1, 'Felipe Admin', 'felipe@grudigital.com.br', '21232f297a57a5a743894a0e4a801fc3', 1, '2020-08-01 17:03:15'),
(10, 'Maurício', 'mauricio@managershop.com.br', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-08-18 18:18:52'),
(12, 'Felipe Vend', 'vendedor@grudigital.com.br', '21232f297a57a5a743894a0e4a801fc3', 2, '2020-09-22 18:22:27'),
(13, 'Felipe Forn', 'fornecedor@grudigital.com.br', '21232f297a57a5a743894a0e4a801fc3', 3, '2020-11-16 17:08:31');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT de tabela `caixa_venda_item`
--
ALTER TABLE `caixa_venda_item`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `despesa`
--
ALTER TABLE `despesa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `produtos_armazenamento`
--
ALTER TABLE `produtos_armazenamento`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
