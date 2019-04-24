-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2019 at 02:23 PM
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
-- Database: `siakadku`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(50) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `foto`) VALUES
(1, 'dzikri@siakad.com', 'a6e0f11fcff95151129b78b03adec842', 'default.png'),
(2, 'khosy@siakad.com', 'bdab105361efd70699e7cdcd84c26132', 'default.png'),
(3, 'deby@siakad.com', '9bcc02b4703c28a756dbdf1e16b7aa6c', 'default.png'),
(4, 'falah@siakad.com', '2d0567b23f9bab484baca7e279139c0c', 'default.png'),
(5, 'dhandy@siakad.com', 'c4a8db4a597a9b03f1ce60fe5d5dcbc4', 'default.png'),
(6, 'firman@siakad.com', '9dfbbc92d99104d364bf36e07753c461', 'default.png'),
(7, 'adm@siakad.com', 'fbc38656cbf3588a5dabf20283693cca', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `bulan`
--

CREATE TABLE `bulan` (
  `id_bulan` int(11) NOT NULL,
  `nama_bulan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bulan`
--

INSERT INTO `bulan` (`id_bulan`, `nama_bulan`) VALUES
(1, 'Januari'),
(2, 'Februari'),
(3, 'Maret'),
(4, 'April'),
(5, 'Mei'),
(6, 'Juni'),
(7, 'Juli'),
(8, 'Agustus'),
(9, 'September'),
(10, 'Oktober'),
(11, 'November'),
(12, 'Desember');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nig_guru` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `asal_kota` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `foto_profile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nig_guru`, `password`, `nama_lengkap`, `asal_kota`, `tanggal_lahir`, `jenis_kelamin`, `no_telp`, `alamat`, `foto_profile`) VALUES
(1, '1741720052', 'ac9d3c581fc1660004e8c2838f77cb23', 'Dzikri Alif Abdillah S,Ag', 'Jombang', '1999-07-19', 'Laki-laki', '081234762703', 'Perumahan Indah C/5', 'default.png'),
(2, '1741720051', 'f2b21ef4ec5c583e71a595a36fe169c5', 'Yolanda Marissa S,Pg', 'Tuban', '1999-09-20', 'Perempuan', '08124389220', 'Perumahan Cindramata B/11', 'default.png'),
(3, '1741720053', '9ff7b68a010aeb99d9c909b581cdbdac', 'Sasmita Citra S,Pd', 'Surabaya', '1999-02-11', 'Perempuan', '08122521321', 'Perumahan Permata Permai D/11', 'default.png'),
(4, '1741720054', 'a87d4d4978f44d7bf297f1541cc87a5c', 'Yoga Herlambang S,Tm', 'Pamekasan', '1997-04-21', 'Laki-laki', '0812435331', 'Perumahan Garuda B/4', 'default.png'),
(5, '1741720055', '08c86177eb70554ef91ad75e302d7e47', 'Ninda Puspita Sari S,Pd', 'Probolinggo', '1995-01-19', 'Perempuan', '0816635216', 'Perumahan Aksara Permai G/10', 'default.png'),
(6, '1741720056', '46f83ae627b911b9421c9afbde45d4a0', 'Laras Pandhita S,Pd', 'Malang', '1998-10-15', 'Perempuan', '08124895564', 'Perumahan Green Jason D/2', 'default.png'),
(7, '1741720057', '306430fbe473d57e11a5ec85b3569b47', 'Ahmad Heriyawan S,Ag', 'Malang', '1998-09-08', 'Laki-laki', '0812451312', 'Perumahan Permata Permai C/16', 'default.png'),
(8, '1741720058', 'b0209bec36c07adedd4d7051650d1aad', 'Putra Bagus Permana S,Og', 'Bojonegoro', '1998-11-09', 'Laki-laki', '0811352342', 'Perumahan Cindramata B/4', 'default.png'),
(9, '1741720059', '761e69f6052a8e2ae9cdb81aeff976ab', 'Ghea Nandita Fitri S,Pd', 'Surabaya', '1997-06-02', 'Perempuan', '08124315358', 'Perumahan Garuda F/20', 'default.png'),
(10, '1741720060', '9f23fc6306f21171a5dc874b93aa6212', 'Bagus Sandhika S,Pd', 'Surabaya', '1995-04-11', 'Laki-laki', '0816123122', 'Perumahan Aksara Permai B/20', 'default.png'),
(11, '1741720070', 'e21ed367c60ecd5a55fad75fcfbcf3c0', 'Monika Gandha Rahayu S,Pd', 'Probolinggo', '1998-09-20', 'Perempuan', '08114851231', 'Perumahan Garuda C/11', 'default.png'),
(12, '1741720080', '8bfe2ec31ca43e138e53a413ff49b109', 'Tito Sarapea S,Og', 'Malang', '1997-01-19', 'Laki-laki', '0812466312', 'Perumahan Garuda Jaya D/11', 'default.png'),
(13, '1741720090', '247100a29b5d580b6739de0c3e28e755', 'Mahesa Yoga Andika S,Og', 'Jember', '1997-06-19', 'Laki-laki', '08113542123', 'Perumahan Majapahit B/4', 'default.png'),
(14, '1741720100', 'd08bec01bcc3ad6a2115879f64cd3ae4', 'Niken Dewi Sasmita S,Pd', 'Jember', '1998-07-21', 'Perempuan', '08124992142', 'Perumahan Garuda Jaya F/20', 'default.png'),
(15, '1741720110', '0f3490b994c5550049d1a876eef5ca47', 'Renaldo Kurniawan S,Ag', 'Sidoarjo', '1997-04-28', 'Laki-laki', '08123311233', 'Perumahan Cindra Perkasa C/22', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(3) NOT NULL
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
  `id_jurusan` int(11) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `id_jurusan`, `nama_kelas`) VALUES
(1, 1, '10 IPA 1'),
(2, 1, '10 IPA 2'),
(4, 1, '11 IPA 1'),
(5, 1, '11 IPA 2'),
(7, 1, '12 IPA 1'),
(8, 1, '12 IPA 2'),
(10, 2, '10 IPS 1'),
(11, 2, '10 IPS 2'),
(13, 2, '11 IPS 1'),
(14, 2, '11 IPS 2'),
(15, 2, '12 IPS 1'),
(16, 2, '12 IPS 2');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_mapel`) VALUES
(1, 'Agama Islam 1'),
(2, 'Agama Islam 2'),
(3, 'Agama Islam 3'),
(4, 'Bahasa Indonesia 1'),
(5, 'Bahasa Indonesia 2'),
(6, 'Bahasa Indonesia 3'),
(7, 'Bahasa Inggris 1'),
(8, 'Bahasa Inggris 2'),
(9, 'Bahasa Inggris 3'),
(10, 'Sejarah Wajib'),
(11, 'Matematika Wajib'),
(12, 'Fisika'),
(13, 'Biologi'),
(14, 'Kimia'),
(15, 'Ekonomi'),
(16, 'Sosiologi'),
(17, 'Geografi'),
(18, 'Sejarah Peminatan'),
(19, 'Matematika Peminatan'),
(20, 'Olahraga 1'),
(21, 'Olahraga 2'),
(22, 'Olahraga 3');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `nilai_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_guru`, `id_kelas`, `id_siswa`, `id_mapel`, `nilai_siswa`) VALUES
(1, 1, 1, 1, 1, 90);

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul` varchar(40) NOT NULL,
  `tanggal` date NOT NULL,
  `foto_pengumuman` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `id_semester` int(11) NOT NULL,
  `id_bulan` int(11) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id_semester`, `id_bulan`, `semester`) VALUES
