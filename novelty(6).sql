-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2020 at 10:52 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `novelty`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_side`
--

CREATE TABLE `admin_side` (
  `admin_id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobileno` varchar(30) NOT NULL,
  `profile` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_side`
--

INSERT INTO `admin_side` (`admin_id`, `firstname`, `lastname`, `email`, `password`, `mobileno`, `profile`) VALUES
(3, 'Pins', 'Patel', 'pinsp19@gmail.com', '123', '987463', '5a37f0dfc488ac6062ac2aa5.png');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area_id` int(11) NOT NULL,
  `area_name` varchar(34) NOT NULL,
  `city_id` int(11) NOT NULL,
  `area_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `area_name`, `city_id`, `area_status`) VALUES
(4, 'Vesu', 1, 1),
(6, 'Althan', 1, 1),
(7, 'Bhatar', 1, 1),
(8, 'Pinkcity', 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(45) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`, `image`) VALUES
(18, 'Lakeme', 'lakeme.png'),
(24, 'L\'Oreal', 'loreal.png'),
(25, 'Revlon', 'revlon.png'),
(26, 'Maybelline', 'maybelline.png'),
(27, 'Avon', 'avon.png'),
(29, 'MAC Cosmetics', 'mac.png'),
(31, 'Amway', 'amway.png'),
(33, 'Colorbar Cosmetics', 'colorbar.png'),
(34, 'Faces Canada', 'faces_logo.jpg'),
(35, 'Elle 18', 'images (5).jpg'),
(40, 'Patanjali', 'Patanjali-Logo-PNG.png'),
(41, 'Fair and lovely', 'download.jpg'),
(43, 'Makeup Revolution', 'download (r).png'),
(44, 'Kama Ayurveda', 'kama_ayurveda.png'),
(45, 'BBlunt', '925742423s.jpg'),
(46, 'Biotique', 'images (2).jpg'),
(47, 'Blue Heaven', 'unnamed.jpg'),
(48, 'Coloressence', 'OPLIVPX5_400x400.jpg'),
(49, 'Fogg', 'fogg.jpg'),
(50, 'Garnier', 'Garnier-Logo.png'),
(51, 'Khadi Natural', 'download (5).png'),
(52, 'Lux', '5a37f0dfc488ac6062ac2aa5.png'),
(54, 'VLCC', 'images (1).jpg'),
(55, 'gfh', 'WhatsApp Image 2018-03-26 at 11.34.28 PM.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(34) NOT NULL,
  `maincategory_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `maincategory_id`) VALUES
