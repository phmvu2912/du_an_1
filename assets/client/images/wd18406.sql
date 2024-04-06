-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 28, 2024 lúc 08:15 AM
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
-- Cơ sở dữ liệu: `base-duan1`
--
CREATE DATABASE IF NOT EXISTS `base-duan1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `base-duan1`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart_items`
--

CREATE TABLE `cart_items` (
  `id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalogues`
--

CREATE TABLE `catalogues` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `catalogues`
--

INSERT INTO `catalogues` (`id`, `name`) VALUES
(1, 'Điện thoại'),
(2, 'Máy tính');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` int(11) NOT NULL,
  `user_email` int(11) NOT NULL,
  `user_phone` int(11) NOT NULL,
  `user_address` int(11) NOT NULL,
  `total_bill` int(11) NOT NULL,
  `status_delivery` int(11) NOT NULL COMMENT 'Trang thái vận chuyển đơn hàng: \r\nDưới đây đang lấy theo trạng thái của shopee.\r\n0: chờ xác nhận\r\n1: chờ lấy hàng\r\n2: chờ giao hàng\r\n3: đã giao\r\n-1: đã hủy\r\n',
  `status_payment` int(11) NOT NULL COMMENT 'Trạng thái thanh toán:\r\n0: chưa thanh toán\r\n1: đã thanh toán\r\n-1: đơn hàng đã hủy',
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'ngày tạo đơn hàng',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'ngày cập nhật cuối cùng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL COMMENT 'ưu tiên lưu giá price hơn regular.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `catalogue_id` int(11) NOT NULL COMMENT 'ID danh mục sản phẩm',
  `name` varchar(255) NOT NULL,
  `img_thumbnail` varchar(255) NOT NULL,
  `overview` varchar(255) NOT NULL COMMENT 'tổng quan',
  `price_regular` int(11) NOT NULL COMMENT 'giá bán thường',
  `price_sale` int(11) DEFAULT NULL COMMENT 'giá khuyến mãi',
  `content` int(11) DEFAULT NULL COMMENT 'mô tả chi tiết sản phẩm',
  `rate` tinyint(1) NOT NULL DEFAULT 5 COMMENT 'số sao đánh giá từ 1->5',
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'ngày tạo sản phẩm',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'ngày cập nhật mới nhất'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `catalogue_id`, `name`, `img_thumbnail`, `overview`, `price_regular`, `price_sale`, `content`, `rate`, `created_at`, `updated_at`) VALUES
(5, 2, 'Máy tính ASUS 958', '/uploads/products/maytinh.jpg', '', 15000000, NULL, NULL, 5, '2024-03-18 13:23:57', '2024-03-18 13:23:57'),
(6, 2, 'Máy tính ASUS 789', '/uploads/products/maytinh.jpg', '', 19000000, 16000000, NULL, 5, '2024-03-18 13:24:21', '2024-03-18 13:24:21'),
(7, 2, 'Máy tính ASUS A7Z', '/uploads/products/maytinh.jpg', '', 25000000, 20000000, NULL, 5, '2024-03-18 13:24:46', '2024-03-18 13:24:46'),
(8, 2, 'Máy tính ASUS A7Z', '/uploads/products/maytinh.jpg', '', 43000000, NULL, NULL, 5, '2024-03-18 13:25:10', '2024-03-18 13:25:10'),
(9, 1, 'Điện thoại IP10', '/uploads/products/dienthoai.jpg', '', 15300000, NULL, NULL, 5, '2024-03-18 13:26:20', '2024-03-18 13:26:20'),
(10, 1, 'Điện thoại IP12', '/uploads/products/dienthoai.jpg', '', 20000000, 9800000, NULL, 5, '2024-03-18 13:27:30', '2024-03-18 13:27:30'),
(11, 1, 'Điện thoại IP13', '/uploads/products/dienthoai.jpg', '', 30000000, 12500000, NULL, 5, '2024-03-18 13:27:30', '2024-03-18 13:27:30'),
(12, 1, 'Điện thoại IP14', '/uploads/products/dienthoai.jpg', '', 40000000, NULL, NULL, 5, '2024-03-18 13:27:30', '2024-03-18 13:27:30'),
(13, 1, 'Điện thoại IP15', '/uploads/products/dienthoai.jpg', '', 50000000, 43000000, NULL, 5, '2024-03-18 13:27:30', '2024-03-18 13:27:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'true(1): admin, false(0): member'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`) VALUES
(1, 'Admin', 'admin@gmail.com', '12345678', 1),
(2, 'Client', 'client@gmail.com', '12345678', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_id` (`cart_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `catalogues`
--
ALTER TABLE `catalogues`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `catalogue_id` (`catalogue_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `catalogues`
--
ALTER TABLE `catalogues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`),
  ADD CONSTRAINT `cart_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`catalogue_id`) REFERENCES `catalogues` (`id`);
--
-- Cơ sở dữ liệu: `db_shop`
--
CREATE DATABASE IF NOT EXISTS `db_shop` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_shop`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id_account` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, '[Điện thoại]'),
(2, '[Laptop]');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`product_id`, `image`, `total`, `description`, `category_id`) VALUES
(1, '170178252158f149e8c7e8d67042f123670662e402.jpg', '12345', '23', 2),
(2, '170178253898ad4c6d3ae29406f1981f34ac88b77c.jpg', '2222', '3333', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_account`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id_account` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);
--
-- Cơ sở dữ liệu: `du_an_1`
--
CREATE DATABASE IF NOT EXISTS `du_an_1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `du_an_1`;
--
-- Cơ sở dữ liệu: `du_an_1_mvc`
--
CREATE DATABASE IF NOT EXISTS `du_an_1_mvc` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `du_an_1_mvc`;
--
-- Cơ sở dữ liệu: `mvc_da1_test`
--
CREATE DATABASE IF NOT EXISTS `mvc_da1_test` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `mvc_da1_test`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart_items`
--

