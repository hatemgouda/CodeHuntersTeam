-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2015 at 03:05 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(25) NOT NULL,
  `permission_level` int(11) NOT NULL DEFAULT '2',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=79 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `permission_level`) VALUES
(5, 'khaled', 'f6abc30d8a5ad5f36c62cafe0f30ffd8b8a8003b', 'khaled@yahoo.com', 2),
(6, 'khaled', 'f6abc30d8a5ad5f36c62cafe0f30ffd8b8a8003b', 'khaled@yahoo.com', 2),
(8, 'hatem', 'f6abc30d8a5ad5f36c62cafe0f30ffd8b8a8003b', 'hatem@yahoo.com', 1),
(9, 'admin', 'd4f38c4dfb91b0145120155a46ddb95a95e95dcb', 'admin@yahoo.com', 0),
(71, 'jkhjk2255', '8aaeb397278b32ee429c3920fc736d471b6a9e0d', 'jhjjkh@jkhjk', 2),
(72, 'sdfdsf', 'f6abc30d8a5ad5f36c62cafe0f30ffd8b8a8003b', 'asfdf@yahoo.com', 2),
(73, 'user', 'd4f38c4dfb91b0145120155a46ddb95a95e95dcb', 'user@yahoo.com', 2),
(78, 'moderator', 'd4f38c4dfb91b0145120155a46ddb95a95e95dcb', 'moderator@yahoo.com', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
