-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 22, 2020 at 03:11 PM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datab`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `ID` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `FName` varchar(25) NOT NULL,
  `LName` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`ID`, `Password`, `FName`, `LName`) VALUES
('admin', '159753', 'X', 'X'),
('ANNA', '12345678', 'asdasd', 'asdasd'),
('eiei', 'eiei', 'eiei', 'eiei'),
('me', '123456', 'me', 'me'),
('mini', '123', 'wow', 'eiei'),
('NUTNUTNUT', '12345678', 'mon', 'tri'),
('pudjapu', '123', 'p', 'w'),
('sosad', '123', 'PP', 'TT'),
('studentzaa', '12345678', 'Worapong', 'Panupintu'),
('w33', 'w33', 'w33', 'w33'),
('WORAPONG', 'PANUPINTU', 'MON', 'TRI');

-- --------------------------------------------------------

--
-- Table structure for table `manage`
--

CREATE TABLE `manage` (
  `ID` varchar(20) NOT NULL,
  `FName` varchar(25) NOT NULL,
  `LName` varchar(25) NOT NULL,
  `Problem` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ProductID` varchar(30) NOT NULL,
  `Status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manage`
--

INSERT INTO `manage` (`ID`, `FName`, `LName`, `Problem`, `ProductID`, `Status`) VALUES
('NUTNUTNUT', 'mon', 'tri', '000000', '0123456123', 'W'),
('studentzaa', 'Worapong', 'Panupintu', 'MSI-GL63-8RD', 'ZXCV-KK01', 'P'),
('studentzaa', 'Worapong', 'Panupintu', 'MSI-GT75-8RG', 'ZXCV-KK02', 'T'),
('studentzaa', 'Worapong', 'Panupintu', 'MSI-GS65-8RE', 'ZXCV-KK03', 'W');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `Status` varchar(2) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`Status`, `Name`) VALUES
('P', 'พร้อมรับสินค้า'),
('S', 'รับสินค้าแล้ว'),
('T', 'กำลังจัดส่ง'),
('W', 'กำลังซ่อม');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `manage`
--
ALTER TABLE `manage`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `Status` (`Status`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`Status`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `manage`
--
ALTER TABLE `manage`
  ADD CONSTRAINT `manage_ibfk_1` FOREIGN KEY (`Status`) REFERENCES `status` (`Status`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
