-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Des 2025 pada 00.41
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
-- Database: `crudci4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `harga`, `stok`, `created_at`, `updated_at`) VALUES
(2, 'Gula Pasir', 12000, 150, NULL, NULL),
(3, 'Minyak Goreng', 25000, 170, NULL, NULL),
(4, 'Telor Ayam', 35000, 100, NULL, NULL),
(6, 'Kapal Api', 1000, 200, NULL, NULL),
(7, 'Gandum', 10000, 50, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2025-12-12-065814', 'App\\Database\\Migrations\\Barang', 'default', 'App', 1765537430, 1),
(2, '2025-12-13-010346', 'App\\Database\\Migrations\\Pelanggan', 'default', 'App', 1765587910, 2),
(3, '2025-12-13-021627', 'App\\Database\\Migrations\\Transaksi', 'default', 'App', 1765592362, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `alamat`, `no_hp`, `created_at`, `updated_at`) VALUES
(4, 'Jihan', 'Podosugih', '03893048471', '2025-12-20 06:33:23', '2025-12-20 06:33:23'),
(5, 'Anang', 'Kergon', '098745748639', '2025-12-20 06:33:44', '2025-12-20 06:33:44'),
(6, 'Fadli', 'Sapuro', '087625374846', '2025-12-20 06:34:05', '2025-12-20 06:34:05'),
(7, 'Cholik', 'Pringlangu', '083537454739', '2025-12-20 06:34:24', '2025-12-20 06:34:24'),
(8, 'Galang', 'Wiradesa', '098635474725', '2025-12-20 06:34:38', '2025-12-20 06:34:38'),
(9, 'RIzki', 'Panjang Wetan', '09735313193791', '2025-12-20 06:34:59', '2025-12-20 06:34:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `pelanggan_id` int(11) NOT NULL,
  `barang_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `pelanggan_id`, `barang_id`, `qty`, `total`, `created_at`) VALUES
(4, 4, 2, 12, 144000, NULL),
(5, 5, 6, 20, 20000, NULL),
(6, 7, 7, 1, 10000, NULL),
(7, 6, 4, 8, 280000, NULL),
(8, 9, 6, 2, 2000, NULL),
(9, 7, 7, 1, 10000, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
