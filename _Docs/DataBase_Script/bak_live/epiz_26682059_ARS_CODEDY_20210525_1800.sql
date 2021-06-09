-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: sql300.byetcluster.com
-- Thời gian đã tạo: Th5 23, 2021 lúc 03:25 PM
-- Phiên bản máy phục vụ: 5.6.48-88.0
-- Phiên bản PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+07:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `epiz_26682059_ARS_CODEDY`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `airport`
--

CREATE TABLE `airport` (
  `airport_id` int(11) NOT NULL,
  `location` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8_unicode_ci,
  `created_by` varchar(32) CHARACTER SET utf8 DEFAULT 'ARS.CODEDY',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `version` int(11) DEFAULT '1',
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `airport`
--

INSERT INTO `airport` (`airport_id`, `location`, `code`, `name`, `image`, `active`, `description`, `created_by`, `created_at`, `updated_by`, `updated_at`, `version`, `deleted`) VALUES
(1, 'Hà Nội', 'HAN', 'Nội Bài', 'ha-noi.jpg', 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(2, 'Hồ Chí Minh', 'SGN', 'Tân Sơn Nhất', 'ho-chi-minh.jpg', 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(3, 'Nghệ An', 'VII', 'Vinh', 'nghe-an.jpg', 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(4, 'Thừa Thiên - Huế', 'HUI', 'Phú Bài', 'hue.jpg', 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(5, 'Đà Nẵng', 'DAD', 'Đà Nẵng', 'da-nang.jpg', 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(6, 'Bình Định', 'UIH', 'Phù Cát', 'binh-dinh.jpg', 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(7, 'Hải Phòng', 'HPH', 'Cát Bi', 'hai-phong.jpg', 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(8, 'Khánh Hòa', 'CXR', 'Cam Ranh', 'khanh-hoa.jpg', 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(9, 'Kiên Giang', 'PQC', 'Phú Quốc', 'kien-giang.jpg', 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(10, 'Quảng Ninh', 'VDO', 'Vân Đồn', 'quang-ninh.jpg', 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(11, 'Cần Thơ', 'VCA', 'Cần Thơ', 'can-tho.jpg', 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(12, 'Đà Lạt', 'DLI', 'Liên Khương', 'da-lat.jpg', 0, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `extra_service`
--

CREATE TABLE `extra_service` (
  `extra_service_id` int(11) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(16) UNSIGNED NOT NULL,
  `image` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8_unicode_ci,
  `created_by` varchar(32) CHARACTER SET utf8 DEFAULT 'ARS.CODEDY',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `version` int(11) DEFAULT '1',
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `extra_service`
--

INSERT INTO `extra_service` (`extra_service_id`, `name`, `price`, `image`, `active`, `description`, `created_by`, `created_at`, `updated_by`, `updated_at`, `version`, `deleted`) VALUES
(1, 'Luggage and special services', 110000, 'luggage-and-special-services.jpg', 1, '<ul style=list-style-type: disc;><li>Total weight displayed includes free baggage allowance</li><li>Save up to 80 %</li><li>max. 40 kg per person</li></ul>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(2, 'Priority Check-in', 120000, 'priority-check-in.jpg', 1, '<ul style=list-style-type: disc;><li>Save your time</li><li>Use Priority Check-in Counter</li><li>Use Priority line at boarding gate</li></ul>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(3, 'Business Lounge', 130000, 'business-lounge.jpg', 1, '<ul style=list-style-type: disc;><li>Receive the utmost comfort</li><li>Enjoy your privacy</li><li>Experience luxurious services</li></ul>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(4, 'Special meals on the plane', 140000, 'special-meals-on-the-plane.jpg', 1, '<ul style=list-style-type: disc;><li>Selection of special meals to suit different dietary styles</li><li>Food is always fresh</li><li>Attentive service</li></ul>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(5, 'Special care for babies', 150000, 'special-care-for-babies.jpg', 1, '<ul style=list-style-type: disc;><li>Baby stroller</li><li>Bassinet service</li><li>Portable in-flight bed for children</li></ul>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(6, 'Special care for the elderly', 160000, 'special-care-for-the-elderly.jpg', 0, '<ul style=list-style-type: disc;><li>Special medical assistance</li><li>High-class meals</li><li>Call for help at all times</li></ul>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `flight_schedule`
--

CREATE TABLE `flight_schedule` (
  `flight_schedule_id` int(11) NOT NULL,
  `airport_from_id` int(10) UNSIGNED NOT NULL,
  `airport_to_id` int(10) UNSIGNED NOT NULL,
  `plane_id` int(10) UNSIGNED NOT NULL,
  `price_seat_type_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `departure_at` datetime NOT NULL,
  `arrival_at` datetime NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `description` text COLLATE utf8_unicode_ci,
  `created_by` varchar(32) CHARACTER SET utf8 DEFAULT 'ARS.CODEDY',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `version` int(11) DEFAULT '1',
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `flight_schedule`
--

INSERT INTO `flight_schedule` (`flight_schedule_id`, `airport_from_id`, `airport_to_id`, `plane_id`, `price_seat_type_id`, `code`, `departure_at`, `arrival_at`, `status`, `description`, `created_by`, `created_at`, `updated_by`, `updated_at`, `version`, `deleted`) VALUES
(1, 1, 2, 1, 1, 'VN-599', '2022-10-10 06:15:00', '2022-10-10 08:25:00', 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(2, 1, 2, 2, 2, 'VN-600', '2022-10-10 09:10:00', '2022-10-10 11:45:00', 2, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(3, 1, 2, 3, 3, 'VN-601', '2022-10-10 12:35:00', '2022-10-10 14:10:00', 3, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(4, 1, 2, 4, 4, 'VN-602', '2022-10-10 20:55:00', '2022-10-10 22:15:00', 4, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(5, 1, 2, 5, 5, 'VN-603', '2022-10-10 23:05:00', '2022-10-11 01:50:00', 5, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(6, 2, 1, 6, 6, 'VN-604', '2022-10-10 08:10:00', '2022-10-10 10:30:00', 6, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(7, 2, 1, 7, 7, 'VN-605', '2022-10-10 14:55:00', '2022-10-10 16:30:00', 2, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(8, 2, 1, 8, 8, 'VN-606', '2022-10-10 21:30:00', '2022-10-10 23:15:00', 2, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(9, 1, 5, 9, 9, 'VN-607', '2022-10-15 10:15:00', '2022-10-15 11:25:00', 2, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(10, 1, 5, 10, 10, 'VN-608', '2022-10-15 19:10:00', '2022-10-15 20:15:00', 2, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(11, 1, 5, 5, 11, 'VN-609', '2022-10-15 21:30:00', '2022-10-15 23:05:00', 2, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(12, 1, 3, 10, 12, 'VN-610', '2022-10-15 06:15:00', '2022-10-15 08:25:00', 2, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(13, 1, 3, 9, 13, 'VN-611', '2022-10-15 09:10:00', '2022-10-15 11:45:00', 2, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(14, 1, 3, 8, 14, 'VN-612', '2022-10-15 12:35:00', '2022-10-15 14:10:00', 2, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(15, 1, 3, 7, 15, 'VN-613', '2022-10-15 20:55:00', '2022-10-15 22:15:00', 2, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(16, 1, 3, 6, 16, 'VN-614', '2022-10-15 23:05:00', '2022-10-16 01:50:00', 2, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(17, 3, 1, 5, 17, 'VN-615', '2022-10-15 08:10:00', '2022-10-15 10:30:00', 2, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(18, 3, 1, 4, 18, 'VN-616', '2022-10-15 14:55:00', '2022-10-15 16:30:00', 2, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(19, 3, 1, 3, 19, 'VN-617', '2022-10-15 21:30:00', '2022-10-15 23:15:00', 2, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(20, 1, 4, 2, 20, 'VN-618', '2022-10-20 10:15:00', '2022-10-20 11:25:00', 2, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(21, 1, 4, 1, 21, 'VN-619', '2022-10-20 19:10:00', '2022-10-20 20:15:00', 2, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(22, 1, 4, 6, 22, 'VN-620', '2022-10-20 21:30:00', '2022-10-20 23:05:00', 2, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(23, 11, 10, 8, 23, 'VN-621', '2022-10-25 09:10:00', '2022-10-25 11:45:00', 2, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(24, 11, 10, 7, 24, 'VN-622', '2022-10-25 20:55:00', '2022-10-25 22:15:00', 2, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(25, 6, 8, 6, 25, 'VN-623', '2022-10-30 14:55:00', '2022-10-30 16:30:00', 6, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(26, 6, 8, 5, 26, 'VN-624', '2022-10-30 21:30:00', '2022-10-30 23:15:00', 5, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(27, 9, 7, 9, 27, 'VN-625', '2022-11-05 10:15:00', '2022-11-05 11:25:00', 4, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(28, 9, 7, 10, 28, 'VN-626', '2022-11-05 19:10:00', '2022-11-05 20:15:00', 3, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(29, 2, 1, 2, 29, 'VN-627', '2022-11-10 06:15:00', '2022-11-10 08:25:00', 2, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(30, 2, 1, 3, 30, 'VN-628', '2022-11-10 09:10:00', '2022-11-10 11:45:00', 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(31, 1, 3, 1, 31, 'VN-628', '2022-10-10 09:10:00', '2022-10-10 11:45:00', 3, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(32, 1, 3, 2, 32, 'VN-629', '2022-10-10 20:55:00', '2022-10-10 22:15:00', 2, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(33, 1, 4, 3, 33, 'VN-630', '2022-10-10 09:10:00', '2022-10-10 11:45:00', 4, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(34, 1, 4, 4, 34, 'VN-631', '2022-10-10 20:55:00', '2022-10-10 22:15:00', 2, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(35, 1, 5, 5, 35, 'VN-632', '2022-10-10 09:10:00', '2022-10-10 11:45:00', 5, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(36, 1, 5, 5, 36, 'VN-633', '2022-10-10 20:55:00', '2022-10-10 22:15:00', 2, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(37, 1, 6, 5, 37, 'VN-634', '2022-10-10 09:10:00', '2022-10-10 11:45:00', 2, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(38, 1, 6, 6, 38, 'VN-635', '2022-10-10 20:55:00', '2022-10-10 22:15:00', 2, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(39, 1, 7, 7, 39, 'VN-636', '2022-10-10 09:10:00', '2022-10-10 11:45:00', 2, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(40, 1, 7, 8, 40, 'VN-637', '2022-10-10 20:55:00', '2022-10-10 22:15:00', 2, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(41, 1, 8, 9, 41, 'VN-638', '2022-10-10 09:10:00', '2022-10-10 11:45:00', 2, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(42, 1, 8, 10, 42, 'VN-639', '2022-10-10 20:55:00', '2022-10-10 22:15:00', 2, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(43, 1, 9, 6, 43, 'VN-640', '2022-10-10 09:10:00', '2022-10-10 11:45:00', 3, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(44, 1, 9, 8, 44, 'VN-641', '2022-10-10 20:55:00', '2022-10-10 22:15:00', 4, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(45, 1, 10, 5, 45, 'VN-642', '2022-10-10 09:10:00', '2022-10-10 11:45:00', 6, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(46, 1, 10, 6, 46, 'VN-643', '2022-10-10 20:55:00', '2022-10-10 22:15:00', 5, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(47, 1, 11, 8, 47, 'VN-644', '2022-10-10 09:10:00', '2022-10-10 11:45:00', 4, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(48, 1, 11, 9, 48, 'VN-645', '2022-10-10 20:55:00', '2022-10-10 22:15:00', 3, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(49, 1, 12, 2, 49, 'VN-646', '2022-10-10 09:10:00', '2022-10-10 11:45:00', 2, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(50, 1, 12, 6, 50, 'VN-647', '2022-10-10 20:55:00', '2022-10-10 22:15:00', 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `passenger`
--

CREATE TABLE `passenger` (
  `passenger_id` int(11) NOT NULL,
  `ticket_id` int(10) UNSIGNED NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `passenger_type` tinyint(2) UNSIGNED NOT NULL,
  `first_name` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `with_passenger` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` varchar(32) CHARACTER SET utf8 DEFAULT 'ARS.CODEDY',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `version` int(11) DEFAULT '1',
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `passenger`
--

INSERT INTO `passenger` (`passenger_id`, `ticket_id`, `gender`, `passenger_type`, `first_name`, `last_name`, `dob`, `with_passenger`, `created_by`, `created_at`, `updated_by`, `updated_at`, `version`, `deleted`) VALUES
(1, 8, 1, 1, 'Đình Hiếu', 'Nguyễn', '1996-08-08', '', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(2, 8, 2, 2, 'Khánh Vy', 'Phạm', '2010-06-25', '', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(3, 8, 1, 3, 'Thanh Tùng', 'Trần', '2022-01-02', 'Nguyễn Đình Hiếu', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(4, 7, 1, 1, 'Đình Hiếu', 'Nguyễn', '1996-08-08', '', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(5, 9, 2, 1, 'Thanh Tú', 'Trương', '1998-09-03', '', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(6, 10, 2, 1, 'Kiều Linh', 'Trần', '2000-01-01', '', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(7, 11, 2, 1, 'Thanh Mai', 'Phạm', '2001-06-02', '', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(8, 1, 1, 3, 'Đình Hiếu', 'Nguyễn', '1996-08-08', '', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(9, 2, 2, 2, 'Phương Thùy', 'Trần', '1996-08-08', '', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(10, 3, 1, 1, 'Đình Hiếu', 'Nguyễn', '1996-08-08', '', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(11, 4, 2, 2, 'Đình Hiếu', 'Nguyễn', '1996-08-08', '', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(12, 5, 1, 3, 'Đình Hiếu', 'Nguyễn', '1996-08-08', '', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(13, 6, 2, 2, 'Đình Hiếu', 'Nguyễn', '1996-08-08', '', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(14, 12, 2, 1, 'Cao Trung', 'Kiên', '1998-12-28', NULL, 'ARS.CODEDY', '2021-04-09 03:09:26', NULL, '2021-04-09 03:09:26', 1, 0),
(15, 13, 2, 1, 'Cao Trung', 'Kiên', '1998-12-28', NULL, 'ARS.CODEDY', '2021-04-09 03:16:41', NULL, '2021-04-09 03:16:41', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pay_type`
--

CREATE TABLE `pay_type` (
  `pay_type_id` int(11) NOT NULL,
  `name` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8_unicode_ci,
  `created_by` varchar(32) CHARACTER SET utf8 DEFAULT 'ARS.CODEDY',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `version` int(11) DEFAULT '1',
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `pay_type`
--

INSERT INTO `pay_type` (`pay_type_id`, `name`, `image`, `active`, `description`, `created_by`, `created_at`, `updated_by`, `updated_at`, `version`, `deleted`) VALUES
(1, 'Pay Later', 'pay-later.png', 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(2, 'VN Pay', 'vnpay.png', 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(3, 'MOMO', 'momo.png', 0, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(4, 'VISA', 'visa.png', 0, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(5, 'Master Card', 'mastercard.png', 0, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(6, 'JCB', 'jcb.png', 0, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `plane`
--

CREATE TABLE `plane` (
  `plane_id` int(11) NOT NULL,
  `code` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8_unicode_ci,
  `created_by` varchar(32) CHARACTER SET utf8 DEFAULT 'ARS.CODEDY',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `version` int(11) DEFAULT '1',
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `plane`
--

INSERT INTO `plane` (`plane_id`, `code`, `name`, `active`, `description`, `created_by`, `created_at`, `updated_by`, `updated_at`, `version`, `deleted`) VALUES
(1, 'B787', ' Boeing B787', 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(2, 'A350', ' Airbus A350', 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(3, 'A321', ' Airbus A321', 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(4, 'B737', ' Boeing B737', 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(5, 'B235', ' Boeing B235', 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(6, 'B198', ' Boeing B198', 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(7, 'B789', ' Boeing B789', 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(8, 'A456', ' Airbus B456', 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(9, 'A284', ' Airbus A284', 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(10, 'A365', ' Airbus A365', 0, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `price_seat_type`
--

CREATE TABLE `price_seat_type` (
  `price_seat_type_id` int(11) NOT NULL,
  `eco_price` int(16) UNSIGNED DEFAULT NULL,
  `eco_qty_remain` int(16) UNSIGNED DEFAULT NULL,
  `eco_qty_total` int(16) UNSIGNED DEFAULT NULL,
  `plus_price` int(16) UNSIGNED DEFAULT NULL,
  `plus_qty_remain` int(16) UNSIGNED DEFAULT NULL,
  `plus_qty_total` int(16) UNSIGNED DEFAULT NULL,
  `business_price` int(16) UNSIGNED DEFAULT NULL,
  `business_qty_remain` int(16) UNSIGNED DEFAULT NULL,
  `business_qty_total` int(16) UNSIGNED DEFAULT NULL,
  `created_by` varchar(32) CHARACTER SET utf8 DEFAULT 'ARS.CODEDY',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `version` int(11) DEFAULT '1',
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `price_seat_type`
--

INSERT INTO `price_seat_type` (`price_seat_type_id`, `eco_price`, `eco_qty_remain`, `eco_qty_total`, `plus_price`, `plus_qty_remain`, `plus_qty_total`, `business_price`, `business_qty_remain`, `business_qty_total`, `created_by`, `created_at`, `updated_by`, `updated_at`, `version`, `deleted`) VALUES
(1, 599000, 6, 290, 1299000, 125, 150, 1689000, 60, 80, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-04-09 03:16:41', 1, 0),
(2, 699000, 318, 318, 1569000, 196, 196, 1899000, 96, 96, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(3, 989000, 260, 265, 1689000, 0, 155, 2269000, 56, 85, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(4, 569000, 350, 365, 1399000, 156, 165, 1569000, 6, 120, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(5, 689000, 182, 230, 1889000, 2, 200, 1869000, 26, 100, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(6, 1099000, 0, 360, 1499000, 118, 120, 2199000, 80, 80, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(7, 1199000, 8, 290, 1549000, 125, 150, 2299000, 60, 80, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(8, 1299000, 318, 318, 1599000, 196, 196, 2399000, 96, 96, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(9, 1399000, 260, 265, 1649000, 0, 155, 2499000, 56, 85, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(10, 1499000, 350, 365, 1699000, 156, 165, 2599000, 6, 120, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(11, 1599000, 182, 230, 1699000, 2, 200, 2599000, 26, 100, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(12, 599000, 0, 360, 1199000, 118, 120, 1699000, 80, 80, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(13, 699000, 8, 290, 1399000, 125, 150, 1799000, 60, 80, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(14, 799000, 318, 318, 1299000, 196, 196, 1899000, 96, 96, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(15, 899000, 260, 265, 1399000, 0, 155, 1999000, 56, 85, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(16, 999000, 350, 365, 1449000, 156, 165, 2099000, 6, 120, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(17, 1099000, 182, 230, 1499000, 2, 200, 2199000, 26, 100, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(18, 1199000, 0, 360, 1549000, 118, 120, 2299000, 80, 80, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(19, 1299000, 8, 290, 1599000, 125, 150, 2399000, 60, 80, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(20, 1399000, 318, 318, 1649000, 196, 196, 2499000, 96, 96, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(21, 1499000, 260, 265, 1699000, 0, 155, 2599000, 56, 85, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(22, 1599000, 350, 365, 1699000, 156, 165, 2599000, 6, 120, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(23, 599000, 182, 230, 1199000, 2, 200, 1699000, 26, 100, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(24, 699000, 0, 360, 1399000, 118, 120, 1799000, 80, 80, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(25, 799000, 8, 290, 1299000, 125, 150, 1899000, 60, 80, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(26, 899000, 318, 318, 1399000, 196, 196, 1999000, 96, 96, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(27, 999000, 260, 265, 1449000, 0, 155, 2099000, 56, 85, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(28, 1099000, 350, 365, 1499000, 156, 165, 2199000, 6, 120, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(29, 1199000, 182, 230, 1549000, 2, 200, 2299000, 26, 100, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(30, 1299000, 0, 360, 1599000, 118, 120, 2399000, 80, 80, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(31, 1399000, 8, 290, 1649000, 125, 150, 2499000, 60, 80, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(32, 1499000, 318, 318, 1699000, 196, 196, 2599000, 96, 96, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(33, 1599000, 260, 265, 1699000, 0, 155, 2599000, 56, 85, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(34, 599000, 350, 365, 1199000, 156, 165, 1699000, 6, 120, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(35, 699000, 182, 230, 1399000, 2, 200, 1799000, 26, 100, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(36, 799000, 0, 360, 1299000, 118, 120, 1899000, 80, 80, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(37, 899000, 8, 290, 1399000, 125, 150, 1999000, 60, 80, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(38, 999000, 318, 318, 1449000, 196, 196, 2099000, 96, 96, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(39, 1099000, 260, 265, 1499000, 0, 155, 2199000, 56, 85, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(40, 1199000, 350, 365, 1549000, 156, 165, 2299000, 6, 120, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(41, 1299000, 182, 230, 1599000, 2, 200, 2399000, 26, 100, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(42, 1399000, 0, 360, 1649000, 118, 120, 2499000, 80, 80, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(43, 1499000, 8, 290, 1699000, 125, 150, 2599000, 60, 80, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(44, 1599000, 318, 318, 1749000, 196, 196, 2699000, 96, 96, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(45, 1699000, 260, 265, 1799000, 0, 155, 2799000, 56, 85, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(46, 1799000, 350, 365, 1849000, 156, 165, 2899000, 6, 120, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(47, 1899000, 182, 230, 1899000, 2, 200, 2999000, 26, 100, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(48, 1999000, 0, 360, 1949000, 118, 120, 3099000, 80, 80, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(49, 1899000, 182, 230, 1899000, 2, 200, 2999000, 26, 100, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(50, 1999000, 0, 360, 1949000, 118, 120, 3099000, 80, 80, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `promotion`
--

CREATE TABLE `promotion` (
  `promotion_id` int(11) NOT NULL,
  `code` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `discount` int(16) UNSIGNED NOT NULL,
  `qty_total` int(4) UNSIGNED NOT NULL,
  `qty_remain` int(4) UNSIGNED NOT NULL,
  `start_date` datetime NOT NULL,
  `expiration_date` datetime NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8_unicode_ci,
  `created_by` varchar(32) CHARACTER SET utf8 DEFAULT 'ARS.CODEDY',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `version` int(11) DEFAULT '1',
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `promotion`
--

INSERT INTO `promotion` (`promotion_id`, `code`, `title`, `discount`, `qty_total`, `qty_remain`, `start_date`, `expiration_date`, `active`, `description`, `created_by`, `created_at`, `updated_by`, `updated_at`, `version`, `deleted`) VALUES
(1, 'ABC123', 'Giảm giá tháng 8', 100000, 50, 28, '2022-08-08 00:00:00', '2022-08-30 00:00:00', 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(2, 'BAY888', 'Bay lắc tưng bừng', 256000, 100, 86, '2022-08-30 00:00:00', '2022-09-30 00:00:00', 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(3, 'LAX999', 'Giảm giá quốc khách 2/9', 209000, 30, 29, '2022-10-01 00:00:00', '2022-10-30 00:00:00', 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(4, 'HAHA96', 'Vừa bay vừa cười', 370000, 80, 60, '2022-11-15 00:00:00', '2022-11-25 00:00:00', 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(5, 'VIP5000', 'Giảm giá đặc biệt cho khách hàng VIP', 500000, 20, 18, '2022-12-10 00:00:00', '2022-12-30 00:00:00', 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(6, 'VIP5000', 'Giảm giá cuối năm', 699000, 50, 26, '2022-12-15 00:00:00', '2022-12-25 00:00:00', 0, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ticket`
--

CREATE TABLE `ticket` (
  `ticket_id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `flight_schedule_id` int(10) UNSIGNED NOT NULL,
  `promotion_id` int(10) UNSIGNED DEFAULT NULL,
  `pay_type_id` int(10) UNSIGNED NOT NULL,
  `extra_service_ids` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seat_type` tinyint(3) UNSIGNED NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `code` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `contact_gender` tinyint(1) NOT NULL,
  `contact_first_name` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `contact_last_name` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `contact_email` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `contact_phone` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `contact_address` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `total_price` int(16) UNSIGNED NOT NULL,
  `amount_paid` int(16) UNSIGNED NOT NULL DEFAULT '0',
  `total_passenger` int(16) UNSIGNED NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `created_by` varchar(32) CHARACTER SET utf8 DEFAULT 'ARS.CODEDY',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `version` int(11) DEFAULT '1',
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ticket`
--

INSERT INTO `ticket` (`ticket_id`, `user_id`, `flight_schedule_id`, `promotion_id`, `pay_type_id`, `extra_service_ids`, `seat_type`, `status`, `code`, `contact_gender`, `contact_first_name`, `contact_last_name`, `contact_email`, `contact_phone`, `contact_address`, `total_price`, `amount_paid`, `total_passenger`, `description`, `created_by`, `created_at`, `updated_by`, `updated_at`, `version`, `deleted`) VALUES
(1, 9, 18, NULL, 2, '', 1, 1, 'HIEUAB', 1, 'Đình Hiếu', 'Nguyễn', 'DinhHieu8896@gmail.com', '0868663316', 'Hà Nội', 6888999, 6888999, 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(2, 9, 20, NULL, 3, '', 2, 3, 'HIEUBC', 1, 'Đình Hiếu', 'Nguyễn', 'DinhHieu8896@gmail.com', '0868663317', 'Nghệ An', 6888999, 6888999, 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(3, 9, 23, NULL, 4, '', 3, 4, 'HIEUCD', 1, 'Đình Hiếu', 'Nguyễn', 'DinhHieu8896@gmail.com', '0868663318', 'Hà Nội', 6888999, 6888999, 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(4, 9, 26, NULL, 5, '', 1, 3, 'HIEUDE', 1, 'Đình Hiếu', 'Nguyễn', 'DinhHieu8896@gmail.com', '0868663319', 'tp Vinh, Nghệ An', 6888999, 6888999, 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(5, 9, 28, NULL, 6, '', 2, 2, 'HIEUEF', 1, 'Đình Hiếu', 'Nguyễn', 'DinhHieu8896@gmail.com', '0868663320', 'Hà Nội', 6888999, 6888999, 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(6, 9, 29, NULL, 5, '', 3, 1, 'HIEUGH', 1, 'Đình Hiếu', 'Nguyễn', 'DinhHieu8896@gmail.com', '0868663321', 'Nghệ An', 6888999, 6888999, 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(7, 9, 10, NULL, 4, '', 3, 2, 'HIEU88', 1, 'Đình Hiếu', 'Nguyễn', 'DinhHieu8896@gmail.com', '0868663315', 'tp Vinh, Nghệ An', 3099000, 3099000, 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(8, 9, 1, 1, 5, '1,3', 2, 4, 'HIEUOK', 1, 'Đình Hiếu', 'Nguyễn', 'DinhHieu8896@gmail.com', '0868663315', 'tp Vinh, Nghệ An', 4637000, 4637000, 3, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(9, 8, 6, NULL, 3, '', 1, 1, 'TUDEMO', 1, 'Thanh Tú', 'Trương', 'DinhHieu8896@gmail.com', '0868663315', 'Hà Nội', 2699000, 2699000, 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(10, NULL, 1, NULL, 2, '', 2, 3, 'DEMO01', 0, 'Kiều Linh', 'Trần', 'DinhHieu8896@gmail.com', '0868663315', 'Hà Nội', 1799000, 1799000, 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(11, NULL, 9, NULL, 1, '', 3, 2, 'DEMO02', 0, 'Thanh Mai', 'Phạm', 'DinhHieu8896@gmail.com', '0868663315', 'Hà Nội', 2999000, 2999000, 1, '<p>mô tả</p>', 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(12, NULL, 1, NULL, 2, '', 1, 1, 'KQADBZ', 2, 'Cao Trung', 'Kiên', 'caothitrungkienhluk41@gmail.com', '0967252349', '65b Tôn Đức Thắng', 1099000, 0, 1, NULL, 'ARS.CODEDY', '2021-04-09 03:09:26', NULL, '2021-04-09 03:09:26', 1, 0),
(13, NULL, 1, NULL, 2, '', 1, 3, 'A0WTXD', 2, 'Cao Trung', 'Kiên', 'caothitrungkienhluk41@gmail.com', '0967252349', '65b Tôn Đức Thắng', 1099000, 1099000, 1, 'Vé được thanh toán bằng VNPay (Demo test mới ghi thế này thôi. Ahihi)', 'ARS.CODEDY', '2021-04-09 03:16:41', NULL, '2021-04-09 03:19:53', 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `level` tinyint(3) UNSIGNED NOT NULL DEFAULT '3',
  `email_verified_at` datetime DEFAULT NULL,
  `verification_code` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` tinyint(1) NOT NULL,
  `first_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `phone` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `loyalty_number` int(8) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0',
  `created_by` varchar(32) CHARACTER SET utf8 DEFAULT 'ARS.CODEDY',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `version` int(11) DEFAULT '1',
  `deleted` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `email`, `password`, `level`, `email_verified_at`, `verification_code`, `reset_password_code`, `remember_token`, `image`, `gender`, `first_name`, `last_name`, `dob`, `phone`, `address`, `loyalty_number`, `active`, `created_by`, `created_at`, `updated_by`, `updated_at`, `version`, `deleted`) VALUES
(9, 'Hieu-iceTea', 'DinhHieu8896@gmail.com', '$2y$10$//Od0OmEqRwFepW3wynrYOwslyvaS.snzBbpWwskF1Zrg5fNI.eTe', 3, '2022-08-08 00:00:00', NULL, '6091022c0f8f9', 'WLv15v0rChoMflirpszHhLJdZJ2nTqlRGgc1prgFnIkjyHPyrNuG5urWJDWw', 'Hieu-iceTea.jpg', 1, 'Đình Hiếu', 'Nguyễn', '1996-08-08', '0868663315', 'Nghệ An', 123456, 1, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-05-04 19:13:32', 1, 0),
(8, 'truong-thanh-tu', 'TruongThanhTu03091998@gmail.com', '$2y$10$//Od0OmEqRwFepW3wynrYOwslyvaS.snzBbpWwskF1Zrg5fNI.eTe', 3, '2022-08-08 00:00:00', NULL, NULL, NULL, 'truong-thanh-tu.jpg', 1, 'Thanh Tú', 'Trương', '1998-09-03', '0359077335', 'Huế', 123456, 0, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(7, 'chanhoa', 'ChanHoa28112k@gmail.com', '$2y$10$//Od0OmEqRwFepW3wynrYOwslyvaS.snzBbpWwskF1Zrg5fNI.eTe', 3, '2022-08-08 00:00:00', NULL, NULL, NULL, 'chanhoa.jpg', 2, 'Chan Hòa', 'Đỗ Thị', '2000-01-01', '0981159826', '', 123456, 1, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(6, 'vuquanghuy2001', 'VuQuangHuyXL1234@gmail.com', '$2y$10$//Od0OmEqRwFepW3wynrYOwslyvaS.snzBbpWwskF1Zrg5fNI.eTe', 3, '2022-08-08 00:00:00', NULL, NULL, NULL, 'vuquanghuy2001.jpg', 1, 'Quang Huy', 'Vũ', '2000-01-01', '0981159826', '', 123456, 1, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(5, 'tuanpth1909', 'PhamTuanCules20@gmail.com', '$2y$10$//Od0OmEqRwFepW3wynrYOwslyvaS.snzBbpWwskF1Zrg5fNI.eTe', 3, '2022-08-08 00:00:00', NULL, NULL, NULL, 'tuanpth1909.jpg', 1, 'Tuân', 'Phạm', '2000-01-01', '0382548442', '', 123456, 1, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(4, 'Host', 'DinhHieu8896@gmail.com', '$2y$10$oW..IGNT/CH2muKpN/8LAuNJ1ahnwLoyCBWRQyBj4p6ITOJFb.gs2', 1, '2022-08-08 00:00:00', NULL, '6091022c0f8f9', 'MWy3zwV2OD1B62rarD8SEgUUf3X6Xf3QccoEXWJdoYGuYu0R1zzK30cDj5l2', 'logo_host.png', 1, 'Đình Hiếu', 'Nguyễn', '1996-08-08', '032 87 99 000', 'Hà Nội', NULL, 1, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-05-04 19:13:32', 1, 0),
(3, 'Admin', 'ars.codedy@gmail.com', '$2y$10$/AmOQGhkVS8otOSJbAv.6OHxseW/AOdVw7wxNbopMHgy0Btbp3Anu', 2, '2022-08-08 00:00:00', NULL, NULL, NULL, 'logo_admin.gif', 1, 'Đình Hiếu', 'Nguyễn', '1996-08-08', '0868 6633 15', 'Nghệ An', NULL, 1, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-02-25 20:10:44', 1, 0),
(2, 'Member', 'DinhHieu8896@gmail.com', '$2y$10$//Od0OmEqRwFepW3wynrYOwslyvaS.snzBbpWwskF1Zrg5fNI.eTe', 3, '2022-08-08 00:00:00', NULL, '6091022c0f8f9', NULL, 'logo_member.png', 1, 'Đình Hiếu', 'Nguyễn', '1996-08-08', '0868 6633 15', 'Nghệ An', NULL, 1, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-05-04 19:13:32', 1, 0),
(1, 'Admin_Demo', 'DinhHieu8896@gmail.com', '$2y$10$//Od0OmEqRwFepW3wynrYOwslyvaS.snzBbpWwskF1Zrg5fNI.eTe', 2, '2022-08-08 00:00:00', NULL, '6091022c0f8f9', NULL, 'logo_admin.gif', 1, 'Đình Hiếu', 'Nguyễn', '1996-08-08', '0868 6633 15', 'Nghệ An', NULL, 1, 'ARS.CODEDY', '2021-02-25 20:10:44', NULL, '2021-05-04 19:13:32', 1, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `airport`
--
ALTER TABLE `airport`
  ADD PRIMARY KEY (`airport_id`);

--
-- Chỉ mục cho bảng `extra_service`
--
ALTER TABLE `extra_service`
  ADD PRIMARY KEY (`extra_service_id`);

--
-- Chỉ mục cho bảng `flight_schedule`
--
ALTER TABLE `flight_schedule`
  ADD PRIMARY KEY (`flight_schedule_id`);

--
-- Chỉ mục cho bảng `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`passenger_id`);

--
-- Chỉ mục cho bảng `pay_type`
--
ALTER TABLE `pay_type`
  ADD PRIMARY KEY (`pay_type_id`);

--
-- Chỉ mục cho bảng `plane`
--
ALTER TABLE `plane`
  ADD PRIMARY KEY (`plane_id`);

--
-- Chỉ mục cho bảng `price_seat_type`
--
ALTER TABLE `price_seat_type`
  ADD PRIMARY KEY (`price_seat_type_id`);

--
-- Chỉ mục cho bảng `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`promotion_id`);

--
-- Chỉ mục cho bảng `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `airport`
--
ALTER TABLE `airport`
  MODIFY `airport_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `extra_service`
--
ALTER TABLE `extra_service`
  MODIFY `extra_service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `flight_schedule`
--
ALTER TABLE `flight_schedule`
  MODIFY `flight_schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `passenger`
--
ALTER TABLE `passenger`
  MODIFY `passenger_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `pay_type`
--
ALTER TABLE `pay_type`
  MODIFY `pay_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `plane`
--
ALTER TABLE `plane`
  MODIFY `plane_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `price_seat_type`
--
ALTER TABLE `price_seat_type`
  MODIFY `price_seat_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `promotion`
--
ALTER TABLE `promotion`
  MODIFY `promotion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