(28, 'Hair Care', 3),
(29, 'Tools & Appliances', 3),
(30, 'Hair Styling', 3),
(32, 'Body-Care', 2),
(33, 'Eye-Care', 2),
(34, 'Lip-Care', 2),
(35, 'Face', 4),
(36, 'Eyes', 4),
(37, 'Lips', 4),
(38, 'Nails', 4),
(39, 'Tools & Brushes', 4),
(40, 'Hair Styling Tools', 5),
(41, 'Foot Care', 5),
(42, 'Face/Skin Tools', 5),
(56, 'face-care', 2),
(57, 'Hand care', 5),
(61, 'Natural_Skin-care', 2),
(62, 'Natural_Hair-care', 3),
(63, 'Natural_Make-up', 4),
(65, 'Fragrance', 5);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(30) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `state_id`, `city_status`) VALUES
(1, 'Surat', 2, '1'),
(4, 'baroda', 2, '1'),
(7, 'Sharif', 7, '1'),
(8, 'Patras', 8, '1'),
(9, 'Jaipur', 5, '1');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `color_id` int(11) NOT NULL,
  `color_name` text NOT NULL,
  `profile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`color_id`, `color_name`, `profile`) VALUES
(4, '#000000', ''),
(5, '#0C090A', 'night.png'),
(6, '#737CA1', 'slateblue.png'),
(7, '#4863A0', 'steelblue.png'),
(8, '#2B547E', 'bluejay.png'),
(9, '#151B54', 'midnightblue.png'),
(10, '#000080', 'navyblue.png'),
(11, '#0020C2', 'cobaltblue.png'),
(12, '#6960EC', 'bluelotus.png'),
(13, '#ADDFFF', 'lightblue.png'),
(14, '#EBF4FA', 'water.png'),
(15, '#CCFFFF', 'lightslate.png'),
(16, '#50EBEC', 'celeste.png'),
(17, '#00FF00', 'green.png'),
(18, '#FFFF00', 'yellow.png'),
(19, '#FFF380', 'cornyellow.png'),
(20, '#FFFFC2', 'perchment.png'),
(21, '#FFFFCC', 'cream.png'),
(22, '#FFF8C6', 'lemonchiffon.png'),
(23, '#FFF8DC', 'cornsilk.png'),
(24, '#F5F5DC', 'beige.png'),
(25, '#FAEBD7', 'antiquewhite.png'),
(26, '#FFEBCD', 'BlanchedAlmond.png'),
(27, '#F3E5AB', 'vanilla.png'),
(28, '#FFE5B4', 'peach.png'),
(29, '#FFA62F', 'cantaloup.png'),
(30, '#E2A76F', 'brownsugar.png'),
(31, '#FFCBA4', 'deeppeach.png'),
(32, '#EE9A4D', 'sandybrown.png'),
(33, '#B87333', 'copper.png'),
(34, '#C47451', 'orangesalomn.png'),
(35, '#C85A17', 'chocolate.png'),
(36, '#FF7F50', 'coral.png'),
(37, '#F75D59', 'beanred.png'),
(38, '#E55451', 'valentinered.png'),
(39, '#FF0000', 'Red.png'),
(40, '#E41B17', 'lovered.png'),
(41, '#C24641', 'cherryred.png'),
(42, '#C11B17', 'chillired.png'),
(43, '#810541', 'maroon.png'),
(44, '#E8ADAA', 'rese.png'),
(45, '#FDD7E4', 'pigpink.png'),
(46, '#FBBBB9', 'mistyrose.png'),
(47, '#FAAFBE', 'pink.png'),
(48, '#F778A1', 'carnationpink.png'),
(49, '#F660AB', 'hotpink.png'),
(50, '#FC6C85', 'watermallonpink.png'),
(51, '#B93B8F', 'plum.png'),
(52, '#8D38C9', 'violet.png'),
(53, '#E6A9EC', 'blushpink.png'),
(54, '#FDEEF4', 'pearl.png'),
(55, '#FFF5EE', 'seashell.png'),
(56, '#FEFCFF', 'milkwhite.png'),
(57, '#FFFFFF', '');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(34) NOT NULL,
  `country_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`, `country_status`) VALUES
(1, 'India', 1),
(3, 'Shrilanka', 1),
(4, 'Japan', 1),
(5, 'Pakistan', 1),
(14, 'Brazil', 0),
(15, 'Canada', 0),
(16, 'Afghanistan', 1),
(18, 'France', 1),
(26, 'Greece', 1),
(32, 'Indonesia', 0),
(34, 'Iran', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(45) NOT NULL,
  `product_brand` varchar(56) NOT NULL,
  `product_type` varchar(56) NOT NULL,
  `product_review` varchar(46) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `main_category`
--

CREATE TABLE `main_category` (
  `maincategory_id` int(11) NOT NULL,
  `maincategory_name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_category`
--

INSERT INTO `main_category` (`maincategory_id`, `maincategory_name`) VALUES
(2, 'Skin'),
(3, 'Hair'),
(4, 'Make Up'),
(5, 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `order_detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(45) NOT NULL,
  `product_quantity` varchar(45) NOT NULL,
  `product_price` varchar(56) NOT NULL,
  `product_color` varchar(56) NOT NULL,
  `status` varchar(45) NOT NULL,
  `rid` int(11) DEFAULT NULL,
  `seller_id` int(11) NOT NULL,
  `rdid` int(11) NOT NULL,
  `reason` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`order_detail_id`, `order_id`, `product_id`, `product_name`, `product_quantity`, `product_price`, `product_color`, `status`, `rid`, `seller_id`, `rdid`, `reason`) VALUES
