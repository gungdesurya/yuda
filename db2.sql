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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `kategori` */

insert  into `kategori`(`id`,`kategori`) values 
(1,'Administrasi'),
(2,'Akunting'),
(3,'Asuransi'),
(4,'Customer Service'),
(5,'Design'),
(6,'Finance'),
(7,'Engineering-Industri'),
(8,'Perbankan'),
(9,'Perhotelan'),
(10,'Properti'),
(11,'Security-Safety Control'),
(12,'TI (Softwere)'),
(13,'TI (Webmaster/SEO)'),
(14,'TI (Network/Admin/Support)'),
(15,'Rumah Sakit'),
(16,'Sales');

/*Table structure for table `lowongan` */

DROP TABLE IF EXISTS `lowongan`;

CREATE TABLE `lowongan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_perusahaan` int(11) DEFAULT NULL,
  `nama_loker` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  `range_gaji` varchar(30) DEFAULT NULL,
  `keterampilan` text,
  `pendidikan` varchar(10) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `pengalaman_kerja` int(2) DEFAULT NULL,
  `kategori_pekerjaan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

/*Data for the table `lowongan` */

insert  into `lowongan`(`id`,`id_perusahaan`,`nama_loker`,`deskripsi`,`range_gaji`,`keterampilan`,`pendidikan`,`jurusan`,`pengalaman_kerja`,`kategori_pekerjaan`) values 
(20,17,'Fullstuck Developer','Deskripsi Lowongan','0 - 1000000','[\"4\",\"5\",\"12\"]','SD',NULL,1,3),
(21,17,'Fullstuck Developer','Deskripsi Lowongan','0 - 1000000','[\"4\",\"8\"]','S1','Ilmu Komputer',4,5);

/*Table structure for table `pelamar` */

DROP TABLE IF EXISTS `pelamar`;

CREATE TABLE `pelamar` (
  `id` bigint(63) NOT NULL AUTO_INCREMENT,
  `nama` varchar(87) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `taggallahir` date DEFAULT NULL,
  `jk` char(3) DEFAULT NULL,
  `alamat` text,
  `tinggibadan` decimal(14,0) DEFAULT NULL,
  `beratbadan` decimal(14,0) DEFAULT NULL,
  `jabatan_ingin` varchar(300) DEFAULT NULL,
  `jabatan_pokok` varchar(300) DEFAULT NULL,
  `jabatan_sampingan` varchar(300) DEFAULT NULL,
  `keterampilan` text,
  `pendidikan` text,
  `jurusan` text,
  `tahun` text,
  `ijazah` text,
  `kendala` text,
  `keunggulan` text,
  `tanggaldaftar` datetime DEFAULT NULL,
  `sim` varchar(60) DEFAULT NULL,
  `cacatbadan` varchar(765) DEFAULT NULL,
  `cacatlain` varchar(765) DEFAULT NULL,
  `statsus_bekerja` char(39) DEFAULT NULL,
  `rangegaji` varchar(87) DEFAULT NULL,
  `pengalaman_kerja` int(2) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=25053 DEFAULT CHARSET=utf8mb4;

/*Data for the table `pelamar` */

insert  into `pelamar`(`id`,`nama`,`email`,`password`,`foto`,`taggallahir`,`jk`,`alamat`,`tinggibadan`,`beratbadan`,`jabatan_ingin`,`jabatan_pokok`,`jabatan_sampingan`,`keterampilan`,`pendidikan`,`jurusan`,`tahun`,`ijazah`,`kendala`,`keunggulan`,`tanggaldaftar`,`sim`,`cacatbadan`,`cacatlain`,`statsus_bekerja`,`rangegaji`,`pengalaman_kerja`,`agama`,`kewarganegaraan`,`pekerjaan_sekarang`,`pekerja_status`,`desa`,`usaha_sektor`,`nikah_status`,`pekerjaan_terakhir`,`pendidikan_terakhir`,`pendidikannonformal_terakhir`) values 
(25052,'Surya Kusuma','gungde@gmail.com','4297f44b13955235245b2497399d7a93','e42c8bdd46dc7ebaf80d11f63da46dd1.jpg','1995-11-20','l','Jalan Blambangan Gg 1 No 1',NULL,NULL,'',NULL,NULL,'[\"4\",\"8\",\"9\",\"12\"]','[\"SD\",\"SMP\",\"SMA\\/SMK\",\"S1\"]','[\"IPA\",\"Komputer\"]','[\"1\",\"1\",\"1\",\"1\"]','[\"378c0cdd5d5c5b05ef7897bd093dada6.gif\",\"be526f3c201b64469a787e42bde22b36.png\",\"1a77b6441e719008ffd044a9bdc32e52.jpg\",\"b6ecdf9a0044fbb2227f436ba60d0159.jpg\"]',NULL,NULL,NULL,'081234123123',NULL,NULL,NULL,'5000000',5,'hindu',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

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

/*Data for the table `pendidikan_formal` */

/*Table structure for table `pendidikan_non_formal` */

DROP TABLE IF EXISTS `pendidikan_non_formal`;

CREATE TABLE `pendidikan_non_formal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `pendidikan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pendidikan_non_formal` */

/*Table structure for table `pendidikan_non_formal_list` */

DROP TABLE IF EXISTS `pendidikan_non_formal_list`;

CREATE TABLE `pendidikan_non_formal_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pendidikan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `pendidikan_non_formal_list` */

insert  into `pendidikan_non_formal_list`(`id`,`nama_pendidikan`) values 
(3,'Bisa Nyetir'),
(4,'MsOffice Word'),
(5,'MsOffice Excel'),
(6,'MsOffice Power Point'),
(7,'Adobe Photoshop'),
(8,'Adobe Illustrator'),
(9,'Adobe In Design'),
(10,'Adobe Premier Pro'),
(11,'Adobe After Effect'),
(12,'CorelDraw');

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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

/*Data for the table `perusahaan` */

insert  into `perusahaan`(`id`,`email`,`password`,`nama_perusahaan`,`deskripsi`,`bidang_perusahaan`,`logo`,`alamat`,`kode_pos`,`provinsi`,`kabupaten`,`no_hp`,`nama_kontak`,`jabatan_perusahaan`,`akta_pendirian_perusahaan`,`siup`,`tdp`,`situ`,`izin_lainnya`) values 
(17,'abc@gmail.com','4297f44b13955235245b2497399d7a93','Perusahaan ABC','Deskripsi Perusahaan',1,'aed88c35dd5fa7157eeff36a8ce2f5a6.jpg','Jalan Blambangan','08123','Bal','Badung','081234567','Budi','Resepsionis','2f2a776be701ece6f3fecdf62fe1d257.jpg','fe4855540b5b46936236609c4344231f.jpg','601b4837a3f217b8df1892a548ee9bf4.jpg','85d32407d23243ab1b9c6b49cbc46eb4.jpg','b7704c36896c360422649d47520cbd76.jpg');

/*Table structure for table `spesialisasi` */

DROP TABLE IF EXISTS `spesialisasi`;

CREATE TABLE `spesialisasi` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama_spesialisasi` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `spesialisasi` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
