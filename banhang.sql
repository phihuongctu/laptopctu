-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 06, 2018 lúc 06:08 AM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `banhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdathang`
--

CREATE TABLE `chitietdathang` (
  `sodonhang` int(20) NOT NULL,
  `mshh` int(30) NOT NULL,
  `soluong` int(30) NOT NULL,
  `giadathang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `giamgia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdathang`
--

INSERT INTO `chitietdathang` (`sodonhang`, `mshh`, `soluong`, `giadathang`, `giamgia`) VALUES
(1, 3, 1, '20,000,000', 0),
(2, 3, 2, '47,000,000', 0),
(3, 3, 2, '47,000,000', 0),
(4, 3, 3, '74,000,000', 0),
(5, 3, 3, '74,000,000', 0),
(6, 3, 4, '104,000,000', 0),
(7, 3, 4, '104,000,000', 0),
(8, 3, 5, '124,000,000', 0),
(9, 3, 6, '144,000,000', 0),
(10, 2, 5, '113,999,998', 0),
(11, 2, 6, '129,999,998', 0),
(12, 2, 1, '20,000,000', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dathang`
--

CREATE TABLE `dathang` (
  `sodonhang` int(20) NOT NULL,
  `mskh` int(20) NOT NULL,
  `msnv` int(20) NOT NULL,
  `ngayDH` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ngayGH` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dathang`
--

INSERT INTO `dathang` (`sodonhang`, `mskh`, `msnv`, `ngayDH`, `ngayGH`) VALUES
(1, 17, 1, '2018-11-05 14:16:18', '2018-11-08'),
(2, 17, 1, '2018-11-05 14:22:47', '2018-11-08'),
(3, 17, 1, '2018-11-05 14:56:47', '2018-11-08'),
(4, 17, 1, '2018-11-05 14:57:23', '2018-11-08'),
(5, 17, 1, '2018-11-05 14:58:31', '2018-11-08'),
(6, 17, 1, '2018-11-05 14:59:38', '2018-11-08'),
(7, 17, 1, '2018-11-05 15:00:09', '2018-11-08'),
(8, 17, 1, '2018-11-05 15:01:55', '2018-11-08'),
(9, 17, 1, '2018-11-05 15:02:56', '2018-11-08'),
(10, 17, 1, '2018-11-05 18:34:25', '2018-11-09'),
(11, 17, 1, '2018-11-05 18:35:43', '2018-11-09'),
(12, 18, 1, '2018-11-05 19:05:38', '2018-11-09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mshh` int(20) NOT NULL,
  `tenhh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `gia` double NOT NULL,
  `soluonghang` int(20) NOT NULL,
  `ghichu` longtext COLLATE utf8_unicode_ci NOT NULL,
  `hinh` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `CPU` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `RAM` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `manhinh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `loaihang` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`mshh`, `tenhh`, `created`, `gia`, `soluonghang`, `ghichu`, `hinh`, `CPU`, `RAM`, `manhinh`, `loaihang`) VALUES
(0, 'Laptop Apple Macbook Pro', '2018-11-03 15:02:23', 57000000, 10, 'Apple đã cho ra mắt phiên bản máy tính xách tay Macbook Pro Touch 2018 với thiết kế sang trọng, đặc trưng với kiểu dáng Unibody quen thuộc của dòng máy tính xách tay cao cấp đến từ thương hiệu ', 'apple-macbook-pro.jpg', 'Intel Core i7 Kabylake Refresh', '16 GB, DDR4 (On board), 2400 MHz', '15.4 inch, Retina (2880 x 1800)', 'Macbook'),
(1, 'Acer Nitro 5 AN515 52 70AE', '2018-11-03 14:18:20', 16000000, 10, 'Acer Nitro 5 AN515 52 70AE vẫn sở hữu vẻ thiết kế hầm hố đậm chất riêng của dòng Laptop Gaming kết hợp với  hai tông màu đỏ và đen mạnh mẽ. Sức mạnh của laptop Acer Nitro 5 AN515 nay lại như được tối ưu thêm với Card đồ họa rời, NVIDIA GeForce GTX 1050Ti được tích hợp, cho khả năng chiến các tựa game có cấu hình cao mượt mà, cho game thủ hòa mình vào cuộc chơi. Vẻ ngoài đậm chất Gaming Mang trên mình vẻ ngoài cứng cáp, chắc chắn với mặt lưng phủ carbon được khắc lazer hầm hố, tinh xảo, độc đáo kết hợp hai tông màu đỏ và đen mạnh mẽ', 'acer-nitro-5.jpg', 'Intel Core i7 Coffee Lake, 87q', '8 GB, DDR4 (2 khe), 2400 MHzqq', '15.6 inch, HD (1366 x 768)qq', 'ACER'),
(2, 'Dell Vostro 5568', '2018-11-03 14:05:11', 20000000, 1, 'Laptop Dell Vostro 5568 (077M52) dòng sản phẩm hướng đến đối tượng khách hàng là sinh viên - nhân viên văn phòng với nhu cầu công việc thường xuyên xử lý trên ứng dụng đồ hoạ cơ bản, giải trí trên những tựa game không đòi hỏi cấu hình khủng, bên cạnh thiết kế sang trọng, trong lượng nhẹ thuận tiện cho việc mang vác, di chuyển hằng ngày. Thiết kế sang trọng Được hoàn thiện chất liệu nhựa, nắp lưng bằng kim loại cứng cáp và sang trọng toát lên vẻ điềm đạm. Trọng lượng máy 1.98kg, giúp việc di chuyển hàng ngày đến công ty nhẹ nhàn hơn.', 'dell-vostro-5568.png', 'Intel Core i5 Kabylake, 7200U', '4 GB, DDR4 (2 khe), 2400 MHz', '15.6 inch, HD (1366 x 768)', 'DELL'),
(3, 'Laptop Acer Aspire A715', '2018-11-03 14:06:10', 20000000, 2, 'Thiết kế không quá hầm hố như các chiếc laptop gaming chuyên dụng, Aspire A715 72G 54PC khoác bộ áo đơn giản, thanh lịch và năng động. Ẩn bên trong là bộ máy xử lý  mạnh mẽ, phù hợp cho nhân viên văn phòng và những gamer thời gian đầu chinh chiến. Vẻ ngoài đơn giản, đầy trang nhã Được hoàn thiện chât liệu kim loại chắc chắn, bề mặt nhôm vân xước thời trang kết hợp đường viền Diamond Cut mạnh mẽ tạo nên sự ấn tượng trong thiết kế của laptop Acer Aspire A715 72G.', 'acer-aspire-a715.jpg', 'Intel Core i5 Kabylake, 7200U', '8 GB, DDR4 (2 khe), 2400 MHz', '15.6 inch, HD (1366 x 768)', 'ACER'),
(4, 'Laptop Acer Aspire E5 576G', '2018-11-03 14:07:21', 20000000, 2, 'Hiệu năng tối ưu hơn với Intel Optane 16 GB Acer Aspire E5 576G 88EP sở hữu cấu hình vô cùng mạnh mẽ với bộ vi xử lí Intel Core i7 Kabylake Refresh thế hệ thứ 8, đặc biệt là sự tích hợp bộ nhớ đệm Intel Optane 16 GB được trang bị giúp sàn lọc và lưu trữ dữ liệu cần thiết của các phần mềm, ứng dụng hay sử dụng góp phần hỗ trợ khởi động nhanh các ứng dụng ở những lần sử dụng sau. Bên cạnh đó, những tác vụ thông thường sẽ hoạt động vô cùng trơn tru, thao tác chuyên về xử lý đồ họa, kĩ thuật cũng sẽ có hiệu năng mượt mà không kém với card đồ họa rời NVIDIA Geforce MX130, 2GB được tích hợp.  Ngoài ra, ổ cứng HDD với dung lượng lên đến 1 TB, cho người dùng thoải mái lưu trữ, từ các dữ liệu học tập, làm việc cho đến dữ liệu các tựa game.', 'acer-aspire-e5-576g.jpg', 'Intel Core i7 Kabylake Refres', '4 GB, DDR3L (2 khe RAM), 2133 ', '15.6 inch, HD (1366 x 768)', 'ACER'),
(5, 'Laptop Asus VivoBook S15', '2018-11-05 15:25:43', 14000000, 3, 'Asus S15 S510UQ i5 8250U là chiếc máy tính xách tay thuộc phân khúc laptop mỏng nhẹ - thời trang với thiết kế kết hợp chất liệu kim loại, kiểu dáng bắt mắt. Máy còn trang bị cấu hình khá mạnh có thể sử dụng được các phần mềm về đồ họa hoặc chơi game ở mức độ cơ bản. Thiết kế hiện đại, cao cấp Asus S510UQ i5 8250U có thiết kế nắp lưng bằng kim loại thể hiện sự sang trọng cùng với một kiểu dáng gọn gàng, tinh tế. Máy mỏng chỉ 17.9 mm và có trọng lượng 1.5 kg nên rất dễ dàng di chuyển mọi lúc, mọi nơi để sử dụng', 'asus-s510uq.jpg', '	Intel Core i7 Kabylake Refres', '8 GB, DDR4 (2 khe), 2400 MHz', '15.6 inch, HD (1366 x 768)', 'ASUS'),
(6, 'Laptop Apple Macbook Air', '2018-11-03 14:52:47', 30000000, 3, 'Macbook Air MQD42SA/A i5 5350U với thiết kế vỏ nhôm nguyên khối Unibody rất đẹp, chắc chắn và sang trọng. Máy siêu mỏng và siêu nhẹ, hiệu năng ổn định mượt mà, thời lượng pin cực lâu, phục vụ tốt cho nhu cầu làm việc lẫn giải trí. Thiết kế siêu mỏng và nhẹ Với thiết kế đặc trưng của dòng MacBook Air, phiên bản này chỉ mỏng 1.7 cm và trọng lượng là 1.35 kg, rất tiện lợi và dễ dàng để bạn luôn mang theo bên mình. Logo quả táo Apple phát sáng tạo nên đặc trưng riêng khác biệt.', 'apple-macbook-air.jpg', 'Intel Core i5 Broadwell, 1.80 GHz', '8 GB, DDR3L(On board), 1600 MHz', '13.3 inch, WXGA+(1440 x 900)', 'Macbook'),
(7, 'Laptop MSI GF63', '2018-11-03 15:11:20', 27000000, 5, 'MSI GF63 8RD là sự lựa chọn dành cho người dùng nói chung và game thủ nói riêng khi có ý định chọn mua laptop gaming của MSI. Máy được trang bị chip Intel Core i7 cùng card đồ hoạ rời NVIDIA GeForce GTX 1050Ti đủ sức chiến mọi game ', 'msi-gf63-8rd.jpg', 'Intel Core i7 Coffee Lake', '8 GB, DDR4 (2 khe), 2400 MHz', '15.6 inch, HD (1366 x 768)', 'MSI'),
(8, 'Laptop HP Envy 13', '2018-11-03 15:17:16', 26999999, 3, 'Hp Envy là một trong những dòng sản phẩm vô cùng nổi tiếng từ HP với ngoại hình cao cấp, cấu hình mạnh và thiết kế mỏng nhẹ truyền thống. HP Envy 13 ah0027TU i7 8550U là một trong những sản phẩm cao cấp như vậy của dòng Envy nổi tiếng. Một chiếc laptop có cấu hình cao và ngoại hình rất đẹp.', 'apple-macbook-air.jpg', 'Intel Core i7 Kabylake Refresh', '8 GB, DDR4 (2 khe), 2400 MHz', '13.3 inch, WXGA+(1440 x 900)', 'HP');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `mskh` int(20) NOT NULL,
  `hotenkh` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tencongty` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` int(20) NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `sofax` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`mskh`, `hotenkh`, `tencongty`, `diachi`, `sodienthoai`, `email`, `sofax`) VALUES
(0, 'huong', 'aaaaaa', 'Hậu Giang', 2147483647, 'tozij1@gmail.com', 0),
(1, 'huong', '', 'Hậu Giang111111', 169736, 'tozij1@gmail.com', 0),
(2, 'huong', 'Vip2', 'Hậu Giang1', 2147483647, '', 0),
(9, 'huong222', '', 'Hậu Giang', 2147483647, 'tozij1@gmail.com', 0),
(12, 'Từ Phi Hướng', 'aaaaaa', 'Hậu Giang1', 1697367647, '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `idsp` int(11) NOT NULL,
  `tensp` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`idsp`, `tensp`) VALUES
(1, 'DELL'),
(2, 'HP'),
(3, 'ACER'),
(4, 'ASUS'),
(5, 'Macbook'),
(6, 'MSI');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `msnv` int(20) NOT NULL,
  `tennv` varchar(30) CHARACTER SET utf8 NOT NULL,
  `chucvu` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`msnv`, `tennv`, `chucvu`, `diachi`, `sodienthoai`) VALUES
