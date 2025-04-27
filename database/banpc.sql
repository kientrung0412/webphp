-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 20, 2019 lúc 07:57 AM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `banpc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `IdAdmin` int(11) NOT NULL,
  `Email` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `Password` varchar(25) COLLATE utf8_vietnamese_ci NOT NULL,
  `TenAdmin` text COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`IdAdmin`, `Email`, `Password`, `TenAdmin`) VALUES
(4, 'trun', '', ''),
(5, 'Vu Hoang Lam', 'lamvh@live.com', '22'),
(6, '$name', '$n', '$name'),
(14, 'trung', 'egfh', 'hgjhjdghj'),
(15, 'trung@gmail.com', '1', 'Trung'),
(16, 'nguyenkientrung0412@gmail.com', '1', 'Trung');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `IdDonHang` int(11) NOT NULL,
  `IdThanhVien` int(11) NOT NULL,
  `IdSanPham` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `Gia` decimal(15,0) NOT NULL,
  `TgDat` datetime NOT NULL,
  `TgGiao` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`IdDonHang`, `IdThanhVien`, `IdSanPham`, `SoLuong`, `Gia`, `TgDat`, `TgGiao`) VALUES
(1, 19, 17, 7, '41517000', '2019-03-19 13:48:41', '2019-03-19 14:31:00'),
(34, 19, 17, 1, '5931000', '2019-03-20 03:38:00', '2019-03-20 13:50:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `IdThanhVien` int(255) DEFAULT NULL,
  `IdSanPham` int(255) DEFAULT NULL,
  `SoLuong` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`IdThanhVien`, `IdSanPham`, `SoLuong`) VALUES
(19, 11, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `ID` int(11) NOT NULL,
  `Sdt` text COLLATE utf8_vietnamese_ci,
  `DiaChi` text COLLATE utf8_vietnamese_ci,
  `Email` text COLLATE utf8_vietnamese_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`ID`, `Sdt`, `DiaChi`, `Email`) VALUES
(2, '12345678', 'Mỹ Đình 2, Nam Từ Liêm', 'nguyenkientrung0412@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihang`
--

