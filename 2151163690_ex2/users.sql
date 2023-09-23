-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2023 at 06:38 PM
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
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `role` enum('manager','admin','customer') NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `date_of_birth` date NOT NULL,
  `facebook_url` varchar(100) DEFAULT NULL,
  `twitter_url` varchar(100) DEFAULT NULL,
  `linkedin_url` varchar(100) DEFAULT NULL,
  `about_self` text DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `phone_number`, `role`, `gender`, `date_of_birth`, `facebook_url`, `twitter_url`, `linkedin_url`, `about_self`, `password`) VALUES
(1, 'Bren', 'Gullifant', 'bgullifant0', 'bgullifant0@cdc.gov', '7655222659', '', 'male', '2023-09-07', '', '', '', NULL, 'rI3}Dp=R'),
(2, 'Matteo', 'Clemencet', 'mclemencetk', 'mclemencetk@cnbc.com', '3204217606', '', 'male', '2023-04-03', '', '', '', NULL, 'nB1|Yj2S|doc=f'),
(3, 'Cymbre', 'Olander', 'colander1', 'colander1@wix.com', '8182168138', '', 'female', '2023-08-26', '', '', '', NULL, 'fQ1@E>h+rH#?!tv'),
(4, 'Emmalee', 'Dinnage', 'edinnage2', 'edinnage2@yandex.ru', '3473655407', '', 'female', '2023-06-07', '', '', '', NULL, 'eH8<tIJ\'RvO'),
(5, 'Ryley', 'Semechik', 'rsemechik3', 'rsemechik3@aol.com', '9923493177', '', 'male', '2023-09-13', '', '', '', NULL, 'sL6}zx61XfD'),
(6, 'Marja', 'Gherarducci', 'mgherarducci4', 'mgherarducci4@blogspot.com', '7289733679', '', 'female', '2023-04-23', '', '', '', NULL, 'gY9<y#ZZr'),
(7, 'Rennie', 'Vauter', 'rvauter5', 'rvauter5@google.com.au', '9468645504', '', 'female', '2022-09-28', '', '', '', NULL, 'sB1.mYJHa7msG'),
(8, 'Fiona', 'Kemmer', 'fkemmer6', 'fkemmer6@behance.net', '9286087981', '', 'female', '2023-03-14', '', '', '', NULL, 'vC3?Nh~|*'),
(9, 'Rollins', 'Tootell', 'rtootell7', 'rtootell7@ft.com', '2511182574', '', 'male', '2022-12-29', '', '', '', NULL, 'vJ5&&u+6u0DXzq'),
(10, 'Geoffry', 'Selland', 'gselland8', 'gselland8@toplist.cz', '7939375358', '', 'male', '2023-07-03', '', '', '', NULL, 'aC2\"$4%*2o}Dj4'),
(11, 'Sophie', 'Blunsen', 'sblunsen9', 'sblunsen9@toplist.cz', '5887625327', '', 'female', '2022-09-21', '', '', '', NULL, 'gK1&1Qw`O,Igi3?o'),
(12, 'Zechariah', 'Hadny', 'zhadnya', 'zhadnya@yandex.ru', '4719271830', '', 'male', '2023-02-04', '', '', '', NULL, 'xD9)<INn@5AP/?'),
(13, 'Caesar', 'Lincey', 'clinceyb', 'clinceyb@mail.ru', '9087044861', '', 'male', '2023-03-16', '', '', '', NULL, 'aG7$*98y0'),
(14, 'Stace', 'Kynforth', 'skynforthc', 'skynforthc@hatena.ne.jp', '7604182108', '', 'female', '2023-01-24', '', '', '', NULL, 'uO7\')OX.T9'),
(15, 'Rafaelia', 'Knott', 'rknottd', 'rknottd@hibu.com', '2916479309', '', 'female', '2023-03-10', '', '', '', NULL, 'kQ5<v*UD97'),
(16, 'Neville', 'Londer', 'nlondere', 'nlondere@alexa.com', '6733348109', '', 'male', '2023-02-25', '', '', '', NULL, 'oY9|qP6=6Zj@76'),
(17, 'Melony', 'Pendry', 'mpendryf', 'mpendryf@admin.ch', '4669605030', '', 'female', '2023-03-23', '', '', '', NULL, 'lF4$U\"qDHK\')'),
(18, 'Cully', 'Bythell', 'cbythellg', 'cbythellg@wired.com', '9228582193', '', 'male', '2023-08-16', '', '', '', NULL, 'eU1|q,.yC`fV`'),
(19, 'Alia', 'Cattlemull', 'acattlemullh', 'acattlemullh@marketwatch.com', '5155433476', '', 'female', '2023-09-11', '', '', '', NULL, 'pP1+w/?xN'),
(20, 'Vernon', 'Fowls', 'vfowlsi', 'vfowlsi@walmart.com', '6291311121', '', 'male', '2023-05-23', '', '', '', NULL, 'gY6|h\'lc06'),
(21, 'Alexio', 'Leddy', 'aleddyj', 'aleddyj@miibeian.gov.cn', '2783912089', '', 'male', '2023-04-11', '', '', '', NULL, 'cQ6+hE9Gwify'),
(23, 'Dao', 'Van Binh', 'anhonaseyo', '2013@gmail.com', '02385423355', 'admin', '', '2003-10-15', 'ahfa', 'àd', 'adf', 'shbja', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
