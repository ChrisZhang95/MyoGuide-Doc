-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 19, 2017 at 03:11 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MyoGuideDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `cID` bigint(10) NOT NULL,
  `firstName` varchar(10) NOT NULL,
  `lastName` varchar(10) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(25) NOT NULL,
  `city` varchar(20) DEFAULT NULL,
  `street` varchar(20) DEFAULT NULL,
  `streetNum` int(10) DEFAULT NULL,
  `unitNum` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`cID`, `firstName`, `lastName`, `phone`, `email`, `city`, `street`, `streetNum`, `unitNum`) VALUES
(1, 'Radu', 'Holic', '4168458456', 'radu.holic@hotmail.com', 'Toronto', 'Yonge', 1001, 2501),
(2, 'Justin', 'Trudeau', '1234567891', 'justin.t@hoadmail.com', 'Ottawa', 'Queen', 12, 123),
(3, 'Chris', 'Zhang', '4168456321', 'chris.zhang@hotmail.com', 'Toronto', 'Bay', 1231, 1023);

-- --------------------------------------------------------

--
-- Table structure for table `License`
--

CREATE TABLE `License` (
  `serialNum` int(11) NOT NULL,
  `licenseType` enum('full','discount','monthly') NOT NULL DEFAULT 'full',
  `cID` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `License`
--

INSERT INTO `License` (`serialNum`, `licenseType`, `cID`) VALUES
(423154564, 'discount', 2),
(1231324564, 'full', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`cID`);

--
-- Indexes for table `License`
--
ALTER TABLE `License`
  ADD PRIMARY KEY (`serialNum`),
  ADD KEY `cID` (`cID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `cID` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `License`
--
ALTER TABLE `License`
  ADD CONSTRAINT `license_ibfk_1` FOREIGN KEY (`cID`) REFERENCES `Customer` (`cID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
