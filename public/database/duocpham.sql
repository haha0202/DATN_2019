-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 24, 2019 lúc 09:46 AM
-- Phiên bản máy phục vụ: 10.1.40-MariaDB
-- Phiên bản PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duocpham`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `usename` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auth` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `usename`, `password`, `auth`) VALUES
(1, 'admin', 'admin123', 1),
(2, 'nvtung', '123456', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'linh chi đỏ'),
(2, 'hoạt huyết'),
(3, 'nano curcumin'),
(4, 'thảo dược khác');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mail` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `name`, `address`, `phone`, `mail`, `title`, `content`) VALUES
(1, 'Nguyễn Văn Hùng', 'số 22 Hai Bà Trưng Hà Nội', '123456', 'hung@gmail.com', 'chất lượng sản phẩm', 'Tôi rất ưng ý về chất lượng sản phẩm của công ty, dùng rất thích'),
(2, 'Lê Anh Tuấn', 'số 222 đường Láng Hà Nội', '3698945', 'tuan@gmail.com', 'chất lượng sản phẩm', 'Tôi rất ưng ý về chất lượng sản phẩm của công ty, dùng rất thích'),
(3, 'Phạm Ngọc Mai', 'số 25 Kim Mã Hà Nội', '32064588', 'mai321@gmail.com', 'chất lượng sản phẩm', 'Tôi rất ưng ý về chất lượng sản phẩm của công ty, dùng rất thích'),
(4, 'hoàng văn A', 'Hoàn kiếm Hà nội', '0565656522', 'vana@gmail.com', 'asdfasdfafdasdf', 'asdfasdfasdfasdfasd'),
(5, 'hoàng văn A', 'Hoàn kiếm Hà nội', '02354687', 'vana@gmail.com', 'sản phẩm', 'sản phẩm rất ưng ý'),
(6, 'hoàng văn A', 'Hoàn kiếm Hà nội', '02354687', 'vana@gmail.com', 'sản phẩm', 'sản phẩm rất ưng ý'),
(7, 'nguyen nang thanh', 'Từ Liêm, Hà Nội', '01673274024', 'nangthanh2296@gmail.com', 'sản phẩm', 'sádfasdfasdfasdf'),
(8, 'nguyen nang thanh', 'Hoàn kiếm Hà nội', '02354687', 'vana@gmail.com', 'sản phẩm', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mail` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usename` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `name`, `mail`, `phone`, `address`, `usename`, `password`) VALUES
(1, 'Nguyễn Năng Thành', 'nangthanh2296@gmail.com', '01673274024', 'Từ Liêm, Hà Nội', 'TonyStark', '12345678');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `knowledge`
--

CREATE TABLE `knowledge` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `image` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `knowledge_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `knowledge`
--

