-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2024 at 11:59 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ceiling`
--

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lo_level` int(11) NOT NULL,
  `lo_county` varchar(255) NOT NULL,
  `lo_town` varchar(255) DEFAULT NULL,
  `lo_postcode` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `lo_level`, `lo_county`, `lo_town`, `lo_postcode`) VALUES
(1, 1, 'Peshawar', NULL, NULL),
(2, 2, '1', 'Taru', NULL),
(3, 3, '1', '2', '5435'),
(4, 1, 'Lahore', NULL, NULL),
(5, 2, '4', 'Pabbi', NULL),
(6, 3, '4', '5', '65434'),
(7, 1, 'Mardan', NULL, NULL),
(8, 2, '7', 'Guldamorh', NULL),
(9, 3, '7', '8', '65445'),
(10, 1, 'Faizabad', NULL, NULL),
(11, 2, '10', 'Saidusharif', NULL),
(12, 3, '10', '11', '6546'),
(13, 1, 'Islamabad', NULL, NULL),
(14, 2, '13', 'New yark', NULL),
(15, 3, '13', '14', '4535'),
(16, 1, 'Nowshera', NULL, NULL),
(17, 2, '16', 'Brisban', NULL),
(18, 3, '16', '17', '6765'),
(19, 1, 'Karachi', NULL, NULL),
(20, 2, '19', '', NULL),
(21, 3, '19', '20', '5675'),
(22, 1, 'Queta', NULL, NULL),
(23, 2, '22', '', NULL),
(24, 3, '22', '23', '4534'),
(25, 1, 'Multan', NULL, NULL),
(26, 2, '25', '', NULL),
(27, 3, '25', '26', '765'),
(28, 1, 'Kashmir', NULL, NULL),
(29, 2, '28', '', NULL),
(30, 3, '28', '29', '657');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
