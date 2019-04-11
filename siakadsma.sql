-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2019 at 12:40 PM
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
-- Database: `siakadsma`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nig` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kota_asl` varchar(50) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `no_telp` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_pelajaran` int(11) DEFAULT NULL,
  `status_user` int(11) DEFAULT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nig`, `nama`, `tgl_lahir`, `kota_asl`, `gender`, `alamat`, `no_telp`, `password`, `id_pelajaran`, `status_user`, `foto`) VALUES
(1, '53421', 'Jack', '2019-03-07', 'Jakarta', 'L', 'Jalan Dieng', '081212345654', '53421', 1, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'IPA'),
(2, 'IPS');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, '10 IPA 1'),
(2, '10 IPA 2'),
(3, '11 IPA 1'),
(4, '11 IPA 2'),
(5, '12 IPA 1'),
(6, '12 IPA 2'),
(7, '10 IPS 1'),
(8, '10 IPS 2'),
(9, '11 IPS 1'),
(10, '11 IPS 2'),
(11, '12 IPS 1'),
(12, '12 IPS 2');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `nis` varchar(50) DEFAULT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_pelajaran` int(11) NOT NULL,
  `jurusan` int(11) NOT NULL,
  `nilai_siswa` float NOT NULL,
  `tahun_ajaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `nis`, `id_kelas`, `id_pelajaran`, `jurusan`, `nilai_siswa`, `tahun_ajaran`) VALUES
