-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2017 at 09:16 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `digi_farmers`
--

-- --------------------------------------------------------

--
-- Table structure for table `auction`
--

CREATE TABLE IF NOT EXISTS `auction` (
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auction`
--

INSERT INTO `auction` (`id`, `cname`, `sname`, `type`, `description`, `sprice`, `quantity`, `sdate`, `edate`, `image`, `currency`, `country`, `state`, `address`, `payoptions`, `contact`) VALUES
(1, 'on', 'Red Apple', '', '                    Good Quality Rice plantation            ', 15, 250, '2017-01-26', '2017-02-02', '2.jpg', ':DOllars', 'India', 'Maharashtra', '                                Address,address,address', 'on', 0),
(2, 'Cotton', 'Green Apple', '', '                    Good Quality Cotton plantation            ', 45, 350, '2017-01-28', '2017-02-02', '3.jpg', ':DOllars', 'India', 'Tamil Nadu', '                                Address,address,address', 'on', 0),
(3, 'Sugarcane', 'Green Apple', '', '                    Good Quality Sugarcane plantation            ', 60, 600, '2017-01-18', '2017-01-25', '5.jpg', ':DOllars', 'India', 'Tamil Nadu', '                                Address,address,address', 'on', 0),
(4, 'Jute', 'Green Apple', '', '                    Good Quality Jute plantation            ', 70, 400, '2017-01-18', '2017-01-30', '6.jpg', ':DOllars', 'India', 'Tamil Nadu', '                                Address,address,address', 'on', 0),
(5, 'Cotton', 'Red Apple', '', '                      bscjknds          ', 234, 56, '2017-01-20', '2017-01-31', '3.jpg', 'Dollars', 'India', 'Maharashtra', '                 address,address               ', 'on', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auction`
--
ALTER TABLE `auction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auction`
--
ALTER TABLE `auction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
