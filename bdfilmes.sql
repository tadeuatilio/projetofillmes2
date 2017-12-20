-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Dez-2017 às 03:54
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdfilmes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `filmes`
--

CREATE TABLE `filmes` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `descricao` varchar(700) NOT NULL,
  `ator` varchar(50) NOT NULL,
  `diretor` varchar(50) NOT NULL,
  `bilheteria` int(11) NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `filmes`
--

INSERT INTO `filmes` (`id`, `nome`, `data`, `descricao`, `ator`, `diretor`, `bilheteria`, `link`) VALUES
(1, 'Titanic', '1820-04-21', 'Titanic e um filme epico de romance e drama norte-americano de 1997, escrito, dirigido, co-produzido e co-editado por James Cameron. E uma historia de ficcao do naufragio real do RMS Titanic', 'wd', '', 0, 'https://i.ytimg.com/vi/cMVi953awHQ/maxresdefault.jpg'),
(2, 'Samurai X - 2', '2017-12-05', 'Este filme traz a historia do samurai que vivia na montanha com sua espada e um dia ele morreu. Mas depois de sua morte, algo novo surge para aterrorizar o pequeno vilarejo onde ele vivia. Para saber mais, clique em \"Leia mais\" e fique por dentro dos detalhes.', 'Edward Casa Grande', 'Tadeus Films', 1000241, 'http://www.otvfoco.com.br/wp-content/uploads/2017/11/hobbit-batalha-cinco-exercitos-lancamento-dvd-blu-ray-1024x576.jpg'),
(3, 'X - Men VS Fatec Itapira', '2017-11-28', 'O ano e 2020. A fatec esta em luta de sua melhor graduacao com excelentes alunos mas os x-men podem colocar tudo isso a perder. Com alguns professores a Fatec Itapira tentara permanecer na disputa mas apenas um vencera esta batalha!!!!!!!', 'Wolverine', 'Logan', 3000000, 'https://hypenews.net/wp-content/uploads/2017/12/original-x-men-timeline-600x338.jpg'),
(4, 'rr', '2017-11-28', 'c', 'c', '', 22, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxbeQhk45JN8Igk1X2kWOadTahBSPUT0Yav9o1Qtl0fZkV6vvd_A'),
(5, 'rr', '2017-11-28', 'c', 'c', '', 22, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDKwUjErPUOJET1BOQPSDrT3yM_MbvYbDrECsPGDNnvvfSJso8ow'),
(6, 'ddf', '2017-12-05', 'dd', 'dd', '', 32, 'https://gds.portal5g-media.com/contentFiles/system/pictures/2015/4/132746/original/a-saga-molusco.jpg'),
(7, 'agora teste correto', '2017-10-08', 'wqieqwiej', 'weoijr', 'eworjew', 3482, 'https://cdn-images-1.medium.com/max/1280/0*qdHImq1G588SB9Ii.jpg'),
(8, 'qq', '2017-11-28', 'aa', 'aaaa', 'aa', 243434, 'https://www.fatosdesconhecidos.com.br/wp-content/uploads/2017/05/ryan-reynolds-blackmailed-into-playing-deadpool-in-x-men-origins-842306-600x338.jpg'),
(9, 'dddd', '2017-12-06', 'ddd', 'ddd', 'ddd', 222, 'https://www.fatosdesconhecidos.com.br/wp-content/uploads/2017/02/how-to-fix-x-men-movie-tv-universe-continuity-230848-600x338.jpg'),
(10, 'ULTIMO FILME ANTES DE ENVIAR e dormir', '2017-12-20', 'Eu estou muito cansado, estou desde as 18hr ate agora fazendo este trabalho e acredito que tudo ocorrera bem amanha. No caso hoje. Ainda falta a prova mas Deus que ohia', 'Tadeu', 'Hahahhahaha eu de novo', 100000000, 'http://www.fatosdesconhecidos.com.br/wp-content/uploads/2017/07/1-171-600x338.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `filmes`
--
ALTER TABLE `filmes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
