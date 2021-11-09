-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2021 at 10:56 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_helix`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `project_name` varchar(255) DEFAULT NULL,
  `project_body` varchar(500) DEFAULT NULL,
  `date_registered` date NOT NULL DEFAULT current_timestamp(),
  `feedback` varchar(1000) DEFAULT NULL,
  `quiz_score` int(10) DEFAULT NULL,
  `user_type` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `project_name`, `project_body`, `date_registered`, `feedback`, `quiz_score`, `user_type`) VALUES
(2, 'Paulo', 'Deleon', 'paulo07', 'paulo.deleon@my.jru.edu', 'cea7f9a93d2159aeebdea91c0be6a722', 'Methodology', '<p>POIQWUYTEUYGUHBOJBDJBHOHBUHBUHBU</p>\r\n', '2020-11-19', NULL, 0, 'user'),
(3, 'Rizza', 'De Leon', 'rizzadeleon11', 'rizzadeleon@gmail.com', 'f4edeeeaec7ce6d35923aa4ef1b1d36a', 'Husky Cat', 'App that will find a cat their relationship match.', '2020-11-19', NULL, NULL, 'user'),
(5, 'Rhea', 'De Leon', 'rhea00', 'rhea.deleon@gmail.com', 'b4592dd618b638e6b5e5d39ed86e1114', 'The Blue Bird', 'Bird store', '2020-11-19', NULL, NULL, 'user'),
(8, 'Yoshi', 'Kanno', 'yoshinori27', 'yosh.kanno@gmail.com', '0479e2854f19743342693030b08ae67f', 'The Social Experiment', 'Nothing', '2020-11-19', NULL, NULL, 'user'),
(10, 'Anabel', 'De Leon', 'anabel09', 'anabeldeleon@gmail.com', '8b4db3eb2c5e977b0a053bd3d66b5e32', 'Town Hall Meeting', 'Schedule a meeting app', '2020-11-19', NULL, NULL, 'user'),
(15, 'Allan', 'Rario', 'allanrario', 'allanrario@gmail.com', '781390ef6ee677815484c57ec4b85e01', 'Make a House', '<p>Make a miniature house</p>\r\n', '2020-11-19', NULL, 10, 'user'),
(17, 'Mip', 'Dog', 'MipTheDog', 'mipdog@gmail.com', '2aba3215d31dfd870dbcca9136e7edf7', '', '', '2020-11-19', NULL, NULL, 'user'),
(26, 'Mip', 'Mips', 'MipsTheDog', 'mipsdog@gmail.com', '191220d9409d5ac823b6ba4a99f32a12', NULL, NULL, '2020-11-19', NULL, NULL, 'user'),
(27, 'Tom', 'Cat', 'tomcat', 'tomcat@gmail.com', '34b7da764b21d298ef307d04d8152dc5', 'Catch Jerry', 'I would love to catch and eat Jerry.', '2020-11-19', NULL, NULL, 'user'),
(28, 'Jerry', 'Mice', 'JerryTheMice', 'jerrythemice@gmail.com', '30035607ee5bb378c71ab434a6d05410', 'Run from Tom', '<p>I will build a miniature house that Tom can&#39;t enter.</p>\r\n', '2020-11-19', NULL, NULL, 'user'),
(31, 'Marianne', 'Rario', 'marianne07', 'mariannerario@gmail.com', '5d1d88238cb3222b1798127b285b827c', NULL, NULL, '2020-11-20', NULL, NULL, 'user'),
(32, 'Helix', 'Admin', 'helix_admin', 'helix_admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', NULL, NULL, '2020-11-20', NULL, NULL, 'admin'),
(34, 'John', 'Cena', 'realjohncena', 'johncena@gmail.com', 'cea7f9a93d2159aeebdea91c0be6a722', NULL, NULL, '2020-11-20', NULL, NULL, 'user'),
(36, 'Tilyo', 'Cast', 'loverario', 'joshuacastillorario@gmail.com', 'd356ac40229680d519901c3d4a79472f', 'iamnumber 4', '<p>iamnumber</p>\r\n', '2020-11-22', '<p>shit</p>\r\n', 4, NULL),
(37, 'aries', 'agapito', 'aries01', 'ariesagapito@my.jru.edu', 'd9ce320e9607636e2dba50d23dc1704d', 'PHP project', '<p>PHP main</p>\r\n', '2020-11-28', '<p>In order to ensure the security you need to secure it then</p>\r\n', 8, NULL),
(38, 'John', 'Felipe', 'Patrick', 'juanpatrick@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Helix project', 'pfpaoskofpk', '2020-11-29', NULL, 6, NULL),
(39, 'Mickey', 'Mouse', 'mickey_mouse', 'mickey.mouse@my.jru.edu', '98df1b3e0103f57a9817d675071504ba', NULL, NULL, '2020-11-30', NULL, NULL, NULL),
(40, 'John', 'Felipe', 'Juan', 'john_felipe@gmail.com', 'cea7f9a93d2159aeebdea91c0be6a722', NULL, NULL, '2020-12-01', NULL, 7, NULL),
(41, 'Rhea', 'De Leon Kanno', 'rheaKanno', 'rhea.kanno@gmail.com', 'cea7f9a93d2159aeebdea91c0be6a722', NULL, NULL, '2020-12-02', NULL, NULL, NULL),
(42, 'marianne', 'deleon', 'marianne27', 'mariannerario07@gmail.com', '8c19530992d099f9030da973ef07594c', NULL, NULL, '2021-04-19', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
