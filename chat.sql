-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2021 at 08:39 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `unique_id` int(11) NOT NULL,
  `pickup` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `unique_id`, `pickup`, `destination`, `date`) VALUES
(18, 820400358, 'Dhaka', 'Faridpur', '2012-12-12'),
(19, 830068078, 'Adabor', 'Farmgate', '2021-05-10'),
(20, 820400358, 'Dhanmondi', 'Mirpur', '2021-05-20'),
(21, 830068078, 'New Market', 'Khigaon', '2222-05-18'),
(22, 1083265917, 'Adabor', 'Shyamoli', '2021-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 830068078, 820400358, 'hello'),
(2, 820400358, 830068078, 'hi'),
(3, 830068078, 820400358, 'ohe'),
(4, 820400358, 830068078, 'bolo'),
(5, 830068078, 820400358, 'ami kothay?'),
(7, 830068078, 820400358, 'in this chat'),
(8, 830068078, 820400358, 'jashd'),
(9, 820400358, 830068078, 'ajshd'),
(10, 830068078, 820400358, 'jahsdfj'),
(11, 820400358, 830068078, 'ayduas'),
(12, 830068078, 820400358, 'hi'),
(13, 820400358, 830068078, 'hello'),
(14, 820400358, 830068078, 'Hello there'),
(15, 830068078, 820400358, 'i am here');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(1, 820400358, 'Nafis', 'Reza', 'nafisbinreza@gmail.com', '8a1dd9fca29f0d575aa8b59532cb31b9', '1620464326Screenshot (12).png', 'Active now'),
(2, 830068078, 'Grim', 'Rezso', 'abc@gmail.com', '8a1dd9fca29f0d575aa8b59532cb31b9', '1620466316Screenshot (19).png', 'Offline now'),
(3, 546052527, 'Ami', 'Nafis', 'nafisbinreza007@gmail.com', '8a1dd9fca29f0d575aa8b59532cb31b9', '1621413641Screenshot (35).png', 'Active now'),
(4, 1083265917, 'Nafis', 'Reza', 'nafisbinreza123@gmail.com', '8a1dd9fca29f0d575aa8b59532cb31b9', '1621416824fleet_pic3.jpg', 'Offline now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD UNIQUE KEY `booking_id` (`booking_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
