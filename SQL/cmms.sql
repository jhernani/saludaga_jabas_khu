-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2015 at 06:08 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cmms`
--

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE IF NOT EXISTS `calendar` (
  `date` date NOT NULL,
  `data` text NOT NULL,
  PRIMARY KEY (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`date`, `data`) VALUES
('2015-09-30', 'testing please workkkkk!!!'),
('2015-10-02', 'whatever'),
('2015-10-08', 'yo'),
('2015-10-19', 'some more test');

-- --------------------------------------------------------

--
-- Table structure for table `computer`
--

CREATE TABLE IF NOT EXISTS `computer` (
  `comp_id` int(11) NOT NULL AUTO_INCREMENT,
  `comp_num` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL,
  PRIMARY KEY (`comp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `computer`
--

INSERT INTO `computer` (`comp_id`, `comp_num`, `location`, `status`) VALUES
(1, 1, 'ROOM 465', '1'),
(2, 2, 'ROOM 4', '1'),
(3, 3, 'ROOM 123', '1');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `empID` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `emp_name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `usertype` enum('1','2','3') NOT NULL,
  PRIMARY KEY (`empID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empID`, `email`, `password`, `emp_name`, `position`, `usertype`) VALUES
(1, 'albert@gmail.com', 'd1dd592238c0722335c8e7a9bc4c71f8', 'Albert Saludaga', 'CITO', '1'),
(2, 'eluena@gmail.com', '81b470eb24b40ac8d868b1ff03dea1b9', 'Eluena Jabas', 'IT Personnel', '2');

-- --------------------------------------------------------

--
-- Table structure for table `hardware`
--

CREATE TABLE IF NOT EXISTS `hardware` (
  `hw_id` int(11) NOT NULL AUTO_INCREMENT,
  `hw_name` varchar(255) NOT NULL,
  `hw_description` varchar(1000) NOT NULL,
  `hw_dateinstalled` date NOT NULL,
  `hw_serialno` varchar(50) NOT NULL,
  `hw_comp_id` int(11) NOT NULL,
  `hw_status` enum('0','1') NOT NULL,
  PRIMARY KEY (`hw_id`),
  KEY `hw_comp_id` (`hw_comp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hardware`
--

INSERT INTO `hardware` (`hw_id`, `hw_name`, `hw_description`, `hw_dateinstalled`, `hw_serialno`, `hw_comp_id`, `hw_status`) VALUES
(1, 'Graphics Card', 'NVIDIA GT210x MSI', '2015-10-04', '123456612', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `software`
--

CREATE TABLE IF NOT EXISTS `software` (
  `sw_id` int(11) NOT NULL AUTO_INCREMENT,
  `sw_name` varchar(255) NOT NULL,
  `sw_description` varchar(1000) NOT NULL,
  `sw_type` enum('0','1') NOT NULL,
  `sw_dateinstalled` date NOT NULL,
  `sw_expire` date DEFAULT NULL,
  `sw_comp_id` int(11) NOT NULL,
  `sw_productkey` varchar(50) NOT NULL,
  `sw_status` enum('0','1') NOT NULL,
  PRIMARY KEY (`sw_id`),
  KEY `sw_comp_id` (`sw_comp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `software`
--

INSERT INTO `software` (`sw_id`, `sw_name`, `sw_description`, `sw_type`, `sw_dateinstalled`, `sw_expire`, `sw_comp_id`, `sw_productkey`, `sw_status`) VALUES
(1, 'Avast Internet Security', 'v.10.5.2 AVAST Software', '1', '2015-09-27', '2017-03-17', 2, '28ki-238j-aw21-232z', '1'),
(2, 'Open Office', 'v.20 Open Office Org', '0', '2015-10-05', '0000-00-00', 1, '', '1');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hardware`
--
ALTER TABLE `hardware`
  ADD CONSTRAINT `hardware_ibfk_1` FOREIGN KEY (`hw_comp_id`) REFERENCES `computer` (`comp_id`);

--
-- Constraints for table `software`
--
ALTER TABLE `software`
  ADD CONSTRAINT `software_ibfk_1` FOREIGN KEY (`sw_comp_id`) REFERENCES `computer` (`comp_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
