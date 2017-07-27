-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2017 at 11:26 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digi_farmers`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `aid` int(11) NOT NULL,
  `answer` varchar(1000) NOT NULL,
  `aaid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aid`, `answer`, `aaid`) VALUES
(1, 'by planting them', 1),
(1, 'by hand', 2),
(2, '30 degree', 3),
(2, '35 degree', 4),
(3, 'rice', 5),
(3, 'wheat', 6),
(4, 'Amit', 7),
(4, 'Snehal', 8),
(1, 'by using new and modern technologies', 9);

-- --------------------------------------------------------

--
-- Table structure for table `auction`
--

CREATE TABLE `auction` (
  `id` int(11) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `sprice` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `image` varchar(80) NOT NULL,
  `currency` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `payoptions` varchar(30) NOT NULL,
  `contact` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auction`
--

INSERT INTO `auction` (`id`, `cname`, `sname`, `type`, `description`, `sprice`, `quantity`, `sdate`, `edate`, `image`, `currency`, `country`, `state`, `address`, `payoptions`, `contact`) VALUES
(1, 'on', 'Red Apple', '', '                    Good Quality Rice plantation            ', 15, 250, '2017-01-26', '2017-02-02', '2.jpg', ':DOllars', 'India', 'Maharashtra', '                                Address,address,address', 'on', 0),
(2, 'Cotton', 'Green Apple', '', '                    Good Quality Cotton plantation            ', 45, 350, '2017-01-28', '2017-02-02', '3.jpg', ':DOllars', 'India', 'Tamil Nadu', '                                Address,address,address', 'on', 0),
(3, 'Sugarcane', 'Green Apple', '', '                    Good Quality Sugarcane plantation            ', 60, 600, '2017-01-18', '2017-01-25', '5.jpg', ':DOllars', 'India', 'Tamil Nadu', '                                Address,address,address', 'on', 0),
(4, 'Jute', 'Green Apple', '', '                    Good Quality Jute plantation            ', 70, 400, '2017-01-18', '2017-01-30', '6.jpg', ':DOllars', 'India', 'Tamil Nadu', '                                Address,address,address', 'on', 0),
(5, 'Cotton', 'Red Apple', '', '                      bscjknds          ', 234, 56, '2017-01-20', '2017-01-31', '3.jpg', 'Dollars', 'India', 'Maharashtra', '                 address,address               ', 'on', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`id`, `email`, `password`, `amount`) VALUES
(2, 'aditisakhare@yahoo.co.in', 'ad123', 4567),
(3, 'aditisakhare@yahoo.co.in', 'ad123', 4567),
(3, 'aditisakhare@gmail.com', 'ad123', 567),
(3, 'hvirkar@gmail.com', 'sffj', 1000000),
(3, 'abhi@gmail.com', 'sffj', 10000000),
(4, 'abhi@gmail.com', 'dgr', 567);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `user_id` int(11) NOT NULL,
  `chat_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `msg` varchar(250) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`user_id`, `chat_id`, `name`, `msg`, `status`) VALUES
(1, 1, 'Harshit', 'Hello, I want to ask about a feature of this website.', 0),
(2, 2, 'Abhi', 'Eager to help you sir', 1),
(3, 5, 'Aditi', 'hie', 1),
(3, 6, 'Aditi', 'pls help me', 1),
(2, 7, 'Abhi', 'Ask your queries  here', 1),
(3, 8, 'Aditi', 'I want to ask how to increase the productivity of rice?', 1),
(2, 9, 'Abhi', 'Okay, We will have a meeting day after tomorrow', 1),
(3, 10, 'Aditi', 'Okay\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'asd', 'asd', 0, 'asd'),
(2, 'lajfalskj', 'ljsldjflkJ;LAKFJ;lkjjsdlj', 0, 'ljvnldsn lan'),
(3, 'lashfkajshdfkjhasdklfhkl', 'hkajshdfkljahsdklhakldshf', 9223372036854775807, 'askjdfhkasjldhfklashdfklhasdklfh');

-- --------------------------------------------------------

--
-- Table structure for table `crops`
--

CREATE TABLE `crops` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `c_ph_low` float NOT NULL,
  `c_ph_high` float NOT NULL,
  `climate` varchar(40) NOT NULL,
  `rainfall` float NOT NULL,
  `soil_type` varchar(40) NOT NULL,
  `pest` varchar(40) NOT NULL,
  `fertilizer` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crops`
--

