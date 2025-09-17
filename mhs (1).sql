-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 17, 2025 at 09:51 PM
-- Server version: 8.0.40
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpDasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE `mhs` (
  `nama` varchar(50) NOT NULL,
  `posisi` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`nama`, `posisi`, `jurusan`, `foto`, `id`) VALUES
('Regina Santoso', 'Anggota', 'MAN', 'egi.png', 2),
('Alicia Juanita Lisal', 'Koordinator', 'IMT', 'alicia.png', 3),
('Audrey Gozal', 'Koordinator', 'VCD', 'audrey.png', 4),
('Edrick Saputra Lionard', 'Koordinator', 'IMT', 'edrick.png', 5),
('Kevin Hamfri', 'Anggota', 'VCD', 'KH.png', 6),
('Jojo', 'Anggota', 'VCD', 'Jojo.png', 7),
('Frederico', 'Anggota', 'VCD', 'rico.png', 8),
('Lisa', 'Anggota', 'VCD', 'lisa.png', 9),
('Clarice', 'Anggota', 'VCD', 'clarice.png', 10),
('Diva', 'Anggota', 'VCD', 'diva.png', 11),
('Pia', 'Anggota', 'VCD', 'pia.png', 12),
('Buqi', 'Anggota', 'VCD', 'buqi.png', 13),
('Clarica Tenggrana', 'Anggota', 'VCD', 'ct.png', 14),
('Varensa Foanto', 'Anggota', 'MAN', 'varensa.png', 15),
('Rachel', 'Anggota', 'VCD', 'rachel.png', 17),
('Varen', 'Anggota', 'VCD', 'varen.png', 18),
('Christopher Kevin Tjoanto', 'Anggota', 'MAN', 'opet.png', 19),
('Arsya', 'Anggota', 'IMT-FSD', 'Arsya.png', 27);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mhs`
--
ALTER TABLE `mhs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
