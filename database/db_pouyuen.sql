-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 26, 2022 at 01:54 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pouyuen`
--

-- --------------------------------------------------------

--
-- Table structure for table `accept_material_in`
--

CREATE TABLE `accept_material_in` (
  `id_accept_material` int(11) NOT NULL,
  `no_nota` int(11) NOT NULL,
  `date_delivery` date NOT NULL,
  `accept_data` varchar(255) NOT NULL,
  `no_delivery` int(11) NOT NULL,
  `bc_data` varchar(255) NOT NULL,
  `no_item` int(11) NOT NULL,
  `no_vectory` int(11) NOT NULL,
  `no_po` int(11) NOT NULL,
  `po_item` varchar(255) NOT NULL,
  `no_check_quantity` int(11) NOT NULL,
  `vectory_quantity` varchar(255) NOT NULL,
  `po_quantity` varchar(255) NOT NULL,
  `code_material` int(11) NOT NULL,
  `material_name` varchar(255) NOT NULL,
  `no_supplier` int(11) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `check_quantity` varchar(255) NOT NULL,
  `no_bc` int(11) NOT NULL,
  `no_container` int(11) NOT NULL,
  `date_created` date NOT NULL,
  `is_actived` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `id_catagory` int(11) NOT NULL,
  `catagory` varchar(255) NOT NULL,
  `date_created` date NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`id_catagory`, `catagory`, `date_created`, `is_active`) VALUES
(1, 'Oversea', '2022-06-26', 1),
(2, 'Local', '2022-06-26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `material_catagory`
--

CREATE TABLE `material_catagory` (
  `id_material_catagory` int(11) NOT NULL,
  `no_catagory` int(11) NOT NULL,
  `catagory_vectory` varchar(255) NOT NULL,
  `data_created` date NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `material_data`
--

CREATE TABLE `material_data` (
  `id_material` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `material_name` varchar(255) NOT NULL,
  `vectory_code` varchar(10) NOT NULL,
  `price_unit` int(11) NOT NULL,
  `price_currency` int(11) NOT NULL,
  `material_catagory` int(11) NOT NULL,
  `material_type` int(11) NOT NULL,
  `date_created` date NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `material_type`
--

CREATE TABLE `material_type` (
  `id_material_type` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `date_created` date NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `material_type`
--

INSERT INTO `material_type` (`id_material_type`, `type`, `date_created`, `is_active`) VALUES
(1, 'Main Material', '2022-06-26', 1),
(2, 'Sub Material', '2022-06-26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `out_material`
--

CREATE TABLE `out_material` (
  `id_out_material` int(11) NOT NULL,
  `no_nota_order` int(11) NOT NULL,
  `date_order` date NOT NULL,
  `request_vectory` varchar(255) NOT NULL,
  `date_created` date NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `po_proccess`
--

CREATE TABLE `po_proccess` (
  `id_po_process` int(11) NOT NULL,
  `no_po` int(11) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `delivery_date` date NOT NULL,
  `date_po` varchar(255) NOT NULL,
  `supplier_code` varchar(255) NOT NULL,
  `date_created` date NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transfer_proccess`
--

CREATE TABLE `transfer_proccess` (
  `id_transfer_proccess` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `date` date NOT NULL,
  `mode` varchar(255) NOT NULL,
  `inventory` varchar(255) NOT NULL,
  `vectory` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_created` date NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `email`, `phone`, `alamat`, `role_id`) VALUES
(1, 'Riana Cahyawati, S.Kom', 'admin', '12345', 'rianacahyawati@gmail.com', '085314923764', 'Cianjur', 2),
(2, 'Eka Anas Jatnika', 'anasberkata', '12345', 'anasberkata@gmail.com', '085156334607', 'Protanmas Samolo Indah Blok C5 No. 15', 1),
(5, 'Eka Anas Jatnika', 'anas', '12345', 'ideanasdesain@gmail.com', '12345', 'cianjur', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users_role`
--

CREATE TABLE `users_role` (
  `id_role` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_role`
--

INSERT INTO `users_role` (`id_role`, `role_name`) VALUES
(1, 'Super'),
(2, 'Admin'),
(3, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_data`
--

CREATE TABLE `vendor_data` (
  `id_vendor_data` int(11) NOT NULL,
  `code_supplier` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `name_supplier` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `date_created` date NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accept_material_in`
--
ALTER TABLE `accept_material_in`
  ADD PRIMARY KEY (`id_accept_material`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`id_catagory`);

--
-- Indexes for table `material_catagory`
--
ALTER TABLE `material_catagory`
  ADD PRIMARY KEY (`id_material_catagory`);

--
-- Indexes for table `material_data`
--
ALTER TABLE `material_data`
  ADD PRIMARY KEY (`id_material`);

--
-- Indexes for table `material_type`
--
ALTER TABLE `material_type`
  ADD PRIMARY KEY (`id_material_type`);

--
-- Indexes for table `out_material`
--
ALTER TABLE `out_material`
  ADD PRIMARY KEY (`id_out_material`);

--
-- Indexes for table `po_proccess`
--
ALTER TABLE `po_proccess`
  ADD PRIMARY KEY (`id_po_process`);

--
-- Indexes for table `transfer_proccess`
--
ALTER TABLE `transfer_proccess`
  ADD PRIMARY KEY (`id_transfer_proccess`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_role`
--
ALTER TABLE `users_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `vendor_data`
--
ALTER TABLE `vendor_data`
  ADD PRIMARY KEY (`id_vendor_data`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accept_material_in`
--
ALTER TABLE `accept_material_in`
  MODIFY `id_accept_material` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `id_catagory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `material_catagory`
--
ALTER TABLE `material_catagory`
  MODIFY `id_material_catagory` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `material_data`
--
ALTER TABLE `material_data`
  MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `material_type`
--
ALTER TABLE `material_type`
  MODIFY `id_material_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `out_material`
--
ALTER TABLE `out_material`
  MODIFY `id_out_material` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `po_proccess`
--
ALTER TABLE `po_proccess`
  MODIFY `id_po_process` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transfer_proccess`
--
ALTER TABLE `transfer_proccess`
  MODIFY `id_transfer_proccess` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users_role`
--
ALTER TABLE `users_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vendor_data`
--
ALTER TABLE `vendor_data`
  MODIFY `id_vendor_data` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
