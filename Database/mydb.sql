-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 03:59 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `dist-and-mktng`
--

CREATE TABLE `dist-and-mktng` (
  `ID` int(11) NOT NULL,
  `tranx-id` varchar(11) NOT NULL,
  `date-of-packing` date NOT NULL,
  `wholesaler-receive-date` date NOT NULL,
  `wholesaler-relieve-date` date NOT NULL,
  `retailer-receive-date` date NOT NULL,
  `customer-shop-date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `dist-and-mktng`
--

INSERT INTO `dist-and-mktng` (`ID`, `tranx-id`, `date-of-packing`, `wholesaler-receive-date`, `wholesaler-relieve-date`, `retailer-receive-date`, `customer-shop-date`) VALUES
(1, 'trace1', '2023-06-30', '0000-00-00', '2023-08-23', '2023-08-24', '2023-09-07'),
(2, 'trace1', '2023-06-08', '2023-06-08', '2023-06-18', '2023-06-29', '2023-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `post-prod`
--

CREATE TABLE `post-prod` (
  `ID` int(11) NOT NULL,
  `tranx-id` varchar(11) NOT NULL,
  `textile-lab` varchar(50) NOT NULL,
  `quality` varchar(50) NOT NULL,
  `garmenting-date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `post-prod`
--

INSERT INTO `post-prod` (`ID`, `tranx-id`, `textile-lab`, `quality`, `garmenting-date`) VALUES
(1, 'trace1', 'GJKKK', 'kjkjkj', '2023-07-29');

-- --------------------------------------------------------

--
-- Table structure for table `pre-proc`
--

CREATE TABLE `pre-proc` (
  `ID` int(11) NOT NULL,
  `tranx-id` varchar(11) NOT NULL,
  `date-of-cleaning` date NOT NULL,
  `date-of-carding` date NOT NULL,
  `no-of-reels` int(50) NOT NULL,
  `wastage-generated` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `pre-proc`
--

INSERT INTO `pre-proc` (`ID`, `tranx-id`, `date-of-cleaning`, `date-of-carding`, `no-of-reels`, `wastage-generated`) VALUES
(1, 'trace1', '2023-06-25', '2023-08-17', 5, '33'),
(2, 'trace1', '2023-06-25', '2023-08-31', 5, '33'),
(3, 'trace1', '2023-06-29', '2023-06-28', 5, '33');

-- --------------------------------------------------------

--
-- Table structure for table `proc-chain`
--

CREATE TABLE `proc-chain` (
  `ID` int(11) NOT NULL,
  `tranx-id` varchar(11) NOT NULL,
  `farmer-id` int(11) NOT NULL,
  `farmer-name` varchar(100) NOT NULL,
  `farm-detail` varchar(100) NOT NULL,
  `quantity` int(50) NOT NULL,
  `tranx-status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `proc-chain`
--

INSERT INTO `proc-chain` (`ID`, `tranx-id`, `farmer-id`, `farmer-name`, `farm-detail`, `quantity`, `tranx-status`) VALUES
(1, 'trace1', 123, 'DEF', 'ABCD', 2366, 5);

-- --------------------------------------------------------

--
-- Table structure for table `prod`
--

CREATE TABLE `prod` (
  `ID` int(11) NOT NULL,
  `tranx-id` varchar(11) NOT NULL,
  `artist-name` varchar(100) NOT NULL,
  `date-of-weaving` date NOT NULL,
  `weaving-loc` varchar(100) NOT NULL,
  `artist-dying` varchar(100) NOT NULL,
  `dying-date` date NOT NULL,
  `dying-loc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `prod`
--

INSERT INTO `prod` (`ID`, `tranx-id`, `artist-name`, `date-of-weaving`, `weaving-loc`, `artist-dying`, `dying-date`, `dying-loc`) VALUES
(1, 'trace1', 'DFGGG', '2023-09-06', 'FGHJYU', 'ioioioi', '2023-10-12', 'ghggg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dist-and-mktng`
--
ALTER TABLE `dist-and-mktng`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `post-prod`
--
ALTER TABLE `post-prod`
  ADD PRIMARY KEY (`ID`,`tranx-id`);

--
-- Indexes for table `pre-proc`
--
ALTER TABLE `pre-proc`
  ADD PRIMARY KEY (`ID`,`tranx-id`);

--
-- Indexes for table `proc-chain`
--
ALTER TABLE `proc-chain`
  ADD PRIMARY KEY (`ID`,`tranx-id`);

--
-- Indexes for table `prod`
--
ALTER TABLE `prod`
  ADD PRIMARY KEY (`ID`,`tranx-id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dist-and-mktng`
--
ALTER TABLE `dist-and-mktng`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post-prod`
--
ALTER TABLE `post-prod`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pre-proc`
--
ALTER TABLE `pre-proc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `proc-chain`
--
ALTER TABLE `proc-chain`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prod`
--
ALTER TABLE `prod`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
