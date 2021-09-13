-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 29, 2021 at 07:16 AM
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
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

DROP TABLE IF EXISTS `employer`;
CREATE TABLE IF NOT EXISTS `employer` (
  `companyname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `type` text NOT NULL,
  `about` varchar(2000) NOT NULL,
  `logo` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`companyname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobapplied`
--

DROP TABLE IF EXISTS `jobapplied`;
CREATE TABLE IF NOT EXISTS `jobapplied` (
  `job_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `id` int(11) NOT NULL DEFAULT '0',
  `companyname` varchar(50) NOT NULL,
  PRIMARY KEY (`username`,`job_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobdetails`
--

DROP TABLE IF EXISTS `jobdetails`;
CREATE TABLE IF NOT EXISTS `jobdetails` (
  `companyname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `mobile` int(11) NOT NULL,
  `type` text NOT NULL,
  `jobtitle` varchar(50) NOT NULL,
  `jobdescription` varchar(500) NOT NULL,
  `joblocation` text NOT NULL,
  `salary` int(11) NOT NULL,
  `vacancies` int(11) NOT NULL,
  `qualification` text NOT NULL,
  `percentage` int(11) NOT NULL,
  `postedon` date NOT NULL,
  `lastdate` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`job_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_details`
--

DROP TABLE IF EXISTS `jobseeker_details`;
CREATE TABLE IF NOT EXISTS `jobseeker_details` (
  `username` varchar(50) NOT NULL,
  `qualification` text NOT NULL,
  `coursename` text NOT NULL,
  `collname` varchar(50) NOT NULL,
  `percentage` int(11) NOT NULL,
  `specializadarea` varchar(50) NOT NULL,
  `relocate` text NOT NULL,
  `organisation` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL,
  `cv` text NOT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `joobseeker_registration`
--

DROP TABLE IF EXISTS `joobseeker_registration`;
CREATE TABLE IF NOT EXISTS `joobseeker_registration` (
  `username` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` int(11) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `joobseeker_registration`
--

INSERT INTO `joobseeker_registration` (`username`, `fname`, `lname`, `password`, `mobile`) VALUES
('', 'vishal', 'mahto', 'vishal07', 799110188);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