(2, '12332', 6, 1, 1, 100, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `status_user` int(11) DEFAULT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nip`, `nama`, `password`, `gender`, `status_user`, `foto`) VALUES
(1, '098765', 'Sukiman', '098765', 'L', 3, ''),
(2, '576890', 'Sukijah', '576890', 'P', 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `pelajaran`
--

CREATE TABLE `pelajaran` (
  `id_pelajaran` int(11) NOT NULL,
  `id _jurusan` int(11) NOT NULL,
  `nama_pelajaran` varchar(50) NOT NULL,
  `nig` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelajaran`
--

INSERT INTO `pelajaran` (`id_pelajaran`, `id _jurusan`, `nama_pelajaran`, `nig`) VALUES
(1, 1, 'FISIKA', '0'),
(2, 2, 'SEJARAH', '0');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `judul`, `tanggal`, `keterangan`) VALUES
(1, 'Kunjungan Gubernur', '2018-12-03', 'Kunjungan gubernur provinsi sini untuk meninjau beberapa proyek berbasis nasional.'),
(2, 'Penghargaan Sekolah Adiwiyata', '2019-02-04', 'Penghargaan sekolah adiwiyata ke 5, penghargaan ini diberikan langsung oleh Bupati.'),
(3, 'Sosialisasi Anti Narkoba Polres Niki', '2019-02-11', 'Penyuluhan bahaya narkoba bagi siswa dan siswi oleh Polres Niki yang dipimpin langsung oleh Kapolres'),
(4, 'Perayaan Hari Guru', '2019-03-04', 'Dokumentasi perayaan hari guru SMAN 4 Macipo dan pelepasan guru yang akan pensiun.'),
(5, 'Perayaan Hut Sekolah ke-54', '2019-03-18', 'Perayaan hut sekolah SMAN 4 Macipo ke 54 Tahun.'),
(6, 'DOA Bersama Sebelum UN', '2019-03-25', 'Doa bersama dengan di Masjid Agung Al-Fatih.'),
(7, 'Pelaksanaan Ujian Nasional', '2019-04-08', 'Pelaksanaan ujian nasional oleh siswa kelas 12.');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id_semester` int(11) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id_semester`, `semester`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nis` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `kota_asl` varchar(50) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `kelas` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nis`, `nama`, `tgl_lahir`, `kota_asl`, `gender`, `kelas`, `id_jurusan`, `alamat`, `no_telp`, `password`, `foto`) VALUES
(150, '10111', 'Jokowa', '2009-05-03', 'Malang', 'L', 5, 1, 'Jl Suhat', '081252345678', '11111', 'Jokowa.jpg'),
(133, '11071', 'Dhandy', '2018-04-01', 'Malang', 'L', 2, 1, 'Jl Suhat', '081112345678', '11111', ''),
(42, '11111', 'Firman', '2019-04-01', 'Malang', 'L', 1, 1, 'Jl Suhat', '081212345678', '11111', ''),
(149, '11131', 'Tia', '2018-04-01', 'Malang', 'P', 5, 1, 'Jl Suhat', '081212365678', '11111', ''),
(139, '11212', 'Anjay', '2020-04-01', 'Malang', 'L', 3, 1, 'Jl Suhat', '081212345678', '11111', ''),
(145, '11222', 'Indra', '2019-04-01', 'Malang', 'L', 4, 1, 'Jl Suhat', '081212345678', '11111', ''),
(140, '11362', 'Dhanifudin', '2029-04-03', 'Malang', 'P', 3, 1, 'Jl Suhat', '081213345678', '11111', ''),
(144, '11411', 'Luqman', '2019-04-01', 'Malang', 'L', 4, 1, 'Jl Suhat', '081212305678', '11111', ''),
(136, '11418', 'Fira', '2019-04-01', 'Malang', 'L', 2, 1, 'Jl Suhat', '081212345678', '11111', ''),
(142, '11511', 'Nania', '2039-07-01', 'Malang', 'L', 4, 1, 'Jl Suhat', '081212342678', '11111', ''),
(146, '11513', 'Falah', '2019-04-01', 'Malang', 'P', 4, 1, 'Jl Suhat', '081212345678', '11111', ''),
(147, '11711', 'Aldi', '2019-04-01', 'Malang', 'P', 4, 1, 'Jl Suhat', '081212345678', '11111', ''),
(41, '121230891232189', 'Romadlan', '2019-12-31', 'Bontang', 'L', 2, 1, 'Jl Sax', '221932108391231', 'Password', 'Romadlan.jpg'),
(129, '12131', 'Epis', '2019-09-01', 'Malang', 'L', 1, 1, 'Jl bandung', '0812412345678', '11111', ''),
(130, '12141', 'Ojan', '2019-04-02', 'Malang', 'L', 1, 1, 'Jl Suhat', '081252345678', '11111', ''),
(131, '12151', 'Rivo', '2011-04-01', 'Malang', 'P', 1, 1, 'Jl Suhat', '081219345678', '11111', ''),
(134, '12181', 'Karina', '2019-05-01', 'Malang', 'P', 2, 1, 'Jl Sulfat', '081212345678', '11111', ''),
(128, '12211', 'Dzikri', '2019-08-01', 'Malang', 'L', 1, 1, 'Jl Suhat', '081312345678', '11111', ''),
(135, '12291', 'Fauzan', '2019-04-01', 'Malang', 'L', 2, 1, 'Jl Suhat', '081212345678', '11111', ''),
(127, '12311', 'Deby', '2019-04-02', 'Malang', 'P', 1, 1, 'Jl Suhat', '081212345678', '11111', ''),
(154, '12347', 'Jack', '2019-12-31', 'Malang', 'P', 1, 1, 'Jl Kalpataru', '10838102891923', '12363', 'Jack.jpg'),
(40, '1278912189', 'Akmal', '2019-01-01', 'Bontang', 'P', 1, 2, 'Jl Suhat', '0812631782183', 'asdaskdjas', 'Akmal.jpg'),
(132, '12961', 'Faiq', '2019-04-01', 'Malang', 'L', 2, 1, 'Jl Suhat', '081012345678', '11111', ''),
(143, '13111', 'Atiqa', '2019-01-11', 'Malang', 'L', 4, 1, 'Jl Suhat', '081212344678', '11111', ''),
(151, '13191', 'Prabowo', '2019-04-01', 'Malang', 'L', 5, 1, 'Jl Suhat', '081312345678', '11111', ''),
(141, '14112', 'Dimas', '2019-04-12', 'Malang', 'P', 3, 1, 'Jl Suhat', '081232315678', '11111', ''),
(138, '14311', 'Dila', '2018-01-03', 'Malang', 'L', 3, 1, 'Jl Suhat', '081212345678', '11111', ''),
(155, '15263', 'Mustafi', '2019-12-31', 'London', 'L', 1, 1, 'jl Cermai', '1123892458910', 'aaaaa', 'Mustafi.jpg'),
(148, '18191', 'Dena', '2019-01-31', 'Malang', 'P', 5, 1, 'Jl Suhat', '081012345678', '11111', ''),
(152, '19111', 'Lisa', '2019-04-01', 'Malang', 'L', 1, 1, 'Jl Suhat', '081212345678', '11111', ''),
(137, '21511', 'Nania', '2019-04-01', 'Malang', 'L', 3, 1, 'Jl Suhat', '081212345678', '11111', ''),
(153, '41111', 'Rudi', '2019-04-01', 'Malang', 'L', 1, 1, 'Jl Suhat', '081212345678', '11111', ''),
(39, 'asaasasas', 'Khosy', '2019-04-10', 'asasasas', 'L', 11, 1, 'sasasasa', '1111', 'jklasdjkladjklas', 'Khosy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `id_spp` int(11) NOT NULL,
  `nis` varchar(50) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_tahun_ajaran` int(11) NOT NULL,
  `bulan` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tahun_ajaran`
--

CREATE TABLE `tahun_ajaran` (
  `id` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `id_semester` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun_ajaran`
--

INSERT INTO `tahun_ajaran` (`id`, `tahun`, `id_semester`) VALUES
(1, 2019, 1),
(2, 2019, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pelajaran` (`id_pelajaran`),
  ADD KEY `status_user` (`status_user`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD UNIQUE KEY `id_kelas` (`id_kelas`),
  ADD KEY `nilai_ibfk_3` (`nis`),
  ADD KEY `nilai_ibfk_4` (`tahun_ajaran`),
  ADD KEY `nilai_ibfk_5` (`jurusan`),
  ADD KEY `id_pelajaran` (`id_pelajaran`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status_user` (`status_user`);

--
-- Indexes for table `pelajaran`
--
ALTER TABLE `pelajaran`
  ADD PRIMARY KEY (`id_pelajaran`),
  ADD KEY `pelajaran_ibfk_1` (`id _jurusan`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id_semester`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_jurusan` (`id_jurusan`),
  ADD KEY `kelas` (`kelas`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id_spp`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `nis` (`nis`),
  ADD KEY `id_tahun_ajaran` (`id_tahun_ajaran`);

--
-- Indexes for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_semester` (`id_semester`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pelajaran`
--
ALTER TABLE `pelajaran`
  MODIFY `id_pelajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id_semester` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `spp`
--
ALTER TABLE `spp`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_4` FOREIGN KEY (`tahun_ajaran`) REFERENCES `tahun_ajaran` (`id`),
  ADD CONSTRAINT `nilai_ibfk_5` FOREIGN KEY (`jurusan`) REFERENCES `jurusan` (`id_jurusan`),
  ADD CONSTRAINT `nilai_ibfk_8` FOREIGN KEY (`id_pelajaran`) REFERENCES `pelajaran` (`id_pelajaran`),
  ADD CONSTRAINT `nilai_ibfk_9` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`);

--
-- Constraints for table `pelajaran`
--
ALTER TABLE `pelajaran`
  ADD CONSTRAINT `pelajaran_ibfk_1` FOREIGN KEY (`id _jurusan`) REFERENCES `jurusan` (`id_jurusan`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`),
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`kelas`) REFERENCES `kelas` (`id_kelas`);

--
-- Constraints for table `spp`
--
ALTER TABLE `spp`
  ADD CONSTRAINT `spp_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  ADD CONSTRAINT `spp_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`),
  ADD CONSTRAINT `spp_ibfk_3` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id`);

--
-- Constraints for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  ADD CONSTRAINT `tahun_ajaran_ibfk_1` FOREIGN KEY (`id_semester`) REFERENCES `semester` (`id_semester`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
