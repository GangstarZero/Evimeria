-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2024 at 08:34 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evimeria`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply_job`
--

CREATE TABLE `apply_job` (
  `id` int(11) NOT NULL,
  `jobId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `phoneNumber` varchar(100) NOT NULL,
  `salaryExpectation` varchar(100) NOT NULL,
  `cv` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apply_job`
--

INSERT INTO `apply_job` (`id`, `jobId`, `userId`, `fullName`, `phoneNumber`, `salaryExpectation`, `cv`, `status`, `created_at`, `updated_at`) VALUES
(1, 7, 1, 'efef', '0111111111', '4000000', 'wdwd', 'Applied', '2024-11-17 07:33:55', '2024-11-17 07:33:55');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `chat_room_id` int(11) NOT NULL,
  `is_sender_user` tinyint(1) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `chat_room_id`, `is_sender_user`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'halo', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 0, 'hai', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 0, 'nama Anda siapa ?', '2024-11-14 09:56:03', '2024-11-14 09:56:03'),
(4, 1, 1, 'nama saya Aeiou', '2024-11-14 09:56:15', '2024-11-14 09:56:15'),
(5, 1, 0, 'Lu tuh siapa si chat chat gua?', '2024-11-17 07:33:12', '2024-11-17 07:33:12'),
(6, 1, 1, 'ya ndak tau kok tanya saya.', '2024-11-17 07:33:36', '2024-11-17 07:33:36');

-- --------------------------------------------------------

--
-- Table structure for table `chat_room`
--

CREATE TABLE `chat_room` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chat_room`
--

INSERT INTO `chat_room` (`id`, `user_id`, `company_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `email`, `name`, `password`, `address`, `description`) VALUES
(1, 'company1@gmail.com', 'company1', 'company1', 'company1 address', 'company1 description'),
(2, 'company2@gmail.com', 'company2', 'company2', 'company2 address', 'company2 description'),
(3, 'tesUsaha@gmail.com', 'TesCompany', 'tesUsaha', 'Jalan 123, Jakarta', 'PT BNI Life Insurance (BNI Life) merupakan perusahaan asuransi yang menyediakan berbagai produk asuransi seperti Asuransi Kehidupan (Jiwa), Kesehatan, Pendidikan, Investasi, Pensiun dan Syariah. Dalam menyelenggarakan kegiatan usahanya, BNI Life telah memperoleh izin usaha di bidang Asuransi Jiwa Berdasarkan surat dari Menteri Keuangan Nomor 305/KMK.017/1997 tanggal 7 Juli 1997. Pendirian BNI Life, sejalan dengan kebutuhan perusahaan induknya, PT Bank Negara Indonesia (Persero) Tbk atau BNI, untuk menyediakan layanan dan jasa keuangan terpadu bagi semua nasabahnya (one-stop financial services)\n\nPada tanggal 11 Maret 2014, Otoritas Jasa Keuangan (OJK) memberikan persetujuan perubahan kepemilikan saham PT BNI Life Insurance (”BNI Life”). Berdasarkan persetujuan tersebut pada tanggal 21 Maret 2014, BNI Life telah menyelenggarakan RUPSLB dengan agenda penerbitan saham baru sebanyak 120.279.633 lembar yang diambil seluruhnya oleh Sumitomo Life Insurance Company.\n\nDengan pengalaman lebih dari 19 tahun, BNI Life terus meneguhkan komitmen untuk tidak hanya memberikan perlindungan secara finansial tetapi juga berupaya memberikan nilai tambah pada setiap sisi kehidupan Anda.\n\nUntuk mewujudkan misinya, BNI Life tengah mencari talenta-talenta handal yang dinamis, terampil dan bermotivasi tinggi. Jika Anda siap menerima tantangan, segera bergabung bersama kami dengan mengirimkan aplikasi lamaran beserta CV anda.');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `companyId` int(11) NOT NULL,
  `titleId` int(11) NOT NULL,
  `description` text NOT NULL,
  `poster` varchar(100) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `companyId`, `titleId`, `description`, `poster`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'desc1', 'assets/poster/andrew.png', 'Open', '2024-11-14 16:52:08', '2024-11-14 16:52:08'),
