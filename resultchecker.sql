-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2020 at 09:53 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resultchecker`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_is_admin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `user_id`, `user_name`, `user_is_admin`, `user_email`, `address`, `phone`, `city`, `date_of_birth`, `department`, `qualification`, `experience`, `created_at`, `updated_at`) VALUES
(1, '3', 'Admin Project', 'admin', 'test@admin.com', 'Abuja', '1234567890', 'Abuja', '23/03/2001', 'Art', 'B.Sc.', '3 years', '2020-08-10 10:52:36', '2020-08-10 10:52:36'),
(2, '4', 'admin the second', 'admin', 'test@admin2.com', 'Lagos', '0987654321', 'Lagos', '67/21/2002', 'Commercial', 'Masters', '5 years', '2020-08-10 10:59:13', '2020-08-10 10:59:13'),
(3, '5', 'admin the third', 'admin', 'test@admin3.com', 'Aberdeen', '56789012345', 'Luxemborg', '16/09/2001', 'Science', 'B.Sc.', '23 years', '2020-08-10 11:04:33', '2020-08-10 11:04:33');

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
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2020_06_11_133920_create_superadmins_table', 6),
(13, '2020_08_01_144014_create_students_table', 8),
(15, '2020_07_05_134443_create_admins_table', 9),
(17, '2020_08_14_142446_create_results_table', 10);

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
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_arm` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `term` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `filename`, `type`, `size`, `class`, `class_arm`, `term`, `session`, `created_at`, `updated_at`) VALUES
(6, 'dummy3', 'pdf', '13264', 'jss2', 'E', 'first', '2028/2029', '2020-08-21 16:01:04', '2020-08-21 16:01:04'),
(7, 'dummy2', 'pdf', '13264', 'jss2', 'E', 'first', '2028/2029', '2020-08-21 16:01:04', '2020-08-21 16:01:04'),
(8, 'dummy 1', 'pdf', '13264', 'jss2', 'E', 'first', '2028/2029', '2020-08-21 16:01:04', '2020-08-21 16:01:04'),
(9, 'masonjo_bootstrap', 'pdf', '68429', 'ss1', 'E', 'first', '2028/2029', '2020-08-21 16:02:45', '2020-08-21 16:02:45'),
(10, 'david_object-oriented-design', 'pdf', '63840', 'ss1', 'E', 'first', '2028/2029', '2020-08-21 16:02:45', '2020-08-21 16:02:45'),
(11, 'i3quest_jquery', 'pdf', '33598', 'ss1', 'E', 'first', '2028/2029', '2020-08-21 16:02:45', '2020-08-21 16:02:45'),
(12, 'sanoj_web-programming', 'pdf', '52663', 'ss1', 'E', 'first', '2028/2029', '2020-08-21 16:02:45', '2020-08-21 16:02:45'),
(13, 'davechild_javascript', 'pdf', '48581', 'ss1', 'E', 'first', '2028/2029', '2020-08-21 16:02:45', '2020-08-21 16:02:45'),
(14, 'davechild_python', 'pdf', '44239', 'ss1', 'E', 'first', '2028/2029', '2020-08-21 16:02:45', '2020-08-21 16:02:45'),
(15, 'cudacoder_laravel-5-8-artisan', 'pdf', '45525', 'ss1', 'E', 'first', '2028/2029', '2020-08-21 16:02:46', '2020-08-21 16:02:46'),
(16, 'davechild_mysql', 'pdf', '56955', 'ss1', 'E', 'first', '2028/2029', '2020-08-21 16:02:46', '2020-08-21 16:02:46'),
(17, 'davechild_php cheatcode', 'pdf', '58930', 'ss1', 'E', 'first', '2028/2029', '2020-08-21 16:02:46', '2020-08-21 16:02:46'),
(19, 'davechild_mysql_1598777952.pdf', 'pdf', '56955', 'ss2', 'A', 'third', '2028/2029', '2020-08-30 07:59:13', '2020-08-30 07:59:13');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_arm` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `term` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fullname`, `class`, `age`, `sex`, `class_arm`, `term`, `session`, `student_id`, `created_at`, `updated_at`) VALUES
(1, 'Test Student', 'ss2', '14', 'female', 'A', 'third', '2019/2020', '123456789WX', '2020-08-07 20:35:02', '2020-08-07 20:35:02'),
(2, 'Betty Butter', 'ss3', '15', 'female', 'D', 'second', '2019/2020', '123456789nd', '2020-08-14 09:26:58', '2020-08-14 09:26:58'),
(3, 'john doe', 'jss3', '23', 'male', 'B', 'first', '2017/2018', '54354354hh', '2020-08-14 09:38:17', '2020-08-14 09:38:17'),
(5, 'joy', 'jss1', '12`', 'female', 'B', 'first', '2028/2029', '123456gb', '2020-08-14 10:07:39', '2020-08-14 10:07:39'),
(6, 'Deji Makanaki', 'jss2', '40', 'male', 'E', 'second', '2019/2020', '45678234fg', '2020-08-14 10:11:55', '2020-08-14 10:11:55'),
(7, 'yusuf', 'jss2', '14', 'female', 'C', 'second', '2017/2018', '453543545hg', '2020-08-14 10:17:12', '2020-08-14 10:17:12'),
(9, 'tayo', 'jss1', '15', 'male', 'C', 'first', '2027/2028', '234144gh', '2020-08-14 10:26:48', '2020-08-14 10:26:48'),
(10, 'yemisi', 'jss3', '21', 'male', 'C', 'second', '2028/2029', '31523535jh', '2020-08-14 10:28:25', '2020-08-14 10:28:25'),
(11, 'ade', 'jss3', '23', 'male', 'D', 'second', '2026/2027', '2141214ff', '2020-08-14 10:30:25', '2020-08-14 10:30:25'),
(12, 'yaqub', 'jss3', '14', 'male', 'B', 'second', '2023/2024', '1411214ff', '2020-08-14 10:32:14', '2020-08-14 10:32:14'),
(13, 'ib olowo', 'ss3', '14', 'male', 'D', 'second', '2019/2020', '7834563gf', '2020-08-14 10:39:36', '2020-08-14 10:39:36'),
(14, 'Rob Watson', 'ss1', '16', 'male', 'B', 'first', '2020/2021', '4562348fg', '2020-08-14 10:41:30', '2020-08-14 10:41:30'),
(18, 'Eddie Howe', 'jss3', '23', 'male', 'D', 'first', '2020/2021', '1234567ff', '2020-08-14 11:44:32', '2020-08-14 11:44:32'),
(19, 'Kim Porter', 'ss2', '16', 'female', 'E', 'second', '2019/2020', '98765er', '2020-08-14 11:46:26', '2020-08-14 11:46:26'),
(20, 'Harry Winks', 'jss2', '17', 'male', 'D', 'third', '2020/2021', '9876542dr', '2020-08-14 12:07:06', '2020-08-14 12:07:06'),
(21, 'Tion Wayne', 'jss1', '54', 'male', 'A', 'first', '2020/2021', '65432345hy', '2020-08-14 12:08:47', '2020-08-14 12:08:47'),
(22, 'Sanwo Eko', 'ss1', '34', 'male', 'C', 'third', '2022/2023', '234578hm', '2020-08-14 12:12:34', '2020-08-14 12:12:34');

