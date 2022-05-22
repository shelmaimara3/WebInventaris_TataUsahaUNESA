-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2022 at 08:02 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventaris`
--

-- --------------------------------------------------------

--
-- Table structure for table `history_pinjam`
--

CREATE TABLE `history_pinjam` (
  `id` varchar(255) NOT NULL,
  `kode_barcode` varchar(255) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `nama_peminjam` varchar(100) NOT NULL,
  `asal_peminjam` varchar(255) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `pengentri` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_pinjam`
--

INSERT INTO `history_pinjam` (`id`, `kode_barcode`, `nama_barang`, `nama_peminjam`, `asal_peminjam`, `no_telp`, `tgl_pinjam`, `tgl_kembali`, `pengentri`) VALUES
('1098769', 'SPK-101A', 'Speaker', 'Irvan', 'Gresik', '08132456786', '2022-05-21', '2022-05-21', 'Shelma Bakir');

-- --------------------------------------------------------

--
-- Table structure for table `tb_data`
--

CREATE TABLE `tb_data` (
  `no_inventaris` varchar(255) NOT NULL,
  `kode_barcode` varchar(255) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `pengguna` varchar(50) NOT NULL,
  `processor` varchar(255) NOT NULL,
  `ram` varchar(25) NOT NULL,
  `hardisk` varchar(25) NOT NULL,
  `monitor_inc` varchar(25) NOT NULL,
  `sistem_operasi` varchar(255) NOT NULL,
  `anti_virus` varchar(255) NOT NULL,
  `nama_ruang` varchar(50) NOT NULL,
  `kondisi` enum('baik','rusak') NOT NULL,
  `pengentri` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_data`
--

INSERT INTO `tb_data` (`no_inventaris`, `kode_barcode`, `nama_barang`, `merk`, `pengguna`, `processor`, `ram`, `hardisk`, `monitor_inc`, `sistem_operasi`, `anti_virus`, `nama_ruang`, `kondisi`, `pengentri`) VALUES
('010101', 'SPC-0151', 'PC', 'Asus', 'Umum', 'Intel(R)core(TM)i3-2120 CPU@3.30Ghz(4 CPUs),3.3Ghz', '2 GB', '750 GB', '15.6 inc', 'Windows8 Profesional', '    SMADAV', 'R.Komputer', 'baik', 'Shelma Bakir'),
('101', 'SPK-101A', 'Speaker', 'JBL Professional', 'Umum', '-', '-', '-', '-', '-', '-', 'Audio Visual', 'baik', 'Shelma Bakir'),
('12', 'LP-012', 'Laptop', 'Samsung', 'Umum', 'Intel Core i3', '2 GB', '4 GB', '16', 'Windows 10', ' Smadav', 'IKOMA Corner', 'baik', 'Shelma Bakir'),
('1234', '01PRTR-34', 'Printer', 'Epson L360', 'Umum', '-', '-', '-', '-', '-', '-', 'R.Komputer', 'baik', 'Shelma Bakir'),
('15', 'LCD-015', 'LCD Proyektor', 'Epson', 'Umum', '-', '-', '-', '-', '-', '-', 'Referensi', 'baik', 'Shelma Bakir'),
('15674', 'SPC-0153', 'PC', 'HP', 'Umum', 'Intel(R) Core(TM) i5-3470 CPU @ 3.20Ghz (4 CPUs), 3.6Ghz', '8 GB', '1 Tb', '15.6 inc', 'WIndows10 Pro', '      SMADAV', 'Audio Visual', 'baik', 'Shelma Bakir');

-- --------------------------------------------------------

--
-- Table structure for table `tb_history`
--

CREATE TABLE `tb_history` (
  `id_perbaikan` varchar(255) NOT NULL,
  `kode_barcode` varchar(255) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `masalah` varchar(1024) NOT NULL,
  `solusi` varchar(1024) NOT NULL,
  `tgl_catat` date NOT NULL,
  `lama_perbaikan` varchar(30) NOT NULL,
  `biaya` varchar(30) NOT NULL,
  `pengentri` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_history`
--

INSERT INTO `tb_history` (`id_perbaikan`, `kode_barcode`, `nama_barang`, `lokasi`, `masalah`, `solusi`, `tgl_catat`, `lama_perbaikan`, `biaya`, `pengentri`) VALUES
('1', 'SPK-101A', 'Speaker', 'Audio Visual', ' Kabel Speaker Terkelupas', 'Membeli dan mengganti kabel yang baru', '2022-05-21', '1 hari', '20000', 'Shelma Bakir'),
('5', 'SPK-101A', 'Speaker', 'IKOMA Corner 1', ' Audio tidak mengeluarkan suara', ' Perbaikan output speaker', '2022-05-22', '5 hari', '100000', 'Teknisi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keranjang`
--

CREATE TABLE `tb_keranjang` (
  `id` int(11) NOT NULL,
  `kode_barcode` varchar(255) NOT NULL,
  `no_inventaris` varchar(50) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `merk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_keranjang`
--

INSERT INTO `tb_keranjang` (`id`, `kode_barcode`, `no_inventaris`, `nama_barang`, `merk`) VALUES
(1234605, '3bcde', '1234', 'Printer', 'Lenovo'),
(1234607, 'SPC-0153', '15674', 'PC', 'HP'),
(1234608, '01PRTR-34', '1234', 'Printer', 'Lenovo'),
(1234609, 'LCD-015', '15', 'LCD Proyektor', 'Epson'),
(1234610, 'SPK-101A', '101', 'Speaker', 'JBL Professional');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lokasi`
--

CREATE TABLE `tb_lokasi` (
  `id_ruang` int(11) NOT NULL,
  `lantai` enum('1','2','3','4','5','6') NOT NULL,
  `nama_ruang` varchar(30) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lokasi`
--

INSERT INTO `tb_lokasi` (`id_ruang`, `lantai`, `nama_ruang`, `deskripsi`) VALUES
(1, '4', 'IKOMA Corner 1', 'Ruang koleksi informasi muatan lokal'),
(3, '4', 'Audio Visual', 'Ruang koleksi berbentuk non-buku'),
(7, '5', 'Sirkulasi', 'Ruang koleksi yang terdiri dari buku teks wajib, buku teks penunjang dan buku teks anjuran yang relevan dengan kurikulum yang berlaku'),
(9, '2', 'Referensi', 'Ruang koleksi berupa informasi singkat yang dibutuhkan pengguna '),
(10, '1', 'R.Komputer', 'Ruang komputer');

-- --------------------------------------------------------

--
-- Table structure for table `tb_perbaikan`
--

CREATE TABLE `tb_perbaikan` (
  `id_perbaikan` varchar(255) NOT NULL,
  `kode_barcode` varchar(255) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `masalah` varchar(255) NOT NULL,
  `solusi` varchar(255) NOT NULL,
  `tgl_catat` date NOT NULL,
  `lama_perbaikan` varchar(50) NOT NULL,
  `biaya` varchar(100) NOT NULL,
  `pengentri` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pinjam`
--

CREATE TABLE `tb_pinjam` (
  `id` int(11) NOT NULL,
  `kode_barcode` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `nama_peminjam` varchar(100) NOT NULL,
  `asal_peminjam` varchar(255) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `pengentri` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pinjam`
--

INSERT INTO `tb_pinjam` (`id`, `kode_barcode`, `nama_barang`, `nama_peminjam`, `asal_peminjam`, `no_telp`, `tgl_pinjam`, `tgl_kembali`, `pengentri`) VALUES
(1098770, 'SPK-101A', 'Speaker', 'Setyo B.', 'Bojonegoro', '0812383300', '2022-05-23', '2022-05-24', 'Operator');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','operator','teknisi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(12, 'Operator', 'Nandaaa34@gmail.com', 'abcdefg', 'operator'),
(14, 'Teknisi', 'Nizaralamsyah22@gmail.com', '123456789', 'teknisi'),
(16, 'Amalia Puspitasari', 'amaliap0999@gmail.com', '*****', 'admin'),
(18, 'Shelma Bakir', 'shelmabakir97@gmail.com', '09876543', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history_pinjam`
--
ALTER TABLE `history_pinjam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_data`
--
ALTER TABLE `tb_data`
  ADD PRIMARY KEY (`no_inventaris`);

--
-- Indexes for table `tb_history`
--
ALTER TABLE `tb_history`
  ADD PRIMARY KEY (`id_perbaikan`);

--
-- Indexes for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indexes for table `tb_perbaikan`
--
ALTER TABLE `tb_perbaikan`
  ADD PRIMARY KEY (`id_perbaikan`);

--
-- Indexes for table `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234628;

--
-- AUTO_INCREMENT for table `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  MODIFY `id_ruang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_pinjam`
--
ALTER TABLE `tb_pinjam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1098771;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
