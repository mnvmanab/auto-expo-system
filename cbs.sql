-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 17, 2022 at 01:09 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `customer_PAN` varchar(10) NOT NULL,
  `car_number` int(11) NOT NULL,
  `date` varchar(50) DEFAULT NULL,
  `booking_id` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `time` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`booking_id`),
  KEY `customer_PAN` (`customer_PAN`),
  KEY `car_number` (`car_number`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=12235 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`customer_PAN`, `car_number`, `date`, `booking_id`, `quantity`, `time`, `status`) VALUES
('5612349708', 1005, '21/01/2022', 'B_6069e4626e635', 1, '09:38:02', 'booked'),
('1122334455', 1004, '16/02/2022', 'B_620c8b8a11034', 2, '10:58:42', 'cancelled');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE IF NOT EXISTS `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(20) NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8004 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`) VALUES
(8000, 'MERCEDES'),
(8001, 'FORD'),
(8002, 'AUDI'),
(8003, 'BMW');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
CREATE TABLE IF NOT EXISTS `cars` (
  `car_id` int(11) NOT NULL,
  `model` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `brand` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `dealer` int(11) NOT NULL,
  `picsource` varchar(500) NOT NULL,
  `engine` varchar(500) NOT NULL,
  `color` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  PRIMARY KEY (`car_id`),
  KEY `color` (`color`),
  KEY `brand` (`brand`),
  KEY `type` (`type`),
  KEY `dealer` (`dealer`)
) ENGINE=MyISAM AUTO_INCREMENT=1024 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `model`, `price`, `brand`, `type`, `dealer`, `picsource`, `engine`, `color`, `available`) VALUES
(1001, 'BENZ G550 4x4', 16500000, 8000, 2, 1230, 'images/2017-mercedes-benz-g550-4x4-squared-review.jpg', '3982', 601, 6),
(1002, 'MUSTANG GT', 7560000, 8001, 1, 1231, 'images/ford_mustang_gt.jpg', '4951', 601, 7),
(1003, 'AMG GT R', 24600000, 8000, 1, 1230, 'images/mercedes_amg_gt_r.jpg', '3982', 604, 8),
(1004, 'X6', 9600000, 8003, 2, 1231, 'images/bmw_x6.jpg', '	2998', 603, 10),
(1005, 'R8 V10 PLUS', 31200000, 8002, 1, 1230, 'images/2016-Audi-R8-V10-Copper-1.jpg', '5024', 602, 5),
(1006, 'Z4', 6654000, 8003, 3, 1232, 'images/bmw_z4.jpg', '2998', 605, 4);

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

DROP TABLE IF EXISTS `color`;
CREATE TABLE IF NOT EXISTS `color` (
  `color_id` int(11) NOT NULL,
  `color_name` varchar(20) NOT NULL,
  PRIMARY KEY (`color_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`color_id`, `color_name`) VALUES
(601, 'Blue'),
(602, 'Orange'),
(604, 'Green'),
(603, 'Black'),
(605, 'Silver');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  `PAN` varchar(10) NOT NULL,
  PRIMARY KEY (`PAN`),
  UNIQUE KEY `phonenumber` (`phonenumber`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`fname`, `mname`, `lname`, `phonenumber`, `PAN`) VALUES
('Manab', 'Jyoti', 'Gogoi', '9436252560', '1234567890'),
('Wade', 'Dp', 'Wilson', '9182736450', '1122334455'),
('Karthik', 'Aa', 'Aaryan', '9876543210', '5612349708');

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

DROP TABLE IF EXISTS `dealer`;
CREATE TABLE IF NOT EXISTS `dealer` (
  `dealer_id` int(11) NOT NULL,
  `dealer_name` varchar(20) NOT NULL,
  `phonenumber` varchar(10) NOT NULL,
  PRIMARY KEY (`dealer_id`),
  UNIQUE KEY `phonenumber` (`phonenumber`)
) ENGINE=MyISAM AUTO_INCREMENT=1123448 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dealer`
--

INSERT INTO `dealer` (`dealer_id`, `dealer_name`, `phonenumber`) VALUES
(1230, 'Motor XYZ', '9876543210'),
(1231, 'Motor YY', '9436252561'),
(1232, 'Motor ABC', '9876543201');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(20) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`) VALUES
(1, 'Petrol'),
(2, 'Diesel'),
(3, 'Electricity');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