(1, 1, 2),
(2, 2, 2),
(3, 3, 2),
(4, 4, 2),
(5, 5, 2),
(6, 6, 2),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 10, 1),
(11, 11, 1),
(12, 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(20) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `id_kelas`, `nisn`, `password`, `nama_siswa`, `kota`, `tanggal_lahir`, `jenis_kelamin`, `no_telp`, `alamat`, `foto`) VALUES
(1, 1, '1904501', '69cdd8217f4e2110942ac704d78ef066', 'Aldo Pratama', 'Malang', '2000-03-19', 'Laki-laki', '08312123123', 'Jl. Pattimura 20 C', ''),
(2, 1, '1904502', 'c64eefc611f176ff764934b587f06b69', 'Andreas Prayoga', 'Tegal', '2000-03-19', 'Laki-laki', '0842131242', 'Jl. Soekarno Hatta 20/B-4', ''),
(3, 1, '1904503', '69cdd8217f4e2110942ac704d78ef066', 'Bella Faradina', 'Solo', '2000-02-11', 'Perempuan', '0842198723', 'Jl. Pattimura 20/F-5', ''),
(4, 1, '1904504', 'ca4678f0bb8e2e94210d546af812d739', 'Bagas Saputra', 'Sidoarjo', '2000-06-02', 'Laki-laki', '0842198767', 'Jl. Soekarno Hatta 20/B-11', ''),
(5, 1, '1904505', 'fe84d1616aa9501ef9a947d508fa297b', 'Cantika Rahayu', 'Malang', '2000-08-25', 'Perempuan', '0842178972', 'Jl. Garuda 10/C', ''),
(6, 10, '1904601', 'c0e30caf92743060dd3784a263a1cc4e', 'Angga Sandhika', 'Sidoarjo', '2000-11-19', 'Laki-laki', '0842199082', 'Jl. Soekarno Hatta 20/C-4', ''),
(7, 10, '1904602', 'de973c39d8ed0a9f315abdc48daf3948', 'Bagas Tri Pitaka', 'Malang', '2000-01-10', 'Laki-laki', '0842154667', 'Jl. Pattimura 20/F-10', ''),
(8, 10, '1904603', '628af5cf7093f24fd30e3711fd6773c6', 'Belinda Sasmita', 'Malang', '2000-02-02', 'Perempuan', '0842143343', 'Jl. Soekarno Hatta 20/D-11', ''),
(9, 10, '1904604', 'a48cee1fe713242d341831b1387ad956', 'Bulqis Citra Mahayu', 'Probolinggo', '2000-04-21', 'Perempuan', '0842165553', 'Jl. Garuda 10/G', ''),
(10, 10, '1904605', '4e73c8ed9e6f337dece2505b30a452d3', 'Bella Nadira Putri', 'Surabaya', '2000-08-25', 'Perempuan', '0842153221', 'Jl. Agus Salim 5/C', '');

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `id_spp` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_bulan` int(11) NOT NULL,
  `id_semester` int(11) NOT NULL,
  `id_tahun_ajaran` int(11) NOT NULL,
  `status` enum('Lunas','Belum Lunas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`id_spp`, `id_siswa`, `id_kelas`, `id_bulan`, `id_semester`, `id_tahun_ajaran`, `status`) VALUES
(1, 1, 1, 4, 2, 1, 'Lunas'),
(2, 2, 1, 4, 2, 1, 'Belum Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_ajaran`
--

