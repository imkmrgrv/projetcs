-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 22, 2013 at 03:10 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `optomate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(10) NOT NULL AUTO_INCREMENT,
  `branch_id` int(10) NOT NULL,
  `admin_name` varchar(25) NOT NULL,
  `login_id` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email_id` varchar(25) NOT NULL,
  `lastlogin` datetime NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `branch_id`, `admin_name`, `login_id`, `password`, `email_id`, `lastlogin`) VALUES
(1, 1, 'Vaibhav Nayak ', 'optomate', '123', 'vaibhava.nayak@gmail.com', '2013-03-22 05:32:11'),
(2, 2, 'Sanketh', 'optocenter', 'kamath', 'mnrkamath@gmail.com', '0000-00-00 00:00:00'),
(3, 1, 'Vaibhav', 'optomateb', '123', 'optimist.nayak@gmail.coma', '0000-00-00 00:00:00'),
(6, 2, 'abcd', 'abcd', '', 'abc@gmsil.com', '0000-00-00 00:00:00'),
(7, 2, 'afs', 'fsf', '123456789', 'sfsf@gmail.com', '0000-00-00 00:00:00'),
(8, 1, 'mahesh', 'kumar', '123456', 'mahesh@gmail.om', '2013-03-18 07:30:21');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `app_id` int(10) NOT NULL AUTO_INCREMENT,
  `branch_id` int(10) NOT NULL,
  `pat_id` int(10) NOT NULL,
  `doc_id` int(10) NOT NULL,
  `app_date` date NOT NULL,
  `app_time` time NOT NULL,
  `created_at` datetime NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`app_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`app_id`, `branch_id`, `pat_id`, `doc_id`, `app_date`, `app_time`, `created_at`, `status`) VALUES
(2, 1, 15, 3, '2013-02-11', '06:15:00', '0000-00-00 00:00:00', 'Done\r\n'),
(3, 1, 17, 3, '2013-02-11', '06:15:00', '0000-00-00 00:00:00', 'pending'),
(4, 2, 20, 3, '2013-02-11', '06:15:00', '0000-00-00 00:00:00', 'Done\r\n'),
(6, 2, 15, 3, '2013-03-18', '05:00:00', '2013-03-15 07:16:47', 'pending\r\n'),
(8, 2, 31, 3, '2013-03-20', '06:00:00', '2013-03-15 12:49:52', 'Done\r\n'),
(9, 1, 15, 14, '2013-03-11', '00:00:00', '2013-03-19 06:45:40', 'Done\r\n'),
(10, 1, 15, 16, '2013-03-18', '00:00:00', '2013-03-19 06:52:19', 'Done\r\n'),
(11, 2, 15, 3, '2013-03-20', '05:15:00', '2013-03-20 02:16:41', 'Done\r\n'),
(12, 1, 50, 14, '2013-03-21', '06:00:00', '2013-03-21 07:20:46', 'pending'),
(13, 1, 35, 14, '2013-03-23', '05:00:00', '2013-03-22 05:06:23', 'pending'),
(14, 2, 35, 15, '2013-03-22', '05:30:00', '2013-03-22 05:30:20', 'pending'),
(15, 2, 51, 16, '2013-03-22', '05:45:00', '2013-03-22 05:34:22', 'Done\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `branch_id` int(10) NOT NULL AUTO_INCREMENT,
  `branch_name` varchar(30) NOT NULL,
  `description` varchar(50) NOT NULL,
  PRIMARY KEY (`branch_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `branch_name`, `description`) VALUES
(1, 'KodialBail, Mangalore', 'Main Branch'),
(2, 'Bunts Hostel, Mangalore', 'Sub Branch'),
(7, 'Suratkal,mangalore', 'Sub branch');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `doc_id` int(10) NOT NULL AUTO_INCREMENT,
  `branch_id` int(10) NOT NULL,
  `doc_name` varchar(25) NOT NULL,
  `clinic_name` varchar(25) NOT NULL,
  `email_id` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `login_id` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `created_at` date NOT NULL,
  `last_login` datetime NOT NULL,
  PRIMARY KEY (`doc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doc_id`, `branch_id`, `doc_name`, `clinic_name`, `email_id`, `phone`, `mobile`, `login_id`, `password`, `created_at`, `last_login`) VALUES
