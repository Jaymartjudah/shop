-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2023 at 11:39 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbaeshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbllogin`
--

CREATE TABLE `tbllogin` (
  `id` int(10) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `type` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbllogin`
--

INSERT INTO `tbllogin` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin', 'judah01', 'admin'),
(2, 'user', 'user', ''),
(3, 'client', '123456', ''),
(4, 'user', '1234', ''),
(5, 'airiel', '123456', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(11) NOT NULL,
  `product` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `product`, `description`, `price`, `category`, `pic`) VALUES
(1, 'shoes', 'crocodile loafers ', '3700.00', 'shoes', 'shoes.jpg'),
(2, 'shoes', 'vans of the wall  ', '3500.00', 'shoes', 'pexels-mnz-1598508.jpg'),
(3, 'shoes', 'asfasf ', '3500.00', 'shoes', 'pexels-melvin-buezo-2529148.jpg'),
(4, 'dress', 'Trending Aesthetic Cute Floral Kawaii Korean Dress', '450.00', 'dress', 'trending_aesthetic_cute_floral_kawaii_korean_dress_1574319005_6a718ff50.jpg'),
(5, 'coat', 'Long Trench Coat II ', '1500.00', 'coat', '5165e96fd5222d8d16d4b0a10361811c.jpg'),
(6, 'dress', 'Party Dress / Aesthetic Dress / Mini dress', '1200.00', 'dress', 'party_dress__aesthetic_dress___1652899738_dea5642b_progressive.jpg'),
(7, 'shirt', 'K. AESTHETIC | Korean fashion trends, Korean fashion, Korean outfits', '699.00', 'shirt', '36db6d6a8c961272da5cd26f4c64e381.jpg'),
(8, 'scarp', 'Scarf outfit winter', '399.00', 'scarp', 'eb2298d572a334c6417e07ae798dabac.jpg'),
(9, 'pants', 'OLD MONEY AESTHETIC PANTS', '799.00', 'pants', 'images.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbllogin`
--
ALTER TABLE `tbllogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbllogin`
--
ALTER TABLE `tbllogin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
