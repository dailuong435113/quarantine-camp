-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2022 at 04:55 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_country` text NOT NULL,
  `admin_job` varchar(255) NOT NULL,
  `admin_about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_contact`, `admin_country`, `admin_job`, `admin_about`) VALUES
(2, 'Administrator', 'admin@mail.com', 'd00f5d5217896fb7fd601412cb890830', 'user-profile-min.png', '7777775500', 'Morocco', 'Front-End Developer', ' Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical ');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `p_price` varchar(255) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_top` text NOT NULL,
  `cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_top`, `cat_image`) VALUES
(2, 'Feminine', 'yes', 'feminelg.png'),
(3, 'Kids', 'yes', 'kidslg.jpg'),
(4, 'Others', 'yes', 'othericon.png'),
(5, 'Men', 'yes', 'malelg.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_id` int(10) NOT NULL,
  `contact_email` text NOT NULL,
  `contact_heading` text NOT NULL,
  `contact_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_id`, `contact_email`, `contact_heading`, `contact_desc`) VALUES
(1, 'ecomstore@mail.com', 'Contact  To Us', 'If you have any questions, please feel free to contact us, our customer service center is working for you 24/7.');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `coupon_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `coupon_title` varchar(255) NOT NULL,
  `coupon_price` varchar(255) NOT NULL,
  `coupon_code` varchar(255) NOT NULL,
  `coupon_limit` int(100) NOT NULL,
  `coupon_used` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`coupon_id`, `product_id`, `coupon_title`, `coupon_price`, `coupon_code`, `coupon_limit`, `coupon_used`) VALUES
(5, 8, 'Sale', '10', 'CASTRO', 2, 1),
(6, 14, 'Sale', '65', 'CODEASTRO', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(255) NOT NULL,
  `customer_confirm_code` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`, `customer_confirm_code`, `status`) VALUES