CREATE TABLE `cart_items` (
  `id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalogues`
--

CREATE TABLE `catalogues` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `catalogues`
--

INSERT INTO `catalogues` (`id`, `name`) VALUES
(1, 'Điện thoại'),
(2, 'Máy tính');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` int(11) NOT NULL,
  `user_email` int(11) NOT NULL,
  `user_phone` int(11) NOT NULL,
  `user_address` int(11) NOT NULL,
  `total_bill` int(11) NOT NULL,
  `status_delivery` int(11) NOT NULL COMMENT 'Trang thái vận chuyển đơn hàng: \r\nDưới đây đang lấy theo trạng thái của shopee.\r\n0: chờ xác nhận\r\n1: chờ lấy hàng\r\n2: chờ giao hàng\r\n3: đã giao\r\n-1: đã hủy\r\n',
  `status_payment` int(11) NOT NULL COMMENT 'Trạng thái thanh toán:\r\n0: chưa thanh toán\r\n1: đã thanh toán\r\n-1: đơn hàng đã hủy',
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'ngày tạo đơn hàng',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'ngày cập nhật cuối cùng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL COMMENT 'ưu tiên lưu giá price hơn regular.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `catalogue_id` int(11) NOT NULL COMMENT 'ID danh mục sản phẩm',
  `name` varchar(255) NOT NULL,
  `img_thumbnail` varchar(255) NOT NULL,
  `overview` varchar(255) NOT NULL COMMENT 'tổng quan',
  `price_regular` int(11) NOT NULL COMMENT 'giá bán thường',
  `price_sale` int(11) DEFAULT NULL COMMENT 'giá khuyến mãi',
  `content` int(11) DEFAULT NULL COMMENT 'mô tả chi tiết sản phẩm',
  `rate` tinyint(1) NOT NULL DEFAULT 5 COMMENT 'số sao đánh giá từ 1->5',
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'ngày tạo sản phẩm',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'ngày cập nhật mới nhất'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `catalogue_id`, `name`, `img_thumbnail`, `overview`, `price_regular`, `price_sale`, `content`, `rate`, `created_at`, `updated_at`) VALUES
(5, 2, 'Máy tính ASUS 958', '/uploads/products/maytinh.jpg', '', 15000000, NULL, NULL, 5, '2024-03-18 13:23:57', '2024-03-18 13:23:57'),
(6, 2, 'Máy tính ASUS 789', '/uploads/products/maytinh.jpg', '', 19000000, 16000000, NULL, 5, '2024-03-18 13:24:21', '2024-03-18 13:24:21'),
(7, 2, 'Máy tính ASUS A7Z', '/uploads/products/maytinh.jpg', '', 25000000, 20000000, NULL, 5, '2024-03-18 13:24:46', '2024-03-18 13:24:46'),
(8, 2, 'Máy tính ASUS A7Z', '/uploads/products/maytinh.jpg', '', 43000000, NULL, NULL, 5, '2024-03-18 13:25:10', '2024-03-18 13:25:10'),
(9, 1, 'Điện thoại IP10', '/uploads/products/dienthoai.jpg', '', 15300000, NULL, NULL, 5, '2024-03-18 13:26:20', '2024-03-18 13:26:20'),
(10, 1, 'Điện thoại IP12', '/uploads/products/dienthoai.jpg', '', 20000000, 9800000, NULL, 5, '2024-03-18 13:27:30', '2024-03-18 13:27:30'),
(11, 1, 'Điện thoại IP13', '/uploads/products/dienthoai.jpg', '', 30000000, 12500000, NULL, 5, '2024-03-18 13:27:30', '2024-03-18 13:27:30'),
(12, 1, 'Điện thoại IP14', '/uploads/products/dienthoai.jpg', '', 40000000, NULL, NULL, 5, '2024-03-18 13:27:30', '2024-03-18 13:27:30'),
(13, 1, 'Điện thoại IP15', '/uploads/products/dienthoai.jpg', '', 50000000, 43000000, NULL, 5, '2024-03-18 13:27:30', '2024-03-18 13:27:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'true(1): admin, false(0): member'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`) VALUES
(1, 'Admin', 'admin@gmail.com', '12345678', 1),
(2, 'Client', 'client@gmail.com', '12345678', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_id` (`cart_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `catalogues`
--
ALTER TABLE `catalogues`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `catalogue_id` (`catalogue_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `catalogues`
--
ALTER TABLE `catalogues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`),
  ADD CONSTRAINT `cart_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`catalogue_id`) REFERENCES `catalogues` (`id`);
--
-- Cơ sở dữ liệu: `ph34756`
--
CREATE DATABASE IF NOT EXISTS `ph34756` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ph34756`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cities`
--

CREATE TABLE `cities` (
  `id_city` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cities`
--

INSERT INTO `cities` (`id_city`, `name`) VALUES
(1, 'Hà Nội'),
(2, 'Đà Lạt'),
(3, 'Đà Nẵng'),
(4, 'TP. Hồ Chí Minh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hotels`
--

CREATE TABLE `hotels` (
  `id_hotel` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `overview` text NOT NULL,
  `id_city` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hotels`
--

INSERT INTO `hotels` (`id_hotel`, `name`, `img`, `overview`, `id_city`) VALUES
(1, 'Hotel A ', '', 'Hotel A - abc', 1),
(2, 'Hotel B', '', 'Hotel B - bcd', 2),
(3, 'Hotel C', '', 'Hotel C - cde', 3),
(4, 'Hotel D', '', 'Hotel D - def', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rooms`
--

CREATE TABLE `rooms` (
  `id_rooms` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `overview` text NOT NULL,
  `id_hotel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `rooms`
--

INSERT INTO `rooms` (`id_rooms`, `name`, `img`, `overview`, `id_hotel`) VALUES
(5, 'luxury room', '', 'luxury', 1),
(6, 'standard room', '', 'Standard', 2),
(7, 'suite room', '', 'Suite', 3),
(8, 'family room', '', 'Family', 4);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id_city`);

--
-- Chỉ mục cho bảng `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id_hotel`),
  ADD KEY `fk_id_city` (`id_city`);

--
-- Chỉ mục cho bảng `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id_rooms`),
  ADD KEY `fk_id_hotel` (`id_hotel`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cities`
--
ALTER TABLE `cities`
  MODIFY `id_city` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id_hotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id_rooms` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hotels`
--
ALTER TABLE `hotels`
  ADD CONSTRAINT `fk_id_city` FOREIGN KEY (`id_city`) REFERENCES `cities` (`id_city`);

--
-- Các ràng buộc cho bảng `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `fk_id_hotel` FOREIGN KEY (`id_hotel`) REFERENCES `hotels` (`id_hotel`);
--
-- Cơ sở dữ liệu: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) NOT NULL,
  `col_name` varchar(64) NOT NULL,
  `col_type` varchar(64) NOT NULL,
  `col_length` text DEFAULT NULL,
  `col_collation` varchar(64) NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) DEFAULT '',
  `col_default` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `column_name` varchar(64) NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) NOT NULL DEFAULT '',
  `transformation_options` varchar(255) NOT NULL DEFAULT '',
  `input_transformation` varchar(255) NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) NOT NULL,
  `settings_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

--
-- Đang đổ dữ liệu cho bảng `pma__designer_settings`
--

INSERT INTO `pma__designer_settings` (`username`, `settings_data`) VALUES
('root', '{\"angular_direct\":\"direct\",\"snap_to_grid\":\"off\",\"relation_lines\":\"true\"}');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `export_type` varchar(10) NOT NULL,
  `template_name` varchar(64) NOT NULL,
  `template_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db` varchar(64) NOT NULL DEFAULT '',
  `table` varchar(64) NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) NOT NULL,
  `item_name` varchar(64) NOT NULL,
  `item_type` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Đang đổ dữ liệu cho bảng `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"du_an_1\",\"table\":\"categories_room\"},{\"db\":\"du_an_1\",\"table\":\"hotel\"},{\"db\":\"du_an_1\",\"table\":\"bed\"},{\"db\":\"du_an_1\",\"table\":\"loaiphong\"},{\"db\":\"du_an_1\",\"table\":\"city\"},{\"db\":\"abc\",\"table\":\"danh_muc\"},{\"db\":\"thu_nghiem\",\"table\":\"hotel\"},{\"db\":\"abc\",\"table\":\"sach\"},{\"db\":\"test_2\",\"table\":\"danh_muc\"},{\"db\":\"thu_nghiem\",\"table\":\"categories_room\"}]');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) NOT NULL DEFAULT '',
  `master_table` varchar(64) NOT NULL DEFAULT '',
  `master_field` varchar(64) NOT NULL DEFAULT '',
  `foreign_db` varchar(64) NOT NULL DEFAULT '',
  `foreign_table` varchar(64) NOT NULL DEFAULT '',
  `foreign_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `search_name` varchar(64) NOT NULL DEFAULT '',
  `search_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `display_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `prefs` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text NOT NULL,
  `schema_sql` text DEFAULT NULL,
  `data_sql` longtext DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Đang đổ dữ liệu cho bảng `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2023-11-23 11:26:56', '{\"Console\\/Mode\":\"collapse\",\"lang\":\"vi\"}');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) NOT NULL,
  `tab` varchar(64) NOT NULL,
  `allowed` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) NOT NULL,
  `usergroup` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Chỉ mục cho bảng `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Chỉ mục cho bảng `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Chỉ mục cho bảng `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Chỉ mục cho bảng `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Chỉ mục cho bảng `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Chỉ mục cho bảng `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Chỉ mục cho bảng `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Chỉ mục cho bảng `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Chỉ mục cho bảng `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Chỉ mục cho bảng `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Chỉ mục cho bảng `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Chỉ mục cho bảng `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Chỉ mục cho bảng `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Cơ sở dữ liệu: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Cơ sở dữ liệu: `test-da1`
--
CREATE DATABASE IF NOT EXISTS `test-da1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `test-da1`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anh`
--

CREATE TABLE `anh` (
  `id_anh` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `anh`
--

INSERT INTO `anh` (`id_anh`, `name`) VALUES
(1, 'anh1.jpg'),
(2, 'anh2.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anh_sp`
--

