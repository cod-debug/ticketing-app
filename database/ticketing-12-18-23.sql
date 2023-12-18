-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2023 at 08:05 AM
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
-- Database: `ticketing`
--

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `price_id` int(11) NOT NULL,
  `value` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`price_id`, `value`) VALUES
(1, 180);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_details`
--

CREATE TABLE `ticket_details` (
  `id` int(11) NOT NULL,
  `ref_num` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `area` varchar(20) NOT NULL,
  `total_amount` double NOT NULL,
  `proof_of_payment` varchar(255) NOT NULL,
  `mode_of_payment` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'valid',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_details`
--

INSERT INTO `ticket_details` (`id`, `ref_num`, `full_name`, `email`, `contact`, `address`, `area`, `total_amount`, `proof_of_payment`, `mode_of_payment`, `status`, `created_at`) VALUES
(1, 1, 'juliane', 'yen06riane@gmail.com', '09123456789', 'NORTHERN JUNOB, DUMAGUETE CITY, NEG. OR.', 'Central', 200, '1702289999_Untitled design (2).png', '', 'valid', '2023-12-11 10:19:59'),
(2, 1, 'juliane', 'yen06riane@gmail.com', '09123456789', 'NORTHERN JUNOB, DUMAGUETE CITY, NEG. OR.', 'Central', 200, '1702289999_Untitled design (2).png', '', 'valid', '2023-12-11 10:19:59'),
(3, 1, 'juliane', 'yen06riane@gmail.com', '09123456789', 'NORTHERN JUNOB, DUMAGUETE CITY, NEG. OR.', 'Central', 200, '1702289999_Untitled design (2).png', '', 'valid', '2023-12-11 10:19:59'),
(4, 1, 'juliane', 'yen06riane@gmail.com', '09123456789', 'NORTHERN JUNOB, DUMAGUETE CITY, NEG. OR.', 'Central', 200, '1702289999_Untitled design (2).png', '', 'valid', '2023-12-11 10:19:59'),
(5, 1, 'juliane', 'yen06riane@gmail.com', '09123456789', 'NORTHERN JUNOB, DUMAGUETE CITY, NEG. OR.', 'Central', 200, '1702289999_Untitled design (2).png', '', 'valid', '2023-12-11 10:19:59'),
(6, 1, 'juliane', 'yen06riane@gmail.com', '09123456789', 'NORTHERN JUNOB, DUMAGUETE CITY, NEG. OR.', 'Central', 200, '1702289999_Untitled design (2).png', '', 'valid', '2023-12-11 10:19:59'),
(7, 1, 'juliane', 'yen06riane@gmail.com', '09123456789', 'NORTHERN JUNOB, DUMAGUETE CITY, NEG. OR.', 'Central', 200, '1702289999_Untitled design (2).png', '', 'valid', '2023-12-11 10:19:59'),
(8, 1, 'juliane', 'yen06riane@gmail.com', '09123456789', 'NORTHERN JUNOB, DUMAGUETE CITY, NEG. OR.', 'Central', 200, '1702289999_Untitled design (2).png', '', 'valid', '2023-12-11 10:19:59'),
(9, 1, 'juliane', 'yen06riane@gmail.com', '09123456789', 'NORTHERN JUNOB, DUMAGUETE CITY, NEG. OR.', 'Central', 200, '1702289999_Untitled design (2).png', '', 'valid', '2023-12-11 10:19:59'),
(10, 1, 'juliane', 'yen06riane@gmail.com', '09123456789', 'NORTHERN JUNOB, DUMAGUETE CITY, NEG. OR.', 'Central', 200, '1702289999_Untitled design (2).png', '', 'valid', '2023-12-11 10:19:59'),
(11, 1, 'Roy Duenas', 'quensed@gmail.com', '09123456789', 'Ilog, Negros Occidental', 'Campus-based', 180, '1702628132_logo.jpg', 'gcash', 'valid', '2023-12-15 08:15:32'),
(12, 1, 'Roy Duenas', 'quensed@gmail.com', '09123456789', 'Ilog, Negros Occidental', 'Campus-based', 180, '1702628132_logo.jpg', 'gcash', 'valid', '2023-12-15 08:15:32'),
(13, 1, 'Roy Duenas', 'quensed@gmail.com', '09123456789', 'Ilog, Negros Occidental', 'Campus-based', 180, '1702628132_logo.jpg', 'gcash', 'valid', '2023-12-15 08:15:32'),
(14, 1, 'Roy Duenas', 'quensed@gmail.com', '09123456789', 'Ilog, Negros Occidental', 'Campus-based', 180, '1702628132_logo.jpg', 'gcash', 'valid', '2023-12-15 08:15:32'),
(15, 1, 'Roy Duenas', 'quensed@gmail.com', '09123456789', 'Ilog, Negros Occidental', 'Campus-based', 180, '1702628132_logo.jpg', 'gcash', 'valid', '2023-12-15 08:15:32'),
(16, 1, 'Juliane Faith Cuizon', 'default@admin.test', '09123456789', 'Manalad', 'Central', 180, '1702629874_logo.jpg', 'gcash', 'valid', '2023-12-15 08:44:34'),
(17, 1, 'Juliane Faith Cuizon', 'default@admin.test', '09123456789', 'Manalad', 'Central', 180, '1702629874_logo.jpg', 'gcash', 'valid', '2023-12-15 08:44:34');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `full_name`, `username`, `password`) VALUES
(1, 'Juliane Faith Cuizon', 'jf.cuizon', '5f4dcc3b5aa765d61d8327deb882cf99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`price_id`);

--
-- Indexes for table `ticket_details`
--
ALTER TABLE `ticket_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `price_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ticket_details`
--
ALTER TABLE `ticket_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
