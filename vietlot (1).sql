-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2017 at 10:31 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vietlot`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catid` int(5) NOT NULL,
  `cat_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `show_home` int(2) NOT NULL DEFAULT '1',
  `alias` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `cat_name`, `show_home`, `alias`) VALUES
(2, 'Cân kỹ thuật', 1, 'can-ky-thuat'),
(3, 'Cân phân tích', 1, 'can-phan-tich'),
(4, 'Cân thủy sản', 0, 'can-thuy-san'),
(5, 'Cân ôtô', 0, 'can-oto'),
(6, 'Cân hệ thống', 0, 'can-he-thong'),
(7, 'Cân thông thường', 0, 'can-thong-thuong'),
(8, 'Cân bỏ túi', 0, 'can-bo-tui'),
(9, 'Cân ngành vàng', 0, 'can-nganh-vang'),
(10, 'Cân treo', 0, 'can-treo'),
(11, 'Cân bàn', 1, 'can-ban');

-- --------------------------------------------------------

--
-- Table structure for table `chitietso_mega`
--

CREATE TABLE `chitietso_mega` (
  `id` int(11) NOT NULL,
  `id_soxo_mega` int(11) NOT NULL,
  `so_trung` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `ngayquayint` int(11) NOT NULL,
  `ngayquay` date NOT NULL,
  `thutuquay` int(11) NOT NULL,
  `dauso` int(11) NOT NULL,
  `duoiso` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitietso_mega`
--

INSERT INTO `chitietso_mega` (`id`, `id_soxo_mega`, `so_trung`, `ngayquayint`, `ngayquay`, `thutuquay`, `dauso`, `duoiso`, `trangthai`) VALUES
(481, 14, '08', 1484240400, '2017-01-13', 1, 0, 8, 1),
(482, 14, '12', 1484240400, '2017-01-13', 2, 1, 2, 1),
(483, 14, '36', 1484240400, '2017-01-13', 3, 3, 6, 1),
(484, 14, '42', 1484240400, '2017-01-13', 4, 4, 2, 1),
(485, 14, '17', 1484240400, '2017-01-13', 5, 1, 7, 1),
(486, 14, '14', 1484240400, '2017-01-13', 6, 1, 4, 1),
(487, 11, '25', 1484067600, '2017-01-11', 1, 2, 5, 1),
(488, 11, '12', 1484067600, '2017-01-11', 2, 1, 2, 1),
(489, 11, '19', 1484067600, '2017-01-11', 3, 1, 9, 1),
(490, 11, '08', 1484067600, '2017-01-11', 4, 0, 8, 1),
(491, 11, '25', 1484067600, '2017-01-11', 5, 2, 5, 1),
(492, 11, '11', 1484067600, '2017-01-11', 6, 1, 1, 1),
(493, 12, '25', 1483808400, '2017-01-08', 1, 2, 5, 1),
(494, 12, '16', 1483808400, '2017-01-08', 2, 1, 6, 1),
(495, 12, '35', 1483808400, '2017-01-08', 3, 3, 5, 1),
(496, 12, '44', 1483808400, '2017-01-08', 4, 4, 4, 1),
(497, 12, '37', 1483808400, '2017-01-08', 5, 3, 7, 1),
(498, 12, '15', 1483808400, '2017-01-08', 6, 1, 5, 1),
(499, 5, '12', 1483635600, '2017-01-06', 1, 1, 2, 1),
(500, 5, '25', 1483635600, '2017-01-06', 2, 2, 5, 1),
(501, 5, '12', 1483635600, '2017-01-06', 3, 1, 2, 1),
(502, 5, '24', 1483635600, '2017-01-06', 4, 2, 4, 1),
(503, 5, '26', 1483635600, '2017-01-06', 5, 2, 6, 1),
(504, 5, '12', 1483635600, '2017-01-06', 6, 1, 2, 1),
(505, 13, '15', 1483462800, '2017-01-04', 1, 1, 5, 1),
(506, 13, '09', 1483462800, '2017-01-04', 2, 0, 9, 1),
(507, 13, '22', 1483462800, '2017-01-04', 3, 2, 2, 1),
(508, 13, '18', 1483462800, '2017-01-04', 4, 1, 8, 1),
(509, 13, '26', 1483462800, '2017-01-04', 5, 2, 6, 1),
(510, 13, '36', 1483462800, '2017-01-04', 6, 3, 6, 1),
(511, 9, '12', 1483203600, '2017-01-01', 1, 1, 2, 1),
(512, 9, '21', 1483203600, '2017-01-01', 2, 2, 1, 1),
(513, 9, '12', 1483203600, '2017-01-01', 3, 1, 2, 1),
(514, 9, '24', 1483203600, '2017-01-01', 4, 2, 4, 1),
(515, 9, '26', 1483203600, '2017-01-01', 5, 2, 6, 1),
(516, 9, '10', 1483203600, '2017-01-01', 6, 1, 0, 1),
(523, 20, '12', 1484845200, '2017-01-20', 1, 1, 2, 1),
(524, 20, '25', 1484845200, '2017-01-20', 2, 2, 5, 1),
(525, 20, '12', 1484845200, '2017-01-20', 3, 1, 2, 1),
(526, 20, '24', 1484845200, '2017-01-20', 4, 2, 4, 1),
(527, 20, '26', 1484845200, '2017-01-20', 5, 2, 6, 1),
(528, 20, '25', 1484845200, '2017-01-20', 6, 2, 5, 1),
(631, 21, '15', 1485018000, '2017-01-22', 1, 1, 5, 0),
(632, 21, '23', 1485018000, '2017-01-22', 2, 2, 3, 0),
(633, 21, '35', 1485018000, '2017-01-22', 3, 3, 5, 0),
(634, 21, '34', 1485018000, '2017-01-22', 4, 3, 4, 0),
(635, 21, '23', 1485018000, '2017-01-22', 5, 2, 3, 0),
(636, 21, '34', 1485018000, '2017-01-22', 6, 3, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `id` int(3) NOT NULL,
  `title` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`id`, `title`, `body`) VALUES
(1, 'nguyen duc hung', 'Em la ai co gai hay nang tien'),
(2, 'thu huong', 'Hom qua Thai lan da tong tien cong phong chong lu lut o bangkob');

-- --------------------------------------------------------

--
-- Table structure for table `introduc`
--

