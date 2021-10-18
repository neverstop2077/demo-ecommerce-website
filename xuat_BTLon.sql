-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 16, 2021 lúc 02:05 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlidathang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdathang`
--

CREATE TABLE `chitietdathang` (
  `sodondh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mshh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `giadathang` bigint(20) DEFAULT NULL,
  `giamgia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdathang`
--

INSERT INTO `chitietdathang` (`sodondh`, `mshh`, `soluong`, `giadathang`, `giamgia`) VALUES
('DH10000', 'HH1000', 1, 320000, 0),
('DH10000', 'HH1002', 1, 280000, 0),
('DH20871', 'HH1000', 1, 320000, 0),
('DH20871', 'HH1002', 2, 560000, 0),
('DH20871', 'HH1004', 2, 720000, 0),
('DH20871', 'HH1005', 2, 840000, 0),
('DH35114', 'HH1000', 1, 320000, 0),
('DH35114', 'HH1002', 1, 280000, 0),
('DH35114', 'HH1003', 2, 1050000, 0),
('DH92469', 'HH1005', 1, 420000, 0),
('DH92469', 'HH1006', 1, 414000, 0),
('DH92469', 'HH1007', 2, 720000, 0),
('DH34792', 'HH1004', 1, 360000, 0),
('DH34792', 'HH1006', 2, 828000, 0),
('DH73826', 'HH1002', 1, 280000, 0),
('DH73826', 'HH1003', 2, 1050000, 0),
('DH14541', 'HH1001', 2, 400000, 0),
('DH14541', 'HH1002', 2, 560000, 0),
('DH14541', 'HH1004', 2, 720000, 0),
('DH14541', 'HH1006', 1, 414000, 0),
('DH14541', 'HH1007', 3, 1080000, 0);

--
-- Bẫy `chitietdathang`
--
DELIMITER $$
CREATE TRIGGER `trg_updatesoluong` AFTER INSERT ON `chitietdathang` FOR EACH ROW BEGIN
	UPDATE hanghoa
    SET soluonghang = soluonghang - new.soluong
    where mshh = new.mshh;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dathhang`
--

CREATE TABLE `dathhang` (
  `sodondh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mskh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msnv` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaydh` date DEFAULT NULL,
  `ngaygh` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dathhang`
--

INSERT INTO `dathhang` (`sodondh`, `mskh`, `msnv`, `ngaydh`, `ngaygh`) VALUES
('DH10000', 'KH10000', 'NV001', '2021-10-11', '2021-10-21'),
('DH14541', 'KH75497', 'NV002', '2021-10-16', '2021-10-23'),
('DH20871', 'KH72326', 'NV002', '2021-10-14', '2021-10-21'),
('DH34792', 'KH83086', 'NV002', '2021-10-14', '2021-10-21'),
('DH35114', '', 'NV002', '2021-10-14', '2021-10-21'),
('DH50489', 'KH47616', 'NV002', '2021-10-14', '2021-10-21'),
('DH62790', 'KH67704', 'NV002', '2021-10-14', '2021-10-21'),
('DH68770', 'KH85215', 'NV002', '2021-10-14', '2021-10-21'),
('DH73826', 'KH83086', 'NV002', '2021-10-14', '2021-10-21'),
('DH8728', 'KH13075', 'NV002', '2021-10-14', '2021-10-21'),
('DH92469', 'KH13075', 'NV002', '2021-10-14', '2021-10-21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diachikh`
--

CREATE TABLE `diachikh` (
  `madc` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mskh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `diachikh`
--

INSERT INTO `diachikh` (`madc`, `diachi`, `mskh`) VALUES
('DC10000', '62 Nguyễn Văn Cừ, phường An Hòa, thành phố Rạch Giá, tỉnh Kiên Giang', 'KH10000'),
('DC14674', '68 Huỳnh Mẫn Đạt, phường Vĩnh Lạc, Thành phố Rạch Giá, tỉnh Kiên Giang', 'KH83086'),
('DC76308', '68 Nguyên Văn Cừ, phường An Hòa, Thành phố Rạch Giá, tỉnh Kiên Giang', 'KH13075'),
('DC76333', '23/43 Phạm Ngũ Lão, phường Vĩnh Thanh Vân, Thành phố Rach Giá, tỉnh Kiên Giang', 'KH75497');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mshh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenhh` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quycach` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` bigint(20) DEFAULT NULL,
  `soluonghang` int(11) DEFAULT NULL CHECK (`soluonghang` >= 0),
  `maloaihang` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghichu` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`mshh`, `tenhh`, `quycach`, `gia`, `soluonghang`, `maloaihang`, `ghichu`) VALUES
