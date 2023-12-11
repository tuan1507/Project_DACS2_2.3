-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 07, 2023 lúc 02:50 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doancoso2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(11) NOT NULL,
  `ten_banner` varchar(255) NOT NULL,
  `hinhanh_banner` varchar(255) NOT NULL,
  `mota_banner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id_banner`, `ten_banner`, `hinhanh_banner`, `mota_banner`) VALUES
(1, 'Chuột', 'poster_5.jpg', 'Sale loa'),
(3, 'Chuột', 'poster_6.jpg', 'Chuột máy tính');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucsanpham`
--

CREATE TABLE `danhmucsanpham` (
  `id_danhmuc` int(11) NOT NULL,
  `ten_danhmuc` varchar(255) NOT NULL,
  `mota_danhmuc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmucsanpham`
--

INSERT INTO `danhmucsanpham` (`id_danhmuc`, `ten_danhmuc`, `mota_danhmuc`) VALUES
(13, 'Chuột gaming ', '   một thiết bị đầu vào máy tính được thiết kế đặc biệt để đáp ứng nhu cầu chơi game của người dùng'),
(14, 'Tai nghe', 'Tai nghe là một thiết bị âm thanh được đeo trên đầu hoặc gắn vào tai để người nghe có thể trải nghiệm âm thanh một cách riêng tư và chất lượng'),
(18, 'Loa máy tính', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `saleofff`
--

CREATE TABLE `saleofff` (
  `id_sukien` int(11) NOT NULL,
  `ten_sukien` varchar(255) NOT NULL,
  `khuyenmai_sukien` varchar(255) NOT NULL,
  `mota_sukien` varchar(255) NOT NULL,
  `hinhanh_sukien` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `saleofff`
--

INSERT INTO `saleofff` (`id_sukien`, `ten_sukien`, `khuyenmai_sukien`, `mota_sukien`, `hinhanh_sukien`) VALUES
(4, 'Deal Of The Day', 'Upto 50% Off', 'Are You Ready To Elevate Your Audio Experience To New Heights? Look No Further! Our Brand-New Headphone Collection Is Here To Redefine Your Listening Pleasure. With Cutting-Edge Technology And Unparalleled Sound Quality, These Headphones Are Designed To I', 'P9 Bluetooth Headset.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `ten_sanpham` varchar(255) NOT NULL,
  `soluong_sanpham` int(11) NOT NULL,
  `giasp` double NOT NULL,
  `giasp_saukm` double NOT NULL,
  `hinhanh_sanpham` text NOT NULL,
  `mota_sanpham` text NOT NULL,
  `id_danhmuc_sanpham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `ten_sanpham`, `soluong_sanpham`, `giasp`, `giasp_saukm`, `hinhanh_sanpham`, `mota_sanpham`, `id_danhmuc_sanpham`) VALUES
(20, 'Audio-technica ATH-M40X', 10, 3990000, 2750000, 'headphone_2.png', 'Nếu bạn đang tìm kiếm một cặp tai nghe phòng thu / DJ chất lượng mà không muốn bỏ ra quá nhiều chi phí để sở hữu thì Audio-Technica ATH-M40x là một lựa chọn tuyệt vời. Với mức giá chỉ khoảng 3 triệu đồng, bạn sẽ có cơ hội được tận hưởng những phút giây giải trí tuyệt vời cùng âm thanh chân thực và sống động nhất.', 14),
(24, 'Wireless Headphones Asus ROG', 20, 3000000, 2750000, 'headphone_1.png', '', 14),
(25, 'Logitech G304 - White', 5, 990000, 799000, 'mouse_1.png', '', 13),
(27, 'Logitech G Pro X 2 Lightspeed', 50, 4490000, 3490000, 'headphone_4.png', '', 14),
(28, 'Razer Basilisk V3 Pro Ergonomic', 17, 4300000, 3900000, 'mouse_4.png', '', 13),
(30, 'Sennheiser Accentum Wireles', 20, 3990000, 3590000, 'headphone_6.png', '', 14),
(31, 'Asus ROG Gladius III Raton Gaming', 17, 3990000, 2750000, 'mouse_2.png', '', 13),
(32, 'Joyaccess wireless mouse', 18, 790000, 590000, 'mouse_5.png', '', 13),
(33, 'B&O Beoplay EQ Black', 5, 6999000, 5990000, 'headphone_5.png', '', 14),
(34, 'Harman Kardon Aura Studio 3', 5, 3990000, 2750000, 'speak_3.png', '', 18),
(35, 'Bookshelf Edifier R1080BT', 10, 1090000, 899000, 'speak_1.png', '', 18),
(36, 'Magic mouse', 50, 1490000, 1290000, 'mouse_6.png', '', 13),
(37, 'Beosound A5 Nordic Weave', 20, 22000000, 19000000, 'speak_4.png', '', 18),
(38, 'Harman Kardon Go Play 3', 22, 3990000, 3490000, 'speak_2.png', '', 18),
(39, 'JBL Harman T450', 26, 990000, 799000, 'headphone_3.png', '', 14),
(40, 'Sony Silver Wireless ', 39, 2990000, 2690000, 'headphone_7.png', '', 14),
(41, 'Logitech G304', 10, 1490000, 799000, 'mouse_4.png', '', 13),
(43, 'JBL Clip 4', 10, 990000, 799000, 'jbl.png', '', 18),
(46, 'MINI 2.0 YST-0146 LED RGB', 20, 180000, 145000, 'speak_5.png', '', 18);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_account` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `user_account` varchar(255) NOT NULL,
  `pass_account` varchar(255) NOT NULL,
  `email_account` varchar(255) NOT NULL,
  `address_account` varchar(255) NOT NULL,
  `phone_account` varchar(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id_account`, `first_name`, `last_name`, `user_account`, `pass_account`, `email_account`, `address_account`, `phone_account`, `role`) VALUES
(4, 'Nguyễn', 'Tuấn', 'tuan1507', '1234', 'quangtuan62ld@gmail.com', 'Sơn Trà', '0985810174', 0),
(8, 'Nguyễn', 'Quang Huy', 'salakam', '1234', 'quangtuan62ld@gmail.com', '34 Thái Hà', '0985910174', 0),
(9, 'Nguyễn', 'Tuấn', 'salakama', '123', 'salakama@gmail.com', 'Sơn Trà', '0985810174', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Chỉ mục cho bảng `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `saleofff`
--
ALTER TABLE `saleofff`
  ADD PRIMARY KEY (`id_sukien`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `lk_sanpahm_danhmuc` (`id_danhmuc_sanpham`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_account`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `saleofff`
--
ALTER TABLE `saleofff`
  MODIFY `id_sukien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_account` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpahm_danhmuc` FOREIGN KEY (`id_danhmuc_sanpham`) REFERENCES `danhmucsanpham` (`id_danhmuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
