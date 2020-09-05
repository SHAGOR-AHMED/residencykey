-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2020 at 07:19 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_landqo`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `category`) VALUES
(1, 'Shop'),
(2, 'Land'),
(16, 'Flat');

-- --------------------------------------------------------

--
-- Table structure for table `group_sms`
--

CREATE TABLE `group_sms` (
  `id` int(11) NOT NULL,
  `receipent_type` int(11) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_sms`
--

INSERT INTO `group_sms` (`id`, `receipent_type`, `mobile`, `message`, `created_by`, `created_datetime`) VALUES
(1, 1, '881829159616', 'qwedqsasadasdas', 8, '2014-07-24 04:32:19'),
(4, 1, '881829159616', 'QASDASDCASDSAD', 8, '2014-07-24 04:33:55'),
(30, 1, '8801766535513', 'hi', 13, '2018-05-16 16:41:01'),
(31, 1, '8801814944730', 'hi', 13, '2018-05-16 16:41:01'),
(33, 2, '8801766535513', 'cgbdfgbv ', 13, '2018-05-16 18:00:39'),
(34, 2, '8801814944730', 'cgbdfgbv ', 13, '2018-05-16 18:00:39'),
(35, 1, '01814944730', 'b n bnvbnvn vbnh vgb', 13, '2018-12-04 18:09:26'),
(36, 1, '01865336889', 'b n bnvbnvn vbnh vgb', 13, '2018-12-04 18:09:26'),
(37, 1, '01515676354', 'b n bnvbnvn vbnh vgb', 13, '2018-12-04 18:09:26'),
(38, 1, '01947000015', 'b n bnvbnvn vbnh vgb', 13, '2018-12-04 18:09:26');

-- --------------------------------------------------------

--
-- Table structure for table `property_location`
--

