-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 15 Mar 2019 pada 01.46
-- Versi server: 5.7.24
-- Versi PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mahasiswa`
--

DROP TABLE IF EXISTS `tb_mahasiswa`;
CREATE TABLE IF NOT EXISTS `tb_mahasiswa` (
  `nim` varchar(16) NOT NULL,
  `nama_mhs` varchar(200) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`nim`, `nama_mhs`) VALUES
('A10201602514', 'AGUS JAYANTOm'),
('A11201602514', 'DIMAS ADTYA PUTRA'),
('A15201602514', 'NAJIBUL WOFO'),
('A22201602514', 'NURUL MUTTAQIN'),
('A99201602514', 'Ridwal Kamilxxxxx'),
('AZA201702514', 'Ridwan Suyotno'),
('AZO201902516', 'Zuliyana');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_matkul`
--

DROP TABLE IF EXISTS `tb_matkul`;
CREATE TABLE IF NOT EXISTS `tb_matkul` (
  `kode_matkul` varchar(4) NOT NULL,
  `nama_matkul` varchar(200) NOT NULL,
  `sks` int(2) NOT NULL,
  PRIMARY KEY (`kode_matkul`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_matkul`
--

INSERT INTO `tb_matkul` (`kode_matkul`, `nama_matkul`, `sks`) VALUES
('A10', 'PHP', 4),
('A11', 'Sistem Operasi', 2),
('A15', 'Bahasa Inggris', 2),
('A22', 'Pemrograman Web 1', 4),
('B10', 'Bahasa Jawa', 2),
('WEB2', 'Pemrograman Web 2', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai`
--

DROP TABLE IF EXISTS `tb_nilai`;
CREATE TABLE IF NOT EXISTS `tb_nilai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_matkul` varchar(4) NOT NULL,
  `nim` varchar(16) NOT NULL,
  `nilai` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_nilai`
--

INSERT INTO `tb_nilai` (`id`, `kode_matkul`, `nim`, `nilai`) VALUES
(1, 'A22', 'A22201602514', '90'),
(2, 'A11', 'A11201602514', '90'),
(7, 'A10', 'A10201602514', '70'),
(8, 'A15', 'A15201602514', '70'),
(9, 'B10', 'A10201602514', '100'),
(10, 'B10', 'A22201602514', '80'),
(11, 'A15', 'A22201602514', '60'),
(12, 'B10', 'A99201602514', '90'),
(13, 'A11', 'A22201602514', '8'),
(14, 'B10', 'ZZZ', '90'),
(15, 'WEB2', 'AZA201702514', '90'),
(16, 'B10', 'A10201602514', '6'),
(17, 'A11', 'A10201602514', '4'),
(18, 'A15', 'A10201602514', '2'),
(19, 'A10', 'A10201602514', '80');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
