-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3309
-- Generation Time: Jan 26, 2022 at 10:09 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED DEFAULT NULL,
  `attend` tinyint(1) NOT NULL,
  `day` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `student_id`, `attend`, `day`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-01-02', '2022-01-13 16:35:13', '2022-01-13 16:35:41'),
(2, 2, 1, '2022-01-02', '2022-01-13 16:35:13', '2022-01-13 16:35:41'),
(3, 3, 1, '2022-01-02', '2022-01-13 16:35:13', '2022-01-13 16:35:41'),
(4, 4, 1, '2022-01-02', '2022-01-13 16:35:13', '2022-01-13 16:35:41'),
(5, 5, 1, '2022-01-02', '2022-01-13 16:35:13', '2022-01-13 16:35:41'),
(6, 6, 1, '2022-01-02', '2022-01-13 16:35:13', '2022-01-13 16:35:41'),
(7, 7, 1, '2022-01-02', '2022-01-13 16:35:13', '2022-01-13 16:35:42'),
(8, 8, 1, '2022-01-02', '2022-01-13 16:35:13', '2022-01-13 16:35:42'),
(9, 9, 1, '2022-01-02', '2022-01-13 16:35:13', '2022-01-13 16:35:42'),
(10, 10, 1, '2022-01-02', '2022-01-13 16:35:13', '2022-01-13 16:35:42'),
(11, 11, 1, '2022-01-02', '2022-01-13 16:35:13', '2022-01-13 16:35:42'),
(12, 1, 1, '2022-01-01', '2022-01-13 16:35:52', '2022-01-13 16:36:12'),
(13, 2, 1, '2022-01-01', '2022-01-13 16:35:52', '2022-01-13 16:36:12'),
(14, 3, 1, '2022-01-01', '2022-01-13 16:35:52', '2022-01-13 16:36:12'),
(15, 4, 1, '2022-01-01', '2022-01-13 16:35:52', '2022-01-13 16:36:12'),
(16, 5, 1, '2022-01-01', '2022-01-13 16:35:53', '2022-01-13 16:36:12'),
(17, 6, 1, '2022-01-01', '2022-01-13 16:35:53', '2022-01-13 16:36:12'),
(18, 7, 1, '2022-01-01', '2022-01-13 16:35:53', '2022-01-13 16:36:12'),
(19, 8, 1, '2022-01-01', '2022-01-13 16:35:53', '2022-01-13 16:36:12'),
(20, 9, 1, '2022-01-01', '2022-01-13 16:35:53', '2022-01-13 16:36:12'),
(21, 10, 1, '2022-01-01', '2022-01-13 16:35:53', '2022-01-13 16:36:12'),
(22, 11, 1, '2022-01-01', '2022-01-13 16:35:53', '2022-01-13 16:36:12'),
(23, 1, 0, '2022-01-03', '2022-01-13 16:36:19', '2022-01-13 16:36:35'),
(24, 2, 0, '2022-01-03', '2022-01-13 16:36:19', '2022-01-13 16:36:35'),
(25, 3, 0, '2022-01-03', '2022-01-13 16:36:19', '2022-01-13 16:36:35'),
(26, 4, 0, '2022-01-03', '2022-01-13 16:36:19', '2022-01-13 16:36:35'),
(27, 5, 0, '2022-01-03', '2022-01-13 16:36:19', '2022-01-13 16:36:35'),
(28, 6, 0, '2022-01-03', '2022-01-13 16:36:19', '2022-01-13 16:36:35'),
(29, 7, 0, '2022-01-03', '2022-01-13 16:36:19', '2022-01-13 16:36:35'),
(30, 8, 0, '2022-01-03', '2022-01-13 16:36:19', '2022-01-13 16:36:35'),
(31, 9, 0, '2022-01-03', '2022-01-13 16:36:20', '2022-01-13 16:36:35'),
(32, 10, 0, '2022-01-03', '2022-01-13 16:36:20', '2022-01-13 16:36:35'),
(33, 11, 0, '2022-01-03', '2022-01-13 16:36:20', '2022-01-13 16:36:35'),
(34, 1, 1, '2022-01-04', '2022-01-13 16:36:28', '2022-01-13 16:36:50'),
(35, 2, 1, '2022-01-04', '2022-01-13 16:36:28', '2022-01-13 16:36:50'),
(36, 3, 1, '2022-01-04', '2022-01-13 16:36:28', '2022-01-13 16:36:50'),
(37, 4, 1, '2022-01-04', '2022-01-13 16:36:28', '2022-01-13 16:36:50'),
(38, 5, 1, '2022-01-04', '2022-01-13 16:36:28', '2022-01-13 16:36:50'),
(39, 6, 1, '2022-01-04', '2022-01-13 16:36:28', '2022-01-13 16:36:50'),
(40, 7, 1, '2022-01-04', '2022-01-13 16:36:28', '2022-01-13 16:36:50'),
(41, 8, 1, '2022-01-04', '2022-01-13 16:36:28', '2022-01-13 16:36:50'),
(42, 9, 1, '2022-01-04', '2022-01-13 16:36:28', '2022-01-13 16:36:50'),
(43, 10, 1, '2022-01-04', '2022-01-13 16:36:28', '2022-01-13 16:36:50'),
(44, 11, 1, '2022-01-04', '2022-01-13 16:36:28', '2022-01-13 16:36:50');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level_id` bigint(20) UNSIGNED DEFAULT NULL,
  `group_id` bigint(20) UNSIGNED DEFAULT NULL,
  `exam_date` date NOT NULL,
  `exam_max` double(8,2) NOT NULL,
  `exam_min` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `name`, `level_id`, `group_id`, `exam_date`, `exam_max`, `exam_min`, `created_at`, `updated_at`) VALUES
(1, 'Fannie Yost', 2, 4, '1999-11-27', 100.00, 50.00, '2021-12-26 09:18:43', '2021-12-26 09:18:43'),
(2, 'Virgie Sawayn', 6, 6, '1986-11-04', 100.00, 50.00, '2021-12-26 09:18:43', '2021-12-26 09:18:43'),
(3, 'Mrs. Etha Gaylord', 5, 5, '1974-07-29', 100.00, 50.00, '2021-12-26 09:18:43', '2021-12-26 09:18:43'),
(4, 'Earl Weissnat', 9, 3, '2016-10-27', 100.00, 50.00, '2021-12-26 09:18:43', '2021-12-26 09:18:43'),
(5, 'Dr. Kyra Kessler', 5, 3, '1990-06-24', 100.00, 50.00, '2021-12-26 09:18:43', '2021-12-26 09:18:43'),
(6, 'Miss Eleanora Baumbach', 9, 3, '1993-06-05', 100.00, 50.00, '2021-12-26 09:18:43', '2021-12-26 09:18:43'),
(7, 'Mr. Danny Hackett', 8, 2, '1993-01-09', 100.00, 50.00, '2021-12-26 09:18:43', '2021-12-26 09:18:43'),
(8, 'Mr. Sherman Krajcik', 5, 2, '1975-07-19', 100.00, 50.00, '2021-12-26 09:18:43', '2021-12-26 09:18:43'),
(9, 'Prof. Yessenia Becker V', 5, 3, '1977-09-21', 100.00, 50.00, '2021-12-26 09:18:43', '2021-12-26 09:18:43'),
(10, 'Verda Mosciski', 5, 2, '2002-02-17', 100.00, 50.00, '2021-12-26 09:18:43', '2021-12-26 09:18:43');

-- --------------------------------------------------------

--
-- Table structure for table `exam_attindances`
--

CREATE TABLE `exam_attindances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED DEFAULT NULL,
  `exam_id` bigint(20) UNSIGNED DEFAULT NULL,
  `degree` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_attindances`
--

INSERT INTO `exam_attindances` (`id`, `student_id`, `exam_id`, `degree`, `created_at`, `updated_at`) VALUES
(1, 7, 5, 3.19, '2021-12-26 09:18:46', '2021-12-26 09:18:46'),
(2, 6, 4, 73.89, '2021-12-26 09:18:46', '2021-12-26 09:18:46'),
(3, 1, 1, 76.24, '2021-12-26 09:18:46', '2021-12-26 09:18:46'),
(4, 1, 6, 59.38, '2021-12-26 09:18:46', '2021-12-26 09:18:46'),
(5, 5, 1, 11.38, '2021-12-26 09:18:46', '2021-12-26 09:18:46'),
(6, 1, 6, 20.69, '2021-12-26 09:18:46', '2021-12-26 09:18:46'),
(7, 2, 5, 38.12, '2021-12-26 09:18:47', '2021-12-26 09:18:47'),
(8, 4, 2, 76.87, '2021-12-26 09:18:47', '2021-12-26 09:18:47'),
(9, 9, 4, 50.76, '2021-12-26 09:18:47', '2021-12-26 09:18:47'),
(10, 8, 8, 99.58, '2021-12-26 09:18:47', '2021-12-26 09:18:47');

-- --------------------------------------------------------

--
-- Table structure for table `expences`
--

CREATE TABLE `expences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` decimal(8,2) NOT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expences`
--

