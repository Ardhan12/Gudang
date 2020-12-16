-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Agu 2020 pada 06.55
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
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(5) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `tgl_post` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `gambar`, `keterangan`, `tgl_post`) VALUES
(5, 'Judul Berita', 'assets/images/berita/5f30a6053e2db.jpg', 'lorem ipsum sit amet lorem ipsum sit amet lorem ipsum sit amet lorem ipsum sit amet lorem ipsum sit amet lorem ipsum sit amet lorem ipsum sit amet lorem ipsum sit amet lorem ipsum sit amet lorem ipsum sit amet lorem ipsum sit amet lorem ipsum sit amet lorem ipsum sit amet lorem ipsum sit amet lorem ipsum sit amet lorem ipsum sit amet lorem ipsum sit amet lorem ipsum sit amet lorem ipsum sit amet lorem ipsum sit amet lorem ipsum sit amet lorem ipsum sit amet lorem ipsum sit amet lorem ipsum sit amet lorem ipsum sit amet lorem ipsum sit amet lorem ipsum sit amet lorem ipsum sit amet lorem ipsum sit amet lorem ipsum sit amet lorem ipsum sit amet lorem ipsum sit amet lorem ipsum sit amet lorem ipsum sit amet lorem ipsum sit amet lorem ipsum sit amet lorem ipsum sit amet lorem ipsum sit amet lorem ipsum sit amet ', '2020-08-10');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