CREATE TABLE `tahun_ajaran` (
  `id_tahun_ajaran` int(11) NOT NULL,
  `tahun_ajaran` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun_ajaran`
--

INSERT INTO `tahun_ajaran` (`id_tahun_ajaran`, `tahun_ajaran`) VALUES
(1, '2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bulan`
--
ALTER TABLE `bulan`
  ADD PRIMARY KEY (`id_bulan`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `FK_KELAS_JURUSAN` (`id_jurusan`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `FK_NILAI_GURU` (`id_guru`),
  ADD KEY `FK_NILAI_KELAS` (`id_kelas`),
  ADD KEY `FK_NILAI_SISWA` (`id_siswa`),
  ADD KEY `FK_NILAI_MAPEL` (`id_mapel`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id_semester`),
  ADD KEY `FK_BULAN_SEMESTER` (`id_bulan`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `FK_KELAS_SISWA` (`id_kelas`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id_spp`),
  ADD KEY `FK_BULAN_SPP` (`id_bulan`),
  ADD KEY `FK_SISWA_SPP` (`id_siswa`),
  ADD KEY `FK_TAHUN_AJARAN_SPP` (`id_tahun_ajaran`),
  ADD KEY `FK_SEMESTER_SPP` (`id_semester`),
  ADD KEY `FK_KELAS_SPP` (`id_kelas`);

--
-- Indexes for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  ADD PRIMARY KEY (`id_tahun_ajaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bulan`
--
ALTER TABLE `bulan`
  MODIFY `id_bulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id_semester` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `spp`
--
ALTER TABLE `spp`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  MODIFY `id_tahun_ajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `FK_KELAS_JURUSAN` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `FK_NILAI_GURU` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_NILAI_KELAS` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_NILAI_MAPEL` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_NILAI_SISWA` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `semester`
--
ALTER TABLE `semester`
  ADD CONSTRAINT `FK_BULAN_SEMESTER` FOREIGN KEY (`id_bulan`) REFERENCES `bulan` (`id_bulan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `FK_KELAS_SISWA` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `spp`
--
ALTER TABLE `spp`
  ADD CONSTRAINT `FK_BULAN_SPP` FOREIGN KEY (`id_bulan`) REFERENCES `bulan` (`id_bulan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_KELAS_SPP` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_SEMESTER_SPP` FOREIGN KEY (`id_semester`) REFERENCES `semester` (`id_semester`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_SISWA_SPP` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_TAHUN_AJARAN_SPP` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