CREATE TABLE `anh_sp` (
  `id_anh_sp` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_anh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `anh_sp`
--

INSERT INTO `anh_sp` (`id_anh_sp`, `id_product`, `id_anh`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart_items`
--

CREATE TABLE `cart_items` (
  `id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalogues`
--

CREATE TABLE `catalogues` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `catalogues`
--

INSERT INTO `catalogues` (`id`, `name`) VALUES
(1, 'Điện thoại'),
(2, 'Máy tính');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` int(11) NOT NULL,
  `user_email` int(11) NOT NULL,
  `user_phone` int(11) NOT NULL,
  `user_address` int(11) NOT NULL,
  `total_bill` int(11) NOT NULL,
  `status_delivery` int(11) NOT NULL COMMENT 'Trang thái vận chuyển đơn hàng: \r\nDưới đây đang lấy theo trạng thái của shopee.\r\n0: chờ xác nhận\r\n1: chờ lấy hàng\r\n2: chờ giao hàng\r\n3: đã giao\r\n-1: đã hủy\r\n',
  `status_payment` int(11) NOT NULL COMMENT 'Trạng thái thanh toán:\r\n0: chưa thanh toán\r\n1: đã thanh toán\r\n-1: đơn hàng đã hủy',
  `created_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'ngày tạo đơn hàng',
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'ngày cập nhật cuối cùng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL COMMENT 'ưu tiên lưu giá price hơn regular.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id_product` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id_product`, `product_name`, `price`, `description`) VALUES
(1, 'Áo thun', 100, 'Áo thun 2024'),
(2, 'Áo khoác', 200, 'Áo khoác 2024');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `productsizes`
--

CREATE TABLE `productsizes` (
  `id_product` int(11) NOT NULL,
  `id_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sizes`
--

CREATE TABLE `sizes` (
  `id_size` int(11) NOT NULL,
  `size_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sizes`
--

INSERT INTO `sizes` (`id_size`, `size_name`) VALUES
(1, 'XS'),
(2, 'S'),
(3, 'M'),
(4, 'L'),
(5, 'XL'),
(6, 'XXL');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `anh`
--
ALTER TABLE `anh`
  ADD PRIMARY KEY (`id_anh`);

--
-- Chỉ mục cho bảng `anh_sp`
--
ALTER TABLE `anh_sp`
  ADD PRIMARY KEY (`id_anh_sp`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

--
-- Chỉ mục cho bảng `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id_size`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `anh`
--
ALTER TABLE `anh`
  MODIFY `id_anh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `anh_sp`
--
ALTER TABLE `anh_sp`
  MODIFY `id_anh_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id_size` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Cơ sở dữ liệu: `wd18406`
--
CREATE DATABASE IF NOT EXISTS `wd18406` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `wd18406`;

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
(2, 'Dành cho Nữ'),
(5, 'Ready to wear 3');

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
(29, 'Embroidered Short-Sleeved Cotton Bowling Shirt 2', 'uploads/products/1711505570-thumbnail-1.png', 'uploads/products/1711505570-img-1.1.png,uploads/products/1711505570-img-1.2.png,uploads/products/1711505570-img-1.3.png,uploads/products/1711505570-img-1.4.png', 45000000, 'z3', 5),
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
