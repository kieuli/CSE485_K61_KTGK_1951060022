-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2021 lúc 05:30 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlmau`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blood_recipient`
--

CREATE TABLE `blood_recipient` (
  `reci_id` int(10) NOT NULL,
  `reci_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reci_age` int(120) DEFAULT NULL,
  `reci_bgrp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `reci_bqnty` int(200) NOT NULL,
  `reci_sex` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reci_reg_date` date NOT NULL,
  `reci_phno` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blood_recipient`
--

INSERT INTO `blood_recipient` (`reci_id`, `reci_name`, `reci_age`, `reci_bgrp`, `reci_bqnty`, `reci_sex`, `reci_reg_date`, `reci_phno`) VALUES
(1, 'Lâm Thị Kiều', 20, 'A', 120, 'nữ', '2021-10-15', 866797508),
(2, 'trần Thị Anh', 32, 'B', 200, 'nữ', '2021-10-11', 974625256),
(27, 'Nguyen Văn A', 35, 'O', 150, 'nam', '2021-10-05', 865634508);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blood_recipient`
--
ALTER TABLE `blood_recipient`
  ADD PRIMARY KEY (`reci_id`),
  ADD UNIQUE KEY `reci_name` (`reci_name`),
  ADD UNIQUE KEY `reci_bgrp` (`reci_bgrp`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blood_recipient`
--
ALTER TABLE `blood_recipient`
  MODIFY `reci_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
