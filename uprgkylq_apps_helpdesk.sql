-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 04 Jul 2022 pada 19.38
-- Versi server: 10.3.34-MariaDB-cll-lve
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uprgkylq_apps_helpdesk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gender`
--

CREATE TABLE `tbl_gender` (
  `inisial` varchar(1) NOT NULL,
  `jenis_gender` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_gender`
--

INSERT INTO `tbl_gender` (`inisial`, `jenis_gender`) VALUES
('L', 'Laki-Laki'),
('P', 'Perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jenis`
--

CREATE TABLE `tbl_jenis` (
  `id_jenis` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_jenis`
--

INSERT INTO `tbl_jenis` (`id_jenis`, `jenis`) VALUES
(1, 'Desktop'),
(2, 'AIO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pc`
--

CREATE TABLE `tbl_pc` (
  `id_pc` varchar(11) NOT NULL,
  `nama_pc` varchar(50) NOT NULL,
  `tipe_pc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pc`
--

INSERT INTO `tbl_pc` (`id_pc`, `nama_pc`, `tipe_pc`) VALUES
('PC001', 'PC satu', 1),
('PC002', 'pc 2', 2),
('PC003', 'Mini PC', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_status`
--

CREATE TABLE `tbl_status` (
  `id_sts` int(11) NOT NULL,
  `sts` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_status`
--

INSERT INTO `tbl_status` (`id_sts`, `sts`) VALUES
(1, 'Menunggu'),
(2, 'Dikerjakan'),
(3, 'Selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_teknisi`
--

CREATE TABLE `tbl_teknisi` (
  `id_teknisi` varchar(11) NOT NULL,
  `nama_teknisi` varchar(50) NOT NULL,
  `gender_teknisi` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_teknisi`
--

INSERT INTO `tbl_teknisi` (`id_teknisi`, `nama_teknisi`, `gender_teknisi`) VALUES
('T001', 'M2V', 'L'),
('T002', 'Ammar', 'L'),
('T003', 'Rusman', 'L'),
('T004', 'Abu', 'L'),
('T005', 'asd', 'P');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tiket`
--

CREATE TABLE `tbl_tiket` (
  `id_tiket` varchar(11) NOT NULL,
  `id_karyawan` varchar(11) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `keluhan` text NOT NULL,
  `foto` text NOT NULL,
  `tgl_buat` date NOT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `teknisi` varchar(11) DEFAULT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_jenis`
--
ALTER TABLE `tbl_jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `tbl_pc`
--
ALTER TABLE `tbl_pc`
  ADD PRIMARY KEY (`id_pc`);

--
-- Indeks untuk tabel `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`id_sts`);

--
-- Indeks untuk tabel `tbl_teknisi`
--
ALTER TABLE `tbl_teknisi`
  ADD PRIMARY KEY (`id_teknisi`);

--
-- Indeks untuk tabel `tbl_tiket`
--
ALTER TABLE `tbl_tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_jenis`
--
ALTER TABLE `tbl_jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `id_sts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
