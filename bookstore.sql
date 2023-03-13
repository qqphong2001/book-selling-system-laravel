-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Mar 13, 2023 at 09:02 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `name_author` varchar(255) NOT NULL,
  `description_author` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `name_author`, `description_author`) VALUES
(2, 'Fabien Öckto Lambert', NULL),
(3, 'Violeta Basic', NULL),
(4, 'Amateur Psychology Nguyễn Đoàn Minh Thư', NULL),
(5, 'Tatsuki Fujimoto', NULL),
(6, 'Gege Akutami', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `isbn` char(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `numPages` int(11) NOT NULL,
  `layout` varchar(255) NOT NULL,
  `publishDate` date DEFAULT NULL,
  `weight` int(11) NOT NULL,
  `translatorName` varchar(255) DEFAULT NULL,
  `hSize` int(11) NOT NULL,
  `wSize` int(11) NOT NULL,
  `unitPrice` double NOT NULL,
  `unitStock` int(11) NOT NULL,
  `ranking` double DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `publisher_id` int(11) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `genre_id` int(11) DEFAULT NULL,
  `view` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `isbn`, `title`, `description`, `numPages`, `layout`, `publishDate`, `weight`, `translatorName`, `hSize`, `wSize`, `unitPrice`, `unitStock`, `ranking`, `discount`, `cover`, `publisher_id`, `author_id`, `genre_id`, `view`) VALUES
(18, '8934974184584', 'Chainsaw Man - Tập 6', '<p><span style=\"margin: 0px; padding: 0px; font-size: 14.3px; color: rgb(51, 51, 51); font-family: nunito-sans, sans-serif, Helvetica, Arial; text-align: justify;\">Câu chuyện của Chainsaw Man mô tả một thế giới nơi ma quỷ và con người cùng tồn tại trên Trái đất, và trong đó con người có thể lập hiệp ước để đạt được sức mạnh của quỷ.&nbsp;</span><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: nunito-sans, sans-serif, Helvetica, Arial; font-size: 14.3px; text-align: justify;\"><span style=\"margin: 0px; padding: 0px; font-size: 14.3px; color: rgb(51, 51, 51); font-family: nunito-sans, sans-serif, Helvetica, Arial; text-align: justify;\">Nhân vật chính là Denji, để hoàn trả số nợ khổng lồ của cha để lại, Denji cùng con quỷ nhỏ Pochita làm tất cả mọi công việc để có thể hoàn nợ. Sau một tai nạn, Denji bị giết, Pochita đã hòa làm một với Denji, giúp cậu hồi sinh và hóa thành “Quỷ cưa” hùng mạnh. Sau đó, Denji được Makima nhận vào tổ chức săn quỷ và hành trình diệt quỷ của Denji bắt đầu từ đây.</span><br></p>', 190, 'Bìa cứng', '2023-01-01', 250, 'Ili Tenjou', 18, 11, 45000000, 100, NULL, 30, '/upload/cover/nxbtre_full_30582023_045853.jpg', 9, 5, 6, '6'),
(19, '8935244881981', 'Chú Thuật Hồi Chiến - Tập 10', '<p><span style=\"color: rgb(51, 51, 51); font-family: nunito-sans, sans-serif, Helvetica, Arial; font-size: 14.3px; text-align: justify;\">Để có được cơ thể hoàn chỉnh, Muta Kokichi, cũng chính là “Mechamaru”, đã cấu kết với phe chú linh... Song đàm phán thất bại, buộc cậu phải đối đầu Mahito. Liệu Muta có thoát khỏi cửa tử bằng kế sách bí mật...!? Và vào ngày 31 tháng 10, màn được hạ xuống phố, “biến cố Shibuya” chính thức bắt đầu!!</span><br></p>', 192, 'Bìa mềm', '2023-01-01', 220, 'Vũ Trụ 19, Liên Vũ', 18, 11, 30000, 190, NULL, 0, '/upload/cover/chu_thuat_hoi_chien_-_tap_10_-_mockup.jpg', 4, 5, 6, '12'),
(20, '8934974185130', 'Cẩm Nang Con Gái (Tái Bản 2021)', '<p>test</p>', 192, 'Bìa cứng', '2023-03-09', 200, 'Tiếng Việt', 21, 18, 45000, 100, NULL, 0, '/upload/cover/z3201911566454_951a32cff4e1a7e99d1d6b12fd341292.jpg', 6, 6, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `bookimage`
--

CREATE TABLE `bookimage` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookimage`
--

INSERT INTO `bookimage` (`id`, `image`, `book_id`) VALUES
(29, '/upload/product/nxbtre_full_30582023_045853_1.jpg', 18),
(30, '/upload/product/chu_thuat_hoi_chien_-_tap_10.jpg', 19),
(31, '/upload/product/chu_thuat_hoi_chien_-_tap_10_-_postcard.jpg', 19),
(32, '/upload/product/chu-thuat-hoi-chien---tap-10---mockup.jpg', 19),
(33, '/upload/product/cam_nang_con_gai_tai_ban_2021_1_2022_05_16_16_27_41.jpg', 20),
(34, '/upload/product/cam_nang_con_gai_tai_ban_2021_2_2022_05_16_16_27_41.jpg', 20),
(35, '/upload/product/camnangcongai_68k-01_1_.jpg', 20);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL,
  `dob` date NOT NULL,
  `phoneNumber` int(11) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `createdAt` date NOT NULL,
  `point` int(11) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `account_id` int(11) NOT NULL,
  `customerTypeId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customeraddress`
--

CREATE TABLE `customeraddress` (
  `id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customertype`
--

CREATE TABLE `customertype` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id_employee` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL,
  `dob` date NOT NULL,
  `phoneNumber` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `account_id` int(11) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id_employee`, `firstName`, `lastName`, `gender`, `dob`, `phoneNumber`, `address`, `account_id`, `avatar`) VALUES
(1, 'Nguyễn', 'Phong', 1, '2001-09-13', 908086863, 'pham the hien', 4, '/upload/employee/avatar/2023_03_06_09_41_20_1-390x510.jpg'),
(3, 'Nguyễn', 'Phong', 1, '2001-09-01', 908086863, 'pham the hien', 3, '/upload/employee/avatar/bia_ao_nhua.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `name_genre` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `name_genre`, `image`) VALUES
(1, 'Kỹ năng sống', 'http://localhost:8000/upload/genre/z3201911566454_951a32cff4e1a7e99d1d6b12fd341292.jpg'),
(6, 'Manga', '/upload/genre/Manga.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `orderNumber` char(255) NOT NULL,
  `orderDate` datetime NOT NULL,
  `total` double NOT NULL,
  `discount` double NOT NULL,
  `paymentDate` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `shippingMethod_id` int(11) NOT NULL,
  `paymentMethod_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customerAddress_id` int(11) NOT NULL,
  `promotion_id` int(11) NOT NULL,
  `emloyee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orderstatus`
--

CREATE TABLE `orderstatus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paymentmethod`
--

CREATE TABLE `paymentmethod` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `expireDate` datetime NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `id` int(11) NOT NULL,
  `name_publisher` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`id`, `name_publisher`) VALUES
(4, 'Kim Đồng'),
(5, 'Thanh Niên'),
(6, 'NXB Tổng Hợp TPHCM'),
(8, 'NXB Thế Giới'),
(9, 'NXB Tuổi trẻ');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `customer_id` int(11) NOT NULL,
  `ranking` enum('1','2','3','4','5') NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `name_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `name_role`) VALUES
(2, 'Quản trị viên'),
(3, 'Người dùng');

-- --------------------------------------------------------

--
-- Table structure for table `shippingmethod`
--

CREATE TABLE `shippingmethod` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`, `status`) VALUES
(3, 'Nghia', 'qqphong2001@gmail.com', '2023-03-08 18:06:27', '$2y$10$sa293qUKG2sjLNqX.VPfjueXyhNTB.u1z9wgYbrAo3e9/vKqP9YDW', NULL, '2023-03-08 03:32:51', '2023-03-08 18:06:27', 2, 1),
(4, 'Huy', 'taolaphong78@gmail.com', '2023-03-11 01:12:59', '$2y$10$kyNkFPZwadtymGqgbqBMnOGA/oHaKFag2wDx.8hSO2mfHgamKudQK', NULL, '2023-03-08 04:02:13', '2023-03-11 01:12:59', 3, 1),
(5, 'Phong', 'Hieupham11t111t1@gmail.com', NULL, '$2y$10$m.T8cLYZ3slgIcDZwEq82uOuYwe0lAO0xUKtsAEUSI5p.U7TOAj/K', NULL, '2023-03-10 21:13:19', '2023-03-10 21:13:19', 3, 1),
(6, 'Nghia', 'nghiamaac147@gmail.comq', NULL, '$2y$10$UVasudyChbSkFOwjN3LV/eIA9HCYgmtKKRwLrWidd3/A/jkZyyrVS', NULL, '2023-03-11 01:39:36', '2023-03-11 01:39:36', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookimage`
--
ALTER TABLE `bookimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customeraddress`
--
ALTER TABLE `customeraddress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customertype`
--
ALTER TABLE `customertype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id_employee`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderstatus`
--
ALTER TABLE `orderstatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `paymentmethod`
--
ALTER TABLE `paymentmethod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `shippingmethod`
--
ALTER TABLE `shippingmethod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `bookimage`
--
ALTER TABLE `bookimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customeraddress`
--
ALTER TABLE `customeraddress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customertype`
--
ALTER TABLE `customertype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id_employee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderstatus`
--
ALTER TABLE `orderstatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paymentmethod`
--
ALTER TABLE `paymentmethod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shippingmethod`
--
ALTER TABLE `shippingmethod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
