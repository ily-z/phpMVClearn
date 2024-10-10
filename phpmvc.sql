-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Okt 2024 pada 19.35
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmvc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_orang`
--

CREATE TABLE `data_orang` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nomer` int(255) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_orang`
--

INSERT INTO `data_orang` (`id`, `nama`, `nomer`, `alamat`, `status`) VALUES
(1, 'Ahmad', 256, 'sukorejo', 'aktif'),
(2, 'Bagus', 321, 'Surabaya', 'aktif'),
(3, 'Joko', 321, 'kamal', 'nonaktif'),
(4, 'mamat', 784, 'kuningan', 'aktif'),
(14, 'dewiku', 123, 'asdasd', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_orang`
--
ALTER TABLE `data_orang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_orang`
--
ALTER TABLE `data_orang`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
