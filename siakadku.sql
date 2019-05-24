-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2019 at 04:28 AM
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
(1, 'dzikri@siakad.com', 'a6e0f11fcff95151129b78b03adec842', 'default.jpg'),
(2, 'khosy@siakad.com', 'bdab105361efd70699e7cdcd84c26132', 'default.jpg'),
(3, 'deby@siakad.com', '9bcc02b4703c28a756dbdf1e16b7aa6c', 'default.jpg'),
(4, 'falah@siakad.com', '2d0567b23f9bab484baca7e279139c0c', 'default.jpg'),
(5, 'dhandy@siakad.com', 'c4a8db4a597a9b03f1ce60fe5d5dcbc4', 'default.jpg'),
(6, 'firman@siakad.com', '9dfbbc92d99104d364bf36e07753c461', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bulan`
--

CREATE TABLE `bulan` (
  `id_bulan` int(11) NOT NULL,
  `nama_bulan` varchar(10) NOT NULL,
  `id_semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bulan`
--

INSERT INTO `bulan` (`id_bulan`, `nama_bulan`, `id_semester`) VALUES
(1, 'Januari', 2),
(2, 'Februari', 2),
(3, 'Maret', 2),
(4, 'April', 2),
(5, 'Mei', 2),
(6, 'Juni', 2),
(7, 'Juli', 1),
(8, 'Agustus', 1),
(9, 'September', 1),
(10, 'Oktober', 1),
(11, 'November', 1),
(12, 'Desember', 1);

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
  `foto` varchar(50) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nig_guru`, `password`, `nama_lengkap`, `asal_kota`, `tanggal_lahir`, `jenis_kelamin`, `no_telp`, `alamat`, `foto`) VALUES
(1, '1741720052', 'ac9d3c581fc1660004e8c2838f77cb23', 'Dzikri Alif Abdillah S,Ag', 'Jombang', '1999-07-19', 'Laki-laki', '081234762703', 'Perumahan Indah C/5', 'default.jpg'),
(2, '1741720051', 'f2b21ef4ec5c583e71a595a36fe169c5', 'Yolanda Marissa S,Pg', 'Tuban', '1999-09-20', 'Perempuan', '08124389220', 'Perumahan Cindramata B/11', 'default.jpg'),
(3, '1741720053', '9ff7b68a010aeb99d9c909b581cdbdac', 'Sasmita Citra S,Pd', 'Surabaya', '1999-02-11', 'Perempuan', '08122521321', 'Perumahan Permata Permai D/11', 'default.jpg'),
(4, '1741720054', 'a87d4d4978f44d7bf297f1541cc87a5c', 'Yoga Herlambang S,Tm', 'Pamekasan', '1997-04-21', 'Laki-laki', '0812435331', 'Perumahan Garuda B/4', 'default.jpg'),
(5, '1741720055', '08c86177eb70554ef91ad75e302d7e47', 'Ninda Puspita Sari S,Pd', 'Probolinggo', '1995-01-19', 'Perempuan', '0816635216', 'Perumahan Aksara Permai G/10', 'default.jpg'),
(6, '1741720056', '46f83ae627b911b9421c9afbde45d4a0', 'Laras Pandhita S,Pd', 'Malang', '1998-10-15', 'Perempuan', '08124895564', 'Perumahan Green Jason D/2', 'default.jpg'),
(7, '1741720057', '306430fbe473d57e11a5ec85b3569b47', 'Ahmad Heriyawan S,Ag', 'Malang', '1998-09-08', 'Laki-laki', '0812451312', 'Perumahan Permata Permai C/16', 'default.jpg'),
(8, '1741720058', 'b0209bec36c07adedd4d7051650d1aad', 'Putra Bagus Permana S,Og', 'Bojonegoro', '1998-11-09', 'Laki-laki', '0811352342', 'Perumahan Cindramata B/4', 'default.jpg'),
(9, '1741720059', '761e69f6052a8e2ae9cdb81aeff976ab', 'Ghea Nandita Fitri S,Pd', 'Surabaya', '1997-06-02', 'Perempuan', '08124315358', 'Perumahan Garuda F/20', 'default.jpg'),
(10, '1741720060', '9f23fc6306f21171a5dc874b93aa6212', 'Bagus Sandhika S,Pd', 'Surabaya', '1995-04-11', 'Laki-laki', '0816123122', 'Perumahan Aksara Permai B/20', 'default.jpg'),
(11, '1741720070', 'e21ed367c60ecd5a55fad75fcfbcf3c0', 'Monika Gandha Rahayu S,Pd', 'Probolinggo', '1998-09-20', 'Perempuan', '08114851231', 'Perumahan Garuda C/11', 'default.jpg'),
(12, '1741720080', '8bfe2ec31ca43e138e53a413ff49b109', 'Tito Sarapea S,Og', 'Malang', '1997-01-19', 'Laki-laki', '0812466312', 'Perumahan Garuda Jaya D/11', 'default.jpg'),
(13, '1741720090', '247100a29b5d580b6739de0c3e28e755', 'Mahesa Yoga Andika S,Og', 'Jember', '1997-06-19', 'Laki-laki', '08113542123', 'Perumahan Majapahit B/4', 'default.jpg'),
(14, '1741720100', 'd08bec01bcc3ad6a2115879f64cd3ae4', 'Niken Dewi Sasmita S,Pd', 'Jember', '1998-07-21', 'Perempuan', '08124992142', 'Perumahan Garuda Jaya F/20', 'default.jpg'),
(15, '1741720110', '0f3490b994c5550049d1a876eef5ca47', 'Renaldo Kurniawan S,Ag', 'Sidoarjo', '1997-04-28', 'Laki-laki', '08123311233', 'Perumahan Cindra Perkasa C/22', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `jadwal` text NOT NULL,
  `nama_jadwal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_jurusan`, `jadwal`, `nama_jadwal`) VALUES
