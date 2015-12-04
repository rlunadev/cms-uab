# MySQL-Front 5.1  (Build 4.2)

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;


# Host: localhost    Database: db_quejas
# ------------------------------------------------------
# Server version 5.6.18-enterprise-commercial-advanced

#
# Source for table tbl_detalle_quejas
#

DROP TABLE IF EXISTS `tbl_detalle_quejas`;
CREATE TABLE `tbl_detalle_quejas` (
  `id_detalle_queja` int(11) NOT NULL AUTO_INCREMENT,
  `respuesta` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_detalle_queja`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Dumping data for table tbl_detalle_quejas
#

LOCK TABLES `tbl_detalle_quejas` WRITE;
/*!40000 ALTER TABLE `tbl_detalle_quejas` DISABLE KEYS */;
INSERT INTO `tbl_detalle_quejas` VALUES (2,'jeje');
/*!40000 ALTER TABLE `tbl_detalle_quejas` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table tbl_quejas
#

DROP TABLE IF EXISTS `tbl_quejas`;
CREATE TABLE `tbl_quejas` (
  `id_queja` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `contenido` varchar(255) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_queja`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Dumping data for table tbl_quejas
#

LOCK TABLES `tbl_quejas` WRITE;
/*!40000 ALTER TABLE `tbl_quejas` DISABLE KEYS */;
INSERT INTO `tbl_quejas` VALUES (2,'queja 1','jejeje',1);
/*!40000 ALTER TABLE `tbl_quejas` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table tbl_usuarios
#

DROP TABLE IF EXISTS `tbl_usuarios`;
CREATE TABLE `tbl_usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Dumping data for table tbl_usuarios
#

LOCK TABLES `tbl_usuarios` WRITE;
/*!40000 ALTER TABLE `tbl_usuarios` DISABLE KEYS */;
INSERT INTO `tbl_usuarios` VALUES (2,'ronald','luna','ronald@ronald');
/*!40000 ALTER TABLE `tbl_usuarios` ENABLE KEYS */;
UNLOCK TABLES;

/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
