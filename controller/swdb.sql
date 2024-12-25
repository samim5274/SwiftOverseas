-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2024 at 10:54 AM
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
-- Table structure for table `ac_moneysentandreceived`
--

CREATE TABLE `ac_moneysentandreceived` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `amount` bigint(255) DEFAULT NULL,
  `sourceId` int(11) DEFAULT NULL,
  `t_type_source` int(11) DEFAULT NULL,
  `destinationId` int(11) DEFAULT NULL,
  `t_type_destination` int(11) DEFAULT NULL,
  `purpose` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ac_moneysentandreceived`
--

INSERT INTO `ac_moneysentandreceived` (`id`, `date`, `amount`, `sourceId`, `t_type_source`, `destinationId`, `t_type_destination`, `purpose`) VALUES
(13, '2024-12-23', 1000, 8, 3, 8, 3, 'N/A'),
(15, '2024-12-23', 100, 8, 1, 14, 2, 'N/A'),
(41, '2024-12-25', 150, 8, 1, 14, 2, 'N/A'),
(42, '2024-12-25', 100, 14, 1, 8, 2, 'N/A'),
(43, '2024-12-25', 100, 8, 1, 9, 2, 'N/A'),
(44, '2024-12-25', 250, 8, 1, 10, 2, 'N/A'),
(45, '2024-12-25', 100, 10, 1, 11, 2, 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `ex_daily_expenses`
--

CREATE TABLE `ex_daily_expenses` (
  `id` int(11) NOT NULL,
  `invoice` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `sub_group_id` int(11) DEFAULT NULL,
  `senderId` int(11) DEFAULT NULL,
  `receiverId` int(11) DEFAULT NULL,
  `purpose` varchar(255) DEFAULT NULL,
  `amount` bigint(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ex_group`
--