(2, 'aurora', 'aurora@gmail.com', '202cb962ac59075b964b07152d234b70', 'United State', 'New York', '0092334566931', 'new york', 'user.jpg', '::1', '', 'opening'),
(3, 'Demo Customer', 'demo@customer.com', 'Password123', 'DemoCountry', 'DemoCity', '700000000', 'DemoAddress', 'sample_image.jpg', '::1', '', 'locking'),
(4, 'Thomas', 'thomas@demo.com', 'Password123', 'One Country', 'One City', '777777777', '23 Nguyen Trai, Ward 5, District 4', 'sample_img360.png', '::1', '1427053935', 'opening'),
(5, 'Fracis', 'test@customer.com', 'Password123', 'US', 'Demo City', '780000000', '112 Bleck Street', 'userav-min.png', '::1', '1634138674', 'locking'),
(6, 'Sample Customer', 'customer@mail.com', 'Password123', 'Sample Country', 'Sample City', '7800000000', 'Sample Address', 'user-icn-min.png', '::1', '174829126', 'opening'),
(8, 'Phuoc', 'phuoc@gmail.com', '202cb962ac59075b964b07152d234b70', 'VietNam', 'HCM', '0778862312', '77 Tan Phu Q.Binh Chanh', 'alex-spline-.jpg', '::1', '19070426', 'opening');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `delivery_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `qty`, `size`, `order_date`, `delivery_date`, `order_status`) VALUES
(17, 2, 100, 1715523401, 2, 'Large', '2022-05-22 06:58:34', '2017-02-26 17:00:00', 'canceled'),
(23, 3, 20, 1762810884, 1, 'Medium', '2021-09-14 01:35:57', '2021-09-20 17:00:00', 'Complete'),
(24, 4, 100, 1972602052, 1, 'Large', '2021-09-14 09:37:52', '2021-09-20 17:00:00', 'Complete'),
(25, 4, 90, 2008540778, 1, 'Medium', '2021-09-14 09:43:15', '2021-09-20 17:00:00', 'pending'),
(27, 5, 120, 2138906686, 1, 'Small', '2021-09-14 20:18:41', '2021-09-21 17:00:00', 'Complete'),
(28, 5, 180, 361540113, 2, 'Medium', '2021-09-14 20:25:42', '2021-09-21 17:00:00', 'Complete'),
(29, 3, 100, 858195683, 1, 'Large', '2021-09-14 20:14:01', '2021-09-21 17:00:00', 'Complete'),
(31, 6, 245, 901707655, 1, 'Medium', '2021-09-14 20:52:18', '2021-09-21 17:00:00', 'Complete'),
(32, 6, 75, 2125554712, 1, 'Large', '2021-09-14 20:52:58', '2021-09-21 17:00:00', 'pending'),
(0, 2, 0, 1343363289, 0, 'Select a Size', '2022-05-22 08:22:26', '0000-00-00 00:00:00', 'processing'),
(0, 2, 0, 1343363289, 0, 'Select a Size', '2022-05-22 08:22:26', '0000-00-00 00:00:00', 'processing'),
(0, 2, 0, 1343363289, 0, 'Select a Size', '2022-05-22 08:22:26', '0000-00-00 00:00:00', 'processing'),
(0, 2, 0, 601098954, 0, 'Select a Size', '2022-05-22 08:22:26', '0000-00-00 00:00:00', 'processing'),
(0, 8, 282, 504280658, 2, 'Medium', '2022-05-26 00:52:42', '0000-00-00 00:00:00', 'pending'),
(0, 8, 282, 2053831682, 2, 'Medium', '2022-05-26 00:54:32', '0000-00-00 00:00:00', 'pending'),
(0, 8, 282, 240311931, 2, 'Medium', '2022-05-26 00:58:48', '0000-00-00 00:00:00', 'pending'),
(0, 8, 282, 1989196720, 2, 'Medium', '2022-05-26 00:58:49', '0000-00-00 00:00:00', 'pending'),
(0, 8, 282, 638988607, 2, 'Medium', '2022-05-26 00:58:49', '0000-00-00 00:00:00', 'pending'),
(0, 8, 282, 953995077, 2, 'Medium', '2022-05-26 00:58:49', '0000-00-00 00:00:00', 'pending'),
(0, 8, 282, 1444306448, 2, 'Medium', '2022-05-26 00:58:49', '0000-00-00 00:00:00', 'pending'),
(0, 8, 282, 1971810279, 2, 'Medium', '2022-05-26 00:58:50', '0000-00-00 00:00:00', 'pending'),
(0, 8, 282, 1359535097, 2, 'Medium', '2022-05-26 00:58:50', '0000-00-00 00:00:00', 'pending'),
(0, 8, 282, 1812057431, 2, 'Medium', '2022-05-26 00:58:50', '0000-00-00 00:00:00', 'pending'),
(0, 8, 282, 1107194564, 2, 'Medium', '2022-05-26 00:58:57', '0000-00-00 00:00:00', 'pending'),
(0, 8, 282, 1998699589, 2, 'Medium', '2022-05-26 00:59:00', '0000-00-00 00:00:00', 'pending'),
(0, 8, 282, 483825374, 2, 'Medium', '2022-05-26 01:00:29', '0000-00-00 00:00:00', 'pending'),
(0, 8, 282, 1727355468, 2, 'Medium', '2022-05-26 01:08:43', '0000-00-00 00:00:00', 'pending'),
(0, 8, 282, 1431272996, 2, 'Medium', '2022-05-26 01:12:20', '0000-00-00 00:00:00', 'pending'),
(0, 8, 282, 1464926150, 2, 'Medium', '2022-05-26 01:12:23', '0000-00-00 00:00:00', 'pending'),
(0, 8, 282, 1513275513, 2, 'Medium', '2022-05-26 01:13:16', '0000-00-00 00:00:00', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_types`
--

CREATE TABLE `enquiry_types` (
  `enquiry_id` int(10) NOT NULL,
  `enquiry_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry_types`
--

INSERT INTO `enquiry_types` (`enquiry_id`, `enquiry_title`) VALUES
(1, 'Order and Delivery Support'),
(2, 'Technical Support'),
(3, 'Price Concern');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `manufacturer_id` int(10) NOT NULL,
  `manufacturer_title` text NOT NULL,
  `manufacturer_top` text NOT NULL,
  `manufacturer_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`manufacturer_id`, `manufacturer_title`, `manufacturer_top`, `manufacturer_image`) VALUES
(2, 'Adidas', 'yes', 'adilg.png'),
(3, 'Nike', 'yes', 'niketransl.png'),
(4, 'Philip Plein', 'yes', 'pplg.png'),
(5, 'Lacoste', 'yes', 'lacostelg.png'),
(7, 'Polo', 'yes', 'polobn.jpg'),
(8, 'Gildan 1800', 'yes', 'sample_img360.png');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(10) NOT NULL,
  `code` int(10) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_no`, `amount`, `payment_mode`, `ref_no`, `code`, `payment_date`) VALUES