CREATE TABLE `property_location` (
  `location_id` int(11) NOT NULL,
  `location_name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `property_location`
--

INSERT INTO `property_location` (`location_id`, `location_name`) VALUES
(1, 'Dhanmondi'),
(2, 'Gulshan'),
(3, 'Bonani'),
(5, 'Damrai'),
(6, 'jatra bari'),
(7, 'demra'),
(8, 'Uttara');

-- --------------------------------------------------------

--
-- Table structure for table `property_type`
--

CREATE TABLE `property_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `property_type`
--

INSERT INTO `property_type` (`type_id`, `type_name`) VALUES
(1, 'Apartment'),
(2, 'Duplex'),
(4, 'Residential Area'),
(6, 'vfxvxvxvx');

-- --------------------------------------------------------

--
-- Table structure for table `sms_configuration`
--

CREATE TABLE `sms_configuration` (
  `id` int(11) NOT NULL,
  `sms_gateway` varchar(255) NOT NULL,
  `sms_user_name` varchar(255) NOT NULL,
  `sms_password` varchar(255) NOT NULL,
  `sms_port` varchar(255) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_configuration`
--

INSERT INTO `sms_configuration` (`id`, `sms_gateway`, `sms_user_name`, `sms_password`, `sms_port`, `updated_by`, `updated_datetime`) VALUES
(1, 'http://bmp.issl.com.bd/api/curl/', 'Ahmed Shagor', '', '8080', 8, 2015);

-- --------------------------------------------------------

--
-- Table structure for table `specific_sms`
--

CREATE TABLE `specific_sms` (
  `id` int(11) NOT NULL,
  `reg_no` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specific_sms`
--

INSERT INTO `specific_sms` (`id`, `reg_no`, `mobile_no`, `message`, `created_by`, `created_datetime`) VALUES
(1, '875005', '881829159616', 'lkfjlasd flkasdjfla sdfksdalkfj sldk;afjkldsfj ldsfkjasdlf lsad', 8, '2014-07-20 10:58:59'),
(3, '875005', '881829159616', 'asdfdsafdasf', 8, '2014-07-20 11:19:23'),
(4, '875005', '881829159616', ';lksdfjlksdajflkjasdklf', 8, '2014-07-20 11:23:45'),
(5, '875005', '881829159616', 'sisf daslfjlsdaf lkdsf', 8, '2014-07-20 11:24:06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `blog_id` int(3) NOT NULL,
  `blog_title` varchar(100) NOT NULL,
  `blog_details` text NOT NULL,
  `photo` varchar(100) NOT NULL,
  `video_link` varchar(100) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`blog_id`, `blog_title`, `blog_details`, `photo`, `video_link`, `created_date`) VALUES
(1, 'What is Lorem Ipsum....?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', './assets/backend/blog_photo/bd-5.png', 'TqZ6V1M0Zhk', '2020-02-16 18:05:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(3) NOT NULL,
  `feedback_purpose` varchar(32) NOT NULL,
  `message` text NOT NULL,
  `feedback_by` varchar(32) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedback_id`, `feedback_purpose`, `message`, `feedback_by`, `created_date`) VALUES
(2, 'demo', 'this is demo', 'admin', '2020-02-16 09:43:08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notices`
--

CREATE TABLE `tbl_notices` (
  `notice_id` int(3) NOT NULL,
  `purpose_notice` varchar(100) NOT NULL,
  `notices` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_notices`
--

INSERT INTO `tbl_notices` (`notice_id`, `purpose_notice`, `notices`, `status`, `created_date`) VALUES
(5, 'hello', 'test', 1, '2018-11-29 08:08:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_property`
--

CREATE TABLE `tbl_property` (
  `property_id` int(11) NOT NULL,
  `property_type` int(2) NOT NULL,
  `property_price` float NOT NULL,
  `property_area` varchar(100) NOT NULL,
  `bedroom` int(2) NOT NULL,
  `bath` int(2) NOT NULL,
  `drawing` tinyint(2) NOT NULL,
  `dining` tinyint(2) NOT NULL,
  `elevator` tinyint(2) NOT NULL,
  `gas` tinyint(2) NOT NULL,
  `belcony` tinyint(2) NOT NULL,
  `parking` tinyint(2) NOT NULL,
  `lobby` tinyint(2) NOT NULL,
  `view` tinyint(11) NOT NULL,
  `security` tinyint(2) NOT NULL,
  `maintenance_staff` tinyint(2) NOT NULL,
  `property_location` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 0,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_property`
--

INSERT INTO `tbl_property` (`property_id`, `property_type`, `property_price`, `property_area`, `bedroom`, `bath`, `drawing`, `dining`, `elevator`, `gas`, `belcony`, `parking`, `lobby`, `view`, `security`, `maintenance_staff`, `property_location`, `photo`, `status`, `created_date`) VALUES
(1, 2, 23323100, '1122', 3, 2, 1, 0, 1, 1, 4, 1, 1, 2, 1, 1, 1, './assets/backend/property_photo/1.png', 0, '2020-02-12 07:17:04'),
(8, 4, 4234, '234', 10, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, './assets/backend/property_photo/Thumbnail.jpg', 0, '2020-02-15 18:28:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_property_image`
--

CREATE TABLE `tbl_property_image` (
  `img_id` int(3) NOT NULL,
  `pro_id` int(3) NOT NULL,
  `file` varchar(100) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_property_image`
--

INSERT INTO `tbl_property_image` (`img_id`, `pro_id`, `file`, `created_date`) VALUES
(3, 8, './assets/backend/property_photo/2.png', '2020-02-15 18:28:49'),
(4, 8, './assets/backend/property_photo/bd-5.png', '2020-02-16 15:50:03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seller`
--

CREATE TABLE `tbl_seller` (
  `seller_id` int(3) NOT NULL,
  `seller_name` varchar(55) NOT NULL,
  `seller_phone` varchar(15) NOT NULL,
  `seller_email` varchar(55) NOT NULL,
  `property_type` int(3) NOT NULL,
  `property_location` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_seller`
--

INSERT INTO `tbl_seller` (`seller_id`, `seller_name`, `seller_phone`, `seller_email`, `property_type`, `property_location`, `created_date`) VALUES
(1, 'Abu Shakil', '01515224433', 'ASa@gmail.com', 1, 8, '2020-02-12 15:27:23'),
(2, 'zahid rofiq', '01816778866', 'zahid@gmail.com', 2, 2, '2020-02-12 15:29:38'),
(3, 'shagor ahmed', '01828376278', 'shagor@gmail.com', 4, 5, '2020-02-12 15:42:19');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `created_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `user_name`, `password`, `email`, `contact`, `address`, `photo`, `created_datetime`) VALUES
(13, 'Shagor', 'Badsha', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'shagor@gmail.com', '01974944730', 'Dhanmondi Dhaka.', './assets/backend/uploads/me1.jpg', '2015-02-25 12:49:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `group_sms`
--
ALTER TABLE `group_sms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_location`
--
ALTER TABLE `property_location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `property_type`
--
ALTER TABLE `property_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `sms_configuration`
--
ALTER TABLE `sms_configuration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specific_sms`
--
ALTER TABLE `specific_sms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `tbl_notices`
--
ALTER TABLE `tbl_notices`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `tbl_property`
--
ALTER TABLE `tbl_property`
  ADD PRIMARY KEY (`property_id`);

--
-- Indexes for table `tbl_property_image`
--
ALTER TABLE `tbl_property_image`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `tbl_seller`
--
ALTER TABLE `tbl_seller`
  ADD PRIMARY KEY (`seller_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `group_sms`
--
ALTER TABLE `group_sms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `property_location`
--
ALTER TABLE `property_location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `property_type`
--
ALTER TABLE `property_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sms_configuration`
--
ALTER TABLE `sms_configuration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `specific_sms`
--
ALTER TABLE `specific_sms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `blog_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_notices`
--
ALTER TABLE `tbl_notices`
  MODIFY `notice_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_property`
--
ALTER TABLE `tbl_property`
  MODIFY `property_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_property_image`
--
ALTER TABLE `tbl_property_image`
  MODIFY `img_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_seller`
--
ALTER TABLE `tbl_seller`
  MODIFY `seller_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