('HH1000', 'BIG CHEESE 8', '1 cái', 320000, 0, 'A001', 'Áo thun Streetwear'),
('HH1001', 'Music Love Peace TEE', '1 cái', 200000, 97, 'A001', 'Áo thun Streetwear'),
('HH1002', 'ULTRAMANIA Longsleeve Tee', '1 cái', 280000, 92, 'A001', 'Áo thun Streetwear'),
('HH1003', 'MYO Barbeb Wire TEE', '1 cái', 525000, 95, 'A001', 'Áo thun Streetwear'),
('HH1004', 'PLAID PANTS - RED', '1 cái', 360000, 95, 'Q001', 'Quần Streetwear'),
('HH1005', 'JOGGER PANTS - GREY', '1 cái', 420000, 96, 'Q001', 'Quần Streetwear'),
('HH1006', 'Quần Tây Slim-Fit', '1 cái', 414000, 95, 'Q001', 'Quần tây'),
('HH1007', 'SIDE STRIPE PANTS - WHITE', '1 cái', 360000, 94, 'Q001', 'Quần Streetwear');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `mskh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotenkh` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nghenghiep` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sodienthoai` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`mskh`, `hotenkh`, `nghenghiep`, `sodienthoai`, `email`) VALUES
('KH10000', 'Vũ Xuân Long', 'Công nhân', '0916901105', 'vxlong@gmail.com'),
('KH13075', 'Nguyễn Hoài An', 'Sinh viên', '01234905001', 'an@gmail.com'),
('KH75497', 'Lý Mạc Sầu', 'Bảo kê', '0966192904', 'lms@gmail.com'),
('KH83086', 'Võ Quốc Duy', 'Sinh viên', '0846905006', 'quocduy060220@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaihanghoa`
--

CREATE TABLE `loaihanghoa` (
  `maloaihang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenloaihang` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaihanghoa`
--

INSERT INTO `loaihanghoa` (`maloaihang`, `tenloaihang`) VALUES
('A001', 'Áo'),
('Q001', 'Quần');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhavien`
--

CREATE TABLE `nhavien` (
  `msnv` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotennv` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chucvu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sodienthoai` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhavien`
--

INSERT INTO `nhavien` (`msnv`, `hotennv`, `chucvu`, `diachi`, `sodienthoai`) VALUES
('NV001', 'Nguyễn Hoàng Phong', 'Tư vấn', '13 Nguyễn An Ninh, Phường Vĩnh Thanh, Thành phố Rạch Giá, tỉnh Kiên Giang', '0913012957'),
('NV002', 'Lê Trúc Ly', 'Tư vấn', '124 Nguyễn Trung Trực, Phường Vĩnh Lạc, Thành phố Rạch Giá, tỉnh Kiên Giang', '090131949'),
('NV003', 'Trần Diệu Hiền', 'Kiểm kho', '1311 Trần Phú, Phường Vĩnh Bảo, Thành phố Rạch Giá, tỉnh Kiên Giang', '01245103005'),
('NV004', 'Võ Thụy', 'Kiểm toán', '99 Nguyễn An Ninh, Phường Vĩnh Lạc, Thành phố Rạch Giá, tỉnh Kiên Giang', '0913012957'),
('NV005', 'Lý Lệ Hằng', 'Quản lý', '123 Huỳnh Mẫn Đạt, Phường Vĩnh Lạc, Thành phố Rạch Giá, tỉnh Kiên Giang', '0913012957'),
('NV974', 'Lê Hữu Đức', 'Giao hàng', '93 Chu Văn An, phường Vĩnh Lạc, Thành phố Rạch Giá, tỉnh Kiên Giang', '0912831100');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dathhang`
--
ALTER TABLE `dathhang`
  ADD PRIMARY KEY (`sodondh`),
  ADD UNIQUE KEY `sodondh` (`sodondh`);

--
-- Chỉ mục cho bảng `diachikh`
--
ALTER TABLE `diachikh`
  ADD PRIMARY KEY (`madc`),
  ADD UNIQUE KEY `madc` (`madc`),
  ADD UNIQUE KEY `mskh` (`mskh`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`mshh`),
  ADD UNIQUE KEY `mshh` (`mshh`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`mskh`),
  ADD UNIQUE KEY `mskh` (`mskh`);

--
-- Chỉ mục cho bảng `loaihanghoa`
--
ALTER TABLE `loaihanghoa`
  ADD PRIMARY KEY (`maloaihang`),
  ADD UNIQUE KEY `maloaihang` (`maloaihang`);

--
-- Chỉ mục cho bảng `nhavien`
--
ALTER TABLE `nhavien`
  ADD PRIMARY KEY (`msnv`),
  ADD UNIQUE KEY `msnv` (`msnv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
