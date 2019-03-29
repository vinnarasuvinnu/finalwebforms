-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 29, 2019 at 09:19 AM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webforms`
--

-- --------------------------------------------------------

--
-- Table structure for table `form1`
--

CREATE TABLE `form1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `guide` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `phd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form1`
--

INSERT INTO `form1` (`id`, `name`, `email`, `dept`, `gender`, `guide`, `title`, `college`, `year`, `phd`) VALUES
(1, '', '', '', '', '', '', '', '', ''),
(2, '1', '1', '1', 'female', '11', '1', '11', '11', '1'),
(3, '1', '1', '1', 'female', '11', '1', '11', '11', '1');

-- --------------------------------------------------------

--
-- Table structure for table `form2`
--

CREATE TABLE `form2` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `paper` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `journal` varchar(255) NOT NULL,
  `publication` varchar(255) NOT NULL,
  `issn` varchar(255) NOT NULL,
  `ugc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form2`
--

INSERT INTO `form2` (`id`, `name`, `email`, `college`, `paper`, `author`, `dept`, `journal`, `publication`, `issn`, `ugc`) VALUES
(1, '', '', '', '', '', '', '', '', '', ''),
(2, '1', '1', '1', '', '1', '1', '11', '1', '1', '11');

-- --------------------------------------------------------

--
-- Table structure for table `form3`
--

CREATE TABLE `form3` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `regno` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `intern` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form3`
--

INSERT INTO `form3` (`id`, `name`, `regno`, `gender`, `dept`, `title`, `program`, `intern`, `link`) VALUES
(1, '', '', '', '', '', '', '', ''),
(2, '1', '', 'female', '1', '1', '1', 'Yes', '1'),
(3, '5', '', 'male', '5', '5', '5', 'Yes', '5');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `book` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `journal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `book`, `title`, `journal`) VALUES
(1, '', '', ''),
(2, '1', '11', ''),
(3, '5', '5', ''),
(4, '5', '55', ''),
(5, '7', '7', '77'),
(6, '8', '8', '8');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `dept`, `email`, `password`) VALUES
(12, 'can', 'bsc', 'v@gmail.com', 'pass'),
(13, 'vinvin', 'bsc', 'v@gmail.com', '23'),
(14, 'qqq', '', '', '22');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `batch` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `shift` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `reg_no` varchar(255) NOT NULL,
  `roll_no` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `t_name` varchar(255) NOT NULL,
  `e_name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `sex` varchar(255) NOT NULL,
  `blood` varchar(255) NOT NULL,
  `community` varchar(255) NOT NULL,
  `caste` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `marks` varchar(255) NOT NULL,
  `communication` varchar(255) NOT NULL,
  `p_address` varchar(255) NOT NULL,
  `contact1` varchar(255) NOT NULL,
  `contact2` varchar(255) NOT NULL,
  `aadhar` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `incharge` varchar(255) NOT NULL,
  `s1` varchar(255) NOT NULL,
  `s2` varchar(255) NOT NULL,
  `s3` varchar(255) NOT NULL,
  `s4` varchar(255) NOT NULL,
  `s5` varchar(255) NOT NULL,
  `s6` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `f_qual` varchar(255) NOT NULL,
  `m_qual` varchar(255) NOT NULL,
  `f_occup` varchar(255) NOT NULL,
  `m_occup` varchar(255) NOT NULL,
  `b_name` varchar(255) NOT NULL,
  `b_branch` varchar(255) NOT NULL,
  `a_no` varchar(255) NOT NULL,
  `b_code` varchar(255) NOT NULL,
  `ifsc` varchar(255) NOT NULL,
  `micr` varchar(255) NOT NULL,
  `hod` varchar(255) NOT NULL,
  `student` varchar(255) NOT NULL,
  `cgp1` varchar(255) NOT NULL,
  `cgp2` varchar(255) NOT NULL,
  `cgp3` varchar(255) NOT NULL,
  `cgp4` varchar(255) NOT NULL,
  `cgp5` varchar(255) NOT NULL,
  `cgp6` varchar(255) NOT NULL,
  `ph` varchar(255) NOT NULL,
  `others` varchar(255) NOT NULL,
  `hostel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `batch`, `department`, `course`, `shift`, `image`, `reg_no`, `roll_no`, `name`, `t_name`, `e_name`, `dob`, `sex`, `blood`, `community`, `caste`, `religion`, `nationality`, `school`, `marks`, `communication`, `p_address`, `contact1`, `contact2`, `aadhar`, `email`, `incharge`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `f_name`, `m_name`, `f_qual`, `m_qual`, `f_occup`, `m_occup`, `b_name`, `b_branch`, `a_no`, `b_code`, `ifsc`, `micr`, `hod`, `student`, `cgp1`, `cgp2`, `cgp3`, `cgp4`, `cgp5`, `cgp6`, `ph`, `others`, `hostel`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', '2019-03-27', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '', '', '', '', '', '', '', '', '', '', '2019-03-19', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '1', '1', '1', '11', 'pictures/vanitha.jpg', '1', '1', '', '1', '1', '2019-03-13', 'male', '1', '1', '', '', '', '', '', '1', '', '', '', 'aadhar', '', '1', '1', '1', '1', '1', '1', '1', '1', '1', '11', '1', '1', '1', '11', '1', '1', '11', '1', '1', '1', '11', '1', '11', '1', '1', 'cgp5', 'cgp6', '', '', ''),
