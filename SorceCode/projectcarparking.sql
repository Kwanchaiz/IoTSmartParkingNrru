-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 07, 2021 at 07:08 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectcarparking`
--
CREATE DATABASE IF NOT EXISTS `projectcarparking` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `projectcarparking`;

-- --------------------------------------------------------

--
-- Table structure for table `carparking`
--

DROP TABLE IF EXISTS `carparking`;
CREATE TABLE `carparking` (
  `ID` int(11) NOT NULL,
  `Parking` int(11) NOT NULL,
  `Day` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `carparking`
--

INSERT INTO `carparking` (`ID`, `Parking`, `Day`) VALUES
(1, 4, '2021-11-29 13:41:26');

-- --------------------------------------------------------

--
-- Table structure for table `park1`
--

DROP TABLE IF EXISTS `park1`;
CREATE TABLE `park1` (
  `ID` int(11) NOT NULL,
  `RunWay1` int(11) NOT NULL,
  `Day` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `park1`
--

INSERT INTO `park1` (`ID`, `RunWay1`, `Day`) VALUES
(1, 0, '2021-11-29 13:41:53');

-- --------------------------------------------------------

--
-- Table structure for table `park2`
--

DROP TABLE IF EXISTS `park2`;
CREATE TABLE `park2` (
  `ID` int(11) NOT NULL,
  `RunWay2` int(11) NOT NULL,
  `Day` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `park2`
--

INSERT INTO `park2` (`ID`, `RunWay2`, `Day`) VALUES
(1, 0, '2021-11-29 13:42:00');

-- --------------------------------------------------------

--
-- Table structure for table `park3`
--

DROP TABLE IF EXISTS `park3`;
CREATE TABLE `park3` (
  `ID` int(11) NOT NULL,
  `RunWay3` int(11) NOT NULL,
  `Day` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `park3`
--

INSERT INTO `park3` (`ID`, `RunWay3`, `Day`) VALUES
(1, 0, '2021-11-29 13:42:06');

-- --------------------------------------------------------

--
-- Table structure for table `park4`
--

DROP TABLE IF EXISTS `park4`;
CREATE TABLE `park4` (
  `ID` int(11) NOT NULL,
  `RunWay4` int(11) NOT NULL,
  `Day` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `park4`
--

INSERT INTO `park4` (`ID`, `RunWay4`, `Day`) VALUES
(1, 0, '2021-11-29 13:42:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carparking`
--
ALTER TABLE `carparking`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `park1`
--
ALTER TABLE `park1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `park2`
--
ALTER TABLE `park2`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `park3`
--
ALTER TABLE `park3`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `park4`
--
ALTER TABLE `park4`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carparking`
--
ALTER TABLE `carparking`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `park1`
--
ALTER TABLE `park1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `park2`
--
ALTER TABLE `park2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `park3`
--
ALTER TABLE `park3`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `park4`
--
ALTER TABLE `park4`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
