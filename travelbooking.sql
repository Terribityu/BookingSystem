-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 03:50 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelbooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blogID` int(55) NOT NULL,
  `blogTitle` varchar(55) NOT NULL,
  `blogAuthor` varchar(55) NOT NULL,
  `blogDate` datetime(5) NOT NULL,
  `blogDesc` varchar(255) NOT NULL,
  `status` varchar(55) NOT NULL DEFAULT 'pending',
  `destID` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bookID` int(55) NOT NULL,
  `bookFname` varchar(255) NOT NULL,
  `bookLname` varchar(255) NOT NULL,
  `bookEmail` varchar(255) NOT NULL,
  `bookCount` int(255) NOT NULL,
  `bookPrice` int(55) NOT NULL,
  `destID` int(255) NOT NULL,
  `bookDate` datetime(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `clienttickets`
--

CREATE TABLE `clienttickets` (
  `ticketID` int(44) NOT NULL,
  `ticketName` varchar(255) NOT NULL,
  `ticketEmail` varchar(255) NOT NULL,
  `ticketMessage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `destID` int(44) NOT NULL,
  `destName` varchar(255) NOT NULL,
  `destInclu` varchar(255) NOT NULL,
  `destDesc` longtext NOT NULL,
  `destPrice` int(55) NOT NULL,
  `destImg` varchar(255) NOT NULL,
  `destTrailer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `saleID` int(55) NOT NULL,
  `bookings` int(55) NOT NULL,
  `destID` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(55) NOT NULL,
  `username` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(55) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `email`, `password`, `status`) VALUES
(1, 'admin', 'administrator@gmail.com', '$2y$10$SZujt/6pTNhL.c..bmfkYOfDeInxDDyOHJ1k.0hn3.LLAXEzJ7Jpe', 'approved'),
(2, 'burat', 'tatata@gmail.com', '$2y$10$GNUVCsde02sFG3gH4hfxQOXXHNOaCVAyNCNlsqMmKEY2Liq9vNPGW', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blogID`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bookID`);

--
-- Indexes for table `clienttickets`
--
ALTER TABLE `clienttickets`
  ADD PRIMARY KEY (`ticketID`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`destID`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`saleID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blogID` int(55) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bookID` int(55) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clienttickets`
--
ALTER TABLE `clienttickets`
  MODIFY `ticketID` int(44) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `destID` int(44) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `saleID` int(55) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
