-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2023 at 04:23 PM
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
-- Database: `db_halodek`
-- CREATE DATABASE IF NOT EXISTS db_halodek;
--

-- --------------------------------------------------------

--
-- Table structure for table `dataobat`
--

CREATE TABLE `dataobat` (
  `id_Obat` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `jumlah` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dataobat`
--

INSERT INTO `dataobat` (`id_Obat`, `nama`, `jenis`, `jumlah`) VALUES
(3, 'ee', 'ee', 3),
(4, 'akakkad', 'ddd', 6);

-- --------------------------------------------------------

--
-- Table structure for table `datapasien`
--

CREATE TABLE `datapasien` (
  `id_Pasien` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `riwayat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datapasien`
--

INSERT INTO `datapasien` (`id_Pasien`, `nama`, `alamat`, `riwayat`) VALUES
(3, 'ff', '0ff', '0ff'),
(4, 'dd', '0ffff', '0eee'),
(5, 'vvv', 'vv', 'vvv'),
(6, 'dd', 'ddvgllllllllllllllllllllll', 'gg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(5) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(70) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `firstname`, `lastname`, `username`, `email`, `password`, `level`) VALUES
(5, 'M Khoirul', 'Risqi', 'admin', 'risqisgb@gmail.com', '$2y$10$LiaoEFp9K/5eC.UjZnvFMuSnYqxpqUawDuAjb5SGQDW.nASFEUr1W', 'admin'),
(7, 'aku', 'aaa', 'adminaku', 'aaaaaaaadaaadda@hg.r', '$2y$10$FFWp6JxFAChn9CKEut13OOuQ.coqtlSn2UPCPLENruC0NhTJYaOvm', 'pegawai'),
(8, 'risqi', 'khoirul', 'risqi', 'risqi@dicoding.com', '$2y$10$mt5.0uQKLnsabQOlBlyMXeOjYwudFlwwvfBXOMMvdHPouGpskKSzq', 'pegawai'),
(9, 'zaki', 'maulana', 'admin1', 'admin@dd.d', '$2y$10$7xeegW9x2wMg8TrrKDlzFuRE7FnJD5QYIPwMVOxpD0kQ46WeV2CNG', 'pegawai'),
(10, 'ekojoe', 'juniyanto', 'admin2', 'risqi@porop.com', '$2y$10$MgSyDAuSix33vILXGqjZEuQElcxkU8P7DltEoHjxosfxqnmeXta0y', 'pegawai');

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
  MODIFY `id_Obat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `datapasien`
--
ALTER TABLE `datapasien`
  MODIFY `id_Pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