(2, 1, 2, 'desc2', 'assets/poster/minion.jpg', 'Open', '2024-11-14 16:52:08', '2024-11-14 16:52:08'),
(3, 1, 3, 'desc3', 'assets/poster/minion.jpg', 'Open', '2024-11-14 16:52:08', '2024-11-14 16:52:08'),
(4, 2, 1, 'desc4', 'assets/poster/naruto.jpg', 'Open', '2024-11-14 16:52:08', '2024-11-14 16:52:08'),
(5, 2, 2, 'desc5', 'assets/poster/spongebob.webp', 'Open', '2024-11-14 16:52:08', '2024-11-14 16:52:08'),
(6, 2, 3, 'desc6', 'assets/poster/patrick.jpg', 'Open', '2024-11-14 16:52:08', '2024-11-14 16:52:08'),
(7, 1, 4, 'Sudah di Update ke 2x', 'assets/poster/alya.jpg', 'Open', '2024-11-16 08:56:08', '2024-11-16 11:29:11'),
(8, 1, 2, 'AREA SALES MANAGER (ASM)\r\n\r\nMenjadi pemimpin bagi tenaga pemasar BAS dan melakukan monitoring terhadap pencapaian target BAS serta melakukan perencanaan penjualan. Penempatan Area Karawang/Jababeka/Bekasi/Jatinegara/Matraman\r\n\r\nKualifikasi :\r\n\r\nUsia 27 - 40 tahun\r\nPendidikan S1 Semua Jurusan\r\nWajib memiliki pengalaman minimal 2 tahun sebagai leader/SPV/Manager bagian marketing asuransi jiwa, perbankan atau financial industry\r\nBerpenampilan rapih\r\nMemiliki kemampuan komunikasi, presentasi yang baik\r\nBerorientasi dengan target\r\nTidak tercatat aktif AAJI\r\n \r\n\r\nDeskripsi Pekerjaan :\r\n\r\nMenjadi pemimpin bagi tenaga pemasar BAS\r\nMelakukan monitoring terhadap pencapaian target BAS\r\nMelakukan perencanaan penjualan.\r\nMembangun hubungan baik dengan pihak internal (Bank BNI) dan Eksternal (Perusahaan)\r\n \r\n\r\nManfaat yang diperoleh :\r\n\r\nTunjangan dasar setiap bulan\r\nKOMISI BULANAN TIDAK TERBATAS\r\nTunjangan transportasi setiap bulan\r\nKesempatan karir terbuka luas\r\nKesempatan mendapat perjalanan ke luar negri\r\nBonus quartal dan tahunan\r\nTraining berkelanjutan dan bersertifikat dari BNI Life Insurace\r\nPertanyaan dari perusahaan\r\nLamaran kamu akan mencakup pertanyaan-pertanyaan berikut:\r\nWhat\'s your expected monthly basic salary?\r\nWhich of the following types of qualifications do you have?\r\nHow many years\' experience do you have as an area sales manager?\r\nDo you have experience in a sales role?\r\nProfil perusahaan\r\nCompany Logo for BNI Life Insurance\r\n\r\nBNI Life Insurance \r\n3.9\r\n·\r\n327 ulasan\r\nInsurance\r\n1,001-5,000 employees\r\nPT BNI Life Insurance (BNI Life) merupakan perusahaan asuransi yang menyediakan berbagai produk asuransi seperti Asuransi Kehidupan (Jiwa), Kesehatan, Pendidikan, Investasi, Pensiun dan Syariah. Dalam menyelenggarakan kegiatan usahanya, BNI Life telah memperoleh izin usaha di bidang Asuransi Jiwa Berdasarkan surat dari Menteri Keuangan Nomor 305/KMK.017/1997 tanggal 7 Juli 1997. Pendirian BNI Life, sejalan dengan kebutuhan perusahaan induknya, PT Bank Negara Indonesia (Persero) Tbk atau BNI, untuk menyediakan layanan dan jasa keuangan terpadu bagi semua nasabahnya (one-stop financial services)\r\n\r\nPada tanggal 11 Maret 2014, Otoritas Jasa Keuangan (OJK) memberikan persetujuan perubahan kepemilikan saham PT BNI Life Insurance (”BNI Life”). Berdasarkan persetujuan tersebut pada tanggal 21 Maret 2014, BNI Life telah menyelenggarakan RUPSLB dengan agenda penerbitan saham baru sebanyak 120.279.633 lembar yang diambil seluruhnya oleh Sumitomo Life Insurance Company.\r\n\r\nDengan pengalaman lebih dari 19 tahun, BNI Life terus meneguhkan komitmen untuk tidak hanya memberikan perlindungan secara finansial tetapi juga berupaya memberikan nilai tambah pada setiap sisi kehidupan Anda.\r\n\r\nUntuk mewujudkan misinya, BNI Life tengah mencari talenta-talenta handal yang dinamis, terampil dan bermotivasi tinggi. Jika Anda siap menerima tantangan, segera bergabung bersama kami dengan mengirimkan aplikasi lamaran beserta CV anda.\r\n\r\nPT BNI Life Insurance (BNI Life) merupakan perusahaan asuransi yang menyediakan berbagai produk asuransi seperti Asuransi Kehidupan (Jiwa), Kesehatan, Pendidikan, Investasi, Pensiun dan Syariah. Dalam menyelenggarakan kegiatan usahanya, BNI Life telah memperoleh izin usaha di bidang Asuransi Jiwa Berdasarkan surat dari Menteri Keuangan Nomor 305/KMK.017/1997 tanggal 7 Juli 1997. Pendirian BNI Life, sejalan dengan kebutuhan perusahaan induknya, PT Bank Negara Indonesia (Persero) Tbk atau BNI, untuk menyediakan layanan dan jasa keuangan terpadu bagi semua nasabahnya (one-stop financial services)\r\n\r\nPada tanggal 11 Maret 2014, Otoritas Jasa Keuangan (OJK) memberikan persetujuan perubahan kepemilikan saham PT BNI Life Insurance (”BNI Life”). Berdasarkan persetujuan tersebut pada tanggal 21 Maret 2014, BNI Life telah menyelenggarakan RUPSLB dengan agenda penerbitan saham baru sebanyak 120.279.633 lembar yang diambil seluruhnya oleh Sumitomo Life Insurance Company.\r\n\r\nDengan pengalaman lebih dari 19 tahun, BNI Life terus meneguhkan komitmen untuk tidak hanya memberikan perlindungan secara finansial tetapi juga berupaya memberikan nilai tambah pada setiap sisi kehidupan Anda.\r\n\r\nUntuk mewujudkan misinya, BNI Life tengah mencari talenta-talenta handal yang dinamis, terampil dan bermotivasi tinggi. Jika Anda siap menerima tantangan, segera bergabung bersama kami dengan mengirimkan aplikasi lamaran beserta CV anda.', 'assets/poster/changli.jpg', 'closed', '2024-11-16 11:31:13', '2024-11-17 07:32:07'),
(9, 3, 3, 'AREA SALES MANAGER (ASM)\r\n\r\nMenjadi pemimpin bagi tenaga pemasar BAS dan melakukan monitoring terhadap pencapaian target BAS serta melakukan perencanaan penjualan. Penempatan Area Karawang/Jababeka/Bekasi/Jatinegara/Matraman\r\n\r\n \r\n\r\nKualifikasi :\r\n\r\nUsia 27 - 40 tahun\r\nPendidikan S1 Semua Jurusan\r\nWajib memiliki pengalaman minimal 2 tahun sebagai leader/SPV/Manager bagian marketing asuransi jiwa, perbankan atau financial industry\r\nBerpenampilan rapih\r\nMemiliki kemampuan komunikasi, presentasi yang baik\r\nBerorientasi dengan target\r\nTidak tercatat aktif AAJI\r\n \r\n\r\nDeskripsi Pekerjaan :\r\n\r\nMenjadi pemimpin bagi tenaga pemasar BAS\r\nMelakukan monitoring terhadap pencapaian target BAS\r\nMelakukan perencanaan penjualan.\r\nMembangun hubungan baik dengan pihak internal (Bank BNI) dan Eksternal (Perusahaan)\r\n \r\n\r\nManfaat yang diperoleh :\r\n\r\nTunjangan dasar setiap bulan\r\nKOMISI BULANAN TIDAK TERBATAS\r\nTunjangan transportasi setiap bulan\r\nKesempatan karir terbuka luas\r\nKesempatan mendapat perjalanan ke luar negri\r\nBonus quartal dan tahunan\r\nTraining berkelanjutan dan bersertifikat dari BNI Life Insurace\r\nPertanyaan dari perusahaan\r\nLamaran kamu akan mencakup pertanyaan-pertanyaan berikut:\r\nWhat\'s your expected monthly basic salary?\r\nWhich of the following types of qualifications do you have?\r\nHow many years\' experience do you have as an area sales manager?\r\nDo you have experience in a sales role?', 'assets/poster/changli.jpg', 'Open', '2024-11-16 11:33:31', '2024-11-16 11:33:31'),
(10, 3, 5, 'AREA SALES MANAGER (ASM)\r\n\r\nMenjadi pemimpin bagi tenaga pemasar BAS dan melakukan monitoring terhadap pencapaian target BAS serta melakukan perencanaan penjualan. Penempatan Area Karawang/Jababeka/Bekasi/Jatinegara/Matraman\r\n\r\n \r\n\r\nKualifikasi :\r\n\r\nUsia 27 - 40 tahun\r\nPendidikan S1 Semua Jurusan\r\nWajib memiliki pengalaman minimal 2 tahun sebagai leader/SPV/Manager bagian marketing asuransi jiwa, perbankan atau financial industry\r\nBerpenampilan rapih\r\nMemiliki kemampuan komunikasi, presentasi yang baik\r\nBerorientasi dengan target\r\nTidak tercatat aktif AAJI\r\n \r\n\r\nDeskripsi Pekerjaan :\r\n\r\nMenjadi pemimpin bagi tenaga pemasar BAS\r\nMelakukan monitoring terhadap pencapaian target BAS\r\nMelakukan perencanaan penjualan.\r\nMembangun hubungan baik dengan pihak internal (Bank BNI) dan Eksternal (Perusahaan)\r\n \r\n\r\nManfaat yang diperoleh :\r\n\r\nTunjangan dasar setiap bulan\r\nKOMISI BULANAN TIDAK TERBATAS\r\nTunjangan transportasi setiap bulan\r\nKesempatan karir terbuka luas\r\nKesempatan mendapat perjalanan ke luar negri\r\nBonus quartal dan tahunan\r\nTraining berkelanjutan dan bersertifikat dari BNI Life Insurace\r\nPertanyaan dari perusahaan\r\nLamaran kamu akan mencakup pertanyaan-pertanyaan berikut:\r\nWhat\'s your expected monthly basic salary?\r\nWhich of the following types of qualifications do you have?\r\nHow many years\' experience do you have as an area sales manager?\r\nDo you have experience in a sales role?', 'assets/poster/alya.jpg', 'Open', '2024-11-16 11:37:07', '2024-11-16 11:37:07');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('SDQ82YbBpt8rH6GzKdfRjjvdME2XGW0FsHP8wgLP', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUWRoWHk0aDVyWHVnOWRVendZa0E5b0RHcUJNTGxmNVFHdTQwR2NOZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1731828846);

