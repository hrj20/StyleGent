-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2016 at 09:00 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stylegent_orders`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `order_id` int(5) NOT NULL,
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `casualshirts`
--

CREATE TABLE `casualshirts` (
  `order_id` int(5) NOT NULL,
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `casualshirts`
--

INSERT INTO `casualshirts` (`order_id`, `id`, `name`, `c_name`, `path`) VALUES
(8, 20, 'White V-Neck Tshirt', 'Harsh Jain', 'products/casualshirts/whitevneck.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jeans`
--

CREATE TABLE `jeans` (
  `order_id` int(5) NOT NULL,
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jeans`
--

INSERT INTO `jeans` (`order_id`, `id`, `name`, `c_name`, `path`) VALUES
(6, 20, 'Dark Wash Jeans', 'Harsh Jain', 'products/jeans/darkwash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pants`
--

CREATE TABLE `pants` (
  `order_id` int(5) NOT NULL,
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pants`
--

INSERT INTO `pants` (`order_id`, `id`, `name`, `c_name`, `path`) VALUES
(4, 20, 'Brown Pants', 'Harsh Jain', 'products/pants/brownpants.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shirts`
--

CREATE TABLE `shirts` (
  `order_id` int(5) NOT NULL,
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shoes`
--

CREATE TABLE `shoes` (
  `order_id` int(5) NOT NULL,
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shorts`
--

CREATE TABLE `shorts` (
  `order_id` int(5) NOT NULL,
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sportcoats`
--

CREATE TABLE `sportcoats` (
  `order_id` int(5) NOT NULL,
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sportcoats`
--

INSERT INTO `sportcoats` (`order_id`, `id`, `name`, `c_name`, `path`) VALUES
(6, 20, 'Black Sport Coat', 'Harsh Jain', 'products/sportcoats/black.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `casualshirts`
--
ALTER TABLE `casualshirts`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `jeans`
--
ALTER TABLE `jeans`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `pants`
--
ALTER TABLE `pants`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `shirts`
--
ALTER TABLE `shirts`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `shoes`
--
ALTER TABLE `shoes`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `shorts`
--
ALTER TABLE `shorts`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `sportcoats`
--
ALTER TABLE `sportcoats`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessories`
--
ALTER TABLE `accessories`
  MODIFY `order_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `casualshirts`
--
ALTER TABLE `casualshirts`
  MODIFY `order_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `jeans`
--
ALTER TABLE `jeans`
  MODIFY `order_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pants`
--
ALTER TABLE `pants`
  MODIFY `order_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `shirts`
--
ALTER TABLE `shirts`
  MODIFY `order_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `shoes`
--
ALTER TABLE `shoes`
  MODIFY `order_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `shorts`
--
ALTER TABLE `shorts`
  MODIFY `order_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sportcoats`
--
ALTER TABLE `sportcoats`
  MODIFY `order_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
