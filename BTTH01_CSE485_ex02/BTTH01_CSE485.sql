-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2023 at 06:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btth01_cse485`
--

-- --------------------------------------------------------

--
-- Table structure for table `baiviet_data`
--

CREATE TABLE `baiviet_data` (
  `ma_bviet` int(10) UNSIGNED NOT NULL,
  `tieude` varchar(200) NOT NULL,
  `ten_bhat` varchar(100) NOT NULL,
  `ma_tloai` int(10) UNSIGNED NOT NULL,
  `tomtat` varchar(200) NOT NULL,
  `noidung` varchar(100) DEFAULT NULL,
  `ma_tgia` int(10) UNSIGNED NOT NULL,
  `ngayviet` datetime NOT NULL DEFAULT current_timestamp(),
  `hinhanh` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `username`, `email`, `password`) VALUES
(1, 'nivanshintsev0', 'kdymoke0@skyrock.com', 'iO6$}PSM'),
(2, 'vdikle1', 'jskett1@nifty.com', 'xF3@6{lG'),
(3, 'cmallaby2', 'dlerohan2@bigcartel.com', 'bS8,CPPSY'),
(4, 'srousel3', 'npoppleton3@adobe.com', 'yC2.`KFM$MiYpz'),
(5, 'rdummer4', 'eoffer4@tinyurl.com', 'iG4!F4A2IL'),
(6, 'wschult5', 'aohern5@chicagotribune.com', 'vZ8~?\"Ghl8kx\'='),
(7, 'jshwalbe6', 'nmoughton6@jimdo.com', 'iG6?7Yn?~9d_Y'),
(8, 'vsimister7', 'djenkin7@acquirethisname.com', 'wY6@!qeTP\"'),
(9, 'esparrowe8', 'elegalle8@nationalgeographic.c', 'nO5/1!lojz'),
(10, 'kply9', 'mcrispin9@bing.com', 'sH6!RU$YMKa'),
(11, 'vfittona', 'wbenjefielda@arizona.edu', 'hJ9$y{/lu'),
(12, 'slimeburnb', 'cbottrillb@ask.com', 'wU9(G8kFG1Ee#&o'),
(13, 'bhortc', 'bunwinsc@skyrock.com', 'gS3@|6@7'),
(14, 'jhatzd', 'wbeckettd@ebay.co.uk', 'xM5.oVOrk69_G'),
(15, 'rsummersidee', 'pnelliese@china.com.cn', 'eE7%GstWVFt~aT+'),
(16, 'grousself', 'cschultzf@noaa.gov', 'gJ3.0LmVJB'),
(17, 'gminerog', 'btealeg@addthis.com', 'bG9~O.FE!b3M'),
(18, 'cbassonh', 'sculverh@irs.gov', 'lZ4?ly2x!*~'),
(19, 'hspillardi', 'rvardoni@i2i.jp', 'iI9.>(E}27}=#+'),
(20, 'cfairburnej', 'mschwandnerj@vistaprint.com', 'yO9@WZG|fP\"k~'),
(21, 'htinsleyk', 'ddavsonk@mashable.com', 'iU3)iZpBfK|<Qb'),
(22, 'fdeglanvillel', 'mhowell@indiatimes.com', 'wS1\'/AI~K#++\"'),
(23, 'mgimletm', 'blarkcumm@mozilla.com', 'lW6!}\'K{'),
(24, 'ucollabinen', 'adymottn@abc.net.au', 'mJ5>g)ux'),
(25, 'apickringo', 'ichiverstoneo@si.edu', 'yF0/6}NA\"'),
(27, 'hiendt', 'hienzzz2013@gmail.com', 'Hien151003@');

-- --------------------------------------------------------

--
-- Table structure for table `tacgia_data`
--

CREATE TABLE `tacgia_data` (
  `ma_tacgia` int(10) UNSIGNED NOT NULL,
  `ten_tgia` varchar(100) NOT NULL,
  `hinh_tacgia` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `theloai_data`
--

CREATE TABLE `theloai_data` (
  `ma_tloai` int(10) UNSIGNED NOT NULL,
  `ten_tloai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `theloai_data`
--

INSERT INTO `theloai_data` (`ma_tloai`, `ten_tloai`) VALUES
(1, 'Nhạc bolero'),
(3, 'Nhạc thiếu nhi'),
(5, 'Nhạc rap');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baiviet_data`
--
ALTER TABLE `baiviet_data`
  ADD PRIMARY KEY (`ma_bviet`),
  ADD KEY `baiviet_theloai` (`ma_tloai`),
  ADD KEY `baiviet_tacgia` (`ma_tgia`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tacgia_data`
--
ALTER TABLE `tacgia_data`
  ADD PRIMARY KEY (`ma_tacgia`);

--
-- Indexes for table `theloai_data`
--
ALTER TABLE `theloai_data`
  ADD PRIMARY KEY (`ma_tloai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baiviet_data`
--
ALTER TABLE `baiviet_data`
  MODIFY `ma_bviet` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tacgia_data`
--
ALTER TABLE `tacgia_data`
  MODIFY `ma_tacgia` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `theloai_data`
--
ALTER TABLE `theloai_data`
  MODIFY `ma_tloai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baiviet_data`
--
ALTER TABLE `baiviet_data`
  ADD CONSTRAINT `baiviet_tacgia` FOREIGN KEY (`ma_tgia`) REFERENCES `tacgia_data` (`ma_tacgia`),
  ADD CONSTRAINT `baiviet_theloai` FOREIGN KEY (`ma_tloai`) REFERENCES `theloai_data` (`ma_tloai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