CREATE TABLE `loaihang` (
  `IdLoaiHang` int(11) NOT NULL,
  `TenLoaiHang` text COLLATE utf8_vietnamese_ci NOT NULL,
  `Title` text COLLATE utf8_vietnamese_ci NOT NULL,
  `Img` text COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `loaihang`
--

INSERT INTO `loaihang` (`IdLoaiHang`, `TenLoaiHang`, `Title`, `Img`) VALUES
(1, 'cpu', 'Bộ vi xử lý', 'img/Icon/logo_cpu.png'),
(2, 'maniboard', 'Bo mạch chủ', 'img/Icon/logo_mainboard.png'),
(3, 'ram', 'Ram', 'img/Icon/logo_ram.png'),
(4, 'vga', 'Card đồ họa', 'img/Icon/gpu_logo.png'),
(5, 'disk', 'Ổ cứng', 'img/Icon/hd.png'),
(6, 'psu', 'Nguồn', 'img/Icon/logo_psu.png'),
(8, 'display', 'Màn hình', 'img/Icon/display.png'),
(9, 'gear', 'Phụ kiện', 'img/Icon/Gear.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanhieu`
--

CREATE TABLE `nhanhieu` (
  `IdNhanHieu` int(11) NOT NULL,
  `TenNhanHieu` text COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanhieu`
--

INSERT INTO `nhanhieu` (`IdNhanHieu`, `TenNhanHieu`) VALUES
(1, 'Intel'),
(2, 'AMD'),
(3, 'MSI'),
(4, 'Asus'),
(5, 'Acer'),
(6, 'Gigabyte'),
(7, 'Samsung'),
(8, 'LG'),
(9, 'Dell'),
(10, 'Logitech'),
(11, 'Gkill'),
(12, 'Corsair');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quangcao`
--

CREATE TABLE `quangcao` (
  `IdQuangCao` int(255) NOT NULL,
  `Title` text COLLATE utf8_vietnamese_ci,
  `Img` text COLLATE utf8_vietnamese_ci,
  `Date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `quangcao`
--

INSERT INTO `quangcao` (`IdQuangCao`, `Title`, `Img`, `Date`) VALUES
(1, 'msi', 'https://storage-asset.msi.com/global/picture/banner/banner_15525482175c8a017906bef.jpg', '2019-03-14 00:46:00'),
(2, 'mainboar', 'https://storage-asset.msi.com/global/picture/banner/banner_15387098865bb6d97e735b1.jpg', '2019-03-19 16:10:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `IdSanPham` int(25) NOT NULL,
  `TenSanPham` text COLLATE utf8_vietnamese_ci NOT NULL,
  `GioiThieu` text COLLATE utf8_vietnamese_ci NOT NULL,
  `IdNhanHieu` int(11) NOT NULL,
  `IdLoaiHang` int(11) NOT NULL,
  `Img` text COLLATE utf8_vietnamese_ci NOT NULL,
  `Gia` decimal(15,0) NOT NULL,
  `GiamGia` decimal(15,0) NOT NULL,
  `NgayNhap` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`IdSanPham`, `TenSanPham`, `GioiThieu`, `IdNhanHieu`, `IdLoaiHang`, `Img`, `Gia`, `GiamGia`, `NgayNhap`) VALUES
(11, 'CPU i5 8400', '', 2, 1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTN9AiqhIkPGJHoKFT-dYe-o6Vcta5IZWdXq6TeLoqr3fe-cXBdQ', '5400000', '5', '2019-03-15 23:41:00'),
(12, 'CPU I5 8600k', '', 1, 1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTN9AiqhIkPGJHoKFT-dYe-o6Vcta5IZWdXq6TeLoqr3fe-cXBdQ', '6700000', '10', '2019-03-10 02:32:21'),
(14, 'CPU Ryzen 7 2700x', '', 2, 1, 'data:image/jpeg;base64,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', '12000000', '0', '2019-03-10 03:20:12'),
(15, 'CPU Ryzen 5 2600', '', 2, 1, 'https://hanoicomputercdn.com/media/product/250_42102_ryzen_5.jpg', '7000000', '3', '2019-03-10 03:23:37'),
(17, 'Mainboard MSI Z370 Gaming Pro', '', 3, 2, 'https://hanoicomputercdn.com/media/product/44160_pro_carbon_ac.png', '6590000', '25', '2019-03-20 13:54:00'),
(18, 'Intel i9 9900k', '', 1, 1, 'https://hanoicomputercdn.com/media/product/250_44016_intel_core_i9_9900k.jpg', '14000000', '3', '2019-03-19 16:20:30'),
(19, 'VGA MSI GTX 1660 Gaming X 6G', '', 3, 4, 'https://hanoicomputercdn.com/media/product/250_45833_1.png', '8250000', '1', '2019-03-19 16:21:38'),
(22, 'VGA MSI GTX 1050Ti Gaming X 4G', '33', 3, 4, 'https://hanoicomputercdn.com/media/product/250_34458_vgms258_1.jpg', '5400000', '3', '2019-03-19 16:23:34'),
(23, 'VGA MSI RTX 2060 Gaming Z 6G', '', 3, 4, 'https://hanoicomputercdn.com/media/product/250_45149_product_5_20190104135833_5c2ef60987095.png', '11200000', '7', '2019-03-19 16:25:33'),
(24, 'CPU Ryzen 5 2600x', '', 1, 1, 'https://hanoicomputercdn.com/media/product/250_42102_ryzen_5.jpg', '5990000', '6', '2019-03-19 16:35:00'),
(25, 'VGA ASUS RTX 2080Ti ROG', '', 4, 4, 'https://hanoicomputercdn.com/media/product/250_43881_vgas4286.jpg', '25000000', '3', '2019-03-19 16:37:50'),
(26, 'Mainboard Asus ROG MAXIMUS XI EXTREME', '', 4, 2, 'https://hanoicomputercdn.com/media/product/250_44894_6.jpg', '7500000', '2', '2019-03-19 16:39:37'),
(27, 'Mainboard  Gigabyte Z390 Gaming X', '', 6, 2, 'https://hanoicomputercdn.com/media/product/250_44257_z390_gaming_x.png', '3990000', '0', '2019-03-19 16:41:12'),
(28, 'Mainboard  Gigabyte Z390 Aorus Master', '', 6, 2, 'https://hanoicomputercdn.com/media/product/250_44258_z390_aorus_master.png', '12500000', '0', '2019-03-20 02:18:40'),
(30, 'Kit Ram 4 Gskill Trident Z RGB 32GB/3000 (2x16GB)', '', 10, 3, 'https://hanoicomputercdn.com/media/product/250_42696_rags319.jpg', '5500000', '0', '2019-03-19 16:53:47'),
(31, 'Ram 4 Corsair 16GB/2666 (2*8GB)', '', 12, 3, 'https://hanoicomputercdn.com/media/product/250_43612_42900_raco303.jpg', '3500000', '3', '2019-03-19 16:56:25'),
(33, 'Kit Ram 4 Gskill Trident X 16GB/3000 (2x8GB)', '', 11, 3, 'https://hanoicomputercdn.com/media/product/250_42899_raco301.jpg', '3200000', '2', '2019-03-19 16:57:24'),
(35, 'Ram 4 Corsair 8GB/2666 (1*8GB)', '', 12, 3, 'https://hanoicomputercdn.com/media/product/250_43475_raco304.jpg', '1200000', '3', '2019-03-19 16:59:05'),
(36, 'Samsung evo 860', '', 7, 5, 'data:image/jpeg;base64,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QEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERB/9k=', '2500000', '0', '2019-03-20 02:09:16'),
(37, 'Samsung evo 970 plus', '', 7, 5, 'data:image/jpeg;base64,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', '9500000', '3', '2019-03-20 02:10:01'),
(38, 'Samsung 860 EVO 2TB 2.5', '7', 7, 5, 'https://www.anphatpc.com.vn/media/product/250_25379_____c___ng_ssd_samsung_860_evo_2tb_2_5___sata_iii__mz_76e2t0bw__1.jpg', '13000000', '5', '2019-03-20 02:12:16'),
(39, 'Ổ cứng SSD Intel M.2 OPTANE 32GB', '', 1, 5, 'https://www.anphatpc.com.vn/media/product/250_22793_____c___ng_ssd_intel_optane_32gb_1.jpg', '1500000', '5', '2019-03-20 02:13:30'),
(40, 'Nguồn máy tính Corsair SF750 - 80 PLUS® Platinum 750W', '', 12, 6, 'https://www.anphatpc.com.vn/media/product/250_28600__cp_9020186_na_gallery_sf750_01_300m.png', '4500000', '23', '2019-03-20 02:16:17'),
(41, 'Nguồn máy tính Corsair HX1000 - 1000W 80 Plus Platinum', '', 12, 6, 'https://www.anphatpc.com.vn/media/product/250_27271_corsair_hx1000___1000w_80_plus_platinum_1.png', '8000000', '2', '2019-03-20 02:17:30'),
(42, 'Nguồn máy tính RMx Series™ RM850x Gold Certified - WHITE', '', 12, 6, 'https://www.anphatpc.com.vn/media/product/250_23691_2862336_l_a.jpg', '7000000', '2', '2019-03-20 02:18:37'),
(43, 'Nguồn máy tính Corsair ax1200i  ', '', 12, 6, 'https://www.anphatpc.com.vn/media/product/250_24172_71ek3rmbbol__sl1500_.jpg', '11000000', '0', '2019-03-20 02:19:22'),
(44, 'Màn hình Asus 25\"PG258Q LED 1ms + 240Hz', '', 4, 8, 'https://hanoicomputercdn.com/media/product/250_36112_1__1_.png', '14590000', '5', '2019-03-20 13:38:27'),
(45, 'Monitor Asus ROG strix 27\"XG27VQ  LED', '', 4, 8, 'https://hanoicomputercdn.com/media/product/250_38097_asus_rog_strix_xg32vq_man_hinh_cong_choi_game_144hz_freesync_2k_wqhd_aura_sync_led_bao_ve_mat_1.jpg', '15900000', '9', '2019-03-20 13:39:54'),
(46, 'Màn hình Acer Predator 35\"Z35P IPS Curved Gaming', '', 5, 8, 'https://hanoicomputercdn.com/media/product/250_40632_1.jpg', '27990000', '5', '2019-03-20 13:40:54'),
(47, 'Màn hình LG 34\"34UC99-W Curved LED IPS', '', 8, 8, 'https://hanoicomputercdn.com/media/product/250_36499_medium01.jpg', '18900000', '0', '2019-03-20 13:42:20'),
(48, 'Chuột Logitech G 102 Pro', '', 10, 9, 'https://hanoicomputercdn.com/media/product/250_34376_g102_g203.jpg', '450000', '2', '2019-03-20 13:43:44'),
(49, 'Keyboard Corsair K68 RGB Mechanical Cherry MX Blue (Chống nước, bụi)', '', 12, 9, 'https://hanoicomputercdn.com/media/product/250_45203_81zxwub8drl__sl1500_.jpg', '4500000', '2', '2019-03-20 13:44:55'),
(50, 'Bàn Phím Asus ROG Claymore Ultimate RGB Aura Sync Cherry Red switch', '', 4, 9, 'https://hanoicomputercdn.com/media/product/250_40593_52b.jpg', '4700000', '0', '2019-03-20 13:46:19'),
(51, 'Tai nghe Logitech G633 Artemis Spectrum, ', '', 10, 9, 'https://hanoicomputercdn.com/media/product/250_36437_01.jpg', '2590000', '1', '2019-03-20 13:47:15'),
(52, 'Mainboard MSI Z370 Gaming Pro', '', 2, 3, 'https://hanoicomputercdn.com/media/product/44160_pro_carbon_ac.png', '6590000', '25', '2019-03-20 13:54:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `IdThanhVien` int(11) NOT NULL,
  `Email` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `Password` varchar(25) COLLATE utf8_vietnamese_ci NOT NULL,
  `HoVaTen` text COLLATE utf8_vietnamese_ci NOT NULL,
  `Sdt` text COLLATE utf8_vietnamese_ci NOT NULL,
  `DiaChi` text COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`IdThanhVien`, `Email`, `Password`, `HoVaTen`, `Sdt`, `DiaChi`) VALUES
(19, 'nguyenkientrung0412@gmail.com', '1', 'Nguyen Kien Trung', '0835042790', 'đơn nguyên 5, ký túc xá mỹ đình 2');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`IdAdmin`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`IdDonHang`),
  ADD KEY `IdThanhVien` (`IdThanhVien`),
  ADD KEY `IdSanPham` (`IdSanPham`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD KEY `IdThanhVien` (`IdThanhVien`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `loaihang`
--
ALTER TABLE `loaihang`
  ADD PRIMARY KEY (`IdLoaiHang`);

--
-- Chỉ mục cho bảng `nhanhieu`
--
ALTER TABLE `nhanhieu`
  ADD PRIMARY KEY (`IdNhanHieu`);

--
-- Chỉ mục cho bảng `quangcao`
--
ALTER TABLE `quangcao`
  ADD PRIMARY KEY (`IdQuangCao`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`IdSanPham`),
  ADD KEY `NhanHieu` (`IdNhanHieu`),
  ADD KEY `Loai` (`IdLoaiHang`);

--
-- Chỉ mục cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`IdThanhVien`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `IdAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `IdDonHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `loaihang`
--
ALTER TABLE `loaihang`
  MODIFY `IdLoaiHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `nhanhieu`
--
ALTER TABLE `nhanhieu`
  MODIFY `IdNhanHieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `quangcao`
--
ALTER TABLE `quangcao`
  MODIFY `IdQuangCao` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `IdSanPham` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `IdThanhVien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`IdSanPham`) REFERENCES `sanpham` (`IdSanPham`),
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`IdThanhVien`) REFERENCES `thanhvien` (`IdThanhVien`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`IdLoaiHang`) REFERENCES `loaihang` (`IdLoaiHang`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`IdNhanHieu`) REFERENCES `nhanhieu` (`IdNhanHieu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
