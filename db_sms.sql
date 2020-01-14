-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2020 at 03:24 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

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
  `tanggal` date NOT NULL,
  `kasus` enum('Narkoba','Merokok','Pacaran','Hamil','Bolos') NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `point` int(3) NOT NULL,
  `nis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bk`
--

INSERT INTO `tb_bk` (`id_bk`, `tanggal`, `kasus`, `deskripsi`, `point`, `nis`) VALUES
(6, '2020-01-11', 'Narkoba', 'iinufnvjfnvjnfhvbhdfvhfbvhfvfbvhbfvhbfhvbfuhvbfvhuf', 50, 9459),
(7, '2020-01-11', 'Hamil', 'menghamili kakak kelas', 69, 9459),
(8, '2020-01-11', 'Narkoba', 'Mabuk ekstasi, pil anjing, orang tua, ngefly bos...mantap slurr', 123, 9459),
(13, '2020-01-11', 'Narkoba', 'jldfds', 78, 9119);

-- --------------------------------------------------------

--
-- Table structure for table `tb_keterangan`
--

CREATE TABLE `tb_keterangan` (
  `id_ket` int(11) NOT NULL,
  `tanggal_ket` date NOT NULL,
  `jenis_ket` enum('Ijin','Sakit') NOT NULL,
  `foto_ket` varchar(255) NOT NULL,
  `nis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_keterangan`
--

INSERT INTO `tb_keterangan` (`id_ket`, `tanggal_ket`, `jenis_ket`, `foto_ket`, `nis`) VALUES
(6, '2020-01-13', 'Sakit', '12012020191031bj.jpg', 9459),
(7, '0000-00-00', 'Ijin', '130120200158027418f8ff0b116e8c5320b03c54ea1439.jpg', 9459),
(8, '2020-01-13', 'Sakit', '13012020020005bj.jpg', 9119),
(9, '2020-01-14', 'Sakit', '13012020204727bj.jpg', 9459);

-- --------------------------------------------------------

--
-- Table structure for table `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL,
  `jurusan` enum('IPA','IPS','Umum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mapel`
--

INSERT INTO `tb_mapel` (`id_mapel`, `nama_mapel`, `jurusan`) VALUES
(1, 'Olahraga', 'IPA'),
(2, 'Olahraga', 'IPS'),
(3, 'Bahasa Indoneisa', 'IPA'),
(4, 'Bahasa Indonesia', 'IPS'),
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
  `username_ortu` varchar(50) NOT NULL,
  `password_ortu` varchar(100) NOT NULL,
  `nis` int(11) NOT NULL,
  `nik` varchar(15) NOT NULL,
  `foto_ktp` varchar(255) NOT NULL,
  `kode` enum('user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ortu`
--

INSERT INTO `tb_ortu` (`username_ortu`, `password_ortu`, `nis`, `nik`, `foto_ktp`, `kode`) VALUES
('ortuwafa', '111', 9119, '123', '7b540d0d90a3578905c00927dcebd76f.jpg', 'user'),
('ortudidi', '1111111', 9459, '123456789', '', 'user'),
('ortu', '222', 9999, '222', 'bj.jpg', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `jml_tagihan` int(11) NOT NULL,
  `status` enum('LUNAS') NOT NULL,
  `jenis_pembayaran` enum('SPP Tahun 1','SPP Tahun 2','SPP Tahun 3','Study Tour') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_pembayaran`, `nis`, `tgl_pembayaran`, `jml_tagihan`, `status`, `jenis_pembayaran`) VALUES
(1, 9459, '2020-01-11', 2000000, 'LUNAS', 'SPP Tahun 1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nis` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `jk_siswa` enum('Laki - laki','Perempuan') NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `jurusan` enum('IPA','IPS','Umum') NOT NULL,
  `kelas` enum('X . MIPA . 1','X . MIPA . 2','X . MIPA . 3','XI . MIPA . 1','XI . MIPA . 2','XI . MIPA . 3','XII . MIPA . 1','XII . MIPA . 2','XII . MIPA . 3','X . IPS . 1','XI . IPS . 1','XII . IPS . 1','') NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat_siswa` varchar(100) NOT NULL,
  `kode` enum('User') NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`nis`, `username`, `password`, `nama_siswa`, `jk_siswa`, `tempat_lahir`, `tanggal_lahir`, `jurusan`, `kelas`, `email`, `alamat_siswa`, `kode`, `foto`) VALUES
(9119, 'wafa', '1111', 'Muhammad Ali Wafa', 'Laki - laki', 'Jember', '07 . Januari . 1999', 'IPS', 'XII . IPS . 1', 'reksispega@gmail.com', 'Kab. Jember Kec. Bangsal', 'User', 'wafa.jpg'),
(9459, 'didi', '01012000', 'Rahmansyah Putra Pribadi', 'Laki - laki', 'Indonesia . Jawa Timur . Surabaya', '01 . Januari . 2000', 'IPA', 'XII . MIPA . 1', 'didigg74@gmail.com', 'Kab. Bondowoso Kec. Wonosari Desa. Sumber Kalong RT/RW . 017/009', 'User', 'ddi.jfif'),
(9999, 'mita', '222', 'Rizqiana Amita Sari', 'Perempuan', 'Balung', '25 . Februari . 1999', 'IPS', 'XII . IPS . 1', 'acenya3@gmail.com', 'Balung Pinggiran', 'User', '');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `tb_keterangan`
--
ALTER TABLE `tb_keterangan`
  ADD PRIMARY KEY (`id_ket`);

--
-- Indexes for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`id_mapel`);

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
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_bk`
--
ALTER TABLE `tb_bk`
  MODIFY `id_bk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_keterangan`
--
ALTER TABLE `tb_keterangan`
  MODIFY `id_ket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_ortu`
--
ALTER TABLE `tb_ortu`
  ADD CONSTRAINT `tb_ortu_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `tb_siswa` (`nis`);

--
-- Constraints for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD CONSTRAINT `tb_pembayaran_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `tb_siswa` (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