(1, 1, 55, 'a', '1', '500', '0', '1', NULL, 19, 1, ''),
(2, 2, 55, 'a', '1', '500', '0', '1', NULL, 19, 2, ''),
(3, 3, 55, 'a', '1', '500', '0', '2', NULL, 19, 3, ''),
(4, 4, 44, 'Maybelline New York Superstay 24 C', '1', '600', '0', '2', 1, 19, 4, 'gfdhxhfgjf	');

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `ostatus` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`order_id`, `user_id`, `shipping_id`, `order_date`, `ostatus`) VALUES
(1, 1, 1, '2018-05-12', '1'),
(2, 1, 2, '2018-05-12', '1'),
(3, 1, 3, '2018-05-12', '1'),
(4, 1, 4, '2018-05-12', '1');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(34) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `product_type` varchar(34) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_quantity` varchar(30) NOT NULL,
  `product_prise` varchar(42) NOT NULL,
  `product_color` varchar(40) NOT NULL,
  `seller_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`product_id`, `product_name`, `subcategory_id`, `product_type`, `brand_id`, `product_quantity`, `product_prise`, `product_color`, `seller_id`) VALUES
(21, 'Lakme Absolute Blur Perfect Primer', 14, 'Primer', 18, '30ml', '675', '21', 19),
(22, 'Lotus perfecting Primer', 14, 'Primer', 36, '30gm', '675', '20', 19),
(23, 'M.A.C Prep+ Prime Fix', 14, 'Primer', 29, '100ml', '1000', '18', 19),
(24, 'Colorbar Perfect Match Primer', 14, 'Primer', 33, '30ml', '825', '22', 19),
(25, 'Avon True Color Concealer', 15, 'Concealer Stick', 27, '4ml', '400', '18', 19),
(26, 'Lakme Absolute White Intense Conce', 15, 'Concealer Stick', 18, '3.6ml', '550', '23', 19),
(27, 'Maybelline New York Fit Me Conceal', 15, 'Liquid Concealer', 26, '10ml', '525', '21', 19),
(28, 'Maybelline New York Fit Me Matte +', 16, 'Liquid Foundatin', 26, '15ml', '525', '20', 19),
(29, 'Lakme Absolute White Intense Found', 16, 'Liquid Foundatin', 18, '5ml', '750', '18', 19),
(30, 'Lakme Absolute Mattreal Skin Natur', 16, 'Mousse Foundation', 18, '3.5mg', '700', '18', 19),
(31, 'Lakme 9 to 5 Flawless Matte Comple', 17, 'Matte Compact', 18, '8gm', '400', '21', 19),
(32, 'Maybelline New York Fit Me Matte +', 17, 'Matte Compact', 26, '15gm', '600', '18', 19),
(33, 'Maybelline New York Color Show Blu', 18, 'Cream Blush', 26, '4gm', '299', '26', 19),
(34, 'Lakme Absolute illuminating Blush ', 18, 'Shimmer Blus', 18, '5mg', '725', '22', 19),
(35, 'Lakme Kajal', 22, 'Kajal', 18, '2gm', '70', '57', 19),
(36, 'Maybelline New York The Colossal K', 22, 'Get Blck', 26, '3gm', '180', '57', 19),
(37, 'Maybelline New York The Colossal L', 23, 'Pen Linear', 26, '5mg', '500', '57', 19),
(38, 'Lakme Insta Linear', 23, 'Eyelinear', 18, '9ml', '115', '57', 19),
(39, 'Lakme Eyeconic Mascara', 24, 'Gel mascara', 18, '19ml', '375', '57', 19),
(40, 'Maybelline New York Hyper Curl Vol', 24, 'Gel mascara', 26, '15ml', '400', '57', 19),
(41, 'Lakme 9 to 5 Eye Quartet Eyeshadow', 25, 'Shimmer Eyeshadow', 18, '9gm', '600', '24', 19),
(42, 'Maybelline New York The Nudes Eyes', 25, 'Nude Eyeshadow', 26, '15gm', '800', '25', 19),
(43, 'Lakme 9 to 5 Eye Matte Lipstic', 27, 'Matte Lipstick', 18, '5gm', '500', '33', 19),
(44, 'Maybelline New York Superstay 24 C', 28, 'Liquid lipstick', 26, '10ml', '600', '24', 19),
(45, 'Maybelline New York Color Show Nai', 32, 'Matte', 26, '5ml', '150', '9', 19),
(46, 'Lakme 9 To 5 Long Wear Nail Color', 33, 'Gel', 18, '5ml', '200', '8', 19),
(47, 'Lakme Lip Love Lip Care', 34, 'Lip Balm', 18, '5mg', '180', '15', 19),
(48, 'Colorbar Perfect Match Primer ', 14, 'Face Primer', 33, '50ml', '1100', '46', 19),
(49, 'M.A.C Studio Conceal And Correct P', 15, 'correct palette', 29, '5gm', '3500', '40', 19),
(50, 'Maybelline New York Instant Age Re', 15, 'age rewind', 26, '5gm', '600', '55', 19),
(51, 'Lakme Absolute White Intense Conce', 15, 'Concealer Stick', 18, '8gm', '550', '54', 0),
(52, 'Maybelline New York White Super Fr', 17, 'White Super Fresh', 26, '9gm', '150', '54', 0),
(53, 'Camera', 15, 'sad', 43, '30', '500', '18', 0),
(54, '300', 15, 'sad', 43, '', '500', '16', 0),
(55, 'a', 14, 'sad', 40, '30', '500', '18', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `product_image_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`product_image_id`, `image`, `product_id`) VALUES
(1, 'Lakme-Absolute-Blur-Perfect-Makeup-Primer-Review-mbf-blog.jpg', 21),
(2, 'lakme-nine-to-five-flawless-creme-compact.jpg', 31),
(3, '51YWdKSKVnL._SY678_.jpg', 29),
(4, '41554247718.jpg', 27),
(5, 'color_show_blush_fresh_coral_1.jpg', 33),
(6, 'Lakme-Absolute-Illuminating-Blush-Shimmer-Brick-Coral-Review-Swatches.jpg', 34),
(7, '20450521689564128357812769001270900lakme13718110401381916480138200343513820876941387630737_1390865842.jpg', 35),
(8, '41554460179.jpg', 36),
(9, '8901526301300.jpg', 37),
(10, 'lakme-quick-dry-eyeliner.gif', 38),
(11, 'Best-Lakme-Products-Lakme-Eyeconic-Mascara-480x480.jpg', 39),
(12, 'maybelline_vehcm.jpg', 40),
(13, 'lakme_9to5_es-1.jpg', 41),
(14, '6902395487029.jpg', 42),
(15, 'Lakme-9-to-5-Matte-Lip-color-Red-Coat.jpg', 43),
(16, '6902395361091_1.jpg', 44),
(17, '8901526510245_1.png', 45),
(18, 'Lakme-9-to-5-Long-Wear-Candy-Power-Nail-Polish-032E13_27e00e7a97e265f0cd1bda9a6c8fd196_images.jpg', 46),
(19, 'Lakme-9-to-5-Crease-Less-Lip-Balm-Swatches-Review-Price-India-4.jpg', 47),
(30, '41alpA7vV7L.jpg', 55),
(31, '41yvdQ5138L._SX355_.jpg', 55),
(32, '', 0),
(33, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_status`
--

CREATE TABLE `product_status` (
  `status_id` int(11) NOT NULL,
  `status` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_status`
--

INSERT INTO `product_status` (`status_id`, `status`) VALUES
(1, 'IN STOCK'),
(3, 'OUT OF STOCK');

-- --------------------------------------------------------

--
-- Table structure for table `reminder`
--

CREATE TABLE `reminder` (
  `reminder_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rdate` date NOT NULL,
  `noofday` int(11) NOT NULL,
  `st` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reminder`
--

INSERT INTO `reminder` (`reminder_id`, `product_id`, `user_id`, `rdate`, `noofday`, `st`) VALUES
(1, 44, 1, '2018-05-12', 10, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seller_category`
--

CREATE TABLE `seller_category` (
  `sellercategory_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller_category`
--

INSERT INTO `seller_category` (`sellercategory_id`, `category_id`, `seller_id`) VALUES
(7, 42, 21);

-- --------------------------------------------------------

--
-- Table structure for table `seller_side`
--

CREATE TABLE `seller_side` (
  `seller_id` int(11) NOT NULL,
  `sellershop_name` varchar(34) NOT NULL,
  `shop_address` varchar(34) NOT NULL,
  `seller_password` varchar(43) NOT NULL,
  `seller_mobile_no` varchar(45) NOT NULL,
  `seller_email` varchar(56) NOT NULL,
  `logo_id` text NOT NULL,
  `seller_status` varchar(34) NOT NULL,
  `delivery_charge` varchar(56) NOT NULL,
  `area_id` int(11) NOT NULL,
  `registration_date` varchar(45) NOT NULL,
  `owner_name` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller_side`
--

INSERT INTO `seller_side` (`seller_id`, `sellershop_name`, `shop_address`, `seller_password`, `seller_mobile_no`, `seller_email`, `logo_id`, `seller_status`, `delivery_charge`, `area_id`, `registration_date`, `owner_name`) VALUES
(19, 'Vijay Laxmi', 'VIP,plaza ,vesu', '123', '9825129921', 'abc@gmail.com', 'body-massage-oils.jpg', '0', '50', 4, '2016-11-03', 'Vijay Patel'),
(21, 'beautystore', 'althan', 'beauty', '9586400615', 'beauty@gmail.com', '00662_HD - Copy.jpg', '0', '70', 6, '2018-04-11', 'pinal patel'),
(23, 'jelu', 'althan', 'jelu', '9925035237', 'jelu@gmail.com', 'Screenshot_2015-02-26-09-40-59-1.png', '1', '22', 6, '2018-04-24', 'jelu patel'),
(25, 'TOM-JERRY', 'patiya', 'rahul', '7048119023', 'rahul@gmail.com', 'Screenshot_2016-05-11-13-52-41-1.png', '1', '50', 8, '2018-04-25', 'rahul rathi'),
(30, 'nayka', 'surat', 'nayka', '9825123456', 'nayka@gmail.com', '20170308_105749.jpg', '', '', 4, '2018-04-24', 'nayra');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_address`
--

CREATE TABLE `shipping_address` (
  `shipping_id` int(11) NOT NULL,
  `area_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `shipping_person_name` varchar(45) NOT NULL,
  `mobile_no` varchar(56) NOT NULL,
  `email` varchar(34) NOT NULL,
  `address` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping_address`
--

INSERT INTO `shipping_address` (`shipping_id`, `area_id`, `user_id`, `shipping_person_name`, `mobile_no`, `email`, `address`) VALUES
(1, NULL, 1, 'Nirmal Hospital', '9874563210', 'laludesai92@gmail.com', 'dgd'),
(2, NULL, 1, 'Nirmal Hospital', '9874563210', 'laludesai92@gmail.com', 'sdgv'),
(3, NULL, 1, 'a', 'a', 'a', 'a'),
(4, NULL, 1, 'sdf', 'sdf', 'sdf', 'sdf');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(45) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`, `country_id`, `state_status`) VALUES
(2, 'Gujarat', 1, 1),
(5, 'Rajsthan', 1, 1),
(6, 'herat', 16, 1),
(7, 'Daykondi', 16, 1),
(8, 'Akhaia', 26, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcategory_id` int(11) NOT NULL,
  `subcategory_name` varchar(30) NOT NULL,
  `category_id` int(11) NOT NULL,
  `category_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcategory_id`, `subcategory_name`, `category_id`, `category_image`) VALUES
(14, 'Face Primer', 35, '1486484634-face-primers.jpg'),
(15, 'Concealer', 35, 'younique-touch-liquid-foundation-concealer.jpg'),
(16, 'Foundation', 35, 'Focallure-2017-New-Maquiagem-Whitening-Moisturizing-Liquid-Foundation-Makeup-Waterproof-Concealer-Foundation-Cream-Face.jpg_640x640.jpg'),
(17, 'Compact', 35, 'LM0029.jpg'),
(18, 'Blush', 35, 'blush-monsoon.jpg'),
(19, 'Contour', 35, '2284091.jpg'),
(20, 'BB & CC Cream', 35, 'tumblr_m7azg3n9zR1qdfkq5.jpg'),
(21, 'Makeup Remover', 35, 'landscape-1462301896-eye-makeup-remover.jpg'),
(22, 'Kajal', 36, 'maxresdefault.jpg'),
(23, 'Eyelinear', 36, 'thatsthepointeyeliner_main.jpg'),
(24, 'Mascara', 36, 'Voluminous_lashes_2017_2.jpg'),
(25, 'Eye Shadow', 36, 'images.jpg'),
(26, 'Eye Lash', 36, 'Sriracha_a_1024x1024.jpg'),
(27, 'Lipstick', 37, '119842345.jpg'),
(28, 'Liquid Lipstick', 37, '71j75L3NBpL._SL1001_.jpg'),
(29, 'Lip Crayon', 37, 'son-lip-cryon-1496645036-1-2610677-1496645036.jpg'),
(30, 'Lip Gloss', 37, 'download (1).jpg'),
(31, 'Lip Liner', 37, 'download.jpg'),
(32, 'Nail Polish', 38, 'download (2).jpg'),
(33, 'Nail Art Kits', 38, 'download (3).jpg'),
(34, 'Lip Blam', 37, 'images (1).jpg'),
(35, 'Nail Polish Remover', 38, 'images (2).jpg'),
(36, 'Face Brush', 39, '41alpA7vV7L.jpg'),
(37, 'Brush Set', 39, '85072_19PcBrush.jpg'),
(44, 'Facial Kits', 35, '183068L1.jpg'),
(45, 'Sunscreen', 32, 'download (4).jpg'),
(46, 'Lotion & Creams', 32, 'download (6).jpg'),
(47, 'Massage Oil', 32, 'body-massage-oils.jpg'),
(48, 'Deodorants', 32, 'images (4).jpg'),
(49, 'Lip Balms', 34, 'images (1).jpg'),
(50, 'Eye Cream', 33, 'anti-wrinkle-eye-cream.jpg'),
(51, 'Shampoo', 28, 'worst-conditioners-L.jpg'),
(52, 'Conditioner', 28, 'worst-conditioners-L.jpg'),
(53, 'Hair Serum', 28, '8ed031924761ba9eaca36c7236c9e1ee--dry-frizzy-hair-makeup-supplies.jpg'),
(54, 'Hair Oil', 28, 'hair-oils-7.png'),
(56, 'Hair Spray', 30, 'best-hair-spray-for-women.jpg'),
(57, 'Gel', 30, 'Sty6_18_pack-shot.jpg'),
(58, 'Hair comb', 29, 'images (5).jpg'),
(59, 'Dryers', 29, 'download (8).jpg'),
(60, 'Straighteners', 29, 'buy_hair_straighteners.jpg'),
(61, 'Curlers', 29, '71JtPXkGmwL._SL1500_.jpg'),
(62, 'Dryers', 40, 'download (8).jpg'),
(63, 'Straighteners', 40, 'buy_hair_straighteners.jpg'),
(64, 'Curlers', 40, '71JtPXkGmwL._SL1500_.jpg'),
(65, 'Foot Care', 41, 'aging-and-foot-care.jpg'),
(66, 'Face Tools', 42, '41alpA7vV7L.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_side`
--

CREATE TABLE `user_side` (
  `user_id` int(11) NOT NULL,
  `name` varchar(34) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(34) NOT NULL,
  `mobileno` varchar(30) NOT NULL,
  `dob` varchar(35) NOT NULL,
  `profile` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_side`
--

INSERT INTO `user_side` (`user_id`, `name`, `email`, `password`, `mobileno`, `dob`, `profile`) VALUES
(1, 'shakti', 'shakti@gmail.com', '123', '9874563210', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `wish_list`
--

CREATE TABLE `wish_list` (
  `wishlist_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `product_name` varchar(45) NOT NULL,
  `product_quantity` varchar(56) NOT NULL,
  `product_color` varchar(45) NOT NULL,
  `product_prise` varchar(55) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wish_list`
--

INSERT INTO `wish_list` (`wishlist_id`, `product_id`, `image`, `product_name`, `product_quantity`, `product_color`, `product_prise`, `user_id`) VALUES
(4, 34, 'Lakme-Absolute-Illuminating-Blush-Shimmer-Brick-Coral-Review-Swatches.jpg', 'Lakme Absolute illuminating Blush ', '5mg', '22', '725', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_side`
--
ALTER TABLE `admin_side`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `maincategory_id` (`maincategory_id`),
  ADD KEY `maincategory_id_2` (`maincategory_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`color_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `main_category`
--
ALTER TABLE `main_category`
  ADD PRIMARY KEY (`maincategory_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_detail_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `shipping_id` (`shipping_id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `subcategory_id` (`subcategory_id`),
  ADD KEY `product_brand` (`brand_id`),
  ADD KEY `product_color` (`product_color`),
  ADD KEY `product_brand_2` (`brand_id`),
  ADD KEY `product_color_2` (`product_color`),
  ADD KEY `seller_id` (`seller_id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`product_image_id`);

--
-- Indexes for table `product_status`
--
ALTER TABLE `product_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `reminder`
--
ALTER TABLE `reminder`
  ADD PRIMARY KEY (`reminder_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `seller_category`
--
ALTER TABLE `seller_category`
  ADD PRIMARY KEY (`sellercategory_id`),
  ADD UNIQUE KEY `seller_id` (`seller_id`),
  ADD UNIQUE KEY `category_id` (`category_id`),
  ADD KEY `category_id_2` (`category_id`),
  ADD KEY `seller_id_2` (`seller_id`),
  ADD KEY `category_id_3` (`category_id`),
  ADD KEY `category_id_4` (`category_id`),
  ADD KEY `category_id_5` (`category_id`);

--
-- Indexes for table `seller_side`
--
ALTER TABLE `seller_side`
  ADD PRIMARY KEY (`seller_id`),
  ADD KEY `area_id` (`area_id`);

--
-- Indexes for table `shipping_address`
--
ALTER TABLE `shipping_address`
  ADD PRIMARY KEY (`shipping_id`),
  ADD KEY `area_id` (`area_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcategory_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `category_id_2` (`category_id`);

--
-- Indexes for table `user_side`
--
ALTER TABLE `user_side`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wish_list`
--
ALTER TABLE `wish_list`
  ADD PRIMARY KEY (`wishlist_id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_side`
--
ALTER TABLE `admin_side`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `main_category`
--
ALTER TABLE `main_category`
  MODIFY `maincategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `product_image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `product_status`
--
ALTER TABLE `product_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `reminder`
--
ALTER TABLE `reminder`
  MODIFY `reminder_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `seller_category`
--
ALTER TABLE `seller_category`
  MODIFY `sellercategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `seller_side`
--
ALTER TABLE `seller_side`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `shipping_address`
--
ALTER TABLE `shipping_address`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `user_side`
--
ALTER TABLE `user_side`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wish_list`
--
ALTER TABLE `wish_list`
  MODIFY `wishlist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `area_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`maincategory_id`) REFERENCES `main_category` (`maincategory_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `state` (`state_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `order_table` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_table`
--
ALTER TABLE `order_table`
  ADD CONSTRAINT `order_table_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_side` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_table_ibfk_2` FOREIGN KEY (`shipping_id`) REFERENCES `shipping_address` (`shipping_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `seller_category`
--
ALTER TABLE `seller_category`
  ADD CONSTRAINT `seller_category_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `seller_category_ibfk_2` FOREIGN KEY (`seller_id`) REFERENCES `seller_side` (`seller_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `seller_side`
--
ALTER TABLE `seller_side`
  ADD CONSTRAINT `seller_side_ibfk_1` FOREIGN KEY (`area_id`) REFERENCES `area` (`area_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shipping_address`
--
ALTER TABLE `shipping_address`
  ADD CONSTRAINT `shipping_address_ibfk_4` FOREIGN KEY (`area_id`) REFERENCES `area` (`area_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shipping_address_ibfk_5` FOREIGN KEY (`user_id`) REFERENCES `user_side` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `state`
--
ALTER TABLE `state`
  ADD CONSTRAINT `state_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
