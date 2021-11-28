/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.16-MariaDB : Database - pkgypii
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pkgypii` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `pkgypii`;

/*Table structure for table `cabang` */

DROP TABLE IF EXISTS `cabang`;

CREATE TABLE `cabang` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(10) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

/*Data for the table `cabang` */

insert  into `cabang`(`id`,`kode`,`nama`,`alamat`) values 
(1,'C001','Jakarta','Jl. Dwiwarna Raya, mangga besar'),
(2,'C002','Semarang','Jl. Gang Pinggir 62'),
(3,'C003','Bandung','Jl. Kebon Jati Ciroyom'),
(4,'C004','Kalimantan','Jl. Nansarunai'),
(8,'C007','Surabaya','Jawa Timur'),
(12,'C0005','Kupang','Timor NTT');

/*Table structure for table `guru` */

DROP TABLE IF EXISTS `guru`;

CREATE TABLE `guru` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `namaguru` varchar(200) DEFAULT NULL,
  `idcabang` int(5) DEFAULT NULL,
  `idunit` int(5) DEFAULT NULL,
  `level` varchar(20) DEFAULT 'user' COMMENT 'user, admin, supervisor, kepalasekolah',
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `create` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `guru` */

insert  into `guru`(`id`,`namaguru`,`idcabang`,`idunit`,`level`,`username`,`password`,`create`) values 
(1,'tendy123',12,1,'admin','admin','0192023a7bbd73250516f069df18b500','2021-11-28 21:32:26');

/*Table structure for table `mapel` */

DROP TABLE IF EXISTS `mapel`;

CREATE TABLE `mapel` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `namamapel` varchar(100) NOT NULL,
  `jenjang` enum('KB/TK','SD','SMP','SMA') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `mapel` */

/*Table structure for table `unit` */

DROP TABLE IF EXISTS `unit`;

CREATE TABLE `unit` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `kodeunit` varchar(20) NOT NULL,
  `namaunit` varchar(100) NOT NULL,
  `alamatunit` varchar(200) DEFAULT NULL,
  `telpon` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `unit` */

insert  into `unit`(`id`,`kodeunit`,`namaunit`,`alamatunit`,`telpon`,`email`) values 
(1,'U0001','TK Sinar Matahari','Jl. Gang Pinggir','q','q@yahoo.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