CREATE TABLE `introduc` (
  `content` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `introduc`
--

INSERT INTO `introduc` (`content`) VALUES
('<p>&nbsp;</p>\r\n<p>Mục ti&ecirc;u tổng qu&aacute;t của chiến lược ph&aacute;t triển kinh tế- x&atilde; hội 2011-2020 đ&atilde; được Đại hội Đại biểu to&agrave;n quốc lần thứ XI Đảng cộng sản Việt Nam th&ocirc;ng qua đ&oacute; l&agrave; "Phấn đấu đến năm 2020 nước ta cơ bản trở th&agrave;nh nước C&ocirc;ng nghiệp theo hướng hiện đại" v&agrave; "Đổi mới m&ocirc; h&igrave;nh tăng trưởng v&agrave; cơ cấu lại nền kinh tế; đẩy mạnh c&ocirc;ng nghiệp h&oacute;a, hiện đại h&oacute;a, ph&aacute;t triển nhanh, bền vững".&nbsp; &nbsp; Với sự ph&aacute;t triển kh&ocirc;ng ngừng của khoa học c&ocirc;ng nghệ, tất c&aacute;c lĩnh vực kinh doanh tr&ecirc;n thế giới đ&atilde; v&agrave; đang tận dụng tối đa c&aacute;c th&agrave;nh quả của khoa học c&ocirc;ng nghệ để đưa v&agrave;o qu&aacute; tr&igrave;nh sản xuất, quản l&yacute;, tổ chức hoạt động kinh doanh nhằm n&acirc;ng cao hiệu quả kinh tế. Kh&ocirc;ng nằm ngo&agrave;i xu thế đ&oacute;, hoạt động kinh doanh xổ số tr&ecirc;n thế giới đ&atilde; c&oacute; những thay đổi lớn đ&oacute; l&agrave; việc sử dụng mạng th&ocirc;ng tin, mạng viễn th&ocirc;ng, c&aacute;c thiết bị điện tử để hiện đại h&oacute;a quy tr&igrave;nh ph&aacute;t h&agrave;nh xổ số từ đ&oacute; mang đến c&aacute;c tr&ograve; chơi giải tr&iacute; c&oacute; thưởng c&oacute; t&iacute;nh linh hoạt v&agrave; giải tr&iacute; cao đ&aacute;p ứng nhu cầu vui chơi giải tr&iacute; của một bộ phận người d&acirc;n.&nbsp;&nbsp; &nbsp; Tr&ecirc;n cơ sở đ&oacute;, ng&agrave;y 11 th&aacute;ng 7 năm 2011 Thủ tướng Ch&iacute;nh phủ đ&atilde; ban h&agrave;nh Quyết định số 1109/QĐ-TTg ph&ecirc; duyệt chủ trương hiện đại ho&aacute; hoạt động kinh doanh xổ số theo đ&oacute; Ch&iacute;nh phủ cho ph&eacute;p th&agrave;nh lập C&ocirc;ng ty kinh doanh xổ số tự chọn số điện to&aacute;n để tổ chức hoạt động kinh doanh xổ số tự chọn số điện to&aacute;n tr&ecirc;n phạm vi cả nước. Đ&acirc;y l&agrave; quyết định đ&uacute;ng đắn ph&ugrave; hợp với xu thế tr&ecirc;n thế giới v&agrave; thực tiễn ph&aacute;t triển về khoa học c&ocirc;ng nghệ, điện tử viễn th&ocirc;ng ở nước ta.</p>\r\n<p><span> </span><strong>Email:</strong><a href="mailto:abc@example.com?Subject=Hello" target="_top"> abc@gmail.</a></p>\r\n<p><a href="mailto:abc@example.com?Subject=Hello" target="_top"></a><strong>Skype:</strong><a href="callTo://skypename" target="_top"> Skypename</a></p>\r\n&nbsp;&nbsp;\r\n<p>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `kienthuc`
--

CREATE TABLE `kienthuc` (
  `id` int(5) NOT NULL,
  `title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `intro` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_date` int(5) DEFAULT NULL,
  `modify_date` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kienthuc`
--

INSERT INTO `kienthuc` (`id`, `title`, `intro`, `content`, `image`, `create_date`, `modify_date`) VALUES
(7, 'Sơ cấp cứu đúng cách để tăng cơ hội sống', 'Các tai nạn thường gặp trong gia đình như bỏng, vết thương chảy máu, trật khớp, bong gân... nếu biết cách sơ cấp cứu ban đầu bạn có thể hạn chế các tổn thương, thậm chí có thể cứu sống người bị nạn. ', '<p class="Normal"><span style="font-family: arial,helvetica,sans-serif; font-size: small;">"Tr&ograve; chuyện với thầy thuốc" chiều thứ 6 tuần vừa qua  tại Trung t&acirc;m truyền th&ocirc;ng sức khỏe TP HCM, b&aacute;c sĩ Đỗ Ngọc Ch&aacute;nh, bệnh  viện Cấp cứu Trưng Vương hướng dẫn c&aacute;ch xử tr&iacute; v&agrave; sơ cứu một số chấn  thương thường gặp tại gia đ&igrave;nh như sau:</span></p>\r\n<h3 class="SubTitle"><span style="font-family: arial,helvetica,sans-serif; font-size: small;">1. Bỏng:</span></h3>\r\n<p class="Normal"><span style="font-family: arial,helvetica,sans-serif; font-size: small;">Bỏng <span style="color: #000000;">do nhiều nguy&ecirc;n nh&acirc;n: b&agrave;n  l&agrave; n&oacute;ng, b&ocirc; xe m&aacute;y, ch&aacute;y nổ b&igrave;nh ga, hỏa hoạn, nước s&ocirc;i, hơi nước n&oacute;ng,  điện, h&oacute;a chất sinh hoạt, bức xạ...</span></span></p>\r\n<p><span style="color: #000000; font-family: arial,helvetica,sans-serif; font-size: small;">\r\n<p class="Normal">Khi bị bỏng, cần quan s&aacute;t thật kỹ v&agrave; t&ugrave;y theo nguy&ecirc;n  nh&acirc;n m&agrave; xử tr&iacute;. N&ecirc;n lưu &yacute; trong những trường hợp phức tạp, phải b&igrave;nh  tĩnh xem x&eacute;t một c&aacute;ch tổng qu&aacute;t để gi&uacute;p đỡ nạn nh&acirc;n tốt nhất v&agrave; tr&aacute;nh  việc m&igrave;nh trở th&agrave;nh nạn nh&acirc;n. Đảm bảo hiện trường an to&agrave;n cho người cấp  cứu v&agrave; nạn nh&acirc;n, đặc biệt khi nguy&ecirc;n nh&acirc;n bỏng l&agrave; do h&oacute;a chất, ph&oacute;ng xạ,  ch&aacute;y nổ...</p>\r\n<p class="Normal">Sau đ&oacute; tiến h&agrave;nh sơ cứu theo thứ tự ưu ti&ecirc;n. Nếu nạn  nh&acirc;n c&oacute; vấn đề về đường thở, chấn thương cột sống, chảy m&aacute;u cần phải  tiến h&agrave;nh xử tr&iacute; trước. Trường hợp nạn nh&acirc;n c&ograve;n tỉnh, cần nhanh ch&oacute;ng  uống b&ugrave; nước.</p>\r\n<p class="Normal">Xử tr&iacute; vết thương nhanh ch&oacute;ng, nhẹ nh&agrave;ng tr&aacute;nh đau cho nạn nh&acirc;n. C&aacute;ch xử tr&iacute; bỏng c&ograve;n t&ugrave;y thuộc v&agrave;o nguy&ecirc;n nh&acirc;n g&acirc;y ra.</p>\r\n<p class="Normal"><strong><span style="color: #4f4f4f;">V&iacute; dụ bỏng do nhiệt l&agrave; loại hay gặp nhất, chiếm từ 60 đến 75%</span></strong> c&aacute;c loại bỏng, nguy&ecirc;n nh&acirc;n do lửa, nước s&ocirc;i, tiếp x&uacute;c vật n&oacute;ng. C&ocirc;ng t&aacute;c sơ cứu cần tiến h&agrave;nh tuần tự c&aacute;c bước dưới đ&acirc;y:</p>\r\n<p class="Normal">Bước 1: Loại bỏ nguy&ecirc;n nh&acirc;n g&acirc;y bỏng c&agrave;ng sớm c&agrave;ng tốt  như dập lửa, cởi bỏ quần &aacute;o đang ch&aacute;y hoặc ngấm nước s&ocirc;i, t&aacute;ch nạn nh&acirc;n  khỏi vật n&oacute;ng...</p>\r\n<p class="Normal">Bước 2: Việc sử dụng nước sạch để l&agrave;m m&aacute;t v&ugrave;ng bỏng  chỉ c&oacute; gi&aacute; trị trong khoảng 30 ph&uacute;t đầu sau khi bị bỏng n&ecirc;n cần nhanh  ch&oacute;ng ng&acirc;m v&ugrave;ng cơ thể bị bỏng v&agrave;o nước m&aacute;t. Đ&acirc;y l&agrave; biện ph&aacute;p đơn giản  nhưng kh&aacute; quan trọng trong sơ cấp cứu bỏng ban đầu. Nếu kh&ocirc;ng thể ng&acirc;m  cơ thể v&agrave;o nước m&aacute;t, c&oacute; thể d&ugrave;ng c&aacute;ch dội nước m&aacute;t hoặc đắp khăn m&aacute;t l&ecirc;n  v&ugrave;ng bị bỏng, tiến h&agrave;nh khoảng 15 đến 20 ph&uacute;t. Nếu m&ugrave;a đ&ocirc;ng cần giữ ấm  c&aacute;c phần kh&aacute;c của cơ thể.</p>\r\n<p class="Normal">Bước 3: Đưa nạn nh&acirc;n đến cơ sở y tế để điều trị.</p>\r\n</span></p>\r\n<table border="0" cellspacing="0" cellpadding="3" width="1" align="center">\r\n<tbody>\r\n<tr>\r\n<td><img src="http://vnexpress.net/Files/Subject/3b/a3/0d/c7/so_cap_cuu.jpg" border="1" alt="Khi xảy ra tai nạn, sơ cứu đ&uacute;ng c&aacute;ch . Ảnh: HCTĐ" width="490" height="350" /></td>\r\n</tr>\r\n<tr>\r\n<td class="Image">Khi xảy ra tai nạn, sơ cứu đ&uacute;ng c&aacute;ch sẽ gi&uacute;p hạn chế thương tổn v&agrave; cứu sống nạn nh&acirc;n. Ảnh: <em>HCTĐ</em></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><span style="color: #000000; font-family: arial,helvetica,sans-serif; font-size: small;">\r\n<p class="Normal"><strong><span style="color: #4f4f4f;">Lưu &yacute;:</span></strong> Da c&oacute; xu hướng giữ nhiệt l&agrave;m cho vết thương trở n&ecirc;n nặng nề hơn. Do đ&oacute; <strong><span style="color: #4f4f4f;">nguy&ecirc;n tắc quan trọng trong xử tr&iacute; bỏng l&agrave; l&agrave;m m&aacute;t ngay v&ugrave;ng da bị bỏng.</span></strong></p>\r\n<p class="Normal">Kh&ocirc;ng d&ugrave;ng nước qu&aacute; lạnh hoặc đ&aacute; chườm v&agrave;o vết bỏng,  kh&ocirc;ng l&agrave;m tổn thương c&aacute;c nốt phỏng v&igrave; c&oacute; nguy cơ g&acirc;y nhiễm tr&ugrave;ng về sau,  kh&ocirc;ng b&ocirc;i kem hoặc chất nhờn l&ecirc;n chỗ bỏng. Nếu bỏng mắt, kh&ocirc;ng được dụi  mắt. Kh&ocirc;ng cần cố gắng lấy dị vật ra khỏi chỗ bỏng.</p>\r\n<p class="Normal">Để ph&ograve;ng ngừa tai nạn bỏng, b&aacute;c sĩ Đỗ Ngọc Ch&aacute;nh  khuy&ecirc;n gia đ&igrave;nh n&ecirc;n sắp xếp c&aacute;c vật dụng trong bếp như: ph&iacute;ch nước, nồi  canh, cơm n&oacute;ng ở những nơi an to&agrave;n để tr&aacute;nh nguy cơ bị hỏa hoạn, ch&aacute;y,  nổ, điện giật; quản l&yacute;, sử dụng h&oacute;a chất sinh hoạt, chất tẩy rửa, h&oacute;a  chất c&ocirc;ng nghiệp đ&uacute;ng quy định, an to&agrave;n; để xa tầm tay trẻ em v&agrave; kh&ocirc;ng  để trẻ chơi những đồ d&ugrave;ng, h&oacute;a chất c&oacute; nguy cơ g&acirc;y bỏng.</p>\r\n<h3 class="SubTitle">2. Vết thương chảy m&aacute;u:</h3>\r\n<p class="Normal"><span style="color: #0f0f0f;">Nguy&ecirc;n nh&acirc;n thường </span><span style="color: #000000;">do  tai nạn lao động, tai nạn giao th&ocirc;ng, tai nạn trong sinh hoạt, c&aacute;c vật  sắc nhọn đ&acirc;m v&agrave;o da, phần mềm, xương bị g&atilde;y đ&acirc;m ra ngo&agrave;i l&agrave;m r&aacute;ch da,  phần mềm, r&aacute;ch, đứt mạch m&aacute;u, dập n&aacute;t ch&acirc;n tay...</span></p>\r\n<p class="Normal"><span style="color: #000000;">Khi bị chấn thương n&agrave;y thường  thấy những dấu hiệu sau: r&aacute;ch hoặc dập n&aacute;t da, phần mềm; m&aacute;u chảy từ vết  thương ra ngo&agrave;i da... Dấu hiệu to&agrave;n th&acirc;n: v&atilde; mồ h&ocirc;i, lạnh run, da xanh  t&aacute;i. Vết thương g&acirc;y chảy m&aacute;u, nếu mất m&aacute;u nhiều sẽ dẫn đến cho&aacute;ng/sốc,  bất tỉnh, tử vong.</span></p>\r\n</span></p>', 'data_uploads/tin_tuc/so_cap_cuu.jpg', 1320122351, 1320122351),
(8, 'Ông già Tây chia kẹo Halloween với giới trẻ Việt', 'Tươi cười chia các tấm thiệp nhỏ màu đỏ ghi bài hát Three Little Witches và những viên kẹo nhỏ cho bạn học đêm Halloween, "cậu" sinh viên 62 tuổi Jack Foulston khuấy động sân trường Khoa học xã hội nhân văn TP HCM. ', '<table border="0" cellspacing="0" cellpadding="3" width="1" align="center">\r\n<tbody>\r\n<tr>\r\n<td><span style="font-size: small;"><img src="http://vnexpress.net/Files/Subject/3b/a3/0d/b6/Jack-Foulston-2-1.jpg" alt="&Ocirc;ng gi&agrave; sinh vi&ecirc;n 62 tuổi tặng thiệp Halloween cho bạn học. Ảnh: L&ecirc; Phương" width="490" height="350" /></span></td>\r\n</tr>\r\n<tr>\r\n<td class="Image"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">&Ocirc;ng gi&agrave; sinh vi&ecirc;n 62 tuổi tặng thiệp Halloween cho bạn học. Ảnh: <em>L&ecirc; Phương</em></span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">Nơi n&agrave;o Jack Foulston xuất hiện l&agrave; nơi ấy lại tr&agrave;n  ngập tiếng cười. &Ocirc;ng hướng dẫn v&agrave; bắt nhịp cho từng tốp sinh vi&ecirc;n h&aacute;t  b&agrave;i ca "truyền thống" của đ&ecirc;m hội ma. Những giai điệu &ldquo;One little two  little three little witches/ Flying over haystacks/ Flying over  ditches&hellip;&rdquo; của b&agrave;i h&aacute;t Three Little Witches vang l&ecirc;n rộn r&atilde;.</span></p>\r\n<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">Ba năm nay, cứ mỗi năm Foulston đến Việt Nam 6 th&aacute;ng  để đăng k&yacute; học tiếng Việt tại trường Đại học Khoa học x&atilde; hội nh&acirc;n văn TP  HCM. Con rể của &ocirc;ng l&agrave; người Việt Nam, sui gia sinh sống tại Canada.  &ldquo;Họ l&agrave; người Việt nhưng n&oacute;i được tiếng nước t&ocirc;i, điều n&agrave;y th&ocirc;i th&uacute;c một  người Canada như t&ocirc;i đến Việt Nam học tiếng Việt để tr&ograve; chuyện bằng  tiếng Việt với họ. Th&ecirc;m nữa t&ocirc;i rất l&agrave; y&ecirc;u đất nước v&agrave; con người Việt  Nam&rdquo;, &ocirc;ng gi&agrave; T&acirc;y h&oacute;m hỉnh chia sẻ.</span></p>\r\n<table border="0" cellspacing="0" cellpadding="3" width="1" align="center">\r\n<tbody>\r\n<tr>\r\n<td><span style="font-size: small; font-family: arial,helvetica,sans-serif;"><img src="http://vnexpress.net/Files/Subject/3b/a3/0d/b6/Jack-Foulston-1-1.jpg" alt="... V&agrave; l&agrave;m quen với bạn mới. Ảnh: L&ecirc; Phương" width="490" height="350" /></span></td>\r\n</tr>\r\n<tr>\r\n<td class="Image"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">... V&agrave; l&agrave;m quen với bạn mới. Ảnh: <em>L&ecirc; Phương</em></span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">Mỗi năm v&agrave;o ng&agrave;y hội ma, Noel, đầu năm mới, Foulston  đều tự tay viết những tấm thiệp tặng cho người th&acirc;n. Đ&ecirc;m Halloween năm  nay, &ocirc;ng kh&ocirc;ng được sống trong kh&ocirc;ng kh&iacute; lễ hội truyền thống của qu&ecirc; nh&agrave;  nhưng ch&iacute;nh việc được giao lưu, đem lại niềm vui cho c&aacute;c bạn sinh vi&ecirc;n  Việt Nam đ&atilde; gi&uacute;p Foulston cảm thấy rất hạnh ph&uacute;c.</span></p>\r\n<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">Halloween l&agrave; lễ hội truyền thống của trẻ em c&aacute;c nước  phương T&acirc;y. Thường th&igrave; trong ng&agrave;y 31/10, những đứa trẻ sẽ h&oacute;a trang  trong những bộ trang phục kỳ qu&aacute;i đến g&otilde; cửa từng ng&ocirc;i nh&agrave; để xin b&aacute;nh  kẹo. &ldquo;Ở Việt Nam t&ocirc;i thấy người lớn chơi lễ hội n&agrave;y l&agrave; chủ yếu, điều n&agrave;y  cũng rất đ&aacute;ng khuyến kh&iacute;ch nhưng nếu quan t&acirc;m nhiều hơn đến Halloween  cho trẻ em th&igrave; c&agrave;ng tốt hơn nữa&rdquo;, Foutston cười tươi.</span></p>\r\n<table border="0" cellspacing="0" cellpadding="3" width="1" align="center">\r\n<tbody>\r\n<tr>\r\n<td><span style="font-size: small; font-family: arial,helvetica,sans-serif;"><img src="http://vnexpress.net/Files/Subject/3b/a3/0d/b6/Tay-Halloween-8-1.jpg" border="1" alt="Một m&agrave;n vui nhộn Halloween của kh&aacute;ch T&acirc;y ở Huế đ&ecirc;m 31/10. Ảnh: Nguyễn Đ&ocirc;ng" width="490" height="350" /></span></td>\r\n</tr>\r\n<tr>\r\n<td class="Image"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">Một m&agrave;n vui nhộn Halloween của kh&aacute;ch T&acirc;y ở Huế đ&ecirc;m 31/10. Ảnh: <em>Nguyễn Đ&ocirc;ng</em></span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;"><strong><a href="http://vnexpress.net/gl/doi-song/cau-chuyen-cuoc-song/2011/11/ong-gia-tay-chia-keo-halloween-voi-gioi-tre-viet/page_2.asp">Kh&aacute;ch T&acirc;y ở Huế vui nhộn trong đ&ecirc;m hội ma</a></strong></span></p>\r\n<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">Đ&ecirc;m qua, cộng đồng người nước ngo&agrave;i ở Huế cũng trải  qua một lễ hội Halloween s&ocirc;i động, vui nhộn, đầy m&agrave;u sắc. Lễ hội được tổ  chức ở khu phố T&acirc;y (khu vực đường L&ecirc; Lợi, Phạm Ngũ L&atilde;o, V&otilde; Thị S&aacute;u).  Trong những bộ trang phục v&agrave; mặt nạ h&oacute;a trang, c&aacute;c vị kh&aacute;ch nước ngo&agrave;i  th&iacute;ch th&uacute; chơi c&ugrave;ng giới trẻ Việt, c&oacute; người thậm ch&iacute; lao l&ecirc;n b&agrave;n nhảy  nh&oacute;t m&uacute;a may quay cuồng.</span></p>', 'data_uploads/tin_tuc/Jack-Foulston-1-1.jpg', 1320122635, 1320122635),
(9, 'Sốt xuất huyết tăng mạnh tại Hà Nội', 'Trong 7 tháng đầu năm, Bệnh viện Bệnh Nhiệt đới Trung ương chỉ điều trị cho gần 90 bệnh nhân sốt xuất huyết thì nay chỉ riêng tháng 10, con số này đã lên đến hơn 280. Các ca mắc tập trung chủ yếu ở Hà Nội.', '<p class="Normal"><span style="font-family: arial, helvetica, sans-serif; font-size: small;">Tự dưng thấy người sốt cao đ&ugrave;ng đ&ugrave;ng, chị Lan (Ho&agrave;ng Mai, H&agrave; Nội) nghĩ m&igrave;nh chỉ bị sốt virus b&igrave;nh thường, uống thuốc v&agrave;o l&agrave; khỏi. Thế nhưng uống thuốc v&agrave;o th&igrave; hạ, một l&aacute;t sau lại sốt cao, cứ như thế trong 3 ng&agrave;y liền. Đến ng&agrave;y thứ 4, chị thấy người mệt r&atilde; rời, cứ như người bị hụt hơi, tr&ecirc;n da bắt đầu xuất hiện ban đỏ. Hoảng qu&aacute;, chị mới đến bệnh viện kh&aacute;m th&igrave; biết m&igrave;nh bị sốt virus.</span></p>\r\n<p class="Normal"><span style="font-family: arial, helvetica, sans-serif; font-size: small;">"Ở gần nh&agrave; m&igrave;nh cũng c&oacute; mấy c&ocirc;, cậu sinh vi&ecirc;n bị sốt xuất huyết rồi, kh&ocirc;ng ngờ l&agrave; m&igrave;nh cũng mắc. B&aacute;c sĩ n&oacute;i tiểu cầu c&oacute; giảm nhưng kh&ocirc;ng qu&aacute; nghi&ecirc;m trọng, điều trị một v&agrave;i ng&agrave;y l&agrave; khỏi", chị Lan n&oacute;i.</span></p>\r\n<p class="Normal"><span style="font-family: arial, helvetica, sans-serif; font-size: small;">Theo thống k&ecirc; của Bệnh viện Bệnh Nhiệt đới Trung ương, c&aacute;c ca bệnh rải r&aacute;c từ đầu năm v&agrave; c&oacute; xu hướng tăng mạnh từ th&aacute;ng 8. Trước kia cả th&aacute;ng mới chỉ c&oacute; 5,6 ca nhập viện th&igrave; nay một ng&agrave;y c&oacute; khoảng 10 bệnh nh&acirc;n.</span></p>\r\n<table border="0" cellspacing="0" cellpadding="3" width="1" align="center">\r\n<tbody>\r\n<tr>\r\n<td><span style="font-family: arial, helvetica, sans-serif; font-size: small;"><img src="http://vnexpress.net/Files/Subject/3b/a3/0e/1d/SXH1.jpg" alt="Ảnh: Dương Ngọc." width="400" height="293" /></span></td>\r\n</tr>\r\n<tr>\r\n<td class="Image"><span style="font-family: arial, helvetica, sans-serif; font-size: small;">Một bệnh nh&acirc;n sốt xuất huyết đang điều trị tại Bệnh viện Bệnh Nhiệt đới Trung ương. Ảnh:&nbsp;<em>Dương Ngọc.</em></span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p class="Normal"><span style="font-family: arial, helvetica, sans-serif; font-size: small;">Thạc sĩ - b&aacute;c sĩ Nguyễn Tiến L&acirc;m, Trưởng khoa Virus k&yacute; sinh tr&ugrave;ng, Bệnh viện Bệnh Nhiệt đới trung ương cho biết, so với c&aacute;c thời điểm kh&aacute;c trong năm th&igrave; đ&acirc;y l&agrave; thời điểm số lượng bệnh nh&acirc;n v&agrave;o sẽ tăng l&ecirc;n rất nhiều. Theo quy luật, đỉnh dịch sẽ l&agrave; v&agrave;o th&aacute;ng 10 v&agrave; 11, sau đ&oacute; thời tiết lạnh, số lượng bệnh nh&acirc;n giảm dần v&agrave; hết v&agrave;o khoảng cuối th&aacute;ng 12, đầu th&aacute;ng 1. Dịch diễn biến đ&uacute;ng theo quy luật.</span></p>\r\n<p class="Normal"><span style="font-family: arial, helvetica, sans-serif; font-size: small;">"Theo d&otilde;i c&aacute;c vụ dịch trong 30-40 năm vừa qua th&igrave; tại miền Bắc h&agrave;ng năm c&aacute;c ca mắc sốt xuất huyết chỉ rải r&aacute;c, nếu dịch th&igrave; cứ định kỳ 2-3 năm l&ecirc;n một đợt dịch. Năm 2009, dịch sốt xuất huyết b&ugrave;ng ph&aacute;t mạnh ở H&agrave; Nội v&agrave; nhiều tỉnh miền Bắc th&igrave; đến năm nay l&agrave; đ&uacute;ng chu kỳ 2 năm của dịch", thạc sĩ L&acirc;m l&yacute; giải.</span></p>\r\n<p class="Normal"><span style="font-family: arial, helvetica, sans-serif; font-size: small;">Cũng theo &ocirc;ng, c&aacute;c ca bệnh chủ yếu l&agrave; sốt xuất huyết thể th&ocirc;ng thường, tỷ lệ ca nặng thấp, chưa c&oacute; trường hợp n&agrave;o tử vong.&nbsp;<strong><span style="color: #2f2f2f;">So với c&aacute;c vụ dịch trước, năm nay c&oacute; một điểm hơi kh&aacute;c về bệnh cảnh, đ&oacute; l&agrave; thời gian tiến triển của bệnh từ thời kỳ khởi ph&aacute;t, thời kỳ to&agrave;n ph&aacute;t đến l&uacute;c lui bệnh c&oacute; vẻ d&agrave;i ra.</span></strong></span></p>\r\n<p class="Normal"><span style="font-family: arial, helvetica, sans-serif; font-size: small;">Cụ thể, những năm trước sốt ng&agrave;y thứ 3,5 tiểu cầu giảm rất nhiều, giảm r&otilde; nhưng năm nay c&oacute; trường hợp ng&agrave;y thứ 6,7 thậm ch&iacute; thứ 8, sốt bắt đầu xuống, l&uacute;c đ&oacute; tiểu cầu mới hạ nhiều, triệu chứng của bệnh mới r&otilde;. Thời gian phục hồi tiểu cầu trong m&aacute;u cũng d&agrave;i hơn, c&oacute; trường hợp đến 10 ng&agrave;y.</span></p>\r\n<p class="Normal"><span style="font-family: arial, helvetica, sans-serif; font-size: small;">C&aacute;c b&aacute;c sĩ khuyến c&aacute;o, dấu hiệu l&acirc;m s&agrave;ng của bệnh kh&ocirc;ng r&otilde; r&agrave;ng, giống như sốt th&ocirc;ng thường v&igrave; thế m&agrave; bệnh kh&oacute; chẩn đo&aacute;n ở giai đoạn đầu. Người bệnh thường c&oacute; biểu hiện: sốt cao đột ngột, 39-40 độ C, k&egrave;m c&aacute;c triệu chứng như: mệt mỏi, ch&aacute;n ăn, đau người, đau cơ, thường sau 2 - 3 ng&agrave;y da mới xung huyết hoặc c&oacute; ph&aacute;t ban.</span></p>\r\n<p class="Normal"><span style="font-family: arial, helvetica, sans-serif; font-size: small;">Vị tr&iacute; xuất huyết tr&ecirc;n cơ thể cũng rất t&igrave;nh cờ v&agrave; nếu chảy m&aacute;u cơ quan nội tạng, người bệnh thường kh&ocirc;ng tự nhận biết được v&igrave; kh&ocirc;ng để &yacute;. Chẳng hạn, nếu phụ nữ đang đ&uacute;ng thời kỳ kinh nguyệt m&agrave; bị sốt xuất huyết c&oacute; thể khiến kỳ kinh k&eacute;o d&agrave;i hơn, ra nhiều m&aacute;u hơn. Với những người c&oacute; tiền sử đau dạ d&agrave;y sẽ dễ bị xuất huyết dạ d&agrave;y.</span></p>\r\n<p class="Normal"><span style="font-family: arial, helvetica, sans-serif; font-size: small;">T&ugrave;y từng người m&agrave; bệnh diễn tiến nặng nhẹ kh&aacute;c nhau. Với những người c&oacute; biểu hiện rất nhẹ chỉ sốt th&igrave; c&oacute; thể tự theo d&otilde;i v&agrave; điều trị tại nh&agrave;, khi thấy dấu hiệu nặng hơn mới nhập viện. Ở nh&agrave;, bệnh nh&acirc;n cần nằm nghỉ ngơi tuyệt đối, ăn c&aacute;c chất dễ ti&ecirc;u, đặc biệt l&agrave; uống nhiều nước.</span></p>\r\n<p class="Normal"><span style="font-family: arial, helvetica, sans-serif; font-size: small;">Tuy nhi&ecirc;n, d&ugrave; thế n&agrave;o người bệnh cũng kh&ocirc;ng được chủ quan. Bệnh nh&acirc;n thường sốt rất cao 1- 2 ng&agrave;y đầu nhưng kh&ocirc;ng nguy hiểm nhiều. Nguy hiểm thường ở ng&agrave;y thứ 3-6, l&uacute;c đ&oacute;, người bệnh mệt lả đi, đ&aacute;i &iacute;t, tiểu cầu sụt giảm, xuất hiện nguy cơ chảy m&aacute;u, sốc.</span></p>\r\n<p class="Normal"><span style="font-family: arial, helvetica, sans-serif; font-size: small;">Với những người đang sống trong v&ugrave;ng dịch, khi c&oacute; c&aacute;c dấu hiệu như: sốt cao đột ngột, đau người, đau đầu, nhức cơ bắp, đặt biệt l&agrave; đau 2 hốc mắt, chảy m&aacute;u mũi, m&aacute;u răng, nổi nốt li ti, phụ nữ bị rối loạn kinh nguyệt... th&igrave; n&ecirc;n đi kh&aacute;m.</span></p>', 'data_uploads/tin_tuc/SXH1.jpg', 1320195669, 1320209998);

-- --------------------------------------------------------

--
-- Table structure for table `loaisoxo`
--

CREATE TABLE `loaisoxo` (
  `id` int(11) NOT NULL,
  `tensoxo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thoigian_quay` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(5) NOT NULL,
  `title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `intro` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_date` int(5) DEFAULT NULL,
  `modify_date` int(5) DEFAULT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `intro`, `content`, `image`, `create_date`, `modify_date`, `active`) VALUES
(5, 'Hướng dẫn lĩnh thưởng', 'Năm học mới 2011-2012, trường Chu Văn An, một trong 3 trường tiểu học trọng điểm tại Hải Phòng, thí điểm học sinh lớp 1 không phải mang cặp và làm bài tập về nhà buổi tối.', '<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">Năm học mới 2011-2012, trường Chu Văn An, một trong 3  trường tiểu học trọng điểm tại Hải Ph&ograve;ng, th&iacute; điểm học sinh lớp 1 kh&ocirc;ng  phải mang cặp v&agrave; l&agrave;m b&agrave;i tập về nh&agrave; buổi tối. Theo Hiệu trưởng Trịnh Thị  Minh, việc l&agrave;m n&agrave;y xuất ph&aacute;t từ nhu cầu thực tế suốt 30 năm gắn b&oacute; với  nghề gi&aacute;o.</span></p>\r\n<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">&ldquo;Khi nh&igrave;n những đứa con t&ocirc;i phải c&otilde;ng nhiều s&aacute;ch vở  tới trường suốt mấy năm kh&ocirc;ng cao th&ecirc;m cm n&agrave;o, c&agrave;ng ng&agrave;y chiếc cặp đi  học c&agrave;ng nặng theo thời gian, t&ocirc;i trăn trở nghĩ đến phải l&agrave;m một điều g&igrave;  đ&oacute; để đổi mới&rdquo;, c&ocirc; Minh chia sẻ.</span></p>\r\n<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">Th&aacute;ng 9 vừa qua, trường tiểu học Chu Văn An bắt đầu  th&iacute; điểm việc học sinh lớp 1 kh&ocirc;ng phải mang cặp tới trường. Mỗi em sẽ  c&oacute; một ngăn tủ ri&ecirc;ng tại lớp để đựng s&aacute;ch vở v&agrave; đồ d&ugrave;ng c&aacute; nh&acirc;n. Cặp  s&aacute;ch được mang về v&agrave;o ng&agrave;y thứ s&aacute;u cuối tuần để c&aacute;c em thuận tiện trong  việc &ocirc;n lại b&agrave;i vở 2 ng&agrave;y nghỉ.</span></p>\r\n<table border="0" cellspacing="0" cellpadding="3" width="1" align="center">\r\n<tbody>\r\n<tr>\r\n<td><span style="font-size: small; font-family: arial,helvetica,sans-serif;"><img src="http://vnexpress.net/Files/Subject/3b/a3/0d/e6/tu_dung_sach_vo_va_do_dung_ca_nhan.JPG" alt="tu do dung" width="495" height="333" /></span></td>\r\n</tr>\r\n<tr>\r\n<td class="Image"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">Tại lớp học, mỗi em c&oacute; một tủ đồ c&aacute; nh&acirc;n. Ảnh: <em>Hồng Nhung.</em></span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">&Yacute; tưởng đổi mới của c&ocirc; Minh nhận được sự ủng hộ của Sở  GD&amp;ĐT Hải Ph&ograve;ng v&agrave; đa số phụ huynh c&oacute; con v&agrave;o lớp 1. Tuy nhi&ecirc;n, v&igrave;  l&agrave; trường đầu ti&ecirc;n th&iacute; điểm n&ecirc;n đối mặt nhiều kh&oacute; khăn. &ldquo;Học sinh lớp 1  mới từ mẫu gi&aacute;o l&ecirc;n, mải chơi hơn mải học. Với c&aacute;c ch&aacute;u tiếp thu chậm,  nếu buổi tối kh&ocirc;ng về nh&agrave; k&egrave;m th&ecirc;m b&agrave;i tập th&igrave; chưa chắc đ&atilde; theo kịp&rdquo;,  chị Cao Thị Thu, một phụ huynh học sinh chia sẻ.</span></p>\r\n<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">Ph&iacute;a gi&aacute;o vi&ecirc;n chủ nhiệm cũng phải mất nhiều thời gian  hơn cho học sinh. C&ocirc; gi&aacute;o Nhữ Thị Thanh Dung, chủ nhiệm lớp 1A5 trường  tiểu học Chu Văn An cho biết, tranh thủ giờ ra chơi hay những buổi chiều  muộn, c&ocirc; tr&ograve; c&ugrave;ng &ocirc;n b&agrave;i. &ldquo;Trong lớp c&aacute;c con tiếp thu nhanh chậm kh&aacute;c  nhau. Để bạn học chậm đuổi kịp c&aacute;c bạn chỉ c&oacute; c&aacute;ch c&ocirc; tr&ograve; c&ugrave;ng học&rdquo;, c&ocirc;  Dung giải th&iacute;ch.</span></p>\r\n<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">C&ocirc; Dung cho biết th&ecirc;m, c&aacute;ch đ&acirc;y một th&aacute;ng, đa số c&aacute;c  con đều chưa quen với việc tự sắp xếp đồ d&ugrave;ng s&aacute;ch vở th&igrave; b&acirc;y giờ &ocirc; đồ  của bạn n&agrave;o bạn nấy đ&atilde; biết c&aacute;ch quản l&yacute;. "Nhiều bạn tỏ ra tiến bộ trong  việc tự phục vụ bản th&acirc;n, biết c&aacute;ch tự bơm mực, xếp đồ đạc v&agrave; c&ograve;n gi&uacute;p  đỡ bạn kh&aacute;c l&agrave;m chậm hơn m&igrave;nh&rdquo;, c&ocirc; Dung kể.</span></p>\r\n<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">Kỳ kiểm tra vừa qua, hơn 95% học sinh lớp 1A5 của c&ocirc; Dung đều đạt điểm 8 trở l&ecirc;n c&aacute;c m&ocirc;n To&aacute;n, Tiếng Việt.</span></p>', 'data_uploads/tin_tuc/a2.JPG', 1320121576, 1484455779, 1),
(6, 'Lần đầu tiên có vé trúng thưởng Jackpot vào thứ Sáu', 'Năm học mới 2011-2012, trường Chu Văn An, một trong 3 trường tiểu học trọng điểm tại Hải Phòng, thí điểm học sinh lớp 1 không phải mang cặp và làm bài tập về nhà buổi tối.', '<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">Nh&oacute;m thứ nhất gồm học sinh, sinh vi&ecirc;n c&aacute;c trường đại  học, cao đẳng, trung học chuy&ecirc;n nghiệp - dạy nghề v&agrave; THPT, bắt đầu học  từ 7h, kết th&uacute;c v&agrave;o 18h. Nh&oacute;m hai l&agrave; c&aacute;c trung t&acirc;m thương mại, cơ quan  dịch vụ, t&agrave;i ch&iacute;nh ng&acirc;n h&agrave;ng bắt đầu mở cửa từ 9h, đ&oacute;ng cửa sau 19h.  Nh&oacute;m ba gồm c&ocirc;ng chức, vi&ecirc;n chức, học sinh c&aacute;c trường mầm non, tiểu học,  trung học cơ sở... c&ugrave;ng l&agrave;m việc v&agrave; học tập từ 8h, kết th&uacute;c 17h.</span></p>\r\n<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">Ngo&agrave;i ra, theo điều kiện của từng trường, Sở GD&amp;ĐT  c&oacute; thể điều chỉnh cục bộ giờ v&agrave;o học, tan học để đảm bảo &iacute;t ảnh hưởng  đến học sinh, phụ huynh. Phương &aacute;n điều chỉnh giờ, tần suất hoạt động  của nhiều tuyến xe bu&yacute;t cũng được t&iacute;nh đến khi khung giờ cao điểm c&oacute; thể  k&eacute;o d&agrave;i th&ecirc;m một giờ.</span></p>\r\n<table border="0" cellspacing="0" cellpadding="3" width="1" align="center">\r\n<tbody>\r\n<tr>\r\n<td><span style="font-size: small; font-family: arial,helvetica,sans-serif;"><img src="http://vnexpress.net/Files/Subject/3b/a3/0d/af/a1.jpg" alt="&Ugrave;n tắc" width="495" height="338" /></span></td>\r\n</tr>\r\n<tr>\r\n<td class="Image"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">Giao th&ocirc;ng lộn xộn tr&ecirc;n nhiều tuyến phố ở thủ đ&ocirc;. Ảnh: <em>Tiến Dũng.</em></span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">Theo đại diện Th&agrave;nh ủy H&agrave; Nội, nếu được Thủ tướng ph&ecirc;  duyệt, việc đổi giờ học, giờ l&agrave;m tr&ecirc;n địa b&agrave;n sẽ triển khai từ ng&agrave;y  1/12/2011 hoặc 1/1/2012.</span></p>\r\n<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">Phương &aacute;n n&agrave;y dựa tr&ecirc;n đề xuất của c&aacute;c sở ng&agrave;nh H&agrave;  Nội, như thu hẹp nh&oacute;m, kh&ocirc;ng thay đổi giờ l&agrave;m của c&ocirc;ng chức, vi&ecirc;n chức  trung ương v&agrave; H&agrave; Nội. Hiện giờ l&agrave;m việc của c&aacute;c cơ quan trung ương tại  H&agrave; Nội l&agrave; từ 7h30 đến 16h30; của c&aacute;c cơ quan th&agrave;nh phố l&agrave; từ 8h đến 19h.</span></p>\r\n<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">Trước đ&oacute; 4 ng&agrave;y, Bộ Giao th&ocirc;ng Vận tải đ&atilde; tr&igrave;nh Ch&iacute;nh  phủ phương &aacute;n đổi giờ học, giờ l&agrave;m theo 9 nh&oacute;m. Điểm thay đổi lớn nhất  của đề &aacute;n n&agrave;y l&agrave; đẩy l&ugrave;i giờ l&agrave;m việc của c&ocirc;ng chức cơ quan quan trung  ương xuống muộn c&ograve;n 9h v&agrave; kết th&uacute;c l&uacute;c 18h; c&ocirc;ng chức của H&agrave; Nội cũng  được đề xuất đi l&agrave;m muộn một giờ so với hiện nay.</span></p>\r\n<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">Ri&ecirc;ng học sinh, sinh vi&ecirc;n được Bộ chia ra l&agrave;m 6 nh&oacute;m  học tập v&agrave;o những giờ kh&aacute;c nhau. Cụ thể bậc mầm non đến THCS học b&aacute;n tr&uacute;  từ 8h đến 17h30. Học sinh THPT học ca s&aacute;ng 7-11h; ca chiều 12h30-16h30.  Giờ học của sinh vi&ecirc;n được ph&acirc;n chia cụ thể theo địa b&agrave;n quận. C&ograve;n  trung t&acirc;m kinh doanh, thương mại sẽ mở cửa từ 9h30 đến 23h30.</span></p>\r\n<p class="Normal"><span style="font-size: small; font-family: arial,helvetica,sans-serif;">Chủ trương điều chỉnh giờ l&agrave;m việc, giờ học đ&atilde; được  Thủ tướng chỉ đạo thực hiện, đ&acirc;y được coi l&agrave; một trong những giải ph&aacute;p  giảm &ugrave;n tắc giao th&ocirc;ng tại H&agrave; Nội v&agrave; TP HCM. Ph&aacute;t biểu trước Quốc hội,  Bộ trưởng Đinh La Thăng thừa nhận việc đổi giờ l&agrave;m việc thực sự cũng g&acirc;y  x&aacute;o trộn, ảnh hưởng đến sinh hoạt của người d&acirc;n, nhưng nếu hy sinh lợi  &iacute;ch nhỏ m&agrave; kh&ocirc;ng &ugrave;n tắc giao th&ocirc;ng, giảm tai nạn giao th&ocirc;ng th&igrave; người  d&acirc;n cũng được lợi.</span></p>', 'data_uploads/tin_tuc/a1.jpg', 1320121615, 1484455804, 1),
(7, 'Vietlott đã thực hiện trả thưởng giải Jackpot kỳ quay số mở thưởng số 69', 'Năm học mới 2011-2012, trường Chu Văn An, một trong 3 trường tiểu học trọng điểm tại Hải Phòng, thí điểm học sinh lớp 1 không phải mang cặp và làm bài tập về nhà buổi tối.', '<div class="relative_new">\n<div><span style="font-size: 20px;"><strong><br /></strong></span></div>\n</div>\n<div id="left_calculator">\n<div class="fck_detail width_common block_ads_connect">\n<p class="Normal">Ng&agrave;y 15/1, l&agrave;m việc với l&atilde;nh đạo Cảng vụ h&agrave;ng kh&ocirc;ng quốc tế T&acirc;n Sơn Nhất, B&iacute; thư Th&agrave;nh ủy TP HCM Đinh La Thăng đề nghị đơn vị n&agrave;y nghi&ecirc;n cứu kết nối từ s&acirc;n bay tho&aacute;t ra b&ecirc;n ngo&agrave;i, tổ chức lại giao th&ocirc;ng cho ph&ugrave; hợp. Đặc biệt l&agrave; đưa thủ tục check-in ra b&ecirc;n ngo&agrave;i, kh&ocirc;ng cho taxi v&agrave;o trong s&acirc;n bay m&agrave; d&ugrave;ng xe bu&yacute;t đưa đ&oacute;n h&agrave;nh kh&aacute;ch từ nơi check-in v&agrave;o.</p>\n<p class="Normal">"Đưa đ&oacute;n người th&acirc;n, người nh&agrave; cũng chỉ ở đấy th&ocirc;i. B&acirc;y giờ cứ dồn v&agrave;o đấy hết, cứ một người đi th&igrave; 10 người tiễn, một người về th&igrave; 10 người đ&oacute;n. Mỗi người cưỡi một chiếc taxi v&agrave;o th&igrave; s&acirc;n bay n&agrave;o chịu nổi. Chưa n&oacute;i đến taxi Uber v&agrave; Grab tăng kinh khủng, n&ecirc;n phải tổ chức lại", &ocirc;ng Thăng n&oacute;i.</p>\n<p class="Normal">Theo người đứng đầu Th&agrave;nh ủy TP HCM, c&ocirc;ng suất T&acirc;n Sơn Nhất theo quy hoạch chỉ c&oacute; 25 triệu h&agrave;nh kh&aacute;ch m&agrave; nay đ&atilde; 32 triệu. Năm 2017, chắc chắn sẽ tăng l&ecirc;n khoảng 40 triệu lượt. "Ch&uacute;ng ta kh&ocirc;ng cản được nhu cầu của người d&acirc;n, c&aacute;c h&atilde;ng h&agrave;ng kh&ocirc;ng đ&atilde; th&ecirc;m m&aacute;y bay rồi, cần chủ động cho việc mở cửa bầu trời", &ocirc;ng n&oacute;i.</p>\n<table class="tplCaption" border="0" cellspacing="0" cellpadding="3" align="center">\n<tbody>\n<tr>\n<td><img src="http://img.f29.vnecdn.net/2017/01/15/bi-thu-tu-9142-1484474869.jpg" alt="ong-dinh-la-thang-mot-nguoi-ve-10-nguoi-don-lam-sao-san-bay-khong-qua-tai" width="311" height="200" /></td>\n</tr>\n<tr>\n<td>\n<p class="Image">B&iacute; thư Th&agrave;nh ủy Đinh La Thăng ph&aacute;t biểu chỉ đạo tại buổi l&agrave;m việc. Ảnh:&nbsp;<em>Thi&ecirc;n Ng&ocirc;n</em></p>\n</td>\n</tr>\n</tbody>\n</table>\n<p class="Normal"><span>"Đ&oacute; l&agrave; theo quy luật kinh tế thị trường, ch&uacute;ng ta kh&ocirc;ng thể cản được. V&igrave; đ&acirc;y l&agrave; ph&aacute;t triển cho nhiều ng&agrave;nh kh&aacute;c, kinh tế thị trường nhưng c&ograve;n l&agrave; tr&aacute;ch nhiệm x&atilde; hội. C&ugrave;ng với đầu tư s&acirc;n bay Long Th&agrave;nh, ch&uacute;ng ta cũng phải n&acirc;ng cao tr&aacute;ch nhiệm, tr&igrave;nh độ tại T&acirc;n Sơn Nhất", &ocirc;ng Thăng đề nghị.</span></p>\n<p class="Normal">B&aacute;o c&aacute;o với B&iacute; thư Th&agrave;nh ủy TP HCM, &ocirc;ng Đặng Tuấn T&uacute;, Gi&aacute;m đốc Cảng h&agrave;ng kh&ocirc;ng quốc tế T&acirc;n Sơn Nhất cho biết đ&atilde; tập trung cao nhất để giảm qu&aacute; tải như chỉnh sửa bến đậu, mở rộng giai đoạn một ga quốc tế, nh&agrave; ga quốc tế sau cải tạo ban đầu b&ugrave; đắp ngay qu&aacute; tải năm nay.</p>\n<p class="Normal">"C&aacute;i được lớn nhất l&agrave; đ&atilde; l&agrave;m được đường lăn M1, trước đ&acirc;y phụ thuộc mỗi đường lăn Bắc Nam, thời gian lăn chờ của c&aacute;c h&atilde;ng t&agrave;u bay đỡ hơn", &ocirc;ng T&uacute; n&oacute;i v&agrave; cho biết s&acirc;n bay cũng x&acirc;y dựng b&atilde;i đậu cho taxi chứ kh&ocirc;ng như trước đ&acirc;y chạy ngang qua nh&agrave; ga quốc tế, giao cắt với sảnh đ&oacute;n, n&ecirc;n kh&ocirc;ng c&ograve;n &ugrave;n ứ ở b&atilde;i.</p>\n<p class="Normal">Về c&ocirc;ng nghệ, &ocirc;ng T&uacute; cho biết cũng đ&atilde; đẩy mạnh check-in qua Internet, cả quốc tế v&agrave; quốc nội kh&aacute; đồng bộ. Cải tiến quy tr&igrave;nh khai th&aacute;c trong nh&agrave; ga, g&oacute;p phần n&acirc;ng cao năng lực c&aacute;c h&atilde;ng, bố tr&iacute; tiện &iacute;ch trong nh&agrave; ga.&nbsp;<span>Để phục vụ cao điểm Tết, s&acirc;n bay đ&atilde; ph&acirc;n luồng tuyến, tăng cường lực lượng tối đa, 100% c&aacute;n bộ nh&acirc;n vi&ecirc;n đi l&agrave;m...</span></p>\n<p class="Normal">Về quản l&yacute; bay, theo &ocirc;ng T&uacute; s&acirc;n bay đ&atilde; đưa đường R1 v&agrave;o khai th&aacute;c, l&agrave;m cho t&igrave;nh trạng t&agrave;u bay chờ đợi giảm đ&aacute;ng kể. Trước đ&acirc;y 40-42 bay chờ, tr&ecirc;n 200 lần chuyến, nhưng khi đưa phương thức n&agrave;y v&agrave;o giảm hơn 50%, c&oacute; những l&uacute;c cơ bản kh&ocirc;ng c&oacute; bay chờ, gi&uacute;p n&acirc;ng cao chất lượng bay rất nhiều.</p>\n<p class="Normal">Kh&ocirc;ng đồng t&igrave;nh với b&aacute;o c&aacute;o, &ocirc;ng Thăng chất vấn: "C&aacute;c anh n&oacute;i đ&atilde; giảm c&aacute;c m&aacute;y bay chờ nhưng c&aacute;ch đ&acirc;y một tuần t&ocirc;i đi Cam Ranh, m&aacute;y bay của t&ocirc;i phải chờ sau 11 m&aacute;y bay kh&aacute;c, sau m&aacute;y bay t&ocirc;i đi c&ograve;n c&aacute;c m&aacute;y bay kh&aacute;c nữa. Kh&ocirc;ng biết c&aacute;c anh điều h&agrave;nh kiểu g&igrave;? C&aacute;c &ocirc;ng bảo bay l&ograve;ng v&ograve;ng tr&ecirc;n kh&ocirc;ng l&agrave; do qu&aacute; tải, nhưng điều h&agrave;nh tốt lại th&igrave; hết, c&oacute; phải l&agrave; do điều h&agrave;nh quản l&yacute; bay kh&ocirc;ng?".</p>\n<p class="Normal">"T&ocirc;i n&oacute;i cần thiết th&igrave; c&aacute;c anh thu&ecirc; chuy&ecirc;n gia đến để người ta vận h&agrave;nh cho m&igrave;nh, trong thời điểm cao điểm như thế thu&ecirc; người ta đến để dạy cho m&igrave;nh chả c&oacute; g&igrave; phải xấu hổ cả. Chưa l&agrave;m được tốt th&igrave; m&igrave;nh học th&ocirc;i, đ&oacute; l&agrave; chuyện b&igrave;nh thường", B&iacute; thư Th&agrave;nh ủy n&oacute;i.</p>\n<p class="Normal">Sau buổi l&agrave;m việc, &ocirc;ng Thăng đi thị s&aacute;t nh&agrave; xe 5 tầng vừa được đưa v&agrave;o khai th&aacute;c c&aacute;ch nay 2 th&aacute;ng. L&atilde;nh đạo s&acirc;n bay T&acirc;n Sơn Nhất cho biết đang triển khai đường hầm nối giữa nh&agrave; xe với ga quốc nội để giảm &ugrave;n tắc trong s&acirc;n bay. Nghe vậy, &ocirc;ng Thăng cắt lời: "Tại sao c&aacute;c anh kh&ocirc;ng l&agrave;m lối đi bộ tr&ecirc;n cao?", &ocirc;ng T&uacute; cho biết kh&ocirc;ng triển khai được v&igrave; h&agrave;nh kh&aacute;ch đưa h&agrave;nh l&yacute; l&ecirc;n rất phức tạp.</p>\n<p class="Normal">Kh&ocirc;ng đồng t&igrave;nh, &ocirc;ng Thăng cho rằng s&acirc;n bay kh&ocirc;ng chịu l&agrave;m v&igrave; sợ ảnh hưởng đến khu vực cho thu&ecirc; thương mại chứ kh&ocirc;ng phải do kh&oacute; khăn. "C&aacute;c anh cần phải nghi&ecirc;n cứu cả dưới v&agrave; cả tr&ecirc;n mới th&ocirc;ng tho&aacute;ng được", &ocirc;ng Thăng y&ecirc;u cầu. N<span>ghe B&iacute; thư g&oacute;p &yacute;, Gi&aacute;m đốc Sở GTVT TP HCM B&ugrave;i Xu&acirc;n Cường v&agrave; l&atilde;nh đạo Cảng vụ miền Nam, l&atilde;nh đạo s&acirc;n bay T&acirc;n Sơn Nhất hứa trong năm 2017 sẽ nghi&ecirc;n cứu triển khai th&ecirc;m lối đi bộ kết nối tr&ecirc;n cao từ nh&agrave; xe qua nh&agrave; ga quốc nội.</span></p>\n<p class="Normal">C&ugrave;ng ng&agrave;y, B&iacute; thư Th&agrave;nh ủy Đinh La Thăng cũng đi kiểm tra t&igrave;nh h&igrave;nh phục vụ Tết Nguy&ecirc;n đ&aacute;n tại c&aacute;c bến xe Miền Đ&ocirc;ng, Miền T&acirc;y v&agrave; ga S&agrave;i G&ograve;n.</p>\n</div>\n</div>', 'data_uploads/tin_tuc/Penguins.jpg', 1320195326, 1484496307, 1);

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `content` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`content`) VALUES
('<p><strong><span style="font-family: arial,helvetica,sans-serif; font-size: medium;">Đối t&aacute;c giao dịch</span></strong></p>');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `catid` int(3) NOT NULL,
  `p_name` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `p_name_alias` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `p_detail` text COLLATE utf8_unicode_ci,
  `p_image` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `p_image_thumb` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(2) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `catid`, `p_name`, `p_name_alias`, `p_detail`, `p_image`, `p_image_thumb`, `status`) VALUES
(6, 3, 'FPS', 'fps', '<p><span style="font-family: arial,helvetica,sans-serif; font-size: small;">M&ocirc; tả chi tiết cho sản phầm n&agrave;y</span></p>', 'data_uploads/product/product_s707.jpg', 'data_uploads/product/thumb/product_s707.jpg', 1),
(5, 2, 'Pocket CCT', 'pocket-cct', '<p><span style="font-family: arial,helvetica,sans-serif; font-size: small;">M&ocirc; tả chi tiết cho sản phẩm n&agrave;y</span></p>', 'data_uploads/product/product_s683.jpg', 'data_uploads/product/thumb/product_s683.jpg', 1),
(11, 2, 'SQB', 'sqb', '<p><span style="font-family: arial,helvetica,sans-serif; font-size: small;">M&ocirc; tả chi tiết về sản phẩm n&agrave;y</span></p>', 'data_uploads/product/product_s724.jpg', 'data_uploads/product/thumb/product_s724.jpg', 1),
(12, 2, 'SBCL', 'sbcl', '<p>Mo ta chi tiet san pham</p>', 'data_uploads/product/product_s722.jpg', 'data_uploads/product/thumb/product_s722.jpg', 1),
(13, 10, 'LH004', 'lh004', '<p>Mp ta chi tiet</p>', 'data_uploads/product/product_s720.jpg', 'data_uploads/product/thumb/product_s720.jpg', 1),
(14, 2, 'Cân thông dụng 01', 'can-thong-dung-01', '<p>Mo ta chi tiet san pham</p>', 'data_uploads/product/product_s637.jpg', 'data_uploads/product/thumb/product_s637.jpg', 1),
(15, 2, 'Cân thông dụng 02', 'can-thong-dung-02', '<p>Mo ta chi tiet ve san pham</p>', 'data_uploads/product/product_s639.jpg', 'data_uploads/product/thumb/product_s639.jpg', 1),
(16, 11, 'Cân bàn điện tử Salmon', 'can-ban-dien-tu-salmon', '<h3><span style="font-family: arial, helvetica, sans-serif; font-size: small;">C&acirc;n đạt cấp ch&iacute;nh x&aacute;c cấp 3 theo ti&ecirc;u chuẩn Việt Nam ĐLVN 14 hay Class 3 theo OIML.</span><address><span style="font-family: arial, helvetica, sans-serif; font-size: small;">&nbsp;&nbsp; - Sử dụng điện nguồn 220V/50Hz v&agrave; pin xạc.</span><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">&nbsp;&nbsp; - Bộ chỉ thị c&oacute; cổng giao tiếp RS232 c&oacute; thể kết nối với m&aacute;y t&iacute;nh v&agrave; m&aacute;y in.&nbsp;</span><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">&nbsp;&nbsp; - M&ocirc;i trường l&agrave;m việc: 0&deg;C ~ +40&deg;C</span><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">&nbsp;&nbsp; - Độ ẩm: 0~95%RH</span><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">&nbsp;&nbsp; - Tiết kiệm điện: tự động tắt khi c&acirc;n khi kh&ocirc;ng sử dụng,</span></address><address><span style="font-family: arial, helvetica, sans-serif; font-size: small;">&nbsp;&nbsp; - Tự động về 0 (Zero) khi khởi &nbsp;động.</span><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">&nbsp;&nbsp; - Hiển thị LCD, LED (g&oacute;c nh&igrave;n rộng).</span></address><address><span style="font-family: arial, helvetica, sans-serif; font-size: small;">&nbsp;&nbsp; - Qu&aacute; tải an to&agrave;n : 150% tải max</span></address><address><span style="font-family: arial, helvetica, sans-serif; font-size: small;">* Mặt b&agrave;n c&acirc;n Inox,&nbsp;k&iacute;ch thước mặt b&agrave;n :&nbsp;400mm x 500mm : 420mm x 520mm</span><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">* Mức c&acirc;n, bước nhảy :&nbsp;30kg (d=5g), 60kg (d=10g) , 150kg (d=20g) , 300kg (d=50g)</span></address><address><span style="font-family: arial, helvetica, sans-serif; font-size: small;">* Sai số tối đa = 1d</span><br /></address><address><span style="font-family: arial, helvetica, sans-serif; font-size: small;">II/ C&Aacute;C ỨNG DỤNG</span><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">&nbsp; - C&acirc;n th&ocirc;ng thường</span><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">&nbsp; - C&acirc;n đếm mẫu</span><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">&nbsp; - C&acirc;n cộng dồn</span><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">&nbsp; - C&acirc;n kiểm tra</span></address></h3>\r\n<p>&nbsp;</p>', 'data_uploads/product/can_salmon.jpg', 'data_uploads/product/thumb/can_salmon.jpg', 1),
(17, 11, 'Cân bàn điện tử YHT6', 'can-ban-dien-tu-yht6', '<h3><span style="color: #ff00ff;">30kg/0.01kg&nbsp;</span><br /><span style="color: #ff00ff;">&nbsp;&nbsp; 60kg/0.01kg&nbsp;</span><br /><span style="color: #ff00ff;">&nbsp;&nbsp; 150kg/0.02kg</span><br /><span style="color: #ff00ff;">&nbsp;&nbsp; 300kg/0.05kg&nbsp;</span><br /><span style="color: #ff00ff;">&nbsp;&nbsp; 500kg/0.1kg</span><br /><br />1. T&Iacute;NH NĂNG CỦA YHT6:<br />- Ch&iacute;nh x&aacute;c cao( độ ph&acirc;n giải b&ecirc;n trong: 1/10,000) .&nbsp;<br />- M&agrave;n h&igrave;nh hiển thị LCD Số rỏ dể đọc.&nbsp;<br />- Chức năng tự kiểm tra pin.&nbsp;<br />- S&agrave;n c&acirc;n được thiết kề vững chắc cho nhiều lĩnh vực.&nbsp;<br />- Đơn vị của c&acirc;n Kg/ g/ Lb<br />- M&agrave;n h&igrave;nh hiển thị bằng trục đứng c&oacute; thể xoay 360 độ&nbsp;<br /><br />2. C&Aacute;C T&Iacute;NH NĂNG TỔNG QU&Aacute;T&nbsp;:&nbsp;<br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">- Thiết bị đạt độ ch&iacute;nh x&aacute;c cấp III theo ti&ecirc;u chuẩn OIML.&nbsp;</span><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">- Độ ph&acirc;n giải nội cao, tốc độ xử l&yacute; nhanh.</span><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">- Thiết kế chống bụi, cũng như sự ảnh hưởng của m&ocirc;i trường.</span><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">- Người sử dụng c&oacute; thể lựa chọn c&aacute;c đơn vị kh&aacute;c nhau Kg,g,trừ b&igrave;, theo nhu cầu ri&ecirc;ng.&nbsp;</span><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">- Thiết kế theo kiểu d&aacute;ng c&ocirc;ng nghiệp .&nbsp;</span><br /><br />3. C&Aacute;C CHỨC NĂNG &amp; CHẾ ĐỘ HOẠT ĐỘNG:<br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">- Chức năng: c&acirc;n, trừ b&igrave; v&agrave; th&ocirc;ng b&aacute;o chế độ trừ b&igrave; hiện h&agrave;nh.&nbsp;</span><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">- Chế độ th&ocirc;ng b&aacute;o t&igrave;nh trạng ổn định của c&acirc;n.&nbsp;</span><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">- C&acirc;n c&oacute; chức năng b&aacute;o hiệu gần hết Pin.&nbsp;</span><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">- Chế độ tắt c&acirc;n tự động (Automatic shut-off) gi&uacute;p tiết kiệm năng lượng Pin.&nbsp;</span><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">- Phương thức định lượng : cảm biến từ (load cell).&nbsp;</span><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">- Nguồn điện sử dụng : 220V/50Hz / Pin sạc (80 giờ).</span></h3>', 'data_uploads/product/YHT6.jpg', 'data_uploads/product/thumb/YHT6.jpg', 1),
(18, 11, 'Cân bàn Defender 2000', 'can-ban-defender-2000', '<p><span style="font-family: arial, helvetica, sans-serif; font-size: small;">T&Iacute;NH NĂNG:. :&nbsp;</span><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">- Ch&iacute;nh x&aacute;c cao( độ ph&acirc;n giải b&ecirc;n trong: 1/10,000) .&nbsp;</span><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">- M&agrave;n h&igrave;nh hiển thị LED Số rỏ dể đọc.&nbsp;</span><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">- Chức năng tự kiểm tra pin.&nbsp;</span><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">- Cổng giao tiếp RS-232( Lựa chọn).&nbsp;</span><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">- S&agrave;n c&acirc;n được thiết kề vững chắc cho nhiều lĩnh vực.&nbsp;</span><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">- M&agrave;n h&igrave;nh hiển thị bằng trục đứng , ph&iacute;m chuyển đổi đơn vị kg/g/oz &ecirc;m nhẹ&nbsp;</span><br /><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">2. C&Aacute;C T&Iacute;NH NĂNG TỔNG QU&Aacute;T :&nbsp;</span><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">- Thiết bị đạt độ ch&iacute;nh x&aacute;c cấp III theo ti&ecirc;u chuẩn OIML.&nbsp;</span><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">- Độ ph&acirc;n giải nội cao, tốc độ xử l&yacute; nhanh.</span><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">- Thiết kế chống bụi, cũng như sự ảnh hưởng của m&ocirc;i trường.</span><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">- Người sử dụng c&oacute; thể lựa chọn c&aacute;c đơn vị kh&aacute;c nhau Kg,g,trừ b&igrave;, theo nhu cầu ri&ecirc;ng.&nbsp;</span><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">- Thiết kế theo kiểu d&aacute;ng c&ocirc;ng nghiệp .&nbsp;</span><br /><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">3. C&Aacute;C CHỨC NĂNG &amp; CHẾ ĐỘ HOẶT ĐỘNG: :&nbsp;</span><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">- Chức năng: c&acirc;n, trừ b&igrave; v&agrave; th&ocirc;ng b&aacute;o chế độ trừ b&igrave; hiện h&agrave;nh.&nbsp;</span><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">- Chế độ th&ocirc;ng b&aacute;o t&igrave;nh trạng ổn định của c&acirc;n.&nbsp;</span><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">- C&acirc;n c&oacute; chức năng b&aacute;o hiệu gần hết Pin.&nbsp;</span><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">- Chế độ tắt c&acirc;n tự động (Automatic shut-off) gi&uacute;p tiết kiệm năng lượng Pin.&nbsp;</span><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">- Phương thức định lượng : cảm biến từ (load cell).&nbsp;</span><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">- K&iacute;ch thước đĩa c&acirc;n :(300 x 400),(420 x 520),(450 x 600)mm (600 X 700)mm (Đĩa c&acirc;n bằng inox).&nbsp;</span><br /><span style="font-family: arial, helvetica, sans-serif; font-size: small;">- Nguồn điện sử dụng : 220V/50Hz / Pin (100 giờ).</span></p>', 'data_uploads/product/T31P-4ca00d00acd40.jpg', 'data_uploads/product/thumb/T31P-4ca00d00acd40.jpg', 1),
(19, 11, 'Cân bàn chống nước BW-1N', 'can-ban-chong-nuoc-bw-1n', '<h2>1. T&iacute;nh năng:\r\n<p><span style="font-family: arial, helvetica, sans-serif; font-size: small;">M&agrave;n h&igrave;nh hiển thị r&otilde; v&agrave; rộng</span></p>\r\n<p><span style="font-family: arial, helvetica, sans-serif; font-size: small;">Kiểu trục đứng, đầu hiển thị c&oacute; thể xoay</span></p>\r\n<p><span style="font-family: arial, helvetica, sans-serif; font-size: small;">C&oacute; khả năng chống nước theo chuẩn IP65</span></p>\r\n<p><span style="font-family: arial, helvetica, sans-serif; font-size: small;">Sườn hợp kim nh&ocirc;m rắn chắc, đĩa c&acirc;n l&agrave;m bằng th&eacute;p kh&ocirc;ng rỉ.</span></p>\r\n<p><span style="font-family: arial, helvetica, sans-serif; font-size: small;">Chức năng c&acirc;n phong ph&uacute;:</span></p>\r\n<p><span style="font-family: arial, helvetica, sans-serif; font-size: small;">C&acirc;n th&ocirc;ng thường.</span></p>\r\n<p><span style="font-family: arial, helvetica, sans-serif; font-size: small;">Chức năng c&acirc;n đếm sản phẩm theo trọng lượng, số lượng.</span></p>\r\n<p><span style="font-family: arial, helvetica, sans-serif; font-size: small;">Chức năng c&acirc;n theo % trọng lượng.</span></p>\r\n<p><span style="font-family: arial, helvetica, sans-serif; font-size: small;">Chức năng cộng dồn, c&acirc;n tổng.</span></p>\r\n<p><span style="font-family: arial, helvetica, sans-serif; font-size: small;">C&acirc;n giới hạn trọng tải (Hi/Lo/OK)</span></p>\r\n<p><span style="font-family: arial, helvetica, sans-serif; font-size: small;">Tare/ Hold/ print</span></p>\r\n<p><span style="font-family: arial, helvetica, sans-serif; font-size: small;">Cổng kết nối RS-232C</span></p>\r\n<p><span style="font-family: arial, helvetica, sans-serif; font-size: small;">Pin Sạc lại (LCD only)</span></p>\r\n<h3>\r\n<table border="0" cellspacing="0" cellpadding="0">\r\n<tbody>\r\n<tr>\r\n<td class="title3" colspan="2" align="left" valign="top"><span style="font-family: arial, helvetica, sans-serif; font-size: medium;"><strong>2. Th&ocirc;ng số kỹ thuật</strong></span></td>\r\n</tr>\r\n<tr>\r\n<td class="noidung" colspan="2" align="left" valign="top">\r\n<table style="width: 500px; height: 400px;" border="1" cellspacing="0" cellpadding="0" align="left">\r\n<tbody>\r\n<tr>\r\n<td>\r\n<p><strong><span>Model</span></strong></p>\r\n</td>\r\n<td>&nbsp;</td>\r\n<td>\r\n<p><strong><span>BW</span></strong></p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Tải trọng</p>\r\n</td>\r\n<td colspan="2">\r\n<p>&nbsp;</p>\r\n<p>60kg x 20g, 150kg x 50g</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Số hiển thị</p>\r\n</td>\r\n<td colspan="2">\r\n<p>6 số</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Loại hiển thị</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; LCD</p>\r\n</td>\r\n<td>\r\n<p>&nbsp;</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Chỉ định hiển thị</p>\r\n</td>\r\n<td colspan="2">\r\n<p>Nguồn, Zero, trừ b&igrave;, pin yếu, B/L</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Nguồn cung cấp</p>\r\n</td>\r\n<td colspan="2">\r\n<p>AC 110/220V,<span>&nbsp;</span>Battery, Adapter ( 9V, 300mA)</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Nhiệt độ m&ocirc;i trường</p>\r\n</td>\r\n<td colspan="2">\r\n<p>-10 oC ~ + 40oC</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>K&iacute;ch cỡ mặt đĩa (mm)</p>\r\n</td>\r\n<td colspan="2">\r\n<p>280 (W) x 3 (D), 420 (W) x 510 (D)</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>K&iacute;ch thước (mm)</p>\r\n</td>\r\n<td colspan="2">\r\n<p>Loại chuẩn: 280 (W) x 370 (D) x 560 (H)</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Loại 60, 150kg</p>\r\n</td>\r\n<td colspan="2">\r\n<p>420 (W) x 635 (D) x 765 (H)</p>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<p>Trọng lượng c&acirc;n</p>\r\n</td>\r\n<td colspan="2">\r\n<p>Loại chuẩn: 5 kg; 14.7 kg; 14 kg</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td class="title3" colspan="2" align="left" valign="top"><br /></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</h3>\r\n<p>&nbsp;</p>\r\n</h2>\r\n<p>&nbsp;</p>', 'data_uploads/product/BW-1N.jpg', 'data_uploads/product/thumb/BW-1N.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `content` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`content`) VALUES
('<p><span style="font-family: arial,helvetica,sans-serif; font-size: small;">Chương tr&igrave;nh khuyến m&atilde;i</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `content` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`content`) VALUES
('<p><span style="font-family: arial,helvetica,sans-serif;"><strong><span style="font-size: small;">Dịch vụ sửa chữa c&acirc;n điện tử</span></strong></span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `meta_key` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_desc` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `per_page` int(5) DEFAULT NULL,
  `address` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `site_name` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `site_status` int(2) NOT NULL DEFAULT '1',
  `google_analytics` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`meta_key`, `meta_desc`, `per_page`, `address`, `phone`, `site_name`, `site_status`, `google_analytics`, `id`) VALUES
('Tường thuật trực tiếp kết quả xố số Vietlott Mega 645 và Max 4D. Tra cứu và thống kê kết quả vietlott', 'Tường thuật trực tiếp kết quả xố số Vietlott Mega 645 và Max 4D. Tra cứu và thống kê kết quả vietlott', 20, 'Tường thuật trực tiếp kết quả xố số Vietlott Mega 645 và Max 4D. Tra cứu và thống kê kết quả vietlott', 'Tường thuật trực tiếp kết quả xố số Vietlott Mega 645 và Max 4D. Tra cứu và thống kê kết quả vietlot', 'Tường thuật trực tiếp kết quả xố số Vietlott Mega 645 và Max 4D. Tra cứu và thống kê kết quả vietlott', 1, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `soxo_max`
--

CREATE TABLE `soxo_max` (
  `id` int(11) NOT NULL,
  `thuquay` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngayquay` date NOT NULL,
  `ngayquayint` int(11) NOT NULL,
  `thoigianquay` date NOT NULL,
  `giainhat` int(11) NOT NULL,
  `giatrigiainhat` float NOT NULL,
  `giainhi1` int(11) NOT NULL,
  `giainhi2` int(11) NOT NULL,
  `giatrigiainhi` float NOT NULL,
  `giaiba1` int(11) NOT NULL,
  `giaiba2` int(11) NOT NULL,
  `giaiba3` int(11) NOT NULL,
  `giatrigiaiba` float NOT NULL,
  `giaikk1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `giatrigiaikk1` int(11) NOT NULL,
  `giaikk2` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `giatrigiaikk2` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `soxo_max`
--

INSERT INTO `soxo_max` (`id`, `thuquay`, `ngayquay`, `ngayquayint`, `thoigianquay`, `giainhat`, `giatrigiainhat`, `giainhi1`, `giainhi2`, `giatrigiainhi`, `giaiba1`, `giaiba2`, `giaiba3`, `giatrigiaiba`, `giaikk1`, `giatrigiaikk1`, `giaikk2`, `giatrigiaikk2`, `trangthai`) VALUES
(2, 'tuesday', '2017-01-03', 1483376400, '2018-00-00', 3490, 15000000, 9697, 1683, 6500000, 2471, 1745, 8360, 3000000, '', 1000000, '', 100000, 1),
(3, 'tuesday', '2017-01-10', 1483981200, '2018-00-00', 3857, 15000000, 7441, 9206, 6500000, 8509, 6152, 6705, 3000000, '', 1000000, '', 100000, 1),
(4, 'saturday', '2017-01-07', 1483722000, '2018-00-00', 2022, 15000000, 27, 9584, 6500000, 134, 7595, 6194, 3000000, '', 1000000, '', 100000, 1),
(5, 'thursday', '2017-01-05', 1483549200, '2018-00-00', 2986, 15000000, 3988, 6401, 6500000, 6435, 2420, 4679, 3000000, '', 1000000, '', 100000, 1),
(6, 'tuesday', '2017-01-03', 1483376400, '2018-00-00', 1235, 15000000, 7441, 9206, 6500000, 8509, 4444, 2235, 3000000, '', 1000000, '', 100000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `soxo_mega`
--

CREATE TABLE `soxo_mega` (
  `id` int(11) NOT NULL,
  `thuquay` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngayquayint` int(11) NOT NULL,
  `ngayquay` date NOT NULL,
  `thoigianquay` time NOT NULL,
  `giatrijackport` float NOT NULL,
  `sojackport` int(11) NOT NULL,
  `sogiainhat` int(11) NOT NULL,
  `giatrigiainhat` float NOT NULL,
  `sogiainhi` int(11) NOT NULL,
  `giatrigiainhi` float NOT NULL,
  `sogiaiba` int(11) NOT NULL,
  `giatrigiaiba` float NOT NULL,
  `trangthai` int(11) NOT NULL COMMENT 'là 1 là đang quay, 2 là hoàn thành,',
  `chuoitrunggiai` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dau0` int(11) NOT NULL,
  `dau1` int(11) NOT NULL,
  `dau2` int(11) NOT NULL,
  `dau3` int(11) NOT NULL,
  `dau4` int(11) NOT NULL,
  `duoi0` int(11) NOT NULL,
  `duoi1` int(11) NOT NULL,
  `duoi2` int(11) NOT NULL,
  `duoi3` int(11) NOT NULL,
  `duoi4` int(11) NOT NULL,
  `duoi5` int(11) NOT NULL,
  `duoi6` int(11) NOT NULL,
  `duoi7` int(11) NOT NULL,
  `duoi8` int(11) NOT NULL,
  `duoi9` int(11) NOT NULL,
  `chan` int(11) NOT NULL,
  `le` int(11) NOT NULL,
  `realtime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `soxo_mega`
--

INSERT INTO `soxo_mega` (`id`, `thuquay`, `ngayquayint`, `ngayquay`, `thoigianquay`, `giatrijackport`, `sojackport`, `sogiainhat`, `giatrigiainhat`, `sogiainhi`, `giatrigiainhi`, `sogiaiba`, `giatrigiaiba`, `trangthai`, `chuoitrunggiai`, `dau0`, `dau1`, `dau2`, `dau3`, `dau4`, `duoi0`, `duoi1`, `duoi2`, `duoi3`, `duoi4`, `duoi5`, `duoi6`, `duoi7`, `duoi8`, `duoi9`, `chan`, `le`, `realtime`) VALUES
(5, 'friday', 1483635600, '2017-01-06', '18:00:00', 1300260000, 12, 12, 10000000, 12, 300000, 12, 30000, 1, '12-25-12-24-26-12', 0, 3, 3, 0, 0, 0, 0, 3, 0, 1, 1, 1, 0, 0, 0, 3, 3, 0),
(9, 'sunday', 1483203600, '2017-01-01', '18:00:00', 1350000000, 12, 12, 10000000, 2, 300000, 5, 30000, 1, '12-21-12-24-26-10', 0, 3, 3, 0, 0, 1, 1, 2, 0, 1, 0, 1, 0, 0, 0, 3, 3, 0),
(11, 'wednesday', 1484067600, '2017-01-11', '18:00:00', 3510000000, 12, 6, 10000000, 12, 300000, 12, 30000, 1, '25-12-19-08-25-11', 1, 3, 2, 0, 0, 0, 1, 1, 0, 0, 2, 0, 0, 1, 1, 3, 3, 0),
(12, 'sunday', 1483808400, '2017-01-08', '18:00:00', 2550000000, 1, 12, 10000000, 12, 300000, 12, 30000, 1, '25-16-35-44-37-15', 0, 2, 1, 2, 1, 0, 0, 0, 0, 1, 3, 1, 1, 0, 0, 2, 4, 0),
(13, 'wednesday', 1483462800, '2017-01-04', '18:00:00', 1202000000, 2, 46, 10000000, 34, 300000, 67, 30000, 1, '15-09-22-18-26-36', 1, 2, 2, 1, 0, 0, 0, 1, 0, 0, 1, 2, 0, 1, 1, 3, 3, 0),
(14, 'friday', 1484240400, '2017-01-13', '18:00:00', 350000000, 1, 12, 10000000, 2, 300000, 26, 30000, 1, '08-12-36-42-17-14', 1, 3, 0, 1, 1, 0, 0, 2, 0, 1, 0, 1, 1, 1, 0, 2, 4, 0),
(20, 'friday', 1484845200, '2017-01-20', '18:00:00', 350000000, 12, 6, 10000000, 2, 300000, 12, 30000, 1, '12-25-12-24-26-25', 0, 2, 4, 0, 0, 0, 0, 2, 0, 1, 2, 1, 0, 0, 0, 4, 2, 0),
(21, 'sunday', 1485018000, '2017-01-22', '18:00:00', 10000000, 12, 12, 10000000, 2, 300000, 26, 30000, 0, '15-23-35-34-23-34', 0, 1, 2, 3, 0, 0, 0, 0, 2, 2, 2, 0, 0, 0, 0, 2, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `user_group_id` int(3) NOT NULL,
  `user_group_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `permission_view` text COLLATE utf8_unicode_ci NOT NULL,
  `permission_edit_del` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`user_group_id`, `user_group_name`, `permission_view`, `permission_edit_del`) VALUES
(1, ' demo', 'a:1:{i:0;s:10:"admin/user";}', 'a:1:{i:0;s:10:"admin/user";}');

-- --------------------------------------------------------

--
-- Table structure for table `user_user`
--

CREATE TABLE `user_user` (
  `user_id` int(3) NOT NULL,
  `user_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_fullname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user_active` int(2) NOT NULL DEFAULT '1',
  `user_group_id` int(3) DEFAULT NULL,
  `user_password` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_user`
--

INSERT INTO `user_user` (`user_id`, `user_name`, `user_fullname`, `user_email`, `user_active`, `user_group_id`, `user_password`) VALUES
(1, 'admin', 'Nguyen Duc Hung', 'supper_itpro@yahoo.com', 1, NULL, '21232f297a57a5a743894a0e4a801fc3'),
(2, 'demo', 'Demo', 'abc@yahoo.com', 1, 1, 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `chitietso_mega`
--
ALTER TABLE `chitietso_mega`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_soxo_mega` (`id_soxo_mega`,`so_trung`,`ngayquayint`,`thutuquay`) USING BTREE,
  ADD KEY `id_soxo_mega_2` (`id_soxo_mega`),
  ADD KEY `so_trung` (`so_trung`);

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `demo` ADD FULLTEXT KEY `title` (`title`,`body`);

--
-- Indexes for table `kienthuc`
--
ALTER TABLE `kienthuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaisoxo`
--
ALTER TABLE `loaisoxo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `product` ADD FULLTEXT KEY `p_name` (`p_name`);
ALTER TABLE `product` ADD FULLTEXT KEY `p_name_alias` (`p_name_alias`);
ALTER TABLE `product` ADD FULLTEXT KEY `p_name_2` (`p_name`,`p_name_alias`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soxo_max`
--
ALTER TABLE `soxo_max`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soxo_mega`
--
ALTER TABLE `soxo_mega`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ngayquayint` (`ngayquayint`),
  ADD KEY `trangthai` (`trangthai`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`user_group_id`);

--
-- Indexes for table `user_user`
--
ALTER TABLE `user_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `chitietso_mega`
--
ALTER TABLE `chitietso_mega`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=637;
--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kienthuc`
--
ALTER TABLE `kienthuc`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `loaisoxo`
--
ALTER TABLE `loaisoxo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `soxo_max`
--
ALTER TABLE `soxo_max`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `soxo_mega`
--
ALTER TABLE `soxo_mega`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `user_group_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_user`
--
ALTER TABLE `user_user`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
