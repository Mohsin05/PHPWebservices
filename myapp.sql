-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 17, 2018 at 11:48 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `content` mediumtext NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `fk_user_id`, `content`, `created_at`) VALUES
(66, 16, 'mohsin ', '2018-10-17'),
(67, 16, 'Yuonas', '2018-10-17'),
(69, 21, 'Mohsin', '2018-10-17'),
(70, 56, 'It was a good day!', '2018-10-17'),
(71, 56, 'aother day', '2018-10-17'),
(72, 56, 'testing', '2018-10-17'),
(73, 56, '\"><script>alert(444)</script>', '2018-10-17'),
(74, 21, 'mohsin', '2018-10-17'),
(75, 21, 'mohsin ', '2018-10-17'),
(76, 21, 'mohsin ', '2018-10-17');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `email`, `password`, `date_created`) VALUES
(1, 'mohsin', 'mohsin@gmail.com', 'mohsin', '2018-10-09'),
(3, 'mohsin', 'moh@moh', '123', '0000-00-00'),
(4, 'John', 'john@example.com', '123', '2018-10-09'),
(5, 'Johnn', 'johhn@exampble.com', '1723', '2018-11-09'),
(6, 'Johnn', 'johhhhhhhhn@exampble.com', '1723', '2018-11-09'),
(8, 'Johnn', 'johh8n@exampble.com', '1723', '2018-11-09'),
(11, 'mohsin', 'moh@gmail.com', '123', '2018-11-09'),
(13, 'm', 'm@gmail.com', 's', '2018-11-09'),
(15, 'm', 'mohsinyounas05@gmail', 's', '2018-11-09'),
(16, 'Mohsin', 'mohsounas05@gmail.com', 'root', '2018-11-09'),
(17, '', 'a@a.com', 'root', '2018-11-09'),
(18, '', 'mohsinyounas00005@gmail.com', 'root', '2018-11-09'),
(19, '', 'mohsinmohsinyounas05@gmail.com', 'root', '2018-11-09'),
(20, '', '', 'root', '2018-11-09'),
(21, '', 'mohsinyounas05@gmail.com', 'root', '2018-11-09'),
(30, '', 'mohnyounas05@gmail.com', 'root', '2018-11-09'),
(32, '', 'mohsinyounas0000005@gmail.com', 'root', '2018-11-09'),
(34, '', 'mohsinyounas000005@gmail.com', 'root', '2018-11-09'),
(35, '', 'mohsinyounas05@gmail.co', 'root', '2018-11-09'),
(36, '', 'mohsin000younas05@gmail.com', 'root', '2018-11-09'),
(39, '', 'mohsinyounasssssss05@gmail.com', 'root', '2018-11-09'),
(41, '', 'mohsinyounas001235@gmail.com', 'root', '2018-11-09'),
(42, '', 'mohsinasdfyounas05@gmail.com', 'root', '2018-11-09'),
(43, '', 'moh2sinyounas05@gmail.com', 'root', '2018-11-09'),
(44, '', 'mohsiasdfnyounas05@gmail.com', 'root', '2018-11-09'),
(45, '', 'mohaaaasinyounas05@gmail.com', 'root', '2018-11-09'),
(47, '', 'mohsinyo11111unas05@gmail.com', 'root', '2018-11-09'),
(49, '', 'mohsinyounas23405@gmail.com', 'root', '2018-11-09'),
(54, 'asd', 'asd', 'asd', '2018-11-09'),
(56, 'mohsin', 'mohsinyounas005@gmail.com', '123', '2018-11-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`fk_user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `content`
--
ALTER TABLE `content`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`fk_user_id`) REFERENCES `user` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
