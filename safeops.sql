-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2023 at 04:40 PM
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
-- Database: `safeops`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `deskripsi` varchar(512) NOT NULL,
  `tanggal` date NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `judul`, `deskripsi`, `tanggal`, `date_created`) VALUES
(13, 'Kont', 'A', '0000-00-00', 1701342276),
(14, 'asd', 'asd', '0000-00-00', 1701598396);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `nama_event` varchar(128) NOT NULL,
  `deskripsi` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laporanrutin`
--

CREATE TABLE `laporanrutin` (
  `id` int(11) NOT NULL,
  `nopeg` char(6) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `tanggal` date NOT NULL,
  `listrik` varchar(64) NOT NULL,
  `komentar1` varchar(128) NOT NULL,
  `alarm` varchar(64) NOT NULL,
  `komentar2` varchar(128) NOT NULL,
  `cctv` varchar(64) NOT NULL,
  `komentar3` varchar(128) NOT NULL,
  `akses1` varchar(64) NOT NULL,
  `akses2` varchar(64) NOT NULL,
  `akses3` varchar(64) NOT NULL,
  `inven1` varchar(64) NOT NULL,
  `inven2` varchar(64) NOT NULL,
  `inven3` varchar(64) NOT NULL,
  `aset1` varchar(64) NOT NULL,
  `aset2` varchar(64) NOT NULL,
  `aset3` varchar(64) NOT NULL,
  `date_created` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laporanrutin`
--

INSERT INTO `laporanrutin` (`id`, `nopeg`, `nama`, `tanggal`, `listrik`, `komentar1`, `alarm`, `komentar2`, `cctv`, `komentar3`, `akses1`, `akses2`, `akses3`, `inven1`, `inven2`, `inven3`, `aset1`, `aset2`, `aset3`, `date_created`) VALUES
(1, '123456', 'PT. Safeops Nusantara', '2023-12-05', 'Berfungsi', '', 'Berfungsi', '', 'Sempat tidak berfungsi', '', 'Pintu Utara Aman', 'Pintu Utama Aman', 'Pintu Darurat Aman', 'Rompi telah dikembalikan', 'Helm telah dikembalikan', 'Radio telah dikembalikan', 'Brankas telah diperiksa', 'Arsip telah diperiksa', 'Database telah diperiksa', '1701782181'),
(2, '123456', 'PT. Safeops Nusantara', '2023-12-05', 'Tidak berfungsi', '', 'Berfungsi', '', 'Berfungsi', '', 'Pintu Utara Aman', 'Pintu Utama Aman', 'Pintu Darurat Aman', 'Rompi telah dikembalikan', 'Helm telah dikembalikan', 'Radio telah dikembalikan', 'Brankas telah diperiksa', 'Arsip telah diperiksa', 'Database telah diperiksa', '1701786318'),
(3, '123456', 'PT. Safeops Nusantara', '2023-12-06', 'Berfungsi', '', 'Berfungsi', '', 'Berfungsi', '', 'Pintu Utara Aman', 'Pintu Utama Aman', 'Pintu Darurat Aman', 'Rompi telah dikembalikan', 'Helm telah dikembalikan', 'Radio telah dikembalikan', 'Brankas telah diperiksa', 'Arsip telah diperiksa', 'Database telah diperiksa', '1701786836');

-- --------------------------------------------------------

--
-- Table structure for table `laporanwajib`
--

