-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 24, 2017 at 07:11 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--
CREATE DATABASE IF NOT EXISTS `exam` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `exam`;

-- --------------------------------------------------------

--
-- Table structure for table `hak`
--

DROP TABLE IF EXISTS `hak`;
CREATE TABLE IF NOT EXISTS `hak` (
  `hid` int(10) NOT NULL,
  `hname` varchar(100) NOT NULL,
  `hpass` varchar(100) NOT NULL,
  PRIMARY KEY (`hid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `hak`
--

TRUNCATE TABLE `hak`;
--
-- Dumping data for table `hak`
--

INSERT DELAYED IGNORE INTO `hak` (`hid`, `hname`, `hpass`) VALUES
(1, 'use', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `hak0`
--

DROP TABLE IF EXISTS `hak0`;
CREATE TABLE IF NOT EXISTS `hak0` (
  `h0id` int(10) NOT NULL,
  `onlypass` varchar(100) NOT NULL,
  PRIMARY KEY (`h0id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `hak0`
--

TRUNCATE TABLE `hak0`;
--
-- Dumping data for table `hak0`
--

INSERT DELAYED IGNORE INTO `hak0` (`h0id`, `onlypass`) VALUES
(1, '2017');

-- --------------------------------------------------------

--
-- Table structure for table `reslt`
--

DROP TABLE IF EXISTS `reslt`;
CREATE TABLE IF NOT EXISTS `reslt` (
  `userId` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `s1` int(100) NOT NULL,
  `s2` int(100) NOT NULL,
  `s3` int(100) NOT NULL,
  `s4` int(100) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `reslt`
--

TRUNCATE TABLE `reslt`;
-- --------------------------------------------------------

--
-- Table structure for table `stg1`
--

DROP TABLE IF EXISTS `stg1`;
CREATE TABLE IF NOT EXISTS `stg1` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `first` int(100) NOT NULL,
  `two` int(100) NOT NULL,
  `three` int(100) NOT NULL,
  `four` int(100) NOT NULL,
  `five` int(100) NOT NULL,
  `six` int(100) NOT NULL,
  `seven` int(100) NOT NULL,
  `eight` int(100) NOT NULL,
  `nine` int(100) NOT NULL,
  `ten` int(100) NOT NULL,
  `tot` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `stg1`
--

TRUNCATE TABLE `stg1`;
--
-- Dumping data for table `stg1`
--

INSERT DELAYED IGNORE INTO `stg1` (`id`, `username`, `first`, `two`, `three`, `four`, `five`, `six`, `seven`, `eight`, `nine`, `ten`, `tot`) VALUES
(0, 'sabeelmuttil', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `userpass` varchar(100) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `users`
--

TRUNCATE TABLE `users`;
--
-- Dumping data for table `users`
--

INSERT DELAYED IGNORE INTO `users` (`userId`, `username`, `useremail`, `userpass`) VALUES
(1, 'sabeelmuttil', 'sabeelmuttil@gmail.com', '1f67913d9ee5dbc9986e9684a373fcdf1f65a73ddaa02a88960e8f88d809843c'),
(2, 'MUHAMMAD ANAS', 'saffa@gmail.com', '15e2b0d3c33891ebb0f1ef609ec419420c20e320ce94c65fbc8c3312448eb225');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