INSERT INTO `expences` (`id`, `name`, `reason`, `amount`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Samson Dickens', 'Sed illo sit enim reprehenderit iusto adipisci voluptatem. Sit odio aut nobis at. Aliquam expedita voluptatem quibusdam aut harum repudiandae. Optio architecto animi iure id voluptate accusamus et.', '486.11', '2009-09-08', '2021-12-26 09:18:45', '2021-12-26 09:18:45'),
(2, 'Alberta Zulauf', 'Id dolorem delectus et. Maiores perferendis facere quia ea ipsa possimus laudantium voluptas. Perspiciatis qui et est in. Quam aut aut tempora doloremque eligendi.', '471.48', '2020-11-13', '2021-12-26 09:18:45', '2021-12-26 09:18:45'),
(3, 'Dr. Hosea Beer Sr.', 'Inventore ut ullam laborum officiis et. Rerum corrupti iusto illo unde quia vero. Vel explicabo labore deleniti qui. Officiis quis eum sequi quis corporis tempora recusandae possimus.', '414.00', '1985-12-07', '2021-12-26 09:18:45', '2021-12-26 09:18:45'),
(4, 'Loraine Deckow DVM', 'Dicta porro at sed amet non ratione et. Ut fugiat culpa et hic. Omnis non non quae blanditiis facere. Fugit atque tenetur aliquam recusandae.', '357.07', '2013-05-10', '2021-12-26 09:18:46', '2021-12-26 09:18:46'),
(5, 'Arden Rodriguez', 'Facilis voluptatem sit blanditiis necessitatibus reprehenderit odio. Sed assumenda quae fugit. Ut maxime officia repellat dolores aut. Explicabo consequuntur sed voluptatem.', '374.99', '2008-06-14', '2021-12-26 09:18:46', '2021-12-26 09:18:46'),
(6, 'Nona Dickens DVM', 'Aut neque beatae corrupti fugit sed. Est inventore tenetur ullam quaerat dolores non eius accusantium. Explicabo ipsam adipisci sint labore qui.', '176.93', '2006-06-09', '2021-12-26 09:18:46', '2021-12-26 09:18:46'),
(7, 'Karli Koepp', 'Ab maxime quasi itaque maiores ut. Placeat exercitationem dolore et quae autem officia temporibus. Laudantium animi quasi et eum. Sapiente quas reprehenderit aut minima. Similique alias ut officia.', '496.98', '1984-03-08', '2021-12-26 09:18:46', '2021-12-26 09:18:46'),
(8, 'Garry Bahringer', 'Et quis eligendi aliquam laudantium temporibus alias. Eos quis quia fugiat quia quia est facere ut. A iure ut cum laboriosam. Libero soluta voluptatibus libero repellendus fuga consequatur.', '154.76', '2018-03-24', '2021-12-26 09:18:46', '2021-12-26 09:18:46'),
(9, 'Clemmie Schultz', 'Odio praesentium fugit voluptas ducimus. Reprehenderit enim saepe sed laudantium illum. Non distinctio minus id iusto repudiandae id nisi.', '83.55', '1991-12-18', '2021-12-26 09:18:46', '2021-12-26 09:18:46'),
(10, 'Lizzie Kris', 'Nobis cupiditate sed est minima eveniet. Nemo possimus nesciunt ut libero veritatis corporis. Et mollitia culpa commodi et. Cupiditate et et quo dicta est veritatis.', '158.95', '2006-11-20', '2021-12-26 09:18:46', '2021-12-26 09:18:46');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_id` bigint(20) UNSIGNED DEFAULT NULL,
  `time_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `level_id`, `time_id`, `created_at`, `updated_at`) VALUES
