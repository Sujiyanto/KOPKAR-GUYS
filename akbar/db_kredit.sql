-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2018 at 09:55 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kredit`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang_elektronik`
--

CREATE TABLE `barang_elektronik` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `supplier` varchar(50) NOT NULL,
  `harga` int(15) NOT NULL,
  `uang_muka` int(15) NOT NULL,
  `stok` int(5) NOT NULL,
  `satuan` varchar(15) NOT NULL,
  `keterangan` varchar(15) NOT NULL,
  `tgl_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_elektronik`
--

INSERT INTO `barang_elektronik` (`id_barang`, `nama_barang`, `supplier`, `harga`, `uang_muka`, `stok`, `satuan`, `keterangan`, `tgl_masuk`) VALUES
(1, 'Lenovo IdeaPad 310', 'PT. Lenovo', 6000000, 500000, 1, 'buah', 'Ready', '2018-04-19');

-- --------------------------------------------------------

--
-- Table structure for table `barang_sembako`
--

CREATE TABLE `barang_sembako` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `supplier` varchar(50) NOT NULL,
  `harga` int(15) NOT NULL,
  `uang_muka` int(15) NOT NULL,
  `stok` int(5) NOT NULL,
  `satuan` varchar(15) NOT NULL,
  `keterangan` varchar(15) NOT NULL,
  `tgl_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_sembako`
--

INSERT INTO `barang_sembako` (`id_barang`, `nama_barang`, `supplier`, `harga`, `uang_muka`, `stok`, `satuan`, `keterangan`, `tgl_masuk`) VALUES
(1, 'Beras Topi Koki 5Kg', 'PT. Buyung Poetra Sambada', 75000, 15000, 2, 'kg', 'Ready', '2018-05-04');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `nama`, `username`, `password`) VALUES
(1, 'Muda', 'admin', 'admin'),
(2, 'mimin', 'min', '123');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(5) NOT NULL,
  `nik` int(10) NOT NULL,
  `nama_member` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nik`, `nama_member`, `no_hp`, `email`, `alamat`, `username`, `password`) VALUES
(1, 1603109, 'Nur Inayatun Mahmuda', '089633692824', 'mahmuda@gmail.com', 'Jl. KUD Misaya Mina Blok.Condong RT/RW. 03/03 Ds. Eretan Wetan, Kec. Kandanghaur, Kab. Indramayu 45254', 'muda', '123'),
(3, 1603107, 'Muhammad Fauji Al Fariz', '012345678910', 'alfarises@gmail.com', 'qwe', 'faris', '123');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(5) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `no_telp`, `alamat`) VALUES
(3, 'PT. Salim Ivomas Pratama Tbk', '2147483647', 'Jl. Jend Sudirman Kav. 76-78, Jakarta 12910'),
(4, 'PT. Buyung Poetra Sambada', '2147483647', 'Ps. Induk Cipinang Blk. K No.17, RT.3/RW.12, Cipin'),
(5, 'PT. Sinergi Teknologi Indonesia', '+6221 2901 8797', 'Jl. Senopati 7 - 9 Kebayoran Baru, Jakarta Selatan');

-- --------------------------------------------------------

--
-- Table structure for table `waktu`
--

CREATE TABLE `waktu` (
  `id` int(5) NOT NULL,
  `jangka_waktu` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `waktu`
--

INSERT INTO `waktu` (`id`, `jangka_waktu`) VALUES
(1, '3 Bulan'),
(2, '6 Bulan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang_elektronik`
--
ALTER TABLE `barang_elektronik`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `barang_sembako`
--
ALTER TABLE `barang_sembako`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `waktu`
--
ALTER TABLE `waktu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang_elektronik`
--
ALTER TABLE `barang_elektronik`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `barang_sembako`
--
ALTER TABLE `barang_sembako`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `waktu`
--
ALTER TABLE `waktu`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
