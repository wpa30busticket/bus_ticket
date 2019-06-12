-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 09, 2019 at 11:28 AM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.17-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus_ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `backends`
--

CREATE TABLE `backends` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `backends`
--

INSERT INTO `backends` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$YLBfsChT9ksxeULdcPuQjeNYO8oImEa81YJx6uWVCOBhcBupP0IMW', NULL, '2019-04-17 20:05:26', '2019-04-17 20:05:26');

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bus_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`id`, `name`, `type`, `bus_no`, `created_at`, `updated_at`) VALUES
(1, 'Mandalarmin', 'VIP', '6P/12912\r\n', '2019-05-05 01:02:40', '2019-05-05 01:02:40'),
(2, 'Famous', 'Air con', '7Q/19318\r\n', '2019-05-05 22:25:25', '2019-05-05 22:25:25'),
(3, 'Yadanarbon', 'Aircon', '6E/19138', '2019-06-26 17:30:00', '2019-06-08 05:44:48');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nrc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`id`, `name`, `email`, `phone`, `address`, `nrc`, `created_at`, `updated_at`) VALUES
(53, 'soe', 'sooe@gmail.com', '1213', '1313', '411', '2019-06-09 01:32:59', '2019-06-09 01:32:59'),
(54, 'thaw zin', 'tk@gmail.com', '1213', '1313', '131', '2019-06-09 04:20:35', '2019-06-09 04:20:35'),
(55, 'Thaw Zin Htoo', 'thawzin.dev@gmail.com', '09429191819', '492, shwe pyi aye rd', '12/ISN(N)222495', '2019-06-09 04:46:03', '2019-06-09 04:46:03');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_03_31_081601_create_customers_table', 1),
(4, '2019_03_31_081614_create_buses_table', 1),
(5, '2019_03_31_081701_create_ticket_bookings_table', 1),
(6, '2019_03_31_083240_create_seats_table', 1),
(7, '2019_03_31_083836_create_routes_table', 1),
(8, '2019_03_31_085008_create_townships_table', 1),
(9, '2019_04_08_041646_create_backends_table', 1),
(10, '2019_04_16_034436_create_guests_table', 1),
(12, '2019_06_08_085743_create_transactions_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` int(10) UNSIGNED NOT NULL,
  `bus_id` int(10) UNSIGNED NOT NULL,
  `from` int(10) UNSIGNED NOT NULL,
  `to` int(10) UNSIGNED NOT NULL,
  `price` int(11) NOT NULL DEFAULT '10000',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `bus_id`, `from`, `to`, `price`, `created_at`, `updated_at`) VALUES
(3, 1, 2, 4, 10000, '2019-04-28 03:28:07', '2019-05-05 01:31:45'),
(4, 1, 1, 3, 10000, '2019-04-28 05:49:58', '2019-04-28 05:49:58'),
(5, 1, 3, 4, 10000, '2019-04-29 23:51:51', '2019-04-29 23:51:51'),
(6, 2, 1, 4, 10000, '2019-05-05 22:25:38', '2019-05-05 22:25:38'),
(7, 2, 4, 1, 10000, '2019-05-19 00:18:59', '2019-05-19 00:18:59'),
(8, 1, 1, 2, 10000, '2019-05-19 01:29:39', '2019-05-19 01:29:39'),
(9, 2, 2, 3, 10000, '2019-05-19 01:46:14', '2019-05-19 01:46:14'),
(10, 1, 2, 3, 10000, '2019-05-19 01:46:43', '2019-05-19 01:46:43'),
(11, 1, 3, 4, 10000, '2019-05-25 02:01:08', '2019-05-25 02:01:08'),
(12, 1, 3, 4, 10000, '2019-05-25 02:01:08', '2019-05-25 02:01:08'),
(13, 2, 3, 4, 10000, '2019-05-25 02:01:22', '2019-05-25 02:01:22'),
(14, 2, 1, 2, 10000, '2019-05-25 04:36:02', '2019-05-25 04:36:02'),
(15, 1, 7, 4, 10000, '2019-05-25 04:39:11', '2019-05-25 04:39:11');

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `id` int(10) UNSIGNED NOT NULL,
  `route_id` int(10) UNSIGNED NOT NULL,
  `seat_no` int(11) NOT NULL,
  `price` int(11) NOT NULL DEFAULT '10000',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`id`, `route_id`, `seat_no`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 8, 1, 10000, 0, '2019-05-18 17:30:00', '2019-06-08 05:44:48'),
