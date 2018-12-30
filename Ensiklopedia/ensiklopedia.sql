-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2018 at 02:15 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ensiklopedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `ensiklopedias`
--

CREATE TABLE `ensiklopedias` (
  `id` int(10) UNSIGNED NOT NULL,
  `istilah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arti` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ensiklopedias`
--

INSERT INTO `ensiklopedias` (`id`, `istilah`, `kategori`, `arti`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'FOTOSINTESIS', 'asdf asdfg', 'asdf asdfg', '2018-12-27 04:05:54', '2018-12-27 04:06:47', '2018-12-27 04:06:47'),
(2, 'FOTOSINTESIS', 'Biologi', 'Pembuatan zat makanan pada tumbuhan', '2018-12-27 04:07:03', '2018-12-30 05:38:08', '2018-12-30 05:38:08'),
(3, 'GLBB', 'Fisika', 'gerak lurus beraturan', '2018-12-27 21:02:36', '2018-12-27 21:36:51', '2018-12-27 21:36:51'),
(4, 'Ovipar', 'Biologi', 'Binatang  bertelur', '2018-12-27 21:37:48', '2018-12-30 05:38:15', '2018-12-30 05:38:15'),
(5, 'asdfg', 'Kimia', 'sdfgh', '2018-12-28 04:18:46', '2018-12-28 04:18:50', '2018-12-28 04:18:50'),
(6, 'Abiotik', 'Biologi', 'Benda mati', '2018-12-30 05:27:44', '2018-12-30 05:27:44', NULL),
(7, 'Adaptasi', 'Biologi', 'Penyesuaian diri suatu organisme terhadap lingkungan tempat hidupnya', '2018-12-30 05:28:36', '2018-12-30 05:28:36', NULL),
(8, 'Anaerobik', 'Biologi', 'Bakteri (dan sel lain) yang melakukan pernafasan tanpa memerlukan oksigen bebas', '2018-12-30 05:29:41', '2018-12-30 05:29:41', NULL),
(9, 'Angiospermae', 'Biologi', 'Tumbuhan biji terbuka', '2018-12-30 05:30:42', '2018-12-30 05:30:42', NULL),
(10, 'Antibodi', 'Biologi', 'Zat yang dibentuk dalam darah untuk memusnahkan bakteri/kuman', '2018-12-30 05:31:46', '2018-12-30 05:31:46', NULL),
(11, 'Autotrof', 'Biologi', 'Organisme berklorofil yang mampu mengubah zat anorganik menjadi zat organik', '2018-12-30 05:33:02', '2018-12-30 05:33:02', NULL),
(12, 'Affinitas Elektron', 'Kimia', 'Energi yang dibebaskan oleh sebuah atom untuk menerima elektron', '2018-12-30 05:41:07', '2018-12-30 05:41:07', NULL),
(13, 'Alkana', 'Kimia', 'Senyawa karbon yang memiliki ikatan tunggal', '2018-12-30 05:41:48', '2018-12-30 05:41:48', NULL),
(14, 'Anoda', 'Kimia', 'Elektroda tempat terjadinya reaksi oksidasi', '2018-12-30 05:42:55', '2018-12-30 05:42:55', NULL),
(15, 'Atom', 'Kimia', 'Bagian terkecil dari sebuah unsur', '2018-12-30 05:43:55', '2018-12-30 05:43:55', NULL),
(16, 'Aturan Aufbau', 'Kimia', 'Aturan ini menyatakan bahwa elektron-elektron dalam suatu atom akan mengisi orbital yang memiliki energi paling rendah dilanjutkan ke orbital yang lebih tinggi', '2018-12-30 05:44:44', '2018-12-30 05:44:44', NULL),
(17, 'Basa', 'Kimia', 'Zat yang memiliki sifat-sifat yang spesifik, seperti licin jika mengenai kulit dan terasa getir serta dapat merubah kertas lakmus biru menjadi merah', '2018-12-30 05:45:20', '2018-12-30 05:45:20', NULL),
(18, 'Bilangan Oksidasi', 'Kimia', 'Sebuah bilangan yang ada dalam sebuah unsur dan menyatakan tingkat oksidasi dari unsur tersebut', '2018-12-30 05:46:00', '2018-12-30 05:46:00', NULL),
(19, 'Amperemeter', 'Fisika', 'suatu alat yang dipakai untuk melakukan pengukuran kuat arus listrik', '2018-12-30 05:47:26', '2018-12-30 05:47:26', NULL),
(20, 'Arus AC', 'Fisika', 'Arus listrik yang senantiasa berbalik arah secara berulang dan teratur', '2018-12-30 05:50:07', '2018-12-30 05:50:07', NULL),
(21, 'Arus DC', 'Fisika', 'Arus listrik yang selalu mengalir dalam satu arah', '2018-12-30 05:50:54', '2018-12-30 05:50:54', NULL),
(22, 'Asas Black', 'Fisika', 'Banyaknya kalor yang diserap benda yang bersuhu rendah sama dengan banyaknya kalor yang dilepas benda yang bersuhu tinggi', '2018-12-30 05:51:26', '2018-12-30 05:51:26', NULL),
(23, 'Besaran', 'Fisika', 'Segala sesuatu yang dapat diukur kemudian dinyatakan dengan nilai atau angka', '2018-12-30 05:52:03', '2018-12-30 05:52:03', NULL),
(24, 'Besaran skalar', 'Fisika', 'Besaran dalam Fisika yang hanya memiliki besar atau angka saja tanpa disertai dengan arah', '2018-12-30 05:52:49', '2018-12-30 05:52:49', NULL),
(25, 'Besaran Vektor', 'Fisika', 'Besaran dalam Fisika yang memiliki besar atau angka serta memiliki arah', '2018-12-30 05:53:28', '2018-12-30 05:53:28', NULL);

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
(1, '2018_12_27_085909_create_ensiklopedias_table', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ensiklopedias`
--
ALTER TABLE `ensiklopedias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ensiklopedias`
--
ALTER TABLE `ensiklopedias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
