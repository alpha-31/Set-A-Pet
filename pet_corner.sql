-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2021 at 12:55 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pet_corner`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Cust_Id` varchar(10) NOT NULL,
  `Cust_name` varchar(30) NOT NULL,
  `Cust_Email` varchar(30) NOT NULL,
  `Cust_Number` int(30) NOT NULL,
  `Cust_Pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cust_Id`, `Cust_name`, `Cust_Email`, `Cust_Number`, `Cust_Pass`) VALUES
('cs1', 'Muhammad Talha Munir', '1talhamunir@gmail.com', 1231, '111'),
('cs2', 'Sheikwww', '87797@gmail.com', 45677, '456123'),
('cs3', 'sheikh', '1talhamunir@gmail.com', 2232, '111');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_Id` varchar(10) NOT NULL,
  `Cust_Id` varchar(10) NOT NULL,
  `Owner_Id` char(10) NOT NULL,
  `Order_Time` timestamp NOT NULL DEFAULT current_timestamp(),
  `Pet_Id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `Owner_ID` varchar(10) NOT NULL,
  `pet_Id` varchar(10) NOT NULL,
  `Owner_name` varchar(30) NOT NULL,
  `Owner_Email` varchar(30) NOT NULL,
  `Owner_Number` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `Pet_Id` varchar(10) NOT NULL,
  `Pet_Type` varchar(30) NOT NULL,
  `breed` varchar(30) NOT NULL,
  `weight` float NOT NULL,
  `height` double NOT NULL,
  `age` int(10) NOT NULL,
  `fur` varchar(15) NOT NULL,
  `cost` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pet_show`
--

CREATE TABLE `pet_show` (
  `Pet_Id` varchar(10) NOT NULL,
  `Show_Venue` varchar(50) NOT NULL,
  `Show_Timing` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_Id` varchar(10) NOT NULL,
  `P_name` varchar(30) NOT NULL,
  `P_cost` int(20) NOT NULL,
  `P_for` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cust_Id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_Id`),
  ADD UNIQUE KEY `Order_Id` (`Order_Id`),
  ADD KEY `ordercustfk` (`Cust_Id`),
  ADD KEY `orderownerfk` (`Owner_Id`),
  ADD KEY `Pet_Id` (`Pet_Id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`Owner_ID`),
  ADD KEY `pet_Id` (`pet_Id`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`Pet_Id`);

--
-- Indexes for table `pet_show`
--
ALTER TABLE `pet_show`
  ADD KEY `Pet_Id` (`Pet_Id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`date`),
  ADD KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `ordercustfk` FOREIGN KEY (`Cust_Id`) REFERENCES `customer` (`Cust_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orderownerfk` FOREIGN KEY (`Owner_Id`) REFERENCES `owner` (`Owner_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`Pet_Id`) REFERENCES `pets` (`Pet_Id`);

--
-- Constraints for table `owner`
--
ALTER TABLE `owner`
  ADD CONSTRAINT `owner_ibfk_1` FOREIGN KEY (`pet_Id`) REFERENCES `pets` (`Pet_Id`);

--
-- Constraints for table `pet_show`
--
ALTER TABLE `pet_show`
  ADD CONSTRAINT `pet_show_ibfk_1` FOREIGN KEY (`Pet_Id`) REFERENCES `pets` (`Pet_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
