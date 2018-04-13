-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: modulor
-- ------------------------------------------------------
-- Server version	5.7.21-log

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id_user` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(45) CHARACTER SET utf8 NOT NULL,
  `user_password` varchar(45) CHARACTER SET utf8 NOT NULL,
  `user_admin` tinyint(4) DEFAULT NULL,
  `user_adress` varchar(150) CHARACTER SET utf8 NOT NULL,
  `user_email` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `idusers_UNIQUE` (`id_user`),
  UNIQUE KEY `user_name_UNIQUE` (`user_name`),
  UNIQUE KEY `user_email_UNIQUE` (`user_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2018-04-11 11:33:53

INSERT INTO
  `command`
  (BOrne, Banque, BanqueEnseigne, Berrobi, ChaiseHaute, ChaiseS, Ipad, Kakemono, Kirro, LeCroise, Mur, MurImage, MurMosaique, PorteDocu, PorteDocuOri, Tables, TotemImage, Victorio, price )
VALUES
  (11, 22, 33, 44, 55, 66, 77, 88, 99, 100, 110, 120, 130, 140, 150, 160, 170, 180, 190)
;

INSERT INTO `command`
SET
`id_user` = 26,
`BOrne` = 123,
`Banque` = 32,
`BanqueEnseigne` = 43,
`Berrobi` = 123,
`ChaiseHaute` = 123,
`ChaiseS` = 123,
`Ipad` = 432,
`Kakemono` = 423,
`Kirro` = 423,
`LeCroise` = 24,
`Mur` = 142,
`MurImage` = 423,
`MurMosaique` = 423,
`PorteDocu` = 523,
`PorteDocuOri` = 234,
`Tables` = 234,
`TotemImage` = 423,
`Victorio` = 234,
`price` = 432;