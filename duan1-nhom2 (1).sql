-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 14, 2022 lúc 06:23 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1-nhom2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `name_brand` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `show_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`id`, `name_brand`, `image`, `show_menu`) VALUES
(4, 'Louis Vuitton', '', 1),
(5, 'CHANEL', '', 1),
(6, 'PRADA', '', 1),
(7, 'GUCCI', '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `show_menu`) VALUES
(3, 'Áo nam', 1),
(4, 'Quần nam', 1),
(7, 'Quần âu', 1),
(8, 'Áo unisex', 0),
(9, 'Áo localbrand', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emailcmt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avtcmt` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'http://localhost/nhom4/public/uploads/avtcmt.png',
  `id_sp` int(11) DEFAULT NULL,
  `contents` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contents`
--

INSERT INTO `contents` (`id`, `id_user`, `name`, `emailcmt`, `avtcmt`, `id_sp`, `contents`, `created_at`) VALUES
(34, 17, 'vietnv', 'nguyenvanviet28072001@gmail.com', 'uploads/avtcmt.png', 63, 'alo\r\n', '2022-04-13 17:34:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `favorite_products`
--

CREATE TABLE `favorite_products` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `favorite_products`
--

INSERT INTO `favorite_products` (`id`, `user_id`, `product_id`, `created_at`) VALUES
(7, 16, 57, '2021-12-17 18:30:18'),
(8, 17, 62, '2022-03-28 00:40:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `phone_number`, `subject_name`, `note`, `created_at`) VALUES
(9, 'wordpress', 'nguyenvanviet28072001@gmail.com', '0326582102', 'sđấ', 'sđâsda', '2022-04-08 05:36:48'),
(10, 'Việt', 'nguyenvanviet28072001@gmail.com', '0326582102', 'sđấ', 'ádfghjk', '2022-04-08 08:10:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `galery`
--

CREATE TABLE `galery` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `thumbnail` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `news_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `news_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `update_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `news_name`, `content`, `news_img`, `update_at`, `created_at`) VALUES
(9, 'Khám phá bộ sưu tập phụ kiện bằng da xịn xò của DOLO Men', '\"Thời trang cho các quý ông thực thụ\" chính là tôn chỉ của DOLO Men, một trong những thương hiệu thời trang phụ kiện nam bằng da cao cấp nổi bật trong làng thời trang Việt. Trong suốt hành trình của mình, DOLO Men không ngừng sáng tạo, khơi nguồn cảm hứng thời trang với những thiết kế mang tính nghệ thuật cao.\r\n\r\nKhám phá bộ sưu tập phụ kiện bằng da xịn xò của DOLO Men - Ảnh 1.\r\nDOLO Men phong cách quý ông thực thụ\r\n\r\nNhững thiết kế của DOLO Men mang tinh thần thời thượng, bắt kịp trào lưu hiện đại nhưng vẫn tôn vinh những nét đẹp hoài cổ, linh hồn của thời trang châu Âu từ các thế kỷ trước. Sự sang trọng, chuyên nghiệp được thể hiện trong từng tấm da thuộc và mũi chỉ khâu tỉ mỉ. Với bộ sưu tập mới này, DOLO Men đem đến những mẫu phụ kiện mà bất cứ người đàn ông thành đạt nào cũng cần phải có: những đôi giày da, thắt lưng da, cặp/ túi xách, ví da, clutch…\r\n\r\nNgoài việc đề cao sự nam tính và sang trọng của các quý ông, điểm khác biệt trong bộ sưu tập DOLO Men lần này chính là luồng gió năng động và trẻ trung được thổi hồn vào. Các thiết kế là giao thoa giữa thời trang cổ điển bất biến và hơi thở đương đại tràn ngập sự tươi trẻ. DOLO Men đã thêm thắt những chi tiết phá cách giúp các thiết kế chuẩn mực thoát khỏi lối mòn nhàm chán.\r\n\r\nKhám phá bộ sưu tập phụ kiện bằng da xịn xò của DOLO Men - Ảnh 2.\r\nCổ điển cùng tông màu nâu\r\n\r\nMột quy tắc bất di bất dịch khi phối phụ kiện da chính là phải đồng đều trong chất liệu và màu sắc để tạo nên tổng thể hài hòa. Với những quý ông yêu thích nét truyền thống cổ điển thì giày tây vân gỗ chất liệu da bò DOLO Men cùng các phụ kiện tone nâu chính là một sự lựa chọn hoàn hảo. Những phụ kiện này không bao giờ lỗi mốt, phù hợp cho những ngày đi làm hay các buổi gặp đối tác quan trọng, giúp các chàng xây dựng được hình ảnh lịch lãm và chuyên nghiệp.\r\n\r\n\r\n', 'uploads/61bdc48f7217f-tintuc1.jpg', '2021-12-18', '2021-12-18'),
(10, 'Hermès Xuân Hè 2022: Khi nhà mốt số một ưa chuộng những số “2”', 'Cho mùa Xuân - Hè 2022, NTK Véronique Nichanian đã đem tới một BST thật sự lạc quan, bất chấp tiết trời ẩm ướt của mùa xuân ôn đới.\r\n\r\nHermès Xuân Hè 2022: Khi nhà mốt số một ưa chuộng những số “2” - Ảnh 1.\r\nBST thời trang nam mới từ Hermès tiết chế đến bất ngờ khi chỉ bao gồm 41 mẫu - và theo lời Nichanian, bà \"không muốn có quá nhiều quần áo\" và thay vào đó, chỉ muốn đem tới những thứ phù hợp và cần thiết nhất. Trở lại với khoảng sân đá đẹp đẽ của Mobilier National - cơ quan lưu trữ nội thất và đồ đạc của hoàng gia Pháp sau 2 năm vắng bóng - những người mẫu xuất hiện và diện loạt phục trang xuân - hè mới nhất để rồi nhận về vô số những lời tán dương từ chuyên gia và giới mộ điệu ngay sau show trình diễn. Nhiều người có thể coi đây là tín hiệu tích cực và lạc quan từ Hermès khi nhà mốt dường như đã sẵn sàng để đưa những giá trị thẩm mỹ tươi đẹp và tích cực trở lại với cuộc sống thường nhật.\r\n\r\nKhi tiểu tiết làm nên chuyện\r\n\r\n\"Một bí mật nhỏ nhé: Người ta chỉ có thể nhìn thấu mọi thứ bằng trái tim, bởi những điều quan trọng thường vô hình trước đôi mắt.\" - trích Hoàng Tử Bé, Antoine de Saint-Exupéry.\r\n\r\nChẳng phải tự nhiên mà ký giả Luke Leitch lại sử dụng trích dẫn trên để nói về BST Xuân - Hè 2022 của Hermès. BST thoạt trông thật đơn giản, nhưng nếu quan sát nó đủ lâu, những nét chấm phá lạ lùng sẽ dần được lộ ra như một trò chơi Escape Room kỳ lạ, nơi các tín đồ thời trang sẽ dần tìm thấy những mảnh thú vị được khéo léo cài cắm trong từng món phục trang. Đó hẳn cũng là lý do để Nichanian đặt tên BST là \"Double Game\".\r\n\r\nHermès Xuân Hè 2022: Khi nhà mốt số một ưa chuộng những số “2” - Ảnh 2.\r\nBST sử dụng bảng màu rạng rỡ, thanh lịch với trắng hồng, vàng hoàng yến, xanh ngọc sáng và nhiều sắc độ trung tính cho mùa xuân - hè sắp tới. Hầu hết các món đồ của BST lần này nói không với monotone nhàm chán, thay vào đó sử dụng 2 tông màu trên áo khoác (jacket mỏng nhẹ cho tiết trời xuân hay áo khoác đi đường dày dặn để tránh những cơn mưa bất chợt) hay áo cardigan len dệt kim dày dặn chuyển tông màu từ tím nhạt sang xanh biển.\r\n\r\n\r\nHermès Xuân Hè 2022: Khi nhà mốt số một ưa chuộng những số “2” - Ảnh 3.\r\nKhông chỉ màu sắc, những đường nét trong thiết kế cũng gây hứng thú cho giới mộ điệu như chiếc áo khoác parka có thể mặc đổi chiều phối túi da đẹp mắt được phối với quần short và thắt lưng sợi được cố định bằng những nút buộc. Mảng phụ kiện cũng được tập trung cho BST lần này khi một lượng lớn túi xách được thêm vào mà đặc biệt nhất là chiếc Bolide được tạo hình giống với phần cứng của một chiếc ván trượt có thể kết hợp hoàn hảo với boots vải bố bền bỉ.\r\n\r\nVới bất cứ món đồ nào trong runway năm nay, con số 2 đều hiện diện như một lẽ hiển nhiên: Hai chất liệu như da pha trên vải kỹ thuật, hai tông màu từ từ chuyển qua - lại trên cùng một nền vải, hai công dụng thú vị của cùng một món đồ, hai diện mạo có thể dễ dàng nhận ra của một chiếc túi.\r\n\r\n', 'uploads/61bdc5be4f6de-tintuc2.jpg', '2021-12-18', '2021-12-18'),
(11, 'Chuỗi sự kiện tri ân cực “khủng” của thương hiệu thời trang nam cao cấp Santino mừng sinh nhật 7 tuổi', 'Chào đón sự kiện sinh nhật 7 tuổi, Santino hé lộ chuỗi sự kiện tri ân khách hàng cùng nhiều phần quà hấp dẫn không thể bỏ lỡ vào tháng 6 này.\r\n\r\nMang trong mình hơi thở thời trang Ý, Santino là thương hiệu thời trang nam đẳng cấp với phong cách chuẩn quốc tế. Gia nhập thị trường vào năm 2015, tính đến hiện tại, Santino đã có 27 cửa hàng trên toàn quốc và là một trong số ít thương hiệu có cửa hàng tại nước ngoài. Với hướng đi trở thành một trong những thương hiệu dẫn đầu về phong cách, Santino đã khẳng định vị thế của mình trên thị trường thời trang Việt nói chung và thời trang dành riêng cho phái mạnh nói riêng.\r\n\r\nĐể tạo nên thành công đó, không thể không nhắc đến chất lượng sản phẩm và sự sáng tạo trong từng set đồ. Với tôn chỉ luôn đặt sự hài lòng của khách hàng lên hàng đầu, Santino luôn không ngừng nâng cao chất lượng dịch vụ, sẵn sàng lắng nghe và ghi nhận mọi phản hồi từ phía khách hàng. Các sản phẩm của Santino đa dạng về mẫu mã, thiết kế tinh tế, đơn giản mà đẳng cấp. Không khó hiểu khi thương hiệu thời trang Santino đã có bước phát triển mạnh mẽ, trở thành một trong những thương hiệu dẫn đầu xu hướng thời trang nam.\r\n\r\nChuỗi sự kiện tri ân cực “khủng” của thương hiệu thời trang nam cao cấp Santino mừng sinh nhật 7 tuổi - Ảnh 1.\r\nSantino cũng luôn tin rằng, sự ủng hộ và tin tưởng của khách hàng chính là nguồn động lực lớn lao giúp Santino liên tục phát triển. Chuỗi sự kiện mừng sinh nhật 7 tuổi của thương hiệu Santino là lời tri ân tới tất cả các khách hàng đã luôn sát cánh cùng Santino trong thời gian vừa qua.\r\n\r\nKhởi đầu chuỗi sự kiện đặc biệt, các khách hàng sẽ có nhiều cơ hội nhận được các món quà có giá trị như nhận ngay iPhone 12 Pro Max khi mua sắm online tại Santino và Santino Outlets trong tháng 6/2021. Santino cũng dành nhiều ưu đãi cho các khách hàng trên Shopee với chuỗi Flash Sale giảm giá lên tới 50%++ các sản phẩm. Các chương trình Flash Sale sẽ kéo dài 1- 2 tiếng mỗi ngày để các khách hàng thoải mái lựa chọn được những món đồ ưng ý cho bản thân và gia đình. Không những vậy, khách hàng còn được giảm thêm 7% cho tổng hóa đơn mua hàng online trong 6 tháng (hoặc giảm thêm 17% cho hóa đơn mua hàng trên 1 triệu đồng) kèm tặng thêm một Voucher 1000 SAN sử dụng cho lần mua hàng kế tiếp.\r\n\r\nChuỗi sự kiện tri ân cực “khủng” của thương hiệu thời trang nam cao cấp Santino mừng sinh nhật 7 tuổi - Ảnh 2.\r\nNgoài các phần quà giá trị khủng và chương trình giảm giá hấp dẫn nhất từ trước đến nay, các khách hàng của Santino còn có cơ hội tham gia Vòng quay may mắn để nhận quà sinh nhật miễn phí khi tham gia chương trình.\r\n\r\nChương trình tri ân khách hàng mừng sinh nhật 7 tuổi của thương hiệu thời trang Santino được dự báo là chương trình bùng nổ và không thể bỏ lỡ trong tháng 6 này. Chương trình không chỉ đặt dấu mốc trưởng thành của thương hiệu thời trang Santino mà còn đánh dấu bước chuyển mình phát triển vượt bậc trong tương lai. Tiết lộ về định hướng sắp tới, Santino dự định sẽ đưa những chất liệu vải tự nhiên, thân thiện với môi trường vào các sản phẩm thời trang của người tiêu dùng Việt.\r\n\r\nChuỗi sự kiện tri ân cực “khủng” của thương hiệu thời trang nam cao cấp Santino mừng sinh nhật 7 tuổi - Ảnh 3.\r\nĐặc biệt hơn, trong thời gian diễn ra sự kiện sinh nhật 7 tuổi, thương hiệu thời trang Santino cũng trình làng bộ sưu tập Mini Collection Summer 2021 với chủ đề \"Back To The Natural World\". Các sản phẩm trong bộ sưu tập 2021 của Santino sử dụng các chất liệu chủ đạo là Bamboo, Modal và Cotton. Với ưu điểm của sợi vải Bamboo như khả năng hấp thụ tốt, thấm hút mồ hôi tốt hơn gấp 3 - 4 lần sợi vải thông thường và giúp điều hòa thân nhiệt, đây là chất liệu cực kỳ phù hợp cho mùa hè nóng bức sắp tới. Bên cạnh đó, chất liệu vải Bamboo cũng có công dụng tối ưu trong việc kháng khuẩn khử mùi và an toàn tuyệt đối với người sử dụng vì vải tre không chứa bất kỳ loại chất hóa học nào.\r\n\r\nViệc sử dụng các chất liệu thân thiện với môi trường cũng là sự khẳng định trách nhiệm của thương hiệu đối với xã hội và đưa tinh hoa của thiên nhiên đến từng sản phẩm. Đem lại trải nghiệm khác biệt cho khách hàng. Những thiết kế của Santino vẫn giữ lại sự đơn giản, tinh tế trong từng đường kim mũi chỉ, phù hợp với quý ông Việt.\r\n\r\nChuỗi sự kiện tri ân cực “khủng” của thương hiệu thời trang nam cao cấp Santino mừng sinh nhật 7 tuổi - Ảnh 4.\r\nTrước thời điểm đại dịch Covid-19 đang hoành hành, thương hiệu thời trang Santino vẫn luôn giữ vững quan điểm của mình, đem đến các sản phẩm tốt nhất với giá thành hợp lý nhất.\r\n\r\nĐừng bỏ lỡ sự kiện có một không hai bùng nổ nhất mùa hè này của Santino bằng cách bấm quan tâm sự kiện để được liên tục cập nhật các thông tin mới nhất.\r\n\r\nChi tiết sự kiện, các khách hàng có thể theo dõi tại:\r\n\r\nWebsite: http://santino.com.vn/.\r\n\r\nFanpage: https://www.facebook.com/SantinoVietnam.', 'uploads/61bdc5e2cf435-tintuc4.jpg', '2021-12-18', '2021-12-18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_ttdh` int(11) NOT NULL DEFAULT 1,
  `order_id` int(11) NOT NULL,
  `customer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` int(11) NOT NULL DEFAULT 0,
  `payment_method` int(11) NOT NULL DEFAULT 1,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `id_user`, `id_ttdh`, `order_id`, `customer_name`, `customer_phone_number`, `customer_email`, `customer_address`, `total_price`, `payment_method`, `note`, `reason`, `created_at`, `updated_at`) VALUES
