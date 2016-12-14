-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2016 at 09:49 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lavaeigf_dynamic`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `idProduct` int(11) NOT NULL,
  `Categories_idCategory` int(11) NOT NULL,
  `codeProduct` varchar(11) DEFAULT NULL,
  `nameProduct` varchar(255) DEFAULT NULL,
  `priceProduct` decimal(10,2) DEFAULT NULL,
  `discountProduct` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`idProduct`, `Categories_idCategory`, `codeProduct`, `nameProduct`, `priceProduct`, `discountProduct`) VALUES
(1, 1, 'PL_W_D', 'Plain White Dice', '0.58', '0.00'),
(2, 2, 'PL_GQ_F', 'Ghoul Queen: Unpainted', '1.99', '0.00'),
(3, 1, 'PL_GR_D', 'Plain Green Dice', '0.63', '12.00'),
(4, 1, 'PL_R_D', 'Plain Red Dice', '0.57', '1.00'),
(5, 2, 'P_GQ_F', 'Ghoul Queen: Painted', '3.99', '0.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`idProduct`,`Categories_idCategory`),
  ADD UNIQUE KEY `idProduct_UNIQUE` (`idProduct`),
  ADD KEY `fk_Products_Categories_idx` (`Categories_idCategory`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `idProduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_Products_Categories` FOREIGN KEY (`Categories_idCategory`) REFERENCES `categories` (`idCategory`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
