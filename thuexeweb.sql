-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2016 at 11:59 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(9, 11, 'xe này phục vụ quá tốt', 2, '2016-06-03 10:24:32', '2016-06-03 10:24:32'),
(10, 11, 'xe phục vụ tốt quá không thể hơn', 2, '2016-06-06 08:56:42', '2016-06-06 08:56:42');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hang`
--

CREATE TABLE IF NOT EXISTS `tbl_hang` (
  `hang_id` int(11) NOT NULL,
  `hang_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_hang`
--

INSERT INTO `tbl_hang` (`hang_id`, `hang_name`, `updated_at`, `created_at`) VALUES
(1, 'Huyndai', '2016-06-08 06:13:31', '0000-00-00 00:00:00'),
(2, 'Ford', '2016-06-08 06:13:31', '0000-00-00 00:00:00'),
(3, 'Toyota', '2016-06-08 06:13:31', '0000-00-00 00:00:00'),
(4, 'Nissan', '2016-06-08 06:13:31', '0000-00-00 00:00:00'),
(5, 'Mescedes', '2016-06-08 06:13:31', '0000-00-00 00:00:00'),
(6, 'Honda', '2016-06-08 06:13:31', '0000-00-00 00:00:00');

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
(2, 'Nguyễn Hồng Quân', 'quannh02@wru.vn', 'Nam', '175 Tây Sơn', '01677665526', 'QuanBus', '2126478', '$2y$10$fZqIGerdjwvduFy0Ulomm.znMbxFEjOMxTmyvJmx.DO0FIdDpciUu', 1, 'B0oj85xUrRGCWgXkUnCfSUytwmEXpHL7xqGucVEZaXcOLTz587LrqfF6WbQh', '2016-05-19 10:52:00', '2016-06-10 13:44:10'),
(3, 'Nguyễn Văn Bằng', 'bangbang@gmail.com', 'Nam', '175 Tây sơn- Đống Đa - Hà Nội', '0912445346', 'TNHH Công nghệ dệt may Hải Hà', '235245346', '$2y$10$XlqMKlGaoIURBNG9gFg2AuexEG3dEsDpfg5e.3vkoTprQYZu6lb.O', 0, 'RRn8t4LwQJqqd2TPzswcfJ5l45NFeK5X5jLxURevw310uhHg4VhNVGFqA4Aq', '2016-05-23 00:52:03', '2016-06-07 12:04:17');

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_taixe`
--

