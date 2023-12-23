-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 23, 2023 at 02:08 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_halodek`
--
CREATE DATABASE IF NOT EXISTS `db_halodek` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `db_halodek`;

-- --------------------------------------------------------

--
-- Table structure for table `dataobat`
--

CREATE TABLE `dataobat` (
  `id_Obat` int NOT NULL,
  `nama` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `jenis` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `datapasien`
--

CREATE TABLE `datapasien` (
  `id_Pasien` int NOT NULL,
  `nama` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `riwayat` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id_Media` int NOT NULL,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `author` varchar(20) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id_Media`, `title`, `author`, `content`) VALUES
(12, 'Apa manfaat fitness bagi tubuh???', 'admin', '<p><strong>Manfaat Fitness untuk Kesehatan Tubuh</strong></p><p><br></p><p><strong><span class=\"ql-cursor\">﻿</span></strong><img src=\"https://th.bing.com/th?q=Fitness+Exercise&amp;w=120&amp;h=120&amp;c=1&amp;rs=1&amp;qlt=90&amp;cb=1&amp;dpr=1.3&amp;pid=InlineBlock&amp;mkt=en-ID&amp;cc=ID&amp;setlang=en&amp;adlt=strict&amp;t=1&amp;mw=247\" alt=\"Fitness Exercise\"></p><p><br></p><p>Fitness tidak hanya tentang penampilan fisik yang menarik, tetapi juga memiliki manfaat luar biasa untuk kesehatan tubuh. Melibatkan diri dalam kegiatan fitness secara teratur dapat meningkatkan kondisi kesehatan secara keseluruhan. Selain membentuk tubuh, berikut adalah beberapa manfaat fitness yang perlu dipertimbangkan:</p><p><br></p><p><strong>1. Meningkatkan Kesehatan Jantung:</strong> Latihan kardiovaskular dapat memperkuat jantung dan meningkatkan aliran darah, mengurangi risiko penyakit jantung.</p><p><br></p><p><strong>2. Meningkatkan Kekebalan Tubuh:</strong> Fitness membantu meningkatkan sistem kekebalan tubuh, membuat tubuh lebih tahan terhadap penyakit dan infeksi.</p><p><br></p><p><strong>3. Menurunkan Berat Badan:</strong> Aktivitas fisik membakar kalori dan membantu mengontrol berat badan, mengurangi risiko obesitas.</p><p><br></p><p><strong>4. Meningkatkan Kesehatan Mental:</strong> Fitness dapat mengurangi stres, meningkatkan mood, dan membantu mengatasi masalah mental seperti depresi dan kecemasan.</p><p><br></p><p><strong>5. Meningkatkan Kesehatan Tulang:</strong> Latihan berat membantu memperkuat tulang, mengurangi risiko osteoporosis pada masa tua.</p><p><br></p><p><strong>6. Meningkatkan Fleksibilitas dan Postur Tubuh:</strong> Latihan kebugaran meningkatkan fleksibilitas otot dan menjaga postur tubuh yang baik.</p><p><br></p><p><strong>7. Meningkatkan Kualitas Tidur:</strong> Aktivitas fisik teratur dapat membantu meningkatkan kualitas tidur, memberikan tubuh waktu yang cukup untuk pemulihan.</p><p><br></p><p><strong>8. Meningkatkan Konsentrasi dan Produktivitas:</strong> Latihan fisik dapat meningkatkan aliran darah ke otak, meningkatkan konsentrasi dan produktivitas.</p><p><br></p><p>Dengan semua manfaat ini, penting untuk menyertakan kegiatan fitness dalam gaya hidup sehari-hari untuk mendukung kesehatan tubuh dan pikiran secara optimal.</p>'),
(13, 'Mengenal Diabetes dan Langkah-langkah Pencegahan', 'admin', '<p><img src=\"https://th.bing.com/th/id/OIP.Lrm1VkIDRdtdIbn6Jio8dAHaE8?w=286&amp;h=191&amp;c=7&amp;r=0&amp;o=5&amp;dpr=1.3&amp;pid=1.7\" alt=\"Image result for diabetess\"></p><p>Diabetes, dikenal sebagai penyakit kadar gula darah tinggi, menjadi tantangan serius dalam kesehatan global. Dua jenis utama diabetes, yaitu Tipe 1 dan Tipe 2, memengaruhi jutaan orang di seluruh dunia. Diabetes Tipe 1 disebabkan oleh sistem kekebalan tubuh yang menyerang sel-sel penghasil insulin, sedangkan Diabetes Tipe 2 terkait dengan resistensi insulin atau produksi insulin yang tidak memadai.</p><p><br></p><p>Dampak diabetes pada kesehatan sangat besar, mencakup risiko penyakit jantung, masalah ginjal, gangguan penglihatan, dan luka yang sulit sembuh. Oleh karena itu, penting untuk meningkatkan kesadaran tentang pencegahan diabetes.&nbsp;</p><p><br></p><p>Langkah-langkah pencegahan melibatkan gaya hidup sehat, seperti pola makan seimbang dengan porsi terkontrol, rutin berolahraga, dan menjaga berat badan ideal. Pengukuran kadar gula darah secara teratur juga kunci untuk mendeteksi dini dan mengelola kondisi ini.</p><p><br></p><p>Pentingnya edukasi masyarakat tentang faktor risiko diabetes, seperti keturunan, obesitas, dan kurangnya aktivitas fisik, tidak dapat diabaikan. Melalui penekanan pada pola hidup sehat, pendekatan holistik terhadap diabetes dapat memberikan kontribusi besar untuk mengurangi angka kejadian penyakit ini. Dengan perubahan kecil dalam kebiasaan sehari-hari, kita dapat melangkah menuju masyarakat yang lebih sehat dan bebas dari beban diabetes.</p>'),
(14, 'Menggali Manfaat Niacinamide untuk Kecantikan Kulit', 'admin', '<p><img src=\"https://th.bing.com/th/id/OIP.ILNJIW9NKTx6JSKu0G-zrgHaFj?w=270&amp;h=202&amp;c=7&amp;r=0&amp;o=5&amp;dpr=1.3&amp;pid=1.7\" alt=\"Image result for niacnimade\"></p><p><u>Niacinamide</u>, atau dikenal juga sebagai vitamin B3, telah menjadi bintang dalam dunia perawatan kulit. Kandungan ini memberikan sejumlah manfaat yang luar biasa untuk kecantikan kulit, membuatnya menjadi bahan yang banyak dicari dalam produk perawatan kulit. Berikut adalah beberapa manfaat utama niacinamide:</p><ol><li><span style=\"color: var(--tw-prose-bold);\">Mengurangi Kemerahan Kulit:</span> Niacinamide dapat membantu mengurangi kemerahan dan peradangan pada kulit, membuatnya ideal untuk orang dengan masalah kulit sensitif atau yang rentan terhadap jerawat.</li><li><span style=\"color: var(--tw-prose-bold);\">Memperbaiki Kulit yang Rusak:</span> Niacinamide memiliki sifat regeneratif yang membantu memperbaiki kerusakan sel kulit. Ini dapat membantu mengatasi masalah seperti keriput, garis halus, dan noda bekas jerawat.</li><li><span style=\"color: var(--tw-prose-bold);\">Menyeimbangkan Produksi Minyak:</span> Bagi mereka yang memiliki kulit berminyak, niacinamide dapat membantu mengontrol produksi minyak, menjaga kulit tetap segar dan bebas kilau berlebih.</li><li><span style=\"color: var(--tw-prose-bold);\">Memudarkan Flek dan Noda:</span> Pigmentasi yang tidak merata, termasuk flek hitam dan noda akibat paparan sinar matahari, dapat diatasi dengan menggunakan produk yang mengandung niacinamide secara teratur.</li><li><span style=\"color: var(--tw-prose-bold);\">Memberikan Kelembapan:</span> Niacinamide juga berperan dalam menjaga kelembapan kulit, menjadikannya pilihan yang baik untuk segala jenis kulit, termasuk yang cenderung kering.</li><li><span style=\"color: var(--tw-prose-bold);\">Perlindungan dari Radikal Bebas:</span> Kandungan ini memiliki sifat antioksidan, membantu melindungi kulit dari kerusakan yang disebabkan oleh radikal bebas dan faktor lingkungan.</li></ol><p>Dengan begitu banyak manfaat ini, niacinamide menjadi pilihan yang populer dalam formulasi produk perawatan kulit. Penting untuk mencari produk dengan konsentrasi niacinamide yang tepat dan mengintegrasikannya ke dalam rutinitas perawatan kulit harian untuk meraih manfaat optimal.</p>'),
(15, 'Mengungkap Realitas Kanker: Pemahaman, Pencegahan, dan Perawatan', 'admin', '<p><img src=\"https://th.bing.com/th/id/OIP.r7_CLJYKjn4kMBIvhF4aBAHaEK?w=308&amp;h=180&amp;c=7&amp;r=0&amp;o=5&amp;dpr=1.3&amp;pid=1.7\" alt=\"Image result for kanker\"></p><p>Kanker, penyakit mematikan yang memengaruhi jutaan orang di seluruh dunia, merupakan tantangan serius dalam dunia kesehatan. Kanker terjadi ketika sel-sel tubuh berkembang secara tidak terkendali, membentuk tumor yang dapat menyebar ke berbagai bagian tubuh. Pentingnya pemahaman, pencegahan, dan perawatan kanker tidak bisa diabaikan.</p><p><span style=\"color: var(--tw-prose-bold);\">Pemahaman Kanker:</span></p><p>Pemahaman tentang penyebab kanker sangat penting. Paparan zat karsinogenik, faktor genetik, dan gaya hidup yang tidak sehat seperti merokok dan konsumsi alkohol dapat meningkatkan risiko kanker. Deteksi dini melalui pemeriksaan rutin dan pemahaman tentang gejala kanker juga kunci untuk penanganan yang efektif.</p><p><span style=\"color: var(--tw-prose-bold);\">Pencegahan Kanker:</span></p><p>Pencegahan kanker melibatkan gaya hidup sehat, seperti menerapkan pola makan seimbang, rutin berolahraga, menghindari paparan zat berbahaya, dan tidak merokok. Vaksinasi juga dapat mencegah beberapa jenis kanker, seperti kanker serviks.</p><p><span style=\"color: var(--tw-prose-bold);\">Perawatan Kanker:</span></p><p>Pilihan perawatan kanker bervariasi tergantung pada jenis kanker, stadium, dan kondisi kesehatan pasien. Terapi kanker melibatkan pembedahan, kemoterapi, radioterapi, dan imunoterapi. Pemilihan terapi yang tepat sering kali dilakukan melalui pendekatan tim medis yang terintegrasi.</p><p><span style=\"color: var(--tw-prose-bold);\">Aspek Psikologis dan Sosial:</span></p><p>Penderita kanker dan keluarganya perlu mendapatkan dukungan psikologis dan sosial yang memadai. Proses pengobatan kanker dapat memberikan dampak emosional yang signifikan, dan dukungan dari keluarga, teman, dan komunitas sangat berarti.</p><p>Penting untuk terus mendorong penelitian tentang pencegahan dan pengobatan kanker serta meningkatkan akses masyarakat terhadap layanan kesehatan yang berkualitas. Semakin besar pemahaman dan kesadaran kita tentang kanker, semakin baik peluang kita untuk mengurangi dampak penyakit ini dan mendukung mereka yang terkena dampaknya.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int NOT NULL,
  `firstname` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `lastname` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(70) COLLATE utf8mb4_general_ci NOT NULL,
  `level` varchar(10) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `firstname`, `lastname`, `username`, `email`, `password`, `level`) VALUES
(5, 'M Khoirul', 'Risqi', 'admin', 'risqisgb@gmail.com', '$2y$10$LiaoEFp9K/5eC.UjZnvFMuSnYqxpqUawDuAjb5SGQDW.nASFEUr1W', 'admin'),
(12, 'M Ahsanul', 'Fikri', 'admin1', 'ahsanul@unugiri.aci.id', '$2y$10$LiaoEFp9K/5eC.UjZnvFMuSnYqxpqUawDuAjb5SGQDW.nASFEUr1W', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataobat`
--
ALTER TABLE `dataobat`
  ADD PRIMARY KEY (`id_Obat`);

--
-- Indexes for table `datapasien`
--
ALTER TABLE `datapasien`
  ADD PRIMARY KEY (`id_Pasien`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id_Media`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataobat`
--
ALTER TABLE `dataobat`
  MODIFY `id_Obat` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `datapasien`
--
ALTER TABLE `datapasien`
  MODIFY `id_Pasien` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id_Media` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