(1, 1, 'Jadwal_IPA.pdf', 'Jadwal IPA'),
(2, 2, 'Jadwal_IPS.pdf', 'Jadwal IPS');

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
  `nilai_siswa` int(11) NOT NULL,
  `id_semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul` varchar(40) NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `judul`, `tanggal`, `foto`, `keterangan`) VALUES
(1, 'Ujian Nasional', '2019-04-08', 'Ujian_Nasional.png', 'Ujian nasional berbasis komputer SMAN 4 MACIPO');

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
  `foto` varchar(20) NOT NULL DEFAULT 'default.jpg',
  `id_jurusan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `id_kelas`, `nisn`, `password`, `nama_siswa`, `kota`, `tanggal_lahir`, `jenis_kelamin`, `no_telp`, `alamat`, `foto`, `id_jurusan`) VALUES
(1, 1, '1904501', '69cdd8217f4e2110942ac704d78ef066', 'Aldo Pratama', 'Malang', '2000-03-19', 'Laki-laki', '08312123123', 'Jl. Pattimura 20 C', 'default.jpg', 1),
(2, 1, '1904502', 'c64eefc611f176ff764934b587f06b69', 'Andreas Prayoga', 'Tegal', '2000-03-19', 'Laki-laki', '0842131242', 'Jl. Soekarno Hatta 20/B-4', 'default.jpg', 1),
(3, 1, '1904503', '69cdd8217f4e2110942ac704d78ef066', 'Bella Faradina', 'Solo', '2000-02-11', 'Perempuan', '0842198723', 'Jl. Pattimura 20/F-5', 'default.jpg', 1),
(4, 1, '1904504', 'ca4678f0bb8e2e94210d546af812d739', 'Bagas Saputra', 'Sidoarjo', '2000-06-02', 'Laki-laki', '0842198767', 'Jl. Soekarno Hatta 20/B-11', 'default.jpg', 1),
(5, 1, '1904505', 'fe84d1616aa9501ef9a947d508fa297b', 'Cantika Rahayu', 'Malang', '2000-08-25', 'Perempuan', '0842178972', 'Jl. Garuda 10/C', 'default.jpg', 1),
(6, 1, '1904001', 'daeeb683fae997226fa3ffcdc1fc4cd2', 'Aida', 'Pemalang', '1998-07-01', 'Perempuan', '082131232221', 'Jl Liku_Liku', 'default.jpg', 1),
(7, 1, '1904002', 'b1ee98b5fcd92760d230bb656846c8ee', 'Aini', 'Malang', '1998-11-09', 'Perempuan', '082132217251', 'Jl Supratman', 'default.jpg', 1),
(8, 1, '1904003', '3fedf292b58da2fdb493267d85742a3e', 'Bebi', 'Malang', '1998-02-18', 'Perempuan', '082132293821', 'Jl Lodikasi', 'default.jpg', 1),
(9, 1, '1904004', 'fce0f871aabff3b520e03b6dde2032dd', 'Cakra', 'Malang', '1998-07-19', 'Laki-laki', '082132203928', 'Jl Kertas Biru', 'default.jpg', 1),
(10, 1, '1904005', '10a1f4d86629f2456eb007585aa5c6fb', 'Doyok', 'Jombang', '1998-03-09', 'Laki-laki', '082127161221', 'Jl Anoman', 'default.jpg', 1),
(11, 2, '1904111', 'fdfcd330a34c62465476238e53ec1ade', 'Arini', 'Magetan', '1998-02-11', 'Perempuan', '082131298121', 'Jl Komang', 'default.jpg', 1),
(12, 2, '1904112', '4bbe969485681696f32adfa755520a83', 'Aska', 'Solo', '1998-11-28', 'Perempuan', '082132217788', 'Jl Supratman', 'default.jpg', 1),
(13, 2, '1904113', 'a6b20d1b3b2571f43355b57c2c746eab', 'Cika', 'Gresik', '1998-12-18', 'Perempuan', '082132281121', 'Jl Lodikasi', 'default.jpg', 1),
(14, 2, '1904114', 'fcd2ee1d9029270a5965fa3c46ca2d26', 'Darma', 'Malang', '1998-02-19', 'Laki-laki', '0821322039289', 'Jl Kunir', 'default.jpg', 1),
(15, 2, '1904115', '6a38ba521f438e02c64057db656c864b', 'Desi', 'Solo', '1998-09-11', 'Perempuan', '082127161299', 'Jl Pisang Kipas', 'default.jpg', 1),
(16, 2, '1904116', 'f27aa0df22b98f7e542647aeb7d0ffd5', 'Jihan', 'Surabaya', '1998-02-28', 'Perempuan', '082115224181', 'Jl Singajaya', 'default.jpg', 1),
(17, 2, '1904117', '23a15cbf421df4f36f69ac75aa246464', 'Karin', 'Blitar', '1998-12-12', 'Perempuan', '082132098290', 'Jl Saktijaya', 'default.jpg', 1),
(18, 2, '1904118', 'c6202a396fb5c8a5fd0c5445a8a2ee57', 'Nania', 'Denpasar', '1998-07-17', 'Perempuan', '082131123629', 'Jl Bunga Andong', 'default.jpg', 1),
(19, 2, '1904119', 'af4738222d270114a7b44f9f8881de72', 'Rokim', 'Malang', '1998-05-13', 'Laki-laki', '082132292987', 'Jl Singaraja', 'default.jpg', 1),
(20, 2, '1904120', '9833dd79fb102fa8657d5213427e4391', 'Yessi', 'Malang', '1999-08-18', 'Perempuan', '082132200092', 'Jl Bunga Melati', 'default.jpg', 1),
(21, 4, '190411', '522d88a003955fc4955a04e61548fe21', 'Ahmad Pradana', 'Malang', '1999-05-01', 'Laki-laki', '082345728', 'Jl. Garuda 16 C', 'default.jpg', 1),
(22, 4, '190412', 'ef00d7041bce703958752c21c3981ad0', 'Arpana Maulana', 'Malang', '0000-00-00', 'Laki-laki', '081785542', 'Jl. Mangga 17', 'default.jpg', 1),
(23, 4, '190413', '1a1f7ecd0141a566e4b5881e2408823f', 'Adinda Sari', 'Surabaya', '2000-12-01', 'Perempuan', '081986876', 'Jl. Pisang 72', 'default.jpg', 1),
(24, 4, '190514', '980127fe8d814d825acb2fbd795d82cc', 'Bella Sofi', 'Gresik', '2000-12-12', 'Perempuan', '089764563', 'Perumahan Mandiri 2', 'default.jpg', 1),
(25, 4, '190415', 'cfbee4a1989324171bfb342af09eb535', 'Chandra Permana', 'Babat', '2000-07-07', 'Laki-laki', '088625587', 'Jl. Biru laut 117', 'default.jpg', 1),
(26, 4, '190416', '726b9f4a15a087531308b50ed3b1edcd', 'Deddy Negoro', 'Surabaya', '1999-05-09', 'Laki-laki', '082857986', 'Jl. Merah Hati 08', 'default.jpg', 1),
(27, 4, '190417', 'd46eb9c398ddf25683a070438ed3e199', 'Damayanti Chyntia', 'Lamongan', '2000-02-09', 'Perempuan', '087998764', 'Jl. Diponegoro gg IV', 'default.jpg', 1),
(28, 4, '190418', '3a9db2b11692126ec53d5fa64b4d2828', 'Erlangga Putra', 'Surabaya', '1999-11-11', 'Laki-laki', '089963258', 'Jl. Patimura 02', 'default.jpg', 1),
(29, 4, '190419', 'd08772bc18f5eb211e9bc98018c48ae4', 'Fanani Abimanyu', 'Mojokerto', '1999-06-03', 'Laki-laki', '085373627', 'Jl. Veteran 118', 'default.jpg', 1),
(30, 4, '190422', '1076e57ce1e589e6d0b48f6a7867d5bd', 'Gilang Permadi', 'Sidoarjo', '2001-08-09', 'Laki-laki', '085678356', 'Jl. Veteran 202', 'default.jpg', 1),
(31, 5, '190501', '735df5792b5b49bec37c4fa72712db11', 'Ananda', 'Malang', '2000-03-09', 'Perempuan', '081282734', 'Jl. Pisang 72', 'default.jpg,', 1),
(32, 5, '190502', '69a92b5ac76e192566f618e41ce1154d', 'Arifany', 'Rembang', '2000-09-09', 'Laki-laki', '081275958', 'Jl.Manggis 07', 'default.jpg', 1),
(33, 5, '190502', '69a92b5ac76e192566f618e41ce1154d', 'Arifany', 'Rembang', '2000-00-00', 'Laki-laki', '081275958', 'Jl.Manggis 07', 'default.jpg', 1),
(34, 5, '190503', '534cbe8287884bc658d368689cb88858', 'Beni', 'Semarang', '2000-10-10', 'Laki-laki', '081748372', 'Jl. Mangga 55', 'default.jpg', 1),
(35, 5, '190504', 'fb9ec59501b866b56573d61b41fc2b36', 'Chindy', 'Lamongan', '2000-09-10', 'Perempuan', '081678653', 'Jl. Diponegoro 112', 'default.jpg', 1),
(36, 5, '190505', '22f90d3e1a7d7aeab5fbcb603ad54243', 'Cinta', 'Mojokerto', '2000-05-04', 'Perempuan', '081546837', 'Jl. Patimura 56', 'default.jpg', 1),
(37, 5, '190506', '6183ce6607e58f11924232ed5030a654', 'Dayang', 'Mojokerto', '2000-11-11', 'Perempuan', '081947635', 'Jl. Veteran 67', 'default.jpg', 1),
(38, 5, '190507', '05cf22dcb225cea0be727d494986f6f9', 'Erna', 'Malang', '2000-07-08', 'Perempuan', '081378987', 'Jl. Surabay 100', 'default.jpg', 1),
(39, 5, '190508', '78ba50f54766a58aca2f5e9b282dd081', 'Fanny', 'Surabaya', '2000-02-02', 'Laki-laki', '081657937', 'Jl. Jombang 009', 'deafult.jpg', 1),
(40, 5, '190509', 'a7fd015cf077166097fac9e29dc9aff8', 'Indri', 'Situbondo', '2000-12-01', 'Perempuan', '081874638', 'Jl. Wilis 50', 'default.jpg', 1),
(41, 7, '1741720030', '299049e928d93bf3ba4af71512e91ab9', 'M. Hudzaifah', 'Bontang', '1999-02-11', 'Laki-laki', '081244445248', 'Jl Hatta', 'default.jpg', 1),
(42, 7, '1741720031', 'f00d8f97614793454fe7f786b650de21', 'M. Fachri', 'Samarinda', '1999-04-21', 'Laki-laki', '081288845247', 'Jl Soekarno', 'default.jpg', 1),
(43, 7, '1741720032', 'ae746cbc8997b6dc44dac986f1c82865', 'M. Rusyda', 'Balikpapan', '1999-01-13', 'Laki-laki', '081555342347', 'Jl Candi Mendut', 'default.jpg', 1),
(44, 7, '1741720033', '9a022e5957941c21dc411654df5285da', 'Hayu Qomariah', 'Sangatta', '1999-03-12', 'Perempuan', '081177745678', 'Jl Batu', 'default.jpg', 1),
(45, 7, '1741720034', '46b5a2fc1402fc7361966219a31da85f', 'Yuthika Hesti', 'Berau', '1999-02-14', 'Perempuan', '0812123448888', 'Jl Perisai', 'default.jpg', 1),
(46, 7, '1741720035', '07d22d1fbcefe8881f747ad621af2655', 'Alya Faradilla', 'Palangkaraya', '1999-02-15', 'Perempuan', '081333348876', 'Jl Veteran', 'default.jpg', 1),
(47, 7, '1741720036', '9516c37433269439419576c3ca756997', 'Syifa Hafidha', 'Banjarmasin', '1999-03-03', 'Perempuan', '0812123332146', 'Jl Serigala', 'default.jpg', 1),
(48, 7, '1741720037', 'ab92fe88a1d11b1c5e120267f88cf32d', 'Addiena Aulia', 'Martapura', '1999-05-02', 'Perempuan', '081212348871', 'Jl Harimau', 'default.jpg', 1),
(49, 7, '1741720038', 'acf4f183de8b32ee821250d6473f26d1', 'Ibrahim Pratama', 'Yogyakarta', '1999-02-07', 'Laki-laki', '081214566778', 'Jl Bagau', 'default.jpg', 1),
(50, 7, '1741720039', 'c3b42c9969a445f4fcb4c1d068bf0805', 'Rizki Priyansyah', 'Bandung', '1999-12-30', 'Laki-laki', '081212988078', 'Jl Bage', 'default.jpg', 1),
(51, 8, '1741720020', '86bae3f126ec2bad4f26ecc5ce6d1f21', 'M. Haidar', 'Bontang', '1999-01-11', 'Laki-laki', '081212345248', 'Jl Gunung Arjuna', 'default.jpg', 1),
(52, 8, '1741720021', '2da3efabedae36cbde607270e0f7b15e', 'M. Ichsan', 'Samarinda', '1999-02-21', 'Laki-laki', '081212345247', 'Jl Bogor', 'default.jpg', 1),
(53, 8, '1741720022', '909e098b86427f1a6e1f06c6c8eadf26', 'M. Titan', 'Balikpapan', '1999-03-13', 'Laki-laki', '081212342347', 'Jl Matahari', 'default.jpg', 1),
(54, 8, '1741720023', 'd6f7ce77e967e792efbdb9193896104d', 'Kasfianti Zulhaenah', 'Sangatta', '1999-05-12', 'Perempuan', '081124645678', 'Jl Rampal', 'default.jpg', 1),
(55, 8, '1741720024', 'aa7a89ab49ad26597e3879f5c95633b2', 'Khusnul Khotimah', 'Berau', '1999-03-17', 'Perempuan', '0812123444678', 'Jl Perisai', 'default.jpg', 1),
(56, 8, '1741720025', '1240e67e3555629c59e7e8c59ab96681', 'Ailsa Rahma', 'Palangkaraya', '1999-06-15', 'Perempuan', '081212348876', 'Jl Veteran', 'default.jpg', 1),
(57, 8, '1741720026', '8fd6e53608a903145c1e2a178b9de79a', 'Najunda Sari', 'Banjarmasin', '1999-04-07', 'Perempuan', '0812123452146', 'Jl Ahmad Yani', 'default.jpg', 1),
(58, 8, '1741720027', '2bf15631967d0955f93b185eb9c5acff', 'Alma Anisa', 'Martapura', '1999-07-03', 'Perempuan', '081212347631', 'Jl Persatuan', 'default.jpg', 1),
(59, 8, '1741720028', '218640e9c974750f37a7ee88b428189d', 'Fauzi Ahmad', 'Yogyakarta', '1999-08-02', 'Laki-laki', '081212556778', 'Jl L.A Sucipto', 'default.jpg', 1),
(60, 8, '1741720029', '0353a72d05f5ba16dde06aeb6f1bf5db', 'Agung Valerry', 'Bandung', '1999-12-09', 'Laki-laki', '081212789078', 'Jl Bungur', 'default.jpg', 1),
(61, 10, '1904601', 'c0e30caf92743060dd3784a263a1cc4e', 'Angga Sandhika', 'Sidoarjo', '2000-11-19', 'Laki-laki', '0842199082', 'Jl. Soekarno Hatta 20/C-4', 'default.jpg', 2),
(62, 10, '1904602', 'de973c39d8ed0a9f315abdc48daf3948', 'Bagas Tri Pitaka', 'Malang', '2000-01-10', 'Laki-laki', '0842154667', 'Jl. Pattimura 20/F-10', 'default.jpg', 2),
(63, 10, '1904603', '628af5cf7093f24fd30e3711fd6773c6', 'Belinda Sasmita', 'Malang', '2000-02-02', 'Perempuan', '0842143343', 'Jl. Soekarno Hatta 20/D-11', 'default.jpg', 2),
(64, 10, '1904604', 'a48cee1fe713242d341831b1387ad956', 'Bulqis Citra Mahayu', 'Probolinggo', '2000-04-21', 'Perempuan', '0842165553', 'Jl. Garuda 10/G', 'default.jpg', 2),
(65, 10, '1904605', '4e73c8ed9e6f337dece2505b30a452d3', 'Bella Nadira Putri', 'Surabaya', '2000-08-25', 'Perempuan', '0842153221', 'Jl. Agus Salim 5/C', 'default.jpg', 2),
(66, 10, '19079906', '824e1bb1f2884fe3f5886cc3f5bade47', 'Bianca Shania', 'Jember', '2000-03-19', 'Perempuan', '0821312355', 'Perum Joyogrand F/20', 'default.jpg', 2),
(67, 10, '19079907', '2933c62a2b83deed6e0f69572cd91899', 'Caroline Swastika', 'Surabaya', '2000-05-10', 'Perempuan', '082151512', 'Perum Cahaya Lestari B/11', 'default.jpg', 2),
(68, 10, '19079908', '2e7231859a9138e679037e47d0f1c07a', 'Cakra Aminoto', 'Surabaya', '2000-12-15', 'Laki-laki', '0853132215', 'Perum Lestari B/25', 'default.jpg', 2),
(69, 10, '19046020', '60453fdd004247f721f96ef3d1e727a7', 'Diko Risma', 'Pekalongan', '2000-02-20', 'Perempuan', '0856324234', 'Perum Cahaya Lestari B/20', 'default.jpg', 2),
(70, 10, '19079909', '4641b28693c311969a7a0c20beb719be', 'Dendian Wahyu', 'Gresik', '2000-02-15', 'Laki-laki', '08123124', 'NGanjuk', 'default.jpg', 2),
(71, 11, '19079910', '60453fdd004247f721f96ef3d1e727a7', 'Devina Risma', 'Pekalongan', '2000-02-20', 'Perempuan', '0856324234', 'Perum Cahaya Lestari B/20', 'default.jpg', 2),
(72, 11, '19046011', 'c0e30caf92743060dd3784a263a1cc4e', 'Aryo Sandhika', 'Sidoarjo', '2000-11-19', 'Laki-laki', '0842199082', 'Jl. Soekarno Hatta 20/C-4', 'default.jpg', 2),
(73, 11, '19046012', 'de973c39d8ed0a9f315abdc48daf3948', 'Bolda Tri Pitaka', 'Malang', '2000-01-10', 'Laki-laki', '0842154667', 'Jl. Pattimura 20/F-10', 'default.jpg', 2),
(74, 11, '19046013', '628af5cf7093f24fd30e3711fd6773c6', 'Bianca Sasmita', 'Malang', '2000-02-02', 'Perempuan', '0842143343', 'Jl. Soekarno Hatta 20/D-11', 'default.jpg', 2),
(75, 11, '19046014', 'a48cee1fe713242d341831b1387ad956', 'Bella Citra Mahayu', 'Probolinggo', '2000-04-21', 'Perempuan', '0842165553', 'Jl. Garuda 10/G', 'default.jpg', 2),
(76, 11, '19046015', '4e73c8ed9e6f337dece2505b30a452d3', 'Bella Nadira Putri', 'Surabaya', '2000-08-25', 'Perempuan', '0842153221', 'Jl. Agus Salim 5/C', 'default.jpg', 2),
(77, 11, '19046016', '824e1bb1f2884fe3f5886cc3f5bade47', 'Bhero Shania', 'Jember', '2000-03-19', 'Perempuan', '0821312355', 'Perum Joyogrand F/20', 'default.jpg', 2),
(78, 11, '19046017', '2933c62a2b83deed6e0f69572cd91899', 'Chantika Swastika', 'Surabaya', '2000-05-10', 'Perempuan', '082151512', 'Perum Cahaya Lestari B/11', 'default.jpg', 2),
(79, 11, '19046018', '2e7231859a9138e679037e47d0f1c07a', 'Cakra Sebastian', 'Surabaya', '2000-12-15', 'Laki-laki', '0853132215', 'Perum Lestari B/25', 'default.jpg', 2),
(80, 11, '19046019', '4641b28693c311969a7a0c20beb719be', 'Deri Wahyu', 'Gresik', '2000-05-11', 'Laki-laki', '08123123', 'Pejagan', 'default.jpg', 2),
(81, 13, '1741720151', '3224cac9362d3b3ed186a55dc327e553', 'Aditya Ramadhan', 'Bekasi Selatan', '1999-02-09', 'Laki-laki', '08569861111', 'Jalan Bunga Sekar No 15', 'default.jpg', 2),
(82, 13, '1741720152', '9067db70b86dddafa2f39389e5d0265d', 'Aldo Detrian', 'Jakarta Barat', '2000-03-19', 'Laki-laki', '08569862222', 'Jalan KebaratBaratan No B4', 'default.jpg', 2),
(83, 13, '1741720153', 'c296d642a09404604a530df5192c3992', 'Bayu Pramata', 'Bekasi Utara', '1998-12-25', 'Laki-laki', '08569863333', 'Jalan SilihBerganti No 14', 'default.jpg', 2),
(84, 13, '1741720154', 'b6132a4d307492411bf5379617ffbf4e', 'Cyntia Bella', 'Jakarta Timur', '2000-01-19', 'Perempuan', '08569864444', 'Jalan Priuk Keras No 2A', 'default.jpg', 2),
(85, 13, '1741720155', 'cf05531ed086f4fbb0afc9f2007af502', 'Dhea Putri Ayu', 'Tangerang Selatan', '1999-04-25', 'Perempuan', '08569865555', 'Jalan Keindahan No 3', 'default.jpg', 2),
(86, 13, '1741720156', '35a29b2d26580215e789deb942795ede', 'Endah Mega Putri', 'Bogor', '1999-07-16', 'Perempuan', '08569866666', 'Jalan Padepokan Blok C No 7', 'default.jpg', 2),
(87, 13, '1741720157', 'f273c4462e1ef42792bb98b5452a0de7', 'Fatimah Azzahra', 'Bekasi Selatan', '2000-09-11', 'Perempuan', '08569867777', 'Jalan Pekayon Blok A No 1', 'default.jpg', 2),
(88, 13, '1741720158', '2b75c30ebf1242b0dbed4b51616fafff', 'Handayani Sinaga', 'Jakarta Utara', '1999-02-18', 'Perempuan', '08569868888', 'Jalan Serangkai No 3', 'default.jpg', 2),
(89, 13, '1741720159', '1531084a4ade6e1dcb2ab171edc8b50e', 'Kresna Aditya Putranto', 'Bekasi Selatan', '1999-12-12', 'Laki-laki', '08569869999', 'Jalan Dareal No 2', 'default.jpg', 2),
(90, 13, '1741720160', 'b9064b63e8552b2f615d75ef0a4eb630', 'Muhammad Hidayat', 'Jakarta Pusat', '1999-09-25', 'Laki-laki', '08569861010101010', 'Jalan Ketapel Blok C No 3', 'default.jpg', 2),
(91, 14, '1741720161', '02a00929364af39821f515527287c4eb', 'Achamd Martin', 'Bekasi Utara', '1999-02-16', 'Laki-laki', '08569871111', 'Jalan Teratai No 15', 'default.jpg', 2),
(92, 14, '1741720162', '78ea7830ea4e7d825f66a33805dc3136', 'Bagus Cahaya', 'Bandung', '1999-03-19', 'Laki-laki', '08569872222', 'Jalan Khas No B4', 'default.jpg', 2),
(93, 14, '1741720163', '8103797fa21a3878342c3ea9fbc777c0', 'Badrul Munir', 'Bekasi Utara', '1998-12-25', 'Laki-laki', '08569873333', 'Jalan Cerah No C7', 'default.jpg', 2),
(94, 14, '1741720164', 'c80dc4daf7772cb82d9a9745dadf58e6', 'Dinda Putri', 'Jakarta Timur', '2000-01-19', 'Perempuan', '08569874444', 'Jalan Ramah No 8', 'default.jpg', 2),
(95, 14, '1741720165', '6bdbadcd01f5ad3ef28f054476169c4e', 'Faris Irfan', 'Jogja', '1999-04-25', 'Laki-laki', '08569875555', 'Jalan Istimewa No 3', 'default.jpg', 2),
(96, 14, '1741720166', '0d58ff4efd47be4b2b5bb5fb5d6a0ece', 'Fathan Putra', 'Jakarta Timur', '1999-07-16', 'Laki-laki', '08569876666', 'Jalan Keputraan No 10', 'default.jpg', 2),
(97, 14, '1741720167', '9ce52b94c33bfde7437b3fa5faa25ede', 'Guntur Halilintar', 'Jakarta Selatan', '1998-02-11', 'Laki-laki', '08569877777', 'Jalan Kekayaan Blok C No 2', 'default.jpg', 2),
(98, 14, '1741720168', '49d8a997cd82ce0b64133ec02a707a3b', 'Lestari Ayyu', 'Jakarta Utara', '1999-02-26', 'Perempuan', '08569878888', 'Jalan Cantik No D3', 'default.jpg', 2),
(99, 14, '1741720169', '54b4406cd5afb20249efe42e62789dcc', 'Rizal Muzaffar', 'Bekasi Selatan', '1999-05-09', 'Laki-laki', '08569879999', 'Jalan Dareal No 2', 'default.jpg', 2),
(100, 14, '1741720170', '6a449a985f2d2e323688aa4fbd8d4bb6', 'Zahra Ajeng', 'Bekasi Selatan', '1999-02-25', 'Perempuan', '08569871010101010', 'Jalan Pondok Indah C No 3', 'default.jpg', 2),
(101, 15, '1903001', '2b84d32ed7d1b83f2c01762b3d507a50', 'Lisa Aini Bonita', 'Malang', '1998-11-01', 'Perempuan', '082146233221', 'Jl Vision', 'default.jpg', 2),
(102, 15, '1903002', '82d6a0ae5886aa3cd968b18a69b617cd', 'Bagas Ayu Purnomo', 'Malang', '1998-11-09', 'Laki-laki', '087132614221', 'Jl Supratman', 'default.jpg', 2),
(103, 15, '1903003', '6f6c34697abf44455f84c7be42ced401', 'Budi Sudarsono ', 'Sumenep', '1999-12-28', 'Laki-laki', '085182233721', 'Jl Ketombe', 'default.jpg', 2),
(104, 15, '1903004', '24b3b407fe49f4a13043addd5be66bcf', 'I Putu Pitaloka', 'Denpasar', '2000-02-19', 'Laki-laki', '081130291328', 'Jl Laut Biru', 'default.jpg', 2),
(105, 15, '1903005', '749a977a1e6984dabae0237eda887429', 'Dono Kasino Indro', 'Jakarta', '1997-01-01', 'Laki-laki', '089127964223', 'Jl Warkop Dki', 'default.jpg', 2),
(106, 15, '1903006', '28e00b2b4c0ad069ae38c3d114b4632a', 'Elly Mihara', 'Gresik', '1998-05-19', 'Perempuan', '082138574182', 'Jl Bajol', 'default.jpg', 2),
(107, 15, '1903007', 'fe732d92c5bd82bb533f5b3b53ef9094', 'Elisa Lolita', 'Kediri', '1998-01-23', 'Perempuan', '082272296292', 'Jl Inginkusapa', 'default.jpg', 2),
(108, 15, '1903008', '9d5ebe2b166cacae16a31a41e54930b8', 'Emanuel Adebayor', 'Jayapura', '1998-06-12', 'Laki-laki', '082332253321', 'Jl Cemburu Buta', 'default.jpg', 2),
(109, 15, '1903009', 'f076974a3cfc91a88e0584c2751493bc', 'Hidayat Noval', 'Malang', '1998-01-31', 'Laki-laki', '081162829231', 'Jl Bintara', 'default.jpg', 2),
(110, 15, '1903010', '73a263b1bb78c0672fc72161cf098657', 'Hilal Arifin', 'Malang', '1999-03-01', 'Laki-laki', '082132504233', 'Jl Bunga Mawar', 'default.jpg', 2),
(111, 16, '1903111', '082b5d2bf8834675f06e53a1f37edfc9', 'Almilinda Islami', 'Pamekasan', '1998-12-31', 'Perempuan', '083141597191', 'Jl Kunang-Kunang', 'default.jpg', 2),
(112, 16, '1903112', 'ef480c6d06a801cc98303385af7483cf', 'Aska Ardison', 'Jambi', '1998-12-29', 'Laki-laki', '085780417381', 'Jl Thanos', 'default.jpg', 2),
(113, 16, '1903113', '58ccc721464f588f99ba227c17c4de50', 'Citra Indri', 'Lamongan', '1999-11-11', 'Perempuan', '082162882123', 'Jl Akasi', 'default.jpg', 2),
(114, 16, '1903114', '1508e6fdeca26ad93589cff09b2d17db', 'Darmatho Leandro', 'Malang', '1999-12-19', 'Laki-laki', '0822324339269', 'Jl Kuning Sperma', 'default.jpg', 2),
(115, 16, '1903115', '2a89823bfba73a073e7b1a9613bd321d', 'Desi Karmila', 'Solo', '1999-09-10', 'Perempuan', '082127361199', 'Jl Pisang Kipas', 'default.jpg', 2),
(116, 16, '1903116', '777d27ed130135df0be4cedf00367c3d', 'Jihan Audy', 'Surabaya', '1998-02-28', 'Perempuan', '083457294181', 'Jl Sisimangaraja', 'default.jpg', 2),
(117, 16, '1903117', '4fec2f0d591aeb468bd67f7b3c0ba7a4', 'Karina Wahyuni', 'Blitar', '1998-11-02', 'Perempuan', '082132098290', 'Jl Saktijaya', 'default.jpg', 2),
(118, 16, '1903118', '54b38d4f254373a66eee2e16153663e7', 'Sholeh Abdi Jaya', 'Sampang', '1998-07-17', 'Laki-laki', '083151783029', 'Jl Bunga Andong', 'default.jpg', 2),
(119, 16, '1903119', '194fec71ca5594baf3e1b1eb153ee856', 'Sholihin Putra', 'Malang', '1998-05-13', 'Laki-laki', '082132292987', 'Jl Singaraja', 'default.jpg', 2),
(120, 16, '1903120', 'c8075f324a1b8b59cf01108d6d81b031', 'Yessi Amdini', 'Malang', '1999-08-18', 'Perempuan', '082432200092', 'Jl Bunga Melati', 'default.jpg', 2);

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
(1, '2019'),
(2, '2020'),
(3, '2021');

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
  ADD PRIMARY KEY (`id_bulan`),
  ADD KEY `FK_BULAN_SEM` (`id_semester`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `FK_JADWAL` (`id_jurusan`);

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
  ADD KEY `FK_NILAI_SEMESTER` (`id_semester`),
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
  ADD PRIMARY KEY (`id_semester`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `FK_KELAS_SISWA` (`id_kelas`),
  ADD KEY `FK_JURUSAN_SISWA` (`id_jurusan`);

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
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id_semester` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `spp`
--
ALTER TABLE `spp`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  MODIFY `id_tahun_ajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bulan`
--
ALTER TABLE `bulan`
  ADD CONSTRAINT `FK_BULAN_SEM` FOREIGN KEY (`id_semester`) REFERENCES `semester` (`id_semester`);

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `FK_JADWAL` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`);

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
  ADD CONSTRAINT `FK_NILAI_SEMESTER` FOREIGN KEY (`id_semester`) REFERENCES `semester` (`id_semester`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_NILAI_SISWA` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `FK_JURUSAN_SISWA` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE,
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
