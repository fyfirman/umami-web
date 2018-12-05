-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2018 at 05:31 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

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
(14, 'Mira Suryani, M.Pd.'),
(15, 'Dosen non TI');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id_matkul` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_materi` int(11) NOT NULL,
  `nama_materi` varchar(30) NOT NULL,
  `jenis` enum('ppt','doc','pdf','') NOT NULL,
  `link_download` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id_matkul`, `id_user`, `id_materi`, `nama_materi`, `jenis`, `link_download`) VALUES
(101, 1, 1011, 'Operasi File', 'ppt', 'http://bit.ly/Alprog1'),
(102, 1, 1021, 'Logika Predikat', 'pdf', 'http://bit.ly/Login1'),
(201, 1, 2011, 'DB-01', 'doc', 'http://bit.ly/SisdatI1'),
(202, 1, 2021, 'Fungsi', 'ppt', 'http://bit.ly/Strukdat'),
(301, 1, 3011, 'Relasi', 'ppt', 'http://bit.ly/Matdis1'),
(302, 1, 3021, 'Sitem Data Terdistribusi', 'pdf', 'http://bit.ly/SisdatII'),
(302, 1, 3022, 'Introduction', 'ppt', 'bit.ly/Intro'),
(302, 1, 3023, 'Disk Fundamentals', 'ppt', 'bit.ly/DiskFundamentals'),
(302, 1, 3024, 'Linux File System Layout', 'ppt', 'bit.ly/LinuxFile'),
(302, 1, 3025, 'Database Terdistribusi Modul', 'pdf', 'bit.ly/Modul'),
(401, 1, 4011, 'Machine Learning', 'ppt', 'http://bit.ly/AI1'),
(402, 1, 4021, 'Kemanan Jaringan', 'doc', 'http://bit.ly/Jarkom1'),
(501, 1, 5011, 'Konsep Dasar Kewirausahaan', 'ppt', 'http://bit.ly/Entre'),
(502, 1, 5021, 'Konsep dasar rekayasa perangka', 'doc', 'http://bit.ly/RPL'),
(601, 1, 6011, 'Bahasa Regular Automata', 'doc', 'http://bit.ly/TBA'),
(602, 1, 6021, 'Manajemen Proyek', 'ppt', 'http://bit.ly/RPL2'),
(701, 1, 7011, 'Konsep dan Fungsi Data mining', 'ppt', 'http://bit.ly/DatMin'),
(702, 1, 7021, 'Konsep Manajemen Project', 'doc', 'http://bit.ly/ManajemenProject');

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
(103, 5, 'PTKI', 1),
(104, 15, 'Agama', 1),
(105, 15, 'Pancasila', 1),
(106, 15, 'Bahasa Indonesia', 1),
(107, 15, 'Bahasa Inggris', 1),
(108, 15, 'Manusia dan Sains', 1),
(109, 15, 'Kalkulus I', 1),
(201, 2, 'Sistem Database I', 2),
(202, 13, 'Struktur Data', 2),
(203, 6, 'Arsitektur dan Organisasi Komputer', 2),
(204, 15, 'Fisika Informatika', 2),
(205, 15, 'Statistika', 2),
(206, 15, 'Kalkulus II', 2),
(301, 4, 'Matematika Diskrit', 3),
(302, 2, 'Sistem Database II', 3),
(303, 6, 'Metode Numerik', 3),
(304, 11, 'Sistem Operasi', 3),
(305, 11, 'Pemrograman Web', 3),
(306, 9, 'Pemrograman Berorientasi Objek', 3),
(401, 5, 'Artificial Intelligence', 4),
(402, 10, 'Jaringan Komputer', 4),
(403, 8, 'Operasional Riset', 4),
(404, 5, 'Sistem Informasi', 4),
(405, 8, 'Pemrograman Berorientasi Objek II', 4),
(406, 1, 'Desain User Interface ', 4),
(407, 1, 'Etika Profesi', 4),
(501, 7, 'Entrepreneurship', 5),
(502, 7, 'Rekayasa Perangkat Lunak', 5),
(503, 5, 'Kecakapan Antar Personal', 5),
(504, 11, 'Telematika', 5),
(601, 3, 'Teori Bahasa & Automata ', 6),
(602, 8, 'Proyek Perangkat Lunak I', 6),
(603, 10, 'Analisis Algoritma', 6),
(604, 12, 'Interaksi Manusia dan Komputer', 6),
(606, 12, 'Data Warehouse', 6),
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
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=703;

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
