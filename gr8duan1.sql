-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3307
-- Thời gian đã tạo: Th1 21, 2024 lúc 05:46 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `gr8duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `ngaybinhluan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(15, 'Đẹp quá shop ơi', 70, 10, '01:29:22am 11/12/2023'),
(16, 'Ngon', 70, 10, '01:29:26am 11/12/2023'),
(17, 'Okla đấy chứ', 70, 10, '01:29:33am 11/12/2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(4, 'Ví'),
(5, 'Giày dép nam'),
(6, 'Dây lưng nam'),
(7, 'Túi da nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `madh` varchar(255) NOT NULL,
  `tongdonhang` double(10,0) NOT NULL,
  `pttt` tinyint(1) NOT NULL DEFAULT 1,
  `iduser` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `ngaytao` varchar(255) NOT NULL,
  `trangthai` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `madh`, `tongdonhang`, `pttt`, `iduser`, `name`, `address`, `email`, `tel`, `ngaytao`, `trangthai`) VALUES
(128, 'VLXRY473456', 3560000, 3, 70, 'Viết Nhật', 'Sơn Đồng', 'vietnhaths@gmail.com', '0845662003', '02:10:35am 11/12/2023', '2');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `namesp` varchar(255) DEFAULT NULL,
  `price` double(10,0) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `mota` varchar(255) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`id`, `iduser`, `idpro`, `namesp`, `price`, `image`, `mota`, `soluong`, `thanhtien`) VALUES
