-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 10, 2021 lúc 05:52 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_bill`
--

CREATE TABLE `tbl_bill` (
  `id` int(12) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `total` int(12) NOT NULL DEFAULT 0,
  `pttt` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0: tiền mặt; 1: ck; 2: thanh toán the'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_bill`
--

INSERT INTO `tbl_bill` (`id`, `name`, `address`, `tel`, `email`, `total`, `pttt`) VALUES
(2, 'fsdfdsfd', 'gdfgfd gdf', '546546', 'tranbaho@gmail.com', 0, 0),
(3, 'fsdfdsfd', 'gdfgfd gdf', '45654654', 'tranbaho@gmail.com', 0, 0),
(4, 'fsdfdsfd', 'gdfgfd gdf', '45654654', 'tranbaho@gmail.com', 0, 0),
(5, 'Tran', 'hthj', '64564', 'tranbaho@gmail.com', 0, 0),
(6, 'HO', 'Q8', '87879689', 'tranbaho@gmail.com', 0, 0),
(7, 'tuong', 'quan 8', '786876876', 'tranbaho@gmail.com', 150, 0),
(8, 'baho', 'pham the hien', '78687687', 'tranbaho@gmail.com', 150, 0),
(9, 'hotb', 'fpt', '678687678', 'tranbaho@gmail.com', 150, 0),
(10, 'tuogn tuong', 'pham the hien', '78678687', 'tuong@gmail.com', 150, 0),
(11, 'Tran tran', 'quận 8 hcm', '89789789789', 'tranbaho@gmail.com', 150, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id` int(12) NOT NULL,
  `tensp` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hinhsp` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dongia` int(12) NOT NULL DEFAULT 0,
  `soluong` int(3) NOT NULL DEFAULT 0,
  `thanhtien` int(12) NOT NULL DEFAULT 0,
  `idbill` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cart`
--

INSERT INTO `tbl_cart` (`id`, `tensp`, `hinhsp`, `dongia`, `soluong`, `thanhtien`, `idbill`) VALUES
(1, 'Đồng hồ', '1.jpg', 10, 1, 10, 8),
(2, 'Laptop', '2.gif', 20, 4, 80, 8),
(3, 'Đồng hồ trắng', '3.jpg', 30, 2, 60, 8),
(4, 'Đồng hồ', '1.jpg', 10, 1, 10, 9),
(5, 'Laptop', '2.gif', 20, 4, 80, 9),
(6, 'Đồng hồ trắng', '3.jpg', 30, 2, 60, 9),
(7, 'Đồng hồ', '1.jpg', 10, 1, 10, 10),
(8, 'Laptop', '2.gif', 20, 4, 80, 10),
(9, 'Đồng hồ trắng', '3.jpg', 30, 2, 60, 10),
(10, 'Đồng hồ', '1.jpg', 10, 1, 10, 11),
(11, 'Laptop', '2.gif', 20, 4, 80, 11),
(12, 'Đồng hồ trắng', '3.jpg', 30, 2, 60, 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cata`
--

CREATE TABLE `tbl_cata` (
  `id` int(12) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_cata`
--

INSERT INTO `tbl_cata` (`id`, `name`) VALUES
(1, 'Đồng hồ'),
(2, 'Laptop'),
(3, 'Điện thoại'),
(4, 'Ba lô'),
(5, 'Nón');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(12) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(12) NOT NULL,
  `mota` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `idcata` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `img`, `price`, `mota`, `idcata`) VALUES
(1, 'KHOAI TÂY TẮM PHÔ MAI', '1.jpg', 32, 'Ăn kèm', 1),
(2, 'COCA', '2.jpg', 22, 'Thức uống', 2),
(3, 'BURGER BÒ NƯỚNG KHOAI TÂY LÁT', '3.jpg', 50, 'Burger', 1),
(4, 'BURGER PHÔ MAI', '4.jpg', 35, 'Burger', 1),
(5, 'FANTA', '5.JPG', 22, 'Thức uống', 5),
(6, 'TRÀ CHANH','6.jpg', 44, 'Thức uống',5),
(7, 'MILO','7.jpg', 25, 'Thức uống', 5),
(8, 'NƯỚC CAM','8.jpg',25,'Thức uống',5),
(9, 'GÀ GIÒN KHÔNG CAY (1 miếng)','9.jpg',36,'Gà rán',5),
(10, 'BURGER GÀ GIÒN CAY','10.jpg',69,'Burger',6);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_bill`
--
ALTER TABLE `tbl_bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_cata`
--
ALTER TABLE `tbl_cata`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Pro_Cata` (`idcata`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_bill`
--
ALTER TABLE `tbl_bill`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tbl_cata`
--
ALTER TABLE `tbl_cata`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `FK_Pro_Cata` FOREIGN KEY (`idcata`) REFERENCES `tbl_cata` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
