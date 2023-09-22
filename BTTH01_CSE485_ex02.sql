-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2023 at 06:56 PM
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
-- Database: `btth01_cse485_ex02`
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
