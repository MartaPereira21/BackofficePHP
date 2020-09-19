-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Ago-2020 às 22:41
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
-- Banco de dados: `dweb2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `formando`
--

CREATE TABLE `formando` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `morada` varchar(100) DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL,
  `dn` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `formando`
--

INSERT INTO `formando` (`id`, `nome`, `morada`, `telefone`, `dn`) VALUES
(2, 'António', 'Rua da Direita', 921222338, '2003-08-04'),
(3, 'Carlos', 'Rua do Sobe', 931222333, '1998-05-11'),
(4, 'Sofia', 'Rua do Desce e Sobe', 911222333, '2001-03-03'),
(27, 'Andreia', 'Rua da Esquerda', 932345670, '1990-12-10'),
(29, 'Maria', 'Rua do Sobe e Desce', 962345643, '1992-02-11'),
(30, 'Beatriz', 'Rua de Baixo', 932345643, '1995-07-21'),
(36, 'Mariana', 'Rua do Sobe e Desce ', 922345643, '2006-07-21'),
(37, 'Matilde', 'Rua do Desce e Sobe', 962345643, '2006-07-20'),
(39, 'Maria', 'Rua do Cima', 912345633, '2013-02-12'),
(43, 'João', 'Rua do Sobe e Desce ', 932345643, '2006-02-10'),
(44, 'Vitor', 'Rua do Desce e Sobe', 912345643, '2006-02-13'),
(46, 'Ricardo', 'Rua da Direita', 912345643, '2006-02-13'),
(47, 'Margarida', 'Rua do Desce e Sobe', 912345643, '2006-02-13'),
(48, 'Alexandre', 'Rua do Sobe e Desce ', 932345643, '2006-02-13'),
(49, 'Emanuel', 'Rua de Baixo', 962345643, '2006-02-13'),
(50, 'Sara', 'Rua do Sobe e Desce ', 962345643, '2006-02-13'),
(51, 'Vitória', 'Rua da Direita', 962343443, '2006-02-13'),
(52, 'José', 'Rua do Nem Sobe Nem Desce ', 921456890, '1998-06-12'),
(53, 'Pedro', 'Rua do Sobe e Desce ', 912345643, '2004-02-10'),
(55, 'Filipa', 'Rua de Baixo', 912345650, '1992-12-15'),
(56, 'Jéssica', 'Rua do sobe da Direita', 912675643, '1997-06-19'),
(57, 'Cristiana', 'Rua de Baixo', 922345643, '2005-06-07'),
(61, 'Fátima', 'Rua do Sobe e Desce ', 912345643, '1966-02-10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(0, 'Marta', 'marta@hotmail.com', '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `formando`
--
ALTER TABLE `formando`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `formando`
--
ALTER TABLE `formando`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
