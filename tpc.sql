-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 04:04 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tpc`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(10) NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `court_num` int(5) NOT NULL COMMENT '1=ເດີ່ນໃນຮົ່ມ 2=ເດີ່ນກາງແຈ້ງ ',
  `date_booking` date NOT NULL,
  `time_booking` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `price_court` float(10,2) NOT NULL,
  `price` float(10,2) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1 COMMENT '1=ລໍຖ້າການກວດສອບ 2=ກວດສອບແລ້ວ 3 ຖືກປະຕິເສດ',
  `slip_payment` text COLLATE utf8_unicode_ci NOT NULL,
  `ntf` int(2) NOT NULL DEFAULT 0,
  `date_save` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `username`, `court_num`, `date_booking`, `time_booking`, `price_court`, `price`, `status`, `slip_payment`, `ntf`, `date_save`) VALUES
(2, 'maxkee', 1, '2022-07-28', '18:00-19:00', 400000.00, 400000.00, 2, '2.jpeg', 1, '2022-08-13 07:20:38'),
(3, 'kong', 1, '2022-07-30', '11:00-12:00', 380000.00, 380000.00, 2, '2.jpeg', 1, '2022-08-08 08:55:39'),
(4, 'maxkee', 1, '2022-07-30', '19:00-20:00', 400000.00, 400000.00, 2, '6.jpeg', 1, '2022-08-07 04:29:42'),
(15, 'kong', 2, '2022-07-01', '15:00-16:00', 280000.00, 280000.00, 2, '4.jpeg', 1, '2022-08-17 07:19:17'),
(16, 'maxkee', 1, '2022-07-04', '13:00-14:00', 320000.00, 320000.00, 2, '5.jpeg', 1, '2022-08-17 11:33:08'),
(17, 'kong', 1, '2022-07-09', '08:00-09:00', 320000.00, 320000.00, 2, '3.jpeg', 1, '2022-08-17 11:33:30'),
(18, 'maxkee', 1, '2022-07-09', '13:00-14:00', 320000.00, 320000.00, 1, '6.jpeg', 1, '2022-08-09 13:57:02'),
(19, 'maxkee', 1, '2022-07-12', '10:00-11:00', 320000.00, 320000.00, 1, '5.jpeg', 1, '2022-08-09 13:57:09'),
(20, 'kolo', 1, '2022-07-20', '15:00-16:00', 320000.00, 320000.00, 1, '2.jpeg', 1, '2022-08-09 13:57:17'),
(21, 'maxkee', 2, '2022-07-20', '16:00-17:00', 280000.00, 280000.00, 1, '3.jpeg', 1, '2022-08-09 13:57:10'),
(22, 'noum', 2, '2022-08-01', '10:00-11:00', 280000.00, 280000.00, 1, '6.jpeg', 1, '2022-08-09 13:57:21'),
(23, 'noum', 1, '2022-08-02', '14:00-15:00', 320000.00, 320000.00, 1, '5.jpeg', 1, '2022-08-09 13:57:12'),
(24, 'maxkee', 2, '2022-08-04', '15:00-16:00', 280000.00, 280000.00, 1, '6.jpeg', 1, '2022-08-09 13:57:05'),
(26, 'kong', 2, '2022-08-05', '12:00-13:00', 280000.00, 280000.00, 1, '6.jpeg', 1, '2022-08-09 14:33:01'),
(27, 'maxkee', 1, '2022-08-07', '09:00-10:00', 320000.00, 320000.00, 1, '6.jpeg', 1, '2022-08-10 02:19:07'),
(28, 'kong', 1, '2022-08-08', '18:00-19:00', 400000.00, 400000.00, 1, '3.jpeg', 1, '2022-08-09 13:57:14'),
(29, 'noum', 1, '2022-08-09', '21:00-22:00', 400000.00, 400000.00, 2, '3.jpeg', 1, '2022-08-10 02:19:10'),
(31, 'maxkee', 1, '2022-08-09', '13:00-14:00', 320000.00, 320000.00, 2, '4.jpeg', 1, '2022-08-10 02:19:15'),
(32, 'maxkee', 1, '2022-08-09', '15:00-16:00', 320000.00, 320000.00, 2, '6.jpeg', 1, '2022-08-10 02:19:13'),
(33, 'kong', 1, '2022-08-09', '20:00-21:00', 400000.00, 400000.00, 2, '5.jpeg', 1, '2022-08-10 02:19:18'),
(34, 'maxkee', 1, '2022-08-09', '08:00-09:00', 320000.00, 320000.00, 2, '2.jpeg', 1, '2022-08-09 14:25:14'),
(36, 'hum', 1, '2022-08-10', '15:00-16:00', 320000.00, 320000.00, 2, '6.jpeg', 1, '2022-08-10 02:22:18'),
(37, 'hum', 2, '2022-08-10', '17:00-18:00', 280000.00, 280000.00, 2, '5.jpeg', 1, '2022-08-10 02:23:14'),
(38, 'Ma', 1, '2022-08-10', '20:00-21:00', 400000.00, 400000.00, 2, '6.jpeg', 1, '2022-08-10 03:58:37'),
(39, 'maxkee', 1, '2022-08-15', '20:00-21:00', 400000.00, 400000.00, 2, '2.jpeg', 1, '2022-08-15 03:04:07'),
(41, 'maxkee', 2, '2022-08-15', '14:00-15:00', 280000.00, 50000.00, 2, '2.jpeg', 1, '2022-08-15 03:35:31'),
(42, 'maxkee', 1, '2022-08-15', '14:00-15:00', 320000.00, 320000.00, 2, '5.jpeg', 1, '2022-08-16 06:32:19'),
(43, 'maxkee', 1, '2022-08-16', '11:00-12:00', 320000.00, 320000.00, 1, '3.jpeg', 1, '2022-08-17 07:21:14'),
(44, 'maxkee', 2, '2022-08-17', '20:00-21:00', 300000.00, 300000.00, 2, '2.jpeg', 1, '2022-08-17 07:22:02'),
(45, 'maxkee', 1, '2022-11-01', '09:00-10:00', 320000.00, 320000.00, 2, 'WhatsApp Image 2022-10-31 at 09.59.17.jpeg', 1, '2022-11-01 04:51:51'),
(46, 'maxkee', 2, '2022-11-01', '15:00-16:00', 280000.00, 50000.00, 1, 'wp10306439-asus-tuf-a15-wallpapers.jpg', 1, '2022-11-03 06:31:18'),
(47, 'maxkee', 1, '2023-01-04', '18:00-19:00', 400000.00, 400000.00, 1, '', 0, '2023-01-04 05:21:11'),
(48, 'maxkee', 1, '2023-01-04', '18:00-19:00', 400000.00, 400000.00, 1, '', 0, '2023-01-04 05:21:15'),
(49, 'maxkee', 2, '2023-01-11', '20:00-21:00', 300000.00, 300000.00, 2, '324083690_1212835479637775_913313211542601757_n.jpg', 1, '2023-01-11 05:58:27'),
(50, 'maxkee', 1, '2023-01-11', '18:00-19:00', 400000.00, 50000.00, 2, '—Pngtree—formal wear free png and_4766634.png', 0, '2023-01-11 06:06:40'),
(51, 'bounma', 1, '2023-03-21', '16:00-17:00', 320000.00, 320000.00, 2, 'logo DNY.jpg', 0, '2023-03-21 02:25:40');

-- --------------------------------------------------------

--
-- Table structure for table `court`
--

CREATE TABLE `court` (
  `id` int(5) NOT NULL,
  `court_num` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT '1=ເດີ່ນໃນຮົ່ມ 2=ເດີ່ນກາງແຈ້ງ ',
  `court_detail` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `date_save` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `court`
--

INSERT INTO `court` (`id`, `court_num`, `court_detail`, `date_save`) VALUES
(1, '1', 'ເດີ່ນໃນຮົ່ມ', '2022-08-02 07:46:38'),
(2, '2', 'ເດີ່ນກາງແຈ້ງ', '2022-08-09 13:51:14');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tel` int(20) NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date_save` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `username`, `name`, `tel`, `address`, `password`, `date_save`) VALUES
(1, 'maxkee', 'ແມັກກີ່ ສີສົມສຸກ', 2054873879, 'ນາຍາງ ເມືອງນາຊາຍທອງ', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2022-07-29 02:30:32'),
(2, 'kong', 'ກ້ອງຫຼ້າ', 2022121212, 'ນ້ຳກ້ຽງ', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2022-08-09 07:24:15'),
(3, 'Binly', 'ແບັນລີ່', 2055443322, 'ນາຊອນ', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2022-07-14 08:22:38'),
(5, 'TPC', 'ທິບອັກສອນ ພອນສະຫວັນ', 2022223344, 'ອີ່ໄລໃຕ້', '7b52009b64fd0a2a49e6d8a939753077792b0554', '2022-08-01 08:20:52'),
(6, 'Noum', 'ໄຊປະສິດ ວໍລະຈິດ', 2054990800, 'ນາຊັບ', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2022-07-05 14:17:50'),
(7, 'kolo', 'ໂຄໂລ່ ໄຊຍະລາດ', 2099121415, 'ບ້ານ ອີ່ໄລໃຕ້', 'e189f5ff224e6e2bd0c87d9983cfde5f30790d70', '2022-07-17 12:55:03'),
(8, 'Kham', 'ບຸນຄ້ຳ ບົວຄະສິດ', 2056375504, 'ບ້ານ ດົງໂດກ ເມືອງໄຊທານີ', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2022-08-04 06:04:20'),
(10, 'hum', 'ຫຸມພັນ', 2022221234, 'ນ້ຳກ້ຽງ', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2022-08-10 02:17:24'),
(11, 'Ma', 'ພູທອນ', 2099121123, 'ດົງໂດກ', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2022-08-10 03:55:07'),
(14, 'bounma', 'Boun ma', 2054545423, 'Nathong', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2023-03-21 02:22:52');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tel` int(20) NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(2) NOT NULL,
  `date_save` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `fullname`, `gender`, `tel`, `address`, `email`, `password`, `status`, `date_save`) VALUES
