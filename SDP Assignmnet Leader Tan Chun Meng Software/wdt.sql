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
-- Table structure for table `ac`
--

DROP TABLE IF EXISTS `ac`;
CREATE TABLE IF NOT EXISTS `ac` (
  `AC_ID` int(11) NOT NULL AUTO_INCREMENT,
  `AC_Name` varchar(255) NOT NULL,
  `AC_Price` int(11) NOT NULL,
  `AC_Pic` varchar(255) NOT NULL,
  `AC_Description` varchar(500) NOT NULL,
  `AC_TimeAvailable` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`AC_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ac`
--

INSERT INTO `ac` (`AC_ID`, `AC_Name`, `AC_Price`, `AC_Pic`, `AC_Description`, `AC_TimeAvailable`) VALUES
(12, 'Badminton', 30, 'Badminton.jpg', 'A High rubber quality made floor The badminton court is 13.4m long and 6.1m wide according with the international length by letting you having a fun experience. Our booking has to be made up to three (3) days in advance.', ' 9.00am to 10.00pm'),
(13, 'Table Tennis', 30, 'Table Tennis.jpg', 'A High quality branded table named butterfly is provided The table is 2.74m long, 1.525m wide, and 76cm high according with the international length by letting you having a fun experience. Our booking has to be made up to three (3) days in advance.', ' 9.00am to 10.00pm'),
(14, 'Snooker', 40, 'Snooker.jpg', ' There will an air conditioner environment and the cue is also provided. Our snooker pool is standardized by the World Professional Billiards and Snooker Association (WPBSA) and the amateur International Billiards and Snooker Federation (IBSF) that letting you having a fun and professional experience. Our booking has to be made up to three (3) days in advance.', ' 9.00am to 10.00pm'),
(15, 'Squash', 35, 'Squash.jpg', '  We will be offering an air conditioner environment and the cue is also provided. Our Squash Court is standardized by according with the international where length is 9.75m and width is 6.4m that letting you having a fun and professional experience. Our booking has to be made up to three (3) days in advance.', ' 9.00am to 10.00pm');

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

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `P_ID` int(12) NOT NULL AUTO_INCREMENT,
  `P_Name` varchar(255) NOT NULL,
  `P_Price` double NOT NULL,
  `P_Pic` varchar(255) NOT NULL,
  PRIMARY KEY (`P_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`P_ID`, `P_Name`, `P_Price`, `P_Pic`) VALUES
(3, '100 Plus', 2.3, '100 Plus Active Can 300ml rm2.5.jpeg'),
(7, 'milo', 4, 'milo active - go protein up 225ml rm4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `Staff_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Staff_Name` varchar(255) NOT NULL,
  `Staff_Password` varchar(50) NOT NULL,
  `Staff_Gender` varchar(255) NOT NULL,
  `Staff_type` enum('Manager','Staff') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Staff',
  PRIMARY KEY (`Staff_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Staff_ID`, `Staff_Name`, `Staff_Password`, `Staff_Gender`, `Staff_type`) VALUES
(1, 'Kris', '200013425', 'Male', 'Manager'),
(2, 'IU', 'Iu200013425', 'Female', 'Staff');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`AC_ID`) REFERENCES `ac` (`AC_ID`);

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`C_BookingID`) REFERENCES `booking` (`C_BookingID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
