-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2018 at 10:31 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `feedback_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user`, `pass`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `message` text NOT NULL,
  `Date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `message`, `Date`) VALUES
(5, 'Sanc', 'sanchitsaxena@gmail.com', 6393332957, 'none', '2021-01-02 14:22:28'),
(6, 'Aman', 'amansrivastava@gmail.com', 7985739073, 'none', '2021-01-02 14:33:43');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_alias` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `programme` varchar(50) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(75) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `user_alias`, `Name`, `designation`, `programme`, `semester`, `email`, `password`, `mobile`, `date`, `status`) VALUES
(13, 'Sanc6393', 'Sanchit Saxena', 'Computer', 'B.Tech.', 'v', 'sanchitsaxena@gmail.com', 'sanchit', 6393332957, '2021-01-02 14:22:28', 0),
(14, 'Aman9622', 'Amanjot Singh', 'Computer', 'B.Tech.', 'v', 'amanjotsingh@gmail.com', 'amanjot', 9622383285, '2021-01-02 14:23:05', 0),
(15, 'Aman7985', 'Aman Srivastava', 'Computer', 'B.Tech.', 'v', 'amansrivastava@gmail.com', 'aman', 7985739073, '2021-01-02 14:23:37', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` varchar(50) NOT NULL,
  `faculty_id` varchar(50) NOT NULL,
  `Teacher provided the course outline having weekly content plan w` enum('5','4','3','2','1') NOT NULL,
  `Course objectives,learning outcomes and grading criteria are cle` enum('5','4','3','2','1') NOT NULL,
  `Course integrates throretical course concepts with the real worl` enum('5','4','3','2','1') NOT NULL,
  `Teacher is punctual,arrives on time and leaves on time` enum('5','4','3','2','1') NOT NULL,
  `Teacher is good at stimulating the interest in the course conten` enum('5','4','3','2','1') NOT NULL,
  `Teacher is good at explaining the subject matter` enum('5','4','3','2','1') NOT NULL,
  `Teacher's presentation was clear,loud ad easy to understand` enum('5','4','3','2','1') NOT NULL,
  `Teacher is good at using innovative teaching methods/ways` enum('5','4','3','2','1') NOT NULL,
  `Teacher is available and helpful during counseling hours` enum('5','4','3','2','1') NOT NULL,
  `Teacher has competed the whole course as per course outline` enum('5','4','3','2','1') NOT NULL,
  `Teacher was always fair and impartial:` enum('5','4','3','2','1') NOT NULL,
  `Assessments conducted are clearly connected to maximize learinin` enum('5','4','3','2','1') NOT NULL,
  `What I liked about the course` text NOT NULL,
  `Why I disliked about the course` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `student_id`, `faculty_id`, `Teacher provided the course outline having weekly content plan w`, `Course objectives,learning outcomes and grading criteria are cle`, `Course integrates throretical course concepts with the real worl`, `Teacher is punctual,arrives on time and leaves on time`, `Teacher is good at stimulating the interest in the course conten`, `Teacher is good at explaining the subject matter`, `Teacher's presentation was clear,loud ad easy to understand`, `Teacher is good at using innovative teaching methods/ways`, `Teacher is available and helpful during counseling hours`, `Teacher has competed the whole course as per course outline`, `Teacher was always fair and impartial:`, `Assessments conducted are clearly connected to maximize learinin`, `What I liked about the course`, `Why I disliked about the course`, `date`) VALUES
(16, 'sanchits.com', 'sanchitsaxena@gmail.com', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '\r\nddddddddddddd', 'aa', '2016-07-15'),
(17, 'amans@gmail.com', 'amansrivastava@gmail.com', '5', '3', '1', '5', '5', '3', '3', '3', '3', '5', '5', '5', '\r\n', '\r\n', '2016-07-15'),
(18, 'amanj@gmail.com', 'amanjotsingh@gmail.com', '5', '5', '5', '2', '1', '5', '5', '4', '5', '5', '5', '5', '\r\ndfdfdfdfdfd', '\r\n', '2016-07-17');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `notice_id` int(11) NOT NULL AUTO_INCREMENT,
  `attachment` varchar(255) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Date` datetime NOT NULL,
  PRIMARY KEY (`notice_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`notice_id`, `attachment`, `subject`, `Description`, `Date`) VALUES
(8, 'AteekCV_java (1).docx', 'aaaaa', 'dfdfdfd', '2016-07-03 12:39:35');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `programme` varchar(20) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `hobbies` varchar(40) NOT NULL,
  `image` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `regid` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  FULLTEXT KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pass`, `mobile`, `programme`, `semester`, `gender`, `hobbies`, `image`, `dob`, `regid`) VALUES
(10, 'Aman Srivastava', 'aman@gmail.com', '98d34c1758b15b5a359b69c2b08c5767', 9015501897, 'B.Tech', 'v', 'm', 'reading,playing', 'Jellyfish.jpg', '1961-09-15', '2147483647'),
(12, 'Sanchit Saxena', 'sanchit@gmail.com', '63dd3e154ca6d948fc380fa576343ba6', 9015501897, 'B.Tech', 'v', 'm', 'reading', 'Desert.jpg', '1965-10-15', '2016-07-13 15:52:01'),
(13, 'Amanjot Singh', 'amanjot@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 32457895212, 'B.Tech', 'v', 'f', 'reading', 'Koala - Copy.jpg', '1965-10-06', '2016-07-17 15:39:08'),
(14, 'test', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 989898989, 'B.Tech', 'v', 'm', 'reading,singin', 'Chrysanthemum.jpg', '1963-08-12', '2017-02-10 16:04:10');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
