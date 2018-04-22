-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2018 at 08:17 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prime`
--

-- --------------------------------------------------------

--
-- Table structure for table `kalkulator`
--

CREATE TABLE `kalkulator` (
  `number1` int(100) NOT NULL,
  `operation` varchar(5) NOT NULL,
  `number2` int(100) NOT NULL,
  `result` int(50) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kalkulator`
--

INSERT INTO `kalkulator` (`number1`, `operation`, `number2`, `result`, `comment`) VALUES
(0, '', 0, 0, ''),
(2, 'Tamba', 2, 4, '4'),
(2, 'Tamba', 2, 4, '4'),
(0, '', 0, 0, ''),
(0, '', 0, 0, ''),
(2, 'Tamba', 2, 4, 'ad'),
(0, '', 0, 0, ''),
(123, 'Tolak', 1332, -1209, ''),
(0, '', 0, 0, ''),
(0, '', 0, 0, ''),
(0, '', 0, 0, ''),
(0, '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `table_login`
--

CREATE TABLE `table_login` (
  `id_log` int(12) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_login`
--

INSERT INTO `table_login` (`id_log`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'wasd', 'wasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_login`
--
ALTER TABLE `table_login`
  ADD PRIMARY KEY (`id_log`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_login`
--
ALTER TABLE `table_login`
  MODIFY `id_log` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
