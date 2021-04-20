-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 12:15 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sohanthink`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutbanners`
--

CREATE TABLE `aboutbanners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'banner.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutbanners`
--

INSERT INTO `aboutbanners` (`id`, `description`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Finally, I always go to sea as a sailor, because of the wholesome exercise and pure air of the fore-castle deck. For as in this world, head winds are far more prevalent than winds from astern.', '1.jpg', NULL, '2021-04-20 00:38:42');

-- --------------------------------------------------------

--
-- Table structure for table `aboutbios`
--

CREATE TABLE `aboutbios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'bio.jpg',
  `description1` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description2` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutbios`
--

INSERT INTO `aboutbios` (`id`, `photo`, `description1`, `description2`, `created_at`, `updated_at`) VALUES
(1, '1.png', 'Hello there! This is Husein Ali, a bestselling author. He was born, raised, and still lives in Jackson, Mississippi. A former teen rapper, he holds a BFA in creative writing from Belhaven University. His award-winning, acclaimed debut novel, The Hate U Give, is a #1 New York Times bestseller and major motion picture from Fox 2000, starring Amandla Stenberg and directed by George Tillman, Jr. His second novel, On the Come Up, is a #1 NYT bestseller as well, and a film is in development with Paramount Pictures with Angie acting as a producer. In 2020, Angie released Find Your Voice: A Guided Journal to Writing Your Truth as a tool to help aspiring writers tell their stories. In 2021, Angie will return to the world of Garden Heights with Concrete Rose, a prequel to The Hate U Give that focuses on seventeen-year-old Maverick Carter.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium placeat itaque iusto asperiores doloribus dolor tenetur, rem commodi molestias! Recusandae dolorem ullam commodi ea praesentium dolorum officia, officiis sequi eos? Quisquam ducimus nemo quae, accusantium sunt soluta expedita vel saepe asperiores laborum delectus blanditiis rem ea vero nesciunt voluptas fuga labore. Atque, rerum minima! Illo, et! Optio porro nam cum? Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus quam blanditiis rem! Explicabo ullam saepe, veniam nesciunt iure veritatis facere voluptatibus magnam dolores quisquam aut molestiae dolore quos nobis autem nam atque sed ratione provident debitis deleniti. Tempore cumque quas accusamus odit adipisci libero eligendi eum voluptatum! Incidunt debitis accusamus unde nesciunt! Commodi ex dolor alias explicabo velit iste ipsa tempore ratione deserunt similique eius maiores voluptas eaque, fuga eos, earum non? Magnam facilis recusandae in culpa sapiente! Laboriosam, ipsum?', NULL, '2021-04-19 23:44:24');

-- --------------------------------------------------------

--
-- Table structure for table `bestsellers`
--

CREATE TABLE `bestsellers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'book.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bestsellers`
--

INSERT INTO `bestsellers` (`id`, `book_name`, `book_photo`, `created_at`, `updated_at`) VALUES
(6, 'Gemini', '6.png', NULL, '2021-04-19 23:49:05'),
(7, 'Art Design', '7.jpg', NULL, '2021-04-19 23:49:44'),
(8, 'Cover Design', '8.jpg', NULL, '2021-04-19 23:50:10'),
(9, 'Annual Report', '9.jpg', NULL, '2021-04-19 23:50:30');

-- --------------------------------------------------------

--
-- Table structure for table `booklists`
--

CREATE TABLE `booklists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_list_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_list_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'book_list.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booklists`
--

INSERT INTO `booklists` (`id`, `book_list_name`, `book_list_photo`, `created_at`, `updated_at`) VALUES
(13, 'Art Design', 'book_pdf/Cy8LLAsB8878uVB9Jo2ma2DSVdgflVFpE4E5dwTv.pdf', NULL, '2021-04-19 11:48:33'),
(14, 'mehedi', 'book_pdf/kUhz5u8kpBXTzvpFpElXPbfigxuDCkiPOtMsD20I.png', NULL, '2021-04-19 23:56:39');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'book.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_name`, `book_photo`, `created_at`, `updated_at`) VALUES
(14, 'Aquarius', '14.jpg', NULL, '2021-04-18 23:41:15'),
(15, 'Capricorn', '15.png', NULL, '2021-04-18 23:43:06'),
(16, 'Gemini', '16.png', NULL, '2021-04-18 23:46:16'),
(17, 'mehedi', '17.png', NULL, '2021-04-19 07:49:09'),
(18, 'Aquarius', '18.png', NULL, '2021-04-19 07:49:24');

-- --------------------------------------------------------

--
-- Table structure for table `dreams`
--

CREATE TABLE `dreams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'book.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dreams`
--

INSERT INTO `dreams` (`id`, `book_photo`, `created_at`, `updated_at`) VALUES
(1, '1.jpg', NULL, '2021-04-20 02:56:05');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event`, `created_at`, `updated_at`) VALUES
(1, 'eevent data', NULL, '2021-04-19 12:29:53');

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
-- Table structure for table `homebannerimgs`
--

CREATE TABLE `homebannerimgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homebannerimgs`
--

INSERT INTO `homebannerimgs` (`id`, `img`, `created_at`, `updated_at`) VALUES
(13, '13.png', NULL, '2021-04-19 10:44:03'),
(15, '15.png', NULL, '2021-04-19 23:17:40');

-- --------------------------------------------------------

--
-- Table structure for table `homebanners`
--

CREATE TABLE `homebanners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homebanners`
--

INSERT INTO `homebanners` (`id`, `first_heading`, `second_heading`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Perfect', 'Landing Page For Your Book!', 'Finally, I always go to sea as a sailor, because of the wholesome exercise and pure air of the fore-castle deck. For as in this world, head winds are far more prevalent than winds from astern.', '2021-03-31 19:49:04', '2021-04-19 23:12:49');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_18_193823_create_homebanners_table', 2),
(5, '2021_04_18_194456_create_homebannerimgs_table', 3),
(7, '2021_04_19_043200_create_books_table', 4),
(9, '2021_04_19_055700_create_booklists_table', 5),
(10, '2021_04_19_114040_create_socials_table', 6),
(11, '2021_04_19_133827_create_bestsellers_table', 7),
(12, '2021_04_19_173829_create_dreams_table', 8),
(13, '2021_04_19_181519_create_events_table', 9),
(14, '2021_04_19_185934_create_aboutbanners_table', 10),
(15, '2021_04_19_190433_create_aboutbios_table', 11),
(16, '2014_10_12_000000_create_users_table', 12);

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
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `social_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_link` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `social_icon`, `social_link`, `created_at`, `updated_at`) VALUES
(2, 'fab fa-facebook-f', '#', NULL, NULL),
(3, 'fab fa-twitter', 'twitter.com', NULL, NULL);

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
  `profile_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `profile_photo`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$NiWEQ5J/J5MfboTsrFSglebqilpQ0xLjuh2PRk0WbqGJfpGy7XCmO', NULL, 'default.png', '2021-04-20 03:30:06', '2021-04-20 03:30:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutbanners`
--
ALTER TABLE `aboutbanners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutbios`
--
ALTER TABLE `aboutbios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bestsellers`
--
ALTER TABLE `bestsellers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booklists`
--
ALTER TABLE `booklists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dreams`
--
ALTER TABLE `dreams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homebannerimgs`
--
ALTER TABLE `homebannerimgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homebanners`
--
ALTER TABLE `homebanners`
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
-- Indexes for table `socials`
--
ALTER TABLE `socials`
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
-- AUTO_INCREMENT for table `aboutbanners`
--
ALTER TABLE `aboutbanners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aboutbios`
--
ALTER TABLE `aboutbios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bestsellers`
--
ALTER TABLE `bestsellers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `booklists`
--
ALTER TABLE `booklists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `dreams`
--
ALTER TABLE `dreams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homebannerimgs`
--
ALTER TABLE `homebannerimgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `homebanners`
--
ALTER TABLE `homebanners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
