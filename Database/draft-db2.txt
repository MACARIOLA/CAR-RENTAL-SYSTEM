-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2024 at 10:17 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

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
  `Customer_ID` int(11) DEFAULT NULL,
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `Profile_pic` varchar(255) DEFAULT NULL,
  `Customer_Comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews_tbl`
--

INSERT INTO `reviews_tbl` (`Review_ID`, `Customer_ID`, `First_name`, `Last_name`, `Profile_pic`, `Customer_Comment`) VALUES
(1, 1, 'Candice', 'Lopez', '', 'Isa sa mga bagay na natuwa ako ay ang kanilang transparency sa mga bayarin. Wala kang dapat ipag-alala dahil malinaw ang breakdown ng mga gastos. Walang nakatagong bayarin o sorpresa sa pag-aalis ng sasakyan. Malaking tulong ito sa pagbuo ng tiwala sa kanilang serbisyo.'),
(2, 1, 'Candice', 'Lopez', '', 'Isang bagay na na-appreciate ko sa Imperial Drive ay ang kanilang pagbibigay halaga sa feedback ng mga customers. Hindi lang ito naririnig, kundi ini-improve pa ang kanilang serbisyo base sa mga review ng mga tao. Tunay na customer-centric ang kanilang approach.'),
(3, 1, 'Candice', 'Lopez', '', 'Choosing Imperial Drive guarantees a stress-free experience. From the easy online booking to the reliable vehicles, they take care of every detail. It\'s the assurance of a smooth journey, making Imperial Drive my go-to car rental service.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reviews_tbl`
--
ALTER TABLE `reviews_tbl`
  ADD PRIMARY KEY (`Review_ID`),
  ADD KEY `Customer_ID` (`Customer_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reviews_tbl`
--
ALTER TABLE `reviews_tbl`
  MODIFY `Review_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews_tbl`
--
ALTER TABLE `reviews_tbl`
  ADD CONSTRAINT `reviews_tbl_ibfk_1` FOREIGN KEY (`Customer_ID`) REFERENCES `customers_tbl` (`Customer_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
