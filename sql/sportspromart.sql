-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 13, 2024 at 07:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sportspromart`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `size` varchar(5) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `category`, `item_name`, `gender`, `size`, `price`, `quantity`, `image_path`) VALUES
(1, 'Clothes', 'Men\'s T-shirt 1', 'Male', 'S', 300.00, 15, 'img/mens_tshirt1.jpg'),
(2, 'Clothes', 'Men\'s T-shirt 2', 'Male', 'M', 350.00, 19, 'img/mens_tshirt2.jpg'),
(3, 'Clothes', 'Men\'s T-shirt 3', 'Male', 'L', 400.00, 12, 'img/mens_tshirt3.jpg'),
(4, 'Clothes', 'Men\'s T-shirt 4', 'Male', 'XL', 500.00, 10, 'img/mens_tshirt4.jpg'),
(5, 'Clothes', 'Men\'s Tracks 1', 'Male', 'S', 350.00, 10, 'img/mens_tracks1.jpg'),
(6, 'Clothes', 'Men\'s Tracks 2', 'Male', 'M', 400.00, 12, 'img/mens_tracks2.jpg'),
(7, 'Clothes', 'Men\'s Tracks 3', 'Male', 'L', 450.00, 15, 'img/mens_tracks3.jpg'),
(8, 'Clothes', 'Men\'s Tracks 4', 'Male', 'XL', 500.00, 8, 'img/mens_tracks4.jpg'),
(9, 'Clothes', 'Men\'s Shorts 1', 'Male', 'S', 250.00, 10, 'img/mens_shorts1.jpg'),
(10, 'Clothes', 'Men\'s Shorts 2', 'Male', 'M', 300.00, 15, 'img/mens_shorts2.jpg'),
(11, 'Clothes', 'Men\'s Shorts 3', 'Male', 'L', 350.00, 12, 'img/mens_shorts3.jpg'),
(12, 'Clothes', 'Men\'s Shorts 4', 'Male', 'XL', 400.00, 8, 'img/mens_shorts4.jpg'),
(13, 'Clothes', 'Women\'s T-shirt 1', 'Female', 'S', 300.00, 10, 'img/womens_tshirt1.jpg'),
(14, 'Clothes', 'Women\'s T-shirt 2', 'Female', 'M', 350.00, 12, 'img/womens_tshirt2.jpg'),
(15, 'Clothes', 'Women\'s T-shirt 3', 'Female', 'L', 400.00, 8, 'img/womens_tshirt3.jpg'),
(16, 'Clothes', 'Women\'s T-shirt 4', 'Female', 'XL', 450.00, 7, 'img/womens_tshirt4.jpg'),
(17, 'Clothes', 'Women\'s Tracks 1', 'Female', 'S', 300.00, 12, 'img/womens_tracks1.jpg'),
(18, 'Clothes', 'Women\'s Tracks 2', 'Female', 'M', 350.00, 15, 'img/womens_tracks2.jpg'),
(19, 'Clothes', 'Women\'s Tracks 3', 'Female', 'L', 400.00, 8, 'img/womens_tracks3.jpg'),
(20, 'Clothes', 'Women\'s Tracks 4', 'Female', 'XL', 450.00, 6, 'img/womens_tracks4.jpg'),
(21, 'Clothes', 'Women\'s Shorts 1', 'Female', 'S', 250.00, 12, 'img/womens_shorts1.jpg'),
(22, 'Clothes', 'Women\'s Shorts 2', 'Female', 'M', 300.00, 12, 'img/womens_shorts2.jpg'),
(23, 'Clothes', 'Women\'s Shorts 3', 'Female', 'L', 350.00, 10, 'img/womens_shorts3.jpg'),
(24, 'Clothes', 'Women\'s Shorts 4', 'Female', 'XL', 400.00, 6, 'img/womens_shorts4.jpg'),
(25, 'Shoes', 'Men\'s Shoes 1', 'Male', 'S', 500.00, 10, 'img/mens_shoes1.jpg'),
(26, 'Shoes', 'Men\'s Shoes 2', 'Male', 'M', 650.00, 12, 'img/mens_shoes2.jpg'),
(27, 'Shoes', 'Men\'s Shoes 3', 'Male', 'L', 800.00, 5, 'img/mens_shoes3.jpg'),
(28, 'Shoes', 'Men\'s Shoes 4', 'Male', 'XL', 1000.00, 5, 'img/mens_shoes5.jpg'),
(29, 'Shoes', 'Men\'s Shoes 5', 'Male', 'S', 600.00, 13, 'img/mens_shoes5.jpg'),
(30, 'Shoes', 'Men\'s Shoes 6', 'Male', 'M', 700.00, 10, 'img/mens_shoes6.jpg'),
(31, 'Shoes', 'Men\'s Shoes 7', 'Male', 'L', 850.00, 7, 'img/mens_shoes7.jpg'),
(32, 'Shoes', 'Men\'s Shoes 8', 'Male', 'L', 1000.00, 4, 'img/mens_shoes8.jpg'),
(33, 'Shoes', 'Men\'s Shoes 9', 'Male', 'XL', 1200.00, 10, 'img/mens_shoes9.jpg'),
(34, 'Shoes', 'Men\'s Shoes 10', 'Male', 'M', 900.00, 8, 'img/mens_shoes10.jpg'),
(41, 'Shoes', 'Women\'s Shoes 1', 'Female', 'S', 500.00, 10, 'img/womens_shoes1.jpg'),
(42, 'Shoes', 'Women\'s Shoes 2', 'Female', 'M', 650.00, 12, 'img/womens_shoes2.jpg'),
(43, 'Shoes', 'Women\'s Shoes 3', 'Female', 'L', 800.00, 8, 'img/womens_shoes3.jpg'),
(44, 'Shoes', 'Women\'s Shoes 4', 'Female', 'XL', 1000.00, 6, 'img/womens_shoes4.jpg'),
(45, 'Shoes', 'Women\'s Shoes 5', 'Female', 'S', 750.00, 5, 'img/womens_shoes5.jpg'),
(46, 'Shoes', 'Women\'s Shoes 6', 'Female', 'M', 1200.00, 3, 'img/womens_shoes6.jpg'),
(47, 'Shoes', 'Women\'s Shoes 7', 'Female', 'XL', 1500.00, 2, 'img/womens_shoes7.jpg'),
(48, 'Shoes', 'Women\'s Shoes 8', 'Female', 'L', 950.00, 4, 'img/womens_shoes8.jpg'),
(49, 'Shoes', 'Women\'s Shoes 9', 'Female', 'XL', 1400.00, 8, 'img/womens_shoes9.jpg'),
(50, 'Shoes', 'Women\'s Shoes 10', 'Female', 'M', 1150.00, 5, 'img/womens_shoes10.jpg'),
(51, 'Accessories', 'Cricket Bat', 'Both', NULL, 4500.00, 10, 'img/bat.jpg'),
(52, 'Accessories', 'Hockey Bat', 'Both', NULL, 3300.00, 8, 'img/hockey.jpg'),
(53, 'Accessories', 'Badminton Racket', 'Both', NULL, 1200.00, 13, 'img/badminton.jpg'),
(54, 'Accessories', 'Volley Ball', 'Both', NULL, 500.00, 10, 'img/volleyball.jpg'),
(55, 'Accessories', 'Tennis balls', 'Both', NULL, 800.00, 20, 'img/tennis.jpg'),
(56, 'Accessories', 'Shuttle Cock', 'Both', NULL, 300.00, 5, 'img/shuttle.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`, `role`) VALUES
(6, 'Admin', 'admin1@gmail.com', '0c909a141f1f2c0a1cb602b0b2d7d050', '9874563215', 'Mumbai', 'Bhandup', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE `users_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `price` decimal(10,2) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
