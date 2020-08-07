-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 25, 2019 at 04:18 AM
-- Server version: 10.3.14-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id6374795_borneo`
--
CREATE DATABASE IF NOT EXISTS `id6374795_borneo` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id6374795_borneo`;

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `about_description` text NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `about_description`, `visi`, `misi`) VALUES
(4, 'Borneo Construction Sudah Berdiri Sejak tahun 2013. Perusahaan ini bergerak di bidang Merenovasi rumah interior maupun eksterior dan membagun rumah baru.                                                                                                                                                                                                                                ', 'Mejadikan Pekerjaan adalah Ibadah                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          ', 'Memaksimalkan Team Work Berdasarkan Kemampuan. Meningkatkan Komunikasi Team Work dan Pelanggan. Menghasilkan Kualitas Pekerjaan Paling Terbaik                                                                                                                                                                                                                                ');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(8) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `alamat`
--

CREATE TABLE `alamat` (
  `id_alamat` int(11) NOT NULL,
  `nama_alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alamat`
--

INSERT INTO `alamat` (`id_alamat`, `nama_alamat`) VALUES
(3, 'Bintaro Jaya, Jakarta Selatan'),
(4, 'Kelapa Gading, Jakarta utara'),
(6, 'Permata Puri 1 , Depok');

-- --------------------------------------------------------

--
-- Table structure for table `perumahan`
--

CREATE TABLE `perumahan` (
  `id_perumahan` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `alamat_id` int(11) NOT NULL,
  `file_gambar` varchar(255) NOT NULL,
  `nama_gambar` varchar(255) NOT NULL,
  `deskripsi_gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perumahan`
--

INSERT INTO `perumahan` (`id_perumahan`, `nama_kategori`, `alamat_id`, `file_gambar`, `nama_gambar`, `deskripsi_gambar`) VALUES
(33, 'Desain Rumah ', 3, '02.jpg', 'Tampak Depan', 'Desain Rumah Bintaro Tampak Depan'),
(34, 'Desain Rumah ', 3, '05.jpg', 'Tampak Samping', 'Desain Rumah Bintaro Tampak Samping'),
(35, 'Desain Rumah ', 3, '08.jpg', 'Tampak Atas', 'Desain Rumah Bintaro Tampak Atas'),
(46, 'Renovasi Rumah ', 6, 'DSC_0012.JPG', 'Renovasi Atap', 'Renovasi Rumah Bapak Tulus Pemasangan Rangka Atap 1'),
(47, 'Renovasi Rumah ', 6, 'DSC_0019.JPG', 'Renovasi Atap ', 'Renovasi Rumah Bapak Tulus Pemasangan Rangka Atap 2'),
(48, 'Renovasi Rumah ', 6, 'DSC_0020.JPG', 'Renovasi Atap', 'Renovasi Rumah Bapak Tulus Pemasangan Rangka Atap '),
(49, 'Renovasi Rumah ', 6, 'DSC_0134.JPG', 'Renovasi Atap', 'Renovasi Rumah Bapak Tulus Pemasangan Atap'),
(50, 'Bangun Rumah ', 6, 'Cimanggis-20140316-00091.jpg', 'Rumah betema Marvel', 'Pembangunan Rumah Bertema Marvel di Permata Puri 1 ,Depok'),
(51, 'Bangun Rumah ', 6, 'gbr 2.jpg', 'Rumah minimalis', 'Pembangunan Rumah di permata Puri 1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`id_alamat`);

--
-- Indexes for table `perumahan`
--
ALTER TABLE `perumahan`
  ADD PRIMARY KEY (`id_perumahan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alamat`
--
ALTER TABLE `alamat`
  MODIFY `id_alamat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `perumahan`
--
ALTER TABLE `perumahan`
  MODIFY `id_perumahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
