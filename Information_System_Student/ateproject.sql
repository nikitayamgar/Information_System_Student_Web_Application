-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2019 at 03:54 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ateproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `password`) VALUES
('akash', 'akash123');

-- --------------------------------------------------------

--
-- Table structure for table `company_info`
--

CREATE TABLE `company_info` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `experiance` int(100) NOT NULL,
  `tenth` int(100) NOT NULL,
  `diploma` int(100) NOT NULL,
  `degree` int(100) NOT NULL,
  `language` varchar(100) NOT NULL,
  `passport` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_info`
--

INSERT INTO `company_info` (`id`, `name`, `type`, `experiance`, `tenth`, `diploma`, `degree`, `language`, `passport`, `address`, `photo`) VALUES
(1, 'TATA', 'MNC', 0, 50, 55, 55, 'Select Language', 'Not Required', 'Adhar Card', 'Adhar Card'),
(2, 'TATA', 'MNC', 0, 50, 55, 55, 'Select Language', 'Not Required', 'Adhar Card', 'Adhar Card'),
(3, 'ssss', 'Select Position', 0, 0, 0, 0, 'Select Language', 'Select Passport', 'Select Address Proof', 'Select Photo Id Proof'),
(4, 'eeeee', 'Select Position', 0, 0, 0, 0, 'Select Language', 'Select Passport', 'Select Address Proof', 'Select Photo Id Proof'),
(5, 'wwwww', 'Select Position', 0, 0, 0, 0, 'Select Language', 'Select Passport', 'Select Address Proof', 'Select Photo Id Proof');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobileno` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `tenperc` varchar(100) NOT NULL,
  `tenyear` varchar(100) NOT NULL,
  `twelthperc` varchar(100) NOT NULL,
  `twelthyear` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `degreeyear` varchar(100) NOT NULL,
  `gap` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`id`, `name`, `email`, `mobileno`, `dob`, `tenperc`, `tenyear`, `twelthperc`, `twelthyear`, `degree`, `degreeyear`, `gap`) VALUES
(3, '', 'akash2222', '', '', '', '', '', '', '', '', ''),
(4, 'kiran Koshti', 'kirankoshti195@gmail.com', '8624991829', '1995-04-19', '53', '2011', '74', '2016', '64', '2019', 'no'),
(5, 'Aakash Rasker', 'akashrasker@gmail.com', '8598556645', '1996-04-05', '70', '2013', '86', '2017', '64', '2020', '2'),
(7, 'kiran koshti', 'kirankoshtihello@gmailcom', '8888', '0008-08-08', '88', '88', '88', '88', '70', '555', '55'),
(8, 'Ajju Nanaware ', 'ajju@gmail.com', '8624991829', '1997-02-05', '55', '55', '33', '74', '55', '55', '55'),
(9, 'Akash Rasker', 'akash@gmail.com', '8854996822', '2016-02-02', '25', '2', '22', '53', '74', '55', '66'),
(10, 'kiran pavankumar ', 'kirankoshti@gmail.com', '8624991829', '2019-03-09', '1', '1', '1', '1', '1', '1', '1'),
(11, 'akash soham rasker', 'sohambandgar95@gmail.com', '8286807675', '2019-03-09', '12', '2033', '12', '1211', '12', '1211', '12'),
(12, 'ssss sssss sssssss', 'sohambandgar9@gmail.com', '8286807675', '2019-03-10', '11', '1111', '11', '1111', '11', '1111', '1'),
(13, 'kiran koshti ttttt', 'sohaar95@gmail.com', '8888888888', '2019-03-02', '88', '2222', '66', '1155', '90', '4444', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_info`
--
ALTER TABLE `company_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_info`
--
ALTER TABLE `company_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
