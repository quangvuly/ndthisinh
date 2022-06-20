-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2022 at 03:57 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ndthisinh`
--

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
-- Table structure for table `list_exam`
--

CREATE TABLE `list_exam` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `list_exam`
--

INSERT INTO `list_exam` (`id`, `user_id`, `subject_id`, `created_at`, `updated_at`) VALUES
(49, 2, 8, NULL, NULL),
(50, 14, 4, NULL, NULL),
(51, 7, 4, NULL, NULL),
(52, 11, 2, NULL, NULL),
(53, 3, 1, NULL, NULL),
(54, 18, 3, NULL, NULL),
(55, 14, 6, NULL, NULL),
(56, 11, 5, NULL, NULL),
(57, 15, 3, NULL, NULL),
(58, 14, 10, NULL, NULL),
(59, 6, 6, NULL, NULL),
(60, 16, 2, NULL, NULL),
(61, 6, 2, NULL, NULL),
(62, 15, 10, NULL, NULL),
(63, 4, 9, NULL, NULL),
(64, 6, 4, NULL, NULL),
(65, 18, 3, NULL, NULL),
(66, 12, 1, NULL, NULL),
(67, 11, 10, NULL, NULL),
(68, 2, 1, NULL, NULL),
(69, 11, 1, NULL, NULL),
(70, 16, 4, NULL, NULL),
(71, 6, 6, NULL, NULL),
(72, 17, 4, NULL, NULL),
(73, 14, 6, NULL, NULL),
(74, 9, 7, NULL, NULL),
(75, 4, 8, NULL, NULL),
(76, 8, 2, NULL, NULL),
(77, 13, 3, NULL, NULL),
(78, 18, 3, NULL, NULL),
(79, 15, 7, NULL, NULL),
(80, 12, 4, NULL, NULL),
(81, 8, 4, NULL, NULL),
(82, 8, 2, NULL, NULL),
(83, 10, 8, NULL, NULL),
(84, 3, 9, NULL, NULL),
(85, 4, 6, NULL, NULL),
(86, 5, 8, NULL, NULL),
(87, 6, 9, NULL, NULL),
(88, 13, 10, NULL, NULL),
(89, 14, 1, NULL, NULL),
(90, 17, 5, NULL, NULL),
(91, 16, 3, NULL, NULL),
(92, 17, 4, NULL, NULL),
(93, 17, 4, NULL, NULL),
(94, 9, 5, NULL, NULL),
(95, 5, 2, NULL, NULL),
(96, 16, 4, NULL, NULL);

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
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(17, '2022_06_14_134922_create_subjects_table', 1),
(18, '2022_06_14_135052_create_list_exam_table', 1);

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
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descript` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_exam` date NOT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `descript`, `location`, `time_exam`, `total`, `created_at`, `updated_at`) VALUES
(1, 'Cisco Certified Network Associate (CCNA)', 'Chứng chỉ CCNA là chứng chỉ nghề nghiệp độc quyền của Cisco phát hành nhằm công nhận học viên/kĩ sư đủ trình độ và năng lực về Quản trị hệ thống mạng máy tính cơ bản.', 'Phòng 201', '2022-06-18', '20', NULL, '2022-06-15 09:44:07'),
(2, 'Cisco Certified Network Professional (CCNP)', 'Chứng chỉ Cisco Certified Network Professional (CCNP) là chứng nhận kiến thức và kỹ năng cần thiết để cài đặt, cấu hình và khắc phục sự cố của hệ thống mạng hội tụ nội bộ và mạng diện rộng với số lượng thiết bị đầu cuối từ 100-500 hoặc nhiều hơn.', 'Phòng 202', '2022-06-19', '20', NULL, NULL),
(3, 'Microsoft Certified: Azure Fundamentals (AZ-900)', 'AZ-900 là chứng chỉ của Microsoft về các khái niệm Cloud và các dịch vụ của Azure.', 'Phòng 301', '2022-07-10', '15', NULL, NULL),
(4, 'Microsoft Diploma', 'Chứng chỉ Microsoft giúp chứng minh khả năng cũng như mức độ hiểu biết của từng các nhân đối với công nghệ Microsoft, đồng thời phản ánh được từng vai trò công việc và trách nhiệm cụ thể của cá nhân đó thông qua chứng chỉ mà họ đạt được.', 'Phòng 101', '2022-08-10', '50', NULL, NULL),
(5, 'Microsoft Certified Azure Developer Associate AZ-203', 'Khóa học Microsoft Certified Azure Developer Associate (AZ-203) là phù hợp nhất với phiên bản 2018 của chứng chỉ Azure Developer Associate, là sự kết hợp giữa AZ-200 và AZ-201 do Microsoft công bố.', 'Phòng 302', '2022-07-20', '15', NULL, NULL),
(6, 'AWS Certification', 'AWS Certification là bộ chứng chỉ được câp bởi Amazon đánh giá mức độ hiểu biết về Cloud (điện toán đám mây), cụ thể là các dịch vụ của Amazon Web Services', 'Phòng 501', '2022-07-12', '30', NULL, NULL),
(7, 'VCDX (VMware Certified Design Expert)', 'Các chứng chỉ của VMware được phân loại ở nhiều cấp độ khác nhau dành cho những chuyên gia CNTT ở các trình độ kiến thức khác nhau, bao gồm: VCDX (VMware Certified Design Expert), VCAP (VMware Certified Advanced Professional) và VCP (VMware Certified Professional), và cấp độ mới được VMware giới thiệu - VCA (VMware Certified Associate).', 'Phòng 602', '2022-08-20', '20', NULL, NULL),
(8, 'VCAP (VMware Certified Advanced Professional)', 'Các chứng chỉ của VMware được phân loại ở nhiều cấp độ khác nhau dành cho những chuyên gia CNTT ở các trình độ kiến thức khác nhau, bao gồm: VCDX (VMware Certified Design Expert), VCAP (VMware Certified Advanced Professional) và VCP (VMware Certified Professional), và cấp độ mới được VMware giới thiệu - VCA (VMware Certified Associate).', 'Phòng 603', '2022-08-21', '20', NULL, NULL),
(9, 'VCP (VMware Certified Professional)', 'Các chứng chỉ của VMware được phân loại ở nhiều cấp độ khác nhau dành cho những chuyên gia CNTT ở các trình độ kiến thức khác nhau, bao gồm: VCDX (VMware Certified Design Expert), VCAP (VMware Certified Advanced Professional) và VCP (VMware Certified Professional), và cấp độ mới được VMware giới thiệu - VCA (VMware Certified Associate).', 'Phòng 604', '2022-08-22', '20', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idcard` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `idcard_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `email_verified_at`, `password`, `idcard`, `birthday`, `idcard_img`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@pttrieu.com', NULL, '$2y$10$n4OIFVNOHxGSoxOUw35wfOqv5xTOr.qdbb/eFIMSmLzI.YGTOj1N6', '123456789', '1990-01-01', 'url_img', NULL, NULL, NULL),
(2, 'User', '1', 'User1@example.com', NULL, '$2y$10$n4OIFVNOHxGSoxOUw35wfOqv5xTOr.qdbb/eFIMSmLzI.YGTOj1N6', '1234567891', '1990-01-01', 'url_img', NULL, NULL, NULL),
(3, 'User', '2', 'User2@example.com', NULL, '$2y$10$n4OIFVNOHxGSoxOUw35wfOqv5xTOr.qdbb/eFIMSmLzI.YGTOj1N6', '1234567892', '1990-01-02', 'url_img', NULL, NULL, NULL),
(4, 'User', '3', 'User3@example.com', NULL, '$2y$10$n4OIFVNOHxGSoxOUw35wfOqv5xTOr.qdbb/eFIMSmLzI.YGTOj1N6', '1234567893', '1990-01-03', 'url_img', NULL, NULL, NULL),
(5, 'User', '4', 'User4@example.com', NULL, '$2y$10$n4OIFVNOHxGSoxOUw35wfOqv5xTOr.qdbb/eFIMSmLzI.YGTOj1N6', '1234567894', '1990-01-04', 'url_img', NULL, NULL, NULL),
(6, 'User', '5', 'User5@example.com', NULL, '$2y$10$n4OIFVNOHxGSoxOUw35wfOqv5xTOr.qdbb/eFIMSmLzI.YGTOj1N6', '1234567895', '1990-01-05', 'url_img', NULL, NULL, NULL),
(7, 'User', '6', 'User6@example.com', NULL, '$2y$10$n4OIFVNOHxGSoxOUw35wfOqv5xTOr.qdbb/eFIMSmLzI.YGTOj1N6', '1234567896', '1990-01-06', 'url_img', NULL, NULL, NULL),
(8, 'User', '7', 'User7@example.com', NULL, '$2y$10$n4OIFVNOHxGSoxOUw35wfOqv5xTOr.qdbb/eFIMSmLzI.YGTOj1N6', '1234567897', '1990-01-07', 'url_img', NULL, NULL, NULL),
(9, 'User', '8', 'User8@example.com', NULL, '$2y$10$n4OIFVNOHxGSoxOUw35wfOqv5xTOr.qdbb/eFIMSmLzI.YGTOj1N6', '1234567898', '1990-01-08', 'url_img', NULL, NULL, NULL),
(10, 'User', '9', 'User9@example.com', NULL, '$2y$10$n4OIFVNOHxGSoxOUw35wfOqv5xTOr.qdbb/eFIMSmLzI.YGTOj1N6', '1234567899', '1990-01-09', 'url_img', NULL, NULL, NULL),
(11, 'User', '10', 'User10@example.com', NULL, '$2y$10$n4OIFVNOHxGSoxOUw35wfOqv5xTOr.qdbb/eFIMSmLzI.YGTOj1N6', '12345678910', '1990-01-10', 'url_img', NULL, NULL, NULL),
(12, 'User', '11', 'User11@example.com', NULL, '$2y$10$n4OIFVNOHxGSoxOUw35wfOqv5xTOr.qdbb/eFIMSmLzI.YGTOj1N6', '12345678911', '1990-01-11', 'url_img', NULL, NULL, NULL),
(13, 'User', '12', 'User12@example.com', NULL, '$2y$10$n4OIFVNOHxGSoxOUw35wfOqv5xTOr.qdbb/eFIMSmLzI.YGTOj1N6', '12345678912', '1990-01-12', 'url_img', NULL, NULL, NULL),
(14, 'User', '13', 'User13@example.com', NULL, '$2y$10$n4OIFVNOHxGSoxOUw35wfOqv5xTOr.qdbb/eFIMSmLzI.YGTOj1N6', '12345678913', '1990-01-13', 'url_img', NULL, NULL, NULL),
(15, 'User', '14', 'User14@example.com', NULL, '$2y$10$n4OIFVNOHxGSoxOUw35wfOqv5xTOr.qdbb/eFIMSmLzI.YGTOj1N6', '12345678914', '1990-01-14', 'url_img', NULL, NULL, NULL),
(16, 'User', '15', 'User15@example.com', NULL, '$2y$10$n4OIFVNOHxGSoxOUw35wfOqv5xTOr.qdbb/eFIMSmLzI.YGTOj1N6', '12345678915', '1990-01-15', 'url_img', NULL, NULL, NULL),
(17, 'User', '16', 'User16@example.com', NULL, '$2y$10$n4OIFVNOHxGSoxOUw35wfOqv5xTOr.qdbb/eFIMSmLzI.YGTOj1N6', '12345678916', '1990-01-16', 'url_img', NULL, NULL, NULL),
(18, 'User', '17', 'User17@example.com', NULL, '$2y$10$n4OIFVNOHxGSoxOUw35wfOqv5xTOr.qdbb/eFIMSmLzI.YGTOj1N6', '12345678917', '1990-01-17', 'url_img', NULL, NULL, NULL),
(19, 'User', '18', 'User18@example.com', NULL, '$2y$10$n4OIFVNOHxGSoxOUw35wfOqv5xTOr.qdbb/eFIMSmLzI.YGTOj1N6', '12345678918', '1990-01-18', 'url_img', NULL, NULL, NULL),
(20, 'User', '19', 'User19@example.com', NULL, '$2y$10$n4OIFVNOHxGSoxOUw35wfOqv5xTOr.qdbb/eFIMSmLzI.YGTOj1N6', '12345678919', '1990-01-19', 'url_img', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `list_exam`
--
ALTER TABLE `list_exam`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `list_exam`
--
ALTER TABLE `list_exam`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
