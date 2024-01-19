-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2024 at 01:04 PM
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
-- Database: `id_dtb`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction_tbl`
--

CREATE TABLE `transaction_tbl` (
  `transact_id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `transact_fname` text NOT NULL,
  `transact_mname` text NOT NULL,
  `transact_lname` text NOT NULL,
  `transact_email` varchar(255) NOT NULL,
  `transact_phone` varchar(15) NOT NULL,
  `pickup_province` varchar(50) NOT NULL,
  `pickup_city` varchar(50) NOT NULL,
  `pickup_zipcode` int(11) NOT NULL,
  `pickup_dateTime` varchar(50) NOT NULL,
  `return_province` varchar(50) NOT NULL,
  `return_city` varchar(50) NOT NULL,
  `return_zipcode` int(11) NOT NULL,
  `return_dateTime` varchar(50) NOT NULL,
  `payment_method` varchar(25) NOT NULL,
  `transaction_dateTime` varchar(25) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction_tbl`
--
ALTER TABLE `transaction_tbl`
  ADD PRIMARY KEY (`transact_id`),
  ADD KEY `car_id` (`car_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction_tbl`
--
ALTER TABLE `transaction_tbl`
  MODIFY `transact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaction_tbl`
--
ALTER TABLE `transaction_tbl`
  ADD CONSTRAINT `transaction_tbl_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `cars_tbl` (`car_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
