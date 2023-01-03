-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2021 at 08:01 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_grocery_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `ID` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`ID`, `userId`, `productId`, `quantity`) VALUES
(11, 0, 1, 3),
(12, 0, 1, 3),
(13, 0, 1, 3),
(16, 0, 1, 3),
(21, 2, 0, 3),
(22, 2, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `Cat_ID` int(155) NOT NULL,
  `Name` varchar(155) NOT NULL,
  `Status` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`Cat_ID`, `Name`, `Status`) VALUES
(1, 'Vegetables', 'Available'),
(2, 'Fruits', 'Available'),
(3, 'Dairy', 'Available'),
(4, 'Meat', 'Available'),
(5, 'Pulses', 'Available'),
(6, 'Spices', 'Available'),
(7, 'Vegetable Oils', 'Available'),
(8, 'Breakfast Essentials', 'Available'),
(9, 'Health Drinks and Juices', 'Available'),
(10, 'Soft Drinks', 'Available'),
(11, 'Tea and Coffee', 'Available'),
(1, 'Vegetables', 'Available'),
(2, 'Fruits', 'Available'),
(3, 'Dairy', 'Available'),
(4, 'Meat', 'Available'),
(5, 'Pulses', 'Available'),
(6, 'Spices', 'Available'),
(7, 'Vegetable Oils', 'Available'),
(8, 'Breakfast Essentials', 'Available'),
(9, 'Health Drinks and Juices', 'Available'),
(10, 'Soft Drinks', 'Available'),
(11, 'Tea and Coffee', 'Available'),
(12, 'VEGETABLES', 'Available'),
(13, 'FRUITS', 'Available'),
(14, 'DAIRY PRODUCTS', 'Available'),
(15, 'PULSES', 'Available'),
(16, 'COOKING OILS', 'Available'),
(17, 'RICE AND FLOURS', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email_ID` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Phone_no` bigint(10) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`ID`, `Name`, `Email_ID`, `Password`, `Phone_no`, `Image`, `Status`) VALUES
(1, 'Keya Das', 'kd@gmail.com', 'kd123', 9859575647, 'nil', 'active'),
(2, 'Meena Saha', 'ms@gmail.com', 'ms123', 9847854872, 'nil', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `ID` int(20) NOT NULL,
  `Email_ID` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID`, `Email_ID`, `Name`, `Comment`) VALUES
(1, 'rd@gmail.com', 'Riya Das', 'This is a great website . I would recommend this website to everyone.'),
(2, 'Sd@gmail.com', 'Shreya Das', 'Very Good'),
(3, 'Ls@gmail.com', 'Lognochita Sen', 'Awesome Website');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `Cat_ID` int(50) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Price` int(20) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Suppliers_ID` int(11) NOT NULL,
  `CreatedAt` date NOT NULL,
  `UpdatedAt` date NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `Cat_ID`, `Name`, `Description`, `Price`, `Image`, `Suppliers_ID`, `CreatedAt`, `UpdatedAt`, `Status`) VALUES
(1, 13, 'Apple', 'Exported from Kashmir (RED DELICIOUS)', 120, 'Upload/3.jpg', 1, '2021-07-03', '0000-00-00', 'available'),
(2, 13, 'Mango(Alphonso)', 'Ratnagiri Special Alphonso Mango', 300, 'Upload/4.jpg', 1, '2021-06-04', '0000-00-00', 'available'),
(3, 17, 'Brown Rice', 'Brown rice is a whole grain and a good source of magnesium, phosphorus, selenium, thiamine, niacin, vitamin B6, and manganese, and is high in fiber. ', 140, 'Upload/brown rice.jpg', 2, '2021-08-05', '2021-08-05', 'unavailabl');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email_ID` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Phone_no` bigint(10) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`ID`, `Name`, `Email_ID`, `Password`, `Phone_no`, `Image`, `Status`) VALUES
(1, 'Madan Lal', 'ml@gmail.com', 'ml123', 9784858741, '0', '1'),
(2, 'Ram Das', 'rd@gmail.com', 'rd121', 9857412541, '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `userproduct`
--

CREATE TABLE `userproduct` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `purchasedOn` date NOT NULL,
  `status` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userproduct`
--

INSERT INTO `userproduct` (`id`, `userId`, `productId`, `purchasedOn`, `status`) VALUES
(1, 1, 0, '2021-08-05', 'active'),
(2, 1, 0, '2021-08-05', 'active'),
(3, 1, 0, '2021-08-05', 'active'),
(4, 1, 1, '2021-08-05', 'active'),
(5, 1, 2, '2021-08-05', 'active'),
(6, 1, 1, '2021-08-05', 'active'),
(7, 1, 1, '2021-08-05', 'active'),
(8, 1, 2, '2021-08-05', 'active'),
(9, 2, 1, '2021-08-05', 'active'),
(10, 2, 0, '2021-08-05', 'active'),
(11, 1, 1, '2021-08-05', 'active'),
(12, 1, 0, '2021-08-05', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `userproduct`
--
ALTER TABLE `userproduct`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userproduct`
--
ALTER TABLE `userproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
