-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2017 at 02:07 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `stg1`
--

CREATE TABLE `stg1` (
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
  `tot` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stg1`
--

INSERT INTO `stg1` (`id`, `username`, `first`, `two`, `three`, `four`, `five`, `six`, `seven`, `eight`, `nine`, `ten`, `tot`) VALUES
(0, 'sabeelmuttil', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `userpass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `useremail`, `userpass`) VALUES
(1, 'sabeelmuttil', 'sabeelmuttil@gmail.com', '1f67913d9ee5dbc9986e9684a373fcdf1f65a73ddaa02a88960e8f88d809843c'),
(2, 'MUHAMMAD ANAS', 'saffa@gmail.com', '15e2b0d3c33891ebb0f1ef609ec419420c20e320ce94c65fbc8c3312448eb225');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stg1`
--
ALTER TABLE `stg1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
