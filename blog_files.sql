-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2018 at 04:43 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_files`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_file`
--

CREATE TABLE `blog_file` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2018_08_07_152458_create_blog_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 2),
(4, '2018_08_20_142747_post_file', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_file`
--

CREATE TABLE `post_file` (
  `id` int(10) UNSIGNED NOT NULL,
  `head` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `date` date DEFAULT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_file`
--

INSERT INTO `post_file` (`id`, `head`, `body`, `date`, `author`, `created_at`, `updated_at`) VALUES
(1, '1', '2', NULL, NULL, '2018-09-22 09:23:55', '2018-09-23 00:12:45'),
(8, 'test', 'test21', NULL, 'Niki', '2018-09-22 09:36:08', '2018-09-22 09:36:08'),
(12, 'test', 'test21', NULL, 'Niki', '2018-09-22 09:38:41', '2018-09-22 09:38:41'),
(13, 'test', 'test21', NULL, 'Niki', '2018-09-22 09:38:56', '2018-09-22 09:38:56'),
(14, 'test', 'test212', NULL, 'Niki', '2018-09-22 09:39:11', '2018-09-22 22:57:33'),
(15, 'test', 'edit test', NULL, 'Niki', '2018-09-22 09:39:27', '2018-09-22 22:21:44'),
(16, 'test', 'test21', NULL, 'Niki', '2018-09-22 09:39:51', '2018-09-22 09:39:51'),
(17, 'test', 'test21', NULL, 'Niki', '2018-09-22 09:41:06', '2018-09-22 09:41:06'),
(18, 'test', 'test21', NULL, 'Niki', '2018-09-22 09:41:31', '2018-09-22 09:41:31'),
(19, 'test', 'test5', NULL, 'Niki', '2018-09-22 22:56:49', '2018-09-22 22:56:49'),
(20, 'test', 'test5', NULL, 'Niki', '2018-09-22 22:57:04', '2018-09-22 22:57:04'),
(21, '11', '1', NULL, 'Niki', '2018-09-22 22:57:48', '2018-09-22 22:57:48'),
(22, '11', '1', NULL, 'Niki', '2018-09-22 22:58:00', '2018-09-22 22:58:00'),
(23, '11', '1', NULL, 'Niki', '2018-09-22 22:58:33', '2018-09-22 22:58:33'),
(24, '11', '1', NULL, 'Niki', '2018-09-22 23:01:19', '2018-09-22 23:01:19'),
(25, 'test', 'test3', NULL, 'Niki', '2018-09-23 04:53:57', '2018-09-23 04:53:57');

-- --------------------------------------------------------

--
-- Table structure for table `user_file`
--

CREATE TABLE `user_file` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_file`
--
ALTER TABLE `blog_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_file`
--
ALTER TABLE `post_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_file`
--
ALTER TABLE `user_file`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_file`
--
ALTER TABLE `blog_file`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post_file`
--
ALTER TABLE `post_file`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user_file`
--
ALTER TABLE `user_file`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
