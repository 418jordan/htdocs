/*
SQLyog Community v12.2.6 (64 bit)
MySQL - 10.1.16-MariaDB : Database - courses
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`courses` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `courses`;

/*Table structure for table `courses` */

DROP TABLE IF EXISTS `courses`;

CREATE TABLE `courses` (
  `Name` varchar(30) DEFAULT NULL,
  `Credits` double DEFAULT NULL,
  `CourseNumber` smallint(4) DEFAULT NULL,
  `Prefix` varchar(10) DEFAULT NULL,
  `CourseId` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`CourseId`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `courses` */

insert  into `courses`(`Name`,`Credits`,`CourseNumber`,`Prefix`,`CourseId`) values 
('Introduction to Programming',3,160,'CIT',1),
('Web Frontend Development',3,230,'CIT',2),
('Web Backend Development',3,336,'CIT',3),
('Databases',3,225,'CIT',5),
('Introduction to Databases',3,111,'CIT',6),
('Book of Mormon - A',3,121,'REL',7),
('Book of Mormon - B',3,122,'REL',8),
('New Testament - A',3,211,'REL',9);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
