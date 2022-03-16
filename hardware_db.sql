-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2022 at 04:14 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hardware_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cm`
--

CREATE TABLE `cm` (
  `uname` varchar(10) NOT NULL,
  `mbn` int(11) NOT NULL,
  `ad` varchar(70) NOT NULL,
  `cement1` varchar(98) NOT NULL,
  `q1` varchar(76) NOT NULL,
  `tmt1` varchar(78) NOT NULL,
  `q2` varchar(67) NOT NULL,
  `pipe1` varchar(76) NOT NULL,
  `q3` varchar(67) NOT NULL,
  `EMAIL` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cm`
--

INSERT INTO `cm` (`uname`, `mbn`, `ad`, `cement1`, `q1`, `tmt1`, `q2`, `pipe1`, `q3`, `EMAIL`) VALUES
('nitin', 2147483647, 'shimla', 'PPL', '4 bag', '10', '29ft', 'GI', '45kg', 'nit@gmail.com'),
('navu', 2147483647, 'vpo tal', 'PPL', '10kg', '12', '29kg', 'PVC', '45kg', 'NV@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cm`
--
ALTER TABLE `cm`
  ADD PRIMARY KEY (`EMAIL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
