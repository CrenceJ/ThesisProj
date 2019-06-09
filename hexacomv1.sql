-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2019 at 02:29 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hexacomv1`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `announce_id` int(11) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `content` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`announce_id`, `subject`, `content`, `created_at`, `updated_at`) VALUES
(21, 'sddsfdsfs', 'dsfsdfsd', '2019-04-26', '2019-04-26 15:07:51');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `contact_no` bigint(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `landline_no` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `inventory_id` int(255) NOT NULL,
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
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inventory_id`, `inventory_owner_id`, `inventory_item`, `inventory_brand`, `inventory_model`, `inventory_description`, `inventory_serial_no`, `cost`, `inventory_supplier`, `date_received`, `inventory_status`, `inventory_type`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Processor', 'AMD', 'KAVERI A6-7400K', '3.5GHZ', 'A10283', 2394, 'Phenomenal Solution', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(2, NULL, 'Processor', 'AMD', 'RADEON R5 A6-7480', '3.5GHZ,1MB, L2A6-7480', 'A92902', 2394, 'Phenomenal Solution', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(3, NULL, 'Processor', 'INTEL', 'CORE I3-7100', '3.90 GHZ', 'IC23992XC', 7237, 'Ubertech Inc.', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(4, NULL, 'Processor', 'INTEL', 'CORE I5-6600K', '3.30GHz LGA 1151 SKYLAKE', 'IC30022XS', 12062, 'IonTech Inc.', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(5, NULL, 'Motherboard', 'BIOSTAR', 'Hi-Fi A68U3P', 'FM2, DDR3,6CH,m-ATX, AMD COMPATIBLE', 'N/A', 2186, 'Phenomenal Solutions', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(7, NULL, 'Motherboard', 'GIGABYTE', 'GA-F2A78M-HD2', 'FM2+,DDR3,D-SUB,DVI,HDMI,7CH,GLAN,M-ATX, AMD COMPATIBLE', 'N/A', 2841, 'Ubertech Inc.', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(8, NULL, 'Motherboard', 'GIGABYTE', 'GA-H110M', 'DDR4,D-SUB,HDMI,7CH,GLAN,Micro-ATX, INTEL COMPATIBLE', 'N/A', 2990, 'Ubertech Inc.', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(9, NULL, 'Motherboard', 'MSI', 'H110M PRO-VH 1151', 'DDR4,D-SUB,DVI-D,HDMI,7CH,GLAN,Micro-ATX, INTEL COMPATIBLE', 'N/A', 3169, 'Iontech Inc.', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(11, NULL, 'RAM', 'GENERIC', 'AVEXIR BUDGET SERIES', '4GB DDR3 1600_RAM (PC)', '2424345NAN', 1143, 'Iontech Inc.', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(12, NULL, 'RAM', 'KINGSTON', 'N/A', '4GB DDR3 PC10600/1333 UDIMM_RA (PC)', 'N/A', 2243, 'Nancom Technologies', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(14, NULL, 'RAM', 'KINGSTON', 'HYPER-X FURY', '4GB DDR4 2400MHz_RAM (LAPTOP)', 'KG90299435', 1474, 'Nancom Technologies', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(15, NULL, 'RAM', 'KINGSTON', 'N/A', '8GB DDR4 PC2400 SODIMM (LAPTOP)', 'KG99399393', 2495, 'Nancom Technologies', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(16, NULL, 'I-HDD', 'WESTERN DIGITAL', 'N/A', 'CAVIAR BLACK 1TB (PC)', 'WD1003FZEX', 4274, 'Western Digital', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(17, NULL, 'I-HDD', 'SEAGATE', 'BARRACUDA', '4TB SATA (PC)', 'SB230030', 6127, 'Seagate', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(18, NULL, 'I-HDD', 'SEAGATE', 'N/A', 'MOBILEHDD 2.5 NOTEBOOK 1TB', 'SB200304', 3530, 'Seagate', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(19, NULL, 'I-HDD', 'ADATA', 'SU800', 'SSD 256GB SATA3', 'n/A', 2344, 'Ubertech Inc.', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(20, NULL, 'Graphics Card', 'PALIT', 'GTX1050 STORMX', '2048M GDDR5 128bit DVI HDMI DP (PC)', 'n/a', 6549, 'Claritade Inc.', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(21, NULL, 'Graphics Card', 'GIGABYTE', 'GEFORCE GTX 1070 TI', '8GB 256-BIT GDDR5', 'n/a', 32490, 'UberTech Inc.', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(22, NULL, 'Graphics Card', 'MSI', 'GT 710', '2GD3H LP', 'n/a', 2778, 'Phenomenal Solution', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(23, NULL, 'Graphics Card', 'PALIT', 'GT1030', '2GB DDR4 DVI HDMI CARD', 'n/a', 4332, 'Claritrade Inc.', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(25, NULL, 'Optical Drive', 'LITE ON', 'Generic', 'DVDRW 24X DUAL LAYER SATA', 'IHas24', 771, 'Claritrade', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(26, NULL, 'Optical Drive', 'LITE ON', 'Generic', 'SLIM EXTERNAL DVDRW USB', 'eBau108', 1363, 'Claritrade', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(27, NULL, 'Monitor', 'Acer', 'K202HQL', '19.5\", VGA', 'A399594', 3708, 'Bridge Distribution', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(28, NULL, 'Monitor', 'Dell', 'D1918H', '18.5\" HDMI MONITOR', 'D390284', 3515, 'Bridge Distribution', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(29, NULL, 'Monitor', 'Viewsonic', 'VA1903A', 'LED MONITOR 19\' (18.5\' VIEWABLE)', 'VA324243', 3379, 'Innovista', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(30, NULL, 'Monitor', 'Viewsonic', 'VA2261-2', 'LED MONITOR 21.5INCH', 'VA982345', 4490, 'Innovista', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(31, NULL, 'Casing', 'Aerocool', 'STRIKE X', 'One Casing', 'n/a', 2289, 'Claritrade', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(32, NULL, 'Casing', 'Aercool', 'AC-V3X', 'Black Casing', 'n/a', 1546, 'Claritrade', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(33, NULL, 'Casing', 'Deepcool', 'EARLKASE', 'n/a', 'n/a', 2165, 'Claritrade', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(34, NULL, 'Powersupply', 'Deepcool', 'DP-DE500US-PH', 'DE500 500W PSU - version 2', 'n/a', 1565, 'Claritrade', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(35, NULL, 'Powersupply', 'Deepcool', 'DP-DE600US-PH', 'DE600 600W - version 2', 'n/a', 1782, 'Claritrade', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(36, NULL, 'Software', 'MICROSOFT', 'OFFICE 365 Personal', 'n/a', 'n/a', 1859, 'PCWorkx', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(37, NULL, 'Software', 'MICROSOFT', 'OFFICE 2016 HOME & STUDENT', 'n/a', 'n/a', 6165, 'PCWorkx', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(39, NULL, 'Software', 'MICROSOFT', 'WINDOWS', '8.1 64BIT PRO', 'n/a', 7588, 'PCWorkx', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(40, NULL, 'Software', 'MICROSOFT', 'WINDOWS', '64BIT PRO', 'n/a', 9247, 'PCWorkx', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(41, NULL, 'E-HDD', 'SEAGATE', 'BACKUP PLUS GEN2', '2.5 GOLD 2TB 3.0', 'n/a', 4763, 'Claritrade', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(42, NULL, 'E-HDD', 'TOSHIBA', 'CANVIO', 'SIMPLE 3.0 2TB BLK', 'n/a', 4933, 'Claritrade', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(43, NULL, 'E-HDD', 'WESTERN DIGITAL', 'MY PASSPORT', 'BLACK 1TB', 'n/a', 3175, 'Claritrade', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(44, NULL, 'E-HDD', 'HITACHI', 'TOURO MX3', '2.5 BLACK 2TB 3.0', 'n/a', 4566, 'Claritrade', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(45, NULL, 'PRINTER', 'CANON', 'PIXMA iP2770 PRINTER', 'Inkjet', 'n/a', 2326, 'Techtron', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL),
(46, NULL, 'PRINTER', 'EPSON', 'L120 PRINTER', 'Deskjet', 'n/a', 5046, 'Techtron', '0000-00-00 00:00:00', 'Available', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `or_number` varchar(255) NOT NULL,
  `client_id` int(11) NOT NULL COMMENT 'may ari nang order',
  `order_type` varchar(50) NOT NULL COMMENT 'pc, service, individual_parts',
  `order_status` varchar(50) NOT NULL COMMENT 'Paid / Unpaid',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='orders of service, build pc and choose parts';

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_details_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL COMMENT 'orders.order_id',
  `inventory_id` int(11) NOT NULL COMMENT 'inventory.inventory_id',
  `pending_item` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `purchase_id` int(255) NOT NULL,
  `srf_no` int(255) NOT NULL,
  `invoice` double NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`purchase_id`, `srf_no`, `invoice`, `status`, `created_at`) VALUES
