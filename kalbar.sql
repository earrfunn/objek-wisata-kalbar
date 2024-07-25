-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jul 2022 pada 13.12
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kalbar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `beli`
--

CREATE TABLE `beli` (
  `id_beli` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `noid` varchar(16) DEFAULT NULL,
  `nohp` varchar(15) DEFAULT NULL,
  `tmpwisata` varchar(255) NOT NULL,
  `tgl` date DEFAULT NULL,
  `pdewasa` int(11) DEFAULT NULL,
  `panak` int(11) DEFAULT NULL,
  `harga` int(255) DEFAULT NULL,
  `total` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `beli`
--

INSERT INTO `beli` (`id_beli`, `nama`, `noid`, `nohp`, `tmpwisata`, `tgl`, `pdewasa`, `panak`, `harga`, `total`) VALUES
(84, 'Kharisudin Aqib', '46744', '085868646342', '5', '2022-07-14', 4, 5, 0, 0),
(85, 'jojo', '1234567891234567', '085868646342', '3', '2022-07-22', 3, 5, 15000, 82500),
(86, 'candi arjuna', '1234567890123654', '085868646342', '1', '2022-07-28', 4, 2, 15000, 75000),
(87, 'curug pitu', '1234567890123654', '085868646342', '2', '2022-07-20', 2, 0, 5000, 10000),
(88, 'sileri', '1234567890123654', '085868646342', '4', '2022-07-16', 4, 1, 5000, 22500),
(89, 'cipetuk', '1234567890123654', '085868646342', '6', '2022-07-29', 1, 1, 5000, 7500),
(90, 'reza', '234253', '085868646342', '4', '2022-07-28', 1, 1, 5000, 7500);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `beli`
--
ALTER TABLE `beli`
  ADD PRIMARY KEY (`id_beli`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `beli`
--
ALTER TABLE `beli`
  MODIFY `id_beli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
