-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2023 at 02:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iskcon_payment`
--

-- --------------------------------------------------------

--
-- Table structure for table `bricks`
--

CREATE TABLE `bricks` (
  `Brick_id` int(3) NOT NULL,
  `name` text NOT NULL DEFAULT 'KRISHNA',
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bricks`
--

INSERT INTO `bricks` (`Brick_id`, `name`, `status`, `time`) VALUES
(1, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(2, 'hare krishna', 1, '2023-09-19 03:33:28'),
(3, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(4, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(5, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(6, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(7, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(8, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(9, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(10, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(11, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(12, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(13, 'umesh v2.0', 1, '2023-09-19 03:33:28'),
(14, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(15, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(16, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(17, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(18, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(19, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(20, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(21, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(22, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(23, 'Umesh', 1, '2023-09-19 03:33:28'),
(24, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(25, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(26, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(27, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(28, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(29, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(30, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(31, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(32, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(33, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(34, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(35, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(36, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(37, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(38, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(39, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(40, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(41, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(42, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(43, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(44, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(45, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(46, 'v2.0', 1, '2023-09-19 03:33:28'),
(47, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(48, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(49, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(50, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(51, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(52, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(53, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(54, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(55, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(56, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(57, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(58, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(59, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(60, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(61, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(62, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(63, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(64, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(65, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(66, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(67, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(68, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(69, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(70, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(71, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(72, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(73, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(74, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(75, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(76, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(77, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(78, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(79, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(80, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(81, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(82, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(83, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(84, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(85, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(86, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(87, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(88, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(89, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(90, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(91, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(92, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(93, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(94, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(95, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(96, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(97, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(98, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(99, 'KRISHNA', 0, '2023-09-19 03:33:28'),
(100, 'KRISHNA', 0, '2023-09-19 03:33:28');

-- --------------------------------------------------------

--
-- Table structure for table `devotees`
--

CREATE TABLE `devotees` (
  `user_id` int(11) NOT NULL,
  `full_name` text NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `devotees`
--

INSERT INTO `devotees` (`user_id`, `full_name`, `phone`, `email`, `address`, `timestamp`) VALUES
(1, 'Umesh Goyal', '7297010496', 'goyal.per@gmail.com', 'kota', '0000-00-00 00:00:00'),
(2, 'u1', '165161', 'dfds', 'kota2', '2023-09-17 07:40:52'),
(3, 'umesh goyal', '+917297010', 'goyal.per@gmail.com', 'Kota\r\nAerodram', '0000-00-00 00:00:00'),
(4, 'umesh goyal', '+917297010', 'goyal.per@gmail.com', 'Kota\r\nAerodram', '0000-00-00 00:00:00'),
(5, 'umesh goyal', '+917297010', 'goyal.per@gmail.com', 'Kota\r\nAerodram', '0000-00-00 00:00:00'),
(6, 'Krishna goyal', '+917297010', 'goyal.per@gmail.com', 'Kota\r\nAerodram', '0000-00-00 00:00:00'),
(7, 'rohan goyal', '+917297010', 'goyal.per@gmail.com', 'Kota\r\nAerodram', '2023-09-18 21:37:21'),
(8, 'umesh goyal', '+917297010', 'goyal.per@gmail.com', 'Kota\r\nAerodram', '2023-09-18 21:41:36'),
(9, 'umesh goyal', '+916378121', 'goyal.per@gmail.com', 'Kota\r\nAerodram', '2023-09-18 21:44:06'),
(10, 'umesh goyal', '+916378121', 'goyal.per@gmail.com', 'Kota\r\nAerodram', '2023-09-18 21:48:31'),
(11, 'umesh goyal', '+916378121', 'goyal.per@gmail.com', 'Kota\r\nAerodram', '2023-09-18 21:48:59'),
(12, 'umesh goyal', '+917297010', 'goyal.per@gmail.com', 'Kota\r\nAerodram', '2023-09-18 21:58:48'),
(13, 'umesh goyal', '+917297010', 'goyal.per@gmail.com', 'Kota\r\nAerodram', '2023-09-18 22:00:05'),
(14, 'umesh goyal', '+917297010', 'goyal.per@gmail.com', 'Kota\r\nAerodram', '2023-09-18 22:00:17'),
(15, 'priyanshi goyal', '+917297010', 'goyal.per@gmail.com', 'Kota\r\nAerodram', '2023-09-18 22:00:37'),
(16, 'umesh goyal', '+917297010', 'goyal.per@gmail.com', 'Kota\r\nAerodram', '2023-09-18 22:03:51'),
(17, 'umesh v2.0 goyal', '+916378121', 'goyal.per@gmail.com', 'Kota\r\nAerodram', '2023-09-18 22:04:28'),
(18, 'hare krishna goyal', '+916378121', 'goyal.per@gmail.com', 'Kota\r\nAerodram', '2023-09-18 22:14:49'),
(19, 'Umesh Goyal', '2135456487', 'admin@gmail.com', 'kota, rajasthan', '2023-09-18 23:10:11'),
(20, 'v2.0 goyal', '+917297010', 'goyal.per@gmail.com', 'Kota\r\nAerodram', '2023-09-19 00:11:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bricks`
--
ALTER TABLE `bricks`
  ADD PRIMARY KEY (`Brick_id`);

--
-- Indexes for table `devotees`
--
ALTER TABLE `devotees`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bricks`
--
ALTER TABLE `bricks`
  MODIFY `Brick_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `devotees`
--
ALTER TABLE `devotees`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
