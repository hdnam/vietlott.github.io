-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2017 at 02:51 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vietlot`
--

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `contents` varchar(500) NOT NULL,
  `img` varchar(200) NOT NULL,
  `url` varchar(200) DEFAULT NULL,
  `ord` int(3) UNSIGNED DEFAULT NULL,
  `active` int(1) UNSIGNED DEFAULT NULL,
  `metakeyword` varchar(200) NOT NULL,
  `metadescription` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `name`, `contents`, `img`, `url`, `ord`, `active`, `metakeyword`, `metadescription`) VALUES
(1, 'Nội dung quảng cáo 2', '<p>\r\n	Nội dung quảng c&aacute;o 2</p>\r\n', 'data_uploads/tin_tuc/18518442_723572911159251_251558945_n.jpg', '#', 3, 1, '', ''),
(2, 'Nội dung quảng cáo 2', '<p>\r\n	Nội dung quảng c&aacute;o 2</p>\r\n', 'data_uploads/tin_tuc/bietthudonlap.jpg', '#', 1, 1, '', ''),
(6, 'Nội dung quảng cáo 1', '<p>\r\n	Nội dung quảng c&aacute;o 1</p>\r\n', 'data_uploads/tin_tuc/10251941_553230461460615_5946109191669762772_n.jpg', '#', 2, 1, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
