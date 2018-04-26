-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 25 Apr 2018 pada 09.02
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tabah_nyicil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mmber`
--

CREATE TABLE `mmber` (
  `nik` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jk` enum('laki','perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `nohp` int(12) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `mmber`
--

INSERT INTO `mmber` (`nik`, `nama`, `jk`, `alamat`, `nohp`, `email`, `password`, `level`) VALUES
(1, 'Sandra Russell', 'laki', 'jL.JATINANGOR1 Block C16 NO.26', 2147483647, 'eoszerus@gmail.com', '123', 'member'),
(2, 'sdfdg', 'perempuan', 'Jl. K.H Fuad Hasyim, Cirebon', 3123213, 'sfdf@mail.com', 'dsdsadd', 'member'),
(3, 'hua fd', 'perempuan', 'JL. K.H Hasyim Asyhari, Cirebon', 2147483647, 'eoszerus@hotmail.com', '123', 'member'),
(4, 'wiranto Sujono', 'laki', 'jalan jalan', 2147483647, 'akusayangkamu@gmail.com', '321', 'member'),
(5, 'Sutisno wijoyo', 'laki', 'jalan jalan', 89324, 'kitasayang@gmail.com', '123', 'member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `kd_supplier` int(11) NOT NULL,
  `nm_supplier` varchar(40) DEFAULT NULL,
  `alamat` text,
  `telp` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`kd_supplier`, `nm_supplier`, `alamat`, `telp`) VALUES
(1, 'Toko Bekah cahaya', 'Jl.Jatinangor, Sumedang', '0821321321'),
(2, 'Toko Cahaya Bintang', 'Jl.Merdeka, Bandung', '0893423532'),
(6, 'Toko ching-kuu', 'jl.tubagus ismail raya no.2', '089626066593');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabah_barang`
--

CREATE TABLE `tabah_barang` (
  `kd_barang` int(5) NOT NULL,
  `nm_barang` varchar(30) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `kd_kategori` varchar(3) NOT NULL,
  `ket_barang` text NOT NULL,
  `tgl_simpan` date NOT NULL,
  `jam_simpan` time NOT NULL,
  `td_barang` varchar(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabah_barang`
--

INSERT INTO `tabah_barang` (`kd_barang`, `nm_barang`, `kategori`, `kd_kategori`, `ket_barang`, `tgl_simpan`, `jam_simpan`, `td_barang`) VALUES
(10001, 'IPHONE 5', 'elektronik', '5', '', '2015-11-14', '21:09:08', '0'),
(10027, 'IPHONE X', 'elektronik', '5', 'barang carding', '2018-03-09', '18:17:38', '1'),
(10041, 'IPHONE 6', 'elektronik', '', 'handphone, apple', '2018-04-19', '22:15:03', '0'),
(10042, 'Minyak Bimoli', 'sembako', '', 'sembako', '2018-04-19', '22:29:54', '0'),
(10043, 'Mentega', 'sembako', '', 'Mentega masak', '2018-04-19', '22:33:12', '0'),
(10044, 'Kecap Bango', 'sembako', '', 'Kecap manis/pedas', '2018-04-19', '22:34:23', '0'),
(10045, 'Saos', 'sembako', '', 'Saos ABC/BANGO', '2018-04-19', '22:34:49', '0'),
(10046, 'Tepung Segitiga Biru', 'sembako', '', 'Tepung Terigu', '2018-04-19', '22:40:30', '0'),
(10047, 'Gula Pasir', 'sembako', '', 'Gula pasir', '2018-04-19', '22:41:29', '0'),
(10048, 'Kopi Kapal Api', 'sembako', '', 'Kopi sachet', '2018-04-19', '22:42:07', '0'),
(10049, 'TV 80inch', 'elektronik', '', 'Merk Samsung', '2018-04-19', '22:42:51', '0'),
(10051, 'Setrika', 'elektronik', '', 'setrika', '2018-04-23', '10:53:28', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabah_cicilan`
--

CREATE TABLE `tabah_cicilan` (
  `kd_cicilan` int(7) NOT NULL,
  `kd_peminjam` int(5) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `kd_barang` int(5) NOT NULL,
  `nil_harga` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Total Harga Barang',
  `tgl_simpan` date NOT NULL,
  `jam_simpan` time NOT NULL,
  `td_cicilan` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `tabah_cicilan`
--

INSERT INTO `tabah_cicilan` (`kd_cicilan`, `kd_peminjam`, `tgl_pinjam`, `kd_barang`, `nil_harga`, `tgl_simpan`, `jam_simpan`, `td_cicilan`) VALUES
(1000000, 10001, '2015-07-01', 10007, '2300000', '2015-11-21', '07:22:28', '0'),
(1000001, 10002, '2015-08-01', 10009, '300000', '2015-11-21', '07:52:06', '0'),
(1000002, 10002, '2018-03-06', 10001, '1,000,0000', '2018-03-06', '15:03:30', '0'),
(1000003, 10002, '2018-03-07', 10012, '15000', '2018-03-07', '03:15:19', '0'),
(1000004, 10003, '2018-03-07', 10001, '3000000', '2018-03-07', '03:22:29', '0'),
(1000005, 10002, '2018-03-09', 0, '6000000', '2018-03-09', '18:38:24', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabah_kategori`
--

CREATE TABLE `tabah_kategori` (
  `kd_kategori` int(3) NOT NULL,
  `nm_kategori` varchar(30) NOT NULL,
  `ket_kategori` text NOT NULL,
  `tgl_simpan` date NOT NULL,
  `jam_simpan` time NOT NULL,
  `td_kategori` varchar(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabah_kategori`
--

INSERT INTO `tabah_kategori` (`kd_kategori`, `nm_kategori`, `ket_kategori`, `tgl_simpan`, `jam_simpan`, `td_kategori`) VALUES
(0, 'Tak Berkategori', 'Merupakan Kategori Bawaan, Hanya Untuk Barang Tak Berkategori.', '2015-11-03', '08:11:19', '0'),
(8, 'handphone', '', '2015-11-14', '21:40:41', '1'),
(9, 'handphone', '', '2015-11-14', '21:41:38', '1'),
(6, 'handpone', '', '2015-11-14', '21:19:45', '1'),
(7, 'handphone', '', '2015-11-14', '21:39:25', '1'),
(5, 'HAND PHONE', 'Semua barang berjenis smartphone dan hand phone celuller, di sini tempatnya...', '2015-11-14', '21:12:30', '0'),
(10, 'Sembako', 'Semua Kebutuhan Sembako', '2015-11-21', '07:19:27', '0'),
(11, 'BAJU WANITA', 'dress\r\n', '2015-11-21', '07:48:14', '1'),
(12, 'Kendaraan', 'Kendaraan Roda Dua', '2018-03-06', '19:12:17', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabah_nilai_cicilan`
--

CREATE TABLE `tabah_nilai_cicilan` (
  `kd_nilai` int(10) NOT NULL COMMENT 'untuk tabel ini',
  `kd_cicilan` int(7) NOT NULL COMMENT 'kode cicilan per barang',
  `cicilanke` int(2) NOT NULL COMMENT 'cicilan ke nilainya terserah',
  `angka_nilai` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Angka rupiah di sini',
  `tgl_tempo` date NOT NULL COMMENT 'Jatuh tempo',
  `td_lunas` varchar(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `tabah_nilai_cicilan`
--

INSERT INTO `tabah_nilai_cicilan` (`kd_nilai`, `kd_cicilan`, `cicilanke`, `angka_nilai`, `tgl_tempo`, `td_lunas`) VALUES
(1, 1000000, 1, '23444', '2015-07-31', '1'),
(2, 1000000, 2, '2344', '2015-08-30', '1'),
(3, 1000000, 3, '23444', '2015-09-29', '0'),
(4, 1000000, 4, '23444', '2015-10-29', '0'),
(5, 1000000, 5, '2334', '2015-11-28', '0'),
(6, 1000000, 6, '564433', '2015-12-28', '0'),
(7, 1000001, 1, '50000', '2015-08-31', '1'),
(8, 1000001, 2, '', '2015-09-30', '1'),
(9, 1000001, 3, '', '2015-10-30', '1'),
(10, 1000001, 4, '', '2015-11-29', '0'),
(11, 1000001, 5, '', '2015-12-29', '0'),
(12, 1000001, 6, '', '2016-01-28', '0'),
(13, 1000002, 1, '1,000,000', '2018-04-05', '0'),
(14, 1000002, 2, '', '2018-05-05', '0'),
(15, 1000002, 3, '', '2018-06-04', '0'),
(16, 1000002, 4, '', '2018-07-04', '0'),
(17, 1000002, 5, '', '2018-08-03', '0'),
(18, 1000002, 6, '', '2018-09-02', '0'),
(19, 1000003, 1, '2000', '2018-04-06', '0'),
(20, 1000003, 2, '2000', '2018-05-06', '0'),
(21, 1000003, 3, '2000', '2018-06-05', '0'),
(22, 1000003, 4, '2000', '2018-07-05', '0'),
(23, 1000003, 5, '2000', '2018-08-04', '0'),
(24, 1000003, 6, '2000', '2018-09-03', '0'),
(25, 1000004, 1, '500000', '2018-04-06', '0'),
(26, 1000004, 2, '500000', '2018-05-06', '0'),
(27, 1000004, 3, '500000', '2018-06-05', '0'),
(28, 1000004, 4, '500000', '2018-07-05', '0'),
(29, 1000004, 5, '500000', '2018-08-04', '0'),
(30, 1000004, 6, '500000', '2018-09-03', '0'),
(31, 1000005, 1, '1000000', '2018-04-08', '0'),
(32, 1000005, 2, '1000000', '2018-05-08', '0'),
(33, 1000005, 3, '1000000', '2018-06-07', '0'),
(34, 1000005, 4, '1000000', '2018-07-07', '0'),
(35, 1000005, 5, '1000000', '2018-08-06', '0'),
(36, 1000005, 6, '1000000', '2018-09-05', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabah_peminjam`
--

CREATE TABLE `tabah_peminjam` (
  `kd_peminjam` int(5) NOT NULL,
  `nm_peminjam` varchar(30) NOT NULL,
  `idc_peminjam` varchar(40) NOT NULL,
  `amt_peminjam` text NOT NULL,
  `tlp_peminjam` varchar(30) NOT NULL,
  `tgl_simpan` date NOT NULL,
  `jam_simpan` time NOT NULL,
  `td_peminjam` varchar(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabah_peminjam`
--

INSERT INTO `tabah_peminjam` (`kd_peminjam`, `nm_peminjam`, `idc_peminjam`, `amt_peminjam`, `tlp_peminjam`, `tgl_simpan`, `jam_simpan`, `td_peminjam`) VALUES
(10000, 'jancok', '', '', '', '2018-04-04', '00:00:00', '1'),
(10002, 'siska', '16710', 'r.sukamto', '089766545556', '2015-11-21', '07:46:26', '0'),
(10014, 'Al fariz', '543534959934', 'Indramayu', '08972132132', '2018-04-19', '22:15:33', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabah_usaha`
--

CREATE TABLE `tabah_usaha` (
  `kd_usaha` int(5) NOT NULL,
  `nm_usaha` varchar(60) NOT NULL,
  `alm_usaha` text NOT NULL,
  `logo_usaha` varchar(300) NOT NULL DEFAULT 'takberlogo.jpg',
  `tgl_simpan` date NOT NULL,
  `jam_simpan` time NOT NULL,
  `td_usaha` varchar(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabah_usaha`
--

INSERT INTO `tabah_usaha` (`kd_usaha`, `nm_usaha`, `alm_usaha`, `logo_usaha`, `tgl_simpan`, `jam_simpan`, `td_usaha`) VALUES
(10001, 'Tabah Mandiri Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', 'tak-berlogo.jpg 	', '2015-11-16', '16:27:00', '1'),
(10002, 'Tabah Mandiri Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', 'tak-berlogo.jpg 	', '2015-11-16', '17:07:03', '1'),
(10003, 'Tabah Mandiri Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', 'tak-berlogo.jpg 	', '2015-11-16', '17:07:07', '1'),
(10004, 'Khasan Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', 'tak-berlogo.jpg 	', '2015-11-16', '17:08:27', '1'),
(10005, 'Tabah Mandiri Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', 'tak-berlogo.jpg 	', '2015-11-16', '17:08:34', '1'),
(10006, 'CV. Tabah Mandiri Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', 'tak-berlogo.jpg 	', '2015-11-17', '06:09:38', '1'),
(10007, 'CV. Tabah Mandiri Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', 'tak-berlogo.jpg 	', '2015-11-17', '06:10:16', '1'),
(10008, 'CV. Tabah Mandiri Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', 'tak-berlogo.jpg 	', '2015-11-17', '16:59:39', '1'),
(10009, 'CV. Tabah Mandiri', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', 'tak-berlogo.jpg 	', '2015-11-17', '16:59:50', '1'),
(10010, 'CV. Tabah Mandiri Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', 'takberlogo.jpg', '2015-11-17', '16:59:55', '1'),
(10011, 'CV. Tabah Mandiri Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', '', '2015-11-18', '07:17:31', '1'),
(10012, 'CV. Tabah Mandiri Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', 'takberlogo.jpg', '2015-11-18', '07:18:16', '1'),
(10013, 'CV. Tabah Mandiri Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', '', '2015-11-18', '07:23:10', '1'),
(10014, 'CV. Tabah Mandiri Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', '', '2015-11-18', '07:23:13', '1'),
(10015, 'CV. Tabah Mandiri Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', 'takberlogo.jpg', '2015-11-18', '07:23:18', '1'),
(10016, 'CV. Tabah Mandiri Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', '', '2015-11-18', '07:24:22', '1'),
(10017, 'CV. Tabah Mandiri Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', '', '2015-11-18', '13:11:22', '1'),
(10018, 'CV. Tabah Mandiri Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', 'takberlogo.jpg', '2015-11-18', '13:11:25', '1'),
(10019, 'CV. Tabah Mandiri Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', '', '2015-11-18', '13:11:43', '1'),
(10020, 'CV. Tabah Mandiri Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', 'takberlogo.jpg', '2015-11-18', '13:11:47', '1'),
(10021, 'CV. Tabah Mandiri Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', '', '2015-11-18', '13:12:20', '1'),
(10022, 'CV. Tabah Mandiri Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', 'takberlogo.jpg', '2015-11-18', '13:12:22', '1'),
(10023, 'CV. Tabah Mandiri Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', '', '2015-11-18', '13:12:24', '1'),
(10024, 'CV. Tabah Mandiri Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', 'takberlogo.jpg', '2015-11-18', '13:19:37', '1'),
(10025, 'CV. Tabah Mandiri Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', '', '2015-11-18', '13:19:38', '1'),
(10026, 'CV. Tabah Mandiri Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', '', '2015-11-18', '13:19:42', '1'),
(10027, 'CV. Tabah Mandiri Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', 'takberlogo.jpg', '2015-11-18', '13:19:44', '1'),
(10028, 'CV. Tabah Mandiri Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', '', '2015-11-18', '13:20:32', '1'),
(10029, 'CV. Tabah Mandiri Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', 'takberlogo.jpg', '2015-11-18', '13:20:34', '1'),
(10030, 'CV. Tabah Mandiri Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', '', '2015-11-18', '13:20:42', '1'),
(10031, 'CV. Tabah Mandiri Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', 'takberlogo.jpg', '2015-11-18', '13:22:33', '1'),
(10032, 'CV. Tabah Mandiri Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', 'logo.jpg', '2015-11-18', '13:28:10', '1'),
(10033, 'CV. Tabah Mandiri Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', 'takberlogo.jpg', '2015-11-18', '13:28:15', '1'),
(10034, 'CV. Tabah Mandiri Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', 'logo.jpg', '2015-11-18', '13:28:34', '1'),
(10035, 'CV. Tabah Mandiri Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', 'takberlogo.jpg', '2015-11-18', '13:30:20', '1'),
(10036, 'CV. Tabah Mandiri Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', 'logo.jpg', '2015-11-18', '13:30:24', '1'),
(10037, 'CV. Tabah Mandiri Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', 'takberlogo.jpg', '2015-11-18', '13:47:27', '1'),
(10038, 'CV. Tabah Mandiri Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', '', '2015-11-18', '13:48:43', '1'),
(10039, 'CV. Tabah Mandiri Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', 'takberlogo.jpg', '2015-11-18', '13:48:48', '1'),
(10040, 'CV. Tabah Mandiri Cicilan', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', 'takberlogo.jpg', '2015-11-18', '13:53:35', '1'),
(10041, 'CV. Tabah Mandiri Cicilanku', 'Jl. Tentara Pelajar No. 12A\r\nJakarta Selatan', 'takberlogo.jpg', '2015-11-18', '13:53:45', '1'),
(10042, 'CV. Tabah Mandiri Cicilan', '', 'takberlogo.jpg', '2015-11-18', '13:54:04', '1'),
(10043, 'CV. Tabah Mandiri Cicilan', '', 'rss_logo_gray_small.jpg', '2015-11-18', '13:55:50', '1'),
(10044, 'CV. Tabah Mandiri Cicilan', '', 'takberlogo.jpg', '2015-11-18', '13:58:12', '1'),
(10045, 'CV. Tabah Mandiri Cicilan', '', '', '2015-11-18', '14:00:34', '1'),
(10046, 'CV. Tabah Mandiri Cicilan', '', 'takberlogo.jpg', '2015-11-18', '14:00:58', '1'),
(10047, 'CV. Tabah Mandiri Cicilan', '', 'takberlogo.jpg', '2015-11-18', '14:03:35', '1'),
(10048, 'CV. Tabah Mandiri Cicilan', '', 'rss_logo_gray_small.jpg', '2015-11-18', '14:04:18', '1'),
(10049, 'CV. Tabah Mandiri Cicilan', '', 'rss_logo_gray_small.jpg', '2015-11-18', '14:04:22', '1'),
(10050, 'CV. Tabah Mandiri Cicilan', '', 'rss_logo_gray_small.jpg', '2015-11-18', '14:04:25', '1'),
(10051, 'CV. Tabah Mandiri Cicilan', '', 'takberlogo.jpg', '2015-11-18', '14:04:29', '1'),
(10052, 'CV. Tabah Mandiri Cicilan', '', 'takberlogo.jpg', '2015-11-18', '14:04:32', '1'),
(10053, 'CV. Tabah Mandiri Cicilan', '', 'takberlogo.jpg', '2015-11-18', '14:04:34', '1'),
(10054, 'CV. Tabah Mandiri Cicilan', '', 'rss_logo_gray_small.jpg', '2015-11-18', '14:05:00', '1'),
(10055, 'CV. Tabah Mandiri Cicilan', '', 'takberlogo.jpg', '2015-11-18', '16:56:24', '1'),
(10056, 'CV. Tabah Mandiri Cicilan', '', 'rss_logo_gray_small.jpg', '2015-11-18', '16:57:00', '1'),
(10057, 'CV. Tabah Mandiri Cicilan', '', 'takberlogo.jpg', '2015-11-18', '17:09:44', '1'),
(10058, 'CV. Tabah Mandiri Cicilan', '', 'twitter_logo.gif', '2015-11-18', '17:09:53', '1'),
(10059, 'CV. Tabah Mandiri Cicilan', '', 'takberlogo.jpg', '2015-11-18', '22:06:34', '1'),
(10060, 'CV. Tabah Mandiri Cicilan', '', 'fb_logo.png', '2015-11-18', '22:06:49', '1'),
(10061, 'CV. Tabah Mandiri Cicilan', '', 'takberlogo.jpg', '2015-11-18', '22:06:54', '1'),
(10062, 'CV. Tabah Mandiri Cicilan', '', 'twitter_logo.png', '2015-11-18', '22:06:59', '1'),
(10063, 'CV. Tabah Mandiri Cicilan', 'Jl. Kuningan Barat 2A\r\nJakarta', 'twitter_logo.png', '2015-11-18', '22:07:35', '1'),
(10064, 'CV. Tabah Mandiri Cicilan', 'Jl. Kuningan Barat 2A\r\nJakarta', 'takberlogo.jpg', '2015-11-18', '22:09:51', '1'),
(10065, 'CV. Tabah Mandiri Cicilan', 'Jl. Kuningan Barat 2A\r\nJakarta', 'fb_logo.png', '2015-11-18', '22:09:56', '1'),
(10066, 'CV. Tabah Mandiri Cicilan', 'Jl. Kuningan Barat 2A\r\nJakarta', 'takberlogo.jpg', '2015-11-19', '11:35:12', '1'),
(10067, 'CV. Tabah Mandiri Cicilan', 'Jl. Kuningan Barat 2A\r\nJakarta', 'kopi.jpg', '2015-11-19', '11:35:59', '1'),
(10068, 'CV. Tabah Mandiri Cicilan', 'Jl. Kuningan Barat 2A\r\nJakarta', 'takberlogo.jpg', '2015-11-19', '13:50:58', '1'),
(10069, 'CV. Tabah Mandiri Cicilan', 'Jl. Kuningan Barat 2A\r\nJakarta', 'twitter_logo.gif', '2015-11-19', '13:51:38', '1'),
(10070, 'CV. Tabah Mandiri Cicilan', 'Jl. Kuningan Barat 2A\r\nJakarta', 'takberlogo.jpg', '2015-11-21', '06:30:14', '1'),
(10071, 'CV. Tabah Mandiri Cicilan', 'Jl. Kuningan Barat 2A\r\nJakarta', 'takberlogo.jpg', '2015-11-21', '06:31:13', '1'),
(10072, 'ASANOER Software Corp.', 'Jl. Manggis 20A No. 1 Kemuning, \r\nJawa Tengah 53322', 'takberlogo.jpg', '2015-11-21', '07:17:54', '1'),
(10073, 'AKBAR KOPKAR', 'Jl. Manggis 20A No. 1 Kemuning, \r\nJawa Tengah 53322', 'takberlogo.jpg', '2018-03-06', '15:01:56', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabah_user`
--

CREATE TABLE `tabah_user` (
  `kd_user` int(5) NOT NULL,
  `lengkap_user` varchar(50) NOT NULL DEFAULT 'Pengguna',
  `nm_user` varchar(20) NOT NULL,
  `sd_user` varchar(200) NOT NULL,
  `email_user` varchar(100) NOT NULL DEFAULT 'khasan@asanoer.com',
  `sbg_user` varchar(1) NOT NULL DEFAULT '0' COMMENT 'Untuk User Sebagai',
  `tlp_user` varchar(30) NOT NULL,
  `tgl_simpan` date NOT NULL,
  `jam_simpan` time NOT NULL,
  `td_user` varchar(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabah_user`
--

INSERT INTO `tabah_user` (`kd_user`, `lengkap_user`, `nm_user`, `sd_user`, `email_user`, `sbg_user`, `tlp_user`, `tgl_simpan`, `jam_simpan`, `td_user`) VALUES
(10003, 'ASANOER.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'demo@demo.asanoer.com', '2', '0221122333', '2015-11-21', '06:18:00', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabah_user_sbg`
--

CREATE TABLE `tabah_user_sbg` (
  `kd_sbg` int(2) NOT NULL,
  `nm_sbg` varchar(20) NOT NULL DEFAULT 'pengguna biasa'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabah_user_sbg`
--

INSERT INTO `tabah_user_sbg` (`kd_sbg`, `nm_sbg`) VALUES
(1, 'Administrator'),
(2, 'pengguna biasa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mmber`
--
ALTER TABLE `mmber`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`kd_supplier`);

--
-- Indeks untuk tabel `tabah_barang`
--
ALTER TABLE `tabah_barang`
  ADD PRIMARY KEY (`kd_barang`);

--
-- Indeks untuk tabel `tabah_cicilan`
--
ALTER TABLE `tabah_cicilan`
  ADD PRIMARY KEY (`kd_cicilan`);

--
-- Indeks untuk tabel `tabah_kategori`
--
ALTER TABLE `tabah_kategori`
  ADD PRIMARY KEY (`kd_kategori`);

--
-- Indeks untuk tabel `tabah_nilai_cicilan`
--
ALTER TABLE `tabah_nilai_cicilan`
  ADD PRIMARY KEY (`kd_nilai`);

--
-- Indeks untuk tabel `tabah_peminjam`
--
ALTER TABLE `tabah_peminjam`
  ADD PRIMARY KEY (`kd_peminjam`);

--
-- Indeks untuk tabel `tabah_usaha`
--
ALTER TABLE `tabah_usaha`
  ADD PRIMARY KEY (`kd_usaha`);

--
-- Indeks untuk tabel `tabah_user`
--
ALTER TABLE `tabah_user`
  ADD PRIMARY KEY (`kd_user`);

--
-- Indeks untuk tabel `tabah_user_sbg`
--
ALTER TABLE `tabah_user_sbg`
  ADD PRIMARY KEY (`kd_sbg`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mmber`
--
ALTER TABLE `mmber`
  MODIFY `nik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `supplier`
--
ALTER TABLE `supplier`
  MODIFY `kd_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tabah_barang`
--
ALTER TABLE `tabah_barang`
  MODIFY `kd_barang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10052;

--
-- AUTO_INCREMENT untuk tabel `tabah_cicilan`
--
ALTER TABLE `tabah_cicilan`
  MODIFY `kd_cicilan` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000006;

--
-- AUTO_INCREMENT untuk tabel `tabah_kategori`
--
ALTER TABLE `tabah_kategori`
  MODIFY `kd_kategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tabah_nilai_cicilan`
--
ALTER TABLE `tabah_nilai_cicilan`
  MODIFY `kd_nilai` int(10) NOT NULL AUTO_INCREMENT COMMENT 'untuk tabel ini', AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `tabah_peminjam`
--
ALTER TABLE `tabah_peminjam`
  MODIFY `kd_peminjam` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10015;

--
-- AUTO_INCREMENT untuk tabel `tabah_usaha`
--
ALTER TABLE `tabah_usaha`
  MODIFY `kd_usaha` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10074;

--
-- AUTO_INCREMENT untuk tabel `tabah_user`
--
ALTER TABLE `tabah_user`
  MODIFY `kd_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10004;

--
-- AUTO_INCREMENT untuk tabel `tabah_user_sbg`
--
ALTER TABLE `tabah_user_sbg`
  MODIFY `kd_sbg` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
