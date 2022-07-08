-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 08, 2022 at 08:18 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

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
  `accept_date` date NOT NULL,
  `no_delivery` int(11) NOT NULL,
  `bc_date` date NOT NULL,
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
  `no_container` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `material_catagory`
--

CREATE TABLE `material_catagory` (
  `id_catagory` int(11) NOT NULL,
  `catagory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `material_catagory`
--

INSERT INTO `material_catagory` (`id_catagory`, `catagory`) VALUES
(1, 'Oversea'),
(2, 'Local');

-- --------------------------------------------------------

--
-- Table structure for table `material_data`
--

CREATE TABLE `material_data` (
  `id_material` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `material_name` varchar(255) NOT NULL,
  `price_unit` int(11) NOT NULL,
  `material_catagory` int(11) NOT NULL,
  `material_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `material_data`
--

INSERT INTO `material_data` (`id_material`, `code`, `material_name`, `price_unit`, `material_catagory`, `material_type`) VALUES
(1, 'K001', 'Karet', 20000, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `material_type`
--

CREATE TABLE `material_type` (
  `id_material_type` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `material_type`
--

INSERT INTO `material_type` (`id_material_type`, `type`) VALUES
(1, 'Main Material'),
(2, 'Sub Material');

-- --------------------------------------------------------

--
-- Table structure for table `out_material`
--

CREATE TABLE `out_material` (
  `id_out_material` int(11) NOT NULL,
  `no_nota_order` int(11) NOT NULL,
  `date_order` date NOT NULL,
  `request_vectory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `po_proccess`
--

CREATE TABLE `po_proccess` (
  `id_po_proccess` int(11) NOT NULL,
  `no_po` varchar(200) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `delivery_date` date NOT NULL,
  `date_po` varchar(255) NOT NULL,
  `supplier_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `po_proccess`
--

INSERT INTO `po_proccess` (`id_po_proccess`, `no_po`, `supplier_name`, `delivery_date`, `date_po`, `supplier_code`) VALUES
(1, '001', 'STMIK Bandung', '2022-07-10', '2022-07-09', 'V003');

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
  `code_supplier` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `name_supplier` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor_data`
--

INSERT INTO `vendor_data` (`id_vendor_data`, `code_supplier`, `phone`, `name_supplier`, `email`, `address`, `country`) VALUES
(1, 'V001', '9899', 'PT. MINAJAYA MERDEKA', 'minajayamerdeka@gmail.com', 'Cianjur', 'Indonesia'),
(3, 'V003', '087635647736', 'STMIK Bandung', 'stmikbandung@gmail.com', 'Bandung', 'Indonesia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accept_material_in`
--
ALTER TABLE `accept_material_in`
  ADD PRIMARY KEY (`id_accept_material`);

--
-- Indexes for table `material_catagory`
--
ALTER TABLE `material_catagory`
  ADD PRIMARY KEY (`id_catagory`);

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
  ADD PRIMARY KEY (`id_po_proccess`);

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
-- AUTO_INCREMENT for table `material_catagory`
--
ALTER TABLE `material_catagory`
  MODIFY `id_catagory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `material_data`
--
ALTER TABLE `material_data`
  MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id_po_proccess` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id_vendor_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
