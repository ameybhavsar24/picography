-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 01, 2017 at 03:29 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `picography`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(64) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `cipher` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(64) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci NOT NULL,
  `datetime` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `isOnline` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `email_2` (`email`),
  FULLTEXT KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=77 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `cipher`, `ip`, `datetime`, `isOnline`) VALUES
(57, 'dfsdfdf', 'dsdadsdadsdsdsdsd', '7395ca6c7f786964102a23fa324acc7028311226', '127.0.0.1', '2017.Nov.27.Mon.11.07.21.UTC', '0'),
(59, 'fdfdfdfd', 'fdsafdf', '462da39603e4c01e7e1f9ac66ba8aafc84ffd536', '127.0.0.1', '2017.Nov.27.Mon.11.08.51.UTC', '1'),
(63, 'sffdfdfdsaf', 'fdsafdkjk', 'f9df9795a3421e4dd1802b5f248342f061349cc1', '127.0.0.1', '2017.Nov.27.Mon.11.13.46.UTC', '0'),
(65, 'sffdfdfdsaf', 'fgdsafsdaf54', 'fc38ecd7e7bfb05206b96c2b3362f15d831d0dcb', '127.0.0.1', '2017.Nov.27.Mon.11.20.58.UTC', '1'),
(67, 'dsdsadbkj', 'fsidagbfiuasdg', '121bac7eef57e37efdcc502b69196eb36038c412', '127.0.0.1', '2017.Nov.27.Mon.11.26.10.UTC', '1'),
(68, 'fdsafsdakufgdkulg', 'online..test', 'c0b656f8f7f146f7e7278417c22eeb5bfb614b8a', '127.0.0.1', '2017.Nov.27.Mon.11.26.25.UTC', '1'),
(70, 'fasdfdsaf', 'onlinetest2', 'd1299164fd920708051a03a12f25a86064e5b630', '127.0.0.1', '2017.Nov.27.Mon.11.27.13.UTC', '2'),
(71, 'dsff', 'afsfsdfdsf', '2a5261482fd90e4384d9ef530a3cadca2d9024f8', '127.0.0.1', '2017.Nov.27.Mon.11.28.14.UTC', '1'),
(72, 'sadfsafdfdsfd', '12132126549', '197bddfc0dbdf9af3c7c422d6d860e4065bc1129', '127.0.0.1', '2017.Nov.27.Mon.11.28.32.UTC', '1'),
(74, 'fdsafgdfoui', 'fsdahfih', '95588cbdfbc0c0947f933fdc590eb5f52ad498e7', '127.0.0.1', '2017.Nov.27.Mon.11.30.51.UTC', '1'),
(75, 'Asdshk', 'fdigfi@dsd.com', 'b99eaa1dd47d4eac64644aadfadbf23da3aa3a2c', '127.0.0.1', '2017.Dec.01.Fri.14.41.42.UTC', '1'),
(76, 'fdfd', 'fdafdafdaf', '91a17ffed49880d8c814bbba4d6cebe0c661546d', '127.0.0.1', '2017.Dec.01.Fri.15.03.24.UTC', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