(2, 'Miss Lucienne Swift', 7, 7, '2021-12-26 09:18:42', '2021-12-26 09:18:42'),
(3, 'Mrs. Makayla Yost Jr.', 9, 4, '2021-12-26 09:18:43', '2021-12-26 09:18:43'),
(4, 'Prof. Alphonso Prosacco III', 7, 8, '2021-12-26 09:18:43', '2021-12-26 09:18:43'),
(5, 'Miss Antonette Marvin', 5, 5, '2021-12-26 09:18:43', '2021-12-26 09:18:43'),
(6, 'Peter Haley', 4, 10, '2021-12-26 09:18:43', '2021-12-26 09:18:43'),
(7, 'Dusty Murphy', 2, 6, '2021-12-26 09:18:43', '2021-12-26 09:18:43'),
(8, 'Jeromy Swift', 8, 3, '2021-12-26 09:18:43', '2021-12-26 09:18:43'),
(9, 'Mr. Felipe Zieme II', 7, 9, '2021-12-26 09:18:43', '2021-12-26 09:18:43'),
(10, 'Douglas Moore II', 1, 1, '2021-12-26 09:18:43', '2021-12-26 09:18:43'),
(11, 'mohammed', 3, 11, '2021-12-26 09:50:13', '2021-12-26 09:50:13'),
(13, 'ahmed', 1, 2, '2021-12-26 21:06:39', '2021-12-26 21:06:39'),
(14, 'asdf', 1, 13, '2021-12-27 12:38:43', '2021-12-27 12:38:43');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reserve_cost` decimal(8,2) NOT NULL,
  `malazem_cost` decimal(8,2) NOT NULL,
  `month_cost` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `name`, `reserve_cost`, `malazem_cost`, `month_cost`, `created_at`, `updated_at`) VALUES
(1, 'Mariam Bahringer', '718.11', '276.47', '774.42', '2021-12-26 09:18:41', '2021-12-26 09:18:41'),
(2, 'Miss Madeline Will', '698.28', '619.87', '116.71', '2021-12-26 09:18:41', '2021-12-26 09:18:41'),
(3, 'Daija Blanda MD', '86.87', '555.72', '723.45', '2021-12-26 09:18:41', '2021-12-26 09:18:41'),
(4, 'Woodrow Mueller', '633.72', '935.77', '452.73', '2021-12-26 09:18:41', '2021-12-26 09:18:41'),
(5, 'Frances O\'Reilly', '297.62', '169.01', '920.38', '2021-12-26 09:18:41', '2021-12-26 09:18:41'),
(6, 'Prof. Esperanza Rogahn I', '307.19', '121.20', '480.19', '2021-12-26 09:18:41', '2021-12-26 09:18:41'),
(7, 'Collin Hodkiewicz', '476.87', '456.80', '144.42', '2021-12-26 09:18:41', '2021-12-26 09:18:41'),
(8, 'Urban Feil', '145.93', '193.03', '397.57', '2021-12-26 09:18:41', '2021-12-26 09:18:41'),
(9, 'Mr. Reese Tromp', '488.94', '824.39', '719.69', '2021-12-26 09:18:41', '2021-12-26 09:18:41'),
(10, 'Trey Vandervort', '718.11', '832.80', '641.64', '2021-12-26 09:18:41', '2021-12-26 09:18:41');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_19_185654_create_levels_table', 1),
(6, '2021_12_19_185911_create_times_table', 1),
(7, '2021_12_19_190116_create_groups_table', 1),
(8, '2021_12_19_190833_create_exams_table', 1),
(9, '2021_12_19_191642_create_students_table', 1),
(10, '2021_12_19_194334_create_notes_table', 1),
(11, '2021_12_19_194628_create_payments_table', 1),
(12, '2021_12_19_200055_create_expences_table', 1),
(13, '2021_12_19_202449_create_attendances_table', 1),
(14, '2021_12_19_202625_create_exam_attindances_table', 1),
(15, '2021_12_19_204234_laratrust_setup_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `student_id`, `note`, `created_at`, `updated_at`) VALUES
(1, 5, 'Libero et praesentium sed deserunt in nihil. Totam perspiciatis rem ex voluptatem. Enim enim dolores corporis saepe.', '2021-12-26 09:18:44', '2021-12-26 09:18:44'),
(2, 8, 'Minus error suscipit perferendis repellat qui quia provident possimus. Doloremque voluptates omnis ea et sed culpa. Vel suscipit esse fugiat optio consequatur.', '2021-12-26 09:18:44', '2021-12-26 09:18:44'),
(3, 1, 'Minus libero neque est et architecto minus consequuntur blanditiis. Corrupti provident similique dolor qui.', '2021-12-26 09:18:44', '2021-12-26 09:18:44'),
(4, 9, 'Iusto nam est suscipit fugiat quibusdam illo quae. Tempora aut sit adipisci vel facilis rerum doloribus. Aut aliquam dolor incidunt dolor omnis quia nihil. Iure ut reprehenderit quia et.', '2021-12-26 09:18:44', '2021-12-26 09:18:44'),
(5, 5, 'Pariatur eos voluptatem consequatur voluptas et autem illum. Eum odit provident aut nemo. Reprehenderit magni illum qui minus ut.', '2021-12-26 09:18:44', '2021-12-26 09:18:44'),
(6, 8, 'Nostrum in ut est consectetur occaecati eos perspiciatis voluptas. A facilis temporibus quam quas exercitationem et. Qui in ut perferendis.', '2021-12-26 09:18:44', '2021-12-26 09:18:44'),
(7, 8, 'Qui debitis reiciendis omnis vel et voluptas. In illum est quam provident saepe sunt. Ut iure nihil esse enim ut. Nihil aspernatur quo in et nostrum quo debitis.', '2021-12-26 09:18:44', '2021-12-26 09:18:44'),
(8, 2, 'Cum officia voluptatem voluptatum. Aliquam molestiae ut atque est. Sit repellendus a non quos ut eos.', '2021-12-26 09:18:45', '2021-12-26 09:18:45'),
(9, 1, 'Aut et ratione quae neque cum commodi iusto voluptatem. Sequi ipsam beatae nulla. Cupiditate provident magnam est tempora. Dicta repellendus tempore eum commodi vero alias.', '2021-12-26 09:18:45', '2021-12-26 09:18:45'),
(10, 9, 'Non reprehenderit rerum officia. Omnis modi et non aut. Unde dolorem rerum minus quia at ducimus velit. Porro aperiam explicabo tempora eos ea ea.', '2021-12-26 09:18:45', '2021-12-26 09:18:45');

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pay_from` date NOT NULL,
  `pay_to` date NOT NULL,
  `month_paid` decimal(8,2) NOT NULL,
  `malazem_paid` decimal(8,2) NOT NULL,
  `discount` decimal(8,2) NOT NULL,
  `student_id` bigint(20) UNSIGNED DEFAULT NULL,
  `group_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `pay_from`, `pay_to`, `month_paid`, `malazem_paid`, `discount`, `student_id`, `group_id`, `created_at`, `updated_at`) VALUES
(1, '1979-07-20', '1977-09-01', '11.47', '48.93', '80.17', 6, 4, '2021-12-26 09:18:45', '2021-12-26 09:18:45'),
(2, '1987-09-02', '2018-12-21', '26.65', '22.87', '15.34', 8, NULL, '2021-12-26 09:18:45', '2021-12-26 09:18:45'),
(3, '2020-11-21', '2015-11-19', '20.46', '92.17', '44.00', 9, 6, '2021-12-26 09:18:45', '2021-12-26 09:18:45'),
(4, '2002-12-30', '1997-11-21', '13.18', '22.33', '50.06', 9, 9, '2021-12-26 09:18:45', '2021-12-26 09:18:45'),
(5, '2012-02-23', '1980-06-25', '23.50', '3.09', '2.54', 1, 4, '2021-12-26 09:18:45', '2021-12-26 09:18:45'),
(6, '2012-02-04', '1988-09-30', '91.87', '25.42', '84.71', 8, 2, '2021-12-26 09:18:45', '2021-12-26 09:18:45'),
(7, '2018-06-18', '2014-07-19', '8.89', '15.21', '79.71', 2, 6, '2021-12-26 09:18:45', '2021-12-26 09:18:45'),
(8, '2007-08-28', '1994-10-24', '42.35', '67.46', '89.49', 9, 7, '2021-12-26 09:18:45', '2021-12-26 09:18:45'),
(9, '1985-06-01', '1985-01-09', '78.22', '34.70', '87.61', 9, 7, '2021-12-26 09:18:45', '2021-12-26 09:18:45'),
(10, '2004-01-11', '1998-07-10', '9.24', '48.37', '10.36', 6, 9, '2021-12-26 09:18:45', '2021-12-26 09:18:45');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('reserve','in','out','fired') COLLATE utf8mb4_unicode_ci NOT NULL,
  `reserve_paid` decimal(8,2) NOT NULL,
  `level_id` bigint(20) UNSIGNED DEFAULT NULL,
  `group_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `gender`, `address`, `home_phone`, `phone`, `father_name`, `father_phone`, `school`, `status`, `reserve_paid`, `level_id`, `group_id`, `created_at`, `updated_at`) VALUES
