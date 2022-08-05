-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2022 at 04:44 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nqpis_tms2`
--

-- --------------------------------------------------------

--
-- Table structure for table `datamemo`
--

CREATE TABLE `datamemo` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kamar` varchar(5) NOT NULL,
  `kakamar` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `alasan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datamemo`
--

INSERT INTO `datamemo` (`id`, `nama`, `kamar`, `kakamar`, `kelas`, `alasan`) VALUES
(1, 'lia', 'nq05', 'alawiyah', '5b mi', 'sakit');

-- --------------------------------------------------------

--
-- Table structure for table `datasurat`
--

CREATE TABLE `datasurat` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kamar` varchar(4) NOT NULL,
  `kakamar` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `alasan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `halamanpersetujuan`
--

CREATE TABLE `halamanpersetujuan` (
  `id` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kamar` varchar(5) NOT NULL,
  `kakamar` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `alasan` varchar(1000) NOT NULL,
  `pilihan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `halamanpersetujuan`
--

INSERT INTO `halamanpersetujuan` (`id`, `nis`, `nama`, `kamar`, `kakamar`, `kelas`, `alasan`, `pilihan`) VALUES
(1, 0, 'Lucas', 'nq02', 'siti nur haliza', '3c mti', 'sakit', '');

-- --------------------------------------------------------

--
-- Table structure for table `santri`
--

CREATE TABLE `santri` (
  `id` int(11) NOT NULL,
  `nis` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kamar` varchar(4) NOT NULL,
  `kakamar` varchar(100) NOT NULL,
  `pagi` varchar(100) NOT NULL,
  `sore` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `santri`
--

INSERT INTO `santri` (`id`, `nis`, `nama`, `kamar`, `kakamar`, `pagi`, `sore`) VALUES
(7, 202003044, 'Zee', 'nq04', 'durrotul yatima', 'mti', 'pt'),
(9, 202002046, 'Lucas', 'nq02', 'siti nur haliza', '2u MI', '10c SMA'),
(11, 202002047, 'luas', 'nq03', 'Willi', '2u MI', 'pt smt 4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datamemo`
--
ALTER TABLE `datamemo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datasurat`
--
ALTER TABLE `datasurat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `halamanpersetujuan`
--
ALTER TABLE `halamanpersetujuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `santri`
--
ALTER TABLE `santri`
  ADD PRIMARY KEY (`id`,`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datamemo`
--
ALTER TABLE `datamemo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `datasurat`
--
ALTER TABLE `datasurat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `halamanpersetujuan`
--
ALTER TABLE `halamanpersetujuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `santri`
--
ALTER TABLE `santri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
