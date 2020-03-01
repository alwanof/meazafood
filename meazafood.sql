-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2020 at 11:19 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meazafood`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amount` double(8,2) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `amount`, `title`, `user_id`, `order_id`, `created_at`, `updated_at`) VALUES
(3, 114950.00, 'Et deserunt voluptate et quis eaque.', 2, 20, '2020-03-25 16:00:05', '2020-02-25 16:00:05'),
(4, 429440.00, 'Omnis fuga ut officia est.', 2, 26, '2020-03-25 16:00:05', '2020-02-25 16:00:05'),
(5, 494600.00, 'Accusantium maiores dolore praesentium similique error nihil est.', 5, 27, '2020-02-25 16:00:05', '2020-02-25 16:00:05'),
(6, 207480.00, 'Totam fugit officiis voluptas facilis sunt iste et.', 4, 34, '2020-02-25 16:00:05', '2020-02-25 16:00:05'),
(7, 251865.00, 'Repudiandae eveniet omnis sequi recusandae atque.', 6, 39, '2020-02-25 16:00:05', '2020-02-25 16:00:05'),
(8, 175760.00, 'Sed et veniam aut expedita et occaecati et.', 17, 40, '2020-02-25 16:00:05', '2020-02-25 16:00:05'),
(9, 82560.00, 'Commodi qui consequatur vel sed atque quae vel nihil.', 17, 43, '2020-01-25 16:00:05', '2020-02-25 16:00:05'),
(10, 246000.00, 'Accusamus muratof consectetur quam ullam.', 6, 45, '2020-02-25 16:00:05', '2020-02-25 16:00:05'),
(11, 273000.00, 'Porro ut voluptatibus at nesciunt saepe.', 18, 48, '2020-02-25 16:00:05', '2020-02-25 16:00:05'),
(12, 256600.00, 'Illum error sit debitis.', 17, 51, '2020-02-25 16:00:05', '2020-02-25 16:00:05'),
(13, 26000.00, 'Facere omnis vel quasi nobis quia possimus.', 5, 54, '2020-01-25 16:00:05', '2020-02-25 16:00:05'),
(14, 110200.00, 'Fugiat voluptatem ut beatae sint autem voluptatem rem.', 3, 56, '2020-02-25 16:00:05', '2020-02-25 16:00:05'),
(15, 280000.00, 'Expedita ipsam qui est exercitationem veritatis sapiente.', 2, 58, '2020-02-25 16:00:05', '2020-02-25 16:00:05'),
(16, 96120.00, 'Et sint atque ad est neque.', 6, 60, '2020-03-25 16:00:05', '2020-02-25 16:00:05'),
(17, 289520.00, 'Culpa sit iusto qui aut quisquam quae perferendis ducimus.', 18, 61, '2020-02-25 16:00:05', '2020-02-25 16:00:05'),
(18, 76000.00, 'Ad minus et quaerat et laudantium exercitationem nesciunt.', 5, 62, '2020-02-25 16:00:05', '2020-02-25 16:00:05'),
(19, 265440.00, 'Et impedit exercitationem neque voluptatem repellendus inventore.', 4, 63, '2020-02-25 16:00:05', '2020-02-25 16:00:05'),
(20, 113220.00, 'Ipsam quod quis aliquam quisquam error et inventore.', 4, 71, '2020-01-25 16:00:05', '2020-02-25 16:00:05'),
(21, -25000.00, 'Payment', 2, 20, '2020-02-25 16:03:47', '2020-02-25 16:03:47'),
(22, -25000.00, 'Payment', 2, 26, '2020-02-25 16:03:47', '2020-02-25 16:03:47'),
(23, -15000.00, 'Payment', 5, 27, '2020-03-25 16:03:47', '2020-02-25 16:03:47'),
(24, -10000.00, 'Payment', 4, 34, '2020-02-25 16:03:47', '2020-02-25 16:03:47'),
(25, -20000.00, 'Payment', 6, 39, '2020-01-25 16:03:47', '2020-02-25 16:03:47'),
(26, -25000.00, 'Payment', 17, 40, '2020-02-25 16:03:47', '2020-02-25 16:03:47'),
(27, -10000.00, 'Payment', 17, 43, '2020-02-25 16:03:47', '2020-02-25 16:03:47'),
(28, -5000.00, 'Payment', 6, 45, '2020-02-25 16:03:47', '2020-02-25 16:03:47'),
(29, -10000.00, 'Payment', 18, 48, '2020-02-25 16:03:47', '2020-02-25 16:03:47'),
(30, -15000.00, 'Payment', 17, 51, '2020-02-25 16:03:47', '2020-02-25 16:03:47'),
(31, -25000.00, 'Payment', 5, 54, '2020-02-25 16:03:47', '2020-02-25 16:03:47'),
(32, -15000.00, 'Payment', 3, 56, '2020-02-25 16:03:47', '2020-02-25 16:03:47'),
(33, -25000.00, 'Payment', 2, 58, '2020-02-25 16:03:47', '2020-02-25 16:03:47'),
(34, -5000.00, 'Payment', 6, 60, '2020-02-25 16:03:47', '2020-02-25 16:03:47'),
(35, -25000.00, 'Payment', 18, 61, '2020-02-25 16:03:47', '2020-02-25 16:03:47'),
(36, -20000.00, 'Payment', 5, 62, '2020-02-25 16:03:47', '2020-02-25 16:03:47'),
(37, -5000.00, 'Payment', 4, 63, '2020-02-25 16:03:47', '2020-02-25 16:03:47'),
(38, -5000.00, 'Payment', 4, 71, '2020-02-25 16:03:47', '2020-02-25 16:03:47');

-- --------------------------------------------------------

--
-- Table structure for table `configurations`
--

CREATE TABLE `configurations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configurations`
--

