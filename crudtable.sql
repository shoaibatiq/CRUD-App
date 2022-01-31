-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3366
-- Generation Time: May 31, 2021 at 10:46 PM
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
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `crudtable`
--

CREATE TABLE `crudtable` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `std_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '70070381',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` tinyint(4) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `crudtable`
--

INSERT INTO `crudtable` (`id`, `std_id`, `email`, `semester`, `first_name`, `last_name`) VALUES
(10, '70070381', 'shoaib@gmail.com', 5, 'Shoaib', 'Rehman'),
(11, '157', 'joh@gmail.com', 1, 'John', 'Doe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crudtable`
--
ALTER TABLE `crudtable`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `crudtable_std_id_unique` (`std_id`),
  ADD UNIQUE KEY `crudtable_email_unique` (`email`),
  ADD UNIQUE KEY `crudtable_semester_unique` (`semester`),
  ADD UNIQUE KEY `crudtable_first_name_unique` (`first_name`),
  ADD UNIQUE KEY `crudtable_last_name_unique` (`last_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crudtable`
--
ALTER TABLE `crudtable`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
