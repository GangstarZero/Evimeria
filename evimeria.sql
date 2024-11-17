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
(1, 1, 1, 'Andi Susanto', '08123456789', '5000000', 'cv_andi.pdf', 'Applied', '2024-11-17 08:00:00', '2024-11-17 08:00:00'),
(2, 2, 2, 'Budi Hartono', '08198765432', '6000000', 'cv_budi.pdf', 'Applied', '2024-11-17 08:10:00', '2024-11-17 08:10:00'),
(3, 3, 3, 'Citra Mulyani', '08134567890', '5500000', 'cv_citra.pdf', 'Applied', '2024-11-17 08:20:00', '2024-11-17 08:20:00'),
(4, 4, 4, 'Dian Nugraha', '08123456780', '5200000', 'cv_dian.pdf', 'Applied', '2024-11-17 08:30:00', '2024-11-17 08:30:00'),
(5, 5, 5, 'Eka Putri', '08167890123', '4800000', 'cv_eka.pdf', 'Applied', '2024-11-17 08:40:00', '2024-11-17 08:40:00'),
(6, 6, 6, 'Fajar Pratama', '08178901234', '5300000', 'cv_fajar.pdf', 'Applied', '2024-11-17 08:50:00', '2024-11-17 08:50:00'),
(7, 7, 7, 'Gina Rahma', '08189012345', '4700000', 'cv_gina.pdf', 'Applied', '2024-11-17 09:00:00', '2024-11-17 09:00:00'),
(8, 8, 8, 'Hendra Setiawan', '08190123456', '4900000', 'cv_hendra.pdf', 'Applied', '2024-11-17 09:10:00', '2024-11-17 09:10:00'),
(9, 9, 9, 'Ika Novita', '08112345678', '5200000', 'cv_ika.pdf', 'Applied', '2024-11-17 09:20:00', '2024-11-17 09:20:00'),
(10, 1, 10, 'Joko Santoso', '08123456790', '5800000', 'cv_joko.pdf', 'Applied', '2024-11-17 09:30:00', '2024-11-17 09:30:00'),
(11, 2, 1, 'Andi Susanto', '08123456789', '6000000', 'cv_andi.pdf', 'Applied', '2024-11-17 09:40:00', '2024-11-17 09:40:00'),
(12, 3, 2, 'Budi Hartono', '08198765432', '5700000', 'cv_budi.pdf', 'Applied', '2024-11-17 09:50:00', '2024-11-17 09:50:00'),
(13, 4, 3, 'Citra Mulyani', '08134567890', '5600000', 'cv_citra.pdf', 'Applied', '2024-11-17 10:00:00', '2024-11-17 10:00:00'),
(14, 5, 4, 'Dian Nugraha', '08123456780', '5800000', 'cv_dian.pdf', 'Applied', '2024-11-17 10:10:00', '2024-11-17 10:10:00'),
(15, 6, 5, 'Eka Putri', '08167890123', '5900000', 'cv_eka.pdf', 'Applied', '2024-11-17 10:20:00', '2024-11-17 10:20:00'),
(16, 7, 6, 'Fajar Pratama', '08178901234', '6100000', 'cv_fajar.pdf', 'Applied', '2024-11-17 10:30:00', '2024-11-17 10:30:00'),
(17, 8, 7, 'Gina Rahma', '08189012345', '5300000', 'cv_gina.pdf', 'Applied', '2024-11-17 10:40:00', '2024-11-17 10:40:00'),
(18, 9, 8, 'Hendra Setiawan', '08190123456', '5500000', 'cv_hendra.pdf', 'Applied', '2024-11-17 10:50:00', '2024-11-17 10:50:00'),
(19, 1, 9, 'Ika Novita', '08112345678', '5700000', 'cv_ika.pdf', 'Applied', '2024-11-17 11:00:00', '2024-11-17 11:00:00'),
(20, 2, 10, 'Joko Santoso', '08123456790', '6000000', 'cv_joko.pdf', 'Applied', '2024-11-17 11:10:00', '2024-11-17 11:10:00'),
(21, 3, 1, 'Andi Susanto', '08123456789', '5200000', 'cv_andi.pdf', 'Applied', '2024-11-17 11:20:00', '2024-11-17 11:20:00'),
(22, 4, 2, 'Budi Hartono', '08198765432', '5400000', 'cv_budi.pdf', 'Applied', '2024-11-17 11:30:00', '2024-11-17 11:30:00'),
(23, 5, 3, 'Citra Mulyani', '08134567890', '5800000', 'cv_citra.pdf', 'Applied', '2024-11-17 11:40:00', '2024-11-17 11:40:00'),
(24, 6, 4, 'Dian Nugraha', '08123456780', '5900000', 'cv_dian.pdf', 'Applied', '2024-11-17 11:50:00', '2024-11-17 11:50:00'),
(25, 7, 5, 'Eka Putri', '08167890123', '6100000', 'cv_eka.pdf', 'Applied', '2024-11-17 12:00:00', '2024-11-17 12:00:00');

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
(1, 1, 1, 'Halo, saya baru saja melamar pekerjaan di perusahaan ini.', '2024-11-17 08:00:00', '2024-11-17 08:00:00'),
(2, 1, 0, 'Terima kasih telah melamar! Kami akan meninjau aplikasi Anda segera.', '2024-11-17 08:05:00', '2024-11-17 08:05:00'),
(3, 1, 1, 'Terima kasih atas responsnya, saya menantikan kabar lebih lanjut.', '2024-11-17 08:10:00', '2024-11-17 08:10:00'),
(4, 1, 0, 'Kami akan memberi kabar dalam waktu dua minggu. Semoga sukses!', '2024-11-17 08:15:00', '2024-11-17 08:15:00');

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
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 2),
(5, 5, 2),
(6, 6, 2),
(7, 7, 3),
(8, 8, 3),
(9, 9, 3),
(10, 10, 1),
(11, 1, 1),
(12, 2, 1),
(13, 3, 1),
(14, 4, 2),
(15, 5, 2),
(16, 6, 2),
(17, 7, 3),
(18, 8, 3),
(19, 9, 3),
(20, 10, 1),
(21, 1, 1),
(22, 2, 1),
(23, 3, 1),
(24, 4, 2),
(25, 5, 2);

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
(1, 'nusantara.tech@gmail.com', 'Nusantara Tech', 'nusantara123', 'Jl. Merdeka No. 10, Jakarta', 'Nusantara Tech is a leading technology solutions provider in Indonesia, specializing in software development, IT infrastructure, and cloud services. With over a decade of experience, we have partnered with hundreds of businesses to deliver scalable and efficient technological solutions that meet global standards. Our commitment to innovation and excellence makes us a trusted partner in the tech industry. \n\nWe aim to empower businesses through state-of-the-art technology, enabling them to adapt and thrive in the digital era. Our team of experts combines local insights with international expertise to create customized solutions tailored to the unique needs of Indonesian enterprises.'),
(2, 'garuda.solutions@gmail.com', 'Garuda Solutions', 'garuda123', 'Jl. Diponegoro No. 15, Bandung', 'Garuda Solutions offers innovative IT and software development services designed to accelerate business growth. Our portfolio includes custom application development, cybersecurity solutions, and IT consultancy. Based in Bandung, we are proud to serve clients across Indonesia with dedication and precision. \n\nAt Garuda Solutions, we believe in building strong partnerships with our clients. Our mission is to transform complex business challenges into opportunities by leveraging cutting-edge technology and an agile approach. We are committed to delivering solutions that drive efficiency, productivity, and success.'),
(3, 'mandiri.corp@gmail.com', 'Mandiri Corp', 'mandiri123', 'Jl. Kartini No. 20, Surabaya', 'Mandiri Corp is your reliable partner for business consultancy and digital transformation services. We specialize in guiding companies through the complexities of modernizing their operations, from implementing ERP systems to designing digital marketing strategies. Our holistic approach ensures that our clients achieve sustainable growth. \n\nWith offices in Surabaya, Mandiri Corp combines local market expertise with global best practices. Our team is passionate about helping businesses harness the power of technology to stay ahead in competitive markets. Together, we work towards achieving operational excellence and long-term success.'); 


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
(1, 1, 1, 'Sebagai FrontEnd Developer, Anda akan bertanggung jawab untuk menciptakan antarmuka pengguna yang menarik, responsif, dan fungsional. Anda akan bekerja dengan tim desain dan pengembang lainnya untuk memastikan aplikasi web yang dihasilkan dapat memberikan pengalaman terbaik kepada pengguna. Pemahaman mendalam tentang HTML, CSS, dan JavaScript sangat diperlukan dalam peran ini. \n\nSelain itu, pengalaman dengan framework seperti React atau Vue akan menjadi nilai tambah. Anda juga diharapkan untuk mengikuti tren teknologi terbaru dalam pengembangan antarmuka pengguna dan memberikan solusi kreatif untuk masalah desain.', 'assets/poster/poster1.png', 'Open', '2024-11-03 09:30:00', '2024-11-03 09:30:00'),
(2, 1, 8, 'Sebagai Machine Learning Engineer, Anda akan bekerja dengan data dalam skala besar untuk membangun model pembelajaran mesin yang efektif dan akurat. Anda akan menggunakan algoritma canggih untuk membuat prediksi yang dapat membantu pengambilan keputusan strategis perusahaan. Kemampuan dalam menggunakan pustaka seperti TensorFlow atau PyTorch sangat dibutuhkan. \n\nSelain itu, Anda bertanggung jawab untuk memproses data, mengevaluasi model, dan terus meningkatkan kinerja sistem. Dalam peran ini, kolaborasi dengan tim data scientist dan pengembang lainnya akan menjadi bagian penting dari pekerjaan Anda.', 'assets/poster/poster2.jpg', 'Open', '2024-11-07 11:45:00', '2024-11-07 11:45:00'),
(3, 1, 14, 'Sebagai Cybersecurity Analyst, Anda akan melindungi data dan sistem perusahaan dari ancaman keamanan yang terus berkembang. Anda akan memantau jaringan untuk mendeteksi aktivitas mencurigakan dan mengambil tindakan proaktif untuk mencegah pelanggaran keamanan. Pengetahuan tentang firewall, sistem deteksi intrusi, dan enkripsi sangat penting dalam peran ini. \n\nAnda juga akan bekerja dengan tim IT untuk meningkatkan kebijakan keamanan dan memberikan pelatihan kepada karyawan. Dengan ancaman siber yang terus berubah, Anda akan dituntut untuk selalu memperbarui keahlian dan mengikuti tren terbaru dalam keamanan teknologi informasi.', 'assets/poster/poster3.jpg', 'Open', '2024-11-10 14:20:00', '2024-11-10 14:20:00'),
(4, 2, 3, 'Sebagai FullStack Developer, Anda akan mengembangkan aplikasi web dari sisi front-end hingga back-end. Anda akan menggunakan berbagai teknologi untuk memastikan aplikasi berjalan lancar, aman, dan responsif. Pemahaman tentang bahasa pemrograman seperti JavaScript, Python, atau PHP serta framework seperti Angular atau Node.js sangat diperlukan. \n\nDalam peran ini, Anda akan bekerja dengan tim desain, pengembang, dan analis untuk merancang solusi yang sesuai dengan kebutuhan bisnis. Kemampuan untuk mengintegrasikan API dan mengoptimalkan performa aplikasi akan menjadi kunci keberhasilan Anda.', 'assets/poster/poster4.jpg', 'Open', '2024-11-05 08:15:00', '2024-11-05 08:15:00'),
(5, 2, 10, 'Sebagai Database Administrator, Anda bertanggung jawab untuk memastikan basis data perusahaan berjalan dengan optimal. Anda akan mengelola, mengamankan, dan melakukan backup data secara berkala untuk mencegah kehilangan informasi penting. Pengetahuan tentang MySQL, PostgreSQL, atau SQL Server adalah keharusan dalam peran ini. \n\nSelain itu, Anda akan bekerja untuk meningkatkan efisiensi sistem database dan memberikan dukungan teknis kepada tim pengembang. Anda juga akan menganalisis data untuk menemukan peluang peningkatan performa yang dapat mendukung kebutuhan bisnis.', 'assets/poster/poster5.jpg', 'Open', '2024-11-08 10:50:00', '2024-11-08 10:50:00'),
(6, 2, 7, 'Sebagai Data Engineer, Anda akan membangun infrastruktur data yang memungkinkan analisis data yang efisien. Anda akan menangani pengumpulan, pemrosesan, dan transformasi data dalam jumlah besar untuk mendukung kebutuhan operasional dan strategis perusahaan. Keahlian dalam alat seperti Hadoop, Spark, atau Airflow sangat diperlukan. \n\nAnda juga bertanggung jawab untuk mengembangkan pipeline data yang andal dan memastikan data tersedia dengan kualitas tinggi. Dalam peran ini, Anda akan bekerja erat dengan data scientist dan tim analitik untuk memberikan wawasan berbasis data yang akurat.', 'assets/poster/poster6.png', 'Open', '2024-11-12 13:30:00', '2024-11-12 13:30:00'),
(7, 3, 4, 'Sebagai DevOps Engineer, Anda akan menjembatani kesenjangan antara tim pengembangan dan operasi teknologi informasi. Anda akan mengelola proses CI/CD untuk memastikan pengiriman perangkat lunak yang cepat dan dapat diandalkan. Pengetahuan tentang Docker, Kubernetes, dan alat otomatisasi lainnya sangat penting untuk peran ini. \n\nSelain itu, Anda akan berkolaborasi dengan tim untuk meningkatkan efisiensi proses kerja dan mengurangi waktu tunggu implementasi. Anda juga akan bertanggung jawab untuk memonitor performa sistem dan memperbaiki kerentanan yang mungkin muncul.', 'assets/poster/poster7.jpg', 'Open', '2024-11-04 15:10:00', '2024-11-04 15:10:00'),
(8, 3, 16, 'Sebagai Game Developer, Anda akan merancang dan mengembangkan permainan yang menarik dan inovatif. Anda akan menggunakan mesin seperti Unity atau Unreal Engine untuk menciptakan dunia game yang imersif. Keterampilan dalam pemrograman, desain grafis, dan pengujian game sangat diperlukan untuk peran ini. \n\nAnda juga akan bekerja sama dengan desainer dan tim kreatif lainnya untuk menghasilkan pengalaman bermain yang memukau. Dalam peran ini, kemampuan untuk memahami kebutuhan pemain dan tren dalam industri game akan menjadi keunggulan utama Anda.', 'assets/poster/poster8.jpg', 'Open', '2024-11-09 09:40:00', '2024-11-09 09:40:00'),
(9, 3, 18, 'Sebagai AI Researcher, Anda akan mengeksplorasi teknologi terbaru dalam bidang kecerdasan buatan untuk menyelesaikan masalah kompleks. Anda akan bekerja dengan model pembelajaran mesin dan jaringan saraf untuk mengembangkan solusi inovatif. Keahlian dalam Python, MATLAB, dan pustaka AI seperti TensorFlow sangat penting. \n\nAnda juga akan memimpin proyek penelitian dan berkolaborasi dengan tim pengembang untuk menerapkan hasil penelitian ke dalam aplikasi nyata. Dengan perkembangan pesat dalam teknologi AI, Anda diharapkan untuk terus belajar dan beradaptasi dengan tren baru di industri ini.', 'assets/poster/poster9.webp', 'Open', '2024-11-13 16:25:00', '2024-11-13 16:25:00');

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
(5, 'QA'),
(6, 'Data Scientist'),
(7, 'Data Engineer'),
(8, 'Machine Learning Engineer'),
(9, 'Cloud Engineer'),
(10, 'Database Administrator'),
(11, 'Product Manager'),
(12, 'Project Manager'),
(13, 'UI/UX Designer'),
(14, 'Cybersecurity Analyst'),
(15, 'Mobile Developer'),
(16, 'Game Developer'),
(17, 'Software Architect'),
(18, 'AI Researcher'),
(19, 'Technical Support Engineer'),
(20, 'Site Reliability Engineer');

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
(1, 'andi.susanto@gmail.com', 'Andi Susanto', 'andi123'),
(2, 'budi.hartono@gmail.com', 'Budi Hartono', 'budi123'),
(3, 'citra.mulyani@gmail.com', 'Citra Mulyani', 'citra123'),
(4, 'dian.nugraha@gmail.com', 'Dian Nugraha', 'dian123'),
(5, 'eka.putri@gmail.com', 'Eka Putri', 'eka123'),
(6, 'fajar.pratama@gmail.com', 'Fajar Pratama', 'fajar123'),
(7, 'gina.rahma@gmail.com', 'Gina Rahma', 'gina123'),
(8, 'hendra.setiawan@gmail.com', 'Hendra Setiawan', 'hendra123'),
(9, 'ika.novita@gmail.com', 'Ika Novita', 'ika123'),
(10, 'joko.santoso@gmail.com', 'Joko Santoso', 'joko123');

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
