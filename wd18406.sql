-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 19, 2024 lúc 05:43 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `wd18406`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bai_viet`
--

CREATE TABLE `bai_viet` (
  `id_bai_viet` int(11) NOT NULL,
  `tieu_de` varchar(255) NOT NULL,
  `noi_dung` text NOT NULL,
  `thumbnail` text NOT NULL,
  `anh_bai_viet` varchar(500) NOT NULL,
  `ngay_dang` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bai_viet`
--

INSERT INTO `bai_viet` (`id_bai_viet`, `tieu_de`, `noi_dung`, `thumbnail`, `anh_bai_viet`, `ngay_dang`) VALUES
(13, 'Louis Vuitton x Yayoi Kusama: Nghệ thuật sáng tạo vô tận', 'Louis Vuitton và Yayoi Kusama, hai biểu tượng về nghệ thuật và thời trang, đã hợp tác để tạo ra một sự kết hợp độc đáo, đầy màu sắc và sáng tạo. Bộ sưu tập Louis Vuitton x Yayoi Kusama không chỉ là sự kết hợp giữa thế giới của các biểu tượng này, mà còn là một cuộc hành trình đầy cảm hứng, vô tận và không ngừng nghỉ.\r\n\r\nNhững mẫu họa tiết đậm chất của Yayoi Kusama hòa quyện cùng với sự sang trọng, tinh tế và phong cách đặc trưng của Louis Vuitton, tạo nên một bộ sưu tập thời trang không giống ai. Điều đặc biệt là, mỗi sản phẩm trong bộ sưu tập không chỉ là một món đồ thời trang, mà còn là một tác phẩm nghệ thuật di động, mang trong mình tinh thần sáng tạo và phá cách của cả hai nghệ sĩ.\r\n\r\nTúi xách, ví, giày dép và các phụ kiện khác trong bộ sưu tập Louis Vuitton x Yayoi Kusama không chỉ là những vật dụng hàng ngày, mà còn là những tác phẩm nghệ thuật, là biểu tượng của sự kết hợp giữa thế giới thời trang và nghệ thuật. Mỗi chi tiết trên sản phẩm đều phản ánh tinh thần sáng tạo, sự độc đáo và cái nhìn riêng biệt của Yayoi Kusama, cùng với chất lượng và uy tín của Louis Vuitton.\r\n\r\nCuối cùng, Louis Vuitton x Yayoi Kusama không chỉ là một bộ sưu tập thời trang, mà còn là một trải nghiệm sáng tạo, một cách để mọi người có thể trải nghiệm nghệ thuật một cách trực tiếp, trong cuộc sống hàng ngày của họ. Đó là một thế giới mà mọi người có thể tận hưởng sự phong phú, sáng tạo và vô tận của nghệ thuật và thời trang.', 'uploads/blog/1711895217-news-img-1.jpg', '', '2024-03-13'),
(14, 'Tyler, The Creator: Kết Hợp Đầy Sáng Tạo với Louis Vuitton', '\r\nTrong thế giới thời trang, việc kết hợp giữa các nghệ sĩ âm nhạc và các nhãn hiệu danh tiếng không còn là điều quá xa lạ. Tuy nhiên, mỗi khi một nghệ sĩ nổi tiếng bước chân vào lĩnh vực này, chúng ta lại chứng kiến sự kỳ diệu của sự kết hợp giữa âm nhạc và thời trang. Và một trong những tên tuổi đang làm mưa làm gió trong cả hai lĩnh vực đó chính là Tyler, The Creator.\r\n\r\nVới phong cách nghệ sĩ cá tính, sáng tạo và không ngừng đổi mới, Tyler đã trở thành biểu tượng của sự tự do biểu đạt và sự đa dạng trong ngành âm nhạc. Nhưng không chỉ dừng lại ở đó, Tyler còn vươn ra ngoài và chinh phục cả thế giới thời trang với sự đam mê và tài năng thiết kế của mình.\r\n\r\nVà khi Tyler, The Creator hợp tác cùng với Louis Vuitton - một trong những thương hiệu thời trang cao cấp nhất thế giới, sự kỳ diệu bắt đầu được tạo nên. Hãy cùng nhìn vào cảm nhận của chúng ta về một thế giới thời trang mới, nơi mà sự sáng tạo của âm nhạc giao thoa với sự sang trọng của thời trang, và Tyler, The Creator đang dẫn đầu cuộc chơi.', 'uploads/blog/1711896206-news-img-2.jpg', '', '2024-04-12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id_binh_luan` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `id_nguoi_dung` int(11) NOT NULL,
  `noi_dung` text NOT NULL,
  `ngay_binh_luan` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`id_binh_luan`, `id_sp`, `id_nguoi_dung`, `noi_dung`, `ngay_binh_luan`) VALUES
