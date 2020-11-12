-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Nov 2020 pada 03.01
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lamaran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_info_loker`
--

CREATE TABLE `data_info_loker` (
  `id_info_loker` int(11) NOT NULL,
  `nama_loker` varchar(100) NOT NULL,
  `url_loker` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_lamaran`
--

CREATE TABLE `data_lamaran` (
  `id_lamaran` int(11) NOT NULL,
  `tanggal_dikirim` varchar(50) NOT NULL,
  `posisi_yang_dilamar` varchar(50) NOT NULL,
  `kirim_dari` enum('Email','Web','Google Form','Kirim Berkas') NOT NULL,
  `url_info_loker` varchar(255) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `email_perusahaan` varchar(50) NOT NULL,
  `nomor_telpon_perusahaan` int(15) NOT NULL,
  `alamat_perusahaan` varchar(255) NOT NULL,
  `jenis_perusahaan` varchar(50) NOT NULL,
  `website_perusahaan` varchar(100) NOT NULL,
  `psikotes` varchar(50) NOT NULL,
  `interview_hrd` varchar(50) NOT NULL,
  `interview_user` varchar(50) NOT NULL,
  `interview_owner` varchar(50) NOT NULL,
  `tes_kesehatan` varchar(50) NOT NULL,
  `status_kepastian` enum('Menunggu','Diterima','Ditolak','Tidak Ada Kepastian') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_info_loker`
--
ALTER TABLE `data_info_loker`
  ADD PRIMARY KEY (`id_info_loker`);

--
-- Indeks untuk tabel `data_lamaran`
--
ALTER TABLE `data_lamaran`
  ADD PRIMARY KEY (`id_lamaran`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_info_loker`
--
ALTER TABLE `data_info_loker`
  MODIFY `id_info_loker` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_lamaran`
--
ALTER TABLE `data_lamaran`
  MODIFY `id_lamaran` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
