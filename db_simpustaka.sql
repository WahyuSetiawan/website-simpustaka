/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.5.32 : Database - db_simpustaka
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_simpustaka` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_simpustaka`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(2) NOT NULL,
  `u` varchar(15) NOT NULL,
  `p` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`id`,`u`,`p`) values (1,'admin','admin');

/*Table structure for table `r_config` */

DROP TABLE IF EXISTS `r_config`;

CREATE TABLE `r_config` (
  `id` int(1) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `pimpinan` varchar(100) NOT NULL,
  `pimpinan_nip` varchar(100) NOT NULL,
  `petugas` varchar(100) NOT NULL,
  `petugas_nip` varchar(100) NOT NULL,
  `profil` longtext NOT NULL,
  `denda` int(9) NOT NULL,
  `maks_buku` int(2) NOT NULL,
  `maks_hari` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `r_config` */

insert  into `r_config`(`id`,`nama`,`alamat`,`logo`,`pimpinan`,`pimpinan_nip`,`petugas`,`petugas_nip`,`profil`,`denda`,`maks_buku`,`maks_hari`) values (0,'SMK Bintek Purwokerto','Jl. Pahlawan VI/18 Tanjung, kecamatan Purwokerto kabupaten Banyumas, Jawa Tengah','logo_baru.png','Adam','0000000000000000001','Petugas','0000000000000000001','<div justify;\"=\"\"><ol><li>Perkembangan teknologi informasi dan komunikasi yang begitu cepat dalam\r\ndunia ini, membuat banyak masyarakat sadar akan pentingnya informasi. Media\r\ninformasi dan telekomunikasi merupakan media yang dapat digunakan dalam\r\nproses transaksi informasi. Dengan adanya teknologi informasi dan\r\ntelekomunikasi yang berkembang pesat dalam dunia perpustakaan membuat\r\nperpustakaan menggunakan teknologi dalam proses kegiatannya. Sistem Informasi Perpustakaan adalah sistem aplikasi/software yang digunakan dalam pengelolaan perpustakaan, seperti manajemen data buku, manajemen data anggota, manajemen data transaksi peminjaman, dan lain sebagainya.&nbsp;<br></li><li>Tuntutan kebutuhan pengguna atas\r\npelayanan koleksi secara bersama dan efisiensi waktu dan biaya membuat\r\nperpustakaan SMK Bintek Purwokerto untuk menerapkan sistem informasi di\r\nperpustakaan. Dengan adanya perubahan sistem pelayanan informasi secara\r\nmanual menjadi sistem informasi berbasis web ini diharapkan segala aktivitas\r\nsistem tersebut memberikan kemudahan bagi perpustakaan untuk melakukan\r\nkegiatan melayani pengguna dan memenuhi tuntutan pengguna akan perubahan\r\nlayanan di perpustakaan.<br></li></ol></div>',500,2,7);

/*Table structure for table `r_jenis` */

DROP TABLE IF EXISTS `r_jenis`;

CREATE TABLE `r_jenis` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `r_jenis` */

insert  into `r_jenis`(`id`,`nama`) values (1,'Buku'),(2,'Majalah'),(3,'Surat Kabar'),(4,'E-book'),(5,'CD/DVD'),(6,'Tabloid'),(7,'test');

/*Table structure for table `r_kelas` */

DROP TABLE IF EXISTS `r_kelas`;

CREATE TABLE `r_kelas` (
  `id` int(4) NOT NULL,
  `nama` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `r_kelas` */

insert  into `r_kelas`(`id`,`nama`) values (0,'Karya Umum'),(100,'Filsafat dan psikologi'),(200,'Agama'),(300,'Ilmu sosial'),(400,'Bahasa'),(500,'Sains dan matematika'),(600,'Teknologi'),(700,'Kesenian dan rekreasi'),(800,'Sastra'),(900,'Sejarah dan geografi');

/*Table structure for table `r_libur` */

DROP TABLE IF EXISTS `r_libur`;

CREATE TABLE `r_libur` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `nama` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `r_libur` */

insert  into `r_libur`(`id`,`tanggal`,`nama`) values (1,'2013-08-17','Hari Kemerdekaan Republik Indonesia'),(2,'2013-03-29','Hari Wafat Isa Al Masih');

/*Table structure for table `r_lokasi` */

DROP TABLE IF EXISTS `r_lokasi`;

CREATE TABLE `r_lokasi` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `r_lokasi` */

insert  into `r_lokasi`(`id`,`nama`) values (1,'Rak 1'),(2,'Rak 2'),(3,'Rak 3'),(4,'Rak 4');

/*Table structure for table `t_anggota` */

DROP TABLE IF EXISTS `t_anggota`;

CREATE TABLE `t_anggota` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `agama` enum('Islam','Kristen','Katolik','Hindu','Budha') NOT NULL,
  `tmp_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `foto` varchar(100) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `jenis` enum('Siswa','Guru') NOT NULL,
  `stat` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `t_anggota` */

insert  into `t_anggota`(`id`,`nama`,`alamat`,`jk`,`agama`,`tmp_lahir`,`tgl_lahir`,`foto`,`tgl_daftar`,`jenis`,`stat`) values (1,'Adam','Alamat A','L','Islam','BANDUNG','1978-10-18','','2013-11-03','Siswa','1'),(2,'Ekki','Alamat B','P','Islam','KEDIRI','1984-10-19','','2013-11-03','Siswa','1'),(3,'Evi Indaj','Alamat C','P','Islam','SURABAYA','1985-08-16','','2013-11-03','Siswa','1');

/*Table structure for table `t_buku` */

DROP TABLE IF EXISTS `t_buku`;

CREATE TABLE `t_buku` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `id_kelas` varchar(6) NOT NULL,
  `id_jenis` int(2) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `pengarang` varchar(250) NOT NULL,
  `penerbit` varchar(250) NOT NULL,
  `th_terbit` year(4) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `jml_hal` int(6) NOT NULL,
  `asal_perolehan` varchar(100) NOT NULL,
  `harga` decimal(12,2) NOT NULL,
  `id_lokasi` int(2) NOT NULL,
  `stat` enum('B','RR','RB','H') NOT NULL,
  `stat_pinjam` enum('P','R') NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `tgl_input` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `t_buku` */

insert  into `t_buku`(`id`,`id_kelas`,`id_jenis`,`judul`,`pengarang`,`penerbit`,`th_terbit`,`isbn`,`jml_hal`,`asal_perolehan`,`harga`,`id_lokasi`,`stat`,`stat_pinjam`,`deskripsi`,`tgl_input`) values (1,'600',1,'Pemrograman Web dengan PHP dan MySQL','Bunafit Nugroho','GAVA Media',2007,'1234567890',301,'Pembelian','50000.00',1,'B','P','Membahas tentang pemrograman web dengan bahasa pemrograman PHP dan database MySQL','2013-03-22 00:30:56'),(2,'600',1,'Sistem Informasi Geografis Web dengan Map Server','Ir. Aris Sutendi, M.Kom','Erlangga',2013,'1234567890',345,'Pembelian','780000.00',1,'B','P','Membahas tentang Sistem Informasi Geografis Web dengan Map Server','2013-03-22 00:32:35'),(3,'600',1,'Trik dan Rahasia Membuat Aplikasi Web dengan PHP','Bunafit Nugroho','Gava Media',2007,'978-979-1078-23-8',336,'Pembelian','49000.00',1,'B','P','Panduan serta kumpulan tips dan trik dalam membuat aplikasi berbasis Web dengan PHP','2013-03-26 19:47:49'),(5,'200',1,'Membangun Masyarakat Cendekia Islami','Ahmad Nur Cholis','Maxikom',2013,'1122-77-009-999',142,'Yogjakarta','45.00',1,'B','P','Menjelaskan tentang bagaimana membangun masyarakat cendekia islmai dengan berdasarkan aturan islam','2013-11-09 07:20:09');

/*Table structure for table `t_pengunjung` */

DROP TABLE IF EXISTS `t_pengunjung`;

CREATE TABLE `t_pengunjung` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `nama` varchar(150) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `jenis` enum('Mahasiswa','Dosen') NOT NULL,
  `perlu` varchar(255) NOT NULL,
  `saran` varchar(255) NOT NULL,
  `tgl` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

/*Data for the table `t_pengunjung` */

insert  into `t_pengunjung`(`id`,`nama`,`jk`,`jenis`,`perlu`,`saran`,`tgl`) values (1,'as','L','Mahasiswa','Baca Buku#Pinjam Buku###','as','2013-11-01 14:53:03'),(2,'awer','L','Mahasiswa','Baca Buku####','dsdsadsa','2013-11-03 18:22:13'),(3,'YUU','L','Mahasiswa','Baca Buku#Pinjam Buku###','QREQ','2013-11-06 11:45:53'),(4,'udhin','L','Mahasiswa','Baca Buku####','test','2013-11-07 13:10:13'),(5,'rewe','L','Mahasiswa','Baca Buku#Pinjam Buku#Kembalikan Buku##Lainnya','werwerw','2013-11-15 17:29:00'),(6,'andi','L','Mahasiswa','Baca Buku####','ga ada','2013-11-20 23:42:42'),(7,'juli','L','Mahasiswa','Baca Buku####','sdsdsd','2013-11-22 14:19:02'),(8,'Ridwan','L','Mahasiswa','Baca Buku#Pinjam Buku###','Sudah bagus','2013-11-27 00:02:16'),(9,'yr','L','Mahasiswa','Baca Buku#Pinjam Buku#Kembalikan Buku#Baca Koran#','kjg','2013-11-27 00:04:20'),(10,'asep','L','Mahasiswa','Baca Buku#Pinjam Buku###','test','2013-11-27 12:12:25'),(11,'jjj','L','Mahasiswa','Baca Buku####','eff','2013-11-27 12:44:59'),(12,'am','L','Mahasiswa','Baca Buku####','tmbah buku lagi.','2013-11-28 16:01:21'),(13,'Eja','L','Mahasiswa','Baca Buku#Pinjam Buku###','-','2013-12-02 10:29:21'),(14,'rifan','L','Mahasiswa','Baca Buku#Pinjam Buku#Kembalikan Buku##','asd','2013-12-07 12:17:08'),(15,'joni','L','Mahasiswa','Baca Buku#Pinjam Buku#Kembalikan Buku##','ss','2013-12-08 00:57:45'),(16,'Hansah Darmawan','L','Mahasiswa','Baca Buku#Pinjam Buku###','Bagus','2013-12-08 08:25:46'),(17,'asdasd','L','Mahasiswa','Baca Buku#Pinjam Buku###','asdasd','2013-12-08 08:26:56'),(18,'gundul','L','Mahasiswa','Baca Buku####','ganbate','2013-12-10 19:49:59'),(19,'A','L','Mahasiswa','Baca Buku#Pinjam Buku###','aa','2013-12-11 00:59:06'),(20,'jojo','L','Mahasiswa','Baca Buku#Pinjam Buku###','ok','2013-12-13 12:52:49'),(21,'llll','L','Mahasiswa','Baca Buku####','ll','2013-12-18 01:28:49'),(22,'d','L','Dosen','Baca Buku####','asdasd','2013-12-18 20:48:07'),(23,'derul','L','Mahasiswa','Baca Buku#Pinjam Buku###','mm','2013-12-19 17:28:15'),(24,'jamu','L','Mahasiswa','Baca Buku####','alkjdhlajhdaslhdlashdladhla','2013-12-22 12:03:03'),(25,'joko','L','Mahasiswa','Baca Buku#Pinjam Buku###','xxx','2013-12-24 09:46:35'),(26,'erwin','L','Mahasiswa','Baca Buku####','tes','2013-12-24 10:29:15'),(27,'eza','L','Mahasiswa','Baca Buku#Pinjam Buku###Lainnya','bagus','2013-12-24 10:42:58'),(28,'Yogi','L','Mahasiswa','Baca Buku#Pinjam Buku###Lainnya','tes','2013-12-24 12:18:47'),(29,'','','','####','','2013-12-25 09:33:12'),(30,'gfhfgh','L','Mahasiswa','Baca Buku#Pinjam Buku###','nbvfhnvb','2013-12-25 12:14:31'),(31,'Anggri','L','Mahasiswa','Baca Buku####','Template Simple dan Bersih :)','2013-12-25 17:07:38'),(32,'eko','L','Mahasiswa','Baca Buku#Pinjam Buku###','bagus','2013-12-25 18:26:51'),(33,'eko','L','Mahasiswa','Baca Buku#Pinjam Buku###','good','2013-12-25 18:27:38'),(34,'udin','L','Mahasiswa','Baca Buku#Pinjam Buku##Baca Koran#','ok','2013-12-26 08:14:16'),(35,'Salie','P','Mahasiswa','Baca Buku#Pinjam Buku###','Si!p_','2013-12-26 17:39:49'),(36,'Nada','P','Mahasiswa','Baca Buku##Kembalikan Buku##','B9us','2013-12-27 17:53:30'),(37,'fd','L','Dosen','Baca Buku####','dfg','2013-12-28 23:57:31'),(38,'asep','L','Dosen','Baca Buku####','test','2014-03-05 08:58:06'),(39,'firman','L','Mahasiswa','Baca Buku####','keren','2014-07-24 12:12:42'),(40,'Nur Akhwan','L','Mahasiswa','Baca Buku#Pinjam Buku###','saran kritik disini, gan..','2014-10-20 08:09:12'),(41,'Joni Arisandi','L','Mahasiswa','Baca Buku##Kembalikan Buku#Baca Koran#','perpustakaan  joss','2014-10-20 08:19:34');

/*Table structure for table `t_trans` */

DROP TABLE IF EXISTS `t_trans`;

CREATE TABLE `t_trans` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `id_buku` int(6) NOT NULL,
  `id_anggota` int(6) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `stat` enum('P','K') NOT NULL,
  `ket` varchar(100) NOT NULL,
  `telat` int(2) NOT NULL,
  `denda` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_trans` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
