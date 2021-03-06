-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql302.byetcluster.com
-- Generation Time: Feb 07, 2022 at 07:28 AM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_30914248_anas`
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
(13, 6, 1, '2022-02-06', '2022-02-06 23:39:07', '2022-02-06 23:39:07'),
(14, 5, 1, '2022-02-06', '2022-02-06 23:39:07', '2022-02-06 23:39:07'),
(15, 3, 1, '2022-02-06', '2022-02-06 23:39:07', '2022-02-06 23:39:07'),
(16, 4, 1, '2022-02-06', '2022-02-06 23:39:07', '2022-02-06 23:39:07'),
(17, 9, 1, '2022-02-06', '2022-02-06 23:39:07', '2022-02-06 23:39:07'),
(18, 12, 1, '2022-02-06', '2022-02-06 23:39:07', '2022-02-06 23:39:07'),
(19, 10, 1, '2022-02-06', '2022-02-06 23:39:07', '2022-02-06 23:39:07'),
(20, 7, 1, '2022-02-06', '2022-02-06 23:39:07', '2022-02-06 23:39:07'),
(21, 8, 1, '2022-02-06', '2022-02-06 23:39:07', '2022-02-06 23:39:07'),
(22, 11, 1, '2022-02-06', '2022-02-06 23:39:07', '2022-02-06 23:39:07'),
(23, 15, 1, '2022-02-06', '2022-02-06 23:39:07', '2022-02-06 23:39:07'),
(24, 14, 1, '2022-02-06', '2022-02-06 23:39:07', '2022-02-06 23:39:07'),
(25, 20, 1, '2022-02-06', '2022-02-06 23:39:07', '2022-02-06 23:39:07'),
(26, 21, 1, '2022-02-06', '2022-02-06 23:39:07', '2022-02-06 23:39:07'),
(27, 18, 1, '2022-02-06', '2022-02-06 23:39:07', '2022-02-06 23:39:07'),
(28, 19, 1, '2022-02-06', '2022-02-06 23:39:07', '2022-02-06 23:39:07'),
(29, 17, 1, '2022-02-06', '2022-02-06 23:39:07', '2022-02-06 23:39:07'),
(30, 16, 1, '2022-02-06', '2022-02-06 23:39:07', '2022-02-06 23:39:07'),
(31, 13, 1, '2022-02-06', '2022-02-06 23:39:07', '2022-02-06 23:39:07'),
(32, 57, 1, '2022-02-06', '2022-02-06 23:39:07', '2022-02-06 23:39:07'),
(33, 56, 1, '2022-02-06', '2022-02-06 23:39:07', '2022-02-06 23:39:07'),
(34, 54, 1, '2022-02-06', '2022-02-06 23:39:07', '2022-02-06 23:39:07');

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
(1, '?????????????? ????????????????????', 1, 1, '2022-02-02', 10.00, 5.00, '2022-02-06 23:22:09', '2022-02-06 23:22:09');

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
(1, 6, 1, 9.00, '2022-02-06 23:22:55', '2022-02-06 23:22:55'),
(2, 5, 1, 10.00, '2022-02-06 23:24:17', '2022-02-06 23:24:17'),
(3, 3, 1, 0.00, '2022-02-06 23:24:35', '2022-02-06 23:24:35'),
(4, 4, 1, 0.00, '2022-02-06 23:25:01', '2022-02-06 23:25:01'),
(5, 4, 1, 0.00, '2022-02-06 23:25:02', '2022-02-06 23:25:02'),
(6, 9, 1, 10.00, '2022-02-06 23:25:53', '2022-02-06 23:25:53'),
(7, 12, 1, 10.00, '2022-02-06 23:26:28', '2022-02-06 23:26:28'),
(8, 55, 1, 10.00, '2022-02-06 23:26:52', '2022-02-06 23:26:52'),
(9, 7, 1, 10.00, '2022-02-06 23:27:22', '2022-02-06 23:27:22'),
(10, 8, 1, 8.00, '2022-02-06 23:27:51', '2022-02-06 23:27:51'),
(11, 11, 1, 10.00, '2022-02-06 23:28:11', '2022-02-06 23:28:11'),
(12, 15, 1, 10.00, '2022-02-06 23:29:17', '2022-02-06 23:29:17'),
(13, 14, 1, 10.00, '2022-02-06 23:29:52', '2022-02-06 23:29:52'),
(14, 20, 1, 10.00, '2022-02-06 23:30:27', '2022-02-06 23:30:27'),
(15, 21, 1, 10.00, '2022-02-06 23:30:52', '2022-02-06 23:30:52'),
(16, 18, 1, 8.00, '2022-02-06 23:31:54', '2022-02-06 23:31:54'),
(17, 19, 1, 8.00, '2022-02-06 23:32:24', '2022-02-06 23:32:24'),
(18, 17, 1, 10.00, '2022-02-06 23:32:48', '2022-02-06 23:32:48'),
(19, 16, 1, 10.00, '2022-02-06 23:33:12', '2022-02-06 23:33:12'),
(20, 13, 1, 0.00, '2022-02-06 23:33:30', '2022-02-06 23:33:30');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(1, '???????????? ????????????', 1, 1, '2022-02-02 00:19:23', '2022-02-02 00:19:23'),
(2, '???????????? ????????????', 2, 4, '2022-02-02 00:19:38', '2022-02-02 00:19:38'),
(3, '???????????? ????????????', 3, 2, '2022-02-02 00:19:46', '2022-02-02 00:19:46'),
(5, '???????????? ????????????', 4, 5, '2022-02-02 00:22:18', '2022-02-02 00:22:18'),
(6, '???????????? ????????????', 5, 6, '2022-02-02 00:22:32', '2022-02-02 00:22:32');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `malazem_cost` decimal(8,2) NOT NULL,
  `month_cost` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `name`, `malazem_cost`, `month_cost`, `created_at`, `updated_at`) VALUES
(1, '???????? ?????????? ????????????????', '70.00', '50.00', '2022-02-02 00:02:46', '2022-02-02 00:02:46'),
(2, '???????? ???????????? ????????????????', '70.00', '60.00', '2022-02-02 00:03:18', '2022-02-02 00:03:18'),
(3, '???????? ???????????? ????????????????', '70.00', '70.00', '2022-02-02 00:11:19', '2022-02-02 00:11:19'),
(4, '???????? ?????????? ??????????????', '100.00', '100.00', '2022-02-02 00:11:39', '2022-02-02 00:11:39'),
(5, '???????? ???????????? ?????????????? (????????)', '100.00', '100.00', '2022-02-02 00:12:18', '2022-02-02 00:12:18'),
(6, '???????? ???????????? ?????????????? (????????????)', '100.00', '160.00', '2022-02-02 00:12:39', '2022-02-02 00:12:39');

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
  `student_id` bigint(20) UNSIGNED DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `discount` decimal(8,2) NOT NULL DEFAULT 0.00,
  `total` decimal(8,2) NOT NULL,
  `student_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `pay_from`, `pay_to`, `month_paid`, `malazem_paid`, `discount`, `total`, `student_id`, `created_at`, `updated_at`) VALUES
