-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 05, 2019 at 05:53 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `JCB`
--

-- --------------------------------------------------------

--
-- Table structure for table `All_Data`
--

CREATE TABLE `All_Data` (
  `id` bigint(20) NOT NULL,
  `device_id` text NOT NULL,
  `status` int(11) NOT NULL,
  `fuel` int(11) NOT NULL,
  `lats` text NOT NULL,
  `longs` text NOT NULL,
  `api_date` date NOT NULL,
  `api_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `All_Data`
--

INSERT INTO `All_Data` (`id`, `device_id`, `status`, `fuel`, `lats`, `longs`, `api_date`, `api_time`) VALUES
(1, 'abcd123xyz', 1, 30, '20.658745', '79.852145', '2019-10-04', '13:09:09');

-- --------------------------------------------------------

--
-- Table structure for table `device_table`
--

CREATE TABLE `device_table` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `device_id` text NOT NULL,
  `device_sr_no` text NOT NULL,
  `vehical_number` text NOT NULL,
  `Vehical_name` text NOT NULL,
  `Manufactured_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `device_table`
--

INSERT INTO `device_table` (`id`, `user_id`, `device_id`, `device_sr_no`, `vehical_number`, `Vehical_name`, `Manufactured_date`) VALUES
(1, 1, 'abcd123xyz', 'xyz123abcd', 'MH14 AB1422', 'JCB Pocland', '2019-10-01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `address` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `regstration_date` date NOT NULL,
  `registration_time` time NOT NULL,
  `type` int(11) NOT NULL,
  `img_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `address`, `email`, `password`, `mobile`, `regstration_date`, `registration_time`, `type`, `img_url`) VALUES
(1, 'xyz abc pqr', 'asdf ert 123 %$ sdfg )&^%@! dfghasas', 'email@email.com', '43211234', '1234321567', '2019-09-19', '17:11:43', 1, 'photo4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `All_Data`
--
ALTER TABLE `All_Data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `device_table`
--
ALTER TABLE `device_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `All_Data`
--
ALTER TABLE `All_Data`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `device_table`
--
ALTER TABLE `device_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
