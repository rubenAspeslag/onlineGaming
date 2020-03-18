-- MySQL dump 10.13  Distrib 8.0.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: gamestore
-- ------------------------------------------------------
-- Server version	5.6.13

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
-- Table structure for table `gamescore`
--

DROP TABLE IF EXISTS `gamescore`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gamescore` (
  `idgameScore` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) DEFAULT NULL,
  `gameid` int(11) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `busy` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`idgameScore`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gamescore`
--

LOCK TABLES `gamescore` WRITE;
/*!40000 ALTER TABLE `gamescore` DISABLE KEYS */;
INSERT INTO `gamescore` (`idgameScore`, `userid`, `gameid`, `score`, `busy`) VALUES (1,20,1,24,NULL),(2,20,1,24,NULL),(3,20,1,24,NULL),(4,20,1,24,NULL),(5,20,1,24,NULL),(6,20,1,24,NULL),(7,20,1,24,NULL),(8,20,1,0,NULL),(9,20,1,24,NULL),(10,20,1,24,NULL),(11,20,1,24,NULL),(12,20,1,24,NULL),(14,23,1,24,NULL),(15,23,1,24,NULL),(16,20,1,24,NULL),(18,0,2,0,1),(21,20,2,10,0),(22,20,2,-1,0),(23,20,2,2,0),(24,20,2,0,0),(25,20,2,0,0),(26,20,2,-5,0),(27,20,2,0,0),(28,20,3,3,0),(29,20,3,7,0),(30,20,3,-1,0);
/*!40000 ALTER TABLE `gamescore` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-03-18 22:50:51