CREATE TABLE `ex_group` (
  `id` int(11) NOT NULL,
  `group_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ex_group`
--

INSERT INTO `ex_group` (`id`, `group_name`) VALUES
(1, 'Bazar'),
(2, 'Entertainment'),
(3, 'Bill'),
(4, 'Education'),
(5, 'Food'),
(6, 'Fual & Gas'),
(7, 'Gift');

-- --------------------------------------------------------

--
-- Table structure for table `ex_sub_group`
--

CREATE TABLE `ex_sub_group` (
  `id` int(11) NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `sub_group_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ex_sub_group`
--

INSERT INTO `ex_sub_group` (`id`, `group_id`, `sub_group_name`) VALUES
(1, 1, 'Rice'),
(2, 2, 'Cricket'),
(3, 3, 'Water Bill'),
(4, 7, 'Salary Bonus'),
(5, 6, 'Ricksha Vara'),
(6, 5, 'Evening Food');

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
(25, 'Swift Overseas', 'Overseas', 1300360856, '2024-12-10', 1, 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 'swiftoverseastravels@gmail.com', 'A03257269', 'BGD', 'DIP/DHAKA', '1514160652', 'DHAKA', '2024-12-01', '2024-12-15', 'Biswas', 'Rani Biswas', 's', '2024-12-02', 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 'Swift Overseas', 'Father', 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 9, '850000', '50000', 2, 'Dautch Bangla', 'DBBL505050', 'Serbia', '6 Month', 'IMG-67615e285578b8.02659236.png', 'IMG-67615e28557936.42118403.png', 'IMG-67615e28557957.22471383.png', 'IMG-67615e28557962.73686773.png', 1, 'N/A', 1300360856),
(26, 'Sabbir', 'Hossain', 321654987, '2024-12-03', 1, 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', NULL, 'A03257269', NULL, NULL, '1514160652', 'DHAKA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Amzad Ali', 'Father', 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 10, '10', '10', NULL, NULL, NULL, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1300360856),
(27, 'Ashfun', 'Nahar Mimi', 321654987, '2000-12-12', 2, 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', NULL, 'A03257269', NULL, NULL, '1514160652', 'DHAKA', '2024-12-01', '2024-12-18', NULL, NULL, NULL, NULL, NULL, 'Amzad Ali', 'Father', 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 10, '50', '10', NULL, NULL, NULL, 'Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1300360856);

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
  `agentAdvance` int(11) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_countrydetails`
--

INSERT INTO `tb_countrydetails` (`id`, `countryName`, `clientCost`, `clientAdvance`, `agentCost`, `agentAdvance`, `remark`) VALUES
(1, 'Albania', 1100000, 50000, 1000000, 50000, 'Details'),
(2, 'Serbia', 900000, 50000, 800000, 50000, 'Details'),
(3, 'Crotia', 1500000, 100000, 1100000, 10000, 'Details'),
(4, 'North Mesodonia', 1500000, 100000, 1100000, 10000, 'Details'),
(5, 'Georgia', 12000000, 60000, 1000000, 60000, 'Details'),
(6, 'Austria', 1200000, 100000, 1000000, 100000, 'Details'),
(7, 'South Africa', 0, 0, 0, 0, 'Remark');

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
  `nid` int(11) DEFAULT NULL,
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
  `image` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_employee_details`
--

INSERT INTO `tb_employee_details` (`id`, `firstName`, `lastName`, `dob`, `genderid`, `address`, `phone`, `fatherName`, `motherName`, `email`, `nid`, `emgName`, `emgPhone`, `emgRelation`, `emgAddress`, `joinDate`, `username`, `password`, `status`, `account`, `remark`, `image`, `designation`) VALUES
(8, 'Shamim', 'Hossain', '2001-12-31', 1, 'Kaliakair, Gazipur, Dhaka, Banglades', 1762164746, 'Jamsher Ali', 'Sofiya Begum', 'samim@gmail.com', 321654987, 'Jamsher Ali', 321654987, 'Father', 'Kaliakair, Gazipur, Dhaka, Banglades', '2024-09-01', 'samim', 's', 1, 0, '', '', 'Office Staff'),
(9, 'Chadni', 'Akter', '2001-01-01', 2, 'Dewgaon, Plhubaria, Debgram-2216, Mymensingh', 321654987, 'Amzad Ali', 'Monira Begum', 'chadni@gmail.com', 321654987, 'Swift Overseas', 1300360856, 'Father', 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', '2001-01-01', 'chadni', 'c', 1, 0, '', '', 'Office Staff'),
(10, 'Sabbir', 'Hossain', '2001-01-01', 1, 'Dewgaon, Plhubaria, Debgram-2216, Mymensingh', 321654987, 'Amzad Ali', 'Monira Begum', 'swiftoverseastravels@gmail.com', 321654987, 'Amzad Ali', 1300360856, 'Father', 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', '2024-01-01', 'sabbir', 's', 1, 0, '[value-21]', 'IMG-675ead9761bdd4.22140393-Sabbir.png', 'Office Staff'),
(11, 'Sabbir', 'Hossain', '2024-12-02', 1, 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 1300360856, 'Amzad Ali', 'Monira Begum', 'swiftoverseadstravels@gmail.com', 321654987, 'Amzad Ali', 1300360856, 'Father', 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', '2024-12-10', 'sabbir2', 's', 1, 0, 'N/A', '', 'Office Staff'),
(12, 'Mimi ', 'Akter', '2000-01-01', 2, 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', 321654987, 'Amzad Ali', 'Monira Begum', 'swiftovesdfsrseastravels@gmail.com', 321654987, 'Amzad Ali', 1300360856, 'Father', 'H.M. Plaza, Plot# 34, (12th floor), Room No# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.', '2000-01-01', 'mimi', 'm', 1, 0, '[value-21]', 'IMG-675dd876460bf6.57269122-Mimi .jpg', 'Office Staff'),
(13, 'Arohi', 'Akter', '2000-01-01', 2, 'HM Plaza, Lift-12, Room no-07, Uttara-03, Dhaka-1230', 1300361185, 'Amzad Ali', 'Monira Begum', 'swiftoverseastravelsas@gmail.com', 54784555, 'Amzad Ali', 570115165, 'Father', 'HM Plaza, Lift-12, Room no-07, Uttara-03, Dhaka-1230', '2024-12-11', 'samim23423', 'arohi', 0, 0, '[value-21]', 'IMG-675dd70e561aa6.46746458-Arohi.jpg', 'Executive'),
(14, 'Ema', 'Akter', '2000-01-01', 2, 'HM Plaza, Lift-12, Room no-07, Uttara-03, Dhaka-1230', 1300361185, 'Amzad Ali', 'Monira Begum', 'swiftoverseastravelsds@gmail.com', 56892347, 'Amzad Ali', 321654987, 'Father', 'HM Plaza, Lift-12, Room no-07, Uttara-03, Dhaka-1230', '2024-12-02', 'ema', 'e', 1, 0, '[value-21]', 'IMG-675dd67f2c8124.96330931-Ema.jpg', 'Executive');

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
-- Indexes for table `ac_moneysentandreceived`
--
ALTER TABLE `ac_moneysentandreceived`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destinationId` (`destinationId`);

--
-- Indexes for table `ex_daily_expenses`
--
ALTER TABLE `ex_daily_expenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_group_id` (`sub_group_id`),
  ADD KEY `group_id` (`group_id`),
  ADD KEY `receiverId` (`receiverId`);

--
-- Indexes for table `ex_group`
--
ALTER TABLE `ex_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ex_sub_group`
--
ALTER TABLE `ex_sub_group`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_id` (`group_id`);

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
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ac_moneysentandreceived`
--
ALTER TABLE `ac_moneysentandreceived`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `ex_daily_expenses`
--
ALTER TABLE `ex_daily_expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ex_group`
--
ALTER TABLE `ex_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ex_sub_group`
--
ALTER TABLE `ex_sub_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_agency_info`
--
ALTER TABLE `tb_agency_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_clientlist`
--
ALTER TABLE `tb_clientlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_countrydetails`
--
ALTER TABLE `tb_countrydetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_employee_details`
--
ALTER TABLE `tb_employee_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
-- Constraints for table `ac_moneysentandreceived`
--
ALTER TABLE `ac_moneysentandreceived`
  ADD CONSTRAINT `ac_moneysentandreceived_ibfk_1` FOREIGN KEY (`destinationId`) REFERENCES `tb_employee_details` (`id`);

--
-- Constraints for table `ex_daily_expenses`
--
ALTER TABLE `ex_daily_expenses`
  ADD CONSTRAINT `ex_daily_expenses_ibfk_1` FOREIGN KEY (`sub_group_id`) REFERENCES `ex_sub_group` (`id`),
  ADD CONSTRAINT `ex_daily_expenses_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `ex_group` (`id`),
  ADD CONSTRAINT `ex_daily_expenses_ibfk_3` FOREIGN KEY (`receiverId`) REFERENCES `tb_employee_details` (`id`);

--
-- Constraints for table `ex_sub_group`
--
ALTER TABLE `ex_sub_group`
  ADD CONSTRAINT `ex_sub_group_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `ex_group` (`id`);

--
-- Constraints for table `tb_clientlist`
--
ALTER TABLE `tb_clientlist`
  ADD CONSTRAINT `tb_clientlist_ibfk_1` FOREIGN KEY (`referid`) REFERENCES `tb_agency_info` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
