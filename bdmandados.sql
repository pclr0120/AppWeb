-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: mandados
-- ------------------------------------------------------
-- Server version	5.7.14

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (1,'Michel','1234'),(2,'Alexis','1234'),(3,'Valenzuela','1234'),(4,'Orduno','1234'),(5,'Ana','1234'),(6,'Arnoldo','1234'),(7,'Luciano','1234'),(8,'Martin','1234'),(9,'Lucia','1234'),(10,'Pedro','1234'),(11,'Peter','1234'),(12,'Marcos','1234'),(13,'Manuel','1234'),(14,'Mikke','1234'),(15,'CJ','1234');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mandado`
--

DROP TABLE IF EXISTS `mandado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mandado` (
  `IdMandado` int(11) NOT NULL AUTO_INCREMENT,
  `UsernameCliente` varchar(20) NOT NULL,
  `Descripcion` varchar(300) NOT NULL,
  `Fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Estatus` varchar(1) NOT NULL DEFAULT 'P',
  PRIMARY KEY (`IdMandado`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mandado`
--

LOCK TABLES `mandado` WRITE;
/*!40000 ALTER TABLE `mandado` DISABLE KEYS */;
INSERT INTO `mandado` VALUES (1,'Michel','Necesito que me traegas 1 kilo de tortillas.','2017-06-10 21:44:40','E'),(2,'Michel','Quiero una pizza.','2017-06-10 22:38:17','P'),(3,'Michel','Quiero una hamburguesa.','2017-06-10 22:38:32','P'),(4,'Michel','Necesito un foco ahorrador.','2017-06-10 23:40:01','P'),(5,'Michel','Quiero un pollo asado.','2017-06-10 23:41:36','P'),(6,'CJ','Quiero pollo frito.','2017-06-10 23:45:28','P'),(7,'Ana','Necesito que me traegan un garrafon de agua.','2017-06-10 23:46:32','P'),(8,'Mikke','Quiero una pizza de la Little Ceasars.','2017-06-10 23:47:08','P'),(9,'Alexis','Quiero un balon de futbol de la marca Void.','2017-06-10 23:47:50','P');
/*!40000 ALTER TABLE `mandado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'mandados'
--

--
-- Dumping routines for database 'mandados'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-10 23:55:31
