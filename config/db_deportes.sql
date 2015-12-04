# MySQL-Front 5.1  (Build 4.2)

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;


# Host: localhost    Database: db_deportes
# ------------------------------------------------------
# Server version 5.6.18-enterprise-commercial-advanced

#
# Source for table tbl_actividades
#

DROP TABLE IF EXISTS `tbl_actividades`;
CREATE TABLE `tbl_actividades` (
  `id_eventos` int(11) NOT NULL AUTO_INCREMENT,
  `estado` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `contenido` blob,
  `imagen` mediumblob,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_eventos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

#
# Dumping data for table tbl_actividades
#

LOCK TABLES `tbl_actividades` WRITE;
/*!40000 ALTER TABLE `tbl_actividades` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_actividades` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table tbl_album
#

DROP TABLE IF EXISTS `tbl_album`;
CREATE TABLE `tbl_album` (
  `id_eventos` int(11) NOT NULL AUTO_INCREMENT,
  `estado` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `contenido` blob,
  `imagen` mediumblob,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_eventos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

#
# Dumping data for table tbl_album
#

LOCK TABLES `tbl_album` WRITE;
/*!40000 ALTER TABLE `tbl_album` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_album` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table tbl_banner
#

DROP TABLE IF EXISTS `tbl_banner`;
CREATE TABLE `tbl_banner` (
  `id_banner` int(11) NOT NULL AUTO_INCREMENT,
  `estado` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `contenido` blob,
  `imagen` mediumblob,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_banner`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

#
# Dumping data for table tbl_banner
#

LOCK TABLES `tbl_banner` WRITE;
/*!40000 ALTER TABLE `tbl_banner` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_banner` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table tbl_comunicados
#

DROP TABLE IF EXISTS `tbl_comunicados`;
CREATE TABLE `tbl_comunicados` (
  `id_comunicados` int(11) NOT NULL AUTO_INCREMENT,
  `estado` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `contenido` blob,
  `imagen` mediumblob,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_comunicados`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

#
# Dumping data for table tbl_comunicados
#

LOCK TABLES `tbl_comunicados` WRITE;
/*!40000 ALTER TABLE `tbl_comunicados` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_comunicados` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table tbl_contactos
#

DROP TABLE IF EXISTS `tbl_contactos`;
CREATE TABLE `tbl_contactos` (
  `id_eventos` int(11) NOT NULL AUTO_INCREMENT,
  `estado` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `contenido` blob,
  `imagen` mediumblob,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_eventos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

#
# Dumping data for table tbl_contactos
#

LOCK TABLES `tbl_contactos` WRITE;
/*!40000 ALTER TABLE `tbl_contactos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_contactos` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table tbl_convocatorias
#

DROP TABLE IF EXISTS `tbl_convocatorias`;
CREATE TABLE `tbl_convocatorias` (
  `id_convocatorias` int(11) NOT NULL AUTO_INCREMENT,
  `estado` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `contenido` blob,
  `imagen` mediumblob,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_convocatorias`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

#
# Dumping data for table tbl_convocatorias
#

LOCK TABLES `tbl_convocatorias` WRITE;
/*!40000 ALTER TABLE `tbl_convocatorias` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_convocatorias` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table tbl_eventos
#

DROP TABLE IF EXISTS `tbl_eventos`;
CREATE TABLE `tbl_eventos` (
  `id_eventos` int(11) NOT NULL AUTO_INCREMENT,
  `estado` int(11) DEFAULT '1',
  `fecha` date DEFAULT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `contenido` blob,
  `imagen` mediumblob,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_eventos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Dumping data for table tbl_eventos
#

LOCK TABLES `tbl_eventos` WRITE;
/*!40000 ALTER TABLE `tbl_eventos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_eventos` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table tbl_galeria
#

DROP TABLE IF EXISTS `tbl_galeria`;
CREATE TABLE `tbl_galeria` (
  `id_galeria` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) DEFAULT NULL,
  `imagen` blob,
  `fecha_foto` date DEFAULT NULL,
  PRIMARY KEY (`id_galeria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Dumping data for table tbl_galeria
#

LOCK TABLES `tbl_galeria` WRITE;
/*!40000 ALTER TABLE `tbl_galeria` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_galeria` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table tbl_multimedia
#

DROP TABLE IF EXISTS `tbl_multimedia`;
CREATE TABLE `tbl_multimedia` (
  `id_eventos` int(11) NOT NULL AUTO_INCREMENT,
  `estado` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `contenido` blob,
  `imagen` mediumblob,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_eventos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

#
# Dumping data for table tbl_multimedia
#

LOCK TABLES `tbl_multimedia` WRITE;
/*!40000 ALTER TABLE `tbl_multimedia` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_multimedia` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table tbl_noticias
#

DROP TABLE IF EXISTS `tbl_noticias`;
CREATE TABLE `tbl_noticias` (
  `id_eventos` int(11) NOT NULL AUTO_INCREMENT,
  `estado` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `contenido` blob,
  `imagen` mediumblob,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_eventos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

#
# Dumping data for table tbl_noticias
#

LOCK TABLES `tbl_noticias` WRITE;
/*!40000 ALTER TABLE `tbl_noticias` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_noticias` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table tbl_quienes_somos
#

DROP TABLE IF EXISTS `tbl_quienes_somos`;
CREATE TABLE `tbl_quienes_somos` (
  `id_eventos` int(11) NOT NULL AUTO_INCREMENT,
  `estado` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `contenido` blob,
  `imagen` mediumblob,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_eventos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

#
# Dumping data for table tbl_quienes_somos
#

LOCK TABLES `tbl_quienes_somos` WRITE;
/*!40000 ALTER TABLE `tbl_quienes_somos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_quienes_somos` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table tbl_redes_sociales
#

DROP TABLE IF EXISTS `tbl_redes_sociales`;
CREATE TABLE `tbl_redes_sociales` (
  `id_eventos` int(11) NOT NULL AUTO_INCREMENT,
  `estado` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `contenido` blob,
  `imagen` mediumblob,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_eventos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

#
# Dumping data for table tbl_redes_sociales
#

LOCK TABLES `tbl_redes_sociales` WRITE;
/*!40000 ALTER TABLE `tbl_redes_sociales` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_redes_sociales` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table tbl_servicios
#

DROP TABLE IF EXISTS `tbl_servicios`;
CREATE TABLE `tbl_servicios` (
  `id_servicios` int(11) NOT NULL AUTO_INCREMENT,
  `estado` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `contenido` blob,
  `imagen` mediumblob,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_servicios`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

#
# Dumping data for table tbl_servicios
#

LOCK TABLES `tbl_servicios` WRITE;
/*!40000 ALTER TABLE `tbl_servicios` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_servicios` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table tbl_user
#

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `id_eventos` int(11) NOT NULL AUTO_INCREMENT,
  `estado` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `contenido` blob,
  `imagen` mediumblob,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_eventos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

#
# Dumping data for table tbl_user
#

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
UNLOCK TABLES;

/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
