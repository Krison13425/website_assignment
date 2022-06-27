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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
