-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 23, 2023 at 04:19 AM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apiwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `customerdata`
--

CREATE TABLE `customerdata` (
  `customerid` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `address` text,
  `townCity` varchar(255) DEFAULT NULL,
  `zipCode` varchar(255) DEFAULT NULL,
  `cnic` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `AddedOn` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customerdata`
--

INSERT INTO `customerdata` (`customerid`, `firstname`, `lastname`, `address`, `townCity`, `zipCode`, `cnic`, `mobile`, `AddedOn`) VALUES
(38, 'Adv', 'Haj', 'Hdkdod', '098u', '0987', '1235557', '099876', 'Thu Jun 22 2023'),
(43, 'Israr ', 'Chandi', 'House No 420 North Nazimabad ', 'Uganda', '98000', '1234556677', '0009', ''),
(132, 'Sana', 'Bucket', 'Uman', '134040', '09877', '019198384744', '73738484894', 'Thu Jun 22 2023'),
(135, 'Samad', 'Baloch', 'Hsksidid', 'Uganda', '09000', '138484944', '090078601', 'Thu Jun 22 2023'),
(136, 'Arbaaz', 'Palari', 'House No 420, kundri', 'Uganda', '890000', '0192938347u44', '090078601', 'Thu Jun 22 2023'),
(137, 'Rabshah ', 'Shakeel', 'House No uman ', 'Uganda ', '78000', '41030539004781', '090078601', 'Wed Jun 21 2023'),
(138, 'Haris', 'Palari', 'House No uman ', 'Uganda ', '78000', '41030539004781', '090078601', 'Wed Jun 21 2023'),
(139, 'Haris', 'Palari', 'House No uman ', 'Uganda ', '78000', '41030539004781', '090078601', 'Wed Jun 21 2023');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customerdata`
--
ALTER TABLE `customerdata`
  ADD PRIMARY KEY (`customerid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customerdata`
--
ALTER TABLE `customerdata`
  MODIFY `customerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
