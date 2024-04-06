-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 28, 2024 lúc 09:33 AM
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
  `anh_bai_viet` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bai_viet`
--

INSERT INTO `bai_viet` (`id_bai_viet`, `tieu_de`, `noi_dung`, `thumbnail`, `anh_bai_viet`) VALUES
(2, 'abc', 'adsffas', '', ''),
(4, 'Sự Kết Hợp Đặc Biệt Giữa Louis Vuitton và Yayoi Kusama: Khi Thời Trang Gặp Nghệ Thuật', 'Trong thế giới thời trang cao cấp, việc hợp tác giữa các thương hiệu danh tiếng và các nghệ sĩ nổi tiếng là điều không còn quá lạ lẫm. Tuy nhiên, mỗi khi một thương hiệu hàng đầu như Louis Vuitton (LV) kết hợp với một nghệ sĩ tài năng như Yayoi Kusama (YK), thì sự kỳ diệu thực sự được tạo ra.\r\n\r\nYayoi Kusama, một nghệ sĩ đa tài người Nhật Bản, đã ghi dấu ấn riêng trong ngành nghệ thuật với phong cách họa sĩ điêu khắc sáng tạo và phong cách ấn tượng. Sự kết hợp giữa tài năng nghệ thuật của YK và sự tinh tế, sang trọng của LV đã tạo ra những bộ sưu tập thời trang độc đáo và ấn tượng.\r\n\r\nMột trong những điểm nhấn lớn nhất của sự hợp tác này chính là việc sử dụng các mẫu hoa và chấm bi của Yayoi Kusama trên các sản phẩm của Louis Vuitton. Từ túi xách, giày dép đến phụ kiện, mỗi sản phẩm đều được trang trí bởi các họa tiết lạ mắt và sáng tạo, mang lại sự cá nhân hóa và phong cách độc đáo cho người dùng.\r\n\r\nKhông chỉ là một sự kết hợp thú vị giữa thế giới thời trang và nghệ thuật, mà còn là một cơ hội để khám phá và trải nghiệm sự sáng tạo đặc biệt từ cả hai phía. Sự hợp tác giữa Louis Vuitton và Yayoi Kusama không chỉ là về việc bán hàng, mà còn là về việc tạo ra những tác phẩm nghệ thuật đầy ý nghĩa, làm thêm phần phong phú và đa dạng cho ngành thời trang và nghệ thuật hiện đại.\r\n\r\nKết luận:\r\n\r\nSự kết hợp giữa Louis Vuitton và Yayoi Kusama không chỉ mang lại thành công thương mại mà còn tạo ra những tác phẩm nghệ thuật độc đáo, đem lại sự phong phú và đa dạng cho ngành thời trang và nghệ thuật. Đây thực sự là một hợp tác đặc biệt, làm say mê không chỉ các tín đồ thời trang mà còn những người yêu nghệ thuật trên khắp thế giới.', '', ''),
(7, 'Louis Vuitton x Yayoi Kusama: Nghệ thuật sáng tạo vô tận', 'Trong thế giới thời trang cao cấp, việc hợp tác giữa các thương hiệu danh tiếng và các nghệ sĩ nổi tiếng là điều không còn quá lạ lẫm. Tuy nhiên, mỗi khi một thương hiệu hàng đầu như Louis Vuitton (LV) kết hợp với một nghệ sĩ tài năng như Yayoi Kusama (YK), thì sự kỳ diệu thực sự được tạo ra.\r\n\r\nYayoi Kusama, một nghệ sĩ đa tài người Nhật Bản, đã ghi dấu ấn riêng trong ngành nghệ thuật với phong cách họa sĩ điêu khắc sáng tạo và phong cách ấn tượng. Sự kết hợp giữa tài năng nghệ thuật của YK và sự tinh tế, sang trọng của LV đã tạo ra những bộ sưu tập thời trang độc đáo và ấn tượng.\r\n\r\nMột trong những điểm nhấn lớn nhất của sự hợp tác này chính là việc sử dụng các mẫu hoa và chấm bi của Yayoi Kusama trên các sản phẩm của Louis Vuitton. Từ túi xách, giày dép đến phụ kiện, mỗi sản phẩm đều được trang trí bởi các họa tiết lạ mắt và sáng tạo, mang lại sự cá nhân hóa và phong cách độc đáo cho người dùng.\r\n\r\nKhông chỉ là một sự kết hợp thú vị giữa thế giới thời trang và nghệ thuật, mà còn là một cơ hội để khám phá và trải nghiệm sự sáng tạo đặc biệt từ cả hai phía. Sự hợp tác giữa Louis Vuitton và Yayoi Kusama không chỉ là về việc bán hàng, mà còn là về việc tạo ra những tác phẩm nghệ thuật đầy ý nghĩa, làm thêm phần phong phú và đa dạng cho ngành thời trang và nghệ thuật hiện đại.\r\n\r\nKết luận:\r\n\r\nSự kết hợp giữa Louis Vuitton và Yayoi Kusama không chỉ mang lại thành công thương mại mà còn tạo ra những tác phẩm nghệ thuật độc đáo, đem lại sự phong phú và đa dạng cho ngành thời trang và nghệ thuật. Đây thực sự là một hợp tác đặc biệt, làm say mê không chỉ các tín đồ thời trang mà còn những người yêu nghệ thuật trên khắp thế giới.', 'news-img-1.jpg', ''),
(8, 'Louis Vuitton x Yayoi Kusama: Nghệ thuật sáng tạo vô tận', 'Trong thế giới thời trang cao cấp, việc hợp tác giữa các thương hiệu danh tiếng và các nghệ sĩ nổi tiếng là điều không còn quá lạ lẫm. Tuy nhiên, mỗi khi một thương hiệu hàng đầu như Louis Vuitton (LV) kết hợp với một nghệ sĩ tài năng như Yayoi Kusama (YK), thì sự kỳ diệu thực sự được tạo ra.\r\n\r\nYayoi Kusama, một nghệ sĩ đa tài người Nhật Bản, đã ghi dấu ấn riêng trong ngành nghệ thuật với phong cách họa sĩ điêu khắc sáng tạo và phong cách ấn tượng. Sự kết hợp giữa tài năng nghệ thuật của YK và sự tinh tế, sang trọng của LV đã tạo ra những bộ sưu tập thời trang độc đáo và ấn tượng.\r\n\r\nMột trong những điểm nhấn lớn nhất của sự hợp tác này chính là việc sử dụng các mẫu hoa và chấm bi của Yayoi Kusama trên các sản phẩm của Louis Vuitton. Từ túi xách, giày dép đến phụ kiện, mỗi sản phẩm đều được trang trí bởi các họa tiết lạ mắt và sáng tạo, mang lại sự cá nhân hóa và phong cách độc đáo cho người dùng.\r\n\r\nKhông chỉ là một sự kết hợp thú vị giữa thế giới thời trang và nghệ thuật, mà còn là một cơ hội để khám phá và trải nghiệm sự sáng tạo đặc biệt từ cả hai phía. Sự hợp tác giữa Louis Vuitton và Yayoi Kusama không chỉ là về việc bán hàng, mà còn là về việc tạo ra những tác phẩm nghệ thuật đầy ý nghĩa, làm thêm phần phong phú và đa dạng cho ngành thời trang và nghệ thuật hiện đại.\r\n\r\nKết luận:\r\n\r\nSự kết hợp giữa Louis Vuitton và Yayoi Kusama không chỉ mang lại thành công thương mại mà còn tạo ra những tác phẩm nghệ thuật độc đáo, đem lại sự phong phú và đa dạng cho ngành thời trang và nghệ thuật. Đây thực sự là một hợp tác đặc biệt, làm say mê không chỉ các tín đồ thời trang mà còn những người yêu nghệ thuật trên khắp thế giới.', '', ''),
(9, '123', 'áddasdasad', '', '');

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
(2, 'Dành cho Nữ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_hang`
--

