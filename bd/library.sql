-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 11, 2018 at 11:26 PM
-- Server version: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `adresses`
--

CREATE TABLE IF NOT EXISTS `adresses` (
  `id` int(11) NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number` int(5) NOT NULL,
  `zip` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `adresses`
--

INSERT INTO `adresses` (`id`, `city`, `street`, `number`, `zip`, `created`, `modified`, `user_id`) VALUES
(1, 'Laval', 'Geneva', 12, 'H7N312', '2018-10-09 15:21:44', '2018-10-09 15:21:44', 0),
(2, 'Montreal', 'Mont-Royal', 11, 'H0H0H0', '2018-10-09 15:22:16', '2018-10-11 22:41:28', 0),
(3, 'Laval', 'Concorde', 13, 'H71N12', '2018-10-09 17:52:15', '2018-10-09 17:52:15', 0),
(4, 'Laval', 'Geneva', 11, 'H7N312', '2018-10-11 22:27:40', '2018-10-11 22:27:40', 0),
(6, 'Laval', 'Geneva', 22, 'H7N311', '2018-10-11 22:37:48', '2018-10-11 22:38:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `publication` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `publication`, `created`, `modified`, `user_id`) VALUES
(1, 'Harry Potter and the order of the phoenix', '2013-10-06', '2018-10-09 15:23:38', '2018-10-09 15:23:38', 1),
(2, 'Game of thrones', '2014-02-19', '2018-10-10 20:58:30', '2018-10-10 20:58:30', 1),
(3, 'Alice in Wonderland', '2013-04-10', '2018-10-10 20:58:56', '2018-10-10 20:58:56', 3),
(4, 'Name of the wind', '2018-10-10', '2018-10-10 21:00:25', '2018-10-10 21:00:25', 2);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `name`, `path`, `created`, `modified`) VALUES
(1, 'harry.jpg', 'Files/', '2018-10-11 21:41:07', '2018-10-11'),
(2, 'name.jpg', 'Files/', '2018-10-11 21:51:06', '2018-10-11'),
(3, 'alice.jpg', 'Files/', '2018-10-11 21:51:52', '2018-10-11');

-- --------------------------------------------------------

--
-- Table structure for table `i18n`
--

CREATE TABLE IF NOT EXISTS `i18n` (
  `id` int(11) NOT NULL,
  `locale` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `i18n`
--

INSERT INTO `i18n` (`id`, `locale`, `foreign_key`, `field`, `content`, `model`) VALUES
(1, 'fr_CA', 1, 'title', 'Harry Potter et la Coupe de feu', 'Books'),
(2, 'fr_CA', 2, 'title', 'Le Throne de fer', 'Books'),
(3, 'fr_CA', 3, 'title', 'Alice au Pays des Merveilles', 'Books'),
(4, 'fr_CA', 4, 'title', 'Le Nom du Vent', 'Books'),
(5, 'es', 1, 'title', 'Harry Potter Y La Orden Del Fenix', 'Books'),
(6, 'es', 2, 'title', 'Juego de tronos', 'Books'),
(7, 'es', 3, 'title', 'Alicia En El Pais de Las Maravillas', 'Books'),
(8, 'es', 4, 'title', 'El Nombre Del Viento', 'Books');

-- --------------------------------------------------------

--
-- Table structure for table `libraries`
--

CREATE TABLE IF NOT EXISTS `libraries` (
  `id` int(11) NOT NULL,
  `adresse_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `libraries`
--

INSERT INTO `libraries` (`id`, `adresse_id`, `name`, `created`, `modified`, `user_id`) VALUES
(1, 2, 'Biblio Fun 2', '2018-10-09 17:48:25', '2018-10-11 22:47:02', 0);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL,
  `adresse_id` int(11) NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `adresse_id`, `firstname`, `lastname`, `created`, `modified`, `user_id`) VALUES
(1, 1, 'Luc', 'Roy', '2018-10-09 17:47:53', '2018-10-09 17:47:53', 0),
(3, 1, 'Luc', 'Roy', '2018-10-09 22:43:16', '2018-10-11 22:59:24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE IF NOT EXISTS `stocks` (
  `id` int(11) NOT NULL,
  `librarie_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `copy` int(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `librarie_id`, `book_id`, `copy`, `user_id`) VALUES
(1, 1, 1, 3, 0),
(3, 1, 1, 442, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created`, `modified`, `type`) VALUES
(1, 'Luc', 'lr.infographie@gmail.com', '$2y$10$2pvpDYAP3yS2IyDagZMCTe62b1.igopxohUcG3Ufr.xMk/paPpXCe', '2018-10-09 18:04:15', '2018-10-09 18:04:15', 'manager'),
(2, 'Bob', 'test@test.com', '$2y$10$2aeKiEP5MY.MbTiMAq1ZkuQh3qKGb4DbK8Aeayq.V94Wwt5PtI78a', '2018-10-09 18:19:26', '2018-10-09 18:19:26', 'bibliothequere'),
(3, 'Luc Roy', 'email@email.com', '$2y$10$MVBBa.V9kPut3h/Xzjn5qeKZ9BuFxF/SJtzz25435perx77zQxtTW', '2018-10-09 22:24:20', '2018-10-09 22:24:20', 'manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adresses`
--
ALTER TABLE `adresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `i18n`
--
ALTER TABLE `i18n`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `libraries`
--
ALTER TABLE `libraries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adresse_id` (`adresse_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adresse_id` (`adresse_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `librarie_id` (`librarie_id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adresses`
--
ALTER TABLE `adresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `i18n`
--
ALTER TABLE `i18n`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `libraries`
--
ALTER TABLE `libraries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `libraries`
--
ALTER TABLE `libraries`
  ADD CONSTRAINT `libraries_ibfk_1` FOREIGN KEY (`adresse_id`) REFERENCES `adresses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_ibfk_1` FOREIGN KEY (`adresse_id`) REFERENCES `adresses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stocks`
--
ALTER TABLE `stocks`
  ADD CONSTRAINT `stocks_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stocks_ibfk_2` FOREIGN KEY (`librarie_id`) REFERENCES `libraries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
