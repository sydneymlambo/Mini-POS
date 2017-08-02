-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2017 at 02:59 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productId` int(11) UNSIGNED NOT NULL,
  `productCode` int(6) NOT NULL,
  `productName` varchar(20) NOT NULL,
  `productPrice` float(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productId`, `productCode`, `productName`, `productPrice`) VALUES
(1, 123456, 'Soap', 10.95),
(2, 445566, 'Milk', 22.99),
(3, 334455, 'White bread', 10.99),
(4, 223344, 'Brown bread', 9.99),
(5, 445566, 'Doritos', 16.89),
(6, 667788, 'Lunch Bar', 8.99),
(7, 778899, 'Weet Bix', 29.99);

-- --------------------------------------------------------

--
-- Table structure for table `saleitems`
--

CREATE TABLE `saleitems` (
  `saleId` int(11) UNSIGNED NOT NULL,
  `productId` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saleitems`
--

INSERT INTO `saleitems` (`saleId`, `productId`) VALUES
(37, 1),
(37, 4),
(37, 3),
(38, 3),
(38, 4),
(39, 4),
(39, 3),
(39, 2),
(39, 6),
(40, 1),
(41, 7),
(41, 3),
(0, 1),
(0, 7),
(0, 6),
(0, 7);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `saleId` int(11) UNSIGNED NOT NULL,
  `saleDate` varchar(20) NOT NULL,
  `totalPrice` float(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`saleId`, `saleDate`, `totalPrice`) VALUES
(37, '02/08/17 10:43', 31.93),
(38, '02/08/17 10:46', 20.98),
(39, '02/08/17 14:42', 69.85),
(40, '02/08/17 14:45', 10.95),
(41, '02/08/17 14:47', 40.98),
(42, '02/08/17 14:52', 49.93),
(43, '02/08/17 14:53', 29.99),
(44, '02/08/17 14:54', 31.93),
(45, '02/08/17 14:57', 18.98);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`) VALUES
(1, 'Sydney', 'sydneymlambo', '8487c4dfb2c316e1bbc807413d8cb0e2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`saleId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `saleId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
