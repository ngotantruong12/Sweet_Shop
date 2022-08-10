-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2021 at 05:42 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sweet`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiet_order`
--

CREATE TABLE `chitiet_order` (
  `id` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `Gia` float NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `Time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chitiet_order`
--

INSERT INTO `chitiet_order` (`id`, `orderID`, `MaSP`, `Gia`, `SoLuong`, `Time`) VALUES
(44, 32, 11, 250000, 8, 1611354154),
(45, 32, 17, 150000, 22, 1611354154),
(46, 33, 12, 250000, 22, 1611356822),
(47, 33, 16, 150000, 8, 1611356822),
(48, 34, 14, 250, 8, 1611356986),
(49, 35, 14, 250, 8, 1611357346),
(50, 36, 14, 250, 1, 1611357683),
(51, 36, 17, 150000, 10, 1611357683),
(52, 37, 17, 150000, 10, 1611361080),
(53, 38, 23, 250, 1, 1616124481);

-- --------------------------------------------------------

--
-- Table structure for table `chitiet_orderr`
--

CREATE TABLE `chitiet_orderr` (
  `id` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `Gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `orderID` int(11) NOT NULL,
  `Ten` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `SDT` int(11) NOT NULL,
  `DiaChi` varchar(100) NOT NULL,
  `GhiChu` varchar(300) NOT NULL,
  `TongTien` float NOT NULL,
  `Create_Time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`orderID`, `Ten`, `SDT`, `DiaChi`, `GhiChu`, `TongTien`, `Create_Time`) VALUES
(31, 'a', 3432, 'asad', '', 802750, 1611346041),
(32, 'aa', 343, 'aaaa', '', 1600000, 1611354154),
(33, 'truong', 3432, 'addas', '', 4600000, 1611356822),
(34, 'â', 3432, 'sdd', '', 2500, 1611356986),
(35, 'ss', 1232, 'ss', '', 750, 1611357346),
(36, 'ê', 323, 'ds', '', 1500250, 1611357683),
(37, 'khai', 43342, 'aaa', '', 1500000, 1611361079),
(38, 'aaa', 432432, 'aaa', '', 250, 1616124481);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(11) NOT NULL,
  `TenSP` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Img` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gia` float NOT NULL,
  `Gene` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `TinhTrang` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Loai` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `Create_Time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `Img`, `Gia`, `Gene`, `TinhTrang`, `Loai`, `SoLuong`, `Create_Time`) VALUES
