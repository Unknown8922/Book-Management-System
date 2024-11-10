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
-- Database: `dubaibooks_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '1234'),
('admin2', '$2y$10$m/DgVahqVTWyI4Rjce2g4eHyMuJTJXaO22l47Zl.478zZz0Z/GZM6');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone_number` int(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `address`, `gender`, `phone_number`, `email`) VALUES
(1, 'zoe', 'Dubai', 'Female', 564345, 'zoevarma1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `registry`
--

CREATE TABLE `registry` (
  `supid` int(11) NOT NULL,
  `supname` varchar(100) NOT NULL,
  `wsdlurl` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registry`
--

INSERT INTO `registry` (`supid`, `supname`, `wsdlurl`) VALUES
(1, 'Banbury', 'http://localhost/Dubai_Books/Banbury/service.wsdl'),
(2, 'Cerebro', 'http://localhost/Dubai_Books/Cerebro/service.wsdl'),
(3, 'Plutonium', 'http://localhost/Dubai_Books/Plutonium/service.wsdl'),
(4, 'random', 'ww');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`username`, `password`) VALUES
('supplier1', '$2y$10$jrQZYvZVmZW54kHP6Hwut.aj/BPeE22mBGpteeJm6DP89SlBxQapK');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `gender`, `phone_number`, `email`, `username`, `password`) VALUES
(4, 'Sonu Krishna', 'Dubai,UAE', 'Male', 3483942, 'sonu@gmail.com', 'sonu123', 'helloworld'),
(5, 'John Wick', 'Dubai', 'Male', 34829, 'john@gmail.com', 'babayaga', '2345'),
(6, 'Rigby Rickerson', 'Dubai', 'Male', 782834, 'rigby@gmail.com', 'rigby12', 'hamboning');

-- --------------------------------------------------------

--
-- Table structure for table `user_comp`
--

CREATE TABLE `user_comp` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `comp` varchar(255) NOT NULL,
  `supplier` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_comp`
--

INSERT INTO `user_comp` (`id`, `user`, `comp`, `supplier`) VALUES
(1, 'Abdurrahman Maihula', 'My order is delayed', 'Banbury'),
(2, 'Abdurrahman Maihula', 'Wrong item delivered', 'Cerebro'),
(4, 'Abdurrahman Maihula', 'lame', '3'),
(5, 'Abdurrahman Maihula', 'not working', '2'),
(6, 'Abdurrahman Maihula', 'Order is taking a long time', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registry`
--
ALTER TABLE `registry`
  ADD PRIMARY KEY (`supid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user_comp`
--
ALTER TABLE `user_comp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registry`
--
ALTER TABLE `registry`
  MODIFY `supid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_comp`
--
ALTER TABLE `user_comp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
