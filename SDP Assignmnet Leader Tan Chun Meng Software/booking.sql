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
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `C_BookingID` int(11) NOT NULL AUTO_INCREMENT,
  `AC_ID` int(11) NOT NULL,
  `C_Name` varchar(225) NOT NULL,
  `C_Email` varchar(255) NOT NULL,
  `C_IC` varchar(50) NOT NULL,
  `C_Phone` varchar(255) NOT NULL,
  `C_Activity` varchar(255) NOT NULL,
  `C_Date` date NOT NULL,
  `C_Time` varchar(50) NOT NULL,
  `C_Fee` int(10) NOT NULL,
  `C_Court` varchar(225) NOT NULL,
  `C_CurrentDate` date NOT NULL,
  `C_CurrentTime` time NOT NULL,
  `C_PayMethod` varchar(200) NOT NULL,
  `C_PayStatus` varchar(200) NOT NULL,
  `C_BookingStatus` varchar(255) NOT NULL,
  PRIMARY KEY (`C_BookingID`),
  KEY `AC_ID` (`AC_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`C_BookingID`, `AC_ID`, `C_Name`, `C_Email`, `C_IC`, `C_Phone`, `C_Activity`, `C_Date`, `C_Time`, `C_Fee`, `C_Court`, `C_CurrentDate`, `C_CurrentTime`, `C_PayMethod`, `C_PayStatus`, `C_BookingStatus`) VALUES
(178, 13, '57r6ty', '57747', '474574', '34534534534', 'Table Tennis', '2021-02-03', '8pm', 30, 'Court 9', '2021-01-08', '16:54:54', 'Online Banking', 'paid', 'Done'),
(179, 12, 'rwerwer', 'werwer', 'wewer', '2342423423', 'Badminton', '2021-01-14', '9pm', 30, 'Court 9', '2021-01-08', '17:25:53', 'Card', 'paid', 'Done'),
(180, 13, '234234', '234234', '2342342', '34234234535', 'Table Tennis', '2021-01-01', '9pm', 30, 'Court 10', '2021-01-08', '17:26:42', 'Cash', 'paid', 'Cancel'),
(181, 14, 'wqrer', 'werw', 'erwer', '234523452', 'Snooker', '2021-01-08', '8pm', 40, 'Court 6', '2021-01-08', '17:27:16', 'Card', 'paid', 'Cancel'),
(182, 14, 'LA', 'cmeng_13@yahoo.com', '245243434234', '412341234', 'Snooker', '2021-01-11', '9pm', 40, 'Court 9', '2021-01-11', '11:51:07', 'Card', 'paid', 'Done'),
(183, 12, 'R234', 'cmeng_13@yahoo.com', '234234', '423423', 'Badminton', '2021-01-11', '8pm', 30, 'Court 10', '2021-01-11', '12:33:17', 'Card', 'paid', 'Done'),
(185, 12, 'tan', 'cmeng_13@yahoo.com', '3224324324', '234234234', 'Badminton', '2021-01-12', '8pm', 30, 'Court 5', '2021-01-12', '14:08:08', 'Payment Method', 'paid', 'Cancel'),
(186, 13, 'RR', 'cmeng_13@yahoo.com', '4234234', '234434523', 'Table Tennis', '2021-01-14', '9pm', 30, 'Court 10', '2021-01-14', '10:01:50', 'Cash', 'paid', 'Done'),
(188, 12, 'wrer', 'wr', 'werwer', '2345234534', 'Badminton', '2021-01-14', '9pm', 30, 'Court 10', '2021-01-14', '10:51:39', 'Card', 'paid', 'Done'),
(189, 12, '32452345', '34534', '5345345', '34534534', 'Badminton', '2021-01-14', '8pm', 30, 'Court 8', '2021-01-14', '10:52:08', 'Card', 'paid', 'Done'),
(190, 13, 'wert', '', 'wertgw', '531894', 'Table Tennis', '2021-01-20', '9pm', 30, 'Court 10', '2021-01-29', '21:22:25', 'Online Banking', 'paid', 'Done'),
(191, 12, 'Yasn', 'awr@lfekwn.com', '523452', '01288973942', 'Badminton', '2021-01-22', '8pm', 30, 'Court 9', '2021-01-30', '12:55:52', 'Online Banking', 'paid', 'Cancel'),
(192, 14, 'adger', 'cmeng_13@yahoo.com', 'ertyer56456', '32434325432', 'Snooker', '2021-01-26', '9pm', 40, 'Court 10', '2021-01-30', '13:32:46', 'Payment Method', 'paid', 'Done'),
(193, 13, 'Tan', 'Tan@gamail.com', '554581431894318', '01247604515', 'Table Tennis', '2021-01-27', '8pm', 30, 'Court 10', '2021-01-30', '13:45:01', 'Online Banking', 'paid', 'Cancel'),
(195, 12, 'Kris', 'wert@gmai.com', '554581431894', '4534635635', 'Badminton', '2021-01-30', '9pm', 30, 'Court 9', '2021-01-30', '14:05:14', 'Card', 'paid', 'Done'),
(196, 12, 'Kris', 'ertwrt@gmai.com', 'wertgw', '4675474', 'Badminton', '2021-01-29', '9pm', 30, 'Court 10', '2021-01-30', '14:06:38', 'Card', 'paid', 'pending'),
(197, 12, 'wr', 'krisontan_13@yahoo.com', '523452', '05430150581', 'Badminton', '2021-01-29', '6pm', 30, 'Court 10', '2021-01-30', '14:42:14', 'Online Banking', 'unpaid', 'pending'),
(199, 12, 'tewtr', 'krisontan_13@yahoo.com', 'wertgw', '64567467546', 'Badminton', '2021-02-03', '9pm', 30, 'Court 9', '2021-02-04', '23:13:29', 'Online Banking', 'unpaid', 'pending'),
(200, 13, 'IU', 'krisontan_13@yahoo.com', 'wertgw', '34534634563', 'Table Tennis', '2021-02-01', '8pm', 30, 'Court 9', '2021-02-04', '23:24:45', 'Online Banking', 'unpaid', 'pending');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`AC_ID`) REFERENCES `ac` (`AC_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