CREATE TABLE `laporanwajib` (
  `id` int(11) NOT NULL,
  `nopeg` char(6) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `tanggal` date NOT NULL,
  `shift` varchar(64) NOT NULL,
  `deskripsi` text NOT NULL,
  `image` varchar(128) NOT NULL,
  `komentar` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laporanwajib`
--

INSERT INTO `laporanwajib` (`id`, `nopeg`, `nama`, `judul`, `tanggal`, `shift`, `deskripsi`, `image`, `komentar`, `date_created`) VALUES
(18, '123456', 'PT. Safeops Nusantara', 'Patroli Rutin Irwansyahputras', '2023-12-03', '', '<p>Tralalalalala Trilillili</p>', '', 'Ya Bagus Begitu Ya', 1701400413),
(19, '123456', 'PT. Safeops Nusantara', 'Patroli Rutin Rudi', '2023-12-01', '', '&lt;p&gt;Lancar jaya jos gandossss&lt;/p&gt;', 'laporanwajib_003_default2.jpg', 'Oke', 1701402083),
(20, '192208', 'Mohammad Alfi Hamzami', 'Laporan Kerusakan Aset Maharaja', '2023-12-02', '', '&lt;p&gt;Rubik ini telah dirusak oleh seseorang yang tidak bertanggung jawab, saat ini para security sedang mencari pelaku dari perusak rubik ini&lt;/p&gt;', 'laporanwajib_007_rubik-test.jpg', 'Rubik Milik Maharaja', 1701510811),
(21, '123456', 'PT. Safeops Nusantara', 'Libur UAS Genapppp', '2023-12-04', '', '&lt;p&gt;Klo gitu wakwakiwaokwaokaw&amp;nbsp;&lt;strong&gt;oakwowaokwa&amp;nbsp;&lt;/strong&gt;ssdas&amp;nbsp;&lt;em&gt;sdsdamakan&lt;/em&gt;&lt;/p&gt;', 'laporanwajib_009_user192020221.png', 'Tidak ada', 1701678490),
(22, '123456', 'PT. Safeops Nusantara', 'Makan Nasi', '2023-12-04', 'Malam', '&lt;p&gt;Assede&amp;nbsp;&lt;strong&gt;assalamu\'alaikum&lt;/strong&gt; sama lu semua&lt;/p&gt;', 'laporanwajib_010_user19202022.png', 'Tidak ada', 1701682332);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nopeg` char(8) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `photo_profile` varchar(128) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `date_created` int(11) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nopeg`, `nama`, `email`, `username`, `password`, `role_id`, `photo_profile`, `no_telp`, `date_created`, `is_active`) VALUES
(9, '12345678', 'PT. Safeops Nusantara', 'admin@gmail.com', 'admin', '$2y$10$GukxhWTantLZLLCUfT84juYIVbZFDRiZy5pnzz6fHHQwag0vcFlYK', 1, 'user12345678.png', '08123456789', 1697978285, 1),
(10, '12332132', 'user', 'user@gmail.com', 'user', '$2y$10$DwPLYVvpYmMwLWDR.qkAZ./KK.9jdgiHwSFXyiDHDKO..QZwXOiqS', 2, 'default.jpg', '081234567892', 1697984675, 1),
(12, '11221122', 'Supriyadi', 'supri@gmail.com', 'supriyan', '$2y$10$2NRonbm0QOQqbQt9xC539.8J3jNMQfbh58S6Mh2q8w9d0F4h2jiVq', 2, 'default2.jpg', '082166617772', 1701181735, 1),
(17, '19202022', 'Joseph Mansur', 'joseph@gmail.com', 'josephman', '$2y$10$dUO3yfee1W48J8OtyH.H.uS02OCgAkAwxEr1fZKE0bInW.gtZFIoG', 2, 'user192020221.png', '082166678889', 1701226538, 1),
(18, '19220821', 'Mohammad Alfi Hamzami', 'alfihzm@gmail.com', 'alfihzm', '$2y$10$a0lEBG.b54EZ5XJNcAkeWOHWXBYTgvp77PApMxTH8X3PKoE.k7KiW', 1, 'user19220821.png', '082161872392', 1701226660, 1),
(30, '19286423', 'Sandy Andriawan', 'andri@gmail.com', 'andriawan', '$2y$10$fUJrVKwzIOoxmYWg.Ofe8eWntk3K..1vQ7nW3xH9tvjkDRNdWlc5a', 2, 'user19286423.png', '082176239245', 1701510229, 1),
(31, '10240821', 'Hendra Ferdiawan', 'hendra@gmail.com', 'hendra', '$2y$10$QT7kDoSc8ctTlToGLW3zpupwKkGssuy0IHHfrAZgkWu8D2ei8nV0m', 2, 'default2.jpg', '082134502852', 1701517070, 1),
(32, '10242024', 'Agus Purnomo', 'agus@gmail.com', 'aguspur', '$2y$10$kfm8kcOYhTnlSGoPJ.UaVehvNtFA4t3wMemF7lD3migE0ng.j5/cG', 2, 'default2.jpg', '082177772222', 1701517560, 1),
(33, '10247254', 'Mahmud Pangestu', 'mahmud@gmail.com', 'mahmud', '$2y$10$7d.V7r1n.QZH/F4U/nreJer4egLdu9WLCuBHi2Ib5EkbLePOxzznC', 2, 'default2.jpg', '082166662424', 1701518241, 1),
(34, '10242382', 'Ibun Saragih', 'ibun@gmail.com', 'ibunsar', '$2y$10$GSQnD9PUaC1uOPBdpSuvUuUg5N6out3dMEouAbQrk0/Zq8.DTCA..', 2, 'default2.jpg', '082174739562', 1701534014, 1),
(35, '10243834', 'Marsudi Firgantoro', 'marsudi@gmail.com', 'marsudi', '$2y$10$983/mVFxWQ.Oo1gDwlum4uWRMJ.kh7pWOxyZXRs.EROkL/fO0Mh7y', 2, 'default2.jpg', '082174637242', 1701534055, 1),
(36, '10243438', 'Rahmat Budiman', 'rahmat@gmail.com', 'rahmat', '$2y$10$oAqO7zupN2rttfGIWYDeVeigIXarexN/nNu03zE3augwD8lzceZLq', 2, 'default2.jpg', '082173462847', 1701535572, 1),
(41, '10248347', 'Galuh Sucahyo', 'galuh@gmail.com', 'galuh', '$2y$10$PG.Fe.r5.QUQOs3kZB7cwO1qh9QHOw3h4Ya0orqvlrdjWRa/tTTWq', 2, 'default2.jpg', '082176382583', 1701537051, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(5, 2, 3),
(6, 1, 4),
(7, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Administrator'),
(2, 'Kontrol Pengguna'),
(3, 'Laporan Harian');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Security');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `judul_menu` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `judul_menu`, `url`, `icon`, `is_active`) VALUES
(1, 2, 'Dashboard', 'dashboard', 'fas fa-fw fa-solid fa-gauge', 1),
(2, 2, 'Profil Saya', 'user', 'fas fa-fw fa-solid fa-user', 1),
(6, 1, 'Announcement', 'announcement', 'fas fa-fw fa-solid fa-bullhorn', 1),
(7, 1, 'Event Management', 'event', 'fas fa-fw fa-solid fa-calendar-days', 1),
(8, 2, 'Keluar', 'auth/logout', 'fas fa-fw fa-solid fa-door-open', 1),
(9, 1, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 0),
(11, 1, 'Security Management', 'member', 'fas fa-fw fa-solid fa-users', 1),
(13, 3, 'Laporan Rutin', 'reports', 'fas fa-fw fa-solid fa-file-text ', 1),
(14, 4, 'Menu Testing', 'reports', 'fas fa-fw fa-solid fa-gear', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporanrutin`
--
ALTER TABLE `laporanrutin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporanwajib`
--
ALTER TABLE `laporanwajib`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `laporanrutin`
--
ALTER TABLE `laporanrutin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `laporanwajib`
--
ALTER TABLE `laporanwajib`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
