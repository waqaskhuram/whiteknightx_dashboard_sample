-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2021 at 11:27 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `whiteknight_dash`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(5) NOT NULL,
  `company_name` varchar(150) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `billing_address` varchar(150) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `office_phone` varchar(50) NOT NULL,
  `cell_phone` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `user_type`, `company_name`, `first_name`, `last_name`, `billing_address`, `email_address`, `office_phone`, `cell_phone`, `created_at`) VALUES
(1, 'john.doe', '$2y$10$tj.AIXzZi05Qy0jBZsl7QuBb50QSMJOGzmFRB96aFkK47B769eZ8u', 'admin', 'Weee', 'A', 'B', 'billing_address', '@@@', 'office_phone', 'cell_phone', '2021-07-26 23:08:07'),
(6, 'random', '$2y$10$a1DOaRTPEU6cLsTsOF19su.QEX8EuezseWUnlqCeIAIwi6.HjH4oO', '', '$company_namenew', '$first_namenew', '$last_name', '$billing_address', '$email_address', '$office_phone', '$cell_phone', '2021-07-26 23:10:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
