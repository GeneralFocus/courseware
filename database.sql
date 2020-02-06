-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 06, 2020 at 09:17 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `course`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `unsername` varchar(111) NOT NULL,
  `password` varchar(122) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `unsername`, `password`, `date`, `status`) VALUES
(1, 'admin', 'admin', '2018-11-01 19:18:12', '0');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `class_title` varchar(111) NOT NULL,
  `level` varchar(123) NOT NULL,
  `lecturer` varchar(111) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `class_title`, `level`, `lecturer`, `date`, `status`) VALUES
(1, 'com 112', '200', 'gold', '2018-06-14 22:44:23', '0'),
(2, 'com 123', '100', 'rat11', '2018-06-17 07:16:30', '0'),
(3, 'com 114', '100', '12340', '2018-06-22 12:56:57', '0'),
(4, 'com 119', '100', '12340', '2018-06-26 04:41:52', '0'),
(5, 'com 116', '100', '12345abc', '2018-07-18 22:22:18', '0');

-- --------------------------------------------------------

--
-- Table structure for table `class_chat`
--

CREATE TABLE `class_chat` (
  `id` int(11) NOT NULL,
  `stu_id` int(11) NOT NULL,
  `lec_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `s_msg` text NOT NULL,
  `r_msg` text NOT NULL,
  `time` varchar(111) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `class_chat`
--

INSERT INTO `class_chat` (`id`, `stu_id`, `lec_id`, `class_id`, `s_msg`, `r_msg`, `time`, `date`, `status`) VALUES
(1, 0, 1, 1, 'hello', '', '01/06', '2018-06-15 01:54:36', '0'),
(2, 0, 1, 1, 'Yes', '', '11/06', '2018-06-16 11:22:38', '0'),
(3, 0, 6, 1, 'hi class\r\n              ', '', '12/06', '2018-06-16 12:11:59', '0'),
(4, 0, 6, 2, 'Hello Class', '', '07/06', '2018-06-17 07:39:35', '0'),
(5, 0, 6, 2, 'Good morning class', '', '08/06', '2018-06-17 08:09:54', '0'),
(6, 0, 0, 2, 'fine class', '', '01/06', '2018-06-17 13:54:27', '0'),
(7, 0, 6, 2, 'okay now ', '', '02/06', '2018-06-17 14:15:01', '0'),
(8, 11, 6, 2, 'i say hello', '', '02/06', '2018-06-17 14:52:37', '0'),
(9, 0, 4, 3, 'fine', '', '12/06', '2018-06-22 12:57:56', '0'),
(10, 12, 4, 3, 'yes\r\n\r\n                  ', '', '03/06', '2018-06-26 03:54:22', '0'),
(11, 12, 4, 4, 'Ok ', '', '04/06', '2018-06-26 04:42:25', '0'),
(12, 0, 4, 4, 'yes now', '', '04/06', '2018-06-26 04:42:51', '0'),
(13, 13, 0, 1, 'just  now\r\n                  ', '', '07/07', '2018-07-18 07:29:21', '0'),
(14, 0, 3, 5, 'hooooo\r\n                  ', '', '10/07', '2018-07-18 22:33:26', '0'),
(15, 0, 3, 5, 'just trying to\r\n                  ', '', '10/07', '2018-07-18 22:36:08', '0'),
(16, 0, 3, 5, 'this is my reply \r\n', '', '06/07', '2018-07-19 06:39:07', '0'),
(17, 13, 3, 5, 'mr tee', '', '06/07', '2018-07-19 06:50:35', '0'),
(18, 13, 3, 5, 'is this not my reply', '12/001/67', '07/07', '2018-07-19 07:03:13', '0'),
(19, 0, 3, 5, 'boys of the boy \r\n                  ', 'esther ayaoba', '07/07', '2018-07-19 07:52:27', '0'),
(20, 17, 4, 3, 'wejsgzhn \r\n                  ', '15/69/0027', '09/01', '2020-01-27 09:27:35', '0');

-- --------------------------------------------------------

--
-- Table structure for table `down`
--

CREATE TABLE `down` (
  `id` int(11) NOT NULL,
  `usr` varchar(89) NOT NULL,
  `file` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(57) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `down`
--

INSERT INTO `down` (`id`, `usr`, `file`, `date`, `status`) VALUES
(1, 'ola@sample.com', '', '2017-08-10 13:41:29', 'download'),
(2, 'ola@sample.com', '', '2017-08-10 13:48:47', 'download'),
(3, 'dola@g.com', '', '2017-08-28 20:06:31', 'download'),
(4, 'dola@g.com', '', '2017-08-28 20:20:41', 'download'),
(5, 'dola@g.com', 'AGAIN_(Mark_Angel_Comedy)_(Episode_79).mp4', '2017-08-29 02:38:09', 'download'),
(6, '14/71/0151', 'kuyfiu.jpg', '2020-02-04 10:28:31', 'download');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `tittle` varchar(111) NOT NULL,
  `cod` varchar(29) NOT NULL,
  `level` varchar(23) NOT NULL,
  `type` varchar(35) NOT NULL,
  `note` text NOT NULL,
  `filename` varchar(220) NOT NULL,
  `filepath` varchar(222) NOT NULL,
  `lecturer` varchar(89) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `tittle`, `cod`, `level`, `type`, `note`, `filename`, `filepath`, `lecturer`, `date`, `status`) VALUES
(1, 'my new Tittle', 'csc223', 'ND2', 'doc', 'hoo My God, hoa yeeea hunnn aaaa aaaa! har heaaar ', 'kuyfiu.jpg', '../upload_files/kuyfiu.jpg', 'lasisi lakunle', '2018-02-04 09:41:25', '0'),
(2, 'c++', 'com435', '200', 'pdf', 'Although several solutions on file transfer has been on board before but regarding this project the solution is from different direction. Send, Resilio Sync, G sever are some of already made solution but yet few if not all of this solution has never looked more onto the validity, integrity and accessibility of the file sent by the user. This is the area in which this project will be facing. My project will simply achieve this by using a two-way encryption algorithm (base64) to give every transfer its own security. This was just to take care of the file of all user on the before and while sending.', '6877.xps', '../upload_files/6877.xps', 'lasisi lakunle', '2018-02-04 08:26:27', '0'),
(3, 'Sql', 'com112', '100', 'pdf', '            \r\n          This material is very mush important ', 'CHA 2.docx', '../upload_files/CHA 2.docx', 'esther ayaoba', '2018-02-15 15:20:51', '0'),
(4, 'math', 'mth444', '100', 'doc', 'All Note seen', '4.html', '../upload_files/4.html', 'lawal ol', '2018-06-26 04:44:44', '0');

-- --------------------------------------------------------

--
-- Table structure for table `lecture`
--

CREATE TABLE `lecture` (
  `id` int(11) NOT NULL,
  `fn` varchar(111) NOT NULL,
  `ln` varchar(111) NOT NULL,
  `staff_id` varchar(111) NOT NULL,
  `pw` varchar(111) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecture`
--

INSERT INTO `lecture` (`id`, `fn`, `ln`, `staff_id`, `pw`, `date`, `status`) VALUES
(1, 'lasisi', 'lakunle', '1234qwer', 'hope', '2017-12-30 14:24:08', '0'),
(2, 'opo', 'ojo', '098oiup', '0987', '2018-02-04 09:48:51', '0'),
(3, 'esther', 'ayaoba', '12345abc', '0000', '2018-02-15 15:17:59', '0'),
(4, 'lawal', 'ol', '12340', 'esther', '2018-02-22 12:41:08', ''),
(6, 'lawal', 'oko', 'rat11', '44', '2018-06-17 07:16:01', ''),
(1111, 'lawal', 'okoro', 'abc2345', 'esther12', '2018-02-22 13:11:21', 'lecturer'),
(12340, 'lawal', 'ol', '12340', 'esther', '2018-02-22 12:41:37', ''),
(12341, 'lawal', 'okoro', 'abc1234', 'esther12', '2018-02-22 13:10:08', 'lecturer'),
(12343, 'lawal', 'okoro', '0000abc', '12345ab', '2018-02-22 13:17:22', '0'),
(12344, 'lawal', 'okoro', '0000abc', '12345ab', '2018-02-22 13:19:12', '0'),
(12345, 'lawal', 'okon', '123ab', '1234ab', '2018-02-22 13:21:13', '0'),
(12346, 'dayo', 'nosa', '1234ac', '123abc', '2018-02-22 13:23:58', '0'),
(12347, 'jgfchvjbj', 'jfjgkh', '9', 'gjfchvjb', '2018-03-03 00:05:23', '0'),
(12348, '$fn', '$ln', '$pass2', '$sid', '2018-03-03 00:07:12', '0'),
(12349, 'gfxchvjbk', 'iytvuhbj', '888', 'lygkuh', '2018-03-03 00:08:13', '0'),
(12350, 'gfxchvjbk', 'iytvuhbj', '888', 'lygkuh', '2018-03-03 00:08:45', '0'),
(12351, 'gfxchvjbk', 'iytvuhbj', 'lygkuh', '888', '2018-03-03 00:09:49', '0'),
(12352, 'som', 'som', 'som', 'som', '2018-11-01 22:20:03', '0'),
(12353, 'sip', 'sip', 'sip', 'sip', '2018-11-01 22:31:02', '0'),
(12354, 'sip', 'sip', 'sip', 'sip', '2018-11-01 22:32:23', '0'),
(12355, 'Badmus', 'Miracle', 'staff1', '1234', '2020-01-27 09:45:25', '0');

-- --------------------------------------------------------

--
-- Table structure for table `material_class`
--

CREATE TABLE `material_class` (
  `id` int(11) NOT NULL,
  `note` varchar(111) NOT NULL,
  `file` varchar(123) NOT NULL,
  `path` varchar(111) NOT NULL,
  `class_id` int(11) NOT NULL,
  `lecture` varchar(111) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `material_class`
--

INSERT INTO `material_class` (`id`, `note`, `file`, `path`, `class_id`, `lecture`, `date`, `status`) VALUES
(1, 'You mate\r\n          ', 'ade.jpeg', '../upload_files/ade.jpeg', 1, 'lawal oko', '2018-06-15 01:02:50', '0'),
(2, 'this is cool and fine...\r\n          ', 'MOBILE (1).pdf', '../upload_files/MOBILE (1).pdf', 1, 'lawal oko', '2018-06-16 11:11:55', '0'),
(3, 'yet not ', 'MOBILE PORTTING.pdf', '../upload_files/MOBILE PORTTING.pdf', 2, ' ', '2018-06-17 14:02:56', '0'),
(4, 'good', 'eulaAccepted', '../upload_files/eulaAccepted', 3, 'lawal ol', '2018-06-22 12:57:38', '0'),
(5, 'future ni mi ', '8.jpeg', '../upload_files/8.jpeg', 4, 'lawal ol', '2018-06-26 04:48:27', '0'),
(6, 'this is really seriois guy nice', 'download (2).jpeg', '../upload_files/download (2).jpeg', 5, 'esther ayaoba', '2018-07-18 22:33:14', '0');

-- --------------------------------------------------------

--
-- Table structure for table `mine`
--

CREATE TABLE `mine` (
  `id` int(11) NOT NULL,
  `email` varchar(39) NOT NULL,
  `num` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mine`
--

INSERT INTO `mine` (`id`, `email`, `num`, `date`, `status`) VALUES
(1, 'ola@sample.com', '4170ac2a2782a1516fe9e13d7322ae482c1bd594', '2017-08-10 11:43:30', '0'),
(2, 'ola@sample.com', '39dfa55283318d31afe5a3ff4a0e3253e2045e43', '2017-08-28 12:31:34', '0'),
(3, 'dola@g.com', '726e69abaf9d464993a90e72970be5485a927aac', '2017-08-28 17:39:06', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE `user_reg` (
  `id` int(11) NOT NULL,
  `email` varchar(78) NOT NULL,
  `fname` varchar(111) NOT NULL,
  `lastn` varchar(111) NOT NULL,
  `level` varchar(111) NOT NULL,
  `dapartment` varchar(111) NOT NULL,
  `name` varchar(111) NOT NULL,
  `path` varchar(111) NOT NULL,
  `pass` varchar(78) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`id`, `email`, `fname`, `lastn`, `level`, `dapartment`, `name`, `path`, `pass`, `date`, `status`) VALUES
(1, 'ola@sample.com', '', '', '', '', '', '', 'ola', '2017-07-29 22:31:14', '0'),
(2, 'dola@g.com', '', '', '', '', '', '', ' 12345', '2017-08-28 17:38:32', '0'),
(3, '122', 'dddd', 'sss', '100', 'CSC', '', '', '5555', '2017-12-24 23:43:26', '0'),
(4, '12/09', 'kope', 'bola', 'ND2', 'CSC', '', '', 'csc111', '2018-02-03 07:37:53', '0'),
(5, 'P/ND/14/3210080', 'ESTHER', 'OKORO', 'ND1', 'CSC', '', '', 'SASSY', '2018-02-15 15:10:52', '0'),
(6, 'p/nd/14/3210587', 'sammy', 'juli', 'HND1', 'COM ENG', '', '', 'odyronaldo7', '2018-02-22 12:31:32', '0'),
(7, 'p/nd/14/3210042', 'dayo', 'sandra', 'ND1', 'CSC', '', '', 'esther', '2018-02-27 12:59:18', '0'),
(8, '20142222', 'ade', 'ade', 'ND1', 'CSC', '', '', 'ade', '2018-03-03 13:18:20', '0'),
(9, '15/69', 'gold', 'silver', '100', 'MATH STAT', '', '', '0000', '2018-06-14 23:09:07', '0'),
(10, '41/09', 'food', 'link', '100', 'CSC', '', 'upload_files/', '8888', '2018-06-16 10:41:35', '0'),
(11, '12/67', 'oop', 'last', '100', 'CSC', 'user.png', 'upload_files/user.png', '9999', '2018-06-16 10:49:12', '0'),
(12, '41/14', 'io', 'cpu', '100', 'CSC', '1.jpg', 'upload_files/1.jpg', 'one', '2018-06-26 03:53:27', '0'),
(13, '12/001/67', 'oluwade', 'johnson', '100', 'CSC', 'user.gif', 'upload_files/user.gif', '890', '2018-07-18 07:00:05', '0'),
(14, '123', 'oo', 'jhfgj', '100', 'CSC', 'download (2).jpeg', 'upload_files/download (2).jpeg', '676', '2018-12-15 14:59:47', '0'),
(15, '12345', 'alimat', 'ronke', 'Jss3', 'C', '', '', 'baba', '2018-12-15 15:26:19', '0'),
(16, '1234', 'aishat', 'ola', 'Jss2', 'B', '', '', '1111', '2018-12-15 15:27:04', '0'),
(17, '15/69/0027', 'Oyinkansola', 'Olabode', '200', 'CSC', 'kotlin.png', 'upload_files/kotlin.png', '1234', '2020-01-27 09:25:18', '0'),
(18, '14/71/0152', 'owolabi', 'biliamin', '400', 'CSC', 'passport.jpeg', 'upload_files/passport.jpeg', '12345', '2020-02-04 09:40:01', '0'),
(19, '14/71/0151', 'owolabi', 'olaide', '300', 'CSC', 'passport.jpeg', 'upload_files/passport.jpeg', '1234', '2020-02-04 09:54:37', '0');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `name` varchar(111) NOT NULL,
  `path` varchar(111) NOT NULL,
  `title` varchar(200) NOT NULL,
  `lecturer` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `name`, `path`, `title`, `lecturer`, `date`, `status`) VALUES
(1, 'How to Download Any Internet Video (no software needed).mp4', '../upload_files/How to Download Any Internet Video (no software needed).mp4', 'java', 'lasisi lakunle', '2018-02-04 08:23:41', '0'),
(2, 'How to Download Any Internet Video (no software needed).mp4', '../upload_files/How to Download Any Internet Video (no software needed).mp4', 'c++', 'lasisi lakunle', '2018-02-04 08:30:55', '0'),
(3, 'test.mp4', '../upload_files/CHA 2.docx', 'food', 'lasisi lakunle', '2018-02-04 09:16:04', '0'),
(4, 'CHA 2.docx', '../upload_files/CHA 2.docx', 'food', 'lasisi lakunle', '2018-02-04 09:46:14', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_chat`
--
ALTER TABLE `class_chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `down`
--
ALTER TABLE `down`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecture`
--
ALTER TABLE `lecture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `material_class`
--
ALTER TABLE `material_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mine`
--
ALTER TABLE `mine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_reg`
--
ALTER TABLE `user_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `class_chat`
--
ALTER TABLE `class_chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `down`
--
ALTER TABLE `down`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lecture`
--
ALTER TABLE `lecture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12356;

--
-- AUTO_INCREMENT for table `material_class`
--
ALTER TABLE `material_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mine`
--
ALTER TABLE `mine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_reg`
--
ALTER TABLE `user_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