(2, 1607603019, 447, 'UBL/Omni', 5678, 33, '11/1/2016'),
(3, 314788500, 345, 'UBL/Omni', 443, 865, '11/1/2016'),
(4, 6906, 400, 'Western Union', 101025780, 696950, 'January 1'),
(5, 10023, 20, 'Bank Code', 1000010101, 6969, '09/14/2021'),
(6, 69088, 100, 'Bank Code', 1010101022, 88669, '09/14/2021'),
(7, 1835758347, 480, 'Western Union', 1785002101, 66990, '09-04-2021'),
(8, 1835758347, 480, 'Bank Code', 1012125550, 66500, '09-14-2021'),
(9, 1144520, 480, 'Bank Code', 1025000020, 66990, '09-14-2021'),
(10, 2145000000, 480, 'Bank Code', 2147483647, 66580, '09-14-2021'),
(20, 858195683, 100, 'Bank Code', 1400256000, 47850, '09-13-2021'),
(21, 2138906686, 120, 'Bank Code', 1455000020, 202020, '09-13-2021'),
(22, 2138906686, 120, 'Bank Code', 1450000020, 202020, '09-15-2021'),
(23, 361540113, 180, 'Western Union', 1470000020, 12001, '09-15-2021'),
(24, 361540113, 180, 'UBL/Omni', 1258886650, 200, '09-15-2021'),
(25, 901707655, 245, 'Western Union', 1200002588, 88850, '09-15-2021');

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `customer_address` text NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `delivery_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `size`, `customer_address`, `order_date`, `delivery_date`, `order_status`) VALUES
(17, 2, 1715523401, '9', 2, 'Large', 'new york', '2022-05-21 23:58:34', '2017-02-26 10:00:00', 'canceled'),
(23, 3, 1762810884, '12', 1, 'Medium', 'DemoAddress', '2021-09-13 18:35:57', '2021-09-20 10:00:00', 'Complete'),
(24, 4, 1972602052, '5', 1, 'Large', '23 Nguyen Trai, Ward 5, District 4', '2021-09-14 02:37:52', '2021-09-20 10:00:00', 'Complete'),
(25, 4, 2008540778, '13', 1, 'Medium', '23 Nguyen Trai, Ward 5, District 4', '2021-09-14 02:43:15', '2021-09-20 10:00:00', 'pending'),
(27, 5, 2138906686, '14', 1, 'Small', '112 Bleck Street', '2021-09-14 13:18:41', '2021-09-21 10:00:00', 'Complete'),
(28, 5, 361540113, '13', 2, 'Medium', '112 Bleck Street', '2021-09-14 13:25:42', '2021-09-21 10:00:00', 'Complete'),
(29, 3, 858195683, '5', 1, 'Large', 'DemoAddress', '2021-09-14 13:14:01', '2021-09-21 10:00:00', 'Complete'),
(31, 6, 901707655, '8', 1, 'Medium', 'Sample Address', '2021-09-14 13:52:18', '2021-09-21 10:00:00', 'Complete'),
(32, 6, 2125554712, '15', 1, 'Large', 'Sample Address', '2021-09-14 13:52:58', '2021-09-21 10:00:00', 'pending'),
(0, 2, 1343363289, '8', 0, 'Select a Size', 'new york', '2022-05-22 01:22:26', '2022-05-21 23:45:43', 'processing'),
(0, 2, 1343363289, '9', 0, 'Select a Size', 'new york', '2022-05-22 01:22:26', '2022-05-21 23:45:43', 'processing'),
(0, 2, 1343363289, '15', 0, 'Select a Size', 'new york', '2022-05-22 01:22:26', '2022-05-21 23:45:43', 'processing'),
(0, 2, 601098954, '9', 0, 'Select a Size', 'new york', '2022-05-22 01:22:26', '2022-05-22 01:22:16', 'processing'),
(0, 8, 1513275513, '5', 2, 'Medium', '77 Tan Phu Q.Binh Chanh', '0000-00-00 00:00:00', '2022-06-01 17:00:00', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `manufacturer_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_url` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_psp_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_features` text NOT NULL,
  `product_video` text NOT NULL,
  `product_keywords` text NOT NULL,
  `product_label` text NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `manufacturer_id`, `date`, `product_title`, `product_url`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_psp_price`, `product_desc`, `product_features`, `product_video`, `product_keywords`, `product_label`, `status`) VALUES
(5, 5, 5, 3, '2022-05-25 09:19:46', 'Liverpool F.C. Strike', 'product-url-15', 'pd1.jpg', 'pr2.jpg', 'pr3.jpg', 259, 141, '\r\n\r\n\r\n\r\n\r\n<p> This product is made from 100% recycled polyester fibres.</p>\r\n\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,\r\n\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n<iframe width=\"854\" height=\"480\" src=\"https://www.youtube.com/embed/qRswlmADRa8\" frameborder=\"0\" allowfullscreen></iframe>\r\n\r\n\r\n\r\n\r\n', 'Football', 'Sale', 'product'),
(8, 4, 2, 4, '2022-05-21 02:30:05', 'Florence', 'product-url-8', 'Black Blouse Versace Coat1.jpg', 'Black Blouse Versace Coat2.jpg', 'Black Blouse Versace Coat3.jpg', 245, 100, '\r\n\r\n\r\n<p>  The Nike Sportswear Tracksuit Jacket is a go-to layer for sunny days that call for an extra layer. The jacket serves up a unique, asymmetrical design that tells the story of how it was made: the fabric panels were cut to reduce material waste during production. This product is made from 100% sustainable materials, using a blend of both recycled nylon and organic cotton fibres. The blend is at least 10% recycled fibres or at least 10% organic cotton fibres. </p>\r\n\r\n\r\n', '\r\n\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,\r\n\r\n\r\n', '\r\n\r\n\r\n<iframe width=\"854\" height=\"480\" src=\"https://www.youtube.com/embed/qRswlmADRa8\" frameborder=\"0\" allowfullscreen></iframe>\r\n\r\n\r\n', 'Coats', 'New', 'hide'),
(9, 6, 4, 7, '2022-05-21 02:29:12', 'Harrieta', 'product-url-9', 'product-1.jpg', 'product-2.jpg', 'product-3.jpg', 50, 35, '\r\n\r\n\r\n\r\n\r\n<p> Buttoned up and ready for your cleanest lines, the Nike SB Top pairs super-soft flannel fabric with stripes beneath the placket for a hint of contrast you can see when the buttons are closed.  </p>\r\n\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,\r\n\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n<iframe width=\"854\" height=\"480\" src=\"https://www.youtube.com/embed/qRswlmADRa8\" frameborder=\"0\" allowfullscreen></iframe>\r\n\r\n\r\n\r\n\r\n', 'T-Shirt', 'Sale', 'product'),
(12, 8, 5, 2, '2022-05-20 21:08:46', 'Bigknives', 'ultraboost-21-adidas', 'pr38.jpg', 'pr39.jpg', 'pr40.jpg', 150, 180, '\r\n\r\nThis product is made with Primeblue, a high-performance recycled material made in part with Parley Ocean Plastic. 50% of the upper is textile, 92% of the textile is Primeblue yarn. No virgin polyester.', '\r\n\r\nComfortable and responsive, Ultraboost became our first shoe to be as popular in streetwear style as it is in performance running.', '\r\nhttps://assets.adidas.com/videos/q_auto,f_auto,g_auto/599fff35a3cf432aa9bbac7c0091316f_d98...mp4\r\n', 'sneakers adidas ultraboost shoes', 'New', 'hide'),
(13, 9, 2, 3, '2022-05-20 18:55:53', 'Georgina', 'nike-sportswear-essen-col', 'nike-s.jpg', 'nike-s2.jpg', 'nike-s02.jpg', 90, 85, '\r\n\r\nThe iconic WW2 deck jacket serves as inspiration for this lightweight and comfortable layering staple. Its waist-length design features a covered button placket, darted patterning for shape and a convertible collar for easy wear. An internal carrying strap lets you sling it over your shoulder when you\'re not wearing it for hands-free convenience.\r\n\r\n\r\n', '\r\n\r\n\r\nThis is a sample text. This is a sample text. This is a sample text.This is a sample text. This is a sample text. This is a sample text.This is a sample text. This is a sample text. This is a sample text.This is a sample text. This is a sample text. This is a sample text.\r\n\r\n', '\r\n\r\n\r\nThis is a sample text. This is a sample text. This is a sample text.\r\n\r\n\r\n', 'nike sportswear', 'Featured', 'product'),
(14, 5, 5, 7, '2022-05-25 02:57:55', 'Primsose ', 'demo-product-showcase', 'pr34.jpg', 'pr35.jpg', 'pr36.jpg', 120, 111, '\r\n\r\n\r\nTake on your daily route with the Nike Dri-FIT Miler Top.It offers lightweight performance and mobility for the entry-level runner.This product is made from at least 50% recycled polyester fibres.\r\n', '\r\n\r\n\r\nThis is a demo.\r\n', '\r\n\r\n\r\nThis is a demo.\r\n', 'demo test product', 'Sale', 'product'),
(15, 5, 5, 8, '2022-05-25 09:15:08', 'Estella', 'product-url-5', '9.jpg', '17.jpg', '25.jpg', 259, 100, '\r\n\r\n\r\n<p> This 100% cotton tee is cool and comfy, on and off the court. An easy fit and Jordan graphics on both sides will have you reaching for it daily. </p>\r\n\r\n\r\n', '\r\n\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,\r\n\r\n\r\n', '\r\n\r\n\r\n<iframe width=\"854\" height=\"480\" src=\"https://www.youtube.com/embed/qRswlmADRa8\" frameborder=\"0\" allowfullscreen></iframe>\r\n\r\n\r\n', 'Jackets', 'Gift', 'product'),
(16, 7, 5, 4, '2022-05-20 18:07:21', 'Bomlim Leo', 'product-url-6', 'pr30.jpg', 'pr31.jpg', 'pr32.jpg', 259, 100, '\r\n\r\n<p>  A great option for sunny days that call for an extra layer, the Nike Sportswear Jersey Crew is a warm-weather alternative to your favourite fleece sweatshirt. Made from a wonderfully soft cotton jersey fabric, this crew has an asymmetrical design that tells the story of how it was made: fabric panels were cut to reduce fabric scraps created during production. This product is made from at least 75% organic cotton fibres.</p>\r\n\r\n', '\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,\r\n\r\n', '\r\n\r\n<iframe width=\"854\" height=\"480\" src=\"https://www.youtube.com/embed/qRswlmADRa8\" frameborder=\"0\" allowfullscreen></iframe>\r\n\r\n', 'Jackets', 'Gift', 'product'),
(18, 7, 2, 7, '2022-05-20 18:04:01', 'Naib Violet', 'product-url-10', 'pr22.jpg', 'pr23.jpg', 'pr24.jpg', 259, 100, '\r\n\r\n<p> Premium fleece fabric and a laid-back design highlight the Solo Swoosh Hoodie.Part of the Essentials collection, this piece uses a soft feel with a loose fit for all-day wear. </p>\r\n\r\n', '\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,\r\n\r\n', '\r\n\r\n<iframe width=\"854\" height=\"480\" src=\"https://www.youtube.com/embed/qRswlmADRa8\" frameborder=\"0\" allowfullscreen></iframe>\r\n\r\n', 'Jackets', 'Gift', 'product'),
(19, 7, 5, 5, '2022-05-20 18:51:06', 'Axe Girl', 'product-url-11', 'pr14.jpg', 'pr15.jpg', 'pr16.jpg', 259, 100, '\r\n<p>  This sweat-wicking tee flexes from the court to the street. It\'s made with a relaxed fit that you can move in plus Dri-FIT Technology to keep you fresh.</p>\r\n', '\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,\r\n', '\r\n<iframe width=\"854\" height=\"480\" src=\"https://www.youtube.com/embed/qRswlmADRa8\" frameborder=\"0\" allowfullscreen></iframe>\r\n', 'Jackets', 'Gift', 'product'),
(20, 7, 5, 5, '2022-05-20 01:57:55', 'Carmin Short', 'product-url-12', 'pr18.jpg', 'pr19.jpg', 'pr21.jpg', 259, 100, '\r\n<p> Get your heritage on with the Jordan Flight Essentials T-Shirt. It\'s made from soft, comfortable cotton with printed graphics. </p>\r\n', '\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,\r\n', '\r\n<iframe width=\"854\" height=\"480\" src=\"https://www.youtube.com/embed/qRswlmADRa8\" frameborder=\"0\" allowfullscreen></iframe>\r\n', 'Jackets', 'Gift', 'product'),
(21, 7, 5, 5, '2022-05-25 02:48:39', 'Sportswear Tech Fleece', 'product-url-13', 'pr10.jpg', 'pr11.jpg', 'pr12.jpg', 259, 100, '\r\n<p>This full-zip is all about our innovative premium fleece that\'s soft, lightweight and warm. Added bonus: There\'s a zipped pocket on your left sleeve.</p>\r\n', '\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,\r\n', '\r\n<iframe width=\"854\" height=\"480\" src=\"https://www.youtube.com/embed/qRswlmADRa8\" frameborder=\"0\" allowfullscreen></iframe>\r\n', 'Jackets', 'Sale', 'product'),
(22, 7, 5, 3, '2022-05-21 21:28:00', 'Nike Pro', 'product-url-14', 'pr5.jpg', 'pr6.jpg', 'pr7.jpg', 78, 28, '\r\n\r\n\r\n\r\n<p> The Nike Pro Top is made from stretchy, sweat-wicking fabric to help keep you dry, cool and comfortable.  </p>\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n<iframe width=\"854\" height=\"480\" src=\"https://www.youtube.com/embed/qRswlmADRa8\" frameborder=\"0\" allowfullscreen></iframe>\r\n\r\n\r\n\r\n', 'Short-Sleeve Training Top', 'Gift', 'product');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_top` text NOT NULL,
  `p_cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_top`, `p_cat_image`) VALUES