(1, 9234, 10000, 'Sold', '2019-04-22 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_details`
--

CREATE TABLE `purchase_details` (
  `purdet_id` int(11) NOT NULL,
  `purchase_id` int(11) NOT NULL,
  `inventory_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `replacement`
--

CREATE TABLE `replacement` (
  `replace_id` int(255) NOT NULL,
  `srf_no` int(255) NOT NULL,
  `credit_no` int(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `serial_no` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL DEFAULT 'Replacement',
  `price` double NOT NULL,
  `supplier` varchar(255) NOT NULL,
  `date_recieved` datetime NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sale_id` int(255) NOT NULL,
  `order_id` int(255) DEFAULT NULL,
  `cost` int(255) NOT NULL DEFAULT '0',
  `user_id` int(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(255) NOT NULL,
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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(100) NOT NULL,
  `supplier_name` varchar(100) NOT NULL,
  `supplier_address` varchar(100) DEFAULT NULL,
  `supplier_contactno` int(100) DEFAULT NULL,
  `supplier_contactperson` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_name`, `supplier_address`, `supplier_contactno`, `supplier_contactperson`) VALUES
(1, 'Bridge Distribution', '#12 Dimakita St. Natulog City', 2147483647, 0),
(2, 'Iontech Inc.', NULL, NULL, NULL),
(3, 'VST-MSI ECS INC', NULL, NULL, NULL),
(4, 'Techtron', NULL, NULL, NULL),
(5, 'Innovista', NULL, NULL, NULL),
(6, 'Ubertech Inc', NULL, NULL, NULL),
(7, 'Phenomenal Solution', NULL, NULL, NULL),
(8, 'Banbros commercial', NULL, NULL, NULL),
(9, 'Solid Business Machines Inc.', NULL, NULL, NULL),
(10, 'Philteq Inc', NULL, NULL, NULL),
(11, 'Nancom Technologies', NULL, NULL, NULL),
(12, 'Accesories and Supplies Depot Inc', NULL, NULL, NULL),
(13, 'Claritrade Inc', NULL, NULL, NULL),
(14, 'Astech Pengson Inc', NULL, NULL, NULL),
(15, 'Grandtech International Enterprises', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
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
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `username`, `password`, `last_login`, `type`, `email`, `birthdate`, `profile_pic`, `created_at`, `updated_at`, `contact`, `gender`) VALUES
(6, 'rico', 'editer', 'rico', '$2y$10$hb0m4v9MfMaXOQqmVFG45.EKE96lsfROkkZGOOgMZOtiTKTyBCCTC', '2019-04-28', 'service engineer', 'sample@email.com', '1996-03-22', '1556297842.jpg', '2019-03-03 16:00:00', '2019-04-28 17:37:28', '', ''),
(12, 'The', 'Admin', 'root', '$2y$10$MNpGs60ugLa.5ABZHJWDIOt78qjBjIjMzFaaKqlBJyb63VdV9ka.q', '2019-04-28', 'Administrator', 'mail@gmail.com', '1900-04-21', NULL, '2019-04-21 01:52:41', '2019-04-28 17:37:28', '09876543210', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`announce_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inventory_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `purchase_details`
--
ALTER TABLE `purchase_details`
  ADD PRIMARY KEY (`purdet_id`),
  ADD KEY `inventory_id` (`inventory_id`),
  ADD KEY `purchase_id` (`purchase_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `replacement`
--
ALTER TABLE `replacement`
  ADD PRIMARY KEY (`replace_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sale_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `announce_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inventory_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `purchase_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `purchase_details`
--
ALTER TABLE `purchase_details`
  MODIFY `purdet_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `replacement`
--
ALTER TABLE `replacement`
  MODIFY `replace_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sale_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