CREATE TABLE `don_hang` (
  `id_don_hang` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `thanh_tien` float(10,2) NOT NULL,
  `ten_nguoi_nhan` varchar(255) NOT NULL,
  `dia_chi_nguoi_nhan` varchar(255) NOT NULL,
  `sdt_nguoi_nhan` varchar(255) NOT NULL,
  `email_nguoi_nhan` varchar(255) NOT NULL,
  `ngay_dat_hang` date NOT NULL DEFAULT current_timestamp(),
  `id_trang_thai` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `vai_tro` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoi_dung`
--

INSERT INTO `nguoi_dung` (`id_nguoi_dung`, `ten_dang_nhap`, `ten_nguoi_dung`, `mat_khau`, `dia_chi`, `sdt`, `email`, `vai_tro`) VALUES
(1, 'admin', 'Admin ', '12345', 'Hanoi, Vietnam', '0921312454', 'admin@gmail.com', 0),
(2, 'phmvu2912', 'Phạm Đào Vũ', '12345', 'Vietnam', '0947236412', 'phmvu21233@gmail.com', 1);

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
  `id_danh_muc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id_sp`, `ten_sp`, `thumbnail`, `anh_sp`, `gia_sp`, `mo_ta`, `id_danh_muc`) VALUES
(4, 'Varsity jacket SS\'24', '', '', 2000000000000, 'Áo khoác varsity nằm trong BST mùa Xuân 2024', 4),
(7, 'Quần jeans SS\'24', '', '', 2000000000000, 'Quần jeans cao cấp nằm trong BST mùa Xuân 2024', 4),
(8, 'Quần jeans SS\'24', '', '', 2000000000000, 'Quần jeans cao cấp nằm trong BST mùa Xuân 2024', 4),
(29, 'Embroidered Short-Sleeved Cotton Bowling Shirt 2', 'uploads/products/1711505570-thumbnail-1.png', 'Array', 45000000, 'BST 2024', 5),
(32, 'Nike x Off-White Tee ', 'uploads/products/1711466673-thumbnail-2.png', '', 2000000000000, 'aDD', 5),
(35, '', NULL, NULL, 0, '', 0),
(36, '', NULL, NULL, 0, '', 0),
(37, '', NULL, NULL, 0, '', 0),
(38, '', NULL, NULL, 0, '', 0),
(39, 'Phạm Đào Vũ', NULL, NULL, 0, '', 0),
(40, '', NULL, NULL, 0, '', 0),
(41, 'Phạm Đào Vũ', 'uploads/products/1711508068-img-2.2.png', 'uploads/products/1711508068-img-2.1.png', 2000000, 'á', 5),
(42, 'Phạm Đào Vũ', 'uploads/products/1711508443-img-1.1.png', 'uploads/products/1711508443-thumbnail-1.png', -34, 'ád', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trang_thai`
--

CREATE TABLE `trang_thai` (
  `id_trang_thai` int(11) NOT NULL,
  `ten_trang_thai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  ADD PRIMARY KEY (`id_bai_viet`);

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
-- Chỉ mục cho bảng `trang_thai`
--
ALTER TABLE `trang_thai`
  ADD PRIMARY KEY (`id_trang_thai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bai_viet`
--
ALTER TABLE `bai_viet`
  MODIFY `id_bai_viet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `id_danh_muc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id_don_hang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nguoi_dung`
--
ALTER TABLE `nguoi_dung`
  MODIFY `id_nguoi_dung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `trang_thai`
--
ALTER TABLE `trang_thai`
  MODIFY `id_trang_thai` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
