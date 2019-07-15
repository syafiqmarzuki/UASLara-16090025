-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2019 at 06:00 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webpersegal`
--

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci,
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `judul`, `isi_konten`, `foto`, `id_kategori`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Hasil Pertandinga Persekat Vs Persegal dengan skor 2-1 untuk Persegal', 'Pada Hari minggu tgl 21 Juni 2019 di Stadion Tri Sanja, Slawi untuk mempersiapkan liga 3 2019 . Pada pertandingan ini membuat antusias dari warga kabupaten tegal dan kota tegal . AKhirnya skornya  2- 1 kemenangan Persegal', 'berita/fPv7I3kDcvmHHxZz97upMlcp1yeTRtJApkneiKh5.jpeg', 3, 'hasil-pertandinga-persekat-vs-persegal-dengan-skor-2-1-untuk-persegal', '0', '2019-07-14 19:17:44', '2019-07-14 19:41:11'),
(2, 'Hasil Pertandingan Persegal vs Persab dengan akhir skor 0-0', 'Pada Hari minggu , tgl 28 juni 2019 di Stadion Yos Sudarso , Tegal . Pada pertandingan ini dihadiri oleh pak walikota dengan wakilnya . Fulltime dengan skor 0-0 tidak ada gol sama sekali.', 'berita/cWSBh1sc0us0RZO0PRQxA11bHPgvcQcoKWkztnLi.jpeg', 3, 'hasil-pertandingan-persegal-vs-persab-dengan-akhir-skor-0-0', '0', '2019-07-14 19:21:06', '2019-07-14 19:41:14'),
(3, 'Launching Jersey Persegal 2019', 'Pada hari sabtu , tgl 06 juli 2019 malam hari di pendopo balikota tegal . Pada acara ini dihadiri oleh wakapolres,pengusaha ,pak lurah seluruh kota tegal . Sponsori Persegal manokrukun dan Bank Jateng .', 'berita/GrbmwYqFJx2m0aeNueQ3Y3R5hxnHbNgijZ9Igk1w.jpeg', 4, 'launching-jersey-persegal-2019', '0', '2019-07-14 19:23:17', '2019-07-14 19:41:17'),
(4, 'Latihan Persegal untuk arahan taktik', 'Pada sore hari persegal sering melakukan latihan rutin di yos sudasro . pada gambaran tersebut cakso sebagai coach pelatih persegal memberikan arahan kepada pemainnya.', 'berita/FNtGAWzBXvjNjzg71SOpSoIkDWSD8aIklyvns8WL.jpeg', 3, 'latihan-persegal-untuk-arahan-taktik', '0', '2019-07-14 19:25:11', '2019-07-14 19:41:20'),
(5, 'Hasil Pertandingan Persip v Persegal dengan skor akhir 0-0', 'Pada hari selasa tgl 9 juli 2019 di stadion jendral hoegeng , pekalongan . Persegal melakoni persabatan dengan Persip Pekalongan di Stadion Jendral Hoegeng . Fulltime 0-0 . Persegal mengalami imbang 2X dalam melakukan ujicoba', 'berita/KYncnsATN6YMGsncxWCMqB6JIDSw6buzc35I4KRZ.jpeg', 3, 'hasil-pertandingan-persip-v-persegal-dengan-skor-akhir-0-0', '0', '2019-07-14 19:28:36', '2019-07-14 19:41:24'),
(6, 'Hasil Pertandingan Persekat vs Persegal 2-1', 'Pada Hari Minggu , 23 juni 2019 di Stadion tri Sanja Slawi . Dengan Skor 2-1 kemenangan untuk Persegal , awal yang baik', 'berita/DrLjrpqecLR2ZMRNvQLMi9Ro3eTXxYQr0so6KMDS.jpeg', 9, 'hasil-pertandingan-persekat-vs-persegal-2-1', '0', '2019-07-14 19:45:03', '2019-07-14 20:13:01'),
(7, 'Hasil Pertandingan Persip v Persegal dengan skor 0-0', 'Pada hari selasa , 9 juli 2019 , Persegal tandang ke Pekalongan untuk uji coba melawan Persip Pekalongan di Stadion Jendral Hoegeng . Skor Akhir 0-0 .', 'berita/tvmEX9l48SMJRIgXjtddC2LIBkGAaVrmEql3FTiv.jpeg', 9, 'hasil-pertandingan-persip-v-persegal-dengan-skor-0-0', '1', '2019-07-14 19:46:37', '2019-07-14 19:46:37'),
(8, 'Launching Jersey Pemain Persegal 2019', 'Pada hari sabtu malam tgl , 06 Juli 2019 persegal melakukan launching jersey pemain di pendopo .', 'berita/gj6wMis14PWiabMdbuo0UK3G8JMdljqL9QKpT5MY.jpeg', 10, 'launching-jersey-pemain-persegal-2019', '1', '2019-07-14 19:47:39', '2019-07-14 20:12:48'),
(9, 'Hasil Pertandingan Persegal v Persab', 'Pada hari minggu 28juni 2019 , persegal kedatangan lawan Persab Brebes untuk melakukan uji coba dengan Persegal . dengan akhir 0-0', 'berita/c8iBh0VCnaI8uxz32vzvjH4sMmrHSMiSB9IJpZ7x.jpeg', 9, 'hasil-pertandingan-persegal-v-persab', '1', '2019-07-14 19:49:53', '2019-07-14 19:49:53'),
(10, 'Latihan Persegal pada siang hari', 'Latihan ini di stadion yos sudarso', 'berita/7vM1z6KwSP1rOZHQHcLSdkyxBK8cfmOG467xdvOm.jpeg', 10, 'latihan-persegal-pada-siang-hari', '1', '2019-07-14 20:12:38', '2019-07-14 20:12:38'),
(11, 'Percobbann saja ini', 'percobaan saja', 'berita/ql6oe8HeAf2q5kMWtIG9LXA5H6jNJ8uoyHCB3qRM.jpeg', 11, 'percobbann-saja', '1', '2019-07-14 20:23:20', '2019-07-14 20:23:35');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Liga 3 jateng 2019', '0', '2019-07-14 19:08:49', '2019-07-14 19:09:38'),
(2, 'Piala Soeratin', '0', '2019-07-14 19:08:57', '2019-07-14 19:10:18'),
(3, 'Friendly Match', '0', '2019-07-14 19:09:13', '2019-07-14 19:40:13'),
(4, 'Liga 3 Jateng 2019', '0', '2019-07-14 19:15:08', '2019-07-14 19:40:53'),
(5, 'Piala Soeratin', '0', '2019-07-14 19:15:19', '2019-07-14 19:40:57'),
(6, 'csdcddcvdfv', '0', '2019-07-14 19:38:16', '2019-07-14 19:41:01'),
(7, 'Liga 3', '0', '2019-07-14 19:42:49', '2019-07-14 20:22:37'),
(8, 'Piala Soeratin', '1', '2019-07-14 19:43:01', '2019-07-14 19:43:01'),
(9, 'Fiendly Match', '1', '2019-07-14 19:43:26', '2019-07-14 19:43:26'),
(10, 'Berita Tentang', '1', '2019-07-14 20:10:56', '2019-07-14 20:11:10'),
(11, 'Hiburan', '1', '2019-07-14 20:22:26', '2019-07-14 20:22:26');

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
(3, '2019_07_07_041619_create_categories_table', 1),
(4, '2019_07_07_041745_create_beritas_table', 1),
(5, '2019_07_07_041804_create_squads_table', 1);

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
-- Table structure for table `squads`
--

CREATE TABLE `squads` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_punggung` int(11) NOT NULL,
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` date NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `squads`
--

INSERT INTO `squads` (`id`, `nama`, `posisi`, `nomor_punggung`, `id_kategori`, `foto`, `tgl_lahir`, `status`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Bayu Maulana', 'Gelandang', 5, 1, 'squad/32SeZELlpyPJcJ1snLRZjcwnktBYfXe8LpbcEI9W.jpeg', '2000-01-01', '0', 'bayu-maulana', '2019-07-14 19:29:47', '2019-07-14 19:41:30'),
(2, 'Munir', 'Bek', 5, 10, 'squad/Uo9RSVLQmTFohyILXhQdQQQrmbkV43WDntnE9XPC.jpeg', '2000-12-01', '1', 'munir', '2019-07-14 19:50:32', '2019-07-14 20:17:59'),
(3, 'Maulana', 'Kiper', 99, 9, 'squad/H8zJSrgjbuDCG6m7SODkMzHGNdz9CZELQLmxAZMD.jpeg', '1999-08-21', '1', 'maulana', '2019-07-14 19:51:20', '2019-07-14 20:18:28'),
(4, 'Syafiq Marzuki', 'Striker', 33, 8, 'squad/cnrPZDpJlweVF92PnbwQE9ErqNYlHWfDBlfOHSN4.jpeg', '1998-08-21', '1', 'syafiq-marzuki', '2019-07-14 20:24:28', '2019-07-14 20:24:42');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'syafiqmarzuki', 'admin@gmail.com', NULL, '$2y$10$ausBDI3fm3DrZgpa4xsO2em2Lde9n7m0SpMiVPRlbdbMROHPChqRi', NULL, '2019-07-14 19:08:06', '2019-07-14 19:08:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `beritas_id_kategori_foreign` (`id_kategori`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `squads`
--
ALTER TABLE `squads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `squads_id_kategori_foreign` (`id_kategori`);

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
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `squads`
--
ALTER TABLE `squads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `beritas`
--
ALTER TABLE `beritas`
  ADD CONSTRAINT `beritas_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `squads`
--
ALTER TABLE `squads`
  ADD CONSTRAINT `squads_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
