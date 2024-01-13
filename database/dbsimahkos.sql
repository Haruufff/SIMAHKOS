-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2023 at 04:46 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsimahkos`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand_ambassador`
--

CREATE TABLE `brand_ambassador` (
  `id_ba` int(11) NOT NULL,
  `Nama_BA` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brand_ambassador`
--

INSERT INTO `brand_ambassador` (`id_ba`, `Nama_BA`) VALUES
(1, 'WARDAH'),
(2, 'Y.O.U'),
(3, 'INEZ'),
(4, 'LA TULIPE'),
(7, 'SKINTIFIC'),
(8, 'IMPLORA'),
(9, 'pengelola');

-- --------------------------------------------------------

--
-- Table structure for table `dbarang`
--

CREATE TABLE `dbarang` (
  `id_barang` int(11) NOT NULL,
  `Nama_barang` varchar(255) NOT NULL,
  `jumlah_barang` int(255) NOT NULL,
  `harga_barang` int(255) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_EXP` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dbarang`
--

INSERT INTO `dbarang` (`id_barang`, `Nama_barang`, `jumlah_barang`, `harga_barang`, `tanggal_masuk`, `tanggal_EXP`) VALUES
(1, 'NIVEA Extra White Body Serum Care & Protect (70 ml)', 0, 24000, '2023-05-06', '2025-05-01'),
(2, 'Wardah SPF 30 PA+++ UV SHIELD', 10, 32000, '2023-05-06', '2026-01-19'),
(3, 'Vaseline Petroleum Jelly Original 50Ml - Repairing Jelly, Kulit Rusak', 10, 35000, '2023-05-06', '2026-05-01'),
(5, 'Parfum PUCELLE LA SIGNATIRE COLOGNE 115 ml', 20, 20000, '2023-05-12', '2025-01-02'),
(9, 'SKINTIFIC 5X CERAMIDE', 0, 126000, '2023-05-17', '2027-12-17'),
(11, 'Parfum MORIS TROPICAL ROMANCE', 10, 10000, '2023-05-24', '2025-12-24');

-- --------------------------------------------------------

--
-- Table structure for table `dbterjual`
--

CREATE TABLE `dbterjual` (
  `id_bterjual` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah_bterjual` int(255) NOT NULL,
  `tanggal_terjual` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dbterjual`
--

INSERT INTO `dbterjual` (`id_bterjual`, `id_barang`, `jumlah_bterjual`, `tanggal_terjual`) VALUES
(1, 1, 1, '2023-05-24'),
(2, 1, 50, '2023-05-24'),
(3, 1, 5, '2023-05-24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `id_ba` int(11) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `level` enum('Super_admin','admin','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `id_ba`, `pass`, `level`) VALUES
(8, 'Super Admin', 'superadmin', 9, 'superadmin', 'Super_admin'),
(9, 'admin', 'admin', 8, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand_ambassador`
--
ALTER TABLE `brand_ambassador`
  ADD PRIMARY KEY (`id_ba`);

--
-- Indexes for table `dbarang`
--
ALTER TABLE `dbarang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `dbterjual`
--
ALTER TABLE `dbterjual`
  ADD PRIMARY KEY (`id_bterjual`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `id_ba` (`id_ba`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand_ambassador`
--
ALTER TABLE `brand_ambassador`
  MODIFY `id_ba` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `dbarang`
--
ALTER TABLE `dbarang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `dbterjual`
--
ALTER TABLE `dbterjual`
  MODIFY `id_bterjual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dbterjual`
--
ALTER TABLE `dbterjual`
  ADD CONSTRAINT `dbterjual_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `dbarang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_ba`) REFERENCES `brand_ambassador` (`id_ba`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