(1, 'ແມັກກີ່ ສີສົມສຸກ', 'ຊາຍ', 2054873879, 'ບ ນາຍາງ ເມືອງ ນາຊາຍທອງ ນະຄອນຫຼວງ', 'maxdev@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1, '2023-01-04 05:44:42'),
(2, 'ໄຊປະສິດ ວໍລະຈິດ', 'ຊາຍ', 2091628555, 'ບ ອີ່່ໄລໃຕ້ ເມືອງ ນາຊາຍທອງ ນະຄອນຫຼວງ', 'noum@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 2, '2022-08-11 13:28:34'),
(9, 'ນ ສົມສີ ແສງຈັນສີ', 'ຍິງ', 2099121222, 'ນາຊັບ  ເມືອງ ນາຊາຍທອງ ນະຄອນຫຼວງ', 'somsy@gmail.com', '209d5fae8b2ba427d30650dd0250942af944a0c9', 2, '2022-08-09 14:32:46'),
(11, 'ນ  ມະນີ ແສງຈັນທາ', 'ຍິງ', 2058756644, 'ໜອງຄັນຄູ', 'manee210@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2, '2023-01-04 05:48:53');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(10) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0,
  `date_create` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `message`, `status`, `date_create`) VALUES
(1, 'phone', 'kk@gmail.com', 'weret', 1, '2022-11-02 12:37:52'),
(2, 'Aliya', 'a@gmail.com', 'dsadsf', 0, '2022-11-02 12:38:37'),
(3, 'Xam', 'admin@gmail.com', 'gfhh', 0, '2022-11-02 12:39:55'),
(4, 'kee', 'maxsisomsouk@gmail.com', 'ສະບາຍດີ', 0, '2022-11-02 12:44:54'),
(5, 'john carter', 'somsy@gmail.com', 'Hello', 0, '2022-11-02 13:14:08'),
(6, 'john carter', 'somsy@gmail.com', 'Hello my name is john\r\n', 0, '2022-11-02 13:14:33'),
(7, 'Jack', 'kk@gmail.com', 'I can not booking court1', 0, '2023-03-21 09:34:25');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `id` int(10) NOT NULL,
  `time_id` int(10) NOT NULL,
  `price_court1` float(10,2) NOT NULL,
  `price_court2` float(10,2) NOT NULL,
  `court1` int(2) NOT NULL DEFAULT 1,
  `court2` int(2) NOT NULL DEFAULT 2,
  `date_save` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id`, `time_id`, `price_court1`, `price_court2`, `court1`, `court2`, `date_save`) VALUES
(1, 1, 320000.00, 280000.00, 1, 2, '2022-08-09 07:26:24'),
(2, 2, 320000.00, 280000.00, 1, 2, '2022-08-02 07:47:06'),
(3, 3, 320000.00, 280000.00, 1, 2, '2022-08-02 07:49:10'),
(4, 4, 320000.00, 280000.00, 1, 2, '2022-08-02 07:49:17'),
(5, 5, 320000.00, 280000.00, 1, 2, '2022-08-02 07:49:23'),
(6, 6, 320000.00, 280000.00, 1, 2, '2022-08-02 07:49:29'),
(7, 7, 320000.00, 280000.00, 1, 2, '2022-08-02 07:49:35'),
(8, 8, 320000.00, 280000.00, 1, 2, '2022-08-02 07:49:41'),
(9, 9, 320000.00, 280000.00, 1, 2, '2022-08-02 07:49:47'),
(10, 10, 320000.00, 280000.00, 1, 2, '2022-08-02 07:50:01'),
(11, 11, 400000.00, 300000.00, 1, 2, '2022-08-02 07:50:27'),
(12, 12, 400000.00, 300000.00, 1, 2, '2022-08-02 07:50:38'),
(13, 13, 400000.00, 300000.00, 1, 2, '2022-08-02 07:50:45'),
(14, 14, 400000.00, 300000.00, 1, 2, '2022-08-02 07:50:52');

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `time_id` int(10) NOT NULL,
  `time` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `date_save` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`time_id`, `time`, `date_save`) VALUES
(1, '08:00-09:00', '2022-08-02 07:42:02'),
(2, '09:00-10:00', '2022-08-02 07:42:02'),
(3, '10:00-11:00', '2022-08-02 07:42:02'),
(4, '11:00-12:00', '2022-08-02 07:42:02'),
(5, '12:00-13:00', '2022-08-02 07:42:02'),
(6, '13:00-14:00', '2022-08-02 07:42:02'),
(7, '14:00-15:00', '2022-08-02 07:42:02'),
(8, '15:00-16:00', '2022-08-02 07:42:02'),
(9, '16:00-17:00', '2022-08-02 07:42:02'),
(10, '17:00-18:00', '2022-08-02 07:42:02'),
(11, '18:00-19:00', '2022-08-02 07:42:02'),
(12, '19:00-20:00', '2022-08-02 07:42:02'),
(13, '20:00-21:00', '2022-08-02 07:42:02'),
(14, '21:00-22:00', '2022-08-02 07:42:02');

-- --------------------------------------------------------

--
-- Table structure for table `time1`
--

CREATE TABLE `time1` (
  `time_id` int(10) NOT NULL,
  `time` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `price_court1` float(10,2) NOT NULL,
  `price_court2` float(10,2) NOT NULL,
  `date_save` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `time1`
--

INSERT INTO `time1` (`time_id`, `time`, `price_court1`, `price_court2`, `date_save`) VALUES
(1, '08:00-09:00', 320000.00, 280000.00, '2023-01-12 04:01:34'),
(2, '09:00-10:00', 320000.00, 280000.00, '2023-01-12 03:51:00'),
(3, '10:00-11:00', 320000.00, 280000.00, '2023-01-12 03:51:04'),
(4, '11:00-12:00', 320000.00, 280000.00, '2023-01-12 03:51:07'),
(5, '12:00-13:00', 320000.00, 280000.00, '2023-01-12 03:51:11'),
(6, '13:00-14:00', 320000.00, 280000.00, '2023-01-12 03:51:15'),
(7, '14:00-15:00', 320000.00, 280000.00, '2023-01-12 03:51:19'),
(8, '15:00-16:00', 320000.00, 280000.00, '2023-01-12 03:51:22'),
(9, '16:00-17:00', 320000.00, 280000.00, '2023-01-12 03:51:25'),
(10, '17:00-18:00', 320000.00, 280000.00, '2023-01-12 03:51:28'),
(11, '18:00-19:00', 400000.00, 300000.00, '2023-01-12 03:51:40'),
(12, '19:00-20:00', 400000.00, 300000.00, '2023-01-12 03:51:44'),
(13, '20:00-21:00', 400000.00, 300000.00, '2023-01-12 03:51:47'),
(14, '21:00-22:00', 400000.00, 300000.00, '2023-01-12 03:51:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `court`
--
ALTER TABLE `court`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `time_id` (`time_id`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`time_id`);

--
-- Indexes for table `time1`
--
ALTER TABLE `time1`
  ADD PRIMARY KEY (`time_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `court`
--
ALTER TABLE `court`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `time`
--
ALTER TABLE `time`
  MODIFY `time_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `time1`
--
ALTER TABLE `time1`
  MODIFY `time_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
