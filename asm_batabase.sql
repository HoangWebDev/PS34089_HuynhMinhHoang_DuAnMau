-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 11, 2023 lúc 05:36 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `asm_batabase`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `total` double(10,2) NOT NULL DEFAULT 0.00,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` int(10) NOT NULL DEFAULT 0,
  `address` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart_details`
--

CREATE TABLE `cart_details` (
  `id` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `id_cart` int(10) NOT NULL,
  `price` int(11) NOT NULL,
  `number` int(100) NOT NULL DEFAULT 0,
  `total` double(10,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog`
--

CREATE TABLE `catalog` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` int(2) NOT NULL DEFAULT 0,
  `img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `number`, `img`) VALUES
(1, 'Điện thoại', 0, ''),
(2, 'Laptop', 0, '\r\n'),
(3, 'Tablet', 0, ''),
(4, 'Tai Nghe', 0, NULL),
(22, 'Watch', 0, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `content` varchar(255) NOT NULL,
  `date_commnet` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `price` double(10,2) NOT NULL DEFAULT 0.00,
  `price_sale` double(10,2) NOT NULL DEFAULT 0.00,
  `describe` varchar(255) NOT NULL,
  `specifications` text NOT NULL,
  `new` tinyint(1) NOT NULL DEFAULT 0,
  `promotion` int(3) NOT NULL DEFAULT 0,
  `view` int(6) NOT NULL DEFAULT 0,
  `id_catalog` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `img`, `price`, `price_sale`, `describe`, `specifications`, `new`, `promotion`, `view`, `id_catalog`) VALUES
(1, 'iPhone 14 Pro Max', 'iphone-14-pro.png', 1114.09, 1266.07, '', '', 1, 12, 0, 1),
(2, 'Realme 9 Pro Plus', 'realme_9_pro_plus.jpg', 240.21, 295.09, '', '', 0, 6, 0, 1),
(3, 'Samsung Galaxy S22 Ultra', 'samsung_galaxys22ultra.jpg', 759.47, 1308.29, '', '', 0, 42, 0, 1),
(4, 'iPad Pro M2', 'ipad-pro-129-m2.jpg', 852.35, 1012.77, '', '', 0, 16, 0, 3),
(5, 'iPad Pro M1', 'ipad-pro-m1.png', 801.69, 1012.77, '', '', 0, 21, 0, 3),
(6, 'Samsung Galaxy A32\r\n', 'Samsung-Galaxy-a32-5G.png', 172.67, 273.98, '', '', 0, 37, 0, 1),
(7, 'Masstel Tab 10', 'masstel-tab-10s-_en-1-1-2-3-4-60.jpg', 71.35, 0.00, '', '', 0, 0, 0, 3),
(9, 'Laptop Acer Swift 3 SF314', 'acer-swift-3-sf314.jpg', 675.04, 886.12, '', '', 0, 24, 0, 2),
(10, 'Laptop MSI Gaming GF63 ', 'msi-gaming-gf63-thin-11.jpg', 632.62, 717.03, '', '', 0, 9, 0, 2),
(11, 'Tai nghe chụp tai Gaming Havit H2012D RGB', 'havit_h2012d_3.jpg', 20.72, 24.90, '', '', 0, 17, 0, 4),
(25, 'Apple Watch SE 2022 40mm', 'apple_watch.jpg', 21.02, 25.24, '', '', 0, 20, 0, 22),
(26, 'Laptop Dell Gaming G15 5530 i7', 'laptop-dell-alienware-m15-r5-2.jpg', 1726.90, 1811.25, '', '', 0, 5, 0, 2),
(28, 'Samsung Galaxy Z Flip4', 'samsung_galaxy_z_flip.jpg', 700.00, 750.00, '', '', 0, 10, 0, 1),
(29, 'Samsung Tab S9', 'samsung_tab_s9.jpg', 996.36, 1000.00, '', '', 0, 20, 0, 3),
(30, 'Samsung Galaxy Z Fold4', 'samsung_galaxy_z_fold_4.jpg', 608.70, 700.00, '', '', 0, 21, 0, 1),
(31, 'Apple Watch Series 8 45mm', 'apple_watch1_258.jpg', 348.57, 512.61, '', '', 0, 70, 0, 22),
(32, 'Tai nghe Gaming Asus Rog Strix Fusion 500', 'asus_rog_strix_fusion_500_3.jpg', 102.52, 225.55, '', '', 0, 50, 0, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` int(10) NOT NULL DEFAULT 0,
  `role` tinyint(1) NOT NULL DEFAULT 0,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `email`, `phonenumber`, `role`, `address`) VALUES
(1, 'hoang', '2004', 'Huỳnh Hoàng', 'hoang@gmail.com', 112434435, 1, 'TP.HCM'),
(3, 'kurosato', '12345678', 'Kurosato', 'kuro123@gmail.com', 999999999, 0, 'Trà Vinh'),
(4, 'minhhoang', '1809', 'Minh Hoàng', 'hoang123@gmail.com', 123456789, 0, 'TP.Trà Vinh');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cart_user` (`id_user`);

--
-- Chỉ mục cho bảng `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cart_details_product` (`id_product`),
  ADD KEY `fk_cart_details_cart` (`id_cart`);

--
-- Chỉ mục cho bảng `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comment_user` (`id_user`),
  ADD KEY `fk_comment_product` (`id_product`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_catalog` (`id_catalog`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cart_details`
--
ALTER TABLE `cart_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_cart_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `cart_details`
--
ALTER TABLE `cart_details`
  ADD CONSTRAINT `fk_cart_details_cart` FOREIGN KEY (`id_cart`) REFERENCES `cart` (`id`),
  ADD CONSTRAINT `fk_cart_details_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `fk_comment_product` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `fk_comment_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_catalog` FOREIGN KEY (`id_catalog`) REFERENCES `catalog` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
