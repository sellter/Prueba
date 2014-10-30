/*
SQLyog Community v11.31 (64 bit)
MySQL - 5.5.16 : Database - apli
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`apli` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `apli`;

/*Table structure for table `alumno6` */

DROP TABLE IF EXISTS `alumno6`;

CREATE TABLE `alumno6` (
  `id_grupoal` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL,
  `id_grupo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_grupoal`),
  KEY `id` (`id`),
  KEY `id_grupo` (`id_grupo`),
  CONSTRAINT `alumno6_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usuario` (`id`),
  CONSTRAINT `alumno6_ibfk_2` FOREIGN KEY (`id_grupo`) REFERENCES `grupo` (`id_grupo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `alumno6` */

LOCK TABLES `alumno6` WRITE;

UNLOCK TABLES;

/*Table structure for table `detalle` */

DROP TABLE IF EXISTS `detalle`;

CREATE TABLE `detalle` (
  `id_det` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL,
  `id_materia` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_det`),
  KEY `id` (`id`),
  KEY `id_materia` (`id_materia`),
  CONSTRAINT `id` FOREIGN KEY (`id`) REFERENCES `usuario` (`id`),
  CONSTRAINT `id_materia` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

/*Data for the table `detalle` */

LOCK TABLES `detalle` WRITE;

insert  into `detalle`(`id_det`,`id`,`id_materia`) values (40,16,3),(44,2,1),(45,2,2),(53,15,2),(59,2,3),(68,15,1),(70,2,3),(71,2,12),(72,16,4),(75,15,3),(77,18,3);

UNLOCK TABLES;

/*Table structure for table `detallegrupo` */

DROP TABLE IF EXISTS `detallegrupo`;

CREATE TABLE `detallegrupo` (
  `id_Detalle` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `id_grupo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_Detalle`,`id`),
  KEY `idd` (`id`),
  KEY `id_grupo` (`id_grupo`),
  CONSTRAINT `idd` FOREIGN KEY (`id`) REFERENCES `usuario` (`id`),
  CONSTRAINT `id_grupo` FOREIGN KEY (`id_grupo`) REFERENCES `grupo` (`id_grupo`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

/*Data for the table `detallegrupo` */

LOCK TABLES `detallegrupo` WRITE;

insert  into `detallegrupo`(`id_Detalle`,`id`,`id_grupo`) values (33,18,14),(34,21,14),(35,22,14);

UNLOCK TABLES;

/*Table structure for table `grupo` */

DROP TABLE IF EXISTS `grupo`;

CREATE TABLE `grupo` (
  `id_grupo` int(11) NOT NULL AUTO_INCREMENT,
  `grupo` varchar(20) DEFAULT NULL,
  `avatar` varchar(20) DEFAULT NULL,
  `orden` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_grupo`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `grupo` */

LOCK TABLES `grupo` WRITE;

insert  into `grupo`(`id_grupo`,`grupo`,`avatar`,`orden`,`status`) values (14,'11',NULL,NULL,'1'),(15,'12',NULL,NULL,'1'),(16,'13',NULL,NULL,'1'),(17,'14',NULL,NULL,'1');

UNLOCK TABLES;

/*Table structure for table `materia` */

DROP TABLE IF EXISTS `materia`;

CREATE TABLE `materia` (
  `id_materia` int(11) NOT NULL AUTO_INCREMENT,
  `materia` varchar(20) DEFAULT NULL,
  `avatar` varchar(20) DEFAULT NULL,
  `orden` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_materia`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `materia` */

LOCK TABLES `materia` WRITE;

insert  into `materia`(`id_materia`,`materia`,`avatar`,`orden`,`status`) values (1,'Matemáticas','','2','1'),(2,'Historia','','1','1'),(3,'Ciencias','','3','1'),(4,'Geografía','','4','1'),(11,'Quimica',NULL,NULL,NULL),(12,'Español',NULL,NULL,NULL),(13,'Artes',NULL,NULL,NULL);

UNLOCK TABLES;

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) DEFAULT NULL,
  `apellido_pat` varchar(250) DEFAULT NULL,
  `apellido_mat` varchar(250) DEFAULT NULL,
  `telefono` varchar(250) DEFAULT NULL,
  `calle` varchar(250) DEFAULT NULL,
  `num_ext` int(5) DEFAULT NULL,
  `num_int` int(5) DEFAULT NULL,
  `colonia` varchar(250) DEFAULT NULL,
  `municipio` varchar(250) DEFAULT NULL,
  `estado` varchar(250) DEFAULT NULL,
  `codigoPostal` int(5) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `usuario` varchar(250) DEFAULT NULL,
  `pws` varchar(250) DEFAULT NULL,
  `estatus` varchar(250) DEFAULT NULL,
  `nivel` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

/*Data for the table `usuario` */

LOCK TABLES `usuario` WRITE;

insert  into `usuario`(`id`,`nombre`,`apellido_pat`,`apellido_mat`,`telefono`,`calle`,`num_ext`,`num_int`,`colonia`,`municipio`,`estado`,`codigoPostal`,`correo`,`usuario`,`pws`,`estatus`,`nivel`) values (1,'Ricardo','Zavala','Hernandez','7282840088','16',1,2,'emiliano','lerm','mexico',7510,'uuhdhd@gmail.com','admin','1234','1','1'),(2,'Tresh','Solo','Gomez','7224192061','sierra',1,2,'2344','lerma','mexico',7510,'uuhdhd@gmail.com','ricardo','1234','1','2'),(15,'Lucas','Don ','Juan',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'ricardo2',NULL,'1','2'),(16,'Dom','Con ','Sin',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'prof1','123','2','3'),(18,'Pedro','Pérez','González',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','3'),(21,'Juan','Tomas','Loco',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','3'),(22,'Angel','Mas','Mas',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','3'),(23,'Angel','Mas','Mas',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2'),(24,'Angel','Mas','Mas',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2'),(26,'Angel','Mas','Mas',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2'),(27,'Angel','Mas','Mas',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2'),(28,'Angel','Mas','Mas',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2'),(29,'Angel','Mas','Mas',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2'),(30,'Angel','Mas','Mas',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2'),(31,'Angel','Mas','Mas',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2'),(32,'Angel','Mas','Mas',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2'),(33,'Angel','Mas','Mas',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2'),(34,'Angel','Mas','Mas',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2'),(35,'Angel','Mas','Mas',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2'),(36,'Angel','Mas','Mas',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2'),(37,'Angel','Mas','Mas',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2'),(38,'Angel','Mas','Mas',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2'),(39,'Angel','Mas','Mas',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2'),(40,'Angel','Mas','Mas',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'1','2');

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
