/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.1.32-MariaDB : Database - pelamar
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pelamar` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `pelamar`;

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `lowongan` */

DROP TABLE IF EXISTS `lowongan`;

CREATE TABLE `lowongan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama_loker` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  `range_gaji` varchar(30) DEFAULT NULL,
  `keterampilan` text,
  `pendidikan` varchar(10) DEFAULT NULL,
  `jurusan` int(6) DEFAULT NULL,
  `pengalaman_kerja` int(2) DEFAULT NULL,
  `kategori_pekerjaan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Table structure for table `pelamar` */

DROP TABLE IF EXISTS `pelamar`;

CREATE TABLE `pelamar` (
  `id` bigint(63) NOT NULL AUTO_INCREMENT,
  `nama` varchar(87) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `taggallahir` date DEFAULT NULL,
  `jk` char(3) DEFAULT NULL,
  `alamat` text,
  `tinggibadan` decimal(14,0) DEFAULT NULL,
  `beratbadan` decimal(14,0) DEFAULT NULL,
  `jabatan_ingin` varchar(300) DEFAULT NULL,
  `jabatan_pokok` varchar(300) DEFAULT NULL,
  `jabatan_sampingan` varchar(300) DEFAULT NULL,
  `kendala` text,
  `keunggulan` text,
  `tanggaldaftar` datetime DEFAULT NULL,
  `sim` varchar(60) DEFAULT NULL,
  `cacatbadan` varchar(765) DEFAULT NULL,
  `cacatlain` varchar(765) DEFAULT NULL,
  `statsus_bekerja` char(39) DEFAULT NULL,
  `rangegaji` varchar(87) DEFAULT NULL,
  `agama` varchar(90) DEFAULT NULL,
  `kewarganegaraan` varchar(150) DEFAULT NULL,
  `pekerjaan_sekarang` varchar(150) DEFAULT NULL,
  `pekerja_status` varchar(150) DEFAULT NULL,
  `desa` varchar(150) DEFAULT NULL,
  `usaha_sektor` varchar(150) DEFAULT NULL,
  `nikah_status` varchar(150) DEFAULT NULL,
  `pekerjaan_terakhir` varchar(300) DEFAULT NULL,
  `pendidikan_terakhir` varchar(150) DEFAULT NULL,
  `pendidikannonformal_terakhir` varchar(765) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25044 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `pendidikan_formal` */

DROP TABLE IF EXISTS `pendidikan_formal`;

CREATE TABLE `pendidikan_formal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `pendidikan` enum('sd','smp','sma/smk','diploma 1') NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `tahun` int(4) NOT NULL,
  `ijazah` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `pendidikan_non_formal` */

DROP TABLE IF EXISTS `pendidikan_non_formal`;

CREATE TABLE `pendidikan_non_formal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `pendidikan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `pendidikan_non_formal_list` */

DROP TABLE IF EXISTS `pendidikan_non_formal_list`;

CREATE TABLE `pendidikan_non_formal_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pendidikan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Table structure for table `perusahaan` */

DROP TABLE IF EXISTS `perusahaan`;

CREATE TABLE `perusahaan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `nama_perusahaan` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  `bidang_perusahaan` int(6) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `alamat` text,
  `kode_pos` varchar(6) DEFAULT NULL,
  `provinsi` varchar(3) DEFAULT NULL,
  `kabupaten` varchar(6) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `nama_kontak` varchar(100) DEFAULT NULL,
  `jabatan_perusahaan` varchar(100) DEFAULT NULL,
  `akta_pendirian_perusahaan` varchar(100) DEFAULT NULL,
  `siup` varchar(100) DEFAULT NULL,
  `tdp` varchar(100) DEFAULT NULL,
  `situ` varchar(100) DEFAULT NULL,
  `izin_lainnya` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Table structure for table `spesialisasi` */

DROP TABLE IF EXISTS `spesialisasi`;

CREATE TABLE `spesialisasi` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama_spesialisasi` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
