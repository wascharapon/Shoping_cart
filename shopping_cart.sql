-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2019 at 03:34 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cosmentic`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `text_story` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `text_story`) VALUES
(1, '<p style=\"text-align:center\"><span style=\"font-size:28px\"><u><kbd>โรงงานรับผลิตเครื่องสำอาง ภายใต้มาตารฐาน อาเซียน GMP เครื่องสำอาง</kbd></u></span></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p style=\"text-align:center\"><input alt=\"\" src=\"https://www.thecosmetics.co.th//images/banners/AW_THE_COS_BANNER_06_01.jpg\" style=\"border-style:solid; border-width:1px; height:395px; width:733px\" type=\"image\" /></p>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<p><span style=\"font-size:20px\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; บริษัท ประกายเทพ คอสเมติก จำกัด เราเป็นหนึ่งในผู้นำ โรงงานผลิตครีมบำรุงผิว,&nbsp;</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:20px\">เวชสำอาง และสปาชั้นนำที่มีคุณภาพ ในรูปแบบ&nbsp;OEM (Original Equipment Manufacturer)&nbsp;</span></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(100) NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL,
  `this_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `img`, `this_time`) VALUES
(15, '1555836456.jpg', '2019-04-21'),
(16, '1555836947.jpg', '2019-04-21');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `username` text COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `status` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', '1', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `total` float NOT NULL,
  `social` text COLLATE utf8_unicode_ci NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL,
  `status` text COLLATE utf8_unicode_ci NOT NULL,
  `this_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(100) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `detail` text COLLATE utf8_unicode_ci NOT NULL,
  `full_detail` text COLLATE utf8_unicode_ci NOT NULL,
  `img` text COLLATE utf8_unicode_ci NOT NULL,
  `category` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `detail`, `full_detail`, `img`, `category`) VALUES
(8, 'เรฟลอน คัลเลอร์สเตย์ เมคอัพ #150 บัฟ', 464, 'ใช้ฉีด', '', '1555837085.jpg', 'น้ำหอม'),
(9, 'ลอรีอัล ปารีส รูจ ซิกเนเจอร์ 7 มล.#124 ไอ เอมเบรส', 299, 'ทาปาก', '', '1555837184.jpg', 'ลิปสติก'),
(10, 'การ์นิเย่ สกิน แนทเชอรัลส์ ไฮดร้า บอม อาย เซรั่ม มาส์ก ไลน์ ', 69, 'ทาหน้า', '', '1555837249.jpg', 'มาสก์หน้า'),
(11, 'การ์นิเย่ สกิน แนทเชอรัลส์ วิตามิน ซี ช็อต เฟรช-มิกซ์ บูสเตอร์ ', 79, 'ทาหน้า', '', '1555837310.jpg', 'มาสก์หน้า'),
(12, 'การ์นิเย่ สกิน แนทเชอรัลส์ ไฮยาลูรอน ช็อต เฟรช-มิกซ์ บูสเตอร์', 79, 'ทาหน้า', '', '1555837338.jpg', 'มาสก์หน้า'),
(13, 'อาวีโน่ เดลี่ มอยส์เจอร์ไรซิ่ง โลชั่น ขนาด30มล', 79, 'ล้างหน้า', '', '1555837378.jpg', 'โฟมล้างหน้า'),
(14, 'One Touch วันทัช มิกซ์ 3', 60, 'test', '', '1555837523.jpg', 'ถุงยางอนามัย');

-- --------------------------------------------------------

--
-- Table structure for table `real_user`
--

CREATE TABLE `real_user` (
  `id_real` int(110) NOT NULL,
  `user_name` text COLLATE utf8_unicode_ci NOT NULL,
  `buy_item` int(254) NOT NULL,
  `token` int(254) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `real_user`
--
ALTER TABLE `real_user`
  ADD PRIMARY KEY (`id_real`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `real_user`
--
ALTER TABLE `real_user`
  MODIFY `id_real` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
