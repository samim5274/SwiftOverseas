-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2024 at 05:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swdb`
--

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
(1, 'Assrafun', 'Naher Mimi', 1705017815, '1996-11-27', 2, 'Kushtia, Bangladesh', 'mimi@gmail.com', 'A321654', 'BGD', 'DIP/Dhaka', '65465', 'Kushtia', '2024-12-01', '2024-12-02', 'd', 's', 'd', '2024-12-18', 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 'Swift Overseas', 'd', 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 9, '100000', '50000', 2, 'Dautch Bangla', 'DBBL505050', ' Bangladesh', '5 month', 'IMG-6753e6161b6a14.80920765.png', 'IMG-6753e6161b6b00.94814915.png', 'IMG-6753e6161b6b12.23185179.png', 'IMG-6753e6161b6b25.53725935.png', 1, 'n/a'),
(2, 'Abir', 'Hossain', 654987654, '1992-10-13', 1, 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 'swiftoverseastravels@gmail.com', 'A321654', 'BGD', 'DIP/Dhaka', '65465', 'Kushtia', '2024-01-01', '2031-06-17', 'Amzad Ali', 'Monira Begum', 'Sarmin Akter', '1997-01-28', 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 'Amzad Ali', 'Father', 'Kaliakair, Gazipur, Dhaka', 9, '8500000', '50000', 2, 'Dautch Bangla', 'DBBL505050', ' Serbia', '5 Month', 'IMG-67541768050aa0.74465882.jpg', 'IMG-67541768050ca9.88709267.jpg', 'IMG-67541768050cc8.27090565.jpg', 'IMG-67541768050cd5.37443463.jpg', 1, 'n/a'),
(3, 'Amzad', 'Ali', 654987654, '2024-12-10', 1, 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 'swiftoverseastravels@gmail.com', 'A321654', 'BGD', 'DIP/Dhaka', '65465', 'dhaka', '2024-12-02', '2024-12-05', 'Amzad Ali', 'Monira Begum', 'Sarmin Akter', '2024-12-03', 'Gazipur, Dhaka', 'Amzad Ali', 'Father', 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 15, '1000000', '50000', 2, 'Dautch Bangla', 'DBBL505050', ' Bangladesh', '5 month', 'IMG-67540fca1f04a8.03140438.jpg', 'IMG-67540fca1f05e6.95023051.jpg', 'IMG-67540fca1f0609.86007659.png', 'IMG-67540fca1f0614.31445028.jpg', 1, 'n/a'),
(4, 'Swift Overseas', 'Overseas', 1300360856, '2024-12-21', 2, 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 'swiftoverseastravels@gmail.com', 'A321654', 'BGD', 'DIP/Dhaka', '65465', 'dhaka', '2024-12-01', '2024-12-06', 'Amzad Ali', 'Monira Begum', 'Sarmin Akter', '2024-12-03', 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 'Swift Overseas', 'Father', 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 14, '500', '100', 2, 'Dautch Bangla', 'DBBL505050', ' Bangladesh', '5 month', 'IMG-675417ab7eb055.15881666.jpg', 'IMG-675417ab7eb128.34413124.jpg', 'IMG-675417ab7eb139.94074353.jpg', 'IMG-675417ab7eb147.05191162.jpg', 1, 'N/A'),
(5, 'Swift Overseas', 'Hossain', 1300360856, '2024-12-03', 1, 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 'swiftoverseastravels@gmail.com', 'A321654', 'BGD', 'DIP/Dhaka', '65465', 'dhaka', '2024-12-01', '2024-12-06', 'Amzad Ali', 'Monira Begum', 'Sarmin Akter', '2024-12-03', 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 'Swift Overseas', 'Father', 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 9, '5000000', '50000', 1, '', '', ' Bangladesh', '3 month', 'IMG-6753e02ec4ba89.49209083.png', '11.PNG', '11.PNG', '11.PNG', 1, 'N/A'),
(6, 'Swift Overseas', 'Overseas', 1300360856, '2024-12-04', 1, 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 'swiftoverseastravels@gmail.com', 'A321654', 'BGD', 'DIP/Dhaka', '65465', 'dhaka', '2024-12-05', '2024-12-05', 'Amzad Ali', 'Monira Begum', 'Sarmin Akter', '2024-12-05', 'dhaka', 'Swift Overseas', 'Father', 'H.M Plaza, Lift-12, Room-07, Sector-03, Uttara, Dhaka-1230', 14, '15000000', '50000', 1, '', '', ' Bangladesh', '3 month', 'IMG-6753e02ec4ba89.49209083.png', '497c8ec269e22e77e6f3ecff69acfba4.jpg', '607a97d761ed41f3c694d07e3dd39108.jpg', '607a97d761ed41f3c694d07e3dd39108.jpg', 1, 'N/A'),
(7, 'Swift Overseas', 'Overseas', 1300360856, '2024-12-26', 1, 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 'swiftoverseastravels@gmail.com', 'A321654', 'BGD', 'DIP/Dhaka', '65465', 'Kushtia', '2024-12-03', '2024-12-06', 'Amzad Ali', 'Monira Begum', 'Sarmin Akter', '2024-12-03', 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 'Swift Overseas', 'Father', 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 9, '500000', '10000', 2, 'Dautch Bangla', 'DBBL505050', ' Bangladesh', '3 month', 'IMG-6753e254b34b86.51158616.jpg', 'NULL', 'NULL', 'NULL', 1, 'N/A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_clientlist`
--
ALTER TABLE `tb_clientlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `referid` (`referid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_clientlist`
--
ALTER TABLE `tb_clientlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
