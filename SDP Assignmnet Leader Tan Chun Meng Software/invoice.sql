-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Feb 05, 2021 at 08:25 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wdt`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
CREATE TABLE IF NOT EXISTS `invoice` (
  `I_id` int(11) NOT NULL AUTO_INCREMENT,
  `C_BookingID` int(11) NOT NULL,
  `I_name` varchar(225) NOT NULL,
  `I_activity` varchar(225) NOT NULL,
  `I_date` date NOT NULL,
  `I_time` varchar(225) NOT NULL,
  `I_fee` int(11) NOT NULL,
  `I_Court` varchar(225) NOT NULL,
  `I_CurrentTime` time NOT NULL,
  `I_CurrentDate` date NOT NULL,
  `I_PayMethod` varchar(200) NOT NULL,
  PRIMARY KEY (`I_id`),
  KEY `C_BookingID` (`C_BookingID`)
) ENGINE=InnoDB AUTO_INCREMENT=134 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`I_id`, `C_BookingID`, `I_name`, `I_activity`, `I_date`, `I_time`, `I_fee`, `I_Court`, `I_CurrentTime`, `I_CurrentDate`, `I_PayMethod`) VALUES
(111, 178, '57r6ty', ' Table Tennis', '2021-02-03', ' 8pm', 30, ' Court 9', '16:54:54', '2021-01-08', ' Online Banking'),
(112, 179, 'rwerwer', ' Badminton', '2021-01-14', ' 9pm', 30, ' Court 9', '17:25:53', '2021-01-08', ' Card'),
(113, 180, '234234', ' Table Tennis', '2021-01-01', ' 9pm', 30, ' Court 10', '17:26:42', '2021-01-08', ' Cash'),
(114, 181, 'wqrer', ' Snooker', '2021-01-08', ' 8pm', 40, ' Court 6', '17:27:16', '2021-01-08', ' Card'),
(115, 182, 'LA', ' Snooker', '2021-01-11', ' 9pm', 40, ' Court 9', '11:51:07', '2021-01-11', ' Card'),
(116, 183, 'R234', ' Badminton', '2021-01-11', ' 8pm', 30, ' Court 10', '12:33:17', '2021-01-11', ' Card'),
(118, 185, 'tan', ' Badminton', '2021-01-12', ' 8pm', 30, ' Court 5', '14:08:08', '2021-01-12', ' Payment Method'),
(119, 186, 'RR', ' Table Tennis', '2021-01-14', ' 9pm', 30, ' Court 10', '10:01:50', '2021-01-14', ' Cash'),
(121, 188, 'wrer', ' Badminton', '2021-01-14', ' 9pm', 30, ' Court 10', '10:51:39', '2021-01-14', ' Card'),
(122, 189, '32452345', ' Badminton', '2021-01-14', ' 8pm', 30, ' Court 8', '10:52:08', '2021-01-14', ' Card'),
(123, 190, 'wert', ' Table Tennis', '2021-01-20', ' 9pm', 30, ' Court 10', '21:22:25', '2021-01-29', ' Online Banking'),
(124, 191, 'Yasn', ' Badminton', '2021-01-22', ' 8pm', 30, ' Court 9', '12:55:52', '2021-01-30', ' Online Banking'),
(125, 192, 'adger', ' Snooker', '2021-01-26', ' 9pm', 40, ' Court 10', '13:32:46', '2021-01-30', ' Payment Method'),
(126, 193, 'Tan', ' Table Tennis', '2021-01-27', ' 8pm', 30, ' Court 10', '13:45:01', '2021-01-30', ' Online Banking'),
(128, 195, 'Kris', ' Badminton', '2021-01-30', ' 9pm', 30, ' Court 9', '14:05:14', '2021-01-30', ' Card'),
(129, 196, 'Kris', ' Badminton', '2021-01-29', ' 9pm', 30, ' Court 10', '14:06:38', '2021-01-30', ' Card'),
(130, 197, 'wr', ' Badminton', '2021-01-29', ' 6pm', 30, ' Court 10', '14:42:14', '2021-01-30', ' Online Banking'),
(132, 199, 'tewtr', ' Badminton', '2021-02-03', ' 9pm', 30, ' Court 9', '23:13:29', '2021-02-04', ' Online Banking'),
(133, 200, 'IU', ' Table Tennis', '2021-02-01', ' 8pm', 30, ' Court 9', '23:24:45', '2021-02-04', ' Online Banking');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`C_BookingID`) REFERENCES `booking` (`C_BookingID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
