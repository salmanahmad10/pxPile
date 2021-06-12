-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2020 at 03:47 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `px_pile`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `post_description` varchar(255) NOT NULL,
  `post_likes` int(11) NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `post_tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `user_id`, `post_description`, `post_likes`, `post_image`, `post_tag`) VALUES
(14, '14', 'Image2 #cnow', 0, 'uploads/snow-covered-mountain-2365457.jpg', 'cnow'),
(15, '14', 'sanddune', 0, 'uploads/scenic-photo-of-mountain-during-dawn-2835562.jpg', ''),
(16, '14', 'mountain', 0, 'uploads/rock-formation-2335126.jpg', ''),
(17, '14', 'forst', 0, 'uploads/aerial-photography-of-snow-covered-trees-1438761.jpg', ''),
(18, '14', 'space', 0, 'uploads/milky-way-2695569__340.jpg', ''),
(19, '14', 'street', 0, 'uploads/pexels-photo-1236701.jpeg', ''),
(20, '14', 'underwater', 0, 'uploads/636909.jpg', ''),
(21, '14', 'pattern', 0, 'uploads/1b58ef6e3d36a42e01992accf5c52d6eea244353.jpg', ''),
(22, '14', 'spaaceman', 0, 'uploads/YZRriD.jpg', ''),
(23, '15', 'programming', 0, 'uploads/programming.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(8) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_followers` int(8) NOT NULL,
  `user_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_username`, `user_password`, `user_followers`, `user_image`) VALUES
(14, 'user@pxpile.com', 'test', 'qwe', 0, ''),
(15, 'test2@test.com', 'test', 'test', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
