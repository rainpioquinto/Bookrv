-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2018 at 01:46 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goldenribbon`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `account_id` int(255) NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`firstname`, `lastname`, `email`, `password`, `account_id`, `role`) VALUES
('Jacim', 'Ganancial', 'jacimganancial@ymail.comaaaaaa', '912ec803b2ce49e4a541068d4', 31, 0),
('Test', 'Test', 'jacimganancial@ymail.comqwer', '962012d09b8170d912f0669f6', 32, 0),
('a', 'a', 'a@a', '0cc175b9c0f1b6a831c399e26', 33, 0),
('asdf', 'asdf', 'asdfasdf@asdf', '912ec803b2ce49e4a541068d4', 34, 0),
('s', 's', 'sd@d', '03c7c0ace395d80182db07ae2c30f034', 35, 0),
('Admin', 'Admin', 'Admin@a', 'asdf', 37, 1),
('fwfw', 'fwfw', 'jacimganancial@ymail.comsfffff', '5fc988e70310af19475690a51952cc87', 43, 0),
('fwq', 'wef', 'wfe@adsf', '0e22f493c7480c3d7e38919ed8a72f6b', 44, 0),
('superadmin', 'superadmin', 'super@admin', '21232f297a57a5a743894a0e4a801fc3', 45, 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `email` varchar(30) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`email`, `message`) VALUES
('jacimganancial@ymail.com', 'Hii! :)');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `productname` varchar(50) NOT NULL,
  `productdescription` varchar(255) NOT NULL,
  `productprice` int(11) NOT NULL,
  `productqty` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `productname`, `productdescription`, `productprice`, `productqty`) VALUES
(1, '123', '123', 123, 123),
(2, 'asdf', 'asdf', 123, 123),
(3, 'Red Velvet', 'The Most Amazing Red Velvet Cake recipe is moist, fluffy, and has the perfect balance between acidity and chocolate. ', 500, 500),
(4, 'Red Velvet2', 'Red Velvet2', 123, 123),
(5, 'Red Velvetsf', 'asdf', 21, 12),
(6, 'Red Velvets222', '12', 12, 12),
(7, '123ff', '12f', 12, 12),
(8, '12tg12g', '12gq', 1, 1),
(9, 'af2ve', '12', 12, 12),
(10, 'blue waffle', 'blue waffle', 123, 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`),
  ADD UNIQUE KEY `role` (`firstname`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
