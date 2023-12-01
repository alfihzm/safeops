-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Des 2023 pada 18.56
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

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
-- Struktur dari tabel `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `deskripsi` varchar(512) NOT NULL,
  `tanggal` date NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `announcement`
--

INSERT INTO `announcement` (`id`, `judul`, `deskripsi`, `tanggal`, `date_created`) VALUES
(11, 'asasa', 'asasasasa', '0000-00-00', 1701228501),
(13, 'Kont', 'A', '0000-00-00', 1701342276);

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `nama_event` varchar(128) NOT NULL,
  `deskripsi` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporanwajib`
--

CREATE TABLE `laporanwajib` (
  `id` int(11) NOT NULL,
  `nopeg` char(6) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` text NOT NULL,
  `image` varchar(128) NOT NULL,
  `komentar` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `laporanwajib`
--

INSERT INTO `laporanwajib` (`id`, `nopeg`, `nama`, `judul`, `tanggal`, `deskripsi`, `image`, `komentar`, `date_created`) VALUES
(18, '123456', 'PT. Safeops Nusantara', 'Patroli Rutin Irwansyah', '2023-12-01', '&lt;p&gt;Tralalala trilililiilililiili&lt;/p&gt;', 'laporanwajib_002_user192000.png', 'Oke', 1701400413),
(19, '123456', 'PT. Safeops Nusantara', 'Patroli Rutin Rudi', '2023-12-01', '&lt;p&gt;Lancar jaya jos gandossss&lt;/p&gt;', 'laporanwajib_003_default2.jpg', 'Oke', 1701402083);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nopeg` char(6) NOT NULL,
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nopeg`, `nama`, `email`, `username`, `password`, `role_id`, `photo_profile`, `no_telp`, `date_created`, `is_active`) VALUES
(9, '123456', 'PT. Safeops Nusantara', 'admin@gmail.com', 'admin', '$2y$10$2yQG/dlREUZ21t/eYghiWuHpNXNBRcsfiwT0vRVtajToFh8Zx7fPa', 1, 'user123456.png', '08123456789', 1697978285, 1),
(10, '123321', 'user', 'user@gmail.com', 'user', '$2y$10$DwPLYVvpYmMwLWDR.qkAZ./KK.9jdgiHwSFXyiDHDKO..QZwXOiqS', 2, 'default.jpg', '081234567892', 1697984675, 1),
(12, '112211', 'Supriyadi', 'supri@gmail.com', 'supriyan', '$2y$10$2NRonbm0QOQqbQt9xC539.8J3jNMQfbh58S6Mh2q8w9d0F4h2jiVq', 2, 'default2.jpg', '082166617772', 1701181735, 1),
(17, '192200', 'Joseph Mansur', 'joseph@gmail.com', 'josephman', '$2y$10$dUO3yfee1W48J8OtyH.H.uS02OCgAkAwxEr1fZKE0bInW.gtZFIoG', 2, 'user192200.png', '082166678889', 1701226538, 1),
(18, '192208', 'Mohammad Alfi Hamzami', 'alfihzm@gmail.com', 'alfihzm', '$2y$10$a0lEBG.b54EZ5XJNcAkeWOHWXBYTgvp77PApMxTH8X3PKoE.k7KiW', 1, 'user192208.jpg', '082161872392', 1701226660, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(5, 2, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Kontrol Pengguna'),
(3, 'Laporan Harian');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Security');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
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
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `judul_menu`, `url`, `icon`, `is_active`) VALUES
(1, 2, 'Dashboard', 'dashboard', 'fas fa-fw fa-solid fa-gauge', 1),
(2, 2, 'Profil Saya', 'user', 'fas fa-fw fa-solid fa-user', 1),
(7, 1, 'Event Management', 'event', 'fas fa-fw fa-solid fa-calendar-days', 1),
(8, 2, 'Keluar', 'auth/logout', 'fas fa-fw fa-solid fa-door-open', 1),
(9, 1, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(10, 1, 'Announcement', 'announcement', 'fas fa-fw fa-solid fa-bullhorn', 1),
(11, 1, 'Security Management', 'member', 'fas fa-fw fa-solid fa-users', 1),
(13, 3, 'Laporan Rutin', 'reports', 'fas fa-fw fa-solid fa-file-text ', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporanwajib`
--
ALTER TABLE `laporanwajib`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `laporanwajib`
--
ALTER TABLE `laporanwajib`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