-- --------------------------------------------------------

--
-- Table structure for table `title`
--

CREATE TABLE `title` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `title`
--

INSERT INTO `title` (`id`, `name`) VALUES
(1, 'FrontEnd'),
(2, 'BackEnd'),
(3, 'FullStack'),
(4, 'DevOps'),
(5, 'QA');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `name`, `password`) VALUES
(1, 'user1@gmail.com', 'user1', 'user1'),
(2, 'user2@gmail.com', 'user2', 'user2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply_job`
--
ALTER TABLE `apply_job`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_apply_job_job_id` (`jobId`),
  ADD KEY `fk_apply_job_user_id` (`userId`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_chat_chat_room_id` (`chat_room_id`);

--
-- Indexes for table `chat_room`
--
ALTER TABLE `chat_room`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_chat_room_user_id` (`user_id`),
  ADD KEY `fk_chat_room_company_id` (`company_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_job_company_id` (`companyId`),
  ADD KEY `fk_job_title_id` (`titleId`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
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
-- AUTO_INCREMENT for table `apply_job`
--
ALTER TABLE `apply_job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `chat_room`
--
ALTER TABLE `chat_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `title`
--
ALTER TABLE `title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apply_job`
--
ALTER TABLE `apply_job`
  ADD CONSTRAINT `fk_apply_job_job_id` FOREIGN KEY (`jobId`) REFERENCES `job` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_apply_job_user_id` FOREIGN KEY (`userId`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `fk_chat_chat_room_id` FOREIGN KEY (`chat_room_id`) REFERENCES `chat_room` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `chat_room`
--
ALTER TABLE `chat_room`
  ADD CONSTRAINT `fk_chat_room_company_id` FOREIGN KEY (`company_id`) REFERENCES `company` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_chat_room_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `fk_job_company_id` FOREIGN KEY (`companyId`) REFERENCES `company` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_job_title_id` FOREIGN KEY (`titleId`) REFERENCES `title` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
