-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Sep 19, 2021 at 02:49 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `society_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `building_elec`
--

CREATE TABLE `building_elec` (
  `sno` int(4) NOT NULL,
  `month` varchar(20) NOT NULL,
  `t_bill` varchar(5) NOT NULL,
  `division` varchar(2) NOT NULL,
  `share` varchar(5) NOT NULL,
  `userid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `building_elec`
--

INSERT INTO `building_elec` (`sno`, `month`, `t_bill`, `division`, `share`, `userid`) VALUES
(1, '2021-03-31', '5000', '9', '555.5', 'ajaykumar');

-- --------------------------------------------------------

--
-- Table structure for table `contact_list`
--

CREATE TABLE `contact_list` (
  `sno` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `flat` varchar(15) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `userid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_list`
--

INSERT INTO `contact_list` (`sno`, `name`, `flat`, `phone`, `email`, `userid`) VALUES
(1, 'Sanjay Agarwal', 'A 201', 2147483647, 'sanjay@gmail.com', 'ajaykumar'),
(2, 'Priyank Yadav', 'A 204', 2147483647, 'priyanky@gmail.com', 'ajaykumar');

-- --------------------------------------------------------

--
-- Table structure for table `elec_bill`
--

CREATE TABLE `elec_bill` (
  `sno` int(4) NOT NULL,
  `month` varchar(20) NOT NULL,
  `amount` int(4) NOT NULL,
  `urange` varchar(20) NOT NULL,
  `userid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `elec_bill`
--

INSERT INTO `elec_bill` (`sno`, `month`, `amount`, `urange`, `userid`) VALUES
(1, '2021-03-31', 1585, '2001-2165', 'ajaykumar'),
(2, '2021-04-30', 1925, '2166-2295', 'ajaykumar'),
(3, '2021-05-31', 1852, '2295-2415', 'ajaykumar');

-- --------------------------------------------------------

--
-- Table structure for table `mantain_worker`
--

CREATE TABLE `mantain_worker` (
  `sno` int(4) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `broker` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL,
  `salary` varchar(6) NOT NULL,
  `month_join` varchar(15) NOT NULL,
  `id_type` varchar(20) NOT NULL,
  `id_number` varchar(20) NOT NULL,
  `userid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mantain_worker`
--

INSERT INTO `mantain_worker` (`sno`, `Name`, `broker`, `phone`, `salary`, `month_join`, `id_type`, `id_number`, `userid`) VALUES
(1, 'Mohan', 'self', 2147483647, '5000', '2021-01-31', 'Addhar', '98756412530150', 'ajaykumar');

-- --------------------------------------------------------

--
-- Table structure for table `month_exp`
--

CREATE TABLE `month_exp` (
  `sno` int(4) NOT NULL,
  `month` varchar(20) NOT NULL,
  `amount` int(4) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `userid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `month_exp`
--

INSERT INTO `month_exp` (`sno`, `month`, `amount`, `reason`, `userid`) VALUES
(1, '2021-02-28', 5000, 'Salary to mohan', 'ajaykumar'),
(2, '2021-03-31', 4850, 'Salat to mohan', 'ajaykumar'),
(3, '2021-03-31', 700, 'Car Parking', 'ajaykumar');

-- --------------------------------------------------------

--
-- Table structure for table `society`
--

CREATE TABLE `society` (
  `sno` int(2) NOT NULL,
  `name` varchar(30) NOT NULL,
  `added_on` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `society`
--

INSERT INTO `society` (`sno`, `name`, `added_on`) VALUES
(1, 'Ganpati Apartment', '2021-08-08'),
(2, 'Radha Nivas', '2021-08-08'),
(3, 'Shyam Apartment', '2021-09-11'),
(4, 'Narayana Court', '2021-09-11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sno` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `flat_no` varchar(10) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `password` varchar(90) NOT NULL,
  `society_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `name`, `flat_no`, `phone`, `email`, `userid`, `password`, `society_name`) VALUES
(1, 'ADMIN', 'master', '', '', 'admin', '$2y$10$c51KjtOcdT9i3KN5tr2J7eWX2u8w8kKnBhIaBb1xM6CL2QA26ug7y', ''),
(2, 'Ajay Kumar', 'A 201', '8065422178', 'ajay@testmail.com', 'ajaykumar', '$2y$10$kyBjW3yN/qJyw9hGiQ0U/erNyQHrJIQwFy6duJQlBidKDgGc4WnVi', 'Ganpati Apartment'),
(3, 'Anand Kumar', 'A 302', '9654123157', 'anandk@gmail.com', 'anand', '$2y$10$eXsZ4K.1WxA/aBE4L6FoQe/YDxNY5jNWkeMBPzjevQr2ZIAd7mX7W', 'Ganpati Apartment'),
(4, 'Mohan Agarwal', '101', '8096321454', 'magarwal@gmail.com', 'mohan', '$2y$10$KoLjGAx0QHC1aFs1ZC5FSuK1yO4B9HUd2uvyQtK7.nziArm7D42Qm', 'Radha Nivas'),
(5, 'Sanjay Bansal', '102', '986541235', 'sanjayb@gmail.com', 'sanjay ', '$2y$10$qsg1rvjLSsK3qRB3HCgAf.4M4x6F946w9P69wsaAftA1emv9TvYmi', 'Radha Nivas'),
(6, 'Sunil Agarwal', '105', '6845211254', 'sunilk@gmail.com', 'sunil', '$2y$10$nz99C98WI92J3pYe8dEM9.729.DeCADg1o7c8IVaDFDdJZ1tgub7S', 'Radha Nivas'),
(7, 'Anil Singh', 'B 301', '6504862254', 'anilsingh@gmail.com', 'anil', '$2y$10$QLrZFGc3b0MvHyR/JnxkweK0RLKonHYRk/fHJ6PLpgWxJqymOR14W', 'Shyam Apartment'),
(8, 'Deepak Sanwaria', 'A 301', '8092022181', 'agarwaldeepka491@gmail.com', 'deepak', '$2y$10$gjEVXng.cofBZEC1wYDbeubEWON4psuXbXCW1Wygzeq0DLPOW/SEG', 'Shyam Apartment'),
(9, 'Anuja Agarwal', '205', '9801472584', 'anuja@gmail.com', 'anuja', '$2y$10$g1GGZefnJTQ4ZkXgGIfvVOgsJYD/xvHRosrf6gPSUZ/fbzjW.DtMK', 'Narayana Court');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `building_elec`
--
ALTER TABLE `building_elec`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `contact_list`
--
ALTER TABLE `contact_list`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `elec_bill`
--
ALTER TABLE `elec_bill`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `mantain_worker`
--
ALTER TABLE `mantain_worker`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `month_exp`
--
ALTER TABLE `month_exp`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `society`
--
ALTER TABLE `society`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `userid` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `building_elec`
--
ALTER TABLE `building_elec`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_list`
--
ALTER TABLE `contact_list`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `elec_bill`
--
ALTER TABLE `elec_bill`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mantain_worker`
--
ALTER TABLE `mantain_worker`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `month_exp`
--
ALTER TABLE `month_exp`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `society`
--
ALTER TABLE `society`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
