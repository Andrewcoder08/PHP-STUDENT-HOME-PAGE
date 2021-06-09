-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2020 at 06:38 PM
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
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `srno` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `roll` varchar(10) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL,
  `year` int(2) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`srno`, `name`, `email`, `roll`, `branch`, `class`, `year`, `subject`, `date`, `status`) VALUES
(1, 'Arun Bhardwaj', 'arun@gmail.com', '1803213017', 'IT', 'IT-A', 3, 'Mathematics', '2020-07-01', 'Present'),
(2, 'Manish Parashar', 'manish@gmail.com', '1803213016', 'IT', 'IT-A', 3, 'Mathematics', '2020-07-01', 'Absent'),
(3, 'Saksham Sharma', 'saksham@gmail.com', '1803213018', 'IT', 'IT-A', 3, 'Mathematics', '2020-07-01', 'Absent'),
(4, 'Vishal Gaur', 'vishal@gmail.com', '1803213020', 'IT', 'IT-A', 3, 'Mathematics', '2020-07-01', 'Absent'),
(5, 'Arun Bhardwaj', 'arun@gmail.com', '1803213017', 'IT', 'IT-A', 3, 'Mathematics', '2020-07-02', 'Present'),
(6, 'Manish Parashar', 'manish@gmail.com', '1803213016', 'IT', 'IT-A', 3, 'Mathematics', '2020-07-02', 'Absent'),
(7, 'Saksham Sharma', 'saksham@gmail.com', '1803213018', 'IT', 'IT-A', 3, 'Mathematics', '2020-07-02', 'Present'),
(8, 'Vishal Gaur', 'vishal@gmail.com', '1803213020', 'IT', 'IT-A', 3, 'Mathematics', '2020-07-02', 'Present'),
(9, 'Arun Bhardwaj', 'arun@gmail.com', '1803213017', 'IT', 'IT-A', 3, 'Physics', '2020-07-01', 'Present'),
(10, 'Manish Parashar', 'manish@gmail.com', '1803213016', 'IT', 'IT-A', 3, 'Physics', '2020-07-01', 'Present'),
(11, 'Saksham Sharma', 'saksham@gmail.com', '1803213018', 'IT', 'IT-A', 3, 'Physics', '2020-07-01', 'Absent'),
(12, 'Vishal Gaur', 'vishal@gmail.com', '1803213020', 'IT', 'IT-A', 3, 'Physics', '2020-07-01', 'Present'),
(13, 'Arun Bhardwaj', 'arun@gmail.com', '1803213017', 'IT', 'IT-A', 3, 'Physics', '2020-07-02', 'Present'),
(14, 'Manish Parashar', 'manish@gmail.com', '1803213016', 'IT', 'IT-A', 3, 'Physics', '2020-07-02', 'Present'),
(15, 'Saksham Sharma', 'saksham@gmail.com', '1803213018', 'IT', 'IT-A', 3, 'Physics', '2020-07-02', 'Present'),
(16, 'Vishal Gaur', 'vishal@gmail.com', '1803213020', 'IT', 'IT-A', 3, 'Physics', '2020-07-02', 'Present'),
(17, 'Arun Bhardwaj', 'arun@gmail.com', '1803213017', 'IT', 'IT-A', 3, 'Physics', '2020-07-03', 'Present'),
(18, 'Manish Parashar', 'manish@gmail.com', '1803213016', 'IT', 'IT-A', 3, 'Physics', '2020-07-03', 'Absent'),
(19, 'Saksham Sharma', 'saksham@gmail.com', '1803213018', 'IT', 'IT-A', 3, 'Physics', '2020-07-03', 'Present'),
(20, 'Vishal Gaur', 'vishal@gmail.com', '1803213020', 'IT', 'IT-A', 3, 'Physics', '2020-07-03', 'Present'),
(21, 'Arun Bhardwaj', 'arun@gmail.com', '1803213017', 'IT', 'IT-A', 3, 'Mathematics', '2020-07-09', 'Present'),
(22, 'Manish Parashar', 'manish@gmail.com', '1803213016', 'IT', 'IT-A', 3, 'Mathematics', '2020-07-09', 'Present'),
(23, 'Saksham Sharma', 'saksham@gmail.com', '1803213018', 'IT', 'IT-A', 3, 'Mathematics', '2020-07-09', 'Present'),
(24, 'Vishal Gaur', 'vishal@gmail.com', '1803213020', 'IT', 'IT-A', 3, 'Mathematics', '2020-07-09', 'Absent');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_info`
--

CREATE TABLE `faculty_info` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobileno.` varchar(15) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `age` int(3) NOT NULL,
  `dob` date NOT NULL,
  `employeeid` varchar(10) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `imgname` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_info`
--

INSERT INTO `faculty_info` (`name`, `email`, `mobileno.`, `gender`, `age`, `dob`, `employeeid`, `subject`, `imgname`) VALUES
('Ankit Bhardwaj', 'ab761821@gmail.com', '7078269370', 'Male', 20, '2000-12-09', '12345', 'Mathematics', 'Ankit.jpg'),
('Manish Parashar', 'manish456@gmail.com', '6397715395', 'Male', 20, '1999-08-23', '786786', 'Physics', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Email` varchar(30) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Email`, `Password`, `role`) VALUES
('a76187r7@gmail.com', '', 'student'),
('a768@gmail.com', '', 'student'),
('a78@gmail.com', '', 'student'),
('ab76158@gmail.com', '', 'student'),
('ab76181@gmail.com', '', 'student'),
('ab761821@gmail.com', 'ankit', 'faculty'),
('ab76182@gmail.com', '', 'student'),
('ab7618@gmail.com', '', 'student'),
('arun@gmail.com', '2018bit1138', 'student'),
('fghv@gmail.com', '', 'student'),
('Manish456@gmail.com', 'manish', 'faculty'),
('manish@gmail.com', '2018bit1137', 'student'),
('niju@temp-cloud.net', '', 'student'),
('saksham@gmail.com', '2018bit1139', 'student'),
('vishal@gmail.com', '2018bit1140', 'student');

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
  `dob` date DEFAULT NULL,
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
('Arun Bhardwaj', 'arun@gmail.com', '9871028377', '1803213017', '2018bit1138', 'IT', 'IT-A', 3, 'Male', '1997-06-27', 'Physics', 'Mathematics', '', '', '', ''),
('Manish Parashar', 'manish@gmail.com', '9833767387', '1803213016', '2018bit1137', 'IT', 'IT-A', 3, 'Male', '1999-08-23', 'Biology', 'Physics', 'Mathematics', 'PhE', 'English', 'Computer'),
('Saksham Sharma', 'saksham@gmail.com', '9873562718', '1803213018', '2018bit1139', 'IT', 'IT-A', 3, 'Male', '2001-01-26', 'Physics', 'Mathematics', 'c', 'C++', '', ''),
('Vishal Gaur', 'vishal@gmail.com', '9872765267', '1803213020', '2018bit1140', 'IT', 'IT-A', 3, 'Male', '2000-06-10', 'Mathematics', 'physics', 'Chemistry', 'Computer', 'Biology', 'English');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `faculty_info`
--
ALTER TABLE `faculty_info`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `srno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
