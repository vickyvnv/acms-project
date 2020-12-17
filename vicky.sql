-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 01, 2019 at 04:00 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vicky`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_03_28_100858_create_students_table', 2),
(4, '2019_03_28_101025_create_teacher_models_table', 2),
(5, '2019_03_29_041644_teacher_table', 3),
(6, '2019_03_29_065055_create_teacher_table', 4),
(7, '2019_03_29_065947_create_teacher_table', 5),
(8, '2019_03_29_075804_teacher_table', 6),
(9, '2019_03_29_085958_create_tcontacts_table', 7),
(10, '2019_03_29_092819_create_contacts_table', 8),
(11, '2019_03_29_102212_create_teachers_table', 9),
(12, '2019_03_29_103333_create_teaches_table', 10),
(13, '2019_03_29_105601_create_profiles_tabel', 11),
(14, '2019_03_29_145906_studentdata', 12),
(15, '2019_03_29_180101_teacherdata', 13);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `studentdata`
--

DROP TABLE IF EXISTS `studentdata`;
CREATE TABLE IF NOT EXISTS `studentdata` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jdate` date DEFAULT NULL,
  `pcno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pemail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deposite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pending` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edate` date DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `studentdata_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studentdata`
--

INSERT INTO `studentdata` (`id`, `name`, `email`, `cno`, `address`, `subject`, `jdate`, `pcno`, `pemail`, `fee`, `deposite`, `pending`, `edate`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'vicky Nehare', 'vickynehare.vn@gmail.com', '8668896481', 'wadi', 'cpp', '2019-01-01', '7350970823', 'subhashnehare@gmail.com', '50000', '40000', '10000', '2019-02-02', NULL, '2019-03-29 23:07:45', '2019-03-31 22:19:41'),
(8, 'shalu Nehare', 'deshnawork@gmail.com', '8668896481', 'wadi nagpur', 'math,physics,english', '2019-03-01', '7350970823', 'deshna123p@gmail.com', '50000', '20000', '30000', '2019-03-31', NULL, '2019-03-30 22:52:39', '2019-03-30 22:52:39');

-- --------------------------------------------------------

--
-- Table structure for table `teacherdata`
--

DROP TABLE IF EXISTS `teacherdata`;
CREATE TABLE IF NOT EXISTS `teacherdata` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experiance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `teacherdata_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacherdata`
--

INSERT INTO `teacherdata` (`id`, `name`, `email`, `cno`, `scno`, `address`, `subject`, `experiance`, `batch`, `salary`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'vicky nehare', 'vickynehare.vn@gmail.com', '8668896481', '735097083', 'austra', 'Phsics', '5yr', 'Morning 7 t0 9', '50000', NULL, '2019-03-29 13:01:58', '2019-03-30 03:46:35'),
(2, 'Achal Nehare', 'achalnehare.vn@gmail.com', '86668896481', '7350970823', 'Nagpur', 'MAth English', '5yr', 'Morning 7 t0 9', '50000', NULL, '2019-03-31 22:04:38', '2019-03-31 22:04:38'),
(3, 'Romil Stage', 'romilstage@gmail.com', '86668896481', '7350970823', 'wadi', 'math', '5yr', 'Morning 7 t0 9', '5000', NULL, '2019-03-31 22:06:08', '2019-03-31 22:11:04');

-- --------------------------------------------------------

--
-- Table structure for table `teaches`
--

DROP TABLE IF EXISTS `teaches`;
CREATE TABLE IF NOT EXISTS `teaches` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Romil Stage', 'vickynehare.vn1@gmail.com', NULL, '$2y$10$uV3hy4mZ9P7LYtsLw2n1/.USJt6qnv3pN7owDJxFu2ON7PHru2uJq', NULL, '2019-03-28 12:57:11', '2019-03-28 12:57:11'),
(3, 'vicky nehare', 'vickynehare.vn@gmail.com', NULL, '$2y$10$iaR.TiPjgP2P.itfdcxDnO9LGEQnoQYJsQ5jE40hXtOuOerI.5DtK', 'OrxXWrndso1wbQQ9a3a8yrbcNiLbz5PRd6ly5MKxa6M05o7OjWcpvRnR1GKz', '2019-03-27 23:48:57', '2019-03-27 23:48:57'),
(5, 'achal', 'deshna123p@gmail.com', NULL, '$2y$10$whBXEbfwIQBLlH9PQ4T8C.8z4Pgf/0I/8gEdqzg3Bcd1S6U3mH2Ne', NULL, '2019-03-30 23:53:29', '2019-03-30 23:53:29'),
(6, 'Prakash Jha', 'prakashjha.pj1@gmail.com', NULL, '$2y$10$rBvoTS11L6oj/R.jy3AcD.Ri8TeRpmyFxI3OUKgFzwEbK9.cfPYay', NULL, '2019-03-31 05:35:40', '2019-03-31 05:35:40'),
(7, 'hellp', 'test@gmail.com', NULL, '$2y$10$CiJY2kKGKXzzVCuF.RqvIOQmbCJT4vGlQWVH1v.h78KnGkxiAriNC', NULL, '2019-03-31 10:30:29', '2019-03-31 10:30:29'),
(8, 'hello', 'vicky@gmail.com', NULL, '$2y$10$eISNg31LocOHiRVlin5dZuVZcFJvw4FK0Pyuk1R8ken65mex5REgK', NULL, '2019-03-31 10:32:14', '2019-03-31 10:32:14'),
(9, 'asd', 'asd@gmail.com', NULL, '$2y$10$5B8hZM1RB3LPRqNLzsJjm.GRBMzCITublbqZ6dTRu8rxzWuc6gQs.', NULL, '2019-03-31 10:36:23', '2019-03-31 10:36:23'),
(10, 'Admin CSE', 'admin@gmail.com', NULL, '$2y$10$lr/M4rYx1HeHMdbQHb2JjeNNBwA.GEEqzWWYUv6iBSJf7rk7Wclh2', NULL, '2019-03-31 10:37:53', '2019-03-31 10:37:53');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
