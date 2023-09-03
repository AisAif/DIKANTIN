-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jun 2023 pada 20.04
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dikantin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `total_harga` int(10) NOT NULL DEFAULT 0,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `total_harga`, `id_user`) VALUES
(3, 12000, 2),
(4, 16000, 2),
(5, 13500, 2),
(6, 19000, 2),
(7, 16000, 2),
(8, 13500, 2),
(10, 0, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan`
--

CREATE TABLE `makanan` (
  `id_makanan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `stok` int(5) NOT NULL,
  `harga` int(10) NOT NULL,
  `jenis` enum('makanan','minuman') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `makanan`
--

INSERT INTO `makanan` (`id_makanan`, `nama`, `stok`, `harga`, `jenis`) VALUES
(1, 'Soto Hangat', 20, 6000, 'makanan'),
(2, 'Tahu Bakso', 50, 1500, 'makanan'),
(4, 'Es Jeruk', 40, 3500, 'minuman'),
(5, 'Es Teh', 40, 2000, 'minuman'),
(6, 'Pizza', 100, 150000, 'makanan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan_keranjang`
--

CREATE TABLE `makanan_keranjang` (
  `id_makanan_keranjang` int(11) NOT NULL,
  `id_makanan` int(11) NOT NULL,
  `id_keranjang` int(11) NOT NULL,
  `jumlah` int(5) DEFAULT NULL,
  `harga` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `makanan_keranjang`
--

INSERT INTO `makanan_keranjang` (`id_makanan_keranjang`, `id_makanan`, `id_keranjang`, `jumlah`, `harga`) VALUES
(34, 1, 3, 2, 6000),
(35, 1, 4, 2, 6000),
(37, 1, 5, 2, 6000),
(38, 2, 5, 1, 1500),
(39, 1, 6, 2, 6000),
(40, 4, 6, 2, 3500),
(41, 1, 7, 2, 6000),
(42, 5, 7, 2, 2000),
(43, 2, 8, 2, 1500),
(44, 4, 8, 3, 3500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `kode_pembayaran` varchar(8) NOT NULL,
  `is_lunas` tinyint(1) NOT NULL DEFAULT 0,
  `informasi_tambahan` text DEFAULT NULL,
  `tanggal_pesanan` date NOT NULL DEFAULT current_timestamp(),
  `id_keranjang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(14) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(1) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `telepon`, `password`, `level`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, 'admin', 1),
(2, 'user', 'user@gmail.com', '0893729238923', 'user', 2),
(7, 'Ais Aif', 'aisbarulfahmi@gmail.com', '088988638935', 'user', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id_makanan`);

--
-- Indeks untuk tabel `makanan_keranjang`
--
ALTER TABLE `makanan_keranjang`
  ADD PRIMARY KEY (`id_makanan_keranjang`),
  ADD KEY `id_makanan` (`id_makanan`),
  ADD KEY `id_pesanan` (`id_keranjang`),
  ADD KEY `id_keranjang` (`id_keranjang`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD UNIQUE KEY `kode_pembayaran` (`kode_pembayaran`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_keranjang` (`id_keranjang`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `no_telepon` (`telepon`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id_makanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `makanan_keranjang`
--
ALTER TABLE `makanan_keranjang`
  MODIFY `id_makanan_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `keranjang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `makanan_keranjang`
--
ALTER TABLE `makanan_keranjang`
  ADD CONSTRAINT `makanan_keranjang_ibfk_1` FOREIGN KEY (`id_makanan`) REFERENCES `makanan` (`id_makanan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `makanan_keranjang_ibfk_2` FOREIGN KEY (`id_keranjang`) REFERENCES `keranjang` (`id_keranjang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`id_keranjang`) REFERENCES `keranjang` (`id_keranjang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
