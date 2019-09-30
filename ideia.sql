-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2019 at 08:27 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ideia`
--

-- --------------------------------------------------------

--
-- Table structure for table `evento`
--

CREATE TABLE `evento` (
  `codigo` int(11) NOT NULL,
  `imagem` mediumtext,
  `nome` mediumtext NOT NULL,
  `local` mediumtext NOT NULL,
  `endereco` text NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `bilhete` text,
  `descricao` text NOT NULL,
  `responsavel` int(11) NOT NULL,
  `categoria` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `evento`
--

INSERT INTO `evento` (`codigo`, `imagem`, `nome`, `local`, `endereco`, `data`, `hora`, `bilhete`, `descricao`, `responsavel`, `categoria`) VALUES
(5, 'b2.jpg', 'ola', 'ola', '', '2018-07-27', '00:00:13', '', 'ola\r\nteste de descricao\r\naqui.', 844916247, ''),
(6, 'b3.jpg', 'teste', 'teste', 'mb,jbjk', '2019-08-08', '00:00:13', 'normal - 150;teste - 50;matricula - 3000;outro - 500;livro - 1000', '<p>ola</p>', 1, ''),
(7, 'imagem.png', 'teste', 'teste', 'teste', '2018-08-26', '08:21:00', 'Normal - 800 Mt;', '<p>,jbmjvjmbvj,bjgbjmgvjgjgj</p>', 1, 'Desporto'),
(8, '', 'oi', 'oi', 'oi', '2018-09-27', '19:55:00', '', '<p>oi</p>', 1, ''),
(9, '', ',mbjjkbvjbb,mnbvh,jbv ,,jvjhvjhvjhjmhvyh', 'm,b mb nbjnbhj', 'nmvnbvhjn', '2018-10-26', '20:01:00', 'teste - 50;exame - 300;', 'jkvb,hvkjbjkbnb,bj', 1, ''),
(10, '', 'and the web just isnâ€™t the same without you. ', 'and the web just isnâ€™t the same without you. ', 'and the web just isnâ€™t the same without you. ', '2018-10-26', '20:05:00', 'normal - 150;', 'Youâ€™re not connected\r\nAnd the web just isnâ€™t the same without you. \r\nLetâ€™s get you back online\r\nCheck that your network cables are plugged in.\r\nMake sure youâ€™re not in airplane mode.\r\nSee if your wireless switch is turned on.\r\nRestart your router.\r\n\r\nHelp me fix it ', 1, ''),
(11, '', 'fxdgfd', 'gfngc', 'gdnhgf', '2018-08-13', '10:17:00', '', 'dghrgdrgdr', 1, ''),
(12, '', 'hjghjg', 'kjghj', 'm,nkjhj', '2018-08-13', '11:02:00', '', 'k.b,jnbgkjg', 1, ''),
(13, '', 'mgkhgkgk', 'jkgkjg', 'kjgkjghj', '2018-08-13', '00:04:00', 'outro - 50;', 'jgd', 1, ''),
(14, '', 'a', 'a', 'a', '2018-11-12', '11:07:00', '', 'a', 1, ''),
(15, '', 'jmhgmnhg', 'jkgjmg', 'jkghj,', '2018-09-12', '11:09:00', '', 'h', 1, ''),
(16, ',jghj2018-10-12.png', ',jghj', 'jhkj', 'm,mjhkj', '2018-10-12', '11:11:00', '', 'ccc', 1, ''),
(17, 'imagem2018-08-29.png', 'imagem', 'imagem', 'imagem', '2018-08-29', '17:32:00', 'imagem;', 'imagem', 1, 'Desporto');

-- --------------------------------------------------------

--
-- Table structure for table `mensagem`
--

CREATE TABLE `mensagem` (
  `codigo` int(11) NOT NULL,
  `nome` mediumtext NOT NULL,
  `email` mediumtext,
  `contacto` bigint(9) NOT NULL,
  `assunto` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mensagem`
--

INSERT INTO `mensagem` (`codigo`, `nome`, `email`, `contacto`, `assunto`) VALUES
(1, 'teste', 'vtsegundanhe@gmail.com', 849162479, 'ola, teste em vigor'),
(2, 'oi', 'info.ideiamz@gmail.com', 222222222, 'outro teste'),
(3, 'ideia mz', 'info.ideiamz@gmail.com', 12345678, 'lkghyu'),
(4, 'Tesoura', 'info@gmail.com', 844916247, 'teste'),
(5, ',njvmgv`', 'hvhj@mnvb.co', 12345678, 'kjbndfskvnxfll,m');

-- --------------------------------------------------------

--
-- Table structure for table `produtor`
--

CREATE TABLE `produtor` (
  `codigo` int(11) NOT NULL,
  `nome` text NOT NULL,
  `contacto` bigint(9) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produtor`
--

INSERT INTO `produtor` (`codigo`, `nome`, `contacto`, `email`) VALUES
(1, 'Tesoura', 844916247, 'info@gmail.com'),
(3, 'outro', 12345678, 'outro@g.c'),
(4, 'seu', 844444444, 'seu@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `publicidade`
--

CREATE TABLE `publicidade` (
  `codigo` int(11) NOT NULL,
  `imagem` text,
  `evento` int(11) DEFAULT NULL,
  `local` text NOT NULL,
  `situacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `codigo` int(11) NOT NULL,
  `senha` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`codigo`, `senha`) VALUES
(1, '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1'),
(3, '4856c6bfce933ea081a5866133be88de960aa2df'),
(4, '84ab08d751c77014e210dbe5de598324fe9318c6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `mensagem`
--
ALTER TABLE `mensagem`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `produtor`
--
ALTER TABLE `produtor`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `publicidade`
--
ALTER TABLE `publicidade`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `evento`
--
ALTER TABLE `evento`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `mensagem`
--
ALTER TABLE `mensagem`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produtor`
--
ALTER TABLE `produtor`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `publicidade`
--
ALTER TABLE `publicidade`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
