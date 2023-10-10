-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 23, 2022 lúc 07:26 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duanmau2022`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pttt` tinyint(4) DEFAULT NULL COMMENT '1 .Thanh toán online\r\n2 .Thanh toán khi nhận hàng',
  `total` int(11) NOT NULL,
  `ngaydathang` varchar(255) NOT NULL,
  `trangthai` tinyint(1) NOT NULL COMMENT '0 .Đơn hàng mới\r\n1 .Đang xử lí\r\n2 .Đang giao hàng\r\n3 .Giao hàng thành công '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `name`, `address`, `tel`, `email`, `pttt`, `total`, `ngaydathang`, `trangthai`) VALUES
(2, 'Nguyễn Văn Đạt', 'hà nội ', '0962096125', 'vandatpk01@gmail.com ', 0, 22222, '22/10/2022', 0),
(3, 'Nguyễn Văn Đạt', 'hà nội ', '0962096125', 'vandatpk01@gmail.com ', 0, 22222, '22/10/2022', 0),
(4, 'Nguyễn Văn Đạt', 'hà nội ', '0962096125', 'vandatpk01@gmail.com ', 0, 22222, '22/10/2022', 0),
(5, 'Nguyễn Văn Đạt', 'hà nội ', '0962096125', 'vandatpk01@gmail.com ', 0, 0, '22/10/2022', 0),
(6, 'Nguyễn Văn Đạt', 'hà nội ', '0962096125', 'vandatpk01@gmail.com ', 0, 0, '22/10/2022', 0),
(7, 'Nguyễn Văn Đạt', 'hà nội ', '0962096125', 'vandatpk01@gmail.com ', 0, 22222, '22/10/2022', 0),
(8, 'Nguyễn Văn Đạt', 'hà nội ', '0962096125', 'vandatpk01@gmail.com ', 0, 33333, '22/10/2022', 0),
(9, 'Nguyễn Văn Đạt', 'hà nội ', '0962096125', 'vandatpk01@gmail.com ', 0, 33333, '22/10/2022', 0),
(10, 'Nguyễn Văn Đạt', 'hà nội ', '0962096125', 'vandatpk01@gmail.com ', 0, 33333, '22/10/2022', 0),
(11, 'Nguyễn Văn Đạt', 'hà nội ', '0962096125', 'vandatpk01@gmail.com ', 0, 33333, '22/10/2022', 0),
(12, 'Nguyễn Văn Đạt', 'hà nội ', '0962096125', 'vandatpk01@gmail.com ', 0, 33333, '22/10/2022', 0),
(13, 'Nguyễn Văn Đạt', 'hà nội ', '0962096125', 'vandatpk01@gmail.com ', 0, 33333, '22/10/2022', 0),
(14, 'Nguyễn Văn Đạt', 'hà nội ', '0962096125', 'vandatpk01@gmail.com ', 0, 33333, '22/10/2022', 0),
(15, 'Nguyễn Văn Đạt', 'hà nội ', '0962096125', 'vandatpk01@gmail.com ', 0, 33333, '22/10/2022', 0),
(16, 'Nguyễn Văn Đạt', 'hà nội ', '0962096125', 'vandatpk01@gmail.com ', 0, 33333, '22/10/2022', 0),
(17, 'Nguyễn Văn Đạt', 'hà nội ', '0962096125', 'vandatpk01@gmail.com ', 0, 33333, '22/10/2022', 0),
(18, 'Nguyễn Văn Đạt', 'hà nội ', '0962096125', 'vandatpk01@gmail.com ', 0, 33333, '22/10/2022', 0),
(19, 'Nguyễn Văn Đạt', 'hà nội ', '0962096125', 'vandatpk01@gmail.com ', 0, 33333, '22/10/2022', 0),
(20, 'Nguyễn Văn Đạt', 'hà nội ', '0962096125', 'vandatpk01@gmail.com ', 0, 33333, '22/10/2022', 0),
(21, 'Nguyễn Văn Đạt', 'hà nội ', '0962096125', 'vandatpk01@gmail.com ', 0, 33333, '22/10/2022', 0),
(22, 'Nguyễn Văn Đạt', 'hà nội ', '0962096125', 'vandatpk01@gmail.com ', 0, 33333, '22/10/2022', 0),
(23, 'Nguyễn Văn Đạt', 'hà nội ', '0962096125', 'vandatpk01@gmail.com ', 0, 33333, '22/10/2022', 0),
(24, 'Nguyễn Văn Đạt', 'hà nội ', '0962096125', 'vandatpk01@gmail.com ', 0, 33333, '22/10/2022', 0),
(25, 'Nguyễn Văn Đạt', 'hà nội ', '0962096125', 'vandatpk01@gmail.com ', 0, 33333, '22/10/2022', 0),
(26, 'Nguyễn Văn Đạt', 'hà nội ', '0962096125', 'vandatpk01@gmail.com ', 0, 33333, '22/10/2022', 0),
(27, 'Nguyễn Văn Đạt', 'hà nội ', '0962096125', 'vandatpk01@gmail.com ', 0, 33333, '22/10/2022', 0),
(28, 'Nguyễn Văn Đạt', 'hà nội ', '0962096125', 'vandatpk01@gmail.com ', 0, 33333, '22/10/2022', 0),
(29, 'Nguyễn Văn Đạt', 'hà nội ', '0962096125', 'vandatpk01@gmail.com ', 0, 33333, '22/10/2022', 0),
(30, 'Nguyễn Văn Đạt', 'hà nội ', '0962096125', 'vandatpk01@gmail.com ', 0, 33333, '22/10/2022', 0),
(31, 'Nguyễn Văn Đạt', 'hà nội ', '0962096125', 'vandatpk01@gmail.com ', 0, 134234, '22/10/2022', 0),
(32, 'Nguyễn Văn Đạt', 'hà nội ', '0962096125', 'vandatpk01@gmail.com ', 0, 134234, '22/10/2022', 0),
(33, 'Nguyễn Văn Đạt', 'hà nội ', '0962096125', 'vandatpk01@gmail.com ', 0, 134234, '22/10/2022', 0),
(34, 'Nguyễn Văn Đạt', 'hà nội ', '0962096125', 'vandatpk01@gmail.com ', 0, 134234, '22/10/2022', 0),
(35, 'Nguyễn Văn Đạt', 'hà nội ', '0962096125', 'vandatpk01@gmail.com ', 0, 134234, '22/10/2022', 0),
(36, '', ' ', '', ' ', 0, 123123, '22/10/2022', 0),
(37, 'Nguyễn Văn Đạt', 'Sông Lô', '0787171897', ' saefaw', 0, 123123, '22/10/2022', 0),
(38, 'Nguyễn Văn Đạt', 'Sông Lô', '0787171897', 'fefefefefefe', 0, 123123, '22/10/2022', 0),
(39, 'Nguyễn Văn Đạt', 'Sông Lô', '0962096125', 'ndat165@gmail.com ', 0, 123123, '22/10/2022', 0),
(40, 'Nguyễn Văn Đạt', 'Sông Lô', '0962096125', 'ndat165@gmail.com ', 0, 123123, '22/10/2022', 0),
(41, 'Nguyễn Văn Đạt', 'Sông Lô', '0962096125', 'ndat165@gmail.com ', 0, 123123, '22/10/2022', 0),
(42, 'Nguyễn Văn Đạt', 'Sông Lô', '0962096125', 'ndat165@gmail.com ', 0, 123123, '22/10/2022', 0),
(43, 'Nguyễn Văn Đạt', 'Sông Lô', '0962096125', 'ndat165@gmail.com ', 0, 123123, '22/10/2022', 0),
(44, 'Nguyễn Văn Đạt', 'Sông Lô', '0962096125', 'ndat165@gmail.com ', 0, 123123, '22/10/2022', 0),
(45, 'Nguyễn Văn Đạt', 'Sông Lô', '0962096125', 'ndat165@gmail.com ', 0, 123123, '22/10/2022', 0),
(46, 'Nguyễn Văn Đạt', 'Sông Lô', '0962096125', 'ndat165@gmail.com ', 0, 123123, '22/10/2022', 0),
(47, 'Nguyễn Văn Đạt', 'Sông Lô', '0962096125', 'ndat165@gmail.com ', 0, 123123, '22/10/2022', 0),
(48, 'Nguyễn Văn Đạt', 'Sông Lô', '0962096125', 'ndat165@gmail.com ', 0, 123123, '22/10/2022', 0),
(49, 'Nguyễn Văn Đạt', 'Sông Lô', '0962096125', 'ndat165@gmail.com ', 0, 11111, '22/10/2022', 0),
(50, 'Nguyễn Văn Đạt', 'hà nội ', '0962096125', 'vandatpk01@gmail.com ', 0, 11111, '22/10/2022', 0),
(51, 'Nguyễn Văn Đạt', 'hà nội ', '0962096125', 'vandatpk01@gmail.com ', 0, 22222, '22/10/2022', 0),
(52, 'Nguyễn Văn Đạt', 'hà nội ', '0962096125', 'vandatpk01@gmail.com ', 0, 33333, '22/10/2022', 0),
(53, 'Nguyễn Văn Đạt', 'Sông Lô', '0962096125', 'ndat165@gmail.com ', 0, 1400, '23/10/2022', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `idtk` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `ngaybinhluan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `idtk`, `idpro`, `ngaybinhluan`) VALUES
(1, 'srgregase', 2, 36, '11:21:13am 17/10/2022'),
(2, 'srgregase', 2, 36, '11:23:34am 17/10/2022'),
(3, 'srgregase', 2, 36, '11:23:44am 17/10/2022'),
(4, 'chào  các bạn nhé', 2, 36, '11:36:13am 17/10/2022'),
(5, 'chào  các bạn nhé', 0, 36, '11:43:27am 17/10/2022');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `idbill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `img`, `name`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES
(3, 1, 38, ' 156652_1505049543.jpeg', 'zổ', 22222, 1, 22222, 3),
(4, 1, 38, ' 156652_1505049543.jpeg', 'zổ', 22222, 1, 22222, 4),
(5, 1, 38, ' 156652_1505049543.jpeg', 'zổ', 22222, 1, 22222, 7),
(6, 1, 38, ' 156652_1505049543.jpeg', 'zổ', 22222, 1, 22222, 8),
(7, 1, 37, ' 451ac5df751f350453af42a91cd71cb1bd8e986d.jpg', 'datcoming222', 11111, 1, 11111, 8),
(8, 1, 38, ' 156652_1505049543.jpeg', 'zổ', 22222, 1, 22222, 9),
(9, 1, 37, ' 451ac5df751f350453af42a91cd71cb1bd8e986d.jpg', 'datcoming222', 11111, 1, 11111, 9),
(10, 1, 38, ' 156652_1505049543.jpeg', 'zổ', 22222, 1, 22222, 10),
(11, 1, 37, ' 451ac5df751f350453af42a91cd71cb1bd8e986d.jpg', 'datcoming222', 11111, 1, 11111, 10),
(12, 1, 38, ' 156652_1505049543.jpeg', 'zổ', 22222, 1, 22222, 11),
(13, 1, 37, ' 451ac5df751f350453af42a91cd71cb1bd8e986d.jpg', 'datcoming222', 11111, 1, 11111, 11),
(14, 1, 38, ' 156652_1505049543.jpeg', 'zổ', 22222, 1, 22222, 12),
(15, 1, 37, ' 451ac5df751f350453af42a91cd71cb1bd8e986d.jpg', 'datcoming222', 11111, 1, 11111, 12),
(16, 1, 38, ' 156652_1505049543.jpeg', 'zổ', 22222, 1, 22222, 13),
(17, 1, 37, ' 451ac5df751f350453af42a91cd71cb1bd8e986d.jpg', 'datcoming222', 11111, 1, 11111, 13),
(18, 1, 38, ' 156652_1505049543.jpeg', 'zổ', 22222, 1, 22222, 14),
(19, 1, 37, ' 451ac5df751f350453af42a91cd71cb1bd8e986d.jpg', 'datcoming222', 11111, 1, 11111, 14),
(20, 1, 38, ' 156652_1505049543.jpeg', 'zổ', 22222, 1, 22222, 15),
(21, 1, 37, ' 451ac5df751f350453af42a91cd71cb1bd8e986d.jpg', 'datcoming222', 11111, 1, 11111, 15),
(22, 1, 38, ' 156652_1505049543.jpeg', 'zổ', 22222, 1, 22222, 16),
(23, 1, 37, ' 451ac5df751f350453af42a91cd71cb1bd8e986d.jpg', 'datcoming222', 11111, 1, 11111, 16),
(24, 1, 38, ' 156652_1505049543.jpeg', 'zổ', 22222, 1, 22222, 17),
(25, 1, 37, ' 451ac5df751f350453af42a91cd71cb1bd8e986d.jpg', 'datcoming222', 11111, 1, 11111, 17),
(26, 1, 38, ' 156652_1505049543.jpeg', 'zổ', 22222, 1, 22222, 18),
(27, 1, 37, ' 451ac5df751f350453af42a91cd71cb1bd8e986d.jpg', 'datcoming222', 11111, 1, 11111, 18),
(28, 1, 38, ' 156652_1505049543.jpeg', 'zổ', 22222, 1, 22222, 19),
(29, 1, 37, ' 451ac5df751f350453af42a91cd71cb1bd8e986d.jpg', 'datcoming222', 11111, 1, 11111, 19),
(30, 1, 38, ' 156652_1505049543.jpeg', 'zổ', 22222, 1, 22222, 20),
(31, 1, 37, ' 451ac5df751f350453af42a91cd71cb1bd8e986d.jpg', 'datcoming222', 11111, 1, 11111, 20),
(32, 1, 38, ' 156652_1505049543.jpeg', 'zổ', 22222, 1, 22222, 21),
(33, 1, 37, ' 451ac5df751f350453af42a91cd71cb1bd8e986d.jpg', 'datcoming222', 11111, 1, 11111, 21),
(34, 1, 38, ' 156652_1505049543.jpeg', 'zổ', 22222, 1, 22222, 22),
(35, 1, 37, ' 451ac5df751f350453af42a91cd71cb1bd8e986d.jpg', 'datcoming222', 11111, 1, 11111, 22),
(36, 1, 38, ' 156652_1505049543.jpeg', 'zổ', 22222, 1, 22222, 23),
(37, 1, 37, ' 451ac5df751f350453af42a91cd71cb1bd8e986d.jpg', 'datcoming222', 11111, 1, 11111, 23),
(38, 1, 38, ' 156652_1505049543.jpeg', 'zổ', 22222, 1, 22222, 24),
(39, 1, 37, ' 451ac5df751f350453af42a91cd71cb1bd8e986d.jpg', 'datcoming222', 11111, 1, 11111, 24),
(40, 1, 38, ' 156652_1505049543.jpeg', 'zổ', 22222, 1, 22222, 25),
(41, 1, 37, ' 451ac5df751f350453af42a91cd71cb1bd8e986d.jpg', 'datcoming222', 11111, 1, 11111, 25),
(42, 1, 38, ' 156652_1505049543.jpeg', 'zổ', 22222, 1, 22222, 26),
(43, 1, 37, ' 451ac5df751f350453af42a91cd71cb1bd8e986d.jpg', 'datcoming222', 11111, 1, 11111, 26),
(44, 1, 38, ' 156652_1505049543.jpeg', 'zổ', 22222, 1, 22222, 27),
(45, 1, 37, ' 451ac5df751f350453af42a91cd71cb1bd8e986d.jpg', 'datcoming222', 11111, 1, 11111, 27),
(46, 1, 38, ' 156652_1505049543.jpeg', 'zổ', 22222, 1, 22222, 28),
(47, 1, 37, ' 451ac5df751f350453af42a91cd71cb1bd8e986d.jpg', 'datcoming222', 11111, 1, 11111, 28),
(48, 1, 38, ' 156652_1505049543.jpeg', 'zổ', 22222, 1, 22222, 29),
(49, 1, 37, ' 451ac5df751f350453af42a91cd71cb1bd8e986d.jpg', 'datcoming222', 11111, 1, 11111, 29),
(50, 1, 38, ' 156652_1505049543.jpeg', 'zổ', 22222, 1, 22222, 30),
(51, 1, 37, ' 451ac5df751f350453af42a91cd71cb1bd8e986d.jpg', 'datcoming222', 11111, 1, 11111, 30),
(52, 1, 36, ' 06c4e3e078d841ca32673440814e9df4.jpg', 'peace', 123123, 1, 123123, 31),
(53, 1, 37, ' 451ac5df751f350453af42a91cd71cb1bd8e986d.jpg', 'datcoming222', 11111, 1, 11111, 31),
(54, 1, 36, ' 06c4e3e078d841ca32673440814e9df4.jpg', 'peace', 123123, 1, 123123, 32),
(55, 1, 37, ' 451ac5df751f350453af42a91cd71cb1bd8e986d.jpg', 'datcoming222', 11111, 1, 11111, 32),
(56, 1, 36, ' 06c4e3e078d841ca32673440814e9df4.jpg', 'peace', 123123, 1, 123123, 33),
(57, 1, 37, ' 451ac5df751f350453af42a91cd71cb1bd8e986d.jpg', 'datcoming222', 11111, 1, 11111, 33),
(58, 1, 36, ' 06c4e3e078d841ca32673440814e9df4.jpg', 'peace', 123123, 1, 123123, 34),
(59, 1, 37, ' 451ac5df751f350453af42a91cd71cb1bd8e986d.jpg', 'datcoming222', 11111, 1, 11111, 34),
(60, 1, 36, ' 06c4e3e078d841ca32673440814e9df4.jpg', 'peace', 123123, 1, 123123, 35),
(61, 1, 37, ' 451ac5df751f350453af42a91cd71cb1bd8e986d.jpg', 'datcoming222', 11111, 1, 11111, 35),
(65, 2, 36, ' 06c4e3e078d841ca32673440814e9df4.jpg', 'peace', 123123, 1, 123123, 39),
(66, 2, 36, ' 06c4e3e078d841ca32673440814e9df4.jpg', 'peace', 123123, 1, 123123, 40),
(67, 2, 36, ' 06c4e3e078d841ca32673440814e9df4.jpg', 'peace', 123123, 1, 123123, 41),
(68, 2, 36, ' 06c4e3e078d841ca32673440814e9df4.jpg', 'peace', 123123, 1, 123123, 42),
(69, 2, 36, ' 06c4e3e078d841ca32673440814e9df4.jpg', 'peace', 123123, 1, 123123, 43),
(70, 2, 36, ' 06c4e3e078d841ca32673440814e9df4.jpg', 'peace', 123123, 1, 123123, 44),
(71, 2, 36, ' 06c4e3e078d841ca32673440814e9df4.jpg', 'peace', 123123, 1, 123123, 45),
(72, 2, 36, ' 06c4e3e078d841ca32673440814e9df4.jpg', 'peace', 123123, 1, 123123, 46),
(73, 2, 36, ' 06c4e3e078d841ca32673440814e9df4.jpg', 'peace', 123123, 1, 123123, 47),
(74, 2, 36, ' 06c4e3e078d841ca32673440814e9df4.jpg', 'peace', 123123, 1, 123123, 48),
(75, 2, 37, ' 451ac5df751f350453af42a91cd71cb1bd8e986d.jpg', 'datcoming222', 11111, 1, 11111, 49),
(76, 1, 37, ' 451ac5df751f350453af42a91cd71cb1bd8e986d.jpg', 'datcoming222', 11111, 1, 11111, 50),
(77, 1, 38, ' 156652_1505049543.jpeg', 'zổ', 22222, 1, 22222, 51),
(78, 1, 37, ' 451ac5df751f350453af42a91cd71cb1bd8e986d.jpg', 'datcoming222', 11111, 1, 11111, 52),
(79, 1, 38, ' 156652_1505049543.jpeg', 'zổ', 22222, 1, 22222, 52),
(80, 2, 43, ' r1433_Starlight_PDP_Image_Position-1B_Avail__en-IN.webp', 'Iphone 13 pro max 250GB', 1400, 1, 1400, 53);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `tendanhmuc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendanhmuc`) VALUES
(28, 'Điện thoại bấm phím'),
(29, 'Điện thoại cổ điển '),
(31, 'Điện thoại androi'),
(32, 'Điện thoại Iphone'),
(33, 'Điện thoại vertu'),
(34, 'Điện thoại gập');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ngaysinh` date NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `name`, `ngaysinh`, `phone`, `address`, `status`) VALUES
(1, 'Nguyễn Văn Đạt', '2003-01-01', '', 'hà nội', NULL),
(2, 'Nguyễn Văn Đạt', '2003-01-01', '0962096125', 'hà nội', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `mota` varchar(255) NOT NULL,
  `view` int(50) NOT NULL,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `view`, `iddm`) VALUES
(36, 'Nokia C1 platinum', 50, 'nokia-c1-01-300-nowatermark-300x300.jpg', 'Có kết nối 3G thả sức sử dụng \r\nứng dụng kết nối internet đỉnh cao', 0, 28),
(37, 'Nokia 6300', 70, '1_2_.png', 'Kết nối 4g mạnh mẽ \r\n2 sim kết nối \r\nNgoại hình đẹp đẽ', 0, 29),
(38, 'Nokia 1280', 240, 'dien-thoai-di-dong-Nokia-1280-dienmay.com-l.jpg', 'Pin dùng lâu \r\nKhông lo rơi vỡ \r\nKhả năng đàm thoại tốt', 0, 29),
(39, 'Samsung A50 4g ', 400, 'uploaded_f4fa9eb89dc2eee8a40b66a9df9d4320.jpg', 'Kết nối 4g siêu mạnh\r\nMàn hìn cảm ứng\r\nCamera selfy cực đẹp', 0, 31),
(40, 'Samsung Galaxy Z flip  ', 1200, '638005646180227903_samsung-galaxy-z-flip3-5g-tim-dd-tragop.jpg', 'Thời thượng với khả năng đóng mở linh hoạt\r\nKháng nước đỉnh cao', 0, 34),
(41, 'Samsung Galaxy Z fold 4  ', 1400, '1536-1024_9__2_4.jpg', 'Điện thoại gập đỉnh cao \r\nmới mẻ để trải nghiệm \r\nbảo hành lên đên 2 năm \r\ntrải nghiệm siêu mới\r\n', 0, 34),
(42, 'Vertu Signature S Vàng Khối', 5000, 'Vertu-signature-s-vang-khoi.jpg', 'Vertu Signature s rất được giới doanh nhân Việt Nam đặc biệt yêu thích. Bắt nguồn cảm hứng từ chiếc đồng hồ Grand Complication, Signature là một tác phẩm của tay nghề thủ công khéo léo giàu kinh nghiệm. Mang phong cách thời trang từ những chất liệu quý hi', 0, 33),
(43, 'Iphone 13 pro max 250GB', 1400, 'r1433_Starlight_PDP_Image_Position-1B_Avail__en-IN.webp', 'THÔNG SỐ KỸ THUẬT\r\n\r\nMàn hình\r\nCông nghệ màn hình: OLED\r\nĐộ phân giải: 1170 x 2532 Pixels\r\nMàn hình rộng:  6.1 inch\r\nMặt kính cảm ứng: Kính cường lực Oleophobic (ion cường lực)\r\n\r\nCamera sau\r\nTính năng:\r\nChạm lấy nét\r\nHDR\r\nNhận diện khuôn mặt\r\nQuay chậm (', 0, 32),
(44, 'Xiaomi 12', 700, 'image-removebg-preview-5.png', 'Công nghệ màn hình:: AMOLED, 1 tỷ màu, HDR10+, 120Hz, tỷ lệ 20:9, 6.28 inches, Full HD+ (1080 x 2400 pixels), Corning Gorilla Glass Victus, Cảm biến vân tay trong màn hình, Cảm ứng điện dung đa điểm\r\nĐộ phân giải:: 1080 x 2400 pixels\r\nMàn hình rộng:: 6.28', 0, 31),
(45, 'Xiaomi Redmi not 10 Pro', 799, 'redmi-note-10-pro_1615005038.jpg', 'hẻ SIM:	2 nano sim, 2 sóng online\r\nMàn hình:	\r\n6.67 inches, AMOLED, 1080 x 2400 pixels\r\n\r\nĐộ phân giải:	1080 x 2400 pixel, tỷ lệ 20: 9\r\nCPU:	\r\nSnapdragon 732G (8 nm)\r\n\r\nRAM:	6/8GB\r\nBộ nhớ/ Thẻ nhớ:	64/128GB\r\nCamera sau:	\r\n108MP - 8MP - 5MP - 2MP\r\n\r\nCamera', 0, 31);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status`
--

