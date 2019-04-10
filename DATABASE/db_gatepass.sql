-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2019 at 02:14 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gatepass`
--

-- --------------------------------------------------------

--
-- Table structure for table `gatepass`
--

CREATE TABLE `gatepass` (
  `id_gatepass` int(15) NOT NULL,
  `kategori_id` int(15) DEFAULT NULL,
  `tgl_expired` date DEFAULT NULL,
  `tgl_update` date NOT NULL,
  `kendaraan_id` int(15) DEFAULT NULL,
  `lokasi_id` int(15) DEFAULT NULL,
  `petugas_id` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `gatepass`
--

INSERT INTO `gatepass` (`id_gatepass`, `kategori_id`, `tgl_expired`, `tgl_update`, `kendaraan_id`, `lokasi_id`, `petugas_id`) VALUES
(63, 3, '2019-07-25', '2019-02-04', 1, 1, 2),
(65, 3, '2019-01-30', '2019-01-24', 1, 1, 9),
(67, 3, '2019-05-16', '2019-02-04', 1, 1, 2),
(68, 1, '2019-05-23', '2019-01-24', 14, 4, 2),
(69, 3, '2019-05-31', '2019-01-24', 19, 2, 9),
(70, 3, '2020-02-14', '2019-02-04', 1, 1, 2),
(71, 4, '2019-01-30', '2019-01-24', 21, 1, 9),
(72, 3, '2019-04-13', '2019-02-04', 1, 1, 2),
(73, 3, '2019-08-25', '2019-02-04', 1, 1, 2),
(74, 4, '2019-04-25', '2019-02-04', 14, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kendaraan`
--

CREATE TABLE `jenis_kendaraan` (
  `id_jenis` int(15) NOT NULL,
  `nama_jenis` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `jenis_kendaraan`
--

INSERT INTO `jenis_kendaraan` (`id_jenis`, `nama_jenis`) VALUES
(1, 'Station A'),
(5, 'Mobil'),
(8, 'Pengangkut Baja'),
(10, 'Kereta Api'),
(11, 'Catepillar');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(15) NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'POMI'),
(3, 'PJB O&M'),
(4, 'Kontraktor 1');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id_kendaraan` int(15) NOT NULL,
  `no_plat` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `merek` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `id_jenis` int(15) DEFAULT NULL,
  `id_pemilik` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id_kendaraan`, `no_plat`, `merek`, `id_jenis`, `id_pemilik`) VALUES
(1, 'N 7868 BG', 'Toyota', 1, 1),
(10, 'N 7872 HG', 'Honda', 1, 1),
(11, 'BH 1212  GH', 'Isuzu', 5, 6),
(14, 'LL 9876 HH', 'Daihatsu', 8, 6),
(15, 'LK 8978 HY', 'Honda', 10, 8),
(19, 'KO 0988 JH', 'Toyota', 5, 6),
(20, 'KL 98783 JH', 'Toyota', 10, 9),
(21, 'OK 9809 JJ', 'CAT', 1, 1),
(22, 'OA 9898 JH', 'Daihatsu', 1, 10),
(23, 'M 9979 KL', 'Honda', 5, 10);

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(15) NOT NULL,
  `kd_lokasi` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `nama_lokasi` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `kd_lokasi`, `nama_lokasi`) VALUES
(1, 'C', 'Admin'),
(2, 'D', 'Ash Disposal'),
(4, 'L', 'All Area');

-- --------------------------------------------------------

--
-- Table structure for table `pemilik`
--

CREATE TABLE `pemilik` (
  `id_pemilik` int(15) NOT NULL,
  `nama_pemilik` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `pemilik`
--

INSERT INTO `pemilik` (`id_pemilik`, `nama_pemilik`) VALUES
(1, 'Hari Maryawan'),
(2, 'Mohammad Barokatu Rizky'),
(5, 'Nabila Annisa'),
(6, 'Indra Kusuma'),
(8, 'John Doe'),
(9, 'Jane Doe'),
(10, 'POMI2');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(15) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `nama_petugas` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `jklm` enum('Laki-Laki','Perempuan') COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `hp` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `level` enum('Admin','Operator') COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `jklm`, `agama`, `hp`, `level`) VALUES
(2, 'hari0333', '12345', 'Hari Maryawan', 'Laki-Laki', 'Islam', '08523212399', 'Admin'),
(5, 'indra21', '12345', 'Indra Kusuma', 'Laki-Laki', 'Islam', '085232456789', 'Operator'),
(9, 'rizky21id', '12345', 'Mohammad Barokatu Rizky', 'Laki-Laki', 'Islam', '085232679777', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gatepass`
--
ALTER TABLE `gatepass`
  ADD PRIMARY KEY (`id_gatepass`),
  ADD KEY `id_petugas` (`petugas_id`) USING BTREE,
  ADD KEY `id_kategori` (`kategori_id`),
  ADD KEY `id_kendaraan` (`kendaraan_id`),
  ADD KEY `id_lokasi` (`lokasi_id`);

--
-- Indexes for table `jenis_kendaraan`
--
ALTER TABLE `jenis_kendaraan`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`),
  ADD KEY `id_jenis` (`id_jenis`),
  ADD KEY `id_pemilik` (`id_pemilik`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`id_pemilik`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gatepass`
--
ALTER TABLE `gatepass`
  MODIFY `id_gatepass` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `jenis_kendaraan`
--
ALTER TABLE `jenis_kendaraan`
  MODIFY `id_jenis` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id_kendaraan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pemilik`
--
ALTER TABLE `pemilik`
  MODIFY `id_pemilik` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gatepass`
--
ALTER TABLE `gatepass`
  ADD CONSTRAINT `id_kategori` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id_kategori`),
  ADD CONSTRAINT `id_kendaraan` FOREIGN KEY (`kendaraan_id`) REFERENCES `kendaraan` (`id_kendaraan`),
  ADD CONSTRAINT `id_lokasi` FOREIGN KEY (`lokasi_id`) REFERENCES `lokasi` (`id_lokasi`),
  ADD CONSTRAINT `id_petugas` FOREIGN KEY (`petugas_id`) REFERENCES `petugas` (`id_petugas`);

--
-- Constraints for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD CONSTRAINT `id_jenis` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_kendaraan` (`id_jenis`),
  ADD CONSTRAINT `id_pemilik` FOREIGN KEY (`id_pemilik`) REFERENCES `pemilik` (`id_pemilik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
