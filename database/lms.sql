-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2023 at 07:30 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `slno` int(10) NOT NULL,
  `id` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `name` varchar(25) NOT NULL,
  `profile_mail` varchar(255) NOT NULL,
  `mob` varchar(12) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `item_topware` varchar(8) NOT NULL,
  `item_bottomware` varchar(8) NOT NULL,
  `item_woolen` varchar(8) NOT NULL,
  `item_other` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`slno`, `id`, `status`, `name`, `profile_mail`, `mob`, `address`, `date`, `time`, `item_topware`, `item_bottomware`, `item_woolen`, `item_other`) VALUES
(11, '20230122AF99', 'Pending', 'Aditya R Mishra', 'arms@gmail.com', '7894540012', 'Lakshmi Narasimha Complex,2nd Main Road,Vijayanagar,Bangalore, PIN-560040', '2023-01-25', '10:30:00', '6', '3', '0', '0'),
(12, '20230122C1CD', 'Processing', 'Aditya R Mishra', 'arms@gmail.com', '7894540012', 'Lakshmi Narasimha Complex,2nd Main Road,Vijayanagar,Bangalore, PIN-560040', '2023-01-20', '15:45:00', '2', '6', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `slno` int(4) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `user-email` varchar(25) NOT NULL,
  `user_mob` text NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`slno`, `user_name`, `user-email`, `user_mob`, `user_password`, `user_address`) VALUES
(0, 'Aditya R Mishra', 'arms@gmail.com', '7894540012', '$2y$10$vm0Ga.6EL8B8MICGCsTk2OosASBDq2n/n5dKcDOgAD4Dy72qJEvNS', 'Lakshmi Narasimha Complex,2nd Main Road,Vijayanagar,Bangalore, PIN-560040');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`slno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `slno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
