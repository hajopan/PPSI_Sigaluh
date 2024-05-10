-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2022 at 04:14 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sigaluh`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `Kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `Kategori`) VALUES
(1, 'Batik'),
(2, 'Knalpot'),
(3, 'Makanan'),
(4, 'Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nomor_kk` int(244) NOT NULL,
  `nomor_hp` varchar(20) NOT NULL,
  `nama_barang` varchar(244) NOT NULL,
  `deskripsi_barang` text NOT NULL,
  `harga` varchar(255) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `gambar2` varchar(244) NOT NULL,
  `gambar3` varchar(244) NOT NULL,
  `alamat` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_lengkap`, `nomor_kk`, `nomor_hp`, `nama_barang`, `deskripsi_barang`, `harga`, `gambar`, `gambar2`, `gambar3`, `alamat`, `id_kategori`, `status`) VALUES
(1, 'hajopan', 12345, '082211869417', 'batik', ' asfasfafas', '20000', '62c1c49e09f0b.jpg', '62c1c49e0a1ae.jpg', '62c1c49e0a3ad.jpg', 'Siantar', 1, 'N'),
(3, 'Lasiman', 2147483647, '085712956945', 'J-Vouse Racing Exhaust', 'Knalpot Mobil dan Motor, dengan ukuran tinggi 20cm - 25cm ', '350000-2000000', '62c3f96291ebc.jpg', '62c3f962921a8.jpg', '62c3f96292387.jpg', 'Grumbul Peniron', 2, 'Y'),
(4, 'Aris', 2147483647, '087738576367', 'Batik Wardi', 'Menyediakan batik pekalongan,kombinasi(cap&tulis), dan batik tulis asli\r\nUkuran kain batik 2,4 m', '70.000 - 700.000', '62c3fc11b26c9.jpg', '62c3fc11b2990.jpg', '62c3fc11b2bde.jpg', 'RT1/RW1, Desa Galuh, kec. Bojongsari, Purbalingga, Jawa Tengah', 1, 'Y'),
(5, 'Nani Handayani', 2147483647, '082226290309', 'Manco Sidourip', 'Menjual Manco dengan bahan asal yang berbeda, yang terbuat dari wijen dan juga Beras', '18.000 - 70.000', '62c3fd3abc5fc.jpg', '62c3fd3abc8ff.jpg', '62c3fd3abcdf2.jpg', 'RT 08/RW 04, Desa Galuh, kec. Bojongsari, ', 3, 'Y'),
(6, 'Salimi', 2147483647, '081328501577', 'Rempeyek', 'Rempeyek dengan bahan khas yang di campur dengan Daun Kucai', '2.500', '62c3fdf7e9d64.jpg', '62c3fdf7ea07c.jpg', '62c3fdf7ea27c.jpg', 'RT 06/RW 03, Desa Galuh, kec. Bojongsari, Purbalingga, Jawa Tengah', 3, 'Y'),
(7, 'Dalim', 2147483647, '082226290309', 'Semprong Mugi Berkah', 'Menyediakan ukuran penjualan produk 2,5 ons dan 1 kg dengan rasa yang beragam yaitu vanila, original, coklat, nanas, durian, strawberry,  Jahe', '18.000 - 70.000', '62c3ffb1876f7.jpg', '62c3ffb187bfb.jpg', '62c3ffb187ee8.jpg', 'RT 07/RW 04, Desa Galuh, kec. Bojongsari, Purbalingga, Jawa Tengah', 3, 'Y'),
(8, 'Nukiding', 2147483647, '0895325156496', ' Kacang Goreng Kletik', 'Menjual Kacang Goreng dengan rasa yang berbeda yaitu Kletik dan juga Tawar. Berat produk yang disediakan juga berbeda 2kg, 3 kg, dan 4kg', '53.000 - 106.000', '62c4012b2a425.jpg', '62c4012b2a7b6.jpg', '62c4012b2ab55.jpg', 'RT 10, Desa Galuh, kec. Bojongsari, Purbalingga, Jawa Tengah', 3, 'Y'),
(9, 'Rohiman', 2147483647, '089502179889', 'Wajan Desa Galuh', 'Menjual Wajan dengan bahan besi dengan ukuran yang berbeda yaitu 80 cm dan 1 m', '150.000 - 600.000', '62c402316c0fc.jpeg', '62c402316c3ab.jpg', '62c402316c588.jpg', 'RT 04/RW 02, Desa Galuh, kec. Bojongsari, Purbalingga, Jawa Tengah', 4, 'Y'),
(10, 'wardani', 2147483647, '82211869417', 'Kompor Gas', 'Kompor gas 20kg dengan panjang 20 meter ', '20.000', '62c98be0088b1.jpg', '62c98be008d67.jpg', '62c98be008f51.jpg', 'jl sudagaran', 4, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('Seller','Admin','User') NOT NULL,
  `status` varchar(15) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id`, `username`, `nama_lengkap`, `password`, `level`, `status`) VALUES
(1, 'admin', 'hajopan', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'Y'),
(3, 'user', 'wardhani', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', ''),
(5, 'jopan', 'babi', '5b307381861d9a4c51b0e881eef973d3', 'Seller', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` text NOT NULL,
  `nomor` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `nama_lengkap`, `nomor`) VALUES
(1, 'admin', '$2y$10$XOZKqIhCx2ni4XGxjirQ1O.QXRptT6tLfQOUsYecgQvA1/Iztz2.u', 'wardhani', '082211869412'),
(2, 'user', '$2y$10$6YKPlngANkIcFPNUFVCwZe6QXYz.CgEU7oDTlcNvKxZxsilqZlvvi', 'amelia', '08221184923'),
(3, 'user1', '$2y$10$xPiIFTDQ8NmBf5WUXYNOOuw2iqnZ3O/ZuneTpIGgju647mmy5.Otm', 'hajopan', '08215214123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
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
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD CONSTRAINT `tb_barang_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
