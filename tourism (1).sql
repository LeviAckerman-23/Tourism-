-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2024 at 07:16 PM
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
-- Database: `tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_logs`
--

CREATE TABLE `admin_logs` (
  `log_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `action` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `spot_id` int(11) NOT NULL,
  `booking_date` date DEFAULT NULL,
  `status` enum('pending','confirmed','canceled') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guides`
--

CREATE TABLE `guides` (
  `guide_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `language` varchar(255) DEFAULT NULL,
  `availability` varchar(255) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `price_per_hour` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `spot_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` int(11) DEFAULT NULL CHECK (`rating` between 1 and 5),
  `comment` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `spot_id`, `user_id`, `rating`, `comment`, `created_at`) VALUES
(1, 4, 7, 5, 'Athirappilly Waterfalls is a breathtaking destination. The natural beauty and the sound of the waterfalls are mesmerizing. A must-visit spot for nature lovers!', '2024-10-07 16:24:53');

-- --------------------------------------------------------

--
-- Table structure for table `tourism_spots`
--

CREATE TABLE `tourism_spots` (
  `spot_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `latitude` decimal(10,8) DEFAULT NULL,
  `longitude` decimal(11,8) DEFAULT NULL,
  `google_place_id` varchar(255) DEFAULT NULL,
  `category` enum('nature','historical','cultural','adventure','religious') DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tourism_spots`
--

INSERT INTO `tourism_spots` (`spot_id`, `name`, `description`, `address`, `latitude`, `longitude`, `google_place_id`, `category`, `image_url`, `created_at`) VALUES
(1, 'Eiffel Tower', 'A wrought-iron lattice tower in Paris, France.', 'Champ de Mars, 5 Avenue Anatole France, 75007 Paris, France', 48.85840000, 2.29450000, NULL, 'historical', 'images/eiffel.jpg', '2024-10-06 10:00:53'),
(2, 'Statue of Liberty', 'A colossal neoclassical sculpture on Liberty Island in New York.', 'New York, NY 10004, United States', 40.68920000, -74.04450000, NULL, 'historical', 'images/liberty.jpg', '2024-10-06 10:00:53'),
(3, 'Grand Canyon', 'A steep-sided canyon carved by the Colorado River in Arizona, USA.', 'Arizona, USA', 36.10690000, -112.11290000, '', 'nature', 'images/grandcanyon.jpg', '2024-10-06 10:00:53'),
(4, 'Athirappilly Waterfalls', 'Athirappilly Waterfalls, often referred to as the \"Niagara of India\", is a beautiful cascading waterfall located in the Thrissur district of Kerala. It is one of the largest waterfalls in Kerala and a popular destination for nature lovers.', 'Athirappilly, Chalakudy, Thrissur, Kerala 680721, India', 10.28490000, 76.68440000, 'ChIJd4xyyR7YBTsROFpjQNkNKos', 'nature', 'https://example.com/images/athirappilly_waterfalls.jpg', '2024-10-06 10:46:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `city` varchar(100) NOT NULL,
  `role` enum('user','admin') DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `phone`, `city`, `role`, `created_at`, `status`) VALUES
(7, 'Naruto', 'manushyanff@gmail.com', 'Naruto12', '7592862649', 'Aluva', 'user', '2024-09-18 06:37:14', 1),
(8, 'Adhil', 'muhammedadhil346@gmail.com', 'Adhil123', '8281262973', 'Aluva', 'user', '2024-09-18 06:55:11', 1),
(9, 'Sasuke', 'jdzygarde@gmail.com', 'Sasuke12', '7592862649', 'Ernakulam', 'user', '2024-09-18 10:14:10', 1),
(11, 'Daemon', 'daemon@gmail.com', 'Daemon12', '6282742946', 'Aluva', 'user', '2024-10-01 07:37:59', 1),
(12, '', '', '', '', '', 'user', '2024-10-02 08:25:51', 0),
(14, 'Levi', 'levi@gmail.com', 'Levi1234', '1111111111', 'Kerala', 'user', '2024-10-02 08:31:20', 0),
(15, 'Ichigo', 'ichigo@gmail.com', 'Ichigo12', '3333333333', 'Japan', 'user', '2024-10-02 08:36:47', 0),
(16, 'aaaaaaaa', 'aaaaa@gmail.com', 'Aaaa1111', '0000000000', 'eeeeeeeeeee', 'user', '2024-10-02 08:40:39', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_logs`
--
ALTER TABLE `admin_logs`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `spot_id` (`spot_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `guides`
--
ALTER TABLE `guides`
  ADD PRIMARY KEY (`guide_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `spot_id` (`spot_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tourism_spots`
--
ALTER TABLE `tourism_spots`
  ADD PRIMARY KEY (`spot_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_logs`
--
ALTER TABLE `admin_logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guides`
--
ALTER TABLE `guides`
  MODIFY `guide_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tourism_spots`
--
ALTER TABLE `tourism_spots`
  MODIFY `spot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_logs`
--
ALTER TABLE `admin_logs`
  ADD CONSTRAINT `admin_logs_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`spot_id`) REFERENCES `tourism_spots` (`spot_id`);

--
-- Constraints for table `guides`
--
ALTER TABLE `guides`
  ADD CONSTRAINT `guides_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`spot_id`) REFERENCES `tourism_spots` (`spot_id`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
