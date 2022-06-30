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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Érico Rosiski Weber','ericoweber@hotmail.com','Student','Engineering','+55 991344031',NULL,'$2y$10$sAQ61FQujw1TZGHoxZwKm.Czqlgcp3AmxWodecePeHCol3EXAbJie',1,NULL,'2022-06-28 00:17:46','2022-06-28 00:17:46'),(2,'MAdU4mPGLh','ozD7a7iShj@gmail.com','PrmgQKlloe','YpN5MQn5Dw','sSufx7QovE',NULL,'$2y$10$SCis0GhERSPRosqEAKU7EesIHGyi2Y6caOitcIuMOLcTIwk.eiGg2',1,NULL,'2022-06-28 00:17:46','2022-06-28 00:17:46'),(3,'LtokXKjdDl','Jn511SRE67@gmail.com','JOWP53AU6Q','iNeTBbg4Qr','DomulZKdZU',NULL,'$2y$10$N5FKRbBjthb4N4q5qZ2LHepM571NK.Jdl/0WlKoDPyY47hp07VMC2',0,NULL,'2022-06-28 00:17:46','2022-06-28 00:17:46'),(4,'eMOpkjPeGB','3d2r915yia@gmail.com','oCj8xFn7Wt','su5X7Z4hgD','8yDSb4Pa1c',NULL,'$2y$10$vitMhtsyaEkowDm90UdG0u94ZnkRMAFYZclU9urBaDzUp29h7/uDq',0,NULL,'2022-06-28 00:17:46','2022-06-28 00:17:46'),(5,'4XqjRM9ilI','jw3Js346Zn@gmail.com','YrHJfQK5zh','Ms61nkvqSl','SJVfcpfcZX',NULL,'$2y$10$wIPcfGexgij.p5IyJuILBO/lWrnhp/igCLl7A2qLj1qvoTOQ8EtyC',0,NULL,'2022-06-28 00:17:46','2022-06-28 00:17:46'),(6,'iNUriw2EYm','BaGntlBrRU@gmail.com','Z7XcIELlwQ','4TShBUCyZ1','spM1WSZXAu',NULL,'$2y$10$cWTx9fCrXbUBRz2KICjhM.WuWypf8Vku.aP7Yc7Im/yuebxmTLv5a',0,NULL,'2022-06-28 00:17:46','2022-06-28 00:17:46'),(7,'ktL4T47FA3','SPwxy1d13O@gmail.com','kSRotNqVG2','7d5mfbICsA','Sa0Fs6aIU7',NULL,'$2y$10$n13NkjVvaqP1tgG4G5FJ4.e01AAM5gQRMUc0H2o1W1Z6g7xtYmmwe',0,NULL,'2022-06-28 00:17:46','2022-06-28 00:17:46'),(8,'QuzUf9jBKv','oX5gfnSRSd@gmail.com','QTObh6mhDC','M0W3VVss5S','47tE0SN7pY',NULL,'$2y$10$1yGgQCt5GbplXRBOLGwWh.8fL0N/QCG1Rl85n6UfO68IRrj9l3K1O',0,NULL,'2022-06-28 00:17:46','2022-06-28 00:17:46'),(9,'9XV4gcTWAc','z78fSDen3M@gmail.com','xekzsZ044n','RtkmTq8PsX','kTqwZfyGgT',NULL,'$2y$10$eyvY4uwHV/7qQ6euGZTRxeD7PKJDVEaTyk/TLeAZtmW17yvjjyE/.',0,NULL,'2022-06-28 00:17:47','2022-06-28 00:17:47'),(10,'XB92qJsVTK','x7uGXBu2qf@gmail.com','tmyR1vMBxT','hJJro7wHiE','TqpVC3Owy9',NULL,'$2y$10$fZBkr1pOfTuwUXiFFJguOeJbjRIiGlvFqS1QpYcu73.PSm1peA/ui',0,NULL,'2022-06-28 00:17:47','2022-06-28 00:17:47'),(11,'aekV7Ywz9f','hwD0mwZ4BD@gmail.com','EhvdlPF6X1','73GJ40WcaC','iV2kjw2DAh',NULL,'$2y$10$4zvZ/ySo61WSnRknawP0T.4nEc82HjMhvL3HxUlHb6zxSKWvBsMUO',0,NULL,'2022-06-28 00:17:47','2022-06-28 00:17:47'),(12,'8YpQty7Axg','AJDpbv0rhh@gmail.com','p0ivkuoHHE','JEbbLpb1TU','Zl5yXhHpiw',NULL,'$2y$10$BVrw/VMfFFe6OfV7J4B7euz/YXbm3fAmJ6ZgQfugsJUYv4NQHjKMS',0,NULL,'2022-06-28 00:17:47','2022-06-28 00:17:47'),(13,'dGN4Vq7eIb','tWVXKIAyO7@gmail.com','KZTXnnTSLt','IFdhKF9qQo','Vc4Ylm3HQ8',NULL,'$2y$10$2Qvqm4DQcCvLxmfFeNmOue7QysAvHGpo2mbpeMYb0SJjkPVBA6QO2',0,NULL,'2022-06-28 00:17:47','2022-06-28 00:17:47'),(14,'5NC7zTuypt','pzsMAPeugM@gmail.com','s76B2UVzBd','bUb2PB4jQc','DU88E7oKQS',NULL,'$2y$10$sm/bYAJe9CLs/wFjUXYsJ.Tyl.MYcijCl7Anj7yZj4RnD3blxd4b.',0,NULL,'2022-06-28 00:17:47','2022-06-28 00:17:47'),(15,'PUtBs5J42s','Zd23V4ZB4c@gmail.com','94y3bPPSL0','Rcm4zwMQH9','43l4Li5323',NULL,'$2y$10$.IN9GiIbrrygfijj6tsVB.KIgMYtG05p.0EbkjhnfKqUP0ieVfHC2',0,NULL,'2022-06-28 00:17:47','2022-06-28 00:17:47'),(16,'1j8fCQdTk7','eqkKmxw8Xw@gmail.com','Dv3v1NmJwh','iQKGcRVFD4','XB0xuE0Xa2',NULL,'$2y$10$0bQZ4jDgMWZNNLxyxJK4k.Hr8dS413c6AaLyP8uMXj4uC8IuVADQy',0,NULL,'2022-06-28 00:17:47','2022-06-28 00:17:47'),(17,'qlHYpnKyoJ','J0LgadC3AY@gmail.com','9qPXrmF5If','EEMzWeQNze','06qWZfqgxR',NULL,'$2y$10$6WFPhAhd0/2N2XEhFDBomOlyTG9xCRM4fWpNs97UNHD/ZtRTFwlxO',0,NULL,'2022-06-28 00:17:47','2022-06-28 00:17:47'),(18,'R3Ki0eN85i','flUoVhmwMl@gmail.com','8AxJIN1rBK','zlHYqNCQUw','IscQRj7BFT',NULL,'$2y$10$1Nm42wZ7pHolQaQevhocd.5aiHk9Sl5o5LiikqK23yb.d7MsTkhkG',0,NULL,'2022-06-28 00:17:47','2022-06-28 00:17:47'),(19,'PFv6uwl9cA','6vwhAIwPI6@gmail.com','MAkVzmDrsv','ZmYxh2IyOg','NGfD40hNhR',NULL,'$2y$10$45lwpNHaitA0l1LgcssUiOk4YELsvFieZUnhpLJwmSSbtKpW8hSYu',0,NULL,'2022-06-28 00:17:47','2022-06-28 00:17:47'),(20,'CEDTZ6G7Q5','RIN3I9s6uA@gmail.com','T619dAM0iw','6eDkcL8DtP','YjpEdZB12R',NULL,'$2y$10$9vjrH4fuaiI0oR2PmF0nAu0JLunY28PyctiSRYe7tkkCOG3M04IRy',0,NULL,'2022-06-28 00:17:47','2022-06-28 00:17:47'),(21,'Omrk8pxXYp','AjZMQGYqzS@gmail.com','AS4QX9BmPB','g88mCrxVTV','fGONHSpeem',NULL,'$2y$10$F2g2T3ZYAxTsZNrSfVB5ru5hVwq9mVVyujWz.EvLJcErSySvLh/s.',0,NULL,'2022-06-28 00:17:47','2022-06-28 00:17:47'),(22,'TD7WBPUa1l','whWNbtxMU6@gmail.com','UM06lPqXzU','TpOHdIqUE3','ADSWa8dYch',NULL,'$2y$10$1wh2ZvpAos.yyZAngE7oD.bjQ49yAzAqBpLW5wOiGfH90wmCaCB42',0,NULL,'2022-06-28 00:17:47','2022-06-28 00:17:47'),(23,'yrFX3AZG8K','ooyP5eXQ5g@gmail.com','rSMnd4dLtV','bIP0UHAhYC','xe9soxasUX',NULL,'$2y$10$uPcn2xCmjNQBQzeSMwN9zOd7qYVK8Gm8dnM3M4m/C08PV04YHCfZu',0,NULL,'2022-06-28 00:17:47','2022-06-28 00:17:47'),(24,'LiClBQCk5A','ovL4qWF0QR@gmail.com','6v1Qg0FLxB','rjpdugUKwz','rdKcpffArf',NULL,'$2y$10$9dBxXX4x5cLK3AO9yHdK8uHHHuagMTJIzAEagnNWtOZHlyqVrC7B6',0,NULL,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(25,'1RyXGHiPnh','IssfcHMqmw@gmail.com','K6LqdGBEic','7WZPrBuBJD','k8WXV6KEFW',NULL,'$2y$10$BVdNaBvTHII52a3J2DbSbuVxydgaCycCZFUafwVFs5sPOYQYS1Mn6',0,NULL,'2022-06-28 00:17:48','2022-06-28 00:17:48'),(26,'YhbkoeHokQ','i0bNCoI2v9@gmail.com','MkT3MS0HRn','xDPIERm9xv','ykaQ6mBU9b',NULL,'$2y$10$EsqSMCssUXQn2U32t8ZGVOQzeZ5o945qfWBoo.1roTjSp6SUJipke',0,NULL,'2022-06-28 00:17:48','2022-06-28 00:17:48');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
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
