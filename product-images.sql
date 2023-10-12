-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2023 at 01:25 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `product-images`
--

CREATE TABLE `product-images` (
  `id` int(11) NOT NULL,
  `product_id` int(255) NOT NULL,
  `product_image_url` varchar(10000) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product-images`
--

INSERT INTO `product-images` (`id`, `product_id`, `product_image_url`, `timestamp`) VALUES
(9, 4, '/uploads/Product_Images/4-Arrow 1.png', '2023-10-12 11:09:36'),
(10, 4, '/uploads/Product_Images/4-product4.png', '2023-10-12 11:09:36'),
(11, 4, '/uploads/Product_Images/4-product2.png', '2023-10-12 11:09:36'),
(12, 4, '/uploads/Product_Images/4-product3.png', '2023-10-12 11:09:36'),
(13, 5, '/uploads/Product_Images/5-0_Arrow 1.png', '2023-10-12 11:11:53'),
(14, 5, '/uploads/Product_Images/5-1_Arrow 1.png', '2023-10-12 11:11:53'),
(15, 5, '/uploads/Product_Images/5-2_product2.png', '2023-10-12 11:11:53'),
(16, 5, '/uploads/Product_Images/5-3_product3.png', '2023-10-12 11:11:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product-images`
--
ALTER TABLE `product-images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product-images`
--
ALTER TABLE `product-images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