INSERT INTO `configurations` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(6, 'receive-noti-4new-users', '0', NULL, '2019-12-09 13:14:03'),
(7, 'notifications-show-limit', '10', '2019-12-10 15:33:31', '2019-12-12 13:20:27'),
(10, 'new-user-welcome-email', '1', '2019-12-10 15:38:22', '2019-12-10 15:38:22');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(10) UNSIGNED NOT NULL,
  `price` double(8,2) NOT NULL,
  `discount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `product_id`, `desc`, `amount`, `price`, `discount`, `order_id`, `created_at`, `updated_at`) VALUES
(5, 3, 'Deleniti modi sunt neque quo.', 4, 33000.00, '9%', 53, '2020-02-25 15:11:36', '2020-02-25 15:11:36'),
(6, 2, 'Animi iste ad earum qui iusto unde.', 4, 89000.00, '15%', 27, '2020-02-25 15:11:36', '2020-02-25 15:11:36'),
(7, 3, 'Inventore voluptatem asperiores in quam dolorem aut iste.', 3, 45000.00, '10%', 39, '2020-02-25 15:11:36', '2020-02-25 15:11:36'),
(8, 3, 'In tenetur quidem rem exercitationem dolorem voluptatem cum.', 2, 77000.00, '10%', 51, '2020-02-25 15:11:36', '2020-02-25 15:11:36'),
(9, 2, 'Dignissimos rem voluptas delectus et.', 4, 74000.00, '14%', 21, '2020-02-25 15:11:36', '2020-02-25 15:11:36'),
(10, 3, 'Quasi voluptatibus beatae temporibus deserunt pariatur.', 3, 91000.00, '0', 48, '2020-02-25 15:11:36', '2020-02-25 15:11:36'),
(11, 2, 'Accusantium quae vero et iusto similique consectetur in qui.', 4, 24000.00, '0', 43, '2020-02-25 15:11:36', '2020-02-25 15:11:36'),
(12, 1, 'Facilis dolorum laboriosam velit aut laudantium accusantium.', 2, 29000.00, '0', 20, '2020-02-25 15:11:36', '2020-02-25 15:11:36'),
(13, 2, 'Reiciendis numquam voluptate tenetur alias quisquam rem harum.', 2, 24000.00, '10%', 75, '2020-02-25 15:11:36', '2020-02-25 15:11:36'),
(14, 2, 'Numquam magnam suscipit recusandae voluptas qui recusandae cumque aut.', 2, 47000.00, '0', 42, '2020-02-25 15:11:36', '2020-02-25 15:11:36'),
(15, 3, 'Iusto sint non quae ratione sint.', 1, 63000.00, '0', 20, '2020-02-25 15:11:36', '2020-02-25 15:11:36'),
(16, 1, 'Aliquid est laboriosam qui est accusantium explicabo ut.', 3, 82000.00, '0', 45, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(17, 2, 'Libero sapiente perferendis sint eum.', 3, 59000.00, '0', 47, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(18, 1, 'Rerum assumenda provident et eum totam debitis repudiandae delectus.', 1, 44000.00, '0', 21, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(19, 2, 'Non ut aperiam ab omnis.', 4, 70000.00, '0', 58, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(20, 2, 'Repellendus sit tenetur sunt facilis incidunt aut totam.', 4, 46000.00, '0', 53, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(21, 1, 'Voluptatem pariatur ea iure.', 2, 79000.00, '0', 30, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(22, 3, 'Non omnis eaque possimus et dolorem rerum sint.', 1, 63000.00, '12%', 47, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(23, 2, 'Non itaque voluptates delectus aut.', 2, 59000.00, '0', 51, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(24, 1, 'Incidunt quasi aliquid laboriosam necessitatibus incidunt quia ut.', 3, 82000.00, '0', 47, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(25, 2, 'Minima ut voluptatibus quas quasi nisi ullam eum.', 4, 42000.00, '0', 39, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(26, 2, 'Sunt id et ut maiores.', 4, 46000.00, '15%', 63, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(27, 2, 'Non exercitationem inventore et deserunt dolores vero repudiandae.', 4, 27000.00, '11%', 60, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(28, 3, 'Ut repudiandae praesentium voluptatibus itaque.', 1, 28000.00, '15%', 46, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(29, 2, 'Reprehenderit ad consequatur et nihil.', 1, 84000.00, '6%', 53, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(30, 2, 'Distinctio cum odit explicabo.', 3, 76000.00, '0', 34, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(31, 2, 'Iste vel aut iure dignissimos sequi.', 4, 44000.00, '0', 24, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(32, 2, 'Repellendus doloribus possimus quae similique rem explicabo accusantium.', 4, 29000.00, '5%', 56, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(33, 2, 'Cupiditate aperiam et dolore enim et est.', 1, 26000.00, '0', 54, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(34, 3, 'Natus et laborum atque nesciunt omnis nostrum.', 4, 37000.00, '13%', 40, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(35, 1, 'Cumque laborum ad repellendus quia iste sed et.', 2, 86000.00, '6%', 24, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(36, 1, 'Quam quo possimus aliquam qui veniam.', 3, 86000.00, '0', 65, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(37, 1, 'Ducimus alias inventore eum quidem earum omnis ullam et.', 4, 29000.00, '8%', 31, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(38, 1, 'Vitae excepturi velit alias.', 4, 29000.00, '0', 59, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(39, 2, 'Quasi veniam qui quaerat corrupti recusandae quo.', 4, 26000.00, '14%', 53, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(40, 1, 'Facere id similique eligendi unde.', 3, 90000.00, '15%', 18, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(41, 3, 'Minus quos quae assumenda laborum.', 3, 64000.00, '0', 27, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(42, 1, 'Aut quo veritatis natus et ad ut est.', 4, 48000.00, '0', 53, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(43, 2, 'Ex est rerum in et.', 2, 42000.00, '0', 46, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(44, 3, 'Saepe ipsum officia doloribus debitis voluptates consequatur.', 2, 83000.00, '0', 26, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(45, 2, 'Occaecati quia perspiciatis quisquam et iste accusamus.', 1, 76000.00, '0', 62, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(46, 2, 'Mollitia voluptatem qui qui voluptatem ratione nihil consequuntur.', 2, 63000.00, '0', 24, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(47, 3, 'Et in et numquam voluptas asperiores dolores.', 4, 60000.00, '0', 70, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(48, 2, 'Et aut repudiandae pariatur eum.', 1, 47000.00, '0', 40, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(49, 3, 'Non nisi dolor commodi vel totam eveniet molestiae.', 4, 28000.00, '0', 75, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(50, 3, 'Vitae aut eveniet autem est voluptatum et.', 4, 77000.00, '0', 61, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(51, 2, 'Et sed nostrum eaque architecto ullam doloremque non magnam.', 2, 70000.00, '0', 57, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(52, 2, 'Et quia velit atque aut doloremque qui voluptatibus cum.', 4, 74000.00, '11%', 26, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(53, 2, 'Fugiat doloremque in doloremque animi nisi.', 4, 29000.00, '6%', 63, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(54, 3, 'Magni eaque sunt eos consectetur nemo quidem eos.', 2, 74000.00, '10%', 71, '2020-02-25 15:11:37', '2020-02-25 15:11:37'),
(55, 2, 'ssssssss', 1, 60000.00, '0', 76, '2020-02-28 18:38:38', '2020-02-28 18:38:38');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_11_27_141818_add_apitoken_to_users', 2),
(4, '2019_11_30_112021_create_permission_tables', 3),
(7, '2019_12_04_104044_create_settings_table', 4),
(8, '2019_12_04_153357_create_config_table', 5),
(9, '2019_12_04_164728_create_role_configuration_table', 5),
(10, '2019_12_09_161836_create_notifications_table', 6),
(11, '2019_12_10_170236_create_jobs_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 3),
(2, 'App\\User', 1),
(2, 'App\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('33b4323d-4bc5-4d8d-8722-227b104f9fcb', 'App\\Notifications\\NewUserCreatedDB', 'App\\User', 1, '{\"data\":\"Besha has been created a new user: Amie Ebert Jr.\",\"user\":{\"id\":17,\"name\":\"Besha\",\"email\":\"besha@gmail.com\",\"email_verified_at\":null,\"api_token\":null,\"created_at\":\"2019-12-13 09:57:58\",\"updated_at\":\"2019-12-13 09:57:58\",\"avatar\":\"http:\\/\\/localhost\\/marasielo\\/public\\/storage\\/users\\/0.jpg\",\"getroles\":[],\"settings\":[],\"roles\":[]}}', '2019-12-13 07:04:47', '2019-12-13 07:04:10', '2019-12-13 07:04:47'),
('a4a357df-097c-4e68-a9e4-6975e377dfff', 'App\\Notifications\\NewUserCreatedDB', 'App\\User', 2, '{\"data\":\"Besha has been created a new user: Amie Ebert Jr.\",\"user\":{\"id\":17,\"name\":\"Besha\",\"email\":\"besha@gmail.com\",\"email_verified_at\":null,\"api_token\":null,\"created_at\":\"2019-12-13 09:57:58\",\"updated_at\":\"2019-12-13 09:57:58\",\"avatar\":\"http:\\/\\/localhost\\/marasielo\\/public\\/storage\\/users\\/0.jpg\",\"getroles\":[],\"settings\":[],\"roles\":[]}}', NULL, '2019-12-13 07:04:10', '2019-12-13 07:04:10'),
('cfe7307c-8e39-4a81-b90b-9baa97293b56', 'App\\Notifications\\NewUserCreatedDB', 'App\\User', 2, '{\"data\":\"Murad Alwan has been created a new user: Besha\",\"user\":{\"id\":1,\"name\":\"Murad Alwan\",\"email\":\"free1soft@gmail.com\",\"email_verified_at\":null,\"api_token\":\"5lwj0sXMR757f5K28bGSiDcBYbY5RZMpuUK62AtkN5TBmcnu1fof6e6JUVaW\",\"created_at\":\"2019-11-26 11:57:41\",\"updated_at\":\"2019-12-16 07:43:57\",\"avatar\":\"http:\\/\\/localhost\\/marasielo\\/public\\/storage\\/users\\/1.jpg\",\"getroles\":[{\"id\":2,\"name\":\"developer\",\"guard_name\":\"web\",\"created_at\":\"2019-11-30 16:53:41\",\"updated_at\":\"2019-11-30 16:53:41\",\"getpermissions\":[{\"id\":4,\"name\":\"access-roles\",\"guard_name\":\"web\",\"created_at\":\"2019-12-09 13:28:55\",\"updated_at\":\"2019-12-09 13:28:55\",\"pivot\":{\"role_id\":2,\"permission_id\":4}},{\"id\":5,\"name\":\"access-users\",\"guard_name\":\"web\",\"created_at\":\"2019-12-09 13:29:06\",\"updated_at\":\"2019-12-09 13:29:06\",\"pivot\":{\"role_id\":2,\"permission_id\":5}},{\"id\":6,\"name\":\"access-permissions\",\"guard_name\":\"web\",\"created_at\":\"2019-12-09 13:29:25\",\"updated_at\":\"2019-12-09 13:29:25\",\"pivot\":{\"role_id\":2,\"permission_id\":6}},{\"id\":7,\"name\":\"access-configs\",\"guard_name\":\"web\",\"created_at\":\"2019-12-09 13:29:43\",\"updated_at\":\"2019-12-09 13:29:43\",\"pivot\":{\"role_id\":2,\"permission_id\":7}},{\"id\":8,\"name\":\"give-permissions\",\"guard_name\":\"web\",\"created_at\":\"2019-12-09 15:03:45\",\"updated_at\":\"2019-12-09 15:03:45\",\"pivot\":{\"role_id\":2,\"permission_id\":8}},{\"id\":9,\"name\":\"access-desktop\",\"guard_name\":\"web\",\"created_at\":\"2019-12-10 07:08:43\",\"updated_at\":\"2019-12-10 07:08:43\",\"pivot\":{\"role_id\":2,\"permission_id\":9}},{\"id\":10,\"name\":\"access-drivers\",\"guard_name\":\"web\",\"created_at\":\"2019-12-10 07:08:52\",\"updated_at\":\"2019-12-10 07:08:52\",\"pivot\":{\"role_id\":2,\"permission_id\":10}}],\"pivot\":{\"model_id\":1,\"role_id\":2,\"model_type\":\"App\\\\User\"},\"permissions\":[{\"id\":4,\"name\":\"access-roles\",\"guard_name\":\"web\",\"created_at\":\"2019-12-09 13:28:55\",\"updated_at\":\"2019-12-09 13:28:55\",\"pivot\":{\"role_id\":2,\"permission_id\":4}},{\"id\":5,\"name\":\"access-users\",\"guard_name\":\"web\",\"created_at\":\"2019-12-09 13:29:06\",\"updated_at\":\"2019-12-09 13:29:06\",\"pivot\":{\"role_id\":2,\"permission_id\":5}},{\"id\":6,\"name\":\"access-permissions\",\"guard_name\":\"web\",\"created_at\":\"2019-12-09 13:29:25\",\"updated_at\":\"2019-12-09 13:29:25\",\"pivot\":{\"role_id\":2,\"permission_id\":6}},{\"id\":7,\"name\":\"access-configs\",\"guard_name\":\"web\",\"created_at\":\"2019-12-09 13:29:43\",\"updated_at\":\"2019-12-09 13:29:43\",\"pivot\":{\"role_id\":2,\"permission_id\":7}},{\"id\":8,\"name\":\"give-permissions\",\"guard_name\":\"web\",\"created_at\":\"2019-12-09 15:03:45\",\"updated_at\":\"2019-12-09 15:03:45\",\"pivot\":{\"role_id\":2,\"permission_id\":8}},{\"id\":9,\"name\":\"access-desktop\",\"guard_name\":\"web\",\"created_at\":\"2019-12-10 07:08:43\",\"updated_at\":\"2019-12-10 07:08:43\",\"pivot\":{\"role_id\":2,\"permission_id\":9}},{\"id\":10,\"name\":\"access-drivers\",\"guard_name\":\"web\",\"created_at\":\"2019-12-10 07:08:52\",\"updated_at\":\"2019-12-10 07:08:52\",\"pivot\":{\"role_id\":2,\"permission_id\":10}}]}],\"roles\":[{\"id\":2,\"name\":\"developer\",\"guard_name\":\"web\",\"created_at\":\"2019-11-30 16:53:41\",\"updated_at\":\"2019-11-30 16:53:41\",\"getpermissions\":[{\"id\":4,\"name\":\"access-roles\",\"guard_name\":\"web\",\"created_at\":\"2019-12-09 13:28:55\",\"updated_at\":\"2019-12-09 13:28:55\",\"pivot\":{\"role_id\":2,\"permission_id\":4}},{\"id\":5,\"name\":\"access-users\",\"guard_name\":\"web\",\"created_at\":\"2019-12-09 13:29:06\",\"updated_at\":\"2019-12-09 13:29:06\",\"pivot\":{\"role_id\":2,\"permission_id\":5}},{\"id\":6,\"name\":\"access-permissions\",\"guard_name\":\"web\",\"created_at\":\"2019-12-09 13:29:25\",\"updated_at\":\"2019-12-09 13:29:25\",\"pivot\":{\"role_id\":2,\"permission_id\":6}},{\"id\":7,\"name\":\"access-configs\",\"guard_name\":\"web\",\"created_at\":\"2019-12-09 13:29:43\",\"updated_at\":\"2019-12-09 13:29:43\",\"pivot\":{\"role_id\":2,\"permission_id\":7}},{\"id\":8,\"name\":\"give-permissions\",\"guard_name\":\"web\",\"created_at\":\"2019-12-09 15:03:45\",\"updated_at\":\"2019-12-09 15:03:45\",\"pivot\":{\"role_id\":2,\"permission_id\":8}},{\"id\":9,\"name\":\"access-desktop\",\"guard_name\":\"web\",\"created_at\":\"2019-12-10 07:08:43\",\"updated_at\":\"2019-12-10 07:08:43\",\"pivot\":{\"role_id\":2,\"permission_id\":9}},{\"id\":10,\"name\":\"access-drivers\",\"guard_name\":\"web\",\"created_at\":\"2019-12-10 07:08:52\",\"updated_at\":\"2019-12-10 07:08:52\",\"pivot\":{\"role_id\":2,\"permission_id\":10}}],\"pivot\":{\"model_id\":1,\"role_id\":2,\"model_type\":\"App\\\\User\"},\"permissions\":[{\"id\":4,\"name\":\"access-roles\",\"guard_name\":\"web\",\"created_at\":\"2019-12-09 13:28:55\",\"updated_at\":\"2019-12-09 13:28:55\",\"pivot\":{\"role_id\":2,\"permission_id\":4}},{\"id\":5,\"name\":\"access-users\",\"guard_name\":\"web\",\"created_at\":\"2019-12-09 13:29:06\",\"updated_at\":\"2019-12-09 13:29:06\",\"pivot\":{\"role_id\":2,\"permission_id\":5}},{\"id\":6,\"name\":\"access-permissions\",\"guard_name\":\"web\",\"created_at\":\"2019-12-09 13:29:25\",\"updated_at\":\"2019-12-09 13:29:25\",\"pivot\":{\"role_id\":2,\"permission_id\":6}},{\"id\":7,\"name\":\"access-configs\",\"guard_name\":\"web\",\"created_at\":\"2019-12-09 13:29:43\",\"updated_at\":\"2019-12-09 13:29:43\",\"pivot\":{\"role_id\":2,\"permission_id\":7}},{\"id\":8,\"name\":\"give-permissions\",\"guard_name\":\"web\",\"created_at\":\"2019-12-09 15:03:45\",\"updated_at\":\"2019-12-09 15:03:45\",\"pivot\":{\"role_id\":2,\"permission_id\":8}},{\"id\":9,\"name\":\"access-desktop\",\"guard_name\":\"web\",\"created_at\":\"2019-12-10 07:08:43\",\"updated_at\":\"2019-12-10 07:08:43\",\"pivot\":{\"role_id\":2,\"permission_id\":9}},{\"id\":10,\"name\":\"access-drivers\",\"guard_name\":\"web\",\"created_at\":\"2019-12-10 07:08:52\",\"updated_at\":\"2019-12-10 07:08:52\",\"pivot\":{\"role_id\":2,\"permission_id\":10}}]}]}}', NULL, '2019-12-16 04:46:16', '2019-12-16 04:46:16');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `note` text COLLATE utf8mb4_unicode_ci,
  `discount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `status_note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `title`, `desc`, `note`, `discount`, `user_id`, `status`, `status_note`, `created_at`, `updated_at`) VALUES
(18, 'Eligendi ipsam non aliquid maxime cumque.', 'Nesciunt molestiae possimus similique cupiditate consequatur. Aut neque at magni similique natus occaecati tempora. Incidunt excepturi impedit facere laudantium voluptatem.', 'Ut atque eum saepe in culpa quod. Et aut distinctio deserunt. Cum sit recusandae facere deserunt officia.', '11%', 5, 1, NULL, '2019-11-23 14:56:52', '2019-06-19 14:56:52'),
(20, 'Et deserunt voluptate et quis eaque.', 'Dolorem aspernatur et eaque reprehenderit voluptatem suscipit. Vitae voluptates odio dolorum error aliquid ab. Hic accusantium sapiente sit aut accusantium veniam. Nam deleniti minus similique nam beatae ea. Laudantium a inventore nesciunt molestias atque.', 'Quia odio vel aliquid eveniet est. Ut ut ea aliquam dolor quia perspiciatis. Quaerat porro ipsa ut aperiam nulla ut adipisci omnis. Expedita repudiandae nihil aut quis.', '5%', 2, 2, 'Autem architecto error sit officia.', '2019-07-16 14:56:52', '2019-09-18 14:56:52'),
(21, 'Et dolor molestiae quaerat placeat pariatur.', 'Est dolor atque at quasi. Fuga non nemo laboriosam quia eaque nihil voluptatem. Sapiente corporis beatae accusamus dolore. Odit in non cupiditate dolore ut autem.', NULL, '0', 6, 1, NULL, '2019-02-21 14:56:52', '2020-02-29 02:45:38'),
(24, 'Et dicta sit molestiae.', 'Provident vel explicabo qui voluptate sint. Voluptatibus cupiditate quis corporis ipsam ex. Ex quisquam quas laborum aut qui commodi.', NULL, '0', 3, 0, NULL, '2019-03-16 14:56:52', '2019-06-28 14:56:52'),
(26, 'Omnis fuga ut officia est.', 'Quo aut voluptates harum qui qui deserunt non. Voluptate quas eos aut earum quas occaecati. Exercitationem aut dignissimos omnis alias et id quasi id.', 'Aut sint et minima sit. Voluptatem est ex adipisci voluptas distinctio ea. Aliquid adipisci in dolor dolor ex velit. Delectus animi impedit nesciunt facere. Ex temporibus accusantium autem aut sint quibusdam. Eum dolorem ipsam atque ex adipisci.', '0', 2, 3, '<a href=\'#\'>30551</a>', '2019-12-06 14:59:22', '2019-02-06 14:59:22'),
(27, 'Accusantium maiores dolore praesentium similique error nihil est.', 'Reiciendis expedita amet omnis cumque et accusantium consectetur architecto. Sunt facere consequatur hic recusandae eaque. Laboriosam molestiae consequatur ea est. Corporis expedita enim voluptas deleniti consequatur ea.', 'Ut occaecati dolores fugit unde sit incidunt. Qui at accusantium quis velit distinctio nihil similique. Recusandae dolor aut officiis corrupti. Id veniam nostrum commodi qui et aspernatur iure. Dolore aut perspiciatis et earum sit quasi.', '0', 5, 2, 'Tenetur voluptatem pariatur ab dolore.', '2019-02-07 14:59:22', '2019-11-21 14:59:22'),
(30, 'Fuga odit nobis quasi et.', 'Aperiam quis numquam doloribus quo rerum. Voluptatem eligendi id fugit architecto iste hic. Est debitis est quis quia nesciunt illo. Illo neque ea aliquam rerum.', 'Commodi dolor omnis vel explicabo. Harum aperiam et ut animi excepturi et quod. Quasi dolor quam minima reprehenderit. Ut ut eius itaque est non consequatur officiis. Rerum explicabo eaque deleniti perferendis quia expedita. Consequatur cumque est eos dicta velit dolor cum. Doloremque quasi ab exercitationem et natus deleniti eum nihil.', '9%', 4, 1, NULL, '2019-02-21 14:59:22', '2019-01-26 14:59:22'),
(31, 'Sint officiis ut distinctio magni ea velit.', 'Animi iure consectetur quidem iure facere non voluptate. Amet nesciunt laborum voluptatibus et repellat aut ab. Minus quia at pariatur dolorem unde ea consequatur.', NULL, '0', 6, 0, NULL, '2019-05-01 14:59:22', '2019-06-08 14:59:22'),
(34, 'Totam fugit officiis voluptas facilis sunt iste et.', 'In hic exercitationem accusamus rerum sint. Cumque impedit quia porro recusandae ea dolorem. Similique vero nam minima voluptatem rerum facilis eos. Laudantium sapiente sapiente quia quam debitis aperiam reprehenderit.', 'Voluptas est et sed ab quis. Natus maxime atque consequatur consequatur qui. Non omnis magni ipsa eum eaque. Recusandae architecto suscipit possimus nulla qui voluptatum. Nihil facilis et voluptates et occaecati molestiae distinctio.', '9%', 4, 3, '<a href=\'#\'>44126</a>', '2019-05-09 14:59:22', '2019-09-23 14:59:22'),
(39, 'Repudiandae eveniet omnis sequi recusandae atque.', 'Aut quos dolor omnis cum necessitatibus sit nemo. Nostrum id fuga animi doloribus amet rerum voluptas et. Velit non rem quod nisi libero. Officia provident illo iusto mollitia.', 'Aliquid repellat iure assumenda incidunt est sunt. Optio blanditiis id quasi nemo sint at. Ratione doloribus nulla doloremque quia veniam quam. Qui a quidem nam maiores quos iure earum.', '13%', 6, 2, 'Sit aut dolores dolore quo.', '2019-03-10 14:59:22', '2019-03-27 14:59:22'),
(40, 'Sed et veniam aut expedita et occaecati et.', 'Sint sint eaque nisi et. Alias doloremque nihil nihil quia. Cum nisi at aspernatur.', 'Saepe neque voluptatum nihil fugit non ducimus. Vel laboriosam cupiditate quas est itaque. Voluptas ea voluptates quia ex. Aliquid harum repellat delectus laboriosam recusandae iste id.', '0', 17, 2, 'Magni recusandae consequatur dolorum quia est ea.', '2019-12-27 14:59:22', '2019-12-07 14:59:22'),
(42, 'Dolores eum quis aut.', 'Distinctio perferendis ipsum est sit. Veniam atque saepe quos voluptas. Voluptate recusandae error sapiente doloremque culpa veritatis odit. Omnis qui molestiae autem similique excepturi laudantium.', NULL, '0', 18, 1, NULL, '2019-12-24 14:59:22', '2019-01-17 14:59:22'),
(43, 'Commodi qui consequatur vel sed atque quae vel nihil.', 'Vel recusandae esse est veritatis cum tempora ut. Aut non sunt quasi voluptas non aut eaque. Dolor officia ratione totam quas tempora. Rerum quo veritatis omnis nisi nulla illo. Repudiandae labore maiores sed enim et dolorem.', 'Qui aperiam aut praesentium voluptates. Alias dolorem vel neque velit. Ut eligendi tenetur tempore beatae ea sit. Ipsa quo reprehenderit ducimus quisquam. Incidunt necessitatibus ducimus voluptatum sit maiores. Nihil quis dicta fuga molestias est.', '14%', 17, 2, 'Dolorem ducimus sed commodi magni alias.', '2019-12-15 14:59:22', '2019-12-01 14:59:22'),
(45, 'Accusamus dolorem consectetur quam ullam.', 'Similique laboriosam et labore voluptatem ipsam quisquam et. Aut ut ad magni blanditiis. Architecto ea quia fugit voluptas officiis.', 'In quia inventore aperiam voluptatem. Et totam aut amet non ex quod. Aperiam asperiores consequatur ut modi.', '0', 6, 2, 'Doloremque iure aut fugiat expedita corporis sit reiciendis et.', '2019-03-21 14:59:22', '2019-11-15 14:59:22'),
(46, 'Similique dignissimos qui officiis.', 'Omnis sapiente sunt unde nam odio. Vel accusantium voluptatem eveniet sit ratione. Explicabo officiis hic eveniet ipsa. Delectus dolor a labore doloremque.', NULL, '0', 18, 1, NULL, '2019-06-25 14:59:22', '2020-02-29 02:48:05'),
(47, 'Autem provident id aliquam libero sunt quia.', 'Et voluptas voluptate consectetur. Voluptatem ipsa ratione voluptatem sit distinctio esse in quia.', NULL, '0', 4, 0, NULL, '2019-08-17 14:59:22', '2019-04-17 14:59:22'),
(48, 'Porro ut voluptatibus at nesciunt saepe.', 'Odio in harum delectus quo quidem laudantium tempore. Voluptatum aspernatur nostrum quo dolorum sint velit. Non aut omnis velit id ea numquam porro. Nam enim molestias quos odio.', 'Rerum animi aut est dignissimos. Harum aut non odio molestiae. Fugiat sed cum sint officiis recusandae excepturi dolores sit. Necessitatibus inventore dolorem atque libero aperiam. Laborum repellat qui ipsam nostrum. Animi magni veritatis enim qui. Nam corporis dolorem quod impedit.', '0', 18, 3, '<a href=\'#\'>19410</a>', '2019-06-06 14:59:22', '2019-01-22 14:59:22'),
(51, 'Illum error sit debitis.', 'Fugiat et animi recusandae sit laboriosam molestiae optio. Numquam quo sit illum in. Sint id quis quidem voluptatem ullam totam ex.', 'Similique id ex quia accusamus. Dolorem aut sed veniam hic maxime consectetur. Id voluptate enim quas a repudiandae id similique.', '0', 17, 3, '<a href=\'#\'>38081</a>', '2019-01-16 14:59:22', '2019-11-17 14:59:22'),
(53, 'Esse ut magnam suscipit.', 'Sint nihil harum sapiente ad rerum in. Voluptatem sed corporis eum optio soluta eaque tempora nulla. Corrupti inventore odit autem fugit. Repudiandae qui soluta blanditiis suscipit.', 'Ut sed nam sunt numquam in. Accusantium eos accusamus officia exercitationem quisquam eum minima. Natus aliquid in ad est sit repudiandae. Aut adipisci numquam qui error est nemo. Est ipsam et ex cupiditate tenetur. Vel occaecati maiores quam laboriosam totam sit. Rerum placeat voluptatibus odit cupiditate fugiat dolor. Natus accusamus beatae debitis sit totam et suscipit. Reiciendis dolor libero totam harum. Et tempora iure ipsam atque et.', '12%', 17, 2, 'received', '2019-09-25 14:59:22', '2020-02-29 02:35:37'),
(54, 'Facere omnis vel quasi nobis quia possimus.', 'Corporis consequuntur eos harum corrupti incidunt et. Ad itaque velit ut et omnis magnam tenetur velit. Id facilis qui sed animi reprehenderit dolorum qui. Velit rerum aliquam velit voluptatem.', 'Tempore provident blanditiis repudiandae earum qui suscipit ullam. Debitis ut facere voluptas dolor occaecati ipsum. Animi a nemo dolorem error blanditiis dolores. Consectetur fugiat sit numquam sequi placeat. Iure ratione voluptatem quidem pariatur possimus et. Omnis itaque pariatur ex doloribus. Doloremque rerum sint voluptas sunt dolor.', '0', 5, 3, '<a href=\'#\'>10575</a>', '2019-04-27 14:59:22', '2019-10-10 14:59:22'),
(56, 'Fugiat voluptatem ut beatae sint autem voluptatem rem.', 'Aut temporibus recusandae recusandae dignissimos. Doloremque recusandae harum sed. Eligendi modi omnis nihil quia.', 'Eum vel ut ullam voluptas amet sit porro exercitationem. Aspernatur qui esse a corrupti vero qui maiores nobis. Inventore velit nam animi provident. Voluptatibus maiores dolor eos nulla eum velit. Voluptatem vel commodi nulla perspiciatis. Qui nihil et perspiciatis nisi.', '0', 3, 2, 'Preparing', '2019-10-21 14:59:22', '2019-01-10 14:59:22'),
(57, 'Praesentium pariatur eaque tenetur quo.', 'Asperiores eius aperiam aut ab. Esse maxime explicabo dolorem non deleniti. Ullam reprehenderit dolorem natus sit voluptas illo.', 'Et quia corporis natus vero velit laudantium maxime. Deserunt quas ex veritatis pariatur ut corporis. Nostrum odio quia omnis eveniet voluptatem. Earum excepturi laborum veniam earum expedita temporibus incidunt. Beatae voluptas fuga maiores voluptatem quis unde mollitia. Fugit culpa aut nostrum consequatur nisi nam sapiente. Cumque est voluptatem ullam deleniti ea.', '6%', 2, 1, NULL, '2019-11-06 14:59:22', '2019-06-09 14:59:22'),
(58, 'Expedita ipsam qui est exercitationem veritatis sapiente.', 'Libero eveniet aperiam dolor natus voluptatem. Aspernatur est quia et illum. Molestias voluptas sed molestiae amet. Est culpa voluptatum quia qui excepturi. Consequatur adipisci ullam corrupti non minima cum repudiandae.', 'Consequatur reprehenderit iusto nulla vel autem molestias. Omnis est consequatur eos. Id maxime voluptate nulla rerum possimus esse dolores. Maxime enim eaque ab molestiae. Quidem non ex repellat voluptatem et. Neque odit eius iusto velit repellat tempore qui. Qui quas cumque exercitationem pariatur maxime.', '0', 2, 3, '<a href=\'#\'>47674</a>', '2019-02-01 14:59:23', '2019-03-11 14:59:23'),
(59, 'Porro accusamus placeat soluta nisi atque.', 'Accusantium eligendi est expedita totam voluptatem. Velit non quibusdam quidem itaque quia et sed. Ducimus nisi voluptatem autem voluptatem. Quia velit occaecati eos est aspernatur voluptatum.', NULL, '0', 3, 1, NULL, '2019-10-10 14:59:23', '2019-05-25 14:59:23'),
(60, 'Et sint atque ad est neque.', 'Quae labore iste hic. Qui cum tenetur eos magni reprehenderit. Quibusdam cum hic ut enim est magnam eius.', 'Quibusdam nihil saepe error. Qui ullam nam sed et. At exercitationem sapiente officiis aspernatur.', '0', 6, 3, '<a href=\'#\'>10501</a>', '2019-09-11 14:59:23', '2019-10-02 14:59:23'),
(61, 'Culpa sit iusto qui aut quisquam quae perferendis ducimus.', 'Sint quis harum non iste quam quisquam architecto dolores. Fuga est quidem et qui et iste exercitationem. Eum velit est optio facere.', 'Earum quisquam deleniti at numquam. Fugiat iure facilis nesciunt vitae vel. Nulla est in placeat consequatur eos dolores. Dolores dicta dolor quo qui dolorum sint blanditiis. Eligendi et eaque asperiores nihil et aut saepe. Quo id ut rem omnis doloribus sint consequuntur quia. Tenetur aliquam aut aut.', '6%', 18, 2, 'Qui omnis deserunt et.', '2019-05-23 14:59:23', '2019-06-06 14:59:23'),
(62, 'Ad minus et quaerat et laudantium exercitationem nesciunt.', 'Quaerat possimus exercitationem voluptate sint dolorum recusandae magni. Officia consequuntur sit reiciendis temporibus nesciunt laborum recusandae culpa. Laborum quasi dolor sit soluta dolorem.', 'Ea est perferendis et sed. Aliquam ipsa nihil sed consequuntur et eius omnis fugit. Autem est voluptatum aut maxime labore. Sit nemo harum est possimus. Similique quam velit quia quo. Voluptatem magnam eos ad consequuntur quisquam ea minus.', '0', 5, 3, '<a href=\'#\'>96983</a>', '2019-12-10 14:59:23', '2019-06-27 14:59:23'),
(63, 'Et impedit exercitationem neque voluptatem repellendus inventore.', 'Architecto ipsum explicabo veniam ipsam. Ea aut id esse neque id rem unde.', 'Officia voluptates unde aut voluptas nulla aut sequi. Nam provident qui dolorem dolorem voluptatem quia. Illum ut consequatur ab vel tempora ut. Ea id nobis ipsam fugit officiis a consequatur sit.', '0', 4, 3, '<a href=\'#\'>61568</a>', '2019-08-11 14:59:23', '2019-04-10 14:59:23'),
(65, 'Blanditiis ut velit explicabo sit.', 'Doloribus quidem eveniet molestiae voluptatem accusantium neque quod molestiae. Incidunt mollitia ut recusandae libero debitis. Saepe eum sunt maxime fuga. In reprehenderit consequatur laboriosam sint ex voluptas dolores.', 'Tenetur reiciendis animi consequatur ea. Est tempore voluptatem explicabo. Aut dolorem animi cupiditate minima perspiciatis. Soluta dolor nulla sint tempore similique. Voluptatibus iusto autem suscipit. Modi enim vitae tempora aliquam non est. Eligendi voluptates ipsam alias optio consequuntur qui. Facere consectetur sint amet sed est aliquid. Praesentium tempora assumenda qui. Quo sit et consectetur ut excepturi odio ratione.', '12%', 6, 1, NULL, '2019-11-24 14:59:23', '2019-09-10 14:59:23'),
(70, 'Inventore deserunt non dolorem ipsa.', 'Eveniet itaque fuga qui nostrum. Totam minima eum nobis nam quidem qui maxime. Blanditiis dolor quis doloremque ex quasi odit optio. Saepe dolorem qui ut nulla quo.', NULL, '0', 5, 1, NULL, '2019-01-25 14:59:23', '2019-06-06 14:59:23'),
(71, 'Ipsam quod quis aliquam quisquam error et inventore.', 'Amet quas eum ut et in. Ducimus non sit et voluptatum. Animi asperiores quidem reiciendis voluptatem. Esse nemo deleniti quia delectus qui sunt.', 'Ullam aut ex at quibusdam quis. Qui vitae earum ut. Impedit autem eos maiores tempora. Dicta repellendus quasi est aliquid et distinctio qui illo. Iure ea non eaque aut molestiae.', '15%', 4, 2, 'Deserunt voluptate sapiente in vero sit aspernatur.', '2019-12-16 14:59:23', '2019-11-27 14:59:23'),
(75, 'Sed aut aut et voluptatem voluptas.', 'Laboriosam suscipit nisi minus nam enim. Dolorem odio et in deserunt omnis quas iure tempore. Dolorem nobis repellendus qui doloremque veniam optio quis.', NULL, '0', 6, 1, NULL, '2019-03-04 14:59:23', '2019-04-26 14:59:23'),
(76, 'testo', 'no description', NULL, '0', 1, 2, 'received', '2020-02-27 17:35:32', '2020-02-29 02:39:39'),
(77, 'untitled', 'no description', '', '0', 3, 0, '', '2020-02-29 12:03:22', '2020-02-29 12:03:22'),
(78, 'untitled', 'no description', '', '0', 1, 0, '', '2020-02-29 12:04:11', '2020-02-29 12:04:11');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(4, 'access-roles', 'web', '2019-12-09 10:28:55', '2019-12-09 10:28:55'),
(5, 'access-users', 'web', '2019-12-09 10:29:06', '2019-12-09 10:29:06'),
(6, 'access-permissions', 'web', '2019-12-09 10:29:25', '2019-12-09 10:29:25'),
(7, 'access-configs', 'web', '2019-12-09 10:29:43', '2019-12-09 10:29:43'),
(8, 'give-permissions', 'web', '2019-12-09 12:03:45', '2019-12-09 12:03:45'),
(11, 'access_products', 'web', '2020-02-18 07:57:14', '2020-02-18 14:27:43'),
(12, 'access_orders', 'web', '2020-02-18 14:26:58', '2020-02-18 14:26:58'),
(13, 'access_draft_orders', 'web', '2020-02-18 14:29:15', '2020-02-18 14:29:15'),
(14, 'access_pending_orders', 'web', '2020-02-20 17:20:25', '2020-02-20 17:20:25'),
(15, 'access_approved_orders', 'web', '2020-02-20 17:20:35', '2020-02-20 17:20:35'),
(16, 'access_completed_orders', 'web', '2020-02-20 17:20:43', '2020-02-20 17:20:43'),
(17, 'access_bills', 'web', '2020-02-25 09:20:27', '2020-02-25 09:20:27'),
(18, 'access_transactions', 'web', '2020-02-25 09:22:17', '2020-02-25 09:22:17'),
(19, 'isAdmin', 'web', '2020-02-27 07:10:55', '2020-02-27 07:10:55'),
(20, 'agent_create_draft_order', 'web', '2020-02-27 15:22:57', '2020-02-27 15:22:57'),
(21, 'agent_edit_draft_order', 'web', '2020-02-27 15:23:06', '2020-02-27 15:23:06'),
(22, 'agent_delete_draft_order', 'web', '2020-02-27 15:23:17', '2020-02-27 15:23:17'),
(23, 'admin_edit_pending_order', 'web', '2020-02-27 15:23:25', '2020-02-27 15:23:26'),
(24, 'admin_delete_pending_order', 'web', '2020-02-27 15:23:33', '2020-02-27 15:23:33'),
(25, 'admin_edit_approved_order', 'web', '2020-02-27 15:23:40', '2020-02-27 15:23:40'),
(26, 'admin_delete_approved_order', 'web', '2020-02-27 15:23:49', '2020-02-27 15:23:49'),
(27, 'admin_edit_completed_order', 'web', '2020-02-27 15:23:59', '2020-02-27 15:23:59'),
(28, 'admin_delete_completed_order', 'web', '2020-02-27 15:24:08', '2020-02-27 15:24:08'),
(29, 'admin_add_transaction', 'web', '2020-02-28 06:13:48', '2020-02-28 06:13:48'),
(30, 'admin_delete_transaction', 'web', '2020-02-28 06:16:31', '2020-02-28 06:16:31'),
(31, 'isAgent', 'web', '2020-02-28 06:16:48', '2020-02-28 06:16:48'),
(32, 'access_orders_statistic', 'web', '2020-03-01 06:23:18', '2020-03-01 06:23:18'),
(33, 'access_financial_statistic', 'web', '2020-03-01 06:23:51', '2020-03-01 06:23:51');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `desc`, `unit`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Berbere Tomato Sause', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'Container/s', 75000.00, NULL, NULL),
(2, 'Chips', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'Container/s', 60000.00, NULL, NULL),
(3, 'Teff Pasta', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 'Container/s', 25000.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'agent', 'web', '2019-11-30 08:30:28', '2020-02-29 05:43:40'),
(2, 'developer', 'web', '2019-11-30 13:53:41', '2019-11-30 13:53:41');

-- --------------------------------------------------------

--
-- Table structure for table `role_configuration`
--

CREATE TABLE `role_configuration` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `configuration_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_configuration`
--

INSERT INTO `role_configuration` (`id`, `role_id`, `configuration_id`, `created_at`, `updated_at`) VALUES
(41, 2, 10, NULL, NULL),
(44, 1, 7, NULL, NULL),
(46, 2, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(11, 2),
(12, 1),
(12, 2),
(13, 1),
(13, 2),
(14, 1),
(14, 2),
(15, 1),
(15, 2),
(16, 1),
(16, 2),
(17, 1),
(17, 2),
(18, 1),
(18, 2),
(19, 2),
(20, 1),
(20, 2),
(21, 1),
(21, 2),
(22, 1),
(22, 2),
(23, 2),
(24, 2),
(25, 2),
(26, 2),
(27, 2),
(28, 2),
(29, 2),
(30, 2),
(31, 1),
(32, 1),
(32, 2),
(33, 2);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `user_id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(9, 1, 'dev-setting-1', '77', '2019-12-09 06:29:33', '2019-12-09 06:29:33'),
(10, 1, 'receive-noti-4new-users', '1', '2019-12-09 13:14:21', '2019-12-09 13:14:21'),
(11, 1, 'notifications-show-limit', '4', '2019-12-12 13:20:51', '2019-12-12 13:20:51'),
(13, 2, 'receive-noti-4new-users', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_token` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `api_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Murad Alwan', 'free1soft@gmail.com', NULL, '$2y$10$7XCBy.NbQfLDXAWnnkiUze7MunO79FCjmVVK5fx0LCZggALBY/IoC', 'xENJVxbFhG0wypMQDgUeZBGxyOZWMpUgPItqJkxrRCLFo1urwFxoQDnVj8Ap', 'xWAbNNooaSyZKj5zaaZ7CdsfUYXUyK4ZsJAfNkobLdQxPKxY5v3YuZahaX91', '2019-11-26 08:57:41', '2020-03-01 05:47:16'),
(2, 'Hussam Totile', 'hussam@gmail.com', NULL, '$2y$10$BOSA8NOUXDdVg/ST0v/LDeMnP.PaRBYiHE/Zedus4Qwz.M1Tr7PsK', NULL, NULL, '2019-12-01 05:22:11', '2019-12-01 05:22:11'),
(3, 'israr totil', 'isrartoteel@yahoo.com', NULL, '$2y$10$ydw1JpTEB5D5iXLjfZsgy.nM8wq8Sb4UJ.3xHIACHwlS0jqhBZkD6', 'Pf2fXYCdJEHabzEbzPbyLWES5C9H6FkAIAhGDzgaCX1S3TI17widDAc3WxRp', NULL, '2019-12-02 05:43:53', '2020-03-01 05:47:24'),
(4, 'Ashtyn Herman', 'mortimer.luettgen@example.com', '2019-12-06 12:06:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'uFSfHEz3ia', '2019-12-06 12:06:51', '2019-12-06 12:06:51'),
(5, 'Amie Ebert Jr.', 'jett13@example.org', '2019-12-06 12:06:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'HOmCfrFkeD', '2019-12-06 12:06:51', '2019-12-06 12:06:51'),
(6, 'Prof. Jett Borer V', 'kameron.luettgen@example.com', '2019-12-06 12:06:51', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'w9xlijyPo5', '2019-12-06 12:06:51', '2019-12-06 12:06:51'),
(17, 'Besha', 'besha@gmail.com', NULL, '$2y$10$cK.TJnTfwKcGYl9irYhIR.noG9lh6JqHN/MSMHMlfRnVqeBtl8ZTa', NULL, NULL, '2019-12-13 06:57:58', '2019-12-13 06:57:58'),
(18, 'Samer', 'samer@hotmail.com', NULL, '$2y$10$/Ghch8SUezwUzbCFk8fqDOXgtgD1KPUC51LUqkFgutqBLHwtwrIAq', NULL, NULL, '2019-12-16 04:46:14', '2019-12-16 04:46:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_user_id_foreign` (`user_id`),
  ADD KEY `bills_order_id_foreign` (`order_id`);

--
-- Indexes for table `configurations`
--
ALTER TABLE `configurations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_order_id_foreign` (`order_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_configuration`
--
ALTER TABLE `role_configuration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `settings_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_api_token_unique` (`api_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `configurations`
--
ALTER TABLE `configurations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role_configuration`
--
ALTER TABLE `role_configuration`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bills_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `settings`
--
ALTER TABLE `settings`
  ADD CONSTRAINT `settings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
