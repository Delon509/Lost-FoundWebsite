CREATE DATABASE  IF NOT EXISTS `mydb` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `mydb`;
-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: mydb
-- ------------------------------------------------------
-- Server version	8.0.28

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
-- Table structure for table `notice`
--

DROP TABLE IF EXISTS `notice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `notice` (
  `NoticeID` int NOT NULL AUTO_INCREMENT,
  `Type` varchar(45) NOT NULL,
  `Date` date NOT NULL,
  `Venue` varchar(45) NOT NULL,
  `Contact` varchar(45) NOT NULL,
  `Description` mediumtext,
  `Image` varchar(45) DEFAULT NULL,
  `State` varchar(45) NOT NULL,
  `User_UserID` int NOT NULL,
  PRIMARY KEY (`NoticeID`,`User_UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notice`
--

LOCK TABLES `notice` WRITE;
/*!40000 ALTER TABLE `notice` DISABLE KEYS */;
INSERT INTO `notice` VALUES (1,'Lost','2009-01-01','polyu','12345678','','','Completed',1),(2,'Lost','2009-01-01','polyu','12345678','','','Completed',3),(3,'Lost','2022-10-14','polyu','12345678','','','Completed',1),(4,'Lost','2022-08-10','Kwai Chung','11114444','I lost my watch, please help me.','C:xampphtdocsproject/images/6hKYb716oc.png','Completed',2),(5,'Lost','2022-07-21','polyu','76543210','My wallet was in Z core','','Pending',3),(6,'Lost','2022-09-21','polyu','76543210','My wallet was in A core','','Pending',3),(7,'Lost','2022-10-21','polyu','76543210','My wallet was in D core','','Pending',3),(8,'Lost','2022-10-11','polyu','76554210','My laptop was in D core','','Pending',4),(9,'Lost','2022-07-05','KCC','56793210','My Dog ran away around 2 pm. Please contact me if you have any information about my Dog!!!!!','C:xampphtdocsproject/images/QiqvGNe8qx.jpeg','Pending',2),(10,'Lost','2022-10-31','Hong Kong Science Museum','53964506','My  robot is missing','C:xampphtdocsproject/images/hsIEelmkqA.jpeg','Pending',2),(11,'Lost','2022-09-27','HK art museum','5403 3201','My robot is black colour','C:xampphtdocsproject/images/Iit6FyqwkH.jpeg','Completed',7),(12,'Lost','2022-10-13','HK art museum','5042 5444','My robot is white colours','C:xampphtdocsproject/images/Z0FMoH3fyK.jpeg','Completed',11),(13,'Lost','2022-10-04','Hong Kong Science Museum','1234 5964','My robot is black and blue colours','C:xampphtdocsproject/images/VgtnN3oZml.jpeg','Completed',12);
/*!40000 ALTER TABLE `notice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `respond`
--

DROP TABLE IF EXISTS `respond`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `respond` (
  `RespondID` int NOT NULL AUTO_INCREMENT,
  `Message` longtext NOT NULL,
  `Notice_NoticeID` int NOT NULL,
  `User_UserID` int NOT NULL,
  PRIMARY KEY (`RespondID`,`Notice_NoticeID`,`User_UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `respond`
--

LOCK TABLES `respond` WRITE;
/*!40000 ALTER TABLE `respond` DISABLE KEYS */;
INSERT INTO `respond` VALUES (1,'Testing',2,1),(2,'I find it in the garden :)',1,2),(3,'I find it in the supermarket lol',3,2),(4,'Oops, I find it back in home',4,2),(5,'It is a test',11,7),(6,'It is a test',12,11),(7,'It is a test!!',13,12);
/*!40000 ALTER TABLE `respond` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `UserID` int NOT NULL AUTO_INCREMENT,
  `Username` varchar(45) NOT NULL,
  `NickName` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `Role` varchar(45) NOT NULL,
  `Image` varchar(45) DEFAULT NULL,
  `Gender` varchar(45) NOT NULL,
  `Birthday` date NOT NULL,
  `Question` varchar(45) NOT NULL,
  `Answer` varchar(45) NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','admin1','test@google.com','adminpass','Admin','TestImage','M','2008-07-04','1+1','2'),(2,'delon509','DelonCheung','cdelon509@hotmail.com','509fevawork','User','C:xampphtdocsproject/images/VMTb34pCnz.jpeg','M','2022-09-27','4*4','16'),(3,'Adam','adam0105','adam0105@google.com','adam0105','User','M','','2008-07-04','1+1','2'),(4,'tom0444','Tom','tom0444@google.com','tom0444','User','','M','2008-07-04','1+1','2'),(5,'zeta32','Zeta','zeta32@google.com','123456','User','','M','2008-07-04','1+1','2'),(6,'bobby30','Bobby','bobby30@google.com','bobby30','User','','M','2008-07-04','1+1','2'),(7,'ming123','mingchan','ming123@gmail.com','eie4432','User','C:xampphtdocsproject/images/YgYTGXM09Z.jpeg','M','2022-09-07','My favourite food','fishball'),(8,'ming2022','mingchan1','mingchan@yahoo.com','abcd','User','C:xampphtdocsproject/images/mingchan1.png','M','2022-10-31','My favourite food','fishball'),(9,'jason2022','jasonchan','jasonchan320@gmail.com','abcd','User','C:xampphtdocsproject/images/jasonchan.png','M','2022-10-31','My favourite food','fishball'),(10,'d','d','cdelon509@hotmail.com','d','User','C:xampphtdocsproject/images/d.jpeg','M','2022-11-01','4*4','16'),(11,'testuser01','testuser','testuser@gmail.com','eie4432','User','C:xampphtdocsproject/images/UrqNQyvhO0.jpeg','M','2012-01-02','My favourite food','fishball'),(12,'testuser02','userchan','testuser@yahoo.com.hk','eie4432','User','C:xampphtdocsproject/images/gXvZvfr4Lq.jpeg','M','2001-06-14','My favourite food','fishball');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-11 19:51:04
