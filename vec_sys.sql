-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2025 at 12:12 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vec_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_add_customer`
--

CREATE TABLE `tbl_add_customer` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `customer_type` enum('Buyer','Seller','Tenant') NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `upload_file_name` varchar(255) NOT NULL,
  `upload_file_path` varchar(255) NOT NULL,
  `budget` int(11) NOT NULL,
  `area` varchar(255) NOT NULL,
  `property_type` varchar(255) NOT NULL,
  `status` enum('Looking','OnHold','Closed Deal') NOT NULL,
  `purpose` enum('Investment','Self-use','Rental','') NOT NULL,
  `agent_linked` varchar(255) NOT NULL,
  `owned_property` varchar(255) NOT NULL,
  `rental_duration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_add_customer`
--

INSERT INTO `tbl_add_customer` (`id`, `uid`, `f_name`, `l_name`, `customer_type`, `contact`, `email`, `upload_file_name`, `upload_file_path`, `budget`, `area`, `property_type`, `status`, `purpose`, `agent_linked`, `owned_property`, `rental_duration`) VALUES
(1, '1', 'abc', 'ijk', 'Buyer', 1234567890, 'abc@gmail.com', 'wer', '0', 5000, 'xyz', 'xyz', 'Looking', 'Investment', 'yes', 'wewe', 'rere'),
(2, 'customer_684178b9131943.14707809', 'john', 'doe', 'Buyer', 1234567890, 'abc@gmail.com', 'issue Book.jpeg', '../Uploads/issue Book.jpeg', 5050000, 'bfefjb', 'abc', 'Looking', 'Investment', 'hehwd', '', ''),
(3, 'customer_684179d6de8e98.31544659', 'john', 'doe', 'Seller', 1234567890, 'abc@gmail.com', 'issue Book.jpeg', '../Uploads/issue Book.jpeg', 100000, 'bfefjb', 'abc', 'Looking', 'Investment', 'hehwd', 'abc abc abc', ''),
(4, 'customer_68417f9ad39aa2.04825305', 'John', 'doe', 'Seller', 1234567890, 'abc@gmail.com', 'issue Book.jpeg', '../Uploads/issue Book.jpeg', 400000, 'bfefjb', 'abc', 'OnHold', 'Investment', 'hehwd', 'avr wert ', ''),
(5, 'customer_68417fc5aef234.60217641', 'John', 'doe', 'Buyer', 1234567890, 'abc@gmail.com', 'New booki.jpg', '../Uploads/New booki.jpg', 5050000, 'bfefjb', 'abc', 'Looking', 'Investment', 'hehwd', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_add_customer`
--
ALTER TABLE `tbl_add_customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_add_customer`
--
ALTER TABLE `tbl_add_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
