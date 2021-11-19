-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th6 21, 2021 lúc 03:14 PM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doan3`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `img1` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img2` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img3` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trangthai` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`img1`, `img2`, `img3`, `trangthai`) VALUES
('1.jpg ', '2.jpg', '3.jpg', b'1'),
('1.jpg ', '2.jpg', '3.jpg', b'1'),
('1.jpg ', '2.jpg', '3.jpg', b'1'),
('2.jpg ', '3.jpg', '4.jpg', b'1'),
('2.jpg ', '3.jpg', '4.jpg', b'1'),
('2.jpg ', '3.jpg', '4.jpg', b'1'),
('2.jpg ', '3.jpg', '4.jpg', b'1'),
('banner3-1.jpg ', 'banner3-2.jpg', 'NULL', b'0'),
('banner3-3.jpg ', 'NULL', 'NULL', b'0'),
('banner3-4.jpg ', 'banner3-5.jpg', 'NULL', b'0'),
('banner3-6.jpg ', 'NULL', 'NULL', b'0'),
('banner3-7.jpg ', 'banner3-8.jpg', 'NULL', b'0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `ID` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `IDKH` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `IDSP` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Nickname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Summary` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Review` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tinhtrang` int(11) DEFAULT NULL,
  `thoigian` datetime DEFAULT NULL,
  `REP_ID` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`ID`, `IDKH`, `IDSP`, `Nickname`, `Summary`, `Review`, `tinhtrang`, `thoigian`, `REP_ID`) VALUES
