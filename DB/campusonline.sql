-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2024 at 06:35 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campusonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `productid` int(255) NOT NULL,
  `reg_no` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`productid`, `reg_no`) VALUES
(11, '22B91A6246'),
(12, '22B91A6246'),
(13, '22B91A6246'),
(11, '22B91A6237'),
(14, '22B91A6237'),
(12, '22B91A6255'),
(14, '22B91A6255');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `eventID` int(11) NOT NULL,
  `eventname` varchar(255) DEFAULT NULL,
  `eventdescription` text DEFAULT NULL,
  `image` longblob DEFAULT NULL,
  `Category` varchar(100) DEFAULT NULL,
  `startdate` date DEFAULT NULL,
  `enddate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eventID`, `eventname`, `eventdescription`, `image`, `Category`, `startdate`, `enddate`) VALUES
(3, 'Prajwal', 'hakathon using web,mern', 0x6576656e7475706c6f6164732f53637265656e73686f7420323032342d30312d3236203131303230362e706e67, 'Internships', '2024-01-09', '2024-10-01');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `payment_id` text NOT NULL,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `productid` int(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productDescription` varchar(255) NOT NULL,
  `image` longblob NOT NULL,
  `regularPrice` int(100) NOT NULL,
  `salePrice` int(100) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `stockStatus` varchar(100) NOT NULL,
  `size` varchar(255) NOT NULL,
  `colour` varchar(255) NOT NULL,
  `reg_no` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`productid`, `productName`, `productDescription`, `image`, `regularPrice`, `salePrice`, `Category`, `stockStatus`, `size`, `colour`, `reg_no`) VALUES
(14, 'sasas', 'sasas', 0x75706c6f6164732f53637265656e73686f7420323032332d30392d3131203138343833392e706e67, 111, 110, 'Fashion', 'in-stock', 'asaadsa', 'adda', '22B91A6237');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `year` varchar(10) NOT NULL,
  `registerno` varchar(12) NOT NULL,
  `password` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phonenumber` varchar(12) NOT NULL,
  `year` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `reg_no` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstname`, `lastname`, `email`, `phonenumber`, `year`, `password`, `reg_no`) VALUES
('somu', 'rao', 'somu_csd@srkrec.edu.in', '7780114699', '2 Year', 'somu', '22B91A6240'),
('swapanth', 'vakapalli', 'swapanth_csd@srkrec.edu.in', '7794022444', '3 Year', 'swapanth', '22B91A6255'),
('nikhil', 'paila', 'nikhil_csd@srkrec.edu.in', '8639290852', '2 Year', 'nikhil', '22B91A6237'),
('Lakshman', 'Bhavanam', 'lakshman_csd@srkrec.edu.in', '8712131582', '2 Year', 'lakshman', '22B91A6203'),
('ganesh', 'P', 'ganesh@gmail.com', '9392842898', '2 Year', '9876543', '22B91A6243'),
('vamsi', 'pulluru', 'vamsipulluru2004@gmail.com', '9494410554', '2 Year', 'vamsi', '22B91A6246'),
('Yeswanth', 'kola', 'yeswanthkola@gmail.com', '9676608446', '2 Year', 'Kola', '22B91A6223'),
('Sandilya', 'Moturi', 'sandilya@gmail.com', '9985111189', '3 Year', 'sandymoturi', '22B91A6234');

-- --------------------------------------------------------

--
-- Table structure for table `verification`
--

CREATE TABLE `verification` (
  `registration` varchar(222) DEFAULT NULL,
  `mobile` bigint(102) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `verification`
--

INSERT INTO `verification` (`registration`, `mobile`) VALUES
('22B91A6246', 9494410554),
('22B91A6255', 7794022444),
('22B91A6234', 9985111189),
('22B91A6223', 9676608446),
('22B91A6237', 8639290852),
('22B91A6203', 8712131582),
('22B91A6240', 7780114699),
('22B91A6243', 9392842898);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `productid` int(255) NOT NULL,
  `reg_no` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`productid`, `reg_no`) VALUES
(11, '22B91A6246'),
(12, '22B91A6246'),
(13, '22B91A6246'),
(11, '22B91A6237'),
(14, '22B91A6237'),
(12, ''),
(11, '22B91A6255'),
(13, '22B91A6255');

-- --------------------------------------------------------

--
-- Table structure for table `xeorx`
--

CREATE TABLE `xeorx` (
  `id` int(11) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `category1` varchar(255) DEFAULT NULL,
  `category2` varchar(255) DEFAULT NULL,
  `total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `xeorx`
--

INSERT INTO `xeorx` (`id`, `file`, `category`, `category1`, `category2`, `total`) VALUES
(5, '2022-2023.pdf', '', 'Both Sides Of page', 'Spiral Binding', 0),
(6, 'React Native Setup.pdf', 'Color', 'Both Sides Of page', 'Spiral Binding', 0),
(7, 'React Native Setup.pdf', 'Color', 'Both Sides Of page', 'Spiral Binding', 0),
(8, 'vamsiGDL.pdf', 'Black & White', 'One side of Page', 'Stick File', 0),
(9, 'vamsiGDL.pdf', 'Black & White', 'One side of Page', 'Stick File', 0),
(10, 'vamsiGDL.pdf', 'Black & White', 'One side of Page', 'Stick File', 0),
(11, 'vamsiGDL.pdf', 'Black & White', 'One side of Page', 'Stick File', 0),
(12, 'vamsiGDL.pdf', 'Black & White', 'One side of Page', 'Stick File', 0),
(13, 'vamsicsp (1).pdf', 'Color', 'Both Sides Of page', 'Spiral Binding', 10),
(14, 'LHEdoc.pdf', 'Color', 'Both Sides Of page', 'Spiral Binding', 125),
(15, 'LHE!.pdf', 'Color', 'Both Sides Of page', 'Spiral Binding', 120),
(16, 'vamsicsp (1).pdf', 'Color', 'Both Sides Of page', 'Spiral Binding', 195),
(17, 'LHEdoc.pdf', 'Color', 'Both Sides Of page', 'Spiral Binding', 125),
(18, '12.pdf', 'Color', 'Both Sides Of page', 'Spiral Binding', 85);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`eventID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`phonenumber`,`reg_no`);

--
-- Indexes for table `xeorx`
--
ALTER TABLE `xeorx`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `eventID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `productid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `xeorx`
--
ALTER TABLE `xeorx`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
