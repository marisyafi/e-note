-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2017 at 10:01 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-note`
--

-- --------------------------------------------------------

--
-- Table structure for table `acaras`
--

CREATE TABLE `acaras` (
  `id_acara` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ketua` varchar(255) NOT NULL,
  `sekretaris1` varchar(255) NOT NULL,
  `sekretaris2` varchar(255) NOT NULL,
  `bendahara1` varchar(255) NOT NULL,
  `bendahara2` varchar(255) NOT NULL,
  `divisi` varchar(100) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `change_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acaras`
--

INSERT INTO `acaras` (`id_acara`, `name`, `ketua`, `sekretaris1`, `sekretaris2`, `bendahara1`, `bendahara2`, `divisi`, `created_at`, `updated_at`, `change_by`) VALUES
(1, 'it', 'it', 'it', 'it', 'it', 'it', '', '2017-12-04', '2017-12-04', 0),
(2, 'djjdjdjd', 'dkdkdkd', 'hhaha', 'hihi', 'hehe', 'hoho', '', '2017-12-05', '2017-12-05', 1),
(3, 'lala', 'lala', 'lala', 'lala', 'lala', 'lala', '', '2017-12-05', '2017-12-05', 1),
(4, 'lolo', 'lolo', 'lolo', 'lolo', 'lolo', 'lolo', 'L', '2017-12-05', '2017-12-05', 1),
(5, 'lolo', 'lolo', 'lolo', 'lolo', 'lolo', 'lolo', '1', '2017-12-05', '2017-12-05', 1),
(6, 'lolo', 'lolo', 'lolo', 'lolo', 'lolo', 'lolo', 'Logstran', '2017-12-05', '2017-12-05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `acara_divisi`
--

CREATE TABLE `acara_divisi` (
  `id_acaradivisi` int(10) NOT NULL,
  `id_acara` int(10) NOT NULL,
  `id_divisi` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_group` int(10) NOT NULL,
  `created_date` date NOT NULL,
  `change_date` date NOT NULL,
  `change_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buat_tugas`
--

CREATE TABLE `buat_tugas` (
  `id_buattugas` int(10) NOT NULL,
  `id_acara` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_divisi` int(10) NOT NULL,
  `status` int(1) NOT NULL,
  `created_date` date NOT NULL,
  `change_date` date NOT NULL,
  `change_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `divisis`
--

CREATE TABLE `divisis` (
  `id_divisi` int(10) NOT NULL,
  `nama_divisi` varchar(25) NOT NULL,
  `created_date` date NOT NULL,
  `change_date` date NOT NULL,
  `change_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisis`
--

INSERT INTO `divisis` (`id_divisi`, `nama_divisi`, `created_date`, `change_date`, `change_by`) VALUES
(0, 'konsumsi', '0000-00-00', '0000-00-00', '');

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
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notulensis`
--

CREATE TABLE `notulensis` (
  `id_notulensi` int(10) NOT NULL,
  `id_acara` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `tempat` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `moderator` varchar(255) NOT NULL,
  `topik` varchar(255) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `kesimpulan` longtext NOT NULL,
  `id_divisi` int(10) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `change_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notulensis`
--

INSERT INTO `notulensis` (`id_notulensi`, `id_acara`, `id_user`, `judul`, `tempat`, `tanggal`, `moderator`, `topik`, `jumlah`, `kesimpulan`, `id_divisi`, `created_at`, `updated_at`, `change_by`) VALUES
(1, 0, 1, 'lala', 'lala', '2017-12-21', 'lala', 'lala', 3, 'lala', 0, '2017-12-05', '2017-12-05', '1'),
(2, 0, 1, 'lili', 'lili', '2017-12-04', 'lili', 'lili', 9, 'lili', 0, '2017-12-05', '2017-12-05', '1');

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
-- Table structure for table `tbl_file`
--

CREATE TABLE `tbl_file` (
  `id_file` int(10) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `created_date` date NOT NULL,
  `change_date` date NOT NULL,
  `change_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_date` date NOT NULL,
  `change_date` date NOT NULL,
  `change_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usergroup`
--

CREATE TABLE `usergroup` (
  `id_group` int(10) NOT NULL,
  `nama_group` varchar(255) NOT NULL,
  `created_date` date NOT NULL,
  `change_date` date NOT NULL,
  `change_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'caca', 'caca@gmail.com', '$2y$10$lTFP5NLr68R2MCdYh.3XAuNQxvDF8UxcE4tWNxtrex0d.t8EYYN/q', 'utsQkAtR2j5MhARlIrCkNbHcRI7lfr4p6x7xQhzShNU9omJ8nILSUKrNTQln', '2017-11-27 06:11:36', '2017-11-27 06:11:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acaras`
--
ALTER TABLE `acaras`
  ADD PRIMARY KEY (`id_acara`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notulensis`
--
ALTER TABLE `notulensis`
  ADD PRIMARY KEY (`id_notulensi`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `acaras`
--
ALTER TABLE `acaras`
  MODIFY `id_acara` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notulensis`
--
ALTER TABLE `notulensis`
  MODIFY `id_notulensi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
