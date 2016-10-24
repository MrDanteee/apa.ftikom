-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2015 at 08:12 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id_admin` int(10) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'ftik admin', 'admin', 'f5ac9eddb5b770535015bb3e1644c712');

-- --------------------------------------------------------

--
-- Table structure for table `tb_aslab`
--

CREATE TABLE IF NOT EXISTS `tb_aslab` (
  `id_aslab` int(3) NOT NULL AUTO_INCREMENT,
  `nama_aslab` varchar(100) NOT NULL,
  `nim_aslab` varchar(20) NOT NULL,
  `matkul_aslab` varchar(100) NOT NULL,
  `username_aslab` varchar(100) NOT NULL,
  `password_aslab` varchar(100) NOT NULL,
  PRIMARY KEY (`id_aslab`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tb_aslab`
--

INSERT INTO `tb_aslab` (`id_aslab`, `nama_aslab`, `nim_aslab`, `matkul_aslab`, `username_aslab`, `password_aslab`) VALUES
(4, '', '', 'Bahasa Pemr', 'rusikah', 'fe29c56042545353eb7424645dccf744'),
(5, '', '', 'Bahasa Pemrograman', 'rusi', '8a9a72b88be84f73c3ed3d4fc505a02a'),
(6, 'rusikah', '1115015079', 'Bahasa Pemrograman', 'yoo', '18a4f14661b9bf03d0f954b4758cf216'),
(7, 'Eka', '1315015120', 'Algoritma dan Pemrograman', 'eka', '17a32e827370a22ecb2af33f9b899996');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE IF NOT EXISTS `tb_dosen` (
  `id_dosen` int(10) NOT NULL AUTO_INCREMENT,
  `nama_dosen` varchar(100) NOT NULL,
  `nip_dosen` varchar(18) NOT NULL,
  `jk_dosen` varchar(10) NOT NULL,
  `email_dosen` varchar(100) NOT NULL,
  `notelp_dosen` varchar(14) NOT NULL,
  PRIMARY KEY (`id_dosen`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`id_dosen`, `nama_dosen`, `nip_dosen`, `jk_dosen`, `email_dosen`, `notelp_dosen`) VALUES
(3, 'Budi', '981729837498', 'pria', 'adf@adf.com', '098198751987'),
(4, '', '', '', '', ''),
(5, '', '', '', '', ''),
(6, 'sika', '111111890', 'Pria', 'sika@gmail.com', '092345678'),
(7, 'Wahyu', '12341234', 'Pria', 'asd@f.asdf', '012341234');

-- --------------------------------------------------------

--
-- Table structure for table `tb_informasi`
--

CREATE TABLE IF NOT EXISTS `tb_informasi` (
  `id_info` int(5) NOT NULL AUTO_INCREMENT,
  `judul_info` varchar(150) NOT NULL,
  `isi_info` text NOT NULL,
  `tanggal_info` date NOT NULL,
  PRIMARY KEY (`id_info`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_informasi`
--

INSERT INTO `tb_informasi` (`id_info`, `judul_info`, `isi_info`, `tanggal_info`) VALUES
(2, 'Pendaftaran Praktikum', 'Sebagai <b>mahasiswa aktif</b> ftikom unmul dan mengambil mata kuliah yang \r\nmemiliki praktikum, wajib mendaftarkan dirinya dalam <span class="wysiwyg-color-maroon"><u>sistem portal \r\npraktikum</u></span> berbasis website. Hanya dapat diakses secara lokal dengan \r\n<i>mengkoneksikan</i> perangakat ke wifi kampus.<br>', '2015-02-06'),
(3, 'Mahasiswa Baru', '<div>Bagi mahasiswa baru, <b>harap</b> mengikuti tes sesuai panduan yang telah diberlakukan pada tahun ajaran baru ini.</div>', '2015-02-06');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `tb_mahasiswa` (
  `id_mhs` int(5) NOT NULL AUTO_INCREMENT,
  `nama_mhs` varchar(100) NOT NULL,
  `nim_mhs` varchar(20) NOT NULL,
  `username_mhs` varchar(100) NOT NULL,
  `password_mhs` varchar(100) NOT NULL,
  `ttl_mhs` varchar(100) NOT NULL,
  `email_mhs` varchar(100) NOT NULL,
  `notelp_mhs` varchar(14) NOT NULL,
  `angkatan_mhs` varchar(5) NOT NULL,
  `alamat_mhs` text NOT NULL,
  PRIMARY KEY (`id_mhs`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id_mhs`, `nama_mhs`, `nim_mhs`, `username_mhs`, `password_mhs`, `ttl_mhs`, `email_mhs`, `notelp_mhs`, `angkatan_mhs`, `alamat_mhs`) VALUES
(1, 'Budi', '1315015111', 'budi', '3074d9b7ba24b27d9ae573e9c021a487', '3 Februari 1994', 'budidi@budi.com', '098198751987', '2013', 'Jln. Oke budi'),
(9, 'Eka', '1315015120', 'eka', '17a32e827370a22ecb2af33f9b899996', '9 Mei 1994', 'eka@eka.com', '0876512348964', '2013', 'Jln. Eka '),
(10, 'Joko', '1215015103', 'joko', '7606ddb586f29af7829637053ff15e9d', '26 September 1994', 'joko@joko.com', '091283741234', '2012', 'Jln. Joko mantap'),
(11, 'rusikah', '1115015079', 'rusikah', 'f3b6de1b097a0a41e9f7040fb21a29ef', '15 Agustus 1993', 'rusikahsika@ymail.com', '081256000000', '2012', 'jl. kkn'),
(12, 'sika', '1115015089', 'nita', 'c5e952a9129b7f70484f6f929ce20ec0', '12 Januari 1998', 'nita@gmail.com', '081256020890', '2012', 'jl.semesta');

-- --------------------------------------------------------

--
-- Table structure for table `tb_matkul`
--

CREATE TABLE IF NOT EXISTS `tb_matkul` (
  `id_matkul` int(4) NOT NULL AUTO_INCREMENT,
  `nama_matkul` varchar(100) NOT NULL,
  `semester_matkul` int(2) NOT NULL,
  `dosen_matkul` varchar(100) NOT NULL,
  PRIMARY KEY (`id_matkul`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tb_matkul`
--

INSERT INTO `tb_matkul` (`id_matkul`, `nama_matkul`, `semester_matkul`, `dosen_matkul`) VALUES
(2, 'Pemrograman Mobile', 5, 'Budi'),
(3, 'Wireless dan Network Security', 6, 'Budi'),
(4, 'Algoritma dan Pemrograman', 5, 'Budi'),
(5, 'Pararel Komputer & Sistem Terdistribusi', 5, 'Budi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_modul`
--

CREATE TABLE IF NOT EXISTS `tb_modul` (
  `id_modul` int(10) NOT NULL AUTO_INCREMENT,
  `judul_modul` varchar(100) NOT NULL,
  `file_modul` varchar(200) NOT NULL,
  `matkul_modul` varchar(150) NOT NULL,
  `deskripsi_modul` text NOT NULL,
  `semester_modul` int(2) NOT NULL,
  PRIMARY KEY (`id_modul`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tb_modul`
--

INSERT INTO `tb_modul` (`id_modul`, `judul_modul`, `file_modul`, `matkul_modul`, `deskripsi_modul`, `semester_modul`) VALUES
(11, 'Modul 1', '20150131104542medan.jpg', 'Algoritma Dasar', 'dont leave me', 2),
(12, 'Modul 2', '20150131104829tugas html.docx', 'Algoritma Dasar', 'Dasar-dasar pemrograman', 1),
(13, 'sistem berkas', '20150207085033543e1876d5ae99855ce33f23cec98c90.jpg', 'Algoritma Dasar', '', 1),
(14, 'yte', '20150207085117ConEmuPack.140422.7z', 'Algoritma Dasar', '', 5),
(15, 'Grafika Komputer', '20150208044613Aljabar Linier.doc', 'Pararel Komputer & Sistem Terdistribusi', '', 3),
(16, '34344rt', '2015020804483002. party rock.mp3', 'Pararel Komputer & Sistem Terdistribusi', '', 3),
(17, 'lks', '20150208045240Aljabar Linier.doc', 'Wireless dan Network Security', '', 3),
(18, 'bagus', '20150208080941Kartu Kontrol.docx', 'Pemrograman Mobile', 'okeoke', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_penjadwalan`
--

CREATE TABLE IF NOT EXISTS `tb_penjadwalan` (
  `id_jadwal` int(4) NOT NULL AUTO_INCREMENT,
  `hari_jadwal` varchar(20) NOT NULL,
  `jam_jadwal` varchar(12) NOT NULL,
  `ruang_jadwal` varchar(10) NOT NULL,
  `kelompok_jadwal` varchar(2) DEFAULT NULL,
  `matkul_jadwal` varchar(100) NOT NULL,
  `asisten_jadwal` varchar(100) NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=93 ;

--
-- Dumping data for table `tb_penjadwalan`
--

INSERT INTO `tb_penjadwalan` (`id_jadwal`, `hari_jadwal`, `jam_jadwal`, `ruang_jadwal`, `kelompok_jadwal`, `matkul_jadwal`, `asisten_jadwal`) VALUES
(1, 'SENIN', '07.30-08.30', 'SOFTWARE', '4', 'Pemrograman Mobile', 'rusikah'),
(2, 'SENIN', '07.30-08.30', 'HARDWARE', '1', 'Pemrograman Mobile', 'Budi'),
(3, 'SENIN', '08.35-09.35', 'SOFTWARE', '2', 'Algoritma dan Pemrograman', 'rusikah'),
(4, 'SENIN', '08.35-09.35', 'HARDWARE', '2', 'Wireless dan Network Security', 'rusikah'),
(5, 'SENIN', '09.40-10.40', 'SOFTWARE', '2', 'Bahasa Pemrograman', 'rusikah'),
(6, 'SENIN', '09.40-10.40', 'HARDWARE', '6', 'Pararel Komputer & Sistem Terdistribusi', 'Budi'),
(7, 'SENIN', '10.45-11.45', 'SOFTWARE', NULL, '', ''),
(8, 'SENIN', '10.45-11.45', 'HARDWARE', NULL, '', ''),
(9, 'SENIN', '11.50-12.50', 'SOFTWARE', NULL, '', ''),
(10, 'SENIN', '11.50-12.50', 'HARDWARE', NULL, '', ''),
(11, 'SENIN', '12.55-13.55', 'SOFTWARE', NULL, '', ''),
(12, 'SENIN', '12.55-13.55', 'HARDWARE', NULL, '', ''),
(13, 'SENIN', '14.00-15.00', 'SOFTWARE', NULL, '', ''),
(14, 'SENIN', '14.00-15.00', 'HARDWARE', NULL, '', ''),
(15, 'SENIN', '15.05-16.05', 'SOFTWARE', NULL, '', ''),
(16, 'SENIN', '15.05-16.05', 'HARDWARE', NULL, '', ''),
(17, 'SENIN', '16.05-17.05', 'SOFTWARE', NULL, '', ''),
(18, 'SENIN', '16.05-17.05', 'HARDWARE', NULL, '', ''),
(19, 'SENIN', '17.05-18.05', 'SOFTWARE', NULL, '', ''),
(20, 'SENIN', '17.05-18.05', 'HARDWARE', NULL, '', ''),
(21, 'SELASA', '07.30-08.30', 'SOFTWARE', '', '', ''),
(22, 'SELASA', '07.30-08.30', 'HARDWARE', '6', 'Pararel Komputer & Sistem Terdistribusi', 'rusikah'),
(23, 'SELASA', '08.35-09.35', 'SOFTWARE', NULL, '', ''),
(24, 'SELASA', '08.35-09.35', 'HARDWARE', NULL, '', ''),
(25, 'SELASA', '09.40-10.40', 'SOFTWARE', NULL, '', ''),
(26, 'SELASA', '09.40-10.40', 'HARDWARE', NULL, '', ''),
(27, 'SELASA', '10.45-11.45', 'SOFTWARE', NULL, '', ''),
(28, 'SELASA', '10.45-11.45', 'HARDWARE', NULL, '', ''),
(29, 'SELASA', '11.50-12.50', 'SOFTWARE', NULL, '', ''),
(30, 'SELASA', '11.50-12.50', 'HARDWARE', NULL, '', ''),
(31, 'SELASA', '12.55-13.55', 'SOFTWARE', NULL, '', ''),
(32, 'SELASA', '12.55-13.55', 'HARDWARE', NULL, '', ''),
(33, 'SELASA', '14.00-15.00', 'SOFTWARE', NULL, '', ''),
(34, 'SELASA', '14.00-15.00', 'HARDWARE', NULL, '', ''),
(35, 'SELASA', '15.05-16.05', 'SOFTWARE', NULL, '', ''),
(36, 'SELASA', '15.05-16.05', 'HARDWARE', NULL, '', ''),
(37, 'SELASA', '16.05-17.05', 'SOFTWARE', NULL, '', ''),
(38, 'SELASA', '16.05-17.05', 'HARDWARE', NULL, '', ''),
(39, 'SELASA', '17.05-18.05', 'SOFTWARE', NULL, '', ''),
(40, 'SELASA', '17.05-18.05', 'HARDWARE', NULL, '', ''),
(41, 'RABU', '07.30-08.30', 'SOFTWARE', '3', 'Pemrograman Mobile', 'Budi'),
(42, 'RABU', '07.30-08.30', 'HARDWARE', '', '', ''),
(43, 'RABU', '08.35-09.35', 'SOFTWARE', NULL, '', ''),
(44, 'RABU', '08.35-09.35', 'HARDWARE', NULL, '', ''),
(45, 'RABU', '09.40-10.40', 'SOFTWARE', NULL, '', ''),
(46, 'RABU', '09.40-10.40', 'HARDWARE', NULL, '', ''),
(47, 'RABU', '10.45-11.45', 'SOFTWARE', NULL, '', ''),
(48, 'RABU', '10.45-11.45', 'HARDWARE', NULL, '', ''),
(49, 'RABU', '11.50-12.50', 'SOFTWARE', NULL, '', ''),
(50, 'RABU', '11.50-12.50', 'HARDWARE', NULL, '', ''),
(51, 'RABU', '12.55-13.55', 'SOFTWARE', NULL, '', ''),
(52, 'RABU', '12.55-13.55', 'HARDWARE', NULL, '', ''),
(53, 'RABU', '14.00-15.00', 'SOFTWARE', NULL, '', ''),
(54, 'RABU', '14.00-15.00', 'HARDWARE', NULL, '', ''),
(55, 'RABU', '15.05-16.05', 'SOFTWARE', NULL, '', ''),
(56, 'RABU', '15.05-16.05', 'HARDWARE', NULL, '', ''),
(57, 'RABU', '16.05-17.05', 'SOFTWARE', NULL, '', ''),
(58, 'RABU', '16.05-17.05', 'HARDWARE', NULL, '', ''),
(59, 'RABU', '17.05-18.05', 'SOFTWARE', NULL, '', ''),
(60, 'RABU', '17.05-18.05', 'HARDWARE', NULL, '', ''),
(61, 'KAMIS', '07.30-08.30', 'SOFTWARE', '5', 'Wireless dan Network Security', 'Budi'),
(62, 'KAMIS', '07.30-08.30', 'HARDWARE', NULL, '', ''),
(63, 'KAMIS', '08.35-09.35', 'SOFTWARE', NULL, '', ''),
(64, 'KAMIS', '08.35-09.35', 'HARDWARE', NULL, '', ''),
(65, 'KAMIS', '09.40-10.40', 'SOFTWARE', NULL, '', ''),
(66, 'KAMIS', '09.40-10.40', 'HARDWARE', NULL, '', ''),
(67, 'KAMIS', '10.45-11.45', 'SOFTWARE', NULL, '', ''),
(68, 'KAMIS', '10.45-11.45', 'HARDWARE', NULL, '', ''),
(69, 'KAMIS', '11.50-12.50', 'SOFTWARE', NULL, '', ''),
(70, 'KAMIS', '11.50-12.50', 'HARDWARE', NULL, '', ''),
(71, 'KAMIS', '12.55-13.55', 'SOFTWARE', NULL, '', ''),
(72, 'KAMIS', '12.55-13.55', 'HARDWARE', NULL, '', ''),
(73, 'KAMIS', '14.00-15.00', 'SOFTWARE', NULL, '', ''),
(74, 'KAMIS', '14.00-15.00', 'HARDWARE', NULL, '', ''),
(75, 'KAMIS', '15.05-16.05', 'SOFTWARE', NULL, '', ''),
(76, 'KAMIS', '15.05-16.05', 'HARDWARE', NULL, '', ''),
(77, 'KAMIS', '16.05-17.05', 'SOFTWARE', NULL, '', ''),
(78, 'KAMIS', '16.05-17.05', 'HARDWARE', NULL, '', ''),
(79, 'KAMIS', '17.05-18.05', 'SOFTWARE', NULL, '', ''),
(80, 'KAMIS', '17.05-18.05', 'HARDWARE', NULL, '', ''),
(81, 'JUMAT', '07.30-08.30', 'SOFTWARE', NULL, '', ''),
(82, 'JUMAT', '07.30-08.30', 'HARDWARE', NULL, '', ''),
(83, 'JUMAT', '08.35-09.35', 'SOFTWARE', NULL, '', ''),
(84, 'JUMAT', '08.35-09.35', 'HARDWARE', NULL, '', ''),
(85, 'JUMAT', '09.40-10.40', 'SOFTWARE', NULL, '', ''),
(86, 'JUMAT', '09.40-10.40', 'HARDWARE', NULL, '', ''),
(87, 'JUMAT', '10.45-11.45', 'SOFTWARE', NULL, '', ''),
(88, 'JUMAT', '10.45-11.45', 'HARDWARE', NULL, '', ''),
(89, 'JUMAT', '14.00-15.00', 'SOFTWARE', NULL, '', ''),
(90, 'JUMAT', '14.00-15.00', 'HARDWARE', NULL, '', ''),
(91, 'JUMAT', '15.05-16.05', 'SOFTWARE', NULL, '', ''),
(92, 'JUMAT', '15.05-16.05', 'HARDWARE', '1', 'Algoritma dan Pemrograman', 'rusikah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_periode`
--

CREATE TABLE IF NOT EXISTS `tb_periode` (
  `id_periode` int(4) NOT NULL AUTO_INCREMENT,
  `nama_periode` varchar(10) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL,
  PRIMARY KEY (`id_periode`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_periode`
--

INSERT INTO `tb_periode` (`id_periode`, `nama_periode`, `tahun_ajaran`) VALUES
(1, 'GENAP', '2014/2015');

-- --------------------------------------------------------

--
-- Table structure for table `tb_praktikum`
--

CREATE TABLE IF NOT EXISTS `tb_praktikum` (
  `id_praktikum` int(7) NOT NULL AUTO_INCREMENT,
  `nim_praktikum` varchar(15) NOT NULL,
  `matkul_praktikum` varchar(100) NOT NULL,
  `kelompok_praktikum` varchar(5) NOT NULL,
  `nilai_1` varchar(4) NOT NULL,
  `nilai_2` varchar(4) NOT NULL,
  `nilai_3` varchar(4) NOT NULL,
  `nilai_4` varchar(4) NOT NULL,
  `nilai_5` varchar(4) NOT NULL,
  `nilai_6` varchar(4) NOT NULL,
  `nilai_7` varchar(4) NOT NULL,
  `nilai_8` varchar(4) NOT NULL,
  `nilai_9` varchar(4) NOT NULL,
  `nilai_10` varchar(4) NOT NULL,
  `nilai_hasil` varchar(4) NOT NULL,
  `periode` varchar(10) NOT NULL,
  PRIMARY KEY (`id_praktikum`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tb_praktikum`
--

INSERT INTO `tb_praktikum` (`id_praktikum`, `nim_praktikum`, `matkul_praktikum`, `kelompok_praktikum`, `nilai_1`, `nilai_2`, `nilai_3`, `nilai_4`, `nilai_5`, `nilai_6`, `nilai_7`, `nilai_8`, `nilai_9`, `nilai_10`, `nilai_hasil`, `periode`) VALUES
(4, '1315015111', 'Pemrograman Mobile', '1', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '1315015111', 'Wireless dan Network Security', '2', '', '', '', '', '', '', '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
