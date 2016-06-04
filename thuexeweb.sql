-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2016 at 08:07 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thuexeweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_04_29_085110_create_tbl_nguoidung_table', 1),
('2016_04_29_085430_create_tbl_dondat_table', 1),
('2016_04_29_085710_create_tbl_dondatchitiet_table', 1),
('2016_04_29_085917_create_tbl_xe_table', 1),
('2016_04_29_090434_create_tbl_donvi_table', 1),
('2016_04_29_090655_create_tbl_tintuc_table', 1),
('2016_04_29_090752_create_tbl_comment_table', 1),
('2016_04_29_090957_create_tbl_vote_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE IF NOT EXISTS `tbl_comment` (
  `id` int(10) unsigned NOT NULL,
  `xe_id` int(10) unsigned NOT NULL,
  `noidung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nguoidung_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`id`, `xe_id`, `noidung`, `nguoidung_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Xe phục vụ tốt', 2, '2016-04-14 05:00:00', '2016-04-14 05:00:00'),
(2, 2, 'Tôi rất hài lòng về phong cách phục vụ của nhân viên trên xe', 2, '2016-05-21 06:00:00', '2016-05-21 10:00:00'),
(3, 1, 'Tôi thấy phục vụ của quý khách quá tốt. :v', 2, '2016-05-21 02:10:53', '2016-05-21 02:10:53'),
(4, 1, 'Xe phục vụ cực kỳ tốt, thái độ với khách hàng thân thiện, niềm nở', 2, '2016-05-21 10:43:55', '2016-05-21 10:43:55'),
(5, 1, 'Thái độ phục vụ nhiệt tinh, chu đáo, an toàn cao', 2, '2016-05-21 10:48:30', '2016-05-21 10:48:30'),
(6, 1, 'Xe phục vụ chán, không vui vẻ hòa đồng với khách, hút thuốc quá nhiều', 2, '2016-05-21 11:51:28', '2016-05-21 11:51:28'),
(7, 9, 'xe phục vụ chán thế mà còn tiếp tục kinh doanh à', 2, '2016-06-03 01:06:08', '2016-06-03 01:06:08'),
(8, 9, 'kinh doanh thế mà được à lừa đảo', 2, '2016-06-03 01:06:45', '2016-06-03 01:06:45'),
(9, 11, 'xe này phục vụ quá tốt', 2, '2016-06-03 10:24:32', '2016-06-03 10:24:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dondat`
--

CREATE TABLE IF NOT EXISTS `tbl_dondat` (
  `dondat_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `diemdon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diemden` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `yeucau` text COLLATE utf8_unicode_ci,
  `ngaydi` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ngayve` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_dondat`
--

INSERT INTO `tbl_dondat` (`dondat_id`, `user_id`, `diemdon`, `diemden`, `yeucau`, `ngaydi`, `ngayve`, `active`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hà Nội', 'Hòa Bình', NULL, '2016-04-13 23:00:00', '2016-04-15 05:00:00', 0, '2016-04-11 22:00:00', '2016-04-12 02:00:00'),
(2, 1, 'Hà Nội', 'Hà Tây', NULL, '2016-04-14 03:00:00', '2016-04-15 05:00:00', 0, '2016-04-13 02:00:00', '2016-04-13 02:00:00'),
(9, 3, 'Lê Lợi', 'Xuân Đỉnh', 'Chạy theo lộ trình của e', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '2016-05-23 06:48:26', '2016-06-02 10:42:59'),
(10, 3, 'Hà Tây', 'Vàng Tây', 'gkalsjgaldgadg', '2016-06-06 17:00:00', '2016-06-20 17:00:00', 1, '2016-06-02 09:36:22', '2016-06-02 10:42:52');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dondatchitiet`
--

CREATE TABLE IF NOT EXISTS `tbl_dondatchitiet` (
  `ddct_id` int(10) unsigned NOT NULL,
  `don_dat_id` int(10) unsigned NOT NULL,
  `xe_id` int(10) unsigned NOT NULL,
  `gia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_dondatchitiet`
--

INSERT INTO `tbl_dondatchitiet` (`ddct_id`, `don_dat_id`, `xe_id`, `gia`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '5500000', '2016-04-11 23:00:00', '2016-04-12 02:00:00'),
(2, 2, 2, '4000000', '2016-04-13 02:00:00', '2016-04-13 02:00:00'),
(5, 9, 1, '', '2016-05-23 06:48:26', '2016-05-23 06:48:26'),
(6, 9, 7, '', '2016-05-23 06:48:26', '2016-05-23 06:48:26'),
(7, 10, 1, '', '2016-06-02 09:36:22', '2016-06-02 09:36:22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nguoidung`
--

CREATE TABLE IF NOT EXISTS `tbl_nguoidung` (
  `nguoidung_id` int(10) unsigned NOT NULL,
  `tendaydu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tencongty` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `masothue` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `terms` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_nguoidung`
--

INSERT INTO `tbl_nguoidung` (`nguoidung_id`, `tendaydu`, `email`, `gioitinh`, `diachi`, `sodienthoai`, `tencongty`, `masothue`, `password`, `terms`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Nguyễn Hồng Quân', 'quannh02@wru.vn', 'Nam', '175 Tây Sơn', '01677665526', 'QuanBus', '2126478', '$2y$10$fZqIGerdjwvduFy0Ulomm.znMbxFEjOMxTmyvJmx.DO0FIdDpciUu', 1, 'OVeAOQYx2f5Mq1mLPn16ruxJPF6vpQyyOiMMxoFJBsEpZB8ahPXTcMesDJLg', '2016-05-19 10:52:00', '2016-06-03 01:08:53'),
(3, 'Nguyễn Văn Bằng', 'bangbang@gmail.com', 'Nam', '175 Tây sơn- Đống Đa - Hà Nội', '0912445346', 'TNHH Công nghệ dệt may Hải Hà', '235245346', '$2y$10$XlqMKlGaoIURBNG9gFg2AuexEG3dEsDpfg5e.3vkoTprQYZu6lb.O', 0, '1oc8Jad2nMGerCC8IBUF6FDylsMU9CrFM8N3OlkBATDwhwyyBXSOTmY2WvR6', '2016-05-23 00:52:03', '2016-06-02 10:45:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_taixe`
--

CREATE TABLE IF NOT EXISTS `tbl_taixe` (
  `taixe_id` int(11) NOT NULL,
  `tentaixe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `banglaixe` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` datetime NOT NULL,
  `sothich` text COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_taixe`
--

INSERT INTO `tbl_taixe` (`taixe_id`, `tentaixe`, `banglaixe`, `ngaysinh`, `sothich`, `updated_at`, `created_at`) VALUES
(1, 'Nguyễn Hữu Cảnh ', 'E', '1972-11-20 00:00:00', 'Uống bia, hát, hút thuốc', '2016-05-20 10:42:47', '0000-00-00 00:00:00'),
(2, 'Lê Đức Thịnh', 'E', '2081-05-16 00:00:00', 'Hút thuốc', '2016-05-20 10:42:47', '0000-00-00 00:00:00'),
(3, 'Phạm Văn Đức', 'E', '1982-11-07 00:00:00', 'Chơi Bia, uống rượu. ', '2016-05-20 10:42:47', '0000-00-00 00:00:00'),
(4, 'Nguyễn Văn Quân', 'E', '1985-11-20 00:00:00', 'Ăn bún bò huế, lẩu vịt', '2016-05-20 10:42:47', '0000-00-00 00:00:00'),
(5, 'Lê Xuân Quỳnh', 'E', '1965-09-14 00:00:00', 'Uống rượu, hút thuốc', '2016-05-20 05:28:47', '0000-00-00 00:00:00'),
(6, 'Lê Trí Vàng', 'F', '1972-08-20 00:00:00', 'Hút thuốc', '2016-05-20 05:28:25', '0000-00-00 00:00:00'),
(7, 'Bùi Đức Đăng', 'E', '0000-00-00 00:00:00', 'Chém gió', '2016-05-21 22:41:32', '2016-05-21 22:41:32'),
(9, 'Lê Hồng Phong', 'E', '0000-00-00 00:00:00', 'Lên sàn', '2016-05-21 22:42:10', '2016-05-21 22:42:10'),
(10, 'Phạm Văn B', 'E', '0000-00-00 00:00:00', 'nhảy đầm', '2016-06-03 10:34:35', '2016-06-03 10:34:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tintuc`
--

CREATE TABLE IF NOT EXISTS `tbl_tintuc` (
  `id` int(10) unsigned NOT NULL,
  `tieude` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tacgia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_tintuc`
--

INSERT INTO `tbl_tintuc` (`id`, `tieude`, `tacgia`, `noidung`, `created_at`, `updated_at`) VALUES
(5, 'What is Lorem Ipsum?', 'admin', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', '2016-05-04 02:58:24', '2016-05-04 02:58:24'),
(6, 'Why do we use it?', 'admin', 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2016-05-04 02:58:42', '2016-05-04 02:58:42'),
(7, 'Where does it come from?', 'admin', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '2016-05-04 02:59:04', '2016-05-04 02:59:04'),
(8, 'Where can I get some?', 'admin', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '2016-05-04 02:59:20', '2016-05-04 02:59:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vote`
--

CREATE TABLE IF NOT EXISTS `tbl_vote` (
  `id` int(10) unsigned NOT NULL,
  `cars_id` int(10) unsigned NOT NULL,
  `sovotes` int(10) unsigned NOT NULL,
  `tongdiem` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_vote`
--

INSERT INTO `tbl_vote` (`id`, `cars_id`, `sovotes`, `tongdiem`, `created_at`, `updated_at`) VALUES
(1, 1, 56, 209, '2016-04-12 17:00:00', '2016-06-02 09:24:55'),
(2, 2, 5, 22, '2016-05-21 05:00:00', '2016-05-21 09:52:10'),
(3, 3, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 6, 2, 9, '0000-00-00 00:00:00', '2016-05-21 10:35:11'),
(7, 11, 20, 78, '2016-05-21 09:10:33', '2016-06-03 10:23:34'),
(8, 6, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 7, 4, 19, '0000-00-00 00:00:00', '2016-05-21 10:36:19'),
(10, 8, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 9, 6, 27, '0000-00-00 00:00:00', '2016-05-21 10:32:21'),
(12, 10, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 12, 3, 13, '2016-05-21 21:52:20', '2016-06-04 11:07:01'),
(14, 13, 0, 0, '2016-05-23 07:15:24', '2016-05-23 07:15:24'),
(15, 14, 0, 0, '2016-05-23 07:16:58', '2016-05-23 07:16:58'),
(16, 15, 0, 0, '2016-05-23 07:18:11', '2016-05-23 07:18:11'),
(17, 16, 0, 0, '2016-05-23 07:19:18', '2016-05-23 07:19:18'),
(18, 17, 0, 0, '2016-05-23 08:02:16', '2016-05-23 08:02:16'),
(19, 18, 0, 0, '2016-05-23 08:03:54', '2016-05-23 08:03:54'),
(20, 19, 0, 0, '2016-05-23 08:06:37', '2016-05-23 08:06:37'),
(21, 20, 0, 0, '2016-05-23 08:08:05', '2016-05-23 08:08:05'),
(22, 21, 0, 0, '2016-05-23 08:14:33', '2016-05-23 08:14:33'),
(23, 22, 0, 0, '2016-05-23 08:16:14', '2016-05-23 08:16:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_xe`
--

CREATE TABLE IF NOT EXISTS `tbl_xe` (
  `xe_id` int(10) unsigned NOT NULL,
  `hang_xe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ten_xe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `giamuaxe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_hinhxe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sodangky_xe` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `socho_xe` int(10) unsigned NOT NULL,
  `taixe_xe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysanxuat` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ngaydangkiem` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_xe`
--

INSERT INTO `tbl_xe` (`xe_id`, `hang_xe`, `ten_xe`, `giamuaxe`, `url_hinhxe`, `sodangky_xe`, `color`, `socho_xe`, `taixe_xe`, `ngaysanxuat`, `ngaydangkiem`, `created_at`, `updated_at`) VALUES
(1, 'Huyndai', 'Universe', '330000000', 'Huyndai Universe.jpg', '30A-243245', 'Vàng', 45, '10', '2016-05-21 17:00:00', '2015-10-11 17:00:00', '2016-04-13 17:00:00', '2016-06-03 11:51:09'),
(2, 'Huyndai', 'Universe', '2000000000', 'Huyndai Universe.jpg', '30A-243244', 'Vàng', 45, '5', '2014-12-16 17:00:00', '2015-12-13 17:00:00', '2016-04-12 01:00:00', '2016-06-03 11:52:22'),
(6, 'Huyndai', 'Aero High Class', '300000', 'Xe Hyundai  High Class -300x200.png', '30A-23328', 'Vàng', 35, '3', '2013-06-16 17:00:00', '2016-05-14 17:00:00', '2016-05-02 02:52:55', '2016-05-19 21:16:47'),
(7, 'Huyndai', 'Aero High Class', '6999878', 'hyundai-high class 45-xanh-trang.jpg', '30A-32527', 'Xanh Đỏ Trắng', 45, '4', '2016-05-08 17:00:00', '2016-02-13 17:00:00', '2016-05-02 04:04:27', '2016-05-19 21:01:17'),
(8, 'Huyndai', 'Aero High Class', '5000000', 'hyundai-high class 45-xanh-trang.jpg', '30A-32784', 'Xanh la cay', 45, '2', '2014-09-15 17:00:00', '2016-01-10 17:00:00', '2016-05-03 05:28:37', '2016-05-19 21:02:00'),
(9, 'Huyndai', 'Aero High Class', '1600000000', 'hyundai-high class 45-xanh-trang.jpg', '30A-3333', 'trắng ', 45, '1', '2014-08-11 17:00:00', '2016-02-21 17:00:00', '2016-05-20 02:41:22', '2016-05-20 02:41:22'),
(11, 'Huyndai', 'Universe', '300000000', 'autowp.ru_hyundai_universe_xpress_noble_1.jpg', '30A-3333', 'trang', 45, '7', '2014-07-16 17:00:00', '2015-12-17 17:00:00', '2016-05-21 09:10:33', '2016-05-21 23:00:57'),
(12, 'Huyndai', 'Aero Town', '150000000', 'xe-huyndai-aero-town-35-cho-04_01.jpg', '30A-7878', 'trắng', 35, '9', '2015-06-15 17:00:00', '2016-02-14 17:00:00', '2016-05-21 21:52:20', '2016-05-21 23:01:08'),
(13, 'Toyota', 'Vios', '110000000', 'xe-toyota-vios1.jpg', '30A-3888', 'Xám', 4, NULL, '2014-08-11 17:00:00', '2016-04-10 17:00:00', '2016-05-23 07:15:24', '2016-05-23 07:15:24'),
(14, 'Nissan', 'Sunny', '120000000', 'nissan-sunny.jpg', '30B-1111', 'Xám', 4, NULL, '2014-05-13 17:00:00', '2016-03-07 17:00:00', '2016-05-23 07:16:58', '2016-05-23 07:16:58'),
(15, 'Toyota', 'Altis', '100000000', 'Toyota-altis.png', '30C-1223', 'Trắng', 4, NULL, '2013-08-18 17:00:00', '2016-02-15 17:00:00', '2016-05-23 07:18:11', '2016-05-23 07:18:11'),
(16, 'Honda', 'Civic', '100000000', 'USC60HOC021A121001.jpg', '30A-3223', 'xám', 4, NULL, '2015-06-16 17:00:00', '2016-02-22 17:00:00', '2016-05-23 07:19:18', '2016-05-23 07:19:18'),
(17, 'Ford ', 'Everest', '120000000', 'ford-everest-thailand-launch-2015-(1).jpg', '30G-8789', 'Xám ', 7, NULL, '2014-08-18 17:00:00', '2016-04-12 17:00:00', '2016-05-23 08:02:16', '2016-05-23 08:02:16'),
(18, 'Toyota ', 'Innova E', '230000000', '2012-innova_main.jpg', '30G-3929', 'Trắng', 7, NULL, '2013-03-19 17:00:00', '2016-05-09 17:00:00', '2016-05-23 08:03:54', '2016-05-23 08:03:54'),
(19, 'Toyota', 'Fortuner G', '130000000', 'nhung-thong-so-ky-thuat-tuyet-voi-cua-toyota-phien-ban-moi.jpg', '30J-8988', 'Đen', 7, NULL, '2014-06-09 17:00:00', '2016-04-18 17:00:00', '2016-05-23 08:06:37', '2016-05-23 08:06:37'),
(20, 'Ford ', 'Transit', '12000000', 'ford_transit_2014.jpg', '30F-7832', 'Đen', 16, NULL, '2014-08-05 17:00:00', '2016-04-12 17:00:00', '2016-05-23 08:08:05', '2016-05-23 08:08:05'),
(21, 'Mercedes', 'Sprinter', '800000000', 'mercedes-benz-213-cdi-sprinter-transporter-41044-16514479_gallery.jpg', '30N-4233', 'Đen', 16, NULL, '2014-11-10 17:00:00', '2016-03-20 17:00:00', '2016-05-23 08:14:33', '2016-05-23 08:14:33'),
(22, 'Huyndai', 'County', '70000000', 'Cho-thue-xe-Huyndai-County-Lets-Fly-Travel-6.jpg', '30E-2342', 'Xám', 29, NULL, '2014-09-13 17:00:00', '2016-03-13 17:00:00', '2016-05-23 08:16:14', '2016-05-23 08:16:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dondat`
--
ALTER TABLE `tbl_dondat`
  ADD PRIMARY KEY (`dondat_id`);

--
-- Indexes for table `tbl_dondatchitiet`
--
ALTER TABLE `tbl_dondatchitiet`
  ADD PRIMARY KEY (`ddct_id`);

--
-- Indexes for table `tbl_nguoidung`
--
ALTER TABLE `tbl_nguoidung`
  ADD PRIMARY KEY (`nguoidung_id`),
  ADD UNIQUE KEY `tbl_nguoidung_email_unique` (`email`);

--
-- Indexes for table `tbl_taixe`
--
ALTER TABLE `tbl_taixe`
  ADD PRIMARY KEY (`taixe_id`);

--
-- Indexes for table `tbl_tintuc`
--
ALTER TABLE `tbl_tintuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_vote`
--
ALTER TABLE `tbl_vote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_xe`
--
ALTER TABLE `tbl_xe`
  ADD PRIMARY KEY (`xe_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_dondat`
--
ALTER TABLE `tbl_dondat`
  MODIFY `dondat_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_dondatchitiet`
--
ALTER TABLE `tbl_dondatchitiet`
  MODIFY `ddct_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_nguoidung`
--
ALTER TABLE `tbl_nguoidung`
  MODIFY `nguoidung_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_taixe`
--
ALTER TABLE `tbl_taixe`
  MODIFY `taixe_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_tintuc`
--
ALTER TABLE `tbl_tintuc`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_vote`
--
ALTER TABLE `tbl_vote`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tbl_xe`
--
ALTER TABLE `tbl_xe`
  MODIFY `xe_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
