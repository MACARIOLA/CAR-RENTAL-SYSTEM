-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2024 at 05:46 PM
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
  `carid` int(255) NOT NULL,
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
-- Dumping data for table `transaction_tbl`
--

INSERT INTO `transaction_tbl` (`transact_id`, `carid`, `transact_fname`, `transact_mname`, `transact_lname`, `transact_email`, `transact_phone`, `pickup_province`, `pickup_city`, `pickup_zipcode`, `pickup_dateTime`, `return_province`, `return_city`, `return_zipcode`, `return_dateTime`, `payment_method`, `transaction_dateTime`) VALUES
(1, 4, 'dsad', 'asdas', 'dasd', 'asdas@example.com', 'sadasd', 'dasdas', 'asdasd', 0, '1111-11-12T07:55', 'asdasd', 'adsasd', 0, '1112-12-12T17:55', 'cash', '2024-01-20 00:07:41'),
(2, 4, 'dsad', 'asdas', 'dasd', 'asdas@example.com', 'sadasd', 'dasdas', 'asdasd', 0, '1111-05-05T05:55', 'asdasd', 'adsasd', 0, '1112-05-05T19:07', 'cash', '2024-01-20 00:08:41'),
(3, 5, 'dsadas', 'asdas', 'dasd', 'asdas@example.com', 'sadasd', 'dasdas', 'asdasd', 0, '1111-04-04T04:44', 'asdasd', 'adsasd', 0, '1112-04-04T16:44', 'cash', '2024-01-20 00:12:26'),
(4, 5, 'dsadas', 'asdas', 'dasd', 'asdas@example.com', 'sadasd', 'dasdas', 'asdasd', 0, '1113-03-31T03:33', 'asdasd', 'adsasd', 0, '1114-03-31T15:33', 'cash', '2024-01-20 00:13:32'),
(5, 5, 'dsadass', 'asdas', 'dasd', 'asdas@example.com', 'sadasd', 'dasdas', 'asdasd', 0, '1113-11-11T11:11', 'asdasd', 'adsasd', 0, '2222-11-11T14:22', 'cash', '2024-01-20 00:17:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction_tbl`
--
ALTER TABLE `transaction_tbl`
  ADD PRIMARY KEY (`transact_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction_tbl`
--
ALTER TABLE `transaction_tbl`
  MODIFY `transact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
