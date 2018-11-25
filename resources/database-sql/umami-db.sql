-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2018 at 09:33 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umami-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `nama_dosen` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nama_dosen`) VALUES
(1, 'Dr. Atje Setiawan A.,MS,M.Kom'),
(2, 'Dr. Juli Rejito, M.Kom'),
(3, ' Dr. Setiawan Hadi, M.Sc.CS.'),
(4, 'Drs. Akik Hidayat, M.Kom'),
(5, 'Dr. Asep Sholahuddin, MT'),
(6, 'Drs. Ino Suryana, M.Kom'),
(7, 'Drs. R. Sudrajat, M.Kom'),
(8, ' Akmal, S.Si., MT'),
(9, 'Erick Paulus, S.Si., M.Kom'),
(10, 'Deni Setiana,S.Si., M.CS'),
(11, 'Rudi Rosadi, S.Si., M.Kom'),
(12, 'Intan Nurma Yunita, M.T.'),
(13, 'Aditya Pradana, M.Eng'),
(14, 'Mira Suryani, M.Pd.');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id_matkul` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_materi` int(11) NOT NULL,
  `jenis` enum('ppt','doc','pdf','') NOT NULL,
  `link_download` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id_matkul`, `id_user`, `id_materi`, `jenis`, `link_download`) VALUES
(101, 1, 1011, 'ppt', 'http://bit.ly/Alprog1'),
(102, 1, 1021, 'pdf', 'http://bit.ly/Login1'),
(201, 1, 2011, 'doc', 'http://bit.ly/SisdatI1'),
(202, 1, 2021, 'ppt', 'http://bit.ly/Strukdat');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `id_matkul` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `nama_matkul` varchar(40) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id_matkul`, `id_dosen`, `nama_matkul`, `semester`) VALUES
(101, 4, 'Algoritma Pemrograman', 1),
(102, 6, 'Logika Informatika', 1),
(201, 2, 'Sistem Database I', 2),
(202, 13, 'Struktur Data', 2),
(301, 4, 'Matematika Diskrit', 3),
(302, 2, 'Sistem Database II', 3),
(401, 5, 'Artificial Intelligence', 4),
(402, 10, 'Jaringan Komputer', 4),
(501, 7, 'Entrepreneurship', 5),
(502, 7, 'Rekayasa Perangkat Lunak', 5),
(601, 3, 'Teori Bahasa & Automata ', 6),
(602, 8, 'Proyek Perangkat Lunak I', 6),
(701, 14, 'Data Mining', 7),
(702, 11, 'Manajemen Project', 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `password`, `email`) VALUES
(1, 'fyfirman', 'password', 'fyfirman@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`) USING BTREE,
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_matkul` (`id_matkul`) USING BTREE;

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id_matkul`),
  ADD KEY `id_dosen` (`id_dosen`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=703;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `id_matkul` FOREIGN KEY (`id_matkul`) REFERENCES `matkul` (`id_matkul`),
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `matkul`
--
ALTER TABLE `matkul`
  ADD CONSTRAINT `id_dosen` FOREIGN KEY (`id_dosen`) REFERENCES `dosen` (`id_dosen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
