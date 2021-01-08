-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2020 at 06:56 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phase2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblproducts`
--

CREATE TABLE `tblproducts` (
  `productid` int(50) DEFAULT NULL,
  `productname` varchar(50) DEFAULT NULL,
  `productprice` double DEFAULT NULL,
  `productcode` varchar(50) DEFAULT NULL,
  `productinstock` tinytext DEFAULT NULL,
  `productdiscount` double DEFAULT NULL,
  `productsizes` varchar(50) DEFAULT NULL,
  `productdetails` text DEFAULT NULL,
  `productimg` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblproducts`
--

INSERT INTO `tblproducts` (`productid`, `productname`, `productprice`, `productcode`, `productinstock`, `productdiscount`, `productsizes`, `productdetails`, `productimg`) VALUES
(1, 'bike', 100, 'xyz123', 'y', 10, 'medium', 'good', 'SuperStrata_Studio_White_SideView_2370.0.jfif'),
(2, 'honda', 500, 'abc124', 'y', 20, 'medium', 'good', 'pic1.jpg'),
(4, 'product1', 100, '1', 'y', 0, 'm', 'djhdbud', '149-ROG-Wallpaper-Challenge-4K-3840x2160.jpg'),
(5, 'product2', 100, '2', 'n', 0, 'l', 'edhguygi', '82426.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `userId` int(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `userpassword` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`userId`, `username`, `userpassword`) VALUES
(1, 'Mohsin', '123'),
(2, 'hamza', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD UNIQUE KEY `userId` (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `userId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