INSERT INTO `knowledge` (`id`, `name`, `content`, `image`, `knowledge_date`) VALUES
(1, 'Thảo Dược - xu hướng chữa bệnh của người hiện đại', '<p>Việt Nam l&agrave; một đất nước c&oacute; kh&iacute; hậu Nhiệt đới ẩm gi&oacute; m&ugrave;a n&ecirc;n tạo&nbsp;điều kiện thuận lợi cho c&acirc;y cối ph&aacute;t triển trong đ&oacute; c&oacute; c&aacute;c loại c&acirc;y dược liệu. C&aacute;ch chữa bệnh bằng thảo dược&nbsp;hay c&ograve;n gọi l&agrave; chữa bệnh Đ&ocirc;ng Y mang lại nhiều lợi &iacute;ch về sức khỏe, gi&uacute;p người bệnh cải thiện sức khỏe v&agrave; điều trị bệnh rất tốt v&agrave; n&oacute; đ&atilde; tạo th&agrave;nh xu thế chữa bệnh, l&agrave; sự lựa chọn của rất nhiều người trong x&atilde; hội hiện đại ng&agrave;y nay.&nbsp;<em><strong>V&igrave; sao?</strong></em></p>\r\n\r\n<p><strong>An to&agrave;n, hiệu quả, &iacute;t g&acirc;y t&aacute;c dụng phụ</strong></p>\r\n\r\n<p>Theo như nghi&ecirc;n cứu thực tiễn, c&aacute;c loại&nbsp;thảo dược c&oacute; nguồn gốc tự nhi&ecirc;n c&oacute; rất &iacute;t hoặc kh&ocirc;ng c&oacute; t&aacute;c hại đối với người sử dụng. Chỉ cần sử dụng đ&uacute;ng c&aacute;ch sẽ tạo được hiệu quả r&otilde; rệt.&nbsp;Nhiều b&agrave;i thuốc d&acirc;n gian c&oacute; t&aacute;c dụng chữa bệnh thần k&igrave; m&agrave; nền y học hiện đại cũng&nbsp;kh&ocirc;ng thể giải th&iacute;ch được</p>\r\n\r\n<p>Nền văn h&oacute;a hội nhập kh&ocirc;ng ngừng nghỉ&nbsp;đồng nghĩa với việc con người phải đối diện với nhiều&nbsp;bất cập về c&aacute;c loại&nbsp;mặt h&agrave;ng li&ecirc;n quan đến sức khỏe&nbsp;khiến cho mọi người c&oacute; xu hướng quay lại c&aacute;c b&agrave;i thuốc c&oacute; nguồn gốc từ thảo dược thi&ecirc;n nhi&ecirc;n. Ch&iacute;nh v&igrave; vậy, xu hướng ph&aacute;t triển nền dược liệu để phục vụ cho sức khỏe cộng đồng đang được nhiều đơn vị tiến h&agrave;nh nghi&ecirc;n cứu v&agrave; sản xuất để mang lại gi&aacute; trị chữa bệnh cho con người.</p>\r\n\r\n<p><strong>B&agrave;o chế Thảo dược hiện đại, dễ d&ugrave;ng</strong></p>\r\n\r\n<p>Hiện nay, việc sử dụng&nbsp;dạng thuốc từ dược liệu đang l&agrave; xu hướng. Tận dụng nguồn dược liệu phong ph&uacute; c&ugrave;ng c&ocirc;ng nghệ sản xuất ti&ecirc;n tiến, kết hợp với c&ocirc;ng nghệ b&agrave;o chế hiện đại, Gia Bảo tự tin&nbsp;c&oacute; được hiệu quả điều trị cao m&agrave; vẫn an to&agrave;n, tiện lợi cho người ti&ecirc;u d&ugrave;ng. Đặc biệt đối với những đối tượng c&oacute; cơ địa nhạy cảm như người gi&agrave; v&agrave; trẻ nhỏ, thuốc c&oacute; nguồn gốc từ thảo dược lu&ocirc;n l&agrave; lựa chọn h&agrave;ng đầu n&ecirc;n ưu ti&ecirc;n sử dụng.</p>\r\n', 'thaoduoc.jpg', '2019-01-05'),
(2, 'Tác dụng của cây húng chanh', '<p>Nh&acirc;n d&acirc;n ta thường th&aacute;i nhỏ l&aacute; h&uacute;ng chanh để ướp thịt, c&aacute;, n&oacute; l&agrave; loại gia vị đặc sắc. L&aacute; v&agrave; ngọn non thường được d&ugrave;ng trị cảm c&uacute;m, ho hen, ho ra m&aacute;u, sốt cao, sốt kh&ocirc;ng ra mồ h&ocirc;i, n&ocirc;n ra m&aacute;u, đổ m&aacute;u cam, c&ograve;n d&ugrave;ng chữa vi&ecirc;m họng, khản tiếng.</p>\r\n\r\n<p><strong>H&uacute;ng chanh, Rau tần d&agrave;y l&aacute;, Rau thơm l&ocirc;ng &ndash; Plectranthus amboinicus (Lour.) Spreng (Coleus amboinicus Lour.), thuộc họ Hoa m&ocirc;i &ndash; Lamiaceae. M&ocirc; tả: C&acirc;y thảo c&oacute; thể sống nhiều năm, cao 20-50cm, phần th&acirc;n s&aacute;t gốc ho&aacute; gỗ. L&aacute; mọc đối d&agrave;y mọng nước, h&igrave;nh tr&aacute;i xoan rộng, d&agrave;i 3-6cm, rộng, mọc th&agrave;nh b&ocirc;ng ở ngọn th&acirc;n v&agrave; đầu c&agrave;nh, gồm những v&ograve;ng hoa d&agrave;y đặc, c&aacute;ch qu&atilde;ng nhau. Quả nhỏ, tr&ograve;n, m&agrave;u n&acirc;u, chứa 1 hạt. To&agrave;n c&acirc;y c&oacute; l&ocirc;ng rất nhỏ v&agrave; c&oacute; m&ugrave;i thơm như m&ugrave;i chanh. M&ugrave;a hoa quả th&aacute;ng 4-5.</strong></p>\r\n\r\n<p><img alt=\"7_1444664658_hung_chanh_chua_ho_cho_tre\" src=\"http://biotrade.com.vn/wp-content/uploads/2016/09/7_1444664658_hung_chanh_chua_ho_cho_tre.jpg\" /></p>\r\n\r\n<p><strong>Bộ phận d&ugrave;ng:</strong>&nbsp;L&aacute; v&agrave; ngọn non &ndash;&nbsp;<em>Folium et Gemma Plectranthi</em>.</p>\r\n\r\n<p><strong>Nơi sống v&agrave; thu h&aacute;i:</strong>&nbsp;C&acirc;y c&oacute; gốc ở quần đảo M&ocirc;lu&yacute;c (miền M&atilde; Lai) được trồng l&agrave;m gia vị v&agrave; l&agrave;m thuốc. C&oacute; thể thu h&aacute;i l&aacute; quanh năm, thường d&ugrave;ng tươi, d&ugrave;ng đến đ&acirc;u h&aacute;i đến đ&oacute;. L&uacute;c trời kh&ocirc; r&aacute;o, h&aacute;i l&aacute; b&aacute;nh tẻ, loại bỏ c&aacute;c l&aacute; s&acirc;u hay l&aacute; gi&agrave; &uacute;a v&agrave;ng, đem phơi nắng nhẹ hay sấy ở 40-45<sup>o</sup>C đến kh&ocirc;.</p>\r\n\r\n<p><strong>Th&agrave;nh phần h&oacute;a học:</strong>&nbsp;L&aacute; chứa &iacute;t tinh dầu (0,05-0,12%), trong tinh dầu c&oacute; đến 65,2% c&aacute;c hợp chất phenolic trong đ&oacute; c&oacute; salicylat, thymol, carvacrol, eugenol v&agrave; chavicol; c&ograve;n c&oacute; một chất m&agrave;u đỏ l&agrave; colein.</p>\r\n\r\n<p><strong>T&iacute;nh vị, t&aacute;c dụng:</strong>&nbsp;H&uacute;ng chanh c&oacute; vị the cay, hơi chua, m&ugrave;i thơm, t&iacute;nh ấm, kh&ocirc;ng độc, c&oacute; t&aacute;c dụng lợi phế, trừ đờm, giải cảm, l&agrave;m ra mồ h&ocirc;i, l&agrave;m th&ocirc;ng hơi, giải độc. Colein trong l&aacute; c&oacute; t&aacute;c dụng kh&aacute;ng sinh mạnh đối với một số vi tr&ugrave;ng, nhất l&agrave; ở v&ugrave;ng họng, mũi, miệng v&agrave; cả ở đường ruột.</p>\r\n\r\n<p><strong>C&ocirc;ng dụng, chỉ định v&agrave; phối hợp:</strong>&nbsp;Nh&acirc;n d&acirc;n ta thường th&aacute;i nhỏ l&aacute; H&uacute;ng chanh để ướp thịt, c&aacute;, n&oacute; l&agrave; loại gia vị đặc sắc. L&aacute; v&agrave; ngọn non thường được d&ugrave;ng trị cảm c&uacute;m, ho hen, ho ra m&aacute;u, sốt cao, sốt kh&ocirc;ng ra mồ h&ocirc;i, n&ocirc;n ra m&aacute;u, đổ m&aacute;u cam, c&ograve;n d&ugrave;ng chữa vi&ecirc;m họng, khản tiếng. Liều d&ugrave;ng 10-15g, dạng thuốc sắc hoặc gi&atilde; lấy nước uống. C&oacute; thể d&ugrave;ng ri&ecirc;ng hoặc phối hợp với nhiều loại l&aacute; kh&aacute;c nấu nước x&ocirc;ng.</p>\r\n\r\n<p>Ở Malaixia, người ta d&ugrave;ng l&aacute; nấu cho phụ nữ sau khi sinh đẻ n&oacute;ng, l&aacute; tươi gi&atilde; ra lấy nước cốt cho trẻ em bị sổ mũi uống. D&ugrave;ng ngo&agrave;i lấy l&aacute; gi&atilde; ra đắp trị nẻ m&ocirc;i, đau bụng, đau đầu v&agrave; d&ugrave;ng xoa l&ecirc;n người khi bị sốt.</p>\r\n\r\n<p>Ở Ấn Độ, l&aacute; H&uacute;ng chanh d&ugrave;ng chữa bệnh về đường tiết niệu v&agrave; rỉ nước &acirc;m đạo. Nước &eacute;p l&aacute; trộn với đường l&agrave; một loại thuốc g&acirc;y trung tiện mạnh, cũng d&ugrave;ng trị ho v&agrave; chứng kh&oacute; ti&ecirc;u.</p>\r\n\r\n<p><strong>Đơn thuốc:</strong></p>\r\n\r\n<ol>\r\n	<li>Chữa ho, vi&ecirc;m họng, khản tiếng: L&aacute; H&uacute;ng chanh non 5-10g gi&atilde; n&aacute;t vắt lấy nước cốt n&oacute;ng. Hoặc đem gi&atilde; nhỏ một nắm l&aacute; (15-20g), th&ecirc;m nước, vắt lấy nước uống l&agrave;m hai lần trong ng&agrave;y. Đối với trẻ em, th&ecirc;m &iacute;t đường, đem hấp cơm cho uống l&agrave;m 2-3 lần.</li>\r\n	<li>Chữa đau bụng: L&aacute; H&uacute;ng chanh non rửa sạch, 1-2 l&aacute; nhai với một &iacute;t muối, ngậm nuốt dần dần.</li>\r\n	<li>Rắn cắn, b&ograve; cạp v&agrave; ong đốt: L&aacute; H&uacute;ng chanh tươi gi&atilde; đắp</li>\r\n</ol>\r\n', 'hungchanh.jpg', '2019-01-13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `image` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `new_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `name`, `content`, `image`, `new_date`) VALUES
(1, 'Làm sao để thoát khỏi chứng đau nửa đầu', '<h2><strong><em>Chứng đau nửa đầu hay c&ograve;n gọi l&agrave; đau đầu Migraine l&agrave; một chứng bệnh do căn nguy&ecirc;n mạch m&aacute;u. Đặc điểm cơ bản: Đau đầu từng cơn, khởi ph&aacute;t từ khi c&ograve;n l&agrave; thanh thiếu ni&ecirc;n, nữ gặp nhiều hơn nam v&agrave; đa số c&oacute; yếu tố gia đ&igrave;nh.</em></strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Nguy&ecirc;n nh&acirc;n của đau nửa đầu hiện chưa được biết r&otilde; nhưng c&aacute;c nh&agrave; khoa học thường cho rằng bệnh c&oacute; li&ecirc;n quan tới sự co gi&atilde;n đột ngột v&agrave; bất thường của mạch m&aacute;u nhỏ trong n&atilde;o bộ (rối loạn vận mạch n&atilde;o) do t&aacute;c dụng của một số chất trung gian thần kinh như Serotonin theo cơ chế thể dịch hay thần kinh. Ngo&agrave;i ra, c&ograve;n c&oacute; một số yếu tố thuận lợi l&agrave; sự khởi ph&aacute;t của c&aacute;c cơn đau nửa đầu như: Thay đổi thời tiết, căng thẳng, nhiễm tr&ugrave;ng, chế độ ăn...</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"business-lawyer-glenroy\" src=\"http://duocphamgiabao.com/upload/news/11494471853555_6551.png\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Y học hiện đại điều trị chứng đau nửa đầu hiện c&ograve;n nhiều kh&oacute; khăn. C&aacute;c thuốc điều trị bao gồm thuốc cắt cơn (như giảm đau, chống co thắt mạch m&aacute;u n&atilde;o) v&agrave; c&aacute;c thuốc dự ph&ograve;ng như: Thuốc ức chế giao cảm, chống trầm cảm, chống động kinh v&agrave; Corticoid. Nhưng hiệu quả chưa thực sự r&otilde; rệt v&agrave; c&ograve;n nhiều t&aacute;c dụng phụ khi phải điều trị k&eacute;o d&agrave;i.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Y học cổ truyền c&oacute; nhiều b&agrave;i thuốc hay, t&aacute;c dụng tr&ecirc;n nhiều cơ chế bệnh sinh của bệnh l&yacute; đau nửa đầu như: Cải thiện vận mạch, chống co thắt mạch m&aacute;u v&agrave; l&agrave;m tăng sức bền th&agrave;nh mạch... Ngo&agrave;i ra, thuốc y học cổ truyền cũng c&oacute; t&aacute;c dụng điều ho&agrave; sự hoạt động của hệ thống thần kinh từ đ&oacute; l&agrave;m giảm căng thẳng v&agrave; cải thiện t&igrave;nh trạng rối loạn giấc ngủ g&oacute;p phần kh&ocirc;ng nhỏ trong việc kiểm so&aacute;t cơn đau nửa đầu.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Với những ưu điểm như tr&ecirc;n, bệnh nh&acirc;n đau nửa đầu b&aacute;n cấp v&agrave; mạn t&iacute;nh c&oacute; thể được điều trị v&agrave; kiểm so&aacute;t tốt bằng thuốc y học cổ truyền m&agrave; kh&ocirc;ng lo ngại về t&aacute;c dụng phụ hay t&igrave;nh trạng phụ thuộc v&agrave;o thuốc. V&igrave; vậy, lựa chọn y học cổ truyền l&agrave; một biện ph&aacute;p tốt vừa điều trị, vừa gi&uacute;p ph&ograve;ng ngừa t&aacute;i ph&aacute;t của t&igrave;nh trạng đau nửa đầu.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Một trong những chế phẩm ti&ecirc;u biểu của Y học cổ truyền l&agrave; Hoạt huyết Gia Bảo. Thực tế tr&ecirc;n l&acirc;m s&agrave;ng, nhiều bệnh nh&acirc;n đ&atilde; c&oacute; đ&aacute;p ứng tốt với Hoạt huyết Gia Bảo chỉ sau khoảng một tuần điều trị. Bệnh nh&acirc;n đ&atilde; cải thiện được hầu hết c&aacute;c triệu chứng như đau đầu, &ugrave; tại, ch&oacute;ng mặt, mất ngủ một c&aacute;ch nhanh ch&oacute;ng. Tiếp tục sử dụng từ 2 đến 3 th&aacute;ng, bệnh tiến triển ổn định, giảm hẳn nguy cơ t&aacute;i ph&aacute;t, chất lượng cuộc sống của bệnh nh&acirc;n được cải thiện r&otilde; rệt.</p>\r\n', 'nhucdau.png', '2019-01-01'),
(2, 'Thái hóa cột sống cổ', '<h2><strong><em>Tho&aacute;i h&oacute;a cột sống cổ l&agrave; t&igrave;nh trạng rất thường gặp ở những người ở độ tuổi trung ni&ecirc;n trở về gi&agrave;. Người bệnh thường cố gắng chịu đựng sự kh&oacute; chịu do tho&aacute;i h&oacute;a cột sống cổ g&acirc;y ra cho đến khi c&aacute;c triệu chứng nặng l&ecirc;n mới t&igrave;m đến thầy thuốc để được tư vấn điều trị.</em></strong></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tho&aacute;i h&oacute;a cột sống cổ, cũng giống như t&igrave;nh trạng l&atilde;o h&oacute;a của cơ thể ng&agrave;y c&agrave;ng phổ biến ở những người trẻ tuổi do lối sống &iacute;t vận động, ngồi nhiều trước m&agrave;n h&igrave;nh m&aacute;y t&iacute;nh hoặc sử dụng điện thoại di động qu&aacute; nhiều trong tư thế c&uacute;i đầu. Đặc biệt thường gặp ở người l&agrave;m c&ocirc;ng việc văn ph&ograve;ng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://www.duocphamgiabao.com/upload/images/Benh-thoai-hoa-cot-song-co-the-chua-khoi-hoan-toan-duoc-khong-1.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Khi mới bị tho&aacute;i h&oacute;a cột sống cổ, biểu hiện chủ yếu l&agrave;: Đau mỏi cổ vai g&aacute;y, co cứng cơ cổ, vận động cổ kh&ocirc;ng thoải m&aacute;i. Mọi người đều chủ quan v&agrave; bỏ qua những triệu chứng tưởng chừng đơn giản n&agrave;y. Qua một thời gian, t&igrave;nh trạng n&agrave;y sẽ nặng l&ecirc;n, bệnh xuất hiện th&ecirc;m c&aacute;c triệu chứng như: Đau đầu v&ugrave;ng cổ g&aacute;y, t&ecirc; b&igrave; cổ vai tay, cứng g&aacute;y, hạn chế vận động cổ. C&oacute; thể k&egrave;m theo rối loạn giấc ngủ, hoa mắt ch&oacute;ng mặt&hellip;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Để cải thiện t&igrave;nh trạng tho&aacute;i h&oacute;a cột sống cổ, ch&uacute;ng ta phải biết c&aacute;ch tự c&acirc;n bằng giữa c&ocirc;ng việc v&agrave; chế độ nghỉ ngơi hợp l&yacute;. Chẳng hạn như tập một v&agrave;i động t&aacute;c vận động giữa giờ l&agrave;m việc để gi&uacute;p cải thiện t&igrave;nh trạng tắc nghẽn đốt sống, gi&uacute;p lưu th&ocirc;ng tuần ho&agrave;n m&aacute;u v&ugrave;ng cột sống cổ, gi&uacute;p ch&uacute;ng ta tỉnh t&aacute;o hơn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ngo&agrave;i ra, ch&uacute;ng ta c&oacute; thể sử dụng một số sản phẩm từ thảo dược hỗ trợ giải quyết những triệu chứng kh&oacute; chịu của t&igrave;nh trạng tho&aacute;i h&oacute;a cột sống cổ g&acirc;y ra. về cơ bản, sản phẩm phải đạt được c&aacute;c ti&ecirc;u ch&iacute; về t&aacute;c dụng như:</p>\r\n\r\n<ul>\r\n	<li>Hoạt huyết h&oacute;a ứ, gi&uacute;p lưu th&ocirc;ng kh&iacute; huyết để cải thiện t&igrave;nh trạng đau đầu, hoa mắt, ch&oacute;ng mặt.</li>\r\n	<li>Thư c&acirc;n, chỉ thống để giảm đau v&agrave; t&ecirc; b&igrave; cổ vai g&aacute;y, giảm co cứng cơ cổ.</li>\r\n	<li>Điều h&ograve;a thần kinh gi&uacute;p cải thiện giấc ngủ.</li>\r\n</ul>\r\n\r\n<p>Hoạt huyết Gia Bảo l&agrave; một chế phẩm từ b&agrave;i thuốc nam của y học cổ truyền, hội tụ đầy đủ đặc t&iacute;nh v&agrave; t&aacute;c dụng như tr&ecirc;n. Đ&acirc;y l&agrave; sản phẩm được c&aacute;c b&aacute;c sĩ bệnh viện Y học cổ truyền Trung Ương nghi&ecirc;n cứu v&agrave; thử nghiệm nhiều năm tr&ecirc;n l&acirc;m s&agrave;ng từ b&agrave;i thuốc được sử dụng l&acirc;u đời h&agrave;ng ng&agrave;n năm. Hoạt huyết Gia Bảo kh&ocirc;ng những gi&uacute;p ch&uacute;ng ta tho&aacute;t khỏi những phiền to&aacute;i của t&igrave;nh trạng tho&aacute;i h&oacute;a cột sống cổ m&agrave; c&ograve;n an to&agrave;n, kh&ocirc;ng c&oacute; t&aacute;c dụng phụ.</p>\r\n', 'thaihoa.jpg', '2019-01-03'),
(3, 'Sỏi tiết niệu', '<h2><em>Sỏi tiết niệu (sỏi thận, sỏi đ&agrave;i bể thận, sỏi niệu quản, sỏi b&agrave;ng quang) l&agrave; một trong những bệnh l&yacute; rất phổ biến hiện nay, kh&oacute; điều trị dứt điểm v&agrave; thường hay t&aacute;i ph&aacute;t.</em>&nbsp;</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>C&oacute; &nbsp;nhiều nguy&ecirc;n nh&acirc;n phối hợp g&acirc;y bệnh như: Chế độ ăn uống nhiều calci, nhiều acid uric ,do nhiễm khuẩn (sỏi struvit); do bệnh to&agrave;n th&acirc;n như cường cận gi&aacute;p (sỏi calci), loạn dưỡng cystin, oxalic &hellip;cũng như do giới t&iacute;nh, m&ocirc;i trường sống, lối sống v&agrave; t&igrave;nh trạng nghề nghiệp.Sỏi thận, sỏi tiết niệu thường tiến triển &acirc;m thầm, ch&uacute;ng ta thường t&igrave;nh cờ ph&aacute;t hiện bệnh khi đi kiểm tra sức khỏe hoặc chỉ biết khi đ&atilde; c&oacute; c&aacute;c triệu chứng như :</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em><strong>&nbsp; &nbsp; &nbsp;* Đau</strong></em></p>\r\n\r\n<ul>\r\n	<li>Cơn đau dữ dội, được gọi l&agrave;&nbsp; &ldquo;cơn đau quặn thận&rdquo;. Đau thường khởi ph&aacute;t từ c&aacute;c điểm niệu quản, lan dọc xuống g&ograve; mu, c&oacute; khi đau lan cả ra h&ocirc;ng, lưng. C&oacute; thể k&egrave;m theo buồn n&ocirc;n, n&ocirc;n.</li>\r\n	<li>Đau &acirc;m ỉ: gặp ở sỏi vừa v&agrave; nhỏ, nằm ở vị tr&iacute; bể thận hoặc khi sỏi nhỏ di chuyển trong đường tiết niệu. Đau c&oacute; thể k&egrave;m b&iacute; đ&aacute;i do sỏi đ&atilde; b&iacute;t tắc ở cổ b&agrave;ng quang hoặc lọt ra niệu đạo</li>\r\n</ul>\r\n\r\n<p>&nbsp; &nbsp;<strong>&nbsp;*&nbsp;<em>Đ&aacute;i m&aacute;u</em>:</strong>&nbsp;c&oacute; thể l&agrave; vi thể hoặc đại thể, đ&acirc;y l&agrave; biến chứng thường gặp của sỏi tiết niệu, nhất l&agrave; khi sỏi đang di chuyển g&acirc;y tổn thương niệu quản.</p>\r\n\r\n<p>&nbsp; &nbsp; *&nbsp;<strong><em>Đ&aacute;i buốt, đ&aacute;i rắt, đ&aacute;i mủ</em></strong>: xảy ra khi c&oacute; nhiễm khuẩn tiết niệu.</p>\r\n\r\n<p>&nbsp; &nbsp; *&nbsp;<strong>Sốt:</strong>&nbsp;c&oacute; thể sốt cao, r&eacute;t run k&egrave;m theo c&aacute;c triệu chứng tr&ecirc;n l&agrave; dấu hiệu của vi&ecirc;m thận-bể thận cấp.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Về điều trị, t&ugrave;y theo loại sỏi v&agrave; k&iacute;ch thước, số lượng v&agrave; vị tr&iacute; của sỏi m&agrave; sẽ c&oacute; c&aacute;c phương ph&aacute;p ph&ugrave; hợp như điều trị nội khoa hay phải can thiệp ngoại khoa. Do sỏi tiết niệu thường diễn biến &acirc;m thầm, chỉ được ph&aacute;t hiện khi đ&atilde; c&oacute; tắc nghẽn đường tiểu g&acirc;y đau hoặc t&igrave;nh cờ ph&aacute;t hiện khi kh&aacute;m sức khỏe. Nếu kh&ocirc;ng được ph&aacute;t hiện v&agrave; giải quyết kịp thời c&oacute; thể g&acirc;y n&ecirc;n c&aacute;c cơn đau quặn thận cấp, hoặc nguy hiểm hơn l&agrave; suy thận, do vậy việc ph&aacute;t hiện v&agrave; điều trị ph&ugrave; hợp l&agrave; rất quan trọng.&nbsp; Việc điều trị cũng n&ecirc;n được c&acirc;n nhắc từ điều trị nội khoa trước khi điều trị ngoại khoa. Rất nhiều trường hợp sỏi tiết niệu c&oacute; thể điều trị ổn định, thậm ch&iacute; khỏi hẳn nhờ Y học cổ truyền, chưa kể đến c&ograve;n c&oacute; thể gi&uacute;p giảm thiểu nguy cơ t&aacute;i ph&aacute;t v&agrave; n&acirc;ng cao sức khỏe to&agrave;n trạng.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Theo YHCT, soi thận được quy v&agrave;o chứng Thạch L&acirc;m. Nguy&ecirc;n nh&acirc;n l&agrave; do sự mất c&acirc;n bằng của c&aacute;c tạng phủ trong cơ thể g&acirc;y n&ecirc;n sự mất c&acirc;n bằng của c&aacute;c qu&aacute; tr&igrave;nh vận h&oacute;a c&aacute;c chất v&agrave; đ&agrave;o thải cặn b&atilde;, từ đ&oacute; sinh ra sỏi. Theo kinh nghiệm từ h&agrave;ng ngh&igrave;n năm nay, đ&atilde; c&oacute; rất nhiều b&agrave;i thuốc qu&yacute; ho&agrave;n to&agrave;n từ thuốc thảo dược gi&uacute;p điều trị v&agrave; hỗ trợ điều trị rất hiệu quả sỏi k&iacute;ch thước nhỏ đến vừa, cũng như ph&ograve;ng ngừa bệnh. Kh&ocirc;ng kh&oacute; để t&igrave;m thấy những ca l&acirc;m s&agrave;ng sau khi sử dụng thuốc, k&iacute;ch thước sỏi nhỏ lại v&agrave; bệnh nh&acirc;n c&oacute; thể đi tiểu ra sỏi.</p>\r\n', 'soitietnieu.jpg', '2019-01-03'),
(4, 'Tắc tia sữa - Nỗi khổ của các bà mẹ sau sinh', '<h2>Tắc tia sữa l&agrave; hiện tượng người mẹ sau sinh tia sữa bị tắc, sữa ứ lại v&agrave; kh&ocirc;ng ra ngo&agrave;i được. Dần dần, l&acirc;u ng&agrave;y sẽ h&igrave;nh th&agrave;nh cục, h&ograve;n sữa kết tinh g&acirc;y đau đớn. Nếu kh&ocirc;ng giải quyết kịp thời c&oacute; thể g&acirc;y ap xe v&uacute;, nguy hiểm cho người mẹ.</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>C&oacute; lẽ chỉ c&oacute; ai đ&atilde; trải qua mới hiểu cảm gi&aacute;c đau nhức khủng khiếp khi bị vi&ecirc;m tắc tia sữa. Đ&acirc;y l&agrave; t&igrave;nh trạng bệnh l&yacute; kh&ocirc;ng hề hiếm gặp ở phụ nữ sau sinh, c&oacute; thể xảy ra ở bất k&igrave; thời điểm n&agrave;o trong giai đoạn cho con b&uacute;. Sự tiết sữa của người mẹ diễn ra b&igrave;nh thường phụ thuộc v&agrave;o nhiều yếu tố như: Sức khỏe thể chất cũng như tinh thần của người mẹ, động t&aacute;c m&uacute;t của con, nhiễm khuẩn do ứ đọng sữa thừa b&eacute; kh&ocirc;ng b&uacute; hết, kh&ocirc;ng vệ sinh n&uacute;m v&uacute;, tổn thương do ngoại cảnh như chấn thương hoặc mặc &aacute;o ngực qu&aacute; chật,... Vậy n&ecirc;n, mỗi yếu tố tr&ecirc;n thay đổi th&igrave; đều c&oacute; thể ảnh hưởng đến sự tiết sữa. Do đ&oacute;, c&aacute;c b&agrave; mẹ c&oacute; thể ph&ograve;ng tr&aacute;nh t&igrave;nh trạng n&agrave;y bằng c&aacute;ch trang bị thật tốt c&aacute;c kiến thức li&ecirc;n quan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://www.duocphamgiabao.com/upload/images/kho-chiu-vi-bi-tac-tia-sua-lam-sao-de-chua-tri.jpg\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tuy nhi&ecirc;n đ&ocirc;i khi c&oacute; nhiều yếu tố nguy cơ kh&ocirc;ng thể kiểm so&aacute;t hết, cho n&ecirc;n vi&ecirc;m tắc tia sữa vẫn l&agrave; vấn đề đau đầu, mang tới nhiều mệt mỏi cho kh&ocirc;ng &iacute;t c&aacute;c b&agrave; mẹ. N&oacute; kh&ocirc;ng chỉ ảnh hưởng tới tinh thần v&agrave; thể chất của người mẹ m&agrave; c&ograve;n khiến trẻ kh&ocirc;ng thể b&uacute;, do đ&oacute; &iacute;t nhiều ảnh hưởng đến t&igrave;nh trạng dinh dưỡng của b&eacute;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Biểu hiện của bệnh kh&aacute; r&otilde; r&agrave;ng, người mẹ thường thấy một hoặc hai v&uacute; căng to, tức v&agrave; đau nhức, c&agrave;ng l&uacute;c c&agrave;ng tăng dần. Sờ v&uacute; th&igrave; thấy c&aacute;c khối tr&ograve;n di động nằm ri&ecirc;ng rẽ hoặc hợp th&agrave;nh một khối lớn, cứng v&agrave; rất đau. C&oacute; thể k&egrave;m theo sốt nhẹ, mệt mỏi, nhức đầu,... sữa kh&ocirc;ng tiết được ra khi b&eacute; b&uacute;, nặn v&agrave; thậm ch&iacute; d&ugrave;ng m&aacute;yh&uacute;t sữa.Nguy&ecirc;n tắc điều trị cơ bản l&agrave; l&agrave;m th&ocirc;ng tia sữa, chống vi&ecirc;m v&agrave; kh&aacute;ng sinh nếu c&oacute; nhiễm khuẩn. Nhưng việc l&agrave;m th&ocirc;ng tia sữa bằng c&aacute;c phương ph&aacute;p như nắn, xoa b&oacute;p, h&uacute;t để loại bỏ sữa thừa thường g&acirc;y đau đớn v&agrave; căng thẳng rất nhiều cho người mẹ, do đ&oacute; phần n&agrave;o l&agrave;m cho việc cơ thể điều tiết để tiết sữa c&agrave;ng kh&oacute; khăn hơn. C&oacute; thể thấy, tắc tia sữa li&ecirc;n quan kh&aacute; mật thiết đến t&igrave;nh trạng sức khỏe của người mẹ, thuốc YHCT c&oacute; hiệu quả cao trong việc n&acirc;ng cao sức khỏe to&agrave;n trạng, c&acirc;n bằng hoạt động của c&aacute;c tạng phủ trong cơ thể,từ đ&oacute; c&acirc;n bằng qu&aacute; tr&igrave;nh tiết sữa m&agrave; kh&ocirc;ng g&acirc;y ra t&aacute;c dụng kh&ocirc;ng mong muốn n&agrave;o. Điều n&agrave;y rất quan trọng v&igrave; đ&acirc;y l&agrave; giai đoạn nhạy cảm, việc điều trị nếu kh&ocirc;ng ch&uacute; &yacute; sẽ ảnh hưởng đến số lượng v&agrave; chất lượng sữa mẹ.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Việc d&ugrave;ng YHCT v&agrave;o điều trị tắc tia sữa đ&atilde; ghi nhận rất nhiều hiệu quả t&iacute;ch cực. Bệnh nh&acirc;n được sử dụng ho&agrave;n to&agrave;n bằng thuốc YHCT v&agrave; ch&acirc;m cứu cũng như massage nhẹ nh&agrave;ng, m&agrave; kh&ocirc;ng g&acirc;y t&aacute;c dụng phụ cho mẹ cũng nhưng kh&ocirc;ng ảnh hưởng đến chất lượng sữa.</p>\r\n', 'khochiuvibitactiasualamsaodechuatri_1766.jpg', '2019-01-04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `custom_id` int(11) NOT NULL,
  `order_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `custom_id`, `order_date`) VALUES
(1, 1, '2019-06-20'),
(2, 1, '2019-06-20'),
(3, 1, '2019-06-20'),
(4, 1, '2019-06-24'),
(5, 1, '2019-06-24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id`, `pro_id`, `order_id`, `quantity`, `price`) VALUES
(1, 2, 1, 1, 360000),
(2, 2, 2, 12, 360000),
(3, 3, 3, 22, 360000),
(4, 4, 3, 15, 500000),
(5, 5, 3, 18, 500000),
(6, 1, 4, 11, 360000),
(7, 1, 5, 10, 360000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cate_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `mieu_ta` text COLLATE utf8_unicode_ci,
  `Khuyen_mai` int(11) DEFAULT NULL,
  `quantity_pro` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `avatar`, `cate_id`, `price`, `mieu_ta`, `Khuyen_mai`, `quantity_pro`) VALUES
(1, 'Nấm linh chi nguyên tai', 'item_linhchido.jpg', 1, 450000, '<p style=\"text-align:justify\">Đ&acirc;y l&agrave; giống nấm Linh chi đỏ ngắn ng&agrave;y, thời gian trồng 3 th&aacute;ng, sản lượng cao, dễ trồng v&agrave; chăm s&oacute;c. Sau khi cấy giống v&ocirc; bịch ph&ocirc;i, khoảng 2,5 th&aacute;ng nấm kết th&uacute;c thời kỳ ph&aacute;t triển v&agrave; trưởng th&agrave;nh, bắt đầu ph&oacute;ng b&agrave;o tử. Sau đ&oacute;, nấm được để thểm khoảng ~2 tuần, mục đ&iacute;ch cho lớp b&agrave;o tử b&aacute;m chắc v&agrave;o bề mặt tai nấm, l&agrave; thu hoạch. Kh&ocirc;ng thể k&eacute;o d&agrave;i thời gian trồng hơn, v&igrave; c&acirc;y nấm sẽ bị chết, bị mốc, v&agrave; bị chai. Sản phẩm được thu hoạch thủ c&ocirc;ng 100% nhằm lưu giữ tối đa lượng b&agrave;o tử, chất lượng đảm bảo v&agrave; ổn định. Quy c&aacute;ch đ&oacute;ng g&oacute;i: T&uacute;i h&uacute;t ch&acirc;n kh&ocirc;ng (500g x 1) K&egrave;m theo: T&uacute;i chống ẩm + Hướng dẫn sử dụng</p>\r\n', 360000, 479),
(2, 'Nấm linh chi cắt sẵn', 'nam-linh-chi-cat-lat.jpg', 1, 450000, 'Đây là giống nấm Linh chi đỏ ngắn ngày, thời gian trồng 3 tháng, sản lượng cao, dễ trồng và chăm sóc.\r\nSau khi cấy giống vô bịch phôi, khoảng 2,5 tháng nấm kết thúc thời kỳ phát triển và trưởng thành, bắt đầu phóng bào tử. Sau đó, nấm được để thểm khoảng ~2 tuần, mục đích cho lớp bào tử bám chắc vào bề mặt tai nấm, là thu hoạch. Không thể kéo dài thời gian trồng hơn, vì cây nấm sẽ bị chết, bị mốc, và bị chai.\r\nSản phẩm được thu hoạch thủ công 100% nhằm lưu giữ tối đa lượng bào tử, chất lượng đảm bảo và ổn định.\r\nQuy cách đóng gói: Túi hút chân không (500g x 1)\r\nKèm theo: Túi chống ẩm + Hướng dẫn sử dụng', 360000, 487),
(3, 'Nấm linh chi xay bột', 'linh-chi-xay-bot.jpg', 1, 450000, 'Đây là giống nấm Linh chi đỏ ngắn ngày, thời gian trồng 3 tháng, sản lượng cao, dễ trồng và chăm sóc.\r\nSản phẩm được xay sẵn bằng máy xay chuyên dụng công nghệ cao. Mỗi mẻ xay tối thiểu 200 kg, hạn chế tối đa sự hao hụt thất thoát bào tử nấm, đảm bảo chất lượng và thuận tiện sử dụng. \r\nCách tốt nhất sử dụng nấm Linh chi là dùng loại xay bột, do dược tính có thể được chiết xuất, hòa tan triệt để trong quá trình nấu.\r\nQuy cách đóng gói: Túi hút chân không (500g x 1)\r\nKèm theo: Túi chống ẩm + Hướng dẫn sử dụng', 360000, 478),
(4, 'Nấm linh chi loại cao cấp nguyên tai', 'linh-chi-nguyen-tai.jpg', 1, 685000, 'Đây là giống nấm Linh chi đỏ trồng 6 tháng, có lớp bào tử rất dày, tác dụng tăng cường sức khỏe, phòng và chống nhiều căn bệnh khác nhau.\r\nSau khi cấy giống vô bịch phôi, khoảng 6 tháng (± 20 ngày, tùy vào điều kiện thời tiết, phương pháp nuôi trồng, và điều kiện trang trại) nấm kết thúc thời kỳ phát triển và trưởng thành, bắt đầu phóng bào tử. Sau đó, nấm được để thểm khoảng ~2 tuần, mục đích cho lớp bào tử bám chắc vào bề mặt tai nấm, là thu hoạch. Không thể kéo dài thời gian trồng hơn, vì cây nấm sẽ bị chết, bị mốc, và bị chai.\r\nSản phẩm được thu hoạch thủ công 100% nhằm lưu giữ tối đa lượng bào tử, nấm có chất lượng cao và dược tính mạnh.\r\nQuy cách đóng gói: Túi hút chân không (500g x 1)\r\nKèm theo: Túi chống ẩm + Hướng dẫn sử dụng', 500000, 485),
(5, 'Nấm linh chi loại cao cấp cắt sẵn', 'nam-linh-chi-cat-lat.jpg', 1, 685000, 'Đây là giống nấm Linh chi đỏ trồng 6 tháng, có lớp bào tử rất dày, tác dụng tăng cường sức khỏe, phòng và chống nhiều căn bệnh khác nhau.\r\nSau khi cấy giống vô bịch phôi, khoảng 6 tháng (± 20 ngày, tùy vào điều kiện thời tiết, phương pháp nuôi trồng, và điều kiện trang trại) nấm kết thúc thời kỳ phát triển và trưởng thành, bắt đầu phóng bào tử. Sau đó, nấm được để thểm khoảng ~2 tuần, mục đích cho lớp bào tử bám chắc vào bề mặt tai nấm, là thu hoạch. Không thể kéo dài thời gian trồng hơn, vì cây nấm sẽ bị chết, bị mốc, và bị chai.\r\nSản phẩm được thu hoạch thủ công 100% nhằm lưu giữ tối đa lượng bào tử, nấm có chất lượng cao và dược tính mạnh.\r\nQuy cách đóng gói: Túi hút chân không (500g x 1)\r\nKèm theo: Túi chống ẩm + Hướng dẫn sử dụng', 500000, 482),
(6, 'Nấm linh chi loại cao cấp xay bột', 'linh-chi-xay-bot.jpg', 1, 685000, 'Đây là giống nấm Linh chi đỏ trồng 6 tháng, xay sẵn, thuận tiện sử dụng, tác dụng tăng cường sức khỏe, phòng và chống nhiều căn bệnh khác nhau.\r\nSản phẩm được xay sẵn bằng máy xay chuyên dụng công nghệ cao. Mỗi mẻ xay tối thiểu 200 kg, hạn chế tối đa sự hao hụt thất thoát bào tử nấm, đảm bảo giữ nguyên chất lượng nấm.\r\nCách tốt nhất sử dụng nấm Linh chi là dùng loại xay bột, do dược tính có thể được chiết xuất, hòa tan triệt để trong quá trình nấu.\r\nQuy cách đóng gói: Túi hút chân không (500g x 1)\r\nKèm theo: Túi chống ẩm + Hướng dẫn sử dụng', 500000, 500),
(7, 'Nấm linh chi thượng hạng', 'item_linhchido.jpg', 1, 1900000, 'Đây là loại nấm Linh chi đỏ giống Nhật, trồng 1 năm, là loại nấm trồng lâu nhất trong điều kiện tự nhiên. \r\nSau khi cấy giống vô bịch phôi, khoảng 12 tháng (± 30 ngày, tùy vào điều kiện thời tiết, phương pháp nuôi trồng, và điều kiện trang trại) nấm kết thúc thời kỳ phát triển và trưởng thành, bắt đầu phóng bào tử. Sau đó, nấm được để thểm khoảng ~2 tuần, mục đích cho lớp bào tử bám chắc vào bề mặt tai nấm, là thu hoạch. Không thể kéo dài thời gian trồng hơn, vì cây nấm sẽ bị chết, bị mốc, và bị chai.\r\nSản phẩm được thu hoạch thủ công 100% nhằm lưu giữ tối đa lượng bào tử, nấm có chất lượng tuyệt hảo và dược tính rất mạnh.\r\nĐây cũng là sản phẩm được khách hàng ưa chuộng nhất, do nấm có chất lượng cao và giá thành rẻ (~ 1/2 giá thị trường)\r\nQuy cách đóng gói: Túi hút chân không (500g x 1)\r\nKèm theo: Túi chống ẩm + Hướng dẫn sử dụng', 1700000, 500),
(8, 'Hoạt huyết dạng viên', 'hoathuyet2_2551.jpg', 2, 150000, 'Thuốc được bào chế từ những vị thuốc, thảo dược thiên nhiên đã được sử dụng trong suốt hàng ngàn năm y học cổ truyền. Thuốc “Hoạt huyết Khuê Đường” không sử dụng bất kỳ một loại chất bảo quản nào trong quá trình sản xuất và tuyệt đối thân thiện với cơ thể con người.\r\nThành phần: Xuyên khung, Quy vĩ, Đan sâm, Chỉ xác, Hòe hoa, Cam thảo...', 100000, 500),
(9, 'Hoạt huyết dạng lỏng', 'hoathuyet-long.jpg', 2, 150000, 'Thuốc được bào chế từ những vị thuốc, thảo dược thiên nhiên đã được sử dụng trong suốt hàng ngàn năm y học cổ truyền. Thuốc “Hoạt huyết Khuê Đường” không sử dụng bất kỳ một loại chất bảo quản nào trong quá trình sản xuất và tuyệt đối thân thiện với cơ thể con người.\r\nThành phần: Xuyên khung, Quy vĩ, Đan sâm, Chỉ xác, Hòe hoa, Cam thảo...', 100000, 500),
(10, 'Nano Curcumin dạng lỏng', 'curcumin-long.jpg', 3, 350000, 'Tinh chất nghệ vàng Curcumin có nhiều hoạt tính sinh học quý như chống viêm, giảm đau, kháng khuẩn, diệt gốc tự do, chống ung thư… nhưng curcumin ít tan trong nước, dùng đường uống chỉ hấp thu 2-3% vào máu, không đủ nồng độ phát huy hiệu quả. Và công nghệ nano là giải pháp tốt nhất để phá vỡ rào cản đó, giúp nâng tầm giá trị tinh chất nghệ.', 300000, 500),
(11, 'Nano Curcumin dạng nén', 'curcumin-nén.jpg', 3, 420000, 'Tinh chất nghệ vàng Curcumin có nhiều hoạt tính sinh học quý như chống viêm, giảm đau, kháng khuẩn, diệt gốc tự do, chống ung thư… nhưng curcumin ít tan trong nước, dùng đường uống chỉ hấp thu 2-3% vào máu, không đủ nồng độ phát huy hiệu quả. Và công nghệ nano là giải pháp tốt nhất để phá vỡ rào cản đó, giúp nâng tầm giá trị tinh chất nghệ.', 390000, 500),
(12, 'Nano Curcumin dạng bột', 'nano-curcumin-bot.jpg', 3, 390000, 'Tinh chất nghệ vàng Curcumin có nhiều hoạt tính sinh học quý như chống viêm, giảm đau, kháng khuẩn, diệt gốc tự do, chống ung thư… nhưng curcumin ít tan trong nước, dùng đường uống chỉ hấp thu 2-3% vào máu, không đủ nồng độ phát huy hiệu quả. Và công nghệ nano là giải pháp tốt nhất để phá vỡ rào cản đó, giúp nâng tầm giá trị tinh chất nghệ.', 340000, 500),
(13, 'Trà Sâm', 'tra-sam.jpg', 4, 600000, 'Trà Hồng Sâm Hàn Quốc - Korean Ginseng Tea là sản phẩm trà cao cấp có hương vị độc đáo, đậm đà của tinh chất hồng sâm. Với công thức chế biến đặc biệt làm dịu vị đắng của hồng sâm. Trà Hồng Sâm Hàn Quốc - Korean Ginseng Tea được sản xuất dưới dạng gói bột  hoà tan tiện lợi cho việc sử dụng trà.', 500000, 500),
(14, 'Trà Gừng', 'tragung.jpg', 4, 300000, 'Trà gừng là một thức uống quen thuộc chứa nhiều vitamin, khoáng chất và các chất chống oxy hóa rất tốt cho sức khỏe. Ngoài ra trà gừng còn có công dụng hỗ trợ khi bị cảm lạnh, chống buồn nôn, giảm đau bụng do ăn thức ăn, giúp tăng cường sức đề kháng và giữ ấm cho cơ thể. Trà gừng hòa tan Linh Khuê Đường được làm từ những lá trà tươi ngon nhất, kết hợp với bột gừng già, cho hương vị ngọt ngọt thanh và cay nồng. Cách pha chế trà cũng rất đơn giản, chỉ cần thêm một chút nước sôi và lượng đường tùy khẩu vị rồi thưởng thức, có thể uống nóng hoặc đá tùy theo sở thích của mỗi người.', 260000, 500);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_image`
--

CREATE TABLE `product_image` (
  `id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `hinh_anh` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_image`
--

INSERT INTO `product_image` (`id`, `pro_id`, `hinh_anh`) VALUES
(1, 1, '////'),
(2, 2, 'nam-linh-chi-cat-lat.jpg'),
(3, 3, 'linh-chi-xay-bot.jpg'),
(4, 4, 'linh-chi-nguyen-tai.jpg'),
(5, 5, 'nam-linh-chi-cat-lat.jpg'),
(6, 6, 'linh-chi-xay-bot.jpg'),
(7, 7, 'item_linhchido.jpg'),
(8, 8, 'hoathuyet2_2551.jpg'),
(9, 9, 'hoathuyet-long.jpg'),
(10, 10, 'curcumin-long.jpg'),
(11, 11, 'curcumin-nén.jpg'),
(12, 12, 'nano-curcumin-bot.jpg'),
(13, 13, 'tra-sam.jpg'),
(14, 14, 'tragung.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sale`
--

CREATE TABLE `sale` (
  `id` int(11) NOT NULL,
  `content` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `date_start` date DEFAULT NULL,
  `date_end` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sale`
--

INSERT INTO `sale` (`id`, `content`, `status`, `date_start`, `date_end`) VALUES
(1, 'chao he 2019', 0, '2019-06-19', '2019-06-22');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usename` (`usename`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `usename` (`usename`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Chỉ mục cho bảng `knowledge`
--
ALTER TABLE `knowledge`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `custom_id` (`custom_id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pro_id` (`pro_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cate_id` (`cate_id`);

--
-- Chỉ mục cho bảng `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pro_id` (`pro_id`);

--
-- Chỉ mục cho bảng `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `knowledge`
--
ALTER TABLE `knowledge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `sale`
--
ALTER TABLE `sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`custom_id`) REFERENCES `customer` (`id`);

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`pro_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`cate_id`) REFERENCES `category` (`id`);

--
-- Các ràng buộc cho bảng `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `product_image_ibfk_1` FOREIGN KEY (`pro_id`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
