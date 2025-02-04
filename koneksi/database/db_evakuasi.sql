-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2020 at 05:16 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_evakuasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_evakuasi`
--

CREATE TABLE `tb_evakuasi` (
  `id_evakuasi` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `lat` varchar(55) NOT NULL,
  `lng` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_evakuasi`
--

INSERT INTO `tb_evakuasi` (`id_evakuasi`, `nama`, `alamat`, `no_hp`, `lat`, `lng`) VALUES
(2, 'Joko Evakuasi', 'Jombor, Sleman, Yogyakarta', '0834398934984', '-7.77698883425341', '110.33256833266033'),
(4, 'Pak Kumis Evakuasi', 'pogung Lor No 21, Mlati Sleman', '0839983884938', '-7.753856979706889', '110.37532050135698'),
(5, '24 Sigit Evakuasi', 'Jln. Monjali, Sleman, Yogyakarta', '0899883778478', '-7.757939164197414', '110.37038235837313');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_evakuasi`
--
ALTER TABLE `tb_evakuasi`
  ADD PRIMARY KEY (`id_evakuasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_evakuasi`
--
ALTER TABLE `tb_evakuasi`
  MODIFY `id_evakuasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
