-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2022 at 04:09 PM
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
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku_tamus`
--

CREATE TABLE `buku_tamus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saran` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawab` text COLLATE utf8mb4_unicode_ci,
  `status` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_peraturans`
--

CREATE TABLE `jenis_peraturans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inisial` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_15_174256_create_penulis_table', 1),
(6, '2021_06_08_061450_create_produk_hukum_table', 2),
(7, '2021_06_07_071951_create_jenis_peraturans_table', 3),
(8, '2019_10_25_080532_create_posts_table', 4),
(9, '2019_10_25_090336_add_new_slug_posts_table', 5),
(10, '2019_10_25_104221_create_post_tag_table', 5),
(11, '2019_10_26_050904_tambah_softdelete_ke_post', 5),
(12, '2019_10_28_085904_tambah_field_user_post', 5),
(13, '2021_06_16_040642_create_buku_tamus_table', 6);

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
-- Table structure for table `penulis`
--

CREATE TABLE `penulis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `penulis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penulis`
--

INSERT INTO `penulis` (`id`, `penulis`, `judul`, `diskripsi`, `foto`, `created_at`, `updated_at`) VALUES
(2, 'Yudho Yudhanto dan Helmi Adi Prasetyo', 'Panduan Mudah Belajar Framework Laravel', '<p>Dalam dunia pemrograman web, kita pasti mengenal teknologi pemrograman PHP yang telah mendunia. Teknik pemrograman PHP yang lazim digunakan saat ini adalah menggunakan teknik FRAMEWORK sehingga aplikasi yang dibuat dapat lebih mudah dan cepat selesai. Dari berbagai framework yang dikenal saat ini, ada beberapa yang sangat populer, seperti Zend, Symfony 2, CI, Cake, YII, Laravel, dan masih banyak lagi. Berdasarkan statistik yang dikeluarkan SITEPOINT di tahun 2017 menunjukkan bahwa dari ke 6 buah framework di atas, Laravel menduduki kepopuleran tingkat pertama dengan 25,8%. Jadi, sangat tidak keliru, jika para programmer PHP terutama pemula disarankan belajar juga menggunakan teknik framework Laravel untuk acuan pertama kalinya. Buku ini akan membahas Laravel secara lengkap dan mudah unt...</p>', 'storage/uploads/posts/1642251303download.jfif', '2022-01-15 12:55:03', '2022-01-15 12:55:03'),
(3, 'John Au-Yeung', 'Vue.js 3 By Example', '<p>Kick-start your Vue.js development career by learning the fundamentals of Vue 3 and its integration with modern web technologies such as Electron, GraphQL, Ionic, and Laravel</p>\n\n<p>Key FeaturesDownload complete source code for all Vue.js projects built throughout the bookDiscover steps to build production-ready Vue.js apps across web, mobile, and desktopBuild a compelling portfolio of web apps, including shopping cart system, booking app, slider puzzle game, real-time chat app, and moreBook Description</p>\n\n<p>With its huge ecosystem and wide adoption, Vue is one of the leading frameworks thanks to its ease of use when developing applications. However, it can get challenging for aspiring Vue.js developers to make sense of the ecosystem and build meaningful applications.</p>', 'storage/uploads/posts/1642251439download (1).jfif', '2022-01-15 12:57:19', '2022-01-15 12:57:19'),
(4, 'Rohi Abdulloh', 'Menguasai React JS Untuk Pemula', '<p>Buku ini ditujukan bagi siapa saja yang ingin menguasai React.&nbsp;Pembahasan dimulai teori dasar JavaScript, sehingga buku ini dapat diikuti oleh orang yang baru mengenal JavaScript sekalipun. Buku ini dibuat dengan skrip berwarna, harapannya akan lebih mudah diikuti dan dipahami. Setiap pembahasan disertai contoh skrip dan hasilnya. File-file latihan pada buku ini diminta melalui email penulis dengan menyertakan bukti pembelian buku. Total halaman buku ini sampai 400 lebih halaman.</p>\n\n<p>Materi yang dibahas meliputi:</p>', 'storage/uploads/posts/1642251591download (2).jfif', '2022-01-15 12:59:51', '2022-01-15 12:59:51'),
(5, 'Achmad Solichin', 'Pemrograman Web dengan PHP dan MySQL', '<p>chmad Solichin, S.Kom, M.T.I. Adalah Lulusan terbaik Teknik Informatika, Fakultas Teknologi Informasi, Universitas Budi Luhur, Jakarta (S1, 2005), Magister Teknologi Informasi, Universitas Indonesia (S2, 2010) dan Doktor Ilmu Komputer, Universitas Gadjah Mada (S3, 2017). Kegiatan sehari-hari adalah sebagai Dosen di Universitas Budi Luhur (http://www.budiluhur.ac.id). Kegiatan lain aktif sebagai programmer, web developer, system analyst, konsultan dan memberikan pelatihan di berbagai bidang komputer serta membuat tutorial-tutorial praktis di bidang komputer. Penulis memiliki situs utama di http://achmatim.net yang berisi berbagai tutorial praktis di bidang komputer serta menyediakan buku gratis komputer. Penulis dapat dihubungi melalui email di achmad.solichin@budiluhur.ac.id dan</p>', 'storage/uploads/posts/1642251685download (3).jfif', '2022-01-15 13:01:25', '2022-01-15 13:01:25'),
(6, 'Adam Saputra, S.Si', 'Buku Sakti HTML, CSS & Javascript', '<p>Memasuki zaman 4.0, kini penguasaan teknologi informasi sudah barang tentu menjadi titik tolok yang paling diperhitungkan sebagai sebuah komoditas untuk melenggang ke arena professional. Industri kreatif semakin digandrungi mengungguli lini-lini konvensional yang sudah mulai harus memperbarui sistem mereka karena imbas kemajuan industri saat ini. Semakin banyaknya minat ke industri kreatif menjadikan semakin banyak pula kemampuan-kemampuan kreatif yang harus dikuasai, dan salah satunya adalah web programming. Walaupun hari ini jasa pembuatan website sudah semakin gampang dan mudah diakses,namun apa salahnya kita semua mempelajari segala hal yang paling fundamental dari konstruksi rumah maya di dunia seberang kita, yakni internet dengan segala gelagasi jaring laba-labanya.</p>', 'storage/uploads/posts/1642251780download (4).jfif', '2022-01-15 13:03:00', '2022-01-15 13:03:00'),
(7, 'Bootstrap 4 Quick Start', 'Jacob Lett', '<p>Learning web development is a lot more challenging than it used to be. Responsive web design adds more layers of complexity to design and develop websites. In this book you will become familiar with the new cards component, setting up the new flexbox grid layout, customizing the look and feel, how to follow the mobile-first development workflow, and more!</p>\n\n<p>Web designer and developer Jacob Lett has built 100+ websites and WordPress themes. Let him show you exactly how to build responsive layouts that look great in every browser and device. He shares what you can&#39;t learn from the official documentation... the process of actual...</p>', 'storage/uploads/posts/1642251893download (5).jfif', '2022-01-15 13:04:53', '2022-01-15 13:04:53');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts_tags`
--

CREATE TABLE `posts_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `posts_id` int(11) NOT NULL,
  `tags_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk_hukums`