CREATE TABLE `status` (
  `idstt` int(11) NOT NULL,
  `name_stt` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `status`
--

INSERT INTO `status` (`idstt`, `name_stt`) VALUES
(1, 'Đã kích hoạt'),
(2, 'Chưa kích hoạt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `rol` tinyint(4) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `diachi`, `phone`, `rol`, `name`) VALUES
(1, 'gicumgdc', '0000', 'vandatpk01@gmail.com', 'hà nội', '0962096125', 0, 'Nguyễn Văn Đạt'),
(2, 'vandatpk', '1231230', 'ndat165@gmail.com', 'hà nội', '0962096125', 1, NULL),
(9, 'vandatpk01', '01012003', 'datnvph20590@fpt.edu.vn', NULL, NULL, 0, NULL),
(10, 'gicumgdc', '01012003', 'ndat165@gmail.com', 'hà nội', '0787171897', 0, 'Nguyễn Văn Đạt');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `idbill` (`idbill`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status` (`status`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddm` (`iddm`);

--
-- Chỉ mục cho bảng `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`idstt`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `status`
--
ALTER TABLE `status`
  MODIFY `idstt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`idbill`) REFERENCES `bill` (`id`);

--
-- Các ràng buộc cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `khachhang_ibfk_1` FOREIGN KEY (`status`) REFERENCES `status` (`idstt`),
  ADD CONSTRAINT `khachhang_ibfk_2` FOREIGN KEY (`id`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
