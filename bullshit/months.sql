-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3309
-- Generation Time: Feb 25, 2022 at 09:47 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `months`
--

CREATE TABLE `months` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `months`
--

INSERT INTO `months` (`id`, `name`, `start`, `end`, `created_at`, `updated_at`) VALUES
(1, 'Kelli Mitchell', '2022-06-22', '2022-04-17', '2022-02-22 10:00:34', '2022-02-22 10:00:34'),
(2, 'Leanne Kertzmann', '2022-05-13', '2022-05-11', '2022-02-22 10:00:34', '2022-02-22 10:00:34'),
(3, 'Deja Konopelski', '2022-06-05', '2022-03-30', '2022-02-22 10:00:34', '2022-02-22 10:00:34'),
(4, 'Richmond Renner I', '2022-03-07', '2022-12-26', '2022-02-22 10:00:34', '2022-02-22 10:00:34'),
(5, 'Jaeden Franecki', '2022-09-19', '2023-01-28', '2022-02-22 10:00:34', '2022-02-22 10:00:34'),
(6, 'Miles Fahey', '2023-02-16', '2022-09-02', '2022-02-22 10:00:34', '2022-02-22 10:00:34'),
(7, 'Dr. Loma Gerlach', '2022-06-27', '2022-09-12', '2022-02-22 10:00:35', '2022-02-22 10:00:35'),
(8, 'Ms. Estrella Stamm Jr.', '2022-06-29', '2022-05-20', '2022-02-22 10:00:35', '2022-02-22 10:00:35'),
(9, 'Carlos Littel II', '2022-06-24', '2022-12-19', '2022-02-22 10:00:35', '2022-02-22 10:00:35'),
(10, 'Ara Mosciski', '2022-02-28', '2022-06-27', '2022-02-22 10:00:35', '2022-02-22 10:00:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `months`
--
ALTER TABLE `months`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `months`
--
ALTER TABLE `months`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