(1, '2022-02-01', '2022-03-01', '50.00', '0.00', '0.00', '50.00', 4, '2022-02-02 21:04:00', '2022-02-02 21:04:00'),
(2, '2022-02-01', '2022-03-01', '60.00', '0.00', '0.00', '60.00', 23, '2022-02-02 21:23:03', '2022-02-02 21:23:03');

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('reserve','in','out','fired') COLLATE utf8mb4_unicode_ci NOT NULL,
  `reserve_paid` decimal(8,2) DEFAULT NULL,
  `level_id` bigint(20) UNSIGNED DEFAULT NULL,
  `group_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `gender`, `address`, `home_phone`, `phone`, `image`, `father_phone`, `school`, `status`, `reserve_paid`, `level_id`, `group_id`, `created_at`, `updated_at`) VALUES
(3, '???????? ???????? ???????? ??????????', 1, NULL, NULL, NULL, NULL, '01010315623', NULL, 'reserve', '70.00', 1, 1, '2022-02-02 21:00:13', '2022-02-02 21:00:13'),
(4, '???????? ???????? ??????????', 1, NULL, NULL, NULL, NULL, '01228175008', NULL, 'reserve', '70.00', 1, 1, '2022-02-02 21:02:38', '2022-02-02 21:02:38'),
(5, '???????? ?????????? ??????', 1, NULL, NULL, NULL, NULL, '1000639407', NULL, 'reserve', '70.00', 1, 1, '2022-02-02 21:05:39', '2022-02-02 21:05:39'),
(6, '???????? ???????? ??????????', 1, NULL, NULL, NULL, NULL, '01001796745', NULL, 'reserve', '70.00', 1, 1, '2022-02-02 21:07:28', '2022-02-02 21:07:28'),
(7, '???????? ?????? ????????????', 0, NULL, NULL, NULL, NULL, '01014638194', NULL, 'reserve', '70.00', 1, 1, '2022-02-02 21:08:33', '2022-02-02 21:08:33'),
(8, '???????? ???????? ????????', 0, NULL, NULL, NULL, NULL, '01022326727', NULL, 'reserve', '70.00', 1, 1, '2022-02-02 21:09:18', '2022-02-02 21:09:18'),
(9, '?????? ?????? ???????? ??????', 0, NULL, NULL, NULL, NULL, '01022536168', NULL, 'reserve', '70.00', 1, 1, '2022-02-02 21:09:59', '2022-02-02 21:09:59'),
(10, '???????????? ?????????? ??????', 0, NULL, NULL, NULL, NULL, '010220322695', NULL, 'reserve', '70.00', 1, 1, '2022-02-02 21:10:56', '2022-02-02 21:10:56'),
(11, '???????? ???????? ????????', 0, NULL, NULL, NULL, NULL, '01094480885', NULL, 'reserve', '0.00', 1, 1, '2022-02-02 21:11:35', '2022-02-02 21:11:35'),
(12, '?????? ???????? ??????', 0, NULL, NULL, NULL, NULL, '01005462516', NULL, 'reserve', '70.00', 1, 1, '2022-02-02 21:12:13', '2022-02-02 21:12:13'),
(13, '???????? ???????? ??????????????', 0, NULL, NULL, NULL, NULL, '01019701168', NULL, 'reserve', '0.00', 1, 1, '2022-02-02 21:12:49', '2022-02-02 21:12:49'),
(14, '???????? ???????? ??????????', 0, NULL, NULL, NULL, NULL, '01011564930', NULL, 'reserve', '70.00', 1, 1, '2022-02-02 21:13:21', '2022-02-02 21:13:21'),
(15, '?????? ???????? ????????????', 0, NULL, NULL, NULL, NULL, '01000203083', NULL, 'reserve', '70.00', 1, 1, '2022-02-02 21:14:16', '2022-02-02 21:14:16'),
(16, '???????????? ?????????????? ??????????', 0, NULL, NULL, NULL, NULL, '01013399890', NULL, 'reserve', '70.00', 1, 1, '2022-02-02 21:14:46', '2022-02-02 21:14:46'),
(17, '?????????? ?????? ?????? ????????', 0, NULL, NULL, NULL, NULL, '01028906544', NULL, 'reserve', '0.00', 1, 1, '2022-02-02 21:15:24', '2022-02-02 21:15:24'),
(18, '?????? ???????? ??????????????????', 0, NULL, NULL, NULL, NULL, '01016837934', NULL, 'reserve', '0.00', 1, 1, '2022-02-02 21:15:59', '2022-02-02 21:15:59'),
(19, '?????? ?????????? ??????', 0, NULL, NULL, NULL, NULL, '01018556565', NULL, 'reserve', '70.00', 1, 1, '2022-02-02 21:17:14', '2022-02-02 21:17:14'),
(20, '?????????? ?????? ??????', 0, NULL, NULL, NULL, NULL, '01027245508', NULL, 'reserve', '70.00', 1, 1, '2022-02-02 21:17:44', '2022-02-02 21:17:44'),
(21, '???????? ???????? ??????????', 0, NULL, NULL, NULL, NULL, '01020418166', NULL, 'reserve', '70.00', 1, 1, '2022-02-02 21:18:17', '2022-02-02 21:18:17'),
(22, '???????????? ???????? ????????', 1, NULL, NULL, NULL, NULL, '01022326727', NULL, 'reserve', '70.00', 2, 2, '2022-02-02 21:20:31', '2022-02-02 21:20:31'),
(23, '???????? ???????? ????????', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'reserve', '70.00', 2, 2, '2022-02-02 21:21:06', '2022-02-02 21:21:06'),
(24, '???????? ?????? ???????????? ????????????', 1, NULL, NULL, NULL, NULL, '01023166349', NULL, 'reserve', '0.00', 2, 2, '2022-02-05 14:56:35', '2022-02-05 14:56:35'),
(25, '???????? ???????????? ?????? ??????????', 1, NULL, NULL, NULL, NULL, NULL, NULL, 'reserve', '70.00', 2, 2, '2022-02-05 14:57:11', '2022-02-05 14:57:11'),
(26, '???????? ?????????????????? ????????????', 1, NULL, NULL, '01008583066', NULL, NULL, NULL, 'reserve', '70.00', 2, 2, '2022-02-05 14:58:03', '2022-02-05 14:58:03'),
(27, '???????? ???????? ??????', 1, NULL, NULL, NULL, NULL, '01009888141', NULL, 'reserve', '0.00', 2, NULL, '2022-02-05 16:06:16', '2022-02-05 16:06:16'),
(28, '???????? ???????? ????????????', 1, NULL, NULL, NULL, NULL, '01014496071', NULL, 'reserve', '70.00', 2, 2, '2022-02-05 16:07:25', '2022-02-05 16:07:25'),
(29, '???????? ???????? ??????', 1, NULL, NULL, NULL, NULL, '01094121785', NULL, 'reserve', '70.00', 2, 2, '2022-02-05 16:08:37', '2022-02-05 16:08:37'),
(30, '???????? ?????????? ????????????????', 1, NULL, NULL, NULL, NULL, '01094733671', NULL, 'reserve', '70.00', 2, 2, '2022-02-05 16:11:11', '2022-02-05 16:11:11'),
(31, '???????? ?????????? ????????????????', 1, NULL, NULL, NULL, NULL, '01094733671', NULL, 'reserve', '70.00', 2, 2, '2022-02-05 16:11:46', '2022-02-05 16:11:46'),
(32, '?????????? ????????????', 0, NULL, NULL, NULL, NULL, '01016151847', NULL, 'reserve', '70.00', 2, 2, '2022-02-05 16:12:41', '2022-02-05 16:12:41'),
(33, '?????????? ?????????? ??????', 0, NULL, NULL, NULL, NULL, '01003326873', NULL, 'reserve', '70.00', 2, 2, '2022-02-05 16:13:46', '2022-02-05 16:13:46'),
(34, '?????????? ?????????? ??????', 0, NULL, NULL, NULL, NULL, '01003326873', NULL, 'reserve', '70.00', 2, 2, '2022-02-05 16:14:26', '2022-02-05 16:14:26'),
(35, '???????? ???????? ?????? ????????????', 0, NULL, NULL, NULL, NULL, '01016021303', NULL, 'reserve', '0.00', 2, 2, '2022-02-05 16:15:53', '2022-02-05 16:15:53'),
(36, '?????? ?????????? ??????', 0, NULL, NULL, NULL, NULL, '01552054256', NULL, 'reserve', '70.00', 2, 2, '2022-02-05 16:16:44', '2022-02-05 16:16:44'),
(37, '???????? ?????????? ??????????', 0, NULL, NULL, NULL, NULL, '01012348701', NULL, 'reserve', '70.00', 2, 2, '2022-02-05 16:17:19', '2022-02-05 16:17:19'),
(38, '?????????? ???????? ????????', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'reserve', '0.00', 2, 2, '2022-02-05 16:18:02', '2022-02-05 16:18:02'),
(39, '?????? ?????????? ??????????????', 0, NULL, NULL, NULL, NULL, '01550873084', NULL, 'reserve', '70.00', 2, 2, '2022-02-05 16:18:38', '2022-02-05 16:18:38'),
(40, '???????? ?????????? ?????? ??????????', 0, NULL, NULL, NULL, NULL, '01090120322', NULL, 'reserve', '70.00', 2, 2, '2022-02-05 16:19:16', '2022-02-05 16:19:16'),
(41, '?????????? ?????? ???????????? ??????????????', 0, NULL, NULL, NULL, NULL, '01014638194', NULL, 'reserve', '70.00', 2, 2, '2022-02-05 16:20:26', '2022-02-05 16:20:26'),
(42, '?????????? ???????? ????????????', 0, NULL, NULL, NULL, NULL, '01009303885', NULL, 'reserve', '70.00', 2, 2, '2022-02-05 16:21:14', '2022-02-05 16:21:14'),
(43, '?????????? ?????????? ??????????', 0, NULL, NULL, NULL, NULL, '01113684330', NULL, 'reserve', '70.00', 2, 2, '2022-02-05 16:22:16', '2022-02-05 16:22:16'),
(44, '???????? ???????? ????????', 0, NULL, NULL, NULL, NULL, '01091962392', NULL, 'reserve', '70.00', 2, 2, '2022-02-05 16:23:14', '2022-02-05 16:23:14'),
(45, '???????? ???????????? ??????????????', 0, NULL, NULL, NULL, NULL, '01006970909', NULL, 'reserve', '0.00', 2, 2, '2022-02-05 16:23:39', '2022-02-05 16:23:39'),
(46, '???????????? ???????? ????????????', 0, NULL, NULL, NULL, NULL, '01029972785', NULL, 'reserve', '0.00', 2, 2, '2022-02-05 16:24:11', '2022-02-05 16:24:11'),
(47, '???????? ???????? ????????????????', 0, NULL, NULL, NULL, NULL, '01099093044', NULL, 'reserve', '70.00', 2, 2, '2022-02-05 16:24:57', '2022-02-05 16:24:57'),
(48, '?????????? ???????? ????????', 0, NULL, NULL, NULL, NULL, '01148815992', NULL, 'reserve', '70.00', 2, NULL, '2022-02-05 16:25:58', '2022-02-05 16:25:58'),
(49, '?????????? ???????? ????????', 0, NULL, NULL, NULL, NULL, '01090962025', NULL, 'reserve', '70.00', 2, 2, '2022-02-05 16:27:07', '2022-02-05 16:27:07'),
(50, '???????? ???????? ????????', 0, NULL, NULL, NULL, NULL, '01064619930', NULL, 'reserve', '0.00', 2, NULL, '2022-02-05 16:27:48', '2022-02-05 16:27:48'),
(51, '?????????? ?????????? ????????????', 0, NULL, NULL, NULL, NULL, '01024508316', NULL, 'reserve', '0.00', 5, 6, '2022-02-05 20:46:23', '2022-02-05 20:46:23'),
(52, '?????????? ???????????? ????????????????', 0, NULL, NULL, NULL, NULL, '01068382023', NULL, 'reserve', '0.00', 6, NULL, '2022-02-06 21:00:44', '2022-02-06 21:00:44'),
(53, '???????? ?????????? ????????', 0, NULL, NULL, NULL, NULL, '01154542058', NULL, 'reserve', '0.00', 6, NULL, '2022-02-06 21:01:25', '2022-02-06 21:01:25'),
(54, '?????? ???????? ??????????', 1, NULL, NULL, NULL, NULL, '01019996656', NULL, 'reserve', '0.00', 1, 1, '2022-02-06 23:18:04', '2022-02-06 23:18:04'),
(55, '???????????? ???????????? ??????????', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'reserve', '0.00', 1, 1, '2022-02-06 23:18:39', '2022-02-06 23:18:39'),
(56, '?????????? ?????????? ??????????????', 1, NULL, NULL, NULL, NULL, '0102551635', NULL, 'reserve', '0.00', 1, 1, '2022-02-06 23:35:25', '2022-02-06 23:35:25'),
(57, '???????? ?????? ??????????????????', 1, NULL, NULL, NULL, NULL, '01013058460', NULL, 'reserve', '0.00', 1, 1, '2022-02-06 23:36:25', '2022-02-06 23:36:25'),
(58, '???????? ???????? ????????????', 1, NULL, NULL, NULL, NULL, '01062742220', NULL, 'reserve', '0.00', 4, 5, '2022-02-07 17:01:28', '2022-02-07 17:01:28'),
(59, '???????? ???????? ????????????', 1, NULL, NULL, NULL, NULL, '01062742220', NULL, 'reserve', '0.00', 4, 5, '2022-02-07 17:01:28', '2022-02-07 17:01:28'),
(60, '???????? ?????????????????? ??????????', 1, NULL, NULL, NULL, NULL, '01069883042', NULL, 'reserve', '0.00', 4, 5, '2022-02-07 17:04:37', '2022-02-07 17:04:37'),
(61, '?????????????????? ???????? ????????', 1, NULL, NULL, NULL, NULL, '01006375313', NULL, 'reserve', '0.00', 4, 5, '2022-02-07 17:05:21', '2022-02-07 17:05:21'),
(62, '?????? ???????? ????????????????', 1, NULL, NULL, NULL, NULL, '01013046092', NULL, 'reserve', '0.00', 4, 5, '2022-02-07 17:06:24', '2022-02-07 17:06:24'),
(63, '???????? ?????????????? ????????', 1, NULL, NULL, NULL, NULL, '01004302604', NULL, 'reserve', '0.00', 4, 5, '2022-02-07 17:07:45', '2022-02-07 17:07:45'),
(64, '?????? ?????? ??????????', 1, NULL, NULL, NULL, NULL, '01060022171', NULL, 'reserve', '0.00', 4, 5, '2022-02-07 17:09:26', '2022-02-07 17:09:26'),
(65, '???????? ???????? ??????????????', 0, NULL, NULL, NULL, NULL, '01004319092', NULL, 'reserve', '100.00', 4, 5, '2022-02-07 17:10:12', '2022-02-07 17:10:12'),
(66, '?????????? ???????????? ????', 0, NULL, NULL, NULL, NULL, '01067071642', NULL, 'reserve', '0.00', 4, 5, '2022-02-07 17:11:19', '2022-02-07 17:11:19'),
(67, '?????? ?????? ????????????', 0, NULL, NULL, NULL, NULL, '01008583066', NULL, 'reserve', '0.00', 4, 5, '2022-02-07 17:11:56', '2022-02-07 17:11:56'),
(68, '???????? ?????? ???????????? ????????????', 0, NULL, NULL, NULL, NULL, '01145187335', NULL, 'reserve', '0.00', 4, 5, '2022-02-07 17:13:05', '2022-02-07 17:13:05'),
(69, '?????????? ?????????? ????????', 0, NULL, NULL, NULL, NULL, '01094604427', NULL, 'reserve', '0.00', 4, 5, '2022-02-07 17:14:03', '2022-02-07 17:14:03'),
(70, '???????? ???????? ????????????', 0, NULL, NULL, NULL, NULL, '01019100402', NULL, 'reserve', '0.00', 4, 5, '2022-02-07 17:14:48', '2022-02-07 17:14:48');

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
(1, '00:00:00', '17:00:00', '00:00:00', '00:00:00', '17:00:00', '00:00:00', '00:00:00', '2022-02-01 23:26:36', '2022-02-01 23:26:36'),
(2, '16:30:00', '00:00:00', '00:00:00', '16:30:00', '00:00:00', '00:00:00', '00:00:00', '2022-02-02 00:18:08', '2022-02-02 00:18:08'),
(4, '12:00:00', '00:00:00', '00:00:00', '00:00:00', '11:00:00', '00:00:00', '00:00:00', '2022-02-02 00:18:43', '2022-02-02 00:18:43'),
(5, '00:00:00', '00:00:00', '11:00:00', '00:00:00', '00:00:00', '11:00:00', '00:00:00', '2022-02-02 00:21:00', '2022-02-02 00:21:00'),
(6, '15:30:00', '00:00:00', '00:00:00', '15:30:00', '00:00:00', '00:00:00', '00:00:00', '2022-02-02 00:21:53', '2022-02-02 00:21:53');

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
  ADD KEY `payments_student_id_foreign` (`student_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exam_attindances`
--
ALTER TABLE `exam_attindances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `expences`
--
ALTER TABLE `expences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `notes_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
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
