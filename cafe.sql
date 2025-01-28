-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2023 at 10:43 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kapetann`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `title` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `subtotal_amount` decimal(10,2) NOT NULL,
  `date` date NOT NULL,
  `invoice_number` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ready_for_pickup` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `price`, `title`, `quantity`, `subtotal_amount`, `date`, `invoice_number`, `user_id`, `ready_for_pickup`) VALUES
(1, 40.00, 'COLOMBIAN SUPREMO CUP (12 OZ)', 1, 40.00, '2023-04-21', 'INV-760084', 0, 0),
(2, 45.00, 'AMERICANO - HOT ESPRESSO (12 OZ)', 1, 45.00, '2023-04-21', 'INV-760084', 0, 0),
(3, 40.00, 'COLOMBIAN SUPREMO CUP (12 OZ)', 1, 40.00, '2023-04-21', 'INV-174394', 2, 1),
(4, 50.00, 'NITRO COLD BREW W/ STRAW (12 OZ)', 1, 50.00, '2023-04-21', 'INV-741371', 2, 1),
(5, 45.00, 'AMERICANO - HOT ESPRESSO (12 OZ)', 1, 45.00, '2023-04-21', 'INV-982020', 2, 1),
(6, 40.00, 'COLOMBIAN SUPREMO CUP (12 OZ)', 1, 40.00, '2023-04-21', 'INV-144116', 2, 1),
(7, 40.00, 'COLOMBIAN SUPREMO CUP (12 OZ)', 1, 40.00, '2023-12-06', 'INV-136885', 5, 1),
(8, 55.00, 'CARAMEL COLD FOAM COLD BREW (12 OZ)', 1, 55.00, '2023-12-10', 'INV-178473', 5, 1),
(9, 55.00, 'CARAMEL COLD FOAM COLD BREW (12 OZ)', 1, 55.00, '2023-12-10', 'INV-217429', 5, 1),
(10, 50.00, 'NITRO COLD BREW W/ STRAW (12 OZ)', 1, 50.00, '2023-12-10', 'INV-773264', 5, 1),
(11, 40.00, 'COLOMBIAN SUPREMO CUP (12 OZ)', 1, 40.00, '2023-12-10', 'INV-773264', 5, 1),
(12, 50.00, 'NITRO COLD BREW W/ STRAW (12 OZ)', 1, 50.00, '2023-12-10', 'INV-280774', 5, 1),
(13, 50.00, 'NITRO COLD BREW W/ STRAW (12 OZ)', 1, 50.00, '2023-12-10', 'INV-131196', 5, 0),
(14, 40.00, 'COLOMBIAN SUPREMO CUP (12 OZ)', 1, 40.00, '2023-12-10', 'INV-131196', 5, 1),
(15, 50.00, 'NITRO COLD BREW W/ STRAW (12 OZ)', 1, 50.00, '2023-12-10', 'INV-820743', 5, 0),
(16, 40.00, 'COLOMBIAN SUPREMO CUP (12 OZ)', 1, 40.00, '2023-12-10', 'INV-820743', 5, 0),
(17, 45.00, 'AMERICANO - HOT ESPRESSO (12 OZ)', 1, 45.00, '2023-12-10', 'INV-820743', 5, 0),
(18, 40.00, 'INDONESIAN SUMATRA MANDHELING (12 OZ)', 1, 40.00, '2023-12-10', 'INV-820743', 5, 0),
(19, 30.00, 'SEASONAL SINGLE-ORIGIN (12 OZ)', 1, 30.00, '2023-12-10', 'INV-820743', 5, 1),
(20, 50.00, 'NITRO COLD BREW W/ STRAW (12 OZ)', 1, 50.00, '2023-12-10', 'INV-12255', 5, 0),
(21, 50.00, 'NITRO COLD BREW W/ STRAW (12 OZ)', 1, 50.00, '2023-12-10', 'INV-449401', 7, 1),
(22, 50.00, 'NITRO COLD BREW W/ STRAW (12 OZ)', 1, 50.00, '2023-12-10', 'INV-977222', 7, 0),
(23, 40.00, 'COLOMBIAN SUPREMO CUP (12 OZ)', 1, 40.00, '2023-12-10', 'INV-977222', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `create_datetime`) VALUES
(1, 'John Rovie', 'RovicBalingbing', 'balingbing.johnrovie20@gmail.com', '850f5f5611e06993cc07363c98c560d0', '2023-04-18 08:59:41'),
(2, 'admin', 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2023-04-18 11:00:40'),
(3, 'sample', 'sample', 'sample', '5e8ff9bf55ba3508199d22e984129be6', '2023-04-18 11:03:23'),
(4, 'Rovic', 'Rovic', 'Rovic@gmail.com', '6bafff124175b93f6358d465c5a654d9', '2023-04-19 12:14:34'),
(5, 'Tom Deocales', 'tom', 'deocales8@gmail.com', '2bbacd99be10471993714968b73fe7d6', '2023-12-06 14:20:59'),
(6, 'asd', 'tom', 'asd@gmail.com', '2bbacd99be10471993714968b73fe7d6', '2023-12-10 21:40:55'),
(7, 'tomdeocales', 'tom093611', 'deocalesshane@gmail.com', '2bbacd99be10471993714968b73fe7d6', '2023-12-10 21:42:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
