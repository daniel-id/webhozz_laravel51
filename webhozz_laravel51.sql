-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2018 at 04:52 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webhozz_laravel51`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `access_rights` varchar(50) NOT NULL,
  `remember_token` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `access_rights`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', '$2y$10$PCTur7Jfd65edtcPO31F5uJcpkrOHQJnqz/yqsHAVVIjBdsl9tKH6', 'user', 'qqySJRbDliVHIHeYJJ5UbFSWfaBopP9yZ7fX7AeNI0rT2aGsL4B3NO3KvFs0', '2018-08-04 05:37:00', '2018-08-10 23:11:01'),
(3, 'daniel', '$2y$10$WpX5U1oiC2HL8Ltutp3rLOKezXOT05.vQp8dxSK7A6aSHxygiUXxq', 'admin', '', '2018-08-06 10:22:16', '2018-08-06 10:22:16'),
(4, 'info@admin.com', '$2y$10$Cx.kXyzqi1INwV4ncwEkneHNhN4rS/DGmEFEZtNfOcAYoVT0nFHaa', 'user', '6WShTdZDrTVwmrFi7GbeDgY0J8sSFqni8SEKxL72NTTFb9zFMNjPUg6iJnVx', '2018-08-11 06:20:12', '2018-08-13 06:20:48');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `no_hp` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `alamat`, `kelas`, `no_hp`, `email`) VALUES
(1, 'Adi Nurhuda', 'Jakarta Barat', 'Laravel', '081234567890', 'adi@gmail.com'),
(2, 'Budi Juanda', 'Bekasi', 'Android Development', '08187654321', 'budi@gmail.com'),
(3, 'Cahaya', 'Tangerang', 'PHP and MySQL', '081111111111', 'cahaya@gmail.com'),
(4, 'Dian Ningrum', 'Bandung', 'Web Master', '08155555555555', 'dianningrum@gmail.com'),
(9, 'Jhony', 'Jakarta Timur', 'Graphic Design', '081778713813', 'jhony@yahoo.com'),
(11, 'Iwan', 'Cilacap', 'PHP OOP', '0819238723232', 'iwan@mail.com'),
(16, 'Eka', 'Blitar', 'Laravel', '081223322323', 'eka@outlook.com'),
(17, 'Agus', 'Tangerang Selatan', 'OOP PHP', '081866996777', 'a@b.c'),
(18, 'Jhony', 'Tangerang Selatan', 'Laravel', '081866998908', 'a@b.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
