-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 08, 2016 at 07:56 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barter`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(900) NOT NULL,
  `status` int(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `value`, `image`, `description`, `status`, `username`) VALUES
(1, 'macbook', '414', 'maxresdefault.jpg', 'It''s pr0', 1, 'd'),
(4, 'Bat', '467', 'bat.jpg', 'hehe', 1, 'b'),
(5, 'Pen', '500', 'pencover.jpg', 'dff', 1, 'a'),
(6, 'iphone 7 ', '3000', 'i7.jpg', 'i7', 1, '3');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `name`, `status`, `ip`, `time`) VALUES
(1, 'sk', '', 'Successful', '127.0.0.1', '2016-07-06 07:57:39 PM'),
(2, 'sk', 'kanwar', 'Successful', '127.0.0.1', '2016-07-06 07:59:04 PM'),
(3, 'sk', 'kanwar', 'Successful', '127.0.0.1', '2016-07-06 07:59:46 PM'),
(4, 'sk', 'kanwar', 'Successful', '127.0.0.1', '2016-07-06 08:01:00 PM'),
(5, 'sk', 'kanwar', 'Successful', '127.0.0.1', '2016-07-06 08:10:59 PM'),
(6, 'sk', 'kanwar', 'Successful', '127.0.0.1', '2016-07-06 08:11:37 PM'),
(7, 'sk', 'kanwar', 'Successful', '127.0.0.1', '2016-07-06 08:12:41 PM'),
(8, 'sk', 'kanwar', 'Successful', '127.0.0.1', '2016-07-06 08:12:55 PM'),
(9, 'sk', 'kanwar', 'Successful', '127.0.0.1', '2016-07-06 08:13:16 PM'),
(10, 'sk', 'kanwar', 'Successful', '127.0.0.1', '2016-07-06 08:13:29 PM'),
(11, 'sk', 'kanwar', 'Successful', '127.0.0.1', '2016-07-07 08:02:20 AM'),
(12, 'sk', 'kanwar', 'Successful', '127.0.0.1', '2016-07-07 09:59:18 AM'),
(13, 'sk', 'kanwar', 'Successful', '127.0.0.1', '2016-07-07 01:13:01 PM'),
(14, 'sk', 'kanwar', 'Successful', '127.0.0.1', '2016-07-07 08:16:12 PM'),
(15, 'rohilk', 'rohil', 'Successful', '127.0.0.1', '2016-09-03 05:45:49 PM'),
(16, 'sk', 'sk', 'Successful', '127.0.0.1', '2016-10-01 08:12:16 PM'),
(17, 'rk', 'rk', 'Successful', '127.0.0.1', '2016-11-14 09:30:19 PM'),
(18, 'rk', 'rk', 'Successful', '182.68.217.242', '2016-11-15 12:36:03 AM'),
(19, 'rk', 'rk', 'Successful', '182.68.217.242', '2016-11-15 12:36:09 AM'),
(20, 'rk', 'rk', 'Successful', '103.248.94.82', '2016-11-15 01:06:11 PM'),
(21, 'rk', 'rk', 'Successful', '103.248.94.82', '2016-11-15 01:06:20 PM'),
(22, 'rk', 'rk', 'Successful', '182.68.217.242', '2016-11-15 03:36:31 PM'),
(23, 'rk', 'rk', 'Successful', '182.68.217.242', '2016-11-15 03:36:37 PM'),
(24, 'rk', 'rk', 'Successful', '127.0.0.1', '2016-11-17 11:47:50 PM'),
(25, 'rk', 'rk', 'Successful', '127.0.0.1', '2016-12-02 08:54:32 PM'),
(26, 'user', 'user', 'Successful', '127.0.0.1', '2016-12-02 09:13:13 PM'),
(27, 'admin', 'admin', 'Successful', '127.0.0.1', '2016-12-02 09:13:18 PM'),
(28, 'user', 'user', 'Successful', '127.0.0.1', '2016-12-02 09:15:11 PM'),
(29, 'admin', 'admin', 'Successful', '127.0.0.1', '2016-12-02 09:15:25 PM'),
(30, 'user', 'user', 'Successful', '127.0.0.1', '2016-12-02 09:15:48 PM'),
(31, 'user', 'user', 'Successful', '127.0.0.1', '2016-12-03 02:05:38 PM'),
(32, 'admin', 'admin', 'Successful', '127.0.0.1', '2016-12-03 05:39:15 PM'),
(33, 'admin', 'admin', 'Successful', '127.0.0.1', '2016-12-03 05:39:39 PM'),
(34, 'admin', 'admin', 'Successful', '127.0.0.1', '2016-12-03 05:40:03 PM'),
(35, 'user', 'user', 'Successful', '127.0.0.1', '2016-12-03 05:40:25 PM'),
(36, 'user', 'user', 'Successful', '127.0.0.1', '2016-12-04 11:38:45 AM'),
(37, 'admin', 'admin', 'Successful', '127.0.0.1', '2016-12-04 06:34:16 PM'),
(38, 'a', 'a', 'Successful', '127.0.0.1', '2016-12-04 06:35:19 PM'),
(39, 'a', 'a', 'Successful', '127.0.0.1', '2016-12-05 07:44:06 PM'),
(40, 'a', 'a', 'Successful', '127.0.0.1', '2016-12-06 07:57:18 AM'),
(41, 'a', 'a', 'Successful', '127.0.0.1', '2016-12-06 08:01:03 AM'),
(42, 'a', 'a', 'Successful', '127.0.0.1', '2016-12-06 10:32:23 AM'),
(43, 'a', 'a', 'Successful', '127.0.0.1', '2016-12-06 11:24:40 AM'),
(44, 'a', 'a', 'Successful', '127.0.0.1', '2016-12-06 09:23:33 PM'),
(45, 'a', 'a', 'Successful', '127.0.0.1', '2016-12-06 09:34:43 PM'),
(46, 'a', 'a', 'Successful', '127.0.0.1', '2016-12-07 07:56:53 AM'),
(47, 'a', 'a', 'Successful', '127.0.0.1', '2016-12-07 06:12:47 PM'),
(48, 'admin', 'admin', 'Successful', '127.0.0.1', '2016-12-07 08:39:24 PM'),
(49, 'admin', 'admin', 'Successful', '127.0.0.1', '2016-12-07 08:40:18 PM'),
(50, 'admin', 'admin', 'Successful', '127.0.0.1', '2016-12-07 09:10:24 PM'),
(51, 'a', 'a', 'Successful', '127.0.0.1', '2016-12-08 12:56:13 AM'),
(52, 'b', 'b', 'Successful', '127.0.0.1', '2016-12-08 12:59:13 AM'),
(53, 'admin', 'admin', 'Successful', '127.0.0.1', '2016-12-08 12:59:31 AM'),
(54, 'a', 'a', 'Successful', '127.0.0.1', '2016-12-08 01:15:10 AM'),
(55, 'a', 'a', 'Successful', '127.0.0.1', '2016-12-08 01:32:23 AM'),
(56, 'admin', 'admin', 'Successful', '127.0.0.1', '2016-12-08 01:35:49 AM'),
(57, 'a', 'a', 'Successful', '127.0.0.1', '2016-12-08 01:35:58 AM'),
(58, 'admin', 'admin', 'Successful', '127.0.0.1', '2016-12-08 01:39:21 AM'),
(59, 'd', 'd', 'Successful', '127.0.0.1', '2016-12-08 08:53:39 AM'),
(60, 'admin', 'admin', 'Successful', '127.0.0.1', '2016-12-08 08:53:49 AM'),
(61, 'f', 'f', 'Successful', '127.0.0.1', '2016-12-08 08:59:22 AM'),
(62, 'f', 'f', 'Successful', '127.0.0.1', '2016-12-08 08:59:51 AM'),
(63, 'a', 'a', 'Successful', '127.0.0.1', '2016-12-08 09:00:00 AM'),
(64, 'admin', 'admin', 'Successful', '127.0.0.1', '2016-12-08 09:01:39 AM'),
(65, 'f', 'f', 'Successful', '127.0.0.1', '2016-12-08 09:10:12 AM'),
(66, 'a', 'a', 'Successful', '127.0.0.1', '2016-12-08 10:19:19 AM'),
(67, 'a', 'a', 'Successful', '127.0.0.1', '2016-12-08 10:19:29 AM'),
(68, 'admin', 'admin', 'Successful', '127.0.0.1', '2016-12-08 10:20:02 AM'),
(69, 'a', 'a', 'Successful', '127.0.0.1', '2016-12-08 10:48:14 AM'),
(70, 'admin', 'admin', 'Successful', '127.0.0.1', '2016-12-08 11:12:48 AM'),
(71, 'a', 'a', 'Successful', '127.0.0.1', '2016-12-08 11:18:56 AM'),
(72, 'admin', 'admin', 'Successful', '127.0.0.1', '2016-12-08 11:34:25 AM'),
(73, 'a', 'a', 'Successful', '127.0.0.1', '2016-12-08 11:34:56 AM'),
(74, 'admin', 'admin', 'Successful', '127.0.0.1', '2016-12-08 11:35:40 AM'),
(75, 'a', 'a', 'Successful', '127.0.0.1', '2016-12-08 11:37:34 AM'),
(76, 'admin', 'admin', 'Successful', '192.168.221.1', '2016-12-08 11:39:20 AM'),
(77, 'a', 'a', 'Successful', '127.0.0.1', '2016-12-08 12:19:30 PM');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(255) NOT NULL,
  `forusername1` varchar(800) NOT NULL,
  `forusername2` varchar(800) NOT NULL,
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(255) NOT NULL,
  `username` varchar(800) NOT NULL,
  `myitem1` varchar(800) NOT NULL,
  `myitem2` varchar(800) NOT NULL,
  `myitem3` varchar(800) NOT NULL,
  `myitem4` varchar(800) NOT NULL,
  `myitem5` varchar(800) NOT NULL,
  `tradeusername` varchar(800) NOT NULL,
  `tradeitem1` varchar(800) NOT NULL,
  `tradeitem2` varchar(800) NOT NULL,
  `tradeitem3` varchar(800) NOT NULL,
  `tradeitem4` varchar(800) NOT NULL,
  `tradeitem5` varchar(800) NOT NULL,
  `status` int(255) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `username`, `myitem1`, `myitem2`, `myitem3`, `myitem4`, `myitem5`, `tradeusername`, `tradeitem1`, `tradeitem2`, `tradeitem3`, `tradeitem4`, `tradeitem5`, `status`) VALUES
(1, 'a', 'Trimax Gold', 'Pen', '', '', '', 'a', 'book', 'Scale', '', '', '', 2),
(3, 'a', '', '', '', '', '', 'd', '', '', '', '', '', 1),
(4, 'a', 'Trimax Gold', 'Pen', '', '', '', 'b', 'book', '', '', '', '', 3),
(5, 'b', 'Trimax Gold', '', '', '', '', 'a', 'Scale', '', '', '', '', 3),
(6, 'a', 'Bat', '', '', '', '', 'b', 'book', 'Pen', '', '', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `uid` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `usertype` int(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `date` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`uid`, `username`, `password`, `name`, `usertype`, `ip`, `date`) VALUES
(42459370, 'a', '0cc175b9c0f1b6a831c399e269772661', 'a', 1, '127.0.0.1', ''),
(60689410, 'f', '8fa14cdd754f91cc6554c9e71929cce7', 'f', 1, '127.0.0.1', ''),
(77375073, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 2, '127.0.0.1', '2016-12-03 15:57:05.506715'),
(80466011, 'z', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 1, '127.0.0.1', ''),
(93158153, 'b', '92eb5ffee6ae2fec3ad71c777531578f', 'b', 1, '127.0.0.1', ''),
(93976448, 'd', '8277e0910d750195b448797616e091ad', 'd', 1, '127.0.0.1', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75656885;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
