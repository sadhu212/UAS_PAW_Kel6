-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 07:48 AM
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
-- Database: `paw`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Kenny', 'rayhanakromn@gmail.com', '2021-12-01 03:04:22', '$2y$10$etSLI0Sy7UTv9ntjkagmF.4HCF9Ii58VrfBYxrHBE39N3LfNT3k8q', NULL, 'admin', '2021-11-11 08:12:40', '2021-12-01 11:47:49'),
(31, 'Sadhu', 'sadhudharma28@gmail.com', '2021-12-02 21:28:56', '$2y$10$abIw75IrnjW57wlHc3xhMuw0.wLHKfqzHZ3L71qL36sno65Nld/Fm', NULL, 'admin', '2021-12-02 21:27:36', '2021-12-02 21:28:56'),
(33, 'Gek Anggie', 'gekanggie665@gmail.com', '2021-12-04 03:27:14', '$2y$10$.m5ASmwhkdTMv8bUgbCHtOMbTnCTPxSoj3cy5LxO/p6sYym4k1En.', NULL, 'Customer', '2021-12-04 03:26:45', '2021-12-04 03:27:14'),
(42, 'Komang', 'yuniarikomang@yahoo.com', NULL, '$2y$10$35PN9yMRRVbRlU5vUEApFONcZ8/JnXwhcHkXsMnIeL2iWJ9J8hNsy', NULL, 'Customer', '2021-12-07 16:33:46', '2021-12-07 16:33:46'),
(44, 'Wismayadi', 'gustiputuwismayadi@gmail.com', '2021-12-07 17:11:12', '$2y$10$vlQ4jwjcBckfPQIQmmJ7r.AHicJzmZWsIY9rBl8Swr/ju4KMn5qUi', NULL, 'Customer', '2021-12-07 17:09:58', '2021-12-07 17:11:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
