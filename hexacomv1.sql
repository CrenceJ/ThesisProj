-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 22, 2019 at 01:23 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hexacom`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

DROP TABLE IF EXISTS `announcement`;
CREATE TABLE IF NOT EXISTS `announcement` (
  `announce_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(20) NOT NULL,
  `content` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`announce_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`announce_id`, `subject`, `content`, `created_at`, `updated_at`) VALUES
(21, 'sddsfdsfs', 'dsfsdfsd', '2019-04-26', '2019-04-26 15:07:51');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `client_id` int(255) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `contact_no` bigint(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `landline_no` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

DROP TABLE IF EXISTS `inventory`;
CREATE TABLE IF NOT EXISTS `inventory` (
  `inventory_id` int(255) NOT NULL AUTO_INCREMENT,
  `inventory_owner_id` int(45) DEFAULT NULL,
  `inventory_item` varchar(255) NOT NULL,
  `inventory_brand` varchar(255) NOT NULL DEFAULT 'Generic',
  `inventory_model` varchar(255) NOT NULL DEFAULT 'not specified',
  `inventory_description` varchar(255) NOT NULL DEFAULT 'not specified',
  `inventory_serial_no` varchar(255) NOT NULL DEFAULT 'no entry',
  `cost` int(255) NOT NULL,
  `inventory_supplier` varchar(255) NOT NULL,
  `date_received` datetime NOT NULL,
  `inventory_status` varchar(255) DEFAULT 'Available' COMMENT 'Available and Sold lang pwede dito, you can change it to enum tho hehe',
  `inventory_type` varchar(255) DEFAULT NULL COMMENT 'CPU\nMotherboard\nRAM\nGpu\nHard Drive / SSD (same lang)\nOS\nMS OFFICE\nPower Supply\nProcessor Cooling\nExtra Case Fan\nMonitor\nMouse\nKeyboard\nHeadset',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`inventory_id`)
) ENGINE=InnoDB AUTO_INCREMENT=123 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `or_number` varchar(255) NOT NULL,
  `client_id` int(11) NOT NULL COMMENT 'may ari nang order',
  `order_type` varchar(50) NOT NULL COMMENT 'pc, service, individual_parts',
  `order_status` varchar(50) NOT NULL COMMENT 'Paid / Unpaid',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1 COMMENT='orders of service, build pc and choose parts';

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `order_details_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL COMMENT 'orders.order_id',
  `inventory_id` int(11) NOT NULL COMMENT 'inventory.inventory_id',
  `pending_item` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`order_details_id`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

DROP TABLE IF EXISTS `purchases`;
CREATE TABLE IF NOT EXISTS `purchases` (
  `purchase_id` int(255) NOT NULL AUTO_INCREMENT,
  `srf_no` int(255) NOT NULL,
  `invoice` double NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`purchase_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`purchase_id`, `srf_no`, `invoice`, `status`, `created_at`) VALUES
(1, 9234, 10000, 'Sold', '2019-04-22 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_details`
--

DROP TABLE IF EXISTS `purchase_details`;
CREATE TABLE IF NOT EXISTS `purchase_details` (
  `purdet_id` int(11) NOT NULL AUTO_INCREMENT,
  `purchase_id` int(11) NOT NULL,
  `inventory_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`purdet_id`),
  KEY `inventory_id` (`inventory_id`),
  KEY `purchase_id` (`purchase_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `replacement`
--

DROP TABLE IF EXISTS `replacement`;
CREATE TABLE IF NOT EXISTS `replacement` (
  `replace_id` int(255) NOT NULL AUTO_INCREMENT,
  `srf_no` int(255) NOT NULL,
  `credit_no` int(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `serial_no` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL DEFAULT 'Replacement',
  `price` double NOT NULL,
  `supplier` varchar(255) NOT NULL,
  `date_recieved` datetime NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`replace_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `sale_id` int(255) NOT NULL AUTO_INCREMENT,
  `order_id` int(255) DEFAULT NULL,
  `cost` int(255) NOT NULL DEFAULT '0',
  `user_id` int(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`sale_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `service_id` int(255) NOT NULL AUTO_INCREMENT,
  `srf_no` int(255) NOT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `warranty` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `date_finished` varchar(50) NOT NULL,
  `user_id` int(255) NOT NULL,
  `client_id` int(255) NOT NULL COMMENT 'items sa inventory',
  `order_id` int(255) DEFAULT NULL,
  `service_cost` int(255) NOT NULL,
  `serial` varchar(255) DEFAULT NULL,
  `accessories` varchar(255) DEFAULT NULL,
  `repair_model` varchar(255) DEFAULT NULL,
  `case_id` varchar(255) DEFAULT NULL,
  `unit_password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`service_id`),
  KEY `client_id` (`client_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(255) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` date NOT NULL,
  `type` enum('service engineer','Administrator') NOT NULL DEFAULT 'service engineer',
  `email` varchar(255) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `profile_pic` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `contact` varchar(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `username`, `password`, `last_login`, `type`, `email`, `birthdate`, `profile_pic`, `created_at`, `updated_at`, `contact`, `gender`) VALUES
(6, 'rico', 'editer', 'rico', '$2y$10$hb0m4v9MfMaXOQqmVFG45.EKE96lsfROkkZGOOgMZOtiTKTyBCCTC', '2019-04-28', 'service engineer', 'sample@email.com', '1996-03-22', '1556297842.jpg', '2019-03-03 16:00:00', '2019-04-28 17:37:28', '', ''),
(12, 'The', 'Admin', 'root', '$2y$10$MNpGs60ugLa.5ABZHJWDIOt78qjBjIjMzFaaKqlBJyb63VdV9ka.q', '2019-04-28', 'Administrator', 'mail@gmail.com', '1900-04-21', NULL, '2019-04-21 01:52:41', '2019-04-28 17:37:28', '09876543210', 'Male');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `purchase_details`
--
ALTER TABLE `purchase_details`
  ADD CONSTRAINT `purchase_details_ibfk_1` FOREIGN KEY (`inventory_id`) REFERENCES `inventory` (`inventory_id`),
  ADD CONSTRAINT `purchase_details_ibfk_2` FOREIGN KEY (`purchase_id`) REFERENCES `purchases` (`purchase_id`),
  ADD CONSTRAINT `purchase_details_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `clients` (`client_id`),
  ADD CONSTRAINT `services_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
