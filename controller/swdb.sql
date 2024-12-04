-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2024 at 11:57 AM
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
(10, 'MH International Tours & Travels', 'Islam', 'Md Al-Amin', 'Ashkona, Dhaka-1230', 'DH6556', 1, 'alaminairinternationall@gmail.com', 1324569874),
(14, 'Dragon Holiday Tours & Travels', 'Islam', 'Md Ashadul Alam', 'Ashkona, Dhaka-1230', 'DH6556', 1, 'dragon@gmail.com', 2341234),
(15, 'Nature Holiday Tours & Travels', 'Islam', 'Md Al-Amin', 'Gulshan-01, Dhaka-1234', 'DH6548', 1, 's@gmail.com', 3452345),
(17, 'Abir Air International', 'Hossain', 'Abir', 'Dhaka, Bangladesh', 'DH65625', 1, 'example@gmail.com', 321654987);

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
(1, 'Assrafun', 'Naher Mimi', 1705017815, '1996-11-27', 2, 'Kushtia, Bangladesh', 'mimi@gmail.com', 'A321654', 'BGD', 'DIP/Dhaka', '65465', 'Kushtia', '2024-12-01', '2024-12-02', 'd', 's', 'd', '2024-12-18', 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 'Swift Overseas', 'd', 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 9, '100000', '50000', 2, 'Dautch Bangla', 'DBBL505050', ' Bangladesh', '5 month', 'Screenshot (29).png', 'Screenshot (42).png', 'Screenshot (43).png', 'Screenshot (27).png', 1, 'n/a'),
(2, 'Abir', 'Hossain', 654987654, '1992-10-13', 1, 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 'swiftoverseastravels@gmail.com', 'A321654', 'BGD', 'DIP/Dhaka', '65465', 'Kushtia', '2024-01-01', '2031-06-17', 'Amzad Ali', 'Monira Begum', 'Sarmin Akter', '1997-01-28', 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 'Amzad Ali', 'Father', 'Kaliakair, Gazipur, Dhaka', 9, '8500000', '50000', 2, 'Dautch Bangla', 'DBBL505050', ' Serbia', '5 Month', 'FacePhoto.png', 'Abdul Jalil.jpg', 'al-amin - a13156750.jpg', 'FacePhoto.png', 1, 'n/a'),
(3, 'Amzad', 'Ali', 654987654, '2024-12-10', 1, 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 'swiftoverseastravels@gmail.com', 'A321654', 'BGD', 'DIP/Dhaka', '65465', 'dhaka', '2024-12-02', '2024-12-05', 'Amzad Ali', 'Monira Begum', 'Sarmin Akter', '2024-12-03', 'Gazipur, Dhaka', 'Amzad Ali', 'Father', 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 15, '1000000', '50000', 2, 'Dautch Bangla', 'DBBL505050', ' Bangladesh', '5 month', 'MD ANIK AHAMED INS.pdf', 'Md Anik Ahamed Passport.pdf', 'Employment Rulebook.pdf', 'Employment Contract.pdf', 1, 'n/a');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_clientlist`
--
ALTER TABLE `tb_clientlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
