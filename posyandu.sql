-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2020 at 03:28 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posyandu`
--

-- --------------------------------------------------------

--
-- Table structure for table `babies`
--

CREATE TABLE `babies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `born` date NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `babies`
--

INSERT INTO `babies` (`id`, `name`, `dad`, `mom`, `born`, `gender`, `address`, `height`, `weight`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'awqw', 'qwqw', '2019-11-01', 'Laki-Laki', 'qwqwq', 2323265, 11115123, NULL, '2020-06-21 03:03:23', '2020-06-21 03:03:23'),
(2, 'asasas', 'sdada', 'asdasd', '2019-10-07', 'Perempuan', 'asdada', 50, 144, NULL, '2020-06-22 00:17:23', '2020-06-22 00:17:23'),
(3, 'qqqw', 'qwqwqsa', 'asasqw', '2020-07-02', 'Laki-Laki', 'asasqw', 112, 2121, NULL, '2020-07-01 21:18:12', '2020-07-01 21:18:12'),
(7, 'okta', 'aaaaaaaaaaaaaa', 'aaaaaaa', '2000-10-16', 'Perempuan', 'aaaaaaaaa', 175, 50, NULL, '2020-07-02 01:52:35', '2020-07-02 02:00:12'),
(9, 'qwqwqw', 'qwqwqw', 'qwqwqq', '2019-01-01', 'Laki-Laki', 'qwqwqw', 70, 5, NULL, '2020-07-02 02:01:38', '2020-07-02 02:01:38'),
(10, 'naufal', 'xxx', 'xxx', '2019-01-02', 'Laki-Laki', 'xxx', 70, 20, NULL, '2020-07-02 05:58:56', '2020-07-02 05:58:56');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_06_18_111033_create_babies_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$2/P5PgMHtGxJO23RydKc3eB7MDEycfnd.Gbht3VApBNMJabh2/7TW', '4sSgf2YDtTrhqLWWbERBVkdbZfO2ZS6lU04Tcp5NwrUCDJWWMAcI3ywC4mzv', '2020-06-21 03:01:31', '2020-06-21 03:01:31'),
(2, 'asasas', 'asass@dsdsdsd.com', NULL, '$2y$10$ErI03Z00g5TzaoHkl50LHOdjR01SXkk5ylXSFLEL7AQrL3KCsFXle', NULL, '2020-07-01 21:32:45', '2020-07-01 21:32:45'),
(3, 'QWQWQWQW', '111@gmail.com', NULL, '$2y$10$7Cn91peDyFWSiX37L70B/.if0/3IrtTK5A9bWSYYOtBUZ/N1a2wxq', NULL, '2020-07-01 21:34:37', '2020-07-01 21:34:37'),
(4, 'qwqwsa', 'qwqw@qwqw', NULL, '$2y$10$pGUKTVuYtX7zC/J96rp2YupkK7XheZYubQcTEp9FuWv12p69E62dm', NULL, '2020-07-01 21:43:44', '2020-07-01 21:43:44'),
(5, 'prambanan', 'naufalhanan22@yahoo.co.id', NULL, '$2y$10$3u6SgbxsWvlsjgLuJ2oaIet6X1uytcXVNQADiNsheb1BHAcDBJ0wG', NULL, '2020-07-01 22:04:54', '2020-07-01 22:04:54'),
(6, 'noval', 'qwqwqw@qwqw', NULL, '$2y$10$2lcErNMeho/3JDxSLEUmc.HCFXRyWPu9Hq6muuPa.voFHbjbmwTcq', NULL, '2020-07-01 22:05:25', '2020-07-01 22:05:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `babies`
--
ALTER TABLE `babies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `babies`
--
ALTER TABLE `babies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
