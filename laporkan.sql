-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2024 at 03:19 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laporkan`
--

-- --------------------------------------------------------

--
-- Table structure for table `lapor`
--
-- Error reading structure for table laporkan.lapor: #1030 - Got error 194 &quot;Tablespace is missing for a table&quot; from storage engine InnoDB
-- Error reading data for table laporkan.lapor: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near &#039;FROM `laporkan`.`lapor`&#039; at line 1

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `kontak` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `keterangan` varchar(600) NOT NULL,
  `status` varchar(100) NOT NULL,
  `pesan` varchar(200) NOT NULL,
  `solusi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`id`, `username`, `password`) VALUES
(12, 'kikoy', '$2y$10$5PsmhmCM6FMpSnv5ZKYeUetifDI4asUBEio4emPDlR5j.Vsl7oD/y'),
(13, 'Azkha', '$2y$10$U0AZVjNDD4ZVDsPvd68ep.avyCATEPSva6T9Qeq0BSi3.VtTMznE6'),
(14, 'bibin', '$2y$10$gywu4vuPRleZ12rV06W5X.MIlMFV3SgH8wiTyn9CfT.hVxgSWfgOO'),
(15, 'ziva', '$2y$10$hVxQs/PclWeVliy8isyOMuAWqVIObYo2Nqru3evpQMbvpubjSsp02'),
(16, 'djawir', '$2y$10$iHsZ7L2FlYmyRGryDR5GZeFM1r/nR/LvU7Ht30qy.6C4IVUGGuSzm');

-- --------------------------------------------------------

--
-- Table structure for table `login_piber`
--

CREATE TABLE `login_piber` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_piber`
--

INSERT INTO `login_piber` (`id`, `username`, `password`) VALUES
(4, 'kikoy', '$2y$10$9j15deFi8kq7D.KHJcQ8huCTPmatduMTaRehEpNW986SrkXo4KUnC'),
(5, 'Azkha', '$2y$10$w5ESut.AW0IuqkGacfLrweMTJ4N5CbBscBIo.S4TKFVtA0CWEQ3T.'),
(6, 'bibin', '$2y$10$F.ZfQ5lpuUjHMaNvomJlguXT6Fsko6lVHAalsNCPKYL9IlbNroMvW'),
(7, 'jipoy', '$2y$10$QIjkn2MbwW9wgNNpiQ8ureO/m.OnCcNHiXSXMSeRf2Zos5V0iPfA6'),
(8, 'djawir', '$2y$10$4xJNsUiMBspPzC9.pX7Kaetydz8pCMuDGBfKQTL96Ua3M7lyive4i');

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

CREATE TABLE `login_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_user`
--

INSERT INTO `login_user` (`id`, `username`, `password`) VALUES
(6, 'kikoy', '$2y$10$dnD1qd53irsy3f8INzsJ1.dXVO3JDCIq8lv4pCDY8nVCe3zctiql.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_piber`
--
ALTER TABLE `login_piber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `login_piber`
--
ALTER TABLE `login_piber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login_user`
--
ALTER TABLE `login_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
