-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2025 at 06:52 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ninja`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `rib` varchar(255) DEFAULT NULL,
  `initial_sold` decimal(20,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `rib`, `initial_sold`, `created_at`, `updated_at`) VALUES
(3, 'Al barid Bank', '1122334455667789', 20000.00, '2025-05-04 21:58:58', '2025-05-07 00:40:42'),
(5, 'test 1', '1234567891234567', 3500.00, '2025-05-07 00:40:23', '2025-05-07 00:53:02');

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Cegelec t', '2025-03-10 12:48:54', '2025-05-07 14:14:51'),
(2, 'Abdellah', '2025-03-10 22:15:02', '2025-03-10 22:15:02'),
(4, 'abderrahim', '2025-05-07 12:31:02', '2025-05-07 12:31:02');

-- --------------------------------------------------------

--
-- Table structure for table `bank_mouvements`
--

CREATE TABLE `bank_mouvements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `account_id` int(11) NOT NULL,
  `amount` decimal(20,2) NOT NULL,
  `source` varchar(191) NOT NULL DEFAULT 'Direct',
  `source_id` int(11) NOT NULL DEFAULT 0,
  `relation_id` int(11) NOT NULL DEFAULT 0,
  `agent_id` int(11) NOT NULL DEFAULT 0,
  `operation_date` date NOT NULL,
  `expected_date` date NOT NULL,
  `execution_date` date DEFAULT NULL,
  `note` text DEFAULT NULL,
  `statu_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bank_mouvements`
--

INSERT INTO `bank_mouvements` (`id`, `account_id`, `amount`, `source`, `source_id`, `relation_id`, `agent_id`, `operation_date`, `expected_date`, `execution_date`, `note`, `statu_id`, `created_at`, `updated_at`) VALUES
(13, 5, 3000.00, 'Direct', 19, 0, 2, '2025-05-07', '2025-05-07', '2025-05-07', 'test', 0, '2025-05-07 12:28:56', '2025-05-07 14:15:22'),
(14, 3, 2000.00, 'Direct', 19, 0, 4, '2025-05-07', '2025-05-07', NULL, NULL, 0, '2025-05-07 13:16:26', '2025-05-07 13:16:26'),
(15, 3, 4000.00, 'Cash', 20, 6, 0, '2025-05-07', '2025-05-07', '2025-05-07', NULL, 0, '2025-05-07 13:48:46', '2025-05-07 13:48:46'),
(16, 3, -200.00, 'Entitlement', 23, 0, 4, '2025-05-07', '2025-05-07', '2025-05-07', NULL, 0, '2025-05-07 13:53:44', '2025-05-07 13:53:49');

-- --------------------------------------------------------

--
-- Table structure for table `cash_mouvements`
--

CREATE TABLE `cash_mouvements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pocket_id` int(11) NOT NULL,
  `amount` decimal(20,2) NOT NULL,
  `source` varchar(191) NOT NULL DEFAULT 'Direct',
  `source_id` int(11) NOT NULL DEFAULT 0,
  `relation_id` int(11) NOT NULL DEFAULT 0,
  `agent_id` int(11) NOT NULL DEFAULT 0,
  `operation_date` date NOT NULL,
  `expected_date` date NOT NULL,
  `execution_date` date DEFAULT NULL,
  `note` text DEFAULT NULL,
  `statu_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cash_mouvements`
--

INSERT INTO `cash_mouvements` (`id`, `pocket_id`, `amount`, `source`, `source_id`, `relation_id`, `agent_id`, `operation_date`, `expected_date`, `execution_date`, `note`, `statu_id`, `created_at`, `updated_at`) VALUES
(5, 4, 5000.00, 'Direct', 19, 0, 2, '2025-05-07', '2025-05-07', '2025-05-07', 'test', 0, '2025-05-07 12:29:41', '2025-05-07 14:15:22'),
(6, 1, -4000.00, 'Cash', 20, 0, 0, '2025-05-07', '2025-05-07', '2025-05-07', NULL, 0, '2025-05-07 13:48:46', '2025-05-07 13:48:46'),
(7, 1, 2000.00, 'Direct', 19, 0, 4, '2025-05-07', '2025-05-07', '2025-05-07', NULL, 0, '2025-05-07 13:50:35', '2025-05-07 13:50:35');

