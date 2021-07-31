-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2021 at 08:42 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cherline`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `publish` int(1) NOT NULL,
  `terjual` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `gambar`, `publish`, `terjual`) VALUES
(11, 'Valorant', 'valorant.jpg', 1, 2),
(16, 'Free fire', 'ff.jpg', 1, 3),
(21, 'Mobile Legend', 'ml.jpg', 1, 0),
(22, 'Hago', 'hago.jpg', 1, 0),
(23, 'Genshin Impact', 'gensin.png', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nota_pembayaran`
--

CREATE TABLE `nota_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `metode_pembayaran` varchar(255) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_voucher` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nota_pembayaran`
--

INSERT INTO `nota_pembayaran` (`id_pembayaran`, `metode_pembayaran`, `tgl_pembayaran`, `id_user`, `id_kategori`, `id_voucher`, `status`) VALUES
(4, 'Cash', '2021-05-05', 9, 16, 20, 'Pembayaran selesai'),
(15, 'Alfamart', '2021-06-12', 9, 16, 20, 'Pembayaran Selesai'),
(18, 'Gopay', '2021-06-17', 9, 23, 27, 'Menyelesaikan pembayaran'),
(19, 'Gopay', '2021-06-17', 9, 11, 37, 'Menyelesaikan pembayaran');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `notelp` varchar(13) NOT NULL,
  `jeniskelamin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `password`, `email`, `role`, `gambar`, `notelp`, `jeniskelamin`) VALUES
(6, 'sales', '$2y$10$8Ahq3yXow/zSOnPSFRAT/ezsGnak4X.26FgigpsvS3SMCurHd0sdC', 'sales1@gmail.com', '2', 'profile.jfif', '0855', 'Pria'),
(8, 'Billy', '$2y$10$H5xto5vdnAfW5yYj7Ka3ZukN1Li4ffsrSG9SBmKkD8u4HwwqqqRbi', 'admin@gmail.com        ', '3', 'profile.jfif', '0855', 'Wanita'),
(9, 'Billy', '$2y$10$MqfWykFjKTPFQ081hVNGyuszLVprbJOK7Zza2PA83wlO3ZNZTnO3G', 'pembeli1@gmail.com', '1', 'profile.jfif', '085523786041', 'Wanita'),
(13, 'Daffa', '0e936a95d24683d3e4db7a0f4bd8a76b04a91d24', 'daffa@gmail.com', '2', 'profile.jfif', '12345', 'Pria');

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `id_voucher` int(11) NOT NULL,
  `nama_voucher` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `publish_voucher` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`id_voucher`, `nama_voucher`, `keterangan`, `stock`, `harga`, `publish_voucher`, `id_kategori`) VALUES
(20, '12 Diamond', '', 1, 12000, 1, 16),
(22, '125 Point', '', 10, 125000, 0, 11),
(24, '60 Genesis Crystals', '', 100, 60000, 1, 23),
(25, '300+30 Genesis Crystals', '', 100, 300000, 1, 23),
(26, '980+110 Genesis Crystals', '', 100, 980000, 1, 23),
(27, '1980+260 Genesis Crystals', '', 100, 1980000, 1, 23),
(29, '5 Diamond', '', 100, 5000, 1, 16),
(30, '50 Diamond', '', 100, 50000, 1, 16),
(31, '70 Diamond', '', 100, 70000, 1, 16),
(32, '6 Diamond', '', 100, 6000, 1, 22),
(33, '45 Diamond', '', 100, 45000, 1, 22),
(34, '90 Diamond', '', 100, 90000, 1, 22),
(35, '225 Diamond', '', 100, 225000, 1, 22),
(36, '420 Points', '', 100, 420000, 1, 11),
(37, '700 Points', '', 100, 700000, 1, 11),
(38, '1375 Points', '', 100, 1375000, 0, 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `nota_pembayaran`
--
ALTER TABLE `nota_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_voucher` (`id_voucher`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id_voucher`) USING BTREE,
  ADD KEY `id_kategori` (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `nota_pembayaran`
--
ALTER TABLE `nota_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id_voucher` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nota_pembayaran`
--
ALTER TABLE `nota_pembayaran`
  ADD CONSTRAINT `id_kategori1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_voucher` FOREIGN KEY (`id_voucher`) REFERENCES `voucher` (`id_voucher`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `voucher`
--
ALTER TABLE `voucher`
  ADD CONSTRAINT `id_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
