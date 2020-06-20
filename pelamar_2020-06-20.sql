# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.4.8-MariaDB)
# Database: pelamar
# Generation Time: 2020-06-20 10:24:16 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table kategori
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `kategori` WRITE;
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;

INSERT INTO `kategori` (`id`, `kategori`)
VALUES
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

/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table lowongan
# ------------------------------------------------------------

DROP TABLE IF EXISTS `lowongan`;

CREATE TABLE `lowongan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_perusahaan` int(11) DEFAULT NULL,
  `nama_loker` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `range_gaji` varchar(30) DEFAULT NULL,
  `keterampilan` text DEFAULT NULL,
  `pendidikan` varchar(10) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `pengalaman_kerja` int(2) DEFAULT NULL,
  `kategori_pekerjaan` int(11) DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `lowongan` WRITE;
/*!40000 ALTER TABLE `lowongan` DISABLE KEYS */;

INSERT INTO `lowongan` (`id`, `id_perusahaan`, `nama_loker`, `deskripsi`, `range_gaji`, `keterampilan`, `pendidikan`, `jurusan`, `pengalaman_kerja`, `kategori_pekerjaan`, `date`, `jenis_kelamin`)
VALUES
	(23,20,'DIBUTUHKAN PERSONAL ASISSTANT UNTUK PT. MAMA & LEON','PT Mama & Leon bergerak dibidang retail, garment dan boutique saat ini membutuhkan kandidat untuk mengisi posisi \"Personal Assistant\" dengan persyaratan sebagai berikut : \r\n\r\n1. Wanita, usia maksimal 30 tahun \r\n\r\n2. Minimal lulusan Diploma/Sarjana \r\n\r\n3. Berpengalaman minimal selama 1 tahun di bidang yang sama \r\n\r\n4. Mampu mengoperasikan komputer (Ms. Office: Ms word, Ms Excel, Ms Power point)\r\n\r\n5. Mempunyai kendaraan sendiri \r\n\r\n6. Sabar, Teliti, Cekatan, Jujur, Rajin, Rapi, Desiplin, dan Bertanggung jawab\r\n\r\n7. Memiliki kemampuan komunikasi yang baik\r\n\r\n \r\n\r\nJob desk : \r\n\r\n1. Melakukan Tugas Administrasi secara umum \r\n\r\n2. Mengatur dan Membuat Perjanjian, yang berhubungan dengan kegiatan Direktur\r\n\r\n3. Terbiasa memfilling file atau dokumen yang akan berkaitan dengan perusahaan untuk kemudian diarsip dengan rapi \r\n\r\n4. Menghandle semua hal yang berkaitan dengan kegiatan Direktur \r\n\r\n5. Bisa bekerjasama dalam team dan menyukai kegiatan yang berhubungan dengan Fashion ','1000000 - 2500000','[\"4\",\"5\",\"6\"]','S1','Ekonomi Management',1,1,NULL,NULL),
	(24,21,'Dicari Administrasi / Accounting','Dibutuhkan Administrasi / Accounting dengan ketentuan sbb:\r\n\r\n1. Perempuan\r\n\r\n2. Pendidikan minimal D1 Jurusan Akutansi\r\n\r\n3. Mampu mengoperasikan Microsoft Word dan Excel dengan baik\r\n\r\n4. Mengerti tentang perpajakan \r\n\r\n5. Rajin, disiplin, dan bertanggung jawab\r\n\r\n6. Memiliki pengalaman di bidang administrasi / accounting selama 1 tahun\r\n ','1000000 - 2500000','[\"4\",\"5\"]','S1','Akuntansi',1,2,NULL,NULL),
	(25,21,'Dicari customer service','Dibutuhkan segera customer service','2500000 - 5000000','[\"4\",\"5\",\"6\"]','S1','Ekonomi Management',2,4,NULL,NULL),
	(26,21,'Dicari staff TI Network','Dicari staff TI Network','1000000 - 2500000','[\"14\"]','S1','Ilmu Komputer',1,14,NULL,NULL),
	(27,21,'Dicari staff design grafis','Dicari staff design grafis','2500000 - 5000000','[\"7\",\"8\",\"9\",\"12\"]','S1','Design Grafis',1,5,NULL,NULL),
	(28,20,'Dibutuhkan Accounting','Dicari staff Accounting berpengalaman','2500000 - 5000000','[\"4\",\"5\",\"6\"]','S1','Ekonomi Akuntansi',1,2,NULL,NULL),
	(29,20,'Dicari segera security','Dicari segera security','1000000 - 2500000','[\"4\",\"5\"]','SMA/SMK',NULL,0,11,NULL,NULL),
	(30,17,'Fullstuck Developer','Deskripsi Lowongan','0 - 1000000','[]','SMA/SMK',NULL,1,1,NULL,NULL);

