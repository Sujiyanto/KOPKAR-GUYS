-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2018 at 09:39 AM
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
(4, 'Mesin Cuci Cosmos 2 Tabung CWM800', 'PT. Star Cosmos', 1350000, 135000, 1, 'Unit', 'PO', '2018-05-17'),
(5, 'Samsung WW65J3033LW Mesin Cuci 6.5 Kg Front Loadin', 'PT Samsung Electronics Indonesia', 3899000, 399000, 1, 'Unit', 'PO', '2018-05-19');

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
(2, 'Topi Koki Pandan Wangi 5 Kg', 'PT. Buyung Poetra Sembada', 67000, 0, 5, 'Kg', 'Ready', '2018-05-17');

-- --------------------------------------------------------

--
-- Table structure for table `kredit`
--

CREATE TABLE `kredit` (
  `id_kredit` int(5) NOT NULL,
  `nama_member` varchar(50) NOT NULL,
  `jumlah_kredit` int(10) NOT NULL,
  `jangka_waktu` int(10) NOT NULL,
  `angsuran` int(10) NOT NULL,
  `total_kredit` int(10) NOT NULL,
  `tgl_kredit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kredit`
--

INSERT INTO `kredit` (`id_kredit`, `nama_member`, `jumlah_kredit`, `jangka_waktu`, `angsuran`, `total_kredit`, `tgl_kredit`) VALUES
(5, 'Nur Inayatun Mahmuda', 1500000, 3, 500000, 1500000, '2018-05-17'),
(6, 'Indraharjo Eko Widodo', 1500000, 3, 500000, 1500000, '2018-05-23'),
(7, 'Nur Inayatun Mahmuda', 500000, 5, 100000, 500000, '2018-05-23');

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
(4, 1603109, 'Nur Inayatun Mahmuda', '089633692824', 'mahmudanurinayatun@gmail.com', 'Indramayu', 'muda', '123'),
(5, 1601072, 'Indraharjo Eko Widodo', '089633692825', 'indra.harjo@gmail.com', 'Lohbener, Indramayu', 'indra', '123');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_order` int(3) NOT NULL,
  `nik` int(10) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga` int(10) NOT NULL,
  `uang_muka` int(10) NOT NULL,
  `jangka_waktu` int(3) NOT NULL,
  `angsuran` int(10) NOT NULL,
  `total_harga` int(10) NOT NULL,
  `tgl_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_order`, `nik`, `nama_barang`, `harga`, `uang_muka`, `jangka_waktu`, `angsuran`, `total_harga`, `tgl_keluar`) VALUES
(3, 1603109, 'Mesin Cuci Cosmos 2 Tabung CWM800', 1350000, 135000, 3, 40000, 1350000, '2018-05-17'),
(4, 1601072, 'Samsung WW65J3033LW Mesin Cuci 6.5 Kg Front Loadin', 3899000, 399000, 5, 700000, 3899000, '2018-05-23'),
(5, 1603109, 'Topi Koki Pandan Wangi 5 Kg', 67000, 17000, 5, 10000, 67000, '2018-05-23'),
(6, 1603109, 'Mesin Cuci Cosmos 2 Tabung CWM800', 1350000, 130000, 5, 244000, 1350000, '2018-05-23'),
(7, 1601072, 'Topi Koki Pandan Wangi 5 Kg', 67000, 17000, 5, 10000, 67000, '2018-05-23');

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
(8, 'PT. Star Cosmos', '0851-0228-3900', 'Jl. Halim Perdanakusuma No. 34, Batu Ceper, Jurumu'),
(9, 'PT. Buyung Poetra Sembada', '(021) 4752302', 'Ps. Induk Cipinang Blk. K No.17, RT.3/RW.12, Cipin'),
(10, 'PT Samsung Electronics Indonesia', '(021) 89837114', 'Jl. Jababeka Raya Blok F. 29 No.31, Harja Mekar, C');

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
-- Indexes for table `kredit`
--
ALTER TABLE `kredit`
  ADD PRIMARY KEY (`id_kredit`);

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
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_order`);

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
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `barang_sembako`
--
ALTER TABLE `barang_sembako`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kredit`
--
ALTER TABLE `kredit`
  MODIFY `id_kredit` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_order` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `waktu`
--
ALTER TABLE `waktu`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
