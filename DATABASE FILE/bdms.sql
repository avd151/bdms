-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2021 at 12:53 PM
-- Server version: 5.6.21
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `secyear`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `password`, `name`) VALUES
(2, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `announce`
--

CREATE TABLE IF NOT EXISTS `announce` (
`id` int(11) NOT NULL,
  `announcement` varchar(50) NOT NULL,
  `bloodneed` varchar(3) NOT NULL,
  `dat` date NOT NULL,
  `organizer` varchar(50) NOT NULL,
  `requirements` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announce`
--

INSERT INTO `announce` (`id`, `announcement`, `bloodneed`, `dat`, `organizer`, `requirements`) VALUES
(1, 'DEMO ANNOUNCEMENT', 'B+', '2018-06-24', 'Helping Hands', 'Weight at least 50kg, No alcohol intake in 24hrs prior to donation, light meal should be taken before donation, be in good health, must be 18 years old and must have at least 3 month interval than the last donation.'),
(2, 'URGENT CASE: Serious Accident Condition', 'B-', '2021-03-26', 'City Hospital', 'Must be in good health and feeling very well. Must weigh at least 110 lbs.');

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE IF NOT EXISTS `blood` (
`id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `weight` int(11) NOT NULL,
  `bloodgroup` varchar(3) NOT NULL,
  `address` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `bloodqty` int(11) NOT NULL,
  `collection` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`id`, `name`, `gender`, `dob`, `weight`, `bloodgroup`, `address`, `contact`, `bloodqty`, `collection`) VALUES
(3, 'shawn mendez', 'M', '1997-05-26', 60, 'B-', 'los', '8521479633', 310, '2018-02-20'),
(8, 'bruno den', 'M', '1991-05-26', 88, 'O+', 'demo address', '8555555545', 360, '2016-05-08'),
(9, 'Tom Filler', 'M', '1988-06-14', 69, 'AB+', 'Deo Adr', '7854447854', 312, '2020-12-30'),
(10, 'Elizabeth', 'F', '1990-02-12', 59, 'AB-', 'San Andrq', '8555554585', 310, '2020-12-30'),
(11, 'Shyaron', 'F', '1996-02-02', 60, 'B+', 'Demo Address', '7878787850', 360, '2020-12-29'),
(12, 'Harry Den', 'M', '1997-01-05', 70, 'B+', 'Demo', '8521112450', 310, '2020-12-29'),
(13, 'Tony Stank', 'M', '1980-03-03', 79, 'B+', 'CA', '8547778500', 312, '2020-12-27'),
(14, 'Stephen Strange', 'M', '1990-12-24', 69, 'O+', 'Demo', '8545554700', 310, '2020-12-27'),
(15, 'Steve Trevor', 'M', '1995-06-15', 75, 'O-', 'Demo Addresss', '7454447410', 311, '2021-01-05'),
(16, 'Martin', 'M', '1986-11-11', 85, 'AB+', 'demo', '8545557854', 310, '2021-01-05'),
(17, 'Russo', 'M', '1975-05-05', 80, 'O-', 'demooo', '7454447854', 360, '2021-01-02');

-- --------------------------------------------------------

--
-- Table structure for table `campaigndb`
--

CREATE TABLE IF NOT EXISTS `campaigndb` (
`id` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `oname` varchar(50) NOT NULL,
  `phn` int(10) NOT NULL,
  `cdate` date NOT NULL,
  `descp` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campaigndb`
--

INSERT INTO `campaigndb` (`id`, `cname`, `oname`, `phn`, `cdate`, `descp`) VALUES
(8, 'Saving Lives Together', 'demo organizer', 1597534560, '2018-06-21', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE IF NOT EXISTS `donor` (
`id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `guardiansname` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `weight` int(11) NOT NULL,
  `bloodgroup` varchar(3) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `name`, `guardiansname`, `gender`, `dob`, `weight`, `bloodgroup`, `email`, `address`, `contact`, `username`, `password`) VALUES
(18, 'Demo User', 'demo', 'M', '2020-09-03', 51, 'b+', 'demo@demo.com', 'demo', '8520002500', 'demo', 'demo'),
(19, 'Harry Den', 'Stephen Den', 'M', '1998-06-17', 70, 'B+', 'harry.den20@gmail.co', 'Demo Address', '7854445420', 'harry', 'pass'),
(20, 'Will Williams', 'Reth R Williams', 'M', '1996-07-16', 70, 'B+', 'williams@gmail.com', 'Demo Address', '0248887540', 'williams', 'williams'),
(21, 'John Doe', 'Kevin Doe', 'M', '1991-12-09', 69, 'AB+', 'doejohn@gmail.com', '905  Chandler Hollow', '7854445470', 'johnd', 'password'),
(22, 'Ramona Jr Pippin', 'Noramo Pippin', 'F', '1995-02-22', 55, 'O-', 'pippin@gmail.com', '3237  Drummond Stree', '7854445200', 'pippin', 'password'),
(23, 'Robert', 'Simon L Berg', 'M', '1994-06-21', 82, 'AB-', 'robert@gmail.com', '524  Duff Avenue', '2547778452', 'robert', 'robert');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `donorname` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `donorname`) VALUES
(1, 'user', 'pass', 'harryden');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `announce`
--
ALTER TABLE `announce`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaigndb`
--
ALTER TABLE `campaigndb`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `announce`
--
ALTER TABLE `announce`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `campaigndb`
--
ALTER TABLE `campaigndb`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
