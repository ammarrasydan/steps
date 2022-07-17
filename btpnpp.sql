-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2022 at 06:03 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btpnpp`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_ahli`
--

CREATE TABLE `daftar_ahli` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `kad_pengenalan` varchar(12) DEFAULT NULL,
  `kata_laluan` varchar(100) DEFAULT NULL,
  `sahkata_laluan` varchar(100) DEFAULT NULL,
  `jantina` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_telefon` int(12) DEFAULT NULL,
  `agensi` varchar(100) DEFAULT NULL,
  `negeri` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daftar_ahli`
--

INSERT INTO `daftar_ahli` (`id`, `nama`, `kad_pengenalan`, `kata_laluan`, `sahkata_laluan`, `jantina`, `email`, `no_telefon`, `agensi`, `negeri`) VALUES
(0, 'Ammar Rasydan', '970313025071', 'Ammar123', 'Ammar123', 'Male', 'ammar@gmail.com', 135953597, 'KKM', 'PULAU PINANG');

-- --------------------------------------------------------

--
-- Table structure for table `staff_admin`
--

CREATE TABLE `staff_admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `kad_pengenalan` varchar(12) DEFAULT NULL,
  `kata_laluan` varchar(100) DEFAULT NULL,
  `sahkata_laluan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_admin`
--

INSERT INTO `staff_admin` (`id`, `nama`, `kad_pengenalan`, `kata_laluan`, `sahkata_laluan`) VALUES
(1, 'Ammar', '970313025071', 'am1234', 'am1234');

-- --------------------------------------------------------

--
-- Table structure for table `tempah_premis`
--

CREATE TABLE `tempah_premis` (
  `id` int(11) NOT NULL,
  `namapremis` varchar(100) DEFAULT NULL,
  `tarikh` date DEFAULT NULL,
  `saluran` varchar(100) DEFAULT NULL,
  `namapemohon` varchar(100) DEFAULT NULL,
  `agensi` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `tujuan` varchar(100) DEFAULT NULL,
  `tarikhmula` date DEFAULT NULL,
  `tarikhtamat` date DEFAULT NULL,
  `masa` time(6) DEFAULT NULL,
  `bil_peserta` varchar(100) DEFAULT NULL,
  `pilih` varchar(100) DEFAULT NULL,
  `perlu` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `catatan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tempah_premis`
--

INSERT INTO `tempah_premis` (`id`, `namapremis`, `tarikh`, `saluran`, `namapemohon`, `agensi`, `alamat`, `tujuan`, `tarikhmula`, `tarikhtamat`, `masa`, `bil_peserta`, `pilih`, `perlu`, `status`, `catatan`) VALUES
(0, 'MAKMAL KOMPUTER', '2022-03-08', 'Email', 'Ammar', 'KKM', 'Taman Seri Serdang', 'Meeting', '2022-03-10', '2022-03-12', '09:00:00.000000', '15', 'YA', 'LCD', '', 'Tiada');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_ahli`
--
ALTER TABLE `daftar_ahli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_admin`
--
ALTER TABLE `staff_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tempah_premis`
--
ALTER TABLE `tempah_premis`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
