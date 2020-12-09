-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 09, 2020 lúc 04:51 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tour`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `activity`
--

CREATE TABLE `activity` (
  `activity_id` bigint(20) UNSIGNED NOT NULL,
  `activity_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `activity_detail`
--

CREATE TABLE `activity_detail` (
  `ad_begin` date NOT NULL,
  `ad_end` date NOT NULL,
  `tour` bigint(20) UNSIGNED NOT NULL,
  `activity` bigint(20) UNSIGNED NOT NULL,
  `location` bigint(20) UNSIGNED NOT NULL,
  `date` bigint(20) UNSIGNED NOT NULL,
  `session` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bookingticket`
--

CREATE TABLE `bookingticket` (
  `booking_ticket_id` bigint(20) UNSIGNED NOT NULL,
  `booking_ticket_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booking_ticket_time` date NOT NULL,
  `booking_ticket_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tour_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_age` int(11) NOT NULL,
  `customer_gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nation_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `date`
--

CREATE TABLE `date` (
  `date_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dish`
--

CREATE TABLE `dish` (
  `dish_id` bigint(20) UNSIGNED NOT NULL,
  `dish_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dish_disc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `district`
--

CREATE TABLE `district` (
  `id` int(10) UNSIGNED NOT NULL,
  `_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_prefix` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_province_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `eat`
--

CREATE TABLE `eat` (
  `price` int(11) NOT NULL,
  `restaurant_id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `dish_id` bigint(20) UNSIGNED NOT NULL,
  `session_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hotel`
--

CREATE TABLE `hotel` (
  `hotel_id` bigint(20) UNSIGNED NOT NULL,
  `hotel_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotel_tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotel_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `location`
--

CREATE TABLE `location` (
  `location_id` bigint(20) UNSIGNED NOT NULL,
  `location_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu`
--

CREATE TABLE `menu` (
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `menu_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_11_09_125824_table_tour_type', 1),
(4, '2020_11_09_125855_table_promo', 1),
(5, '2020_11_09_125917_table_tour', 1),
(6, '2020_11_09_130148_table_transport', 1),
(7, '2020_11_09_130602_table_nation', 1),
(8, '2020_11_09_130620_table_location', 1),
(9, '2020_11_09_130640_table_customer', 1),
(10, '2020_11_09_130737_table_staff', 1),
(11, '2020_11_09_130933_table_position', 1),
(12, '2020_11_09_131018_table_booking_ticket', 1),
(13, '2020_11_09_131242_table_receipt', 1),
(14, '2020_11_09_131309_table_hotel', 1),
(15, '2020_11_09_131347_table_restaurant', 1),
(16, '2020_11_09_131406_table_dish', 1),
(17, '2020_11_09_131423_table_menu', 1),
(18, '2020_11_09_131437_table_date', 1),
(19, '2020_11_09_131506_table_session', 1),
(20, '2020_11_09_131532_table_activity', 1),
(21, '2020_11_09_131601_table_transport_detail', 1),
(22, '2020_11_09_131640_table_position_detail', 1),
(23, '2020_11_09_131745_table_activity_detail', 1),
(24, '2020_11_09_131816_table_eat', 1),
(25, '2020_11_09_131830_table_stay', 1),
(26, '2020_11_21_055714_create_district_table', 1),
(27, '2020_11_21_055714_create_province_table', 1),
(28, '2020_11_21_055714_create_street_table', 1),
(29, '2020_11_21_055714_create_ward_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nation`
--

CREATE TABLE `nation` (
  `nation_id` bigint(20) UNSIGNED NOT NULL,
  `nation_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `position`
--

CREATE TABLE `position` (
  `position_id` bigint(20) UNSIGNED NOT NULL,
  `position_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `position_detail`
--

CREATE TABLE `position_detail` (
  `pd_begin_date` date NOT NULL,
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `position_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `promo`
--

CREATE TABLE `promo` (
  `promo_id` bigint(20) UNSIGNED NOT NULL,
  `promo_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promo_begin` date NOT NULL,
  `promo_end` date NOT NULL,
  `promo_detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `promo`
--

INSERT INTO `promo` (`promo_id`, `promo_name`, `promo_begin`, `promo_end`, `promo_detail`, `created_at`, `updated_at`) VALUES
(1, 'TẶNG MIỄN PHÍ BẢO HIỂM DU LỊCH NỘI ĐỊA', '2020-12-25', '2021-01-07', '<span style=\"font-family: Montserrat, &quot;Open Sans&quot;, sans-serif; font-size: 14px;\">Công ty TNHH Một Thành Viên Dịch vụ Lữ hành thực hiện chương trình TẶNG MIỄN PHÍ BẢO HIỂM DU LỊCH NỘI ĐỊA&nbsp;dành cho tất cả du khách của Công ty và các chi nhánh trực thuộc tham gia tour trọn gói trên tất cả các tuyến du lịch nội địa,&nbsp;khởi hành trên toàn quốc, với mức bảo hiểm tối đa lên đến 150.000.000 VNĐ/khách/vụ.&nbsp;</span>', '2020-12-01 08:41:05', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `province`
--

CREATE TABLE `province` (
  `id` int(10) UNSIGNED NOT NULL,
  `_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `receipt`
--

CREATE TABLE `receipt` (
  `receipt_id` bigint(20) UNSIGNED NOT NULL,
  `receipt_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receipt_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receipt_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `booking_ticket_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `restaurant`
--

CREATE TABLE `restaurant` (
  `restaurant_id` bigint(20) UNSIGNED NOT NULL,
  `restaurant_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `restaurant_tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `restaurant_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `session`
--

CREATE TABLE `session` (
  `session_id` bigint(20) UNSIGNED NOT NULL,
  `session_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `staff`
--

CREATE TABLE `staff` (
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `staff_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_age` int(11) NOT NULL,
  `staff_gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `stay`
--

CREATE TABLE `stay` (
  `tour_id` bigint(20) UNSIGNED NOT NULL,
  `hotel_id` bigint(20) UNSIGNED NOT NULL,
  `date_id` bigint(20) UNSIGNED NOT NULL,
  `location_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `street`
--

CREATE TABLE `street` (
  `id` int(10) UNSIGNED NOT NULL,
  `_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_prefix` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_province_id` int(10) UNSIGNED DEFAULT NULL,
  `_district_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour`
--

CREATE TABLE `tour` (
  `tour_id` bigint(20) UNSIGNED NOT NULL,
  `tour_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tour_price` int(11) NOT NULL,
  `tour_seat` int(11) NOT NULL,
  `tour_start_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tour_end_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tour_begin` date NOT NULL,
  `tour_end` date NOT NULL,
  `tour_picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tour_avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tour_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tour_policies` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tour_type_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tour`
--

INSERT INTO `tour` (`tour_id`, `tour_name`, `tour_price`, `tour_seat`, `tour_start_location`, `tour_end_location`, `tour_begin`, `tour_end`, `tour_picture`, `tour_avatar`, `tour_description`, `tour_policies`, `tour_type_id`, `created_at`, `updated_at`) VALUES
(3, 'DU LỊCH ĐÀ LẠT - DAMBRI - ĐƯỜNG HẦM ĐIÊU KHẮC - LANGBIANG', 5000000, 30, 'Thành phố Hồ Chí Minh', 'Đà Lạt', '2020-12-16', '2020-12-21', 'destination-4.jpg', 'destination-4.jpg', '<p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif; text-align: justify;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">NGÀY&nbsp;01: TP.HCM - ĐÀ LẠT (Ăn sáng, trưa, chiều)</span><br style=\"outline: 0px; margin: 0px; padding: 0px;\">Đón quý khách tại văn phòng Lữ hành&nbsp;Saigontourist (lúc 06h00 sáng tại 45 Lê Thánh Tôn, Quận 1 hoặc lúc 06h30 sáng tại số 1 Nguyễn Chí Thanh, Quận 5), khởi hành đi Đà Lạt. Trên đường tham quan&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">thác Dambri</span>&nbsp;- ngọn thác hùng vĩ tại cao nguyên Bảo Lộc. Đến Đà Lạt tham quan&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Quảng trường Lâm Viên&nbsp;</span>với không gian rộng lớn, thoáng mát hướng ra hồ Xuân Hương cùng công trình nghệ thuật khối bông hoa dã quỳ và khối nụ hoa Atiso khổng lồ được thiết kế bằng kính màu rất đẹp mắt. Du khách nhận phòng. Tối tự do dạo thành phố Đà Lạt về đêm, thưởng thức nhịp sống phố núi. Nghỉ đêm tại Đà Lạt.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif; text-align: center;\"><img alt=\"\" src=\"https://saigontourist.net/uploads/destination/TrongNuoc/Dalat/Lam-Vien-Square-dalat_412752700.jpg\" style=\"outline: 0px; margin: 0px; padding: 0px; border: 0px; width: 870px;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Quảng trường Lâm Viên</span></p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif; text-align: justify;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">NGÀY&nbsp;02: THAM QUAN ĐÀ LẠT&nbsp;(Ăn sáng, trưa, chiều)</span><br style=\"outline: 0px; margin: 0px; padding: 0px;\">Buổi sáng, quý khách tham quan<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">&nbsp;Nông Trại Cún Puppy Farm</span>&nbsp;với các chú cún từ nhỏ đến lớn được chăm sóc cẩn thận thật đáng yêu, tham quan khu vườn thủy canh trong nhà. Tiếp theo, quý khách đến với&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Khu du lịch&nbsp;Dalat Fairytale Land &amp; Hầm Rượu Vang Vĩnh Tiến,&nbsp;</span>tham quan khu vườn cổ tích đầy màu sắc của những chú lùn nằm trong nhà máy sản xuất rượu vang Vĩnh Tiến, tìm hiểu quy trình sản xuất trà thảo dược, rượu vang, Đông Trùng Hạ Thảo và khám phá đường hầm Rượu vang đặc sắc. Buổi chiều, đoàn tham quan&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Đường hầm điêu khắc đất đỏ (Đà Lạt Star)</span>&nbsp;- tái hiện lịch sử Đà Lạt qua hơn 120 năm và Hồ vô cực - nơi tình yêu bắt đầu. Viếng&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Thiền Viện Trúc Lâm</span>. Nghỉ đêm tại Đà Lạt.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif; text-align: center;\"><img alt=\"\" src=\"https://saigontourist.net/uploads/destination/TrongNuoc/Dalat/house-of-clay-Dalat_503121469.jpg\" style=\"outline: 0px; margin: 0px; padding: 0px; border: 0px; width: 870px;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Đường hầm điêu khắc đất đỏ (Đà Lạt Star)</span></p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif; text-align: justify;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">NGÀY&nbsp;03: THAM QUAN ĐÀ LẠT&nbsp;(Ăn sáng, trưa, chiều)</span><br style=\"outline: 0px; margin: 0px; padding: 0px;\">Buổi sáng, xe đưa quý khách đến với&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Khu du lịch&nbsp;Langbiang</span>&nbsp;- tham quan&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">đồi Mimosa</span>,&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">thung lũng Trăm Năm</span>, chinh phục&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">núi Langbiang</span>&nbsp;(tự túc phí xe Jeep). Tham quan&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Gallery La Chocotea</span>&nbsp;khám phá quy trình tạo hình chocolate độc đáo và chiêm ngưỡng các tác phẩm nghệ thuật làm từ chocolate. Buổi chiều, quý khách đến tham quan&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Nhà ga Đà Lạt&nbsp;</span>- ga lâu đời nhất Đông Dương. Thăm nhà thờ&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Domain de Marie</span>. Mua sắm đặc sản tại<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">&nbsp;chợ Đà Lạt.</span>&nbsp;Buổi tối tự do dạo phố. Nghỉ đêm tại Đà Lạt.<br style=\"outline: 0px; margin: 0px; padding: 0px;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Lựa chọn: Tham dự đêm giao lưu văn hóa cồng chiêng với người dân tộc Tây Nguyên và uống rượu Cần (chi phí tự túc).</span></p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif; text-align: center;\"><img alt=\"\" src=\"https://saigontourist.net/uploads/destination/TrongNuoc/Dalat/Domaine-de-Marie-church-Da-Lat.jpg\" style=\"outline: 0px; margin: 0px; padding: 0px; border: 0px; width: 870px;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">nhà thờ</span>&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Domain de Marie</span></p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif; text-align: justify;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">NGÀY&nbsp;04: ĐÀ LẠT - TP.HCM (Ăn sáng, trưa)</span><br style=\"outline: 0px; margin: 0px; padding: 0px;\">Sau bữa sáng, quý khách trả phòng, khởi hành về TP.HCM. Ngang qua Làng hoa Vạn Thành, đi về hướng Tà Nung, quý khách dừng chân thưởng thức trà và cà phê tại&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Cà phê Mê Linh (tự túc chi phí)</span>&nbsp;- quán cà phê chồn sở hữu cảnh quan thiên nhiên hùng vĩ hiếm có tại Đà Lạt. Ngắm nhìn không gian bạt ngàn rẫy cà phê. Tham quan chuồng trại nuôi chồn, xưởng sản xuất và tìm hiểu về cách thức để làm ra cà phê chồn đúng chất. Về đến thị trấn Nam Ban, đoàn viếng&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Linh Ẩn tự</span>&nbsp;- ngôi chùa tọa lạc yên bình trên ngọn đồi cao, phía sau được bao bọc bởi rừng thông bạt ngàn, phía trước là thác Voi ngày đêm tuôn chảy tạo nên một vị thế đắc địa “tọa sơn ngoạ thủy”. Quý khách chiêm bái tượng Phật Di Lặc lớn nhất tỉnh Lâm Đồng và tượng Phật Bà Quan Âm cao nhất Việt Nam. Về tới TP.HCM, đưa quý khách về văn phòng Lữ hành Saigontourist. Kết thúc chương trình.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif; text-align: center;\"><img alt=\"\" src=\"https://saigontourist.net/uploads/destination/TrongNuoc/Dalat/linh-an%20tu_140750584.jpg\" style=\"outline: 0px; margin: 0px; padding: 0px; border: 0px; width: 870px;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Linh Ẩn tự</span></p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif; text-align: justify;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Ghi chú:</span><br style=\"outline: 0px; margin: 0px; padding: 0px;\">* Ăn sáng tại khách sạn có thể đổi thành hình thức Tô + Ly<br style=\"outline: 0px; margin: 0px; padding: 0px;\">* Điểm tham quan có thể sắp xếp lại cho phù hợp mà vẫn bảo đảm đầy đủ nội dung của từng chương trình.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">* Để thực hiện đúng quy định của Chính phủ, Quý khách vui lòng khai báo y tế và thực hiện các biện pháp phòng chống dịch trong suốt chuyến đi.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">* Trường hợp điểm tham quan Puppy Fram chưa mở cửa phục vụ sẽ được thay thế bằng điểm tham quan KDL Trang trại Rau &amp; Hoa.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif; text-align: justify;\"><span style=\"font-weight: 700; text-align: left;\">Copyright from SaigonTourist</span><br></p>', '<p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">* Giá tour bao gồm:&nbsp;&nbsp;</span><br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Chi phí xe máy lạnh phục vụ theo chương trình.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Chi phí ăn – uống theo chương trình.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Chi phí khách sạn&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">tiêu chuẩn&nbsp;</span>2 khách/phòng,&nbsp;lẻ khác ngủ giường phụ hoặc chịu&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">chi phí phụ thu phòng đơn:<br style=\"outline: 0px; margin: 0px; padding: 0px;\">Khởi hành tháng 11:&nbsp;+ 800.000 đ/ khách/ tour.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">Khởi hành tháng 12:&nbsp;+ 1.200.000 đ/ khách/ tour.</span><br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Chi phí tham quan, hướng dẫn viên tiếng Việt<br style=\"outline: 0px; margin: 0px; padding: 0px;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">- Quà&nbsp;</span><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">tặng</span>:&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Nón,&nbsp;</span><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">nước suối, khăn lạn</span><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">h, viết…</span></p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">* Giá tour không bao gồm:&nbsp;&nbsp;</span><br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Ăn uống ngoài chương trình, giặt ủi, điện thoại và các chi phí cá nhân|<br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Chi phí giao lưu văn hóa cồng chiêng<br style=\"outline: 0px; margin: 0px; padding: 0px;\">-&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Chi phí phụ thu phòng đơn:&nbsp;<br style=\"outline: 0px; margin: 0px; padding: 0px;\">Khởi hành tháng 11:&nbsp;+ 800.000 đ/ khách/ tour.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">Khởi hành tháng 12:&nbsp;+ 1.200.000 đ/ khách/ tour.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Phụ thu khách nước ngoài&nbsp;</span>:&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">+ 250.000&nbsp;đ/ khách</span></p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">THÔNG TIN HƯỚNG DẪN</span></p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">* Vé trẻ em:&nbsp;&nbsp;</span><br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Vé tour: Trẻ em từ 6 đến 11 tuổi mua một nửa giá vé người lớn, trẻ em trên 11 tuổi mua vé như người lớn.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Đối với trẻ em dưới 6 tuổi, gia đình tự lo cho bé ăn ngủ và tự trả phí tham quan (nếu có). Hai người lớn chỉ được kèm một trẻ em. Từ trẻ thứ 2 trở lên, mỗi em phải 50% giá vé người lớn.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">-&nbsp;Tiêu chuẩn 50% giá tour bao gồm: Suất ăn, ghế ngồi và ngủ ghép chung với gia đình.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">* Hành lý và giấy tờ tùy thân:&nbsp;&nbsp;</span><br style=\"outline: 0px; margin: 0px; padding: 0px;\">-&nbsp;Du khách mang theo giấy CMND hoặc Hộ chiếu. Đối với du khách là Việt kiều, Quốc tế nhập cảnh Việt Nam bằng visa rời, vui lòng mang theo visa khi đăng ký và đi tour.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">-&nbsp;Khách lớn tuổi (từ 70 tuổi trở lên), khách tàn tật tham gia tour, phải có thân nhân đi kèm và cam kết đảm bảo đủ sức khỏe khi tham gia tour du lịch.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">-&nbsp;Trẻ em dưới 14 tuổi khi đi tour phải mang theo Giấy khai sinh hoặc Hộ chiếu. Trẻ em từ 14 tuổi trở lên phải mang theo giấy CMND hoặc Hộ chiếu riêng<br style=\"outline: 0px; margin: 0px; padding: 0px;\">-&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Tất cả giấy tờ tùy thân mang theo đều phải bản chính</span><br style=\"outline: 0px; margin: 0px; padding: 0px;\">-&nbsp;Du khách mang theo hành lý gọn nhẹ và phải tự bảo quản hành lý, tiền bạc, tư trang trong suốt thời gian đi du lịch.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">-&nbsp;Khách Việt Nam ở cùng phòng với khách Quốc tế&nbsp; hoặc Việt kiều yêu cầu phải có giấy hôn thú.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">* Trường hợp hủy vé tour, du khách vui lòng thanh toán các khoản lệ phí hủy tour như sau:</span><br style=\"outline: 0px; margin: 0px; padding: 0px;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">a) Đối với ngày thường:</span><br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Du khách chuyển đổi tour sang ngày khác và báo trước ngày khởi hành trước 7 ngày sẽ không chịu phí (không áp dụng các tour IKO, tour KS 4- 5 sao), nếu trễ hơn sẽ căn cứ theo qui định hủy phạt phía dưới và chỉ được chuyển ngày khởi hành tour một (1) lần.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">-&nbsp;Hủy vé trong vòng 24 giờ hoặc ngay ngày khởi hành, chịu phạt 90% tiền tour.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">-&nbsp;Hủy vé trước ngày khởi hành từ 2 - 4 ngày, chịu phạt 50% tiền tour.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">-&nbsp;Hủy vé trước ngày khởi hành từ 5 - 7 ngày, chịu phạt 30% tiền tour.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">-&nbsp;Hủy vé trước ngày khởi hành 7 ngày, chịu phạt 10% tiền tour.<br style=\"outline: 0px; margin: 0px; padding: 0px;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">b) Đối với dịp Lễ, Tết:</span><br style=\"outline: 0px; margin: 0px; padding: 0px;\">-&nbsp;Khách chuyển đổi tour sang ngày khác và báo trước ngày khởi hành trước 15 ngày sẽ không chịu phí (không áp dụng các tour KS 4- 5 sao), nếu trễ hơn sẽ căn cứ theo qui định hủy phạt phía dưới và chỉ được chuyển ngày khởi hành tour 1 lần.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">-&nbsp;Hủy vé trong vòng 24 giờ hoặc ngay ngày khởi hành, chịu phạt 100% tiền tour.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">-&nbsp;Hủy vé trước ngày khởi hành từ 2 - 7 ngày, chịu phạt 80% tiền tour.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">-&nbsp;Hủy vé trước ngày khởi hành từ 8 - 15 ngày, chịu phạt 50% tiền tour.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">-&nbsp;Hủy vé trước ngày khởi hành 15 ngày, chịu phạt 20% tiền tour.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif;\">c)&nbsp;Sau khi hủy tour, du khách vui lòng đến nhận tiền trong vòng 15 ngày kể từ ngày kết thúc tour. Chúng tôi chỉ&nbsp; thanh toán trong khỏang thời gian nói trên.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif;\">d) Trường hợp hủy tour do sự cố khách quan như thiên tai, dịch bệnh hoặc do tàu thủy, xe lửa, máy bay hoãn/hủy chuyến, Saigontourist sẽ không chịu trách nhiệm bồi thường thêm bất kỳ chi phí nào khác ngoài việc hoàn trả chi phí những dịch vụ chưa được sử dụng của tour đó</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">* Ghi chú khác:</span><br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Công ty xuất hóa đơn cho du khách có nhu cầu (Trong thời hạn 7 ngày sau khi kết thúc chương trình du lịch). Du khách được chọn một trong những chương trình khuyến mãi dành cho khách lẻ định kỳ (Nếu có).<br style=\"outline: 0px; margin: 0px; padding: 0px;\">-&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Du khách có mặt tại điểm đón trước 15 phút. Du khách đến trễ khi xe đã khởi hành hoặc hủy tour không báo trước vui lòng chịu phí như ‘hủy vé ngay ngày khởi hành\'.</span></p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Copyright from SaigonTourist</span></p>', 6, '2020-12-07 01:31:22', NULL),
(5, 'DU LỊCH TẾT TÂN SỬU 2021 BUÔN MA THUỘT - ĐÀ LẠT [MÙNG 2 TẾT]', 5000000, 30, 'Thành phố Cần Thơ', 'Buôn Ma Thuột - Đà Lạt - Tây Nguyên', '2021-02-13', '2021-02-17', 'destination-12.jpg', 'destination-12.jpg', '<p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif; text-align: justify;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Đêm 01: CẦN THƠ – BUÔN MA THUỘT (Ăn khuya)</span><br style=\"outline: 0px; margin: 0px; padding: 0px;\">19h00&nbsp;Xe và hướng dẫn viên đón khách tại văn phòng Chi nhánh Lữ hành Saigontourist Cần Thơ và khởi hành đi Buôn Ma Thuột. Đoàn ăn nhẹ trên đường đi và<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">&nbsp;</span>nghỉ đêm trên xe.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif; text-align: center;\"><img alt=\"\" src=\"https://saigontourist.net/uploads/destination/TrongNuoc/BMT/Victory-monument-BuonMaThuot_418039690.jpg\" style=\"outline: 0px; margin: 0px; padding: 0px; border: 0px; width: 870px;\"></p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif; text-align: center;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Thành phố Buôn Ma Thuột</span></p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif; text-align: justify;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Ngày 01: THAM QUAN BUÔN MA THUỘT (Ăn ba bữa)&nbsp;</span><br style=\"outline: 0px; margin: 0px; padding: 0px;\">06h30 Đoàn dùng điểm tâm sáng tại nhà hàng.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">09h30 Đến Buôn Ma Thuột dừng tham quan&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Thác D’ray Nur</span>&nbsp;- Cách trung tâm Tp. Buôn Ma Thuột khoảng 25km về phía nam, là một ngọn thác hùng vĩ và thơ mộng cũng không kém phần bí ẩn của mảnh đất Tây Nguyên. Thác có chiều dài 250m, đổ từ độ cao 30m xuống vực sâu tạo nên một bức tranh thiên nhiên tuyệt đẹp.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">12h00 &nbsp;Đoàn dùng cơm trưa tại nhà hàng.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">14h00 Nhận phòng khách sạn nghỉ ngơi&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">(Nhận phòng sớm nếu có)</span><br style=\"outline: 0px; margin: 0px; padding: 0px;\">Chiều Đoàn khởi hành đến&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Khu du lịch Buôn Đôn</span>&nbsp;– đến đây quý khách thử cảm giác phiêu lưu khi chinh phục hệ thống&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Cầu Treo dài hơn 1km</span>&nbsp;được bắt trên những sàn si, tham quan&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Thác Bảy Nhánh,…</span>&nbsp;Quý khách tự do tham quan trong khu du lịch . Trải nghiệm cảm giác thú vị khi ngồi trên lưng những Chú voi Bản Đôn vượt Sông Serepok&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">(Chi phí cưỡi voi tự túc)</span>. Sau đó quý khách di chuyển tham quan&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Nhà sàn Cổ trên 120 tuổi</span>&nbsp;một nét kiến trúc độc đáo của Người Lào,&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Khu lăng mộ vua săn voi Khun Yu Nốp</span>…<br style=\"outline: 0px; margin: 0px; padding: 0px;\">17h00&nbsp;Đoàn dùng cơm chiều tại nhà hàng với với những món ăn mang đậm hương vị của núi rừng Tây Nguyên như&nbsp;:&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Cơm lam</span>,&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Heo rừng nướng ống tre, gà nướng mật ong, rau rừng luộc, gỏi cà đắng cá khô…</span>&nbsp;<br style=\"outline: 0px; margin: 0px; padding: 0px;\">Buổi tối Qúy khách tự do khám phá TP Buôn Ma Thuột huyền ảo về đêm.&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Nghỉ đêm tại Buôn Ma Thuột.</span></p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif; text-align: center;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\"><img alt=\"\" src=\"https://saigontourist.net/uploads/destination/TrongNuoc/BMT/The-Dray-Nur-Waterfall-Tay-Nguyen.jpg\" style=\"outline: 0px; margin: 0px; padding: 0px; border: 0px; width: 870px;\"></span></p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif; text-align: center;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Thác D’ray Nur</span></p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif; text-align: justify;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Ngày 02: BUÔN MA THUỘT – ĐÀ LẠT(Ăn ba bữa)</span><br style=\"outline: 0px; margin: 0px; padding: 0px;\">06h30 Đoàn dùng điểm tâm sáng tại khách sạn – Làm thủ tục trả phòng.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">08h00&nbsp;Quý khách&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Viếng thăm Chùa Sắc Tứ Khải Đoan</span>&nbsp;– ngôi chùa đầu tiên đặt nền móng cho Phật giáo tại Tây Nguyên với kiến trúc độc đáo, được trùng tu và xây dựng lại từ năm 2012 với quy mô rất hoành tráng.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">Tham quan&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Cơ sở nuôi chồn và sản xuất sản phẩm café chồn</span>&nbsp;– nghe giới thiệu và tìm hiểu về quy trình sản xuất café chồn nổi tiếng. Sau đó, tham quan&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Cụm Khu Du lịch Làng Cà Phê Trung Nguyên</span>&nbsp;– Một điểm tham quan đặc sắc khi du khách đến với Mảnh đất Tây Nguyên với không gian kiến trúc độc đáo mang đậm bản sắc dân tộc và không gian cà phê.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">11h00 Dùng cơm trưa tại nhà hàng.&nbsp;Sau đó, khởi hành đến Đà Lạt.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">18h00 Đoàn dùng cơm tối tại nhà hàng. Nhận phòng khách sạn nghỉ ngơi. Buổi tối, Quý khách tự do dạo bộ hoặc mua sắm tại Chợ Đêm.&nbsp;Nghỉ đêm tại Đà Lạt.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif; text-align: center;\"><img alt=\"\" src=\"https://saigontourist.net/uploads/destination/TrongNuoc/BMT/BMT-HoaCafe_573414676.jpg\" style=\"outline: 0px; margin: 0px; padding: 0px; border: 0px; width: 870px;\"></p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif; text-align: center;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Vườn trồng cafe tại Muôn Ma Thuột</span></p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif; text-align: justify;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Ngày 03: KHÁM PHÁ ĐÀ LẠT (Ăn ba bữa)</span><br style=\"outline: 0px; margin: 0px; padding: 0px;\">06h30 Đoàn dùng điểm tâm sáng tại khách sạn.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">08h00 Đoàn tham quan&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Cánh đồng hoa cẩm tú cầu&nbsp;</span>&amp;&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">đồi chè Cầu Đất</span>&nbsp;– Hai điểm tham quan mới và hấp dẫn nhiều du khách đến với Đà Lạt hiện nay.Sau đó&nbsp;&nbsp;viếng&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Chùa Linh Phước (Chùa ve chai)&nbsp;</span>- quý khách sẽ được chiêm ngưỡng con rồng dài 49m, vây được đắp bằng các mảnh vỡ của 50 nghìn vỏ chai quanh tượng Phật Di Lạc và nhiều tác phẩm đặc sắc khác.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br style=\"outline: 0px; margin: 0px; padding: 0px;\">12h00 Đoàn dùng cơm trưa tại nhà hàng.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">13h00 Tham quan&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Nông Trại Cún Puppy Farm</span>&nbsp;với các chú cún từ nhỏ đến lớn được chăm sóc cẩn thận thật đáng yêu. Tiếp theo tham quan&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Đường Hầm Điêu Khắc với hồ Vô Cực</span>&nbsp;- Nơi Tình Yêu Bắt Đầu và các công trình bằng đất sét tài hiện lịch sử trăm năm cùa thành phố hoa. Viếng&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Thiền viện Trúc Lâm</span>&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">-&nbsp;</span>thiền viện lớn nhất Lâm Đồng.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">18h00 Đoàn dùng cơm tối tại nhà hàng. Tự do khám phá Đà Lạt về đêm. Nghỉ đêm tại Đà Lạt.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif; text-align: center;\"><img alt=\"\" src=\"https://saigontourist.net/uploads/destination/TrongNuoc/Dalat/DaLat-CauDatFarm_1106355956.jpg\" style=\"outline: 0px; margin: 0px; padding: 0px; border: 0px; width: 870px;\"></p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif; text-align: center;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Đồi chè Cầu Đất</span></p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif; text-align: justify;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">Ngày 04: ĐÀ LẠT – CẦN THƠ (Ăn ba bữa)</span><br style=\"outline: 0px; margin: 0px; padding: 0px;\">06h30 Đoàn dùng điểm tâm sáng tại khách sạn – Làm thủ tục trả phòng.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">08h00 Khởi hành về lại Cần Thơ. Trên đường về dừng tham quan và chụp ảnh lưu niệm tại<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">&nbsp;Thác Pongour&nbsp;</span>– được mệnh danh là Nam thiên Đệ Nhất Thác.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">12h00&nbsp;Đoàn dùng cơm trưa tại nhà hàng. Tiếp tục hành trình về lại điểm đón ban đầu.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">18h00 Đoàn dùng cơm tối tại nhà hàng. Tiếp tục hành trình về lại Cần Thơ. Tối Đến Cần Thơ, kết thúc chương trình. Chào tạm biệt và hẹn gặp lại!</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif; text-align: justify;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\"><em style=\"outline: 0px; margin: 0px; padding: 0px;\">* Ghi chú:&nbsp;Điểm tham quan có thể sắp xếp lại cho phù hợp mà vẫn bảo đảm đầy đủ nội dung của từng chương trình.</em></span></p>', '<table align=\"center\" border=\"1\" cellpadding=\"0\" cellspacing=\"0\" width=\"635\" style=\"outline: 0px; margin: 0px; padding: 0px; border-spacing: 0px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif; font-size: 14px; width: 635px;\"><tbody style=\"outline: 0px; margin: 0px; padding: 0px;\"><tr style=\"outline: 0px; margin: 0px; padding: 0px;\"><td style=\"outline: 0px; margin: 0px; padding: 0px; width: 148px; height: 38px;\"><p align=\"center\" style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; line-height: 21px;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">KHÁCH SẠN</span></p></td><td style=\"outline: 0px; margin: 0px; padding: 0px; width: 236px; height: 38px;\"><p align=\"center\" style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; line-height: 21px;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">GIÁ TOUR/KHÁCH</span></p></td><td style=\"outline: 0px; margin: 0px; padding: 0px; width: 251px; height: 38px;\"><p align=\"center\" style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; line-height: 21px;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">PHỤ THU PHÒNG ĐƠN</span></p></td></tr><tr style=\"outline: 0px; margin: 0px; padding: 0px;\"><td style=\"outline: 0px; margin: 0px; padding: 0px; width: 148px; height: 38px;\"><p align=\"center\" style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; line-height: 21px;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">3 Sao Buôn Ma Thuột<br style=\"outline: 0px; margin: 0px; padding: 0px;\">2 Sao Đà Lạt</span></p></td><td style=\"outline: 0px; margin: 0px; padding: 0px; width: 236px; height: 38px;\"><p align=\"center\" style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; line-height: 21px;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">4.490.000đ</span></p></td><td style=\"outline: 0px; margin: 0px; padding: 0px; width: 251px; height: 38px;\"><p align=\"center\" style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; line-height: 21px;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">1.200.000 Đ/PHÒNG</span></p></td></tr></tbody></table><div style=\"outline: 0px; margin: 0px; padding: 0px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif; font-size: 14px; clear: both;\">&nbsp;</div><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">* Giá tour trọn gói bao gồm</span><br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Chi phí xe máy lạnh đời mới phục vụ chương trình tham quan.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Chi phí 03 đêm khách sạn theo tiêu chuẩn 2 – 3 khách/phòng.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Chi phí ăn, uống theo chương trình (01 bữa khuya + 04 bữa sáng + 08 bữa chính)<br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Chi phí tham quan theo chương trình.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Chi phí Hướng dẫn viên tiếng Việt suốt tuyến.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Quà tặng: Nón, nước suối, khăn lạnh<br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Thuế VAT.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Bảo hiểm du lịch tối đa 150.000.000đ/vụ/khách.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">* Giá tour không bao gồm</span><br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Chi phí khách ngủ phòng đơn.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Chi phí tham quan ngoài chương trình.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Chi phí điện thoại, giặt ủi, và chi phí cá nhân khác.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">* Giá vé trẻ em</span><br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Trẻ em&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">dưới 06 tuổi:&nbsp;</span>miễn phí vé tour, cha mẹ tự lo chi phí phát sinh của bé.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Trẻ em&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">từ 06-11 tuổi tính:&nbsp;</span>&nbsp;50% vé tour và ngủ chung giường với ba mẹ.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Trẻ em&nbsp;<span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">từ 12 tuổi trở lên</span>&nbsp;tính vé như người lớn.<br style=\"outline: 0px; margin: 0px; padding: 0px;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\"><u style=\"outline: 0px; margin: 0px; padding: 0px;\">Lưu ý:</u></span>&nbsp;02 (hai) người lớn chỉ được kèm với 1 (một) trẻ em dưới 06 tuổi. Nếu trẻ em đi kèm nhiều hơn thì từ em thứ hai phải mua ½ vé.<br style=\"outline: 0px; margin: 0px; padding: 0px;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">-&nbsp;Trẻ em free mua ghế ngồi : Giá 950.000vnd/bé</span></p><p align=\"center\" style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif;\">&nbsp;</p><p align=\"center\" style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0.5in; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">THÔNG TIN HƯỚNG DẪN</span></p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">* Trường hợp hủy vé tour, quý khách vui lòng thanh toán các khoản lệ phí hủy sau:</span></p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">a)&nbsp;<u style=\"outline: 0px; margin: 0px; padding: 0px;\">Đối với ngày thường</u></span>:<br style=\"outline: 0px; margin: 0px; padding: 0px;\">Du khách chuyển đổi tour sang ngày khác và báo trước ngày khởi hành trước 15 ngày sẽ không chịu phí (không áp dụng các tour khách sạn 4 - 5 sao), nếu trễ hơn sẽ căn cứ theo qui định hủy phía dưới và chỉ được chuyển ngày khởi hành tour 1 lần.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Hủy vé trước ngày khởi hành từ 2 ngày, chi trả 100% tiền tour.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Hủy vé trước ngày khởi hành từ 3 – 6 ngày, chi trả 80% tiền tour.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Hủy vé trước ngày khởi hành từ 7 - 14 ngày, chi trả 60% tiền tour.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Hủy vé trước ngày khởi hành từ 15 ngày trở lên, chi trả 50% tiền tour.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">b)&nbsp;<u style=\"outline: 0px; margin: 0px; padding: 0px;\">Đối với dịp Lễ, Tết</u></span>:<br style=\"outline: 0px; margin: 0px; padding: 0px;\">Du khách chuyển đổi tour sang ngày khác và báo trước ngày khởi hành trước 30 ngày sẽ không chịu phí (không áp dụng các tour khách sạn 4 - 5 sao), nếu trễ hơn sẽ căn cứ theo qui định hủy phạt phía dưới và chỉ được chuyển ngày khởi hành tour 1 lần.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Hủy vé trước ngày khởi hành từ 6 ngày, chi trả 100% tiền tour.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Hủy vé trước ngày khởi hành từ 7 - 14 ngày, chi trả 80% tiền tour.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Hủy vé trước ngày khởi hành từ 15 ngày trở lên, chi trả 60% tiền tour.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">c)</span>&nbsp;Sau khi hủy tour, du khách vui lòng đến nhận tiền trong vòng 15 ngày kể từ ngày kết thúc tour. Chúng tôi chỉ thanh toán trong khoảng thời gian nói trên, sau thời gian trên mọi khiếu nại, thắc mắc sẽ không được giải quyết.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">d)&nbsp;</span>Trường hợp hủy tour do sự cố khách quan như thiên tai, dịch bệnh hoặc do tàu thủy, xe lửa, máy bay hoãn/hủy chuyến, Lữ hành Saigontourist sẽ không chịu trách nhiệm bồi thường thêm bất kỳ chi phí nào khác ngoài việc hoàn trả chi phí những dịch vụ chưa được sử dụng của tour đó.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">* Quy định thanh toán khi đăng ký tour:<br style=\"outline: 0px; margin: 0px; padding: 0px;\">a)&nbsp;<u style=\"outline: 0px; margin: 0px; padding: 0px;\">Đối với ngày thường</u></span>:<br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Thời gian giữ chỗ: 36 giờ.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Trong quá trình giữ chỗ, quý khách sẽ tiến hành đặt cọc: 50% tổng số tiền tour.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Quý khách vui lòng thanh toán số tiền tour còn lại trước ngày khởi hành 07 ngày.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">b)&nbsp;<u style=\"outline: 0px; margin: 0px; padding: 0px;\">Đối với dịp Lễ, Tết</u></span>:<br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Thời gian giữ chỗ: 36 giờ.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Trong quá trình giữ chỗ, quý khách sẽ tiến hành đặt cọc: 60% tổng số tiền tour.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Quý khách vui lòng thanh toán số tiền tour còn lại trước ngày khởi hành 15 ngày.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">* Hành lý và giấy tờ tùy thân:</span>&nbsp;&nbsp;<br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Du khách mang theo giấy CMND (còn hạn sử dụng trong vòng 15 năm) hoặc Hộ chiếu (còn hạn sử dụng ít nhất 6 tháng). Đối với du khách là Việt kiều, Quốc tế nhập cảnh Việt Nam bằng visa rời, vui lòng mang theo visa khi đăng ký và đi tour.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Khách lớn tuổi (từ 70 tuổi trở lên), khách tàn tật tham gia tour, phải có thân nhân đi kèm và cam kết đảm bảo đủ sức khỏe khi tham gia tour du lịch.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Trẻ em dưới 14 tuổi khi đi tour phải mang theo giấy khai sinh (bản gốc hoặc bản sao y) hoặc hộ chiếu. Trẻ em từ đủ 14 tuổi trở lên phải mang theo giấy CMND.<br style=\"outline: 0px; margin: 0px; padding: 0px;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">- Tất cả giấy tờ tùy thân mang theo đều phải bản chính và còn hạn sử dụng tính đến ngày về của chuyến đi.</span><br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Du khách mang theo hành lý gọn nhẹ và phải tự bảo quản hành lý, tiền bạc, tư trang trong suốt thời gian đi du lịch.<br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Khách Việt Nam ở cùng phòng với khách Quốc tế&nbsp; hoặc Việt kiều yêu cầu phải có giấy hôn thú.</p><p style=\"outline: 0px; margin-right: 0px; margin-bottom: 25px; margin-left: 0px; padding: 0px; font-size: 14px; line-height: 21px; font-family: Montserrat, &quot;Open Sans&quot;, sans-serif;\"><span style=\"outline: 0px; margin: 0px; padding: 0px; font-weight: 700;\">* Lưu ý:<br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Du khách có mặt tại điểm đón trước 15 phút. Du khách đến trễ khi xe đã khởi hành hoặc hủy tour không báo trước vui lòng chịu phí như ‘hủy vé ngay ngày khởi hành’.</span><br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Công ty xuất hóa đơn cho du khách có nhu cầu (Trong thời hạn 7 ngày sau khi kết thúc chương trình du lịch). Du khách được chọn một trong những chương trình khuyến mãi dành cho khách lẻ định kỳ (Nếu có).<br style=\"outline: 0px; margin: 0px; padding: 0px;\">- Trường hợp Du khách muốn ngủ phòng đơn phải đóng thêm chi phí phụ thu.</p>', 10, '2020-12-07 01:40:54', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tourtype`
--

CREATE TABLE `tourtype` (
  `tour_type_id` bigint(20) UNSIGNED NOT NULL,
  `tour_type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tourtype`
--

INSERT INTO `tourtype` (`tour_type_id`, `tour_type_name`, `created_at`, `updated_at`) VALUES
(6, 'Tour trong nước', '2020-12-07 01:25:01', NULL),
(7, 'Tour ngoài nước', '2020-12-07 01:25:08', NULL),
(8, 'Tour xuyên việt', '2020-12-07 01:25:17', NULL),
(9, 'Tour miền Tây', '2020-12-07 01:25:25', NULL),
(10, 'Tour Tết', '2020-12-07 01:25:35', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transport`
--

CREATE TABLE `transport` (
  `transport_id` bigint(20) UNSIGNED NOT NULL,
  `transport_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transport_brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transport_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `transport`
--

INSERT INTO `transport` (`transport_id`, `transport_name`, `transport_brand`, `transport_color`, `created_at`, `updated_at`) VALUES
(1, 'Máy bay', 'AirBus A380', 'Trắng', '2020-12-01 08:41:15', NULL),
(2, 'Xe ô tô', 'Thaco', 'Cam', '2020-12-07 01:42:23', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transport_detail`
--

CREATE TABLE `transport_detail` (
  `transport_id` bigint(20) UNSIGNED NOT NULL,
  `tour_id` bigint(20) UNSIGNED NOT NULL,
  `location_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ward`
--

CREATE TABLE `ward` (
  `id` int(10) UNSIGNED NOT NULL,
  `_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `_prefix` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_province_id` int(10) UNSIGNED DEFAULT NULL,
  `_district_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activity_id`);

--
-- Chỉ mục cho bảng `activity_detail`
--
ALTER TABLE `activity_detail`
  ADD PRIMARY KEY (`tour`,`activity`,`location`,`date`,`session`),
  ADD KEY `activity_detail_activity_foreign` (`activity`),
  ADD KEY `activity_detail_location_foreign` (`location`),
  ADD KEY `activity_detail_date_foreign` (`date`),
  ADD KEY `activity_detail_session_foreign` (`session`);

--
-- Chỉ mục cho bảng `bookingticket`
--
ALTER TABLE `bookingticket`
  ADD PRIMARY KEY (`booking_ticket_id`),
  ADD KEY `bookingticket_tour_id_foreign` (`tour_id`),
  ADD KEY `bookingticket_customer_id_foreign` (`customer_id`),
  ADD KEY `bookingticket_staff_id_foreign` (`staff_id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `customer_nation_id_foreign` (`nation_id`);

--
-- Chỉ mục cho bảng `date`
--
ALTER TABLE `date`
  ADD PRIMARY KEY (`date_id`);

--
-- Chỉ mục cho bảng `dish`
--
ALTER TABLE `dish`
  ADD PRIMARY KEY (`dish_id`);

--
-- Chỉ mục cho bảng `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`),
  ADD KEY `_province_id` (`_province_id`);

--
-- Chỉ mục cho bảng `eat`
--
ALTER TABLE `eat`
  ADD PRIMARY KEY (`restaurant_id`,`menu_id`,`dish_id`,`session_id`),
  ADD KEY `eat_menu_id_foreign` (`menu_id`),
  ADD KEY `eat_dish_id_foreign` (`dish_id`),
  ADD KEY `eat_session_id_foreign` (`session_id`);

--
-- Chỉ mục cho bảng `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Chỉ mục cho bảng `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Chỉ mục cho bảng `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nation`
--
ALTER TABLE `nation`
  ADD PRIMARY KEY (`nation_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`position_id`);

--
-- Chỉ mục cho bảng `position_detail`
--
ALTER TABLE `position_detail`
  ADD PRIMARY KEY (`staff_id`,`position_id`),
  ADD KEY `position_detail_position_id_foreign` (`position_id`);

--
-- Chỉ mục cho bảng `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`promo_id`);

--
-- Chỉ mục cho bảng `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`receipt_id`),
  ADD KEY `receipt_staff_id_foreign` (`staff_id`),
  ADD KEY `receipt_booking_ticket_id_foreign` (`booking_ticket_id`);

--
-- Chỉ mục cho bảng `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`restaurant_id`);

--
-- Chỉ mục cho bảng `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `session_date_id_foreign` (`date_id`);

--
-- Chỉ mục cho bảng `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Chỉ mục cho bảng `stay`
--
ALTER TABLE `stay`
  ADD PRIMARY KEY (`tour_id`,`hotel_id`,`date_id`,`location_id`),
  ADD KEY `stay_hotel_id_foreign` (`hotel_id`),
  ADD KEY `stay_date_id_foreign` (`date_id`),
  ADD KEY `stay_location_id_foreign` (`location_id`);

--
-- Chỉ mục cho bảng `street`
--
ALTER TABLE `street`
  ADD PRIMARY KEY (`id`),
  ADD KEY `_province_id` (`_province_id`,`_district_id`);

--
-- Chỉ mục cho bảng `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`tour_id`),
  ADD KEY `tour_tour_type_id_foreign` (`tour_type_id`);

--
-- Chỉ mục cho bảng `tourtype`
--
ALTER TABLE `tourtype`
  ADD PRIMARY KEY (`tour_type_id`);

--
-- Chỉ mục cho bảng `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`transport_id`);

--
-- Chỉ mục cho bảng `transport_detail`
--
ALTER TABLE `transport_detail`
  ADD PRIMARY KEY (`transport_id`,`tour_id`,`location_id`),
  ADD KEY `transport_detail_tour_id_foreign` (`tour_id`),
  ADD KEY `transport_detail_location_id_foreign` (`location_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `ward`
--
ALTER TABLE `ward`
  ADD PRIMARY KEY (`id`),
  ADD KEY `_province_id` (`_province_id`,`_district_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `activity`
--
ALTER TABLE `activity`
  MODIFY `activity_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bookingticket`
--
ALTER TABLE `bookingticket`
  MODIFY `booking_ticket_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `date`
--
ALTER TABLE `date`
  MODIFY `date_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `dish`
--
ALTER TABLE `dish`
  MODIFY `dish_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `district`
--
ALTER TABLE `district`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hotel_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `location`
--
ALTER TABLE `location`
  MODIFY `location_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `nation`
--
ALTER TABLE `nation`
  MODIFY `nation_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `position`
--
ALTER TABLE `position`
  MODIFY `position_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `promo`
--
ALTER TABLE `promo`
  MODIFY `promo_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `province`
--
ALTER TABLE `province`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `receipt`
--
ALTER TABLE `receipt`
  MODIFY `receipt_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `restaurant_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `session`
--
ALTER TABLE `session`
  MODIFY `session_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `street`
--
ALTER TABLE `street`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tour`
--
ALTER TABLE `tour`
  MODIFY `tour_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tourtype`
--
ALTER TABLE `tourtype`
  MODIFY `tour_type_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `transport`
--
ALTER TABLE `transport`
  MODIFY `transport_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `ward`
--
ALTER TABLE `ward`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `activity_detail`
--
ALTER TABLE `activity_detail`
  ADD CONSTRAINT `activity_detail_activity_foreign` FOREIGN KEY (`activity`) REFERENCES `activity` (`activity_id`),
  ADD CONSTRAINT `activity_detail_date_foreign` FOREIGN KEY (`date`) REFERENCES `date` (`date_id`),
  ADD CONSTRAINT `activity_detail_location_foreign` FOREIGN KEY (`location`) REFERENCES `location` (`location_id`),
  ADD CONSTRAINT `activity_detail_session_foreign` FOREIGN KEY (`session`) REFERENCES `session` (`session_id`),
  ADD CONSTRAINT `activity_detail_tour_foreign` FOREIGN KEY (`tour`) REFERENCES `tour` (`tour_id`);

--
-- Các ràng buộc cho bảng `bookingticket`
--
ALTER TABLE `bookingticket`
  ADD CONSTRAINT `bookingticket_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `bookingticket_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`),
  ADD CONSTRAINT `bookingticket_tour_id_foreign` FOREIGN KEY (`tour_id`) REFERENCES `tour` (`tour_id`);

--
-- Các ràng buộc cho bảng `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_nation_id_foreign` FOREIGN KEY (`nation_id`) REFERENCES `nation` (`nation_id`);

--
-- Các ràng buộc cho bảng `eat`
--
ALTER TABLE `eat`
  ADD CONSTRAINT `eat_dish_id_foreign` FOREIGN KEY (`dish_id`) REFERENCES `dish` (`dish_id`),
  ADD CONSTRAINT `eat_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`menu_id`),
  ADD CONSTRAINT `eat_restaurant_id_foreign` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurant` (`restaurant_id`),
  ADD CONSTRAINT `eat_session_id_foreign` FOREIGN KEY (`session_id`) REFERENCES `session` (`session_id`);

--
-- Các ràng buộc cho bảng `position_detail`
--
ALTER TABLE `position_detail`
  ADD CONSTRAINT `position_detail_position_id_foreign` FOREIGN KEY (`position_id`) REFERENCES `position` (`position_id`),
  ADD CONSTRAINT `position_detail_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`);

--
-- Các ràng buộc cho bảng `receipt`
--
ALTER TABLE `receipt`
  ADD CONSTRAINT `receipt_booking_ticket_id_foreign` FOREIGN KEY (`booking_ticket_id`) REFERENCES `bookingticket` (`booking_ticket_id`),
  ADD CONSTRAINT `receipt_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`);

--
-- Các ràng buộc cho bảng `session`
--
ALTER TABLE `session`
  ADD CONSTRAINT `session_date_id_foreign` FOREIGN KEY (`date_id`) REFERENCES `date` (`date_id`);

--
-- Các ràng buộc cho bảng `stay`
--
ALTER TABLE `stay`
  ADD CONSTRAINT `stay_date_id_foreign` FOREIGN KEY (`date_id`) REFERENCES `date` (`date_id`),
  ADD CONSTRAINT `stay_hotel_id_foreign` FOREIGN KEY (`hotel_id`) REFERENCES `hotel` (`hotel_id`),
  ADD CONSTRAINT `stay_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `location` (`location_id`),
  ADD CONSTRAINT `stay_tour_id_foreign` FOREIGN KEY (`tour_id`) REFERENCES `tour` (`tour_id`);

--
-- Các ràng buộc cho bảng `tour`
--
ALTER TABLE `tour`
  ADD CONSTRAINT `tour_tour_type_id_foreign` FOREIGN KEY (`tour_type_id`) REFERENCES `tourtype` (`tour_type_id`);

--
-- Các ràng buộc cho bảng `transport_detail`
--
ALTER TABLE `transport_detail`
  ADD CONSTRAINT `transport_detail_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `location` (`location_id`),
  ADD CONSTRAINT `transport_detail_tour_id_foreign` FOREIGN KEY (`tour_id`) REFERENCES `tour` (`tour_id`),
  ADD CONSTRAINT `transport_detail_transport_id_foreign` FOREIGN KEY (`transport_id`) REFERENCES `transport` (`transport_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
