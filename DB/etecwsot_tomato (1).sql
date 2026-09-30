-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 08, 2021 at 07:10 AM
-- Server version: 10.3.31-MariaDB-log-cll-lve
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etecwsot_tomato`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `string1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `string2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `string3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `description`, `image1`, `string1`, `string2`, `string3`, `created_at`, `updated_at`) VALUES
(1, 'Help to improve focus<br>                                     for more', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim.', '288.png', 'productive', 'creative', 'relax', '2021-08-18 18:30:30', '2021-09-25 07:38:23');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Et et exercitationem.', NULL, NULL, NULL),
(2, 'Asperiores vero voluptas aut.', NULL, NULL, NULL),
(3, 'Vel eveniet.', NULL, NULL, NULL),
(4, 'Et tempora reprehenderit est.', NULL, NULL, NULL),
(5, 'Aperiam qui.', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `title`, `head`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'LOREM PLUSAM1', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', '893.png', '2021-08-20 15:53:12', '2021-08-20 15:55:45');

-- --------------------------------------------------------

--
-- Table structure for table `content_points`
--

CREATE TABLE `content_points` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content_id` bigint(20) UNSIGNED DEFAULT NULL,
  `point` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `content_points`
--

INSERT INTO `content_points` (`id`, `content_id`, `point`, `created_at`, `updated_at`) VALUES
(1, 2, 'Various Analysis Options', '2021-08-20 21:12:51', '2021-08-20 21:12:51'),
(2, 2, 'Page Load Details (time, size, number of requests)', '2021-08-20 21:12:51', '2021-08-20 21:12:51'),
(3, 2, 'Waterfall, Video and Report History', '2021-08-20 21:12:51', '2021-08-20 21:12:51');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `icon`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, '459.png', 'Lorem Ipsum', 'Lorem ipsum dolor amet consectetur adipisicing  sed do eiusmod tempor. Data Monetization', '2021-08-18 05:42:22', '2021-09-25 22:08:28'),
(2, '195.png', 'Lorem Ipsum', 'Lorem ipsum dolor amet consectetur adipisicing  sed do eiusmod tempor. Manage Analytics', '2021-08-18 15:22:23', '2021-09-25 22:08:51'),
(3, '975.png', 'Business Intelligence', 'Lorem ipsum dolor amet consectetur adipisicing  sed do eiusmod tempor. Business Intelligence', '2021-08-18 19:00:44', '2021-09-25 22:07:55'),
(4, '390.png', 'Lorem Ipsum', 'Lorem ipsum dolor amet consectetur adipisicing  sed do eiusmod tempor. Data Monetization', '2021-09-25 22:14:29', '2021-09-25 22:14:29'),
(5, '558.png', 'Lorem Ipsum', 'Lorem ipsum dolor amet consectetur adipisicing  sed do eiusmod tempor. Data Monetization', '2021-09-25 22:14:58', '2021-09-25 22:14:58'),
(6, '972.png', 'Lorem Ipsum', 'Lorem ipsum dolor amet consectetur adipisicing  sed do eiusmod tempor. Data Monetization', '2021-09-25 22:15:26', '2021-09-25 22:15:26');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(3, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(4, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(5, '2016_06_01_000004_create_oauth_clients_table', 1),
(6, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(7, '2019_12_23_000001_create_permissions_table', 1),
(8, '2019_12_23_000002_create_roles_table', 1),
(9, '2019_12_23_000003_create_users_table', 1),
(10, '2019_12_23_000004_create_categories_table', 1),
(11, '2019_12_23_000005_create_questions_table', 1),
(12, '2019_12_23_000006_create_options_table', 1),
(13, '2019_12_23_000007_create_results_table', 1),
(14, '2019_12_23_000008_create_permission_role_pivot_table', 1),
(15, '2019_12_23_000009_create_role_user_pivot_table', 1),
(16, '2019_12_23_000010_create_question_result_pivot_table', 1),
(17, '2019_12_23_000011_add_relationship_fields_to_questions_table', 1),
(18, '2019_12_23_000012_add_relationship_fields_to_options_table', 1),
(19, '2019_12_23_000013_add_relationship_fields_to_results_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(10) UNSIGNED NOT NULL,
  `option_text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `points` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `question_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `option_text`, `points`, `created_at`, `updated_at`, `deleted_at`, `question_id`) VALUES
(1, 'rem', 0, '2021-09-24 05:12:37', '2021-09-24 05:12:37', NULL, 1),
(2, 'fugit', 1, '2021-09-24 05:12:37', '2021-09-24 05:12:37', NULL, 1),
(3, 'qui', 0, '2021-09-24 05:12:37', '2021-09-24 05:12:37', NULL, 1),
(4, 'beatae', 0, '2021-09-24 05:12:37', '2021-09-24 05:12:37', NULL, 1),
(5, 'in', 0, '2021-09-24 05:12:37', '2021-09-24 05:12:37', NULL, 2),
(6, 'debitis', 1, '2021-09-24 05:12:37', '2021-09-24 05:12:37', NULL, 2),
(7, 'sed', 0, '2021-09-24 05:12:38', '2021-09-24 05:12:38', NULL, 2),
(8, 'dolor', 0, '2021-09-24 05:12:38', '2021-09-24 05:12:38', NULL, 2),
(9, 'labore', 0, '2021-09-24 05:12:38', '2021-09-24 05:12:38', NULL, 3),
(10, 'optio', 0, '2021-09-24 05:12:38', '2021-09-24 05:12:38', NULL, 3),
(11, 'facere', 0, '2021-09-24 05:12:38', '2021-09-24 05:12:38', NULL, 3),
(12, 'maxime', 1, '2021-09-24 05:12:38', '2021-09-24 05:12:38', NULL, 3),
(13, 'cum', 0, '2021-09-24 05:12:38', '2021-09-24 05:12:38', NULL, 4),
(14, 'temporibus', 1, '2021-09-24 05:12:38', '2021-09-24 05:12:38', NULL, 4),
(15, 'ratione', 0, '2021-09-24 05:12:38', '2021-09-24 05:12:38', NULL, 4),
(16, 'praesentium', 0, '2021-09-24 05:12:38', '2021-09-24 05:12:38', NULL, 4),
(17, 'exercitationem', 0, '2021-09-24 05:12:38', '2021-09-24 05:12:38', NULL, 5),
(18, 'quaerat', 0, '2021-09-24 05:12:38', '2021-09-24 05:12:38', NULL, 5),
(19, 'animi', 1, '2021-09-24 05:12:39', '2021-09-24 05:12:39', NULL, 5),
(20, 'ducimus', 0, '2021-09-24 05:12:39', '2021-09-24 05:12:39', NULL, 5),
(21, 'nemo', 0, '2021-09-24 05:12:39', '2021-09-24 05:12:39', NULL, 6),
(22, 'maiores', 0, '2021-09-24 05:12:39', '2021-09-24 05:12:39', NULL, 6),
(23, 'voluptatem', 1, '2021-09-24 05:12:39', '2021-09-24 05:12:39', NULL, 6),
(24, 'est', 0, '2021-09-24 05:12:39', '2021-09-24 05:12:39', NULL, 6),
(25, 'sint', 0, '2021-09-24 05:12:39', '2021-09-24 05:12:39', NULL, 7),
(26, 'ipsa', 1, '2021-09-24 05:12:39', '2021-09-24 05:12:39', NULL, 7),
(27, 'eum', 0, '2021-09-24 05:12:39', '2021-09-24 05:12:39', NULL, 7),
(28, 'illo', 0, '2021-09-24 05:12:39', '2021-09-24 05:12:39', NULL, 7),
(29, 'voluptas', 1, '2021-09-24 05:12:39', '2021-09-24 05:12:39', NULL, 8),
(30, 'accusamus', 0, '2021-09-24 05:12:39', '2021-09-24 05:12:39', NULL, 8),
(31, 'quis', 0, '2021-09-24 05:12:39', '2021-09-24 05:12:39', NULL, 8),
(32, 'et', 0, '2021-09-24 05:12:40', '2021-09-24 05:12:40', NULL, 8),
(33, 'ipsam', 1, '2021-09-24 05:12:40', '2021-09-24 05:12:40', NULL, 9),
(34, 'ut', 0, '2021-09-24 05:12:40', '2021-09-24 05:12:40', NULL, 9),
(35, 'vitae', 0, '2021-09-24 05:12:40', '2021-09-24 05:12:40', NULL, 9),
(36, 'recusandae', 0, '2021-09-24 05:12:40', '2021-09-24 05:12:40', NULL, 9),
(37, 'dolores', 0, '2021-09-24 05:12:40', '2021-09-24 05:12:40', NULL, 10),
(38, 'voluptates', 1, '2021-09-24 05:12:40', '2021-09-24 05:12:40', NULL, 10),
(39, 'sit', 0, '2021-09-24 05:12:40', '2021-09-24 05:12:40', NULL, 10),
(40, 'iusto', 0, '2021-09-24 05:12:40', '2021-09-24 05:12:40', NULL, 10);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(17, 'category_create', NULL, NULL, NULL),
(18, 'category_edit', NULL, NULL, NULL),
(19, 'category_show', NULL, NULL, NULL),
(20, 'category_delete', NULL, NULL, NULL),
(21, 'category_access', NULL, NULL, NULL),
(22, 'question_create', NULL, NULL, NULL),
(23, 'question_edit', NULL, NULL, NULL),
(24, 'question_show', NULL, NULL, NULL),
(25, 'question_delete', NULL, NULL, NULL),
(26, 'question_access', NULL, NULL, NULL),
(27, 'option_create', NULL, NULL, NULL),
(28, 'option_edit', NULL, NULL, NULL),
(29, 'option_show', NULL, NULL, NULL),
(30, 'option_delete', NULL, NULL, NULL),
(31, 'option_access', NULL, NULL, NULL),
(32, 'result_create', NULL, NULL, NULL),
(33, 'result_edit', NULL, NULL, NULL),
(34, 'result_show', NULL, NULL, NULL),
(35, 'result_delete', NULL, NULL, NULL),
(36, 'result_access', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL
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
(1, 36);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `question_text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_text`, `created_at`, `updated_at`, `deleted_at`, `category_id`) VALUES
(1, 'Velit rerum et cumque.', '2021-09-24 05:12:35', '2021-09-24 05:12:35', NULL, 1),
(2, 'Quaerat accusamus quibusdam expedita aut illum.', '2021-09-24 05:12:36', '2021-09-24 05:12:36', NULL, 1),
(3, 'Nihil dolores aut eum.', '2021-09-24 05:12:36', '2021-09-24 05:12:36', NULL, 2),
(4, 'Non qui occaecati non sint ratione.', '2021-09-24 05:12:36', '2021-09-24 05:12:36', NULL, 2),
(5, 'Dolorem nemo saepe nobis laboriosam dicta.', '2021-09-24 05:12:36', '2021-09-24 05:12:36', NULL, 3),
(6, 'Est voluptas magni.', '2021-09-24 05:12:36', '2021-09-24 05:12:36', NULL, 3),
(7, 'Quidem sunt quis commodi.', '2021-09-24 05:12:36', '2021-09-24 05:12:36', NULL, 4),
(8, 'Officia voluptatem vel non.', '2021-09-24 05:12:36', '2021-09-24 05:12:36', NULL, 4),
(9, 'Quibusdam consequuntur et ex.', '2021-09-24 05:12:37', '2021-09-24 05:12:37', NULL, 5),
(10, 'Non rerum molestias possimus quidem ipsam.', '2021-09-24 05:12:37', '2021-09-24 05:12:37', NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `question_result`
--

CREATE TABLE `question_result` (
  `result_id` int(10) UNSIGNED NOT NULL,
  `question_id` int(10) UNSIGNED NOT NULL,
  `option_id` int(10) UNSIGNED NOT NULL,
  `points` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(10) UNSIGNED NOT NULL,
  `total_points` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'flaticon-file', 'Big Data Consulting', 'Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore. Big Data', '2021-08-17 09:42:42', '2021-08-17 10:00:07'),
(2, 'flaticon-machine-learning', 'Machine Learning', 'Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore. Machine Learning', '2021-08-18 10:12:49', '2021-08-18 10:12:49'),
(3, 'flaticon-data-analytics', 'Data Analytics', 'Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore. data analytics', NULL, NULL),
(4, 'flaticon-laptop', 'Computer Vision', 'Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore. Computer Vision', NULL, NULL),
(5, 'flaticon-data-integration', 'Internet Of Things', 'Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore. Internet of things', NULL, NULL),
(6, 'flaticon-robot', 'Artificial Intelligence', 'Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore. Artificial Intelligence', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Level', 'Paralegal,Contract Manger,Legal Executive,Legal Assistant,Legal Secretary,Caseworker,Solicitor,Patent/ Trade Mark Attorney', NULL, NULL),
(2, 'Regulated', 'SRA - Solicitors,IAACM,OCA Paralegals,Unregulated', NULL, NULL),
(3, 'Legal Qualifications', 'Law Degree,Masters,LPC/GDL,SQE,CILEX,SRA,Other', NULL, NULL),
(4, 'Practice Area', 'Administrative law,Admiralty law,Adoption law,Agency law,Alcohol law,Alternative dispute resolution,Animal law,Antitrust law (or competition law),Art law (or art and culture law),Aviation law,Banking law,Bankruptcy law (creditor debtor rights law or insolvency and reorganization law),Bioethics,Business law (or commercial law); commercial litigation,Business organizations law (or companies law),Canon law,Civil law or common law,Class action litigation/Mass tort litigation,Communications law,Computer law,Competition law,Conflict of law (or private international law),Constitutional law,Construction law,Consumer law,Contract law,Copyright law,Corporate law (or company law), also corporate compliance law and corporate governance law,Criminal law,Cryptography law,Cultural property law,Custom (law),Cyber law,Defamation,Drug control law,Education law,Elder law,Employment law,Energy law,Entertainment law,Environmental law,Family law,Financial services regulation law,Firearm law,Food law,Gaming law,Health and safety law,Health law,Housing law,Immigration law,Insurance law,Intellectual property law,International law,International human rights law,International humanitarian law,International trade and finance law,Internet law,Juvenile law,Labour law (or Labor law),Landlord–tenant law,Litigation,Martial law,Media law,Medical law,Military law,Mining law,Mortgage law,Music law,Nationality law,Obscenity law,Parliamentary law,Patent law,Poverty law,Privacy law,Procedural law,Property law,Public health law,Public International Law,Real estate law,Securities law / Capital markets law,Space law,Sports law,Statutory law,Tax law,Technology law,Tort law,Trademark law,Transport law / Transportation law,Trusts & estates law,Water law,Wills', NULL, NULL),
(5, 'Governing Law', 'Arabic law', NULL, NULL),
(6, 'Sector', 'Aerospace,Aviation,Betting & Gaming,Construction & Engineering,EdTech,Energy & Resources,Esports,Family Offices,Fashion,Financial Institutions,Fintech,Hotels,International,Leisure,Life Sciences,Media & Technology,Owner Managed Businesses,Private Wealth,Professional Practices,Projects & Infrastructure,Public Attractions,Rail,Real Estate,Renewable & Green Energy,Restart Capital,Retail,Sports, ,Los Angeles,Philadelphia,San Francisco,Oklahoma City,Colorado Springs', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$Lsjp4bGLM4HkGAGnXwbf5eBWCSLIvs01pxhSbIeaIS/H5htGyPymi', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Set it and forget it1', 'Dolor sit amet consectetur elit sed eiusmod tempor incidi dunt labore dolore magna aliqua enim ad minim veniam quis nostrud.', '940.png', '2021-08-23 21:15:43', '2021-08-23 21:16:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content_points`
--
ALTER TABLE `content_points`
  ADD PRIMARY KEY (`id`),
  ADD KEY `content_points_content_id_foreign` (`content_id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_fk_773758` (`question_id`);

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
  ADD KEY `role_id_fk_773672` (`role_id`),
  ADD KEY `permission_id_fk_773672` (`permission_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_fk_773713` (`category_id`);

--
-- Indexes for table `question_result`
--
ALTER TABLE `question_result`
  ADD KEY `result_id_fk_773767` (`result_id`),
  ADD KEY `question_id_fk_773767` (`question_id`),
  ADD KEY `option_id_fk_773767` (`option_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_fk_773765` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `user_id_fk_773681` (`user_id`),
  ADD KEY `role_id_fk_773681` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `content_points`
--
ALTER TABLE `content_points`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `question_fk_773758` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_id_fk_773672` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_id_fk_773672` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `category_fk_773713` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `question_result`
--
ALTER TABLE `question_result`
  ADD CONSTRAINT `option_id_fk_773767` FOREIGN KEY (`option_id`) REFERENCES `options` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `question_id_fk_773767` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `result_id_fk_773767` FOREIGN KEY (`result_id`) REFERENCES `results` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `user_fk_773765` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_id_fk_773681` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id_fk_773681` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