INSERT INTO `crops` (`c_id`, `c_name`, `c_ph_low`, `c_ph_high`, `climate`, `rainfall`, `soil_type`, `pest`, `fertilizer`) VALUES
(1, 'tomato', 5.5, 7.5, 'Warm and Cool', 400, 'sandy loam', 'pest1', 'Burpee'),
(2, 'wheat', 7, 8, 'rain2', 200, 'soil2', 'pest2', 'fert2'),
(5, 'rice', 4, 5, 'climate3', 300, 'soil3', 'pest3', 'fert3'),
(6, 'strawberry', 3, 4, 'climate4', 600, 'soil4', 'pest4', 'fert4'),
(7, 'cotton', 5, 6, 'climate5', 400, 'soil5', 'pest5', 'fert5'),
(8, 'watermelon', 7, 8, 'climate6', 400, 'soil6', 'pest6', 'fert6'),
(9, 'lemon', 7, 8, 'climate7', 300, 'soil7', 'pest7', 'fert7'),
(16, 'carrot', 5, 6, 'climate8', 600, 'soil8', 'pest8', 'fert8'),
(18, 'raddish', 6, 7, 'climate9', 350, 'soil9', 'pest9', 'fert9'),
(19, 'potato', 4, 5, 'climate10', 400, 'soil10', 'pest10', 'fert10');

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE `farmers` (
  `f_id` int(11) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `m_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `dob` int(11) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `state` varchar(20) NOT NULL,
  `pincode` int(11) NOT NULL,
  `district` varchar(20) NOT NULL,
  `aadhar` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `jandhan` text NOT NULL,
  `no_male_child` int(11) DEFAULT NULL,
  `no_female_child` int(11) DEFAULT NULL,
  `no_male_adult` int(11) DEFAULT NULL,
  `no_female_adult` int(11) DEFAULT NULL,
  `no_male_workers` int(11) DEFAULT NULL,
  `no_female_workers` int(11) DEFAULT NULL,
  `acres` int(11) NOT NULL,
  `ph` int(11) NOT NULL,
  `confirm_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`f_id`, `f_name`, `m_name`, `l_name`, `dob`, `contact`, `state`, `pincode`, `district`, `aadhar`, `password`, `jandhan`, `no_male_child`, `no_female_child`, `no_male_adult`, `no_female_adult`, `no_male_workers`, `no_female_workers`, `acres`, `ph`, `confirm_code`) VALUES
(1, 'harshit', 'rohidas', 'virkar', 13, 7208478271, 'maha', 421201, 'khed', 23243, 13081996, '42354', NULL, NULL, NULL, NULL, NULL, NULL, 32, 32, 0),
(2, 'harshit', 'rohidas', 'virkar', 13, 7208478271, 'maha', 421201, 'khed', 23243, 13081996, '42354', NULL, NULL, NULL, NULL, NULL, NULL, 32, 32, 0);

-- --------------------------------------------------------

--
-- Table structure for table `farmer_crops`
--

CREATE TABLE `farmer_crops` (
  `f_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fertilizers`
--

CREATE TABLE `fertilizers` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `details` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fertilizers`
--

INSERT INTO `fertilizers` (`id`, `image`, `name`, `price`, `details`) VALUES
(2, 'fert1', 'ABC ', 1000, 'Fertilizers 1'),
(3, 'fert2', 'XYZ', 1500, 'Fertilizers 2'),
(4, 'fert3', 'JKL', 2000, 'Fertilizers 3');

-- --------------------------------------------------------

--
-- Table structure for table `mentor`
--

CREATE TABLE `mentor` (
  `m_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `qualifications` varchar(50) NOT NULL,
  `m_contact` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `village` varchar(40) NOT NULL,
  `district` varchar(40) NOT NULL,
  `state` varchar(40) NOT NULL,
  `m_pincode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentor`
--

INSERT INTO `mentor` (`m_id`, `name`, `qualifications`, `m_contact`, `email`, `password`, `village`, `district`, `state`, `m_pincode`) VALUES
(1, 'harshit', 'PHD IN Chemical Eng', 9999999999, 'harshit@gmail.com', '1234', 'village1', 'thane', 'maharastra', 500700),
(2, 'ajit', 'PHD IN Chemical', 8888888888, 'ajit@gmail.com', '1234', 'village2', 'thane', 'maharshtra', 500708),
(5, 'devesh', 'PHD in Farming', 7777777777, 'devesh@gmail.com', '1234', 'village3', 'Bandra', 'Maharshtra', 400000);

-- --------------------------------------------------------

--
-- Table structure for table `mentor_farmer`
--

CREATE TABLE `mentor_farmer` (
  `m_id` int(11) NOT NULL,
  `f_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(11) NOT NULL,
  `questions` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `questions`) VALUES
(1, 'How to grow crops'),
(2, 'What is current weather'),
(3, 'whose price is higher, rice or wheat?'),
(4, 'What is your name'),
(5, 'what is ur name');

-- --------------------------------------------------------

--
-- Table structure for table `technology`
--

CREATE TABLE `technology` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `details` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `technology`
--

INSERT INTO `technology` (`id`, `image`, `name`, `price`, `details`) VALUES
(3, 'tech1', 'Ploughing Machine', 150000, 'To cut a area of Grass'),
(4, 'tech2', 'Tractor Tyres', 20000, 'New Tyres');

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `details` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tools`
--

INSERT INTO `tools` (`id`, `image`, `name`, `price`, `details`) VALUES
(7, 'scissors', 'SCISSORS', 500, 'Cut Grass'),
(8, 'sickle', 'SCIKLE', 500, 'To Dig'),
(9, 'axe', 'AXE', 1000, 'To cut Tress');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`aaid`);

--
-- Indexes for table `auction`
--
ALTER TABLE `auction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crops`
--
ALTER TABLE `crops`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `fertilizers`
--
ALTER TABLE `fertilizers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mentor`
--
ALTER TABLE `mentor`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `technology`
--
ALTER TABLE `technology`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `aaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `auction`
--
ALTER TABLE `auction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `crops`
--
ALTER TABLE `crops`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `farmers`
--
ALTER TABLE `farmers`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `fertilizers`
--
ALTER TABLE `fertilizers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mentor`
--
ALTER TABLE `mentor`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `technology`
--
ALTER TABLE `technology`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tools`
--
ALTER TABLE `tools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
