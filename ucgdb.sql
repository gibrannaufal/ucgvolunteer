-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2022 at 03:56 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ucgdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jk` varchar(30) NOT NULL,
  `npm` int(11) NOT NULL,
  `login_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `jk`, `npm`, `login_fk`) VALUES
(1, 'Gibran', 'l', 201131007, 1),
(2, 'Admin', 'l', 201131008, 2),
(4, 'tariq', 'l', 201131010, 3),
(5, 'taehyung', 'l', 201131011, 4),
(6, 'zoro', 'l', 20131012, 5);

-- --------------------------------------------------------

--
-- Table structure for table `clockin`
--

CREATE TABLE `clockin` (
  `id_in` int(11) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `waktu` time NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `hari` date NOT NULL,
  `hari_out` date NOT NULL,
  `waktu_out` time NOT NULL,
  `anggota_fk` int(11) NOT NULL,
  `pengerjaan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clockin`
--

INSERT INTO `clockin` (`id_in`, `Nama`, `waktu`, `keterangan`, `hari`, `hari_out`, `waktu_out`, `anggota_fk`, `pengerjaan`) VALUES
(17, 'admin', '11:06:35', 'siap', '2022-10-18', '2022-10-18', '11:08:04', 2, 'Individu'),
(18, 'admin', '11:04:56', 'buuat website', '2022-10-22', '2022-10-22', '11:05:24', 2, 'meeting'),
(19, 'admin', '19:46:39', ' Mengerjakan Front end', '2022-10-23', '0000-00-00', '02:00:00', 2, 'meeting'),
(20, 'gibran', '19:48:47', 'Nugas', '2022-10-23', '2022-10-23', '00:01:12', 1, 'individu'),
(21, 'gibran', '20:10:02', ' Mengerjakan front end', '2022-10-23', '2022-10-23', '00:01:12', 1, 'meeting'),
(22, 'gibran', '12:00:12', ' Back End', '2022-10-23', '2022-10-23', '22:01:12', 1, 'individu');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`) VALUES
(1, 'gibran', 'gibran13'),
(2, 'admin', 'admin123'),
(3, 'tariq', 'tariq123'),
(4, 'supreme', 'supreme123'),
(5, 'zorojuro', 'zoro123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `login_fk` (`login_fk`);

--
-- Indexes for table `clockin`
--
ALTER TABLE `clockin`
  ADD PRIMARY KEY (`id_in`),
  ADD KEY `clockin_ibfk_1` (`anggota_fk`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `clockin`
--
ALTER TABLE `clockin`
  MODIFY `id_in` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `anggota_ibfk_1` FOREIGN KEY (`login_fk`) REFERENCES `login` (`id_login`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `clockin`
--
ALTER TABLE `clockin`
  ADD CONSTRAINT `clockin_ibfk_1` FOREIGN KEY (`anggota_fk`) REFERENCES `anggota` (`id_anggota`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
