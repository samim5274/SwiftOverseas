-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2024 at 12:15 PM
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
  `remark` varchar(255) DEFAULT NULL,
  `emgPhone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_clientlist`
--

INSERT INTO `tb_clientlist` (`id`, `fastname`, `lastname`, `phone`, `dob`, `genderid`, `address`, `email`, `passportNumber`, `countryCode`, `PassportAuthority`, `nid`, `pleaseOfBirth`, `passIssueDateStart`, `passIssueDateEnd`, `fatherName`, `motherName`, `spouseName`, `s_dob`, `s_address`, `emgName`, `emgRelation`, `emdAddress`, `referid`, `ContAmount`, `advance`, `payMathod`, `pmbName`, `pmbAccountNum`, `destination`, `visaDurationTime`, `pImg`, `PassImg`, `nidImg`, `SnidImg`, `condi`, `remark`, `emgPhone`) VALUES
(1, 'Assrafun', 'Naher Mimi', 1705017815, '1996-11-27', 2, 'Kushtia, Bangladesh', 'mimi@gmail.com', 'A321654', 'BGD', 'DIP/Dhaka', '65465', 'Kushtia', '2024-12-01', '2024-12-02', 'd', 's', 'd', '2024-12-18', 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 'Swift Overseas', 'd', 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 9, '100000', '50000', 2, 'Dautch Bangla', 'DBBL505050', ' Bangladesh', '5 month', 'IMG-6753e6161b6a14.80920765.png', 'IMG-6753e6161b6b00.94814915.png', 'IMG-6753e6161b6b12.23185179.png', 'IMG-6753e6161b6b25.53725935.png', 1, 'n/a', 123456789),
(2, 'Abir', 'Hossain', 654987654, '1992-10-13', 1, 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 'swiftoverseastravels@gmail.com', 'A321654', 'BGD', 'DIP/Dhaka', '65465', 'Kushtia', '2024-01-01', '2031-06-17', 'Amzad Ali', 'Monira Begum', 'Sarmin Akter', '1997-01-28', 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 'Amzad Ali', 'Father', 'Kaliakair, Gazipur, Dhaka', 9, '8500000', '50000', 2, 'Dautch Bangla', 'DBBL505050', ' Serbia', '5 Month', 'IMG-67541768050aa0.74465882.jpg', 'IMG-67541768050ca9.88709267.jpg', 'IMG-67541768050cc8.27090565.jpg', 'IMG-67541768050cd5.37443463.jpg', 1, 'n/a', 123456789),
(3, 'Amzad', 'Ali', 654987654, '2024-12-10', 1, 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 'swiftoverseastravels@gmail.com', 'A321654', 'BGD', 'DIP/Dhaka', '65465', 'dhaka', '2024-12-02', '2024-12-05', 'Amzad Ali', 'Monira Begum', 'Sarmin Akter', '2024-12-03', 'Gazipur, Dhaka', 'Amzad Ali', 'Father', 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 15, '1000000', '50000', 2, 'Dautch Bangla', 'DBBL505050', ' Bangladesh', '5 month', 'IMG-67540fca1f04a8.03140438.jpg', 'IMG-67540fca1f05e6.95023051.jpg', 'IMG-67540fca1f0609.86007659.png', 'IMG-67540fca1f0614.31445028.jpg', 1, 'n/a', 123456789),
(4, 'Swift Overseas', 'Overseas', 1300360856, '2024-12-21', 2, 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 'swiftoverseastravels@gmail.com', 'A321654', 'BGD', 'DIP/Dhaka', '65465', 'dhaka', '2024-12-01', '2024-12-06', 'Amzad Ali', 'Monira Begum', 'Sarmin Akter', '2024-12-03', 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 'Swift Overseas', 'Father', 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 14, '500', '100', 2, 'Dautch Bangla', 'DBBL505050', ' Bangladesh', '5 month', 'IMG-67557a0aa206d3.50703908.png', 'IMG-67557a0aa20886.20539004.png', 'IMG-67557a0aa20894.52242819.png', 'IMG-67557a0aa208a9.88667001.png', 1, 'N/A', 123456789),
(5, 'Swift Overseas', 'Hossain', 1300360856, '2024-12-03', 1, 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 'swiftoverseastravels@gmail.com', 'A321654', 'BGD', 'DIP/Dhaka', '65465', 'dhaka', '2024-12-01', '2024-12-06', 'Amzad Ali', 'Monira Begum', 'Sarmin Akter', '2024-12-03', 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 'Swift Overseas', 'Father', 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 9, '5000000', '50000', 1, '', '', ' Bangladesh', '3 month', 'IMG-6753e02ec4ba89.49209083.png', '11.PNG', '11.PNG', '11.PNG', 1, 'N/A', 123456789),
(6, 'Swift Overseas', 'Overseas', 1300360856, '2024-12-04', 1, 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 'swiftoverseastravels@gmail.com', 'A321654', 'BGD', 'DIP/Dhaka', '65465', 'dhaka', '2024-12-05', '2024-12-05', 'Amzad Ali', 'Monira Begum', 'Sarmin Akter', '2024-12-05', 'dhaka', 'Swift Overseas', 'Father', 'H.M Plaza, Lift-12, Room-07, Sector-03, Uttara, Dhaka-1230', 14, '15000000', '50000', 1, '', '', ' Bangladesh', '3 month', 'IMG-6753e02ec4ba89.49209083.png', '497c8ec269e22e77e6f3ecff69acfba4.jpg', '607a97d761ed41f3c694d07e3dd39108.jpg', '607a97d761ed41f3c694d07e3dd39108.jpg', 1, 'N/A', 123456789),
(7, 'Swift Overseas', 'Overseas', 1300360856, '2024-12-26', 1, 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 'swiftoverseastravels@gmail.com', 'A321654', 'BGD', 'DIP/Dhaka', '65465', 'Kushtia', '2024-12-03', '2024-12-06', 'Amzad Ali', 'Monira Begum', 'Sarmin Akter', '2024-12-03', 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 'Swift Overseas', 'Father', 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 9, '500000', '10000', 2, 'Dautch Bangla', 'DBBL505050', ' Bangladesh', '3 month', 'IMG-675563dfc243b4.65274169.png', 'IMG-675563dfc24463.82960022.png', 'IMG-675563dfc24476.34394159.png', 'IMG-675563dfc24488.11952734.png', 1, 'N/A', 123456789);

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
(1, 'Albania', 1100000, 50000, 1000000, 50000),
(2, 'Serbia', 900000, 50000, 800000, 50000),
(3, 'Crotia', 1500000, 100000, 1100000, 10000),
(4, 'North Mesodonia', 1500000, 100000, 1100000, 10000),
(5, 'Georgia', 12000000, 60000, 1000000, 60000),
(6, 'Austria', 1200000, 100000, 1000000, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_employee_details`
--

CREATE TABLE `tb_employee_details` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `genderid` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `fatherName` varchar(255) DEFAULT NULL,
  `motherName` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nit` int(11) DEFAULT NULL,
  `emgName` varchar(255) DEFAULT NULL,
  `emgPhone` int(11) DEFAULT NULL,
  `emgRelation` varchar(255) DEFAULT NULL,
  `emgAddress` varchar(255) DEFAULT NULL,
  `joinDate` date DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `account` int(11) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_employee_details`
--

INSERT INTO `tb_employee_details` (`id`, `firstName`, `lastName`, `dob`, `genderid`, `address`, `phone`, `fatherName`, `motherName`, `email`, `nit`, `emgName`, `emgPhone`, `emgRelation`, `emgAddress`, `joinDate`, `username`, `password`, `status`, `account`, `remark`, `image`) VALUES
(8, 'Shamim', 'Hossain', '2001-12-31', 1, 'Kaliakair, Gazipur, Dhaka, Banglades', 1762164746, 'Jamsher Ali', 'Sofiya Begum', 'samim@gmail.com', 321654987, 'Jamsher Ali', 321654987, 'Father', 'Kaliakair, Gazipur, Dhaka, Banglades', '2024-09-01', 'samim', 's', 0, 0, '', 'NULL'),
(9, 'Chadni', 'Akter', '2001-01-01', 2, 'Dewgaon, Plhubaria, Debgram-2216, Mymensingh', 321654987, 'Amzad Ali', 'Monira Begum', 'chadni@gmail.com', 321654987, 'Swift Overseas', 1300360856, 'Father', 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', '2001-01-01', 'chadni', 'c', 0, 0, '', 'NULL'),
(10, 'Sabbir', 'Hossain', '2001-01-01', 1, 'Dewgaon, Plhubaria, Debgram-2216, Mymensingh', 321654987, 'Amzad Ali', 'Monira Begum', 'swiftoverseastravels@gmail.com', 321654987, 'Amzad Ali', 1300360856, 'Father', 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', '2024-01-01', 'sabbir', 's', 0, 0, 'Sabbir NID.pdf', ''),
(11, 'Sabbir', 'Hossain', '2024-12-02', 1, 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 1300360856, 'Amzad Ali', 'Monira Begum', 'swiftoverseadstravels@gmail.com', 321654987, 'Amzad Ali', 1300360856, 'Father', 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', '2024-12-10', 'sabbir2', 's', 0, 0, 'N/A', 'SSC Marksheet.pdf'),
(12, 'Mimi ', 'Akter', '2000-01-01', 2, 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 321654987, 'Amzad Ali', 'Monira Begum', 'swiftovesdfsrseastravels@gmail.com', 321654987, 'Amzad Ali', 1300360856, 'Father', 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', '2000-01-01', 'mimi', 'm', 0, 0, 'N/A', '7eccca6c6979109983229c8c118b5263.jpg');

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
-- Table structure for table `tb_moneysentandreceived`
--

CREATE TABLE `tb_moneysentandreceived` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `senderId` int(11) DEFAULT NULL,
  `receiverId` int(11) DEFAULT NULL,
  `purpose` varchar(255) DEFAULT NULL,
  `TransectionType` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Indexes for table `tb_employee_details`
--
ALTER TABLE `tb_employee_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_img`
--
ALTER TABLE `tb_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_moneysentandreceived`
--
ALTER TABLE `tb_moneysentandreceived`
  ADD PRIMARY KEY (`id`),
  ADD KEY `senderId` (`senderId`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_countrydetails`
--
ALTER TABLE `tb_countrydetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_employee_details`
--
ALTER TABLE `tb_employee_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_img`
--
ALTER TABLE `tb_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_moneysentandreceived`
--
ALTER TABLE `tb_moneysentandreceived`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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

--
-- Constraints for table `tb_moneysentandreceived`
--
ALTER TABLE `tb_moneysentandreceived`
  ADD CONSTRAINT `tb_moneysentandreceived_ibfk_1` FOREIGN KEY (`senderId`) REFERENCES `tb_employee_details` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
