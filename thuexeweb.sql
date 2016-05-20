-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2016 at 08:44 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`id`, `xe_id`, `noidung`, `nguoidung_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Xe phục vụ tốt', 1, '2016-04-14 05:00:00', '2016-04-14 05:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dondat`
--

CREATE TABLE IF NOT EXISTS `tbl_dondat` (
  `dondat_id` int(10) unsigned NOT NULL,
  `nguoidung_id` int(10) unsigned NOT NULL,
  `diemdon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diemden` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `yeucau` text COLLATE utf8_unicode_ci,
  `ngaydi` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ngayve` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_dondat`
--

INSERT INTO `tbl_dondat` (`dondat_id`, `nguoidung_id`, `diemdon`, `diemden`, `yeucau`, `ngaydi`, `ngayve`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hà Nội', 'Hòa Bình', NULL, '2016-04-13 23:00:00', '2016-04-15 05:00:00', '2016-04-11 22:00:00', '2016-04-12 02:00:00'),
(2, 1, 'Hà Nội', 'Hà Tây', NULL, '2016-04-14 03:00:00', '2016-04-15 05:00:00', '2016-04-13 02:00:00', '2016-04-13 02:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dondatchitiet`
--

CREATE TABLE IF NOT EXISTS `tbl_dondatchitiet` (
  `ddct_id` int(10) unsigned NOT NULL,
  `dondat_id` int(10) unsigned NOT NULL,
  `xe_id` int(10) unsigned NOT NULL,
  `gia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_dondatchitiet`
--

INSERT INTO `tbl_dondatchitiet` (`ddct_id`, `dondat_id`, `xe_id`, `gia`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '5500000', '2016-04-11 23:00:00', '2016-04-12 02:00:00'),
(2, 2, 2, '4000000', '2016-04-13 02:00:00', '2016-04-13 02:00:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_nguoidung`
--

INSERT INTO `tbl_nguoidung` (`nguoidung_id`, `tendaydu`, `email`, `gioitinh`, `diachi`, `sodienthoai`, `tencongty`, `masothue`, `password`, `terms`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Nguyễn Hồng Quân', 'quannh02@wru.vn', 'Nam', '175 Tây Sơn', '01677665526', 'QuanBus', '2126478', '$2y$10$fZqIGerdjwvduFy0Ulomm.znMbxFEjOMxTmyvJmx.DO0FIdDpciUu', 1, 'Bb6cPnHzlwrWxDGHfBnB1vdFfPvt7PLzILIjOnB6', '2016-05-19 10:52:00', '2016-05-19 10:52:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_taixe`
--

INSERT INTO `tbl_taixe` (`taixe_id`, `tentaixe`, `banglaixe`, `ngaysinh`, `sothich`, `updated_at`, `created_at`) VALUES
(1, 'Nguyễn Hữu Cảnh ', 'E', '1972-11-20 00:00:00', 'Uống bia, hát, hút thuốc', '2016-05-20 10:42:47', '0000-00-00 00:00:00'),
(2, 'Lê Đức Thịnh', 'E', '2081-05-16 00:00:00', 'Hút thuốc', '2016-05-20 10:42:47', '0000-00-00 00:00:00'),
(3, 'Phạm Văn Đức', 'E', '1982-11-07 00:00:00', 'Chơi Bia, uống rượu. ', '2016-05-20 10:42:47', '0000-00-00 00:00:00'),
(4, 'Nguyễn Văn Quân', 'E', '1985-11-20 00:00:00', 'Ăn bún bò huế, lẩu vịt', '2016-05-20 10:42:47', '0000-00-00 00:00:00'),
(5, 'Lê Xuân Quỳnh', 'E', '1965-09-14 00:00:00', 'Uống rượu, hút thuốc', '2016-05-20 05:28:47', '0000-00-00 00:00:00'),
(6, 'Lê Trí Vàng', 'F', '1972-08-20 00:00:00', 'Hút thuốc', '2016-05-20 05:28:25', '0000-00-00 00:00:00');

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
  `xe_id` int(10) unsigned NOT NULL,
  `sovotes` int(10) unsigned NOT NULL,
  `tongdiem` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_vote`
--

INSERT INTO `tbl_vote` (`id`, `xe_id`, `sovotes`, `tongdiem`, `created_at`, `updated_at`) VALUES
(1, 1, 20, 78, '2016-04-12 17:00:00', '2016-05-04 02:01:17');

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_xe`
--

INSERT INTO `tbl_xe` (`xe_id`, `hang_xe`, `ten_xe`, `giamuaxe`, `url_hinhxe`, `sodangky_xe`, `color`, `socho_xe`, `taixe_xe`, `ngaysanxuat`, `ngaydangkiem`, `created_at`, `updated_at`) VALUES
(1, 'Huyndai', 'Universe', '330000000', 'Huyndai Universe.jpg', '30A-243245', 'Vàng', 45, '6', '2014-03-10 17:00:00', '2016-04-10 17:00:00', '2016-04-13 17:00:00', '2016-05-20 08:45:14'),
(2, 'Huyndai', 'Universe', '2000000000', 'Huyndai Universe.jpg', '30A-243244', 'Vàng', 45, '5', '2014-12-16 17:00:00', '2016-03-13 17:00:00', '2016-04-12 01:00:00', '2016-04-13 01:00:00'),
(6, 'Huyndai', 'Aero High Class', '300000', 'Xe Hyundai  High Class -300x200.png', '30A-23328', 'Vàng', 35, '3', '2013-06-16 17:00:00', '2016-05-14 17:00:00', '2016-05-02 02:52:55', '2016-05-19 21:16:47'),
(7, 'Huyndai', 'Aero High Class', '6999878', 'hyundai-high class 45-xanh-trang.jpg', '30A-32527', 'Xanh Đỏ Trắng', 45, '4', '2016-05-08 17:00:00', '2016-02-13 17:00:00', '2016-05-02 04:04:27', '2016-05-19 21:01:17'),
(8, 'Huyndai', 'Aero High Class', '5000000', 'hyundai-high class 45-xanh-trang.jpg', '30A-32784', 'Xanh la cay', 45, '2', '2014-09-15 17:00:00', '2016-01-10 17:00:00', '2016-05-03 05:28:37', '2016-05-19 21:02:00'),
(9, 'Huyndai', 'Aero High Class', '1600000000', 'hyundai-high class 45-xanh-trang.jpg', '30A-3333', 'trắng ', 45, '1', '2014-08-11 17:00:00', '2016-02-21 17:00:00', '2016-05-20 02:41:22', '2016-05-20 02:41:22');

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
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_dondat`
--
ALTER TABLE `tbl_dondat`
  MODIFY `dondat_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_dondatchitiet`
--
ALTER TABLE `tbl_dondatchitiet`
  MODIFY `ddct_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_nguoidung`
--
ALTER TABLE `tbl_nguoidung`
  MODIFY `nguoidung_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_taixe`
--
ALTER TABLE `tbl_taixe`
  MODIFY `taixe_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_tintuc`
--
ALTER TABLE `tbl_tintuc`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_vote`
--
ALTER TABLE `tbl_vote`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_xe`
--
ALTER TABLE `tbl_xe`
  MODIFY `xe_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