(4, 'Coats', 'yes', 'coaticn.png'),
(5, 'T-Shirts', 'yes', 'tshirticn.png'),
(6, 'Sweater', 'yes', 'sweatericn.png'),
(7, 'jackets', 'yes', 'jacketicn.png'),
(8, 'Sneakers', 'yes', 'sneakericn.png'),
(9, 'Trousers', 'yes', 'trousericn.png');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `store_id` int(10) NOT NULL,
  `store_title` varchar(255) NOT NULL,
  `store_image` varchar(255) NOT NULL,
  `store_desc` text NOT NULL,
  `store_button` varchar(255) NOT NULL,
  `store_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`store_id`, `store_title`, `store_image`, `store_desc`, `store_button`, `store_url`) VALUES
(4, 'London Store', 'store (3).jpg', '<p style=\"text-align: center;\"><strong>180-182 RECENTS STREET, LONDON, W1B 5BT</strong></p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut libero erat, aliquet eget mauris ut, dictum sagittis libero. Nam at dui dapibus, semper dolor ac, malesuada mi. Duis quis lobortis arcu. Vivamus sed sodales orci, non varius dolor.</p>', 'View Map', 'http://www.thedailylux.com/ecommerce'),
(5, 'New York Store', 'store (1).png', '<p style=\"text-align: center;\"><strong>109 COLUMBUS CIRCLE, NEW YORK, NY10023</strong></p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut libero erat, aliquet eget mauris ut, dictum sagittis libero. Nam at dui dapibus, semper dolor ac, malesuada mi. Duis quis lobortis arcu. Vivamus sed sodales orci, non varius dolor.</p>', 'View Map', 'http://www.thedailylux.com/ecommerce'),
(6, 'Paris Store', 'store (2).jpg', '<p style=\"text-align: center;\"><strong>2133 RUE SAINT-HONORE, 75001 PARIS&nbsp;</strong></p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut libero erat, aliquet eget mauris ut, dictum sagittis libero. Nam at dui dapibus, semper dolor ac, malesuada mi. Duis quis lobortis arcu. Vivamus sed sodales orci, non varius dolor.</p>', 'View Map', 'http://www.thedailylux.com/ecommerce');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `term_id` int(10) NOT NULL,
  `term_title` varchar(100) NOT NULL,
  `term_link` varchar(100) NOT NULL,
  `term_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`term_id`, `term_title`, `term_link`, `term_desc`) VALUES
(1, 'Rules And Regulations', 'rules', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.&nbsp;</p>'),
(2, 'Refund Policy', 'link2', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Why do we use it?It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on'),
(3, 'Pricing and Promotions Policy', 'link3', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Why do we use it?It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlist_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wishlist_id`, `customer_id`, `product_id`) VALUES
(2, 2, 8),
(3, 5, 13),
(4, 3, 13),
(5, 6, 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `enquiry_types`
--
ALTER TABLE `enquiry_types`
  ADD PRIMARY KEY (`enquiry_id`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`store_id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`term_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `coupon_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `enquiry_types`
--
ALTER TABLE `enquiry_types`
  MODIFY `enquiry_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `manufacturer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `store_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `term_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlist_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
