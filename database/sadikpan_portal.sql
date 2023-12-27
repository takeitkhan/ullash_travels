-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 27, 2023 at 06:46 AM
-- Server version: 10.1.48-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sadikpan_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_menus`
--

CREATE TABLE `admin_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_menus`
--

INSERT INTO `admin_menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Primary', '2021-12-28 15:08:30', '2021-12-28 15:17:52'),
(2, 'Footer Menu', '2023-03-18 03:05:25', '2023-03-18 03:05:25'),
(3, 'Help and Support', '2023-04-02 04:18:55', '2023-04-02 04:18:55'),
(4, 'Mobile Primary Menu', '2021-12-28 15:08:30', '2021-12-28 15:17:52');

-- --------------------------------------------------------

--
-- Table structure for table `admin_menu_items`
--

CREATE TABLE `admin_menu_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `label` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '0',
  `class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu` bigint(20) UNSIGNED NOT NULL,
  `depth` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_menu_items`
--

INSERT INTO `admin_menu_items` (`id`, `label`, `link`, `parent`, `sort`, `class`, `menu`, `depth`, `created_at`, `updated_at`) VALUES
(1, '<img width=\"200\" src=\"/public/frontend/assets/img/logo.svg\" //>', '/', 0, 2, NULL, 1, 0, '2021-12-28 15:08:58', '2023-08-26 02:23:43'),
(3, 'Services', '/page/services', 0, 1, NULL, 1, 0, '2023-03-06 21:32:16', '2023-08-17 01:39:29'),
(4, 'About Us', '/page/about-us-2', 0, 0, NULL, 1, 0, '2023-03-06 21:57:55', '2023-08-17 01:39:29'),
(5, 'Blogs', '/page/blogs', 0, 3, NULL, 1, 0, '2023-03-18 02:44:02', '2023-08-17 01:09:28'),
(6, 'All mattresses', '#', 0, 0, NULL, 2, 0, '2023-03-18 03:05:41', '2023-03-18 03:05:54'),
(7, 'About us', '/page/about-us', 0, 1, NULL, 2, 0, '2023-03-18 03:05:53', '2023-03-18 03:06:14'),
(8, 'Contact us', '/page/conatct-us', 0, 2, NULL, 2, 0, '2023-03-18 03:06:13', '2023-03-18 03:06:14'),
(10, 'Our Team', '/page/our-team', 0, 4, NULL, 1, 0, '2023-03-18 03:57:05', '2023-08-17 01:10:06'),
(12, 'About us', '#', 0, 0, NULL, 3, 0, '2023-04-02 04:19:16', '2023-04-02 04:19:37'),
(13, 'Private and Policy', '#', 0, 1, NULL, 3, 0, '2023-04-02 04:19:37', '2023-04-02 04:19:42'),
(14, 'Contact us', '#', 0, 2, NULL, 3, 0, '2023-04-02 04:19:42', '2023-04-02 04:19:44'),
(16, 'http://localhost/s_council/public/frontend/assets/img/logo.svg', '/', 0, 0, NULL, 4, 0, '2021-12-28 15:08:58', '2023-08-23 05:32:37'),
(17, 'Services', '/page/services', 0, 2, NULL, 4, 0, '2023-03-06 21:32:16', '2023-08-23 22:42:05'),
(18, 'Blogs', '/page/blogs', 0, 3, NULL, 4, 0, '2023-03-18 02:44:02', '2023-08-17 01:09:28'),
(19, 'About us', '/page/about-us-2', 0, 1, NULL, 4, 0, '2023-03-18 03:05:53', '2023-08-23 22:42:17'),
(20, 'Our Team', '/page/our-team', 0, 4, NULL, 4, 0, '2023-03-18 03:57:05', '2023-08-17 01:10:06');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `taxonomy_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_status` enum('publish','draft') COLLATE utf8mb4_unicode_ci DEFAULT 'publish',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `image`, `parent_id`, `taxonomy_type`, `is_status`, `created_at`, `updated_at`) VALUES
(1, 'Ielts', 'ielts', NULL, NULL, NULL, 'course_category', NULL, '2021-12-27 18:06:10', '2021-12-27 18:06:10'),
(2, 'Homepage slider', 'homepage-slider', NULL, NULL, NULL, 'slider_category', NULL, '2022-01-08 16:29:30', '2022-01-08 16:29:30'),
(11, 'Pro comfort Basic', 'pro-comfort', 'Firm, medium-firm, that stimulates and soothes.', '23', 15, 'product-category', 'publish', '2023-03-06 15:52:36', '2023-03-19 00:38:32'),
(12, 'Essential comfort', 'essential-comfort', 'Firm, medium-firm, that stimulates and soothes.', '10', NULL, 'product-category', 'publish', '2023-03-06 15:52:48', '2023-04-05 13:33:32'),
(13, 'Ortho comfort', 'ortho-comfort', NULL, NULL, NULL, 'product-category', NULL, '2023-03-06 15:52:55', '2023-03-06 15:52:55'),
(14, 'Hotel comfort', 'hotel-comfort', 'Firm, medium-firm, that stimulates and soothes.', '12', NULL, 'product-category', NULL, '2023-03-06 15:53:01', '2023-03-06 16:03:54'),
(15, 'Luxury comfort', 'luxury-comfort', 'Firm, medium-firm, that stimulates and soothes.', '25', NULL, 'product-category', 'publish', '2023-03-06 15:53:07', '2023-03-19 00:38:47');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(11) NOT NULL,
  `division_id` int(11) NOT NULL,
  `name` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_name` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` decimal(10,7) NOT NULL,
  `lon` decimal(10,7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `division_id`, `name`, `bn_name`, `lat`, `lon`) VALUES
(1, 3, 'Dhaka', 'ঢাকা', '23.7115253', '90.4111451'),
(2, 3, 'Faridpur', 'ফরিদপুর', '23.6070822', '89.8429406'),
(3, 3, 'Gazipur', 'গাজীপুর', '24.0022858', '90.4264283'),
(4, 3, 'Gopalganj', 'গোপালগঞ্জ', '23.0050857', '89.8266059'),
(5, 8, 'Jamalpur', 'জামালপুর', '24.9375330', '89.9377750'),
(6, 3, 'Kishoreganj', 'কিশোরগঞ্জ', '24.4449370', '90.7765750'),
(7, 3, 'Madaripur', 'মাদারীপুর', '23.1641020', '90.1896805'),
(8, 3, 'Manikganj', 'মানিকগঞ্জ', '23.8644000', '90.0047000'),
(9, 3, 'Munshiganj', 'মুন্সিগঞ্জ', '23.5422000', '90.5305000'),
(10, 8, 'Mymensingh', 'ময়মনসিংহ', '24.7471000', '90.4203000'),
(11, 3, 'Narayanganj', 'নারায়াণগঞ্জ', '23.6336600', '90.4964820'),
(12, 3, 'Narsingdi', 'নরসিংদী', '23.9322330', '90.7154100'),
(13, 8, 'Netrokona', 'নেত্রকোণা', '24.8709550', '90.7278870'),
(14, 3, 'Rajbari', 'রাজবাড়ি', '23.7574305', '89.6444665'),
(15, 3, 'Shariatpur', 'শরীয়তপুর', '23.2423000', '90.4348000'),
(16, 8, 'Sherpur', 'শেরপুর', '25.0204933', '90.0152966'),
(17, 3, 'Tangail', 'টাঙ্গাইল', '24.2513000', '89.9167000'),
(18, 5, 'Bogura', 'বগুড়া', '24.8465228', '89.3777550'),
(19, 5, 'Joypurhat', 'জয়পুরহাট', '25.0968000', '89.0227000'),
(20, 5, 'Naogaon', 'নওগাঁ', '24.7936000', '88.9318000'),
(21, 5, 'Natore', 'নাটোর', '24.4205560', '89.0002820'),
(22, 5, 'Nawabganj', 'নবাবগঞ্জ', '24.5965034', '88.2775122'),
(23, 5, 'Pabna', 'পাবনা', '23.9985240', '89.2336450'),
(24, 5, 'Rajshahi', 'রাজশাহী', '24.3745000', '88.6042000'),
(25, 5, 'Sirajgonj', 'সিরাজগঞ্জ', '24.4533978', '89.7006815'),
(26, 6, 'Dinajpur', 'দিনাজপুর', '25.6217061', '88.6354504'),
(27, 6, 'Gaibandha', 'গাইবান্ধা', '25.3287510', '89.5280880'),
(28, 6, 'Kurigram', 'কুড়িগ্রাম', '25.8054450', '89.6361740'),
(29, 6, 'Lalmonirhat', 'লালমনিরহাট', '25.9923000', '89.2847000'),
(30, 6, 'Nilphamari', 'নীলফামারী', '25.9317940', '88.8560060'),
(31, 6, 'Panchagarh', 'পঞ্চগড়', '26.3411000', '88.5541606'),
(32, 6, 'Rangpur', 'রংপুর', '25.7558096', '89.2444620'),
(33, 6, 'Thakurgaon', 'ঠাকুরগাঁও', '26.0336945', '88.4616834'),
(34, 1, 'Barguna', 'বরগুনা', '22.0953000', '90.1121000'),
(35, 1, 'Barishal', 'বরিশাল', '22.7010000', '90.3535000'),
(36, 1, 'Bhola', 'ভোলা', '22.6859230', '90.6481790'),
(37, 1, 'Jhalokati', 'ঝালকাঠি', '22.6406000', '90.1987000'),
(38, 1, 'Patuakhali', 'পটুয়াখালী', '22.3596316', '90.3298712'),
(39, 1, 'Pirojpur', 'পিরোজপুর', '22.5841000', '89.9720000'),
(40, 2, 'Bandarban', 'বান্দরবান', '22.1953275', '92.2183773'),
(41, 2, 'Brahmanbaria', 'ব্রাহ্মণবাড়িয়া', '23.9570904', '91.1119286'),
(42, 2, 'Chandpur', 'চাঁদপুর', '23.2332585', '90.6712912'),
(43, 2, 'Chattogram', 'চট্টগ্রাম', '22.3351090', '91.8340730'),
(44, 2, 'Cumilla', 'কুমিল্লা', '23.4682747', '91.1788135'),
(45, 2, 'Cox\'s Bazar', 'কক্স বাজার', '21.4272000', '92.0058000'),
(46, 2, 'Feni', 'ফেনী', '23.0159000', '91.3976000'),
(47, 2, 'Khagrachari', 'খাগড়াছড়ি', '23.1192850', '91.9846630'),
(48, 2, 'Lakshmipur', 'লক্ষ্মীপুর', '22.9424770', '90.8411840'),
(49, 2, 'Noakhali', 'নোয়াখালী', '22.8695630', '91.0993980'),
(50, 2, 'Rangamati', 'রাঙ্গামাটি', '22.7324000', '92.2985000'),
(51, 7, 'Habiganj', 'হবিগঞ্জ', '24.3749450', '91.4155300'),
(52, 7, 'Maulvibazar', 'মৌলভীবাজার', '24.4829340', '91.7774170'),
(53, 7, 'Sunamganj', 'সুনামগঞ্জ', '25.0658042', '91.3950115'),
(54, 7, 'Sylhet', 'সিলেট', '24.8897956', '91.8697894'),
(55, 4, 'Bagerhat', 'বাগেরহাট', '22.6515680', '89.7859380'),
(56, 4, 'Chuadanga', 'চুয়াডাঙ্গা', '23.6401961', '88.8418410'),
(57, 4, 'Jashore', 'যশোর', '23.1664300', '89.2081126'),
(58, 4, 'Jhenaidah', 'ঝিনাইদহ', '23.5448176', '89.1539213'),
(59, 4, 'Khulna', 'খুলনা', '22.8157740', '89.5686790'),
(60, 4, 'Kushtia', 'কুষ্টিয়া', '23.9012580', '89.1204820'),
(61, 4, 'Magura', 'মাগুরা', '23.4873370', '89.4199560'),
(62, 4, 'Meherpur', 'মেহেরপুর', '23.7622130', '88.6318210'),
(63, 4, 'Narail', 'নড়াইল', '23.1725340', '89.5126720'),
(64, 4, 'Satkhira', 'সাতক্ষীরা', '22.7185000', '89.0705000');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` int(11) NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bn_name` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` decimal(9,6) NOT NULL,
  `lon` decimal(9,6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name`, `bn_name`, `lat`, `lon`) VALUES
(1, 'Barishal', 'বরিশাল', '22.701002', '90.353451'),
(2, 'Chattogram', 'চট্টগ্রাম', '22.356851', '91.783182'),
(3, 'Dhaka', 'ঢাকা', '23.810332', '90.412518'),
(4, 'Khulna', 'খুলনা', '22.845641', '89.540328'),
(5, 'Rajshahi', 'রাজশাহী', '24.363589', '88.624135'),
(6, 'Rangpur', 'রংপুর', '25.743892', '89.275227'),
(7, 'Sylhet', 'সিলেট', '24.894929', '91.868706'),
(8, 'Mymensingh', 'ময়মনসিংহ', '24.747149', '90.420273');

-- --------------------------------------------------------

--
-- Table structure for table `frontend_settings`
--

CREATE TABLE `frontend_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci,
  `meta_type` enum('Text','Textarea','Select','Richeditor','Number','Checkbox','Gallery','Media') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_group` enum('General','Homepage','Header Section','Footer Section') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_order` int(11) DEFAULT NULL,
  `meta_placeholder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `frontend_settings`
--