INSERT INTO `tbl_taixe` (`taixe_id`, `tentaixe`, `banglaixe`, `ngaysinh`, `sothich`, `updated_at`, `created_at`) VALUES
(1, 'Nguyễn Hữu Cảnh ', 'E', '1972-11-20 00:00:00', 'Uống bia, hát, hút thuốc', '2016-05-20 10:42:47', '0000-00-00 00:00:00'),
(2, 'Lê Đức Thịnh', 'E', '2081-05-16 00:00:00', 'Hút thuốc', '2016-05-20 10:42:47', '0000-00-00 00:00:00'),
(3, 'Phạm Văn Đức', 'E', '1982-11-07 00:00:00', 'Chơi Bia, uống rượu. ', '2016-05-20 10:42:47', '0000-00-00 00:00:00'),
(4, 'Nguyễn Văn Quân', 'E', '1985-11-20 00:00:00', 'Ăn bún bò huế, lẩu vịt', '2016-05-20 10:42:47', '0000-00-00 00:00:00'),
(5, 'Lê Xuân Quỳnh', 'E', '1965-09-14 00:00:00', 'Uống rượu, hút thuốc', '2016-05-20 05:28:47', '0000-00-00 00:00:00'),
(6, 'Lê Trí Vàng', 'FE', '1972-08-20 00:00:00', 'Hút thuốc', '2016-06-06 17:28:14', '0000-00-00 00:00:00'),
(7, 'Bùi Đức Đăng', 'E', '0000-00-00 00:00:00', 'Chém gió', '2016-05-21 22:41:32', '2016-05-21 22:41:32'),
(9, 'Lê Hồng Phong', 'E', '0000-00-00 00:00:00', 'Lên sàn', '2016-05-21 22:42:10', '2016-05-21 22:42:10'),
(10, 'Phạm Văn B', 'E', '0000-00-00 00:00:00', 'nhảy đầm', '2016-06-03 10:34:35', '2016-06-03 10:34:35'),
(11, 'Nguyễn Nam Việt', 'B2', '0000-00-00 00:00:00', 'Ăn chơi nhậu nhẹt', '2016-06-08 07:22:59', '2016-06-06 10:34:40');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_tintuc`
--

INSERT INTO `tbl_tintuc` (`id`, `tieude`, `tacgia`, `noidung`, `created_at`, `updated_at`) VALUES
(5, 'Chiều 07-03-2016, Range Rover Evoque 2016 ra mắt tại Hà Nội', 'admin', 'Chiều nay (07/03), mẫu SUV hạng sang cỡ nhỏ Range Rover Evoque 2016 sẽ chính thức ra mắt người tiêu dùng thủ đô.\r\nPhiên bản cải tiến 2016 của Range Rover Evoque nhận được một số điểm mới như đèn sương mù slimline tinh tế trên hốc hút gió cỡ lớn 2 bên cản trước. Lưới tản nhiệt được thiết kế lại cao cấp hơn với 2 loại hình mới, lưới tản nhiệt tiêu chuẩn của Evoque dạng 2 thanh ngang đậm nét dứt khoát hoặc dạng lưới tinh tế.\r\nRanger Rover Evoque 2016.\r\n\r\nTiến vào bên trong xe, ghế thể thao và viền cửa được thiết kế mới đi kèm với mặt đồng hồ hiện đại đem lại cảm giác sang trọng hơn cho tổng thể nội thất. Chất liệu nội thất được cải thiện tối đa với những vật liệu mềm cao cấp hơn. Ghế ngồi tiêu chuẩn điều chỉnh 6 hướng bọc vải dệt Ebony hạng sang với  họa tiết độc đáo và mở rộng đến 14 hướng cùng chức năng massage ở phiên bản cao cấp nhất.\r\n\r\nPhiên bản Evoque 2016 được trang bị động cơ xăng Si4 sản sinh 240 mã lực tiên tiến của Land Rover. Ngoài hiệu suất mạnh mẽ vượt trội, động cơ Si4 có khả năng đưa Evoque tăng tốc từ 0-100km/h chỉ trong 7,6 giây trước khi đạt vận tốc tối đa 217 km/h (135 mph), đi kèm theo đó là khả năng tiết kiệm nhiên liệu khi đi hết quãng đường hỗn hợp 100 km chỉ tiêu hao 7,8 lít xăng và lượng khí thải CO2 ở mức 181 g/km.\r\n\r\nEvoque 2016 cũng có sẵn tùy chọn động cơ diesel TD4 Ingenium hoàn toàn bằng nhôm với trọng lượng nhẹ hơn 20-30kg so với thế hệ tiền nhiệm với 2 công suất đầu ra là 150 mã lực với mức tiêu thụ nhiên liệu 4.2L/100km và phiên bản công suất cao 180 mã lực với chỉ số tiêu thụ nhiên liệu 4.8L/100km.\r\nAnh Quân (TTTĐ)\r\n', '2016-05-04 02:58:24', '2016-06-07 12:05:10'),
(6, 'Kinh nghiệm để thuê được xe du lịch tốt', 'admin', 'Với số lượng lớn công ty cho thuê xe trên thị trường, rất khó để khách hàng có thể chọn lựa được dịch vụ công ty nào tốt nhât.\n1. CÁCH LỰA CHỌN LOẠI XE\n\nKhi có nhu cầu thuê xe đi du lịch, khách hàng của cho thuê xe du lịch tại Hà Nội thường quan tâm đầu tiên về số chỗ 7-16-24-29-30-35-39-45 chỗ, sau đó là hãng xe.\n\n+ Với số lượng khách từ 7 đến 16 người: Lựa chọn tốt nhất cho bạn là một chiếc xe 16 chỗ, hiện trên thị trường Việt Nam có 3 dòng xe 16 chỗ là: Toyota Hiace, Ford Transit, Mercedes Sprinter. Trong đó, Ford Transit và Mersprinter là 2 xe được lựa chọn nhiều hơn cả. Với nhiều kiểu dáng, chủng loại, phù hợp với sở thích và mức chi phí mong muốn của từng khách thuê xe.\n\n+ Với số lượng khách lớn (theo đoàn): Bạn có thể lựa chọn dòng xe cỡ trung là 24-29-30 chỗ, hay cỡ lớn là 35-39-45 chỗ. Xe 45 chỗ hiện nay có 2 loại: Huyndai Space, Huyndai Universe.\n \n\nKhi đã có số lượng khách đi cụ thể. Việc lựa chọn loại xe theo số chỗ không khó. Tuy nhiên, với kinh nghiệm cho thuê xe, cho thuê xe du lịch tại hà nội khuyên bạn nên thuê xe có nhiều hơn 2-5 chỗ ngồi so với số lượng thành viên trong đoàn để đảm bảo không gian thoáng trên xe, điều này đặc biệt cần thiết trong trường hợp bạn có nhều đồ đạc, vật dụng cần mang theo.\n\n2. CÁCH LỰA CHỌN DỊCH VỤ THUÊ XE\n\nBạn muốn thuê xe du lịch tốt, thoải mái và chất lượng cao\n\nTuy nhiên bạn không hiểu nhiều về các dịch vụ cho thuê xe trên thị trường?\n\nNếu là lần đầu đi thuê xe du lịch, bạn rất khó để đánh giá được một dịch vụ thế nào là tốt? Thế nào là không tốt?\n\n+Về chất lượng xe:\n\nĐiều kiện tối thiểu của một chiếc xe du lịch là điều hòa, ghế bật để bạn có thể ngả lưng và nghỉ ngơi, thư giãn. Ngoài ra, xe cần đảm bảo mới, đẹp, sạch sẽ, có hệ thống âm thanh, TV trên xe để đáp ứng nhu cầu nghe nhạc, xem phim của Quý khách. Tuy dịch vụ này không bắt buộc nhưng nếu là một đơn vị cho thuê xe du lịch chuyên nghiệp thì đây là một yếu tố không thể thiếu.\n \n\nKinh nghiệm thuê xe tốt 2\nPhong cách năng động kết hợp cùng tính linh hoạt chúng tôi mang đến cho bạn một giải pháp hiệu quả cao đáp ứng mọi nhu cầu du lịch thoải mái của bạn\n\n+Về tài xế:\n\nKhách thuê xe du lịch đều muốn có một lái xe kinh nghiệm, thông thạo tuyến đường, vui vẻ, thân thiện, sẵn sàng giải đáp mọi thắc mắc của khách. Chính vì thế, bạn hãy tìm đến một công ty cho thuê xe uy tín ở Hà Nội, vì một công ty cho thuê xe chất lượng không thể thiếu những lái xe kinh nghiệm, chuyên nghiệp trong phục vụ khách du lịch, hiểu rõ các nguyên tắc phục vụ khách: Đúng giờ, đưa đón đúng điểm hẹn, có trách nhiệm với công việc…\n\n+Về nhân viên điều hành:\n\nNếu lựa chọn một nhà cung cấp uy tín, có điều hành kinh nghiệm và chuyên nghiệp, bạn sẽ được phục vụ một cách tận tình, được tư vấn miễn phí và giải đáp mọi thắc mắc của bạn về thuê xe một cách đầy đủ và chính xác nhất.\n\n3. CÁCH LỰA CHỌN ĐƠN VỊ CHO THUÊ XE\n\n+. Có hàng trăm công ty cho thuê xe trên thị trường. Để tìm một địa chỉ cho thuê xe có rất nhiều cách, bạn có thể tìm kiếm thông qua internet, qua báo chí hay từ kinh nghiệm thuê xe của bạn bè, người thân của bạn.\nXe được trang bị nội thất sang trọng, tiện nghi với thiết kế 2 dãy ghế hành khách theo tiêu chuẩn Châu Âu có khả năng bật ra sau tối đa\n\n+. Mỗi doanh nghiệp đều có cách tạo ra những lợi thế riêng để thu hút khách hàng như: công ty có giá thuê xe rẻ nhất thị trường, doanh nghiệp có nhiều xe nhất thị trường, công ty cho thuê xe lâu năm nhất… Nếu là một khách thuê xe thông thái, bạn sẽ biết yếu tố nào mới là quan trọng nhất. Đó là uy tín doanh nghiệp, kinh nghiệm và thương hiệu trong kinh doanh.\n\n+. Một doanh nghiệp cho thuê xe uy tín là một doanh nghiệp luôn cung cấp số lượng, chất lượng dịch vụ đúng như cam kết, lượng khách của công ty lớn và ổn định, thương hiệu của doanh nghiệp đã được khách thuê xe, truyền thông khẳng định.\n\nBô phận chăm sóc khách hàng nhiệt tình sẽ tư vấn cho Quý khách chọn loại xe tốt nhất.\nST Internet.\n\nDịch vụ thuê xe du lịch của Công ty xe ETV xin gửi tới quý khách hàng lời chào trân trọng, lời chúc sức khỏe thành đạt. Chúng tôi được nhiều khách hàng biết đến là Nhà cung cấp dịch vụ vận chuyển du lịch chuyên nghiệp hàng đầu tại Hà Nội và Việt Nam sau hơn 5 năm hoạt dộng.\nVới mục tiêu : "Phương tiện Hiện đại - Phong cách chuyên nghiệp - Chất lượng vàng" trong nhiều năm qua, ETV đã phục vụ hàng ngàn các chuyến xe an toàn cho du khách trong nước và quốc tế, góp phần cho sự phát triển của ngành du lịch Việt Nam. Sự hài lòng của du khách trong mỗi chuyến đi là sự thành công của chúng tôi.\nMọi thông tin xin vui lòng liên hệ:\n \nCÔNG TY CP ĐẦU TƯ THƯƠNG MẠI VÀ DỊCH VỤ DU LỊCH TRỰC TUYẾN VIỆT NAM', '2016-05-04 02:58:42', '2016-05-04 02:58:42'),
(7, 'Dịch vụ cho thuê xe du lịch tại hà nội sau tết', 'admin', 'Đặc biệt, vào những ngày “đẹp” hoặc ngày thứ Bảy và Chủ nhật, nhu cầu thuê xe nhiều hơn. Giá cho thuê xe theo đó tăng từ 20 đến 30%, giảm nhẹ so với mức tăng từ 30 đến 50% sau kỳ nghỉ Tết.\n\nẢnh minh họa: ETV\n\n\nKhách hàng Quốc Khánh ở quận Hoàng Mai chia sẻ, do đoàn của anh đông người và phần lớn chỉ được nghỉ vào ngày Chủ nhật, nhưng hết người này lại đến người khác kêu bận rộn, rồi gia đình có người ốm đau nên tuần qua cả nhóm mới chốt được lịch cho chuyến du Xuân Bái Đính – Tràng An vào cuối tuần này.\n\nTuy nhiên, cứ tưởng qua Tết gần một tháng việc thuê xe du Xuân cho cả đoàn sẽ thuận lợi hơn nhưng thực tế mấy ngày qua anh đi thuê xe không dễ bởi nhiều cơ sở cho thuê xe đã có khách đặt từ trước. Nơi thì xe quá cũ không yên tâm cho hành trình của cả đoàn, nơi còn xe thì giá quá đắt.\n\nLiên hệ mãi anh cũng đặt thuê được chiếc xe Hyundai Space 45 chỗ ở Bạch Đằng với giá 4,5 triệu đồng đi và về trong ngày, cao hơn gần 30% so với bình thường. Theo anh Quốc Khánh, đi lễ, du Xuân đầu năm ai cũng muốn may mắn và không muốn thất hứa với vấn đề tâm linh nên giá có đắt một chút mọi người vẫn vui vẻ, miễn là có xe để thuê.\n\nLý giải về việc đến thời điểm này giá cho thuê xe vẫn tăng cao, một số cơ sở cho thuê xe ở Trần Khát Chân, Đội Cấn… cho biết, từ đầu năm Âm lịch đến nay thời tiết nắng ấm, khô ráo, nhu cầu thuê xe đi lễ chùa, du Xuân tăng hơn mọi năm và dự báo cho đến hết tháng Hai Âm lịch mới hạ nhiệt.\n\nTheo anh Hồng Quân ở Khâm Thiên cho biết giá xe 29 chỗ Huyndai Country đời 2014 đi Đền Dâu(Ninh Bình); Đền Mẫu sòng, Đền Cô Chín(Thanh Hóa); Đền Ông Hoàng Mười, Mẫu Kỳ Anh(Nghệ An); Mộ Bác Giáp, Nghĩa Trang Trường Sơn, Nghĩa Trang Đường Chín, Thành Cổ Quảng Trị, Địa Đạo Vĩnh Bốc, Đền Ông Cờn, Ngã ba Đồng Lộc có giá 17 triệu đồng.\n\nMặc dù giá cho thuê xe du lịch tại hà nội hiện nay không còn cao so với ngay sau kỳ nghỉ Tết Nguyên đán, nhưng vẫn tăng từ 20 đến 30% so với ngày thường.\n\nAnh Đỗ Toàn ở quận Tây Hồ cho biết, nếu như thời điểm trước và trong Tết Nguyên đán, các loại xe từ 16 chỗ, 29 chỗ và 45 chỗ ngồi phần lớn luôn trong tình trạng chờ khách thì sau kỳ nghỉ Tết đến nay tình thế đảo ngược, luôn đắt khách hơn bởi phù hợp với nhiều nhóm người, hay cơ quan, đoàn thể tổ chức các chuyến đi gần Hà Nội.\n\nCũng do sự “soán ngôi” này, giá cho thuê xe đã tăng từ 20% đối với ngày thường và 30% đối với ngày “đẹp” trong tháng hoặc ngày cuối tuần nhưng cũng khó khăn để thuê.\n\nCụ thể, nếu như ngày thường trong tuần khách hàng phần lớn là các cụ, người kinh doanh, buôn bán đi lễ đền, chùa; còn vào những ngày thứ Bảy hay Chủ nhật, chủ yếu là các tổ chức, cơ quan đoàn thể tranh thủ ngày nghỉ du Xuân và lượng khách này vẫn đông hơn cả.\n\nNgoài ra, qua Tết cũng là mùa cưới hỏi, nhu cầu thuê xe tăng hơn nên nguồn cung lúc nào cũng khan hiếm, giá có tăng một chút cũng là điều dễ hiểu.\n\nDo đó, khách hàng muốn thuê được xe với giá cả hợp lý phải đặt xe trước một vài tuần, thậm chí có những đoàn khách hàng bố trí được công việc đã đặt xe trước Tết Nguyên đán cho những ngày cuối tuần của tháng Hai Âm lịch với giá cả hợp lý.\n\nCòn đặt xe đầu tuần để cuối tuần có xe đi ngay sẽ là rất khó, đặc biệt là đi vào ngày nghỉ hay ngày “đẹp” trong tháng do nguồn cung khan hiếm và sẽ phải chịu mức thuê cao.\nTheo Văn Xuyên/BNEWS/TTXVN', '2016-05-04 02:59:04', '2016-05-04 02:59:04');

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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(14, 13, 1, 4, '2016-05-23 07:15:24', '2016-06-10 12:51:18'),
(15, 14, 0, 0, '2016-05-23 07:16:58', '2016-05-23 07:16:58'),
(16, 15, 0, 0, '2016-05-23 07:18:11', '2016-05-23 07:18:11'),
(17, 16, 0, 0, '2016-05-23 07:19:18', '2016-05-23 07:19:18'),
(18, 17, 0, 0, '2016-05-23 08:02:16', '2016-05-23 08:02:16'),
(19, 18, 0, 0, '2016-05-23 08:03:54', '2016-05-23 08:03:54'),
(20, 19, 0, 0, '2016-05-23 08:06:37', '2016-05-23 08:06:37'),
(21, 20, 0, 0, '2016-05-23 08:08:05', '2016-05-23 08:08:05'),
(22, 21, 0, 0, '2016-05-23 08:14:33', '2016-05-23 08:14:33'),
(23, 22, 0, 0, '2016-05-23 08:16:14', '2016-05-23 08:16:14'),
(24, 23, 0, 0, '2016-06-08 00:10:03', '2016-06-08 00:10:03'),
(25, 24, 0, 0, '2016-06-08 00:20:00', '2016-06-08 00:20:00'),
(26, 25, 0, 0, '2016-06-08 00:22:06', '2016-06-08 00:22:06'),
(27, 23, 0, 0, '2016-06-10 15:00:15', '2016-06-10 15:00:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_xe`
--

