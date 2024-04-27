-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 27, 2024 at 10:27 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ekosan`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_ekosan`
--

CREATE TABLE `db_ekosan` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kamar` varchar(255) NOT NULL,
  `nomor_hp` varchar(255) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `periode_pembayaran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `db_ekosan`
--

INSERT INTO `db_ekosan` (`id`, `nama`, `kamar`, `nomor_hp`, `tanggal_pembayaran`, `periode_pembayaran`) VALUES
(1, 'Budi', '400', '08123456789', '2024-04-04', '2024-05-04'),
(3, 'kali', '222', '2134213', '2000-07-01', '2000-08-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_ekosan`
--
ALTER TABLE `db_ekosan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_ekosan`
--
ALTER TABLE `db_ekosan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