(1, 'Matilda Spencer', 0, '7797 Gene Unions Suite 094North Tyrique, AR 92138', '541.490.3390', '(803) 229-3741', 'Destin Kovacek', '(715) 414-4806', 'Claudia Trantow', 'reserve', '81.21', 9, 3, '2021-12-26 09:18:43', '2021-12-26 14:03:34'),
(2, 'Aiden Parker MD', 1, '470 Josiane Rapid Apt. 867\nEast Conniemouth, KS 19776-3626', '(480) 393-4587', '1-708-320-9573', 'Bernard Blick Sr.', '1-657-317-7669', 'Rosa Stark Sr.', 'fired', '56.15', 4, 6, '2021-12-26 09:18:43', '2021-12-26 09:18:43'),
(3, 'Eino Mosciski', 1, '43845 Yvette Fall\nSouth Lawsonview, IL 86924-1872', '212-673-9378', '682-982-8481', 'Gerson Tromp', '(234) 813-6847', 'Anais Harber MD', 'reserve', '77.01', 7, 9, '2021-12-26 09:18:44', '2021-12-26 09:18:44'),
(4, 'Aida Abernathy', 1, '3488 Nader Streets Apt. 320\nNew Kellenview, VA 24211-8344', '+1.657.422.5956', '(628) 834-1558', 'Arvid Howe', '+1 (678) 685-2836', 'Jairo Hickle MD', 'fired', '42.80', 4, 8, '2021-12-26 09:18:44', '2021-12-26 09:18:44'),
(5, 'Cathrine Ullrich', 0, '392 Stracke Camp\nEduardohaven, NH 42105', '(585) 210-5114', '+1.757.412.4196', 'Sabina Hodkiewicz', '930.361.4848', 'Christelle Wisoky', 'fired', '43.71', 3, 8, '2021-12-26 09:18:44', '2021-12-26 09:18:44'),
(6, 'Kelli Lind Sr.', 1, '38500 Effertz Plaza\nNew Ednastad, CO 89987', '(405) 766-2289', '+16209976512', 'Kyleigh Orn', '+1-283-753-5675', 'Zakary Considine', 'out', '39.53', 9, 3, '2021-12-26 09:18:44', '2021-12-26 09:18:44'),
(7, 'Prof. Wilfredo Zulauf', 1, '39668 Nikolaus Square\nShayneshire, NJ 86007', '(575) 693-4691', '832-349-2578', 'Joaquin Conroy', '667.898.4817', 'Clinton Reilly', 'fired', '87.82', 7, 2, '2021-12-26 09:18:44', '2021-12-26 09:18:44'),
(8, 'Mr. Florencio Ryan I', 1, '78353 Angelica Burg Suite 792Zakaryborough, VA 51284-4150', '+1-781-947-7857', '1-541-889-1512', 'Johathan Schroeder Jr.', '860-303-3724', 'Dr. Enid Klein', 'out', '30.58', 8, 8, '2021-12-26 09:18:44', '2021-12-29 10:57:21'),
(9, 'Mrs. Gerda Okuneva V', 0, '12093 Kelton Row\nEast Buckshire, IA 20505-9870', '641-735-5594', '(574) 742-0171', 'Mina Ondricka', '+1.205.427.9822', 'Mack Bruen', 'fired', '71.71', 1, 9, '2021-12-26 09:18:44', '2021-12-26 09:18:44'),
(10, 'Camron Schamberger', 1, '528 Allen Ramp Apt. 457\nNew Angie, LA 11959', '878.784.4185', '1-520-216-3893', 'Prof. Ashlynn Rodriguez MD', '(808) 812-0703', 'Dr. Judson Bergstrom', 'fired', '6.98', 3, 7, '2021-12-26 09:18:44', '2021-12-26 09:18:44'),
(11, 'Mohammed Emad Makhlouf', 1, 'Kafr El Sheikh 47-street', '01013792632', '01013792632', 'عماد', '01013792632', 'مدرسة مش عارف ايه', 'out', '100.00', 7, 2, '2021-12-26 14:02:10', '2021-12-26 14:02:10');

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