(4, '1', '1', '1', '11', 'pictures/vanitha.jpg', '1', '1', '', '1', '1', '2019-03-13', 'male', '1', '1', '', '', '', '', '', '1', '', '', '', 'aadhar', '', '1', '1', '1', '1', '1', '1', '1', '1', '1', '11', '1', '1', '1', '11', '1', '1', '11', '1', '1', '1', '11', '1', '11', '1', '1', 'cgp5', 'cgp6', '', '', ''),
(5, '1', '1', '1', '11', 'pictures/vanitha.jpg', '1', '1', '', '1', '1', '2019-03-13', 'male', '1', '1', '1', '11', '1', '1', '1', '1', '1', '', '', 'aadhar', '', '1', '1', '1', '1', '1', '1', '1', '1', '1', '11', '1', '1', '1', '11', '1', '1', '11', '1', '1', '1', '11', '1', '11', '1', '1', 'cgp5', 'cgp6', '', '', ''),
(6, '1', '1', '1', '11', 'pictures/vanitha.jpg', '1', '1', '', '1', '1', '2019-03-13', 'male', '1', '1', '1', '11', '1', '1', '1', '1', '1', '1', '11', 'aadhar', '', '1', '1', '1', '1', '1', '1', '1', '1', '1', '11', '1', '1', '1', '11', '1', '1', '11', '1', '1', '1', '11', '1', '11', '1', '1', '11', '1', '1', '', ''),
(7, '1', '1', '1', '11', 'pictures/vanitha.jpg', '1', '1', '', '1', '1', '2019-03-13', 'male', '1', '1', '1', '11', '1', '1', '1', '1', '1', '1', '11', 'aadhar', '', '1', '1', '1', '1', '1', '1', '1', '1', '1', '11', '1', '1', '1', '11', '1', '1', '11', '1', '1', '1', '11', '1', '11', '1', '1', '11', '1', '1', '', ''),
(8, '3', '3', '3', '3', 'pictures/sireesha.jpg', '33', '3', 'null', '3', '3', '2019-03-14', 'male', '3', '3', '3', '3', '3', '33', '3', '33', '333', '3', '3', 'aadhar', '3@g', '3', '3', '33', '3', '3', '3', '3', '3', '33', '3', '3', '3', '3', '3', '3', '3', '3', '3', '', '23', '32', '3', '3', '3', '3', '33', '3', '3', '', ''),
(9, '9', '9', '9', '9', 'pictures/5.jpg', '9', '9', 'null', '9', '99', '2019-03-08', 'male', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', 'aadhar', '9@gmail.com', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '9', '99', '9', '9', '9', '9', '9', '9', '9', '99', '9', '9', '9', '9', '9', '9', '9', '9'),
(10, '8', '8', '8', '8', 'pictures/vanitha.jpg', '8', '8', 'null', '8', '8', '2019-03-27', 'male', '8', '8', '88', '8', '8', '8', '8', '8', '8', '8', '8', 'aadhar', '88@gmail.com', '8', '8', '8', '8', '88', '8', '', '88', '8', '8', '8', '8', '8', '8', '8', '88', '8', '8', '8', '8', '8', '8', '88', '8', '8', '8', '88', '8', '8', '88');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `password`) VALUES
('qqqq', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form1`
--
ALTER TABLE `form1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form2`
--
ALTER TABLE `form2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form3`
--
ALTER TABLE `form3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form1`
--
ALTER TABLE `form1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `form2`
--
ALTER TABLE `form2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `form3`
--
ALTER TABLE `form3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
