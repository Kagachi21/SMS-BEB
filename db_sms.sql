-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2020 at 02:37 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_absen_harian`
--

CREATE TABLE `tb_absen_harian` (
  `id` int(6) NOT NULL,
  `nis` varchar(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `status_absen` enum('Hadir','Hadir(Telat)','Tidak Hadir','Pulang') NOT NULL,
  `id_kelas` varchar(5) NOT NULL,
  `type` tinyint(1) DEFAULT NULL COMMENT '1 = datang, 2 = pulang'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_absen_harian`
--

INSERT INTO `tb_absen_harian` (`id`, `nis`, `tanggal`, `status_absen`, `id_kelas`, `type`) VALUES
(2, '7787871', '2020-01-20 00:00:00', 'Hadir', 'x', 1),
(4, '787', '2020-01-20 00:00:00', 'Tidak Hadir', 'xa1', 1),
(5, '7787871', '2020-01-20 00:00:00', 'Hadir', 'xa1', 2),
(6, '787', '2020-01-20 00:00:00', 'Tidak Hadir', 'xa1', 2),
(7, '9459', '2020-01-21 13:40:33', 'Tidak Hadir', 'xiia1', 1),
(8, '9459', '2020-01-21 14:11:20', 'Tidak Hadir', 'xiia1', 2),
(13, '6112', '2020-01-21 15:28:05', 'Hadir', 'xiia2', 1),
(14, '9999', '2020-01-21 15:28:05', 'Hadir', 'xiia2', 1),
(15, '6112', '2020-01-21 15:28:42', 'Pulang', 'xiia2', 2),
(16, '9999', '2020-01-21 15:28:42', 'Pulang', 'xiia2', 2),
(17, '6112', '2020-01-21 18:02:21', 'Pulang', 'xiia2', 1),
(18, '9999', '2020-01-21 18:02:21', 'Pulang', 'xiia2', 1),
(19, '9459', '2020-01-21 18:16:07', 'Hadir', 'xiia1', 1),
(20, '9459', '2020-01-21 18:19:08', 'Pulang', 'xiia1', 2),
(21, '6112', '2020-01-21 23:26:10', 'Pulang', 'xiia2', 2),
(22, '9999', '2020-01-21 23:26:10', 'Pulang', 'xiia2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_absen_pelajaran`
--

CREATE TABLE `tb_absen_pelajaran` (
  `id` int(6) NOT NULL,
  `nis` varchar(11) NOT NULL,
  `id_kelas` varchar(5) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `jam` tinyint(2) NOT NULL,
  `status_absen` enum('Hadir','Izin','Sakit','Alpha') NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_absen_pelajaran`
--

INSERT INTO `tb_absen_pelajaran` (`id`, `nis`, `id_kelas`, `id_mapel`, `nip`, `jam`, `status_absen`, `tanggal`) VALUES
(1, '787', 'xa1', 1, 0, 1, 'Alpha', '2020-01-18 17:00:00'),
(2, '787', 'xa1', 1, 0, 2, 'Izin', '2020-01-18 17:00:00'),
(3, '7787871', 'xa1', 8, 2898298, 1, 'Izin', '2020-01-20 02:39:43'),
(4, '9459', 'xiia1', 6, 111, 1, 'Hadir', '2020-01-21 13:46:23'),
(7, '9459', 'xiia1', 7, 222, 3, 'Hadir', '2020-01-21 14:13:59'),
(8, '6112', 'xiia2', 6, 111, 1, 'Hadir', '2020-01-21 17:46:01'),
(9, '9459', 'xiia1', 8, 333, 2, 'Izin', '2020-01-21 18:11:26'),
(10, '9459', 'xiia1', 8, 333, 4, 'Izin', '2020-01-21 18:23:07'),
(11, '6112', 'xiia2', 8, 333, 2, 'Hadir', '2020-01-21 18:25:09'),
(12, '6112', 'xiia2', 1, 555, 10, 'Hadir', '2020-01-21 23:26:44');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `kode` enum('Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `kode`) VALUES
(1, 'admin1', '1111', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bk`
--

CREATE TABLE `tb_bk` (
  `id_bk` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `jenis` tinyint(1) NOT NULL COMMENT 'sedang, berat, sangat berat',
  `tanggal` date NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `point` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bk`
--

INSERT INTO `tb_bk` (`id_bk`, `nis`, `jenis`, `tanggal`, `deskripsi`, `point`) VALUES
(6, 7787871, 1, '2020-01-11', 'iinufnvjfnvjnfhvbhdfvhfbvhfvfbvhbfvhbfhvbfuhvbfvhuf', 50),
(7, 7787871, 3, '2020-01-11', 'menghamili kakak kelas', 69),
(8, 7787871, 1, '2020-01-11', 'Mabuk ekstasi, pil anjing, orang tua, ngefly bos...mantap slurr', 123),
(13, 787, 1, '2020-01-11', 'jldfds', 78),
(14, 7787871, 2, '2020-01-19', 'berkelahi', 20),
(15, 0, 2, '2020-01-08', 'q', 10),
(16, 0, 2, '2020-01-02', 'merokok', 100),
(17, 0, 2, '2020-01-20', 'Sangat Susah Sekali', 80),
(18, 0, 2, '2020-01-20', 'Aku Cinta Sekali', 80),
(19, 0, 3, '2020-01-21', 'ugggjgkj', 100),
(20, 787, 1, '2020-01-07', 'loncat genteng', 20),
(21, 9459, 2, '2020-01-13', 'duel sama guru', 15),
(22, 9459, 1, '2020-01-21', 'Aku humu', 65),
(23, 6112, 1, '2020-01-21', 'Tidur saat pelajaran', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id` int(6) NOT NULL,
  `nip` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`id`, `nip`, `nama`, `email`, `password`, `alamat`) VALUES
(3, 12345678, 'Ludfy Rahman', 'rahman@gmail.com', '1', '1'),
(4, 111, 'GuruBio', 'bio@gmail.com', '1', 'dmkmdkmlmdaomjdfhjdvjdjdfjbdf'),
(7, 222, 'GuruFisika', 'fisika@gmail.com', '1', 'fffyfyf'),
(8, 333, 'GuruKimia', 'kimia@gmail.com', '1', 'klnncldnnnc\r\n'),
(9, 444, 'GuruIndo', 'indo@gmail.com', '1', 'kjbdkbcbdcbsbj'),
(10, 555, 'GuruOlahraga', 'olahraga@gmail.com', '1', 'jsbdjkbajsadmdnsm');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id` int(6) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `id_kelas` varchar(5) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id`, `nip`, `id_kelas`, `id_mapel`, `hari`, `jam`) VALUES
(1, '2898298', 'xa1', 1, 'Monday', 1),
(5, '98788787', 'xa1', 3, 'Monday', 3),
(10, '111', 'xiia1', 6, 'Tuesday', 1),
(11, '111', 'xiia2', 6, 'Tuesday', 2),
(12, '111', 'xiia3', 6, 'Tuesday', 3),
(13, '222', 'xiia2', 7, 'Tuesday', 1),
(14, '222', 'xiia3', 7, 'Tuesday', 2),
(15, '222', 'xiia1', 7, 'Tuesday', 3),
(16, '333', 'xiia3', 8, 'Tuesday', 1),
(17, '333', 'xiia1', 8, 'Tuesday', 2),
(18, '333', 'xiia2', 8, 'Tuesday', 3),
(19, '111', 'xa1', 6, 'Wednesday', 1),
(20, '111', 'xiia1', 6, 'Wednesday', 1),
(21, '333', 'xiia2', 0, 'Wednesday', 1),
(22, '333', 'xiia2', 8, 'Wednesday', 2),
(23, '555', 'xiia2', 1, 'Wednesday', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id` varchar(5) NOT NULL,
  `nama` varchar(15) NOT NULL,
  `tipe_kelas` enum('IPA','IPS') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id`, `nama`, `tipe_kelas`) VALUES
('xa1', 'X . MIPA . 1', 'IPA'),
('xa2', 'X . MIPA . 2', 'IPA'),
('xa3', 'X . MIPA . 3', 'IPA'),
('xia1', 'XI . MIPA . 1', 'IPA'),
('xia2', 'XI . MIPA . 2', 'IPA'),
('xia3', 'XI . MIPA . 3', 'IPA'),
('xiia1', 'XII . MIPA . 1', 'IPA'),
('xiia2', 'XII . MIPA . 2', 'IPA'),
('xiia3', 'XII . MIPA . 3', 'IPA'),
('xiiis', 'XII . IPS . 1', 'IPS'),
('xiis1', 'XI . IPS . 1', 'IPS'),
('xis1', 'X . IPS . 1', 'IPS');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keterangan`
--

CREATE TABLE `tb_keterangan` (
  `id` int(6) NOT NULL,
  `nis` int(11) NOT NULL,
  `jenis` enum('Ijin','Sakit') NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `foto` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_keterangan`
--

INSERT INTO `tb_keterangan` (`id`, `nis`, `jenis`, `tanggal`, `foto`) VALUES
(6, 787, 'Ijin', '2020-01-21 13:42:30', '787.jpeg'),
(7, 6112, 'Sakit', '2020-01-21 23:28:34', '6112.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` enum('IPA','IPS','Umum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mapel`
--

INSERT INTO `tb_mapel` (`id`, `nama`, `jurusan`) VALUES
(1, 'Olahraga', 'IPA'),
(2, 'Olahraga', 'IPS'),
(3, 'Bahasa Indoneisa', 'IPA'),
(4, 'Bahasa Inggris', 'IPS'),
(6, 'Biologi', 'IPA'),
(7, 'Fisika', 'IPA'),
(8, 'Kimia', 'IPA'),
(9, 'Geografi', 'IPS'),
(10, 'Ekonomi', 'IPS'),
(11, 'Sejarah Indonesia', 'IPS');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ortu`
--

CREATE TABLE `tb_ortu` (
  `nik` varchar(15) NOT NULL,
  `nis` varchar(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `kode` enum('user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ortu`
--

INSERT INTO `tb_ortu` (`nik`, `nis`, `username`, `password`, `kode`) VALUES
('117787', '9459', 'ortudidi', '1', 'user'),
('52342345325', '6112', 'ortudodo', '1', 'user'),
('888', '787', 'rahman', '1', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id` int(6) NOT NULL,
  `nis` varchar(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `jml_tagihan` int(8) NOT NULL,
  `status` varchar(8) NOT NULL DEFAULT 'Lunas',
  `jenis_pembayaran` tinyint(1) NOT NULL COMMENT '''SPP Tahun 1'',''SPP Tahun 2'',''SPP Tahun 3'',''Study Tour''',
  `deskripsi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id`, `nis`, `tanggal`, `jml_tagihan`, `status`, `jenis_pembayaran`, `deskripsi`) VALUES
(4, '9459', '2020-01-21 13:31:39', 10000, 'Lunas', 1, 'lunas'),
(5, '6112', '2020-01-21 23:30:59', 20000, 'Lunas', 2, 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nis` varchar(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jenis_kelamin` tinyint(1) NOT NULL,
  `id_kelas` varchar(5) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `kode` enum('User') DEFAULT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`nis`, `nama`, `email`, `password`, `jenis_kelamin`, `id_kelas`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `no_hp`, `kode`, `foto`) VALUES
('6112', 'Hernando Farazi Herrera', 'nadoot@gmail.com', '1', 1, 'xiia2', 'Nusa Indah ', 'Surabaya', '1999-10-12', '0897738683', NULL, '6112.jpeg'),
('787', 'Mochamad Ludfi Rahman', 'ludfyr@gmail.com', '1', 1, 'xa1', 'bondowoso', 'bondowoso', '1999-12-05', '082331759738', NULL, '787.jpeg'),
('9459', 'Rahmansyah Putra Pribadi', 'rahmansyah@gmail.com', '1', 1, 'xiia1', 'Indonesia . Jawa Timur . Kab Bondowoso . Kec Wonosari . Desa Sumber Kalong . RT/RW 019/007 . Kode Po', 'Surabaya', '2000-01-01', '08990312017', NULL, '9459.jpeg'),
('9999', 'Muhammad Ali Wafa', 'wafa@gmail.com', '1', 1, 'xiia2', 'knknknklmklkkmknk', 'Jember', '2000-01-07', '08990312019', NULL, '9999.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tahun_ajaran`
--

CREATE TABLE `tb_tahun_ajaran` (
  `tahun_ajaran` varchar(10) NOT NULL,
  `awal` date NOT NULL,
  `akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tahun_ajaran`
--

INSERT INTO `tb_tahun_ajaran` (`tahun_ajaran`, `awal`, `akhir`) VALUES
('2019-2020', '2020-01-14', '2020-01-16'),
('2020-2021', '2020-01-17', '2020-01-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_absen_harian`
--
ALTER TABLE `tb_absen_harian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nis` (`nis`),
  ADD KEY `ke_kelas_master1` (`id_kelas`);

--
-- Indexes for table `tb_absen_pelajaran`
--
ALTER TABLE `tb_absen_pelajaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ke_master_kelas` (`id_kelas`),
  ADD KEY `ke_master5` (`nis`),
  ADD KEY `ke_mapel_master` (`id_mapel`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_bk`
--
ALTER TABLE `tb_bk`
  ADD PRIMARY KEY (`id_bk`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_keterangan`
--
ALTER TABLE `tb_keterangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_ortu`
--
ALTER TABLE `tb_ortu`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `ke_kelas_master` (`id_kelas`);

--
-- Indexes for table `tb_tahun_ajaran`
--
ALTER TABLE `tb_tahun_ajaran`
  ADD PRIMARY KEY (`tahun_ajaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_absen_harian`
--
ALTER TABLE `tb_absen_harian`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_absen_pelajaran`
--
ALTER TABLE `tb_absen_pelajaran`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_bk`
--
ALTER TABLE `tb_bk`
  MODIFY `id_bk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_keterangan`
--
ALTER TABLE `tb_keterangan`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
