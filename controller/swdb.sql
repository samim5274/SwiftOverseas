-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2024 at 12:35 PM
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
(10, 'MH International Tours & Travels', 'Islam Asad', 'Md Ashadul', 'Uttara-03, Dhaka-1230', 'DH6548', 1, 'swiftoverseas@gmail.com', 1324569874),
(11, 'Al-Amin Air International Tours & Travels', 'Amin Khan', 'Al', 'Ashkona, Dhaka-1230', 'DH6543', 1, 'alaminairinternational@gmail.com', 1324569874),
(12, 'Dragons Holiday Travels', 'Akter', 'Chadni', 'Uttara-03, Dhaka-1230', 'DH6548', 1, 'holiday@gmail.com', 1324569874);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
