-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13/11/2024 às 18:53
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `usuario`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `perfil`
--

CREATE TABLE `perfil` (
  `login` varchar(15) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nivel` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `perfil`
--

INSERT INTO `perfil` (`login`, `senha`, `nome`, `email`, `nivel`) VALUES
('Ameinda', '$2y$10$nFDHb2UKMBuX4jd8DiaS4OO56Bg/9avDijlwrE6f6HW7LnIjuinx6', 'Manda', 'romarqueslima@hotmail.com', 'usu'),
('Cloe', '$2y$10$1kDCqIFmEjZByPk6gqkvMetU5lbQjqWNzKRas1IK8yVR2ATP6IJ.O', 'Amanda', 'romarqueslima@hotmail.com', 'usu'),
('Junne-supastar', '$2y$10$jaVgKeEzvXGLnXV6Rb/h6OGMt2DQGh.GcTq4sV4cqSpJFtzaZStOe', 'Julianne', 'anamarqueslima@hotmail.com', 'adm');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`login`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
