-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 09, 2021 at 03:03 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `ams_bba_student`
--

CREATE TABLE IF NOT EXISTS `ams_bba_student` (
  `student_id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `student_name` varchar(50) DEFAULT NULL,
  `mother_name` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `pincode` varchar(50) DEFAULT NULL,
  `mobile_no` varchar(50) DEFAULT NULL,
  `father_mobile_no` varchar(50) DEFAULT NULL,
  `email_id` varchar(50) DEFAULT NULL,
  `per_10` varchar(50) DEFAULT NULL,
  `per_12` varchar(50) DEFAULT NULL,
  `per_diploma` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `class` varchar(50) DEFAULT NULL,
  `last_college` varchar(100) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `dob` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `eligibility` varchar(50) DEFAULT NULL,
  `creamy_layer` varchar(50) DEFAULT NULL,
  `aadhar_no` varchar(50) DEFAULT NULL,
  `year` varchar(50) DEFAULT NULL,
  `total_fee` varchar(50) DEFAULT NULL,
  `paid_fee` varchar(50) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ams_bba_student`
--

INSERT INTO `ams_bba_student` (`student_id`, `student_name`, `mother_name`, `address`, `pincode`, `mobile_no`, `father_mobile_no`, `email_id`, `per_10`, `per_12`, `per_diploma`, `department`, `class`, `last_college`, `category`, `dob`, `gender`, `eligibility`, `creamy_layer`, `aadhar_no`, `year`, `total_fee`, `paid_fee`, `date`) VALUES
(1, 'sukanya kuvar', 'makarand kuvar', 'pune', '123456', '8765678765', '7654323456', 'sukanya.kuvar@gmail.com', '77', '', '54', 'BBA', 'FY', 'atss', 'OPEN', '2021-05-10', 'female', '65456787651', 'yes', '654567876541', '2021', '34000', '0', '2021/05/12'),
(2, 'makarand kuvar', 'sushila kuvar', 'pune', '654765', '8765456765', '8765456765', 'makarand.kuvar@gmail.com', '87%', '87%', '67%', 'BBA', 'TY', 'shiwaji', 'OPEN', '2021-05-18', 'male', '87654567656', 'no', '876545676598', '2021', '35000', '35000', '2021/05/13');

-- --------------------------------------------------------

--
-- Table structure for table `ams_bca_student`
--

CREATE TABLE IF NOT EXISTS `ams_bca_student` (
  `student_id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `student_name` varchar(50) DEFAULT NULL,
  `mother_name` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `pincode` varchar(50) DEFAULT NULL,
  `mobile_no` varchar(50) DEFAULT NULL,
  `father_mobile_no` varchar(50) DEFAULT NULL,
  `email_id` varchar(50) DEFAULT NULL,
  `per_10` varchar(50) DEFAULT NULL,
  `per_12` varchar(50) DEFAULT NULL,
  `per_diploma` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `class` varchar(50) DEFAULT NULL,
  `last_college` varchar(100) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `dob` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `eligibility` varchar(50) DEFAULT NULL,
  `creamy_layer` varchar(50) DEFAULT NULL,
  `aadhar_no` varchar(50) DEFAULT NULL,
  `year` varchar(50) DEFAULT NULL,
  `total_fee` varchar(50) DEFAULT NULL,
  `paid_fee` varchar(50) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ams_bca_student`
--

INSERT INTO `ams_bca_student` (`student_id`, `student_name`, `mother_name`, `address`, `pincode`, `mobile_no`, `father_mobile_no`, `email_id`, `per_10`, `per_12`, `per_diploma`, `department`, `class`, `last_college`, `category`, `dob`, `gender`, `eligibility`, `creamy_layer`, `aadhar_no`, `year`, `total_fee`, `paid_fee`, `date`) VALUES
(1, 'makarand', 'sushila', 'pune', '987678', '9876567654', '8765465787', 'makarand.kuvar@gmail.com', '98', '98', '65', 'BCA', 'SY', 'hsggs', 'NT-D', '2021-05-11', 'male', '65765434567', 'yes', '876789543245', '2021', '34000', '0', '2021/05/13');

-- --------------------------------------------------------

--
-- Table structure for table `ams_bcs_student`
--

CREATE TABLE IF NOT EXISTS `ams_bcs_student` (
  `student_id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `student_name` varchar(50) DEFAULT NULL,
  `mother_name` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `pincode` varchar(50) DEFAULT NULL,
  `mobile_no` varchar(50) DEFAULT NULL,
  `father_mobile_no` varchar(50) DEFAULT NULL,
  `email_id` varchar(50) DEFAULT NULL,
  `per_10` varchar(50) DEFAULT NULL,
  `per_12` varchar(50) DEFAULT NULL,
  `per_diploma` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `class` varchar(50) DEFAULT NULL,
  `last_college` varchar(100) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `dob` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `eligibility` varchar(50) DEFAULT NULL,
  `creamy_layer` varchar(50) DEFAULT NULL,
  `aadhar_no` varchar(50) DEFAULT NULL,
  `year` varchar(50) DEFAULT NULL,
  `total_fee` varchar(50) DEFAULT NULL,
  `paid_fee` varchar(50) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `ams_bcs_student`
--

INSERT INTO `ams_bcs_student` (`student_id`, `student_name`, `mother_name`, `address`, `pincode`, `mobile_no`, `father_mobile_no`, `email_id`, `per_10`, `per_12`, `per_diploma`, `department`, `class`, `last_college`, `category`, `dob`, `gender`, `eligibility`, `creamy_layer`, `aadhar_no`, `year`, `total_fee`, `paid_fee`, `date`) VALUES
(2, 'sukanya kuvar', 'nayana kuvar', 'pune', '412106', '9876565434', '8765654323', 'sukanya.kuvar@gmail.com', '77.60', '76', '87', 'BCS', 'FY', 'atss', 'OPEN', '2021-05-06', 'female', '12345678909', 'no', '123456787654', '2021', '34000', '0', '2021/05/12'),
(3, 'sukanya kuvar', 'nayana kuvar', 'pune', '412106', '9876565434', '8765654323', 'sukanya.kuvar@gmail.com', '77.60', '76', '87', 'BCS', 'FY', 'atss', 'OPEN', '2021-05-06', 'female', '12345678909', 'no', '123456787654', '2021', '34000', '0', '2021/05/12'),
(4, 'sukanya kkuvar', 'makarand kuvar', 'pune', '345678', '9876543254', '7865456765', 'sukanya.kuvar@gmail.com', '99', '76', '87', 'BCS', 'SY', 'atss', 'OPEN', '2021-05-22', 'female', '98765456743', 'no', '657654324567', '2021', '34000', '0', '2021/05/12'),
(5, 'sukanya kuvar', 'makarand kuvar', 'pune', '123456', '8765678765', '7654323456', 'sukanya.kuvar@gmail.com', '77', '', '54', 'BCS', 'TY', 'atss', 'OPEN', '2021-05-10', 'female', '65456787651', 'yes', '654567876541', '2021', '35000', '34000', '2021/05/12'),
(6, 'makarand', 'fgr', 'rg', '765465', '7656787654', '7656787654', 'makarand.kuvar@gmail.com', '87', '76', '87', 'BCS', 'FY', 'jhg', 'DT-A', '2021-05-10', 'male', '76567876546', 'no', '765678765465', '2021', '34000', '0', '2021/05/13'),
(7, 'nayana kuvar', 'alka bundele', 'pune', '123567', '9874325676', '9874325676', 'nayana.kuvar@gmail.com', '87', '98', '', 'BCS', 'FY', 'ghtyu', 'OPEN', '2021-05-26', 'female', '98743256767', 'no', '987432567698', '2020', '30000', '10000', '2021/05/15');

-- --------------------------------------------------------

--
-- Table structure for table `ams_student_record`
--

CREATE TABLE IF NOT EXISTS `ams_student_record` (
  `student_id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `s_username` varchar(30) NOT NULL,
  `s_password` varchar(30) DEFAULT NULL,
  `s_confirm_password` varchar(30) DEFAULT NULL,
  `s_first_name` varchar(30) DEFAULT NULL,
  `s_middle_name` varchar(30) DEFAULT NULL,
  `s_last_name` varchar(30) DEFAULT NULL,
  `s_mobile_no` varchar(30) DEFAULT NULL,
  `s_address` varchar(50) DEFAULT NULL,
  `s_gender` varchar(30) DEFAULT NULL,
  `s_dob` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ams_student_record`
--

INSERT INTO `ams_student_record` (`student_id`, `s_username`, `s_password`, `s_confirm_password`, `s_first_name`, `s_middle_name`, `s_last_name`, `s_mobile_no`, `s_address`, `s_gender`, `s_dob`) VALUES
(1, 'sukanya.kuvar@gmail.com', 'Suku@123', 'Suku@123', 'sukanya', 'makarand', 'kuvar', '9850634553', 'vadgaon', 'female', '1999-07-31'),
(2, 'makarand.kuvar@gmail.com', 'Makarand@123', 'Makarand@123', 'MAKARAND', 'VASANT', 'KUVAR', '9922166605', 'VADGAON', 'male', '1965-06-08'),
(3, 'nayana.kuvar@gmail.com', 'Nayana@123', 'Nayana@123', 'NAYANA', 'MAKARAND', 'KUVAR', '9922166605', 'VADGAON MAVAL', 'female', '1976-08-04'),
(4, 'nishant.kuvar@gmail.com', 'Nishant@123', 'Nishant@123', 'Nishant', 'Makarand', 'Kuvar', '9922166605', 'vadgaon MAVAL', 'male', '1996-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `ams_year_fee_record`
--

CREATE TABLE IF NOT EXISTS `ams_year_fee_record` (
  `year_fee_id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `year` varchar(30) NOT NULL,
  `first_year_fee` varchar(30) NOT NULL,
  `second_year_fee` varchar(30) NOT NULL,
  `third_year_fee` varchar(30) NOT NULL,
  PRIMARY KEY (`year_fee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `ams_year_fee_record`
--

INSERT INTO `ams_year_fee_record` (`year_fee_id`, `year`, `first_year_fee`, `second_year_fee`, `third_year_fee`) VALUES
(1, '2019', '5466', '234', '463'),
(2, '2020', '30000', '31000', '32000'),
(5, '2021', '31000', '32000', '35000');
