-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2021 at 05:41 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `s4rfurniture`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'admin@gmail.com', 'admin12345!');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_quantity` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `item_price` int(11) NOT NULL,
  `equal` float NOT NULL,
  `item_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL,
  `fileurl` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `created_at`, `updated_at`, `status`, `fileurl`) VALUES
(1, 'Bed', '../uploads/61bae2e828a490.78876940.png', '2021-12-16 06:55:36', '2021-12-16 06:55:36', 1, ''),
(2, 'Chair', '../uploads/61bc3dfa56d052.51932823.jpg', '2021-12-17 07:36:26', '2021-12-17 07:36:26', 1, ''),
(3, 'Couch', '../uploads/61bae2fe0aa3e1.91137034.png', '2021-12-16 06:55:58', '2021-12-16 06:55:58', 1, ''),
(4, 'Cupboard', '../uploads/61bae3129a2808.11368174.jpg', '2021-12-16 06:56:18', '2021-12-16 06:56:18', 1, ''),
(5, 'Kitchen', '../uploads/61bff9bae49ea2.92284364.png', '2021-12-16 06:56:40', '2021-12-16 06:56:40', 1, ''),
(6, 'Table', '../uploads/61bae34032cb10.93526442.png', '2021-12-16 06:57:04', '2021-12-16 06:57:04', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(2, '', '', ''),
(3, '', '', ''),
(4, '', '', ''),
(5, '', '', ''),
(6, 'Ruxali', 'ruksalimaharjan36@gmail.com', 'test'),
(7, '', '', ''),
(8, 'Ruxali', 'ruxalimaharjan@gmail.com', 'asdg'),
(9, 'test', 'test@test.com', 'test\r\n'),
(10, '', '', ''),
(11, '', '', ''),
(12, 'Bed', 'tester2@tester.com', 'gfdssdf'),
(13, 'Ruxali', 'ruxali@gmail.com', 'asdfghjkl'),
(14, '', '', ''),
(15, 'Ruxali', 'ruxali@gmail.com', 'cvb'),
(16, '', '', ''),
(17, '', '', ''),
(18, 'test', 'tester2@tester.com', 'asdf'),
(19, 'Beds', 'ruxali@gmail.com', 'dfvbnm,'),
(20, 'test', 'tester2@tester.com', 'test'),
(21, '', '', ''),
(22, 'test', 'teseaaaaaa@test.com', 'text');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`, `status`) VALUES
(15, 'Ruxali', 'ruxalimaharjan@gmail.com', 'asdf12345', '2021-12-23 09:27:22', '2021-12-23 09:27:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `total` int(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image1`, `image2`, `description`, `category_id`, `created_at`, `updated_at`, `status`) VALUES
(1, 'King Size Bed ', 50000, '../uploads/61bd960ab9e0b_bed1a.jpg', '../uploads/61bd960abbcc8_bed1b.jpg', 'Size	King\r\nMaterial	Linen\r\nColor	Grey\r\nFurniture Finish	Metallic\r\nStyle	Contemporary', 1, '2021-12-18 08:04:26', '2021-12-18 08:04:26', 1),
(2, 'Queen size bed', 3000, '../uploads/61bda139c6635_bed2a.jpg', '../uploads/61bda139d012b_bed2b.jpg', 'Size=	Queen\r\nMaterial=	Wood\r\nColor=	Burgundy\r\nProduct Dimensions=	84.3\"L x 65\"W x 40\"H', 1, '2021-12-18 08:52:09', '2021-12-18 08:52:09', 1),
(3, 'Metal Platform Bed', 25000, '../uploads/61bdaece7acc5_bed3a.jpg', '../uploads/61bdaece7b457_bed3b.jpg', 'Size=	Queen,\r\nMaterial=	Wood, Alloy Steel,\r\nColor=	Black,\r\nStyle=	Standard', 1, '2021-12-18 09:50:06', '2021-12-18 09:50:06', 1),
(4, 'Stairway Bunk Trundle Bed', 28000, '../uploads/61bdcf2f335ec_bed4a.jpg', '../uploads/61bdcf2f34341_bed4b.jpg', 'Size:	Twin over Full\r\nMaterial:	Wood\r\nColor:	Grey\r\nFurniture Finish:	Pine\r\nStyle:	Traditional', 1, '2021-12-18 12:08:15', '2021-12-18 12:08:15', 1),
(5, 'Leather Executive Side Chair', 7000, '../uploads/61bff2cee882b_chair1a.jpg', '../uploads/61bff2cee990e_chair1b.jpg', 'Product Dimensions:	25.75\"D x 25\"W x 32.75\"H,\r\nRecommended Uses For Product:	Office,\r\nFurniture base movement:	Rock,\r\nRoom Type:	Office,\r\nColor:	Black', 2, '2021-12-20 03:04:46', '2021-12-20 03:04:46', 1),
(6, 'Couch with wooden base and leg', 45000, '../uploads/61bff47b63ca3_couch1a.jpg', '../uploads/61bff47b66ceb_couch1b.jpg', 'Product Dimensions:	89.37\"D x 44.88\"W x 37.4\"H,\r\nColor:	Slate,\r\nMaterial	Hardwood frame: polyester/nylon,\r\nRoom Type: Living Room,\r\nSeating Capacity:	3,\r\nShape:	Square,\r\nArm Style:	Track,\r\nStyle:	Classic,\r\nFrame Material:	Wood', 3, '2021-12-20 03:11:55', '2021-12-20 03:11:55', 1),
(7, 'Modern Freestanding Wardrobe', 35000, '../uploads/61bff646d086a_cupboard1.jpg', '../uploads/61bff646d1593_cupboard2.jpg', 'Product Dimensions:	82.48\"D x 22.76\"W x 81.3\"H\r\nBrand: Manhattan Comfort\r\nColor:	White\r\nMaterial:	Wood\r\nFinish Type:	White/Off-White', 4, '2021-12-20 03:19:34', '2021-12-20 03:19:34', 1),
(8, 'Kitchen Counter', 50000, '../uploads/61bffe70ed5de_kitchen1.jpg', '../uploads/61bffe70ee363_kitchen2.jpg', 'Material:	Formica,\r\nColor:	Black,\r\nStyle:	Wood,\r\nItem Dimensions LxWxH:	393 x 15.75 x 0.01 inches', 5, '2021-12-20 03:54:24', '2021-12-20 03:54:24', 1),
(9, 'Modern Office Desk', 12000, '../uploads/61c29ecc03f12_table1.jpg', '../uploads/61c29ecc04afe_table2.jpg', 'Desk design:	Computer Desk,\r\nProduct Dimensions:	17.72\"D x 53.54\"W x 30.32\"H,\r\nColor:	White,\r\nRoom Type:	Office,\r\nShape:	Rectangular,\r\nStyle:	Modern,\r\nFinish Type:	Polyester,,\r\nTop Material Type:	Wood\r\nNumber of Drawers: 3	', 6, '2021-12-22 03:43:08', '2021-12-22 03:43:08', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
