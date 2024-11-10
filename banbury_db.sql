-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2023 at 11:07 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banbury_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `availability` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bid`, `title`, `description`, `author`, `price`, `category`, `availability`) VALUES
(3, 'Best Mobile', 'Best Mobile App Book', 'Abdurrahman', 3000, 'Technology', 'Avaliable'),
(4, 'Java Programming', 'learn to code', 'Belal Khan', 300, 'technology', 'Not available ');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `oid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `card_number` int(11) NOT NULL,
  `delivery_address` varchar(255) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`oid`, `bid`, `customer_id`, `card_number`, `delivery_address`, `order_date`) VALUES
(1, 3, 1, 1122334455, 'Dubai', '2019-04-30'),
(2, 2, 1, 2147483647, 'JOS', '2019-04-30'),
(3, 2, 1, 2147483647, 'RAK', '2019-04-30'),
(4, 2, 1, 2147483647, 'RAK', '2019-04-30'),
(5, 3, 1, 2147483647, 'JOS', '2019-05-01'),
(6, 3, 2, 88990077, 'RAK', '2019-05-02'),
(7, 3, 1, 1233, 'rak', '2023-12-09'),
(8, 3, 4, 234, 'dubai', '2023-12-09'),
(9, 3, 1, 234, 'rak', '2023-12-10'),
(10, 3, 1, 234, 'rak', '2023-12-10'),
(11, 3, 1, 4234, 'Rak', '2023-12-15'),
(12, 3, 1, 638432, 'Dubai', '2023-12-15'),
(13, 4, 4, 4534, 'DUBAI', '2023-12-16'),
(14, 4, 4, 88934, 'Dubai', '2023-12-16');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `Oitem_id` int(11) NOT NULL,
  `OID` int(11) NOT NULL,
  `BID` int(255) NOT NULL,
  `Qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`Oitem_id`, `OID`, `BID`, `Qty`) VALUES
(1, 1, 3, 6),
(2, 2, 2, 22),
(3, 3, 2, 22),
(4, 4, 2, 22),
(5, 5, 3, 22),
(6, 6, 3, 30),
(7, 7, 3, 10),
(8, 8, 3, 23),
(9, 9, 3, 23),
(10, 10, 3, 23),
(11, 11, 3, 12),
(12, 12, 3, 12),
(13, 13, 4, 12),
(14, 14, 4, 12);

-- --------------------------------------------------------

--
-- Table structure for table `supplier_details`
--

CREATE TABLE `supplier_details` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `number` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier_details`
--

INSERT INTO `supplier_details` (`id`, `Name`, `address`, `number`) VALUES
(1, 'Banbury', 'JOS, Nigeria', 37358408);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`Oitem_id`);

--
-- Indexes for table `supplier_details`
--
ALTER TABLE `supplier_details`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `Oitem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `supplier_details`
--
ALTER TABLE `supplier_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
