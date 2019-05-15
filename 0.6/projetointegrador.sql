-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Maio-2019 às 01:55
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetointegrador`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE `imagens` (
  `id` int(11) NOT NULL,
  `nome` varchar(160) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `data_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `imagens`
--

INSERT INTO `imagens` (`id`, `nome`, `titulo`, `descricao`, `data_upload`) VALUES
(6, '82b5634a1cfd64b67bbef84fa84db929.jpg', 'Luta ademriana', 'Luta ademriana', '2019-05-13 23:50:38'),
(7, '8fb109d90897f68cc2dfd345df29de0b.jpg', 'Kvothe nas sombras', 'Kvothe nas sombras', '2019-05-13 23:51:03'),
(8, 'f5c6359dda6397a9ba689a202c78c0f0.jpg', 'Kvothe em frente a Ã¡rvore Latantha', 'Kvothe em frente a Ã¡rvore Latantha', '2019-05-13 23:52:56'),
(9, 'c7d11afdea4918c50020e2b735b28ba5.jpg', 'Kvothe na floresta', 'Kvothe na floresta', '2019-05-13 23:53:26'),
(10, '1dc8beab3c513393737963fe786ae4fb.jpg', 'Kvothe tocando para Auri', 'Kvothe tocando para Auri', '2019-05-13 23:53:42'),
(11, '715084bfb51a8c2c0d574225c226e09b.jpg', 'Kvothe sentado com fogo na mÃ£o', 'Kvothe sentado com fogo na mÃ£o', '2019-05-13 23:54:19'),
(12, '520d87944f48528303f3d5278ffd69d9.jpg', 'Kvothe junta a uma Ã¡rvore queimada', 'Kvothe junta a uma Ã¡rvore queimada', '2019-05-13 23:54:49');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens`
--

CREATE TABLE `mensagens` (
  `id` int(11) NOT NULL,
  `mensagem` varchar(250) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `data_inclusao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mensagens`
--

INSERT INTO `mensagens` (`id`, `mensagem`, `id_usuario`, `data_inclusao`) VALUES
(7, 'Coloque uma mensagem ou pergunta para nÃ³s!', 1, '2019-05-13 22:37:16'),
(8, 'Ã‰ o desque?', 2, '2019-05-13 22:38:49'),
(10, 'Ã‰ o famoso dalhe!', 1, '2019-05-13 22:41:09'),
(11, 'Ã‰ o dalhe msm?!', 3, '2019-05-13 23:10:09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `tipo` char(5) NOT NULL DEFAULT 'comum',
  `senha` varchar(150) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `email`, `tipo`, `senha`, `data_cadastro`) VALUES
(1, 'admin', 'root@admin.com', 'roote', 'c62f14dc39b23d7c60e756bc052ce7142a674855153009a5219aca7b3a08dfc896299a6421cc7ce7be5cd764cb48ec3eec36fa8797d95c1e393dc31b4184b20f', '2019-05-07 23:13:15'),
(2, 'cliente', 'apagar@apagar.com', 'comum', 'b0fe8b9cd0c0d99dce05e2b470da9fd089d177d98b94ffc6ab948c13977f4021b19d6becf7e95be036451d09e58d0a95391854384d9377a6c54aaf9629d4b91c', '2019-05-07 23:39:56'),
(3, 'luke', 'luke@skywalker.com', 'roote', '30ba5ca27e837ad1f72fca2c8e44edad2a77ad2b609a9e04f37ee27e40b91be82581d3b74bd528a3c0e86f84187f71f5fb4199c37d7bd764cb7a5a5110067b40', '2019-05-13 23:11:02'),
(4, 'dale', 'dale@doly.com', 'comum', '3ec17cca07f0978a4729d05429d62badae3933255f11c41403ab3657611ca50d482ea12df38faef721d7ef5d78aa5fc7ea759839675b1c0f8491d457c256d000', '2019-05-13 23:20:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mensagens`
--
ALTER TABLE `mensagens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imagens`
--
ALTER TABLE `imagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mensagens`
--
ALTER TABLE `mensagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `mensagens`
--
ALTER TABLE `mensagens`
  ADD CONSTRAINT `mensagens_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
