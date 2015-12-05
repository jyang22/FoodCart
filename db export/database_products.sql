-- MySQL dump 10.13  Distrib 5.6.24, for osx10.8 (x86_64)
--
-- Host: localhost    Database: database
-- ------------------------------------------------------
-- Server version	5.5.42

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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `productId` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(45) DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL,
  `product_desc` varchar(200) DEFAULT NULL,
  `product_image` varchar(55) DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`productId`)
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (100,'crispy chicken',10,'Our cooks hand bread our freshly prepared chicken seven times, juicy bite starts with a crispy, flaky crunch.','CrispyChicken.jpg','noodles'),(101,'spring rolls',12,'Crispy spring rolls filled with silver noodles, black pepper, cabbage and carrot, with a homemade plum sauce','SpringRolls.jpg','noodles'),(102,'Wonton Soup',5,'A simple, light \'Chinese dumpling\' classic.Served with shrimp, chicken, beef, and vegetable.','wonton_soup.jpg','soup'),(103,'Egg Drop Soup',4,'A simple, light \'Chinese dumpling\' classic.Served with shrimp, chicken, beef, and vegetable.','egg-drop-soup.jpg','soup'),(104,'Chicken-Rice',5,'A simple, light \'Chinese dumpling\' classic.Served with shrimp, chicken, beef, and vegetable.','chickenrice.jpeg','soup'),(105,'Hot and Sour',4,'A simple, light \'Chinese dumpling\' classic.Served with shrimp, chicken, beef, and vegetable.','HotSourSp.jpg','soup'),(106,'Chicken Soup',5,'A simple, light \'Chinese dumpling\' classic.Served with shrimp, chicken, beef, and vegetable.','chickensoup.jpg','soup'),(107,'Tamato Soup',4,'A simple, light \'Chinese dumpling\' classic.Served with shrimp, chicken, beef, and vegetable.','tamatosoup.jpg','soup');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-11-23 18:27:14