INSERT INTO `frontend_settings` (`id`, `meta_title`, `meta_name`, `meta_value`, `meta_type`, `meta_group`, `meta_order`, `meta_placeholder`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Website Name', 'site_name', 'Sadik & Counsel', 'Text', 'General', NULL, NULL, NULL, '2021-12-27 17:33:28', '2023-08-22 05:41:20'),
(2, 'About website', 'site_description', NULL, 'Textarea', 'General', NULL, NULL, NULL, '2021-12-27 17:33:29', '2023-08-27 02:31:55'),
(3, 'Favicon', 'site_faviconimg_id', NULL, 'Media', 'General', NULL, NULL, NULL, '2021-12-27 17:33:29', '2023-08-22 05:41:20'),
(4, 'Logo', 'site_logoimg_id', NULL, 'Media', 'Header Section', NULL, NULL, NULL, '2021-12-27 17:33:29', '2023-08-22 05:55:08'),
(5, 'Footer Content', 'footer_content', 'West Kafrul, Begum Rokeya Shoroni, Koborsthan Lane, <br>\r\n            Taltola, Agargaon, Dhaka-1207.<br><br><div>Call Us: +880-255025299</div><div>Mail Us: info@sadikcounsel.com</div>', 'Richeditor', 'Footer Section', NULL, NULL, NULL, '2021-12-27 17:33:29', '2023-08-26 10:28:37'),
(6, 'Facebook', 'facebook_url', 'https://www.facebook.com/', 'Text', 'General', NULL, NULL, NULL, '2021-12-27 17:33:29', '2023-08-24 00:32:54'),
(9, 'Youtube', 'youtube_url', NULL, 'Text', 'General', NULL, NULL, NULL, '2021-12-27 17:33:29', '2021-12-28 15:06:33'),
(10, 'Phone', 'company_phone', '16227', 'Text', 'General', NULL, NULL, NULL, '2021-12-27 17:33:29', '2023-03-18 03:05:04'),
(11, 'Email', 'company_email', 'info@mail.com', 'Text', 'General', NULL, NULL, NULL, '2021-12-27 17:33:29', '2023-03-18 03:05:04'),
(14, 'Header Menu Name', 'header_menu_name', 'Primary', 'Text', 'Header Section', NULL, NULL, NULL, NULL, '2021-12-28 15:22:50'),
(15, 'Hero Section Image', 'home_faq_image', '56', 'Media', 'Homepage', 3, NULL, '', '2021-12-27 17:33:29', '2023-08-26 10:05:55'),
(17, 'Office location', 'office_location', 'Dhaka', 'Text', 'General', NULL, NULL, NULL, '2021-12-27 17:33:29', '2023-03-18 03:24:36'),
(22, 'Hero Section Sub Title', 'home_category_section_one_title', 'Best consultant TAX, VAT, Family service in Bangladesh.', 'Text', 'Homepage', 2, NULL, '', '2021-12-27 17:33:29', '2023-08-22 06:14:50'),
(29, 'Mobile Menu Name', 'mobile_menu_name', 'Mobile Primary Menu', 'Text', 'Header Section', NULL, NULL, NULL, NULL, '2021-12-28 15:22:50'),
(30, 'Bottom Footer Content', 'bottom_footer_content', 'Copyright © All rights reserved by Sadik Counsel', 'Richeditor', 'Footer Section', NULL, NULL, NULL, '2021-12-27 17:33:29', '2023-08-26 10:54:47'),
(31, 'Happy Clients', 'happy_clients', '90', 'Text', 'Homepage', 5, NULL, '', '2021-12-27 17:33:29', '2023-08-24 01:22:18'),
(32, 'Charges Dropped', 'charged_dropped', '5', 'Text', 'Homepage', 4, NULL, '', '2021-12-27 17:33:29', '2023-08-24 01:22:18'),
(33, 'Trusting Clients', 'trusting_clients', '75', 'Text', 'Homepage', 6, NULL, '', '2021-12-27 17:33:29', '2023-08-24 01:22:18'),
(34, 'Award Won', 'award_won', '25', 'Text', 'Homepage', 7, NULL, '', '2021-12-27 17:33:29', '2023-08-22 06:14:50'),
(35, 'Instagram', 'instagram_url', 'https://www.instagram.com/', 'Text', 'General', NULL, NULL, NULL, '2021-12-27 17:33:29', '2023-08-24 00:32:54'),
(36, 'Twitter', 'twitter_url', 'https://twitter.com/', 'Text', 'General', NULL, NULL, NULL, '2021-12-27 17:33:29', '2023-08-24 00:32:54'),
(37, 'LinkedIn', 'linkedin_url', 'https://www.linkedin.com/', 'Text', 'General', NULL, NULL, NULL, '2021-12-27 17:33:29', '2023-08-24 00:44:23'),
(38, 'Hero Section Title', 'home_page_title', 'Over 30 years experience we<br> know how difficult this is on your<br> family.', 'Richeditor', 'Homepage', 1, NULL, '', '2021-12-27 17:33:29', '2023-08-22 05:47:08');

-- --------------------------------------------------------

--
-- Table structure for table `medias`
--

CREATE TABLE `medias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `original_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_extension` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_directory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medias`
--

INSERT INTO `medias` (`id`, `user_id`, `original_name`, `filename`, `file_type`, `file_size`, `file_extension`, `file_directory`, `created_at`, `updated_at`) VALUES
(32, 1, 'a', 'untitled-design-5-1679318447.jpg', 'b', 'c', 'd', 'e', '2023-03-20 07:20:47', '2023-03-20 07:20:47'),
(37, 1, 'about-us.svg', 'about-us-1692260667.svg', 'image/svg+xml', '425707', 'svg', '/public/uploads/images/', '2023-08-17 02:24:27', '2023-08-17 02:24:27'),
(38, 1, 'about-us.svg', 'about-us-1692260684.svg', 'image/svg+xml', '425707', 'svg', '/public/uploads/images/', '2023-08-17 02:24:44', '2023-08-17 02:24:44'),
(39, 1, 'service.svg', 'service-1692261603.svg', 'image/svg+xml', '376349', 'svg', '/public/uploads/images/', '2023-08-17 02:40:03', '2023-08-17 02:40:03'),
(40, 1, 'team-sadik-counsel.svg', 'team-sadik-counsel-1692261717.svg', 'image/svg+xml', '278178', 'svg', '/public/uploads/images/', '2023-08-17 02:41:57', '2023-08-17 02:41:57'),
(41, 1, '1.png', '1-1692272166.png', 'image/png', '109785', 'png', '/public/uploads/images/', '2023-08-17 05:36:06', '2023-08-17 05:36:06'),
(42, 1, 'chat1.jpeg', 'chat1-1692277467.jpeg', 'image/jpeg', '90103', 'jpeg', '/public/uploads/images/', '2023-08-17 07:04:27', '2023-08-17 07:04:27'),
(43, 1, 'web-development1.png', 'web-development1-1692277609.png', 'image/png', '158619', 'png', '/public/uploads/images/', '2023-08-17 07:06:49', '2023-08-17 07:06:49'),
(44, 1, '1.png', '1-1692277705.png', 'image/png', '275903', 'png', '/public/uploads/images/', '2023-08-17 07:08:25', '2023-08-17 07:08:25'),
(45, 1, 'New_Logo_mini.png.jpg', 'newlogominipng-1692512345.jpg', 'image/jpeg', '16136', 'jpg', '/public/uploads/images/', '2023-08-20 00:19:05', '2023-08-20 00:19:05'),
(46, 1, 'vector.jpg', 'vector-1692512457.jpg', 'image/jpeg', '48143', 'jpg', '/public/uploads/images/', '2023-08-20 00:20:57', '2023-08-20 00:20:57'),
(47, 1, 'avatar-2.22ed88d.png', 'avatar-222ed88d-1692528317.png', 'image/png', '98405', 'png', '/public/uploads/images/', '2023-08-20 04:45:17', '2023-08-20 04:45:17'),
(48, 1, 'FjU2lkcWYAgNG6d.jpg', 'fju2lkcwyagng6d-1692528330.jpg', 'image/jpeg', '23029', 'jpg', '/public/uploads/images/', '2023-08-20 04:45:30', '2023-08-20 04:45:30'),
(49, 1, 'pexels-pixabay-220453.jpg', 'pexels-pixabay-220453-1692528336.jpg', 'image/jpeg', '23950', 'jpg', '/public/uploads/images/', '2023-08-20 04:45:36', '2023-08-20 04:45:36'),
(50, 1, 'L2hPMnB1ZXFlS1BrQ0xmVDAxTWJOZz09.jpg', 'l2hpmnb1zxfls1brq0xmvdaxtwjozz09-1692528558.jpg', 'image/jpeg', '20507', 'jpg', '/public/uploads/images/', '2023-08-20 04:49:18', '2023-08-20 04:49:18'),
(51, 1, 'unnamed (4).jpg', 'unnamed-4-1693050201.jpg', 'image/jpeg', '22167', 'jpg', '/public/uploads/images/', '2023-08-26 09:43:21', '2023-08-26 09:43:21'),
(52, 1, 'unnamed (3).jpg', 'unnamed-3-1693050201.jpg', 'image/jpeg', '19741', 'jpg', '/public/uploads/images/', '2023-08-26 09:43:21', '2023-08-26 09:43:21'),
(53, 1, 'unnamed (2).jpg', 'unnamed-2-1693050201.jpg', 'image/jpeg', '26692', 'jpg', '/public/uploads/images/', '2023-08-26 09:43:21', '2023-08-26 09:43:21'),
(54, 1, 'unnamed (1).jpg', 'unnamed-1-1693050201.jpg', 'image/jpeg', '40285', 'jpg', '/public/uploads/images/', '2023-08-26 09:43:21', '2023-08-26 09:43:21'),
(55, 1, 'rezaul.jpg', 'rezaul-1693050201.jpg', 'image/jpeg', '43669', 'jpg', '/public/uploads/images/', '2023-08-26 09:43:21', '2023-08-26 09:43:21'),
(56, 1, 'handshake-sadik.png', 'handshake-sadik-1693051518.png', 'image/png', '121237', 'png', '/public/uploads/images/', '2023-08-26 10:05:18', '2023-08-26 10:05:18'),
(57, 1, 'WhatsApp Image 2023-08-26 at 6.47.22 PM.jpeg', 'whatsapp-image-2023-08-26-at-64722-pm-1693054519.jpeg', 'image/jpeg', '20850', 'jpeg', '/public/uploads/images/', '2023-08-26 10:55:19', '2023-08-26 10:55:19'),
(58, 1, 'WhatsApp Image 2023-08-26 at 6.50.03 PM.jpeg', 'whatsapp-image-2023-08-26-at-65003-pm-1693054519.jpeg', 'image/jpeg', '44314', 'jpeg', '/public/uploads/images/', '2023-08-26 10:55:19', '2023-08-26 10:55:19'),
(59, 1, 'WhatsApp Image 2023-08-26 at 6.51.18 PM.jpeg', 'whatsapp-image-2023-08-26-at-65118-pm-1693054519.jpeg', 'image/jpeg', '31993', 'jpeg', '/public/uploads/images/', '2023-08-26 10:55:19', '2023-08-26 10:55:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_08_11_073824_create_menus_wp_table', 1),
(4, '2017_08_11_074006_create_menu_items_wp_table', 1),
(5, '2021_01_30_151530_create_medias_table', 1),
(6, '2021_02_08_225954_create_terms_table', 1),
(7, '2021_02_08_230957_create_posts_table', 1),
(8, '2021_02_09_195757_create_term_taxonomy_table', 1),
(9, '2021_02_09_203137_create_categories_table', 1),
(10, '2021_02_10_101053_create_frontend_settings', 1),
(11, '2021_07_14_054017_create_roles_table', 1),
(12, '2021_07_14_054544_create_role_users_table', 1),
(13, '2021_07_14_061139_create_route_groups_table', 1),
(14, '2021_07_14_061140_create_route_lists_table', 1),
(15, '2021_07_14_061655_create_route_list_roles_table', 1),
(18, '2021_12_24_235004_create_posts_field_table', 2),
(19, '2021_12_24_235502_create_posts_meta_table', 2),
(20, '2022_01_07_020302_create_post_custom_fields_table', 3),
(21, '2021_01_30_145239_create_product_categories_table', 4),
(22, '2021_01_30_150031_create_products_table', 4),
(23, '2021_02_17_222859_create_product_attributes_table', 4),
(24, '2021_02_17_223045_create_product_attribute_values_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `featured_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'page',
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci,
  `meta_keyword` longtext COLLATE utf8mb4_unicode_ci,
  `meta_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template` text COLLATE utf8mb4_unicode_ci,
  `is_status` enum('publish','draft') COLLATE utf8mb4_unicode_ci DEFAULT 'publish',
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `sub_title`, `order_by`, `slug`, `description`, `featured_image`, `term_type`, `category_id`, `meta_title`, `meta_description`, `meta_keyword`, `meta_author`, `template`, `is_status`, `author`, `created_at`, `updated_at`) VALUES
(21, 'Purchase Guide', NULL, NULL, 'purchase-guide', NULL, NULL, 'page', '', NULL, NULL, NULL, NULL, 'catalogue', 'publish', '1', '2023-03-06 21:31:44', '2023-04-13 04:05:53'),
(22, 'Mattress Selector', NULL, NULL, 'matress-selector', NULL, NULL, 'page', '', NULL, NULL, NULL, NULL, 'matress-selector', 'publish', '1', '2023-03-06 21:55:12', '2023-03-06 21:57:12'),
(27, 'Compare', NULL, NULL, 'compare', NULL, NULL, 'page', '', NULL, NULL, NULL, NULL, 'compare', 'publish', '1', '2023-03-17 23:38:19', '2023-03-17 23:51:30'),
(28, 'Faqs', NULL, NULL, 'faqs', NULL, NULL, 'page', '', NULL, NULL, NULL, NULL, 'faqs', 'publish', '1', '2023-03-18 03:11:02', '2023-03-18 03:11:02'),
(29, 'Contact', NULL, NULL, 'contact', NULL, NULL, 'page', '', NULL, NULL, NULL, NULL, 'contact', 'publish', '1', '2023-03-18 03:18:18', '2023-03-18 03:18:18'),
(31, 'Store', NULL, NULL, 'store', NULL, NULL, 'page', '', NULL, NULL, NULL, NULL, 'store-location', 'publish', '1', '2023-03-18 03:56:44', '2023-03-18 03:56:44'),
(38, 'Products', NULL, NULL, 'products', NULL, '24', 'page', '', NULL, NULL, NULL, NULL, 'all-products', 'publish', '1', '2023-03-20 05:18:59', '2023-03-20 05:36:37'),
(44, 'Blogs', NULL, NULL, 'blogs', NULL, '40', 'page', '', NULL, NULL, NULL, NULL, 'blogs', 'publish', '1', '2023-08-16 23:13:01', '2023-08-17 02:43:20'),
(45, 'web development tutorial', NULL, NULL, 'web-development-tutorial', '<p style=\"margin-right: 0px; margin-bottom: 1.65em; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 19px; font-family: proxima-nova, sans-serif; color: rgba(0, 0, 0, 0.74);\">A developer is someone who writes computer code to create websites, applications, software, games, or computer systems. Developers are also known as software programmers, software developers, and software engineers.&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 1.65em; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 19px; font-family: proxima-nova, sans-serif; color: rgba(0, 0, 0, 0.74);\">For projects that involve creating a user interface — like a website — developers typically collaborate with&nbsp;<a href=\"https://www.bluehost.com/blog/website-design/17-web-design-resources-you-need-to-know-2355/\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit; opacity: initial; color: inherit; transition: all 0.3s ease-in 0s; box-shadow: 0 -1px 0 0 var(--main-color, #000) inset;\">designers</a>. In that scenario, the designer is the architect who dreams up a vision. The developer is the engineer who turns that vision into reality and ensures it functions properly.&nbsp;</p><h2 style=\"margin: calc(13px + 1.2em) 0px calc(10px + 0.2em); padding: 0px; border: 0px; vertical-align: baseline; font-size: 1.6315em; font-family: proxima-nova, sans-serif; font-weight: 700; color: rgb(17, 17, 17); -webkit-font-smoothing: antialiased; line-height: 1.5;\"><span class=\"ez-toc-section\" id=\"What_Kinds_of_Developers_Are_There\" ez-toc-data-id=\"#What_Kinds_of_Developers_Are_There\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 30.9985px; font-family: inherit;\"></span>What Kinds of Developers Are There?<span class=\"ez-toc-section-end\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 30.9985px; font-family: inherit;\"></span></h2><p style=\"margin-right: 0px; margin-bottom: 1.65em; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 19px; font-family: proxima-nova, sans-serif; color: rgba(0, 0, 0, 0.74);\">Fully answering the question “what is a developer?” gets more complicated from here. There are many different types of professional developers.&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 1.65em; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 19px; font-family: proxima-nova, sans-serif; color: rgba(0, 0, 0, 0.74);\">Here are some of the most common developer titles.</p><h3 style=\"margin: calc(13px + 1.2em) 0px calc(10px + 0.2em); padding: 0px; border: 0px; vertical-align: baseline; font-size: 1.368em; font-family: proxima-nova, sans-serif; font-weight: 700; color: rgb(17, 17, 17); -webkit-font-smoothing: antialiased; line-height: 1.5;\">Front-End Developer</h3><p style=\"margin-right: 0px; margin-bottom: 1.65em; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 19px; font-family: proxima-nova, sans-serif; color: rgba(0, 0, 0, 0.74);\">Front-end developers write code that builds website interfaces, or other applications that the end user sees and interacts with.&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 1.65em; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 19px; font-family: proxima-nova, sans-serif; color: rgba(0, 0, 0, 0.74);\">For example, a front-end developer might code an e-commerce website or a&nbsp;<a href=\"https://www.bluehost.com/blog/wordpress/the-14-best-free-wordpress-themes-7703/\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit; opacity: initial; color: inherit; transition: all 0.3s ease-in 0s; box-shadow: 0 -1px 0 0 var(--main-color, #000) inset;\">WordPress theme</a>.&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 1.65em; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 19px; font-family: proxima-nova, sans-serif; color: rgba(0, 0, 0, 0.74);\"><a href=\"https://skillcrush.com/blog/skills-to-become-a-front-end-developer/\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit; opacity: initial; color: inherit; transition: all 0.3s ease-in 0s; box-shadow: 0 -1px 0 0 var(--main-color, #000) inset;\">Front-end developers</a>&nbsp;use coding languages like CSS, HTML, JavaScript, and PHP.</p><h3 style=\"margin: calc(13px + 1.2em) 0px calc(10px + 0.2em); padding: 0px; border: 0px; vertical-align: baseline; font-size: 1.368em; font-family: proxima-nova, sans-serif; font-weight: 700; color: rgb(17, 17, 17); -webkit-font-smoothing: antialiased; line-height: 1.5;\">Back-End Developer</h3><p style=\"margin-right: 0px; margin-bottom: 1.65em; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 19px; font-family: proxima-nova, sans-serif; color: rgba(0, 0, 0, 0.74);\">Back-end developers work behind-the-scenes, building the aspects of a website or application that people don’t see. The programs they write involve&nbsp;<a href=\"https://developer.mozilla.org/en-US/docs/Learn/Server-side/First_steps/Introduction\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit; opacity: initial; color: inherit; transition: all 0.3s ease-in 0s; box-shadow: 0 -1px 0 0 var(--main-color, #000) inset;\">server-side systems</a>&nbsp;that put information into databases and then send that data to the front end, where users can see it.</p><p style=\"margin-right: 0px; margin-bottom: 1.65em; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 19px; font-family: proxima-nova, sans-serif; color: rgba(0, 0, 0, 0.74);\">For instance, a&nbsp;<a href=\"https://www.thebalancecareers.com/the-skills-you-need-to-be-a-backend-developer-2071184\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit; opacity: initial; color: inherit; transition: all 0.3s ease-in 0s; box-shadow: 0 -1px 0 0 var(--main-color, #000) inset;\">back-end developer</a>&nbsp;would write the code that processes payments on an eCommerce site.</p><p style=\"margin-right: 0px; margin-bottom: 1.65em; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 19px; font-family: proxima-nova, sans-serif; color: rgba(0, 0, 0, 0.74);\">Back-end specialists use a variety of languages including Java, C, C++, C#, Ruby, Perl, Python, Scala, PHP, and Go.</p><h3 style=\"margin: calc(13px + 1.2em) 0px calc(10px + 0.2em); padding: 0px; border: 0px; vertical-align: baseline; font-size: 1.368em; font-family: proxima-nova, sans-serif; font-weight: 700; color: rgb(17, 17, 17); -webkit-font-smoothing: antialiased; line-height: 1.5;\">Full Stack Developer</h3><p style=\"margin-right: 0px; margin-bottom: 1.65em; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 19px; font-family: proxima-nova, sans-serif; color: rgba(0, 0, 0, 0.74);\">A&nbsp;<a href=\"https://blog.udacity.com/2014/12/front-end-vs-back-end-vs-full-stack-web-developers.html\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit; opacity: initial; color: inherit; transition: all 0.3s ease-in 0s; box-shadow: 0 -1px 0 0 var(--main-color, #000) inset;\">full stack developer</a>&nbsp;is the term for someone who engineers both the front and back end of a website.</p><p style=\"margin-right: 0px; margin-bottom: 1.65em; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 19px; font-family: proxima-nova, sans-serif; color: rgba(0, 0, 0, 0.74);\">When a developer can create both the interface and payment processing system for an&nbsp;<a href=\"https://www.bluehost.com/blog/wordpress/setting-up-an-ecommerce-site-with-wordpress-10953/\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit; opacity: initial; color: inherit; transition: all 0.3s ease-in 0s; box-shadow: 0 -1px 0 0 var(--main-color, #000) inset;\">eCommerce site</a>, they can create a seamless user experience.</p><p style=\"margin-right: 0px; margin-bottom: 1.65em; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 19px; font-family: proxima-nova, sans-serif; color: rgba(0, 0, 0, 0.74);\">Full stack developers use the same code languages that back-end and front-end developers use, including HTML, CSS, JavaScript, Java, C, C++, C#, Ruby, Perl, Python, Scala, and Go.</p><h3 style=\"margin: calc(13px + 1.2em) 0px calc(10px + 0.2em); padding: 0px; border: 0px; vertical-align: baseline; font-size: 1.368em; font-family: proxima-nova, sans-serif; font-weight: 700; color: rgb(17, 17, 17); -webkit-font-smoothing: antialiased; line-height: 1.5;\">Mobile Developer</h3><figure class=\"wp-block-image\" style=\"margin: 40px auto; padding: 0px; border: 0px; vertical-align: baseline; font-size: 19px; font-family: proxima-nova, sans-serif; color: rgba(0, 0, 0, 0.74);\"><img decoding=\"async\" src=\"https://lh3.googleusercontent.com/gCh4ae1jdQqnBT9_xNLOSDnXAOp5lM1NfT4og2X8sE0BAc-xwNShqHRDcp0YREOjlcgXyWYeKiAwPDkcIPtqYEL4gorjJdxpQ1Ti9u4jFnv2UXsFlT2sAWifoWbeOWkQ09qNbDHK\" alt=\"\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: bottom; font-family: inherit; max-width: 100%; height: auto; will-change: opacity; transition: opacity 0.3s ease-in 0s;\"></figure><p style=\"margin-right: 0px; margin-bottom: 1.65em; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 19px; font-family: proxima-nova, sans-serif; color: rgba(0, 0, 0, 0.74);\">A mobile developer works on creating mobile applications exclusively.&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 1.65em; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 19px; font-family: proxima-nova, sans-serif; color: rgba(0, 0, 0, 0.74);\">This role is typically divided into two specialities:&nbsp;</p><ul style=\"margin: 1.65em 0px 1.65em 35px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 19px; font-family: proxima-nova, sans-serif; list-style: none; color: rgba(0, 0, 0, 0.74);\"><li style=\"margin: 0px 0px 0.8em; padding: 0px 0px 0px 5px; border: 0px; vertical-align: baseline; font-family: inherit;\">iOS developers who program applications for the Apple App Store.</li><li style=\"margin: 0px 0px 0.8em; padding: 0px 0px 0px 5px; border: 0px; vertical-align: baseline; font-family: inherit;\">Android developers who program applications for Google Play.</li></ul><p style=\"margin-right: 0px; margin-bottom: 1.65em; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 19px; font-family: proxima-nova, sans-serif; color: rgba(0, 0, 0, 0.74);\"><a href=\"https://www.webopedia.com/TERM/M/mobile-developer.html\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit; opacity: initial; color: inherit; transition: all 0.3s ease-in 0s; box-shadow: 0 -1px 0 0 var(--main-color, #000) inset;\">Mobile developers</a>&nbsp;typically use Java, Swift, Objective-C, and Kotlin coding languages.</p><h3 style=\"margin: calc(13px + 1.2em) 0px calc(10px + 0.2em); padding: 0px; border: 0px; vertical-align: baseline; font-size: 1.368em; font-family: proxima-nova, sans-serif; font-weight: 700; color: rgb(17, 17, 17); -webkit-font-smoothing: antialiased; line-height: 1.5;\">Desktop Developer</h3><p style=\"margin-right: 0px; margin-bottom: 1.65em; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 19px; font-family: proxima-nova, sans-serif; color: rgba(0, 0, 0, 0.74);\">Desktop developers write applications for operating systems like Windows and macOS that can run offline.&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 1.65em; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 19px; font-family: proxima-nova, sans-serif; color: rgba(0, 0, 0, 0.74);\">What kind of&nbsp;<a href=\"https://www.noodle.com/articles/how-to-become-a-desktop-developer-desktop-is-not-dead\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit; opacity: initial; color: inherit; transition: all 0.3s ease-in 0s; box-shadow: 0 -1px 0 0 var(--main-color, #000) inset;\">applications does a desktop developer</a>&nbsp;work on? The Microsoft Office Suite, Adobe Photoshop, and Zoom are a few well-known examples.</p><p style=\"margin-right: 0px; margin-bottom: 1.65em; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 19px; font-family: proxima-nova, sans-serif; color: rgba(0, 0, 0, 0.74);\">Desktop developers use coding languages like C#, C++, Scala, Go, and Python.</p><h3 style=\"margin: calc(13px + 1.2em) 0px calc(10px + 0.2em); padding: 0px; border: 0px; vertical-align: baseline; font-size: 1.368em; font-family: proxima-nova, sans-serif; font-weight: 700; color: rgb(17, 17, 17); -webkit-font-smoothing: antialiased; line-height: 1.5;\">WordPress Developer</h3><p style=\"margin-right: 0px; margin-bottom: 1.65em; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 19px; font-family: proxima-nova, sans-serif; color: rgba(0, 0, 0, 0.74);\">WordPress developers specialize in coding websites on&nbsp;<a href=\"https://wordpress.org/\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit; opacity: initial; color: inherit; transition: all 0.3s ease-in 0s; box-shadow: 0 -1px 0 0 var(--main-color, #000) inset;\">WordPress</a>. WordPress is a popular, open source content management system that powers over&nbsp;<a href=\"https://w3techs.com/technologies/details/cm-wordpress\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit; opacity: initial; color: inherit; transition: all 0.3s ease-in 0s; box-shadow: 0 -1px 0 0 var(--main-color, #000) inset;\">37% of all websites</a>.</p><p style=\"margin-right: 0px; margin-bottom: 1.65em; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 19px; font-family: proxima-nova, sans-serif; color: rgba(0, 0, 0, 0.74);\">A&nbsp;<a href=\"https://skillcrush.com/blog/what-does-a-wordpress-developer-do/\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit; opacity: initial; color: inherit; transition: all 0.3s ease-in 0s; box-shadow: 0 -1px 0 0 var(--main-color, #000) inset;\">WordPress developer</a>&nbsp;can create custom WordPress websites, themes, and plugins.</p><p style=\"margin-right: 0px; margin-bottom: 1.65em; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 19px; font-family: proxima-nova, sans-serif; color: rgba(0, 0, 0, 0.74);\">Developers who code for WordPress need to know PHP — WordPress’s coding language — as well as HTML, CSS, and JavaScript.</p><h2 style=\"margin: calc(13px + 1.2em) 0px calc(10px + 0.2em); padding: 0px; border: 0px; vertical-align: baseline; font-size: 1.6315em; font-family: proxima-nova, sans-serif; font-weight: 700; color: rgb(17, 17, 17); -webkit-font-smoothing: antialiased; line-height: 1.5;\"><span class=\"ez-toc-section\" id=\"The_15_Most_Popular_Code_Languages\" ez-toc-data-id=\"#The_15_Most_Popular_Code_Languages\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 30.9985px; font-family: inherit;\"></span>The 15 Most Popular Code Languages<span class=\"ez-toc-section-end\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 30.9985px; font-family: inherit;\"></span></h2><p style=\"margin-right: 0px; margin-bottom: 1.65em; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 19px; font-family: proxima-nova, sans-serif; color: rgba(0, 0, 0, 0.74);\">Now you know what a developer is, what kinds of developers there are, and what they can do. The next thing you’re probably curious to know relates to code languages and what the most popular are. This information will help ensure you are hiring the most qualified developer for the needs of your project.&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 1.65em; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 19px; font-family: proxima-nova, sans-serif; color: rgba(0, 0, 0, 0.74);\">Here are 15 of the most popular code languages, and how they are typically used by developers.</p><p style=\"margin-right: 0px; margin-bottom: 1.65em; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 19px; font-family: proxima-nova, sans-serif; color: rgba(0, 0, 0, 0.74);\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit;\">Web development code languages</strong>:</p><ul style=\"margin: 1.65em 0px 1.65em 35px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 19px; font-family: proxima-nova, sans-serif; list-style: none; color: rgba(0, 0, 0, 0.74);\"><li style=\"margin: 0px 0px 0.8em; padding: 0px 0px 0px 5px; border: 0px; vertical-align: baseline; font-family: inherit;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit;\">HTML</strong>: This isn’t actually a programming language, but a&nbsp;<a href=\"https://www.w3schools.com/whatis/whatis_html.asp\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit; opacity: initial; color: inherit; transition: all 0.3s ease-in 0s; box-shadow: 0 -1px 0 0 var(--main-color, #000) inset;\">markup language</a>. It allows developers to add and organize written and visual content to websites and applications.</li><li style=\"margin: 0px 0px 0.8em; padding: 0px 0px 0px 5px; border: 0px; vertical-align: baseline; font-family: inherit;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit;\">CSS</strong>: This code language enables coders to&nbsp;<a href=\"https://www.bluehost.com/blog/website-design/html-css-cheat-sheet-infographic-4181/\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit; opacity: initial; color: inherit; transition: all 0.3s ease-in 0s; box-shadow: 0 -1px 0 0 var(--main-color, #000) inset;\">control the style</a>&nbsp;of visual elements on websites and applications.</li><li style=\"margin: 0px 0px 0.8em; padding: 0px 0px 0px 5px; border: 0px; vertical-align: baseline; font-family: inherit;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit;\">JavaScript:&nbsp;</strong>This language is used to increase the utility and interactivity of websites. For example, with JavaScript, developers can program what happens when someone&nbsp;<a href=\"https://www.bluehost.com/blog/account-tips/secret-effective-call-action-buttons-6442/\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit; opacity: initial; color: inherit; transition: all 0.3s ease-in 0s; box-shadow: 0 -1px 0 0 var(--main-color, #000) inset;\">clicks on a button</a>&nbsp;on a website.</li><li style=\"margin: 0px 0px 0.8em; padding: 0px 0px 0px 5px; border: 0px; vertical-align: baseline; font-family: inherit;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit;\">PHP</strong>: This is a versatile coding language that’s best known as the language of WordPress websites. PHP can also be used for back-end development and desktop application development.</li><li style=\"margin: 0px 0px 0.8em; padding: 0px 0px 0px 5px; border: 0px; vertical-align: baseline; font-family: inherit;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit;\">Java</strong>: This code language<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit;\">&nbsp;</strong>is often used in the development of mobile applications, desktop applications, and the back-end of websites.</li></ul><p style=\"margin-right: 0px; margin-bottom: 1.65em; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 19px; font-family: proxima-nova, sans-serif; color: rgba(0, 0, 0, 0.74);\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit;\">Object-oriented programming code languages</strong>:</p><ul style=\"margin: 1.65em 0px 1.65em 35px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 19px; font-family: proxima-nova, sans-serif; list-style: none; color: rgba(0, 0, 0, 0.74);\"><li style=\"margin: 0px 0px 0.8em; padding: 0px 0px 0px 5px; border: 0px; vertical-align: baseline; font-family: inherit;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit;\">C</strong>: As one of the oldest coding languages, C is the basis for&nbsp;<a href=\"https://www.webopedia.com/TERM/O/object_oriented_programming_OOP.html\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit; opacity: initial; color: inherit; transition: all 0.3s ease-in 0s; box-shadow: 0 -1px 0 0 var(--main-color, #000) inset;\">object-oriented programs</a>&nbsp;like C#, C++, and Objective-C. What is a developer working on in C? Operating systems and databases for the most part.&nbsp;</li><li style=\"margin: 0px 0px 0.8em; padding: 0px 0px 0px 5px; border: 0px; vertical-align: baseline; font-family: inherit;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit;\">C++:&nbsp;</strong>This code language is used by developers when performance is critical and the digital product needs to operate quickly. It’s typically used for operating systems, desktop applications, and games.</li><li style=\"margin: 0px 0px 0.8em; padding: 0px 0px 0px 5px; border: 0px; vertical-align: baseline; font-family: inherit;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit;\">C#</strong>: This code language is used to program Windows desktop software and video games.</li></ul><p style=\"margin-right: 0px; margin-bottom: 1.65em; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 19px; font-family: proxima-nova, sans-serif; color: rgba(0, 0, 0, 0.74);\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit;\">Mobile development code languages</strong>:</p><ul style=\"margin: 1.65em 0px 1.65em 35px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 19px; font-family: proxima-nova, sans-serif; list-style: none; color: rgba(0, 0, 0, 0.74);\"><li style=\"margin: 0px 0px 0.8em; padding: 0px 0px 0px 5px; border: 0px; vertical-align: baseline; font-family: inherit;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit;\">Objective-C:&nbsp;</strong>Originally, this code language was used to make Apple’s OSx and iOS operating systems.</li><li style=\"margin: 0px 0px 0.8em; padding: 0px 0px 0px 5px; border: 0px; vertical-align: baseline; font-family: inherit;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit;\">Swift</strong>: Currently, Apple uses this code language for its OSx and iOS operating systems.&nbsp;</li><li style=\"margin: 0px 0px 0.8em; padding: 0px 0px 0px 5px; border: 0px; vertical-align: baseline; font-family: inherit;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit;\">Kotlin</strong>: This code language is increasingly being used by Android developers to code mobile applications.</li></ul><p style=\"margin-right: 0px; margin-bottom: 1.65em; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 19px; font-family: proxima-nova, sans-serif; color: rgba(0, 0, 0, 0.74);\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit;\">Back-end development code languages</strong>:</p><ul style=\"margin: 1.65em 0px 1.65em 35px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 19px; font-family: proxima-nova, sans-serif; list-style: none; color: rgba(0, 0, 0, 0.74);\"><li style=\"margin: 0px 0px 0.8em; padding: 0px 0px 0px 5px; border: 0px; vertical-align: baseline; font-family: inherit;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit;\">Go</strong>: This<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit;\">&nbsp;</strong>is an emerging programming language that is gaining popularity in the world of back-end web development.</li><li style=\"margin: 0px 0px 0.8em; padding: 0px 0px 0px 5px; border: 0px; vertical-align: baseline; font-family: inherit;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit;\">Python</strong>: This is a popular choice for back-end developers coding for websites, as well as desktop and web applications.&nbsp;</li><li style=\"margin: 0px 0px 0.8em; padding: 0px 0px 0px 5px; border: 0px; vertical-align: baseline; font-family: inherit;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit;\">Ruby</strong>: This code language is used for back-end development. The Ruby on Rails&nbsp;<a href=\"https://hackr.io/blog/what-is-frameworks\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit; opacity: initial; color: inherit; transition: all 0.3s ease-in 0s; box-shadow: 0 -1px 0 0 var(--main-color, #000) inset;\">framework</a>&nbsp;is widely used to create web applications.</li><li style=\"margin: 0px 0px 0.8em; padding: 0px 0px 0px 5px; border: 0px; vertical-align: baseline; font-family: inherit;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit;\">Perl</strong>: This code language is often used for back-end development.</li></ul><p style=\"margin-right: 0px; margin-bottom: 1.65em; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 19px; font-family: proxima-nova, sans-serif; color: rgba(0, 0, 0, 0.74);\">Now that you know the most popular computer programming languages used by developers today, you can be more specific about the languages you want the developer you hire to be familiar with.&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 1.65em; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 19px; font-family: proxima-nova, sans-serif; color: rgba(0, 0, 0, 0.74);\">Building a website or application can be difficult. Fortunately, you don’t have to do it yourself. Outsource the work to someone with the right skills, experience, and knowledge for the task.&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-size: 19px; font-family: proxima-nova, sans-serif; color: rgba(0, 0, 0, 0.74);\">If you’re&nbsp;<a href=\"https://www.bluehost.com/blog/wordpress/diy-vs-when-to-use-a-developer-6180/\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit; opacity: initial; color: inherit; transition: all 0.3s ease-in 0s; box-shadow: 0 -1px 0 0 var(--main-color, #000) inset;\">hiring a developer</a>, your job is to pick the right person, who knows the right languages to make your plans a reality.&nbsp;Depending on your goals, sometimes it’s an even better idea to hire a company that can offer more than just development for your website. Reach out to learn more about Bluehost’s&nbsp;<a href=\"https://www.bluehost.com/solutions/full-service\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-family: inherit; opacity: initial; color: inherit; transition: all 0.3s ease-in 0s; box-shadow: 0 -1px 0 0 var(--main-color, #000) inset;\">website development services</a>.</p>', '43', 'blogs', '', NULL, NULL, NULL, NULL, NULL, 'publish', '1', '2023-08-16 23:25:42', '2023-08-20 05:56:29'),
(46, 'Our Team', NULL, NULL, 'our-team', NULL, '40', 'page', '', NULL, NULL, NULL, NULL, 'our_team', 'publish', '1', '2023-08-16 23:44:18', '2023-08-17 02:42:07'),
(47, 'Services', NULL, NULL, 'services', NULL, '39', 'page', '', NULL, NULL, NULL, NULL, 'services', 'publish', '1', '2023-08-16 23:57:37', '2023-08-17 02:41:11'),
(48, 'About Us', NULL, NULL, 'about-us-2', '<div><strong>Germinated manifesto</strong></div><div>Sadik &amp; Counsel established with a specific vision of serving mankind in concern issues. Founders dreamed to enlight themselves by spreading light of law in society and to protect right of everyone. Professional here are not for selling products only, moreover their passionate to solve dispute as responsible service provider.</div><div><br></div><div><b>Sadik &amp; Counsel advises the businesses and institutions that power the global economy</b></div><div>We bring together the world’s best legal talent in every major jurisdiction to shape the deals and win the disputes that transform markets. Our experience at the cutting edge of commercial, financial, and legal innovation enables us to deliver results that fuel our clients’ success.&nbsp;&nbsp;</div><div>Our approach is guided by our commitment to quality, our collaborative culture, and our core values.</div><div><br></div><div><b>Unwavering Client Focus</b></div><div>We adopt the urgency of our client’s mission in each engagement. Leveraging vast global resources, we work relentlessly and efficiently to accomplish your goals.</div><div><br></div><div><b>Consistent Excellence</b></div><div>We draw on elite capabilities across more than 60 disciplines to meet the precise needs of each client and matter. With our broad and diversified platform we can anticipate and address any legal or business challenge anywhere in the world — with flawless coordination.</div><div><br></div><div><b>True Partnership</b></div><div>We work to understand your business, goals, and strategy to ensure we deliver advice that meets your legal needs and supports your success.&nbsp;</div><div><br></div><div><b>Strong Teamwork&nbsp;</b></div><div>We collaborate across continents, languages, and time zones to support every client.</div><div><br></div><div><br></div><div><b>Sadik &amp; Counsel: A culture that connects</b></div><div>We recognize that our values drive our success. At Sadik &amp; Counsel, we prioritize:</div><div><br></div><div><b>Our people</b></div><div>We lift each other up with an inclusive and supportive culture that prizes personal growth, well being, and the diverse perspectives of each team member.</div><div><br></div><div><b>Our communities</b></div><div>We draw strength from the vibrant places in which we live and work; our commitment to give back has led us to become one of the largest pro bono legal service providers in the world.</div><div><br></div><div><b>Our world</b></div><div>We act to confront climate change and contribute to a healthier environment through commercial work, pro bono counsel, and ever more sustainable operations.</div>', '37', 'page', '', NULL, NULL, NULL, NULL, 'about_us', 'publish', '1', '2023-08-17 00:00:46', '2023-08-26 10:17:59'),
(49, 'Income Tax Counsel', NULL, NULL, 'income-tax-counsel', '<ul><li>Income Tax return filing</li><li>Tax Consultant</li><li>Tax Planning</li><li>Grow Your Wealth</li><li>Maximize Tax Savings</li><li>Tax Audit</li><li>Tax Assessment</li><li>Tax issues arising from notice</li><li>Tax Appeal</li><li>Appeal to Tribunal</li><li>Further to High Court Division</li></ul><p><br></p><p>Income tax is an essential part of the financial system in Bangladesh. It is a direct tax imposed on individuals, businesses, and organizations based on their income and profits. Filing an Income Tax Return (ITR) is a legal requirement for individuals and entities earning taxable income in Bangladesh. It is a way to report their income, calculate the tax liability, and settle any dues with the tax authority.</p><p>Whether you are an individual or run a business. As a conscious citizen of Bangladesh you have to file income tax returns. Your taxes make running the country easier, and if you don\'t file an income tax return, you face the law. Therefore, income tax returns should be filed at regular intervals. And whenever we want to understand income tax return, Then we should have an idea about the following points or terms or process.&nbsp;</p><p>The process of filing an Income Tax Return in Bangladesh involves several key aspects:</p><p><br></p><p>1. Determining Taxable Income: Taxable income includes earnings from employment, business, investments, and other sources. Various exemptions, deductions, and allowances are considered to arrive at the taxable income amount.</p><p><br></p><p>2. Tax Slabs: Bangladesh follows a progressive tax system with different tax slabs based on income levels. The tax rates vary depending on the income brackets, with higher incomes subject to higher tax rates.</p><p><br></p><p>3. Tax Identification Number (TIN): Individuals and entities are required to obtain a Tax Identification Number (TIN) from the tax authority before filing their Income Tax Returns. The TIN serves as a unique identification for tax purposes.</p><p><br></p><p>4. Filing Period: The tax year in Bangladesh runs from July 1 to June 30. Individuals and entities are required to file their Income Tax Returns within a specific period after the end of the tax year, as stipulated by the tax authority.</p><p><br></p><p>5. Documentation: To file an Income Tax Return, individuals and entities need to gather relevant documents such as income statements, bank statements, investment statements, and receipts of deductible expenses. These documents serve as evidence to support the reported income and deductions.</p><p><br></p><p>6. Online Filing: The National Board of Revenue (NBR) in Bangladesh has introduced an online platform for taxpayers to file their Income Tax Returns electronically. This digital system has simplified the filing process, making it more convenient and efficient for taxpayers.</p><p><br></p><p>7. Penalties and Consequences: Failure to file an Income Tax Return or underreporting income can lead to penalties, fines, and legal consequences. It is important for taxpayers to comply with the tax regulations and fulfill their tax obligations.</p><p><br></p><p>At the end, Income Tax Return is a crucial process in Bangladesh to ensure proper taxation and revenue collection. It is essential for individuals and entities to accurately report their income, calculate their tax liability, and fulfill their tax obligations within the specified timeframe. The government\'s efforts to streamline the filing process through online platforms have made it more accessible and convenient for taxpayers in Bangladesh.</p>', NULL, 'service', '', NULL, NULL, NULL, NULL, NULL, 'publish', '1', '2023-08-17 03:21:00', '2023-08-26 11:13:02'),
(50, 'Corporate Documentation', NULL, NULL, 'corporate-documentation', '<ul><li style=\"margin: 0.5em 0px;\"><font color=\"#202122\" face=\"sans-serif\">Maximize Profit</font></li><li style=\"margin: 0.5em 0px;\"><font color=\"#202122\" face=\"sans-serif\">Secure Investment</font></li><li style=\"margin: 0.5em 0px;\"><font color=\"#202122\" face=\"sans-serif\">Investment Planning</font></li><li style=\"margin: 0.5em 0px;\"><font color=\"#202122\" face=\"sans-serif\">Strategical Analysis</font></li><li style=\"margin: 0.5em 0px;\"><font color=\"#202122\" face=\"sans-serif\">Risk Management</font></li><li style=\"margin: 0.5em 0px;\"><font color=\"#202122\" face=\"sans-serif\">Fund Allocation</font></li><li style=\"margin: 0.5em 0px;\"><font color=\"#202122\" face=\"sans-serif\">Package under special guarantee.</font></li></ul><p style=\"margin: 0.5em 0px;\"><br></p><p style=\"margin: 0.5em 0px;\"><font color=\"#202122\" face=\"sans-serif\">Corporate documentation plays a crucial role in the smooth functioning and legal compliance of businesses in&nbsp; Bangladesh. It encompasses a wide range of documents and records that are essential for establishing, managing, and expanding a company.</font></p><p style=\"margin: 0.5em 0px;\"><font color=\"#202122\" face=\"sans-serif\"><br></font></p><p style=\"margin: 0.5em 0px;\"><font color=\"#202122\" face=\"sans-serif\">One of the key aspects of corporate documentation is the registration process. In&nbsp; Bangladesh, companies must register with the Registrar of Joint Stock Companies and Firms (RJSC) to obtain legal recognition. This involves preparing and submitting various documents, including the Memorandum of Association, Articles of Association, and Form IX. These documents outline the company\'s objectives, structure, and rules, providing a framework for its operations.</font></p><p style=\"margin: 0.5em 0px;\"><font color=\"#202122\" face=\"sans-serif\"><br></font></p><p style=\"margin: 0.5em 0px;\"><font color=\"#202122\" face=\"sans-serif\">Corporate documentation also includes records of the company\'s financial transactions and compliance with tax regulations. Businesses in&nbsp; Bangladesh are required to maintain proper accounting books, such as the general ledger, cash book, and balance sheet. These documents are essential for accurate financial reporting, tax assessments, and audits.</font></p><p style=\"margin: 0.5em 0px;\"><font color=\"#202122\" face=\"sans-serif\"><br></font></p><p style=\"margin: 0.5em 0px;\"><font color=\"#202122\" face=\"sans-serif\">Moreover, corporate documentation encompasses legal agreements and contracts. Companies often engage in partnerships, joint ventures, or collaborations, which require well-drafted agreements to protect the interests of all parties involved. These agreements may include terms and conditions, non-disclosure clauses, intellectual property rights, and dispute resolution mechanisms.</font></p><p style=\"margin: 0.5em 0px;\"><font color=\"#202122\" face=\"sans-serif\"><br></font></p><p style=\"margin: 0.5em 0px;\"><font color=\"#202122\" face=\"sans-serif\">In&nbsp; Bangladesh, corporate documentation also extends to employee-related documents. Companies must maintain records of employment contracts, salaries, benefits, and other personnel information in compliance with labor laws. This documentation ensures transparency and fairness in the employer-employee relationship.</font></p><p style=\"margin: 0.5em 0px;\"><font color=\"#202122\" face=\"sans-serif\"><br></font></p><p style=\"margin: 0.5em 0px;\"><font color=\"#202122\" face=\"sans-serif\">Furthermore, corporate documentation includes licenses, permits, and regulatory filings. Depending on the nature of the business, companies may require specific licenses or permits to operate legally. These documents need to be obtained and renewed periodically to ensure compliance with regulatory requirements.</font></p><p style=\"margin: 0.5em 0px;\"><font color=\"#202122\" face=\"sans-serif\"><br></font></p><p style=\"margin: 0.5em 0px;\"><font color=\"#202122\" face=\"sans-serif\">To assist businesses in managing their corporate documentation effectively, there are specialized service providers in&nbsp; Bangladesh. These providers offer expertise in preparing, reviewing, and maintaining various corporate documents. They assist in the registration process, prepare legal agreements, handle tax-related documentation, and ensure compliance with regulatory obligations.</font></p><p style=\"margin: 0.5em 0px;\"><font color=\"#202122\" face=\"sans-serif\"><br></font></p><p style=\"margin: 0.5em 0px;\"><font color=\"#202122\" face=\"sans-serif\"></font></p><p style=\"margin: 0.5em 0px;\"><font color=\"#202122\" face=\"sans-serif\">In conclusion, corporate documentation is a vital aspect of business operations in&nbsp; Bangladesh. It encompasses a wide range of documents, including registration papers, financial records, legal agreements, and employee-related documentation. Adhering to proper documentation practices ensures legal compliance, financial transparency, and smooth business operations. Engaging professional corporate documentation service providers can be beneficial for companies to navigate the complex regulatory landscape and focus on their core activities.</font></p>', NULL, 'service', '', NULL, NULL, NULL, NULL, NULL, 'publish', '1', '2023-08-17 05:18:29', '2023-08-26 11:15:55'),
(52, 'Value Added Tax (VAT) Counsel', NULL, NULL, 'value-added-tax-vat-counsel', '<ul><li><span style=\"font-family: &quot;Roboto Light&quot;;\">﻿</span><b><span style=\"font-family: &quot;system-ui&quot;;\">VAT Accounting</span></b><span style=\"font-family: &quot;system-ui&quot;;\">﻿</span></li></ul><div><br></div><ol><li>Treasury Payment</li><li>VDS Register</li></ol><div><br></div><div><br></div><ul><li><b>VAT Basic Report</b></li></ul><div><br></div><ol><li>Mushak - 4.3</li><li>Mushak - 4.4</li><li>Mushak - 4.5</li><li>Mushak - 6.1</li><li>Mushak - 6.2</li><li>Mushak - 6.2.1</li><li>Mushak - 6.3 (VAT Chalan)</li><li>Mushak - 6.4</li><li>Mushak - 6.5</li><li>Mushak - 6.6</li><li>Mushak - 6.7</li><li>Mushak - 6.8</li><li>Mushak - 6.9 (Turnover VAT Chalan)</li><li>Mushak - 6.10 (Two Lacs above chalan List)</li><li>Mushak - 9.1 (VAT Return and All Sub Reports)</li><li>Treasury Chalan</li><li>Chhak - Ka &amp; Kha</li><li>Adjustment Report</li></ol><div><br></div><ul><li><b>VAT Accounting System Business Area</b></li></ul><ol><li>Manufacturing Business</li><li>Trading Business</li><li>Import/Export Business</li><li>Service Provider Business</li></ol><div><br></div><div><br></div><ul><li><b>VAT System Feature List</b></li></ul><ol><li>Business Pre-Setup</li><li>Measuring Unit List</li><li>Tariff Schedule</li><li>Source VAT Schedule</li><li>Sales/Supply Item Register</li><li>Input Item/Material Register</li><li>Value Adjustment Item List</li><li>Supplier List</li><li>Customer List</li><li>Input Output Coefficient Setup</li></ol><div><br></div><ul><li><b>VAT Inventory</b></li></ul><div><br></div><ol><li>Business Opening Stock (Finish Goods Opening &amp; Material Opening Stock)</li><li>Purchase Register</li><li>Production</li><li>Contractual Production</li><li>Sales Register</li><li>Credit Note Register</li><li>Debit Note Register</li><li>Wastage Register (Finish Goods &amp; Materials)<br></li></ol><p><br></p><p>VAT, or Value Added Tax, is an important component of the taxation system in Bangladesh. It is an indirect tax levied on the value added to goods and services at each stage of production and distribution. The VAT system in Bangladesh is designed to generate revenue for the government, promote fiscal discipline, and ensure transparency in the business sector.</p><p><br></p><p>The VAT service in Bangladesh is administered by the National Board of Revenue (NBR), which is responsible for formulating and implementing VAT policies and regulations. The VAT system operates on a self-assessment basis, where registered businesses are required to calculate and pay their VAT liabilities.</p><p><br></p><p>One of the key aspects of the VAT service is VAT registration. Businesses with an annual turnover above a certain threshold are required to register for VAT. This entails submitting the necessary documents, such as trade license, TIN (Tax Identification Number), and other relevant information, to the local VAT office. Once registered, businesses are assigned a VAT registration number and become eligible to collect and remit VAT on their sales.</p><p><br></p><p>The VAT service also includes the issuance of VAT invoices and maintaining proper VAT records. Registered businesses are required to issue VAT invoices to their customers for taxable supplies. These invoices should contain specific information, including the VAT registration number, description of goods or services, quantity, unit price, and the amount of VAT charged. Businesses must also maintain detailed records of their sales, purchases, and VAT payments for audit and compliance purposes.</p><p><br></p><p>Furthermore, the VAT service in Bangladesh involves filing VAT returns and making VAT payments. Registered businesses are required to file periodic VAT returns, usually on a monthly or quarterly basis, providing details of their sales, purchases, and VAT liabilities. Based on the VAT returns, businesses must make the necessary VAT payments to the government within the specified timeframe.</p><p><br></p><p>The VAT service also includes VAT audits and inspections conducted by the NBR. The NBR has the authority to audit VAT records and verify compliance with VAT laws and regulations. Businesses found to be non-compliant may face penalties, fines, or legal consequences.</p><p><br></p><p>The VAT service in Bangladesh has undergone significant reforms in recent years to streamline the process and improve transparency. The introduction of the online VAT system has made it easier for businesses to register, file returns, and make payments electronically. This digital transformation has reduced paperwork, minimized errors, and enhanced efficiency in the VAT service.</p><p><br></p><p>Lastly, the VAT service in Bangladesh is a crucial element of the taxation system, aimed at generating revenue, promoting fiscal discipline, and ensuring transparency in the business sector. VAT registration, issuance of VAT invoices, maintaining proper records, filing VAT returns, and making VAT payments are key components of the VAT service. The introduction of online systems has simplified the process, making it more convenient for businesses to comply with VAT regulations. Adhering to VAT requirements is essential for businesses to avoid penalties and contribute to the country\'s economic development.</p>', NULL, 'service', '', NULL, NULL, NULL, NULL, NULL, 'publish', '1', '2023-08-17 05:20:50', '2023-08-26 11:09:52'),
(53, 'A H M Jobair Ibn Joha', NULL, NULL, 'a-h-m-jobair-ibn-joha', '<br>', '59', 'our-team', '', NULL, NULL, NULL, NULL, 'single-member', 'publish', '1', '2023-08-17 05:35:07', '2023-08-26 10:56:16'),
(54, 'S. M. Mustafizur Rahman (Shiblee Sadik)', NULL, NULL, 's-m-mustafizur-rahman-shiblee-sadik-', NULL, '58', 'our-team', '', NULL, NULL, NULL, NULL, 'single-member', 'publish', '1', '2023-08-17 05:40:12', '2023-08-26 10:55:54'),
(55, 'Biplob Hasan Polash', NULL, NULL, 'biplob-hasan-polash', NULL, '54', 'our-team', '', NULL, NULL, NULL, NULL, 'single-member', 'publish', '1', '2023-08-17 05:40:59', '2023-08-26 10:12:24'),
(56, 'A.S.M. Rezuanul Hassan', NULL, NULL, 'a-s-m-rezuanul-hassan', NULL, '55', 'our-team', '', NULL, NULL, NULL, NULL, 'single-member', 'publish', '1', '2023-08-17 05:41:19', '2023-08-26 10:13:15');
INSERT INTO `posts` (`id`, `name`, `sub_title`, `order_by`, `slug`, `description`, `featured_image`, `term_type`, `category_id`, `meta_title`, `meta_description`, `meta_keyword`, `meta_author`, `template`, `is_status`, `author`, `created_at`, `updated_at`) VALUES
(57, 'Chatbot language tool', NULL, NULL, 'chatbot-natural-language-processing-tool', 'A chatbot is a software or computer program that simulates human conversation or \"chatter\" through text or voice interactions.\r\n\r\nUsers in both business-to-consumer (B2C) and business-to-business (B2B) environments increasingly use chatbot virtual assistants to handle simple tasks. Adding chatbot assistants reduces overhead costs, uses support staff time better and enables organizations to provide customer service during hours when live agents aren\'t available.\r\n\r\nHow do chatbots work?\r\nChatbots have varying levels of complexity, being either stateless or stateful. Stateless chatbots approach each conversation as if interacting with a new user. In contrast, stateful chatbots can review past interactions and frame new responses in context.\r\n\r\nAdding a chatbot to a service or sales department requires low or no coding. Many chatbot service providers allow developers to build conversational user interfaces for third-party business applications.\r\n\r\nA critical aspect of chatbot implementation is selecting the right natural language processing (NLP) engine. If the user interacts with the bot through voice, for example, then the chatbot requires a speech recognition engine.\r\n\r\n\r\nBusiness owners also must decide whether they want structured or unstructured conversations. Chatbots built for structured conversations are highly scripted, which simplifies programming but restricts what users can ask. In B2B environments, chatbots are commonly scripted to respond to frequently asked questions or perform simple, repetitive tasks. For example, chatbots can enable sales reps to get phone numbers quickly.\r\n\r\nWhy are chatbots important?\r\nOrganizations looking to increase sales or service productivity may adopt chatbots for time savings and efficiency, as artificial intelligence (AI) chatbots can converse with users and answer recurring questions.\r\n\r\n\r\nAs consumers move away from traditional forms of communication, many experts expect chat-based communication methods to rise. Organizations increasingly use chatbot-based virtual assistants to handle simple tasks, allowing human agents to focus on other responsibilities.\r\n\r\nHow have chatbots evolved?\r\nChatbots such as ELIZA and PARRY were early attempts to create programs that could at least temporarily make a real person think they were conversing with another person. PARRY\'s effectiveness was benchmarked in the early 1970s using a version of a Turing test; testers only correctly identified a human vs. a chatbot at a level consistent with making random guesses.\r\n\r\nChatbots have come a long way since then. Developers build modern chatbots on AI technologies, including deep learning, NLP and machine learning (ML) algorithms. These chatbots require massive amounts of data. The more an end user interacts with the bot, the better its voice recognition predicts appropriate responses.\r\n\r\nChatbot use is on the rise in business and consumer markets. As chatbots improve, consumers have less to quarrel about while interacting with them. Between advanced technology and a societal transition to more passive, text-based communication, chatbots help fill a niche that phone calls used to fill.\r\n\r\nTypes of chatbots\r\nAs chatbots are still a relatively new business technology, debate surrounds how many different types of chatbots exist and what the industry should call them.\r\n\r\nSome common types of chatbots include the following:\r\n\r\nScripted or quick reply chatbots. As the most basic chatbots, they act as a hierarchical decision tree. These bots interact with users through predefined questions that progress until the chatbot answers the user\'s question.\r\n\r\nSimilar to this bot is the menu-based chatbot that requires users to make selections from a predefined list, or menu, to provide the bot with a deeper understanding of what the customer needs.\r\n\r\nKeyword recognition-based chatbots. These chatbots are a bit more complex; they attempt to listen to what the user types and respond accordingly using keywords from customer responses. This bot combines customizable keywords and AI to respond appropriately. Unfortunately, these chatbots struggle with repetitive keyword use or redundant questions.\r\n\r\nHybrid chatbots. These chatbots combine elements of menu-based and keyword recognition-based bots. Users can choose to have their questions answered directly or use the chatbot\'s menu to make selections if keyword recognition is ineffective.\r\n\r\nContextual chatbots. These chatbots are more complex than others and require a data-centric focus. They use AI and ML to remember user conversations and interactions, and use these memories to grow and improve over time. Instead of relying on keywords, these bots use what customers ask and how they ask it to provide answers and self-improve.\r\n\r\nVoice-enabled chatbots. This type of chatbot is the future of this technology. Voice-enabled chatbots use spoken dialogue from users as input that prompts responses or creative tasks. Developers can create these chatbots using text-to-speech and voice recognition APIs. Examples include Amazon Alexa and Apple\'s Siri.\r\n\r\nA chart detailing language processing issues that chatbots face.\r\nA chart laying out potential language barriers that face chatbots.\r\nHow do businesses use chatbots?\r\nChatbots have been used in instant messaging apps and online interactive games for many years and only recently segued into B2C and B2B sales and services.\r\n\r\nOrganizations can use chatbots in the following ways:\r\n\r\nOnline shopping. In these environments, sales teams can use chatbots to answer noncomplex product questions or provide helpful information that consumers could search for later, including shipping price and availability.\r\nCustomer service. Service departments can also use chatbots to help service agents answer repetitive requests. For example, a service rep might give the chatbot an order number and ask when the order shipped. Generally, a chatbot transfers the call or text to a human service agent once a conversation gets too complex.\r\nVirtual assistants. Chatbots can also act as virtual assistants. Apple, Amazon, Google and Microsoft all have forms of virtual assistants. Apps, such as Apple\'s Siri and Microsoft\'s Cortana, or products, like Amazon\'s Echo with Alexa or Google Home, all play the part of a personal chatbot.\r\nHow are chatbots changing businesses and CX?\r\nThe rapidly evolving digital world is altering and increasing customer expectations. Many consumers expect organizations to be available 24/7 and believe an organization\'s CX is as important as its product or service quality. Furthermore, buyers are more informed about the variety of products and services available and are less likely to remain loyal to a specific brand.\r\n\r\nChatbots serve as a response to these changing needs and rising expectations. They can replace live chat and other forms of contact, such as emails and phone calls.\r\n\r\nChatbots can enhance CX in the following ways:\r\n\r\nreduce customer wait times and provide immediate answers;\r\noffer customers 24/7 support;\r\nremove the potential for unpleasant human-to-human interactions that moods and emotions of both the service or sales representative and the customer dictate;\r\nreduce wait times and streamline conversations to minimize the potential for customers\' stress and annoyance;\r\nimprove the redirection of customer queries;\r\nadd customized elements to the chatbot to advance brand personality; and\r\npersonalize CX with AI-enabled chatbots.\r\nAdditionally, major technology companies, such as Google, Apple and Facebook, have developed their messaging apps into chatbot platforms to handle services like orders, payments and bookings. When used with messaging apps, chatbots enable users to find answers regardless of location or the devices they use. The interaction is also easier because customers don\'t have to fill out forms or waste time searching for answers within the content.', '42', 'blogs', '', NULL, NULL, NULL, NULL, NULL, 'publish', '1', '2023-08-17 07:04:11', '2023-08-20 23:46:59');
INSERT INTO `posts` (`id`, `name`, `sub_title`, `order_by`, `slug`, `description`, `featured_image`, `term_type`, `category_id`, `meta_title`, `meta_description`, `meta_keyword`, `meta_author`, `template`, `is_status`, `author`, `created_at`, `updated_at`) VALUES
(58, 'Feature test powered by database seeder', NULL, NULL, 'feature-test-powered-by-database-seeder', '<p style=\"border-width: 0px; border-style: solid; border-color: rgb(231, 232, 242); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(10 178 245 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; font-size: medium; line-height: 1.8em; color: rgb(86, 84, 84); font-family: scandia-web, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Laravel provides a variety of helpful tools and assertions to make it easier to test your database driven applications. In addition, Laravel model factories and seeders make it painless to create test database records using your application\'s Eloquent models and relationships. We\'ll discuss all of these powerful features in the following documentation.</p><p style=\"border-width: 0px; border-style: solid; border-color: rgb(231, 232, 242); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(10 178 245 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; font-size: medium; line-height: 1.8em; color: rgb(86, 84, 84); font-family: scandia-web, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\"></p><h3 id=\"resetting-the-database-after-each-test\" style=\"border-width: 0px; border-style: solid; border-color: rgb(231, 232, 242); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(10 178 245 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; font-size: 1.25em; margin: 2em 0px 0.75em; line-height: 1.25em; color: rgb(35, 35, 35); font-family: scandia-web, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\"><a href=\"https://laravel.com/docs/10.x/database-testing#resetting-the-database-after-each-test\" style=\"border-width: 0px; border-style: solid; border-color: rgb(231, 232, 242); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(10 178 245 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; color: rgb(35, 35, 35); position: relative; transition: all 0.3s ease 0s;\">Resetting The Database After Each Test</a></h3><p style=\"border-width: 0px; border-style: solid; border-color: rgb(231, 232, 242); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(10 178 245 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; font-size: medium; line-height: 1.8em; color: rgb(86, 84, 84); font-family: scandia-web, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Before proceeding much further, let\'s discuss how to reset your database after each of your tests so that data from a previous test does not interfere with subsequent tests. Laravel\'s included&nbsp;<code style=\"border-width: 0px; border-style: solid; border-color: rgb(231, 232, 242); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(10 178 245 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; font-family: source-code-pro, ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, &quot;Liberation Mono&quot;, &quot;Courier New&quot;, monospace; font-size: 0.8rem; color: rgb(202, 71, 63); background: rgb(251, 251, 253); white-space: pre; word-spacing: normal; word-break: normal; overflow-wrap: normal; tab-size: 4; hyphens: none; line-height: 1.9; padding: 0px 0.125rem; display: inline-flex; border-radius: 0.125rem; max-width: 100%; overflow-x: auto; vertical-align: middle;\">Illuminate\\Foundation\\Testing\\RefreshDatabase</code>&nbsp;trait will take care of this for you. Simply use the trait on your test class:<br><br></p><p style=\"border-width: 0px; border-style: solid; border-color: rgb(231, 232, 242); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(10 178 245 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; font-size: medium; line-height: 1.8em; color: rgb(86, 84, 84); font-family: scandia-web, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">The&nbsp;<code style=\"border-width: 0px; border-style: solid; border-color: rgb(231, 232, 242); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(10 178 245 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; font-family: source-code-pro, ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, &quot;Liberation Mono&quot;, &quot;Courier New&quot;, monospace; font-size: 0.8rem; color: rgb(202, 71, 63); background: rgb(251, 251, 253); white-space: pre; word-spacing: normal; word-break: normal; overflow-wrap: normal; tab-size: 4; hyphens: none; line-height: 1.9; padding: 0px 0.125rem; display: inline-flex; border-radius: 0.125rem; max-width: 100%; overflow-x: auto; vertical-align: middle;\">Illuminate\\Foundation\\Testing\\RefreshDatabase</code>&nbsp;trait does not migrate your database if your schema is up to date. Instead, it will only execute the test within a database transaction. Therefore, any records added to the database by test cases that do not use this trait may still exist in the database.</p><p style=\"border-width: 0px; border-style: solid; border-color: rgb(231, 232, 242); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(10 178 245 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; font-size: medium; line-height: 1.8em; color: rgb(86, 84, 84); font-family: scandia-web, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">If you would like to totally reset the database, you may use the&nbsp;<code style=\"border-width: 0px; border-style: solid; border-color: rgb(231, 232, 242); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(10 178 245 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; font-family: source-code-pro, ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, &quot;Liberation Mono&quot;, &quot;Courier New&quot;, monospace; font-size: 0.8rem; color: rgb(202, 71, 63); background: rgb(251, 251, 253); white-space: pre; word-spacing: normal; word-break: normal; overflow-wrap: normal; tab-size: 4; hyphens: none; line-height: 1.9; padding: 0px 0.125rem; display: inline-flex; border-radius: 0.125rem; max-width: 100%; overflow-x: auto; vertical-align: middle;\">Illuminate\\Foundation\\Testing\\DatabaseMigrations</code>&nbsp;or&nbsp;<code style=\"border-width: 0px; border-style: solid; border-color: rgb(231, 232, 242); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(10 178 245 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; font-family: source-code-pro, ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, &quot;Liberation Mono&quot;, &quot;Courier New&quot;, monospace; font-size: 0.8rem; color: rgb(202, 71, 63); background: rgb(251, 251, 253); white-space: pre; word-spacing: normal; word-break: normal; overflow-wrap: normal; tab-size: 4; hyphens: none; line-height: 1.9; padding: 0px 0.125rem; display: inline-flex; border-radius: 0.125rem; max-width: 100%; overflow-x: auto; vertical-align: middle;\">Illuminate\\Foundation\\Testing\\DatabaseTruncation</code>&nbsp;traits instead. However, both of these options are significantly slower than the&nbsp;<code style=\"border-width: 0px; border-style: solid; border-color: rgb(231, 232, 242); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(10 178 245 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; font-family: source-code-pro, ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, &quot;Liberation Mono&quot;, &quot;Courier New&quot;, monospace; font-size: 0.8rem; color: rgb(202, 71, 63); background: rgb(251, 251, 253); white-space: pre; word-spacing: normal; word-break: normal; overflow-wrap: normal; tab-size: 4; hyphens: none; line-height: 1.9; padding: 0px 0.125rem; display: inline-flex; border-radius: 0.125rem; max-width: 100%; overflow-x: auto; vertical-align: middle;\">RefreshDatabase</code>&nbsp;trait.</p><p style=\"border-width: 0px; border-style: solid; border-color: rgb(231, 232, 242); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(10 178 245 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; font-size: medium; line-height: 1.8em; color: rgb(86, 84, 84); font-family: scandia-web, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\"></p><h2 id=\"model-factories\" style=\"border-width: 0px; border-style: solid; border-color: rgb(231, 232, 242); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(10 178 245 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; font-size: 1.75em; margin: 2em 0px 0.75em; line-height: 1.125em; color: rgb(35, 35, 35); font-family: scandia-web, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\"><a href=\"https://laravel.com/docs/10.x/database-testing#model-factories\" style=\"border-width: 0px; border-style: solid; border-color: rgb(231, 232, 242); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(10 178 245 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; color: rgb(35, 35, 35); position: relative; transition: all 0.3s ease 0s;\">Model Factories</a></h2><p style=\"border-width: 0px; border-style: solid; border-color: rgb(231, 232, 242); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(10 178 245 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; font-size: medium; line-height: 1.8em; color: rgb(86, 84, 84); font-family: scandia-web, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">When testing, you may need to insert a few records into your database before executing your test. Instead of manually specifying the value of each column when you create this test data, Laravel allows you to define a set of default attributes for each of your&nbsp;<a href=\"https://laravel.com/docs/10.x/eloquent\" style=\"border-width: 0px; border-style: solid; border-color: rgb(231, 232, 242); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(10 178 245 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; color: rgb(235, 68, 50); text-decoration-line: underline; position: relative; transition: all 0.3s ease 0s; word-break: break-word;\">Eloquent models</a>&nbsp;using&nbsp;<a href=\"https://laravel.com/docs/10.x/eloquent-factories\" style=\"border-width: 0px; border-style: solid; border-color: rgb(231, 232, 242); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(10 178 245 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; color: rgb(235, 68, 50); text-decoration-line: underline; position: relative; transition: all 0.3s ease 0s; word-break: break-word;\">model factories</a>.</p><p style=\"border-width: 0px; border-style: solid; border-color: rgb(231, 232, 242); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(10 178 245 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; font-size: medium; line-height: 1.8em; color: rgb(86, 84, 84); font-family: scandia-web, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">To learn more about creating and utilizing model factories to create models, please consult the complete&nbsp;<a href=\"https://laravel.com/docs/10.x/eloquent-factories\" style=\"border-width: 0px; border-style: solid; border-color: rgb(231, 232, 242); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(10 178 245 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; color: rgb(235, 68, 50); text-decoration-line: underline; position: relative; transition: all 0.3s ease 0s; word-break: break-word;\">model factory documentation</a>. Once you have defined a model factory, you may utilize the factory within your test to create models:<br></p><p style=\"border-width: 0px; border-style: solid; border-color: rgb(231, 232, 242); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(10 178 245 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; font-size: medium; line-height: 1.8em; color: rgb(86, 84, 84); font-family: scandia-web, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\"><br><a href=\"https://laravel.com/docs/10.x/database-testing#running-seeders\" style=\"font-size: 1.75em; background-color: rgb(255, 255, 255); border-width: 0px; border-style: solid; border-color: rgb(231, 232, 242); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(10 178 245 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; color: rgb(35, 35, 35); position: relative; transition: all 0.3s ease 0s;\">Running Seeders</a><br></p><p style=\"border-width: 0px; border-style: solid; border-color: rgb(231, 232, 242); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(10 178 245 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: 0px; margin-bottom: 1.5em; margin-left: 0px; font-size: medium; line-height: 1.8em; color: rgb(86, 84, 84); font-family: scandia-web, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">If you would like to use&nbsp;<a href=\"https://laravel.com/docs/10.x/seeding\" style=\"border-width: 0px; border-style: solid; border-color: rgb(231, 232, 242); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(10 178 245 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; color: rgb(235, 68, 50); text-decoration-line: underline; position: relative; transition: all 0.3s ease 0s; word-break: break-word;\">database seeders</a>&nbsp;to populate your database during a feature test, you may invoke the&nbsp;<code style=\"border-width: 0px; border-style: solid; border-color: rgb(231, 232, 242); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(10 178 245 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; font-family: source-code-pro, ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, &quot;Liberation Mono&quot;, &quot;Courier New&quot;, monospace; font-size: 0.8rem; color: rgb(202, 71, 63); background: rgb(251, 251, 253); white-space: pre; word-spacing: normal; word-break: normal; overflow-wrap: normal; tab-size: 4; hyphens: none; line-height: 1.9; padding: 0px 0.125rem; display: inline-flex; border-radius: 0.125rem; max-width: 100%; overflow-x: auto; vertical-align: middle;\">seed</code>&nbsp;method. By default, the&nbsp;<code style=\"border-width: 0px; border-style: solid; border-color: rgb(231, 232, 242); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(10 178 245 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; font-family: source-code-pro, ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, &quot;Liberation Mono&quot;, &quot;Courier New&quot;, monospace; font-size: 0.8rem; color: rgb(202, 71, 63); background: rgb(251, 251, 253); white-space: pre; word-spacing: normal; word-break: normal; overflow-wrap: normal; tab-size: 4; hyphens: none; line-height: 1.9; padding: 0px 0.125rem; display: inline-flex; border-radius: 0.125rem; max-width: 100%; overflow-x: auto; vertical-align: middle;\">seed</code>&nbsp;method will execute the&nbsp;<code style=\"border-width: 0px; border-style: solid; border-color: rgb(231, 232, 242); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(10 178 245 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; font-family: source-code-pro, ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, &quot;Liberation Mono&quot;, &quot;Courier New&quot;, monospace; font-size: 0.8rem; color: rgb(202, 71, 63); background: rgb(251, 251, 253); white-space: pre; word-spacing: normal; word-break: normal; overflow-wrap: normal; tab-size: 4; hyphens: none; line-height: 1.9; padding: 0px 0.125rem; display: inline-flex; border-radius: 0.125rem; max-width: 100%; overflow-x: auto; vertical-align: middle;\">DatabaseSeeder</code>, which should execute all of your other seeders. Alternatively, you pass a specific seeder class name to the&nbsp;<code style=\"border-width: 0px; border-style: solid; border-color: rgb(231, 232, 242); --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(10 178 245 / .5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; font-family: source-code-pro, ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, &quot;Liberation Mono&quot;, &quot;Courier New&quot;, monospace; font-size: 0.8rem; color: rgb(202, 71, 63); background: rgb(251, 251, 253); white-space: pre; word-spacing: normal; word-break: normal; overflow-wrap: normal; tab-size: 4; hyphens: none; line-height: 1.9; padding: 0px 0.125rem; display: inline-flex; border-radius: 0.125rem; max-width: 100%; overflow-x: auto; vertical-align: middle;\">seed</code>&nbsp;method:</p>', '44', 'blogs', '', NULL, NULL, NULL, NULL, NULL, 'publish', '1', '2023-08-17 07:08:10', '2023-08-20 23:46:47'),
(64, 'Dr. Azmere Islam', NULL, NULL, 'dr-azmere-islam', 'Dr. Azmere Islam is a lecturer at Atish Dipankar University of Science and Technology (ADUST). She has been working here since September 2020 as a faculty of the Law Department. She teaches Laws on Taxation and Customs here. She has been in the teaching profession for 3 years starting from Dhaka Law College to this university. Beforehand, She has been practising Tax for the last 5 years as an Income Tax Lawyer. The other areas of her specialization are the Legal System of Bangladesh, Criminal Law and Tax/Fiscal Law. She is also a social worker, member at Dhaka Ladies Club. She has also acquired her Ph.D from American World University, USA in 2016.', '53', 'our-team', '', NULL, NULL, NULL, NULL, 'single-member', 'publish', '1', '2023-08-22 03:43:43', '2023-08-26 10:13:55'),
(65, 'Abida Kona', NULL, NULL, 'abida-kona', NULL, '52', 'our-team', '', NULL, NULL, NULL, NULL, 'single-member', 'publish', '1', '2023-08-22 03:44:55', '2023-08-26 10:14:22'),
(69, 'Company Law Compliance', NULL, NULL, 'company-law-compliance', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p><p><br></p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p><p><br></p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p><div><br></div>', NULL, 'service', '', NULL, NULL, NULL, NULL, NULL, 'publish', '1', '2023-08-22 04:43:02', '2023-08-26 11:17:35'),
(70, 'Md. Abdullah-Al-Faruk', NULL, NULL, 'md-abdullah-al-faruk', NULL, '51', 'our-team', '', NULL, NULL, NULL, NULL, 'single-member', 'publish', '1', '2023-08-26 09:40:01', '2023-08-26 10:14:54'),
(71, 'Sanjib Kumar Sorkar', NULL, NULL, 'vat-expert', NULL, '57', 'our-team', '', NULL, NULL, NULL, NULL, NULL, 'publish', '1', '2023-08-26 11:20:07', '2023-08-26 11:22:25');

-- --------------------------------------------------------

--
-- Table structure for table `posts_field`
--

CREATE TABLE `posts_field` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `term_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term_taxonomy_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field_type` enum('text','textarea','richtext','select','single_image','multiple_image','checkbox','radio','colorpicker','addmore') COLLATE utf8mb4_unicode_ci NOT NULL,
  `field_type_value` longtext COLLATE utf8mb4_unicode_ci COMMENT 'Title:field_type#value1,value2|',
  `field_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field_value` varbinary(255) DEFAULT NULL,
  `join_table` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `join_column` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field_for` enum('Post','Category') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts_field`
--

INSERT INTO `posts_field` (`id`, `term_type`, `term_taxonomy_type`, `field_type`, `field_type_value`, `field_title`, `field_name`, `field_value`, `join_table`, `join_column`, `note`, `field_for`, `created_at`, `updated_at`) VALUES
(4, 'slider', NULL, 'text', '', '1st Button Text', 'first_button_text', NULL, NULL, NULL, NULL, 'Post', NULL, NULL),
(5, 'slider', NULL, 'text', '', '1st Button Url', 'first_button_url', NULL, NULL, NULL, 'input with http://', 'Post', NULL, NULL),
(6, 'slider', NULL, 'text', '', '2nd Button Text', 'second_button_text', NULL, NULL, NULL, NULL, 'Post', NULL, NULL),
(7, 'slider', NULL, 'text', '', '2nd Button Url', 'second_button_url', NULL, NULL, NULL, 'input with http://', 'Post', NULL, NULL),
(29, 'service', NULL, 'text', '', 'Service Sub Title', 'service_sub_title', NULL, NULL, NULL, NULL, 'Post', NULL, NULL),
(30, 'our-team', NULL, 'text', '', 'Team Sub Title', 'team_sub_title', NULL, NULL, NULL, NULL, 'Post', NULL, NULL),
(31, 'blogs', NULL, 'text', '', 'Blog Sub Title', 'blog_sub_title', NULL, NULL, NULL, NULL, 'Post', NULL, NULL),
(32, 'blogs', NULL, 'single_image', '', 'Blog Single Image', 'blog_single_image', NULL, NULL, NULL, NULL, 'Post', NULL, NULL),
(34, 'our-team', NULL, 'text', '', 'Designation', 'designation', NULL, NULL, NULL, NULL, 'Post', NULL, NULL),
(35, 'our-team', NULL, 'text', '', 'Degrees', 'degrees', NULL, NULL, NULL, NULL, 'Post', NULL, NULL),
(36, 'our-team', NULL, 'text', '', 'Practice Areas', 'practice_area', NULL, NULL, NULL, NULL, 'Post', NULL, NULL),
(37, 'our-team', NULL, 'text', '', 'Chamber Location', 'chamber_location', NULL, NULL, NULL, NULL, 'Post', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts_meta`
--

CREATE TABLE `posts_meta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `meta_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts_meta`
--

INSERT INTO `posts_meta` (`id`, `post_id`, `category_id`, `meta_name`, `meta_value`, `created_at`, `updated_at`) VALUES
(8, 4, NULL, 'first_button_text', 'Buy Now', '2023-02-25 16:17:00', '2023-02-25 16:18:47'),
(9, 4, NULL, 'first_button_url', 'facebook.com', '2023-02-25 16:17:00', '2023-02-25 16:19:05'),
(10, 4, NULL, 'second_button_text', 'learn More', '2023-02-25 16:17:00', '2023-02-25 16:18:47'),
(11, 4, NULL, 'second_button_url', 'text.com', '2023-02-25 16:17:00', '2023-02-25 16:19:05'),
(66, 33, NULL, 'first_button_text', NULL, '2023-03-19 00:09:38', '2023-03-19 00:09:38'),
(67, 33, NULL, 'first_button_url', NULL, '2023-03-19 00:09:38', '2023-03-19 00:09:38'),
(68, 33, NULL, 'second_button_text', NULL, '2023-03-19 00:09:38', '2023-03-19 00:09:38'),
(69, 33, NULL, 'second_button_url', NULL, '2023-03-19 00:09:38', '2023-03-19 00:09:38'),
(75, 37, NULL, 'first_button_text', NULL, '2023-03-20 04:29:19', '2023-03-20 04:29:19'),
(76, 37, NULL, 'first_button_url', NULL, '2023-03-20 04:29:19', '2023-03-20 04:29:19'),
(77, 37, NULL, 'second_button_text', NULL, '2023-03-20 04:29:19', '2023-03-20 04:29:19'),
(78, 37, NULL, 'second_button_url', NULL, '2023-03-20 04:29:19', '2023-03-20 04:29:19'),
(116, 49, NULL, 'service_sub_title', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit.', '2023-08-17 03:53:16', '2023-08-22 02:33:24'),
(117, 50, NULL, 'service_sub_title', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, quaerat.', '2023-08-17 05:18:29', '2023-08-17 05:18:29'),
(119, 52, NULL, 'service_sub_title', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, quaerat.', '2023-08-17 05:20:50', '2023-08-17 05:20:50'),
(120, 53, NULL, 'team_sub_title', NULL, '2023-08-17 05:35:07', '2023-08-26 09:04:44'),
(121, 54, NULL, 'team_sub_title', NULL, '2023-08-17 05:40:12', '2023-08-26 09:05:30'),
(122, 55, NULL, 'team_sub_title', NULL, '2023-08-17 05:40:59', '2023-08-26 09:15:10'),
(123, 56, NULL, 'team_sub_title', NULL, '2023-08-17 05:41:19', '2023-08-26 09:32:57'),
(124, 57, NULL, 'blog_single_image', '42', '2023-08-17 07:04:11', '2023-08-17 07:10:34'),
(125, 57, NULL, 'blog_sub_title', 'OpenAI has introduced custom instructions so that users can tailor ChatGPT to better meet their', '2023-08-17 07:04:11', '2023-08-17 07:04:11'),
(126, 45, NULL, 'blog_single_image', '43', '2023-08-17 07:06:15', '2023-08-17 07:10:05'),
(127, 45, NULL, 'blog_sub_title', 'Web development is the work involved in developing a website for the Internet', '2023-08-17 07:06:15', '2023-08-17 07:06:15'),
(128, 58, NULL, 'blog_single_image', '44', '2023-08-17 07:08:10', '2023-08-17 07:10:54'),
(129, 58, NULL, 'blog_sub_title', 'David Hemphill at Laracon AU talking about how to use feature tests with database seeders.', '2023-08-17 07:08:10', '2023-08-21 06:32:18'),
(132, 53, NULL, 'designation', NULL, '2023-08-21 04:20:15', '2023-08-26 09:04:44'),
(133, 54, NULL, 'designation', NULL, '2023-08-21 04:20:27', '2023-08-26 09:05:30'),
(134, 55, NULL, 'designation', 'Advocate, Supreme Court Bar Association', '2023-08-21 04:20:43', '2023-08-26 09:15:10'),
(135, 56, NULL, 'designation', 'Advocate, Supreme Court Bar Association', '2023-08-21 04:20:56', '2023-08-26 09:16:36'),
(136, 56, NULL, 'degrees', 'LL.B (Hon’s), LL.M, ITP', '2023-08-21 04:29:12', '2023-08-26 09:16:36'),
(137, 56, NULL, 'practice_area', NULL, '2023-08-21 04:29:12', '2023-08-26 09:16:36'),
(138, 56, NULL, 'chamber_location', NULL, '2023-08-21 04:29:12', '2023-08-26 09:16:36'),
(139, 53, NULL, 'degrees', NULL, '2023-08-21 04:48:03', '2023-08-26 09:04:44'),
(140, 53, NULL, 'practice_area', NULL, '2023-08-21 04:48:03', '2023-08-26 09:04:44'),
(141, 53, NULL, 'chamber_location', NULL, '2023-08-21 04:48:03', '2023-08-26 09:04:44'),
(142, 54, NULL, 'degrees', NULL, '2023-08-21 04:50:19', '2023-08-26 09:05:30'),
(143, 54, NULL, 'practice_area', NULL, '2023-08-21 04:50:19', '2023-08-26 09:05:30'),
(144, 54, NULL, 'chamber_location', NULL, '2023-08-21 04:50:19', '2023-08-26 09:05:30'),
(145, 55, NULL, 'degrees', 'LL.B (Hon’s), LL.M Dhaka University', '2023-08-21 04:51:22', '2023-08-26 09:15:10'),
(146, 55, NULL, 'practice_area', NULL, '2023-08-21 04:51:22', '2023-08-26 09:15:11'),
(147, 55, NULL, 'chamber_location', NULL, '2023-08-21 04:51:22', '2023-08-26 09:15:11'),
(148, 61, NULL, 'service_sub_title', 'Demo service subtitle', '2023-08-22 03:39:15', '2023-08-24 02:07:02'),
(151, 64, NULL, 'team_sub_title', NULL, '2023-08-22 03:43:43', '2023-08-26 09:38:22'),
(152, 64, NULL, 'designation', 'Lecturer', '2023-08-22 03:43:43', '2023-08-26 09:38:22'),
(153, 64, NULL, 'degrees', 'Ph.D from American World University', '2023-08-22 03:43:43', '2023-08-26 09:38:22'),
(154, 64, NULL, 'practice_area', NULL, '2023-08-22 03:43:43', '2023-08-22 03:43:43'),
(155, 64, NULL, 'chamber_location', NULL, '2023-08-22 03:43:43', '2023-08-22 03:43:43'),
(156, 65, NULL, 'team_sub_title', NULL, '2023-08-22 03:44:55', '2023-08-26 09:39:12'),
(157, 65, NULL, 'designation', 'Advocate, Dhaka Bar Association', '2023-08-22 03:44:55', '2023-08-26 09:39:12'),
(158, 65, NULL, 'degrees', 'LL.B (Hon’s), LL.M (EU)', '2023-08-22 03:44:55', '2023-08-26 09:39:12'),
(159, 65, NULL, 'practice_area', NULL, '2023-08-22 03:44:55', '2023-08-22 03:44:55'),
(160, 65, NULL, 'chamber_location', NULL, '2023-08-22 03:44:55', '2023-08-22 03:44:55'),
(163, 68, NULL, 'service_sub_title', 'DC Mobile ChargerDC Mobile ChargerDC Mobile ChargerDC Mobile Charger ile ChargerDC Mobile ChargerDC Mobile ChargerDC Mobile Charger', '2023-08-22 04:14:03', '2023-08-22 04:25:57'),
(164, 69, NULL, 'service_sub_title', 'Lorem, ipsum', '2023-08-22 04:43:02', '2023-08-22 04:43:02'),
(165, 70, NULL, 'service_sub_title', 'Service Service demo  Service Service demo  Service Service demo', '2023-08-22 04:44:09', '2023-08-22 04:44:09'),
(166, 70, NULL, 'team_sub_title', NULL, '2023-08-26 09:40:01', '2023-08-26 09:40:01'),
(167, 70, NULL, 'designation', 'Advocate, Dhaka Bar Association', '2023-08-26 09:40:01', '2023-08-26 09:40:01'),
(168, 70, NULL, 'degrees', 'LL.B (Hon’s), LL.M (EU)', '2023-08-26 09:40:01', '2023-08-26 09:40:01'),
(169, 70, NULL, 'practice_area', NULL, '2023-08-26 09:40:01', '2023-08-26 09:40:01'),
(170, 70, NULL, 'chamber_location', NULL, '2023-08-26 09:40:01', '2023-08-26 09:40:01'),
(171, 71, NULL, 'team_sub_title', NULL, '2023-08-26 11:20:07', '2023-08-26 11:20:07'),
(172, 71, NULL, 'designation', 'VAT Expert', '2023-08-26 11:20:07', '2023-08-26 11:20:07'),
(173, 71, NULL, 'degrees', 'MAT, MBS (Management), B.Com (Honours)(Management) and ITP.', '2023-08-26 11:20:07', '2023-08-26 11:20:07'),
(174, 71, NULL, 'practice_area', NULL, '2023-08-26 11:20:07', '2023-08-26 11:20:07'),
(175, 71, NULL, 'chamber_location', NULL, '2023-08-26 11:20:07', '2023-08-26 11:20:07');

-- --------------------------------------------------------

--
-- Table structure for table `post_custom_fields`
--

CREATE TABLE `post_custom_fields` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `field_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field_value` longtext COLLATE utf8mb4_unicode_ci,
  `field_for` enum('Post','Category') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('Global','General','Custom') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `code`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'super_admin', 'Global', '2021-12-27 17:33:29', '2021-12-27 17:33:29'),
(2, 'User', 'user', 'General', '2021-12-27 17:33:29', '2021-12-27 17:33:29'),
(3, 'Instructor', 'instructor', 'General', '2021-12-27 17:33:29', '2021-12-27 17:33:29');

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2021-12-27 17:33:29', '2021-12-27 17:33:29'),
(2, 3, 3, '2021-12-29 17:35:59', '2021-12-29 17:35:59');

-- --------------------------------------------------------

--
-- Table structure for table `route_groups`
--

CREATE TABLE `route_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route_order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `route_lists`
--

CREATE TABLE `route_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `route_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route_parameter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route_group` bigint(20) UNSIGNED DEFAULT NULL,
  `route_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route_order` int(11) DEFAULT NULL,
  `route_hash` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_menu` enum('Yes','No') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_menu_id` int(11) DEFAULT NULL,
  `dashboard_position` set('Left','Right','Top','Bottom') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `show_for` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_show_as` enum('Yes','No') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `route_list_roles`
--

CREATE TABLE `route_list_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `route_id` bigint(20) UNSIGNED NOT NULL,
  `show_as` enum('All','User','Permission') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `default_field` set('title','slug','description','featured-image') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('publish','draft') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `name`, `slug`, `default_field`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Post', 'post', 'title,slug,description,featured-image', NULL, '2021-12-27 17:33:29', '2021-12-27 17:33:29'),
(2, 'Page', 'page', 'title,slug,description,featured-image', 'publish', '2021-12-27 17:33:29', '2021-12-27 17:33:29'),
(3, 'Slider', 'slider', 'title,slug,description,featured-image', 'draft', '2021-12-27 17:33:29', '2021-12-27 17:33:29'),
(10, 'Service', 'service', 'title,slug,description,featured-image', 'publish', '2021-12-27 17:33:29', '2021-12-27 17:33:29'),
(11, 'Blogs', 'blogs', 'title,slug,description,featured-image', 'publish', NULL, NULL),
(12, 'Our Team', 'our-team', 'title,slug,description,featured-image', 'publish', '2023-08-17 11:30:04', '2023-08-17 11:30:04');

-- --------------------------------------------------------

--
-- Table structure for table `term_taxonomy`
--

CREATE TABLE `term_taxonomy` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('publish','draft') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `term_taxonomy`
--

INSERT INTO `term_taxonomy` (`id`, `name`, `slug`, `type`, `term_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Categories', 'post_category', NULL, 'post', NULL, '2021-12-27 17:33:29', '2021-12-27 17:33:29'),
(2, 'Categories', 'slider_category', NULL, 'slider', NULL, '2021-12-27 17:33:29', '2021-12-27 17:33:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thana` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `gender` enum('Male','Female') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `first_name`, `last_name`, `email`, `email_verified_at`, `phone`, `avatar`, `address`, `postcode`, `thana`, `district`, `birthdate`, `gender`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mr Super Admin', 'Mr Super', 'Admin', 'admin@system.com', NULL, '00000000000', NULL, 'N/A', 'N/A', 'N/A', '1', '2021-12-08', NULL, '$2y$10$tWhlq1ma.y/f3Ui30qy8cONc5hCG/6GlaSsWxSowMoc7bZdklk0wC', 'GEZgSWdzVMMUgPotrAlXxUK1vbc1baNsZQrI5IBEsvdSkju4UVoA3OMlYA8P', '2021-12-27 17:33:29', '2022-01-07 17:17:59'),
(3, 'Noushad Nipun', 'Noushad', 'Nipun', 'nipunnoushad8@gmail.com', NULL, '01823633792', NULL, '74, East Tejturi Bazar, Tejgoan', '1215', 'Dhaka', NULL, '2022-01-01', NULL, '$2y$10$9zer8D8yLLB0oc3rVJ/VYOkIBKESpSclt613s5IlXe.8cPpz452MW', NULL, '2021-12-29 17:35:59', '2021-12-31 16:21:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_menus`
--
ALTER TABLE `admin_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_menu_items`
--
ALTER TABLE `admin_menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_menu_items_menu_foreign` (`menu`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontend_settings`
--
ALTER TABLE `frontend_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medias`
--
ALTER TABLE `medias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts_field`
--
ALTER TABLE `posts_field`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts_meta`
--
ALTER TABLE `posts_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_custom_fields`
--
ALTER TABLE `post_custom_fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route_groups`
--
ALTER TABLE `route_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route_lists`
--
ALTER TABLE `route_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route_list_roles`
--
ALTER TABLE `route_list_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `term_taxonomy`
--
ALTER TABLE `term_taxonomy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `frontend_settings`
--
ALTER TABLE `frontend_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `medias`
--
ALTER TABLE `medias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `posts_field`
--
ALTER TABLE `posts_field`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `posts_meta`
--
ALTER TABLE `posts_meta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `post_custom_fields`
--
ALTER TABLE `post_custom_fields`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_users`
--
ALTER TABLE `role_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `route_groups`
--
ALTER TABLE `route_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `route_lists`
--
ALTER TABLE `route_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `route_list_roles`
--
ALTER TABLE `route_list_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `term_taxonomy`
--
ALTER TABLE `term_taxonomy`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
