-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2018 at 03:52 PM
-- Server version: 5.5.59
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
-- Database: `hotelmgmt`
--

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `PackageType` varchar(2) NOT NULL,
  `PackageName` varchar(200) NOT NULL,
  `PackageCost` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`PackageType`, `PackageName`, `PackageCost`) VALUES
('A', 'KB', 198.78),
('B', 'Langkawi Trip + Breakfast + Dinner', 150),
('C', 'Langkawi Trip + Breakfast + Dinner + Snorkling Trip', 300),
('d', 'd', 34.87),
('E', 'Japan Trip', 4500.98);

-- --------------------------------------------------------

--
-- Table structure for table `roomlist`
--

CREATE TABLE `roomlist` (
  `RoomID` int(11) NOT NULL,
  `RoomType` enum('Economy','Business','Executive') NOT NULL,
  `Status` enum('Available','Booked','Owned','') NOT NULL,
  `Price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roomlist`
--

INSERT INTO `roomlist` (`RoomID`, `RoomType`, `Status`, `Price`) VALUES
(1, 'Business', 'Available', 388),
(2, 'Economy', 'Owned', 60),
(3, 'Economy', 'Booked', 130.95),
(4, 'Economy', 'Owned', 350.98),
(6, 'Executive', 'Owned', 999.98),
(7, 'Business', 'Booked', 78.98);

-- --------------------------------------------------------

--
-- Table structure for table `staffsignup`
--

CREATE TABLE `staffsignup` (
  `ID` int(11) NOT NULL,
  `Fullname` varchar(100) NOT NULL,
  `Birthdate` date NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Position` enum('Cleaner','Worker','Concierge','Event Planner','Executive Chef','Front Desk Clerk','General Manager','Housekeeper') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffsignup`
--

INSERT INTO `staffsignup` (`ID`, `Fullname`, `Birthdate`, `Username`, `Password`, `Address`, `Phone`, `Email`, `Position`) VALUES
(4, 'Hotman', '2018-02-05', 'hotman', 'hotman123', 'Kolej', '0192739273', 'pokkorn@yahoo.com', 'Concierge'),
(5, 'Ayuni', '2018-02-19', 'ayuni', 'ayuni123', 'Belakang', '018273826', 'tidakkk@yahoo.com', 'Executive Chef');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`PackageType`);

--
-- Indexes for table `roomlist`
--
ALTER TABLE `roomlist`
  ADD PRIMARY KEY (`RoomID`);

--
-- Indexes for table `staffsignup`
--
ALTER TABLE `staffsignup`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `roomlist`
--
ALTER TABLE `roomlist`
  MODIFY `RoomID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `staffsignup`
--
ALTER TABLE `staffsignup`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
