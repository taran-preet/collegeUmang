-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2022 at 08:05 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `doner`
--

CREATE TABLE `doner` (
  `username` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `useraddress` varchar(100) NOT NULL,
  `usernumber` int(10) NOT NULL,
  `usercity` varchar(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `adhar` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doner`
--

INSERT INTO `doner` (`username`, `email`, `useraddress`, `usernumber`, `usercity`, `amount`, `adhar`) VALUES
('admin', 'tbaweja50_be21@thapar.edu', '123-R', 2147483647, 'Patiala', 34100, 1234567891),
('akshit', 'akshit@thapar.edu', '123-R', 2147483647, 'Bathida', 500, 1234567891),
('taran', 'taransingh@gmail.com', '565-R model town', 2147483647, 'ludhiana', 1000, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `needy`
--

CREATE TABLE `needy` (
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `rnumber` int(10) NOT NULL,
  `city` text NOT NULL,
  `amount` int(100) NOT NULL,
  `hospital` text NOT NULL,
  `adhar` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `needy`
--

INSERT INTO `needy` (`username`, `email`, `address`, `rnumber`, `city`, `amount`, `hospital`, `adhar`) VALUES
('akshit', 'akshit@thapar.edu', '123', 1234567899, 'Jalandhar', 500, 'akshit hosp', 1234567891),
('admin', 'tbaweja50_be21@thapar.edu', '123', 123456789, 'Patiala', 34100, 'taran hos', 1234567891);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doner`
--
ALTER TABLE `doner`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `needy`
--
ALTER TABLE `needy`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
