-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2016 at 08:59 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stylegentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contact_id` int(10) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `contact_comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contact_id`, `contact_name`, `contact_email`, `contact_comment`) VALUES
(7, 'harsh', 'harsh@gmail.com', 'good'),
(8, 'harsh', 'hrj@gmail.com', 'cool'),
(9, 'kush', 'kush@gmail.com', 'yoyo'),
(10, 'rg', 'ht@ergf.dsfgr', ''),
(11, 'sid', 'sidbarlota@gmail.com', 'hi'),
(12, 'harsh', 'hars@mail.com', '2dwe'),
(13, 'root', 'root@gmail.com', 'cool'),
(14, 'root', 'root@gmail.com', 'cool'),
(15, 'hrj', 'harsh.sonigara20@gmail.com', 'cool'),
(16, 'demo', 'demo@g.com', 'yolo');

-- --------------------------------------------------------

--
-- Table structure for table `dna`
--

CREATE TABLE `dna` (
  `id` int(10) NOT NULL,
  `bestdescribe` varchar(100) NOT NULL,
  `styledescribe` varchar(100) NOT NULL,
  `fitchallenge` varchar(50) NOT NULL,
  `occasion` varchar(50) NOT NULL,
  `age` varchar(10) NOT NULL,
  `height` varchar(10) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `bodytype` varchar(50) NOT NULL,
  `skintone` varchar(50) NOT NULL,
  `shirtsize` varchar(10) NOT NULL,
  `shirtcollar` varchar(10) NOT NULL,
  `shirtsleeve` varchar(10) NOT NULL,
  `wearhow` varchar(50) NOT NULL,
  `pantwaist` varchar(10) NOT NULL,
  `pantinseam` varchar(10) NOT NULL,
  `pantcut` varchar(10) NOT NULL,
  `shoesize` varchar(10) NOT NULL,
  `blazerchest` varchar(10) NOT NULL,
  `blazerlength` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dna`
--

INSERT INTO `dna` (`id`, `bestdescribe`, `styledescribe`, `fitchallenge`, `occasion`, `age`, `height`, `weight`, `bodytype`, `skintone`, `shirtsize`, `shirtcollar`, `shirtsleeve`, `wearhow`, `pantwaist`, `pantinseam`, `pantcut`, `shoesize`, `blazerchest`, `blazerlength`) VALUES
(13, 'guidance', 'formal,casual,bussinessprofessional,', 'broadshoulders,barrelchested,', 'casualweekend', '30', '5.5', '31', 'average', 'mid', 'lg', '16.5', '32/33', 'regular', '42', '36', 'straight,', '8', '44', 'regular'),
(14, 'guidance', 'casual,', 'broadshoulders,', 'casualworkplace', '30', '5.4', '50', 'average', 'tan', 'lg', '16', '32/33', 'regular', '31', '30', 'bootcut,', '8.5', '44', 'regular'),
(15, 'guidance', 'casual,casual,smartcasual,', 'barrelchested,bigbutt,', 'casualweekend', '20', '5.5', '48', 'muscular', 'mid', 'lg', '16.5', '34/35', 'fitted', '32', '32', 'straight,', '8.5', '46', 'regular'),
(16, 'least', 'casual,casual,', 'bigbutt,nobutt,', 'casualweekend', '50', '5.5', '50', 'average', 'mid', 'lg', '16.5', '34/35', 'fitted', '32', '32', 'straight,', '9', '46', 'regular'),
(17, 'guidance', 'casual,', 'bigbutt,', 'casualweekend', '50', '5.5', '80', 'muscular', 'mid', 'lg', '16', '32/33', 'regular', '31', '32', 'bootcut,', '8.5', '44', 'short'),
(18, 'guidance', 'casual,', 'nobutt,biglegs,', 'nightinthetown', '20', '5.5', '60', 'average', 'mid', 'sm', '15.5', '32/33', 'regular', '32', '32', 'bootcut,', '8.5', '46', 'regular'),
(19, 'least', 'casual,', 'barrelchested,', 'casualweekend', '20', '5.8', '67', 'average', 'mid', 'lg', '16.5', '32/33', 'regular', '39', '30', 'bootcut,', '8.5', '44', 'regular'),
(20, 'least', 'casual,', 'barrelchested,', 'casualweekend', '20', '6.1', '60', 'average', 'mid', 'lg', '15.5', '34/35', 'regular', '31', '30', 'bootcut,', '8', '44', 'short');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `subscription` int(10) NOT NULL,
  `addr_name` varchar(50) NOT NULL,
  `addr_line1` varchar(50) NOT NULL,
  `addr_line2` varchar(50) NOT NULL,
  `addr_city` varchar(20) NOT NULL,
  `addr_state` varchar(20) NOT NULL,
  `addr_pincode` int(10) NOT NULL,
  `cardholdername` varchar(50) NOT NULL,
  `cardnumber` varchar(50) NOT NULL,
  `expirymonth` varchar(10) NOT NULL,
  `expiryyear` varchar(10) NOT NULL,
  `cvv` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `subscription`, `addr_name`, `addr_line1`, `addr_line2`, `addr_city`, `addr_state`, `addr_pincode`, `cardholdername`, `cardnumber`, `expirymonth`, `expiryyear`, `cvv`) VALUES
(2, 'harsh', 'harsh@gmail.com', '123456', 0, 'harsh', 'abcdef', 'dfhb', 'mum', 'maha', 400011, '', '', '', '', ''),
(3, 'kush', 'kush@gmail.com', '123456', 1, 'ret', 'retg', 'rgt', 'rgt', 'rgt', 435, 'rg', '46t5', '12', 'expiryyear', '4536'),
(4, 'hrj', 'hrj@gmail.com', '12345', 0, '', '', '', '', '', 0, '', '', '', '', ''),
(5, 'shreyank', 'shre@abc.com', 'shre', 0, '', '', '', '', '', 0, '', '', '', '', ''),
(6, 'gh', 'fd@sd.com', '111', 0, '', '', '', '', '', 0, '', '', '', '', ''),
(7, 'harsh', 'h@g.com', '123456', 0, '', '', '', '', '', 0, '', '', '', '', ''),
(8, 'harsh', 'h1@gmail.com', '123456', 0, '', '', '', '', '', 0, '', '', '', '', ''),
(13, 'sid', 'sid@gmail.com', '123456', 0, '', '', '', '', '', 0, '', '', '', '', ''),
(14, 'harsh2', 'demo@g', '123456', 0, '', '', '', '', '', 0, '', '', '', '', ''),
(15, 'dm', 'dm@gmaol.com', '123', 0, '', '', '', '', '', 0, '', '', '', '', ''),
(16, 'raj', 'raj@gmail.com', '123456', 0, '', '', '', '', '', 0, '', '', '', '', ''),
(17, 'rushi', 'rushi@g.com', '123456', 1, 'eafd', 'efd', 'afde', 'wd', 'fad', 435, 'dsf', '213', '1', '2018', '2134'),
(18, 'kd', 'kd@g.com', '123456', 2, 'trhy', 'tfdh', 'ftxh', 'tsfrhy', 'tfhy', 546, 'tsrfy', '546', '12', '16', 'trsy'),
(20, 'Harsh Jain', 'harsh.sonigara20@gmail.com', '123456', 1, 'try', 'txf', 'yit', 'ydui', 'yudti', 658, 'ydi', '687', '12', '27', '685');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `dna`
--
ALTER TABLE `dna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contact_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
