-- MySQL dump 10.13  Distrib 8.2.0, for Linux (x86_64)
--
-- Host: localhost    Database: poveste
-- ------------------------------------------------------
-- Server version	8.2.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Anotimp`
--

DROP TABLE IF EXISTS `Anotimp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Anotimp` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text,
  `haine_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `haine_id` (`haine_id`),
  CONSTRAINT `Anotimp_ibfk_1` FOREIGN KEY (`haine_id`) REFERENCES `haine` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Anotimp`
--

LOCK TABLES `Anotimp` WRITE;
/*!40000 ALTER TABLE `Anotimp` DISABLE KEYS */;
INSERT INTO `Anotimp` VALUES (1,'Primavara',1),(2,'Primavara',2),(3,'Primavara',3),(4,'Vara',4),(5,'Vara',5),(6,'Toamna',6);
/*!40000 ALTER TABLE `Anotimp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Imprejurari`
--

DROP TABLE IF EXISTS `Imprejurari`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Imprejurari` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text,
  `anotimp_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `anotimp_id` (`anotimp_id`),
  CONSTRAINT `Imprejurari_ibfk_1` FOREIGN KEY (`anotimp_id`) REFERENCES `Anotimp` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Imprejurari`
--

LOCK TABLES `Imprejurari` WRITE;
/*!40000 ALTER TABLE `Imprejurari` DISABLE KEYS */;
INSERT INTO `Imprejurari` VALUES (1,'Zi insorita',1),(2,'Zi insorita',2),(3,'Zi innorata',3),(4,'Zi calda',4),(5,'Zi calda',5),(6,'Zi ploioasa',6);
/*!40000 ALTER TABLE `Imprejurari` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `caracteristici`
--

DROP TABLE IF EXISTS `caracteristici`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `caracteristici` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text,
  `type` text,
  `personaje_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `personaje_id` (`personaje_id`),
  CONSTRAINT `caracteristici_ibfk_1` FOREIGN KEY (`personaje_id`) REFERENCES `personaj` (`id_personaj`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `caracteristici`
--

LOCK TABLES `caracteristici` WRITE;
/*!40000 ALTER TABLE `caracteristici` DISABLE KEYS */;
/*!40000 ALTER TABLE `caracteristici` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `haine`
--

DROP TABLE IF EXISTS `haine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `haine` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text,
  `personaje_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `personaje_id` (`personaje_id`),
  CONSTRAINT `haine_ibfk_1` FOREIGN KEY (`personaje_id`) REFERENCES `personaj` (`id_personaj`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `haine`
--

LOCK TABLES `haine` WRITE;
/*!40000 ALTER TABLE `haine` DISABLE KEYS */;
INSERT INTO `haine` VALUES (1,'Palton',NULL),(2,'Pulover',NULL),(3,'Geaca',NULL),(4,'Bluza',NULL),(5,'Pantaloni',NULL),(6,'Fusta',NULL);
/*!40000 ALTER TABLE `haine` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personaj`
--

DROP TABLE IF EXISTS `personaj`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personaj` (
  `id_personaj` int NOT NULL AUTO_INCREMENT,
  `nume_personaj` text,
  `tip_personaj` text,
  PRIMARY KEY (`id_personaj`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personaj`
--

LOCK TABLES `personaj` WRITE;
/*!40000 ALTER TABLE `personaj` DISABLE KEYS */;
INSERT INTO `personaj` VALUES (1,'Alba ca Zapada','pozitiv'),(2,'Rima','negativ'),(3,'Zana Primaverii','pozitiv');
/*!40000 ALTER TABLE `personaj` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transport`
--

DROP TABLE IF EXISTS `transport`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transport` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text,
  `personaje_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `personaje_id` (`personaje_id`),
  CONSTRAINT `transport_ibfk_1` FOREIGN KEY (`personaje_id`) REFERENCES `personaj` (`id_personaj`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transport`
--

LOCK TABLES `transport` WRITE;
/*!40000 ALTER TABLE `transport` DISABLE KEYS */;
/*!40000 ALTER TABLE `transport` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-22 17:12:09