('1', '3', '013', 'jk', 'jk', 'jk', 1, '2021-06-19 05:47:30', NULL),
('10', '1', '013', 'Admin', NULL, 'admin', 1, '2021-06-19 08:50:49', '1'),
('11', '1', '013', 'Admin', NULL, 'admin đây', 1, '2021-06-19 08:53:51', '1'),
('13', '1', '008', 'Admin', NULL, 'vẫn là tú nhưng rep cho vui', 1, '2021-06-19 08:58:14', '12'),
('14', '11', '008', 'anhtu123', 'bjhdrbgjkbgj', 'gbdrhgjrgjoerijgoierjgierjogiergregieojgoirjejioge', 1, '2021-06-19 09:15:26', NULL),
('15', '1', '008', 'Admin', NULL, 'ygsduysgfuysf', 1, '2021-06-19 09:16:24', '14'),
('16', '1', '008', 'Admin', NULL, 'test', 1, '2021-06-19 19:00:01', '14'),
('17', '1', '008', 'Admin', NULL, 'gdjhwehjfw', 1, '2021-06-19 20:08:30', '14'),
('19', '11', '012', 'anh tu', 'sfjbjdhbjsh', 'bhbvdsjbgsdbjhgfbdhjk', 1, '2021-06-20 18:24:34', NULL),
('2', '', '013', 'hsjfdhsj', 'hjjkk', 'jhjkjhadjhsk', 0, '2021-06-19 06:15:32', NULL),
('20', '1', '012', 'Admin', NULL, 'hjasfhhdsjfjhdsf', 1, '2021-06-20 18:26:04', '19'),
('21', '1', '012', 'Admin', NULL, 'fbsdjhbfjhsbfhds', 1, '2021-06-20 18:26:12', '19'),
('3', '11', '013', 'bhsdfbhj', 'hbjhjh', 'hjhhbjjh', 0, '2021-06-19 06:16:19', NULL),
('4', '11', '013', 'jjnk', 'jkjknjk', 'jkjkj', 1, '2021-06-19 06:16:39', NULL),
('5', '1', '013', 'Admin', NULL, 'admin', 1, '2021-06-19 08:20:38', '3'),
('6', '1', '013', 'Admin', NULL, 'admin đây haha', 1, '2021-06-19 08:28:47', '3'),
('7', '1', '013', 'ndjhab', 'bhjbhj', 'hbjb', 0, '2021-06-19 08:29:20', NULL),
('8', '1', '013', 'ndjhab', 'bhjbhj', 'hbjb', 1, '2021-06-19 08:29:46', NULL),
('9', '1', '013', 'Admin', NULL, 'oke đó', 1, '2021-06-19 08:30:08', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietnhap`
--

CREATE TABLE `chitietnhap` (
  `MAHD` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `MASP` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `SOLUONG` int(11) NOT NULL,
  `TONGHOADON` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `CHITIETSP`
--

CREATE TABLE `CHITIETSP` (
  `MACHITIETSP` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `MASP` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `MAKICHTHUOC` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `MAMAU` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `SOLUONG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `CHITIETSP`
--

INSERT INTO `CHITIETSP` (`MACHITIETSP`, `MASP`, `MAKICHTHUOC`, `MAMAU`, `SOLUONG`) VALUES
('CTSP1', '22', 'L', 'black', 50),
('CTSP10', '39', 'L', 'black', 100),
('CTSP11', '40', 'L', 'black', 100),
('CTSP2', '22', 'M', 'black', 50),
('CTSP3', '23', 'L', 'black', 50),
('CTSP4', '23', 'M', 'black', 50),
('CTSP5', '24', 'L', 'black', 50),
('CTSP6', '24', 'M', 'black', 50),
('CTSP7', '35', 'L', 'black', 100),
('CTSP8', '36', 'S', 'white', 100),
('CTSP9', '37', 'L', 'violet', 100);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `CT_HOADON`
--

CREATE TABLE `CT_HOADON` (
  `IDCTHD` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `IDHD` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `IDSP` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `tongtien` bigint(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `CT_HOADON`
--

INSERT INTO `CT_HOADON` (`IDCTHD`, `IDHD`, `IDSP`, `soluong`, `tongtien`) VALUES
('CTHD1', 'hd1', '012', 1, 213),
('CTHD10', 'hd6', '013', 20, 1980),
('CTHD11', 'hd7', '013', 10, 990),
('CTHD12', 'hd7', '016', 50, 4900),
('CTHD2', 'hd1', '013', 5, 495),
('CTHD3', 'hd2', '010', 1, 123),
('CTHD4', 'hd3', '021', 6, 600),
('CTHD5', 'hd4', '010', 9, 1107),
('CTHD6', 'hd4', '008', 2, 4000),
('CTHD7', 'hd5', '010', 30, 3690),
('CTHD8', 'hd5', '013', 21, 2079),
('CTHD9', 'hd6', '010', 1, 123);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `magiohang` int(20) NOT NULL,
  `masp` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `sdt` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`magiohang`, `masp`, `soluong`, `sdt`) VALUES
(103, '012', 1, '2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `HOADONBAN`
--

CREATE TABLE `HOADONBAN` (
  `MAHD` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `NGAYLAPHD` datetime NOT NULL,
  `DONGIA` bigint(11) NOT NULL,
  `SOLUONG` int(11) NOT NULL,
  `MANV` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `SDTKH` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mazip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenkh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `IDKH` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tinhtrang` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `HOADONBAN`
--

INSERT INTO `HOADONBAN` (`MAHD`, `NGAYLAPHD`, `DONGIA`, `SOLUONG`, `MANV`, `SDTKH`, `diachi`, `mazip`, `tenkh`, `IDKH`, `email`, `tinhtrang`) VALUES
('hd1', '2021-06-04 00:00:00', 708, 6, '001', '1423432', 'fsdnullbrvtBà Rịa - Vũng Tàu', '900000', 'TúTRẦN', '1', 'tranducanhtu.cntt@gmail.com', 'delivering'),
('hd2', '2021-06-06 00:00:00', 123, 1, '001', '1423432', 'fsdnullbrvtBà Rịa - Vũng Tàu', '900000', 'TúTRẦN', '1', 'tranducanhtu.cntt@gmail.com', 'Cancel'),
('hd3', '2021-06-06 00:00:00', 600, 6, '001', '1423432', 'fsdnullbrvtBà Rịa - Vũng Tàu', '900000', 'TúTRẦN', '1', 'tranducanhtu.cntt@gmail.com', 'confirm'),
('hd4', '2021-06-18 00:00:00', 5107, 11, '001', '1423432', 'fsdnullbrvtBà Rịa - Vũng Tàu', '900000', 'TúTRẦN', '1', 'tranducanhtu.cntt@gmail.com', 'confirm'),
('hd5', '2021-06-20 00:00:00', 5769, 51, '001', '1423432', 'fsd1nullbrvtBà Rịa - Vũng Tàu', '900000', 'TúTRẦN', '11', 'tranducanhtu.cntt@gmail.com', 'confirm'),
('hd6', '2021-06-20 00:00:00', 2103, 21, '001', '1423432', 'fsdnull1brvtBà Rịa - Vũng Tàu', '900000', 'TúTRẦN', '11', 'tranducanhtu.cntt@gmail.com', 'confirm'),
('hd7', '2021-06-20 00:00:00', 5890, 60, '001', '1423432', 'fsdnullbrvtBà Rịa - Vũng Tàu', '900000', 'TúTRẦN', '11', 'tranducanhtu.cntt@gmail.com', 'confirm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `HOADONNHAP`
--

CREATE TABLE `HOADONNHAP` (
  `MAHD` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `NGAYLAPHD` datetime NOT NULL,
  `TONGITEN` int(11) NOT NULL,
  `SOLUONG` int(11) NOT NULL,
  `MANV` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `HOADONNHAP`
--

INSERT INTO `HOADONNHAP` (`MAHD`, `NGAYLAPHD`, `TONGITEN`, `SOLUONG`, `MANV`) VALUES
('hd01', '2020-12-12 00:00:00', 100000, 5, '001');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hotro`
--

CREATE TABLE `hotro` (
  `ID` int(11) NOT NULL,
  `TEN` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Tel` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `KHACHHANG`
--

CREATE TABLE `KHACHHANG` (
  `SDT` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TENKH` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DCHI` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `EMAIL` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pass` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TinhTrang` bit(1) DEFAULT NULL,
  `IDKH` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `KHACHHANG`
--

INSERT INTO `KHACHHANG` (`SDT`, `TENKH`, `DCHI`, `EMAIL`, `pass`, `TinhTrang`, `IDKH`) VALUES
('admin', 'admin', 'admin', 'admin', 'admin', b'1', '1'),
('12878123', ' Trần Đúc Anh Tú', '12 hoàn diệu', 'tranducanhtu@gmail.com', '123', b'1', '11'),
('142343221', 'Tú TRẦN', 'njknkj', 'tranducanhtu@gmail.com', '123', b'1', '12'),
('03488055642', 'TU', 'vinhomes grand park', 'tranducanhtu2@gmail.com', '123', b'1', '2'),
('0311111111', 'TU', 'dafasfs', 'tranducanhtu.cntt@gmail.com', '123', b'1', '3'),
('03488055641', 'TU', '12 hoàn diệu', 'tranducanhtu1@gmail.com', '123', b'1', '4'),
('1423432111', 'TU', '12 hoàn diệu', 'tranducanhtu1111.cntt@gmail.com', '123', b'1', '5'),
('0348805564', 'TU', '12 hoàn diệu', 'tranducanhtu@gmail.com', '123', b'0', '6'),
('14234322122', 'Tú TRẦN', '12 hoàn diệu', 'tranducanhtu.cntt123@gmail.com', '123', b'1', '9');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `KHO`
--

CREATE TABLE `KHO` (
  `MAKHO` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TENKHO` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SDT_NQL` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `DCHI` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MA_NQL` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TINHTRANG` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `KHO`
--

INSERT INTO `KHO` (`MAKHO`, `TENKHO`, `SDT_NQL`, `DCHI`, `MA_NQL`, `TINHTRANG`) VALUES
('kho01', 'kho1', '1230123123', '10 hùng vương', '001', b'1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `KICHTHUOC`
--

CREATE TABLE `KICHTHUOC` (
  `MAKICHTHUOC` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `KICHTHUOC`
--

INSERT INTO `KICHTHUOC` (`MAKICHTHUOC`) VALUES
('L'),
('M'),
('S');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `ID` int(11) NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Diachi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sodienthoai` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Chitiet` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaygui` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `LOAISP`
--

CREATE TABLE `LOAISP` (
  `MALOAISP` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TENLOAISP` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TINHTRANG` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `LOAISP`
--

INSERT INTO `LOAISP` (`MALOAISP`, `TENLOAISP`, `TINHTRANG`) VALUES
('ao01', 'áo quần', b'1'),
('bt01', 'beauty', b'1'),
('fs01', 'fashion', b'1'),
('kd01', 'kid', b'1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `MAUSAC`
--

CREATE TABLE `MAUSAC` (
  `MAMAU` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TENMAU` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `MAUSAC`
--

INSERT INTO `MAUSAC` (`MAMAU`, `TENMAU`) VALUES
('black', 'Đen'),
('gray', 'Xám'),
('violet', 'tím'),
('white', 'Trắng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `NHACUNGCAP`
--

CREATE TABLE `NHACUNGCAP` (
  `MANCC` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TENNCC` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `DCHI` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SOTK` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TENTK` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TENNH` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `LINK` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TINHTRANG` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `NHACUNGCAP`
--

INSERT INTO `NHACUNGCAP` (`MANCC`, `TENNCC`, `SDT`, `DCHI`, `SOTK`, `TENTK`, `TENNH`, `LINK`, `TINHTRANG`) VALUES
('NCC1', ' shop 123', ' 123123123', ' 12, Hùng Vương ', ' 1231231233 ', ' noname ', ' sacombank ', '1', b'1'),
('NCC2', ' shop 1231', '12331', '12 hoàn diệu', '14214', 'anh tú', 'vietcombank', 'ckjsfnkds', b'1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `NHANVIEN`
--

CREATE TABLE `NHANVIEN` (
  `MANV` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TENNV` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SOTK` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TENTK` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `TENNH` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `GIOITINH` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `DCHI` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `CMND` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `EMAIL` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `LUONG` int(11) NOT NULL,
  `TINHTRANG` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `NHANVIEN`
--

INSERT INTO `NHANVIEN` (`MANV`, `TENNV`, `SOTK`, `TENTK`, `TENNH`, `SDT`, `GIOITINH`, `DCHI`, `CMND`, `EMAIL`, `LUONG`, `TINHTRANG`) VALUES
('001', 'chan duc anh tú', '123123123', 'anhtu', 'sacombank', '1230123', 'nam', '11 hùng vuong', '77123123', 'anhtu@gmail.com', 1000000000, b'1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `SANPHAM`
--

CREATE TABLE `SANPHAM` (
  `MASP` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tieude` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MOTA` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `GIANHAP` int(11) DEFAULT NULL,
  `sale` int(11) DEFAULT NULL,
  `GIASI1` int(11) NOT NULL,
  `GIASI2` int(11) NOT NULL,
  `TINHTRANG` bit(1) NOT NULL,
  `MALOAISP` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `MANCC` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `MAKHO` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `img1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SOLUONG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `SANPHAM`
--

INSERT INTO `SANPHAM` (`MASP`, `tieude`, `MOTA`, `GIANHAP`, `sale`, `GIASI1`, `GIASI2`, `TINHTRANG`, `MALOAISP`, `MANCC`, `MAKHO`, `img1`, `img2`, `SOLUONG`) VALUES
('008', 'Work Lamp Silver Proin', NULL, NULL, 20, 2500, 2000, b'1', 'fs01', 'NCC1', 'kho01', '2.jpg ', '3.jpg', 100),
('010', 'Work Lamp Silver Proin', NULL, NULL, 20, 150, 123, b'1', 'fs01', 'NCC1', 'kho01', '3.jpg ', '4.jpg', 1),
('012', 'Work Lamp Silver Proin', NULL, NULL, 20, 300, 213, b'1', 'kd01', 'NCC1', 'kho01', '4.jpg ', '5.jpg', 100),
('013', 'Work Lamp Silver Proin', NULL, NULL, 20, 150, 99, b'1', 'kd01', 'NCC1', 'kho01', '5.jpg ', '6.jpg', 10),
('016', 'Work Lamp Silver Proin', NULL, NULL, 20, 150, 98, b'1', 'fs01', 'NCC1', 'kho01', '7.jpg ', '4.jpg', 50),
('017', 'Work Lamp Silver Proin', NULL, NULL, 20, 200, 120, b'1', 'fs01', 'NCC1', 'kho01', '10.jpg ', '6.jpg', 100),
('018', 'Work Lamp Silver Proin', NULL, NULL, 20, 150, 110, b'1', 'fs01', 'NCC1', 'kho01', '9.jpg ', '9.jpg', 100),
('021', 'Work Lamp Silver Proin', NULL, NULL, 20, 150, 100, b'1', 'kd01', 'NCC1', 'kho01', '40.jpg ', '41.jpg', 100),
('22', 'Light Inverted Quickd', 'dsadas', 2, 20, 150, 100, b'0', 'ao01', ' NCC1 ', 'kho01', '11.jpg', '6.jpg', 100),
('23', 'Light Inverted Quickd', 'dsadas', 12, 20, 100, 50, b'0', 'ao01', ' NCC1 ', 'kho01', '12.jpg ', '7.jpg', 100),
('24', 'trần đưcc anh tú', 'dsadas', 2, 20, 130, 62, b'1', 'ao01', ' NCC1 ', 'kho01', '13.jpg', '9.jpg', 100),
('25', 'Light Inverted Quickd', 'ds', 32432, 20, 130, 74, b'1', 'ao01', ' NCC1 ', 'kho01', '14.jpg', '10.jpg', 100),
('26', 'Light Inverted Quickd', 'fdsfdsf', 231, 20, 150, 100, b'1', 'ao01', ' NCC1 ', 'kho01', '15.jpg', '10.jpg', 100),
('27', 'Light Inverted Quickd', 'dsadas', 423, 20, 150, 130, b'1', 'ao01', 'NCC1', 'kho01', '39.jpg', '', 100),
('28', 'Light Inverted Quickd', 'dsadas', 42142, 20, 160, 120, b'1', 'ao01', 'NCC1', 'kho01', '40.jpg', '', 100),
('29', 'Light Inverted Quickd', 'dsadas', 42142, 20, 150, 100, b'1', 'ao01', 'NCC1', 'kho01', '41.jpg', '', 100),
('30', 'Light Inverted Quickd', 'dsadas', 12, 20, 150, 100, b'1', 'ao01', 'NCC1', 'kho01', '42.jpg', '', 100),
('31', 'Light Inverted Quickd', 'dsadas', 142, 20, 150, 100, b'1', 'ao01', 'NCC1', 'kho01', '43.jpg', '', 100),
('32', 'Light Inverted Quickd', '4', 142, 20, 150, 99, b'1', 'bt01', 'NCC1', 'kho01', '33.jpg', '', 100),
('33', 'Light Inverted Quickd', 'dsadas', 2, 20, 150, 99, b'1', 'bt01', 'NCC1', 'kho01', '10.jpg', '', 100),
('34', 'Light Inverted Quickd', 'dsadas', 12, 20, 150, 100, b'1', 'bt01', 'NCC1', 'kho01', '11.jpg', '', 100),
('35', 'Light Inverted Quickd', 'dsadas', 12, 20, 160, 100, b'1', 'bt01', 'NCC1', 'kho01', '12.jpg', '15.jpg', 100),
('36', 'Light Inverted Quickd', 'oke ', 1233, 20, 140, 99, b'1', 'bt01', 'NCC1', 'kho01', '14.jpg', '', 100),
('37', 'Light Inverted Quickd', '4', 1233, 20, 500, 424, b'1', 'bt01', 'NCC1', 'kho01', '16.jpg', '', 100),
('39', 'trần đưcc anh tú', 'dsadas', 142, 180, 200, 199, b'1', 'ao01', 'NCC1', 'kho01', '41.jpg', '', 100),
('40', 'Tú TRẦN', 'dsadas', 423, 20, 2000012, 67867, b'1', 'ao01', 'NCC1', 'kho01', '14.jpg ', '', 100);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `chitietnhap`
--
ALTER TABLE `chitietnhap`
  ADD KEY `FK_MAHD` (`MAHD`),
  ADD KEY `FK_MASP` (`MASP`);

--
-- Chỉ mục cho bảng `CHITIETSP`
--
ALTER TABLE `CHITIETSP`
  ADD PRIMARY KEY (`MACHITIETSP`),
  ADD KEY `FK_MASPCTSP` (`MASP`),
  ADD KEY `FK_MAKICHTHUOC` (`MAKICHTHUOC`),
  ADD KEY `FK_MAMAU` (`MAMAU`);

--
-- Chỉ mục cho bảng `CT_HOADON`
--
ALTER TABLE `CT_HOADON`
  ADD PRIMARY KEY (`IDCTHD`),
  ADD KEY `FK_IDHD` (`IDHD`),
  ADD KEY `FK_IDSP` (`IDSP`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`magiohang`),
  ADD KEY `FK_MASP1` (`masp`),
  ADD KEY `FK_IDKH` (`sdt`);

--
-- Chỉ mục cho bảng `HOADONBAN`
--
ALTER TABLE `HOADONBAN`
  ADD PRIMARY KEY (`MAHD`),
  ADD KEY `FK_MANV` (`MANV`),
  ADD KEY `FK_idkh2` (`IDKH`);

--
-- Chỉ mục cho bảng `HOADONNHAP`
--
ALTER TABLE `HOADONNHAP`
  ADD PRIMARY KEY (`MAHD`),
  ADD KEY `FK_MANHANVIEN1` (`MANV`);

--
-- Chỉ mục cho bảng `hotro`
--
ALTER TABLE `hotro`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `KHACHHANG`
--
ALTER TABLE `KHACHHANG`
  ADD PRIMARY KEY (`IDKH`) USING BTREE,
  ADD UNIQUE KEY `UQ_SDT` (`SDT`);

--
-- Chỉ mục cho bảng `KHO`
--
ALTER TABLE `KHO`
  ADD PRIMARY KEY (`MAKHO`),
  ADD KEY `FK_MANHANVIEN` (`MA_NQL`);

--
-- Chỉ mục cho bảng `KICHTHUOC`
--
ALTER TABLE `KICHTHUOC`
  ADD PRIMARY KEY (`MAKICHTHUOC`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `LOAISP`
--
ALTER TABLE `LOAISP`
  ADD PRIMARY KEY (`MALOAISP`);

--
-- Chỉ mục cho bảng `MAUSAC`
--
ALTER TABLE `MAUSAC`
  ADD PRIMARY KEY (`MAMAU`);

--
-- Chỉ mục cho bảng `NHACUNGCAP`
--
ALTER TABLE `NHACUNGCAP`
  ADD PRIMARY KEY (`MANCC`);

--
-- Chỉ mục cho bảng `NHANVIEN`
--
ALTER TABLE `NHANVIEN`
  ADD PRIMARY KEY (`MANV`);

--
-- Chỉ mục cho bảng `SANPHAM`
--
ALTER TABLE `SANPHAM`
  ADD PRIMARY KEY (`MASP`),
  ADD KEY `FK_MALOAISP` (`MALOAISP`),
  ADD KEY `FK_MANCC` (`MANCC`),
  ADD KEY `FK_MAKHO` (`MAKHO`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `magiohang` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT cho bảng `hotro`
--
ALTER TABLE `hotro`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietnhap`
--
ALTER TABLE `chitietnhap`
  ADD CONSTRAINT `FK_MAHD` FOREIGN KEY (`MAHD`) REFERENCES `HOADONNHAP` (`MAHD`),
  ADD CONSTRAINT `FK_MASP` FOREIGN KEY (`MASP`) REFERENCES `SANPHAM` (`MASP`);

--
-- Các ràng buộc cho bảng `CHITIETSP`
--
ALTER TABLE `CHITIETSP`
  ADD CONSTRAINT `FK_MAKICHTHUOC` FOREIGN KEY (`MAKICHTHUOC`) REFERENCES `KICHTHUOC` (`MAKICHTHUOC`),
  ADD CONSTRAINT `FK_MAMAU` FOREIGN KEY (`MAMAU`) REFERENCES `MAUSAC` (`MAMAU`),
  ADD CONSTRAINT `FK_MASPCTSP` FOREIGN KEY (`MASP`) REFERENCES `SANPHAM` (`MASP`);

--
-- Các ràng buộc cho bảng `CT_HOADON`
--
ALTER TABLE `CT_HOADON`
  ADD CONSTRAINT `FK_IDHD` FOREIGN KEY (`IDHD`) REFERENCES `HOADONBAN` (`MAHD`),
  ADD CONSTRAINT `FK_IDSP` FOREIGN KEY (`IDSP`) REFERENCES `SANPHAM` (`MASP`);

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `FK_IDKH` FOREIGN KEY (`sdt`) REFERENCES `KHACHHANG` (`IDKH`),
  ADD CONSTRAINT `FK_MASP1` FOREIGN KEY (`masp`) REFERENCES `SANPHAM` (`MASP`);

--
-- Các ràng buộc cho bảng `HOADONBAN`
--
ALTER TABLE `HOADONBAN`
  ADD CONSTRAINT `FK_MANV` FOREIGN KEY (`MANV`) REFERENCES `NHANVIEN` (`MANV`),
  ADD CONSTRAINT `FK_idkh2` FOREIGN KEY (`IDKH`) REFERENCES `KHACHHANG` (`IDKH`);

--
-- Các ràng buộc cho bảng `HOADONNHAP`
--
ALTER TABLE `HOADONNHAP`
  ADD CONSTRAINT `FK_MANHANVIEN1` FOREIGN KEY (`MANV`) REFERENCES `NHANVIEN` (`MANV`);

--
-- Các ràng buộc cho bảng `KHO`
--
ALTER TABLE `KHO`
  ADD CONSTRAINT `FK_MANHANVIEN` FOREIGN KEY (`MA_NQL`) REFERENCES `NHANVIEN` (`MANV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