(265, 70, 22, 'Túi Đeo Country Hide H25003', 3560000, '1701948803_4_ef9bd5dd85eb47c695d103cf5d492057_large.png', 'Túi đeo chéo nam Country Hide\r\n- Chất liệu: 100% da bò hoàn toàn từ Châu Âu\r\n- Dạng túi vuông đứng tiện dụng, đơn giản\r\n- Thiết kế miệng khóa kéo hiện đại\r\n- 1 ngăn chính + nhiều ngăn nhỏ thoải mái đựng máy tính bảng, tài liệu\r\n- Dây đeo bảng vừa dễ dàng ', 5, 17800000),
(267, 70, 22, 'Túi Đeo Country Hide H25003', 3560000, '1701948803_4_ef9bd5dd85eb47c695d103cf5d492057_large.png', 'Túi đeo chéo nam Country Hide\r\n- Chất liệu: 100% da bò hoàn toàn từ Châu Âu\r\n- Dạng túi vuông đứng tiện dụng, đơn giản\r\n- Thiết kế miệng khóa kéo hiện đại\r\n- 1 ngăn chính + nhiều ngăn nhỏ thoải mái đựng máy tính bảng, tài liệu\r\n- Dây đeo bảng vừa dễ dàng ', 1, 3560000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,0) NOT NULL,
  `discount` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `luotxem` int(11) NOT NULL,
  `id_dm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `discount`, `image`, `mota`, `luotxem`, `id_dm`) VALUES
(10, 'Ví Da Nam Country Hide HW2000', 1290000, 50, '1701485479_ls39-brown-1_f302e248d0314b0c9945ba034e544b90_large.png', 'Mô tả sản phẩm - Thiết kế: ví cầm tay gập đôi, dáng đứng, nhỏ gọn - Chất liệu: 100% da bò - Bao gồm các ngăn: • 1 ngăn lớn đựng tiền • 3 khe cắm thẻ - Trọng lượng: 50 gram - Kích thước: 10 x 8.5 x 1 cm', 199, 4),
(11, 'Ví Da Nam Country Hide HW2000', 1290000, 60, '1701485572_hw2000-black-1_6a4bd4e5449f4752a8da0ce5e5595bb0_large.png', 'Mô tả sản phẩm - Thiết kế: ví cầm tay gập đôi, dáng đứng, nhỏ gọn - Chất liệu: 100% da bò - Bao gồm các ngăn: • 1 ngăn lớn đựng tiền • 3 khe cắm thẻ - Trọng lượng: 50 gram - Kích thước: 10 x 8.5 x 1 cm', 18, 4),
(12, 'Ví Card Visit Lusetti LS59 HW2000', 800000, 15, '1701948171_ls59-black-1_95ef712a453045c489301163d3c2ac0f_large.png', 'Mô tả sản phẩm - Thiết kế: ví cầm tay gập đôi, dáng đứng, nhỏ gọn - Chất liệu: 100% da bò - Bao gồm các ngăn: • 1 ngăn lớn đựng tiền • 3 khe cắm thẻ - Trọng lượng: 50 gram - Kích thước: 10 x 8.5 x 1 cm', 6, 4),
(13, 'Ví Da Antler C37717A HW2000', 780000, 25, '1701948197_c37717a-0_8d518f957b394962a4f43e759101f79d_large.png', 'Mô tả sản phẩm - Thiết kế: ví cầm tay gập đôi, dáng đứng, nhỏ gọn - Chất liệu: 100% da bò - Bao gồm các ngăn: • 1 ngăn lớn đựng tiền • 3 khe cắm thẻ - Trọng lượng: 50 gram - Kích thước: 10 x 8.5 x 1 cm', 2, 4),
(14, 'Ví Da Nam Country Hide HW2016', 480000, 10, '1701948355_hw2016-black-1_001ef6baffeb40319879d7ed5fb917c7_large.png', 'Mô tả sản phẩm - Thiết kế: ví cầm tay gập đôi, dáng đứng, nhỏ gọn - Chất liệu: 100% da bò - Bao gồm các ngăn: • 1 ngăn lớn đựng tiền • 3 khe cắm thẻ - Trọng lượng: 50 gram - Kích thước: 10 x 8.5 x 1 cm', 7, 4),
(15, 'Ví Da Antler C37614 HW2016', 15000000, 20, '1701948378_c37614-brown-0_12e6fac749d34cec8d064dbd816c2a1e_large.png', 'Mô tả sản phẩm - Thiết kế: ví cầm tay gập đôi, dáng đứng, nhỏ gọn - Chất liệu: 100% da bò - Bao gồm các ngăn: • 1 ngăn lớn đựng tiền • 3 khe cắm thẻ - Trọng lượng: 50 gram - Kích thước: 10 x 8.5 x 1 cm', 1, 4),
(16, 'Dây Lưng Country Hide H23016', 825000, 20, '1701948508_h23016-black-3_ae04006d6f1a498da84ab02755803ca3_large.png', 'Thắt lưng nam thời trang Country Hide H23016 - Chất liệu da bò cao cấp\r\n- Chất liệu: da bò thật hoàn toàn từ Châu Âu\r\n- Thắt lưng da bò cao cấp với đường chỉ may viền dây lưng tỉ mỉ, tinh tế\r\n- Mặt khóa xỏ kim cổ điển, sang trọng\r\n- Chất liệu hợp kim cao cấp không hoen gỉ.\r\n- Kết hợp cùng quần âu, trang phục công sở đơn giản, lịch lãm\r\n- Kích thước: 120 x 3.5 x 1 cm / 48 x 1.3 x 0.5 inch\r\n- Làm từ da bò thật 100%\r\n- Dây đeo thắt lưng có thể điều chỉnh độ dài.\r\n- Trọng lượng: xấp xỉ 200 gram', 0, 6),
(17, 'Dây Lưng Country Hide H23018', 1280000, 20, '1701948565_h23018-black-1_0ec02045a0ce4234af156a387c64c838_large.png', 'Thắt lưng nam thời trang Country Hide H23016 \r\n- Chất liệu da bò cao cấp - Chất liệu: da bò thật hoàn toàn từ Châu Âu - Thắt lưng da bò cao cấp với đường chỉ may viền dây lưng tỉ mỉ, tinh tế - Mặt khóa xỏ kim cổ điển, sang trọng - Chất liệu hợp kim cao cấp không hoen gỉ. - Kết hợp cùng quần âu, trang phục công sở đơn giản, lịch lãm - Kích thước: 120 x 3.5 x 1 cm / 48 x 1.3 x 0.5 inch - Làm từ da bò thật 100% - Dây đeo thắt lưng có thể điều chỉnh độ dài. - Trọng lượng: xấp xỉ 200 gram', 3, 6),
(18, 'Dây Lưng Country Hide H23030', 1280000, 20, '1701948636_h23031-black-1_9567f5f4d2114a10951e7a4ae3242056_large.png', 'Thắt lưng nam thời trang Country Hide H23016 - Chất liệu da bò cao cấp - Chất liệu: da bò thật hoàn toàn từ Châu Âu - Thắt lưng da bò cao cấp với đường chỉ may viền dây lưng tỉ mỉ, tinh tế - Mặt khóa xỏ kim cổ điển, sang trọng - Chất liệu hợp kim cao cấp không hoen gỉ. - Kết hợp cùng quần âu, trang phục công sở đơn giản, lịch lãm - Kích thước: 120 x 3.5 x 1 cm / 48 x 1.3 x 0.5 inch - Làm từ da bò thật 100% - Dây đeo thắt lưng có thể điều chỉnh độ dài. - Trọng lượng: xấp xỉ 200 gram', 1, 6),
(19, 'Dây Lưng Country Hide H23031', 1520000, 30, '1701948688_h23032-black-1_13ed9496f3c340be97f742448e0f97be_large.png', 'Thắt lưng nam thời trang Country Hide H23016 - Chất liệu da bò cao cấp - Chất liệu: da bò thật hoàn toàn từ Châu Âu - Thắt lưng da bò cao cấp với đường chỉ may viền dây lưng tỉ mỉ, tinh tế - Mặt khóa xỏ kim cổ điển, sang trọng - Chất liệu hợp kim cao cấp không hoen gỉ. - Kết hợp cùng quần âu, trang phục công sở đơn giản, lịch lãm - Kích thước: 120 x 3.5 x 1 cm / 48 x 1.3 x 0.5 inch - Làm từ da bò thật 100% - Dây đeo thắt lưng có thể điều chỉnh độ dài. - Trọng lượng: xấp xỉ 200 gram', 0, 6),
(20, 'Dây Lưng Country Hide H23032', 2310000, 25, '1701948723_h23033-black-1_db57b1258fe04275a21b964166de0583_large.png', 'Thắt lưng nam thời trang Country Hide H23016 - Chất liệu da bò cao cấp - Chất liệu: da bò thật hoàn toàn từ Châu Âu - Thắt lưng da bò cao cấp với đường chỉ may viền dây lưng tỉ mỉ, tinh tế - Mặt khóa xỏ kim cổ điển, sang trọng - Chất liệu hợp kim cao cấp không hoen gỉ. - Kết hợp cùng quần âu, trang phục công sở đơn giản, lịch lãm - Kích thước: 120 x 3.5 x 1 cm / 48 x 1.3 x 0.5 inch - Làm từ da bò thật 100% - Dây đeo thắt lưng có thể điều chỉnh độ dài. - Trọng lượng: xấp xỉ 200 gram', 1, 6),
(21, 'Dây Lưng Country Hide H23033', 26200000, 20, '1701948753_h23034-black-1_94da1552660a4f33a3a93fe13cbfcd96_large.png', 'Thắt lưng nam thời trang Country Hide H23016 - Chất liệu da bò cao cấp - Chất liệu: da bò thật hoàn toàn từ Châu Âu - Thắt lưng da bò cao cấp với đường chỉ may viền dây lưng tỉ mỉ, tinh tế - Mặt khóa xỏ kim cổ điển, sang trọng - Chất liệu hợp kim cao cấp không hoen gỉ. - Kết hợp cùng quần âu, trang phục công sở đơn giản, lịch lãm - Kích thước: 120 x 3.5 x 1 cm / 48 x 1.3 x 0.5 inch - Làm từ da bò thật 100% - Dây đeo thắt lưng có thể điều chỉnh độ dài. - Trọng lượng: xấp xỉ 200 gram', 0, 6),
(22, 'Túi Đeo Country Hide H25003', 3560000, 20, '1701948803_4_ef9bd5dd85eb47c695d103cf5d492057_large.png', 'Túi đeo chéo nam Country Hide\r\n- Chất liệu: 100% da bò hoàn toàn từ Châu Âu\r\n- Dạng túi vuông đứng tiện dụng, đơn giản\r\n- Thiết kế miệng khóa kéo hiện đại\r\n- 1 ngăn chính + nhiều ngăn nhỏ thoải mái đựng máy tính bảng, tài liệu\r\n- Dây đeo bảng vừa dễ dàng điều chỉnh kích thước\r\n- Kích thước: 17x9x18cm\r\n- Trọng lượng: 450g', 2, 7),
(23, 'Túi Đeo Country Hide H25004', 3190000, 20, '1701948895_h25004-h3_67ea26d845234ae780fc17b3a3146793_large.png', 'Túi đeo chéo nam Country Hide - Chất liệu: 100% da bò hoàn toàn từ Châu Âu - Dạng túi vuông đứng tiện dụng, đơn giản - Thiết kế miệng khóa kéo hiện đại - 1 ngăn chính + nhiều ngăn nhỏ thoải mái đựng máy tính bảng, tài liệu - Dây đeo bảng vừa dễ dàng điều chỉnh kích thước - Kích thước: 17x9x18cm - Trọng lượng: 450g', 0, 7),
(24, 'Túi Đeo Country Hide H25008', 3190000, 30, '1701948927_9_2f020f9786dc4698b31f4e8e79f8848f_large.png', 'Túi đeo chéo nam Country Hide - Chất liệu: 100% da bò hoàn toàn từ Châu Âu - Dạng túi vuông đứng tiện dụng, đơn giản - Thiết kế miệng khóa kéo hiện đại - 1 ngăn chính + nhiều ngăn nhỏ thoải mái đựng máy tính bảng, tài liệu - Dây đeo bảng vừa dễ dàng điều chỉnh kích thước - Kích thước: 17x9x18cm - Trọng lượng: 450g', 0, 7),
(25, 'Túi Đeo Hông Country Hide H25000', 3520000, 30, '1701948958_h25000-brown-1_217e66625d36404cb26b077f56ebc10a_large.png', 'Túi đeo chéo nam Country Hide - Chất liệu: 100% da bò hoàn toàn từ Châu Âu - Dạng túi vuông đứng tiện dụng, đơn giản - Thiết kế miệng khóa kéo hiện đại - 1 ngăn chính + nhiều ngăn nhỏ thoải mái đựng máy tính bảng, tài liệu - Dây đeo bảng vừa dễ dàng điều chỉnh kích thước - Kích thước: 17x9x18cm - Trọng lượng: 450g', 0, 7),
(26, 'Túi Đeo Hông Country Hide H25001', 2530000, 45, '1701948997_h25001-brown-1_a45497b92ee14c618345160b43e978ad_large.png', 'Túi đeo chéo nam Country Hide - Chất liệu: 100% da bò hoàn toàn từ Châu Âu - Dạng túi vuông đứng tiện dụng, đơn giản - Thiết kế miệng khóa kéo hiện đại - 1 ngăn chính + nhiều ngăn nhỏ thoải mái đựng máy tính bảng, tài liệu - Dây đeo bảng vừa dễ dàng điều chỉnh kích thước - Kích thước: 17x9x18cm - Trọng lượng: 450g', 0, 7),
(27, 'Túi Đeo Country Hide H25005', 3590000, 45, '1701949044_h25006-brown-1_4177aa8aff394fabb30c93fdf269852a_large.png', 'Túi đeo chéo nam Country Hide - Chất liệu: 100% da bò hoàn toàn từ Châu Âu - Dạng túi vuông đứng tiện dụng, đơn giản - Thiết kế miệng khóa kéo hiện đại - 1 ngăn chính + nhiều ngăn nhỏ thoải mái đựng máy tính bảng, tài liệu - Dây đeo bảng vừa dễ dàng điều chỉnh kích thước - Kích thước: 17x9x18cm - Trọng lượng: 450g', 0, 7),
(28, 'Túi Đeo Country Hide H25006', 3590000, 25, '1701949069_h25005-brown-1_4e82cade1b75433c85ad5d273f4d2aee_large.png', 'Túi đeo chéo nam Country Hide - Chất liệu: 100% da bò hoàn toàn từ Châu Âu - Dạng túi vuông đứng tiện dụng, đơn giản - Thiết kế miệng khóa kéo hiện đại - 1 ngăn chính + nhiều ngăn nhỏ thoải mái đựng máy tính bảng, tài liệu - Dây đeo bảng vừa dễ dàng điều chỉnh kích thước - Kích thước: 17x9x18cm - Trọng lượng: 450g', 0, 7),
(29, 'Giày Da Nam Antler GMN2203', 2630000, 20, '1701949132_ax2310-black-04_a94da780f8e6480087e2db204e8379ea_large.jpg', 'Giày lười tăng chiều cao Lusetti\r\n- Kiểu dáng: Slip-on\r\n- Chất liệu: 100% da bò mềm mại và có độ bóng tự nhiên\r\n- Từng đường may kép tỉ mỉ, chắc chắn chạy quanh giày\r\n- Giày lười nam hoạ tiết kim loại mạ vàng cắt ngang mũi giày thời thượng\r\n- Đế cao su xẻ rãnh chống trơn trượt, siêu êm\r\n- Mũi giày tròn, bo viền chắc chắn\r\n- Màu sắc lịch lãm, phù hợp với nhiều phong cách thời trang', 1, 5),
(30, 'Giày Da Nam Antler XY5856', 2580000, 30, '1701949228_gmn2203-black-04_88bab8580a824bed980e48c2f1874946_large.jpg', 'Túi đeo chéo nam Country Hide - Chất liệu: 100% da bò hoàn toàn từ Châu Âu - Dạng túi vuông đứng tiện dụng, đơn giản - Thiết kế miệng khóa kéo hiện đại - 1 ngăn chính + nhiều ngăn nhỏ thoải mái đựng máy tính bảng, tài liệu - Dây đeo bảng vừa dễ dàng điều chỉnh kích thước - Kích thước: 17x9x18cm - Trọng lượng: 450g', 0, 5),
(31, 'Giày Da Nam Lusetti 3303', 2490000, 24, '1701949250_lst3303-black-04_b0f9e96944f44e3a9dbc0f449540fc8f_large.jpg', 'Túi đeo chéo nam Country Hide - Chất liệu: 100% da bò hoàn toàn từ Châu Âu - Dạng túi vuông đứng tiện dụng, đơn giản - Thiết kế miệng khóa kéo hiện đại - 1 ngăn chính + nhiều ngăn nhỏ thoải mái đựng máy tính bảng, tài liệu - Dây đeo bảng vừa dễ dàng điều chỉnh kích thước - Kích thước: 17x9x18cm - Trọng lượng: 450g', 0, 5),
(32, 'Giày Da Nam Lusetti 3304', 2960000, 30, '1701949267_lst3304-black-04_81fd4bc64f7f40fda49bce37621c544a_large.jpg', 'Túi đeo chéo nam Country Hide - Chất liệu: 100% da bò hoàn toàn từ Châu Âu - Dạng túi vuông đứng tiện dụng, đơn giản - Thiết kế miệng khóa kéo hiện đại - 1 ngăn chính + nhiều ngăn nhỏ thoải mái đựng máy tính bảng, tài liệu - Dây đeo bảng vừa dễ dàng điều chỉnh kích thước - Kích thước: 17x9x18cm - Trọng lượng: 450g', 0, 5),
(33, 'Giày Da Nam Lusetti AX2310', 2480000, 30, '1701949306_lst3305-black-04_be0e917e93d54d4c980a6633ade439d1_large.jpg', 'Túi đeo chéo nam Country Hide - Chất liệu: 100% da bò hoàn toàn từ Châu Âu - Dạng túi vuông đứng tiện dụng, đơn giản - Thiết kế miệng khóa kéo hiện đại - 1 ngăn chính + nhiều ngăn nhỏ thoải mái đựng máy tính bảng, tài liệu - Dây đeo bảng vừa dễ dàng điều chỉnh kích thước - Kích thước: 17x9x18cm - Trọng lượng: 450g', 0, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(70, 'Viết Nhật', '123123123a', 'vietnhaths@gmail.com', 'Sơn Đồng', '0845662003', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `binhluan_ibfk_1` (`idpro`),
  ADD KEY `binhluan_ibfk_2` (`iduser`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donhang_ibfk_1` (`iduser`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `giohang_ibfk_1` (`idpro`),
  ADD KEY `giohang_ibfk_2` (`iduser`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sanpham_ibfk_1` (`id_dm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `giohang_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_dm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
