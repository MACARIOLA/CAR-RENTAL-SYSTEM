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
-- Table structure for table `reviews_tbl`
--

CREATE TABLE `reviews_tbl` (
  `Review_ID` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `Customer_Comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews_tbl`
--

INSERT INTO `reviews_tbl` (`Review_ID`, `Email`, `name`, `Customer_Comment`) VALUES
(3, 'Dlaregautentico@gmail.com', 'GeraldAutentico', 'what a nice page to review'),
(4, 'Dlaregautentico@gmail.com', 'GeraldAutentico', 'Hellow\r\n'),
(5, 'Dlaregautentico@gmail.com', 'GeraldAutentico', 'hasjdhasjdhasjldhajsdhasjldhsajdhasjdash\r\ndsadhasjdhasdlhasldhasldahsdsjda\r\nasdjsadhjasdhasjdlhasldjashdljahsdl\r\nasjdhasdjahdljadhlasdhladhasdhsad;\r\nasjdhasldjhasldjhasldjhasldjhasldashd'),
(6, 'cubenaice@gmail.com', 'essangsangano', 'ahahhaahahhaahhahahahaahhahahahaha'),
(7, 'cubenaice@gmail.com', 'essangsangano', 'haleluyah\r\n'),
(8, 'Dlaregautentico@gmail.com', 'Gerald Autentico', 'adadadadadadadadadadafafafafaf'),
(9, 'Dlaregautentico@gmail.com', 'Gerald Autentico', 'what i mean you are a beatu'),
(10, 'Dlaregautentico@gmail.com', 'Gerald Autentico', 'delulu nanamn tonight'),
(11, 'Dlaregautentico@gmail.com', 'Gerald Autentico', 'crush kita tang ina mo'),
(12, 'Dlaregautentico@gmail.com', 'Gerald Autentico', 'last one'),
(13, 'Dlaregautentico@gmail.com', 'Gerald Autentico', 'last last onw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reviews_tbl`
--
ALTER TABLE `reviews_tbl`
  ADD PRIMARY KEY (`Review_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reviews_tbl`
--
ALTER TABLE `reviews_tbl`
  MODIFY `Review_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
