-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 30, 2021 lúc 05:04 AM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ta`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(20) UNSIGNED NOT NULL,
  `tenkh` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `tenkh`, `password`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(5, 'Đỗ Công Minh', '1', 'congminh@gmail.com', '0312643568', NULL, NULL),
(6, 'Phạm Duy Lâm', '1', 'lamthon@gmail.com', '0336897882', NULL, NULL),
(8, 'Lê Thanh Ngọc', '1', 'ngocxz@gmail.com', '0336897882', NULL, NULL),
(10, 'Tường Thế Hải Anh', '1', 'haianh@gmail.com', '0336897882', NULL, NULL),
(11, 'Luyện Ngọc Nam', '1', 'nam@gmail.com', '0356894567', NULL, NULL),
(12, 'Phạm Duy Hải', '1', 'vannghia@gmail.com', '0356894567', NULL, NULL),
(15, 'Lý Văn Huy', '1', 'vanhuy@gmail.com', '0336897883', NULL, '2021-05-17 07:49:01'),
(16, 'Nguyễn Văn Mạnh', '1', 'manhmanh@gmail.com', '0356894567', NULL, NULL),
(17, 'Đỗ Tuấn Anh', '1', 'tanh@gmail.com', '024568779', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tenkh` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noidung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`id`, `tenkh`, `email`, `phone`, `noidung`, `created_at`, `updated_at`) VALUES
(10, 'Đỗ Tuấn Anh', 'tanh@gmail.com', '0123284497', 'hài lòng', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitintuc`
--

CREATE TABLE `loaitintuc` (
  `id` int(11) NOT NULL,
  `tenloai` varchar(120) DEFAULT NULL,
  `ghichu` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaitintuc`
--

INSERT INTO `loaitintuc` (`id`, `tenloai`, `ghichu`) VALUES
(1, 'Tin giới thiệu', 'Giới thiệu các chương trình, sự kiện,...'),
(2, 'Tin nhận xét', 'Nhận xét các sản phẩm, chương trình,...'),
(3, 'Tin thông báo', 'Thông báo về những sự kiện sắp ra mắt.....');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaixe`
--

CREATE TABLE `loaixe` (
  `id` int(11) NOT NULL,
  `tenloai` varchar(120) DEFAULT NULL,
  `mota` varchar(120) DEFAULT NULL,
  `ghichu` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaixe`
--

INSERT INTO `loaixe` (`id`, `tenloai`, `mota`, `ghichu`) VALUES
(1, 'xe số', 'Giá thành rẻ, phân khúc dưới 30 triệu đồng', 'không'),
(2, 'xe ga', 'phân khúc từ 30 triệu đến 120 triệu, lịch sự, sang trọng', 'không'),
(3, 'xe thể thao', 'phân khúc cao, thể thao, đẹp và mạnh mẽ', 'không');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_10_072009_khachhang', 1),
(5, '2021_05_10_084954_shipping', 2),
(6, '2021_05_14_012924_order', 3),
(7, '2021_05_14_013012_order_details', 3),
(8, '2021_05_14_013513_payment', 3),
(9, '2021_06_17_124653_lienhe', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `id` int(11) NOT NULL,
  `tenncc` varchar(120) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `diachi` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_total` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(34, 17, 45, 35, '99,990,000.00', 'Đang chờ xử lý', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `order_details_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_sales_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_sales_quantity`, `created_at`, `updated_at`) VALUES
(28, 34, 8, 'EXCITER 155 VVA PHIÊN BẢN GP', '50000000', 1, NULL, NULL),
(29, 34, 7, 'EXCITER 155 VVA PHIÊN BẢN CAO CẤP', '49990000', 1, NULL, NULL);

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
-- Cấu trúc bảng cho bảng `payment`
--

CREATE TABLE `payment` (
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `payment_method` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `payment`
--

INSERT INTO `payment` (`payment_id`, `payment_method`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, '2', 'Đang chờ xử lý', NULL, NULL),
(2, '2', 'Đang chờ xử lý', NULL, NULL),
(3, '2', 'Đang chờ xử lý', NULL, NULL),
(4, '2', 'Đang chờ xử lý', NULL, NULL),
(5, '2', 'Đang chờ xử lý', NULL, NULL),
(6, '2', 'Đang chờ xử lý', NULL, NULL),
(7, '2', 'Đang chờ xử lý', NULL, NULL),
(8, '2', 'Đang chờ xử lý', NULL, NULL),
(9, '2', 'Đang chờ xử lý', NULL, NULL),
(10, '2', 'Đang chờ xử lý', NULL, NULL),
(11, '2', 'Đang chờ xử lý', NULL, NULL),
(12, '2', 'Đang chờ xử lý', NULL, NULL),
(13, '2', 'Đang chờ xử lý', NULL, NULL),
(14, '2', 'Đang chờ xử lý', NULL, NULL),
(15, '2', 'Đang chờ xử lý', NULL, NULL),
(16, '2', 'Đang chờ xử lý', NULL, NULL),
(17, '2', 'Đang chờ xử lý', NULL, NULL),
(18, '2', 'Đang chờ xử lý', NULL, NULL),
(19, '2', 'Đang chờ xử lý', NULL, NULL),
(20, '2', 'Đang chờ xử lý', NULL, NULL),
(21, '2', 'Đang chờ xử lý', NULL, NULL),
(22, '2', 'Đang chờ xử lý', NULL, NULL),
(23, '2', 'Đang chờ xử lý', NULL, NULL),
(24, '2', 'Đang chờ xử lý', NULL, NULL),
(25, '2', 'Đang chờ xử lý', NULL, NULL),
(26, '2', 'Đang chờ xử lý', NULL, NULL),
(27, '2', 'Đang chờ xử lý', NULL, NULL),
(28, '3', 'Đang chờ xử lý', NULL, NULL),
(29, '3', 'Đang chờ xử lý', NULL, NULL),
(30, '3', 'Đang chờ xử lý', NULL, NULL),
(31, '2', 'Đang chờ xử lý', NULL, NULL),
(32, '2', 'Đang chờ xử lý', NULL, NULL),
(33, '2', 'Đang chờ xử lý', NULL, NULL),
(34, '2', 'Đang chờ xử lý', NULL, NULL),
(35, '2', 'Đang chờ xử lý', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `tenxe` varchar(120) DEFAULT NULL,
  `maloai` int(11) DEFAULT NULL,
  `mancc` int(11) DEFAULT NULL,
  `img` varchar(120) DEFAULT NULL,
  `gianhap` float DEFAULT NULL,
  `price` float DEFAULT NULL,
  `dongco` varchar(120) DEFAULT NULL,
  `dungtichxylanh` varchar(120) DEFAULT NULL,
  `congsuat` varchar(120) DEFAULT NULL,
  `phanh` varchar(120) DEFAULT NULL,
  `binhxang` varchar(120) DEFAULT NULL,
  `binhnhot` varchar(120) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `khoiluong` varchar(120) DEFAULT NULL,
  `hopso` varchar(120) DEFAULT NULL,
  `den` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `tenxe`, `maloai`, `mancc`, `img`, `gianhap`, `price`, `dongco`, `dungtichxylanh`, `congsuat`, `phanh`, `binhxang`, `binhnhot`, `status`, `khoiluong`, `hopso`, `den`) VALUES
(2, 'SIRIUS PHIÊN BẢN PHANH CƠ', 1, NULL, 'xe1.png', 14800000, 18900000, '4 thì, 2 van SOHC, làm mát bằng không khí', '110.3 cc', '6.4 kW (8.7PS)/7,000 vòng/phút', 'Phanh cơ (đùm)', '4,2 lít', '1 L', 1, '96 kg', '4 số tròn', 'Halogen 12V, 35W/35Wx1'),
(3, 'SIRIUS PHIÊN BẢN PHANH ĐĨA', 1, NULL, 'xe2.png', 15000000, 19800000, '4 thì, 2 van SOHC, làm mát bằng không khí', '4,2 lít', '6.4 kW (8.7PS)/7,000 vòng/phút', 'Phanh đĩaĐĩa thủy lực', '4,2 lít', '1 L', 1, '96kg', '4 số tròn', 'Halogen 12V, 35W/35Wx1'),
(4, 'SIRIUS PHIÊN BẢN RC VÀNH ĐÚC', 1, NULL, 'xe3.png', 16000000, 21300000, '4 thì, 2 van SOHC, làm mát bằng không khí', '110.3 cc', '6,60KW (9.0PS/8.000 vòng/phút)', 'Đĩa thuỷ lực', '4,2 lít', '1 L', 1, '100 kg', '4 số tròn', 'Halogen 12V, 35W/35Wx1'),
(5, 'EXCITER 150', 1, NULL, 'xe4.png', 40000000, 49000000, '4 thì, 4 van, SOHC, làm mát bằng dung dịch', '150 cc', '11,3 kW (15,4 PS) / 8.500 vòng/phút', 'Đĩa thủy lực (đường kính 245 mm)', '4,2 lít', '1,15', 1, '131 kg', '5 số tròn', 'Bóng đèn LED 12V 10W x2'),
(7, 'EXCITER 155 VVA PHIÊN BẢN CAO CẤP', 1, NULL, 'xe5.png', 43000000, 49990000, '4 thì, 4 van, SOHC, làm mát bằng dung dịch, VVA', '155 cc', '17.7 mã lực / 9,500 vòng/phút', 'Phanh đĩa đơn thủy lực; 2 piston', '5.4 lít', '1.10 L', 1, '131 kg', '5 số', 'Bóng đèn LED 12V 10W x2'),
(8, 'EXCITER 155 VVA PHIÊN BẢN GP', 1, NULL, 'xe6.png', 43500000, 50000000, '4 thì, 4 van, SOHC, làm mát bằng dung dịch, VVA', '155 cc', '17.7 mã lực / 9,500 vòng/phút', 'Phanh đĩa đơn thủy lực; 2 piston', '5.4 lít', '1.10 L', 1, '131 kg', '5 số tròn', 'Bóng đèn LED 12V 10W x2'),
(9, 'NVX 155 THẾ HỆ I', 2, NULL, 'xega1.png', 42000000, 52000000, 'Blue Core, 4 van, 4 kỳ, SOHC, Làm mát bằng dung dịch', '155 cc', '11,0 kW (15,0 ps) / 8.000 vòng /phút', 'Phanh đĩa thuỷ lực, trang bị ABS', '4,6 L', '0,9 L', 1, '118 kg', 'Xe ga 1 số', 'LED'),
(10, 'NVX 155 THẾ HỆ I PHIÊN BẢN DOXOU', 2, NULL, 'xega2.png', 42500000, 52700000, 'Blue Core, 4 van, 4 kỳ, SOHC, Làm mát bằng dung dịch', '155 cc', '11,0 kW (15,0 ps) / 8.000 vòng /phút', 'Phanh đĩa thuỷ lực, trang bị ABS', '4,6 L', '0,9 L', 1, '118 kg', 'Xe ga 1 số', 'LED'),
(11, 'LATTE PHIÊN BẢN TIÊU CHUẨN', 2, NULL, 'xega3.png', 30000000, 37490000, 'Blue Core, 2 van, 4 kỳ, SOHC, Làm mát bằng không khí cưỡng bức', '124.9 cc', '6,0kW (8,0 PS) / 6.500 vòng/phút', 'Phanh đĩa đơn thuỷ lực', '5,5 L', '0,84 L', 1, '100kg', 'Xe ga 1 số', 'HS1, 35.0 W/35.0 W'),
(12, 'LATTE PHIÊN BẢN GIỚI HẠN', 2, NULL, 'xega4.png', 30000000, 39000000, 'Blue Core, 2 van, 4 kỳ, SOHC, Làm mát bằng không khí cưỡng bức', '124.9 cc', '6,0kW (8,0 PS) / 6.500 vòng/phút', 'Phanh đĩa đơn thuỷ lực', '5,5 L', '0,84 L', 1, '100kg', 'Xe ga 1 số', 'HS1, 35.0 W/35.0 W'),
(13, 'FREEGO PHIÊN BẢN TIÊU CHUẨN', 2, NULL, 'xega5.png', 25000000, 33000000, 'Blue Core, 4 kỳ, 2 van, SOHC, Làm mát bằng không khí cưỡng bức', '125cc', '7,0 kW (9,5 PS) / 8.000 vòng/phút', 'Đĩa thủy lực', '4,2 lít', '0,84 L', 1, '100 kg', 'Xe ga 1 số', 'LED'),
(14, 'FREEGO S PHIÊN BẢN ĐẶC BIỆT', 2, NULL, 'xega6.png', 32000000, 39000000, 'Blue Core, 4 kỳ, 2 van, SOHC, Làm mát bằng không khí cưỡng bức', '125 cc', '7,0 kW (9,5 PS) / 8.000 vòng/phút', 'Đĩa thuỷ lực trang bị ABS', '4,2 L', '0,84 L', 1, '102 kg', 'Xe ga 1 số', 'LED'),
(16, 'TFX 150', 3, NULL, 'xett1.png', 62000000, 72000000, '4 thì, 4 van, SOHC, làm mát bằng dung dịch', '149,7', '11,3 kW (15.4 PS) / 8500 vòng/phút', 'Đĩa đơn thủy lực', '10,2 lít', '1,0 lít', 1, '135 kg', '6 số tròn', 'LED'),
(17, 'MT-15', 3, NULL, 'xett7.png', 60000000, 69000000, '4 thì, 4 van, SOHC, làm mát bằng dung dịch', '155cc', '14,2 kW (19,3 PS)/10.000 vòng/phút', 'Đĩa đơn thuỷ lực', '10 lít', '1,05 lít', 1, '133 kg', '6 số tròn', 'LED'),
(18, 'YZF-R15', 3, NULL, 'xett8.png', 61000000, 70000000, '4 thì, 4 van, làm mát bằng dung dịch, SOHC', '155', '14,2 kW/ 10.000 vòng /phút', 'Đĩa thuỷ lực (đường kính 282 mm), hai piston kẹp', '11 lít', '1,05 lít', 1, '137 kg', '6 số tròn', 'LED'),
(19, 'YZF-R15 PHIÊN BẢN GIỚI HẠN MONSTER ENERGY YAMAHA MOTOGP', 3, NULL, 'xett9.png', 62000000, 70000000, '4 thì, 4 van, làm mát bằng dung dịch, SOHC', '155cc', '14,2 kW/ 10.000 vòng /phút', 'Đĩa thuỷ lực (đường kính 282 mm), hai piston kẹp', '11 lít', '1,05 lít', 1, '137 kg', '6 số tròn', 'LED'),
(20, 'MT-03', 3, NULL, 'xett10.png', 110000000, 124000000, '4 thì, 8 van, 2 xy lanh, làm mát bằng dung dịch, DOHC', '321cc', '30,9 kW (42,0PS)/ 10.750 vòng/phút', 'Đĩa thủy lực (Đường kính 298 mm), hệ thống ABS, hai piston kẹp', '14 lít', '2,4 lít', 1, '168 kg', '6 số tròn', 'LED'),
(21, 'YZF-R3', 3, NULL, 'xett11.png', 115000000, 129000000, '4 thì, 2 xy lanh, 8 van, làm mát bằng dung dịch, DOHC', '321', '30.9 kW/ 10.750 vòng/ phút', 'Đĩa đơn thủy lực, ∅298 x 4,5 mm', '14.0 lít', '2.4 lít', 1, '169kg', '6 số tròn', 'LED');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shipping`
--

CREATE TABLE `shipping` (
  `spid` bigint(20) UNSIGNED NOT NULL,
  `sptenkh` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spemail` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spphone` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spdiachi` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `shipping`
--

INSERT INTO `shipping` (`spid`, `sptenkh`, `spemail`, `spphone`, `spdiachi`, `created_at`, `updated_at`) VALUES
(45, NULL, NULL, NULL, 'Yên Mỹ-Hưng Yên', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinhtrang`
--

CREATE TABLE `tinhtrang` (
  `id` int(11) NOT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tinhtrang`
--

INSERT INTO `tinhtrang` (`id`, `status`) VALUES
(1, 'Còn hàng'),
(2, 'Hết hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(11) NOT NULL,
  `tentintuc` varchar(225) DEFAULT NULL,
  `noidung` text DEFAULT NULL,
  `img` varchar(120) DEFAULT NULL,
  `loaitintuc` int(11) DEFAULT NULL,
  `ngaythem` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`id`, `tentintuc`, `noidung`, `img`, `loaitintuc`, `ngaythem`) VALUES
(6, 'GIẢI ĐUA MÔ TÔ TOÀN QUỐC YAMAHA GP FEEL THE SPEED 2021', '<p><strong>Trở lại sau hơn một năm gi&aacute;n đoạn v&igrave; đại dịch Covid-19, Giải đua xe Yamaha GP 2021: FEEL THE SPEED đ&atilde; diễn ra ng&agrave;y 03/04/2021 vừa qua tại Cần Thơ với những pha tranh t&agrave;i v&ocirc; c&ugrave;ng gay cấn v&agrave; bốc lửa. Đặc biệt hơn, đ&acirc;y l&agrave; lần đầu ti&ecirc;n 2 mẫu xe thể thao Exciter 155 VVA v&agrave; NVX 155 VVA được đưa v&agrave;o đường đua thi đấu.</strong></p>\r\n\r\n<p>Tương tự những năm trước,&nbsp;<strong>Yamaha GP 2021</strong>&nbsp;được tổ chức với 3 giải đấu bao gồm:&nbsp;<strong>Giải Mở Rộng</strong>&nbsp;d&agrave;nh cho c&aacute;c VĐV chuy&ecirc;n nghiệp v&agrave; b&aacute;n chuy&ecirc;n,&nbsp;<strong>Giải Xe H&atilde;ng&nbsp;</strong>d&agrave;nh cho c&aacute;c VĐV B&aacute;n chuy&ecirc;n v&agrave; Chuy&ecirc;n nghiệp v&agrave;&nbsp;<strong>Giải C&acirc;u Lạc Bộ&nbsp;</strong>bao gồm hệ xe số v&agrave; xe ga d&agrave;nh cho c&aacute;c th&agrave;nh vi&ecirc;n CLB Y-Riders Club.</p>\r\n\r\n<ul>\r\n	<li>VĐV c&oacute; thể đăng k&yacute; một hoặc hai Hệ thi đấu bất k&igrave; trong Giải Xe H&atilde;ng, hoặc Giải Mở rộng v&agrave; một Hệ Xe H&atilde;ng. Tuy nhi&ecirc;n việc sắp xếp v&agrave; chọn VĐV c&aacute;c Hệ do BTC quyết định dựa v&agrave;o t&igrave;nh h&igrave;nh thực tế số VĐV đăng k&iacute;.</li>\r\n	<li>VĐV sử dụng xe của h&atilde;ng cung cấp để thi đấu.</li>\r\n	<li>T&iacute;nh trong năm 2021, những VĐV đ&atilde; đạt giải (Nhất, Nh&igrave;, Ba) thuộc bất kỳ Hệ thi đấu n&agrave;o tại Giải Xe H&atilde;ng sẽ kh&ocirc;ng được đăng k&yacute; thi đấu c&ugrave;ng Hệ thi đấu đ&oacute; của Giải Xe H&atilde;ng tại lần đua sau n&agrave;y. (V&iacute; dụ: VĐV đ&atilde; đạt giải Nhất/ Nh&igrave;/ Ba Giải Xe H&atilde;ng &ndash; Hệ Exciter 155 VVA th&igrave; chỉ c&oacute; thể đăng k&iacute; v&agrave;o Hệ Exciter 150 hoặc NVX 155 VVA). Tuy nhi&ecirc;n, quy định n&agrave;y kh&ocirc;ng &aacute;p dụng đối với VĐV nữ.\r\n	<ol>\r\n		<li>Hệ Exciter 155 VVA xe h&atilde;ng. Nhận tối đa 40 VĐV.</li>\r\n		<li>Hệ Exciter 150 xe h&atilde;ng. Nhận tối đa 40 VĐV.</li>\r\n		<li>Hệ NVX 155 VVA xe h&atilde;ng. Nhận tối đa 40 VĐV.</li>\r\n		<li>BTC sẽ căn cứ v&agrave;o số lượng VĐV đăng k&iacute; thực tế để sắp xếp c&aacute;c Hệ thi đấu, nếu cần lấy th&ecirc;m VĐV cho c&aacute;c Hệ thi đấu, BTC sẽ mời c&aacute;c VĐV thi đấu th&ecirc;m một Hệ bổ sung so với Hệ thi đấu đ&atilde; đăng k&iacute;. Tuy nhi&ecirc;n một VĐV kh&ocirc;ng thi đấu qu&aacute; 02 Hệ, ri&ecirc;ng Giải C&acirc;u Lạc Bộ kh&ocirc;ng nhận c&aacute;c VĐV Giải Mở Rộng v&agrave; Giải Xe H&atilde;ng.</li>\r\n		<li>Chỉ duy nhất Giải Mở R&ocirc;ng (Open) được k&egrave;m theo 01 Kỹ Thuật Vi&ecirc;n chăm s&oacute;c xe v&agrave;o c&ugrave;ng Khu vực Paddock, c&aacute;c Giải thi đấu kh&aacute;c chỉ c&oacute; VĐV đăng k&yacute; tham gia thi đấu mới được ph&eacute;p di chuyển trong khu vực đường Paddock.</li>\r\n		<li><strong>Những VĐV đạt giải thưởng tr&ecirc;n 10 triệu đồng sẽ phải đ&oacute;ng thuế thu nhập c&aacute; nh&acirc;n 10% phần thu nhập sau khi trừ đi 10 triệu đồng. Tiền thuế sẽ được khấu trừ trực tiếp v&agrave;o giải thưởng.</strong><br />\r\n		<em>V&iacute; dụ: VĐV đạt giải thưởng mười hai triệu đồng (12.000.000đ) th&igrave; thu nhập t&iacute;nh thuế sẽ l&agrave; hai triệu đồng (2.000.000đ). Khi đ&oacute; số tiền đ&oacute;ng thuế l&agrave; hai trăm ng&agrave;n đồng (200.000đ).</em></li>\r\n	</ol>\r\n	</li>\r\n</ul>', 'tin1.webp', 1, '2021-03-21'),
(7, 'DÙNG ỨNG DỤNG MY YAMAHA MOTOR – TẶNG NGAY DẦU NHỚT MY YAMALUBE', '<p><strong>1. T&ecirc;n chương tr&igrave;nh khuyến mại: D&ugrave;ng ứng dụng, tặng ngay dầu nhớt Yamalube</strong></p>\r\n\r\n<p><strong>2. Địa b&agrave;n (phạm vi) khuyến mại</strong>: To&agrave;n quốc.</p>\r\n\r\n<p><strong>3. Thời gian khuyến mại:</strong>&nbsp;Từ ng&agrave;y&nbsp;<strong>01/05/2021 đến ng&agrave;y 31/12/2021</strong>.&nbsp;</p>\r\n\r\n<p><strong>4. H&agrave;ng h&oacute;a, dịch vụ d&ugrave;ng để khuyến mại:</strong>&nbsp;Dầu nhớt nh&atilde;n hiệu Yamalube AV407, AV408, AV409, AV410</p>\r\n\r\n<p><strong>5. Kh&aacute;ch h&agrave;ng của chương tr&igrave;nh khuyến mại (đối tượng được hưởng khuyến mại):</strong></p>\r\n\r\n<p>Tất cả kh&aacute;ch h&agrave;ng mang xe m&aacute;y nh&atilde;n hiệu Yamaha c&oacute; dung t&iacute;ch xi-lanh dưới 400 cc do C&ocirc;ng ty TNHH Yamaha Motor Việt Nam ph&acirc;n phối v&agrave;/hoặc sản xuất đến c&aacute;c đại l&yacute; Yamaha 3S ủy quyền v&agrave; cửa h&agrave;ng Yamaha trực thuộc C&ocirc;ng ty TNHH Yamaha Motor Việt Nam để bảo tr&igrave; theo Phiếu bảo tr&igrave; định k&igrave; số 1, 3, 6, 9 tr&ecirc;n ứng dụng Sổ bảo h&agrave;nh điện tử trong thời gian khuyến mại n&ecirc;u tại mục 3 tr&ecirc;n.</p>\r\n\r\n<p><strong>6. Nội dung chi tiết của chương tr&igrave;nh khuyến mại:</strong></p>\r\n\r\n<p>Tất cả kh&aacute;ch h&agrave;ng mang xe m&aacute;y nh&atilde;n hiệu Yamaha c&oacute; dung t&iacute;ch xi-lanh dưới 400 cc do C&ocirc;ng ty TNHH Yamaha Motor Việt Nam ph&acirc;n phối v&agrave;/hoặc sản xuất đến c&aacute;c đại l&yacute; Yamaha 3S ủy quyền v&agrave; cửa h&agrave;ng Yamaha trực thuộc C&ocirc;ng ty TNHH Yamaha Motor Việt Nam để bảo tr&igrave; theo Phiếu bảo tr&igrave; định k&igrave; số 1, 3, 6, 9 tr&ecirc;n ứng dụng Sổ bảo h&agrave;nh điện tử trong thời gian khuyến mại n&ecirc;u ở mục 3 tr&ecirc;n sẽ được miễn ph&iacute; thay một chai dầu nhớt nh&atilde;n hiệu Yamalube AV407, AV408, AV409, AV410 loại 0,8 l&iacute;t hoặc 1,0 l&iacute;t cho xe ga hoặc xe số.</p>', 'tin2.webp', 1, '2021-04-12'),
(8, 'CÔNG BỐ KẾT QUẢ CUỘC THI TRANG TRÍ ĐẠI LÝ LẦN 1 NĂM 2021', '<p><strong>Yamaha Motor Việt Nam xin gửi lời ch&uacute;c mừng tới Top 3 cuộc thi trong hạng mục trang tr&iacute; cửa h&agrave;ng, cụ thể:</strong></p><p><strong>1. Giải nhất: Yamaha Town Th&agrave;nh Đạt (Quảng Ninh)</strong></p><p><strong>2.&nbsp;Giải nh&igrave;: Yamaha Town Nhơn 7 (B&igrave;nh Định)</strong></p><p><strong>3. Giải ba: Yamaha Town Đại Th&agrave;nh (Hồ Ch&iacute; Minh)</strong></p><p>&nbsp;</p><p>Với chủ đề Tết cổ truyền, c&aacute;c Đại l&yacute; đ&atilde; truyền tải được th&ocirc;ng điệp của chiến dịch &ldquo;New Me, Discover&rdquo; &ndash; &ldquo;Kh&aacute;m ph&aacute; chất ri&ecirc;ng&rdquo; cũng như mang đến một diện mạo mới v&agrave; hấp dẫn đến kh&aacute;ch h&agrave;ng nh&acirc;n dịp đầu năm.</p><p>Yamaha Motor Việt Nam xin ch&acirc;n th&agrave;nh cảm ơn sự đồng h&agrave;nh của c&aacute;c Đại l&yacute; trong cuộc thi lần n&agrave;y. Hi vọng rằng, hơn 400 Đại l&yacute; tr&ecirc;n to&agrave;n quốc sẽ lu&ocirc;n ủng hộ v&agrave; tham gia nhiệt t&igrave;nh v&agrave;o c&aacute;c hoạt động trong thời gian sắp tới.</p>', 'tin3.jpg', 3, '2021-05-21'),
(9, 'KHÁM PHÁ NHỮNG MIỀN ĐẤT DIỆU KỲ – EXCITER 155 VVA COUPLE TOURING', '<p><strong>KH&Aacute;M PH&Aacute; NHỮNG MIỀN ĐẤT DIỆU KỲ &ndash; 𝐄𝐗𝐂𝐈𝐓𝐄𝐑 𝟏𝟓𝟓 𝐕𝐕𝐀 𝐂𝐎𝐔𝐏𝐋𝐄 𝐓𝐎𝐔𝐑𝐈𝐍𝐆 &ndash; XE CỦA CH&Uacute;NG TA, H&Agrave;NH TR&Igrave;NH CỦA ANH V&Agrave; EM</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Một chuyến &ldquo;phượt&rdquo; d&agrave;i ng&agrave;y với những cặp đ&ocirc;i sẽ lu&ocirc;n l&agrave; kỷ niệm ngọt ng&agrave;o v&agrave; đ&aacute;ng nhớ. Ch&iacute;nh những khoảnh khắc c&ugrave;ng nhau kh&aacute;m ph&aacute; biết bao miền đất mới sẽ khiến cho t&igrave;nh cảm trở n&ecirc;n gắn b&oacute; v&agrave; th&uacute; vị hơn.</p>\r\n\r\n<p>V&agrave; lần đầu ti&ecirc;n, Yamaha mang đến một h&agrave;nh tr&igrave;nh với concept ho&agrave;n to&agrave;n mới: chuyến đi &ldquo;phượt&rdquo; d&agrave;nh ri&ecirc;ng cho c&aacute;c cặp đ&ocirc;i của Exciter 155 VVA.</p>\r\n\r\n<p>10 riders nam sẽ c&ugrave;ng 10 bạn nữ c&oacute; thể l&agrave; bạn th&acirc;n, crush, người y&ecirc;u hay vợ, với đam m&ecirc; &ldquo;x&ecirc; dịch&rdquo;, ưa trải nghiệm, th&iacute;ch kh&aacute;m ph&aacute; v&agrave; đặc biệt l&agrave; đang sử dụng Exciter 155 VVA tr&ecirc;n khắp cả nước, sẽ c&ugrave;ng nhau đi qua những điểm du lịch &ldquo;hot&rdquo; nhất h&egrave; 2021.</p>\r\n\r\n<p>Cần Thơ &ndash; Mũi N&eacute; &ndash; Đ&agrave; Lạt &ndash; Tuy H&ograve;a &ndash; Quy Nhơn &ndash; Quảng Ng&atilde;i &ndash; Hội An &ndash; Đ&agrave; Nẵng &ndash; h&agrave;nh tr&igrave;nh 11 ng&agrave;y, gần 1.500 km hứa hẹn sẽ đem đến những trải nghiệm cực k&igrave; th&uacute; vị c&ugrave;ng những &ldquo;p&ocirc;&rdquo; ảnh &ldquo;t&igrave;nh bể b&igrave;nh&rdquo; cho c&aacute;c cặp đ&ocirc;i.</p>\r\n\r\n<p>Tuổi trẻ l&agrave; những th&aacute;ng ng&agrave;y rong ruổi, đi đến những v&ugrave;ng đất mới, gặp gỡ những con người mới, kh&aacute;m ph&aacute; chất ri&ecirc;ng v&agrave; với &ldquo;EXCITER 155 TOURING&rdquo; &ndash; CHẤT CỦA T&Ocirc;I, H&Agrave;NH TR&Igrave;NH CỦA CH&Uacute;NG TA sẽ l&agrave; một dấu mốc đ&aacute;ng nhớ trong h&agrave;nh tr&igrave;nh thanh xu&acirc;n.</p>\r\n\r\n<p>Tại c&aacute;c điểm dừng ch&acirc;n, c&aacute;c cặp đ&ocirc;i sẽ tham gia c&aacute;c hoạt động từ thiện v&igrave; cộng đồng v&agrave; gh&eacute; thăm c&aacute;c đại l&yacute; của Yamaha Motor Việt Nam.</p>\r\n\r\n<p>500 anh em Exciter h&atilde;y c&ugrave;ng theo d&otilde;i chuyến đi n&agrave;y v&agrave; cổ vũ c&aacute;c cặp đ&ocirc;i nh&eacute;!</p>', 'tin4.jpg', 1, '2021-05-21'),
(10, 'ĐỘI ĐUA YAMAHA LẬP CÚ ĐÚP CHIẾN THẮNG TẠI CHẶNG 2 MOTOGP TẠI DOHA', '<p><strong>C&aacute;c tay đua Monster Energy Yamaha MotoGP đ&atilde; khiến đội đua của m&igrave;nh tự h&agrave;o một lần nữa dưới &aacute;nh đ&egrave;n pha Losail. Fabio Quartararo đ&atilde; c&oacute; một chặng đua tuyệt vời từ tại Grand Prix Doha ng&agrave;y h&ocirc;m qua để gi&agrave;nh chiến thắng với vị tr&iacute; dẫn đầu 1.457s. Maverick Vi&ntilde;ales cũng đang chạy đua cho một vị tr&iacute; podium. Một c&uacute; l&aacute;ch nhỏ để tr&aacute;nh va chạm ở v&ograve;ng cuối c&ugrave;ng đ&atilde; khiến anh bỏ lỡ bục podium chỉ với 0,6 điểm, nhưng đ&atilde; ghi được 11 điểm vững chắc với vị tr&iacute; thứ năm.</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Đội đua Monster Energy Yamaha MotoGP đ&atilde; chứng tỏ m&igrave;nh l&agrave; kẻ bất khả chiến bại tại Losail International Circuit 2021. Sau chiến thắng của Maverick Vi&ntilde;ales tại Grand Prix Qatar c&aacute;ch đ&acirc;y một tuần trước, Fabio Quartararo đ&atilde; mang về chiến thắng trong chặng đua thứ 2 tại Grand Prix kh&aacute; căng thẳng diễn ra v&agrave;o h&ocirc;m qua tại Doha, v&agrave; Maverick Vi&ntilde;ales đ&atilde; kết th&uacute;c ở vị tr&iacute; thứ năm.</p>\r\n\r\n<p>Quartararo xuất ph&aacute;t ở vị tr&iacute; thứ 5, sau những v&ograve;ng mở m&agrave;n th&ocirc;ng thường, anh đ&atilde; ở vị tr&iacute; thứ ch&iacute;n. Tuy vậy, tay đua trẻ n&agrave;y vẫn b&igrave;nh tĩnh, tự tin, giữ đều tốc độ, cho đến khi anh ta t&igrave;m thấy thời điểm th&iacute;ch hợp để vượt l&ecirc;n. Khi chỉ c&ograve;n ch&iacute;n v&ograve;ng đua, tay đua số 20 của Yamaha đ&atilde; l&ecirc;n vị tr&iacute; thứ năm. Anh nhanh ch&oacute;ng vượt qua Alex Rins v&agrave; đ&atilde; gần như tiến đến gần bục podium.</p>\r\n\r\n<p>Khi chỉ c&ograve;n 5 v&ograve;ng đua, anh kh&eacute;o l&eacute;o vượt qua Johann Zarco v&agrave; th&ecirc;m một v&agrave;i g&oacute;c cua để vượt qua Jorge Martin, tay đua người Ph&aacute;p kh&ocirc;ng ngừng tấn c&ocirc;ng, v&agrave; tận dụng tối đa c&aacute;c g&oacute;c cua. Cuối c&ugrave;ng, anh ta đ&atilde; chọn thời điểm để kết th&uacute;c 1 c&aacute;ch ho&agrave;n hảo để về đ&iacute;ch ở vị tr&iacute; thứ nhất, dẫn trước 1.457 gi&acirc;y.</p>', 'tin5.webp', 3, '2021-03-21'),
(11, 'CHIẾN THẮNG SIÊU HẠNG CỦA YAMAHA Ở CHẶNG 3 MOTOGP TẠI BỒ ĐÀO NHA', '<p><strong>Lần đầu ti&ecirc;n sau 11 năm đội đua của Yamaha d&agrave;nh 3 chiến thắng li&ecirc;n tiếp tại 3 chặng đầu ti&ecirc;n của MOTOGP 2021.</strong></p>\r\n\r\n<p>Tại Aut&oacute;dromo Internacional do Algarve &ndash; Bồ Đ&agrave;o Nha, tay đua Quartararo của đội đua Yamaha Racing Factory tiếp tục đoạt vương vị số 1 sau cuộc chiến nghẹt thở ở 15 v&ograve;ng đầu ti&ecirc;n với Alex Rin &ndash; người đ&atilde; kh&ocirc;ng chịu nổi &aacute;p lực khủng khiếp từ El Diablo &ndash; Quỷ dữ Quartararo v&agrave; bị ng&atilde;.</p>\r\n\r\n<p>Quartararo đ&atilde; kết th&uacute;c 1 c&aacute;ch ho&agrave;n hảo một m&igrave;nh băng băng về đ&iacute;ch ở vị tr&iacute; thứ nhất. Một chiến thắng tuyệt đối.</p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute; cũng l&agrave; m&agrave;n thể hiện xuất sắc của tay đua kh&aacute;c của Yamaha l&agrave; Franco Morbidelli, đội đua Petronas Yamaha Sepang Racing. Anh xuất sắc về đ&iacute;ch ở vị tr&iacute; thứ 4.</p>\r\n\r\n<p>&nbsp;</p>', 'tin6.jpg', 3, '2021-04-12'),
(12, 'LUÔN TẬP TRUNG', 'Làm từ chất liệu thấm nước giúp đánh bay hơi ẩm trên cơ thể, chất vải công nghệ AEROREADY của adidas giúp bạn luôn cảm thấy khô ráo khi vận động.', 'bus4.jpg', 2, NULL),
(13, 'LUÔN TẬP TRUNGggg', '<p>...</p>', 'bus4.jpg', NULL, NULL);

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

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaitintuc`
--
ALTER TABLE `loaitintuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaixe`
--
ALTER TABLE `loaixe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `maloai` (`maloai`),
  ADD KEY `mancc` (`mancc`);

--
-- Chỉ mục cho bảng `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`spid`);

--
-- Chỉ mục cho bảng `tinhtrang`
--
ALTER TABLE `tinhtrang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
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
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `loaitintuc`
--
ALTER TABLE `loaitintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `loaixe`
--
ALTER TABLE `loaixe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_details_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT cho bảng `shipping`
--
ALTER TABLE `shipping`
  MODIFY `spid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `tinhtrang`
--
ALTER TABLE `tinhtrang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`maloai`) REFERENCES `loaixe` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