/*!40000 ALTER TABLE `lowongan` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table pelamar
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pelamar`;

CREATE TABLE `pelamar` (
  `id` bigint(63) NOT NULL AUTO_INCREMENT,
  `nama` varchar(87) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `taggallahir` date DEFAULT NULL,
  `jk` char(3) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `tinggibadan` decimal(14,0) DEFAULT NULL,
  `beratbadan` decimal(14,0) DEFAULT NULL,
  `jabatan_ingin` varchar(300) DEFAULT NULL,
  `jabatan_pokok` varchar(300) DEFAULT NULL,
  `jabatan_sampingan` varchar(300) DEFAULT NULL,
  `keterampilan` text DEFAULT NULL,
  `pendidikan` text DEFAULT NULL,
  `jurusan` text DEFAULT NULL,
  `tahun` text DEFAULT NULL,
  `ijazah` text DEFAULT NULL,
  `kendala` text DEFAULT NULL,
  `keunggulan` text DEFAULT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `pelamar` WRITE;
/*!40000 ALTER TABLE `pelamar` DISABLE KEYS */;

INSERT INTO `pelamar` (`id`, `nama`, `email`, `password`, `foto`, `taggallahir`, `jk`, `alamat`, `tinggibadan`, `beratbadan`, `jabatan_ingin`, `jabatan_pokok`, `jabatan_sampingan`, `keterampilan`, `pendidikan`, `jurusan`, `tahun`, `ijazah`, `kendala`, `keunggulan`, `tanggaldaftar`, `sim`, `cacatbadan`, `cacatlain`, `statsus_bekerja`, `rangegaji`, `pengalaman_kerja`, `agama`, `kewarganegaraan`, `pekerjaan_sekarang`, `pekerja_status`, `desa`, `usaha_sektor`, `nikah_status`, `pekerjaan_terakhir`, `pendidikan_terakhir`, `pendidikannonformal_terakhir`)
VALUES
	(25052,'Surya Kusuma','gungde@gmail.com','4297f44b13955235245b2497399d7a93','e42c8bdd46dc7ebaf80d11f63da46dd1.jpg','1995-11-20','l','Jalan Blambangan Gg 1 No 1',NULL,NULL,'',NULL,NULL,'[\"4\",\"8\",\"9\",\"12\"]','[\"SD\",\"SMP\",\"SMA\\/SMK\",\"S1\"]','[\"IPA\",\"Komputer\"]','[\"1\",\"1\",\"1\",\"1\"]','[\"378c0cdd5d5c5b05ef7897bd093dada6.gif\",\"be526f3c201b64469a787e42bde22b36.png\",\"1a77b6441e719008ffd044a9bdc32e52.jpg\",\"b6ecdf9a0044fbb2227f436ba60d0159.jpg\"]',NULL,NULL,NULL,'081234123123',NULL,NULL,NULL,'5000000',5,'hindu',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(25053,'Yuda Juniantara','yudajuniantara@gmail.com','4297f44b13955235245b2497399d7a93','365e536c03c296599f529761a8cfb356.png','1996-06-12','l','Jalan Tukad Pancoran Gang XI no.3A',NULL,NULL,'',NULL,NULL,'[\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"13\"]','[\"SD\",\"SMP\",\"SMA\\/SMK\",\"S1\"]','[\"IPA\",\"Teknik Informatika\"]','[\"1\",\"1\",\"1\",\"1\"]','[\"c2bcabe3fd9b6b14e07cd631d5aa7816.png\",\"69b622cc7e8d37568034fd052570beb7.png\",\"3c29c999245ce95915a85ccacf26251c.png\",\"1c54b1455b236b805fd1fd062301be2c.png\"]',NULL,NULL,NULL,'081234123123',NULL,NULL,NULL,'5000000',2,'hindu',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(25054,'Kadek','kadek@gmail.com','4297f44b13955235245b2497399d7a93','31480a63b400767333583b6f187436a1.png','1995-11-20','l','Jalan Blambangan Gg 1 No 1',NULL,NULL,'',NULL,NULL,'[\"7\",\"8\",\"9\",\"12\"]','[\"SD\",\"SMP\",\"SMA\\/SMK\",\"S1\"]','[\"IPA\",\"Komputer\"]','[\"1\",\"1\",\"1\",\"1\"]','[\"5ac61202e22f92813908921062685006.png\",\"56c826e930f757027cf3c5359186022e.png\",\"b048081ea699492f1f3c7ca5f500e46c.png\",\"b32c7979dde0906ca7404ff6ea5c7112.png\"]',NULL,NULL,NULL,'081234123123',NULL,NULL,NULL,'4000000',1,'hindu',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `pelamar` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table pendidikan_formal
# ------------------------------------------------------------

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



# Dump of table pendidikan_non_formal
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pendidikan_non_formal`;

CREATE TABLE `pendidikan_non_formal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `pendidikan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table pendidikan_non_formal_list
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pendidikan_non_formal_list`;

CREATE TABLE `pendidikan_non_formal_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pendidikan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `pendidikan_non_formal_list` WRITE;
/*!40000 ALTER TABLE `pendidikan_non_formal_list` DISABLE KEYS */;

INSERT INTO `pendidikan_non_formal_list` (`id`, `nama_pendidikan`)
VALUES
	(4,'MsOffice Word'),
	(5,'MsOffice Excel'),
	(6,'MsOffice Power Point'),
	(7,'Adobe Photoshop'),
	(8,'Adobe Illustrator'),
	(9,'Adobe In Design'),
	(10,'Adobe Premier Pro'),
	(11,'Adobe After Effect'),
	(12,'CorelDraw'),
	(13,'Pemrograman Web'),
	(14,'Jaringan Komputer');

/*!40000 ALTER TABLE `pendidikan_non_formal_list` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table perusahaan
# ------------------------------------------------------------

DROP TABLE IF EXISTS `perusahaan`;

CREATE TABLE `perusahaan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `nama_perusahaan` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `bidang_perusahaan` int(6) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `perusahaan` WRITE;
/*!40000 ALTER TABLE `perusahaan` DISABLE KEYS */;

INSERT INTO `perusahaan` (`id`, `email`, `password`, `nama_perusahaan`, `deskripsi`, `bidang_perusahaan`, `logo`, `alamat`, `kode_pos`, `provinsi`, `kabupaten`, `no_hp`, `nama_kontak`, `jabatan_perusahaan`, `akta_pendirian_perusahaan`, `siup`, `tdp`, `situ`, `izin_lainnya`)
VALUES
	(17,'abc@gmail.com','4297f44b13955235245b2497399d7a93','Perusahaan ABC','Deskripsi Perusahaan',1,'aed88c35dd5fa7157eeff36a8ce2f5a6.jpg','Jalan Blambangan','08123','Bal','Badung','081234567','Budi','Resepsionis','2f2a776be701ece6f3fecdf62fe1d257.jpg','fe4855540b5b46936236609c4344231f.jpg','601b4837a3f217b8df1892a548ee9bf4.jpg','85d32407d23243ab1b9c6b49cbc46eb4.jpg','b7704c36896c360422649d47520cbd76.jpg'),
	(18,'abc@gmail.com','4297f44b13955235245b2497399d7a93','Perusahaan ABC','Deskripsi Perusahaan',1,'543d6d6ed1f1fbe0d02dec76491d2ef9.png','Jalan Blambangan','08123','Bal','Badung','081234567','Budi','Resepsionis','72fd7ebe469872dac694567333837a98.png','3623a5945f51277d1f59c7d2cf532e45.png','0f1e2d547acfd2c06636801bd0456202.png','0f94549d6637d938aaee6dd1c759a13e.png','00a8890a8d2e1b7c1559e9faadc2d535.png'),
	(19,'abc@gmail.com','4297f44b13955235245b2497399d7a93','Perusahaan ABC','Deskripsi Perusahaan',1,'7706c1e3f6b85ffabc0cee7f8a00ba07.png','Jalan Blambangan','08123','Bal','Badung','081234567','Budi','Resepsionis','57e4a734cead9931b461b933f228a5c0.png','187e780ee932ab248641050baf944228.png','50407836cbd69cb703cbe2811e5d5866.png','d2b8c2bd5b79d0c138dcc2206a6a94f1.png','a43aa771000743a42e257863675d23a9.png'),
	(20,'secretary@mamaleon.com','4297f44b13955235245b2497399d7a93','PT Crown Capital Development','PT Crown Capital Development bergerak dibidang retail, garment dan boutique',2,'5dd29e5c492ef81976b753a0f2468784.png','Jalan By pass ngurah rai no 248 D Sanur, ruko mangghala sutera (sebelah ruko Bali Bon Bon Sanur)','80225','Bal','Denpas','0361 270493 ','PT Crown Capital Development','Resepsionis','6c2471dd68d3ed48688226356836dc54.png','4c557f556dc15a14b2c2d50065e2d870.png','f6388cc11d86838ebff07fdeabb8b25c.png','004ebdb88d40db0e5ae5fd2b054515f0.png','cb38085f05179fb38fd6b16157e792d0.png'),
	(21,'saranasejahtera16@yahoo.com','4297f44b13955235245b2497399d7a93','PT. Sarana Sejahtera Bali','Deskripsi Perusahaan',2,'558b0a778f72281d252145b7e6b0da6e.png','Jl. Tukad Pancoran II, Gang IIX Lestari No. 31 Panjer, Denpasar - Bali','80225','Bal','Denpas','03614748966','-','-','b971d2e2ad2478f099c533897979e566.png','5a28bacfc32c94baf302c1cd1e3e1250.png','464d7c3ae6c43f7a728adb93595a6e37.png','ff11722711c18748bf5ae878d76e8f8f.png','54b31abfaa4957870c28bfa3d8a1009a.png');

/*!40000 ALTER TABLE `perusahaan` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table spesialisasi
# ------------------------------------------------------------

DROP TABLE IF EXISTS `spesialisasi`;

CREATE TABLE `spesialisasi` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama_spesialisasi` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
