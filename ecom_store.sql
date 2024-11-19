-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2024 at 03:13 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `about_id` int(10) NOT NULL,
  `about_heading` text NOT NULL,
  `about_short_desc` text NOT NULL,
  `about_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`about_id`, `about_heading`, `about_short_desc`, `about_desc`) VALUES
(1, 'About Us', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. </p><p>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\n\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_contact`, `admin_country`, `admin_job`, `admin_about`) VALUES
(1, 'Abdo', 'A@gamil.com', '123456', '', '', '', '', ''),
(11, 'fares', 'fares@gmail.com', 'fares', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `boxes_section`
--

CREATE TABLE `boxes_section` (
  `box_id` int(10) NOT NULL,
  `box_title` varchar(100) NOT NULL,
  `box_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `boxes_section`
--

INSERT INTO `boxes_section` (`box_id`, `box_title`, `box_desc`) VALUES
(4, 'WE LOVE OUR CUSTOMERS', 'Some quick example text to build on the card title and make up the bulk of the card&#039;s content.'),
(5, 'BEST PRICES', 'Some quick example text to build on the card title and make up the bulk of the card&#039;s content.'),
(6, '100% SATISFICTION &amp; GUARENTED', 'Some quick example text to build on the card title and make up the bulk of the card&#039;s content.');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `product_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` varchar(100) NOT NULL,
  `cat_top` varchar(100) NOT NULL,
  `cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_top`, `cat_image`) VALUES
(12, 'Paintings', 'Yes', 'hp-toptile3-11042024-large.jpg'),
(13, 'Drawings', 'Yes', '62pk88kq0jggh9v134cj.jpg'),
(15, 'Sculptures', 'Yes', 'Avery+Babon_ABa+002+2016_thumb.jpg'),
(16, 'Applied Arts', 'Yes', 'istockphoto-1892764479-612x612.webp');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_id` int(10) NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  `contact_heading` text NOT NULL,
  `contact_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_id`, `contact_email`, `contact_heading`, `contact_desc`) VALUES
(1, 'devzani.roy11@gmail.com', 'Contact Us ', 'If you have any questions, please feel free to <a href=\"http://localhost/ecommerce/contact.php\" target=\"_blank\">contact us</a>. Our customer service is working for you 24/7');

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
  `coupon_limit` int(10) NOT NULL,
  `coupon_used` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`coupon_id`, `product_id`, `coupon_title`, `coupon_price`, `coupon_code`, `coupon_limit`, `coupon_used`) VALUES
(1, 60, 'New T-Shirt Coupon Code', '20', 'NEWCOUPON1', 5, 0),
(2, 61, 'Test Coupon', '55', 'NEW55', 6, 2),
(3, 62, 'Dynamic Test Coupon', '70', 'LARAVEL70', 10, 2),
(4, 63, 'Test 1', '65', 'NEW65', 20, 2);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` varchar(100) NOT NULL,
  `customer_city` varchar(100) NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(255) NOT NULL,
  `customer_confirm_code` text NOT NULL,
  `manufacturer_top` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`, `customer_confirm_code`, `manufacturer_top`) VALUES
