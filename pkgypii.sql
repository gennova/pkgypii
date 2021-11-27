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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `cabang` */

insert  into `cabang`(`id`,`kode`,`nama`,`alamat`) values 
(1,'C001','Jakarta','Jl. Dwiwarna Raya, mangga besar'),
(2,'C002','Semarang','Jl. Gang Pinggir 62'),
(3,'C003','Bandung','Jl. Kebon Jati Ciroyom'),
(4,'C004','Kalimantan','Jl. Nansarunai'),
(8,'kdsd','kdsds','kdsds'),
(11,'oop','ppp','ppp');

/*Table structure for table `guru` */

DROP TABLE IF EXISTS `guru`;

CREATE TABLE `guru` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `namaguru` varchar(200) DEFAULT NULL,
  `idcabang` int(5) DEFAULT NULL,
  `idunit` int(5) DEFAULT NULL,
  `level` varchar(20) DEFAULT 'user' COMMENT 'user, admin, supervisor, kepalasekolah',
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `guru` */

insert  into `guru`(`id`,`namaguru`,`idcabang`,`idunit`,`level`,`username`,`password`) values 
(1,'tendy',1,1,'admin','admin','admin');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
