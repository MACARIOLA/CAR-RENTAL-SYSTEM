-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2024 at 04:50 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
-- Table structure for table `customers_tbl`
--

CREATE TABLE `customers_tbl` (
  `Customer_ID` int(11) NOT NULL,
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `Mi` varchar(50) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact_number` varchar(11) NOT NULL,
  `Profile_pic` blob DEFAULT NULL,
  `Password` varchar(50) NOT NULL,
  `Retrieval_password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers_tbl`
--

INSERT INTO `customers_tbl` (`Customer_ID`, `First_name`, `Last_name`, `Mi`, `Email`, `Contact_number`, `Profile_pic`, `Password`, `Retrieval_password`) VALUES
(1, 'Gerald', 'Autentico', 'Tabada', 'Dlaregautentico@gmail.com', '9673703083', NULL, 'Boomie11', NULL),
(2, 'John Rod', 'Pogi', 'Gwapo', 'johnrodhandsome@gmail.tite', '09999999999', NULL, 'johnrod', NULL),
(3, 'essang', 'sangano', '', 'cubenaice@gmail.com', '09267777723', NULL, 'melted_123', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers_tbl`
--
ALTER TABLE `customers_tbl`
  ADD PRIMARY KEY (`Customer_ID`),
  ADD UNIQUE KEY `Last_name` (`Last_name`);
ALTER TABLE `customers_tbl` ADD FULLTEXT KEY `Last_name_2` (`Last_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers_tbl`
--
ALTER TABLE `customers_tbl`
  MODIFY `Customer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
