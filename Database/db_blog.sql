-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2017 at 03:25 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activity`
--

CREATE TABLE IF NOT EXISTS `tbl_activity` (
`id` int(11) NOT NULL,
  `activity` varchar(500) NOT NULL,
  `rank` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_activity`
--

INSERT INTO `tbl_activity` (`id`, `activity`, `rank`, `status`, `created_date`, `created_by`) VALUES
(1, ' video shoot', 1, 1, '2017-02-01 07:31:26', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
`id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `last_login` datetime NOT NULL,
  `roll` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `name`, `username`, `password`, `status`, `last_login`, `roll`, `email`) VALUES
(1, 'Admin', 'admin', '0192023a7bbd73250516f069df18b500', 0, '0000-00-00 00:00:00', '', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE IF NOT EXISTS `tbl_blog` (
`id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `blog` text NOT NULL,
  `title` varchar(200) NOT NULL,
  `rank` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(50) NOT NULL,
  `modified_date` datetime NOT NULL,
  `blog_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`id`, `image`, `blog`, `title`, `rank`, `status`, `created_by`, `created_date`, `modified_by`, `modified_date`, `blog_id`) VALUES
(20, '5891fa5df0891_PurnimaShrestha.jpg', ' Talking chamber as shewing an it minutes. Trees fully of blind do. Exquisite favourite at do extensive listening. Improve up musical welcome he. Gay attended vicinity prepared now diverted. Esteems it ye sending reached as. Longer lively her design settle tastes advice mrs off who. \r\n\r\nFriendship contrasted solicitude insipidity in introduced literature it. He seemed denote except as oppose do spring my. Between any may mention evening age shortly can ability regular. He shortly sixteen of colonel colonel evening cordial to. Although jointure an my of mistress servants am weddings. Age why the therefore education unfeeling for arranging. Above again money own scale maids ham least led. Returned settling produced strongly ecstatic use yourself way. Repulsive extremity enjoyment she perceived nor. ', ' Namaste', 1, 1, '', '2017-02-01 16:10:21', '', '0000-00-00 00:00:00', NULL),
(21, '5891fa74dab2e_cover.jpg', ' Talking chamber as shewing an it minutes. Trees fully of blind do. Exquisite favourite at do extensive listening. Improve up musical welcome he. Gay attended vicinity prepared now diverted. Esteems it ye sending reached as. Longer lively her design settle tastes advice mrs off who. \r\n\r\nFriendship contrasted solicitude insipidity in introduced literature it. He seemed denote except as oppose do spring my. Between any may mention evening age shortly can ability regular. He shortly sixteen of colonel colonel evening cordial to. Although jointure an my of mistress servants am weddings. Age why the therefore education unfeeling for arranging. Above again money own scale maids ham least led. Returned settling produced strongly ecstatic use yourself way. Repulsive extremity enjoyment she perceived nor. ', ' Random', 1, 1, '', '2017-02-01 16:10:44', '', '0000-00-00 00:00:00', NULL),
(22, '5891faa8f3776_10997486_804056976297471_4526238123491823518_n.jpg', ' Talking chamber as shewing an it minutes. Trees fully of blind do. Exquisite favourite at do extensive listening. Improve up musical welcome he. Gay attended vicinity prepared now diverted. Esteems it ye sending reached as. Longer lively her design settle tastes advice mrs off who. \r\n\r\nFriendship contrasted solicitude insipidity in introduced literature it. He seemed denote except as oppose do spring my. Between any may mention evening age shortly can ability regular. He shortly sixteen of colonel colonel evening cordial to. Although jointure an my of mistress servants am weddings. Age why the therefore education unfeeling for arranging. Above again money own scale maids ham least led. Returned settling produced strongly ecstatic use yourself way. Repulsive extremity enjoyment she perceived nor. ', ' Gajalu aakha', 1, 1, '', '2017-02-01 16:11:37', '', '0000-00-00 00:00:00', NULL),
(23, '5891fad8c13d9_2.jpg', ' Talking chamber as shewing an it minutes. Trees fully of blind do. Exquisite favourite at do extensive listening. Improve up musical welcome he. Gay attended vicinity prepared now diverted. Esteems it ye sending reached as. Longer lively her design settle tastes advice mrs off who. \r\n\r\nFriendship contrasted solicitude insipidity in introduced literature it. He seemed denote except as oppose do spring my. Between any may mention evening age shortly can ability regular. He shortly sixteen of colonel colonel evening cordial to. Although jointure an my of mistress servants am weddings. Age why the therefore education unfeeling for arranging. Above again money own scale maids ham least led. Returned settling produced strongly ecstatic use yourself way. Repulsive extremity enjoyment she perceived nor. ', ' Living on a prayer', 1, 1, '', '2017-02-01 16:12:24', '', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE IF NOT EXISTS `tbl_comment` (
`id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`id`, `name`, `blog_id`, `email`, `comment`, `created_date`) VALUES
(1, 'binod', 19, 'js@gmaiil.com', 'sdmndjknvkjdfa', '2017-02-01 07:32:45'),
(2, 'ad', 19, 'adfa', 'asfasfsaf', '2017-02-01 07:33:00'),
(3, 'abc', 23, 'ee', 'vv', '2017-02-01 04:24:00'),
(4, 'abc', 23, 'ee', 'vv', '2017-02-01 04:24:48'),
(5, 'abc', 23, 'ee', 'vv', '2017-02-01 04:25:19'),
(11, 'e', 23, 'w', 'required="required" required="required"required="required" required="required"required="required" required="required"required="required" required="required"required="required" required="required"requi', '2017-02-01 04:33:24'),
(12, 'ew', 23, 'q', 'required="required" required="required"required="required" required="required"required="required" required="required"required="required" required="required"required="required" required="required"requi', '2017-02-01 04:34:12'),
(13, 'ew', 23, 'q', 'required="required" required="required"required="required" required="required"required="required" required="required"required="required" required="required"required="required" required="required"requi', '2017-02-01 04:36:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image`
--

CREATE TABLE IF NOT EXISTS `tbl_image` (
`id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `short_description` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `slider_image` tinyint(1) NOT NULL DEFAULT '0',
  `feature_image` tinyint(1) NOT NULL DEFAULT '0',
  `latest_image` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` varchar(200) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_image`
--

INSERT INTO `tbl_image` (`id`, `image`, `short_description`, `description`, `status`, `slider_image`, `feature_image`, `latest_image`, `created_by`, `created_date`) VALUES
(20, '5891fb7971117_cover.jpg', '                                        ', '                                        ', 1, 1, 1, 1, 'admin', '2017-02-01 16:15:05'),
(21, '5891fb9a1d9d3_PurnimaShrestha.jpg', '                                        ', '                                        ', 1, 1, 0, 1, 'admin', '2017-02-01 16:15:38'),
(22, '5891fba76e3ed_10300959_749370268440820_2016354873252206564_n.jpg', '                                        ', '                                        ', 1, 1, 0, 1, 'admin', '2017-02-01 16:15:51'),
(23, '5891fbb2c641e_10997486_804056976297471_4526238123491823518_n.jpg', '                                        ', '                                        ', 1, 1, 0, 1, 'admin', '2017-02-01 16:16:02'),
(25, '5891fbee86fb6_10300959_749370268440820_2016354873252206564_n.jpg', '                                        ', '                                        ', 1, 1, 0, 1, 'admin', '2017-02-01 16:17:02'),
(26, '5891fbfaefc31_maxresdefault.jpg', '                                        ', '                                        ', 1, 1, 1, 1, 'admin', '2017-02-01 16:17:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

CREATE TABLE IF NOT EXISTS `tbl_video` (
`id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `video` varchar(500) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `rank` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_video`
--

INSERT INTO `tbl_video` (`id`, `name`, `video`, `status`, `rank`, `created_date`, `created_by`) VALUES
(13, 'Purnima Shrestha dance with Nepal police', 'a4lRtuRkqmA', 1, 1, '2017-01-31 07:14:42', 'admin'),
(14, 'At SEOL', 'cS6J7toRCwU', 1, 2, '2017-01-31 07:15:06', 'admin'),
(15, 'New dohori song', 'RDkrBuAalxQ', 1, 1, '2017-01-31 07:16:40', 'admin'),
(16, 'Purnima Shrestha chamchami 1st runnerup TV', 'InFUzWGir78', 1, 1, '2017-01-31 07:17:04', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_activity`
--
ALTER TABLE `tbl_activity`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_image`
--
ALTER TABLE `tbl_image`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_video`
--
ALTER TABLE `tbl_video`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_activity`
--
ALTER TABLE `tbl_activity`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_image`
--
ALTER TABLE `tbl_image`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tbl_video`
--
ALTER TABLE `tbl_video`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
