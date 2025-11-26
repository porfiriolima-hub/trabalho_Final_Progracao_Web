-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03/11/2025 às 03:45
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12


DROP DATABASE IF EXISTS `projeto1`;


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto1`
--

CREATE DATABASE `projeto1`;
USE `projeto1`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `cliente` varchar(150) NOT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `cliente`, `cidade`, `estado`) VALUES
(1, 'Denilson', 'João Pessoa', 'pb'),
(3, 'Tatiana Aguiar', 'João Pessoa', 'PB'),
(4, 'Dara', 'Guarabira', 'PB'),
(5, 'Tainá', 'Natal', 'RN');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `produto` varchar(150) NOT NULL,
  `preco` decimal(10,2) NOT NULL DEFAULT 0.00,
  `estoque` int(11) NOT NULL DEFAULT 0,
  `categoria` varchar(100) DEFAULT NULL,
  `descricao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `usuarios`
(
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `E-Mail` VARCHAR(50) NOT NULL,
    `Senha` VARCHAR(21) NOT NULL,
    `Tipo_de_Conta` VARCHAR(21) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `agendamentos_cadastrados`
(
  `E-Mail` VARCHAR(50) NOT NULL,
  `Prazo_Marcado` DATE NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `produto`, `preco`, `estoque`, `categoria`, `descricao`) VALUES
(4, 'Notebook Pro 14', 3499.00, 6, 'Equipamento de Informática', 'Intel/AMD, 16GB RAM, SSD NVMe — ideal para estudo e trabalho.'),
(5, 'Teclado Mecânico RGB', 399.00, 15, 'Equipamento de Informática ', 'Switches de alta durabilidade, keycaps PBT e layout ABNT2.'),
(6, 'SSD NVMe 1TB', 449.00, 8, 'Armazenamento de Dados', 'Leitura até 3.5 GB/s — inicializações e cargas em segundos.'),
(7, 'Roteador WI-Fi 6', 529.00, 25, 'Equipamento de Redes', 'Cobertura estável, OFDMA/MU-MIMO e app de gerenciamento.'),
(
  9, 'Dell memória atualização - 4 Go - 1Rx16 DDR4 SODIMM 3200 MT/s', 439.00, 16, 'Componente de Informática ', 
  'A memória de acesso aleatório (RAM) é um tipo de hardware que seu computador usa para armazenar informações. 
  Adicionar memória é uma das maneiras mais econômicas de melhorar a performance do seu computador.'
);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