-- --------------------------------------------------------

--
-- Table structure for table `superadmins`
--

CREATE TABLE `superadmins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_founded` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_classroom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `superadmins`
--

INSERT INTO `superadmins` (`id`, `fullname`, `user_id`, `school_name`, `school_logo`, `school_address`, `date_founded`, `no_of_classroom`, `created_at`, `updated_at`) VALUES
(1, 'Deji', '1', 'Marlians College', '486_1595327464.jpg', 'ikeja', '12/06/2010', '45', '2020-07-21 09:31:05', '2020-07-21 09:31:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test Superadmin', 'superadmin@test.com', NULL, 'super_admin', '$2y$10$ue/1bEJd/NiSjlFL8zM1fuvkbmcdr.Q3nC.AMWKiMV1Yt30Twfsye', 'A0rUAXhHhfwHmTG3o9MePXwOeSzGWzWU0GmfwPRIbu3cjC929cW3gW6SNGip', '2020-07-07 10:23:08', '2020-07-07 10:23:08'),
(3, 'Admin Project', 'test@admin.com', NULL, 'admin', '$2y$10$5MKnTXI.r2V8mrlOJsISluqRvtngkcA0kMTDkTXVExf8WJlp4M7ge', 'Hl4lxMYfvCY0bwT3Gj2JtluBSUK97zFFQLSh9HjjxvmD7wBnrY5lP7Edlwpb', '2020-07-21 15:35:03', '2020-07-21 15:35:03'),
(4, 'admin the second', 'test@admin2.com', NULL, 'admin', '$2y$10$4j78KmKE5ULWMn/KsrQsbO4Ilrsb.aGrWkpypqHJdUwN5nBNMb6uu', NULL, '2020-08-08 12:34:17', '2020-08-08 12:34:17'),
(5, 'admin the third', 'test@admin3.com', NULL, 'admin', '$2y$10$rvnBZ8arGeqKiBVg0tsyOehzv2TIcTA9mVYmcFwJcmO3A5vSY47Sy', NULL, '2020-08-08 12:36:02', '2020-08-08 12:36:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
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
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmins`
--
ALTER TABLE `superadmins`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `superadmins`
--
ALTER TABLE `superadmins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