--

CREATE TABLE `produk_hukums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` int(11) NOT NULL,
  `status` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `abstrak` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_penetapan` date NOT NULL,
  `tanggal_diundangkan` date NOT NULL,
  `opd_id` int(11) NOT NULL,
  `jenis_peraturan_id` int(11) NOT NULL,
  `kategori_hukum_id` int(11) NOT NULL,
  `draft` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `level` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `level`, `created_at`, `updated_at`) VALUES
(2, 'Admin', 'admin@gmail.com', '2021-06-22 01:41:22', '$2y$10$F1Anz5ELJfvrqKs88/rxYONSPA0JpYTdCzCCl4bHNpVfAfXTEttJ.', NULL, 2, '2021-06-22 01:41:22', NULL),
(3, 'User', 'user@gmail.com', '2021-06-22 01:41:22', '$2y$10$X4T2n8j5u07OUUkV8sNKbuZQK4oSzAjyrRKGU0KyRpeuYBbtU8uc6', NULL, 2, '2021-06-22 01:41:22', NULL),
(5, 'ichigo', 'ichigo@gmail.com', '2021-06-23 20:29:00', '$2y$10$IGUVqYXspu/c8yPe1sy.6uVjytcnJZ0bxntmZuEwEg8JxLK0IAuPy', NULL, 1, '2021-06-23 20:28:39', '2021-06-23 20:28:39'),
(6, 'Admin Jdih', 'Superadmin@gmail.com', '2021-06-29 02:05:44', '$2y$10$hT8I8pnZ72smiwT7Rw0fbubBeOIh5SnJuD5I6kc1SajzrgpsuqGtq', NULL, 1, '2021-06-29 00:23:28', '2021-06-29 00:23:28'),
(7, 'khafid', 'khafid@gmail.com', NULL, '$2y$10$yyKM3AmoMfDVRs7aFzTRVuonxTCSC9RRSmHgUOiXkhAJ6PW1ACHIq', NULL, 2, '2022-01-15 11:53:48', '2022-01-15 11:53:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku_tamus`
--
ALTER TABLE `buku_tamus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jenis_peraturans`
--
ALTER TABLE `jenis_peraturans`
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
-- Indexes for table `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts_tags`
--
ALTER TABLE `posts_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk_hukums`
--
ALTER TABLE `produk_hukums`
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
-- AUTO_INCREMENT for table `buku_tamus`
--
ALTER TABLE `buku_tamus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_peraturans`
--
ALTER TABLE `jenis_peraturans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `penulis`
--
ALTER TABLE `penulis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts_tags`
--
ALTER TABLE `posts_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk_hukums`
--
ALTER TABLE `produk_hukums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
