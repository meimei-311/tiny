-- MySQL dump 10.13  Distrib 5.5.50, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: wordpress
-- ------------------------------------------------------
-- Server version	5.5.50-0ubuntu0.14.04.1

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
-- Table structure for table `wp_check_result`
--

DROP TABLE IF EXISTS `wp_check_result`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_check_result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `md5` varchar(32) NOT NULL,
  `uploadtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `filename` varchar(60) NOT NULL,
  `hitnum` int(10) unsigned NOT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`md5`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `check-time` (`md5`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_check_result`
--

LOCK TABLES `wp_check_result` WRITE;
/*!40000 ALTER TABLE `wp_check_result` DISABLE KEYS */;
INSERT INTO `wp_check_result` VALUES (8,'0461895c6ae91ab93ae701a26f3d4b78','2016-09-05 10:21:33','404-result.png',0,2),(5,'38d786e8d19ccfea742d1f0560b7b9f9','2016-09-05 09:39:30','com.keji.danti410-1.apk',0,0),(21,'5598c53f29a9a25d4d5bec7c69bf6331','2016-09-06 07:37:35','upload.png',0,0),(19,'7a88acb32b9085fdbc2e9c461600f298','2016-09-06 03:23:41','arrow.png',0,0),(6,'a7b20568bc8af55f9e670ae06b6b20c9','2016-09-05 09:39:48','500_lottery_client_for_Android_1.8.7.10282.apk',0,0),(18,'a8480d5e450b2eeab05cf0f1b8547abc','2016-09-05 10:48:38','2015-02-10_1653.png',0,0),(7,'b73be7d9ae9848af10a146d6db356356','2016-09-05 09:55:18','me.ele.apk',0,0);
/*!40000 ALTER TABLE `wp_check_result` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-09-13  8:53:53
