-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2025 at 07:00 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkegiatan_dosen`
--

-- --------------------------------------------------------

--
-- Table structure for table `bidang_ilmu`
--

CREATE TABLE `bidang_ilmu` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bidang_ilmu`
--

INSERT INTO `bidang_ilmu` (`id`, `nama`, `deskripsi`) VALUES
(1, 'Ilmu Agama', 'Pendidikan Agama Islam'),
(2, 'Teknik', 'Teknik');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nidn` varchar(20) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `gelar_belakang` varchar(30) DEFAULT NULL,
  `gelar_depan` varchar(20) DEFAULT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `tempat_lahir` varchar(45) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `tahun_masuk` int(11) DEFAULT NULL,
  `prodi_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nidn`, `nama`, `gelar_belakang`, `gelar_depan`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `email`, `tahun_masuk`, `prodi_id`) VALUES
(0, '1234567890', 'RAFIQ ABDUL AJIZ', 'S.Kom', '-', 'L', 'SUKABUMI', '2001-02-01', 'Kota Bogor', 'rafi21333si@student.nurulfikri.ac.id', 2021, 1),
(0, '0110121333', 'WILDA AULIA', 'S.Kom', '-', 'P', 'BOGOR', '2025-05-15', 'Depok', 'wildaaulia2019@gmail.com', 2021, 2);

-- --------------------------------------------------------

--
-- Table structure for table `dosen_kegiatan`
--

CREATE TABLE `dosen_kegiatan` (
  `dosen_id` int(11) NOT NULL,
  `kegiatan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dosen_kegiatan`
--

INSERT INTO `dosen_kegiatan` (`dosen_id`, `kegiatan_id`) VALUES
(0, 0),
(0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kegiatan`
--

CREATE TABLE `jenis_kegiatan` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `tempat` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `jenis_kegiatan_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `tanggal_mulai`, `tanggal_selesai`, `tempat`, `deskripsi`, `jenis_kegiatan_id`) VALUES
(0, '2025-05-15', '2025-05-15', 'Kampus B', 'Seminar', 1),
(0, '2025-05-16', '2025-05-16', 'Kampus B', 'Pelatihan', 2),
(0, '2025-05-16', '2025-05-17', 'Kampus B', 'Pengabdian', 3),
(0, '2025-05-22', '2025-05-31', 'Kampus A', 'Pelatihan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `penelitian`
--

CREATE TABLE `penelitian` (
  `id` int(11) NOT NULL,
  `judul` text DEFAULT NULL,
  `mulai` date DEFAULT NULL,
  `akhir` date DEFAULT NULL,
  `tahun_ajaran` varchar(5) DEFAULT NULL,
  `bidang_ilmu_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `penelitian`
--

INSERT INTO `penelitian` (`id`, `judul`, `mulai`, `akhir`, `tahun_ajaran`, `bidang_ilmu_id`) VALUES
(0, 'Penelitian Sistem Informasi', '2025-05-15', '2025-05-16', '2025', 1),
(0, 'Teknik Informatika', '2025-05-14', '2025-05-15', '2024/', 2),
(0, 'SI', '2025-05-01', '2025-05-30', '2021/', 3);

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `telpon` varchar(20) DEFAULT NULL,
  `ketua` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `kode`, `nama`, `alamat`, `telpon`, `ketua`) VALUES
(0, '1', 'RAFIQ ABDUL AJIZ', NULL, NULL, 'MISNA '),
(0, '432', 'WILDA AULIA', NULL, NULL, 'MISNA ');

-- --------------------------------------------------------

--
-- Table structure for table `tim_penelitian`
--

CREATE TABLE `tim_penelitian` (
  `dosen_id` int(11) NOT NULL,
  `penelitian_id` int(11) NOT NULL,
  `peran` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidang_ilmu`
--
ALTER TABLE `bidang_ilmu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bidang_ilmu`
--
ALTER TABLE `bidang_ilmu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