(10, 'Đồ bộ', 'đồ.jpg', 250000, 'Women', 'Normal', 'Đồ bộ nữ', 5, '2021-01-03'),
(11, 'Áo thun', 'nam25.jpg', 250000, 'Man', 'Flash', 'Áo thun nam', 8, '2021-01-03'),
(12, 'Váy ngắn', 'nu4.jpg', 250000, 'Women', 'Flash', 'Đồ bộ nữ', 22, '2021-01-03'),
(13, 'Quần Jean dài', 'nu10.jpg', 250, 'Women', 'Normal', 'Đồ bộ nữ', 8, '2021-01-03'),
(14, 'Áo sơ mi Trắng', 'nam17.jpg', 250, 'Man', 'Flash', 'Áo Sơ mi nam', 8, '2021-01-03'),
(15, 'Áo sơ mi Trắng', 'nam38.jpg', 250, 'Man', 'Normal', '', 5, '2021-01-03'),
(16, 'Áo sơ mi Trắng', 'nam6.jpg', 150000, 'Man', 'Normal', 'Áo Sơ mi nam', 8, '2021-01-03'),
(17, 'Đầm', 'nu1.jpg', 150000, 'Women', 'Flash', 'Đồ bộ nữ', 22, '2021-01-03'),
(22, 'Áo sơ mi Trắng', 'đồ.jpg', 250, 'Man', 'Normal', 'Áo Sơ mi nam', 8, '2021-01-13'),
(23, 'Áo sơ mi Trắng', 'Penguins.jpg', 250, 'Man', 'Flash', 'Áo Sơ mi nam', 5, '2021-02-03');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(27, 'sautatca', '202cb962ac59075b964b07152d234b70', 0),
(28, '159', '140f6969d5213fd0ece03148e62e461e', 0),
(29, 'kha', '202cb962ac59075b964b07152d234b70', 0),
(30, 'khai', '202cb962ac59075b964b07152d234b70', 0),
(31, '123', '250cf8b51c773f3f8dc8b4be867a9a02', 0),
(32, '123', '202cb962ac59075b964b07152d234b70', 0),
(33, 'lalala', '202cb962ac59075b964b07152d234b70', 0),
(34, 'ga', '32d7508fe69220cb40af28441ef746d9', 0),
(35, 'bo', 'ad7532d5b3860a408fbe01f9455dca36', 0),
(36, 'asa', '4d18db80e353e526ad6d42a62aaa29be', 0),
(37, 'vietnamvip741', '9331558d32fec52f35a5750dc61b0b80', 0),
(38, 'vietnamvip741', '6c0cbf5029aed0af395ac4b864c6b095', 0),
(39, 'asd', '49f0bad299687c62334182178bfd75d8', 0),
(40, 'dsad', '0aa1ea9a5a04b78d4581dd6d17742627', 0),
(41, 'dsad', 'e343e34d83ff6930f2848ca498d0494c', 0),
(42, 'sdsa', 'c99a11a53a3748269e3f86d7ac38df11', 0),
(43, 'vietnamvip741', '202cb962ac59075b964b07152d234b70', 0),
(44, 'alaela', '202cb962ac59075b964b07152d234b70', 0),
(45, 'kha', '202cb962ac59075b964b07152d234b70', 0),
(46, 'kh', '3238b0f5af9931fc73a43eb02a2ee528', 0),
(47, 'conmuangangqua', '202cb962ac59075b964b07152d234b70', 0),
(48, 'das', '4d18db80e353e526ad6d42a62aaa29be', 0),
(49, 'sadsa', '4d18db80e353e526ad6d42a62aaa29be', 0),
(50, 'dsa', '7e3f40511b178afb7f9e2c1a7a9e55af', 0),
(51, 'sadsad', 'f24ddd94d99f7556936e84b2ce800713', 0),
(52, 'sdad', '39797b0284b640f5fd8678146d2a326f', 0),
(53, 'dsa', 'b3ce4c45d6bd78b59e9673dfde375c6d', 0),
(54, 'vietnamvip741', '202cb962ac59075b964b07152d234b70', 0),
(55, 'sautatca', '81dc9bdb52d04dc20036dbd8313ed055', 0),
(56, 'sadsa', '7e3f40511b178afb7f9e2c1a7a9e55af', 0),
(57, 'ádsad', 'f24ddd94d99f7556936e84b2ce800713', 0),
(58, 'aaaa', 'bcbe3365e6ac95ea2c0343a2395834dd', 0),
(59, 'quynnhon', '202cb962ac59075b964b07152d234b70', 0),
(60, 'admin', '202cb962ac59075b964b07152d234b70', 0),
(61, 'long', '202cb962ac59075b964b07152d234b70', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiet_order`
--
ALTER TABLE `chitiet_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chitiet_order_ibfk_1` (`orderID`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Indexes for table `chitiet_orderr`
--
ALTER TABLE `chitiet_orderr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitiet_order`
--
ALTER TABLE `chitiet_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `chitiet_orderr`
--
ALTER TABLE `chitiet_orderr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiet_order`
--
ALTER TABLE `chitiet_order`
  ADD CONSTRAINT `chitiet_order_ibfk_1` FOREIGN KEY (`orderID`) REFERENCES `order` (`orderID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitiet_order_ibfk_2` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
