-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Aug 08, 2021 at 05:08 PM
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
(1, 'July-2021', '5000', '20', '250', 'user test'),
(2, 'June-2021', '6000', '20', '300', 'user test'),
(3, 'May 2021', '5000', '20', '250', 'ajay'),
(4, '2021-08-08', '5000', '20', '250', 'ajay');

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
(1, 'Deepak Agarwal', 'B, 401', 2147483647, 'agarwaldee@gmail.com', 'user test'),
(2, 'Aniket', 'A 508', 2147483647, 'aniket@gmail.com', 'user test');

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
(1, '2021-08-08', 500, '1-20', 'ajay'),
(2, '2021-08-07', 500, '1-20', 'ajay');

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
(1, 'Ajay Kumar ', 'APC', 2147483647, '5000', 'June-2021', 'Addhar', '1234556789101', 'user test'),
(2, 'Ramesh Kumar', 'APC', 2147483647, '6000', 'Aug-2020', 'Addhar', '2201545478542', 'user test'),
(3, 'Ramesh', 'Abc', 2147483647, '5000', 'Jan-21', 'addhar', '987654321012', 'ajay'),
(4, 'Ankit', 'sdf', 2147483647, '5000', 'July-20', 'Voter ID', '9835128444', 'ajay');

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
(1, 'July 2021', 500, 'Parking', 'user test'),
(2, 'July-21', 500, 'Parking', 'ajay');

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
(2, 'Radha Nivas', '2021-08-08');

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
  `password` varchar(30) NOT NULL,
  `society_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sno`, `name`, `flat_no`, `phone`, `email`, `userid`, `password`, `society_name`) VALUES
(1, 'Subhaan (Admin)', '', '', '', 'admin', 'test123', ''),
(2, 'Test User', 'T 401', '8092022181', 'test@test.com', 'user test', 'test123', 'Ganpati Apartment'),
(3, 'Ajay Kumar', 'A 402', '9876543210', 'ajay@test.com', 'ajay', 'test123', 'Radha Nivas');

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
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_list`
--
ALTER TABLE `contact_list`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `elec_bill`
--
ALTER TABLE `elec_bill`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mantain_worker`
--
ALTER TABLE `mantain_worker`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `month_exp`
--
ALTER TABLE `month_exp`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `society`
--
ALTER TABLE `society`
  MODIFY `sno` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
