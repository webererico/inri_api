-- MySQL dump 10.13  Distrib 8.0.29, for macos12 (x86_64)
--
-- Host: localhost    Database: teste
-- ------------------------------------------------------
-- Server version	8.0.29

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `weather_station_status`
--

DROP TABLE IF EXISTS `weather_station_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `weather_station_status` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `weather_station_status`
--

LOCK TABLES `weather_station_status` WRITE;
/*!40000 ALTER TABLE `weather_station_status` DISABLE KEYS */;
INSERT INTO `weather_station_status` VALUES (1,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(2,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(3,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(4,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(5,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(6,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(7,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(8,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(9,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(10,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(11,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(12,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(13,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(14,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(15,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(16,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(17,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(18,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(19,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(20,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(21,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(22,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(23,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(24,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(25,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(26,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(27,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(28,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(29,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(30,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(31,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(32,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(33,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(34,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(35,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(36,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(37,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(38,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(39,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(40,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(41,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(42,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(43,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(44,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(45,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(46,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(47,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(48,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(49,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(50,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(51,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(52,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(53,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(54,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(55,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(56,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(57,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(58,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(59,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(60,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(61,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(62,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(63,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(64,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(65,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(66,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(67,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(68,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(69,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(70,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(71,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(72,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(73,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(74,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(75,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(76,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(77,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(78,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(79,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(80,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(81,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(82,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(83,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(84,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(85,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(86,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(87,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(88,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(89,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(90,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(91,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(92,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(93,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(94,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(95,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(96,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(97,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(98,0,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(99,1,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(100,0,'2022-06-28 00:17:48','2022-06-28 00:17:48');
/*!40000 ALTER TABLE `weather_station_status` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-28 17:06:57