(2, 8, 2, 10000, 0, '2019-05-18 17:30:00', '2019-06-08 05:44:48'),
(3, 8, 3, 10000, 0, '2019-05-18 17:30:00', '2019-06-09 01:33:05'),
(4, 8, 4, 10000, 0, '2019-05-18 17:30:00', '2019-06-09 01:33:05'),
(5, 8, 5, 10000, 0, '2019-05-18 17:30:00', '2019-05-18 17:30:00'),
(6, 8, 6, 10000, 0, '2019-05-18 17:30:00', '2019-05-18 17:30:00'),
(7, 8, 7, 10000, 1, '2019-05-18 17:30:00', '2019-06-09 04:20:46'),
(8, 8, 8, 10000, 0, '2019-05-18 17:30:00', '2019-06-09 04:20:46'),
(9, 8, 9, 10000, 0, '2019-05-18 17:30:00', '2019-06-09 04:16:47'),
(10, 8, 10, 10000, 0, '2019-05-18 17:30:00', '2019-05-18 17:30:00'),
(11, 4, 1, 10000, 0, '2019-05-18 17:30:00', '2019-05-18 17:30:00'),
(12, 4, 2, 10000, 0, '2019-05-18 17:30:00', '2019-05-18 17:30:00'),
(13, 4, 3, 10000, 1, '2019-05-18 17:30:00', '2019-06-08 05:49:52'),
(14, 4, 4, 10000, 1, '2019-05-18 17:30:00', '2019-06-08 05:49:52'),
(15, 4, 5, 10000, 0, '2019-05-18 17:30:00', '2019-05-18 17:30:00'),
(16, 4, 6, 10000, 0, '2019-05-18 17:30:00', '2019-05-18 17:30:00'),
(17, 4, 7, 10000, 0, '2019-05-18 17:30:00', '2019-05-18 17:30:00'),
(18, 4, 8, 10000, 0, '2019-05-18 17:30:00', '2019-05-18 17:30:00'),
(19, 4, 9, 10000, 0, '2019-05-18 17:30:00', '2019-05-18 17:30:00'),
(20, 4, 10, 10000, 0, '2019-05-18 17:30:00', '2019-05-18 17:30:00'),
(22, 8, 11, 10000, 1, '2019-06-09 01:53:45', '2019-06-09 04:46:16'),
(23, 8, 12, 10000, 1, '2019-06-09 01:54:24', '2019-06-09 04:20:46'),
(24, 8, 13, 10000, 1, '2019-05-18 17:30:00', '2019-06-08 05:44:48'),
(25, 8, 14, 10000, 1, '2019-05-18 17:30:00', '2019-06-08 05:44:48'),
(26, 8, 15, 10000, 1, '2019-05-18 17:30:00', '2019-06-09 01:33:05'),
(27, 8, 16, 10000, 0, '2019-05-18 17:30:00', '2019-06-09 01:33:05'),
(28, 8, 17, 10000, 0, '2019-05-18 17:30:00', '2019-05-18 17:30:00'),
(29, 8, 18, 10000, 0, '2019-05-18 17:30:00', '2019-06-09 04:46:16'),
(30, 8, 19, 10000, 0, '2019-05-18 17:30:00', '2019-06-09 04:20:46'),
(31, 8, 20, 10000, 0, '2019-05-18 17:30:00', '2019-06-08 05:44:48'),
(32, 8, 21, 10000, 0, '2019-05-18 17:30:00', '2019-06-08 05:44:48'),
(33, 8, 22, 10000, 0, '2019-05-18 17:30:00', '2019-06-09 01:33:05'),
(34, 8, 23, 10000, 0, '2019-05-18 17:30:00', '2019-06-09 01:33:05'),
(35, 8, 24, 10000, 0, '2019-05-18 17:30:00', '2019-05-18 17:30:00'),
(36, 8, 25, 10000, 0, '2019-05-18 17:30:00', '2019-05-18 17:30:00'),
(37, 8, 26, 10000, 1, '2019-05-18 17:30:00', '2019-06-09 04:20:46'),
(38, 8, 27, 10000, 1, '2019-05-18 17:30:00', '2019-06-09 04:20:46'),
(39, 8, 28, 10000, 1, '2019-05-18 17:30:00', '2019-06-09 04:16:47');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_bookings`
--

CREATE TABLE `ticket_bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `bus_id` int(10) UNSIGNED NOT NULL,
  `route_id` int(10) UNSIGNED NOT NULL,
  `seat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `going_date` date NOT NULL,
  `purchase_date` date NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ticket_bookings`
