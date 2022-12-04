-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2022 at 03:33 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `d2022_337`
--

CREATE TABLE `d2022_337` (
  `id` int(7) NOT NULL,
  `room_id` int(7) DEFAULT NULL,
  `text` longtext COLLATE utf8mb4_bin DEFAULT NULL,
  `visible` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `d2022_337`
--

INSERT INTO `d2022_337` (`id`, `room_id`, `text`, `visible`) VALUES
(1, 101, '', 1),
(2, 101, '', 1),
(3, 101, '', 1),
(4, 102, '', 1),
(5, 102, '', 1),
(6, 102, '', 1),
(7, 103, '', 1),
(8, 103, '', 1),
(9, 103, '', 1),
(10, 104, '', 1),
(11, 104, '', 1),
(12, 104, '', 1),
(13, 105, '', 1),
(14, 105, '', 1),
(15, 105, '', 1),
(16, 106, '', 1),
(17, 106, '', 1),
(18, 106, '', 1),
(19, 107, '', 1),
(20, 107, '', 1),
(21, 107, '', 1),
(22, 108, '', 1),
(23, 108, '', 1),
(24, 108, '', 1),
(25, 109, '', 1),
(26, 109, '', 1),
(27, 109, '', 1),
(28, 110, '', 1),
(29, 110, '', 1),
(30, 110, '', 1),
(31, 111, '', 1),
(32, 111, '', 1),
(33, 111, '', 1),
(34, 112, '', 1),
(35, 112, '', 1),
(36, 112, '', 1),
(37, 113, '', 1),
(38, 113, '', 1),
(39, 113, '', 1),
(40, 114, '', 1),
(41, 114, '', 1),
(42, 114, '', 1),
(43, 115, '', 1),
(44, 115, '', 1),
(45, 115, '', 1),
(46, 116, '', 1),
(47, 116, '', 1),
(48, 116, '', 1),
(49, 117, '', 1),
(50, 117, '', 1),
(51, 117, '', 1),
(52, 118, '', 1),
(53, 118, '', 1),
(54, 118, '', 1),
(55, 119, '', 1),
(56, 119, '', 1),
(57, 119, '', 1),
(58, 120, '', 1),
(59, 120, '', 1),
(60, 120, '', 1),
(61, 121, '', 1),
(62, 121, '', 1),
(63, 121, '', 1),
(64, 122, '', 1),
(65, 122, '', 1),
(66, 122, '', 1),
(67, 123, '', 1),
(68, 123, '', 1),
(69, 123, '', 1),
(70, 124, '', 1),
(71, 124, '', 1),
(72, 124, '', 1),
(73, 125, '', 1),
(74, 125, '', 1),
(75, 125, '', 1),
(76, 126, '', 1),
(77, 126, '', 1),
(78, 126, '', 1),
(79, 127, '', 1),
(80, 127, '', 1),
(81, 127, '', 1),
(82, 128, '', 1),
(83, 128, '', 1),
(84, 128, '', 1),
(85, 129, '', 1),
(86, 129, '', 1),
(87, 129, '', 1),
(88, 130, '', 1),
(89, 130, '', 1),
(90, 130, '', 1),
(91, 131, '', 1),
(92, 131, '', 1),
(93, 131, '', 1),
(94, 132, '', 1),
(95, 132, '', 1),
(96, 132, '', 1),
(97, 133, '', 1),
(98, 133, '', 1),
(99, 133, '', 1),
(100, 134, '', 1),
(101, 134, '', 1),
(102, 134, '', 1),
(103, 135, '', 1),
(104, 135, '', 1),
(105, 135, '', 1),
(106, 136, '', 1),
(107, 136, '', 1),
(108, 136, '', 1),
(109, 137, '', 1),
(110, 137, '', 1),
(111, 137, '', 1),
(112, 138, '', 1),
(113, 138, '', 1),
(114, 138, '', 1),
(115, 139, '', 1),
(116, 139, '', 1),
(117, 139, '', 1),
(118, 140, '', 1),
(119, 140, '', 1),
(120, 140, '', 1),
(121, 141, '', 1),
(122, 141, '', 1),
(123, 141, '', 1),
(124, 142, '', 1),
(125, 142, '', 1),
(126, 142, '', 1),
(127, 143, '', 1),
(128, 143, '', 1),
(129, 143, '', 1),
(130, 144, '', 1),
(131, 144, '', 1),
(132, 144, '', 1),
(133, 145, '', 1),
(134, 145, '', 1),
(135, 145, '', 1),
(136, 146, '', 1),
(137, 146, '', 1),
(138, 146, '', 1),
(139, 147, '', 1),
(140, 147, '', 1),
(141, 147, '', 1),
(142, 148, '', 1),
(143, 148, '', 1),
(144, 148, '', 1),
(145, 149, '', 1),
(146, 149, '', 1),
(147, 149, '', 1),
(148, 150, '', 1),
(149, 150, '', 1),
(150, 150, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `desks`
--

CREATE TABLE `desks` (
  `id` int(11) NOT NULL,
  `room_id` int(11) DEFAULT NULL,
  `text` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `desks`
--

INSERT INTO `desks` (`id`, `room_id`, `text`, `date`, `visible`) VALUES
(1, 101, 'ffdgdgdfgd', '', 0),
(2, 101, '', '', 1),
(3, 101, '', '', 1),
(4, 102, 'kjhgfdgh', '', 0),
(5, 102, 'fdgdgdfg', '', 0),
(6, 102, 'dfgdfg', '', 0),
(7, 103, '', '', 1),
(8, 103, '', '', 1),
(9, 103, '', '', 1),
(10, 104, '', '', 1),
(11, 104, '', '', 1),
(12, 104, '', '', 1),
(13, 105, '', '', 1),
(14, 105, '', '', 1),
(15, 105, '', '', 1),
(16, 106, '', '', 1),
(17, 106, '', '', 1),
(18, 106, '', '', 1),
(19, 107, '', '', 1),
(20, 107, '', '', 1),
(21, 107, '', '', 1),
(22, 108, '', '', 1),
(23, 108, '', '', 1),
(24, 108, '', '', 1),
(25, 109, '', '', 1),
(26, 109, '', '', 1),
(27, 109, '', '', 1),
(28, 110, '', '', 1),
(29, 110, '', '', 1),
(30, 110, '', '', 1),
(31, 111, '', '', 1),
(32, 111, '', '', 1),
(33, 111, '', '', 1),
(34, 112, '', '', 1),
(35, 112, '', '', 1),
(36, 112, '', '', 1),
(37, 113, '', '', 1),
(38, 113, '', '', 1),
(39, 113, '', '', 1),
(40, 114, '', '', 1),
(41, 114, '', '', 1),
(42, 114, '', '', 1),
(43, 115, '', '', 1),
(44, 115, '', '', 1),
(45, 115, '', '', 1),
(46, 116, '', '', 1),
(47, 116, '', '', 1),
(48, 116, '', '', 1),
(49, 117, '', '', 1),
(50, 117, '', '', 1),
(51, 117, '', '', 1),
(52, 118, '', '', 1),
(53, 118, '', '', 1),
(54, 118, '', '', 1),
(55, 119, '', '', 1),
(56, 119, '', '', 1),
(57, 119, '', '', 1),
(58, 120, '', '', 1),
(59, 120, '', '', 1),
(60, 120, '', '', 1),
(61, 121, '', '', 1),
(62, 121, '', '', 1),
(63, 121, '', '', 1),
(64, 122, '', '', 1),
(65, 122, '', '', 1),
(66, 122, '', '', 1),
(67, 123, '', '', 1),
(68, 123, '', '', 1),
(69, 123, '', '', 1),
(70, 124, '', '', 1),
(71, 124, '', '', 1),
(72, 124, '', '', 1),
(73, 125, '', '', 1),
(74, 125, '', '', 1),
(75, 125, '', '', 1),
(76, 126, '', '', 1),
(77, 126, '', '', 1),
(78, 126, '', '', 1),
(79, 127, '', '', 1),
(80, 127, '', '', 1),
(81, 127, '', '', 1),
(82, 128, '', '', 1),
(83, 128, '', '', 1),
(84, 128, '', '', 1),
(85, 129, '', '', 1),
(86, 129, '', '', 1),
(87, 129, '', '', 1),
(88, 130, '', '', 1),
(89, 130, '', '', 1),
(90, 130, '', '', 1),
(91, 131, '', '', 1),
(92, 131, '', '', 1),
(93, 131, '', '', 1),
(94, 132, '', '', 1),
(95, 132, '', '', 1),
(96, 132, '', '', 1),
(97, 133, '', '', 1),
(98, 133, '', '', 1),
(99, 133, '', '', 1),
(100, 134, '', '', 1),
(101, 134, '', '', 1),
(102, 134, '', '', 1),
(103, 135, '', '', 1),
(104, 135, '', '', 1),
(105, 135, '', '', 1),
(106, 136, '', '', 1),
(107, 136, '', '', 1),
(108, 136, '', '', 1),
(109, 137, '', '', 1),
(110, 137, '', '', 1),
(111, 137, '', '', 1),
(112, 138, '', '', 1),
(113, 138, '', '', 1),
(114, 138, '', '', 1),
(115, 139, '', '', 1),
(116, 139, '', '', 1),
(117, 139, '', '', 1),
(118, 140, '', '', 1),
(119, 140, '', '', 1),
(120, 140, '', '', 1),
(121, 141, '', '', 1),
(122, 141, '', '', 1),
(123, 141, '', '', 1),
(124, 142, '', '', 1),
(125, 142, '', '', 1),
(126, 142, '', '', 1),
(127, 143, '', '', 1),
(128, 143, '', '', 1),
(129, 143, '', '', 1),
(130, 144, '', '', 1),
(131, 144, '', '', 1),
(132, 144, '', '', 1),
(133, 145, '', '', 1),
(134, 145, '', '', 1),
(135, 145, '', '', 1),
(136, 146, '', '', 1),
(137, 146, '', '', 1),
(138, 146, '', '', 1),
(139, 147, '', '', 1),
(140, 147, '', '', 1),
(141, 147, '', '', 1),
(142, 148, '', '', 1),
(143, 148, '', '', 1),
(144, 148, '', '', 1),
(145, 149, '', '', 1),
(146, 149, '', '', 1),
(147, 149, '', '', 1),
(148, 150, '', '', 1),
(149, 150, '', '', 1),
(150, 150, '', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `d2022_337`
--
ALTER TABLE `d2022_337`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desks`
--
ALTER TABLE `desks`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `d2022_337`
--
ALTER TABLE `d2022_337`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `desks`
--
ALTER TABLE `desks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