(14, 1, 'Rajesh Kumar', 'raju clinic', 'raj@gmail.com', '987456321234', '98745631134543', 'rajeshkumar', 'technology', '2013-03-16', '2013-03-22 05:06:47'),
(16, 2, 'peter king', 'pk', 'pgk@gmail.com', '98745632140', '78964541230', 'pk', '9876543210', '2013-03-22', '2013-03-22 05:35:07');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_bill`
--

CREATE TABLE IF NOT EXISTS `doctor_bill` (
  `bill_id` int(10) NOT NULL AUTO_INCREMENT,
  `test_id` int(10) NOT NULL,
  `test_fee` double(10,2) NOT NULL,
  `consultation_fee` double(10,2) NOT NULL,
  `others` double(10,2) NOT NULL,
  `date` date NOT NULL,
  `remarks` text NOT NULL,
  PRIMARY KEY (`bill_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `doctor_bill`
--

INSERT INTO `doctor_bill` (`bill_id`, `test_id`, `test_fee`, `consultation_fee`, `others`, `date`, `remarks`) VALUES
(1, 9, 125.00, 75.00, 100.00, '2013-03-12', ''),
(2, 23, 100.00, 200.00, 300.00, '2013-03-22', 'this is doctor bil;l'),
(5, 24, 100.00, 200.00, 50.00, '2013-03-22', 'bnvnfchf');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(10) NOT NULL AUTO_INCREMENT,
  `admin_id` int(10) NOT NULL,
  `test_id` int(10) NOT NULL,
  `prod_id` int(10) NOT NULL,
  `order_date` date NOT NULL,
  `total` double(10,2) NOT NULL,
  `dispatch_date` date NOT NULL,
  `payment` double(10,2) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `admin_id`, `test_id`, `prod_id`, `order_date`, `total`, `dispatch_date`, `payment`, `status`) VALUES
(24, 1, 10, 1, '2013-03-18', 401.00, '2013-03-18', 401.00, 'Delivered'),
(25, 1, 10, 2, '2013-03-18', 0.00, '2013-03-18', 0.00, 'Pending'),
(26, 1, 10, 5, '2013-03-18', 0.00, '2013-03-18', 0.00, 'Pending'),
(27, 1, 0, 1, '2013-03-18', 300.00, '1970-01-01', 0.00, 'Pending'),
(28, 1, 0, 2, '2013-03-18', 1.00, '1970-01-01', 200.00, 'Pending'),
(29, 1, 0, 3, '2013-03-18', 2.00, '2013-03-18', 0.00, 'Pending'),
(30, 1, 10, 0, '2013-03-18', 3.00, '2013-03-18', 3.00, 'Delivered'),
(31, 1, 10, 2, '2013-03-18', 0.00, '2013-03-18', 0.00, 'Pending'),
(32, 1, 10, 4, '2013-03-18', 0.00, '2013-03-18', 0.00, 'Pending'),
(33, 1, 13, 1, '2013-03-18', 300.00, '1970-01-01', 0.00, 'Pending'),
(34, 1, 13, 1, '2013-03-18', 300.00, '1970-01-01', 0.00, 'Pending'),
(35, 1, 13, 1, '2013-03-18', 300.00, '1970-01-01', 0.00, 'Pending'),
(36, 1, 13, 1, '2013-03-18', 300.00, '1970-01-01', 0.00, 'Pending'),
(37, 1, 13, 1, '2013-03-18', 300.00, '1970-01-01', 0.00, 'Pending'),
(38, 1, 13, 1, '2013-03-18', 300.00, '1970-01-01', 0.00, 'Pending'),
(39, 1, 12, 4, '2013-03-20', 400.00, '2013-03-20', 400.00, 'pending'),
(40, 1, 12, 4, '2013-03-21', 400.00, '2013-03-21', 400.00, 'Pending'),
(41, 1, 12, 1, '2013-03-22', 300.00, '2013-03-23', 200.00, 'Pending'),
(42, 1, 12, 1, '2013-03-22', 300.00, '2013-03-22', 100.00, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `pat_id` int(10) NOT NULL AUTO_INCREMENT,
  `admin_id` int(10) NOT NULL,
  `pat_name` varchar(30) NOT NULL,
  `email_id` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(25) NOT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`pat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pat_id`, `admin_id`, `pat_name`, `email_id`, `password`, `dob`, `gender`, `address`, `contact`, `created_at`) VALUES
