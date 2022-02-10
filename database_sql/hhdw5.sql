-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2022 at 04:31 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hhdw5`
--

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `user_id`, `question`, `answer`) VALUES
(1, 1, 'I’m having trouble on our product?', '<p>Please contact your supplier and they will help guide you through the process.</p>'),
(2, 2, 'I cannot sign up for classes service online.', '<p>Please contact your home gym.</p>'),
(3, 3, 'Becoming her own boss, with the help of HGE', '<p>Angel Johnson&rsquo;s &quot;gym fashion&quot; faux pas turned into a fast-growing small business by selling in HGE&#39;s store. The level of success that ICONI has achieved in a short period of time is beyond what Johnson ever expected.</p>'),
(4, 5, 'What are the common reasons for delay?', '<p>The most&nbsp;<strong>common reasons</strong>&nbsp;for delivery delays are:</p><p>1)&nbsp;<strong>Seller Sourcing Issues</strong>: The seller could take longer than expected time to fulfill your order.</p><p>2)&nbsp;<strong>Courier service delay</strong>: Either SX or one of our 3PL partners is taking longer than expected time to deliver your order.</p><p>3)&nbsp;<strong>Cross Border shipment delay</strong>: Due to Air Transportation or Custom delays, your Cross Border order may take longer than usual to be delivered.</p><p>4)&nbsp;<strong>Customer not available</strong>: Our Delivery Hero has not been able to get in touch with the customer.</p><p>5)&nbsp;<strong>Wrong Address / Phone Number</strong>: While placing an order the customer has entered an incorrect address or phone number, leading to a communication barrier with the customer.</p><p>6)&nbsp;<strong>Extreme Weather</strong>: The weather conditions of the destined city may be rough, for example, heavy rainfall, smog, landslide, etc. which may result in a delivery hold-up.</p><p>7)&nbsp;<strong>Law and Order conditions</strong>: Due to religious procession, lockdowns, strike issues resulting in route blocking, you may receive your package after the promised time.</p>'),
(5, 9, 'Which products take longer shipping time?', '<p>Global / Overseas products are internationally sourced products and take 30-35 flat days to be delivered to your doorstep. To know more about the Global Collection range at Shop</p>'),
(6, 7, 'How do I track my complaint about delivery?\r\n', '<p>We apologize for the inconvenience that caused you to register a complaint at Shop.<br />It takes&nbsp;<strong>3 working days&nbsp;</strong>to respond to the complaint. If you have not heard back from our Complaint Resolution team, please contact us on&nbsp;<strong>live chat between 8 a.m. to 9:30 p.m.</strong></p>');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `review` longtext NOT NULL,
  `f_img` varchar(255) NOT NULL,
  `s_img` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `review`, `f_img`, `s_img`, `created_at`, `updated_at`) VALUES
(1, 'CAP Barbell 150 LB Dumbbell Set with Rack', 0, '<p>A pair of 5-pound, 10-pound, 15-pound, 20-pound, and 25-pound coated hex dumbbells and a red A-frame dumbbell rack to store the weights. This set ships in multiple boxes</p><p>The A-frame design of this rack maximizes floor space by storing dumbbells in an &ldquo;A&rdquo; shape, or vertical fashion. Easily access and store dumbbells. Rubber inserts prevent dumbbells and rack from scratches</p><p>&nbsp;Customize your home gym with the red a-frame rack made with steel &amp; finished with durable powder coat. Heads are made from ASTM A48 Class 20 grey iron, joined by a 1018 cold rolled solid steel handle with an extreme durable coating</p>', '', 'product1.png', 'product2.png', '2022-02-10 14:41:49', '2022-02-10 14:41:49'),
(2, 'qwewer', 3000, '<p>sadfasdfdfsdfsdf</p>', 'You do need a pair of pliers--which says in the instructions not included-- to hold the nut while using the allen wrench to tighten the bolt. This is very common and ensures a tight fit. When you are assembling something that is going to hold 150lbs, you need to have it be sturdy enough and hand-tightening just will not cut it. Hope this helps', 'product2.png', 'product1.png', '2022-02-10 14:48:55', '2022-02-10 14:48:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `comfirmpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `password`, `comfirmpassword`) VALUES
(1, 'Leo Jake', 'leojake@gmail.com', '09753951456', '3da541559918a808c2402bba5012f6c60b27661c', '3da541559918a808c2402bba5012f6c60b27661c'),
(2, 'Author Morgan', 'authormorgan@gmail.com', '09789632147', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(3, 'Black Jack', 'blackjack@gmail.com', '09753147369', '75d4c9b02467d96bc2ea6d655eb983d5a7a97a9b', '75d4c9b02467d96bc2ea6d655eb983d5a7a97a9b'),
(4, 'Jhon Smith', 'jhonsmith@gmail.com', '0975321789', '3da541559918a808c2402bba5012f6c60b27661c', '3da541559918a808c2402bba5012f6c60b27661c'),
(5, 'Rose', 'rose@gmail.com', '09789571532', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(6, 'Lisa', 'lisa@gmail.com', '0975321598', '3da541559918a808c2402bba5012f6c60b27661c', '3da541559918a808c2402bba5012f6c60b27661c'),
(7, 'Cheng Xiao', 'chengxiao@gmail.com', '09456357896', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(8, 'Rock', 'rock@gmail.com', '09453719528', '3da541559918a808c2402bba5012f6c60b27661c', '3da541559918a808c2402bba5012f6c60b27661c'),
(9, 'Alan Walker', 'alanwalker@gmail.com', '09486321457', '75d4c9b02467d96bc2ea6d655eb983d5a7a97a9b', '75d4c9b02467d96bc2ea6d655eb983d5a7a97a9b'),
(10, 'Robert', 'robert@gmail.com', '09458256951', '3da541559918a808c2402bba5012f6c60b27661c', '3da541559918a808c2402bba5012f6c60b27661c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
