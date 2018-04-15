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
-- Database: `stylegent_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `path` varchar(50) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`id`, `name`, `path`, `quantity`) VALUES
(1, 'Belt', 'products/accessories/belt.jpeg', 9999),
(2, 'Wallet', 'products/accessories/wallet.jpg', 9999),
(3, 'Sunglasses', 'products/accessories/sunglasses.jpg', 9999),
(4, 'Pocket Square', 'products/accessories/pocketsquare.jpeg', 9999),
(5, 'Tie', 'products/accessories/tie.jpg', 9999),
(6, 'Socks', 'products/accessories/socks.jpeg', 9999);

-- --------------------------------------------------------

--
-- Table structure for table `casualshirts`
--

CREATE TABLE `casualshirts` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `path` varchar(50) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `casualshirts`
--

INSERT INTO `casualshirts` (`id`, `name`, `path`, `quantity`) VALUES
(1, 'White Button Up Shirt', 'products/casualshirts/whitebuttonup.jpeg', 9999),
(2, 'Black Button Up Shirt', 'products/casualshirts/blackbuttonup.jpg', 9999),
(3, 'Plaid Button Up Shirt', 'products/casualshirts/plaidbuttonup.jpg', 9999),
(4, 'Short Sleeve White Button Up', 'products/casualshirts/shortwhitebuttonup.jpg', 9999),
(5, 'White V-Neck Tshirt', 'products/casualshirts/whitevneck.jpg', 9999),
(6, 'Black V-Neck Tshirt', 'products/casualshirts/whitebuttonup.jpeg', 9999),
(7, 'Gray V-Neck Tshirt', 'products/casualshirts/grayvneck.jpeg', 9999),
(8, 'Black Henley', 'products/casualshirts/blackhenley.jpg', 9999);

-- --------------------------------------------------------

--
-- Table structure for table `jeans`
--

CREATE TABLE `jeans` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `path` varchar(50) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jeans`
--

INSERT INTO `jeans` (`id`, `name`, `path`, `quantity`) VALUES
(1, 'Dark Wash Jeans', 'products/jeans/darkwash.jpg', 9999),
(2, 'Light Wash Jeans', 'products/jeans/lightwash.jpg', 9999);

-- --------------------------------------------------------

--
-- Table structure for table `pants`
--

CREATE TABLE `pants` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `path` varchar(50) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pants`
--

INSERT INTO `pants` (`id`, `name`, `path`, `quantity`) VALUES
(1, 'Khaki Pants', 'products/pants/khakipants.jpg', 9999),
(2, 'Gray Pants', 'products/pants/graypants.jpg', 9999),
(3, 'Blue Pants', 'products/pants/bluepants.jpg', 9999),
(4, 'Brown Pants', 'products/pants/brownpants.jpg', 9999),
(5, 'Black Pants', 'products/pants/blackpants.jpg', 9999);

-- --------------------------------------------------------

--
-- Table structure for table `shirts`
--

CREATE TABLE `shirts` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `path` varchar(50) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shirts`
--

INSERT INTO `shirts` (`id`, `name`, `path`, `quantity`) VALUES
(1, 'Tailored White Dress Shirt', 'products/shirts/tailoredwhite.jpg', 9999),
(2, 'Tailored Black Dress Shirt', 'products/shirts/tailoredblack.jpg', 9999),
(3, 'Tailored Blue Dress Shirt', 'products/shirts/tailoredblue.jpeg', 9999),
(4, 'Tailored Pattern Dress Shirt', 'products/shirts/tailoredpattern.jpeg', 9999);

-- --------------------------------------------------------

--
-- Table structure for table `shoes`
--

CREATE TABLE `shoes` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `path` varchar(50) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shoes`
--

INSERT INTO `shoes` (`id`, `name`, `path`, `quantity`) VALUES
(1, 'Black Dress Shoes', 'products/shoes/blackshoes.jpeg', 9999),
(2, 'Brown Dress Shoes', 'products/shoes/brownshoes.jpeg', 9999),
(3, 'Casual Brown Shoes', 'products/shoes/casualbrownshoes.jpg', 9999),
(4, 'Fashion Sneakers', 'products/shoes/fashionsneakers.jpg', 9999),
(5, 'Flip Flops', 'products/shoes/flipflops.jpg', 9999);

-- --------------------------------------------------------

--
-- Table structure for table `shorts`
--

CREATE TABLE `shorts` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `path` varchar(50) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shorts`
--

INSERT INTO `shorts` (`id`, `name`, `path`, `quantity`) VALUES
(1, 'Tan Shorts', 'products/shorts/tan.jpg', 9999),
(2, 'Cargo Shorts', 'products/shorts/cargo.jpg', 9999),
(3, 'Swim Shorts', 'products/shorts/swim.jpg', 9999);

-- --------------------------------------------------------

--
-- Table structure for table `sportcoats`
--

CREATE TABLE `sportcoats` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `path` varchar(50) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sportcoats`
--

INSERT INTO `sportcoats` (`id`, `name`, `path`, `quantity`) VALUES
(1, 'Black Sport Coat', 'products/sportcoats/black.jpg', 9999),
(2, 'Tan Sport Coat', 'products/sportcoats/tan.jpg', 9999),
(3, 'Blue Sport Coat', 'products/sportcoats/blue.jpg', 9999);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `casualshirts`
--
ALTER TABLE `casualshirts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jeans`
--
ALTER TABLE `jeans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pants`
--
ALTER TABLE `pants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shirts`
--
ALTER TABLE `shirts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoes`
--
ALTER TABLE `shoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shorts`
--
ALTER TABLE `shorts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sportcoats`
--
ALTER TABLE `sportcoats`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
