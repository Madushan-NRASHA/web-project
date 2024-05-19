-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2023 at 06:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `method` varchar(100) NOT NULL,
  `flat` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `pin_code` int(10) NOT NULL,
  `total_products` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `state`, `country`, `pin_code`, `total_products`, `total_price`) VALUES
(1, 'dd', '464546454646', 'didula900@gmail.com', 'cash on delivery', 'fw', 'swaetstw', 'ddd', '', 'sri lanka', 867676, 'chees pizza (1) ', '450'),
(2, 'dd', '64544564465', 'didula900@gmail.com', 'credit cart', 'fw', 'swaetstw', 'ddd', '', 'sri lanka', 867676, 'chees pizza (1) ', '450'),
(3, 'dd', '1546546789', 'didula900@gmail.com', 'credit cart', 'fw', 'swaetstw', 'ddd', '', 'sri lanka', 867676, 'chees pizza (1) ', '450'),
(4, 'dd', '1546546789', 'didula900@gmail.com', 'credit cart', 'fw', 'swaetstw', 'ddd', '', 'sri lanka', 867676, 'chees pizza (1) ', '450'),
(5, 'dd', '1546546789', 'didula900@gmail.com', 'credit cart', 'fw', 'swaetstw', 'ddd', '', 'sri lanka', 867676, 'chees pizza (1) ', '450'),
(6, 'dd', '1546546789', 'didula900@gmail.com', 'credit cart', 'fw', 'swaetstw', 'ddd', '', 'sri lanka', 867676, 'chees pizza (1) ', '450'),
(7, 'dd', '1546546789', 'didula900@gmail.com', 'credit cart', 'fw', 'swaetstw', 'ddd', '', 'sri lanka', 867676, 'chees pizza (1) ', '450'),
(8, 'dd', '1546546789', 'didula900@gmail.com', 'credit cart', 'fw', 'swaetstw', 'ddd', '', 'sri lanka', 867676, 'chees pizza (1) ', '450'),
(9, 'dd', '4456454564', 'didula900@gmail.com', 'credit cart', 'fw', 'swaetstw', 'ddd', '33awraw3', 'sri lanka', 867676, 'chees pizza (1) ', '450'),
(10, 'dd', '4456454564', 'didula900@gmail.com', 'credit cart', 'fw', 'swaetstw', 'ddd', '33awraw3', 'sri lanka', 867676, 'chees pizza (1) ', '450'),
(11, 'dd', '2', '789official123@gmail.com', 'cash on delivery', 'fw', 'swaetstw', 'ddd', '33awraw3', 'sri lanka', 867676, 'chees pizza (1) ', '450'),
(12, 'dd', '4654648465', '789official123@gmail.com', 'credit cart', 'fw', 'swaetstw', 'ddd', '', 'sri lanka', 867676, 'bun (5) ', '225'),
(13, 'dd', '4654648465', '789official123@gmail.com', 'credit cart', 'fw', 'swaetstw', 'ddd', '', 'sri lanka', 867676, 'bun (5) ', '225'),
(14, 'dd', '4446541654', '789official123@gmail.com', 'credit cart', 'fw', 'swaetstw', 'ddd', '', 'sri lanka', 867676, 'bun (5) ', '225'),
(15, 'dd', '4446541654', '789official123@gmail.com', 'credit cart', 'fw', 'swaetstw', 'ddd', '', 'sri lanka', 867676, 'bun (5) ', '225'),
(16, 'dd', '13564313546', '789official123@gmail.com', 'credit cart', 'fw', 'swaetstw', 'ddd', '', 'sri lanka', 867676, 'bun (5) ', '225'),
(17, 'dd', '786', 'didula900@gmail.com', 'cash on delivery', 'fw', 'swaetstw', 'ddd', '33awraw3', 'sri lanka', 867676, 'bun (5) ', '225'),
(18, 'dd', '486786778', 'didula900@gmail.com', 'cash on delivery', 'fw', 'swaetstw', 'ddd', '', 'sri lanka', 867676, 'bun (5) ', '225');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
