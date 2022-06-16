-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql-server
-- Generation Time: Jun 16, 2022 at 01:17 PM
-- Server version: 8.0.19
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store1`
--

-- --------------------------------------------------------

--
-- Table structure for table `Order_tb`
--

CREATE TABLE `Order_tb` (
  `order_id` int DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `product_price` int DEFAULT NULL,
  `Quantity` int DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Products`
--

CREATE TABLE `Products` (
  `product_id` int NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `product_sale_price` int DEFAULT NULL,
  `product_list_price` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Products`
--

INSERT INTO `Products` (`product_id`, `product_name`, `product_image`, `product_sale_price`, `product_list_price`) VALUES
(101, 'Chanel Paris', 'images/4.jpg', 2000, 2800),
(102, 'Essential', 'images/1.jpg', 1200, 1600),
(103, 'Aroma Magic', 'images/2.jpg', 1300, 1700),
(104, 'tommy ', 'images/3.jpg', 1400, 1800),
(105, 'Invisible', 'images/5.jpg', 1500, 1900),
(106, 'Coach', 'images/6.jpg', 1600, 2000),
(107, 'Colorful diamonds', 'images/7.jpg', 1600, 2000),
(108, 'Red diamond', 'images/8.jpg', 1700, 2100),
(109, 'Escada', 'images/9.jpg', 1800, 2200),
(110, 'AQUA Allegoria', 'images/10.jpg', 3000, 3600);

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `user_id` int NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` enum('admin','user') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`user_id`, `name`, `email`, `contact`, `password`, `role`) VALUES
(1, 'shiv', 'shiv@gmail.com', '9643294453', 'Shivam1', 'admin'),
(2, 'keshav', 'keshav@gmail.com', '7488416460', 'Keshav1', 'user'),
(3, 'sachin', 'sachin@gmail.com', '7488416460', 'Sachin1', 'user'),
(4, 'jai', 'jai@gmail.com', '9643294453', 'Jai123', 'user'),
(5, 'mohit', 'mohit@gmail.com', '8449222462', 'Mohit123', 'user'),
(6, 'sumit', 'sumit@gmail.com', '7488416460', 'Sumit1', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Products`
--
ALTER TABLE `Products`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
