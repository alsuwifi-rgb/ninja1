-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2025 at 09:00 PM
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
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial_number` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `notes` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status_id` bigint(20) UNSIGNED DEFAULT NULL,
  `location_id` bigint(20) UNSIGNED DEFAULT NULL,
  `assigned_to_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assets_histories`
--

CREATE TABLE `assets_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `asset_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status_id` bigint(20) UNSIGNED DEFAULT NULL,
  `location_id` bigint(20) UNSIGNED DEFAULT NULL,
  `assigned_user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `asset_categories`
--

CREATE TABLE `asset_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `asset_locations`
--

CREATE TABLE `asset_locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `asset_statuses`
--

CREATE TABLE `asset_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `asset_statuses`
--

INSERT INTO `asset_statuses` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Available', '2024-11-28 09:34:14', '2024-11-28 09:34:14', NULL),
(2, 'Not Available', '2024-11-28 09:34:14', '2024-11-28 09:34:14', NULL),
(3, 'Broken', '2024-11-28 09:34:14', '2024-11-28 09:34:14', NULL),
(4, 'Out for Repair', '2024-11-28 09:34:14', '2024-11-28 09:34:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `audit_logs`
--

CREATE TABLE `audit_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text NOT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subject_type` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `properties` text DEFAULT NULL,
  `host` varchar(46) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `audit_logs`
--

INSERT INTO `audit_logs` (`id`, `description`, `subject_id`, `subject_type`, `user_id`, `properties`, `host`, `created_at`, `updated_at`) VALUES
(1, 'audit:created', 1, 'App\\Models\\Order#1', 1, '{\"rider_id\":\"1\",\"source_id\":null,\"kitchen_name\":null,\"restaurant_id\":null,\"order_number\":\"1000\",\"amount\":\"100\",\"area_name\":null,\"customer_name\":null,\"customer_number\":null,\"cancellation_note\":null,\"picked_up_lat\":\"1\",\"picked_up_long\":\"1\",\"distination_lat\":\"11\",\"distination_long\":\"1\",\"accept_lat\":\"1\",\"accept_long\":\"1\",\"accepted\":\"0\",\"deliver_price\":\"1\",\"distance\":\"1\",\"updated_at\":\"2024-11-30 17:43:03\",\"created_at\":\"2024-11-30 17:43:03\",\"id\":1}', '127.0.0.1', '2024-11-30 14:43:03', '2024-11-30 14:43:03'),
(2, 'audit:updated', 1, 'App\\Models\\Order#1', 1, '{\"kitchen_name\":\"KFC\",\"updated_at\":\"2024-11-30 17:43:49\"}', '127.0.0.1', '2024-11-30 14:43:49', '2024-11-30 14:43:49');

-- --------------------------------------------------------

--
-- Table structure for table `contact_companies`
--

CREATE TABLE `contact_companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `company_address` varchar(255) DEFAULT NULL,
  `company_website` varchar(255) DEFAULT NULL,
  `company_email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `owner_id` bigint(20) UNSIGNED DEFAULT NULL,
  `team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_contacts`
--

CREATE TABLE `contact_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_first_name` varchar(255) DEFAULT NULL,
  `contact_last_name` varchar(255) DEFAULT NULL,
  `contact_phone_1` varchar(255) DEFAULT NULL,
  `contact_phone_2` varchar(255) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `contact_address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `company_id` bigint(20) UNSIGNED DEFAULT NULL,
  `team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `short_code` varchar(255) DEFAULT NULL,
  `iso` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `short_code`, `iso`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Afghanistan', 'af', NULL, NULL, NULL, NULL),
(2, 'Albania', 'al', NULL, NULL, NULL, NULL),
(3, 'Algeria', 'dz', NULL, NULL, NULL, NULL),
(4, 'American Samoa', 'as', NULL, NULL, NULL, NULL),
(5, 'Andorra', 'ad', NULL, NULL, NULL, NULL),
(6, 'Angola', 'ao', NULL, NULL, NULL, NULL),
(7, 'Anguilla', 'ai', NULL, NULL, NULL, NULL),
(8, 'Antarctica', 'aq', NULL, NULL, NULL, NULL),
(9, 'Antigua and Barbuda', 'ag', NULL, NULL, NULL, NULL),
(10, 'Argentina', 'ar', NULL, NULL, NULL, NULL),
(11, 'Armenia', 'am', NULL, NULL, NULL, NULL),
(12, 'Aruba', 'aw', NULL, NULL, NULL, NULL),
(13, 'Australia', 'au', NULL, NULL, NULL, NULL),
(14, 'Austria', 'at', NULL, NULL, NULL, NULL),
(15, 'Azerbaijan', 'az', NULL, NULL, NULL, NULL),
(16, 'Bahamas', 'bs', NULL, NULL, NULL, NULL),
(17, 'Bahrain', 'bh', NULL, NULL, NULL, NULL),
(18, 'Bangladesh', 'bd', NULL, NULL, NULL, NULL),
(19, 'Barbados', 'bb', NULL, NULL, NULL, NULL),
(20, 'Belarus', 'by', NULL, NULL, NULL, NULL),
(21, 'Belgium', 'be', NULL, NULL, NULL, NULL),
(22, 'Belize', 'bz', NULL, NULL, NULL, NULL),
(23, 'Benin', 'bj', NULL, NULL, NULL, NULL),
(24, 'Bermuda', 'bm', NULL, NULL, NULL, NULL),
(25, 'Bhutan', 'bt', NULL, NULL, NULL, NULL),
(26, 'Bolivia', 'bo', NULL, NULL, NULL, NULL),
(27, 'Bosnia and Herzegovina', 'ba', NULL, NULL, NULL, NULL),
(28, 'Botswana', 'bw', NULL, NULL, NULL, NULL),
(29, 'Brazil', 'br', NULL, NULL, NULL, NULL),
(30, 'British Indian Ocean Territory', 'io', NULL, NULL, NULL, NULL),
(31, 'British Virgin Islands', 'vg', NULL, NULL, NULL, NULL),
(32, 'Brunei', 'bn', NULL, NULL, NULL, NULL),
(33, 'Bulgaria', 'bg', NULL, NULL, NULL, NULL),
(34, 'Burkina Faso', 'bf', NULL, NULL, NULL, NULL),
(35, 'Burundi', 'bi', NULL, NULL, NULL, NULL),
(36, 'Cambodia', 'kh', NULL, NULL, NULL, NULL),
(37, 'Cameroon', 'cm', NULL, NULL, NULL, NULL),
(38, 'Canada', 'ca', NULL, NULL, NULL, NULL),
(39, 'Cape Verde', 'cv', NULL, NULL, NULL, NULL),
(40, 'Cayman Islands', 'ky', NULL, NULL, NULL, NULL),
(41, 'Central African Republic', 'cf', NULL, NULL, NULL, NULL),
(42, 'Chad', 'td', NULL, NULL, NULL, NULL),
(43, 'Chile', 'cl', NULL, NULL, NULL, NULL),
(44, 'China', 'cn', NULL, NULL, NULL, NULL),
(45, 'Christmas Island', 'cx', NULL, NULL, NULL, NULL),
(46, 'Cocos Islands', 'cc', NULL, NULL, NULL, NULL),
(47, 'Colombia', 'co', NULL, NULL, NULL, NULL),
(48, 'Comoros', 'km', NULL, NULL, NULL, NULL),
(49, 'Cook Islands', 'ck', NULL, NULL, NULL, NULL),
(50, 'Costa Rica', 'cr', NULL, NULL, NULL, NULL),
(51, 'Croatia', 'hr', NULL, NULL, NULL, NULL),
(52, 'Cuba', 'cu', NULL, NULL, NULL, NULL),
(53, 'Curacao', 'cw', NULL, NULL, NULL, NULL),
(54, 'Cyprus', 'cy', NULL, NULL, NULL, NULL),
(55, 'Czech Republic', 'cz', NULL, NULL, NULL, NULL),
(56, 'Democratic Republic of the Congo', 'cd', NULL, NULL, NULL, NULL),
(57, 'Denmark', 'dk', NULL, NULL, NULL, NULL),
(58, 'Djibouti', 'dj', NULL, NULL, NULL, NULL),
(59, 'Dominica', 'dm', NULL, NULL, NULL, NULL),
(60, 'Dominican Republic', 'do', NULL, NULL, NULL, NULL),
(61, 'East Timor', 'tl', NULL, NULL, NULL, NULL),
(62, 'Ecuador', 'ec', NULL, NULL, NULL, NULL),
(63, 'Egypt', 'eg', NULL, NULL, NULL, NULL),
(64, 'El Salvador', 'sv', NULL, NULL, NULL, NULL),
(65, 'Equatorial Guinea', 'gq', NULL, NULL, NULL, NULL),
(66, 'Eritrea', 'er', NULL, NULL, NULL, NULL),
(67, 'Estonia', 'ee', NULL, NULL, NULL, NULL),
(68, 'Ethiopia', 'et', NULL, NULL, NULL, NULL),
(69, 'Falkland Islands', 'fk', NULL, NULL, NULL, NULL),
(70, 'Faroe Islands', 'fo', NULL, NULL, NULL, NULL),
(71, 'Fiji', 'fj', NULL, NULL, NULL, NULL),
(72, 'Finland', 'fi', NULL, NULL, NULL, NULL),
(73, 'France', 'fr', NULL, NULL, NULL, NULL),
(74, 'French Polynesia', 'pf', NULL, NULL, NULL, NULL),
(75, 'Gabon', 'ga', NULL, NULL, NULL, NULL),
(76, 'Gambia', 'gm', NULL, NULL, NULL, NULL),
(77, 'Georgia', 'ge', NULL, NULL, NULL, NULL),
(78, 'Germany', 'de', NULL, NULL, NULL, NULL),
(79, 'Ghana', 'gh', NULL, NULL, NULL, NULL),
(80, 'Gibraltar', 'gi', NULL, NULL, NULL, NULL),
(81, 'Greece', 'gr', NULL, NULL, NULL, NULL),
(82, 'Greenland', 'gl', NULL, NULL, NULL, NULL),
(83, 'Grenada', 'gd', NULL, NULL, NULL, NULL),
(84, 'Guam', 'gu', NULL, NULL, NULL, NULL),
(85, 'Guatemala', 'gt', NULL, NULL, NULL, NULL),
(86, 'Guernsey', 'gg', NULL, NULL, NULL, NULL),
(87, 'Guinea', 'gn', NULL, NULL, NULL, NULL),
(88, 'Guinea-Bissau', 'gw', NULL, NULL, NULL, NULL),
(89, 'Guyana', 'gy', NULL, NULL, NULL, NULL),
(90, 'Haiti', 'ht', NULL, NULL, NULL, NULL),
(91, 'Honduras', 'hn', NULL, NULL, NULL, NULL),
(92, 'Hong Kong', 'hk', NULL, NULL, NULL, NULL),
(93, 'Hungary', 'hu', NULL, NULL, NULL, NULL),
(94, 'Iceland', 'is', NULL, NULL, NULL, NULL),
(95, 'India', 'in', NULL, NULL, NULL, NULL),
(96, 'Indonesia', 'id', NULL, NULL, NULL, NULL),
(97, 'Iran', 'ir', NULL, NULL, NULL, NULL),
(98, 'Iraq', 'iq', NULL, NULL, NULL, NULL),
(99, 'Ireland', 'ie', NULL, NULL, NULL, NULL),
(100, 'Isle of Man', 'im', NULL, NULL, NULL, NULL),
(101, 'Israel', 'il', NULL, NULL, NULL, NULL),
(102, 'Italy', 'it', NULL, NULL, NULL, NULL),
(103, 'Ivory Coast', 'ci', NULL, NULL, NULL, NULL),
(104, 'Jamaica', 'jm', NULL, NULL, NULL, NULL),
(105, 'Japan', 'jp', NULL, NULL, NULL, NULL),
(106, 'Jersey', 'je', NULL, NULL, NULL, NULL),
(107, 'Jordan', 'jo', NULL, NULL, NULL, NULL),
(108, 'Kazakhstan', 'kz', NULL, NULL, NULL, NULL),
(109, 'Kenya', 'ke', NULL, NULL, NULL, NULL),
(110, 'Kiribati', 'ki', NULL, NULL, NULL, NULL),
(111, 'Kosovo', 'xk', NULL, NULL, NULL, NULL),
(112, 'Kuwait', 'kw', NULL, NULL, NULL, NULL),
(113, 'Kyrgyzstan', 'kg', NULL, NULL, NULL, NULL),
(114, 'Laos', 'la', NULL, NULL, NULL, NULL),
(115, 'Latvia', 'lv', NULL, NULL, NULL, NULL),
(116, 'Lebanon', 'lb', NULL, NULL, NULL, NULL),
(117, 'Lesotho', 'ls', NULL, NULL, NULL, NULL),
(118, 'Liberia', 'lr', NULL, NULL, NULL, NULL),
(119, 'Libya', 'ly', NULL, NULL, NULL, NULL),
(120, 'Liechtenstein', 'li', NULL, NULL, NULL, NULL),
(121, 'Lithuania', 'lt', NULL, NULL, NULL, NULL),
(122, 'Luxembourg', 'lu', NULL, NULL, NULL, NULL),
(123, 'Macau', 'mo', NULL, NULL, NULL, NULL),
(124, 'Macedonia', 'mk', NULL, NULL, NULL, NULL),
(125, 'Madagascar', 'mg', NULL, NULL, NULL, NULL),
(126, 'Malawi', 'mw', NULL, NULL, NULL, NULL),
(127, 'Malaysia', 'my', NULL, NULL, NULL, NULL),
(128, 'Maldives', 'mv', NULL, NULL, NULL, NULL),
(129, 'Mali', 'ml', NULL, NULL, NULL, NULL),
(130, 'Malta', 'mt', NULL, NULL, NULL, NULL),
(131, 'Marshall Islands', 'mh', NULL, NULL, NULL, NULL),
(132, 'Mauritania', 'mr', NULL, NULL, NULL, NULL),
(133, 'Mauritius', 'mu', NULL, NULL, NULL, NULL),
(134, 'Mayotte', 'yt', NULL, NULL, NULL, NULL),
(135, 'Mexico', 'mx', NULL, NULL, NULL, NULL),
(136, 'Micronesia', 'fm', NULL, NULL, NULL, NULL),
(137, 'Moldova', 'md', NULL, NULL, NULL, NULL),
(138, 'Monaco', 'mc', NULL, NULL, NULL, NULL),
(139, 'Mongolia', 'mn', NULL, NULL, NULL, NULL),
(140, 'Montenegro', 'me', NULL, NULL, NULL, NULL),
(141, 'Montserrat', 'ms', NULL, NULL, NULL, NULL),
(142, 'Morocco', 'ma', NULL, NULL, NULL, NULL),
(143, 'Mozambique', 'mz', NULL, NULL, NULL, NULL),
(144, 'Myanmar', 'mm', NULL, NULL, NULL, NULL),
(145, 'Namibia', 'na', NULL, NULL, NULL, NULL),
(146, 'Nauru', 'nr', NULL, NULL, NULL, NULL),
(147, 'Nepal', 'np', NULL, NULL, NULL, NULL),
(148, 'Netherlands', 'nl', NULL, NULL, NULL, NULL),
(149, 'Netherlands Antilles', 'an', NULL, NULL, NULL, NULL),
(150, 'New Caledonia', 'nc', NULL, NULL, NULL, NULL),
(151, 'New Zealand', 'nz', NULL, NULL, NULL, NULL),
(152, 'Nicaragua', 'ni', NULL, NULL, NULL, NULL),
(153, 'Niger', 'ne', NULL, NULL, NULL, NULL),
(154, 'Nigeria', 'ng', NULL, NULL, NULL, NULL),
(155, 'Niue', 'nu', NULL, NULL, NULL, NULL),
(156, 'North Korea', 'kp', NULL, NULL, NULL, NULL),
(157, 'Northern Mariana Islands', 'mp', NULL, NULL, NULL, NULL),
(158, 'Norway', 'no', NULL, NULL, NULL, NULL),
(159, 'Oman', 'om', NULL, NULL, NULL, NULL),
(160, 'Pakistan', 'pk', NULL, NULL, NULL, NULL),
(161, 'Palau', 'pw', NULL, NULL, NULL, NULL),
(162, 'Palestine', 'ps', NULL, NULL, NULL, NULL),
(163, 'Panama', 'pa', NULL, NULL, NULL, NULL),
(164, 'Papua New Guinea', 'pg', NULL, NULL, NULL, NULL),
(165, 'Paraguay', 'py', NULL, NULL, NULL, NULL),
(166, 'Peru', 'pe', NULL, NULL, NULL, NULL),
(167, 'Philippines', 'ph', NULL, NULL, NULL, NULL),
(168, 'Pitcairn', 'pn', NULL, NULL, NULL, NULL),
(169, 'Poland', 'pl', NULL, NULL, NULL, NULL),
(170, 'Portugal', 'pt', NULL, NULL, NULL, NULL),
(171, 'Puerto Rico', 'pr', NULL, NULL, NULL, NULL),
(172, 'Qatar', 'qa', NULL, NULL, NULL, NULL),
(173, 'Republic of the Congo', 'cg', NULL, NULL, NULL, NULL),
(174, 'Reunion', 're', NULL, NULL, NULL, NULL),
(175, 'Romania', 'ro', NULL, NULL, NULL, NULL),
(176, 'Russia', 'ru', NULL, NULL, NULL, NULL),
(177, 'Rwanda', 'rw', NULL, NULL, NULL, NULL),
(178, 'Saint Barthelemy', 'bl', NULL, NULL, NULL, NULL),
(179, 'Saint Helena', 'sh', NULL, NULL, NULL, NULL),
(180, 'Saint Kitts and Nevis', 'kn', NULL, NULL, NULL, NULL),
(181, 'Saint Lucia', 'lc', NULL, NULL, NULL, NULL),
(182, 'Saint Martin', 'mf', NULL, NULL, NULL, NULL),
(183, 'Saint Pierre and Miquelon', 'pm', NULL, NULL, NULL, NULL),
(184, 'Saint Vincent and the Grenadines', 'vc', NULL, NULL, NULL, NULL),
(185, 'Samoa', 'ws', NULL, NULL, NULL, NULL),
(186, 'San Marino', 'sm', NULL, NULL, NULL, NULL),
(187, 'Sao Tome and Principe', 'st', NULL, NULL, NULL, NULL),
(188, 'Saudi Arabia', 'sa', NULL, NULL, NULL, NULL),
(189, 'Senegal', 'sn', NULL, NULL, NULL, NULL),
(190, 'Serbia', 'rs', NULL, NULL, NULL, NULL),
(191, 'Seychelles', 'sc', NULL, NULL, NULL, NULL),
(192, 'Sierra Leone', 'sl', NULL, NULL, NULL, NULL),
(193, 'Singapore', 'sg', NULL, NULL, NULL, NULL),
(194, 'Sint Maarten', 'sx', NULL, NULL, NULL, NULL),
(195, 'Slovakia', 'sk', NULL, NULL, NULL, NULL),
(196, 'Slovenia', 'si', NULL, NULL, NULL, NULL),
(197, 'Solomon Islands', 'sb', NULL, NULL, NULL, NULL),
(198, 'Somalia', 'so', NULL, NULL, NULL, NULL),
(199, 'South Africa', 'za', NULL, NULL, NULL, NULL),
(200, 'South Korea', 'kr', NULL, NULL, NULL, NULL),
(201, 'South Sudan', 'ss', NULL, NULL, NULL, NULL),
(202, 'Spain', 'es', NULL, NULL, NULL, NULL),
(203, 'Sri Lanka', 'lk', NULL, NULL, NULL, NULL),
(204, 'Sudan', 'sd', NULL, NULL, NULL, NULL),
(205, 'Suriname', 'sr', NULL, NULL, NULL, NULL),
(206, 'Svalbard and Jan Mayen', 'sj', NULL, NULL, NULL, NULL),
(207, 'Swaziland', 'sz', NULL, NULL, NULL, NULL),
(208, 'Sweden', 'se', NULL, NULL, NULL, NULL),
(209, 'Switzerland', 'ch', NULL, NULL, NULL, NULL),
(210, 'Syria', 'sy', NULL, NULL, NULL, NULL),
(211, 'Taiwan', 'tw', NULL, NULL, NULL, NULL),
(212, 'Tajikistan', 'tj', NULL, NULL, NULL, NULL),
(213, 'Tanzania', 'tz', NULL, NULL, NULL, NULL),
(214, 'Thailand', 'th', NULL, NULL, NULL, NULL),
(215, 'Togo', 'tg', NULL, NULL, NULL, NULL),
(216, 'Tokelau', 'tk', NULL, NULL, NULL, NULL),
(217, 'Tonga', 'to', NULL, NULL, NULL, NULL),
(218, 'Trinidad and Tobago', 'tt', NULL, NULL, NULL, NULL),
(219, 'Tunisia', 'tn', NULL, NULL, NULL, NULL),
(220, 'Turkey', 'tr', NULL, NULL, NULL, NULL),
(221, 'Turkmenistan', 'tm', NULL, NULL, NULL, NULL),
(222, 'Turks and Caicos Islands', 'tc', NULL, NULL, NULL, NULL),
(223, 'Tuvalu', 'tv', NULL, NULL, NULL, NULL),
(224, 'U.S. Virgin Islands', 'vi', NULL, NULL, NULL, NULL),
(225, 'Uganda', 'ug', NULL, NULL, NULL, NULL),
(226, 'Ukraine', 'ua', NULL, NULL, NULL, NULL),
(227, 'United Arab Emirates', 'ae', NULL, NULL, NULL, NULL),
(228, 'United Kingdom', 'gb', NULL, NULL, NULL, NULL),
(229, 'United States', 'us', NULL, NULL, NULL, NULL),
(230, 'Uruguay', 'uy', NULL, NULL, NULL, NULL),
(231, 'Uzbekistan', 'uz', NULL, NULL, NULL, NULL),
(232, 'Vanuatu', 'vu', NULL, NULL, NULL, NULL),
(233, 'Vatican', 'va', NULL, NULL, NULL, NULL),
(234, 'Venezuela', 've', NULL, NULL, NULL, NULL),
(235, 'Vietnam', 'vn', NULL, NULL, NULL, NULL),
(236, 'Wallis and Futuna', 'wf', NULL, NULL, NULL, NULL),
(237, 'Western Sahara', 'eh', NULL, NULL, NULL, NULL),
(238, 'Yemen', 'ye', NULL, NULL, NULL, NULL),
(239, 'Zambia', 'zm', NULL, NULL, NULL, NULL),
(240, 'Zimbabwe', 'zw', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `company_id` bigint(20) UNSIGNED DEFAULT NULL,
  `team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `entry_date` date DEFAULT NULL,
  `amount` decimal(15,2) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `expense_category_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expense_categories`