--

INSERT INTO `ticket_bookings` (`id`, `user_id`, `bus_id`, `route_id`, `seat`, `going_date`, `purchase_date`, `price`, `user_type`, `created_at`, `updated_at`) VALUES
(37, 55, 1, 8, '11,18', '2019-05-19', '2019-05-19', '20000', NULL, '2019-06-09 04:46:16', '2019-06-09 04:46:16');

-- --------------------------------------------------------

--
-- Table structure for table `townships`
--

CREATE TABLE `townships` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `townships`
--

INSERT INTO `townships` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Yangon', '2019-04-17 20:05:26', '2019-04-17 20:05:26'),
(2, 'Mandalay', '2019-04-17 20:05:26', '2019-04-17 20:05:26'),
(3, 'Pyin Oo Lwin', '2019-04-17 20:05:26', '2019-04-17 20:05:26'),
(4, 'Taunggyi', '2019-04-17 20:05:26', '2019-04-17 20:05:26'),
(7, 'ထား၀ယ္', '2019-05-25 04:38:51', '2019-05-25 04:38:51');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `booking_id` int(10) UNSIGNED NOT NULL,
  `cc_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cc_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cc_exp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `x_card_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `x_zip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `booking_id`, `cc_name`, `cc_number`, `cc_exp`, `x_card_code`, `x_zip`, `created_at`, `updated_at`) VALUES
(1, 49, 16, 'twer', '2', '13', '121', '13', '2019-06-08 02:50:47', '2019-06-08 02:50:47'),
(2, 49, 17, 'twer', '2', '13', '121', '13', '2019-06-08 02:52:31', '2019-06-08 02:52:31'),
(3, 51, 28, 'r', '4', '78', '89', '3', '2019-06-08 05:43:20', '2019-06-08 05:43:20'),
(4, 51, 29, '67', '78', '7', '78', '78', '2019-06-08 05:44:16', '2019-06-08 05:44:16'),
(5, 51, 30, '5678', '67', '678', '678', '678', '2019-06-08 05:44:48', '2019-06-08 05:44:48'),
(6, 52, 32, '678', '7', 'yu', 'yu', 'yu', '2019-06-08 05:49:52', '2019-06-08 05:49:52'),
(7, 52, 34, '678', '7', 'yu', 'rr', 'yu', '2019-06-08 05:50:57', '2019-06-08 05:50:57'),
(8, 53, 35, 'tk', '1213', '12', '141', '13', '2019-06-09 01:33:05', '2019-06-09 01:33:05'),
(9, 54, 36, 'tm', '123', '1313', '1313', '131', '2019-06-09 04:20:46', '2019-06-09 04:20:46'),
(10, 55, 37, 'Thaw Zin Htoo', '1213', '1212', '1212', '131', '2019-06-09 04:46:16', '2019-06-09 04:46:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin@gmail.com', '12941', '23t352', NULL, '$2y$10$yD1N5KyJ4viaO8X6GFPQzeOS/AkD1iubN7hTc/kLhKAH39SJhjRIu', NULL, '2019-04-28 00:32:00', '2019-04-28 00:32:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `backends`
--
ALTER TABLE `backends`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `backends_email_unique` (`email`);

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `buses_type_index` (`type`),
  ADD KEY `buses_bus_no_index` (`bus_no`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_phone_index` (`phone`);

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
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
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `routes_bus_id_index` (`bus_id`),
  ADD KEY `routes_from_index` (`from`),
  ADD KEY `routes_to_index` (`to`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seats_bus_id_index` (`route_id`),
  ADD KEY `seats_seat_no_index` (`seat_no`);

--
-- Indexes for table `ticket_bookings`
--
ALTER TABLE `ticket_bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ticket_bookings_user_id_bus_id_index` (`user_id`,`bus_id`),
  ADD KEY `ticket_bookings_user_id_index` (`user_id`),
  ADD KEY `ticket_bookings_bus_id_index` (`bus_id`),
  ADD KEY `ticket_bookings_route_id_index` (`route_id`),
  ADD KEY `ticket_bookings_user_type_index` (`user_type`);

--
-- Indexes for table `townships`
--
ALTER TABLE `townships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `townships_name_index` (`name`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD UNIQUE KEY `users_address_unique` (`address`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `backends`
--
ALTER TABLE `backends`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `ticket_bookings`
--
ALTER TABLE `ticket_bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `townships`
--
ALTER TABLE `townships`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