(15, 0, 'Vaibhava Nayak ', 'optimist.nayak@gmail.com', '789', '1970-01-01', 'Male', 'Boloor, Mangalore-03', '8971887236', '0000-00-00'),
(17, 0, 'Ajith Acharya', 'vaibhava.nayak@gmail.coma', '4321', '0000-00-00', 'Male', '', '8050304447', '0000-00-00'),
(20, 0, 'Ajith Acharya', 'vaibhava.nayak@gmail.coma', '4321', '0000-00-00', 'Male', '', '8050304447', '0000-00-00'),
(31, 0, 'Daddhu', 'ajithacharya@ymail.com', '1234567890', '1992-08-24', 'Male', 'Yeyyadi,Mangalore-04', '1234567890', '0000-00-00'),
(32, 0, 'Ajith Acharya', 'ajithacharya@ymail.com', '1234', '1992-08-24', 'Male', 'Yeyyadi, Mangalore', '8971887236', '0000-00-00'),
(33, 1, 'Dadhu acharya', '', '', '1992-08-24', 'Male', 'mangalore', '8971887236', '0000-00-00'),
(35, 0, 'Ajith Acharya', 'ajithacharya@yymail.com', '08242212440', '0000-00-00', 'Male', '', '08242212440', '2013-03-21'),
(36, 0, 'Ajith Acharya', 'ajithacharya@ymail.com', '08242212440', '0000-00-00', 'Male', '', '08242212440', '2013-03-21'),
(37, 0, 'Ajith Acharya', 'ajithacharya@ymail.com', '08242212440', '0000-00-00', 'Male', '', '08242212440', '2013-03-21'),
(38, 0, 'Ajith Acharya', 'ajithacharya@ymail.com', '08242212440', '0000-00-00', 'Male', '', '08242212440', '2013-03-21'),
(39, 0, 'Ajith Acharya', 'ajithacharya@ymail.com', '08242212440', '0000-00-00', 'Male', '', '08242212440', '2013-03-21'),
(40, 0, 'Ajith Acharya', 'ajithacharya@ymail.com', '08242212440', '0000-00-00', 'Male', '', '8971887236', '2013-03-21'),
(41, 0, 'Ajith Acharya', 'ajithacharya@ymail.com', '08242212440', '0000-00-00', 'Male', '', '8971887236', '2013-03-21'),
(42, 0, 'Ajith Acharya', 'ajithacharya@ymail.com', '08242212440', '0000-00-00', 'Male', '', '8971887236', '2013-03-21'),
(43, 0, 'Ajith Acharya', 'ajithacharya@ymail.com', '08242212440', '0000-00-00', 'Male', '', '8971887236', '2013-03-21'),
(44, 0, 'Ajith Acharya', 'ajithacharya@ymail.com', '08242212440', '0000-00-00', 'Male', '', '8971887236', '2013-03-21'),
(45, 0, 'Ajith Acharya', 'ajithacharya@ymail.com', '08242212440', '0000-00-00', 'Male', '', '8971887236', '2013-03-21'),
(46, 0, 'Ajith Acharya', 'ajithacharya@ymail.com', '08242212440', '0000-00-00', 'Male', '', '8971887236', '2013-03-21'),
(47, 0, 'Ajith Acharya', 'ajithacharya@ymail.com', '08242212440', '0000-00-00', 'Male', '', '8971887236', '2013-03-21'),
(49, 0, 'peter hudson', 'peterh@gmail.com', 'q1w2e3r4/', '0000-00-00', 'Male', '', '9876543210', '2013-03-21'),
(50, 0, 'jack king', 'jack@gmail.com', '98765432100', '0000-00-00', 'Male', '', '98765432100', '2013-03-21'),
(51, 0, 'mahesh kamar', 'mah@gmail.com', 'qwertyuiop', '0000-00-00', 'Male', 'mlore karnataka', '9874563210', '2013-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE IF NOT EXISTS `prescription` (
  `sl_no` int(10) NOT NULL AUTO_INCREMENT,
  `test_id` int(10) NOT NULL,
  `no_of_days` text NOT NULL,
  `medicines` text NOT NULL,
  `mg` text NOT NULL,
  `dosage` text NOT NULL,
  `remarks` text NOT NULL,
  PRIMARY KEY (`sl_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`sl_no`, `test_id`, `no_of_days`, `medicines`, `mg`, `dosage`, `remarks`) VALUES
(1, 1, '2', '5', '6', '3', '3'),
(2, 6, 'a:18:{i:0;s:1:"2";i:1;s:1:"2";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:8:"sadasdas";i:1;s:8:"eye drop";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:3:"500";i:1;s:3:"500";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:5:"1-1-1";i:1;s:5:"1-1-1";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'gfg'),
(3, 6, 'a:18:{i:0;s:1:"2";i:1;s:1:"2";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:8:"sadasdas";i:1;s:8:"eye drop";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:3:"500";i:1;s:3:"500";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:5:"1-1-1";i:1;s:5:"1-1-1";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', ''),
(4, 6, 'a:18:{i:0;s:1:"2";i:1;s:1:"2";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:8:"sadasdas";i:1;s:8:"eye drop";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:3:"500";i:1;s:3:"500";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:5:"1-1-1";i:1;s:5:"1-1-1";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', ''),
(5, 6, 'a:18:{i:0;s:1:"2";i:1;s:1:"2";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:8:"sadasdas";i:1;s:8:"eye drop";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:3:"500";i:1;s:3:"500";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:5:"1-1-1";i:1;s:5:"1-1-1";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', ''),
(6, 7, 'a:18:{i:0;s:1:"2";i:1;s:1:"2";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:4:"swdw";i:1;s:8:"eye drop";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:3:"626";i:1;s:3:"500";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:5:"1-1-1";i:1;s:5:"1-1-1";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'wccws'),
(7, 8, 'a:18:{i:0;s:1:"2";i:1;s:1:"5";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:3:"gfg";i:1;s:11:"sadasdasjhu";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:4:"1515";i:1;s:2:"55";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:5:"1-1-1";i:1;s:5:"1-1-1";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'rgrg'),
(8, 9, 'a:18:{i:0;s:2:"20";i:1;s:2:"10";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:5:"fxgfx";i:1;s:8:"eye drop";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:2:"45";i:1;s:3:"500";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:5:"1-1-1";i:1;s:5:"1-1-1";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'hfh'),
(9, 10, 'a:18:{i:0;s:2:"20";i:1;s:1:"2";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:8:"sadasdas";i:1;s:5:"fxgfx";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:4:"1515";i:1;s:2:"45";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'a:18:{i:0;s:5:"1-1-1";i:1;s:5:"1-1-1";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";i:9;s:0:"";i:10;s:0:"";i:11;s:0:"";i:12;s:0:"";i:13;s:0:"";i:14;s:0:"";i:15;s:0:"";i:16;s:0:"";i:17;s:0:"";}', 'wferf'),
(10, 21, 'a:2:{i:0;s:1:"5";i:1;s:1:"5";}', 'a:2:{i:0;s:7:"Tablets";i:1;s:5:"Syrup";}', 'a:2:{i:0;s:3:"1.5";i:1;s:3:"1.5";}', 'a:2:{i:0;s:5:"1-1-1";i:1;s:5:"1-1-1";}', 'good'),
(11, 22, 'a:1:{i:0;s:1:"5";}', 'a:1:{i:0;s:7:"Tablets";}', 'a:1:{i:0;s:3:"1.5";}', 'a:1:{i:0;s:5:"1-1-1";}', 'good'),
(12, 23, 'a:2:{i:0;s:1:"2";i:1;s:1:"1";}', 'a:2:{i:0;s:5:"abced";i:1;s:3:"xyz";}', 'a:2:{i:0;s:2:"10";i:1;s:1:"1";}', 'a:2:{i:0;s:2:"23";i:1;s:1:"2";}', 'this is prescriptionj recolrd'),
(13, 24, 'a:5:{i:0;s:1:"2";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";}', 'a:5:{i:0;s:5:"abced";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";}', 'a:5:{i:0;s:2:"10";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";}', 'a:5:{i:0;s:2:"23";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";}', 'tete'),
(14, 24, 'a:5:{i:0;s:1:"2";i:1;s:1:"3";i:2;s:1:"2";i:3;s:0:"";i:4;s:0:"";}', 'a:5:{i:0;s:5:"abced";i:1;s:5:"abced";i:2;s:4:"bxcb";i:3;s:0:"";i:4;s:0:"";}', 'a:5:{i:0;s:2:"10";i:1;s:2:"10";i:2;s:2:"10";i:3;s:0:"";i:4;s:0:"";}', 'a:5:{i:0;s:2:"23";i:1;s:3:"250";i:2;s:2:"23";i:3;s:0:"";i:4;s:0:"";}', 'xyasas');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `prod_id` int(10) NOT NULL AUTO_INCREMENT,
  `branch_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `product_type` varchar(50) NOT NULL,
  `sub_type` varchar(25) NOT NULL,
  `image` varchar(100) NOT NULL,
  `color` varchar(20) NOT NULL,
  `cost` double(10,2) NOT NULL,
  `quantity` int(10) NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `branch_id`, `name`, `product_type`, `sub_type`, `image`, `color`, `cost`, `quantity`) VALUES
(1, 1, 'Clear', 'Contact Lens', 'Regular', 'regular.JPG', 'FFFFFF', 300.00, 100),
(2, 1, 'Clear d', 'Contact Lens', 'Disposable', 'disposable.jpg', 'FFFFFF', 200.00, 100),
(3, 1, 'Clear T', 'Contact Lens', 'Toric', 'toric.jpg', 'FFFFFF', 200.00, 100),
(4, 1, 'KRT', 'Lens', 'Kryptok', 'kryptok1.jpg', 'FFFFFF', 400.00, 100),
(5, 1, 'SV', 'Lens', 'Single Vision', 'Glass_Single_Vision.jpg', 'FCFFF0', 100.00, 100),
(6, 1, 'D B', 'Lens', 'D Bifocal', 'Glass_Bifocal_Lens.jpg', 'FCFFF7', 500.00, 150),
(7, 1, 'Ful ', 'Frames', 'Full', 'full.jpg', '1249FF', 800.00, 150),
(8, 1, 'SF', 'Frames', 'Supra', 'supra.JPG', 'A18348', 750.00, 150),
(9, 1, 'RF', 'Frames', 'Rimless', 'rimless.jpg', 'FFDB78', 950.00, 100),
(10, 2, 'KRPT', 'Lens', 'Kryptok', 'kryptok.jpg', 'FAFFFB', 600.00, 190),
(11, 2, 'SVL', 'Lens', 'Single Vision', 'Single_vision.jpg', 'FBFFF5', 800.00, 100),
(12, 2, 'DBF', 'Lens', 'D Bifocal', 'bifocal.jpg', 'FFFFFA', 800.00, 100),
(13, 2, 'FF', 'Frames', 'Full', 'full.jpg', 'FF3D0D', 800.00, 100),
(14, 2, 'SF', 'Frames', 'Supra', 'supra.jpg', 'F0D946', 950.00, 150);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `test_id` int(10) NOT NULL AUTO_INCREMENT,
  `app_id` int(10) NOT NULL,
  `sph` varchar(100) NOT NULL,
  `cyl` varchar(100) NOT NULL,
  `axis` varchar(100) NOT NULL,
  `remarks` text NOT NULL,
  `specs_req` varchar(10) NOT NULL,
  PRIMARY KEY (`test_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `app_id`, `sph`, `cyl`, `axis`, `remarks`, `specs_req`) VALUES
(10, 2, 'a:2:{i:0;s:4:"1.50";i:1;s:4:"1.20";}', 'a:2:{i:0;s:4:"1.10";i:1;s:4:"1.20";}', 'a:2:{i:0;s:2:"90";i:1;s:2:"90";}', 'sfef', 'Yes'),
(11, 3, 'a:2:{i:0;s:4:"1.50";i:1;s:4:"1.20";}', 'a:2:{i:0;s:4:"1.10";i:1;s:4:"1.20";}', 'a:2:{i:0;s:2:"90";i:1;s:2:"90";}', 'good', ''),
(12, 0, 'a:2:{i:0;s:0:"";i:1;s:0:"";}', 'a:2:{i:0;s:0:"";i:1;s:0:"";}', 'a:2:{i:0;s:0:"";i:1;s:0:"";}', '', ''),
(13, 4, 'a:2:{i:0;s:4:"1.50";i:1;s:4:"1.20";}', 'a:2:{i:0;s:4:"1.10";i:1;s:4:"1.20";}', 'a:2:{i:0;s:2:"90";i:1;s:2:"90";}', 'good', 'No'),
(14, 4, 'a:2:{i:0;s:4:"1.50";i:1;s:4:"1.20";}', 'a:2:{i:0;s:4:"1.10";i:1;s:4:"1.20";}', 'a:2:{i:0;s:2:"90";i:1;s:2:"90";}', 'good', 'No'),
(15, 5, 'a:2:{i:0;s:3:"1.0";i:1;s:3:"1.0";}', 'a:2:{i:0;s:3:"1.0";i:1;s:3:"1.0";}', 'a:2:{i:0;s:3:"1.0";i:1;s:3:"1.0";}', 'good', 'Yes'),
(16, 0, 'a:2:{i:0;s:3:"1.0";i:1;s:3:"1.0";}', 'a:2:{i:0;s:3:"1.0";i:1;s:3:"1.0";}', 'a:2:{i:0;s:3:"1.0";i:1;s:3:"1.0";}', 'good', 'Yes'),
(17, 6, 'a:2:{i:0;s:3:"1.0";i:1;s:3:"1.0";}', 'a:2:{i:0;s:3:"1.0";i:1;s:3:"1.0";}', 'a:2:{i:0;s:3:"1.0";i:1;s:3:"1.0";}', 'good', 'Yes'),
(18, 4, 'a:2:{i:0;s:0:"";i:1;s:0:"";}', 'a:2:{i:0;s:0:"";i:1;s:0:"";}', 'a:2:{i:0;s:0:"";i:1;s:0:"";}', '', ''),
(19, 4, 'a:2:{i:0;s:3:"1.0";i:1;s:3:"1.0";}', 'a:2:{i:0;s:3:"1.0";i:1;s:3:"1.0";}', 'a:2:{i:0;s:2:"10";i:1;s:2:"10";}', 'good', 'Yes'),
(20, 8, 'a:2:{i:0;s:3:"1.0";i:1;s:3:"1.0";}', 'a:2:{i:0;s:3:"1.0";i:1;s:3:"1.0";}', 'a:2:{i:0;s:3:"1.0";i:1;s:3:"1.0";}', 'good', 'Yes'),
(21, 9, 'a:2:{i:0;s:3:"1.0";i:1;s:3:"1.0";}', 'a:2:{i:0;s:3:"1.0";i:1;s:3:"1.0";}', 'a:2:{i:0;s:3:"1.0";i:1;s:3:"1.0";}', 'good', 'Yes'),
(22, 10, 'a:2:{i:0;s:3:"1.0";i:1;s:3:"1.0";}', 'a:2:{i:0;s:3:"1.0";i:1;s:3:"1.0";}', 'a:2:{i:0;s:3:"1.0";i:1;s:3:"1.0";}', 'good', 'Yes'),
(23, 15, 'a:2:{i:0;s:2:"10";i:1;s:2:"20";}', 'a:2:{i:0;s:2:"23";i:1;s:2:"41";}', 'a:2:{i:0;s:2:"50";i:1;s:2:"25";}', 'abcd xyyz', 'Yes'),
(24, 11, 'a:2:{i:0;s:2:"10";i:1;s:2:"20";}', 'a:2:{i:0;s:2:"23";i:1;s:2:"41";}', 'a:2:{i:0;s:2:"50";i:1;s:2:"25";}', 'rfewtr', 'No');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
