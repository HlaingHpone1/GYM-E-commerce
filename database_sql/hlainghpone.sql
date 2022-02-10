-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2022 at 04:27 PM
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
-- Database: `bookshop`
--
CREATE DATABASE IF NOT EXISTS `bookshop` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bookshop`;

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `author_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `author_name`) VALUES
(1, 'U Ba'),
(2, 'Daw Mya'),
(3, 'U Thaung'),
(4, 'Daw Shwe'),
(5, 'U Chit');

-- --------------------------------------------------------

--
-- Table structure for table `book_author`
--

CREATE TABLE `book_author` (
  `author_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_author`
--

INSERT INTO `book_author` (`author_id`, `book_id`) VALUES
(1, 5),
(2, 4),
(3, 3),
(4, 2),
(5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `book_customer`
--

CREATE TABLE `book_customer` (
  `customer_number` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_customer`
--

INSERT INTO `book_customer` (`customer_number`, `book_id`) VALUES
(1, 5),
(2, 4),
(3, 3),
(4, 2),
(5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `book_subject`
--

CREATE TABLE `book_subject` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(255) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_subject`
--

INSERT INTO `book_subject` (`book_id`, `book_name`, `subject_id`) VALUES
(1, 'To Father', 3),
(2, 'To Mother', 4),
(3, 'Bo Aung San', 1),
(4, 'PHP', 2),
(5, 'PhotoShop', 3);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_number` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `customer_credit` int(11) NOT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_number`, `customer_name`, `customer_phone`, `customer_credit`, `address`) VALUES
(1, 'Aye Aye', '0978456', 700, 'No.1, Myittar st. Yangon'),
(2, 'Mya Mya', '09125856', 2500, 'No.10, Myittar st. Mandalay'),
(3, 'Thaw Thaw', '0915975312', 500, 'No.20, Myittar st. Pyin Oo Lwin'),
(4, 'Hla Hla', '097844516', 1700, 'No.29, Myittar st. Bago'),
(5, 'Pa Pa', '0974578611', 1000, 'No.49, Myittar st. Myit Kyi Nar');

-- --------------------------------------------------------

--
-- Table structure for table `student_types`
--

CREATE TABLE `student_types` (
  `student_typ` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`) VALUES
(1, 'History'),
(2, 'Maths'),
(3, 'Myanmar'),
(4, 'English'),
(5, 'Physic');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `book_author`
--
ALTER TABLE `book_author`
  ADD KEY `author_id` (`author_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `book_customer`
--
ALTER TABLE `book_customer`
  ADD KEY `customer_number` (`customer_number`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `book_subject`
--
ALTER TABLE `book_subject`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_number`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_author`
--
ALTER TABLE `book_author`
  ADD CONSTRAINT `book_author_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`),
  ADD CONSTRAINT `book_author_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `book_subject` (`book_id`);

--
-- Constraints for table `book_customer`
--
ALTER TABLE `book_customer`
  ADD CONSTRAINT `book_customer_ibfk_1` FOREIGN KEY (`customer_number`) REFERENCES `customer` (`customer_number`),
  ADD CONSTRAINT `book_customer_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `book_subject` (`book_id`);

--
-- Constraints for table `book_subject`
--
ALTER TABLE `book_subject`
  ADD CONSTRAINT `book_subject_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`);
--
-- Database: `dragon_world`
--
CREATE DATABASE IF NOT EXISTS `dragon_world` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dragon_world`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `DOB` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `phone`, `DOB`) VALUES
(1, 'Hlaingasdf', 'Hponeasdf', 'hlaing@gmail.com', 9456789, '2003-12-20'),
(2, 'author', 'asdf', 'hlainghpone647373@gmail.com', 2147483647, '2021-09-09'),
(3, 'author', 'asdf', 'hlainghpone647373@gmail.com', 2147483647, '2021-09-09'),
(6, 'Hlaing', 'Hpone', 'cepsunofye@biyac.com', 2147483647, '2021-11-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Database: `hhdw5`
--
CREATE DATABASE IF NOT EXISTS `hhdw5` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hhdw5`;

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
--
-- Database: `hh_dw5`
--
CREATE DATABASE IF NOT EXISTS `hh_dw5` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hh_dw5`;

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
(1, 5, 'lorem lorem', 'lorem loremlorem loremlorem loremlorem loremlorem loremlorem lorem'),
(2, 1, 'sdfasd', 'sdafasdf'),
(3, 3, 'sdfsadfa', 'sdafsda'),
(5, 0, '', ''),
(8, 7, 'test', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'hlaing edit', 'hlaignedit@gmail.com', 'asdfasdfedit'),
(2, 'leo', 'leo@gmail.com', '1234'),
(4, 'asf', 'asd@gmail.com', 'asdfasdf'),
(5, 'root', '', 'asdfasdf'),
(6, 'root', 'hlainghpone737321@gmail.com', 'asdfasdf'),
(7, 'asdf', 'asdf@gmail.com', 'asdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Database: `info_system`
--
CREATE DATABASE IF NOT EXISTS `info_system` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `info_system`;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `age`, `address`, `email`) VALUES
(3, 'mg mg aye', 2500, 'No.10, Myittat st', 'mgmg@gamil.com'),
(4, 'mya mya', 30, 'No.2, Myittat st', 'mya@gamil.com'),
(5, 'aye aye', 25, 'No.3, Myittat st', 'ayeaye@gamil.com'),
(6, 'tin tin', 218, 'No.4, Myittat st', 'tintin@gamil.com'),
(10, 'Hlaing ', 10, 'No.10, Myittar st', 'hlaing@gmail.com'),
(11, 'aassff', 12, '122asdf', 'hlaing@gamil.com'),
(13, 'sdf', 213, 'werwe', 'h@gamil.com'),
(14, 'Hlaing Hpone', 2323, 'No.124 Mahabandola Road, Pazundaung', 'hlaing@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `comfirmpassword` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `lecture` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `note` varchar(1000) NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `firstname`, `lastname`, `password`, `comfirmpassword`, `sex`, `lecture`, `class`, `DOB`, `note`, `mail`) VALUES
(1, 'asdf', 'asdf', 'asdf', 'asdf', 'male', '12', 'bit', '2000-01-01', 'asdfasdfasdfasdfasdf', 'hka@gmail.com'),
(2, 'asdf', 'asdf', 'asdf', 'asdf', 'male', '12', 'bit', '2000-01-01', 'asdfasdfasdfasdfasdf', 'hka@gmail.com'),
(3, 'asdf', 'asdf', 'asdf', 'asdf', 'male', 'bit', 'bit', '2000-01-01', 'asdfasdf', 'asdf@gmail.com'),
(4, 'asdf', 'asdf', 'asdf', 'asdf', 'male', 'bit', 'bit', '2000-01-01', 'asdfasdf', 'asdf@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Database: `login_system`
--
CREATE DATABASE IF NOT EXISTS `login_system` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `login_system`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `majors` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `password` varchar(255) NOT NULL,
  `repassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `phone`, `gender`, `majors`, `DOB`, `password`, `repassword`) VALUES
(1, 'Hlaing', 'Hpone', 'hlaing@gmail.com', 9123456, 'male', 'BIT, History, English', '2000-01-01', 'user123', 'user123'),
(27, 'author', 'Morgan', 'author@gmail.com', 2147483647, 'gender', 'bit', '2021-11-01', 'user123456', 'user123456'),
(32, 'Leo', 'jake', 'leo@gmail.com', 2147483647, 'male', 'bus,cs,ai', '2021-11-03', 'leo123', 'leo123'),
(33, 'Hla', 'la', 'hla@gmail.com', 2345678, 'male', 'bus,cs,ai', '2021-11-11', 'asdfasdf', 'asdfasdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"hhdw5\",\"table\":\"products\"},{\"db\":\"hhdw5\",\"table\":\"faq\"},{\"db\":\"hhdw5\",\"table\":\"users\"},{\"db\":\"hhdw5\",\"table\":\"product\"},{\"db\":\"hh_dw5\",\"table\":\"users\"},{\"db\":\"hh_dw5\",\"table\":\"product\"},{\"db\":\"hh_dw5\",\"table\":\"faq\"},{\"db\":\"hhdw5\",\"table\":\"images\"},{\"db\":\"testing\",\"table\":\"users\"},{\"db\":\"usersinfo\",\"table\":\"users\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'hhdw5', 'products', '{\"sorted_col\":\"`updated_at`  DESC\"}', '2022-02-10 06:54:32'),
('root', 'hhdw5', 'users', '[]', '2022-02-01 14:34:43');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2022-02-10 15:26:13', '{\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `studentdb`
--
CREATE DATABASE IF NOT EXISTS `studentdb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `studentdb`;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`) VALUES
(1, 'computer secience'),
(2, 'history'),
(3, 'geography');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_no` int(11) NOT NULL,
  `department_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Stand-in structure for view `ordersystem`
-- (See below for the actual view)
--
CREATE TABLE `ordersystem` (
`first_name` varchar(255)
,`last_name` varchar(255)
,`course_name` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `student_typ` varchar(255) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `first_name`, `last_name`, `student_typ`, `course_id`, `age`) VALUES
(1, 'pavel', 'dobovitch', 'home student', 1, 30),
(2, 'winston', 'kodogo', 'overseas student', 1, 21),
(3, 'dawn', 'cove', 'overseas student', 1, 21),
(4, 'satpal', 'singh', 'home student', 2, 33),
(5, 'horace', 'smith', 'home student', 3, 19);

-- --------------------------------------------------------

--
-- Table structure for table `student_types`
--

CREATE TABLE `student_types` (
  `student_typ` varchar(255) NOT NULL,
  `fees` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_types`
--

INSERT INTO `student_types` (`student_typ`, `fees`) VALUES
('home student', 5000),
('overseas student', 10000);

-- --------------------------------------------------------

--
-- Stand-in structure for view `sytem`
-- (See below for the actual view)
--
CREATE TABLE `sytem` (
`first_name` varchar(255)
,`last_name` varchar(255)
,`course_name` varchar(255)
);

-- --------------------------------------------------------

--
-- Structure for view `ordersystem`
--
DROP TABLE IF EXISTS `ordersystem`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ordersystem`  AS   (select `s`.`first_name` AS `first_name`,`s`.`last_name` AS `last_name`,`c`.`course_name` AS `course_name` from (`student` `s` join `course` `c`) where `s`.`course_id` = `c`.`course_id`)  ;

-- --------------------------------------------------------

--
-- Structure for view `sytem`
--
DROP TABLE IF EXISTS `sytem`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sytem`  AS   (select `s`.`first_name` AS `first_name`,`s`.`last_name` AS `last_name`,`c`.`course_name` AS `course_name` from (`student` `s` join `course` `c`) where `s`.`course_id` = `c`.`course_id`)  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_no`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `student_typ` (`student_typ`);

--
-- Indexes for table `student_types`
--
ALTER TABLE `student_types`
  ADD PRIMARY KEY (`student_typ`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`student_typ`) REFERENCES `student_types` (`student_typ`);
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Database: `testing`
--
CREATE DATABASE IF NOT EXISTS `testing` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `testing`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comfirmpassword` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Database: `users`
--
CREATE DATABASE IF NOT EXISTS `users` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `users`;
--
-- Database: `usersinfo`
--
CREATE DATABASE IF NOT EXISTS `usersinfo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `usersinfo`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `address` text NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `age`, `address`, `password`) VALUES
(1, 'hlaing Hpone', 'admin@gmail.com', 25, 'La Min Thar Street', 'asdf'),
(2, 'la la', 'lala@gmail.com', 14, 'bo la min', 'asdf'),
(3, 'Min min', 'minmin@gmail.com', 17, 'minthaw@gmail.com', 'asdfqwer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Database: `win_pa_pa_database`
--
CREATE DATABASE IF NOT EXISTS `win_pa_pa_database` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `win_pa_pa_database`;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` varchar(50) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_phone` varchar(50) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_phone`, `customer_email`, `age`) VALUES
('WPC001', 'U Hla', '09-456789123', 'hla@google.com', 30),
('WPC002', 'Daw Mya', '09-123789456', 'myamya@.outlookcom', 35),
('WPC003', 'Mg Mg', '09-123456789', 'mgmg@icloud.com', 47),
('WPC004', 'U Thein Aye', '09-987654321', 'theinaye@yahoo.com', 29),
('WPC005', 'Daw Nu Nu', '09-1597532486', 'nunu@sfu.com', 25);

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `order_id` varchar(50) NOT NULL,
  `qty` int(10) NOT NULL,
  `order_date` date NOT NULL,
  `order_type_id` varchar(50) DEFAULT NULL,
  `product_code` varchar(50) NOT NULL,
  `customer_id` varchar(50) NOT NULL,
  `total_amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`order_id`, `qty`, `order_date`, `order_type_id`, `product_code`, `customer_id`, `total_amount`) VALUES
('WPO001', 1000, '2022-05-02', 'WPOT003', 'WPP003', 'WPC002', 500000),
('WPO002', 900, '2022-02-15', 'WPOT003', 'WPP004', 'WPC001', 65000),
('WPO003', 200, '2022-02-03', 'WPOT001', 'WPP001', 'WPC003', 100000),
('WPO004', 3000, '2022-01-30', 'WPOT004', 'WPP005', 'WPC004', 700000),
('WPO005', 650, '2022-02-20', 'WPOT002', 'WPP003', 'WPC001', 530000);

-- --------------------------------------------------------

--
-- Table structure for table `order_type`
--

CREATE TABLE `order_type` (
  `order_type_id` varchar(50) NOT NULL,
  `order_type_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_type`
--

INSERT INTO `order_type` (`order_type_id`, `order_type_name`) VALUES
('WPOT001', 'small'),
('WPOT002', 'medium'),
('WPOT003', 'large'),
('WPOT004', 'huge');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_code` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_weight` varchar(50) NOT NULL,
  `product_type_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_code`, `product_name`, `product_price`, `product_weight`, `product_type_id`) VALUES
('WPP001', 'Book', '80000', '250g', 'WPPT002'),
('WPP003', 'business card', '350000', '10g', 'WPPT003'),
('WPP004', 'pamphlet', '50000', '50g', 'WPPT004'),
('WPP005', 'Note pad', '650000', '150g', 'WPPT001');

-- --------------------------------------------------------

--
-- Table structure for table `product_staff`
--

CREATE TABLE `product_staff` (
  `product_staff_id` varchar(50) NOT NULL,
  `product_code` varchar(50) NOT NULL,
  `staff_serial_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_staff`
--

INSERT INTO `product_staff` (`product_staff_id`, `product_code`, `staff_serial_number`) VALUES
('WPPSF001', 'WPP003', 'WPS004'),
('WPPSF002', 'WPP005', 'WPS002'),
('WPPSF003', 'WPP004', 'WPS003'),
('WPPSF004', 'WPP001', 'WPS001');

-- --------------------------------------------------------

--
-- Table structure for table `product_supplier`
--

CREATE TABLE `product_supplier` (
  `product_supplier_id` varchar(50) NOT NULL,
  `product_type_id` varchar(50) NOT NULL,
  `supplier_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_supplier`
--

INSERT INTO `product_supplier` (`product_supplier_id`, `product_type_id`, `supplier_id`) VALUES
('WPPS001', 'WPPT001', 'WPSP002'),
('WPPS002', 'WPPT004', 'WPSP001'),
('WPPS003', 'WPPT002', 'WPSP003'),
('WPPS004', 'WPPT003', 'WPSP004');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `product_type_id` varchar(50) NOT NULL,
  `product_type_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`product_type_id`, `product_type_name`) VALUES
('WPPT001', 'Npad'),
('WPPT002', 'GBook'),
('WPPT003', 'card'),
('WPPT004', 'Paper');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_serial_number` varchar(50) NOT NULL,
  `staff_name` varchar(50) NOT NULL,
  `staff_phone` varchar(50) NOT NULL,
  `staff_email` varchar(50) NOT NULL,
  `staff_type_id` varchar(50) NOT NULL,
  `city` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_serial_number`, `staff_name`, `staff_phone`, `staff_email`, `staff_type_id`, `city`) VALUES
('WPS001', 'Ma May Win', '09-458856789', 'maywin@google.com', 'WPST004', 'Yangon'),
('WPS002', 'Ma Mya Mya', '09-759456789', 'myamya@google.com', 'WPST001', 'Bago'),
('WPS003', 'Mg Aye Zaw', '09-123852258', 'ayezaw@google.com', 'WPST003', 'Mandalay'),
('WPS004', 'Mg Lin Lin', '09-457956154', 'linlin@google.com', 'WPST002', 'Yangon');

-- --------------------------------------------------------

--
-- Table structure for table `staff_type`
--

CREATE TABLE `staff_type` (
  `staff_type_id` varchar(50) NOT NULL,
  `staff_type_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_type`
--

INSERT INTO `staff_type` (`staff_type_id`, `staff_type_name`) VALUES
('WPST001', 'beginer'),
('WPST002', 'master'),
('WPST003', 'co-leader'),
('WPST004', 'Leader');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` varchar(50) NOT NULL,
  `supplier_name` varchar(50) NOT NULL,
  `supplier_product` varchar(50) NOT NULL,
  `supplier_phone` varchar(50) NOT NULL,
  `supplier_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_name`, `supplier_product`, `supplier_phone`, `supplier_email`) VALUES
('WPSP001', 'Shwe Naing Ngan', 'paper', '01-12597859', 'purchase@shwenaingngan.org'),
('WPSP002', 'Latt Latt', 'Ink', '01-97128559', 'supplier@latt.com'),
('WPSP003', 'Sein Thie', 'Machine', '01-548591598', 'st02@seinthie.org'),
('WPSP004', 'Eagle', 'Plate', '01-957153248', 'ctp1@eaglectp.org'),
('WPSP005', 'Tin TIn', 'packing box', '01-458452658', 'supplier@tin.org');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `order_type_id` (`order_type_id`),
  ADD KEY `product_code` (`product_code`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_type`
--
ALTER TABLE `order_type`
  ADD PRIMARY KEY (`order_type_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_code`),
  ADD KEY `product_type_id` (`product_type_id`);

--
-- Indexes for table `product_staff`
--
ALTER TABLE `product_staff`
  ADD PRIMARY KEY (`product_staff_id`),
  ADD KEY `product_code` (`product_code`),
  ADD KEY `staff_serial_number` (`staff_serial_number`);

--
-- Indexes for table `product_supplier`
--
ALTER TABLE `product_supplier`
  ADD PRIMARY KEY (`product_supplier_id`),
  ADD KEY `product_type_id` (`product_type_id`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`product_type_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_serial_number`),
  ADD KEY `staff_type_id` (`staff_type_id`);

--
-- Indexes for table `staff_type`
--
ALTER TABLE `staff_type`
  ADD PRIMARY KEY (`staff_type_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_table`
--
ALTER TABLE `order_table`
  ADD CONSTRAINT `order_table_ibfk_1` FOREIGN KEY (`order_type_id`) REFERENCES `order_type` (`order_type_id`),
  ADD CONSTRAINT `order_table_ibfk_2` FOREIGN KEY (`product_code`) REFERENCES `product` (`product_code`),
  ADD CONSTRAINT `order_table_ibfk_3` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`product_type_id`) REFERENCES `product_type` (`product_type_id`);

--
-- Constraints for table `product_staff`
--
ALTER TABLE `product_staff`
  ADD CONSTRAINT `product_staff_ibfk_1` FOREIGN KEY (`product_code`) REFERENCES `product` (`product_code`),
  ADD CONSTRAINT `product_staff_ibfk_2` FOREIGN KEY (`staff_serial_number`) REFERENCES `staff` (`staff_serial_number`);

--
-- Constraints for table `product_supplier`
--
ALTER TABLE `product_supplier`
  ADD CONSTRAINT `product_supplier_ibfk_1` FOREIGN KEY (`product_type_id`) REFERENCES `product_type` (`product_type_id`),
  ADD CONSTRAINT `product_supplier_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`supplier_id`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`staff_type_id`) REFERENCES `staff_type` (`staff_type_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