(16, 'Raneem', 'Raneem@gamil.com', '123', 'Saudi Arabia', 'Riyadh', '+96655555555', '000000', '7M.jpg', '::1', '977968538', 'Yes');

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
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `qty`, `order_date`, `order_status`) VALUES
(1, 5, 68, 679423457, 2, '2018-10-07 18:25:38', 'Complete'),
(2, 5, 12, 679423457, 1, '2018-10-07 14:24:28', 'pending'),
(3, 4, 24, 72826274, 2, '2018-10-23 07:00:46', 'pending'),
(4, 4, 240, 72826274, 2, '2018-10-23 07:00:47', 'pending'),
(5, 4, 100, 72826274, 1, '2018-10-23 07:00:47', 'pending'),
(6, 4, 50, 72826274, 1, '2018-10-23 07:00:47', 'pending'),
(7, 4, 75, 72826274, 1, '2018-10-23 07:00:48', 'pending'),
(8, 4, 70, 1039424096, 1, '2018-10-23 14:23:36', 'pending'),
(9, 4, 90, 1178884563, 1, '2018-10-25 17:09:31', 'Complete'),
(10, 4, 10, 795767235, 1, '2018-10-25 17:16:08', 'Complete'),
(11, 4, 34, 795767235, 1, '2018-10-25 17:16:08', 'Complete'),
(12, 14, 100, 1489672072, 1, '2024-11-12 03:44:25', 'pending'),
(13, 14, 1221, 1489672072, 1, '2024-11-12 03:44:25', 'pending'),
(14, 14, 123, 1489672072, 1, '2024-11-12 03:44:25', 'pending'),
(15, 14, 18, 1489672072, 1, '2024-11-12 03:44:25', 'pending'),
(16, 14, 1221, 1489672072, 1, '2024-11-12 03:44:25', 'pending'),
(17, 10001, 70, 808015024, 1, '2024-11-13 11:55:48', 'pending'),
(18, 10001, 70, 1240425279, 1, '2024-11-13 11:56:34', 'pending'),
(19, 10001, 40, 1240425279, 1, '2024-11-13 11:56:34', 'pending'),
(20, 10001, 100, 1418286014, 1, '2024-11-13 11:59:22', 'pending'),
(21, 10001, 199, 1418286014, 1, '2024-11-13 11:59:22', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_type`
--

CREATE TABLE `enquiry_type` (
  `enquiry_id` int(10) NOT NULL,
  `enquiry_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `enquiry_type`
--

INSERT INTO `enquiry_type` (`enquiry_id`, `enquiry_title`) VALUES
(1, 'Order Support'),
(2, 'Technical Supports'),
(3, 'Price Concern'),
(4, 'Delivery Problems');

-- --------------------------------------------------------

--
-- Table structure for table `icons`
--

CREATE TABLE `icons` (
  `icon_id` int(10) NOT NULL,
  `icon_product` int(10) NOT NULL,
  `icon_title` varchar(255) NOT NULL,
  `icon_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `manufacturer_id` int(10) NOT NULL,
  `manufacturer_title` varchar(100) NOT NULL,
  `manufacturer_top` varchar(100) NOT NULL,
  `manufacturer_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `payment_mode` varchar(100) NOT NULL,
  `ref_no` int(10) NOT NULL,
  `code` int(10) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `product_id` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` varchar(100) NOT NULL,
  `order_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `size`, `order_status`) VALUES
(17, 10001, 1240425279, 62, 1, '', 'pending'),
(18, 10001, 1240425279, 65, 1, '', 'pending'),
(19, 10001, 1418286014, 64, 1, '', 'pending'),
(20, 10001, 1418286014, 61, 1, '', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` varchar(255) NOT NULL,
  `product_img1` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_psp_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_keywords` varchar(100) NOT NULL,
  `product_label` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `customer_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `cat_id`, `add_date`, `product_title`, `product_img1`, `product_price`, `product_psp_price`, `product_desc`, `product_keywords`, `product_label`, `status`, `customer_id`) VALUES
(59, 12, '2024-11-13 07:03:39', 'Wings of Resilience', 'Painting-9-1024x739-1.jpg', 150, 12, '<p>This surreal artwork combines elements of nature, disability, and sensory perception to evoke a powerful message of empowerment and freedom. At the center, a large sunflower with a face emerges from a wheelchair, symbolizing life, growth, and resilience. The flower is adorned with a brain at its core, representing consciousness and inner strength. Wings extend from the wheelchair, suggesting liberation from physical limitations and the pursuit of personal freedom.</p><p>Surrounding the central figure are symbolic elements: large ears equipped with hearing aids, keys, and neural patterns. The keys might represent solutions, insights, or paths to unlocking potential. The background is filled with a calm, purple hue that enhances the ethereal quality of the composition. The scattered doves above convey peace and hope, while the intricate and layered visuals encourage contemplation on the themes of adaptability, inclusion, and the power of perception.</p>', 'Empowerment through Perception', 'New', '1', 16),
(60, 13, '2024-11-13 07:03:39', 'Whispers in the Mist', 'fia-yang-emD-tLuy_Rs-unsplash.jpg', 154, 2, '<p>This image features an abstract composition created with washes of black and gray ink, forming soft, organic shapes that blend and bleed into one another on a textured surface. The effect resembles shadows, mist, or even figures emerging from a hazy background, inviting viewers to interpret forms and shapes as they wish. The fluidity and varying opacity of the ink create a sense of depth and movement, as if capturing a fleeting, almost ghostly moment.</p>', 'Ethereal Abstraction', 'New', '1', 16),
(61, 12, '2024-11-13 07:03:39', 'Beyond Limits', 'NB_41_rajpujar06@gmail.com_-1024x683-1.jpg', 199, 12, '<p>This artwork features a split scene with two figures, both with blue hair, possibly representing the same person at different points in time. On the left, the figure sits introspectively with a sheet of paper labeled \"THEME: Disability,\" using their foot to hold a pencil, symbolizing adaptability and resilience. This figure wears a school uniform with a green skirt, white top, and a yellow hair accessory.</p><p>On the right, an older version of the character stands confidently in dark, stylish clothing and uses a brush and palette to paint a colorful canvas labeled \"2030,\" suggesting a vision of hope and creativity for the future. The contrasting styles and tones in each half of the image highlight themes of growth, self-acceptance, and transformation</p>', 'Self-Transformation', 'New', '1', 16);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(10) NOT NULL,
  `service_title` varchar(255) NOT NULL,
  `service_image` varchar(255) NOT NULL,
  `service_desc` text NOT NULL,
  `service_button` varchar(255) NOT NULL,
  `service_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(10) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL,
  `slide_title` varchar(255) NOT NULL,
  `slide_text` varchar(255) NOT NULL,
  `slide_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slide_image`, `slide_title`, `slide_text`, `slide_url`) VALUES
(18, '1', 'Painting-9-1024x739-1.jpg', 'drawings', '     there\'s a person wearing a dark gray sweatshirt with a vibrant illustration on the front. The illustration depicts a figure with a green top and a red bottom against a blue background. On the right, the same person is holding a beige tote bag with an', ''),
(19, '2', 'fia-yang-emD-tLuy_Rs-unsplash.jpg', 'sculptures', ' The sculpture above them could symbolize the potential for growth, change, or overcoming adversity. It may reflect the power of art to elevate individuals, giving them a voice even when they are constrained by physical circumstances. Alternatively, the f', ''),
(20, '1', 'hp-toptile1-09242024-large.jpg', 'Paintings', '.', '');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `term_id` int(10) NOT NULL,
  `term_title` varchar(150) NOT NULL,
  `term_link` varchar(255) NOT NULL,
  `term_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`term_id`, `term_title`, `term_link`, `term_desc`) VALUES
(1, 'Terms & Conditions', 'Link1', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro qui ad veniam, commodi. Numquam, id inventore odio ipsum, dolore natus. Voluptatem, explicabo architecto quis reiciendis libero! Error, hic excepturi, maiores voluptate quod officiis quam, asperiores earum ipsam ipsum totam modi deserunt incidunt aliquam eligendi quia harum recusandae illo rem.</p>\r\n<p>Velit, ratione nostrum consequuntur commodi maxime? Dolorem consequatur nihil eligendi culpa autem necessitatibus, provident quidem minima quod quibusdam maxime a molestiae fugit. Iure exercitationem facilis totam incidunt eveniet enim alias accusamus cum sapiente. Veritatis fuga non, porro aperiam neque. Nisi, ipsa dolore, necessitatibus sit atque deserunt culpa sapiente reiciendis voluptate nemo aliquid tenetur perferendis. Quibusdam, qui quisquam soluta eos quidem officia eligendi, aut quae voluptatibus laborum facilis ab necessitatibus. Deleniti quis ab repudiandae dolores qui reprehenderit odio sint neque rem sit, autem necessitatibus sequi possimus expedita praesentium tempora sed in. Pariatur a, voluptatem ratione magni possimus aliquam atque ab porro ipsum mollitia odio maxime, exercitationem, sed quasi eligendi laboriosam voluptatibus blanditiis unde nemo optio tempore.</p>\r\n<p>Eius exercitationem quos magnam quisquam harum possimus temporibus officia maiores, veniam voluptates eum, ex optio aspernatur sit necessitatibus omnis repellat doloremque aut unde, ab sunt architecto. Quod animi necessitatibus atque id nostrum quos, ipsam error repellendus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro qui ad veniam, commodi. Numquam, id inventore odio ipsum, dolore natus. Voluptatem, explicabo architecto quis reiciendis libero! Error, hic excepturi, maiores voluptate quod officiis quam, asperiores earum ipsam ipsum totam modi deserunt incidunt aliquam eligendi quia harum recusandae illo rem. Velit, ratione nostrum consequuntur commodi maxime? Dolorem consequatur nihil eligendi culpa autem necessitatibus, provident quidem minima quod quibusdam maxime a molestiae fugit. Iure exercitationem facilis totam incidunt eveniet enim alias accusamus cum sapiente. Veritatis fuga non, porro aperiam neque.</p>\r\n<p>Nisi, ipsa dolore, necessitatibus sit atque deserunt culpa sapiente reiciendis voluptate nemo aliquid tenetur perferendis. Quibusdam, qui quisquam soluta eos quidem officia eligendi, aut quae voluptatibus laborum facilis ab necessitatibus. Deleniti quis ab repudiandae dolores qui reprehenderit odio sint neque rem sit, autem necessitatibus sequi possimus expedita praesentium tempora sed in. Pariatur a, voluptatem ratione magni possimus aliquam atque ab porro ipsum mollitia odio maxime, exercitationem, sed quasi eligendi laboriosam voluptatibus blanditiis unde nemo optio tempore.</p>\r\n<p>Eius exercitationem quos magnam quisquam harum possimus temporibus officia maiores, veniam voluptates eum, ex optio aspernatur sit necessitatibus omnis repellat doloremque aut unde, ab sunt architecto. Quod animi necessitatibus atque id nostrum quos, ipsam error repellendus!</p>'),
(2, 'Refund Policy', 'Link2', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, corporis ad inventore ullam amet. Hic, nobis enim quaerat perspiciatis temporibus quia commodi, doloremque neque corrupti dolore facilis quo veritatis, laboriosam in voluptatibus illo! Sapiente, sit, minima? Debitis odio nisi at optio incidunt ex, esse nam, dignissimos non modi temporibus beatae, velit libero aliquam totam nemo est tempore quod. Ab saepe, molestiae mollitia non quisquam.</p>\r\n<p>Ut saepe facilis sunt tenetur rerum nihil exercitationem deleniti dignissimos est odit, neque iste unde aliquam minima minus maiores quam alias pariatur id mollitia quas quisquam. Laudantium animi praesentium repellendus officia a repudiandae et quaerat libero. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, corporis ad inventore ullam amet. Hic, nobis enim quaerat perspiciatis temporibus quia commodi, doloremque neque corrupti dolore facilis quo veritatis, laboriosam in voluptatibus illo! Sapiente, sit, minima? Debitis odio nisi at optio incidunt ex, esse nam, dignissimos non modi temporibus beatae, velit libero aliquam totam nemo est tempore quod.</p>\r\n<p>Ab saepe, molestiae mollitia non quisquam. Ut saepe facilis sunt tenetur rerum nihil exercitationem deleniti dignissimos est odit, neque iste unde aliquam minima minus maiores quam alias pariatur id mollitia quas quisquam. Laudantium animi praesentium repellendus officia a repudiandae et quaerat libero. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, corporis ad inventore ullam amet. Hic, nobis enim quaerat perspiciatis temporibus quia commodi, doloremque neque corrupti dolore facilis quo veritatis, laboriosam in voluptatibus illo! Sapiente, sit, minima?</p>\r\n<p>Debitis odio nisi at optio incidunt ex, esse nam, dignissimos non modi temporibus beatae, velit libero aliquam totam nemo est tempore quod. Ab saepe, molestiae mollitia non quisquam. Ut saepe facilis sunt tenetur rerum nihil exercitationem deleniti dignissimos est odit, neque iste unde aliquam minima minus maiores quam alias pariatur id mollitia quas quisquam. Laudantium animi praesentium repellendus officia a repudiandae et quaerat libero. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, corporis ad inventore ullam amet.</p>\r\n<p>Hic, nobis enim quaerat perspiciatis temporibus quia commodi, doloremque neque corrupti dolore facilis quo veritatis, laboriosam in voluptatibus illo! Sapiente, sit, minima? Debitis odio nisi at optio incidunt ex, esse nam, dignissimos non modi temporibus beatae, velit libero aliquam totam nemo est tempore quod. Ab saepe, molestiae mollitia non quisquam. Ut saepe facilis sunt tenetur rerum nihil exercitationem deleniti dignissimos est odit, neque iste unde aliquam minima minus maiores quam alias pariatur id mollitia quas quisquam. Laudantium animi praesentium repellendus officia a repudiandae et quaerat libero.</p>'),
(3, 'Pricing & Promotions Policy', 'Link3', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae nulla nostrum consequatur exercitationem eaque nam quibusdam laborum officiis quis laboriosam, hic libero dolor fugiat facere porro architecto impedit debitis possimus dicta aperiam obcaecati! Fuga odio vel quia molestias, officia? Iste explicabo adipisci maiores ex quae quidem ullam repellendus repellat quis. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n<p>Quae nulla nostrum consequatur exercitationem eaque nam quibusdam laborum officiis quis laboriosam, hic libero dolor fugiat facere porro architecto impedit debitis possimus dicta aperiam obcaecati! Fuga odio vel quia molestias, officia? Iste explicabo adipisci maiores ex quae quidem ullam repellendus repellat quis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae nulla nostrum consequatur exercitationem eaque nam quibusdam laborum officiis quis laboriosam, hic libero dolor fugiat facere porro architecto impedit debitis possimus dicta aperiam obcaecati!</p>\r\n<p>Fuga odio vel quia molestias, officia? Iste explicabo adipisci maiores ex quae quidem ullam repellendus repellat quis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae nulla nostrum consequatur exercitationem eaque nam quibusdam laborum officiis quis laboriosam, hic libero dolor fugiat facere porro architecto impedit debitis possimus dicta aperiam obcaecati!</p>\r\n<p>Fuga odio vel quia molestias, officia? Iste explicabo adipisci maiores ex quae quidem ullam repellendus repellat quis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae nulla nostrum consequatur exercitationem eaque nam quibusdam laborum officiis quis laboriosam, hic libero dolor fugiat facere porro architecto impedit debitis possimus dicta aperiam obcaecati! Fuga odio vel quia molestias, officia? Iste explicabo adipisci maiores ex quae quidem ullam repellendus repellat quis. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>\r\n<p>Quae nulla nostrum consequatur exercitationem eaque nam quibusdam laborum officiis quis laboriosam, hic libero dolor fugiat facere porro architecto impedit debitis possimus dicta aperiam obcaecati! Fuga odio vel quia molestias, officia? Iste explicabo adipisci maiores ex quae quidem ullam repellendus repellat quis.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlist_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wishlist_id`, `customer_id`, `product_id`) VALUES
(3, 4, 13),
(4, 10000, 68);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `boxes_section`
--
ALTER TABLE `boxes_section`
  ADD PRIMARY KEY (`box_id`);

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
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `enquiry_type`
--
ALTER TABLE `enquiry_type`
  ADD PRIMARY KEY (`enquiry_id`);

--
-- Indexes for table `icons`
--
ALTER TABLE `icons`
  ADD PRIMARY KEY (`icon_id`);

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
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

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
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `about_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `boxes_section`
--
ALTER TABLE `boxes_section`
  MODIFY `box_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `coupon_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10002;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `enquiry_type`
--
ALTER TABLE `enquiry_type`
  MODIFY `enquiry_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `icons`
--
ALTER TABLE `icons`
  MODIFY `icon_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `manufacturer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `term_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlist_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