--

CREATE TABLE `expense_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `incomes`
--

CREATE TABLE `incomes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `entry_date` date DEFAULT NULL,
  `amount` decimal(15,2) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `income_category_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `income_categories`
--

CREATE TABLE `income_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `maintenances`
--

CREATE TABLE `maintenances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descriptions` longtext DEFAULT NULL,
  `spent` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `asset_id` bigint(20) UNSIGNED DEFAULT NULL,
  `owner_id` bigint(20) UNSIGNED DEFAULT NULL,
  `team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) DEFAULT NULL,
  `collection_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `mime_type` varchar(255) DEFAULT NULL,
  `disk` varchar(255) NOT NULL,
  `conversions_disk` varchar(255) DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`generated_conversions`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2024_11_29_000001_create_audit_logs_table', 1),
(4, '2024_11_29_000002_create_media_table', 1),
(5, '2024_11_29_000003_create_permissions_table', 1),
(6, '2024_11_29_000004_create_roles_table', 1),
(7, '2024_11_29_000005_create_users_table', 1),
(8, '2024_11_29_000006_create_teams_table', 1),
(9, '2024_11_29_000007_create_user_alerts_table', 1),
(10, '2024_11_29_000008_create_asset_categories_table', 1),
(11, '2024_11_29_000009_create_asset_locations_table', 1),
(12, '2024_11_29_000010_create_asset_statuses_table', 1),
(13, '2024_11_29_000011_create_assets_table', 1),
(14, '2024_11_29_000012_create_assets_histories_table', 1),
(15, '2024_11_29_000013_create_task_statuses_table', 1),
(16, '2024_11_29_000014_create_task_tags_table', 1),
(17, '2024_11_29_000015_create_tasks_table', 1),
(18, '2024_11_29_000016_create_expense_categories_table', 1),
(19, '2024_11_29_000017_create_income_categories_table', 1),
(20, '2024_11_29_000018_create_expenses_table', 1),
(21, '2024_11_29_000019_create_incomes_table', 1),
(22, '2024_11_29_000020_create_contact_companies_table', 1),
(23, '2024_11_29_000021_create_contact_contacts_table', 1),
(24, '2024_11_29_000022_create_time_work_types_table', 1),
(25, '2024_11_29_000023_create_time_projects_table', 1),
(26, '2024_11_29_000024_create_time_entries_table', 1),
(27, '2024_11_29_000025_create_departments_table', 1),
(28, '2024_11_29_000026_create_countries_table', 1),
(29, '2024_11_29_000027_create_targets_table', 1),
(30, '2024_11_29_000028_create_order_sources_table', 1),
(31, '2024_11_29_000029_create_restaurants_table', 1),
(32, '2024_11_29_000030_create_orders_table', 1),
(33, '2024_11_29_000031_create_maintenances_table', 1),
(34, '2024_11_29_000032_create_permission_role_pivot_table', 1),
(35, '2024_11_29_000033_create_role_user_pivot_table', 1),
(36, '2024_11_29_000034_create_user_user_alert_pivot_table', 1),
(37, '2024_11_29_000035_create_task_task_tag_pivot_table', 1),
(38, '2024_11_29_000036_add_relationship_fields_to_users_table', 1),
(39, '2024_11_29_000037_add_relationship_fields_to_teams_table', 1),
(40, '2024_11_29_000038_add_relationship_fields_to_assets_table', 1),
(41, '2024_11_29_000039_add_relationship_fields_to_assets_histories_table', 1),
(42, '2024_11_29_000040_add_relationship_fields_to_tasks_table', 1),
(43, '2024_11_29_000041_add_relationship_fields_to_expenses_table', 1),
(44, '2024_11_29_000042_add_relationship_fields_to_incomes_table', 1),
(45, '2024_11_29_000043_add_relationship_fields_to_contact_companies_table', 1),
(46, '2024_11_29_000044_add_relationship_fields_to_contact_contacts_table', 1),
(47, '2024_11_29_000045_add_relationship_fields_to_time_entries_table', 1),
(48, '2024_11_29_000046_add_relationship_fields_to_departments_table', 1),
(49, '2024_11_29_000047_add_relationship_fields_to_targets_table', 1),
(50, '2024_11_29_000048_add_relationship_fields_to_restaurants_table', 1),
(51, '2024_11_29_000049_add_relationship_fields_to_orders_table', 1),
(52, '2024_11_29_000050_add_relationship_fields_to_maintenances_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kitchen_name` varchar(255) DEFAULT NULL,
  `order_number` varchar(255) DEFAULT NULL,
  `amount` double(15,2) DEFAULT NULL,
  `area_name` varchar(255) DEFAULT NULL,
  `payment_type` varchar(255) DEFAULT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `customer_number` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `cancellation_note` varchar(255) DEFAULT NULL,
  `picked_up_lat` double(15,10) DEFAULT NULL,
  `picked_up_long` double(15,10) DEFAULT NULL,
  `distination_lat` double(15,10) DEFAULT NULL,
  `distination_long` double(15,10) DEFAULT NULL,
  `accept_lat` double(15,10) DEFAULT NULL,
  `accept_long` double(15,10) DEFAULT NULL,
  `accepted` tinyint(1) DEFAULT 0,
  `deliver_price` double(15,2) DEFAULT NULL,
  `distance` double(15,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `rider_id` bigint(20) UNSIGNED DEFAULT NULL,
  `source_id` bigint(20) UNSIGNED DEFAULT NULL,
  `restaurant_id` bigint(20) UNSIGNED DEFAULT NULL,
  `team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `kitchen_name`, `order_number`, `amount`, `area_name`, `payment_type`, `customer_name`, `customer_number`, `status`, `cancellation_note`, `picked_up_lat`, `picked_up_long`, `distination_lat`, `distination_long`, `accept_lat`, `accept_long`, `accepted`, `deliver_price`, `distance`, `created_at`, `updated_at`, `deleted_at`, `rider_id`, `source_id`, `restaurant_id`, `team_id`, `created_by`) VALUES
(1, 'KFC', '1000', 100.00, NULL, NULL, NULL, NULL, NULL, NULL, 1.0000000000, 1.0000000000, 11.0000000000, 1.0000000000, 1.0000000000, 1.0000000000, 0, 1.00, 1.00, '2024-11-30 14:43:03', '2024-11-30 14:43:49', NULL, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_sources`
--

CREATE TABLE `order_sources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user_management_access', NULL, NULL, NULL),
(2, 'permission_create', NULL, NULL, NULL),
(3, 'permission_edit', NULL, NULL, NULL),
(4, 'permission_show', NULL, NULL, NULL),
(5, 'permission_delete', NULL, NULL, NULL),
(6, 'permission_access', NULL, NULL, NULL),
(7, 'role_create', NULL, NULL, NULL),
(8, 'role_edit', NULL, NULL, NULL),
(9, 'role_show', NULL, NULL, NULL),
(10, 'role_delete', NULL, NULL, NULL),
(11, 'role_access', NULL, NULL, NULL),
(12, 'user_create', NULL, NULL, NULL),
(13, 'user_edit', NULL, NULL, NULL),
(14, 'user_show', NULL, NULL, NULL),
(15, 'user_delete', NULL, NULL, NULL),
(16, 'user_access', NULL, NULL, NULL),
(17, 'audit_log_show', NULL, NULL, NULL),
(18, 'audit_log_access', NULL, NULL, NULL),
(19, 'team_create', NULL, NULL, NULL),
(20, 'team_edit', NULL, NULL, NULL),
(21, 'team_show', NULL, NULL, NULL),
(22, 'team_delete', NULL, NULL, NULL),
(23, 'team_access', NULL, NULL, NULL),
(24, 'user_alert_create', NULL, NULL, NULL),
(25, 'user_alert_show', NULL, NULL, NULL),
(26, 'user_alert_delete', NULL, NULL, NULL),
(27, 'user_alert_access', NULL, NULL, NULL),
(28, 'asset_management_access', NULL, NULL, NULL),
(29, 'asset_category_create', NULL, NULL, NULL),
(30, 'asset_category_edit', NULL, NULL, NULL),
(31, 'asset_category_show', NULL, NULL, NULL),
(32, 'asset_category_delete', NULL, NULL, NULL),
(33, 'asset_category_access', NULL, NULL, NULL),
(34, 'asset_location_create', NULL, NULL, NULL),
(35, 'asset_location_edit', NULL, NULL, NULL),
(36, 'asset_location_show', NULL, NULL, NULL),
(37, 'asset_location_delete', NULL, NULL, NULL),
(38, 'asset_location_access', NULL, NULL, NULL),
(39, 'asset_status_create', NULL, NULL, NULL),
(40, 'asset_status_edit', NULL, NULL, NULL),
(41, 'asset_status_show', NULL, NULL, NULL),
(42, 'asset_status_delete', NULL, NULL, NULL),
(43, 'asset_status_access', NULL, NULL, NULL),
(44, 'asset_create', NULL, NULL, NULL),
(45, 'asset_edit', NULL, NULL, NULL),
(46, 'asset_show', NULL, NULL, NULL),
(47, 'asset_delete', NULL, NULL, NULL),
(48, 'asset_access', NULL, NULL, NULL),
(49, 'assets_history_access', NULL, NULL, NULL),
(50, 'task_management_access', NULL, NULL, NULL),
(51, 'task_status_create', NULL, NULL, NULL),
(52, 'task_status_edit', NULL, NULL, NULL),
(53, 'task_status_show', NULL, NULL, NULL),
(54, 'task_status_delete', NULL, NULL, NULL),
(55, 'task_status_access', NULL, NULL, NULL),
(56, 'task_tag_create', NULL, NULL, NULL),
(57, 'task_tag_edit', NULL, NULL, NULL),
(58, 'task_tag_show', NULL, NULL, NULL),
(59, 'task_tag_delete', NULL, NULL, NULL),
(60, 'task_tag_access', NULL, NULL, NULL),
(61, 'task_create', NULL, NULL, NULL),
(62, 'task_edit', NULL, NULL, NULL),
(63, 'task_show', NULL, NULL, NULL),
(64, 'task_delete', NULL, NULL, NULL),
(65, 'task_access', NULL, NULL, NULL),
(66, 'tasks_calendar_access', NULL, NULL, NULL),
(67, 'expense_management_access', NULL, NULL, NULL),
(68, 'expense_category_create', NULL, NULL, NULL),
(69, 'expense_category_edit', NULL, NULL, NULL),
(70, 'expense_category_show', NULL, NULL, NULL),
(71, 'expense_category_delete', NULL, NULL, NULL),
(72, 'expense_category_access', NULL, NULL, NULL),
(73, 'income_category_create', NULL, NULL, NULL),
(74, 'income_category_edit', NULL, NULL, NULL),
(75, 'income_category_show', NULL, NULL, NULL),
(76, 'income_category_delete', NULL, NULL, NULL),
(77, 'income_category_access', NULL, NULL, NULL),
(78, 'expense_create', NULL, NULL, NULL),
(79, 'expense_edit', NULL, NULL, NULL),
(80, 'expense_show', NULL, NULL, NULL),
(81, 'expense_delete', NULL, NULL, NULL),
(82, 'expense_access', NULL, NULL, NULL),
(83, 'income_create', NULL, NULL, NULL),
(84, 'income_edit', NULL, NULL, NULL),
(85, 'income_show', NULL, NULL, NULL),
(86, 'income_delete', NULL, NULL, NULL),
(87, 'income_access', NULL, NULL, NULL),
(88, 'expense_report_create', NULL, NULL, NULL),
(89, 'expense_report_edit', NULL, NULL, NULL),
(90, 'expense_report_show', NULL, NULL, NULL),
(91, 'expense_report_delete', NULL, NULL, NULL),
(92, 'expense_report_access', NULL, NULL, NULL),
(93, 'contact_management_access', NULL, NULL, NULL),
(94, 'contact_company_create', NULL, NULL, NULL),
(95, 'contact_company_edit', NULL, NULL, NULL),
(96, 'contact_company_show', NULL, NULL, NULL),
(97, 'contact_company_delete', NULL, NULL, NULL),
(98, 'contact_company_access', NULL, NULL, NULL),
(99, 'contact_contact_create', NULL, NULL, NULL),
(100, 'contact_contact_edit', NULL, NULL, NULL),
(101, 'contact_contact_show', NULL, NULL, NULL),
(102, 'contact_contact_delete', NULL, NULL, NULL),
(103, 'contact_contact_access', NULL, NULL, NULL),
(104, 'time_management_access', NULL, NULL, NULL),
(105, 'time_work_type_create', NULL, NULL, NULL),
(106, 'time_work_type_edit', NULL, NULL, NULL),
(107, 'time_work_type_show', NULL, NULL, NULL),
(108, 'time_work_type_delete', NULL, NULL, NULL),
(109, 'time_work_type_access', NULL, NULL, NULL),
(110, 'time_project_create', NULL, NULL, NULL),
(111, 'time_project_edit', NULL, NULL, NULL),
(112, 'time_project_show', NULL, NULL, NULL),
(113, 'time_project_delete', NULL, NULL, NULL),
(114, 'time_project_access', NULL, NULL, NULL),
(115, 'time_entry_create', NULL, NULL, NULL),
(116, 'time_entry_edit', NULL, NULL, NULL),
(117, 'time_entry_show', NULL, NULL, NULL),
(118, 'time_entry_delete', NULL, NULL, NULL),
(119, 'time_entry_access', NULL, NULL, NULL),
(120, 'time_report_create', NULL, NULL, NULL),
(121, 'time_report_edit', NULL, NULL, NULL),
(122, 'time_report_show', NULL, NULL, NULL),
(123, 'time_report_delete', NULL, NULL, NULL),
(124, 'time_report_access', NULL, NULL, NULL),
(125, 'hr_access', NULL, NULL, NULL),
(126, 'department_create', NULL, NULL, NULL),
(127, 'department_edit', NULL, NULL, NULL),
(128, 'department_show', NULL, NULL, NULL),
(129, 'department_delete', NULL, NULL, NULL),
(130, 'department_access', NULL, NULL, NULL),
(131, 'index_access', NULL, NULL, NULL),
(132, 'country_create', NULL, NULL, NULL),
(133, 'country_edit', NULL, NULL, NULL),
(134, 'country_show', NULL, NULL, NULL),
(135, 'country_delete', NULL, NULL, NULL),
(136, 'country_access', NULL, NULL, NULL),
(137, 'target_create', NULL, NULL, NULL),
(138, 'target_edit', NULL, NULL, NULL),
(139, 'target_show', NULL, NULL, NULL),
(140, 'target_delete', NULL, NULL, NULL),
(141, 'target_access', NULL, NULL, NULL),
(142, 'order_source_create', NULL, NULL, NULL),
(143, 'order_source_edit', NULL, NULL, NULL),
(144, 'order_source_show', NULL, NULL, NULL),
(145, 'order_source_delete', NULL, NULL, NULL),
(146, 'order_source_access', NULL, NULL, NULL),
(147, 'restaurant_create', NULL, NULL, NULL),
(148, 'restaurant_edit', NULL, NULL, NULL),
(149, 'restaurant_show', NULL, NULL, NULL),
(150, 'restaurant_delete', NULL, NULL, NULL),
(151, 'restaurant_access', NULL, NULL, NULL),
(152, 'order_create', NULL, NULL, NULL),
(153, 'order_edit', NULL, NULL, NULL),
(154, 'order_show', NULL, NULL, NULL),
(155, 'order_delete', NULL, NULL, NULL),
(156, 'order_access', NULL, NULL, NULL),
(157, 'maintenance_create', NULL, NULL, NULL),
(158, 'maintenance_edit', NULL, NULL, NULL),
(159, 'maintenance_show', NULL, NULL, NULL),
(160, 'maintenance_delete', NULL, NULL, NULL),
(161, 'maintenance_access', NULL, NULL, NULL),
(162, 'profile_password_edit', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(1, 34),
(1, 35),
(1, 36),
(1, 37),
(1, 38),
(1, 39),
(1, 40),
(1, 41),
(1, 42),
(1, 43),
(1, 44),
(1, 45),
(1, 46),
(1, 47),
(1, 48),
(1, 49),
(1, 50),
(1, 51),
(1, 52),
(1, 53),
(1, 54),
(1, 55),
(1, 56),
(1, 57),
(1, 58),
(1, 59),
(1, 60),
(1, 61),
(1, 62),
(1, 63),
(1, 64),
(1, 65),
(1, 66),
(1, 67),
(1, 68),
(1, 69),
(1, 70),
(1, 71),
(1, 72),
(1, 73),
(1, 74),
(1, 75),
(1, 76),
(1, 77),
(1, 78),
(1, 79),
(1, 80),
(1, 81),
(1, 82),
(1, 83),
(1, 84),
(1, 85),
(1, 86),
(1, 87),
(1, 88),
(1, 89),
(1, 90),
(1, 91),
(1, 92),
(1, 93),
(1, 94),
(1, 95),
(1, 96),
(1, 97),
(1, 98),
(1, 99),
(1, 100),
(1, 101),
(1, 102),
(1, 103),
(1, 104),
(1, 105),
(1, 106),
(1, 107),
(1, 108),
(1, 109),
(1, 110),
(1, 111),
(1, 112),
(1, 113),
(1, 114),
(1, 115),
(1, 116),
(1, 117),
(1, 118),
(1, 119),
(1, 120),
(1, 121),
(1, 122),
(1, 123),
(1, 124),
(1, 125),
(1, 126),
(1, 127),
(1, 128),
(1, 129),
(1, 130),
(1, 131),
(1, 132),
(1, 133),
(1, 134),
(1, 135),
(1, 136),
(1, 137),
(1, 138),
(1, 139),
(1, 140),
(1, 141),
(1, 142),
(1, 143),
(1, 144),
(1, 145),
(1, 146),
(1, 147),
(1, 148),
(1, 149),
(1, 150),
(1, 151),
(1, 152),
(1, 153),
(1, 154),
(1, 155),
(1, 156),
(1, 157),
(1, 158),
(1, 159),
(1, 160),
(1, 161),
(1, 162),
(2, 17),
(2, 18),
(2, 28),
(2, 29),
(2, 30),
(2, 31),
(2, 32),
(2, 33),
(2, 34),
(2, 35),
(2, 36),
(2, 37),
(2, 38),
(2, 39),
(2, 40),
(2, 41),
(2, 42),
(2, 43),
(2, 44),
(2, 45),
(2, 46),
(2, 47),
(2, 48),
(2, 49),
(2, 50),
(2, 51),
(2, 52),
(2, 53),
(2, 54),
(2, 55),
(2, 56),
(2, 57),
(2, 58),
(2, 59),
(2, 60),
(2, 61),
(2, 62),
(2, 63),
(2, 64),
(2, 65),
(2, 66),
(2, 67),
(2, 68),
(2, 69),
(2, 70),
(2, 71),
(2, 72),
(2, 73),
(2, 74),
(2, 75),
(2, 76),
(2, 77),
(2, 78),
(2, 79),
(2, 80),
(2, 81),
(2, 82),
(2, 83),
(2, 84),
(2, 85),
(2, 86),
(2, 87),
(2, 88),
(2, 89),
(2, 90),
(2, 91),
(2, 92),
(2, 93),
(2, 94),
(2, 95),
(2, 96),
(2, 97),
(2, 98),
(2, 99),
(2, 100),
(2, 101),
(2, 102),
(2, 103),
(2, 104),
(2, 105),
(2, 106),
(2, 107),
(2, 108),
(2, 109),
(2, 110),
(2, 111),
(2, 112),
(2, 113),
(2, 114),
(2, 115),
(2, 116),
(2, 117),
(2, 118),
(2, 119),
(2, 120),
(2, 121),
(2, 122),
(2, 123),
(2, 124),
(2, 125),
(2, 126),
(2, 127),
(2, 128),
(2, 129),
(2, 130),
(2, 131),
(2, 132),
(2, 133),
(2, 134),
(2, 135),
(2, 136),
(2, 137),
(2, 138),
(2, 139),
(2, 140),
(2, 141),
(2, 142),
(2, 143),
(2, 144),
(2, 145),
(2, 146),
(2, 147),
(2, 148),
(2, 149),
(2, 150),
(2, 151),
(2, 152),
(2, 153),
(2, 154),
(2, 155),
(2, 156),
(2, 157),
(2, 158),
(2, 159),
(2, 160),
(2, 161),
(2, 162);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact_name` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `api_token` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `webhook_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', NULL, NULL, NULL),
(2, 'User', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `targets`
--

CREATE TABLE `targets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `monthly_target` int(11) DEFAULT NULL,
  `monthly_bonus` int(11) DEFAULT NULL,
  `m_t_commission` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `employee_id` bigint(20) UNSIGNED DEFAULT NULL,
  `team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status_id` bigint(20) UNSIGNED DEFAULT NULL,
  `assigned_to_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `name`, `description`, `due_date`, `created_at`, `updated_at`, `deleted_at`, `status_id`, `assigned_to_id`) VALUES
(1, 'test task', 'some description', '2024-12-05', '2024-11-30 15:34:32', '2024-11-30 15:34:32', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `task_statuses`
--

CREATE TABLE `task_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `task_statuses`
--

INSERT INTO `task_statuses` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Open', NULL, NULL, NULL),
(2, 'In progress', NULL, NULL, NULL),
(3, 'Closed', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `task_tags`
--

CREATE TABLE `task_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `task_tags`
--

INSERT INTO `task_tags` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'تسويق', '2024-11-30 15:33:23', '2024-11-30 15:33:23', NULL),
(2, 'توصيل', '2024-11-30 15:33:34', '2024-11-30 15:33:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `task_task_tag`
--

CREATE TABLE `task_task_tag` (
  `task_id` bigint(20) UNSIGNED NOT NULL,
  `task_tag_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `task_task_tag`
--

INSERT INTO `task_task_tag` (`task_id`, `task_tag_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `owner_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `time_entries`
--

CREATE TABLE `time_entries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `start_time` datetime DEFAULT NULL,
  `end_time` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `work_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `project_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `time_projects`
--

CREATE TABLE `time_projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `time_work_types`
--

CREATE TABLE `time_work_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `second_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `ar_name` varchar(255) DEFAULT NULL,
  `ar_second_name` varchar(255) DEFAULT NULL,
  `ar_last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `old_code` varchar(255) DEFAULT NULL,
  `file_number` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `passport_number` varchar(255) DEFAULT NULL,
  `passport_issue_date` date DEFAULT NULL,
  `passport_expiry_date` date DEFAULT NULL,
  `job_title` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `license_type` varchar(255) DEFAULT NULL,
  `license_number` varchar(255) DEFAULT NULL,
  `license_expiry_date` varchar(255) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `degree` varchar(255) DEFAULT NULL,
  `graduation_date` date DEFAULT NULL,
  `showing` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `department_id` bigint(20) UNSIGNED DEFAULT NULL,
  `company_id` bigint(20) UNSIGNED DEFAULT NULL,
  `direct_manager_id` bigint(20) UNSIGNED DEFAULT NULL,
  `team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `second_name`, `last_name`, `ar_name`, `ar_second_name`, `ar_last_name`, `email`, `email_verified_at`, `password`, `remember_token`, `code`, `old_code`, `file_number`, `gender`, `passport_number`, `passport_issue_date`, `passport_expiry_date`, `job_title`, `phone`, `mobile`, `address`, `license_type`, `license_number`, `license_expiry_date`, `salary`, `birth_date`, `degree`, `graduation_date`, `showing`, `created_at`, `updated_at`, `deleted_at`, `department_id`, `company_id`, `direct_manager_id`, `team_id`, `created_by`) VALUES
(1, 'Admin', '', '', '', '', '', 'admin@admin.com', NULL, '$2y$10$oDoJ3J.yKewyEgiWlA1Nl.cNYjgrsz3Y1rqpasM421wrbR2ucSWr.', 'YHqUzMWDcaiX0iJZjEYNSSbSsN6NOApcwa0c1FTymQTVXeLSaWw0MhZpaOGJ', '', '', '', NULL, '', NULL, NULL, '', '', '', '', '', '', '', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_alerts`
--

CREATE TABLE `user_alerts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alert_text` varchar(255) DEFAULT NULL,
  `alert_link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_alerts`
--

INSERT INTO `user_alerts` (`id`, `alert_text`, `alert_link`, `created_at`, `updated_at`) VALUES
(1, 'you have new task', '#', '2024-11-30 15:05:06', '2024-11-30 15:05:06');

-- --------------------------------------------------------

--
-- Table structure for table `user_user_alert`
--

CREATE TABLE `user_user_alert` (
  `user_alert_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `read` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_user_alert`
--

INSERT INTO `user_user_alert` (`user_alert_id`, `user_id`, `read`) VALUES
(1, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_fk_10292408` (`category_id`),
  ADD KEY `status_fk_10292412` (`status_id`),
  ADD KEY `location_fk_10292413` (`location_id`),
  ADD KEY `assigned_to_fk_10292415` (`assigned_to_id`);

--
-- Indexes for table `assets_histories`
--
ALTER TABLE `assets_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `asset_fk_10292420` (`asset_id`),
  ADD KEY `status_fk_10292421` (`status_id`),
  ADD KEY `location_fk_10292422` (`location_id`),
  ADD KEY `assigned_user_fk_10292423` (`assigned_user_id`);

--
-- Indexes for table `asset_categories`
--
ALTER TABLE `asset_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asset_locations`
--
ALTER TABLE `asset_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asset_statuses`
--
ALTER TABLE `asset_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audit_logs`
--
ALTER TABLE `audit_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_companies`
--
ALTER TABLE `contact_companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `owner_fk_10292597` (`owner_id`),
  ADD KEY `team_fk_10292676` (`team_id`);

--
-- Indexes for table `contact_contacts`
--
ALTER TABLE `contact_contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_fk_10292503` (`company_id`),
  ADD KEY `team_fk_10292675` (`team_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_fk_10292669` (`company_id`),
  ADD KEY `team_fk_10292674` (`team_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expense_category_fk_10292479` (`expense_category_id`);

--
-- Indexes for table `expense_categories`
--
ALTER TABLE `expense_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incomes`
--
ALTER TABLE `incomes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `income_category_fk_10292487` (`income_category_id`);

--
-- Indexes for table `income_categories`
--
ALTER TABLE `income_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maintenances`
--
ALTER TABLE `maintenances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `asset_fk_10294238` (`asset_id`),
  ADD KEY `owner_fk_10294239` (`owner_id`),
  ADD KEY `team_fk_10294245` (`team_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `media_order_column_index` (`order_column`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rider_fk_10294190` (`rider_id`),
  ADD KEY `source_fk_10294191` (`source_id`),
  ADD KEY `restaurant_fk_10294193` (`restaurant_id`),
  ADD KEY `team_fk_10294204` (`team_id`);

--
-- Indexes for table `order_sources`
--
ALTER TABLE `order_sources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `role_id_fk_10292254` (`role_id`),
  ADD KEY `permission_id_fk_10292254` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_fk_10294163` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `user_id_fk_10292263` (`user_id`),
  ADD KEY `role_id_fk_10292263` (`role_id`);

--
-- Indexes for table `targets`
--
ALTER TABLE `targets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_fk_10293692` (`employee_id`),
  ADD KEY `team_fk_10294148` (`team_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status_fk_10292460` (`status_id`),
  ADD KEY `assigned_to_fk_10292464` (`assigned_to_id`);

--
-- Indexes for table `task_statuses`
--
ALTER TABLE `task_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_tags`
--
ALTER TABLE `task_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_task_tag`
--
ALTER TABLE `task_task_tag`
  ADD KEY `task_id_fk_10292461` (`task_id`),
  ADD KEY `task_tag_id_fk_10292461` (`task_tag_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `owner_fk_10292362` (`owner_id`);

--
-- Indexes for table `time_entries`
--
ALTER TABLE `time_entries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `work_type_fk_10292530` (`work_type_id`),
  ADD KEY `project_fk_10292531` (`project_id`);

--
-- Indexes for table `time_projects`
--
ALTER TABLE `time_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_work_types`
--
ALTER TABLE `time_work_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `department_fk_10292678` (`department_id`),
  ADD KEY `company_fk_10292693` (`company_id`),
  ADD KEY `direct_manager_fk_10292694` (`direct_manager_id`),
  ADD KEY `team_fk_10292363` (`team_id`);

--
-- Indexes for table `user_alerts`
--
ALTER TABLE `user_alerts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_user_alert`
--
ALTER TABLE `user_user_alert`
  ADD KEY `user_alert_id_fk_10292389` (`user_alert_id`),
  ADD KEY `user_id_fk_10292389` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assets_histories`
--
ALTER TABLE `assets_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `asset_categories`
--
ALTER TABLE `asset_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `asset_locations`
--
ALTER TABLE `asset_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `asset_statuses`
--
ALTER TABLE `asset_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `audit_logs`
--
ALTER TABLE `audit_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_companies`
--
ALTER TABLE `contact_companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_contacts`
--
ALTER TABLE `contact_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expense_categories`
--
ALTER TABLE `expense_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `incomes`
--
ALTER TABLE `incomes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `income_categories`
--
ALTER TABLE `income_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `maintenances`
--
ALTER TABLE `maintenances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_sources`
--
ALTER TABLE `order_sources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `targets`
--
ALTER TABLE `targets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `task_statuses`
--
ALTER TABLE `task_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `task_tags`
--
ALTER TABLE `task_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `time_entries`
--
ALTER TABLE `time_entries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `time_projects`
--
ALTER TABLE `time_projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `time_work_types`
--
ALTER TABLE `time_work_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_alerts`
--
ALTER TABLE `user_alerts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assets`
--
ALTER TABLE `assets`
  ADD CONSTRAINT `assigned_to_fk_10292415` FOREIGN KEY (`assigned_to_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `category_fk_10292408` FOREIGN KEY (`category_id`) REFERENCES `asset_categories` (`id`),
  ADD CONSTRAINT `location_fk_10292413` FOREIGN KEY (`location_id`) REFERENCES `asset_locations` (`id`),
  ADD CONSTRAINT `status_fk_10292412` FOREIGN KEY (`status_id`) REFERENCES `asset_statuses` (`id`);

--
-- Constraints for table `assets_histories`
--
ALTER TABLE `assets_histories`
  ADD CONSTRAINT `asset_fk_10292420` FOREIGN KEY (`asset_id`) REFERENCES `assets` (`id`),
  ADD CONSTRAINT `assigned_user_fk_10292423` FOREIGN KEY (`assigned_user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `location_fk_10292422` FOREIGN KEY (`location_id`) REFERENCES `asset_locations` (`id`),
  ADD CONSTRAINT `status_fk_10292421` FOREIGN KEY (`status_id`) REFERENCES `asset_statuses` (`id`);

--
-- Constraints for table `contact_companies`
--
ALTER TABLE `contact_companies`
  ADD CONSTRAINT `owner_fk_10292597` FOREIGN KEY (`owner_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `team_fk_10292676` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`);

--
-- Constraints for table `contact_contacts`
--
ALTER TABLE `contact_contacts`
  ADD CONSTRAINT `company_fk_10292503` FOREIGN KEY (`company_id`) REFERENCES `contact_companies` (`id`),
  ADD CONSTRAINT `team_fk_10292675` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`);

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `company_fk_10292669` FOREIGN KEY (`company_id`) REFERENCES `contact_companies` (`id`),
  ADD CONSTRAINT `team_fk_10292674` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`);

--
-- Constraints for table `expenses`
--
ALTER TABLE `expenses`
  ADD CONSTRAINT `expense_category_fk_10292479` FOREIGN KEY (`expense_category_id`) REFERENCES `expense_categories` (`id`);

--
-- Constraints for table `incomes`
--
ALTER TABLE `incomes`
  ADD CONSTRAINT `income_category_fk_10292487` FOREIGN KEY (`income_category_id`) REFERENCES `income_categories` (`id`);

--
-- Constraints for table `maintenances`
--
ALTER TABLE `maintenances`
  ADD CONSTRAINT `asset_fk_10294238` FOREIGN KEY (`asset_id`) REFERENCES `assets` (`id`),
  ADD CONSTRAINT `owner_fk_10294239` FOREIGN KEY (`owner_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `team_fk_10294245` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `restaurant_fk_10294193` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurants` (`id`),
  ADD CONSTRAINT `rider_fk_10294190` FOREIGN KEY (`rider_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `source_fk_10294191` FOREIGN KEY (`source_id`) REFERENCES `order_sources` (`id`),
  ADD CONSTRAINT `team_fk_10294204` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_id_fk_10292254` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_id_fk_10292254` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD CONSTRAINT `user_fk_10294163` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_id_fk_10292263` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id_fk_10292263` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `targets`
--
ALTER TABLE `targets`
  ADD CONSTRAINT `employee_fk_10293692` FOREIGN KEY (`employee_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `team_fk_10294148` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`);

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `assigned_to_fk_10292464` FOREIGN KEY (`assigned_to_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `status_fk_10292460` FOREIGN KEY (`status_id`) REFERENCES `task_statuses` (`id`);

--
-- Constraints for table `task_task_tag`
--
ALTER TABLE `task_task_tag`
  ADD CONSTRAINT `task_id_fk_10292461` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `task_tag_id_fk_10292461` FOREIGN KEY (`task_tag_id`) REFERENCES `task_tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `owner_fk_10292362` FOREIGN KEY (`owner_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `time_entries`
--
ALTER TABLE `time_entries`
  ADD CONSTRAINT `project_fk_10292531` FOREIGN KEY (`project_id`) REFERENCES `time_projects` (`id`),
  ADD CONSTRAINT `work_type_fk_10292530` FOREIGN KEY (`work_type_id`) REFERENCES `time_work_types` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `company_fk_10292693` FOREIGN KEY (`company_id`) REFERENCES `contact_companies` (`id`),
  ADD CONSTRAINT `department_fk_10292678` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `direct_manager_fk_10292694` FOREIGN KEY (`direct_manager_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `team_fk_10292363` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`);

--
-- Constraints for table `user_user_alert`
--
ALTER TABLE `user_user_alert`
  ADD CONSTRAINT `user_alert_id_fk_10292389` FOREIGN KEY (`user_alert_id`) REFERENCES `user_alerts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id_fk_10292389` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
