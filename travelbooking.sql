-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2022 at 06:53 PM
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
  `blogDesc` varchar(255) NOT NULL
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
  `destID` int(255) NOT NULL
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

--
-- Dumping data for table `clienttickets`
--

INSERT INTO `clienttickets` (`ticketID`, `ticketName`, `ticketEmail`, `ticketMessage`) VALUES
(1, 'John Rey', '', ''),
(2, 'John Rey', 'fascinatingact@gmail.com', 'dawdadw'),
(3, 'John Rey', 'fascinatingact@gmail.com', 'dawdwadaw'),
(4, 'Jose Rafael Sarmiento', 'sarmientogay@gmail.com', 'adwadwadaw'),
(5, 'Jose Rafael Sarmiento', 'sarmientogay@gmail.com', 'Im gay'),
(6, '$name', '$email', '$message'),
(7, 'adwdaw', 'fascinatingact@gmail.com', 'i\"m Gay'),
(9, 'i\'m', 'gay', 'Hehehe'),
(10, 'John Rey', 'sarmientogay@gmail.com', 'gdfgfdgwgergwgrege'),
(11, 'Mizzy Jenvy F Manigque', 'manigquemizzy19@gmail.com', 'adwfaiwfafakwfaw\r\n'),
(12, 'John Rey', 'fascinatingact@gmail.com', 'fwefwfewfwefwe'),
(13, 'John Rey', 'fascinatingact@gmail.com', 'dasdasdsa'),
(14, 'John Rey', 'fascinatingact@gmail.com', 'dasdasdsa'),
(15, 'John Rey', 'fascinatingact@gmail.com', 'dasdasdsa'),
(16, 'John Rey', 'fascinatingact@gmail.com', 'dawdadwa'),
(17, 'John Rey', 'fascinatingact@gmail.com', 'dawdawdwadaw'),
(18, 'John Rey', 'fascinatingact@gmail.com', 'dawdawdwadaw'),
(19, 'John Rey', 'stodomingojohnrey5@gmail.com', 'stdawdwa'),
(20, 'John Rey', 'fascinatingact@gmail.com', 'dawdawfaw'),
(21, 'gawgaw', 'sarmientogay@gmail.com', 'fdsfdsfds'),
(22, 'gawgaw', 'sarmientogay@gmail.com', 'fdsfdsfds'),
(23, 'asdsa', 'fascinatingact@gmail.com', 'dawdawdwa'),
(24, 'John Rey', 'fascinatingact@gmail.com', 'dawdawdaw'),
(25, 'dawdaw', 'mizzymanigque19@gmail.com', 'dawwadaw'),
(26, 'fasf', 'k.anderson@example.com', 'gssdgsdgsd'),
(27, 'fasf', 'k.anderson@example.com', 'gssdgsdgsd'),
(28, 'daw', 'k.anderson@example.com', 'dawdawdaw'),
(29, 'John Rey', 'fascinatingact@gmail.com', 'dawdawdaw'),
(30, 'dawdaw', 'k.anderson@example.comdaw', 'dawdwadwa'),
(31, 'dasdas', 'k.anderson@example.com', 'asdadas'),
(32, 'adasdsa', 'fascinatingact@gmail.com', 'asdasdasdsa'),
(35, 'Jose Rafael Sarmiento', 'sarmientogay@gmail.com', 'Bakla po kasi ako e. Di po ako makapagbook'),
(36, 'John Rey', 'fascinatingact@gmail.com', 'dawdadaw');

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

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`destID`, `destName`, `destInclu`, `destDesc`, `destPrice`, `destImg`, `destTrailer`) VALUES
(1, 'Boracay', '[\"O2\",\"O3\",\"O5\",\"O8\"]', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 4999, 'gen2-boracay_2018-10-13_23-31-49.jpg', 'https://www.youtube.com/watch?v=b7LSsKsJGHY&t=7s'),
(2, 'Baguio - The Creative City', '[\"O1\",\"O4\",\"O5\",\"O8\"]', 'Baguio is a highland city of 345,000 people (2015) in the province of Benguet, Philippines. Due to its cool mountain weather relative to the rest of the country, it is considered the \"Summer Capital of the Philippines.\" The city is abundant in pine trees, so it is nicknamed the City of Pines.', 5000, 'top-photo-1.jpg', 'https://www.youtube.com/watch?v=rzdiOgOCFFQ'),
(3, 'El Nido Palawan', '[\"O1\",\"O3\",\"O5\",\"O8\"]', 'El Nido is a coastal town in Palawan. El Nido comprises 45 islands and islets; limestone cliffs are also found here, which form a Karst backdrop similar to those found in Ha Long Bay, Krabi and Guilin.', 6999, 'things-to-do-el-nido-island-hopping-tour-2.jpg', 'https://www.youtube.com/watch?v=78MTIUikmJo');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `saleID` int(55) NOT NULL,
  `bookings` int(55) NOT NULL,
  `destID` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  MODIFY `ticketID` int(44) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `destID` int(44) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `saleID` int(55) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