(1, 44, 2, 'Sản phẩm tốt', '2024-03-29'),
(2, 44, 2, 'Đẹp', '2024-03-29'),
(3, 45, 2, 'Chất lượng cao', '2024-03-29'),
(4, 56, 2, 'Sản phẩm tốt', '2024-04-07'),
(5, 56, 2, 'Sản phẩm chất lượng cao', '2024-04-07'),
(6, 56, 2, 'Chi tiết tỉ mỉ', '2024-04-07'),
(7, 56, 2, 'abc', '2024-04-07'),
(8, 56, 2, 'f', '2024-04-07'),
(9, 56, 9, 'Đẹp!!', '2024-04-07'),
(10, 55, 2, 'Sản phẩm tuyệt vời', '2024-04-13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_don_hang`
--

CREATE TABLE `chi_tiet_don_hang` (
  `id_chi_tiet_don_hang` int(11) NOT NULL,
  `id_don_hang` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `don_gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_don_hang`
--

INSERT INTO `chi_tiet_don_hang` (`id_chi_tiet_don_hang`, `id_don_hang`, `id_sp`, `so_luong`, `don_gia`) VALUES
(1, 4, 44, 1, 35000000),
(98, 60, 55, 1, 50000000),
(138, 80, 55, 1, 50000000),
(139, 80, 54, 1, 38500000),
(140, 81, 55, 1, 50000000),
(141, 81, 54, 1, 38500000),
(142, 82, 55, 1, 50000000),
(143, 82, 54, 1, 38500000),
(144, 83, 55, 1, 50000000),
(145, 83, 54, 1, 38500000),
(146, 84, 55, 1, 50000000),
(147, 84, 54, 1, 38500000),
(148, 85, 55, 1, 50000000),
(149, 85, 54, 1, 38500000),
(150, 86, 55, 1, 50000000),
(151, 86, 54, 1, 38500000),
(152, 87, 55, 1, 50000000),
(153, 87, 54, 1, 38500000),
(154, 88, 55, 1, 50000000),
(155, 88, 54, 1, 38500000),
(160, 91, 55, 1, 50000000),
(161, 91, 54, 1, 38500000),
(162, 92, 55, 1, 50000000),
(164, 93, 55, 1, 50000000),
(165, 94, 57, 1, 48000000),
(166, 94, 55, 1, 50000000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_gio_hang`
--

CREATE TABLE `chi_tiet_gio_hang` (
  `id_chi_tiet_gio_hang` int(11) NOT NULL,
  `id_gio_hang` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_gio_hang`
--

INSERT INTO `chi_tiet_gio_hang` (`id_chi_tiet_gio_hang`, `id_gio_hang`, `id_sp`, `so_luong`) VALUES
(1, 1, 44, 1),
(2, 3, 45, 1),
(3, 4, 44, 1),
(4, 5, 44, 1),
(5, 6, 47, 1),
(6, 7, 46, 1),
(7, 10, 47, 1),
(8, 11, 45, 1),
(9, 16, 46, 1),
(10, 17, 45, 1),
(11, 18, 47, 1),
(12, 20, 45, 1),
(14, 22, 46, 1),
(15, 23, 45, 1),
(16, 25, 46, 1),
(17, 27, 47, 1),
(18, 28, 47, 1),
(19, 29, 45, 1),
(20, 30, 45, 1),
(21, 31, 46, 1),
(22, 32, 45, 1),
(23, 33, 47, 1),
(24, 34, 45, 1),
(25, 35, 47, 1),
(32, 36, 44, 1),
(33, 37, 44, 1),
(34, 38, 45, 1),
(35, 39, 47, 1),
(36, 40, 47, 1),
(37, 41, 47, 1),
(38, 42, 44, 1),
(39, 43, 57, 1),
(40, 44, 56, 1),
(41, 45, 55, 1),
(42, 46, 54, 1),
(43, 47, 55, 1),
(44, 48, 56, 1),
(45, 50, 55, 1),
(46, 51, 55, 1),
(47, 52, 56, 1),
(50, 56, 56, 1),
(51, 57, 55, 1),
(52, 62, 55, 1234),
(53, 63, 54, 1),
(54, 64, 56, 1),
(55, 65, 57, 1),
(56, 66, 54, 1),
(57, 67, 56, 1),
(59, 69, 57, 2),
(61, 72, 55, 1),
(62, 73, 52, 1),
(63, 74, 45, 1),
(64, 75, 56, 0),
(65, 76, 55, 1),
(66, 77, 54, 1),
(67, 78, 57, 1),
(68, 79, 56, 1),
(69, 80, 57, 1),
(70, 81, 50, 1),
(71, 82, 56, 1),
(72, 83, 57, 1),
(73, 85, 55, 1),
(74, 86, 57, 1),
(75, 87, 54, 1),
(76, 91, 53, 1),
(77, 92, 50, 1),
(78, 94, 46, 1),
(79, 95, 56, 1),
(80, 96, 55, 1),
(81, 97, 54, 1),
(82, 98, 57, 1),
(83, 100, 56, 1),
(84, 101, 55, 1),
(85, 102, 54, 1),
(86, 103, 55, 1),
(87, 104, 57, 1),
(88, 105, 55, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc`
--

CREATE TABLE `danh_muc` (
  `id_danh_muc` int(11) NOT NULL,
  `ten_dm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_muc`
--

INSERT INTO `danh_muc` (`id_danh_muc`, `ten_dm`) VALUES
(1, 'Dành cho Nam'),
(2, 'Dành cho Nữ'),
(7, 'LV Ski'),
(8, 'Denim'),
(9, 'Bộ sưu tập Xuân-Hè 2024');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_hang`
--

CREATE TABLE `don_hang` (
  `id_don_hang` int(11) NOT NULL,
  `id_nguoi_dung` int(11) NOT NULL,
  `ten_nguoi_nhan` varchar(255) NOT NULL,
  `thanh_tien` int(11) NOT NULL,
  `dia_chi_nguoi_nhan` varchar(255) NOT NULL,
  `sdt_nguoi_nhan` varchar(255) NOT NULL,
  `email_nguoi_nhan` varchar(255) NOT NULL,
  `tong_tien` int(11) NOT NULL,
  `ngay_dat_hang` date NOT NULL DEFAULT current_timestamp(),
  `trang_thai_giao_hang` int(11) NOT NULL,
  `trang_thai_thanh_toan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `don_hang`
--

INSERT INTO `don_hang` (`id_don_hang`, `id_nguoi_dung`, `ten_nguoi_nhan`, `thanh_tien`, `dia_chi_nguoi_nhan`, `sdt_nguoi_nhan`, `email_nguoi_nhan`, `tong_tien`, `ngay_dat_hang`, `trang_thai_giao_hang`, `trang_thai_thanh_toan`) VALUES
(15, 2, 'Nguyễn Văn A', 0, 'Hanoi, Vietnam', '0968781004', 'vu@gmail.com', 36500000, '2024-04-16', 2, 0),
(20, 9, 'Phạm Đào Vũ', 0, 'Hanoi, Vietnam', '0968781003', 'vupdph34756@fpt.edu.vn', 93000000, '2024-04-17', 0, 0),
(23, 20, 'Vũ', 0, 'Nam Tu Liem, Hanoi, Vietnam', '09687810032', 'phmvu2912@gmail.com', 48000000, '2024-04-18', 3, 0),
(24, 20, 'phmvu', 0, 'Hanoi, Vietnam', '0968781003', 'admin@gmail.com', 48000000, '2024-04-18', 1, 0),
(25, 20, 'Phạm Đào Vũ', 0, 'Nam Tu Liem, Hanoi, Vietnam', '0968781003', 'vu123@gmail.com', 141500000, '2024-04-18', 3, 0),
(75, 2, 'Phạm Đào Vũ', 0, 'Hanoi, Vietnam', '0968781003', 'phmvu2912@gmail.com', 88500000, '2024-04-19', 0, 1),
(76, 2, 'Phạm Đào Vũ', 0, 'Hanoi, Vietnam', '0968781003', 'phmvu2912@gmail.com', 88500000, '2024-04-19', 0, 1),
(77, 2, 'Phạm Đào Vũ', 0, 'Hanoi, Vietnam', '0968781003', 'phmvu2912@gmail.com', 88500000, '2024-04-19', 0, 1),
(78, 2, 'Phạm Đào Vũ', 0, 'Hanoi, Vietnam', '0968781003', 'phmvu2912@gmail.com', 88500000, '2024-04-19', 0, 1),
(79, 2, 'Phạm Đào Vũ', 0, 'Hanoi, Vietnam', '0968781003', 'phmvu2912@gmail.com', 88500000, '2024-04-19', 0, 1),
(80, 2, 'Phạm Đào Vũ', 0, 'Hanoi, Vietnam', '0968781003', 'phmvu2912@gmail.com', 88500000, '2024-04-19', 0, 1),
(81, 2, 'Phạm Đào Vũ', 0, 'Hanoi, Vietnam', '0968781003', 'phmvu2912@gmail.com', 88500000, '2024-04-19', 0, 1),
(92, 2, 'Phạmtoản ', 0, 'Hanoi, Vietnam', '09687810032', 'phmvu2912@gmail.com', 88500000, '2024-04-19', 0, 1),
(93, 2, 'Phạm Đào Vũ abc', 0, 'Hanoi, Vietnam', '0968781003', 'vupdph34756@fpt.edu.vn', 50000000, '2024-04-19', 0, 1),
(94, 21, 'Nguyễn Xuân Thủy', 0, 'Nam Tu Liem, Hanoi, Vietnam', '0968781003', 'phmvu21233@gmail.com', 98000000, '2024-04-19', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gio_hang`
--

CREATE TABLE `gio_hang` (
  `id_gio_hang` int(11) NOT NULL,
  `id_nguoi_dung` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `gio_hang`
--

INSERT INTO `gio_hang` (`id_gio_hang`, `id_nguoi_dung`) VALUES
(40, 9),
(41, 9),
(68, 9),
(69, 9),
(70, 9),
(71, 9),
(74, 9),
(75, 9),
(76, 9),
(77, 9),
(78, 9),
(79, 9),
(80, 20),
(81, 20),
(82, 20),
(83, 20),
(84, 20),
(85, 20),
(86, 20),
(87, 20),
(88, 20),
(89, 20),
(90, 20),
(91, 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyen_mai`
--

CREATE TABLE `khuyen_mai` (
  `id_khuyen_mai` int(11) NOT NULL,
  `ma_khuyen_mai` varchar(10) NOT NULL,
  `gia_tri` decimal(10,2) NOT NULL COMMENT 'giá trị % của voucher',
  `ngay_bat_dau` date NOT NULL,
  `ngay_het_han` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyen_mai`
--

INSERT INTO `khuyen_mai` (`id_khuyen_mai`, `ma_khuyen_mai`, `gia_tri`, `ngay_bat_dau`, `ngay_het_han`) VALUES
(1, 'SCAKSDAAAU', 10.00, '2024-03-28', '2024-03-31'),
(2, 'XCBJJKUUUU', 20.00, '2024-03-20', '2024-03-01'),
(3, 'WELCOME', 28.00, '2024-03-28', '2024-03-31'),
(4, 'WD18406', 28.00, '2024-03-28', '2024-04-07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoi_dung`
--

CREATE TABLE `nguoi_dung` (
  `id_nguoi_dung` int(11) NOT NULL,
  `ten_dang_nhap` varchar(50) NOT NULL,
  `ten_nguoi_dung` varchar(50) NOT NULL,
  `mat_khau` varchar(10) NOT NULL,
  `dia_chi` varchar(100) NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `avatar` text NOT NULL,
  `vai_tro` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoi_dung`
--

INSERT INTO `nguoi_dung` (`id_nguoi_dung`, `ten_dang_nhap`, `ten_nguoi_dung`, `mat_khau`, `dia_chi`, `sdt`, `email`, `avatar`, `vai_tro`) VALUES
(1, 'admin', 'Admin ', '12345', 'Hanoi, Vietnam', '0921312454', 'admin@gmail.com', '', 0),
(2, 'phmvu2912', 'Phạm Đào Vũ', '12345', 'Vietnam', '0947236412', 'phmvu21233@gmail.com', 'uploads/avatar/1712918137-avt.jpg', 1),
(9, 'phmvu2912', 'Phạm Đào Vũ', '12345', 'Nam Tu  Liem, Hanoi, Vietnam', '0968781003', 'vu@gmail.com', 'uploads/avatar/1712889371-342046784_9162142520493753_5895074771708517667_n.jpg', 1),
(20, '', '', '12345', '', '', 'client123@gmail.com', '', 1),
(21, '', '', '12345', '', '', 'flacko@gmail.com', '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id_sp` int(11) NOT NULL,
  `ten_sp` varchar(50) NOT NULL,
  `thumbnail` text DEFAULT NULL,
  `anh_sp` text DEFAULT NULL,
  `gia_sp` float NOT NULL,
  `mo_ta` text NOT NULL,
  `id_danh_muc` int(11) NOT NULL,
  `luu_tru` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'khi xóa danh mục thì sản phẩm sẽ không bị mất'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id_sp`, `ten_sp`, `thumbnail`, `anh_sp`, `gia_sp`, `mo_ta`, `id_danh_muc`, `luu_tru`) VALUES
(44, 'Quần shorts', 'uploads/products/1711674982-thumbnail-2.png', 'uploads/products/1711674982-img-2.1.png,uploads/products/1711674982-img-2.2.png', 35000000, 'BST 2024', 1, '2024-03-31 14:51:06'),
(45, 'T-Shirt Short Sleeved', 'uploads/products/1711782824-thumbnail-1.png', 'uploads/products/1711782824-img-1.1.png,uploads/products/1711782824-img-1.2.png,uploads/products/1711782824-img-1.3.png,uploads/products/1711782824-img-1.4.png', 40000000, 'BST mùa Xuân 2024', 1, '2024-03-31 15:06:13'),
(46, 'Áo len', 'uploads/products/1711725897-thumbnail-3.png', 'uploads/products/1711725897-img-3.1.png,uploads/products/1711725897-img-3.2.png,uploads/products/1711725897-img-3.3.png,uploads/products/1711725897-img-3.4.png', 32000000, 'BST mới nhất 2024', 1, '2024-03-31 15:06:31'),
(47, 'Áo Khoác Họa Tiết Damoflage', 'uploads/products/1711726147-thumbnail-4.png', 'uploads/products/1711726147-img-4.1.png,uploads/products/1711726147-img-4.2.png,uploads/products/1711726147-img-4.3.png', 168000000, 'Áo Khoác Họa Tiết Damoflage', 1, '2024-03-31 15:06:31'),
(50, 'Technical Ski Pants', 'uploads/products/1712416474-thumbnail-5.png', 'uploads/products/1712416474-img-5.1.png,uploads/products/1712416474-img-5.2.png,uploads/products/1712416474-img-5.3.png', 77000000, 'Quần dài chuyên dụng sở hữu vẻ ngoài thời thượng với mô típ LV Ice, điểm xuyết bông hoa Monogram có hiệu ứng bị nứt ở mặt sau và logo LV ở ống quần bên phải. Với thiết kế mang đến sự thoải mái và tăng hiệu suất vận động, quần có thể phối cùng áo khoác đồng điệu để tạo nên diện mạo nổi bật khi chinh phục những sườn núi tuyết.', 7, '2024-04-06 15:14:34'),
(51, 'Technical Ski Jacket', 'uploads/products/1712416673-thumbnail-6.png', 'uploads/products/1712416673-img-6.1.png,uploads/products/1712416673-img-6.2.png,uploads/products/1712416673-img-6.3.png,uploads/products/1712416673-img-6.4.png', 50000000, 'Thuộc bộ sưu tập Ski Capsule, áo khoác bằng vải lông cừu là thiết kế ấm áp và thời thượng cho bộ trang phục mùa Đông. Áo nổi bật với mô típ LV Ice và logo LV mang hiệu ứng nứt vỡ ở mặt trước. Phần cầu vai màu đen trơn giúp áo trông năng động hơn. Có thể phối áo với áo khoác trượt tuyết để tăng cường khả năng giữ ấm khi trời lạnh.', 7, '2024-04-06 15:17:53'),
(52, 'Jersey jogging pants', 'uploads/products/1712417099-thumbnail-7.png', 'uploads/products/1712417099-img-7.1.png,uploads/products/1712417099-img-7.2.png,uploads/products/1712417099-img-7.3.png,uploads/products/1712417099-img-7.4.png', 36500000, 'Thuộc bộ sưu tập Ski Capsule, mẫu quần dài màu đen tối giản này được may từ vải Jersey hai mặt dệt từ sợi Cotton kỹ thuật. Quần có thể phối cùng áo khoác đồng điệu để tạo nên bộ trang phục thoải mái, thích hợp để mặc sau một ngày dài trượt tuyết. Thiết kế nổi bật với những điểm nhấn màu trắng tương phản, bao gồm logo LV Fir Tree trên ống quần bên trái và mô típ LV Carving trên ống quần bên phải.', 7, '2024-04-06 15:24:59'),
(53, 'Louis Vuitton Checked Denim Overshirt', 'uploads/products/1712418271-thumbnail-9.png', 'uploads/products/1712418271-img-9.1.png,uploads/products/1712418271-img-9.2.png,uploads/products/1712418271-img-9.3.png,uploads/products/1712418271-img-9.4.png', 64500000, 'Mẫu áo sơ mi dáng rộng gây ấn tượng với họa tiết caro điểm xuyết dòng chữ Louis Vuitton tinh tế. Áo có thể phối cùng quần ngắn đồng bộ để tạo nên bộ trang phục thoải mái.', 8, '2024-04-06 15:44:31'),
(54, 'Louis Vuitton Checked Denim Shorts', 'uploads/products/1712420723-thumbnail-10.png', 'uploads/products/1712420723-img-10.1.png,uploads/products/1712420723-img-10.2.png,uploads/products/1712420723-img-10.3.png,uploads/products/1712420723-img-10.4.png', 38500000, 'Mẫu quần Jean ngắn được làm mới với họa tiết kẻ Caro đơn sắc cùng dòng chữ Louis Vuitton được nhấn nhá tinh tế. Sản phẩm có thể kết hợp cùng áo sơ mi dáng rộng đồng điệu để tạo nên bộ trang phục thoải mái và năng động.', 8, '2024-04-06 16:25:23'),
(55, 'Jersey hoodie jacket', 'uploads/products/1712420888-thumbnail-8.png', 'uploads/products/1712420888-img-7.3.png,uploads/products/1712420888-img-7.4.png,uploads/products/1712420888-img-8.1.png,uploads/products/1712420888-img-8.2.png', 50000000, 'Áo khoác màu đen thuộc bộ sưu tập Ski Capsule này là lựa chọn lý tưởng để mặc sau những buổi trượt tuyết. Được may từ vải Cotton Jersey kỹ thuật, áo trông ấn tượng hơn nhờ logo LV Fir Tree và LV Carving ở mặt trước, nhấn nhá chữ Louis Vuitton ở mặt sau. Sản phẩm có thể kết hợp với quần dài dáng thể thao đồng điệu để tạo nên bộ trang phục thoải mái.', 7, '2024-04-06 16:28:08'),
(56, 'Embroidered Signature Cotton T-Shirt', 'uploads/products/1712422157-thumbnail-11.png', 'uploads/products/1712422157-img-11.1.png,uploads/products/1712422157-img-11.2.png,uploads/products/1712422157-img-11.3.png,uploads/products/1712422157-img-11.4.png', 45000000, 'Thuộc bộ sưu tập (BST) Xuân-Hè 2024 do Giám đốc sáng tạo Pharrell Williams thiết kế, mẫu áo thun màu đen được may từ vải Cotton thoáng mát. Toát lên vẻ đẹp lịch lãm đúng tinh thần của BST lần này, sản phẩm gây ấn tượng với dòng chữ \"Marque L. Vuitton déposée\" được đính ngọc trai trên ngực áo. Nhãn tên hiệu ứng mặt trái và được đính ngọc trai ở phía sau hoàn thiện tổng thể thiết kế.', 9, '2024-04-06 16:49:17'),
(57, 'Embroidered Cotton Sweatshirt', 'uploads/products/1712422527-thumbnail-12.png', 'uploads/products/1712422527-img-12.1.png,uploads/products/1712422527-img-12.2.png,uploads/products/1712422527-img-12.3.png,uploads/products/1712422527-img-12.4.png', 48000000, 'Mẫu áo dài tay được may từ len Merino cao cấp là gợi ý đáng tham khảo để mặc trong những ngày giao mùa. Hình thêu mô típ LV Blason đặc trưng của bộ sưu tập Xuân-Hè 2024 mang đến cho áo điểm nhấn nổi bật. Sở hữu vẻ đẹp tinh giản và thanh lịch, sản phẩm kết hợp hài hòa với nhiều kiểu trang phục từ thoải mái đến trang trọng.', 9, '2024-04-06 16:55:27');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  ADD PRIMARY KEY (`id_bai_viet`);

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id_binh_luan`);

--
-- Chỉ mục cho bảng `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  ADD PRIMARY KEY (`id_chi_tiet_don_hang`);

--
-- Chỉ mục cho bảng `chi_tiet_gio_hang`
--
ALTER TABLE `chi_tiet_gio_hang`
  ADD PRIMARY KEY (`id_chi_tiet_gio_hang`);

--
-- Chỉ mục cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`id_danh_muc`);

--
-- Chỉ mục cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id_don_hang`);

--
-- Chỉ mục cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD PRIMARY KEY (`id_gio_hang`);

--
-- Chỉ mục cho bảng `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  ADD PRIMARY KEY (`id_khuyen_mai`);

--
-- Chỉ mục cho bảng `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  ADD PRIMARY KEY (`id_nguoi_dung`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id_sp`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  MODIFY `id_bai_viet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id_binh_luan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  MODIFY `id_chi_tiet_don_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT cho bảng `chi_tiet_gio_hang`
--
ALTER TABLE `chi_tiet_gio_hang`
  MODIFY `id_chi_tiet_gio_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `id_danh_muc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id_don_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  MODIFY `id_gio_hang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT cho bảng `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  MODIFY `id_khuyen_mai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  MODIFY `id_nguoi_dung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
