-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 27, 2019 at 06:21 PM
-- Server version: 5.6.45
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Boostzone-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_favour`
--

CREATE TABLE `admin_favour` (
  `fav_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_favour`
--

INSERT INTO `admin_favour` (`fav_id`, `user_id`, `created`, `modified`, `status`) VALUES
(43, 28, '2019-08-28 17:19:53', '2019-08-28 17:19:53', 1),
(44, 33, '2019-08-28 17:19:53', '2019-08-28 17:19:53', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bank_details`
--

CREATE TABLE `bank_details` (
  `bank_id` int(11) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `account_no` varchar(255) NOT NULL,
  `ifsc_code` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_details`
--

INSERT INTO 'bank_details' ('bank_id', `bank_name`, `account_no`, `ifsc_code`, `status`, `user_id`) VALUES
(1, 'HSBC', '983907407193', '8310417247837', 1, 7),
(2, 'CHASE', 'viobufbviu', 'wvioubrwqv', 1, 28),
(3, 'WELLS FARGO', 'sdfasdf', 'aesfd', 1, 33);

-- --------------------------------------------------------

--
-- Table structure for table `category_details`
--

CREATE TABLE `category_details` (
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_details`
--

INSERT INTO `category_details` (`category_id`, `name`, `status`, `created_on`, `modified`) VALUES
(1, 'poverty', 1, '2019-07-28 12:28:58', '2019-07-28 19:28:59'),
(2, 'handicap', 1, '2019-07-28 12:29:30', '2019-07-28 19:29:31'),
(3, 'talent', 1, '2019-07-28 12:29:41', '2019-07-28 19:29:41'),
(4, 'knowledge', 1, '2019-07-28 12:29:53', '2019-07-28 19:29:54'),
(5, 'Snack time', 1, '2019-07-28 12:29:53', '2019-07-28 19:30:18'),
(6, 'education', 1, '2019-07-28 12:30:31', '2019-07-28 19:30:31'),
(7, 'Actions', 1, '2019-07-28 12:30:41', '2019-07-28 19:30:41'),
(8, 'Cheers', 1, '2019-07-28 12:30:50', '2019-07-28 19:30:50'),
(9, 'Common', 1, '2019-07-28 15:11:22', '2019-07-28 22:11:28'),
(10, 'Fashion and Beauty', 1, '2019-07-28 15:11:22', '2019-08-02 06:21:21'),
(11, 'Travel', 1, '0000-00-00 00:00:00', '2019-08-02 06:21:37'),
(12, 'Pets', 1, '0000-00-00 00:00:00', '2019-08-02 06:21:44'),
(13, 'Health', 1, '0000-00-00 00:00:00', '2019-08-02 06:21:52'),
(14, 'Food and Drinks ', 1, '0000-00-00 00:00:00', '2019-08-02 06:21:59'),
(15, 'Technology ', 1, '0000-00-00 00:00:00', '2019-08-02 06:22:05'),
(16, 'Sports', 1, '0000-00-00 00:00:00', '2019-08-02 06:22:10'),
(17, 'Business and Finance ', 1, '0000-00-00 00:00:00', '2019-08-02 06:22:18'),
(18, 'Architecture and Design', 1, '0000-00-00 00:00:00', '2019-08-02 06:22:25'),
(19, 'Automotive', 1, '0000-00-00 00:00:00', '2019-08-02 06:22:30'),
(20, 'Music', 1, '0000-00-00 00:00:00', '2019-08-02 06:22:35'),
(21, 'Art', 1, '0000-00-00 00:00:00', '2019-08-02 06:22:40'),
(22, 'Photography ', 1, '0000-00-00 00:00:00', '2019-08-02 06:22:44'),
(23, 'Gaming', 1, '0000-00-00 00:00:00', '2019-08-02 06:22:50'),
(24, 'Education', 1, '0000-00-00 00:00:00', '2019-08-02 06:22:55'),
(25, 'Self Improvement and Motivation', 1, '0000-00-00 00:00:00', '2019-08-02 06:23:02'),
(26, 'Fan Fiction', 1, '0000-00-00 00:00:00', '2019-08-02 06:23:08');

-- --------------------------------------------------------

--
-- Table structure for table `like_details`
--

CREATE TABLE `like_details` (
  `like_id` int(11) NOT NULL,
  `creator_id` int(11) NOT NULL,
  `donator_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `like_details`
--

INSERT INTO `like_details` (`like_id`, `creator_id`, `donator_id`, `created`, `modified`, `status`) VALUES
(3, 5, 1, '2019-08-02 19:26:48', '2019-08-03 00:56:48', 1),
(6, 5, 9, '2019-08-05 14:43:25', '2019-08-05 20:13:25', 1),
(7, 12, 9, '2019-08-05 14:43:33', '2019-08-05 20:13:33', 1),
(8, 24, 4, '2019-08-22 08:14:25', '2019-08-22 13:44:25', 1),
(9, 28, 4, '2019-08-22 08:15:51', '2019-08-22 13:45:51', 1),
(10, 15, 4, '2019-08-22 08:15:59', '2019-08-22 13:45:59', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mail_details`
--

CREATE TABLE `mail_details` (
  `mail_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `from` varchar(255) NOT NULL,
  `to` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mail_details`
--

INSERT INTO `mail_details` (`mail_id`, `name`, `from`, `to`, `phone`, `subject`, `message`, `status`, `created`, `modified`) VALUES
(1, 'klod', 'klod@test.com', 'info@Boostzone.com', 'fghdg', 'gdgfd', 'gfdcgf', 1, '2019-08-03 15:09:51', '2019-08-03 15:09:51'),
(2, 'klodov', 'klodov@test.com', 'info@Boostzone.xyz', 'e4r4354', 'sdsadsa', 'sefrsawfds', 1, '2019-08-03 15:13:27', '2019-08-03 15:13:27'),
(3, 'Kevin', 'raphaeKemSmoli@gmail.com', 'info@Boostzone.xyz', '84238768533', 'Mailing via the feedback form.', 'Hello!  Boostzone.xyz \r\n \r\nWe offer \r\n \r\nSending your business proposition through the feedback form which can be found on the sites in the contact partition. Contact form are filled in by our program and the captcha is solved. The advantage of this method is', 1, '2019-08-04 18:33:04', '2019-08-04 18:33:04'),
(4, 'Emerson', '00000@----.com', 'info@Boostzone.xyz', '79666666666', '223653167', 'Bulk mailings:\n- By email addresses\n- Site application forms\n- Viber / WattsApp / Telegram\n- Promotion of social networks\n\nDatabases of any countries of the world\nLow prices\nHigh efficiency\n\nContact: +7(929)634-24-49 (WhatsApp)', 1, '2019-08-13 06:35:13', '2019-08-13 06:35:13'),
(5, 'Bridgett', '333@----.com', 'info@Boostzone.xyz', '777777777', '608224', 'Bulk mailings:\n- By email addresses\n- Site application forms\n- Viber / WattsApp / Telegram\n- Promotion of social networks\n\nDatabases of any countries of the world\nLow prices\nHigh efficiency\n\nContact: 7(929)634-24-49 (WhatsApp)', 1, '2019-08-13 06:35:14', '2019-08-13 06:35:14'),
(6, 'Austinbrory', 'support@monkeydigital.co', 'info@Boostzone.xyz', '82196174844', 'Daily Social Posting Service', 'Dropped in website’s rankings? Try our new Slow Link building Service. \r\nWe will run a slow & steady link building campaign for 7 days and send you a report with 140 live Social posts \r\n \r\nMore info and more variations in posts: \r\nhttps://monkeydigital.co', 1, '2019-08-18 03:21:57', '2019-08-18 03:21:57'),
(7, 'Andreas Mboweni', 'webcontact@alliedconsults.com', 'info@Boostzone.xyz', '82317238273', 'Business Partnership', 'Dear , \r\n \r\nI am reaching out to you based on a request from a profiled client who is looking for a potential investment opportunity within your scope of business . \r\n \r\nDetails of investment proposal will be sent out to you on reading back from you as we', 1, '2019-08-28 07:34:42', '2019-08-28 07:34:42'),
(8, 'GeraldLip', 'dorothekuipers@tele2.nl', 'info@Boostzone.xyz', '87786518268', 'Beatport Music Releases', 'Hello, \r\nMP3s Club Music for DJs, More Info: http://0daymusic.orgt \r\nDownload 0DAY-MP3s Private Server, For DJs Electronika Musica \r\n \r\nRegards, \r\n0DAY Music', 1, '2019-09-01 11:40:59', '2019-09-01 11:41:00'),
(9, 'WendyNah', 'promo.naishpeter@gmail.com', 'info@Boostzone.xyz', '86214511418', 'We love to invite you', 'Hello! \r\nOur company is launching a new digital business card that meet all the needs of the digital age. \r\nWe would like to invite you to our celebration launch special! \r\nFREE DIGITAL BUSINESS CARD \r\nhttps://clik.site/socicard \r\nSociCard will skyrocket ', 1, '2019-09-03 09:26:01', '2019-09-03 09:26:01'),
(10, 'Ronaldtup', 'vernflint5@aol.com', 'info@Boostzone.xyz', '82355435789', 'That is an marvellousoblation in compensation you. http://maicapile.ml/dlwpj', 'Lay eyes on is  a kindtender for you. http://ovhamderwli.tk/se2lq', 1, '2019-09-05 00:50:05', '2019-09-05 00:50:05');

-- --------------------------------------------------------

--
-- Table structure for table `media_details`
--

CREATE TABLE `media_details` (
  `media_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `description` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media_details`
--

INSERT INTO `media_details` (`media_id`, `name`, `type`, `year`, `description`, `user_id`, `status`) VALUES
(1, 'Like Eneominion', '', 2000, 'G is an award winning brand design consultancy with projects that touch many disciplines from brand identity and strategic design to digital experiences.', 5, 1),
(2, 'khaled bh', '', 2000, 'KNOXVILLE, Tenn. – July 17, 2019 – Blühen Botanicals and the University of Tennessee Institute of Agriculture are pleased to announce an agreement ', 12, 1),
(3, 'Osman ', '', 2000, 'Hi, I am using boostzone Platform. Checkout my profile here!', 15, 1),
(4, 'Gods son', '', 2000, 'Designer', 9, 1),
(5, 'Steve', '', 2000, 'Hi, I am using boostzone Platform. Checkout my profile here!', 17, 1),
(6, 'Jarvis', '', 1985, 'Hi, I am using boostzone Platform. Checkout my profile here!', 18, 1),
(7, 'Hannah', '', 2000, 'Hi, I am using boostzone Platform. Checkout my profile here!', 19, 1),
(8, 'pluto is a planet', '', 2000, 'Its all clear now ', 7, 1),
(9, 'admin@admin.com', '', 2000, 'Hi, I am using Boostzone Platform. Checkout my profile here!', 23, 1),
(10, 'Firefox inc', '', 2019, 'Hi, I am using Boostzone Platform. Checkout my profile here!', 24, 1),
(11, 'Michelle', '', 2000, 'Hi, I am using Boostzone Platform. Checkout my profile here!', 27, 1),
(12, 'Olivia', '', 1901, 'test  xxx\r\n\r\ngiv money plz\r\n', 28, 1),
(13, 'dennis', '', 2000, 'Hi, I am using Boostzone Platform. Checkout my profile here!', 30, 1),
(14, 'Designer', '', 2010, 'Hi, I am using Boostzone Platform. Checkout my profile here!', 33, 1),
(15, 'James', '', 2000, 'Hi, I am using Boostzone Platform. Checkout my profile here!', 38, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `payment_id` int(11) NOT NULL,
  `razorpay_payment_id` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `creator_id` int(11) NOT NULL,
  `donator_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`payment_id`, `razorpay_payment_id`, `product_id`, `amount`, `creator_id`, `donator_id`, `created`, `modified`, `status`) VALUES
(1, 'pay_D3LFYFuCWs2Mgv', 'v95gxffnftp3l2b0sw8co8', '25', 15, 16, '2019-08-08 06:40:23', '2019-08-08 12:10:23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subscribtion_details`
--

CREATE TABLE `subscribtion_details` (
  `s_id` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscribtion_details`
--

INSERT INTO `subscribtion_details` (`s_id`, `email`, `status`, `created`, `modified`) VALUES
(NULL, 'info@Boostzone.xyz', 1, '0000-00-00 00:00:00', '2019-08-04 03:52:28'),
(NULL, 'info@Boostzone.xyz', 1, '0000-00-00 00:00:00', '2019-08-04 03:52:40'),
(NULL, 'info@Boostzone.xyz', 1, '0000-00-00 00:00:00', '2019-08-05 13:54:44'),
(NULL, 'info@Boostzone.xyz', 1, '0000-00-00 00:00:00', '2019-08-21 12:09:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `oauth_provider` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `oauth_provider`, `first_name`, `last_name`, `email`, `password`, `gender`, `picture`, `mobile_no`, `role_id`, `created`, `modified`, `status`) VALUES
(1, '', 'admin', 'admin', 'admin@admin.com', 'admin123', NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(4, 'google', 'James', 'family_name', 'James@gmail.com', NULL, NULL, 'https://lh4.googleusercontent.com/-DQGoaDObe7Q/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rfcEBXnJ1YOCw3L4tPCjdPYkxNNKg/photo.jpg', NULL, 2, '2019-08-02 06:54:16', '2019-08-02 06:54:16', 1),
(11, '', 'anonymous_user', 'anonymous_user', 'donator@test.com', 'test', NULL, NULL, NULL, 2, '2019-08-03 06:10:07', '0000-00-00 00:00:00', 1),
(13, '', 'anonymous_user', 'anonymous_user', 'anonymous_user@test.com', 'test', NULL, 'https://Boostzone.xyz/assets/images/default-avatar.png', NULL, 3, '2019-08-03 14:32:05', '0000-00-00 00:00:00', 1),
(14, 'google', 'anonymous_user', 'anonymous_user', 'anonymous_user@gmail.com', NULL, NULL, '', NULL, 3, '2019-08-04 06:46:31', '2019-08-04 06:46:31', 1),
(15, '', 'Music ', 'anonymous_user', 'anonymous_user@yahoo.com', 'dwnqicuqwniuc', NULL, 'https://Boostzone.xyz/uploads/profile/default-avatar.png', '', 3, '2019-08-08 06:02:14', '0000-00-00 00:00:00', 1),
(16, '', 'anonymous_user', 'anonymous_user', 'anonymous_user@anonymous_user.com', 'anonymous_user', NULL, 'https://Boostzone.xyz/assets/images/default-avatar.png', NULL, 2, '2019-08-08 06:35:23', '0000-00-00 00:00:00', 1),
(20, '', '', '', 'anonymous_user@gmail.com', 'Boostzonetest', NULL, 'https://Boostzone.xyz/assets/images/default-avatar.png', NULL, 2, '2019-08-11 08:00:14', '0000-00-00 00:00:00', 1),
(24, '', 'anonymous_user', 'anonymous_user', 'anonymous_user@gmail.com', 'Admin@123', NULL, 'https://Boostzone.xyz/uploads/profile/notification.png', '', 3, '2019-08-15 16:52:55', '0000-00-00 00:00:00', 1),
(25, '', 'anonymous_user', 'anonymous_user', 'anonymous_user@aol.com', 'anonymous_user@123', NULL, 'https://www.Boostzone.xyz/assets/images/default-avatar.png', NULL, 3, '2019-08-16 06:57:29', '0000-00-00 00:00:00', 1),
(26, '', 'anonymous_user', 'anonymous_user', 'anonymous_user@gmail.com', 'anonymous_user@000', NULL, 'https://www.Boostzone.xyz/assets/images/default-avatar.png', NULL, 2, '2019-08-16 07:02:57', '0000-00-00 00:00:00', 1),
(28, '', 'klod', 'bh', 'khaled@hotmail.fr', 'test123', NULL, 'https://Boostzone.xyz/uploads/profile/IMG_0110.jpg', '9940173233', 3, '2019-08-20 06:14:16', '0000-00-00 00:00:00', 1),
(29, '', 'anonymous_user', 'anonymous_user', 'anonymous_user@aol.com', 'anonymous_user', NULL, 'https://Boostzone.xyz/assets/images/default-avatar.png', NULL, 3, '2019-08-20 06:19:37', '0000-00-00 00:00:00', 1),
(30, '', 'anonymous_user', 'anonymous_user', 'anonymous_user@yandex.ru', 'highroller', NULL, 'https://Boostzone.xyz/uploads/profile/IMG_0110.jpg', '9940173233', 2, '2019-08-20 06:20:17', '0000-00-00 00:00:00', 1),
(32, '', 'anonymous_user', 'anonymous_user', 'anonymous_user@web.com', 'test123', NULL, 'https://Boostzone.xyz/assets/images/default-avatar.png', NULL, 2, '2019-08-20 06:32:34', '0000-00-00 00:00:00', 1),
(33, 'google', 'Allan', 'Ignatius', 'allanignatis@gmail.com', NULL, NULL, 'https://Boostzone.xyz/uploads/profile/NSDC_Logo_in_clear_background.png', 'asdf', 3, '2019-08-20 14:48:27', '2019-08-20 14:48:27', 1),
(34, 'google', 'Boomi', 'Nathan', 'eboominathan@gmail.com', NULL, NULL, 'https://lh3.googleusercontent.com/a-/AAuE7mCyGNoYdd258pFyfweOnrxIIrDVVJSF4K61NtHKOw', NULL, 3, '2019-08-20 15:09:56', '2019-08-20 15:09:56', 1),
(35, 'google', 'Allan', 'Ignatius', 'allan@jarvissoftech.com', NULL, NULL, '', NULL, 3, '2019-08-20 17:35:55', '2019-08-20 17:35:55', 1),
(36, 'google', 'Jassmine', 'Williams', 'jasssminewilliams@gmail.com', NULL, NULL, 'https://lh5.googleusercontent.com/-ZG9sbvlfndo/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rdp5JKlL-7Mm05FPecd_hcbC7izQw/photo.jpg', NULL, 3, '2019-08-20 17:40:13', '2019-08-20 17:40:13', 1),
(37, '', 'anonymous_user', 'anonymous_user', 'rawla.tejasvi@gmail.com', 'Boostzone.XYZ', NULL, 'https://Boostzone.xyz/assets/images/default-avatar.png', NULL, 3, '2019-08-29 11:09:30', '0000-00-00 00:00:00', 1),
(38, 'google', 'Alan', 'watts', 'allan@watts.org', NULL, NULL, '', '', 3, '2019-09-03 17:47:12', '2019-09-03 17:47:12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_category`
--

CREATE TABLE `user_category` (
  `uc_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_category`
--

INSERT INTO `user_category` (`uc_id`, `user_id`, `category_id`, `status`, `created_on`, `modified`) VALUES
(1, 3, 1, 1, '2019-08-02 06:54:01', '2019-08-02 06:54:01'),
(2, 3, 2, 1, '2019-08-02 06:54:01', '2019-08-02 06:54:01'),
(14, 6, 1, 1, '2019-08-02 05:38:06', '2019-08-02 17:38:06'),
(15, 6, 2, 1, '2019-08-02 05:38:06', '2019-08-02 17:38:06'),
(16, 6, 3, 1, '2019-08-02 05:38:06', '2019-08-02 17:38:06'),
(23, 10, 10, 1, '2019-08-03 09:31:53', '2019-08-03 09:31:53'),
(24, 10, 11, 1, '2019-08-03 09:31:53', '2019-08-03 09:31:53'),
(29, 14, 12, 1, '2019-08-04 06:52:47', '2019-08-04 06:52:47'),
(30, 14, 21, 1, '2019-08-04 06:52:47', '2019-08-04 06:52:47'),
(31, 12, 10, 1, '2019-08-04 07:06:26', '2019-08-04 07:06:26'),
(32, 12, 11, 1, '2019-08-04 07:06:26', '2019-08-04 07:06:26'),
(33, 12, 12, 1, '2019-08-04 07:06:26', '2019-08-04 07:06:26'),
(34, 12, 13, 1, '2019-08-04 07:06:26', '2019-08-04 07:06:26'),
(35, 12, 14, 1, '2019-08-04 07:06:26', '2019-08-04 07:06:26'),
(36, 12, 15, 1, '2019-08-04 07:06:26', '2019-08-04 07:06:26'),
(37, 12, 16, 1, '2019-08-04 07:06:26', '2019-08-04 07:06:26'),
(38, 12, 17, 1, '2019-08-04 07:06:26', '2019-08-04 07:06:26'),
(39, 5, 10, 1, '2019-08-04 08:01:20', '2019-08-04 08:01:20'),
(40, 5, 11, 1, '2019-08-04 08:01:20', '2019-08-04 08:01:20'),
(41, 5, 12, 1, '2019-08-04 08:01:20', '2019-08-04 08:01:20'),
(42, 5, 13, 1, '2019-08-04 08:01:20', '2019-08-04 08:01:20'),
(43, 5, 14, 1, '2019-08-04 08:01:20', '2019-08-04 08:01:20'),
(44, 5, 15, 1, '2019-08-04 08:01:20', '2019-08-04 08:01:20'),
(45, 5, 16, 1, '2019-08-04 08:01:20', '2019-08-04 08:01:20'),
(46, 5, 17, 1, '2019-08-04 08:01:20', '2019-08-04 08:01:20'),
(47, 9, 17, 1, '2019-08-05 04:00:35', '2019-08-05 16:00:35'),
(48, 9, 19, 1, '2019-08-05 04:00:35', '2019-08-05 16:00:35'),
(49, 9, 20, 1, '2019-08-05 04:00:35', '2019-08-05 16:00:35'),
(50, 9, 22, 1, '2019-08-05 04:00:36', '2019-08-05 16:00:36'),
(51, 9, 23, 1, '2019-08-05 04:00:36', '2019-08-05 16:00:36'),
(54, 15, 14, 1, '2019-08-08 06:04:18', '2019-08-08 06:04:18'),
(55, 15, 16, 1, '2019-08-08 06:04:18', '2019-08-08 06:04:18'),
(56, 15, 20, 1, '2019-08-08 06:04:18', '2019-08-08 06:04:18'),
(57, 17, 10, 1, '2019-08-10 03:55:39', '2019-08-10 03:55:39'),
(58, 17, 11, 1, '2019-08-10 03:55:39', '2019-08-10 03:55:39'),
(59, 17, 15, 1, '2019-08-10 03:55:39', '2019-08-10 03:55:39'),
(60, 17, 16, 1, '2019-08-10 03:55:39', '2019-08-10 03:55:39'),
(61, 18, 10, 1, '2019-08-10 03:57:15', '2019-08-10 03:57:15'),
(62, 18, 15, 1, '2019-08-10 03:57:15', '2019-08-10 03:57:15'),
(63, 18, 16, 1, '2019-08-10 03:57:15', '2019-08-10 03:57:15'),
(64, 7, 14, 1, '2019-08-11 07:55:17', '2019-08-11 07:55:17'),
(65, 7, 23, 1, '2019-08-11 07:55:17', '2019-08-11 07:55:17'),
(66, 22, 10, 1, '2019-08-15 12:32:22', '2019-08-15 00:32:22'),
(67, 22, 11, 1, '2019-08-15 12:32:22', '2019-08-15 00:32:22'),
(68, 23, 20, 1, '2019-08-15 04:49:44', '2019-08-15 16:49:44'),
(69, 23, 21, 1, '2019-08-15 04:49:44', '2019-08-15 16:49:44'),
(70, 23, 22, 1, '2019-08-15 04:49:44', '2019-08-15 16:49:44'),
(71, 23, 23, 1, '2019-08-15 04:49:44', '2019-08-15 16:49:44'),
(72, 23, 24, 1, '2019-08-15 04:49:44', '2019-08-15 16:49:44'),
(73, 23, 25, 1, '2019-08-15 04:49:44', '2019-08-15 16:49:44'),
(74, 23, 26, 1, '2019-08-15 04:49:44', '2019-08-15 16:49:44'),
(78, 28, 15, 1, '2019-08-20 06:14:34', '2019-08-20 06:14:34'),
(79, 28, 16, 1, '2019-08-20 06:14:34', '2019-08-20 06:14:34'),
(80, 28, 20, 1, '2019-08-20 06:14:34', '2019-08-20 06:14:34'),
(81, 28, 22, 1, '2019-08-20 06:14:34', '2019-08-20 06:14:34'),
(82, 28, 23, 1, '2019-08-20 06:14:34', '2019-08-20 06:14:34'),
(83, 28, 26, 1, '2019-08-20 06:14:34', '2019-08-20 06:14:34'),
(84, 31, 23, 1, '2019-08-20 06:26:14', '2019-08-20 06:26:14'),
(85, 33, 11, 1, '2019-08-20 02:48:45', '2019-08-20 14:48:45'),
(86, 33, 12, 1, '2019-08-20 02:48:45', '2019-08-20 14:48:45'),
(87, 33, 13, 1, '2019-08-20 02:48:45', '2019-08-20 14:48:45'),
(88, 33, 16, 1, '2019-08-20 02:48:45', '2019-08-20 14:48:45'),
(89, 33, 17, 1, '2019-08-20 02:48:45', '2019-08-20 14:48:45'),
(90, 33, 19, 1, '2019-08-20 02:48:45', '2019-08-20 14:48:45'),
(91, 34, 10, 1, '2019-08-20 03:10:12', '2019-08-20 15:10:12'),
(92, 34, 11, 1, '2019-08-20 03:10:12', '2019-08-20 15:10:12'),
(93, 35, 11, 1, '2019-08-20 05:36:07', '2019-08-20 17:36:07'),
(94, 35, 12, 1, '2019-08-20 05:36:07', '2019-08-20 17:36:07'),
(95, 36, 11, 1, '2019-08-20 05:40:22', '2019-08-20 17:40:22'),
(96, 36, 15, 1, '2019-08-20 05:40:22', '2019-08-20 17:40:22'),
(97, 36, 26, 1, '2019-08-20 05:40:22', '2019-08-20 17:40:22'),
(98, 24, 10, 1, '2019-08-22 08:19:36', '2019-08-22 08:19:36'),
(99, 24, 11, 1, '2019-08-22 08:19:36', '2019-08-22 08:19:36'),
(100, 24, 12, 1, '2019-08-22 08:19:36', '2019-08-22 08:19:36'),
(101, 24, 13, 1, '2019-08-22 08:19:36', '2019-08-22 08:19:36'),
(102, 37, 24, 1, '2019-08-29 11:10:17', '2019-08-29 11:10:17'),
(103, 38, 10, 1, '2019-09-03 05:47:26', '2019-09-03 17:47:26'),
(104, 38, 11, 1, '2019-09-03 05:47:26', '2019-09-03 17:47:26'),
(105, 38, 12, 1, '2019-09-03 05:47:26', '2019-09-03 17:47:26');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `role_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`role_id`, `name`, `status`, `created_on`, `modified`) VALUES
(1, 'admin', 1, '2019-07-13 04:46:33', '2019-07-14 15:22:33'),
(2, 'influencer', 1, '2019-07-13 04:48:02', '2019-07-14 15:22:36'),
(3, 'creator', 1, '2019-07-13 04:48:22', '2019-07-14 15:22:39'),
(4, 'others', 1, '2019-07-13 04:48:22', '2019-07-14 15:22:43'),
(5, 'agency', 1, '2019-07-13 05:55:56', '2019-07-14 15:22:47');

-- --------------------------------------------------------

--
-- Table structure for table `video_details`
--

CREATE TABLE `video_details` (
  `video_id` int(11) NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video_details`
--

INSERT INTO `video_details` (`video_id`, `video_url`, `user_id`, `type`, `category_id`, `created`, `modified`, `status`) VALUES
(2, 'https://www.youtube.com/embed/ljrKu4Pt_mg', 5, 'youtube', 1, '2019-08-02 07:16:52', '2019-08-02 07:16:52', 1),
(3, 'https://www.youtube.com/embed/ljrKu4Pt_mg', 5, 'youtube', 2, '2019-08-02 07:16:52', '2019-08-02 07:16:52', 1),
(4, 'https://www.youtube.com/embed/ljrKu4Pt_mg', 5, 'youtube', 4, '2019-08-02 07:16:52', '2019-08-02 07:16:52', 1),
(5, 'https://www.youtube.com/embed/ljrKu4Pt_mg', 5, 'twitter', 9, '2019-08-02 07:18:47', '2019-08-02 07:18:47', 1),
(11, 'https://www.youtube.com/embed/EkWJEBxzYb0', 12, 'youtube', 10, '2019-08-04 07:09:14', '2019-08-04 07:09:14', 1),
(17, 'https://www.youtube.com/watch?v=9mWLig0s_9k', 15, 'twitter', 20, '2019-08-08 06:12:51', '2019-08-08 06:12:51', 1),
(18, 'https://www.youtube.com/watch?v=OmeWleosFp0', 15, 'soundcloud', 9, '2019-08-08 06:13:38', '2019-08-08 06:13:38', 1),
(23, 'https://www.youtube.com/watch?v=OmeWleosFp0', 15, 'youtube', 20, '2019-08-08 06:26:01', '2019-08-08 06:26:01', 1),
(24, 'https://soundcloud.com/nlechoppa/shotta-flow-3', 15, 'youtube', 20, '2019-08-08 06:26:01', '2019-08-08 06:26:01', 1),
(25, 'https://www.youtube.com/watch?v=B32augS0e2k', 15, 'youtube', 16, '2019-08-08 06:26:01', '2019-08-08 06:26:01', 1),
(26, 'https://twitter.com/pandoraskids/status/1147566937632886784', 9, 'twitter', 9, '2019-08-10 03:50:05', '2019-08-10 03:50:05', 1),
(27, 'https://www.youtube.com/embed/p4YfmVD_wlw', 9, 'youtube', 9, '2019-08-10 03:50:45', '2019-08-10 03:50:45', 1),
(28, 'https://www.youtube.com/watch?v=Nbg21HOQOzY', 9, 'youtube', 22, '2019-08-10 03:50:45', '2019-08-10 03:50:45', 1),
(29, 'https://www.youtube.com/watch?v=Dt78hzvoUtY', 7, 'youtube', 23, '2019-08-11 07:56:12', '2019-08-11 07:56:12', 1),
(30, 'https://www.youtube.com/embed/p4YfmVD_wlw', 17, 'youtube', 10, '2019-08-13 05:11:29', '2019-08-13 05:11:29', 1),
(35, 'https://youtube.com/watch?v=9-iVp_XR8EQ', 24, 'youtube', 10, '2019-08-15 19:38:37', '2019-08-15 19:38:37', 1),
(36, 'https://www.youtube.com/watch?v=9mWLig0s_9k', 28, 'youtube', 15, '2019-08-20 06:16:15', '2019-08-20 06:16:15', 1),
(37, 'https://www.youtube.com/watch?v=B32augS0e2k', 28, 'youtube', 16, '2019-08-20 06:16:24', '2019-08-20 06:16:24', 1),
(38, 'https://www.youtube.com/watch?v=Dt78hzvoUtY', 28, 'youtube', 15, '2019-08-20 06:16:30', '2019-08-20 06:16:30', 1),
(39, 'https://www.youtube.com/watch?v=H4Tpyb0rU40', 33, 'youtube', 11, '2019-08-28 16:49:37', '2019-08-28 16:49:37', 1),
(40, 'https://www.youtube.com/watch?v=H4Tpyb0rU40', 33, 'youtube', 17, '2019-08-28 16:50:34', '2019-08-28 16:50:34', 1),
(41, 'https://www.youtube.com/watch?v=H4Tpyb0rU40', 33, 'youtube', 17, '2019-08-28 16:49:52', '2019-08-28 16:49:52', 1),
(42, 'https://www.youtube.com/watch?v=H4Tpyb0rU40', 33, 'youtube', 19, '2019-08-28 16:51:01', '2019-08-28 16:51:01', 1),
(43, 'https://www.youtube.com/watch?v=OjljgkCQv5c', 38, 'youtube', 10, '2019-09-03 17:49:07', '2019-09-03 17:49:07', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_favour`
--
ALTER TABLE `admin_favour`
  ADD PRIMARY KEY (`fav_id`);

--
-- Indexes for table `bank_details`
--
ALTER TABLE `bank_details`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `category_details`
--
ALTER TABLE `category_details`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `like_details`
--
ALTER TABLE `like_details`
  ADD PRIMARY KEY (`like_id`);

--
-- Indexes for table `mail_details`
--
ALTER TABLE `mail_details`
  ADD PRIMARY KEY (`mail_id`);

--
-- Indexes for table `media_details`
--
ALTER TABLE `media_details`
  ADD PRIMARY KEY (`media_id`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_category`
--
ALTER TABLE `user_category`
  ADD PRIMARY KEY (`uc_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `video_details`
--
ALTER TABLE `video_details`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_favour`
--
ALTER TABLE `admin_favour`
  MODIFY `fav_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `bank_details`
--
ALTER TABLE `bank_details`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category_details`
--
ALTER TABLE `category_details`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `like_details`
--
ALTER TABLE `like_details`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mail_details`
--
ALTER TABLE `mail_details`
  MODIFY `mail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `media_details`
--
ALTER TABLE `media_details`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user_category`
--
ALTER TABLE `user_category`
  MODIFY `uc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `video_details`
--
ALTER TABLE `video_details`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