CREATE TABLE `times` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sat` time NOT NULL DEFAULT '00:00:00',
  `sun` time NOT NULL DEFAULT '00:00:00',
  `mon` time NOT NULL DEFAULT '00:00:00',
  `tus` time NOT NULL DEFAULT '00:00:00',
  `wed` time NOT NULL DEFAULT '00:00:00',
  `thu` time NOT NULL DEFAULT '00:00:00',
  `fri` time NOT NULL DEFAULT '00:00:00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `times`
--

INSERT INTO `times` (`id`, `sat`, `sun`, `mon`, `tus`, `wed`, `thu`, `fri`, `created_at`, `updated_at`) VALUES
(1, '06:54:00', '17:59:00', '17:25:00', '05:56:00', '17:20:00', '20:13:00', '03:56:00', '2021-12-26 09:18:42', '2021-12-26 09:18:42'),
(2, '03:14:00', '18:46:00', '11:02:00', '18:57:00', '15:03:00', '17:48:00', '02:01:00', '2021-12-26 09:18:42', '2021-12-26 09:18:42'),
(3, '07:05:00', '11:44:00', '08:37:00', '09:25:00', '06:29:00', '07:07:00', '17:19:00', '2021-12-26 09:18:42', '2021-12-26 09:18:42'),
(4, '00:37:00', '06:22:00', '12:32:00', '01:27:00', '15:45:00', '08:57:00', '05:33:00', '2021-12-26 09:18:42', '2021-12-26 09:18:42'),
(5, '08:54:00', '11:32:00', '05:07:00', '11:11:00', '18:35:00', '05:17:00', '13:12:00', '2021-12-26 09:18:42', '2021-12-26 09:18:42'),
(6, '10:34:00', '10:05:00', '13:47:00', '09:37:00', '09:43:00', '09:01:00', '22:10:00', '2021-12-26 09:18:42', '2021-12-26 09:18:42'),
(7, '13:28:00', '12:34:00', '06:34:00', '02:06:00', '00:10:00', '12:10:00', '20:52:00', '2021-12-26 09:18:42', '2021-12-26 09:18:42'),
(8, '05:52:00', '16:12:00', '22:10:00', '21:17:00', '10:59:00', '04:56:00', '01:42:00', '2021-12-26 09:18:42', '2021-12-26 09:18:42'),
(9, '17:36:00', '21:35:00', '05:48:00', '17:43:00', '16:15:00', '17:10:00', '15:07:00', '2021-12-26 09:18:42', '2021-12-26 09:18:42'),
(10, '19:06:00', '13:18:00', '02:01:00', '01:16:00', '03:41:00', '23:37:00', '11:07:00', '2021-12-26 09:18:42', '2021-12-26 09:18:42'),
(11, '08:00:00', '00:00:00', '08:00:00', '00:00:00', '08:00:00', '00:00:00', '00:00:00', '2021-12-26 09:20:32', '2021-12-26 09:20:32'),
(13, '00:00:00', '10:00:00', '00:00:00', '10:00:00', '00:00:00', '10:00:00', '00:00:00', '2021-12-26 09:49:35', '2021-12-26 09:49:35'),
(14, '01:00:00', '00:00:00', '01:00:00', '00:00:00', '01:00:00', '00:00:00', '00:00:00', '2021-12-26 09:53:37', '2021-12-26 09:53:37'),
(15, '16:00:00', '00:00:00', '16:00:00', '00:00:00', '16:00:00', '00:00:00', '00:00:00', '2021-12-26 21:08:42', '2021-12-26 21:08:42');

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
(1, 'Myles Homenick', 'naomi18@example.com', '2021-12-26 09:18:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '127RAKtt97', '2021-12-26 09:18:40', '2021-12-26 09:18:40'),
(2, 'Zella Kirlin I', 'meredith.zulauf@example.com', '2021-12-26 09:18:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '3s6n7gFjq6', '2021-12-26 09:18:40', '2021-12-26 09:18:40'),
(3, 'Victoria Wiegand', 'uspencer@example.com', '2021-12-26 09:18:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'qX8T4FDZiM', '2021-12-26 09:18:40', '2021-12-26 09:18:40'),
(4, 'Prof. Branson Kovacek V', 'hillary07@example.com', '2021-12-26 09:18:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'PKhrcffcQ2', '2021-12-26 09:18:40', '2021-12-26 09:18:40'),
(5, 'Therese Gerlach', 'hcole@example.com', '2021-12-26 09:18:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'S7LX9ouseE', '2021-12-26 09:18:41', '2021-12-26 09:18:41'),
(6, 'Carleton Price', 'etorphy@example.net', '2021-12-26 09:18:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'p0uTArdJCa', '2021-12-26 09:18:41', '2021-12-26 09:18:41'),
(7, 'Magali Krajcik', 'sfarrell@example.org', '2021-12-26 09:18:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'kggblnz3bt', '2021-12-26 09:18:41', '2021-12-26 09:18:41'),
(8, 'Amaya Wiza', 'sasha.osinski@example.org', '2021-12-26 09:18:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'CL4e7QUNQI', '2021-12-26 09:18:41', '2021-12-26 09:18:41'),
(9, 'Jennings Stiedemann', 'tpaucek@example.net', '2021-12-26 09:18:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '8nnz5DpzMK', '2021-12-26 09:18:41', '2021-12-26 09:18:41'),
(10, 'Mr. Davon Towne I', 'gabriella.cummerata@example.net', '2021-12-26 09:18:40', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'GsMTemYKzC', '2021-12-26 09:18:41', '2021-12-26 09:18:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attendances_student_id_foreign` (`student_id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exams_level_id_foreign` (`level_id`),
  ADD KEY `exams_group_id_foreign` (`group_id`);

--
-- Indexes for table `exam_attindances`
--
ALTER TABLE `exam_attindances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_attindances_student_id_foreign` (`student_id`),
  ADD KEY `exam_attindances_exam_id_foreign` (`exam_id`);

--
-- Indexes for table `expences`
--
ALTER TABLE `expences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `groups_time_id_unique` (`time_id`),
  ADD KEY `groups_level_id_foreign` (`level_id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notes_student_id_foreign` (`student_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_student_id_foreign` (`student_id`),
  ADD KEY `payments_group_id_foreign` (`group_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `students_level_id_foreign` (`level_id`),
  ADD KEY `students_group_id_foreign` (`group_id`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `exam_attindances`
--
ALTER TABLE `exam_attindances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `expences`
--
ALTER TABLE `expences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendances`
--
ALTER TABLE `attendances`
  ADD CONSTRAINT `attendances_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `exams`
--
ALTER TABLE `exams`
  ADD CONSTRAINT `exams_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `exams_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `exam_attindances`
--
ALTER TABLE `exam_attindances`
  ADD CONSTRAINT `exam_attindances_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `exam_attindances_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `groups_time_id_foreign` FOREIGN KEY (`time_id`) REFERENCES `times` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `payments_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `students_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
