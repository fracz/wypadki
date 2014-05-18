CREATE DATABASE  IF NOT EXISTS `accidentsdb` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `accidentsdb`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: localhost    Database: accidentsdb
-- ------------------------------------------------------
-- Server version	5.6.17

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
-- Table structure for table `manewr`
--

DROP TABLE IF EXISTS `manewr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `manewr` (
  `idManewr` int(11) NOT NULL AUTO_INCREMENT,
  `nazwa` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idManewr`),
  UNIQUE KEY `idManewr_UNIQUE` (`idManewr`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manewr`
--

LOCK TABLES `manewr` WRITE;
/*!40000 ALTER TABLE `manewr` DISABLE KEYS */;
INSERT INTO `manewr` VALUES (1,'Niedostosowanie prędkości do warun-ków ruchu'),(2,'Nieprzestrzeganie pierwszeństwa prze-jazdu'),(3,'Nieprawidłowe wyprzedzanie'),(4,'Nieprawidłowe omijanie'),(5,'Nieprawidłowe wymijanie'),(6,'Nieprawidłowe zachowanie wobec pieszego'),(7,'Nieprawidłowe skręcanie'),(8,'Nieprawidłowe cofanie'),(9,'Nieprawidłowe zmiana pasa ruchu'),(10,'Nieprawidłowe zawracanie'),(11,'Nieprawidłowe przejeżdżanie drogi dla rowerów'),(12,'Nieprawidłowe zatrzymanie, postój'),(13,'Jazda po niewłaściwej stronie drogi'),(14,'Jazda bez wymaganego oświetlenia'),(15,'Wjazd przy czerwonym świetle'),(16,'Nie zachowanie bezpiecznej odległości między pojazdami'),(17,'Gwałtowne hamowanie'),(18,'Zmęczenie, zaśnięcie'),(19,'Nieprzestrzeganie innych znaków i sy-gnałów');
/*!40000 ALTER TABLE `manewr` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-05-18 19:36:27
