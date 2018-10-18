-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Okt 2018 pada 13.41
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sma1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `nis` int(20) NOT NULL,
  `nama_anggota` varchar(250) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jekel` enum('Laki-Laki','Perempuan') NOT NULL,
  `kelas` varchar(7) NOT NULL,
  `jurusan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`nis`, `nama_anggota`, `tgl_lahir`, `jekel`, `kelas`, `jurusan`) VALUES
(13445221, 'Ricky', '1997-06-20', 'Laki-Laki', 'XI', 'IPSs');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(15) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `pengarang` varchar(200) NOT NULL,
  `penerbit` varchar(200) NOT NULL,
  `tahun_terbit` varchar(4) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `jumlah_buku` int(3) NOT NULL,
  `lokasi` varchar(25) NOT NULL,
  `tgl_buku_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `isbn`, `jumlah_buku`, `lokasi`, `tgl_buku_masuk`) VALUES
('12', 'Framework YII', 'Badiyanto', 'Sucipto', '1988', '2352622', 16, 'Rak 4', '2017-08-24'),
('2', 'Bahasa Inggris', 'Yudi jjj', 'Erlangga', '1989', '11355621', 2, 'Rak7', '2017-08-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `denda`
--

CREATE TABLE `denda` (
  `no` int(1) NOT NULL,
  `nominal_denda` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `denda`
--

INSERT INTO `denda` (`no`, `nominal_denda`) VALUES
(1, 200);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(9) NOT NULL,
  `id_buku` varchar(15) NOT NULL,
  `nis` int(20) NOT NULL,
  `tgl_pinjam` varchar(30) NOT NULL,
  `tgl_kembali` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_buku`, `nis`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(1, '12', 13445221, '17-10-2018', '24-10-2018', 'Kembali'),
(2, '12', 13445221, '17-10-2018', '24-10-2018', 'Kembali'),
(3, '12', 13445221, '17-10-2018', '24-10-2018', 'Kembali'),
(4, '2', 13445221, '17-10-2018', '24-10-2018', 'Kembali'),
(5, '12', 13445221, '15-10-2018', '16-10-2018', 'Kembali');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `denda`
--
ALTER TABLE `denda`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `denda`
--
ALTER TABLE `denda`
  MODIFY `no` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
