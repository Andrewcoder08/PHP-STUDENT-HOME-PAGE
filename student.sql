-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2020 at 08:22 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `roll` varchar(10) NOT NULL,
  `admission` varchar(20) NOT NULL,
  `branch` varchar(15) NOT NULL,
  `class` varchar(10) NOT NULL,
  `year` int(2) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `subject1` varchar(20) NOT NULL,
  `subject2` varchar(20) NOT NULL,
  `subject3` varchar(20) NOT NULL,
  `subject4` varchar(20) NOT NULL,
  `subject5` varchar(20) NOT NULL,
  `subject6` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `email`, `phone`, `roll`, `admission`, `branch`, `class`, `year`, `gender`, `dob`, `subject1`, `subject2`, `subject3`, `subject4`, `subject5`, `subject6`) VALUES
('Ankit Bhawaj', 'a76187r7@gmail.com', '', '', '', '', '', 0, '', '0000-00-00', '', '', '', '', '', ''),
('Ankit Bhawaj', 'a768@gmail.com', '', '2', '', '', '', 0, '', '0000-00-00', 'Physics', '', '', '', '', ''),
('Ankit Bhawaj', 'a78@gmail.com', '', '', '', '', '', 0, '', '0000-00-00', '', '', '', '', '', ''),
('Ankit Bhardwaj', 'ab76158@gmail.com', '', '', '', '', '', 0, '', '0000-00-00', '', '', '', '', '', ''),
('Ankit Bhardwaj', 'ab76181@gmail.com', '', '', '', '', '', 0, '', '0000-00-00', '', '', '', '', '', ''),
('Ankit Bhardwaj', 'ab76182@gmail.com', '', '', '', '', '', 0, '', '0000-00-00', '', '', '', '', '', ''),
('Ankit Bhardwaj', 'ab7618@gmail.com', '', '', '', '', '', 0, '', '0000-00-00', '', '', '', '', '', ''),
('Arun Bhardwaj', 'arun@gmail.com', '9871028377', '1803213017', '2018bit1138', 'IT', 'IT-A', 3, 'Male', '1997-06-27', 'Physics', '', '', '', '', ''),
('', 'fghv@gmail.com', '', '', '', '', '', 0, '', '0000-00-00', '', '', '', '', '', ''),
('Manish Parashar', 'manish@gmail.com', '9833767387', '1803213016', '2018bit1137', 'IT', 'IT-A', 3, 'Male', '1999-08-23', '', '', '', '', '', ''),
('Ankit Bhardwaj', 'niju@temp-cloud.net', '', '1', '', '', '', 0, '', '0000-00-00', '', '', '', '', '', ''),
('Saksham Sharma', 'saksham@gmail.com', '9873562718', '1803213018', '2018bit1139', 'IT', 'IT-A', 3, 'Male', '2001-01-26', '', '', '', '', '', ''),
('Vishal Gaur', 'vishal@gmail.com', '9872765267', '1803213020', '2018bit1140', 'IT', 'IT-A', 3, 'Male', '2000-06-10', 'Mathematics', 'physics', 'Chemistry', 'Computer', 'Biology', 'English');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
