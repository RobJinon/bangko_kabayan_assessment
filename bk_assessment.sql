-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2024 at 03:50 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bk_assessment`
--

-- --------------------------------------------------------

--
-- Table structure for table `acct_master`
--

CREATE TABLE `acct_master` (
  `#` int(11) NOT NULL,
  `IDNo` text NOT NULL,
  `AccTyp` text NOT NULL,
  `AcctNo` int(11) NOT NULL,
  `ChkDgt` int(11) NOT NULL,
  `Balance` decimal(20,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acct_master`
--

INSERT INTO `acct_master` (`#`, `IDNo`, `AccTyp`, `AcctNo`, `ChkDgt`, `Balance`) VALUES
(1, '00001', 'LN', 1111, 25, '130212.55'),
(2, '00002', 'SA', 2222, 26, '212896.75'),
(3, '00003', 'SA', 3333, 1, '3561.56'),
(4, '00001', 'LN', 4444, 2, '98000.12'),
(5, '00002', 'SA', 5555, 99, '1450000.11'),
(6, '00001', 'LN', 6666, 3, '1500894.00'),
(7, '00001', 'SA', 7777, 5, '45222.12'),
(8, '00002', 'LN', 8888, 6, '32341.51'),
(9, '00003', 'SA', 9999, 7, '43551.15'),
(10, '00004', 'SA', 1234, 54, '562254.18'),
(11, '00005', 'SA', 5678, 67, '90431.12'),
(12, '00001', 'SA', 4321, 89, '11960.89'),
(13, '00010', 'SA', 8765, 32, '145.78'),
(14, '00002', 'SA', 1222, 21, '4345.67'),
(15, '00004', 'LN', 1333, 88, '653342.18');

-- --------------------------------------------------------

--
-- Table structure for table `id_master`
--

CREATE TABLE `id_master` (
  `#` int(11) NOT NULL,
  `IDNo` text NOT NULL,
  `ClntName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `id_master`
--

INSERT INTO `id_master` (`#`, `IDNo`, `ClntName`) VALUES
(1, '00001', 'Pascual, Piolo'),
(2, '00002', 'Rosales, Jericho'),
(3, '00003', 'Dantes, Dingdong'),
(4, '00004', 'Padilla, Daniel'),
(5, '00005', 'Rodriguez, Tom'),
(6, '00010', 'Santos, Eric');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acct_master`
--
ALTER TABLE `acct_master`
  ADD PRIMARY KEY (`#`);

--
-- Indexes for table `id_master`
--
ALTER TABLE `id_master`
  ADD PRIMARY KEY (`#`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acct_master`
--
ALTER TABLE `acct_master`
  MODIFY `#` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `id_master`
--
ALTER TABLE `id_master`
  MODIFY `#` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
