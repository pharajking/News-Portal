-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2023 at 04:57 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `topic_id`, `title`, `image`, `body`, `published`, `created_at`) VALUES
(9, 20, 8, 'How to Start a Successful Blog in 2023', '1671225581_download (14).jpg', 'Learn how to start a blog in less than an hour. Become a blogger today by following the steps we used when starting our blog, which now has reached more than 20 million people and has been seen in the New York Times, TIME magazine, and on the TODAY show.', 1, '2022-12-17 00:19:41'),
(11, 20, 3, 'How to Become a Blogger: Video Tutorial', '1671225694_download (9).jpg', 'If you prefer to watch our process for setting up a blog, we&rsquo;ve created a step-by-step instructional video, How to Become a Successful Blogger Today, which shows the entire starting-a-blog undertaking. Otherwise, read on.', 1, '2022-12-17 00:21:34'),
(12, 20, 3, 'How to Start a Successful Blog in 5 Steps', '1671225740_images (10).jpg', 'While there are other blogging platforms out there like Blogger.com and Tumblr.com, nearly every serious blogger uses a self-hosted WordPress site because of its creative freedom and flexibility.', 1, '2022-12-17 00:22:20'),
(13, 20, 3, 'Love and Relationship', '1671230992_love-3392348_1920.jpg', 'Enjoy you moment', 1, '2022-12-17 01:49:52'),
(14, 20, 8, 'chart GPT', '1671284992_images (14).jpg', 'Easy!!!', 1, '2022-12-17 16:49:52'),
(15, 20, 6, 'Deep Learning', '1671399192_DSC_0063.JPG', 'eerrrtrrrrrrrrrrrrrrrrrrr', 1, '2022-12-19 00:33:12');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `description`) VALUES
(2, 'Sport', 'poiuytrewqit'),
(3, 'Life', 'Life is good'),
(4, 'Quotes', 'Time will change'),
(5, 'Fiction', 'what book your reading'),
(6, 'Biogragraphy', 'About me'),
(7, 'Motivation', 'who listen more'),
(8, 'Inspiration', 'My inspiration hard work'),
(9, 'What', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`, `created_at`) VALUES
(20, 1, 'Pharajking', 'farajmbilinyi2018@gmail.com', '$2y$10$XsjBTLE0Z6TouifuA25ri.aWeLxA7GplbP3XLyOrZixxmaPcWwCfq', '2022-12-16 20:43:26'),
(21, 0, 'dickson', 'new7@gmail.com', '$2y$10$BNr6.AiZ19UX9oADrMbG5ee2VngpsoNsE9SDqef/JtwWEWKGbpMjC', '2022-12-18 21:48:16'),
(22, 1, 'Ally', 'pharajking2018@gmail.com', '$2y$10$gj8Tgs80Fd7Rzsp4wDMPNOfA0IB.ATvVBhlWHA5ULGygFlRqQuxNO', '2023-08-07 13:44:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
