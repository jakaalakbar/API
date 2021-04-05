-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Mar 2021 pada 03.52
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rshb_api`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tim_favorit`
--

CREATE TABLE `tim_favorit` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `julukan` varchar(100) NOT NULL,
  `stadium` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tim_favorit`
--

INSERT INTO `tim_favorit` (`id`, `nama`, `julukan`, `stadium`) VALUES
(4, 'Bournemouth', 'Cherries', 'Vitality Stadium'),
(5, 'Bolton', 'The Trotters', 'Macron Stadium'),
(6, 'Arsenal U21', '', 'Meadow Park');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tim_favorit`
--
ALTER TABLE `tim_favorit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tim_favorit`
--
ALTER TABLE `tim_favorit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
