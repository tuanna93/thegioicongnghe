-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 27, 2017 lúc 02:04 CH
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laravel53`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '0',
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `is_tab` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `order`, `icon`, `parent_id`, `keywords`, `description`, `is_tab`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Tai nghe', 'tai-nghe', 0, '', 0, 'Tai nghe', 'Tai nghe', 1, 1, '2017-03-26 04:33:27', '2017-03-26 04:33:27'),
(2, 'Loa', 'loa', 0, '', 0, 'Loa', 'Loa', 1, 1, '2017-03-26 05:18:30', '2017-03-26 05:18:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_posts`
--

CREATE TABLE `category_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image_advs`
--

CREATE TABLE `image_advs` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL DEFAULT '1',
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `width` int(11) NOT NULL DEFAULT '0',
  `height` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image_types`
--

CREATE TABLE `image_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `parent_id` int(11) NOT NULL,
  `position` tinyint(1) NOT NULL DEFAULT '1',
  `cate_id` tinyint(1) NOT NULL DEFAULT '1',
  `type_page` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menus`
--

INSERT INTO `menus` (`id`, `name`, `slug`, `content`, `icon`, `sort_order`, `parent_id`, `position`, `cate_id`, `type_page`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Trang chủ', 'trang-chu', '', '', 0, 0, 1, 1, 1, 1, '2017-03-27 01:41:51', '2017-03-27 01:41:51'),
(2, 'Thanh toán vận chuyển', 'thanh-toan-van-chuyen', '', '', 0, 0, 1, 1, 5, 1, '2017-03-27 02:31:14', '2017-03-27 02:31:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(15, '2014_10_12_000000_create_users_table', 1),
(16, '2014_10_12_100000_create_password_resets_table', 1),
(17, '2017_03_04_020732_create_options_table', 1),
(18, '2017_03_04_052231_create_menus_table', 1),
(19, '2017_03_06_043647_create_categories_table', 1),
(20, '2017_03_06_101019_create_image_types_table', 1),
(21, '2017_03_06_101100_create_image_advs_table', 1),
(22, '2017_03_06_122952_create_products_table', 1),
(23, '2017_03_07_121942_create_one_pages_table', 1),
(24, '2017_03_08_073503_create_category_posts_table', 1),
(25, '2017_03_08_074741_create_posts_table', 1),
(26, '2017_03_14_144459_create_orders_table', 1),
(27, '2017_03_14_145521_create_order_products_table', 1),
(28, '2017_03_20_033816_create_user_admins_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `one_pages`
--

CREATE TABLE `one_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `one_pages`
--