CREATE TABLE IF NOT EXISTS `tbl_xe` (
  `xe_id` int(10) unsigned NOT NULL,
  `hang_id` int(11) NOT NULL,
  `ten_xe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `giamuaxe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_hinhxe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sodangky_xe` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `socho_xe` int(10) unsigned NOT NULL,
  `tai_xe_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysanxuat` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ngaydangkiem` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `gianoithanh` int(11) NOT NULL,
  `giaduongdai` int(11) NOT NULL,
  `giasanbay` int(11) NOT NULL,
  `giathuethang` int(11) NOT NULL,
  `giangoaigio` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_xe`
--

INSERT INTO `tbl_xe` (`xe_id`, `hang_id`, `ten_xe`, `giamuaxe`, `url_hinhxe`, `sodangky_xe`, `color`, `socho_xe`, `tai_xe_id`, `ngaysanxuat`, `ngaydangkiem`, `gianoithanh`, `giaduongdai`, `giasanbay`, `giathuethang`, `giangoaigio`, `created_at`, `updated_at`) VALUES
(1, 1, 'Universe', '330000000', 'Huyndai Universe.jpg', '30A-243245', 'Vàng', 45, '10', '2015-05-14 05:00:00', '2016-05-17 05:00:00', 2000000, 15000, 1500000, 30000000, 120000, '2016-04-13 17:00:00', '2016-06-08 06:34:34'),
(2, 1, 'Universe', '2000000000', 'Huyndai Universe.jpg', '30A-243244', 'Vàng', 45, '5', '2014-12-16 17:00:00', '2015-12-13 17:00:00', 2000000, 14000, 1600000, 31000000, 120000, '2016-04-12 01:00:00', '2016-06-08 06:41:10'),
(6, 1, 'Aero High Class', '300000', 'Xe Hyundai  High Class -300x200.png', '30A-23328', 'Vàng', 35, '3', '2013-06-16 17:00:00', '2016-05-14 17:00:00', 2100000, 15000, 1500000, 31000000, 120000, '2016-05-02 02:52:55', '2016-06-08 06:41:39'),
(7, 1, 'Aero High Class', '6999878', 'hyundai-high class 45-xanh-trang.jpg', '30A-32527', 'Xanh Đỏ Trắng', 45, '4', '2016-05-08 17:00:00', '2016-02-13 17:00:00', 2100000, 14000, 1400000, 30000000, 110000, '2016-05-02 04:04:27', '2016-06-08 06:42:26'),
(8, 1, 'Aero High Class', '5000000', 'hyundai-high class 45-xanh-trang.jpg', '30A-32784', 'Xanh la cay', 45, '2', '2014-09-15 17:00:00', '2016-01-10 17:00:00', 1900000, 13000, 1400000, 29000000, 100000, '2016-05-03 05:28:37', '2016-06-08 06:44:03'),
(9, 1, 'Aero High Class', '1600000000', 'hyundai-high class 45-xanh-trang.jpg', '30A-3333', 'trắng ', 45, '1', '2014-08-11 17:00:00', '2016-02-21 17:00:00', 2100000, 15000, 1400000, 29000000, 110000, '2016-05-20 02:41:22', '2016-06-08 06:45:07'),
(11, 1, 'Universe', '300000000', 'autowp.ru_hyundai_universe_xpress_noble_1.jpg', '30A-3333', 'trang', 45, '7', '2014-07-16 17:00:00', '2015-12-17 17:00:00', 2000000, 14000, 1400000, 29000000, 120000, '2016-05-21 09:10:33', '2016-06-08 06:48:20'),
(12, 1, 'Aero Town', '150000000', 'xe-huyndai-aero-town-35-cho-04_01.jpg', '30A-7878', 'trắng', 35, '9', '2015-06-15 17:00:00', '2016-02-14 17:00:00', 1900000, 13000, 1400000, 29000000, 110000, '2016-05-21 21:52:20', '2016-06-08 06:49:28'),
(13, 3, 'Vios', '110000000', 'xe-toyota-vios1.jpg', '30A-3888', 'Xám', 4, '6', '2014-08-11 17:00:00', '2016-04-10 17:00:00', 900000, 5000, 500000, 20000000, 40000, '2016-05-23 07:15:24', '2016-06-08 06:55:47'),
(14, 4, 'Sunny', '120000000', 'nissan-sunny.jpg', '30B-1111', 'Xám', 4, '11', '2014-05-13 17:00:00', '2016-03-07 17:00:00', 900000, 6000, 500000, 21000000, 50000, '2016-05-23 07:16:58', '2016-06-08 06:58:49'),
(15, 3, 'Altis', '100000000', 'Toyota-altis.png', '30C-1223', 'Trắng', 4, NULL, '2013-08-18 17:00:00', '2016-02-15 17:00:00', 1000000, 6000, 550000, 21000000, 50000, '2016-05-23 07:18:11', '2016-06-08 07:01:41'),
(16, 6, 'Civic', '100000000', 'USC60HOC021A121001.jpg', '30A-3223', 'xám', 4, NULL, '2015-06-16 17:00:00', '2016-02-22 17:00:00', 1100000, 6000, 600000, 2200000, 50000, '2016-05-23 07:19:18', '2016-06-08 07:05:59'),
(17, 2, 'Everest', '120000000', 'ford-everest-thailand-launch-2015-(1).jpg', '30G-8789', 'Xám ', 7, NULL, '2014-08-18 17:00:00', '2016-04-12 17:00:00', 0, 0, 0, 0, 0, '2016-05-23 08:02:16', '2016-05-23 08:02:16'),
(18, 3, 'Innova E', '230000000', '2012-innova_main.jpg', '30G-3929', 'Trắng', 7, NULL, '2013-03-19 17:00:00', '2016-05-09 17:00:00', 0, 0, 0, 0, 0, '2016-05-23 08:03:54', '2016-05-23 08:03:54'),
(19, 3, 'Fortuner G', '130000000', 'nhung-thong-so-ky-thuat-tuyet-voi-cua-toyota-phien-ban-moi.jpg', '30J-8988', 'Đen', 7, NULL, '2014-06-09 17:00:00', '2016-04-18 17:00:00', 0, 0, 0, 0, 0, '2016-05-23 08:06:37', '2016-05-23 08:06:37'),
(20, 2, 'Transit', '12000000', 'ford_transit_2014.jpg', '30F-7832', 'Đen', 16, NULL, '2014-08-05 17:00:00', '2016-04-12 17:00:00', 0, 0, 0, 0, 0, '2016-05-23 08:08:05', '2016-05-23 08:08:05'),
(21, 3, 'Sprinter', '800000000', 'mercedes-benz-213-cdi-sprinter-transporter-41044-16514479_gallery.jpg', '30N-4233', 'Đen', 16, NULL, '2014-11-10 17:00:00', '2016-03-20 17:00:00', 0, 0, 0, 0, 0, '2016-05-23 08:14:33', '2016-05-23 08:14:33'),
(22, 1, 'County', '70000000', 'Cho-thue-xe-Huyndai-County-Lets-Fly-Travel-6.jpg', '30E-2342', 'Xám', 29, NULL, '2014-09-13 17:00:00', '2016-03-13 17:00:00', 0, 0, 0, 0, 0, '2016-05-23 08:16:14', '2016-05-23 08:16:14');

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
-- Indexes for table `tbl_hang`
--
ALTER TABLE `tbl_hang`
  ADD PRIMARY KEY (`hang_id`);

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
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_dondat`
--
ALTER TABLE `tbl_dondat`
  MODIFY `dondat_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_dondatchitiet`
--
ALTER TABLE `tbl_dondatchitiet`
  MODIFY `ddct_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_hang`
--
ALTER TABLE `tbl_hang`
  MODIFY `hang_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_nguoidung`
--
ALTER TABLE `tbl_nguoidung`
  MODIFY `nguoidung_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_taixe`
--
ALTER TABLE `tbl_taixe`
  MODIFY `taixe_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_tintuc`
--
ALTER TABLE `tbl_tintuc`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_vote`
--
ALTER TABLE `tbl_vote`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `tbl_xe`
--
ALTER TABLE `tbl_xe`
  MODIFY `xe_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
