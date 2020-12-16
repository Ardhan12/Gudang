-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Agu 2020 pada 13.04
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
-- Struktur dari tabel `resource_wisata`
--

CREATE TABLE `resource_wisata` (
  `id_resource` int(5) NOT NULL,
  `nama_resource` varchar(100) NOT NULL,
  `id_wisata` int(5) NOT NULL,
  `link_resource` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `tgl_post` date NOT NULL,
  `tipe_resource` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `resource_wisata`
--

INSERT INTO `resource_wisata` (`id_resource`, `nama_resource`, `id_wisata`, `link_resource`, `keterangan`, `tgl_post`, `tipe_resource`) VALUES
(1, 'SADAFGHJK', 3, 'assets/images/wisata/5f2ea15fef3c4.png', 'adggggafghj', '2020-08-08', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `resource_wisata`
--
ALTER TABLE `resource_wisata`
  ADD PRIMARY KEY (`id_resource`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `resource_wisata`
--
ALTER TABLE `resource_wisata`
  MODIFY `id_resource` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