(1, 'huong', 'Phó', 'Hậu Giang', 2147),
(2, 'huong111', 'Phóo', 'Hậu Giang11', 2147483);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `ten` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `ten`, `size`, `type`) VALUES
(29, 'slide1.jpg', '63128', 'image/jpeg'),
(30, 'pv-banner-897x341-7c3b6.jpg', '271698', 'image/jpeg'),
(31, 'pv-banner-897x341-b8cba.jpg', '41026', 'image/jpeg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slides`
--
-- Error reading structure for table banhang.slides: #1932 - Table 'banhang.slides' doesn't exist in engine
-- Error reading data for table banhang.slides: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `banhang`.`slides`' at line 1

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `pass`, `status`, `email`, `diachi`, `sodienthoai`) VALUES
(10, 'phihuong', 'phihuong', 1, 'tozij1@gmail.com', 'Hậu Giang', 2147483647),
(19, 'admin2', 'huong113', 0, 'phihuongtu@gmail.com', 'Hậu Giang', 2147483647);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdathang`
--
ALTER TABLE `chitietdathang`
  ADD PRIMARY KEY (`sodonhang`) USING BTREE;

--
-- Chỉ mục cho bảng `dathang`
--
ALTER TABLE `dathang`
  ADD PRIMARY KEY (`sodonhang`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`mshh`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`mskh`) USING BTREE;

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`idsp`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`msnv`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietdathang`
--
ALTER TABLE `chitietdathang`
  MODIFY `sodonhang` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `dathang`
--
ALTER TABLE `dathang`
  MODIFY `sodonhang` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `idsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
