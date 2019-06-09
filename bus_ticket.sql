-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 09, 2019 at 08:25 AM
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
(1, 'Mandalarmin', 'VIP', '1', '2019-05-05 01:02:40', '2019-05-05 01:02:40'),
(2, 'Mingalar', 'Air con', '12', '2019-05-05 22:25:25', '2019-05-05 22:25:25');

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
(3, 'soe', 'soethiha@gmail.com', '575666', 'v7v', 'h gygy', '2019-04-18 04:20:12', '2019-04-18 04:20:12'),
(4, 'dfgfejjh', 'admin@gmail.com', '014951589', '121rj', '132r2', '2019-04-26 23:41:18', '2019-04-26 23:41:18'),
(5, 'lordishere', 'rkrg@gmail.com', '1214140', '11or1rjo', '12k1', '2019-04-27 00:05:58', '2019-04-27 00:05:58'),
(6, 'vguuvgu', '2r23t@gmail.com', '1214', '131j', '1214r1', '2019-04-27 00:08:31', '2019-04-27 00:08:31'),
(7, '3t3toj3', 'eejpej@gmail.com', '12014140', '1313n', '121,m1', '2019-04-27 00:09:14', '2019-04-27 00:09:14'),
(8, 'ok', 'wrkw@gmail.com', '12101', '10311', '11kr1', '2019-04-27 00:12:27', '2019-04-27 00:12:27'),
(9, 'eegje', 'wegek@gmail.com', '1291481', '121318', '123911r', '2019-04-27 00:15:32', '2019-04-27 00:15:32'),
(10, 'sgjse', 'egjwpj@gmail.com', '1210', '13149', '12314fr', '2019-04-27 00:17:57', '2019-04-27 00:17:57'),
(11, 'erg1', '2jr23pj@gmail.com', '1213', '2131[1e', '12131', '2019-04-27 00:18:27', '2019-04-27 00:18:27'),
(12, 'soesoe', '3the@gmail.com', '121412', '1391rj1', '13131', '2019-04-28 00:23:26', '2019-04-28 00:23:26'),
(13, 't', 'grgkw@gmail.com', '2103130', '1mk', 'wfw', '2019-05-05 01:55:10', '2019-05-05 01:55:10'),
(14, 'efe', 'qw@gmail.com', '12129', '121', 'e1', '2019-05-05 02:05:27', '2019-05-05 02:05:27'),
(15, 'Mingalar', 'soethiha@gmail.com', '31', '1212', '1212', '2019-05-12 01:05:44', '2019-05-12 01:05:44'),
(16, 'efe', 'grgkw@gmail.com', '3432', '11', '11', '2019-05-12 01:36:53', '2019-05-12 01:36:53'),
(17, 'fre', 'admin@gmail.com', '121', '12313', '131', '2019-05-12 02:02:09', '2019-05-12 02:02:09'),
(18, 'fre', 'admin@gmail.com', '121', '12313', '131', '2019-05-12 02:02:33', '2019-05-12 02:02:33'),
(19, 'fre', 'admin@gmail.com', '121', '12313', '131', '2019-05-12 02:03:37', '2019-05-12 02:03:37'),
(20, 'fre', 'admin@gmail.com', '121', '12313', '131', '2019-05-12 02:04:11', '2019-05-12 02:04:11'),
(21, 'Mingalar', 'grgkw@gmail.com', '23', '323', '232', '2019-05-12 02:08:25', '2019-05-12 02:08:25'),
(22, 'soeeeee', 'sooe@gmail.com', '12', '313', '141', '2019-05-12 03:04:03', '2019-05-12 03:04:03'),
(23, 'efe', 'admin@gmail.com', '121', '13', '4141', '2019-05-12 03:05:39', '2019-05-12 03:05:39'),
(24, 'Mingalar', 'admin@gmail.com', '12', '413', '413', '2019-05-12 03:06:59', '2019-05-12 03:06:59'),
(25, 'Mingalar', 'admin@gmail.com', '12', '413', '413', '2019-05-12 03:16:24', '2019-05-12 03:16:24'),
(26, 'Mingalar', 'admin@gmail.com', '12', '413', '413', '2019-05-12 03:16:51', '2019-05-12 03:16:51'),
(27, 'tklord', 'admin@gmail.com', '12', '131', '3121', '2019-05-12 03:20:20', '2019-05-12 03:20:20'),
(28, 'efe', 'grgkw@gmail.com', '33', '445', '44', '2019-05-12 03:25:20', '2019-05-12 03:25:20'),
(29, 'fre', 'admin@gmail.com', '121', '12', '41', '2019-05-12 03:32:06', '2019-05-12 03:32:06'),
(30, 'Zar Zar', 'Zar212@gmail.com', '121213', '1213', '313', '2019-05-12 22:15:57', '2019-05-12 22:15:57'),
(31, 'Zar mani', 'Zar12@gmail.com', '811', '1918', '12141', '2019-05-12 22:17:11', '2019-05-12 22:17:11'),
(32, '3re', 'EF@gmail.com', '1214', '31', '231', '2019-05-12 22:31:40', '2019-05-12 22:31:40'),
(33, 'ewfw', 'admin@gmail.com', '222', '2222', '33222', '2019-05-19 00:37:00', '2019-05-19 00:37:00'),
(34, 'gg1edq', 'tk@gmail.com', '121313', '1313', '131445', '2019-05-19 03:01:11', '2019-05-19 03:01:11'),
(35, 'Hello Item', 'tk@gmail.com', '121', '12', '12/ISN(N)222495', '2019-05-25 01:13:29', '2019-05-25 01:13:29'),
(36, 'gg1edq', 'tk@gmail.com', '11212', '131', '131', '2019-05-25 04:26:16', '2019-05-25 04:26:16'),
(37, 'Hello Item', 'tk@gmail.com', '23232', '223', '23242', '2019-05-25 04:37:27', '2019-05-25 04:37:27'),
(38, 'soe', 'test@gmail.com', '5678', '56789', '5678', '2019-06-01 04:07:55', '2019-06-01 04:07:55'),
(39, 'soe', 'test@gmail.com', '5678', '56789', '5678', '2019-06-01 04:15:13', '2019-06-01 04:15:13'),
(40, 'seo', 'seo@gmail.com', '789', '6789', '7890', '2019-06-01 04:15:33', '2019-06-01 04:15:33'),
(41, 'thaw zin', 'admin@gmail.com', '12143', '131', '131414', '2019-06-02 00:06:57', '2019-06-02 00:06:57'),
(42, 'Hello Item', 'tklord@gmail.com', '2323', '31', '1213', '2019-06-02 00:52:56', '2019-06-02 00:52:56'),
(43, 'Hello Item', 'tklord@gmail.com', '1213', '131455', '1314', '2019-06-03 03:54:47', '2019-06-03 03:54:47'),
(44, 'Hello Item', 'tk@gmail.com', '1234', 'weg', '1314', '2019-06-03 03:57:50', '2019-06-03 03:57:50'),
(45, 'Hello Item', 'tk@gmail.com', '1234', 'weg', '1314', '2019-06-03 04:08:45', '2019-06-03 04:08:45'),
(46, 'Hello Item', 'tk@gmail.com', '1234', 'weg', '1314', '2019-06-03 04:11:44', '2019-06-03 04:11:44'),
(47, 'Hello Item', 'tk@gmail.com', '1234', 'weg', '1314', '2019-06-03 04:12:50', '2019-06-03 04:12:50'),
(48, 'ewfw', 'tklord@gmail.com', '1313', '1313', '12144', '2019-06-08 01:00:21', '2019-06-08 01:00:21'),
(49, 'efe', 'infinity979@gmaill.com', '1213', '213', '4141', '2019-06-08 01:38:04', '2019-06-08 01:38:04'),
(50, 'seo', 'ser@gmail.com', '6789', '789', '789', '2019-06-08 05:37:30', '2019-06-08 05:37:30'),
(51, 'se', 'se@gmail.com', '6789', '789', '78', '2019-06-08 05:39:57', '2019-06-08 05:39:57'),
(52, 'ww', 'ww@gmail.com', '678', '678', '67', '2019-06-08 05:48:09', '2019-06-08 05:48:09'),
(53, 'soe', 'sooe@gmail.com', '1213', '1313', '411', '2019-06-09 01:32:59', '2019-06-09 01:32:59');

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
(12, '2019_06_08_085743_create_transaction_table', 2);

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
(1, 8, 1, 10000, 1, '2019-05-18 17:30:00', '2019-06-08 05:44:48'),
(2, 8, 2, 10000, 1, '2019-05-18 17:30:00', '2019-06-08 05:44:48'),
(3, 8, 3, 10000, 1, '2019-05-18 17:30:00', '2019-06-09 01:33:05'),
(4, 8, 4, 10000, 1, '2019-05-18 17:30:00', '2019-06-09 01:33:05'),
(5, 8, 5, 10000, 1, '2019-05-18 17:30:00', '2019-05-18 17:30:00'),
(6, 8, 6, 10000, 0, '2019-05-18 17:30:00', '2019-05-18 17:30:00'),
(7, 8, 7, 10000, 0, '2019-05-18 17:30:00', '2019-05-18 17:30:00'),
(8, 8, 8, 10000, 0, '2019-05-18 17:30:00', '2019-05-18 17:30:00'),
(9, 8, 9, 10000, 0, '2019-05-18 17:30:00', '2019-05-18 17:30:00'),
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
(22, 8, 11, 10000, 0, '2019-06-09 01:53:45', '2019-06-09 01:53:45'),
(23, 8, 12, 10000, 0, '2019-06-09 01:54:24', '2019-06-09 01:54:24');

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
(1, 2, 1, 8, '', '2019-05-20', '2019-05-20', '200000', 2, '2019-05-18 17:30:00', '2019-05-18 17:30:00'),
(2, 48, 1, 3, '', '2019-04-28', '2019-04-28', '90', NULL, '2019-06-08 01:01:22', '2019-06-08 01:01:22'),
(3, 49, 2, 9, '', '2019-05-19', '2019-05-19', '90', NULL, '2019-06-08 01:38:15', '2019-06-08 01:38:15'),
(4, 49, 2, 9, '8,7', '2019-05-19', '2019-05-19', '90', NULL, '2019-06-08 01:53:57', '2019-06-08 01:53:57'),
(5, 49, 2, 9, '8,7', '2019-05-19', '2019-05-19', '90', NULL, '2019-06-08 01:54:22', '2019-06-08 01:54:22'),
(6, 49, 2, 9, '8,7', '2019-05-19', '2019-05-19', '90', NULL, '2019-06-08 02:24:40', '2019-06-08 02:24:40'),
(7, 49, 2, 9, '8,7', '2019-05-19', '2019-05-19', '90', NULL, '2019-06-08 02:42:17', '2019-06-08 02:42:17'),
(8, 49, 2, 9, '8,7', '2019-05-19', '2019-05-19', '90', NULL, '2019-06-08 02:43:53', '2019-06-08 02:43:53'),
(9, 49, 2, 9, '8,7', '2019-05-19', '2019-05-19', '90', NULL, '2019-06-08 02:46:19', '2019-06-08 02:46:19'),
(10, 49, 2, 9, '8,7', '2019-05-19', '2019-05-19', '90', NULL, '2019-06-08 02:47:10', '2019-06-08 02:47:10'),
(11, 49, 2, 9, '8,7', '2019-05-19', '2019-05-19', '90', NULL, '2019-06-08 02:47:42', '2019-06-08 02:47:42'),
(12, 49, 2, 9, '8,7', '2019-05-19', '2019-05-19', '90', NULL, '2019-06-08 02:49:03', '2019-06-08 02:49:03'),
(13, 49, 2, 9, '8,7', '2019-05-19', '2019-05-19', '90', NULL, '2019-06-08 02:49:37', '2019-06-08 02:49:37'),
(14, 49, 2, 9, '8,7', '2019-05-19', '2019-05-19', '90', NULL, '2019-06-08 02:50:01', '2019-06-08 02:50:01'),
(15, 49, 2, 9, '8,7', '2019-05-19', '2019-05-19', '90', NULL, '2019-06-08 02:50:12', '2019-06-08 02:50:12'),
(16, 49, 2, 9, '8,7', '2019-05-19', '2019-05-19', '90', NULL, '2019-06-08 02:50:47', '2019-06-08 02:50:47'),
(17, 49, 2, 9, '8,7', '2019-05-19', '2019-05-19', '90', NULL, '2019-06-08 02:52:30', '2019-06-08 02:52:30'),
(18, 50, 1, 4, '1,2', '2019-04-28', '2019-04-28', '3', NULL, '2019-06-08 05:37:40', '2019-06-08 05:37:40'),
(19, 50, 1, 4, '1,2', '2019-04-28', '2019-04-28', '3', NULL, '2019-06-08 05:37:57', '2019-06-08 05:37:57'),
(22, 50, 1, 4, '1,2', '2019-04-28', '2019-04-28', '3', NULL, '2019-06-08 05:39:14', '2019-06-08 05:39:14'),
(23, 51, 1, 4, '1,2', '2019-04-28', '2019-04-28', '3', NULL, '2019-06-08 05:40:12', '2019-06-08 05:40:12'),
(24, 51, 1, 4, '1,2', '2019-04-28', '2019-04-28', '3', NULL, '2019-06-08 05:40:51', '2019-06-08 05:40:51'),
(25, 51, 1, 4, '1,2', '2019-04-28', '2019-04-28', '3', NULL, '2019-06-08 05:42:10', '2019-06-08 05:42:10'),
(26, 51, 1, 4, '1,2', '2019-04-28', '2019-04-28', '3', NULL, '2019-06-08 05:42:24', '2019-06-08 05:42:24'),
(27, 51, 1, 4, '1,2', '2019-04-28', '2019-04-28', '3', NULL, '2019-06-08 05:43:03', '2019-06-08 05:43:03'),
(28, 51, 1, 4, '1,2', '2019-04-28', '2019-04-28', '3', NULL, '2019-06-08 05:43:19', '2019-06-08 05:43:19'),
(29, 51, 1, 4, '1,2', '2019-04-28', '2019-04-28', '3', NULL, '2019-06-08 05:44:16', '2019-06-08 05:44:16'),
(30, 51, 1, 4, '1,2', '2019-04-28', '2019-04-28', '3', NULL, '2019-06-08 05:44:48', '2019-06-08 05:44:48'),
(31, 52, 1, 4, '3,4', '2019-04-28', '2019-04-28', '7', NULL, '2019-06-08 05:48:17', '2019-06-08 05:48:17'),
(32, 52, 1, 4, '3,4', '2019-04-28', '2019-04-28', '7', NULL, '2019-06-08 05:49:52', '2019-06-08 05:49:52'),
(33, 52, 1, 4, '3,4', '2019-04-28', '2019-04-28', '7', NULL, '2019-06-08 05:50:34', '2019-06-08 05:50:34'),
(34, 52, 1, 4, '3,4', '2019-04-28', '2019-04-28', '7', NULL, '2019-06-08 05:50:57', '2019-06-08 05:50:57'),
(35, 53, 1, 8, '3,4', '2019-05-19', '2019-05-19', '7', NULL, '2019-06-09 01:33:05', '2019-06-09 01:33:05');

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
(5, 'ဘူးသီးေတာင္ ေမာင္းေတာ', '2019-05-19 00:11:40', '2019-05-19 00:11:40'),
(6, 'မြန္', '2019-05-19 00:12:24', '2019-05-19 00:12:31'),
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
(8, 53, 35, 'tk', '1213', '12', '141', '13', '2019-06-09 01:33:05', '2019-06-09 01:33:05');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `ticket_bookings`
--
ALTER TABLE `ticket_bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `townships`
--
ALTER TABLE `townships`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
