-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2023 at 04:16 AM
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
-- Database: `pethotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '123456', 'admin'),
(3, 'vava', '111', 'pelanggan');

-- --------------------------------------------------------

--
-- Table structure for table `grooming`
--

CREATE TABLE `grooming` (
  `id_grooming` int NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `namaHewan` varchar(40) NOT NULL,
  `jenisHewan` varchar(50) NOT NULL,
  `jenisLayanan` varchar(75) NOT NULL,
  `tgl_grooming` date NOT NULL,
  `waktu` varchar(35) NOT NULL,
  `total_biaya` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `grooming`
--

INSERT INTO `grooming` (`id_grooming`, `nama_pengguna`, `namaHewan`, `jenisHewan`, `jenisLayanan`, `tgl_grooming`, `waktu`, `total_biaya`) VALUES
(8, 'zazkia', 'pokky', 'huskyy', 'grooming', '2023-12-08', '09:00', 'Rp.100.000'),
(11, 'fajri', 'hulk', 'buldog', 'Triming', '2023-12-10', '11:00', 'Rp.50.000');

-- --------------------------------------------------------

--
-- Table structure for table `kamarkandang`
--

CREATE TABLE `kamarkandang` (
  `id_kamar` int NOT NULL,
  `jenis_kamar` varchar(50) NOT NULL,
  `harga` int NOT NULL,
  `statuskmr` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kamarkandang`
--

INSERT INTO `kamarkandang` (`id_kamar`, `jenis_kamar`, `harga`, `statuskmr`) VALUES
(1, 'Standar Room', 25000, 'tidak tersedia'),
(2, 'Suite Room', 50000, 'tidak tersedia'),
(4, 'VIP Suite Room', 100000, 'tersedia'),
(6, 'Suite Room', 50000, 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id_reservasi` int NOT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `no_telp` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nama_hewan` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `jenis_hewan` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `checkIn` date NOT NULL,
  `checkOut` date NOT NULL,
  `tipe_kamar` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `totalBiaya` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `catatan` text NOT NULL,
  `status_reservasi` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id_reservasi`, `nama`, `alamat`, `no_telp`, `nama_hewan`, `jenis_hewan`, `checkIn`, `checkOut`, `tipe_kamar`, `totalBiaya`, `catatan`, `status_reservasi`) VALUES
(8, 'Diva Talitha Sahda', 'jl bisma', '0987654345', 'choco', 'anggora', '2023-11-29', '2023-12-07', 'standar room', 'Rp.1000.000', 'harus mandi dengan air hangat, sangat manja', 'sudah check out'),
(10, 'ella putri', 'jl penyu', '096363733', 'brown', 'kucing bengal', '2023-12-01', '2023-12-07', 'standar room', 'Rp.500.000', 'tidur harus nyaman sekali', 'check out'),
(11, 'syakilla', 'jl batu', '077363887', 'bloom', 'cihuahua', '2023-12-07', '2023-12-09', 'Suite Room', 'Rp.80.000', 'tidak ada', 'belum check out'),
(13, 'sabrina', 'jl jambu', '05637884837', 'pupy', 'cihuahua', '2023-12-08', '2023-12-09', 'VIP Suite Room', 'Rp 150.000', 'tidak ada', 'sudah check out');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grooming`
--
ALTER TABLE `grooming`
  ADD PRIMARY KEY (`id_grooming`);

--
-- Indexes for table `kamarkandang`
--
ALTER TABLE `kamarkandang`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `grooming`
--
ALTER TABLE `grooming`
  MODIFY `id_grooming` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kamarkandang`
--
ALTER TABLE `kamarkandang`
  MODIFY `id_kamar` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id_reservasi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
