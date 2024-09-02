-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2020 at 08:30 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `divacode`
--

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `stumail` varchar(50) NOT NULL,
  `question` varchar(300) DEFAULT NULL,
  `qfile` text DEFAULT NULL,
  `reply` varchar(300) DEFAULT NULL,
  `rfile` text DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id`, `email`, `stumail`, `question`, `qfile`, `reply`, `rfile`, `status`) VALUES
(12, 'anjali@cmrit.ac.in', 'nav@gmail.com', 'image uplod check>??', 'img/img2.jpg', NULL, NULL, 'NotCleared'),
(36, 'sarah@gmail.com', 'nav@gmail.com', NULL, 'img/img6.png', 'sure dear, check out my course page.', NULL, 'Cleared'),
(37, 'anjali@cmrit.ac.in', 'nav@gmail.com', 'hello ma\'am please check this ', 'img/img5.png', 'yes you tube links sent in whatsapp group will be helpful', 'img/', 'Cleared'),
(45, 'anjali@cmrit.ac.in', 'nav@gmail.com', 'ma\'am my database values are not getting entered properly', 'img/img67.png', 'check this out . https://www.youtube.com/watch?v=wR0jg0eQsZA', NULL, 'Cleared'),
(56, 'sarah@gmail.com', 'nav@gmail.com', 'ma\'am , whatsapp links not working. can you share', NULL, 'yes sure dear', 'img/img6.png', 'Cleared'),
(65, 'anjali@cmrit.ac.in', 'nav@gmail.com', NULL, 'img/img7.png', NULL, 'img/img67.png', 'Cleared'),
(66, 'sarah@gmail.com', 'rucha@gmail.com', 'dsa doubts maam', NULL, 'okay check out you tube links', NULL, 'Cleared'),
(67, 'anjali@cmrit.ac.in', 'nav@gmail.com', 'can you share us some links to youtube', 'img/', 'yes sure, https://www.youtube.com/watch?v=w', 'img/', 'Cleared'),
(68, 'anjali@cmrit.ac.in', 'nav@gmail.com', 'graphics i m not thorough', 'img/img7.png', 'yes go thru you tube videos', 'img/', 'Cleared'),
(88, 'anjali@cmrit.ac.in', 'alice@gmail.com', 'how to fetch datbase values?', 'img/img67.jpg', NULL, NULL, NULL),
(89, 'anjali@cmrit.ac.in', '', NULL, NULL, NULL, NULL, NULL),
(90, 'anjali@cmrit.ac.in', 'rahul12@gmail.com', 'hello ma\'am i am not able to access the courses', NULL, NULL, NULL, 'NotCleared'),
(91, 'anjali@cmrit.ac.in', 'alice@gmail.com', 'ma\'am i am not able to fetch database values', 'img/img67.png', NULL, NULL, 'NotCleared'),
(96, 'sarah@gmail.com', 'rahul12@gmail.com', 'databse ? fetch?', 'img/img67.jpg', 'sure', NULL, 'Cleared'),
(98, 'alvin@gmail.com', 'alice@gmail.com', 'i am not able to access courses', NULL, 'okay check this', 'img/img67.png', 'Cleared');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `usn` varchar(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phone` int(12) DEFAULT NULL,
  `gender` enum('Female','Male') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`fname`, `lname`, `username`, `usn`, `email`, `password`, `phone`, `gender`) VALUES
('navya', 'rr', 'navyar', '1cr17cs079', 'nav@gmail.com', 'nav@12', 78654321, 'Female'),
('RUCHA', 'PATANI', 'ruchapatani', '1cr17cs089', 'rucha@gmail.com', 'ru@123', 2147483647, 'Female'),
('rageshwari', 'r', 'ragii', '1cr17cs09', 'ragi@gmail.com', 'ragi@12', 987654321, 'Female'),
('alice', 'parker', 'alicep', '1cr17cs098', 'alice@gm.com', 'all@12', 98765432, 'Male'),
('Rahul', 'mohan', 'rahulr', '1cr17cs22', 'rahul12gmail.com', 'rahul@12', 876354621, 'Male'),
('fred', 'naryn', 'fredd', '1cr17cs32', 'fred@gmail.com', 'fred@12', 87906554, 'Male'),
('eve', 'holt', 'eveh', '1cr17cs54', 'eveg@gmail.com', 'eve@12', 678946532, 'Female'),
('david', 'robyn', 'davidry', '1cr17cs60', 'david@gmail.com', 'david@12', 876905472, 'Male'),
('bob', 'stewart', 'bobs', '1cr17cs65', 'bob@gmail.com', 'bob@12', 78654321, 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phone` int(12) DEFAULT NULL,
  `gender` enum('Female','Male') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`fname`, `lname`, `username`, `id`, `email`, `password`, `phone`, `gender`) VALUES
('ragi', 'r', 'ragi', 12, 'ragi@gmail.com', 'ragi@12', 2147483647, 'Female'),
('sarah', 'khan', 'sarahk', 45, 'sarah@gmail.com', 'sarah@12', 768954332, 'Female'),
('Alvin', 'Shah', 'alvinsh', 123, 'alvin@gmail.com', 'alvin@12', 78654321, 'Male'),
('anjali', 'gupta', 'anjali.gupta', 8989, 'anjali@cmrit.ac.in', 'an@12', 2147483647, 'Female'),
('navya', 'r', 'navyar', 123445, 'navya@gmail.com', 'navya@123', 1234567788, 'Female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`usn`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