(42, NULL, 2, 0, 'Việt', '0326582102', 'nguyenvanviet28072001@gmail.com', 'Hà Nội', 300000, 1, 'giao ban ngày', '', '2022-03-22 15:40:44', '2022-04-04 07:45:48'),
(43, NULL, 1, 0, 'Việt', '0326582102', 'nguyenvanviet28072001@gmail.com', '123', 200002, 1, '', '', '2022-04-01 07:31:13', '2022-04-04 07:04:47'),
(44, NULL, 3, 0, 'Việt', '0326582102', 'nguyenvanviet28072001@gmail.com', 'Mỹ Đình-Hà Nội', 470002, 1, 'Giao nhanh', '', '2022-04-04 07:34:59', '2022-04-06 08:07:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`order_id`, `product_id`, `name`, `quantity`, `unit_price`, `created_at`, `updated_at`) VALUES
(33, 33, '', 3, 345000, NULL, NULL),
(33, 34, '', 1, 290000, NULL, NULL),
(33, 35, '', 1, 432, NULL, NULL),
(34, 33, '', 1, 345000, NULL, NULL),
(34, 37, '', 1, 300000, NULL, NULL),
(34, 38, '', 1, 270000, NULL, NULL),
(34, 43, '', 1, 600000, NULL, NULL),
(35, 57, '', 13, 270000, NULL, NULL),
(36, 38, '', 2, 270000, NULL, NULL),
(37, 37, '', 3, 300000, NULL, NULL),
(37, 39, '', 1, 370000, NULL, NULL),
(37, 44, '', 2, 1400000, NULL, NULL),
(37, 55, '', 1, 600000, NULL, NULL),
(38, 38, '', 2, 270000, NULL, NULL),
(38, 56, '', 1, 1400000, NULL, NULL),
(39, 38, '', 1, 270000, NULL, NULL),
(40, 37, '', 1, 300000, NULL, NULL),
(40, 38, '', 1, 270000, NULL, NULL),
(40, 44, '', 1, 1400000, NULL, NULL),
(41, 37, '', 1, 300000, NULL, NULL),
(41, 38, '', 1, 270000, NULL, NULL),
(41, 39, '', 1, 370000, NULL, NULL),
(41, 44, '', 1, 1400000, NULL, NULL),
(42, 37, '', 1, 300000, NULL, NULL),
(43, 63, '', 1, 200002, NULL, NULL),
(44, 57, '', 1, 270000, NULL, NULL),
(44, 63, '', 1, 200002, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `title` varchar(350) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `number` int(11) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `view` int(11) NOT NULL,
  `thumbnail` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `category_id`, `brand_id`, `title`, `price`, `number`, `discount`, `view`, `thumbnail`, `description`, `status`, `created_at`, `updated_at`, `deleted`) VALUES
(57, 8, 5, 'Áo nam', 270000, 313, 250000, 22, 'uploads/61a03eddc7b8f-4.jpg', 'Vải lụa là một loại vải mịn, mỏng được dệt từ các sợi tơ tự nhiên. Các sợi tơ đó được lấy từ quá trình tạo kén của loài côn trùng như bướm, tằm, hoặc loài nhện,… Loại lụa tốt nhất được dệt từ tơ tằm. Đây là chất liệu có truyền thống lâu đời. Nó vốn chỉ dành cho tầng lớp quý tộc, thượng lưu của Trung Hoa thời cổ. Sau này vì ưu điểm của mình, nó đã chu du ra khắp năm Châu, bốn Bể. Để rồi trở thành loại chất liệu thịnh hành như ngày nay. Để không làm mất đi những giá trị vốn có của lụa, chúng tôi đã tìm kiếm những sợi lụa tuyệt hảo bậc nhất để dệt nên sản phẩm Cà Vạt Lụa Thượng Uyển. Qua đó gửi tới khách hàng thứ chất lượng của quý tộc.\r\n\r\nCà Vạt Lụa Thượng Uyển được dệt từ Lụa tơ tằm nguyên chất. Sau đó được đem đi nhuộm cùng hóa chất đặc chế, không kích ứng da hay gây hại cho người dùng cũng như môi trường. Vì được dệt bằng lụa tơ tằm tự nhiên nên sản phẩm cà vạt lụa của chúng tôi có những đặc tính ưu việt mà Lụa vốn có như:\r\n\r\nNhẻ, mỏng  và mềm mịn.\r\nKhi chạm vào có cảm giác mát chứ không lạnh, phù hợp với hầu hết thời tiết.\r\nKhông tích điện, cách nhiệt tốt.\r\nHút ẩm tốt, thoải mái không gây bí bách. Dù hoạt động mạnh ra mồ hôi nhiều không lo ngại sẽ bị ám mùi.\r\nCà Vạt Lụa Thượng Uyển\r\nSản phẩm của chúng tôi được dệt từ lụa tơ tằm tự nhiên Việt Nam. Những sợi lụa được chọn lọc kĩ càng. Sau đó đem dệt tại nhà máy tại Bảo Lộc trước khi mang đi in thủ công. Chúng tôi tìm kiếm những nghệ nhân lành nghề nhất để đảm bảo có thể cho ra đời những sản phẩm chất lượng với đường nét tinh xảo.\r\n\r\nCà Vạt Lụa Thượng Uyển bản to CT12\r\nCà Vạt Lụa Thượng Uyển bản to CT12\r\nCà Vạt Lụa Thượng Uyển bản to CT12\r\nCà Vạt Lụa Thượng Uyển bản to CT12\r\nVới chất liệu lụa tơ tằm tự nhiên, đôi tất sẽ mang lại cảm giác thoải mái và dễ chịu cho người dùng. Đồng thời, giúp bạn có những bước chân vững chải, tự tin. Hãy đến Lụa Thượng Uyển gần nhất để chọn cho mình chiếc cà vạt phù hợp nhất. Hoặc bạn cũng có thể dành tặng sản phẩm này cho bạn bè, người thân nữa đấy.\r\n\r\nSản phẩm lụa tơ tằm cao cấp Lụa Thượng Uyển luôn bảo đảm mang đến cho bạn những sản phẩm chất lượng nhất.', 1, '2021-12-18 11:21:46', '2021-12-18 11:21:46', NULL),
(62, 3, 4, 'Áo cam nam', 200002, 200, 190000, 19, 'uploads/61a4da0f40a87-sp1.jpg', 'Bộ Quần Áo Nam Áo Sơ Mi Dài Tay Cổ Ve In Hình Mèo Họa Tiết Chữ SOMEONE Quần Kaki Basic Có Túi Trẻ Trung Thời Trang Menki', 1, '2022-03-28 07:16:24', '2022-03-28 07:16:24', NULL),
(63, 7, 4, 'Bộ quần áo nam', 200002, 21329, 190000, 24, 'uploads/61a4da0f40715-1.jpg', 'Bộ Quần Áo Nam Áo Sơ Mi Dài Tay Cổ Ve In Hình Mèo Họa Tiết Chữ SOMEONE Quần Kaki Basic Có Túi Trẻ Trung Thời Trang Menki', 1, '2022-03-28 07:00:25', '2022-03-28 07:00:25', NULL),
(64, 8, 5, 'Áo xám nam', 200002, 21329, 190000, 3, 'uploads/61a09c33ad046-6.jpg', 'Bộ Quần Áo Nam Áo Sơ Mi Dài Tay Cổ Ve In Hình Mèo Họa Tiết Chữ SOMEONE Quần Kaki Basic Có Túi Trẻ Trung Thời Trang Menki', 1, '2022-03-28 07:34:25', '2022-03-28 07:34:25', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Nhân Viên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slideshow`
--

CREATE TABLE `slideshow` (
  `id` int(11) NOT NULL,
  `slideshow_img` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `slide_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slideshow`
--

INSERT INTO `slideshow` (`id`, `slideshow_img`, `slide_name`) VALUES
(16, 'uploads/61ab1a3757c7d-slider2.jpg', 'a'),
(17, 'uploads/61ab1a70d0c09-slider1.jpg', 'b'),
(18, 'uploads/61ab1aac2bd10-banner_slider04.jpg', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinhtrangdh`
--

CREATE TABLE `tinhtrangdh` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Đang chờ xử lý'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tinhtrangdh`
--

INSERT INTO `tinhtrangdh` (`id`, `name`) VALUES
(1, 'Đang chờ xử lý'),
(2, 'Đang xử lý'),
(3, 'Đặt hàng thành công'),
(4, 'Hủy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tokens`
--

CREATE TABLE `tokens` (
  `user_id` int(11) NOT NULL,
  `token` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) DEFAULT 2,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'uploads/avtcmt.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `fullname`, `email`, `phone_number`, `address`, `password`, `role_id`, `created_at`, `updated_at`, `deleted`, `avatar`) VALUES
(16, 'Nguyễn Văn Việt', 'vietnvph13644@fpt.edu.vn', '0326582102', 'Thạch Thất-Hà Nội', '28072001', 1, NULL, NULL, NULL, 'uploads/avtcmt.png'),
(17, 'vietnv', 'nguyenvanviet28072001@gmail.com', '0326582102', 'Hà Nội', '28072001', 1, '2022-03-22 15:32:24', '2022-03-22 15:32:24', NULL, 'uploads/avtcmt.png'),
(18, 'Việt Nguyễn', 'wordpress@gmail.com', '0326582102', '123', '12345678', 2, NULL, NULL, NULL, 'uploads/avtcmt.png'),
(19, 'Nguyễn Văn Việt', 'nguyenvanviet28072001@gmail.com', '0326582102', '123', '12345678', 1, '2022-04-01 08:03:51', '2022-04-01 08:03:51', NULL, 'uploads/6246a0d75fdae-vmht.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Chỉ mục cho bảng `favorite_products`
--
ALTER TABLE `favorite_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

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
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_ttdh` (`id_ttdh`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_id`,`product_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`category_id`),
  ADD KEY `product_brand_id` (`brand_id`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tinhtrangdh`
--
ALTER TABLE `tinhtrangdh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_ibfk_1` (`role_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `favorite_products`
--
ALTER TABLE `favorite_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `tinhtrangdh`
--
ALTER TABLE `tinhtrangdh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `contents`
--
ALTER TABLE `contents`
  ADD CONSTRAINT `contents_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `contents_ibfk_2` FOREIGN KEY (`id_sp`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `favorite_products`
--
ALTER TABLE `favorite_products`
  ADD CONSTRAINT `favorite_products_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `favorite_products_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`id_ttdh`) REFERENCES `tinhtrangdh` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Các ràng buộc cho bảng `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
