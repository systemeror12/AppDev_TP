-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2023 at 04:16 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rmm_garden_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admins`
--

CREATE TABLE `tb_admins` (
  `Admin_Id` int(11) NOT NULL,
  `Uname` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL,
  `Cpass` varchar(50) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_admins`
--

INSERT INTO `tb_admins` (`Admin_Id`, `Uname`, `Pass`, `Cpass`, `FullName`, `Email`) VALUES
(10, 'admin', '21232f297a57a5a743894a0e4a801fc3', '21232f297a57a5a743894a0e4a801fc3', 'admin admin', 'admin@admin.com'),
(11, 'asd', '7815696ecbf1c96e6894b779456d330e', '7815696ecbf1c96e6894b779456d330e', 'asd', 'asd@asd.asd');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cart`
--

CREATE TABLE `tb_cart` (
  `Id` int(11) NOT NULL,
  `Product_Id` varchar(30) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Item` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_cart`
--

INSERT INTO `tb_cart` (`Id`, `Product_Id`, `User_id`, `Item`) VALUES
(403, 'battlegrassdilaw1', 3, 1),
(404, 'battlegrasspula1', 3, 1),
(405, 'georginiapula1', 3, 1),
(406, 'lukaria1', 3, 1),
(407, 'macky1', 3, 1),
(408, 'georginiaputi1', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_inventory`
--

CREATE TABLE `tb_inventory` (
  `Inventory _Id` int(11) NOT NULL,
  `Product_Id` int(11) NOT NULL,
  `Product_Name` varchar(50) NOT NULL,
  `Size` varchar(20) NOT NULL,
  `Stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_orders`
--

CREATE TABLE `tb_orders` (
  `Transaction_Id` int(11) NOT NULL,
  `Cart_Id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Product_Id` varchar(30) NOT NULL,
  `Total` int(11) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_orders`
--

INSERT INTO `tb_orders` (`Transaction_Id`, `Cart_Id`, `User_id`, `Product_Id`, `Total`, `Status`, `Order_date`) VALUES
(1, 403, 3, 'battlegrassdilaw1', 0, 'Pending', '0000-00-00'),
(2, 404, 3, 'battlegrasspula1', 0, 'Pending', '0000-00-00'),
(3, 405, 3, 'georginiapula1', 0, 'Pending', '0000-00-00'),
(4, 406, 3, 'lukaria1', 0, 'Pending', '0000-00-00'),
(5, 407, 3, 'macky1', 0, 'Pending', '0000-00-00'),
(6, 408, 3, 'georginiaputi1', 0, 'Pending', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_products`
--

CREATE TABLE `tb_products` (
  `Product_Id` int(11) NOT NULL,
  `Product_Name` varchar(50) NOT NULL,
  `Size` varchar(50) NOT NULL,
  `Product_Price` int(10) NOT NULL,
  `Stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_products`
--

INSERT INTO `tb_products` (`Product_Id`, `Product_Name`, `Size`, `Product_Price`, `Stock`) VALUES
(1, 'White angel', '4x4x9', 15, 20),
(2, 'White angel', '7x7x14', 50, 0),
(3, 'Picara', '5x5x9', 25, 0),
(4, 'Picara', '7x7x14', 50, 0),
(5, 'Battle grass pula', '7x7x14', 50, 0),
(6, 'Battle grass dilaw', '7x7x14', 50, 0),
(7, 'Georginia pula', '8x8x14 height 2 feet', 100, 0),
(8, 'Georginia pula', '8x8x14 height 3 feet', 150, 0),
(9, 'Georginia puti', '1 and 2 feet', 100, 0),
(11, 'Lukaria', '1feet', 100, 0),
(12, 'Lukaria', '2 feet', 150, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_productsarchive`
--

CREATE TABLE `tb_productsarchive` (
  `Product_Id` int(11) NOT NULL,
  `Product_Name` varchar(50) NOT NULL,
  `Size` varchar(50) NOT NULL,
  `Product_Price` int(10) NOT NULL,
  `Stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `User_id` int(11) NOT NULL,
  `FName` varchar(50) NOT NULL,
  `LName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL,
  `Contact` int(11) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `BDate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`User_id`, `FName`, `LName`, `Email`, `Pass`, `Contact`, `Gender`, `BDate`) VALUES
(3, 'asd', 'asd', 'asd@gmail.com', '7815696ecbf1c96e6894b779456d330e', 1231231, 'Male', 'August 17, 1985'),
(5, 'asdfa', 'asdfa', 'jan@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 124124, 'Male', 'October 16, 1985'),
(6, 'tryyy', 'meee', 'asa@gmail.com', '457391c9c82bfdcbb4947278c0401e41', 2147483647, 'Male', 'November 13, 1986');

-- --------------------------------------------------------

--
-- Table structure for table `tb_usersarchive`
--

CREATE TABLE `tb_usersarchive` (
  `User_id` int(11) NOT NULL,
  `FName` varchar(50) NOT NULL,
  `LName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL,
  `Contact` int(11) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `BDate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admins`
--
ALTER TABLE `tb_admins`
  ADD PRIMARY KEY (`Admin_Id`);

--
-- Indexes for table `tb_cart`
--
ALTER TABLE `tb_cart`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `User` (`User_id`),
  ADD KEY `Product` (`Product_Id`);

--
-- Indexes for table `tb_orders`
--
ALTER TABLE `tb_orders`
  ADD PRIMARY KEY (`Transaction_Id`);

--
-- Indexes for table `tb_products`
--
ALTER TABLE `tb_products`
  ADD PRIMARY KEY (`Product_Id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`User_id`);

--
-- Indexes for table `tb_usersarchive`
--
ALTER TABLE `tb_usersarchive`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admins`
--
ALTER TABLE `tb_admins`
  MODIFY `Admin_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_cart`
--
ALTER TABLE `tb_cart`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=409;

--
-- AUTO_INCREMENT for table `tb_orders`
--
ALTER TABLE `tb_orders`
  MODIFY `Transaction_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_products`
--
ALTER TABLE `tb_products`
  MODIFY `Product_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_usersarchive`
--
ALTER TABLE `tb_usersarchive`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
