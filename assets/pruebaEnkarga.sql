-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 10, 2016 at 12:00 AM
-- Server version: 5.7.13-0ubuntu0.16.04.2
-- PHP Version: 5.6.24-1+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pruebaEnkarga`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id_client` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id_client`, `name`, `last_name`, `phone`, `email`) VALUES
(2, 'Alberto', 'Solis', '5512345678', 'alberto@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_product` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sku` varchar(50) NOT NULL,
  `price` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_product`, `name`, `sku`, `price`) VALUES
(1, 'producto', 'sku0001', 10.50);

-- --------------------------------------------------------

--
-- Table structure for table `saleproduct`
--

CREATE TABLE `saleproduct` (
  `id_saleproduct` int(11) NOT NULL,
  `fk_sale` int(11) NOT NULL,
  `fk_product` int(11) NOT NULL,
  `num_products` int(11) NOT NULL,
  `total` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `saleproduct`
--

INSERT INTO `saleproduct` (`id_saleproduct`, `fk_sale`, `fk_product`, `num_products`, `total`) VALUES
(1, 1, 1, 1, 10.50),
(2, 2, 1, 1, 10.50);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id_sales` int(11) NOT NULL,
  `fk_client` int(11) NOT NULL,
  `total` float(10,2) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id_sales`, `fk_client`, `total`, `date`) VALUES
(1, 2, NULL, '2016-10-09'),
(2, 2, 10.50, '2016-10-09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name`, `last_name`, `email`, `password`, `token`) VALUES
(1, 'Iván', 'Hernández', 'van.m285@gmail.com', '$2a$12$INOsGyf6uzSkADkSiQPMeOureMGoPVRnafxz2Sdxn1Y44dp20q3Ku', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `saleproduct`
--
ALTER TABLE `saleproduct`
  ADD PRIMARY KEY (`id_saleproduct`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id_sales`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `saleproduct`
--
ALTER TABLE `saleproduct`
  MODIFY `id_saleproduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id_sales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
