-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2022 at 03:55 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `billingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `fiscal_year` varchar(255) NOT NULL,
  `bill_no` int(11) NOT NULL,
  `edate` date NOT NULL,
  `ndate` date NOT NULL,
  `cname` varchar(255) NOT NULL,
  `cpan_no` int(11) NOT NULL,
  `pan_no` int(11) NOT NULL,
  `caddress` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `sn` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `qunatity` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `t_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`fiscal_year`, `bill_no`, `edate`, `ndate`, `cname`, `cpan_no`, `pan_no`, `caddress`, `payment`, `sn`, `pname`, `qunatity`, `price`, `t_id`) VALUES
('2000-2001', 2, '2022-04-01', '2022-04-01', 'suraj', 123, 5646547, 'bardibas', 'cash', 1, 'mn', '2', 1000, 1),
('2000-2001', 4, '2022-04-07', '2022-04-08', 'suraj', 123454, 564654, 'tpj', 'cash', 1, 'suraj shah', '3', 20000, 2),
('2000-2001', 4, '2022-04-07', '2022-04-08', 'suraj', 12345, 5646549, 'tpj', 'cash', 1, 'suraj shah', '3', 20000, 3),
('2000-2001', 1, '2022-04-06', '2022-04-04', 'manojbasnet', 1234, 564654, 'tpj', 'cash', 1, 'waiwai', '2', 20, 4);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'manoz', 'manu123');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `full_name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`full_name`, `user_name`, `password`, `gender`) VALUES
('1', '1', '1', ''),
('abc', 'abc', 'abc', 'Male'),
('Anil Mahajran', 'anilmah123', 'anilmah123', 'male'),
('dipendra', 'ddd', 'fffff', 'Male'),
('Dipendra Adhikari', 'dip211212', 'dipu', 'male'),
('dipendra', 'dipendra', 'dipendra', 'Male'),
('h', 'h', 'h', 'Male'),
('lkdjf', 'lkj', 'dipen', 'Male'),
('mahendra', 'mahendra', 'mahendra', 'Male'),
('Manoj Basnet', 'manoj', 'manoj34', 'Male'),
('Dipendra', 'manoz', '123456', 'Male'),
('mm', 'mm', 'mm', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
