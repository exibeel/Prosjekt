CREATE SCHEMA IF NOT EXISTS dbNavn;
USE dbNavn;
-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13. Mar, 2015 13:20 
-- Server-versjon: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbnavn`
--

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `reservasjon`
--

CREATE TABLE IF NOT EXISTS `reservasjon` (
  `id` int(11) NOT NULL,
  `start` datetime NOT NULL,
  `slutter` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `rom`
--

CREATE TABLE IF NOT EXISTS `rom` (
`romnummer` int(11) NOT NULL,
  `kapasitet` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `harProsjektor` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `rom`
--

INSERT INTO `rom` (`romnummer`, `kapasitet`, `status`, `harProsjektor`) VALUES
(1, 2, 'Ledig', 'Nei'),
(2, 2, 'Ledig', 'Nei'),
(3, 2, 'Ledig', 'Nei'),
(4, 2, 'Ledig', 'Nei'),
(5, 2, 'Ledig', 'Ja'),
(6, 3, 'Ledig', 'Nei'),
(7, 3, 'Ledig', 'Nei'),
(8, 3, 'Ledig', 'Nei'),
(9, 3, 'Ledig', 'Ja'),
(10, 3, 'Ledig', 'Ja'),
(11, 4, 'Ledig', 'Nei'),
(12, 4, 'Ledig', 'Nei'),
(13, 4, 'Ledig', 'Ja'),
(14, 4, 'Ledig', 'Ja'),
(15, 4, 'Ledig', 'Ja');

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `studentnummer` int(6) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `users`
--

INSERT INTO `users` (`id`, `studentnummer`, `username`, `password`, `email`) VALUES
(1, 701966, 'klasin14', 'test123', 'klasin14@student.westerdals.no'),
(2, 702300, 'ifzami14', 'test123', 'ifzami14@student.westerdals.no'),
(3, 702508, 'haton14', 'test123', 'haton14@student.westerdals.no'),
(4, 702350, 'kriing14', 'test123', 'kriing14@student.westerdals.no'),
(5, 701905, 'thurik14', 'test123', 'thurik14@student.westerdals.no'),
(6, 702215, 'lovrik14', 'test123', 'lovrik14@student.westerdals.no'),
(7, 123456, 'admin', 'admin123', 'admin@email.no'),
(8, 666666, 'test', 'test', ''),
(9, 888888, 'testing', 'test', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservasjon`
--
ALTER TABLE `reservasjon`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rom`
--
ALTER TABLE `rom`
 ADD PRIMARY KEY (`romnummer`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rom`
--
ALTER TABLE `rom`
MODIFY `romnummer` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
