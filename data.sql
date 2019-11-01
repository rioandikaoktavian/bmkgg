-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Okt 2019 pada 02.59
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_fklim`
--

CREATE TABLE `data_fklim` (
  `id_datafklim` int(11) NOT NULL,
  `id_fklim` int(11) NOT NULL,
  `tgl_upload` date NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_size` int(20) NOT NULL,
  `file_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_fklim`
--

INSERT INTO `data_fklim` (`id_datafklim`, `id_fklim`, `tgl_upload`, `file_name`, `file_size`, `file_type`) VALUES
(3, 1, '2019-10-28', 'Pengantar_Analisis_Kebutuhan-7.pptx', 1070006, 'pptx'),
(4, 1, '2019-10-28', 'Penggambaran_Proses_Bisnis-11.pptx', 383439, 'pptx'),
(5, 2, '2019-10-28', 'LAPORAN-4.docx', 1285465, 'docx'),
(6, 2, '2019-10-28', 'Conceptual__Logical_and_Physical_Data_Model-1.pptx', 848026, 'pptx'),
(7, 2, '2019-10-28', 'Economical-Stock-Market-PowerPoint-Templates.pptx', 5339687, 'pptx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_hujan`
--

CREATE TABLE `data_hujan` (
  `id` int(11) NOT NULL,
  `id_kabupaten` int(11) NOT NULL,
  `tgl_upload` date NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_size` int(20) NOT NULL,
  `file_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_hujan`
--

INSERT INTO `data_hujan` (`id`, `id_kabupaten`, `tgl_upload`, `file_name`, `file_size`, `file_type`) VALUES
(1, 8, '2019-10-28', '1._Larik__Array.doc', 39424, 'doc'),
(2, 8, '2019-10-28', 'agroinformatika-3.docx', 382166, 'docx'),
(3, 8, '2019-10-28', 'DATWARE_HOUSE.docx', 12855, 'docx'),
(4, 7, '2019-10-28', 'Laporan_Pemograman_Berbasis_Dekstop.docx', 957046, 'docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fklim`
--

CREATE TABLE `fklim` (
  `id_fiklim` int(11) NOT NULL,
  `data_fklim` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fklim`
--

INSERT INTO `fklim` (`id_fiklim`, `data_fklim`) VALUES
(1, 'Stasiun Klimatologi Malang'),
(2, 'Stamet Juanda Sidoarjo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id_kabupaten` int(100) NOT NULL,
  `nama_kabupaten` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kabupaten`
--

INSERT INTO `kabupaten` (`id_kabupaten`, `nama_kabupaten`, `provinsi`) VALUES
(5, 'Kabupaten Jember', 'Jawa Timur'),
(6, 'Kabupaten Probolinggo', 'Jawa Timur'),
(7, 'Kabupaten Pacitan', 'Jawa Timur'),
(8, 'Kabupaten Banyuwangi', 'Jawa Timur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `tgl_daftar`, `nama`, `email`, `username`, `password`) VALUES
(5, '2019-09-24', 'BMKG MALANG', 'bmkgmalang@gmail.com', 'bmkgmalang', '7a703f69829c9b0bcad92cbfcf70922b'),
(7, '2019-10-07', 'fio', 'aldifio80@yahoo.com', 'fio', 'b091759596b9ac3a22415be6ca74c503');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_fklim`
--
ALTER TABLE `data_fklim`
  ADD PRIMARY KEY (`id_datafklim`);

--
-- Indeks untuk tabel `data_hujan`
--
ALTER TABLE `data_hujan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fklim`
--
ALTER TABLE `fklim`
  ADD PRIMARY KEY (`id_fiklim`);

--
-- Indeks untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id_kabupaten`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_fklim`
--
ALTER TABLE `data_fklim`
  MODIFY `id_datafklim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `data_hujan`
--
ALTER TABLE `data_hujan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `fklim`
--
ALTER TABLE `fklim`
  MODIFY `id_fiklim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id_kabupaten` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