INSERT INTO `one_pages` (`id`, `name`, `slug`, `content`, `keywords`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Thanh toán vận chuyển', 'thanh-toan-van-chuyen', '<p><strong>I.&nbsp; KHI ĐẶT H&Agrave;NG QU&Yacute; KH&Aacute;CH C&Oacute; THỂ LỰA CHỌN C&Aacute;C&nbsp;H&Igrave;NH THỨC CHUYỂN TIỀN DƯỚI Đ&Acirc;Y:</strong></p>\r\n\r\n<p><strong>-</strong>&nbsp;Thanh to&aacute;n trực tiếp cho nh&acirc;n vi&ecirc;n khi giao h&agrave;ng.</p>\r\n\r\n<p>&nbsp; &nbsp; (&Aacute;p dụng trong nội th&agrave;nh H&agrave; Nội)</p>\r\n\r\n<p><strong>-</strong>&nbsp;Chuyển tiền v&agrave;o t&agrave;i khoản sau của:</p>\r\n\r\n<p>*&nbsp; Ng&acirc;n h&agrave;ng Vietcombank - VCB&nbsp;( tại sở giao dịch Ngoại Thương Việt Nam )&nbsp;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;Số t&agrave;i khoản: &nbsp;0011000399310</p>\r\n\r\n<p>&nbsp;&nbsp; Chủ t&agrave;i khoản: NGUYỄN XU&Acirc;N TỎ</p>\r\n\r\n<p><strong>II. H&Igrave;NH THỨC VẬN CHUYỂN H&Agrave;NG CỦA&nbsp;TAINGHE365</strong></p>\r\n\r\n<p><strong>-</strong>&nbsp;Qu&yacute; kh&aacute;ch ở H&agrave; Nội: giao h&agrave;ng miễn ph&iacute;&nbsp;<em>(kh&ocirc;ng &aacute;p dụng với c&aacute;c sản phẩm đang được KM)</em>, thời gian giao h&agrave;ng&nbsp;trong ng&agrave;y&nbsp;kể từ khi đặt h&agrave;ng.</p>\r\n\r\n<p><em>( Nh&acirc;n vi&ecirc;n tainghe365&nbsp;sẽ mang h&agrave;ng trực tiếp đến địa chỉ Qu&yacute; kh&aacute;ch y&ecirc;u cầu.)</em></p>\r\n\r\n<p><strong>-</strong>&nbsp;Qu&yacute; kh&aacute;ch ở TPHCM v&agrave; c&aacute;c tỉnh tr&ecirc;n to&agrave;n quốc, 365Audio&nbsp;sẽ giao h&agrave;ng th&ocirc;ng qua Viettel/ EMS&nbsp;/ Newdays&nbsp;..., thời gian giao h&agrave;ng từ 1&nbsp;đến 3 ng&agrave;y kể từ khi x&aacute;c nhận đơn h&agrave;ng.</p>\r\n\r\n<p><strong>III. C&Aacute;C PHƯƠNG THỨC THANH TO&Aacute;N</strong></p>\r\n\r\n<p><strong>- Dịch vụ (COD):&nbsp;</strong>Thanh to&aacute;n khi nhận h&agrave;ng.&nbsp;Với c&aacute;c kh&aacute;ch h&agrave;ng ở xa thường hay lăn tăn về vẫn đề lừa đảo, gian lận l&agrave; chuyển tiền xong v&agrave; kh&ocirc;ng nhận được h&agrave;ng. Ch&iacute;nh v&igrave; vậy ch&uacute;ng t&ocirc;i chọn c&aacute;ch thanh to&aacute;n (COD) nhằm mang tới cho kh&aacute;ch h&agrave;ng 1 sự tin tưởng tuyệt đối l&agrave; kh&aacute;ch h&agrave;ng nhận được sản phẩm rồi sau đ&oacute; mới thanh to&aacute;n cho nh&acirc;n vi&ecirc;n vận chuyển.</p>\r\n\r\n<p><strong>- Thanh to&aacute;n&nbsp;an to&agrave;n</strong>&nbsp;qua t&agrave;i khoản&nbsp;<strong>Bảo Kim</strong>&nbsp;nếu c&aacute;c bạn chưa r&otilde; về dịch vụ thanh to&aacute;n an to&agrave;n khi mua h&agrave;ng Online n&agrave;y xin vui l&ograve;ng v&agrave;o trang chủ Bảo Kim để biết chi tiết cụ thể:&nbsp;<a href=\"http://www.baokim.vn/\" rel=\"nofollow\" target=\"_blank\">www.baokim.vn</a></p>\r\n\r\n<p><strong>- Thanh to&aacute;n&nbsp;an to&agrave;n</strong>&nbsp;qua t&agrave;i khoản&nbsp;<strong>Ng&acirc;n Lượng</strong>&nbsp;nếu c&aacute;c bạn chưa r&otilde; về dịch vụ thanh to&aacute;n an to&agrave;n khi mua h&agrave;ng Online n&agrave;y xin vui l&ograve;ng v&agrave;o trang chủ Ng&acirc;n Lượng&nbsp;để biết chi tiết cụ thể:&nbsp;<a href=\"http://www.nganluong.vn/\" rel=\"nofollow\" target=\"_blank\">www.nganluong.vn</a></p>\r\n\r\n<p><strong>- Thanh to&aacute;n qua bưu điện:</strong>&nbsp;Kh&aacute;ch h&agrave;ng&nbsp;c&oacute; thể đến bất kỳ bưu cục n&agrave;o v&agrave; sử dụng dịch vụ &ldquo;CHUYỂN TIỀN NHANH&rdquo; với c&aacute;c th&ocirc;ng tin sau:</p>\r\n\r\n<p>​T&ecirc;n: Nguyễn Xu&acirc;n Tỏ</p>\r\n\r\n<p>Địa chỉ: Số 15 Ng&otilde; 22&nbsp;Phan Đ&igrave;nh Gi&oacute;t, Thanh Xu&acirc;n, H&agrave; Nội</p>\r\n\r\n<p>Phone:&nbsp;<a href=\"tel:0986540333\" rel=\"alternate\">0986.540.333</a></p>\r\n\r\n<p><strong>- Thanh to&aacute;n qua t&agrave;i khoản ng&acirc;n h&agrave;ng:</strong>&nbsp;Trường hợp kh&aacute;ch h&agrave;ng muốn thanh to&aacute;n trước&nbsp;rồi nhận h&agrave;ng sau th&igrave; qu&yacute; kh&aacute;ch vui l&ograve;ng chuyển khoản theo 1 trong những&nbsp;th&ocirc;ng tin dưới&nbsp;<em>(ph&iacute;a dưới).&nbsp;</em>Sau khi chuyển khoản th&agrave;nh c&ocirc;ng kh&aacute;ch h&agrave;ng h&atilde;y th&ocirc;ng b&aacute;o qua điện thoại<a href=\"tel:0986540333\" rel=\"alternate\">0986.540.333</a>&nbsp;cho ch&uacute;ng r&ocirc;i x&aacute;c nhận (Ch&uacute;ng t&ocirc;i hỗ trợ chuyển h&agrave;ng ra bến xe cho kh&aacute;ch h&agrave;ng ở c&aacute;c tỉnh tr&ecirc;n to&agrave;n quốc &aacute;p dụng khi chuyển khoản trước)</p>\r\n\r\n<p><em><strong>Th&ocirc;ng tin chuyển khoản:</strong></em></p>\r\n\r\n<p>*&nbsp; Ng&acirc;n h&agrave;ng Vietcombank - VCB&nbsp;( tại sở giao dịch Ngoại Thương Việt Nam )&nbsp;</p>\r\n\r\n<p>Số t&agrave;i khoản: &nbsp;0011000399310</p>\r\n\r\n<p>Chủ t&agrave;i khoản: NGUYỄN XU&Acirc;N TỎ</p>\r\n\r\n<p><em>* Lưu &yacute;:&nbsp;Bất kỳ t&agrave;i khoản n&agrave;o kh&ocirc;ng được cập nhật ở tr&ecirc;n đều kh&ocirc;ng c&oacute; gi&aacute; trị thanh to&aacute;n.</em></p>\r\n\r\n<p><strong>IV. THEO D&Otilde;I LỘ TR&Igrave;NH ĐƠN H&Agrave;NG</strong></p>\r\n\r\n<p>- Sau khi đ&oacute;ng g&oacute;i v&agrave;&nbsp;chuyển h&agrave;ng ch&uacute;ng t&ocirc;i sẽ cung cấp cho kh&aacute;ch h&agrave;ng<em>&nbsp;m&atilde; số vận đơn</em>&nbsp;(nếu kh&aacute;ch h&agrave;ng y&ecirc;u cầu)&nbsp;để kh&aacute;ch h&agrave;ng c&oacute; thể tự tra cứu th&ocirc;ng tin, lộ tr&igrave;nh cụ thể hơn:</p>\r\n\r\n<p>- Cước vận chuyển sẽ t&ugrave;y thuộc v&agrave;o vị tr&iacute; địa l&yacute; của kh&aacute;ch h&agrave;ng sẽ giao động từ 20.000đ&nbsp;- 80.000đ t&ugrave;y thuộc v&agrave;o sản phẩm c&oacute; k&iacute;ch thước nhỏ hay lớn. Ch&uacute;ng t&ocirc;i sẽ th&ocirc;ng b&aacute;o cước ph&iacute; cho kh&aacute;ch h&agrave;ng trước khi tiến h&agrave;nh giao h&agrave;ng.</p>\r\n\r\n<p>- Nh&acirc;n vi&ecirc;n giao h&agrave;ng sẽ c&oacute; tr&aacute;ch nhiệm li&ecirc;n hệ trước với kh&aacute;ch h&agrave;ng để hẹn giờ giao h&agrave;ng.</p>\r\n\r\n<p>- Nh&acirc;n vi&ecirc;n giao h&agrave;ng phải đảm bảo h&agrave;ng h&oacute;a an to&agrave;n, kh&ocirc;ng bẹp m&eacute;o, biến dạng, nguy&ecirc;n đai, nguy&ecirc;n kiện giao tận tay đến kh&aacute;ch h&agrave;ng.</p>\r\n\r\n<p>+ Check đơn vận chuyển ph&aacute;t nhanh&nbsp;Ship Chung:&nbsp;<a href=\"http://www.shipchung.vn/\" rel=\"nofollow\" target=\"_blank\">http://www.shipchung.vn/</a></p>\r\n\r\n<p>+ Check đơn vận chuyển ph&aacute;t nhanh&nbsp;T&iacute;n Th&agrave;nh:&nbsp;<a href=\"http://ttcvina.com/ttc/\" rel=\"nofollow\" target=\"_blank\">http://ttcvina.com/ttc/</a></p>\r\n\r\n<p>+ Check đơn vận chuyển ph&aacute;t nhanh&nbsp;Viettel:&nbsp;<a href=\"http://www.viettelpost.com.vn/\" rel=\"nofollow\" target=\"_blank\">http://www.viettelpost.com.vn/</a></p>\r\n\r\n<p>+ Check đơn vận chuyển ph&aacute;t nhanh&nbsp;EMS:&nbsp;<a href=\"http://ems.com.vn/tracktrace.aspx\" rel=\"nofollow\" target=\"_blank\">http://ems.com.vn/tracktrace.aspx</a></p>\r\n\r\n<p><strong>* Lưu &yacute;:</strong></p>\r\n\r\n<p>&nbsp;- Thời gian giao h&agrave;ng c&oacute; thể nhanh hơn hoặc l&acirc;u hơn với dự kiến v&igrave; l&yacute; do thời tiết, đơn h&agrave;ng tại cửa h&agrave;ng hiện qu&aacute; tải, địa chỉ do kh&aacute;ch h&agrave;ng cung cấp&nbsp;bị nhầm lẫn với c&aacute;c địa chỉ kh&aacute;c. L&uacute;c n&agrave;y,&nbsp;<strong>365Audio</strong>&nbsp;sẽ th&ocirc;ng b&aacute;o cụ thể đến kh&aacute;ch h&agrave;ng ngay khi ph&aacute;t sinh sự kiện g&acirc;y chậm trễ việc giao h&agrave;ng.</p>\r\n\r\n<p>&nbsp;- Trường hợp kh&aacute;ch h&agrave;ng thay đổi địa chỉ hoặc y&ecirc;u cầu điều chỉnh đơn h&agrave;ng chỉ được thực hiện trong v&ograve;ng 15&nbsp;ph&uacute;t kể từ khi đơn h&agrave;ng được x&aacute;c nhận</p>\r\n\r\n<p>&nbsp;- Việc điều chỉnh đơn h&agrave;ng sẽ kh&ocirc;ng được chấp nhận nếu kh&aacute;ch h&agrave;ng th&ocirc;ng b&aacute;o điều chỉnh sau 15&nbsp;ph&uacute;t kể từ khi đơn h&agrave;ng đ&atilde; được&nbsp;<strong>365Audio</strong>&nbsp;tiếp nhận.</p>\r\n\r\n<p>- Dịch vụ giao h&agrave;ng tận nơi được thực hiện từ&nbsp;<strong>9h&nbsp;tới 19h</strong>&nbsp;tất cả c&aacute;c ng&agrave;y trong tuần.</p>\r\n\r\n<p><strong>H&Atilde;Y&nbsp;LI&Ecirc;N HỆ&nbsp;THEO HOTLINE:&nbsp;<a href=\"tel:0986540333\" rel=\"alternate\">0986.540.333</a>&nbsp;để&nbsp;được&nbsp;phục vụ&nbsp;nhanh nhất.</strong></p>\r\n\r\n<p><strong><a href=\"http://tainghe365.com/tainghe365.com\" rel=\"alternate\" title=\"TAINGHE365.COM UY TÍN - TẬN TÂM\">TAINGHE365.COM</a>&nbsp;UY T&Iacute;N - TẬN T&Acirc;M</strong></p>\r\n', '', '', 1, '2017-03-27 02:15:09', '2017-03-27 02:15:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `options`
--

CREATE TABLE `options` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `options`
--

INSERT INTO `options` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'logo', '', NULL, NULL),
(2, 'favicon', '', NULL, NULL),
(3, 'phone', '0123456789', NULL, '2017-03-27 02:13:23'),
(4, 'hotline', '0987654321', NULL, '2017-03-27 02:13:23'),
(5, 'address', 'Từ Liêm - Hà Nội', NULL, '2017-03-27 02:13:23'),
(6, 'link_facebook', '', NULL, NULL),
(7, 'link_youtube', '', NULL, NULL),
(8, 'link_google', '', NULL, NULL),
(9, 'posts_per_page', '', NULL, NULL),
(10, 'products_per_page', '', NULL, NULL),
(11, 'footer_left', '<p>Designed by Tuanna @2016</p>\r\n', NULL, '2017-03-27 02:13:23'),
(12, 'footer_right', '<p>hello</p>\r\n', NULL, '2017-03-27 02:13:23'),
(13, 'title', 'Thế giới di động', NULL, '2017-03-27 02:12:29'),
(14, 'keywords', 'SEO thế giới di động', NULL, '2017-03-27 02:13:24'),
(15, 'description', 'SEO thế giới di động', NULL, '2017-03-27 02:13:24'),
(16, 'h1', 'SEO thế giới di động', NULL, '2017-03-27 02:13:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `post_id` int(11) NOT NULL DEFAULT '0',
  `keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `name`, `slug`, `image`, `intro`, `content`, `post_id`, `keywords`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'RHA T20: THIẾT KẾ CAO CẤP, CHẤT ÂM ', 'rha-t20-thiet-ke-cao-cap-chat-am', '/upload/images/rha-t20-thiet-ke-cao-cap-chat-am-audiophile.jpg', '<p>Những g&igrave; m&agrave; RHA T20 thể hiện cho thấy n&oacute; xứng đ&aacute;ng với từng xu được bỏ ra, nhất l&agrave; trong ph&acirc;n kh&uacute;c tai nghe cao cấp vốn kh&aacute; k&eacute;n người d&ugrave;ng ở Việt Nam từ trước đến nay.</p>\r\n', '<p>312312</p>\r\n', 1, '', '', 1, '2017-03-27 02:09:07', '2017-03-27 02:10:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price_new` int(11) NOT NULL DEFAULT '0',
  `price_old` int(11) NOT NULL DEFAULT '0',
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cate_id` int(11) NOT NULL DEFAULT '0',
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status_sale` int(11) NOT NULL DEFAULT '0',
  `is_selling` tinyint(1) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `price_new`, `price_old`, `intro`, `content`, `image`, `cate_id`, `keywords`, `description`, `status_sale`, `is_selling`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Tai nghe smock', 'tai-nghe-smock', 200000, 0, '<p>Tai nghe smock</p>\r\n', '<p>Tai nghe smock</p>\r\n', 'Tai nghe smock', 1, 'Tai nghe smock', 'Tai nghe smock', 2, 0, 1, '2017-03-26 04:34:01', '2017-03-26 04:56:45'),
(2, 'Loa bose', 'loa-bose', 0, 0, '', '', '/upload/images/thumb_1more-ibfree-tainghe365-icon.jpg', 2, '', '', 0, 0, 1, '2017-03-26 05:19:22', '2017-03-26 05:19:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Chỉ mục cho bảng `category_posts`
--
ALTER TABLE `category_posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_posts_name_unique` (`name`);

--
-- Chỉ mục cho bảng `image_advs`
--
ALTER TABLE `image_advs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `image_types`
--
ALTER TABLE `image_types`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `one_pages`
--
ALTER TABLE `one_pages`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `category_posts`
--
ALTER TABLE `category_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `image_advs`
--
ALTER TABLE `image_advs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `image_types`
--
ALTER TABLE `image_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT cho bảng `one_pages`
--
ALTER TABLE `one_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `options`
--
ALTER TABLE `options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
