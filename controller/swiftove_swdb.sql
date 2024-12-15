-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 14, 2024 at 08:49 PM
-- Server version: 10.11.10-MariaDB
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swiftove_swdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_agency_info`
--

CREATE TABLE `tb_agency_info` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `rm` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_agency_info`
--

INSERT INTO `tb_agency_info` (`id`, `fullname`, `lastname`, `firstname`, `address`, `rm`, `status`, `email`, `phone`) VALUES
(9, 'Swift Overseas Tours & Travels', 'Islam Asad', 'Md Ashadul', 'Uttara-03, Dhaka-1230', 'DH6548', 1, 'swiftoverseas@gmail.com', 1324569874),
(18, 'Uafa International Tours & Travels', 'Islam', 'Atikur', 'Dhaka', '', 1, 'atik@gmail.com', 123456789),
(19, 'Ethical Tours & Travels', 'Islam', 'Juhurul', 'H.M. Plaza, Plot# 34, (10th floor), Room No# 03/B, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 'N/A', 1, 'thical@gamil.com', 321654987),
(20, 'HM Internation', 'Internation', 'HM', 'Uttara, Dhaka', 'N/A', 1, 'hm@gmail.com', 321654987);

-- --------------------------------------------------------

--
-- Table structure for table `tb_clientlist`
--

CREATE TABLE `tb_clientlist` (
  `id` int(11) NOT NULL,
  `fastname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `genderid` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `passportNumber` varchar(255) DEFAULT NULL,
  `countryCode` varchar(255) DEFAULT NULL,
  `PassportAuthority` varchar(255) DEFAULT NULL,
  `nid` varchar(255) DEFAULT NULL,
  `pleaseOfBirth` varchar(255) DEFAULT NULL,
  `passIssueDateStart` date DEFAULT NULL,
  `passIssueDateEnd` date DEFAULT NULL,
  `fatherName` varchar(255) DEFAULT NULL,
  `motherName` varchar(255) DEFAULT NULL,
  `spouseName` varchar(255) DEFAULT NULL,
  `s_dob` date DEFAULT NULL,
  `s_address` varchar(255) DEFAULT NULL,
  `emgName` varchar(255) DEFAULT NULL,
  `emgRelation` varchar(255) DEFAULT NULL,
  `emdAddress` varchar(255) DEFAULT NULL,
  `referid` int(11) DEFAULT NULL,
  `ContAmount` varchar(255) DEFAULT NULL,
  `advance` varchar(255) DEFAULT NULL,
  `payMathod` int(11) DEFAULT NULL,
  `pmbName` varchar(255) DEFAULT NULL,
  `pmbAccountNum` varchar(255) DEFAULT NULL,
  `destination` varchar(255) DEFAULT NULL,
  `visaDurationTime` varchar(255) DEFAULT NULL,
  `pImg` varchar(255) DEFAULT NULL,
  `PassImg` varchar(255) DEFAULT NULL,
  `nidImg` varchar(255) DEFAULT NULL,
  `SnidImg` varchar(255) DEFAULT NULL,
  `condi` int(11) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_clientlist`
--

INSERT INTO `tb_clientlist` (`id`, `fastname`, `lastname`, `phone`, `dob`, `genderid`, `address`, `email`, `passportNumber`, `countryCode`, `PassportAuthority`, `nid`, `pleaseOfBirth`, `passIssueDateStart`, `passIssueDateEnd`, `fatherName`, `motherName`, `spouseName`, `s_dob`, `s_address`, `emgName`, `emgRelation`, `emdAddress`, `referid`, `ContAmount`, `advance`, `payMathod`, `pmbName`, `pmbAccountNum`, `destination`, `visaDurationTime`, `pImg`, `PassImg`, `nidImg`, `SnidImg`, `condi`, `remark`) VALUES
(10, 'Bhadon chandra', 'Biswas', 1790383800, '1998-07-06', 1, 'Dewgaon, Plhubaria, Debgram-2216, Mymensingh', 'biswas@gmail.com', 'A01848919', 'BGD', 'DIP/Dhaka', '65465231654', 'Mymensingh', '2021-09-05', '2031-09-04', 'Nimai Chanda Biswas', 'Kolpona Rani Biswas', 'N/A', '2024-12-08', 'N/A', 'Nimai Chanda Biswas', 'Father', '01790383800', 18, '8500000', '50000', 1, '', '', ' Serbia', '4 Month', 'IMG-6755593a33ba80.93497022.jpg', 'IMG-6755593a33bbc1.92063175.jpg', 'IMG-6755593a33bc20.94377002.jpg', 'IMG-6755593a33bc72.32959421.jpg', 1, 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `tb_countrydetails`
--

CREATE TABLE `tb_countrydetails` (
  `id` int(11) NOT NULL,
  `countryName` varchar(255) DEFAULT NULL,
  `clientCost` int(11) DEFAULT NULL,
  `clientAdvance` int(11) DEFAULT NULL,
  `agentCost` int(11) DEFAULT NULL,
  `agentAdvance` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_countrydetails`
--

INSERT INTO `tb_countrydetails` (`id`, `countryName`, `clientCost`, `clientAdvance`, `agentCost`, `agentAdvance`) VALUES
(1, 'Albania', 1100000, 100000, 1000000, 50000),
(2, 'Serbia', 850000, 50000, 8500000, 50000),
(3, 'Crotia', 1400000, 100000, 1100000, 10000),
(4, 'North Mesodonia', 1400000, 200000, 1100000, 100000),
(5, 'Malaysia', 450000, 50000, 450000, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_img`
--

CREATE TABLE `tb_img` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_img`
--

INSERT INTO `tb_img` (`id`, `img`) VALUES
(15, 'IMG-67517916c00679.43096651.png'),
(16, 'IMG-675179bd9b9955.41300612.jpg'),
(17, 'IMG-67517a5666fa68.34925573.png'),
(18, 'IMG-67517a8422f746.20240864.png'),
(19, 'IMG-67517ba5c9cff4.08145576.jpg'),
(20, 'IMG-6753dcb8b836c6.14554802.png'),
(21, 'IMG-6753dd5a78d3f3.54298405.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `LastName`, `FirstName`, `username`, `password`, `status`) VALUES
(1, 'hossain', 'shamim', 'samim', 's', '1'),
(2, 'hossain', 'samim', 'samim1', 'ss', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_agency_info`
--
ALTER TABLE `tb_agency_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_clientlist`
--
ALTER TABLE `tb_clientlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `referid` (`referid`);

--
-- Indexes for table `tb_countrydetails`
--
ALTER TABLE `tb_countrydetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_img`
--
ALTER TABLE `tb_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_agency_info`
--
ALTER TABLE `tb_agency_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_clientlist`
--
ALTER TABLE `tb_clientlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_countrydetails`
--
ALTER TABLE `tb_countrydetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_img`
--
ALTER TABLE `tb_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_clientlist`
--
ALTER TABLE `tb_clientlist`
  ADD CONSTRAINT `tb_clientlist_ibfk_1` FOREIGN KEY (`referid`) REFERENCES `tb_agency_info` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
