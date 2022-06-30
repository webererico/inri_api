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
-- Table structure for table `inversor_status`
--

DROP TABLE IF EXISTS `inversor_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `inversor_status` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `status_id` int NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `inversor_status_status_id_unique` (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inversor_status`
--

LOCK TABLES `inversor_status` WRITE;
/*!40000 ALTER TABLE `inversor_status` DISABLE KEYS */;
INSERT INTO `inversor_status` VALUES (1,0,'Sending Paramenters','2022-06-28 00:17:45','2022-06-28 00:17:45'),(2,1,'Wait Sun/Grid','2022-06-28 00:17:45','2022-06-28 00:17:45'),(3,2,'Checking Grid','2022-06-28 00:17:45','2022-06-28 00:17:45'),(4,3,'Measuring Riso ','2022-06-28 00:17:45','2022-06-28 00:17:45'),(5,4,'DcDc Start','2022-06-28 00:17:45','2022-06-28 00:17:45'),(6,5,'Inverter Start','2022-06-28 00:17:45','2022-06-28 00:17:45'),(7,6,'Run','2022-06-28 00:17:45','2022-06-28 00:17:45'),(8,7,'Recovery','2022-06-28 00:17:45','2022-06-28 00:17:45'),(9,8,'Pause','2022-06-28 00:17:45','2022-06-28 00:17:45'),(10,9,'OTH Fault','2022-06-28 00:17:45','2022-06-28 00:17:45'),(11,10,'OTH Fault','2022-06-28 00:17:45','2022-06-28 00:17:45'),(12,11,'Address Setting ','2022-06-28 00:17:45','2022-06-28 00:17:45'),(13,12,'Self Test ','2022-06-28 00:17:45','2022-06-28 00:17:45'),(14,13,'Self Test Fail ','2022-06-28 00:17:45','2022-06-28 00:17:45'),(15,14,'Sensor Test + Meas.Riso ','2022-06-28 00:17:45','2022-06-28 00:17:45'),(16,15,'Leak Fault ','2022-06-28 00:17:45','2022-06-28 00:17:45'),(17,16,'Waiting for manual reset','2022-06-28 00:17:45','2022-06-28 00:17:45'),(18,17,'Internal Error E026 ','2022-06-28 00:17:45','2022-06-28 00:17:45'),(19,18,'Internal Error E027','2022-06-28 00:17:45','2022-06-28 00:17:45'),(20,19,'Internal Error E028 ','2022-06-28 00:17:45','2022-06-28 00:17:45'),(21,20,'Internal Error E029','2022-06-28 00:17:45','2022-06-28 00:17:45'),(22,21,'Internal Error E030 ','2022-06-28 00:17:45','2022-06-28 00:17:45'),(23,22,'Sending Wind Table','2022-06-28 00:17:45','2022-06-28 00:17:45'),(24,23,'Failed Sending table','2022-06-28 00:17:45','2022-06-28 00:17:45'),(25,24,'UTH Fault','2022-06-28 00:17:45','2022-06-28 00:17:45'),(26,25,'Remote OFF','2022-06-28 00:17:45','2022-06-28 00:17:45'),(27,26,'Interlock Fail','2022-06-28 00:17:45','2022-06-28 00:17:45'),(28,27,'Executing Autotest','2022-06-28 00:17:45','2022-06-28 00:17:45'),(29,30,'Waiting Sun','2022-06-28 00:17:45','2022-06-28 00:17:45'),(30,31,'Temperature Fault','2022-06-28 00:17:45','2022-06-28 00:17:45'),(31,32,'Fan Staucked','2022-06-28 00:17:45','2022-06-28 00:17:45'),(32,33,'Int. Com. Fault','2022-06-28 00:17:45','2022-06-28 00:17:45'),(33,34,'Slave Insertion','2022-06-28 00:17:45','2022-06-28 00:17:45'),(34,35,'DC Switch Open','2022-06-28 00:17:45','2022-06-28 00:17:45'),(35,36,'TRAS Switch Open','2022-06-28 00:17:45','2022-06-28 00:17:45'),(36,37,'MASTER Exclusion','2022-06-28 00:17:45','2022-06-28 00:17:45'),(37,38,'Auto Exclusion','2022-06-28 00:17:45','2022-06-28 00:17:45'),(38,98,'Erasing Internal EEprom','2022-06-28 00:17:45','2022-06-28 00:17:45'),(39,99,'Erasing External EEprom','2022-06-28 00:17:45','2022-06-28 00:17:45'),(40,100,'Counting EEprom','2022-06-28 00:17:45','2022-06-28 00:17:45'),(41,101,'Freeze','2022-06-28 00:17:45','2022-06-28 00:17:45');
/*!40000 ALTER TABLE `inversor_status` ENABLE KEYS */;
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
