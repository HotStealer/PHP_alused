-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 27, 2019 at 09:29 PM
-- Server version: 5.6.41
-- PHP Version: 7.2.7

SET FOREIGN_KEY_CHECKS=0
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `karlpodr_php`
--
CREATE DATABASE IF NOT EXISTS 'karlpodr_php' DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE 'karlpodr_php';
-- --------------------------------------------------------

--
-- Table structure for table `user`
--
DROP TABLE IF EXISTS 'user';
CREATE TABLE `user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL
    PRIMARY KEY ('user_id')
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `first_name`, `last_name`) VALUES
(1, 'kasutaja', '69fb46f4c18463dd25002aeffc0257d1', 'Tavaline', 'Kasutaja');
SET FOREIGN_KEY_CHECKS=1;
COMMIT;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
