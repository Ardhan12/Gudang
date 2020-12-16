-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Agu 2020 pada 11.19
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sarugo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar_produk`
--

CREATE TABLE `gambar_produk` (
  `id_gambar` int(5) NOT NULL,
  `id_produk` int(5) NOT NULL,
  `src` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gambar_produk`
--

INSERT INTO `gambar_produk` (`id_gambar`, `id_produk`, `src`) VALUES
(3, 6, 'assets/images/produk/5f3ce15f09556.jpg'),
(4, 6, 'assets/images/produk/5f3ce15f099a0.jpg'),
(5, 7, 'assets/images/produk/5f3ce24f09d52.png'),
(6, 7, 'assets/images/produk/5f3ce24f0a1b8.jpg'),
(7, 8, 'assets/images/produk/5f3ce400e2e37.png'),
(8, 8, 'assets/images/produk/5f3ce400e34b0.png'),
(9, 9, 'assets/images/produk/5f3ce49ac0142.jpg'),
(10, 9, 'assets/images/produk/5f3ce49ac05d5.jpg'),
(11, 9, 'assets/images/produk/5f3ce49ac187b.jpg'),
(12, 9, 'assets/images/produk/5f3ce49ac20d8.jpg'),
(13, 9, 'assets/images/produk/5f3ce49ac284f.jpg'),
(14, 9, 'assets/images/produk/5f3ce88418fcb.png'),
(15, 9, 'assets/images/produk/5f3ce8841970e.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gambar_produk`
--
ALTER TABLE `gambar_produk`
  ADD PRIMARY KEY (`id_gambar`),
  ADD KEY `id_produk` (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gambar_produk`
--
ALTER TABLE `gambar_produk`
  MODIFY `id_gambar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
