-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2018 at 12:33 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicare`
--

-- --------------------------------------------------------

--
-- Table structure for table `serviceprovider`
--

CREATE TABLE `serviceprovider` (
  `id` int(11) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fullName` text NOT NULL,
  `mobileNo` varchar(20) NOT NULL,
  `serviceType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `serviceprovider`
--

INSERT INTO `serviceprovider` (`id`, `user_name`, `password`, `fullName`, `mobileNo`, `serviceType`) VALUES
(1, 'provider1', 'provider1', 'Provider Lee', '0192234666', 'Appointment, Medication, Checkup'),
(2, 's1', 's1', 's1', 's1', 'Appointment, Medication'),
(3, 'John', 'john', 'John Tan', '0191212344', 'Medication'),
(4, 'Johnny', '11111111', 'Johnny Bravo', '0192288123', 'Appointment, Medication');

-- --------------------------------------------------------

--
-- Table structure for table `servicerequest`
--

CREATE TABLE `servicerequest` (
  `requestID` int(11) NOT NULL,
  `date` varchar(10) NOT NULL,
  `notes` varchar(100) NOT NULL,
  `requestedBy` varchar(50) NOT NULL,
  `servicetype` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Pending',
  `assignedTo` varchar(20) NOT NULL,
  `review` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicerequest`
--

INSERT INTO `servicerequest` (`requestID`, `date`, `notes`, `requestedBy`, `servicetype`, `status`, `assignedTo`, `review`) VALUES
(31, '1221-12-12', '12123', 's2', 'Appointment', 'Pending', '', 'abc'),
(32, '12323-12-1', '232323', 's2', 'Appointment', 'Completed', 's1', 'testing review!!'),
(33, '32323-02-2', '232323', 's2', 'Checkup', 'Pending', '', ''),
(34, '2018-10-27', 'Medication', 's2', 'Medication', 'Completed', '', 'Good Good'),
(35, '2018-10-28', 'Exercise', 's2', 'Appointment', 'Completed', '', ''),
(36, '2017-11-11', 'abc', 's2', 'Appointment', 'Completed', '', ''),
(37, '2017-11-23', 'a b c', 's2', 'Appointment', 'Completed', '', ''),
(38, '2017-11-23', 'a b c', 's2', 'Appointment', 'Completed', '', ''),
(39, '', '', 's2', '', 'Accepted', 's1', ''),
(40, '2019-11-11', 'Medication', 's2', 'Medication', 'Accepted', 's1', ''),
(41, '123223-11-', '123213', 's2', 'Appointment', 'Accepted', 's1', ''),
(43, '2018-11-19', 'Medication supply', 'anne70', 'Medication', 'Completed', 'John', 'abc'),
(44, '2018-11-17', 'Care required', 'anne70', 'Checkup', 'Completed', 'John', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `serviceuser`
--

CREATE TABLE `serviceuser` (
  `id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fullName` text NOT NULL,
  `mobileNo` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `serviceuser`
--

INSERT INTO `serviceuser` (`id`, `user_name`, `password`, `fullName`, `mobileNo`, `address`) VALUES
(1, '', 'sabsb', 'sb', 'sfs', 'sfs'),
(2, '', 'asf', 'asf', 'asf', 'asf'),
(3, '', 'senior1', 'Senior Wong', '0121234555', '18-11, Glomac Centro'),
(4, 's2', 's2', 's2', 's2', 's2'),
(5, 's3', 's3', 's3', 's3', 's3'),
(6, 'anne70', '12345678', 'Anne Lee', '0126677123', '5, Jalan Sri Semanta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `serviceprovider`
--
ALTER TABLE `serviceprovider`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `user_name_2` (`user_name`);

--
-- Indexes for table `servicerequest`
--
ALTER TABLE `servicerequest`
  ADD UNIQUE KEY `requestID` (`requestID`);

--
-- Indexes for table `serviceuser`
--
ALTER TABLE `serviceuser`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `serviceprovider`
--
ALTER TABLE `serviceprovider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `servicerequest`
--
ALTER TABLE `servicerequest`
  MODIFY `requestID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `serviceuser`
--
ALTER TABLE `serviceuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
