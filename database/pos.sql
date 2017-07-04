-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2009 at 12:27 AM
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
-- Table structure for table `currentsale`
--

CREATE TABLE `currentsale` (
  `id` int(11) NOT NULL,
  `productCode` int(6) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productPrice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currentsale`
--

INSERT INTO `currentsale` (`id`, `productCode`, `productName`, `productPrice`) VALUES
(1, 223344, 'Nivea', 47.99);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productCode` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productPrice` float(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productCode`, `productName`, `productPrice`) VALUES
(5, 123456, 'Surf washing powder', 39.99),
(6, 246810, 'Clover milk', 27.99),
(7, 481216, 'Soup', 10.99),
(8, 510152, 'Doritos', 17.99),
(9, 112233, 'Lion matches', 2.99),
(10, 223344, 'Nivea', 47.99),
(11, 334455, 'Light bulb', 17.99),
(12, 445566, 'Beef stock', 2.99),
(13, 556677, 'Powder milk', 26.99),
(14, 998877, 'Bar one', 8.99),
(15, 665544, 'Bar one', 8.99),
(16, 665544, 'Lays', 12.99),
(17, 667788, 'Pin-pop', 1.99),
(18, 222333, 'Bellow zero', 1.99),
(19, 111222, 'Super-B', 97.99),
(20, 444555, 'Baked beans', 12.50),
(21, 654321, 'Wild island', 17.99),
(22, 911008, 'Lunchbar', 8.99),
(23, 443322, 'Exam pad', 10.99);

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
-- Indexes for table `currentsale`
--
ALTER TABLE `currentsale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `currentsale`
--
ALTER TABLE `currentsale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
