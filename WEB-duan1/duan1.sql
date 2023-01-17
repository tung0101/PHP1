-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 29, 2022 lúc 02:16 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duanmau`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `password` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `email` varchar(225) CHARACTER SET armscii8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', '12345', 'nguyendoantung12345@gmail.com'),
(2, 'admin1', '123', 'nguyendoantung12345@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `hinh` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `iduser` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `noidung` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `postdate` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(225) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `hinh`, `iduser`, `idsp`, `noidung`, `postdate`, `name`) VALUES
(17, 'Anh_the.jpg', 38, 12, 'sản phẩm rất tốt\r\n', '17/11/2022', 'Nguyễn Doãn Tùng'),
(18, '242211632_618878339098973_5621219576916657100_n.jpg', 39, 12, 'kajksjkakjd', '24/11/2022', 'huyen');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `iddanhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`iddanhmuc`, `tendanhmuc`) VALUES
(1, 'Áo Nam'),
(2, 'Quần Nam'),
(3, 'Phụ Kiện');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `hinh` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_unicode_ci NOT NULL,
  `tensp` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_unicode_ci NOT NULL,
  `gia` int(11) NOT NULL,
  `iddanhmuc` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `hinh`, `tensp`, `gia`, `iddanhmuc`) VALUES
(1, '79.png', 'Áo T- Shirt Nam Slimfit Coolmax A01-061', 88000, 1),
(2, '82.jpg', 'Áo Polo Slimfit CVC A02-110', 179000, 1),
(3, '129.png', 'Áo Polo Nam Slimfit Premium Pique A02-061G', 173000, 1),
(4, '93.png', 'Áo T-Shirt Nam Slimfit Modal A01-054\r\n', 150000, 1),
(5, '47.png', 'Áo Ba Lỗ A03-062', 129000, 1),
(6, '124.png', 'Áo Polo Nam Slimfit CVC A02-117', 184000, 1),
(7, '87.png', 'Áo Polo Nam Slimfit Poly Zacka A02-128', 142000, 1),
(8, '24.png', 'Áo polo Slimfit Coolmax Pique A02-131', 148000, 1),
(9, '92.png', 'Áo Polo Slim Premium Pique CVC A02-105', 145000, 1),
(10, '102.png', 'Áo Polo Slimfit CVC A02-110', 178000, 1),
(11, '108.png', 'Áo T-shirt Poly Zacka Interlock Basic A01-088', 80000, 1),
(12, '84.png', 'Áo Polo Premium Pique CVC A02-094', 168000, 1),
(13, 'Q02-004 (7).jpg', 'Quần Jogger Nam Regular Interlock CVC Q02-004', 210000, 2),
(14, '151.png', 'Quần Short Nam Dù Slimfit Khoá Dạ Quang Q01-057', 115000, 2),
(15, '9.png', 'Quần Short Nam Regular Tc Q01-060', 156000, 2),
(16, 'Q01-072 (5).jpg', 'Quần Short Slimfit Pro Pique Q01-072', 165000, 2),
(17, '101.JPG', 'Giày Gucci Men GG Tennis 1977 Sneaker Beige', 2600000, 3),
(18, '102.jfif', 'Dép Tổ Ong Huyền Thoại', 35000, 3),
(19, '103.jfif', 'Dép Cao Su Bác Hồ', 27000, 3),
(20, '104.JPG', 'Ví Louis Vuitton Multiple Wallet Epi (M60662)', 6700000, 3),
(21, '105.jpg', 'Đồng Hồ Hublot Classic Fusion Blue King Gold', 9000000, 3),
(22, '106.JPG', 'Nón Burberry Vintage Check Basebell Cap', 8000000, 3),
(23, '107.jpg', 'Giày Gucci Rhyton Gucci Logo Leather Sneaker', 12000000, 3),
(24, '108.JPG', 'Thắt Lưng Gucci Microguccissima Black', 4500000, 3),
(65, 'Q', 'ÁO SƠ MI Nam', 247000, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_unicode_ci NOT NULL,
  `name` varchar(225) CHARACTER SET ucs2 COLLATE ucs2_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_unicode_ci NOT NULL,
  `avata` varchar(225) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `email`, `avata`) VALUES
(39, 'huyen', '123', 'huyen', 'nguyendoantung12345@gmail.com', '242211632_618878339098973_5621219576916657100_n.jpg'),
(38, 'tung112003', '123', 'Nguyễn Doãn Tùng', 'nguyendoantung12345@gmail.com', '204447345_518176125969474_2025131023540390899_n.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`iddanhmuc`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `iddanhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
