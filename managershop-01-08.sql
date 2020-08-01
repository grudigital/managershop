-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Ago-2020 às 01:07
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
(8, 'dfsgdsf', 'gfsdg', 'fsdgfs', 'dgsfdgdf', 'gfsdg', 'fsdgdsf', 'gdsfgdsf', 'gdfs', 'dfgdfsg', 'dsfgd', 'fsgfsd', 'fdsgfsd', '2020-08-01 15:38:52'),
(9, 'dgsfdg', 'sdfgfdgfsd', 'gfsdg', 'sfdgfsdg', 'fdsgsdf', 'gfsdgdsf', 'gfdsg', 'dfsgfdg', 'dsfgdfg', 'dsfg', 'gdsfg', 'dfsgfd', '2020-08-01 15:40:30'),
(10, 'fdsgdsf', 'gdsfg', 'fdsgfds', 'gfdsg', 'fdsgds', 'gdsfgsfd', 'gfdsgfdsg', 'dfsgfsdg', 'fdsgfds', 'gfdsgf', 'dsgfdsgdfsg', 'fdsgfd', '2020-08-01 15:40:54'),
(11, 'dsfgdsf', 'gfdsg', 'fsdgf', 'sdgfsdg', 'fsdgfsd', 'gfsdg', 'fdsgfds', 'gfds', 'dfsgdsf', 'gdsfg', 'dsfgfds', 'gfdsgds', '2020-08-01 15:46:03'),
(12, 'dfgfsd', 'gfdsg', 'dsfgfds', 'gsdfg', 'fdsgdfs', 'dfsg', 'sdfgfsd', 'gdfsgfd', 'dsfgfsd', 'gfsdg', 'fsdg', 'dsfgfsdg', '2020-08-01 17:21:21');

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
(9, 'dfsgdfs', 'gfsdg', 'fsdgf', 'dsgdfs', 'gdfgfdgd', 'fsgdsf', 'gfsdg', 'gdsfgsfd', 'gfsd', 'dsfgsfd', 'gdfsg', 'dsfgdsf', 'gfsdgfg', '1596309487.jpg', 1, '2020-08-01 16:06:47');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `codigoproduto` varchar(70) NOT NULL,
  `codigobarras` varchar(70) NOT NULL,
  `peso` varchar(40) NOT NULL,
  `largura` varchar(40) NOT NULL,
  `altura` varchar(40) NOT NULL,
  `comprimento` varchar(40) NOT NULL,
  `localarmazenado` varchar(50) NOT NULL,
  `valorcompra` varchar(15) NOT NULL,
  `valorvenda` varchar(15) NOT NULL,
  `status` int(10) NOT NULL,
  `datacadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `titulo`, `codigoproduto`, `codigobarras`, `peso`, `largura`, `altura`, `comprimento`, `localarmazenado`, `valorcompra`, `valorvenda`, `status`, `datacadastro`) VALUES
(1, 'dsfgdsf', 'gdsfg', 'fsdgdsfg', 'dfsgsdfg', 'dfsgdfsg', 'dfsgdfs', 'gfsdgdsfg', 'dfsgfsd', 'dsfgdsfg', 'dfgdsf', 4, '2020-08-26 13:25:44');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_parametros`
--

CREATE TABLE `produtos_parametros` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(40) NOT NULL,
  `tipo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos_parametros`
--

INSERT INTO `produtos_parametros` (`id`, `titulo`, `tipo`) VALUES
(5, 'Blusa / Tamanho', 'roupa'),
(8, 'Sandalia', 'calcado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_parametros_opcoes`
--

CREATE TABLE `produtos_parametros_opcoes` (
  `id` int(10) UNSIGNED NOT NULL,
  `produto` int(10) NOT NULL,
  `opcao` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos_parametros_opcoes`
--

INSERT INTO `produtos_parametros_opcoes` (`id`, `produto`, `opcao`) VALUES
(8, 5, 'sdfdsfsdf'),
(9, 5, 'EG'),
(10, 5, 'GGG'),
(11, 5, 'G4');

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
(1, 'felipe2', 'felipe@grudigital.com.br', '21232f297a57a5a743894a0e4a801fc3', 'administrador', '2020-08-01 17:03:15'),
(4, 'Netto', 'felipe@prod7.com22', '21232f297a57a5a743894a0e4a801fc3', 'administrador', '2020-08-01 17:04:57'),
(7, 'fdgfsd', 'dfgdsf', '76863f3a7ec61eada55565919c1145c7', 'vendedor', '2020-08-01 17:20:45'),
(8, 'dsfg', 'fsdgfds', '3d8022861f6e74908c249306d39b6a93', 'vendedor', '2020-08-01 17:22:05');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
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
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `produtos_parametros`
--
ALTER TABLE `produtos_parametros`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `produtos_parametros_opcoes`
--
ALTER TABLE `produtos_parametros_opcoes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
