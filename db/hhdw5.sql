-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2022 at 06:32 PM
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
(1, 1, '                                                                                                I’m having trouble on our product?                                                                                    ', '<p>Please contact your supplier and they will help guide you through the process.</p>'),
(2, 2, 'I cannot sign up for classes service online.', '<p>Please contact your home gym.</p>'),
(3, 3, 'Becoming her own boss, with the help of HGE', '<p>Angel Johnson&rsquo;s &quot;gym fashion&quot; faux pas turned into a fast-growing small business by selling in HGE&#39;s store. The level of success that ICONI has achieved in a short period of time is beyond what Johnson ever expected.</p>'),
(4, 5, 'What are the common reasons for delay?', '<p>The most&nbsp;<strong>common reasons</strong>&nbsp;for delivery delays are:</p><p>1)&nbsp;<strong>Seller Sourcing Issues</strong>: The seller could take longer than expected time to fulfill your order.</p><p>2)&nbsp;<strong>Courier service delay</strong>: Either SX or one of our 3PL partners is taking longer than expected time to deliver your order.</p><p>3)&nbsp;<strong>Cross Border shipment delay</strong>: Due to Air Transportation or Custom delays, your Cross Border order may take longer than usual to be delivered.</p><p>4)&nbsp;<strong>Customer not available</strong>: Our Delivery Hero has not been able to get in touch with the customer.</p><p>5)&nbsp;<strong>Wrong Address / Phone Number</strong>: While placing an order the customer has entered an incorrect address or phone number, leading to a communication barrier with the customer.</p><p>6)&nbsp;<strong>Extreme Weather</strong>: The weather conditions of the destined city may be rough, for example, heavy rainfall, smog, landslide, etc. which may result in a delivery hold-up.</p><p>7)&nbsp;<strong>Law and Order conditions</strong>: Due to religious procession, lockdowns, strike issues resulting in route blocking, you may receive your package after the promised time.</p>'),
(5, 9, 'Which products take longer shipping time?', '<p>Global / Overseas products are internationally sourced products and take 30-35 flat days to be delivered to your doorstep. To know more about the Global Collection range at Shop</p>'),
(6, 7, 'How do I track my complaint about delivery?\r\n', '<p>We apologize for the inconvenience that caused you to register a complaint at Shop.<br />It takes&nbsp;<strong>3 working days&nbsp;</strong>to respond to the complaint. If you have not heard back from our Complaint Resolution team, please contact us on&nbsp;<strong>live chat between 8 a.m. to 9:30 p.m.</strong></p>'),
(7, 1, 'Does Shop Refund shipping fee?', '<p>The shipping fee is refunded along with the amount paid for your returned product. You will be refunded in the following cases:</p><ol><li>Your order was cancelled</li><li>There was a failed delivery</li><li>Return due to damaged, defective or expired item</li><li>Return due to incorrect, not as advertised or counterfeit item</li><li>Return due to incorrect size of item</li><li>Return due to missing items, freebies or accessories</li><li>Return due to change of mind about the item</li></ol>');

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
(1, 'CAP Barbell 150 LB Dumbbell Set with Rack', 530, '<p>A pair of 5-pound, 10-pound, 15-pound, 20-pound, and 25-pound coated hex dumbbells and a red A-frame dumbbell rack to store the weights. This set ships in multiple boxes</p><p>The A-frame design of this rack maximizes floor space by storing dumbbells in an &ldquo;A&rdquo; shape, or vertical fashion. Easily access and store dumbbells. Rubber inserts prevent dumbbells and rack from scratches</p><p>Customize your home gym with the red a-frame rack made with steel &amp; finished with durable powder coat. Heads are made from ASTM A48 Class 20 grey iron, joined by a 1018 cold rolled solid steel handle with an extreme durable coating</p>', 'You do need a pair of pliers--which says in the instructions not included-- to hold the nut while using the allen wrench to tighten the bolt. This is very common and ensures a tight fit. When you are assembling something that is going to hold 150lbs, you need to have it be sturdy enough and hand-tightening just will not cut it. Hope this helps.', 'product1.png', 'product2.png', '2022-02-11 11:06:03', '2022-02-11 11:06:03'),
(2, 'E3 ELLIPTICAL CROSS-TRAINER', 4300, '<p>The E3 Elliptical Cross-Trainer with WhisperStride technology is nearly silent and has features that keep workouts interesting and motivating. It&rsquo;s a sleek, attractive home cardio option for exercisers of all fitness levels looking for a low-impact, total-body workout.</p><p>KEY FEATURES</p><ul><li><strong>SMOOTH NATURAL MOTION</strong><br />Extensive biomechanical research is used to create a fluid motion with an elliptical path that feels natural and comfortable</li><li><strong>HEART RATE MONITORING</strong><br />Contact heart rate sensors on moving multigrip handles and stationary grips, telemetry heart rate monitoring (wireless chest strap included with console)</li><li><strong>COACH ZONE</strong><br />Coach Zone leads exercisers through motivating workouts that target different muscle groups</li></ul>', 'It feels extremely sturdy and is very smooth on the joints (no jersey movements). Overall it\'s a great elliptical; the only critique I have is that the settings on the console can be confusing and not intuitive so I rarely use them.', 'product3.png', 'product4.png', '2022-02-11 11:27:17', '2022-02-11 11:27:17'),
(3, 'ProForm 495 Cse Smart Strider 495 Cse Elliptical', 999, '<p>18 inch stride length, soft grips upper-body workout arms, oversized, adjustable, cushioned pedals, 13 lb. Effective Inertia-Enhanced flywheel.18 resistance levels, vertical SpaceSaver design, integrated tablet holder, ipod-compatible audio, rear-mounted Transport wheels.iFit ready, round watts LED display, 18 workout apps, EKG heart rate monitor, commercial-gauge solid steel construction, Oversized leveling feet, water bottle holder, out-of-box easy assembly 275 lb. Weight capacity, Lifetime frame Warranty and 1-Year parts &amp; labor Warranty</p>', 'I had shoulder, hip & knee surgeries. I looked for a machine that was not only easy on the joints but also easy to get on/off safely. This machine is easy on the joints. The smooth stride for the legs/arms doesn\'t bother the areas that were operated on. This machine gets a 10 out of 10!!! Excellent piece of equipment. It easy on the joints. It\'s easy to get on/off machine.', 'product9.png', 'product10.png', '2022-02-11 12:31:21', '2022-02-11 15:07:31'),
(4, 'Sole F83 Treadmill', 959, '<p>First off, I am a serious runner. Road races whenever I can and have done 4 marathons. I have also done a lot of running on treadmills at gyms and a multitude of hotels. I wanted a home mill because I am starting to lose my desire to run outside on those cold wintry days. I did a lot of research and had narrowed down to a few but the warranty along with the price and positive reviews made me select the f83. I considered the f85 but the better motor and slightly wider deck on it, did not move me to spend the additional dollars. It appears that these were the only differences. I looked at the smooth models but after running on one that my sister recently purchased I was not all that impressed. I also considered the lower end precors (9.23, 9.27) but even though I love the precors, I could not bring myself to spend the extra money on it when I felt the sole would suffice. However if money was no object I may have gone with a precor or life fitness</p>', 'Sole home treadmills include many commercial-grade components. These help support the user’s health and extend the life of the machine. The F83 has a quiet 3.0 HP motor with ultra-high torque. It can support a user weighing up to 375 pounds. The Sole F83 has a durable two-ply track. The long 58”x20” surface inclines by 15%, which is more than many treadmills offer. By working out on an incline, a user can burn calories much more efficiently. Furthermore, the treadmill’s CushionFlex technology has been proven to reduce joint impact by up to 40% when compared with road running. This exceeds the impact reduction offered by many other brands.', 'product7.png', 'product8.png', '2022-02-11 12:50:23', '2022-02-11 12:50:23'),
(5, 'Sole E35 Elliptical', 1499, '<p>&nbsp;<strong>Bluetooth Technology &ndash;&nbsp;</strong>Sole now allows users the freedom to transfer workout data via Bluetooth, from their Sole fitness equipment to their smart device.&nbsp; Users can download and track their info on the Sole app for free, or have their fitness data be transferred to any of the following fitness apps (Fitbit, Record, Mapmyrun, Apple Health).</p><p><strong>Custom Designed Foot Pedals -&nbsp;</strong>These unique foot pedals were developed in collaboration with a leading physical therapist. Together with SOLE engineers we designed a 2 degree inward slope to the foot pedals which reduce ankle and knee stress common in other Light Commercial elliptical machines.</p><p><strong>Articulating/Adjustable Foot Pedals -&nbsp;</strong>Not everyone walks the same; for this reason we have made the pedals articulating/adjustable to fit the way you walk. The E35, E55 and E95 all include foot pedals that have level adjustment features to them, which helps to reduce the numb toe effects and sore Achilles tendons helping users to focus less on being uncomfortable and more focused on achieving goals.</p><p>&nbsp;</p>', 'Includes a 7.5” display console with a white back lit LCD display. Includes a built-in cooling fan and water bottle holder. The console also has built in speakers which allow you to hook up any MP3 player (iPod, etc.) for easy listening.\r\n\r\nFluid natural motion provided by a whisper quiet drive system. Functions in both forward and reverse motion. The combination of a heavy 25 lb. flywheel and a high gear ratio not found on comparable models means an extremely smooth feel with plenty of resistance at the top end for a machine that will provide a challenging workout. The E35 also has a power incline feature which offers additional resistance as well as variable positions for diversity in your workout at the touch of a button. The ramp angle is fully adjustable from 0 to 20 different incline levels, allowing you to individually target and work all major lower body muscle groups.\r\n\r\nUpper body exercise provides a total body workout.', 'product9.png', 'product10.png', '2022-02-11 15:04:28', '2022-02-11 15:04:28'),
(6, 'Nautilus E614 Elliptical Trainer', 1745, '<p>9 programs provide variety and allow you to track your progress and increase the intensity of workouts to stay challenged as you become fitter. Eliminate stress on your hips and back 22.8cm Step-on Height: Easy-access pedals with a low step-in height make it safer and easier to get on and off. 5cm Pedal spacing: Close pedal spacing helps align the body to eliminate stress on the hips and back. CONNECT TO YOUR FAVORITE MUSIC OR MOVIE: Add a personal twist to take your workout further than ever. Whether you like to sweat to music or movies, we make it easy to stay connected to the content that moves you. An audio port and speakers enable you to listen to your favourite sounds as you work out. Built-in device holder makes it easy to keep your tablet or phone in view for entertainment.</p>', 'The Nautilus E614 is an entry level elliptical, that offers surprisingly good combination of features and quality usually offered by higher-end machines. Although the fan is barely directional and the stride length can’t be adjusted, the E614 compensates it well with its motivational entertainment features, manual incline ramp, 20 resistance levels that come with sophisticated preset programs, and therefore it was selected as one of the top performers within “under $800” price category. It shines among users reviews and it’s the only machine within its class that delivers motivational entertainment at high level. I would definitely recommend the Nautilus E614 because it has all the bells and whistles, and it delivers surprisingly good price-performance value.', 'product11.png', 'product12.png', '2022-02-11 15:33:41', '2022-02-11 15:33:41'),
(7, 'Peloton Debuted a Fully Immersive Video Training Treadmill at CES', 5000, '<p>the machine is gorgeous is an understatement. Complete with 59 individuals shock-absorbing slats, a massive 32-inch HD touchscreen, soundbar, and speed and incline nobs-you may as well call it the Cadillac of treadmills.</p><p>For someone who dreads spending time running indoors, the Tread could be a total game-changer. Running alone can be isolating. Running as part of a community without leaving the comfort of your own home? Different thing. Suddenly, you&#39;ve got A-class coaching at your fingertips, and virtual friends to keep you motivated (the brand has seen wild success with their Facebook community of riders). Plus, the Peloton Bike is in many Westin hotels. If the Tread follows suit, consumers can reap the benefits of boutique classes while traveling anywhere in the world.</p>', 'you want a mellow 10-minute walking class, an intense 60-minute boot-camp class, or anything in between, the Peloton Tread is perfect for you,\" John Foley, founder and CEO of Peloton, said in a press release. \"Just like the Peloton Bike, the Peloton Tread is now the best synthesis of hardware, software, and class content in the category. It allows members of all ages and fitness levels to take effective, fun, and motivating circuit, running, and strength workouts on their schedules and in their homes.', 'product13.png', 'product14.png', '2022-02-11 16:24:40', '2022-02-11 16:24:40'),
(8, 'NordicTrack SpaceSaver SE7i Rear Drive Smart Elliptical with Folding SpaceSaver Design', 999, '<p>Enjoy the innovative space-saving capabilities of the NordicTrack SE7i rear drive smart elliptical. Connect your own tablet or smartphone (not included) to your elliptical to gain access to a vast library of live and on-demand video workouts led by elite personal trainers. Transform your living room into a boutique Studio Class, or embark on a breathtaking journey around the world with a Global Workout series. With iFIT, your trainers will auto-adjust your resistance for a fully optimized workout in the comfort of home. When the workout is over, fold your elliptical into itself for compact vertical storage.</p>', 'On the hunt for a new elliptical, but worried where it will fit into your home? The SpaceSaver SE7i is the entry-level model in NordicTrack’s rear-drive series for 2021, followed only by the SpaceSaver SE9i. Both models have foldable frames and transport wheels for easy storage and repositioning after workouts, as well as 18-inch footpaths, and 18-pound flywheels, as well as 22 levels of silent magnetic resistance. Although both machines are iFit-enabled, the SE7i is lower priced primarily because it’s a bring-your-own-touchscreen elliptical trainer. It does have 10-inch HD Smart touchscreen, while the SE9i has a 14-inch HD Smart touchscreen', 'product15.png', 'product16.png', '2022-02-11 16:58:10', '2022-02-11 16:58:10');

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
(3, 'Black Jack', 'blackjack@gmail.com', '09457239514', '3da541559918a808c2402bba5012f6c60b27661c', '3da541559918a808c2402bba5012f6c60b27661c'),
(4, 'Jhon Smith', 'jhonsmith@gmail.com', '0975321789', '3da541559918a808c2402bba5012f6c60b27661c', '3da541559918a808c2402bba5012f6c60b27661c'),
(5, 'Rose', 'rose@gmail.com', '09789571532', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(6, 'Lisa', 'lisa@gmail.com', '0975321598', '3da541559918a808c2402bba5012f6c60b27661c', '3da541559918a808c2402bba5012f6c60b27661c'),
(7, 'Cheng Xiao', 'chengxiao@gmail.com', '09456357896', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(8, 'Rock', 'rock@gmail.com', '09453719528', '3da541559918a808c2402bba5012f6c60b27661c', '3da541559918a808c2402bba5012f6c60b27661c'),
(9, 'Alan Walker', 'alanwalker@gmail.com', '09486321457', '75d4c9b02467d96bc2ea6d655eb983d5a7a97a9b', '75d4c9b02467d96bc2ea6d655eb983d5a7a97a9b'),
(10, 'Robert', 'robert@gmail.com', '09458256951', '3da541559918a808c2402bba5012f6c60b27661c', '3da541559918a808c2402bba5012f6c60b27661c'),
(11, 'Jame', 'jame@gmail.com', '09456421377', '3da541559918a808c2402bba5012f6c60b27661c', '3da541559918a808c2402bba5012f6c60b27661c'),
(12, 'IU', 'iu@gmail.com', '1234', '3da541559918a808c2402bba5012f6c60b27661c', '3da541559918a808c2402bba5012f6c60b27661c');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
