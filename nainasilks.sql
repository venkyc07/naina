-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2022 at 12:46 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nainasilks`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(10) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1 COMMENT '1->active,0->inactive',
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `cat_name`, `status`, `created_on`) VALUES
(1, 'Sarees', 1, '2022-02-03 15:01:23'),
(2, 'Candles', 1, '2022-02-03 16:58:33');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(10) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `name`, `email`, `mobile`, `message`, `created_on`) VALUES
(1, 'venkatesh', 'venky07.shavon@gmail.com', '09494841571', 'asdsa', '2021-11-18 23:08:00'),
(2, 'Maria Li', 'marialiwrites@gmail.com', '031 840 92 75', 'Hi,\r\n\r\nHow are you doing? \r\n\r\nWill you be interested in doing a high-quality guest post on your site? It is a 3 step process where:\r\n\r\n1. I will send you three amazing topic ideas for a post.\r\n2. You need to choose one out of those.\r\n3. I will then send a high-quality, SEO Friendly article on that chosen topic to get it published on your website with one do-follow link to my site.\r\n\r\nLet me know if I shall start with step 1?\r\n\r\nBest,\r\n\r\nMaria Li', '2021-12-07 02:44:51'),
(3, 'Bep', 'tcdb6y0e@yahoo.com', '84298642246', 'Hi, this is Jenny. I am sending you my intimate photos as I promised. https://tinyurl.com/y4gg6dy2', '2021-12-18 13:47:52'),
(4, 'Bep', 'w241vmq9@icloud.com', '87944215325', 'Hi, this is Anna. I am sending you my intimate photos as I promised. https://tinyurl.com/y327hn9t', '2021-12-22 09:08:58'),
(5, 'seo_courses', '87654325565@devioplus.ru', '88946936624', 'Useful information \r\n<a href=https://ÐºÑƒÑ€ÑÑ‹-ÑÐµÐ¾-Ð¼Ð¾ÑÐºÐ²Ð°2.Ñ€Ñ„/> </a>', '2021-12-26 05:17:09'),
(6, 'Bep', '23nuefvo@yahoo.com', '81698719294', 'Hi, this is Jeniffer. I am sending you my intimate photos as I promised. https://tinyurl.com/y3surttk', '2022-01-11 16:13:39'),
(7, 'spealt', 'rfasnze0@hotmail.com', '86462736153', 'Cryptocurrency rates are breaking records, which means you have the opportunity to make money on cryptocurrencies. Join our system and start making money with us. Go to system: https://tinyurl.com/y6q6ag5y', '2022-01-12 04:55:54'),
(8, 'Bep', '5bp6gkb1@yahoo.com', '81886674616', 'Hi, this is Jenny. I am sending you my intimate photos as I promised. https://tinyurl.com/ybom345y', '2022-01-20 08:09:14'),
(9, 'nam2505199krya', 'hholcombcessar@gmail.com', '85829769859', 'mns2505199utr aN2XT9i YI1e ga8EDSD', '2022-01-22 22:12:55'),
(10, 'Bep', '5qyw2n6k@icloud.com', '87223497337', 'Hi, this is Julia. I am sending you my intimate photos as I promised. https://tinyurl.com/y945tuaf', '2022-01-27 12:47:35');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `course_cat` varchar(100) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` int(1) NOT NULL COMMENT '1->active, 0->inactive',
  `student_id` int(11) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `payment_date` datetime NOT NULL,
  `course_id` int(11) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `course_cat` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1 COMMENT '1->active, 0->inactive',
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(150) NOT NULL,
  `actual_price` varchar(50) NOT NULL,
  `offer_price` varchar(50) NOT NULL,
  `product_sizes` varchar(200) NOT NULL,
  `product_description` text NOT NULL,
  `aditional_description` text NOT NULL,
  `editor1` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1 COMMENT '1->active, 0->inactive',
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `product_image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `product_name`, `actual_price`, `offer_price`, `product_sizes`, `product_description`, `aditional_description`, `editor1`, `status`, `created_on`, `product_image`) VALUES
(1, 1, 'Kanchi pattu saree', '1500', '1450', 'l,xl', 'Test Product Entry ', '\r\nTest Product Description\r\n\r\n', '', 1, '2022-02-03 16:08:34', 'products/kanchi pattu.jpg'),
(2, 1, 'uppada Pattu', '2500', '2200', 's', 'Test Product Entry                        1                                                                                                            ', '<p>Test Product Description11</p>\r\n', '', 1, '2022-02-03 16:09:17', 'products/kanchi pattu.jpg'),
(3, 2, 'Candle 1', '50', '48', '', 'Test                                                                                                                ', '<p>Lorem Ipsum is a Dummy text.</p>\r\n\r\n<ul>\r\n	<li>Test 1</li>\r\n	<li>Test 2.</li>\r\n	<li>Test </li>\r\n</ul>\r\n<ul>\r\n	<li>Test col2</li>\r\n	<li>test col 2</li>\r\n</ul>\r\n', '', 1, '2022-02-03 17:01:57', 'products/candle1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1 COMMENT '1->Active, 0->inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`admin_id`, `email`, `password`, `status`) VALUES
(1, 'admin@gmail.com', 'admin@2022', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
