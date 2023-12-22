-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 14, 2015 at 03:27 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `uname` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `aaid` int(11) NOT NULL AUTO_INCREMENT,
  `asdate` varchar(30) DEFAULT NULL,
  `uname` varchar(50) DEFAULT NULL,
  `file` varchar(200) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `course` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`aaid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`aaid`, `asdate`, `uname`, `file`, `title`, `course`) VALUES
(1, '14-Apr-2015', 'maddy', 'answer/bca rs 2nd sem july 2013 crc assignments.doc', 'C Lab - I', 'C Programming Language');

-- --------------------------------------------------------

--
-- Table structure for table `assign`
--

CREATE TABLE IF NOT EXISTS `assign` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `fid` int(11) DEFAULT NULL,
  `idate` varchar(30) DEFAULT NULL,
  `sdate` varchar(30) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `file` varchar(200) DEFAULT NULL,
  `course` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `assign`
--

INSERT INTO `assign` (`aid`, `fid`, `idate`, `sdate`, `title`, `file`, `course`) VALUES
(2, 1001, '13-Apr-2015', '28-Apr-2015', 'C Lab - I', 'assign/BCA (1) Assignment.doc', 'C Programming Language');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE IF NOT EXISTS `counter` (
  `fid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`fid`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(30) NOT NULL,
  `duration` varchar(50) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cid`, `cname`, `duration`) VALUES
(1, 'C Programming Language', '3 Months'),
(2, 'Core Java', '3 Months');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `pass` varchar(4) NOT NULL DEFAULT '1234',
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `course` varchar(30) NOT NULL,
  `contact` decimal(10,0) NOT NULL,
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1002 ;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`pass`, `fname`, `lname`, `gender`, `course`, `contact`, `fid`) VALUES
('123', 'Ajay', 'Srivastava', ' Male', 'C Programming Language', '9898989898', 1001);

-- --------------------------------------------------------

--
-- Table structure for table `lecture`
--

CREATE TABLE IF NOT EXISTS `lecture` (
  `lid` int(11) NOT NULL AUTO_INCREMENT,
  `course` varchar(30) DEFAULT NULL,
  `ldate` date DEFAULT NULL,
  `fid` int(11) DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL,
  `title` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `lecture`
--

INSERT INTO `lecture` (`lid`, `course`, `ldate`, `fid`, `file`, `title`) VALUES
(3, 'C Programming Language', '2015-04-13', 1001, 'upload/c in depth.pdf', 'Introduction of C');

-- --------------------------------------------------------

--
-- Table structure for table `newstable`
--

CREATE TABLE IF NOT EXISTS `newstable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `newstable`
--

INSERT INTO `newstable` (`id`, `news`) VALUES
(3, 'Register here on free of cost');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `cpass` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `course` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`uname`, `pass`, `cpass`, `name`, `gender`, `course`, `address`) VALUES
('maddy', '1234', '123', 'Manohar Bisht', 'Male', 'C Programming Language', 'Lko                                    		');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
