-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2018 at 07:21 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practice_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `name`, `option`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Color', NULL, 'enable', '2018-09-13 14:20:11', '2018-09-13 14:20:11'),
(2, 'Size', NULL, 'enable', '2018-09-13 14:20:17', '2018-09-13 14:20:17'),
(3, 'Length', NULL, 'enable', '2018-09-13 14:20:27', '2018-09-13 14:20:27');

-- --------------------------------------------------------

--
-- Table structure for table `attribute_products`
--

CREATE TABLE `attribute_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `attribute_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attribute_products`
--

INSERT INTO `attribute_products` (`id`, `attribute_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 4, NULL, NULL),
(3, 2, 4, NULL, NULL),
(4, 1, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `attribute_values`
--

CREATE TABLE `attribute_values` (
  `id` int(10) UNSIGNED NOT NULL,
  `attribute_id` int(10) UNSIGNED NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attribute_values`
--

INSERT INTO `attribute_values` (`id`, `attribute_id`, `value`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'White', 'enable', '2018-09-19 14:22:56', '2018-09-19 14:22:56'),
(2, 1, 'Green', 'enable', '2018-09-20 11:25:24', '2018-09-20 11:25:24'),
(4, 2, 'XL', 'enable', '2018-09-20 11:27:23', '2018-09-20 11:27:23'),
(5, 2, 'M', 'enable', '2018-09-20 11:27:29', '2018-09-20 11:27:29');

-- --------------------------------------------------------

--
-- Table structure for table `attribute_value_products`
--

CREATE TABLE `attribute_value_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `attribute_id` int(11) DEFAULT NULL,
  `attribute_value_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attribute_value_products`
--

INSERT INTO `attribute_value_products` (`id`, `attribute_id`, `attribute_value_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 5, NULL, NULL),
(2, NULL, 2, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Reebok', 'reebok', 'enable', '2018-09-13 12:57:18', '2018-09-13 12:57:18'),
(2, 'Puma', 'puma', 'enable', '2018-09-13 12:57:28', '2018-09-13 12:57:28'),
(3, 'Campus', 'campus', 'enable', '2018-09-13 12:57:35', '2018-09-13 12:57:35'),
(4, 'Woodland', 'woodland', 'enable', '2018-09-13 12:57:42', '2018-09-13 12:57:42'),
(5, 'Levi\'s', 'levis', 'enable', '2018-09-13 12:57:51', '2018-09-13 12:57:51');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `status` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `image`, `parent_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mobiles, Computers', 'mobiles-computers', NULL, NULL, 0, 'enable', '2018-09-13 13:31:40', '2018-09-13 13:31:40'),
(2, 'TV, Appliances, Electronics', 'tv-appliances-electronics', NULL, NULL, 0, 'enable', '2018-09-13 13:32:05', '2018-09-13 13:32:05'),
(3, 'Men\'s Fashion', 'mens-fashion', NULL, NULL, 0, 'enable', '2018-09-13 13:32:19', '2018-09-13 13:32:19'),
(4, 'Women\'s Fashion', 'womens-fashion', NULL, NULL, 0, 'enable', '2018-09-13 13:32:33', '2018-09-13 13:32:33'),
(5, 'Books', 'books', NULL, NULL, 0, 'enable', '2018-09-13 13:33:10', '2018-09-13 13:33:10'),
(6, 'Home, Kitchen, Pets', 'home-kitchen-pets', NULL, NULL, 0, 'enable', '2018-09-13 13:33:44', '2018-09-13 13:33:44'),
(7, 'Televisions', 'televisions', NULL, NULL, 1, 'enable', '2018-09-13 13:44:50', '2018-09-13 13:44:50'),
(8, 'Baby & Kids', 'baby-kids', NULL, NULL, 0, 'enable', '2018-09-13 13:47:20', '2018-09-13 13:47:20'),
(9, 'Boys\' Footwear', 'boys-footwear', NULL, NULL, 8, 'enable', '2018-09-13 13:48:05', '2018-09-13 13:48:05'),
(10, 'Shoes', 'shoes', 'Only for women', NULL, 4, 'enable', '2018-09-20 12:00:10', '2018-09-20 12:00:10'),
(11, 'Shirt', 'shirt', NULL, NULL, 4, 'enable', '2018-09-22 14:32:36', '2018-09-22 14:32:36');

-- --------------------------------------------------------

--
-- Table structure for table `category_products`
--

CREATE TABLE `category_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_09_07_174646_create_attributes_table', 1),
(4, '2018_09_07_174807_create_attribute_values_table', 1),
(5, '2018_09_07_174824_create_brands_table', 1),
(6, '2018_09_07_174845_create_categories_table', 1),
(7, '2018_09_07_180648_create_products_table', 1),
(8, '2018_09_07_182634_create_category_products_table', 1),
(9, '2018_09_07_182757_create_attribute_products_table', 1),
(10, '2018_09_23_183312_create_attribute_value_products_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `specification` text COLLATE utf8mb4_unicode_ci,
  `weight` int(11) NOT NULL DEFAULT '0' COMMENT 'in gram',
  `base_price` int(11) NOT NULL DEFAULT '0',
  `discount_type` enum('flat','percentage') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_value` int(11) NOT NULL DEFAULT '0',
  `discount_price` int(11) NOT NULL DEFAULT '0',
  `product_image` text COLLATE utf8mb4_unicode_ci,
  `views` int(11) NOT NULL DEFAULT '0' COMMENT 'How many times product viewed',
  `featured_product` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('enable','disable') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand_id`, `sku`, `model_no`, `name`, `slug`, `description`, `specification`, `weight`, `base_price`, `discount_type`, `discount_value`, `discount_price`, `product_image`, `views`, `featured_product`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '64534we', 'ghyrt53431', 'rtegrfwe', 'rtegrfwe', '<blockquote>\r\n<p><strong>yhnfg&nbsp; mthnfgb&nbsp; tnsrgbfv tyrtbeavc tngbfvs mtnhrgbfvs</strong></p>\r\n</blockquote>', '<h2 style=\"text-align:center\">tyhgbf hnfgbfvs</h2>\r\n\r\n<p><strong><u>kujtyhrtev tyrgbsfvs</u></strong></p>\r\n\r\n<p><em><strong>mthnsrgbhfg hsgrfasc jhngbfvsc nhbgfvf tnhbgfv</strong></em></p>\r\n\r\n<p>uhnfgb ybgfv hrtgfv yngbfv</p>', 0, 200, 'flat', 20, 0, NULL, 0, 'enable', 'enable', '2018-09-23 13:16:59', '2018-09-23 13:16:59'),
(2, 2, '654erfv', 'hy56434', 'hf gnb', 'hf-gnb', '<p><em>lykumjynhtbg</em></p>', '<p><strong>u6yh5tgwvcw</strong></p>', 0, 11, 'flat', 1, 0, NULL, 0, 'enable', 'enable', '2018-09-23 13:25:22', '2018-09-23 13:25:22'),
(3, 2, '654erfv', 'hy56434', 'hf gnb', 'hf-gnb', '<p><em>lykumjynhtbg</em></p>', '<p><strong>u6yh5tgwvcw</strong></p>', 0, 11, 'flat', 1, 0, NULL, 0, 'enable', 'enable', '2018-09-23 13:25:40', '2018-09-23 13:25:40'),
(4, 2, '654erfv', 'hy56434', 'hf gnb', 'hf-gnb', '<p><em>lykumjynhtbg</em></p>', '<p><strong>u6yh5tgwvcw</strong></p>', 0, 11, 'flat', 1, 0, NULL, 0, 'enable', 'enable', '2018-09-23 13:35:45', '2018-09-23 13:35:45'),
(5, 4, 'tt4wre', 'trtr6434', 'yurgtbgrsvf', 'yurgtbgrsvf', '<p>imyurtehgrbvf</p>', NULL, 0, 15, 'flat', 1, 0, NULL, 0, 'enable', 'enable', '2018-09-23 13:41:59', '2018-09-23 13:41:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` enum('admin','merchant','user') COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile_number`, `user_type`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jwala Singh', 'jwala@coineption.com', '9911955372', 'admin', '$2y$10$nWKBwpJfturAzlKrnXmQ4.IcnOeuLwXweh/pNtj4KL04tqn97W/iG', 'SSJmhJDbliblw6vogPuNwbJCuDQmcy2GmbI4LEbnwWsx7n10MeqfOjvoDexh', '2018-09-13 12:55:38', '2018-09-13 12:55:38'),
(2, 'Golu Singh', 'golu@gmail.com', '9911953571', 'user', '$2y$10$k5WsuHfGjTZAbkcx7u5PFuAvt.PpnnSL2ajYHQoIXTH86dq0inTKe', 'vxAaIM9V3on1R7L4pMSlLHaXsJjHOwITd6YfcR97L99H9TLVquX2DQrJCtPK', '2018-09-13 12:56:13', '2018-09-13 12:56:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attribute_products`
--
ALTER TABLE `attribute_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attribute_products_attribute_id_index` (`attribute_id`),
  ADD KEY `attribute_products_product_id_index` (`product_id`);

--
-- Indexes for table `attribute_values`
--
ALTER TABLE `attribute_values`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attribute_values_attribute_id_index` (`attribute_id`);

--
-- Indexes for table `attribute_value_products`
--
ALTER TABLE `attribute_value_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attribute_value_products_attribute_value_id_index` (`attribute_value_id`),
  ADD KEY `attribute_value_products_product_id_index` (`product_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_products`
--
ALTER TABLE `category_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_products_category_id_index` (`category_id`),
  ADD KEY `category_products_product_id_index` (`product_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_brand_id_index` (`brand_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `attribute_products`
--
ALTER TABLE `attribute_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `attribute_values`
--
ALTER TABLE `attribute_values`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `attribute_value_products`
--
ALTER TABLE `attribute_value_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category_products`
--
ALTER TABLE `category_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attribute_products`
--
ALTER TABLE `attribute_products`
  ADD CONSTRAINT `attribute_products_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `attribute_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `attribute_values`
--
ALTER TABLE `attribute_values`
  ADD CONSTRAINT `attribute_values_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `attribute_value_products`
--
ALTER TABLE `attribute_value_products`
  ADD CONSTRAINT `attribute_value_products_attribute_value_id_foreign` FOREIGN KEY (`attribute_value_id`) REFERENCES `attribute_values` (`id`),
  ADD CONSTRAINT `attribute_value_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `category_products`
--
ALTER TABLE `category_products`
  ADD CONSTRAINT `category_products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