-- --------------------------------------------------------

--
-- Table structure for table `depends`
--

CREATE TABLE `depends` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `finance_validations`
--

CREATE TABLE `finance_validations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pockets`
--

CREATE TABLE `pockets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `initial_sold` decimal(20,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pockets`
--

INSERT INTO `pockets` (`id`, `name`, `initial_sold`, `created_at`, `updated_at`) VALUES
(1, 'Cash', 0.00, '2025-03-10 15:45:07', '2025-03-10 15:45:07'),
(4, 'test', 1200.00, '2025-05-07 12:28:26', '2025-05-07 12:28:26');

-- --------------------------------------------------------

--
-- Table structure for table `ressources`
--

CREATE TABLE `ressources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `credit` int(11) NOT NULL DEFAULT 0,
  `debit` int(11) NOT NULL DEFAULT 0,
  `dues` int(11) NOT NULL DEFAULT 0,
  `agent` int(11) NOT NULL DEFAULT 0,
  `mouvement` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ressources`
--

INSERT INTO `ressources` (`id`, `name`, `credit`, `debit`, `dues`, `agent`, `mouvement`, `created_at`, `updated_at`) VALUES
(19, 'الراتب', 0, 1, 0, 1, 0, '2024-08-20 12:19:50', '2025-03-10 12:36:17'),
(20, 'إخراج من البنك', 1, 1, 0, 0, 1, '2024-08-20 12:20:11', '2025-03-10 12:42:36'),
(21, 'المركوب', 1, 0, 0, 0, 0, '2024-08-20 12:20:31', '2025-03-10 12:35:27'),
(22, 'الأكل', 1, 0, 0, 0, 0, '2024-08-20 12:20:44', '2025-03-10 12:41:24'),
(23, 'القرض', 1, 1, 1, 1, 0, '2024-08-20 12:21:55', '2025-03-10 12:39:34'),
(24, 'إرجاع القرض', 1, 1, 1, 1, 0, '2024-08-20 12:22:09', '2025-03-10 12:37:05'),
(25, 'المصاريف الشخصية', 1, 0, 0, 0, 0, '2024-08-20 12:52:37', '2025-03-10 12:36:01'),
(27, 'هدية', 1, 1, 0, 1, 0, '2024-08-20 13:02:11', '2025-03-10 12:41:05'),
(28, 'أشياء أخرى', 1, 1, 0, 0, 0, '2024-08-20 13:04:08', '2025-03-10 12:38:09'),
(29, 'مصاريف قديمة', 1, 1, 0, 0, 0, '2024-08-20 13:10:15', '2025-03-10 12:38:46'),
(31, 'الله أعلم', 1, 0, 0, 0, 0, '2024-09-03 10:14:01', '2025-03-10 12:39:10'),
(32, 'التعبئة', 1, 0, 0, 0, 0, '2024-09-08 11:25:29', '2025-03-10 12:37:26'),
(33, 'المقهى', 1, 0, 0, 0, 0, '2024-09-09 08:42:23', '2025-03-10 12:42:00'),
(34, 'السفر', 1, 0, 0, 0, 0, '2024-09-18 08:26:43', '2025-03-10 12:35:06'),
(36, 'القرعة', 1, 1, 0, 0, 0, '2024-10-07 09:15:40', '2025-03-10 12:37:43'),
(37, 'مصاريف المنزل', 1, 0, 0, 0, 0, '2024-12-19 16:03:30', '2025-03-10 12:40:27'),
(39, 'test', 1, 1, 1, 1, 1, '2025-05-07 17:11:09', '2025-05-07 17:11:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_mouvements`
--
ALTER TABLE `bank_mouvements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cash_mouvements`
--
ALTER TABLE `cash_mouvements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `depends`
--
ALTER TABLE `depends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finance_validations`
--
ALTER TABLE `finance_validations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pockets`
--
ALTER TABLE `pockets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ressources`
--
ALTER TABLE `ressources`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bank_mouvements`
--
ALTER TABLE `bank_mouvements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cash_mouvements`
--
ALTER TABLE `cash_mouvements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `depends`
--
ALTER TABLE `depends`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `finance_validations`
--
ALTER TABLE `finance_validations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `pockets`
--
ALTER TABLE `pockets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ressources`
--
ALTER TABLE `ressources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
